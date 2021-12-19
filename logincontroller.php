<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "vaccineregistration");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password' ";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $_SESSION['username'] = $row['name'];
    
    header("location: index.php");
}



?>