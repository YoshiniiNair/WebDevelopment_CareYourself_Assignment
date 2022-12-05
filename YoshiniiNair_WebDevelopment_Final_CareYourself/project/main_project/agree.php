<html>
    <input type="hidden" name="report_id" value="<?php echo trim($_GET["report_id"]); ?>"/>
</html>

<?php

include 'connection.php';
include 'viewUsername.php';

//echo '<input type="hidden" name="report_id" value="' . trim($_GET["report_id"]) . '"/>';

$report_id ="";

if(isset($_POST['btn_agree'])){
    
$report_id = $_GET['report_id'];

$sql = "UPDATE report SET status='Submission Agreed' WHERE report_id='$report_id'";

if (mysqli_query($conn,$sql)){
    $post_id = $_GET['post_id'];
    $sql1 = "DELETE FROM posts WHERE post_id = 'post_id'";
    //$sql1 = "DELETE FROM posts INNER JOIN report on posts.post_id=report.post_id";
    mysqli_query($conn,$sql1);
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Report Update Successful!')
        window.location.href='reports.php';
        </SCRIPT>");
}else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Error!')
        window.location.href='report_detail.php';
        </SCRIPT>");
}
mysqli_close($conn);
}

?>