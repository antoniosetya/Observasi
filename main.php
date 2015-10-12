<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="css.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
<?php  
	error_reporting(0);
	$nama = $_POST["nama"];
?>	
<header>
	<div class="name">WELCOME, <?php echo $nama; ?>. <br> <?php echo date("d/m/Y"); ?> </div>
	<ul>
        <li><a href="main.php" title="Menu 1">Main Menu</a></li>
        <li><a href="reports.php" title="Menu 2">Reports</a></li>
		<li><a href="profile.php" title="Menu 3">Profile</a></li>
    </ul> 
</header>

<footer>
	FOOTER
</footer>
</body>
</html>