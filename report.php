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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],

        ["Surat", 4, "blue"],
        // ["bb", 2, "blue"],
        // ["Gold", 19.30, "blue"],
        // ["Platinum", 21.45, "blue"]
// ]);
<?php
        $color = "blue";
 	$conn = mysqli_connect("localhost", "root", "", "vaccineregistration");

		$query = "SELECT center_district_name, count(*) AS counter FROM bookedSlots GROUP BY center_district_name";         
		$result = mysqli_query($conn, $query) or die(mysql_error());
		
		// Print out result
		if(mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_array($result)) {  
			// echo gettype($row['center_district_name'])." ".gettype((int)$row['counter'])."<br>";
			echo "['".$row['center_district_name']."', '".(int)$row['counter']."', '".$color."'],";
		    // echo "There are ". $row['counter'] ." ". $row['center_district_name'] ." slots";   
		    // echo "<br />";  
		}
	}
        ?>
]);      

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        // title: "Density of Precious Metals, in g/cm^3",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
  <style type="text/css">
    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}
.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button5 {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button6 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
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
            <li class="active"><a href="index.php">Home</a></li>            
            <!-- <li class="dropdown"> -->
              <li><a href="adminlogin.php">Admin</a></li>
              <!-- <ul class="dropdown-menu" role="menu">
                <li><a href="course.html">Course Archive</a></li>                
                <li><a href="course-detail.html">Course Detail</a></li>                
              </ul> -->
            <!-- </li>            -->
            <li><a href="report.php">Reports</a></li>
            <!-- <li class="dropdown"> -->
              <li><a href="certificate.php">Certificate</a></li>
              <!-- <ul class="dropdown-menu" role="menu"> -->
                <!-- <li><a href="blog-archive.html">Blog Archive</a></li>                 -->
                <!-- <li><a href="blog-single.html">Blog Single</a></li>                 -->
              <!-- </ul> -->
            <!-- </li>             -->
            <li><a href="contact.php">Contact</a></li>
            <?php
              if(!(isset($_SESSION['username']))) {
                echo "<li><a href='login.php'>Login</a></li>";
                echo "<li><a href='register.php'>Register</a></li>";
              }
              else {
                echo "<li><a href='index.php'>Hi!, ".$_SESSION['username']."</a></li>";
                echo "<li><a href='logout.php'>Logout</a></li>"; 
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
  <!-- End search box -->
  <!-- Start Slider -->
  <!-- Registrations Today -->

  <section id="mu-page-breadcrumb" style="margin-top: 3px;">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Reports</h2>
           <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>            
            <li class="active">Reports</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
  <div style="height:800px;">
	<?php 
		$conn = mysqli_connect("localhost", "root", "", "vaccineregistration");
		$date = date("Y-m-d", strtotime('+1 day'));
		$sql = "SELECT COUNT(*) as total FROM bookedSlots WHERE vaccine_date='$date' ";

		$result = mysqli_query($conn, $sql);
		$data = mysqli_fetch_array($result);
		
		// echo "<div style='display:inline ; width: 100px; height: 100px; padding: 5px; border: 1px solid blue; background-color: yellow;'> Registrations Today: ".$data['total']."</div>";
	    echo "<button class=\"button button1\" style=\"margin-left: 280px; margin-top:50px;\">Registrations Today: " .$data['total']."</button>";
	//Vaccinations Taken Today
		$date = date("Y-m-d");
		$sql = "SELECT COUNT(*) as total FROM bookedSlots WHERE vaccine_date='$date' ";

		$result = mysqli_query($conn, $sql);
		$data = mysqli_fetch_array($result);
		// echo "<div style='display:inline; width: 500px; height: 100px; padding: 5px; border: 1px solid blue; background-color: yellow; margin-left:200px;'>Vaccination Today: ".$data['total']."</div>";
    echo "<button class=\"button button1\" style=\"margin-left: 60px; margin-top:50px;\">Vaccination Today: " .$data['total']."</button>";
	?>
	<!-- Partially and FuLLY Vaccinated today -->
	<?php 
		$conn = mysqli_connect("localhost", "root", "", "vaccineregistration");
		$sql = " SELECT name, COUNT(ID) as total FROM bookedSlots GROUP BY account_name, name";
		$result = mysqli_query($conn, $sql);

		$parital_vaccinated = 0;
		$fully_vaccinated = 0;
		while($row = mysqli_fetch_array($result)) {  
			if($row['total'] == 1) {
				$parital_vaccinated = $parital_vaccinated + 1;
			} else {
				$fully_vaccinated = $fully_vaccinated + 1;
			}
		}
		//echo "<br>";
		//echo "<br>";
		// echo "<div style='display:inline; width: 500px; height: 100px; padding: 5px; border: 1px solid blue; background-color: yellow; margin-left:200px; margin-top:100px;'>Partiallly Vaccinated: ".$parital_vaccinated."</div>";
    echo "<button class=\"button button1\" style=\"margin-left: 60px; margin-top:50px;\">Partially Vaccinated Today: " .$parital_vaccinated."</button>";
		// echo "<div style='display:inline; width: 500px; height: 100px; padding: 5px; border: 1px solid blue; background-color: yellow; margin-left:200px; margin-top:100px;'>Fully Vaccinated: ".$fully_vaccinated."</div>";
    echo "<button class=\"button button1\" style=\"margin-left: 60px; margin-top:50px;\">Fully Vaccinated Today: " .$fully_vaccinated."</button>";
	?>
	
	<!-- Total Registrations(Month) -->
	<?php
	$conn = mysqli_connect("localhost", "root", "", "vaccineregistration");
		$sql = "SELECT count(ID) as cnt, MONTH(vaccine_date) as mnt FROM bookedSlots
GROUP BY MONTH(vaccine_date)";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {  
		//	echo "<br> ".$row['cnt']. " ".$row['mnt'];
		}

	?>
	
	<!-- Vaccination by District -->
	<?php

		$conn = mysqli_connect("localhost", "root", "", "vaccineregistration");
		$query = "SELECT center_district_name, count(*) AS counter FROM bookedSlots GROUP BY center_district_name";         
		$result = mysqli_query($conn, $query) or die(mysql_error());
		echo "<br>";
		// Print out result
		while($row = mysqli_fetch_array($result)) {  
		   // echo "There are ". $row['counter'] ." ". $row['center_district_name'] ." slots";   
		    echo "<br />";  
		}
	?>
	<!-- No of doses vs date  -->
  <!-- <button style="margin-top: 50px;" class="button5 button6">Doses V/S Date</button> -->
	<div>
	<iframe src="report2.php" height="400" width="600" title="Iframe Example" style="margin-left: 800px; " frameBorder="0" scrolling="no" ></iframe>
  <p style="margin-left: 400px;">Doses VS District</p>
	</div>
	
	<!-- Doses Vs district -->
  <!-- <button style="margin-top: -50px; margin-left: 140px;" class="button5 button6">Doses V/S District</button> -->
	<div style="margin-top:-430px; margin-left: 250px;">
	<div id="columnchart_values" style="width: 600px; height: 400px;"></div>
  <p style="margin-left: 850px;">Doses VS Date</p>
    </div>
	
</div>

    <!-- Start single slider item -->
    
  <!-- End from blog -->
<br>
<br>
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


