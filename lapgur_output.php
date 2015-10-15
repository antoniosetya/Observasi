<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "organizer";
	$con = new mysqli($servername ,$username, $password, $dbname);
	$sql = "SELECT No, Laporan, Topik, Nilai, Tanggal FROM lapgur";
	$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<title>Report</title>
	</head>
	<body>
			<?php
	while($row = mysqli_fetch_assoc($result))
		{
			echo"Laporan dengan topik &nbsp&nbsp <input type=text readonly value='$row[Topik]'> &nbsp&nbsp 
			dengan isi laporan &nbsp&nbsp<input type=text readonly value='$row[Laporan]'> &nbsp &nbsp 
			dengan tanggal masuk <input type=text value='$row[Tanggal]'>&nbsp&nbsp 
			mempunyai nilai <input type=text readonly value='$row[Nilai]'>";
			echo"<form action='lapgur_hapus.php' method='POST'><input type='submit' value='Hapus'><input type='hidden' name='no' value='$row[No]'<br></form>";
		}
?>
	</body>