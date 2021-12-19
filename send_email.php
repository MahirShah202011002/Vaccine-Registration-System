<?php 
session_start();
// echo "hello";
use PHPMailer\PHPMailer\PHPMailer;
require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";
$mail = new PHPMailer();


$name = $_SESSION['username'];
$m_n = $_SESSION['name'];

$conn = mysqli_connect("localhost", "root", "", "vaccineregistration");
$sql = "SELECT * FROM users WHERE name='$name' ";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);



$sql1 = "SELECT * FROM bookedSlots WHERE account_name='$name' AND name='$m_n' ORDER BY vaccine_date DESC";
$result1 = mysqli_query($conn, $sql1);
$data1 = mysqli_fetch_array($result1);

$msg = "<html>";
$msg .= "<body>";
$msg .= "<p> Respected $m_n </p>";
$msg .= "<p> Vaccine Details</p>";
$msg .= "<table border='1' style='width:100%'>";
$msg .= "<tr>";
$msg .= "<th> Name: </th>";
$msg .= "<th> $m_n </th>";
$msg .= "</tr>";

$msg .= "<tr>";
$msg .= "<th> Vaccine Date: </th>";
$msg .= "<th>";
$msg .= $data1['vaccine_date'];
$msg .=  "</th>";
$msg .= "</tr>";


$msg .= "<tr>";
$msg .= "<th> Vaccine Center Name </th>";
$msg .= "<th>";
$msg .= $data1['center_name'];
$msg .=  "</th>";
$msg .= "</tr>";

$msg .= "<tr>";
$msg .= "<th> Vaccine Center Pin </th>";
// $msg .= "<th> $data1['center_pin'] </th>";
$msg .= "<th>";
$msg .= $data1['center_pin'];
$msg .=  "</th>";
$msg .= "</tr>";

$msg .= "<tr>";
$msg .= "<th> Vaccine Center Address </th>";
$msg .= "<th>";
$msg .= $data1['center_address'];
$msg .=  "</th>";
$msg .= "</tr>";

$msg .= "<tr>";
$msg .= "<th> Vaccine Center District Name </th>";
$msg .= "<th>";
$msg .= $data1['center_district_name'];
$msg .=  "</th>";
$msg .= "</tr>";

$msg .= "<tr>";
$msg .= "<th> Proof Type </th>";
$msg .= "<th>";
$msg .= $data1['Proof_type'];
$msg .= "</th>";
$msg .= "</tr>";

$msg .= "<tr>";
$msg .= "<th> Proof No </th>";
$msg .= "<th>";
$msg .= $data1['Proof_ID_no'];
$msg .= "</th>";
$msg .= "</tr>";

$msg .= "</table>";

$msg .= "</body>";
$msg .= "</html>";
				


$smail = $data['email'];
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "";
$mail->Password = '';
$mail->Port = 587; 
$mail->SMTPSecure = "tls"; 
$mail->isHTML(true);
$mail->setFrom("mahir8239@gmail.com");
$mail->addAddress($smail);
$mail->Subject = "Vaccine Slot Details";
$mail->Body = $msg;

if ($mail->send()) 
{
     header("location: members.php");
 } 
 else 
 {
     $status = "failed";
     echo "fail";
 }
?>
