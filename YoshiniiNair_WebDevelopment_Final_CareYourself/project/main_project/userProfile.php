<?php
include 'connection.php';
include 'viewUsername.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en" xml:lang="en">
    
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    
    <!-- Responsive Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:image" content="images/image-media-3.jpg" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <!-- favicon & bookmark -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/bookmark.png" type="image/x-icon" />
    <link rel="shortcut icon" href="images/titlebg.png" type="image/x-icon" />
    
    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://s.pageclip.co/v1/pageclip.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://s.pageclip.co/v1/pageclip.css" media="screen"/>
    
    <!-- Website Title -->
    <title>User Profile</title>

    <!-- Stylesheets Start -->
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    
    <!-- Stylesheets End -->
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
    <!--header section-->
    <header><!--class="u-clearfix u-header u-header" id="sec-cb5a"-->
        <div class="container">
            <div class="row">
                
                <!--Navbar-->
            <div class="navbar">
            <div class="navbar-header">
                <div class="col-sm-6 col-md-3 logo navbar-logo">
                    <a href="index.php">
                        Care Yourself
                    </a>
                </div>
                
                <div class="navbar-navigation">
                    
                    <!--show username
                    <label class="navbar-username">
                        <?php echo $_SESSION['users']['username'];?>
                    </label>
                    -->
                    
                    <div class="btn_home">
                        <!--home button-->
                        <a href="index.php">
                            Home
                        </a>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                            </svg>
                            <!--<span class="badge">3</span>-->
                        </button>
                        <div class="dropdown-content">
                            <a href="#">User1 mention you in a commend</a><!--class="dropdown-item"-->
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                            <!--<i class="bi bi-person"></i>-->
                        </button>
                        <div class="dropdown-content">
                            <a href="userProfile.php">Profile</a><!--class="dropdown-item"-->
                            <a href="posts.php">Posts</a>
                            <a href="signOut.php">Sign Out</a>
                        </div>
                    </div>
                </div>
                </div>
                
            </div>
            <!--/Navbar-->
            </div>
        </div>
            
        </header>
        
  <div class="user-profile">
    
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" >
        <!--style="min-height: 600px; background-image: url(); background-size: cover; background-position: center top;"-->
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1>Hello <?php echo $_SESSION['users']['username'];?> </h1>
            <!--
            <p class="text-white mt-0 mb-5">This is users profile page.</p>
            <a href="#!" class="btn btn-info">Edit profile</a>
            -->
          </div>
        </div>
      </div>
    </div>
                  
              <?php
                $username="";
                //$user_id = "";

        $username1 = $_SESSION['users']['username'];
        //$user_id = $_GET['user_id'];
	$sql1 = "SELECT * FROM users WHERE username LIKE '$username1'";
	$result1 = $conn->query($sql1);
        
        if ($result1->num_rows > 0)
	{
		while($row = $result1->fetch_assoc())
                {
                ?>
              <div class="card-body">
              <form action="" method="POST">
                  <h3 class="heading-small text-muted mb-4">User information</h3>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label" for="username">Username: </label>
                                <input type="text" id="username" name="username" class="form-control form-control-alternative" placeholder="Username" value="<?php echo $row['username'];?>"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="email">Email address: </label>
                                <input type="email" id="email" name="email" class="form-control form-control-alternative" placeholder="janedoe@example.com" value="<?php echo $row['email'];?>"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label" for="password">Password: </label>
                                <input type="password" id="password" name="password" class="form-control form-control-alternative" placeholder="Password" value="<?php echo $row['password'];?>"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label" for="c_password">Confirm Password: </label>
                                <input type="password" id="c_password" name="c_password" class="form-control form-control-alternative" placeholder="Re-enter password" value="<?php echo $row['password'];?>">
                            </div>
                        </div>
                  </div>
                    
                    <!--
                  <div class="row"></div>
                    -->
                    
                </div>
                
                <hr class="my-4">
                
                <!-- Description -->
                <h3 class="heading-small text-muted mb-4">About me</h3>
                <div class="pl-lg-4">
                    <div class="form-group focused">
                        <!--<label>About Me</label>-->
                        <textarea id="aboutMe" name="aboutMe" rows="4" class="form-control form-control-alternative" placeholder="A few words about you ..."><?php echo $row['aboutMe'];?></textarea>
                  </div>  
                </div>
                <?php
                }
        }
                ?>
                
                <br><br>
                
                <input type="submit" id="btn_update" name="btn_update" value="Update"/>
                
                &nbsp;
                
                <input type="button" id="btn_cancel" name="btn_cancel" value="Cancel" onClick="history.go(-1)"/>
            </form>
            </div>
          </div>
        
        <footer>
            <div>
                <p>
                    <a>&copy; Copyright @ 2022</a>
                </p>
            </div>
        </footer>
        
</body>
</html>


<?php
//$user_id="";
    if(isset($_POST['btn_update']))
{
        //$user_id = $_GET['user_id'];
	$username = $_POST['username'];
        $email = $_POST['email'];
        $password1 = $_POST['password'];
        //$password2 = $_POST['c_password'];
        $aboutMe = $_POST['aboutMe'];
        
	$sql = "UPDATE users SET username = '$username', email = '$email', password='$password1', aboutMe='$aboutMe'  WHERE username = '$username1'";
	//$result = $conn->query($sql);
	
	if(mysqli_query($conn,$sql)){
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Profile updated successfully! Please re-login to the system again')
                window.location.href='signIn.php';
                </SCRIPT>");
 }else{
     echo "<script type='text/javascript'>";
     echo "alert('Profile updated Failed!')"; 
     echo "</script>";
 }
 mysqli_close($conn);
}

?>
