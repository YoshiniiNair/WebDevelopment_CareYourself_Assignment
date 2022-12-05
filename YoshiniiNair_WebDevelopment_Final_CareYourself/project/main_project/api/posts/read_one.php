<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
  
// include database and object files
include_once '../config/database.php';
include_once '../object/post.php';
  
// get database connection
$database = new Database();
$db = $database->getConnection();
  
// prepare product object
$post = new Post($db);
  
// set ID property of record to read
$post->post_id = isset($_GET['post_id']) ? $_GET['post_id'] : die();
  
// read the details of product to be edited
$post->readOne();
  
if($post->post_title!=null){
    // create array
    $post_arr = array(
        "post_id" =>  $post->post_id,
        "post_title" => $post->post_title,
        "post_content" => $post->post_content,
        "user_id" => $post->user_id
  
    );
  
    // set response code - 200 OK
    http_response_code(200);
  
    // make it json format
    echo json_encode($post_arr);
}
  
else{
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user product does not exist
    echo json_encode(array("message" => "Post does not exist."));
}
?>