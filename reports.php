<!DOCTYPE html>
<html>
<head>
	<?php  
		error_reporting(0);
		$nama = $_POST["nama"];
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