<!DOCTYPE html>
<html>
<head>
	<?php  
		error_reporting(0);
		$nama = $_POST["nama"]; #Nama guru
		$id = $_POST["id"]; #ID Guru
	?>	
	<meta charset="utf-8">
	<link href="css.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<title>Profile (<?php echo $nama; ?>)</title>
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

<?php 
	include("header.php");
?>

<section class="body">
	<div class="profiles">
		<table cellspacing="4">
			<tr>
				<td>Nama </td>
				<td>:</td>
				<td><?php /*automated name here */ echo $nama ?>Ig. Ari Krisnawati</td>
			</tr>
			<tr>
				<td>Account ID </td>
				<td>:</td>
				<td><?php /*automated ID here */ echo $id ?>05050569784</td>
			</tr>
			<tr>
				<td>Foto </td>
				<td>:</td>
				<td><img src="./img/<?php /* automated filename here */ ?>.jpg" width="50px" height="50px" /></td>
			<tr>
				<td colspan="3" align="center"><a href="#">Ganti Password</a></td>
			</tr>
		</table>	
	</div>
</section>

<footer>
	<div class="foot-temp" style="height : 150px">
		<div class="foot-tab" style="order: 1; flex: 0 1 200px">
			<a href="http://kanisius.edu/index.php/en/">
			<img src="./img/contact_cc.png" />
			</a>
		</div>
	<div class="foot-tab" style="order: 3; width : 220px; position : absolute; right : 0px; flex: 0 1 200px; margin-right : 30px">
		<img height="64px" src="./img/logo_amdg.png" style="position : absolute; left : 50%; margin-left : -30px" width="64px" />
	</div>
</div>
</footer>
</body>
</html>