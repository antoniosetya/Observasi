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
	<title>Reports (<?php echo $nama; ?>)</title>
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

<?php 
	include("header.php");
?>

<section class="body">
	<h1 align="center">REPORT HISTORY</h1>
	<div class="list">
		<table align="center" cellspacing="4">
			<tr>
				<th>Tanggal Report</th>
				<th>Skor (dari Admin)</th>
			</tr>
			<tr>
				<td><a href="<?php echo ''; ?>.php">11/10/2015</a></td>
				<td>Belum ada skor</td>
			</tr>
		</table>
	</div>
</section>

<?php 
	include("footer.php");
?>

</body>
</html>