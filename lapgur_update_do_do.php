<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "organizer";
	$con = new mysqli($servername ,$username, $password, $dbname);
	
	$tanggal=$_POST['tanggal'];
	$topik = $_POST['topik'];
	$laporan=$_POST['laporan'];
	$nilai=$_POST['nilai'];
	$no = $_POST['no'];
	$reply=$_POST['reply'];
	
	$sql = "UPDATE lapgur SET topik='$topik', laporan='$laporan', tanggal='$tanggal', reply='$reply', nilai='$nilai' WHERE no='$no'";

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}
	
?>