<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],

        ["", 0, ""],
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
</head>
<body>
	<!-- Registrations Today -->
	<?php 
		$conn = mysqli_connect("localhost", "root", "", "vaccineregistration");
		$date = date("Y-m-d", strtotime('+1 day'));
		$sql = "SELECT COUNT(*) as total FROM bookedSlots WHERE vaccine_date='$date' ";

		$result = mysqli_query($conn, $sql);
		$data = mysqli_fetch_array($result);
		echo "Registrations Today: ".$data['total'];
	
	//Vaccinations Taken Today
		$date = date("Y-m-d");
		$sql = "SELECT COUNT(*) as total FROM bookedSlots WHERE vaccine_date='$date' ";

		$result = mysqli_query($conn, $sql);
		$data = mysqli_fetch_array($result);
		echo "<br>Vaccination Today: ".$data['total'];
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
		echo "<br>Partiallly Vaccinated: ".$parital_vaccinated."<br>";
		echo "Fully Vaccinated: ".$fully_vaccinated."<br>";
	?>
	
	<!-- Total Registrations(Month) -->
	<?php
	$conn = mysqli_connect("localhost", "root", "", "vaccineregistration");
		$sql = "SELECT count(ID) as cnt, MONTH(vaccine_date) as mnt FROM bookedSlots
GROUP BY MONTH(vaccine_date)";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {  
			echo "<br> ".$row['cnt']. " ".$row['mnt'];
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
		    echo "There are ". $row['counter'] ." ". $row['center_district_name'] ." slots";   
		    echo "<br />";  
		}
	?>
	<!-- No of doses vs date  -->
	<div>
	<iframe src="report2.php" height="400" width="600" title="Iframe Example" style="margin-left: 700px; margin-top: -50px;"></iframe>
	</div>
	
	<!-- Doses Vs district -->
	<div id="columnchart_values" style="width: 900px; height: 300px; float:left;"></div>

	
	

</body>
</html>