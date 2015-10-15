<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "organizer";
	$user=$_COOKIE['User'];
	$pass = md5($_POST['pass']);
	$con = new mysqli($servername ,$username, $password, $dbname);
	$sql = "UPDATE account SET pass='$pass' WHERE user='$user'";
	if ($con->query($sql) === TRUE) {
		echo "Record updated successfully";
}	 else {
		echo "Error updating record: " . $con->error;
		}
?>