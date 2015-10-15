<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "organizer";
	$con = new mysqli($servername ,$username, $password, $dbname);
	$sql = "SELECT Laporan, topik, nilai, tanggal, reply FROM lapgur";
	$result = mysqli_query($con, $sql);
	
	$topik = $_POST['topik'];
	$laporan=$_POST['laporan'];
	$nilai=$_POST['nilai'];
	$tanggal=$_POST['tanggal'];
	$no=$_POST['no'];
	$reply=$_POST['reply'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<?php include("header.php"); ?>
	<meta charset="utf-8">
	<link href="css.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<title>Update Laporan (<?php echo $user; ?>)</title>
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	</head>
<body>

<section class="body">
	<div class="profiles">
		<form name=derp action='lapgur_update_do_do.php' method='POST'>
		<table width="75%" cellspacing="2">
			<tr>
				<td>Topik</td>
				<td>:</td>
				<td><input type=text readonly value='<?php echo $topik ?>' name='topik'></td>
			</tr>
			<tr>
				<td valign="top">Laporan</td>
				<td valign="top">:</td>
				<td><textarea rows="5" cols="50" readonly name='laporan'><?php echo $laporan ?></textarea></td>
			</tr>
			<tr>
				<td>Deadline</td>
				<td>:</td>
				<td><input type=text readonly value='<?php echo $tanggal ?>' name='tanggal'></td>
			</tr>
			<tr>
				<td>Nilai</td>
				<td>:</td>
				<td><input type=text value='<?php echo $nilai ?>' name='nilai'></td>
			</tr>
			<tr>
				<td>Reply</td>
				<td>:</td>
				<td><input type=text value='<?php echo $reply ?>' name='reply'></td>
			</tr>
			<tr>
				<td colspan="3"><input type='submit' value='Update'><input type=hidden name=no value='$no'></td>
			</tr>
		</table>
	</form>
	</div>
</section>
	
<?php 
	include("footer.php");
?>

</body>
</html>
	
