<!DOCTYPE html>
<html>
<head>
	<?php
	include("header.php");
	?>	
	<meta charset="utf-8">
	<link href="css.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<title>Main Menu (<?php echo $user; ?>)</title>
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

<section class="body">
	<div class="reminder">
		JOB REMINDER
	</div>
	<div class="active-report">
		--ACTIVE TASK/REPORT--<br>
		--EXTERMINATE--<br>
	</div>
</section>

<?php 
	include("footer.php");
?>

</body>
</html>