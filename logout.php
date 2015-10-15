<?php
setcookie("User", "", time() - 86400);
setcookie("Pass", "", time() - 86400);
setcookie("Priv", "", time() - 86400);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
	<link href="css.css" rel="stylesheet" type="text/css">
	
</head>
<body>
	
<section class="body">
	<div class="profiles" align="center">
		Yu hev bin log ot <br><br>
		Redirecting you back in 5 seconds. <br><br>
		If nothing happens, <a href="login.php">click here</a><br>
		<script type="text/javascript">
			setTimeout(function() {
				window.location.href='login.php';
			}, 5000);
		</script>
	</div>
</section>
<?php
	include("footer.php");
?>
</body>
</html>