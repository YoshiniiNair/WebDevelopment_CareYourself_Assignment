<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
// database connection will be here

// include database and object files
include_once '../config/database.php';
include_once '../object/post.php';
  
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$post = new Post($db);
  
// read products will be here
// query products
$stmt = $post->read();
$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0){
  
    // post array
    $post_arr=array();
    $post_arr["records"]=array();
  
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
  
        $post_item=array(
            "post_id" => $post_id,
            "user_id" => $user_id,
            "post_title" => $post_title,
            "post_content" => $post_content,
        );
  
        array_push($post_arr["records"], $post_item);
    }
  
    // set response code - 200 OK
    http_response_code(200);
  
    // show products data in json format
    echo json_encode($post_arr);
}else{
  
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user no products found
    echo json_encode(
        array("message" => "No posts found.")
    );
}
?>