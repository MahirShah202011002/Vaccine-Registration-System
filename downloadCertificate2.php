<?php

session_start();
	require_once 'vendor/autoload.php';
	use Dompdf\Dompdf;

$name = $_SESSION['username'];
$m_n = $_GET['name'];


$conn = mysqli_connect("localhost", "root", "", "vaccineregistration");
$sql = "SELECT * FROM bookedSlots WHERE account_name='$name' AND name='$m_n' ORDER BY vaccine_date ";
$result = mysqli_query($conn, $sql);
$data1 = mysqli_fetch_array($result);

$sql1 = "SELECT * FROM users WHERE name='$name' ";
$result1 = mysqli_query($conn, $sql1);
$data11 = mysqli_fetch_array($result1);

$msg = "<html>";
$msg .= "<body>";


$path19 = 'IE.jpg';
$type19 = pathinfo($path19, PATHINFO_EXTENSION);
$data19 = file_get_contents($path19);
$base6419 = 'data:image/' . $type19 . ';base64,' . base64_encode($data19);
$msg .= "<div style='margin-left: 290px;'><img src=$base6419 height='200' /></div>";


$msg .= "<p><h2 align='center'><b>Final Certificate for Vaccination</b></h2></p>";
$msg .= "<table border='1' align='center' width='500'>";

$msg .= "<tr>";
$msg .= "<th style='color: blue;' colspan='2'> Beneficiary Details </th>";
$msg .= "</tr>";

$msg .= "<tr>";
$msg .= "<th> Beneficiary_Name </th>";
$msg .= "<th>";
$msg .= $m_n;
$msg .= "</th>";
$msg .= "</tr>";
		    
// $msg .= "<tr>";
// $msg .= "<td>Age</td>";
// $msg .= "<td></td>";
// $msg .= "</tr>";
			
$msg .= "<tr>";
$msg .= "<th> Gender </th>";
$msg .= "<th>";
$msg .= $data11['gender'];
$msg .= "</th>";
$msg .= "</tr>";


$msg .= "<tr>";
$msg .= "<th> ID Proof </th>";
$msg .= "<th>";
$msg .= $data1['Proof_type'];
$msg .= "</th>";
$msg .= "</tr>";

$msg .= "<tr>";
$msg .= "<th> ID Proof No </th>";
$msg .= "<th>";
$msg .= $data1['Proof_ID_no'];
$msg .= "</th>";
$msg .= "</tr>";


$msg .= "<tr>";
$msg .= "<th style='color: blue;' colspan='2'>Vaccination Details</th>";
$msg .= "</tr>";


$msg .= "<tr>";
$msg .= "<th> Vaccine Date </th>";
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

$msg .= "</table>";
$msg .= "<br>";


$path = 'Covid_vaccine_certificate.jpg';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
$msg .= "<img src=$base64 width=\"100%\" height=\"300\"/>";

$msg .= "</body>";
$msg .= "</html>";
				


	$dompdf = new Dompdf;
	$dompdf->loadHtml($msg);
	$dompdf->setPaper('A4', 'potrait');
	$dompdf->render();
	$dompdf->stream('VaccineCertificateDose2.pdf');

?>