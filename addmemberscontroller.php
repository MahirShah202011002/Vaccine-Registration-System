<?php
session_start();
$servername ="localhost";
$username = "root";
$password = "";
$database="vaccineregistration";
$conn = mysqli_connect("localhost", "root", "", "vaccineregistration");

// Check connection
if($conn === false){
die("ERROR: Could not connect. "
. mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
$name = $_SESSION['username'];
$member_name = $_REQUEST['member_name'];
$Proof_type = $_REQUEST['Proof_type'];
$Proof_ID_No = $_REQUEST['Proof_ID_No'];
//$email = $_REQUEST['email'];

// Performing insert query execution
// here our table name is college
$sql="SELECT COUNT(*) as total FROM members where name='$name'";
$result1=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result1);
echo $data['total'];
$result=mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);
//echo $row;
if($data['total']==6)
{
echo 'You cannot insert data anymore <br>';
}
else
{
$sql = "INSERT INTO members(name,
member_name,Proof_type,Proof_ID_No) VALUES ('$name',
'$member_name','$Proof_type','$Proof_ID_No')";

if(mysqli_query($conn, $sql)){
// echo "<h3>data stored in a database successfully."
// . " Please browse your localhost php my admin"
// . " to view the updated data</h3>";

// echo nl2br("\n$name\n $member_name\n "
// . "$Proof_type\n $Proof_ID_No\n");
	header("location: members.php");
} 
else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
}
// Close connection
mysqli_close($conn);
?>
