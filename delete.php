<?php
session_start();
// Using database connection file here
$db = mysqli_connect("localhost","root","","vaccineregistration");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
$id = $_GET['id']; // get id through query string
$name = $_GET['account_name'];
$m_n = $_GET['name'];

$sql = "DELETE FROM members where id='$id'";
$del = mysqli_query($db, $sql); // delete query

// $name = $_SESSION['username'];
// $m_n = $_SESSION['name'];

$sql1 = "DELETE FROM bookedSlots where account_name='$name' AND name='$m_n' ";
echo $sql1;
$del1 = mysqli_query($db, $sql1); // delete query



if($del)
{
    mysqli_close($db); // Close connection
    header("location:members.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
