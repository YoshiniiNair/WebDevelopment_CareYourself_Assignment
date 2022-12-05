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
    <title>Admin Home Page</title>

    <!-- Stylesheets Start -->
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Stylesheets End -->
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    
    <style>
        .posts .addPost input[type=submit]{
    position: fixed;
    bottom: 1rem;
    border: none;
    border-radius: 30px;
    background-color: #0b4f34;
    color: #fff;
    z-index: 10000;
    box-shadow: 0 0 50px 0 rgba(0,0,0,.4);
    padding: 1rem 2rem;
    margin: 1rem 0;
    right: 1rem;
    font-size: 1rem;
    cursor: pointer;
}
.posts .addPost input[type=submit]:hover{
    background-color: #fff;
    color: #000;
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
    
    <br>
        
    <div class="posts">
        <form action="" method="POST">
            <h2>Reports</h2>
    
        <!--Content-->
    <div class="container">
        <!--Navigation
        <div class="navigate">
            <span><a href="posts.html">Posts</a></span>
        </div>
        -->
        
        <!--Display posts table-->
        <div class="posts-table">
            <div class="table-head">
                <div class="status">Report ID</div>
                <div class="subjects">Subjects</div>
                <div class="subjects">Reason</div>
                <div class="status">Status</div>
                <!--
                <div class="replies">Replies/Views</div>
                <div class="last-reply">Last Reply</div>
                <div class="edit"></div>
                -->
            </div>
            
            <?php
            //$user_id = $_SESSION['users']['user_id'];
            $sql = "SELECT * FROM report";
	$result = $conn->query($sql);
        
        if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
                {
            ?>
            <!--starts here-->
            <div class="table-row">
                <div class="status">
                    <!--<i class="fa fa-fire"></i>-->
                    <?php echo $row['report_id'];?>
                    <br>
                </div>
                <div class="subjects">
                    <?php echo $row['subject'];?>
                    <br>
                    <!--<span>Started by <b><a href="">User1</a></b> .</span>-->
                </div>
                <div class="subjects">
                    <?php echo $row['reason'];?>
                    <br>
                    <!--<span>Started by <b><a href="">User1</a></b> .</span>-->
                </div>
                <div class="status">
                    <?php echo '<a href="report_detail.php?report_id=' . $row['report_id'] . '">' . $row['status'] . '</a>';?>
                    <br>
                </div>
            </div>
            
            <?php
                }
        }
            ?>
            
            <br>
            <!--ended here-->
            
        </div>
        
        <br>
        
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