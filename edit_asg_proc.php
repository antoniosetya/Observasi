<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "organizer";
	$con = new mysqli($servername ,$username, $password, $dbname);
	$tanggal=$_POST['tanggal'];
	$nama = $_POST['nama'];
	$assignment=$_POST['assignment'];
	$no=$_POST['no'];
	if(isset($_POST['selesai']))
	{
		$selesai=1;
	}
	else
	{
		$selesai=0;
	}
	$sql = "UPDATE assignment SET Nama='$nama', Assignment='$assignment', tanggal='$tanggal', selesai='$selesai' WHERE no='$no'";

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}
	
?>