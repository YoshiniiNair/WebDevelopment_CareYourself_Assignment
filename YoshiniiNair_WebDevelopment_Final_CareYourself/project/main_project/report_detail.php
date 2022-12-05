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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://s.pageclip.co/v1/pageclip.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://s.pageclip.co/v1/pageclip.css" media="screen"/>
    
    
    <!-- Website Title -->
    <title>Report Detail</title>

    <!-- Stylesheets Start -->
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    
    <!-- Stylesheets End -->
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    
    <style>
        /*3 dots option button*/
.showLeft{
  background-color: #eef3f9 !important;
  border: none;
  text-shadow: white;
  color: black;
  padding: 10px;
}
.icons li {
  background: none repeat scroll 0 0 black;
  height: 3px;
  width: 3px;
  line-height: 0;
  list-style: none outside none;
  margin-right: 15px;
  margin-top: 3px;
  vertical-align: top;
  border-radius: 50%;
  pointer-events: none;
}
.option_dropBtn {
  background-color: #4caf50;
  color: white;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
.option_dropBtn:hover,
.option_dropBtn:focus {
  background-color: #3e8e41;
}
.option_dropdown {
  position: absolute;
  display: inline-block;
  right: 0.4em;
}
.option_dropContent {
  display: none;
  position: absolute;
  right: 0px; 
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.option_dropContent a {
  color: black;
  padding: 10px 10px;
  text-decoration: none;
  display: block;
}
.option_dropdown a:hover {
  background-color: #f1f1f1;
}
.show {
  display: block;
}
    </style>
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
                    <a href="admin_home.php">
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
                        <a href="admin_home.php">
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
                            <a href="reports.php">Manage Reports</a>
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
        
        <div class="posts-details">
            <form action="" method="POST">
                <h2>Report Detail</h2>
        
        <div class="container">
            <!--Navigation
            <div class="navigate">
                <span><a href="posts.html">Posts</a> >> <a href="detail.html">Post Detail</a></span>
            </div>
            -->

        <!--Display posts table-->
        <div class="posts-table">
            
                <?php
                echo '<input type="hidden" name="report_id" value="' . trim($_GET["report_id"]) . '"/>';
                
                //$post_id = $_GET['post_id'];
                //$sql = "SELECT * FROM posts INNER JOIN users on posts.user_id=users.user_id";
                $report_id="";
                $report_id=$_GET['report_id'];
                $sql = "SELECT * FROM report WHERE report_id = '$report_id'";
                $result = $conn->query($sql);
	
	if ($result)
	{
		while($row = $result->fetch_assoc())
		{ 
                    echo '<div class="author">';
                    echo '<div class="content">';
                    echo '<label class="viewPost">' . $row['report_id'] . '</label></div>';
                    echo '</div>';
                    
                    echo '<div class="content">';
                    echo '<div class="viewPost"><label class="viewPost">' . $row['subject'] . '</label></div>';
                    echo '</div>';
                    
                    echo '<div class="content">';
                    echo '<div class="viewPost"><label class="viewPost"> ' . $row['reason'] . '</label></div>';
                    echo '</div>';
                    
                    echo '<div class="content">';
                    echo '<div class="viewPost"><label class="viewPost"> ' . $row['status'] . '</label></div>';
                    echo '</div>';
                    
                    echo '<br>';
                    echo '<hr>';
                ?>
                
            <div>
                <input type="submit" id="btn_agree" name="btn_agree" value="Agree Report Submission" formaction="agree.php"/>
                <input type="button" id="btn_cancel" name="btn_cancel" value="Cancel" onClick="history.go(-1)"/>
            </div>
        
<?php
                }
        }
        mysqli_close($conn);
?>
        </div>
        
    </div>
        </form>
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