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
    <title>CareYourself</title>

    <!-- Stylesheets Start -->
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    
    <!-- Stylesheets End -->
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    
    <style>
/*3 dots option button*/
.showLeft{
  background-color: none !important;
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
  /*
  margin-left: 15px;
  */
  margin-top: 3px;
  vertical-align: top;
  border-radius: 10%;
  pointer-events: none;
}
.option_dropBtn {
    /*
  background-color: #4caf50;
  */
  color: white;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
.option_dropBtn:hover,
.option_dropBtn:focus {
    background-color: #eef3f9;
}
.option_dropdown {
    /*
  position: absolute;
  right: 0.4em;
  */
  display: inline-block;
}
.option_dropContent {
  display: none;
  position: absolute;
  /*
  right: 0px; 
  */
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 8px 0px rgba(0,0,0,0.2);
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
            
            <!--header - banner image-->
            <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="image/mental-health.jpg" style="width:100%">
    <div class="text">Welcome to Our Community</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="image/Mental-Health-Awareness.jpg" style="width:100%">
    <div class="text">Welcome to Our Community</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="image/matter.jpg" style="width:100%">
    <div class="text">Welcome to Our Community</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
    let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
            <!--/header image-->
                
            </div>
        </div>
        
        </header>
    <!--Header End-->

    <!-- Content Section Start -->
        <div class="mid-container">
            
            <!-- Post Section Start -->
            <div class="hero-main platinum-layout white-sec" id="about">
                
                <!--Post section - card view-->
                <!--
                <div class="card">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone"/>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p
                        <a href="#!" class="btn btn-primary">Button</a>
                    </div>
                </div>
                
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                -->
                <div class="cards">
                    <?php
               // $post_title="";
                //$user_id = "";

       //$post_title = $_SESSION['posts']['post_title'];
        //$user_id = $_GET['user_id'];
	$sql = "SELECT * FROM posts";
	$result = $conn->query($sql);
        
        if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
                {
                    /*
                    echo "<label>User ID: </label>";
                    echo "<input type='text' id='user_id' name='user_id' value='" . $row['user_id'] . "'/>";
                    echo "<br><br>";
                     */
                ?>
                    <article class="card">
                        <div class="card-title">
                            <?php 
                                echo '<h2><a href="detail.php?post_id=' . $row['post_id'] . '" style="text-decoration: none;">' . $row['post_title'] . '</a></h2>';
                            ?>
                        <!-- three dot menu -->
                        <div class="option_dropdown">
                            <!-- three dots -->
                            <ul class="option_dropBtn icons btn-right showLeft" onclick="showDropdown()">
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <!-- menu -->
                            <div id="myDropdown" class="option_dropContent">
                                <?php echo '<a href="submitReport.php?post_id=' . $row['post_id'] . '" id="btn_reportPost" name="btn_reportPost">Report</a>';?>
                                <!--<a href="submitReport.php?post_id=" id="btn_reportPost" name="btn_reportPost">Report</a>-->
                                
                            </div>
                            <script>
  function changeLanguage(language) {
  var element = document.getElementById("url");
  element.value = language;
  element.innerHTML = language;
}

function showDropdown() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches(".option_dropBtn")) {
    var dropdowns = document.getElementsByClassName("option_dropContes");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};
</script>
                        </div>
                        </div>
                        <img src="https://picsum.photos/200" alt="random photos">
                        <div class="content">
                            <?php
                                echo '<p>Description Content: ' . $row['post_content'] . '</p>';
                            ?>
                        </div>
                        <!--
                        <footer>
                            I have a footer!
                        </footer>
                        -->
                    </article>
                    
                    <?php
}
                }

$conn->close();
?>
                </div>
                <!--/Post section - card view-->
                
            </div>
            <!--Post Section Ended-->
            
        </div>
    <!--/Content Section Ended-->
    
    <!--footer section-->
    <footer>
        <div>
            <p>
                <a>&copy; Copyright @ 2022</a>
            </p>
        </div>
    </footer>
    <!--/footer section-->
              
    </body>
</html>
