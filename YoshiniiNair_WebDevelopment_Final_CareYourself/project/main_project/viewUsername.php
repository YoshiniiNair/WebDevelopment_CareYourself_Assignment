<?php
include 'connection.php';

session_start();

if(empty($_SESSION['users'])){
 header('location:signIn.php');
}
/*
if($_SESSION['user']['role']=='admin'){
 header('location:admin_home.php');
}
*/
/*
if($_SESSION['users']['username']==''){
 header('location:home.php');
}

 */
?>