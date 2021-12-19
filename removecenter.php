<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>KDAH | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="kdah.png" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
      div.a {
        height: 250px;
        margin-top: 50px;
      }
      table.a {
        align: center;
        width: 50%;
        margin-left: 350px;
        margin-top: 150px;
      }

  input[type=number], select {
  width: 100%;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  border: none;
  position: relative;
  border-radius: 4px;
  cursor: pointer;
  align:center;
  margin-left: 50px;
}


#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
  margin-left: 165px;
  margin-top: 240px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

    </style>
  </head>
  <body> 

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <i class="fa fa-envelope"></i>
                    <span>info@markups.io</span>
                  </div>
                  <div class="mu-top-phone">
                    <i class="fa fa-phone"></i>
                    <span>(568) 986 652</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  <nav>
                    <ul class="mu-top-social-nav">
                      <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                      <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                      <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                      <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                      <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header  -->
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="index.php"><span><img src="kdah.png" width="55px">KDAH</span></a>
          <!-- <a class="navbar-brand" href="index.php"><i class="fa fa-university"></i><span>KDAH</span></a> -->
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.php"><img src="kdah.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="adminindex.php">Home</a></li>            
            <!-- <li class="dropdown"> -->
              <li><a href="adminlogin.php">Admin</a></li>
              <!-- <ul class="dropdown-menu" role="menu">
                <li><a href="course.html">Course Archive</a></li>                
                <li><a href="course-detail.html">Course Detail</a></li>                
              </ul> -->
            <!-- </li>            -->
            <li><a href="report.php">Reports</a></li>
            <!-- <li class="dropdown"> -->
              <!-- <li><a href="certificate.php">Certificate</a></li> -->
              <!-- <ul class="dropdown-menu" role="menu"> -->
                <!-- <li><a href="blog-archive.html">Blog Archive</a></li>                 -->
                <!-- <li><a href="blog-single.html">Blog Single</a></li>                 -->
              <!-- </ul> -->
            <!-- </li>             -->
            <li><a href="contact.php">Contact</a></li>
             <?php
              if(!(isset($_SESSION['adminusername']))) {
                echo "<li><a href='adminlogin.php'>Login</a></li>";
                echo "<li><a href='adminregister.php'>Register</a></li>";
              }
              else {
                echo "<li><a href='index.php'>Hi!, ".$_SESSION['adminusername']."</a></li>";
                echo "<li><a href='adminlogout.php'>Logout</a></li>"; 
              }
            ?>           
            <!-- <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li> -->
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
              <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <!-- End search box -->

  <section id="mu-page-breadcrumb" style="margin-top: 3px;">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Remove Center</h2>
           <ol class="breadcrumb">
            <li><a href="adminindex.php">Home</a></li>            
            <li class="active">Remove Center</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
<br>
	<div> 
	<?php		
		$servername = "localhost";
		$username = "root";
		$password = "";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password,"vaccineregistration");
		$query = " SELECT * FROM `vaccinecenters`";
		$result = mysqli_query($conn, $query);

		if(mysqli_num_rows($result)>0)
		{
			echo "<table id='customers'>";
            
            echo "<tr>";
              echo "<th>Center Pin</th>";
              echo "<th>Center Name</th>";
              echo "<th>Center Address</th>";
              echo "<th>Center District</th>";
              echo "<th>Slots Available</th>";
              echo "<th>Remove Center</th>";
            echo  "</tr>";
		     while($row = $result->fetch_assoc()) {
		     	echo "<tr>";
		     		echo "<td>";
		     		echo $row['center_pin'];
		     		echo "</td>";
		     		echo "<td>";
		     		echo $row['center_name'];
		     		echo "</td>";
		     		echo "<td>";
		     		echo $row['center_address'];
		     		echo "</td>";
		     		echo "<td>";
		     		echo $row['center_district_name'];
		     		echo "</td>";
		     		echo "<td>";
		     		echo $row['slots_available'];
		     		echo "</td>";
		     		echo "<td>";
		     			echo "<form action='removecentercontroller.php'>";
		     			echo "<input type='hidden' name='ID' value=".$row["ID"].">";
		        		echo "<button>Remove Center</button>";
		        		echo "</form>";
		     		echo "</td>";
		     	echo "</tr>";

		        // echo "<br>". "Center Name: ". $row["center_name"]. 
		        // " Center Address: ".$row["center_address"].
		        // " Center_pin: ".$row["center_pin"].
		        // " Center District: ".$row['center_district_name'].
		        // " Slots Available: ".$row['slots_available'];
		          // echo "<form action='removecentercontroller.php'>";
		        //   	echo "<input type='hidden' name='ID' value=".$row["ID"].">";
		        // 	echo "<button>Remove Center</button>";
		        // echo "</form>";
		    }
		    echo "</table>";
		}
	?>

</div>
<br>
  <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="">Features</a></li>
                  <li><a href="">Course</a></li>
                  <li><a href="">Event</a></li>
                  <li><a href="">Sitemap</a></li>
                  <li><a href="">Term Of Use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Student Help</h4>
                <ul>
                  <li><a href="">Get Started</a></li>
                  <li><a href="#">My Questions</a></li>
                  <li><a href="">Download Files</a></li>
                  <li><a href="">Latest Course</a></li>
                  <li><a href="">Academic News</a></li>                  
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>News letter</h4>
                <p>Get latest update, news & academic offers</p>
                <form class="mu-subscribe-form">
                  <input type="email" placeholder="Type your Email">
                  <button class="mu-subscribe-btn" type="submit">Subscribe!</button>
                </form>               
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                  <p>P.O. Box 320, Ross, California 9495, USA</p>
                  <p>Phone: (415) 453-1568 </p>
                  <p>Website: www.markups.io</p>
                  <p>Email: info@markups.io</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; All Right Reserved. Designed by <a href="http://www.markups.io/" rel="nofollow">MarkUps.io</a></p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  
  
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>

