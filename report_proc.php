<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "organizer";
	$con = new mysqli($servername ,$username, $password, $dbname);
	
	$report=$_POST['report'];
	$topik=$_POST['topik'];
	$tanggal=date("Y-m-d");

   $sql="INSERT INTO lapgur (Topik, Laporan, Tanggal) VALUES('$topik','$report','$tanggal')";
  if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>