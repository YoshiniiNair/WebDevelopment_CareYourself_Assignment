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
    <title>Update Post</title>

    <!-- Stylesheets Start -->
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    
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
    <!--Header End-->
    
    <br>
        
    <div class="Update_Post"> <!--similar layout with add post-->
        <!--Content-->
    <div class="container">
        
        <!--Add Posts Form-->
        <div class="updatePost_form">
            <h1>Update Post</h1>
            
            <form action="" method="POST">
                    
                <input type="hidden" name="post_id" value="<?php echo trim($_GET["post_id"]); ?>"/>
                             
                <label>Title: </label>
                <input type="text" id="post_title" name="post_title" placeholder="Enter Post Title"/>
                
                <br><br>
                
                <label>Content: </label>
                <textarea id="post_content" name="post_content" placeholder="Enter Content"></textarea>
                
                <br><br>
                        
                <input type="submit" id="btn_update" name="btn_update" value="Update"/>
                
                &nbsp;
                
                <input type="button" id="btn_cancel" name="btn_cancel" value="Cancel" onClick="history.go(-1)"/>
                
            </form>
            
        </div>
        
        <br>
        
        <!--Pagination starts-->
        <!--
            <div class="pagination">
                pages: <a href="">1</a>
            </div>
        -->
        <!--pagination ends-->
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

$post_id="";
                if(isset($_POST['btn_update'])){
                    
                    $post_id = $_GET['post_id'];
                    
                    $post_title1 = $_POST['post_title'];
                    $post_content1 = $_POST['post_content'];
                    
                    $sql = "UPADTE posts SET post_title='$post_title1', post_content='$post_content1' WHERE post_id LIKE '%$post_id%'";
                    if(mysqli_query($conn,$sql)){
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Posts updated successfully! ')
                window.location.href='detail.php';
                </SCRIPT>");
 }else{
     echo "<script type='text/javascript'>";
     echo "alert('Post updated Failed!')"; 
     echo "</script>";
 }
 mysqli_close($conn);
 }
 ?>