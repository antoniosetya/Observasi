<!DOCTYPE HTML>
<html>
	<head>
		<title> Login </title>
		<link href="css.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<section class="body">
		<form action="gantip_proc.php" method="POST" /> 
			<table align="center">
			<tr>
				<td>Password baru</td>
				<td>:</td>
				<td><input type="password" name="pass" /></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" class="button" name="Login" value="Login" style="display:block; width:100%"/></td>
			</tr>
			</table>
		</form>
		</section>
		<?php include "footer.php"?>
	</body>
</html>