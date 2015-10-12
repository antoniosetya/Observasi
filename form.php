<!DOCTYPE html>
<html>
<head>
	<?php  
		error_reporting(0);
		$nama = $_POST["nama"]; #Nama Guru
	?>	
	<meta charset="utf-8">
	<link href="css.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<title>Main Menu (<?php echo $nama; ?>)</title>
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

<?php
	/* MEKANISME MENUBAR UNTUK ADMIN / GURU BELUM SEMPURNA */
	if ($_GET["admin"] == "") {
		$_GET["admin"] = 0;
	}
	include("header.php");
?>

<section class="body">
	<div class="form">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?php echo $nama /*automated name here */ ?>Ig. Ari Krisnawati</td>
			</tr>
			<tr>
				<td>Bidang Studi</td>
				<td>:</td>
				<td><?php echo $bidang /*automated name here */ ?>Matematika</td>
			</tr>
			<form name="report" method="POST" action="">
			<tr>
				<td>Topik</td>
				<td>:</td>
				<td><input type="text" name="subject"></td>
			</tr>
			<tr>
				<td>Laporan</td>
				<td>:</td>
				<td><textarea name="laporan" rows="7" cols="50"></textarea></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" value="Kirim"></td>
			</tr>
			</form>
		</table>
	</div>
</section>

<?php 
	include("footer.php");
?>

</body>
</html>