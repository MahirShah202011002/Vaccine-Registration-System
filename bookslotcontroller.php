<?php
	session_start();

	$name = $_GET['name'];
	echo $name;
	$_SESSION['name'] = $name;
	

	header("location: index.php");
	// header("Location: http://localhost/VaccineRegistration/index.php");
	// $link = "<script>window.open(\"https://secure.brosix.com/webclient/?nid=4444&user=$name&pass=$pass&hideparams=1width=710,height=555,left=160,top=170'\")</script>";
	// echo "<script>window.open(\"localhost/VaccineRegistration/index.php\")</script>";
?>