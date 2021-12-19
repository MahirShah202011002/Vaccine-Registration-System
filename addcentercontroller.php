<?php
$centerName = $_POST['centerName'];
$centerAddress = $_POST['centerAddress'];
$centerPin = $_POST['centerPin'];
$centerDistrict = $_POST['centerDistrict'];
$vaccineSlots = $_POST['vaccineSlots'];


$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"vaccineregistration");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

$query = " INSERT INTO `vaccinecenters`(`center_name`, `center_address`, `center_pin`, `center_district_name`, `slots_available`) VALUES ('$centerName', '$centerAddress', '$centerPin', 
'$centerDistrict', '$vaccineSlots')";
if(mysqli_query($conn, $query)) {
	header('location: removecenter.php');
}
else {
	echo mysqli_error($conn);
}

mysqli_close($conn);
?>