<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<link href="css.css" rel="stylesheet" type="text/css">
		<!--[if lt IE 9]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<section class="body">
		<form action="mainm.php" method="POST"> 
			<table align="center">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="user" ><br></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" class="button" name="Login" value="Login" style="display:block; width:100%"></td>
			</tr>
			</table>
		</form>
		</section>
		<?php include("footer.php"); ?>
	</body>
</html>