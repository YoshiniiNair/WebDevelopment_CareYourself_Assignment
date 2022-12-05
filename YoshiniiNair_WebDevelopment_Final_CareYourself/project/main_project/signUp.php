<?php
include 'connection.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sign Up</title>
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
            /* signUp.html */
.sign_up{
    width: 100%;
    left: 0;
    right: 0;
    text-align: center;
    padding-top: 5%;
    padding-bottom: 5%;
}
/* Full-width input fields */
.sign_up .signUp_form input[type=text], input[type=password]{
  width: 50%;
  padding: 16px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
.sign_up .signUp_form input[type=text]:focus, input[type=password]:focus{
  background-color: #ddd;
  outline: none;
}
/* sign up form - submit button */
.sign_up .signUp_form input[type=submit]{
    padding: 10px;
    border: none;
    font-size: 16px;
    font-family: serif;
    background-color: #ddd;
    color: #000000;
}
.sign_up .signUp_form input[type=submit]:hover{
    padding: 10px;
    border: none;
    font-size: 16px;
    font-family: serif;
    background-color: #3e8e41;
    color: #ffffff;
}
/* \sign up form - submit button */
/* \signUp.html */
        </style>
    </head>
    
    <body>
        
        <div class="sign_up">
            <h1>
                Sign Up
            </h1>
        
            <br>
        
            <div class="signUp_form">
                <form action="" method="POST">
                    <div class="u-form-group u-form-group-1">
                        <label for="username"><b>Username</b></label>
                        <br>
                        <input type="text" id="username" name="username" placeholder="Username">
                        <!--required="required"-->
                        <!--class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-white"-->
                    </div>
                    <br>
                    <div class="u-form-group u-form-group-2">
                        <label for="email"><b>Email</b></label>
                        <br>
                        <input type="text" id="email" name="email" placeholder="Email">
                        <!--class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-white"-->
                    </div>
                    <br>
                    <div class="u-form-group u-form-group-2">
                        <label for="aboutMe"><b>About Me</b></label>
                        <br>
                        <input type="text" id="aboutMe" name="aboutMe" placeholder="About Me">
                        <!--class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-white"-->
                    </div>
                    <br>
                    <div class="u-form-group u-form-group-3">
                        <label for="password"><b>Password</b></label>
                        <br>
                        <input type="password" id="password" name="password" placeholder="Password">
                        <!--class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-white"-->
                    </div>
                    <br>
                    <div class="u-form-group u-form-group-4">
                        <label for="c_password"><b>Confirm Password</b></label>
                        <br>
                        <input type="password" id="c_password" name="c_password" placeholder="Confirm Password">
                        <!--class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-white"-->
                    </div>
                    <br>
                    
                    <!--
                    <div class="u-align-center u-form-group u-form-submit">
                        <input type="checkbox" checked="checked"> Sign In as anonymous account?
                    </div>
                    -->
                    
                    <!--
                    <script>
                        function (){
                            app.get('/',
  // Authenticate using HTTP Basic credentials, with session support disabled,
  // and allow anonymous requests.
  passport.authenticate(['basic', 'anonymous'], { session: false }),
  function(req, res){
    if (req.users) {
      res.json({ username: req.users.username, email: req.users.email });
    } else {
      res.json({ anonymous: true });
    }
  })
            }
                    </script>
                    -->
                    <br>
                    <div>
                        <label>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</label>
                    </div>
                    <br>
                    <div class="u-align-center u-form-group u-form-submit">
                        <input type="submit" value="Create Account" id="btn_signUp" name="btn_signUp">
                        <!--class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-radius-5 u-btn-1"-->
                    </div>
                    <br>
                    <div class="container signin">
                        <label>Already have an account? <a href="signIn.php">Sign in</a>.</label>
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

$username = "";
$email = "";
$aboutMe = "";
$password1 = "";
$c_password = "";

$error = array();

if(isset($_POST['btn_signUp'])){
     
    $username = $_POST['username'];
    $email = $_POST['email'];
    $aboutMe = $_POST['aboutMe'];
    $password1 = $_POST['password'];
    $c_password = $_POST['c_password'];
     
    if(empty($username) || empty($email) || empty($aboutMe) || empty($password1) || empty($c_password)){
        array_push($error, "Please fill in the required field");
        echo "<script type='text/javascript'>";
        echo "alert('Please fill in the required field!')"; 
        echo "</script>";
    }else if(empty($email) && empty($password1)){
        array_push($error, "Fields are Mandatory");
        echo "<script type='text/javascript'>";
        echo "alert('Fields are Mandatory')"; 
        echo "</script>";
    }else if($password1 != $c_password){;
        array_push($error, "The two passwords do not match");
        echo "<script type='text/javascript'>";
        echo "alert('The two passwords do not match')"; 
        echo "</script>";
    }else{
        $username = $_POST['username'];
        $email = $_POST['email'];
        $aboutMe = $_POST['aboutMe'];
        $password1 = $_POST['password'];
        $c_password = $_POST['c_password'];
        
        $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($conn, $user_check_query);
        
        $user = mysqli_fetch_assoc($result);
        
        if ($user) { 
            if ($user['username'] === $username) {
                $error = "Username already existed";
            }
            if ($user['email'] === $email) { //if had email
                $error = "Email already existed";
            }
        }
        
        if (count($error) == 0) {
            $password = password_hash($password1, PASSWORD_DEFAULT);
            
            if($_POST["username"] == "Admin" || $_POST["username"] == "admin") {
                $query = "INSERT INTO users(username, email, aboutMe, password, role) VALUES('$username', '$email', '$aboutMe', '$password', 'admin')";
                mysqli_query($conn, $query);
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Succesfully Registered!')
                    window.location.href='signIn.php';
                    </SCRIPT>");
            }else{
                $query = "INSERT INTO users(username, email, aboutMe, password, role) VALUES('$username', '$email', '$aboutMe', '$password', 'user')";
                mysqli_query($conn, $query);
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Succesfully Registered!')
                    window.location.href='signIn.php';
                    </SCRIPT>");
            }
        }else{
            echo "<script type='text/javascript'>";
     echo "alert('Registered Failed!')"; 
     echo "</script>";
        }
        
    }
    
 }
?>