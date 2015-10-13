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
	<div class="reminder">
<?php
	if ($_GET["admin"] == 0) { ?>
		JOB REMINDER
<?php } 
	else if ($_GET["admin"] == 1) { ?>
	REMINDER
<?php } ?>
	</div>
	<div class="active-report">
		<?php
		if ($_GET["admin"] == 0) { ?>
		--ACTIVE TASK/REPORT--<br>
		<br>
		<?php }
		else if ($_GET["admin"] == 1) { ?>
		--ALERT--<br>
		Ig. Ari Krisnawati baru saja mengirimkan laporan!<br>
		<?php } ?>
	</div>
</section>

<?php 
	include("footer.php");
?>

</body>
</html>