<?php
    include ('connection.php');
    /*
    require 'config.php';
    class API{
        function Select(){
            $dbname = new Connect;
            $user = array();
            $data = $dbname->prepare('SELECT * FROM users ORDER BY user_id');
            $data->execute();
            while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
                $user[$OutputData['user_id']] = array(
                    'id' => $OutputData['user_id'],
                    'name' => $OutputData['username']
                );
            }
            return json_encode($user);
        }
    }
    $API = new API;
    header('Content-Ty[e: application/json');
    echo $API->Select();
     */
    //Login
session_start();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sign In</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Links-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <!--
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
        -->
        <style>
            /* signIn.html */
.sign_in{
    width: 100%;
    left: 0;
    right: 0;
    text-align: center;
    padding-top: 5%;
    padding-bottom: 5%;
}
/* Full-width input fields */
.sign_in .signIn_form input[type=text], input[type=password]{
  width: 50%;
  padding: 16px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
.sign_in .signIn_form input[type=text]:focus, input[type=password]:focus{
  background-color: #ddd;
  outline: none;
}
/* sign in form - submit button */
.sign_in .signIn_form input[type=submit]{
    padding: 10px;
    border: none;
    font-size: 16px;
    font-family: serif;
    background-color: #ddd;
    color: #000000;
}
.sign_in .signIn_form input[type=submit]:hover{
    padding: 10px;
    border: none;
    font-size: 16px;
    font-family: serif;
    background-color: #3e8e41;
    color: #ffffff;
}
/* \sign in form - submit button */
/* \signIn.html */
        </style>
    </head>
    
    <body>
        
        <div class="sign_in">
        
        <h1>
            Care Yourself
        </h1>
        
        <br>
        
        <div class="signIn_form">
            <form action="" method="POST">
                <div class="u-form-group u-form-group-1">
                  <label for="email"><b>Email</b></label>
                  <br>
                  <input type="text" id="email" name="email" placeholder="Email">
                  <!--required="required"-->
                  <!--class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-white"-->
                </div>
                <br>
                <div class="u-form-group u-form-group-2">
                  <label for="password"><b>Password</b></label>
                  <br>
                  <input type="password" placeholder="Password" id="password" name="password">
                  <!--class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-white"-->
                </div>
                <br>
                <div class="u-align-center u-form-group u-form-submit">
                  <input type="submit" value="Sign In" name="btn_signIn" id="btn_signIn">
                  <!--class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-radius-5 u-btn-1"-->
                  &nbsp
                  <input type="submit" value="Sign Up" name="signUp" id="signUp" formaction="signUp.php">
                  <!--class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-radius-5 u-btn-1"-->
                </div>
                <br>
                <div>
                    <input type="checkbox" checked="checked"> Remember me
                    <a href="#">Forgot Password?</a>
                </div>
                <!-- <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div> -->
                <!-- <input type="hidden" value="" name="recaptchaResponse"> -->
            </form>
        </div>
        
        </div>
        
        <footer>
            <p>
                <a>Copyright @ 2022</a>
            </p>
        </footer>
        
    </body>
</html>


<?php


$email = "";
$password1 = "";

$error="";

if(isset($_POST['btn_signIn'])){
  
    $email = $_POST['email'];
    $password1 = $_POST['password'];
    
    if(empty($email) || empty($password1)){
        $error = "Empty Email or Password!";
        echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Empty email or password')
                    window.location.href='signIn.php';
                    </SCRIPT>");
    }else if(empty($email) && empty($password1)){
        $error = "Fields are Mandatory";
        echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Empty email and password')
                    window.location.href='signIn.php';
                    </SCRIPT>");
    }else{
        //$result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password = '$password1'");
        $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        
        $numRows = mysqli_num_rows($result);
        
        if ($numRows > 0){
            while($row = mysqli_fetch_array($result)){
                $_SESSION['users']=array(
		'username'=>$row['username'],
		'password'=>$row['password'],
                'role'=>$row['role']);
                
                $role=$_SESSION['users']['role'];
                
                switch($role){
                    case 'user':
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                            window.alert('Login Successful!')
                            window.location.href='index.php';
                            </SCRIPT>");
                        break;
                    case 'admin':
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                            window.alert('Login Successful!')
                            window.location.href='admin_home.php';
                            </SCRIPT>");
                        break;
                }
	 }
         }else{
             echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Login Failed, wrong email or password')
                    window.location.href='signIn.php';
                    </SCRIPT>");
 }
    }
}
?>