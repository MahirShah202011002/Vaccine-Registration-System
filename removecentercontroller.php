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
// echo "Connected successfully";
$ID = $_GET['ID'];

$query = " DELETE FROM `vaccinecenters` WHERE ID='$ID' ";

if(mysqli_query($conn, $query)) {
	header('location: removecenter.php');
}
else {
	echo mysqli_error($conn);
}

mysqli_close($conn);
?>