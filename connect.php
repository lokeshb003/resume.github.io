<?php
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Subject = $_POST['Subject'];
	$Message = $_POST['Message'];

	$conn = new mysqli('localhost','root','kepler22b','lokii_loki_contact');
	if($conn->connect_error){
		die('Connection Failed: '.$conn->connect_error);
	}
?>
