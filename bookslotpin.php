<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"vaccineregistration");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully"."<br>";

$pin=$_GET['pin'];
$centername = $_GET['centername'];
$centeraddress = $_GET['centeraddress'];
$slotsavailable = (int)$_GET['slotsavailable'];
$centerdistrictname = $_GET['centerdistrictname'];
// echo $slotsavail/able."<br>";
$slotsavailable = $slotsavailable - 1;
// echo $slotsavailable."<br>";
// echo gettype($slotsavailable)."<br>";
// echo $pin." ".$centeraddress." ".$centername." ".$slotsavailable;

// $query = " UPDATE  ";
// $sql = "UPDATE `searchbypin` SET SlotsAvailable=".$slotsavailable." WHERE PIN=".$pin." and CenterName=".$centername;
$sql = "UPDATE `vaccinecenters` SET `slots_available`='$slotsavailable' WHERE `center_pin`='$pin' and `center_name`='$centername' ";
// echo $sql;
$result=$conn->query($sql);


$account_name = $_SESSION['username'];
$name = $_SESSION['name'];

$sql = "SELECT * FROM `members` WHERE name='$account_name' AND member_name='$name' ";
$result = mysqli_query($conn, $sql);
// echo $sql;
// echo nysqli_num_row($result);
$row1 = mysqli_fetch_array($result);
$proof_type = $row1['Proof_type'];
$proof_no = $row1['Proof_ID_No'];

$tomorrow = date("Y-m-d", strtotime("+1 day"));
$second_vaccine = date("Y-m-d", strtotime("+5 day"));

$sql = "INSERT INTO `bookedSlots` (account_name, name, center_name, center_address, center_pin, center_district_name, vaccine_date, second_vaccine_date, Proof_type, Proof_ID_no) VALUES 
	('$account_name', '$name', '$centername', '$centeraddress', '$pin', '$centerdistrictname', 
	'$tomorrow', '$second_vaccine', '$proof_type', '$proof_no') ";

$result = mysqli_query($conn, $sql);
header("location: send_email.php");
?>