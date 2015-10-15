<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "organizer";
	$con = new mysqli($servername ,$username, $password, $dbname);
	$no = $_POST['no'];
	$sql = "DELETE FROM lapgur WHERE No=$no";
	
	if($con->query($sql)==TRUE) {
		echo "DATA DELETED";
	}
	else{
		echo "DELETE ERROR".$con->error;
	}