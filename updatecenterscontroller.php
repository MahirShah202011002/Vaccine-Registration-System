<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"vaccineregistration");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$ID = $_GET['ID'];
$vaccine_slots = $_GET['slotsavailable'];
// echo "Connected successfully";

$query = " UPDATE vaccinecenters SET slots_available='$vaccine_slots' WHERE ID='$ID' ";

if(mysqli_query($conn, $query)) {
	echo "<script type='text/javascript'>location.href = 'http://localhost/VaccineRegistration/removecenter.php';</script>";
}


?>