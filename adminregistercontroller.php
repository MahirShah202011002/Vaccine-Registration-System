<?php
// require_once "config.php";
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"vaccineregistration");

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO `admin` (name, mobile, email, password) VALUES 
                          ('$name', '$mobile', '$email', '$password')";

$result = mysqli_query($conn, $sql);
if($result) {
        header("location: adminlogin.php");
}
else {
    echo "error";
}
mysqli_close($conn);

?>
