<?php
//require 'config.php';
    $servername = 'localhost';  
    $username = 'root';  
    $password = '';
    $dbname = 'careyourself_test'; 
    
    //create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //$conn = mysqli_connect($host, $user, $password, $db_name, $port, $socket);
    
    if(mysqli_connect_errno()){
        die('Failed to connect with MySQL: '. mysqli_connect_error());  
    }
?> 