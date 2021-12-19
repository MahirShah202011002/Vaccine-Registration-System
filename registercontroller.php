<?php
// require_once "config.php";
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"vaccineregistration");

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (name, mobile, gender, email, password) VALUES 
                          ('$name', '$mobile', '$gender', '$email', '$password')";

$result = mysqli_query($conn, $sql);
if($result) {
        header("location: login.php");
}
else {
    echo "error";
}
mysqli_close($conn);

?>
