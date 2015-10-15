<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "organizer";
	$con = new mysqli($servername ,$username, $password, $dbname);
?>
<?php
$guru=$_POST['guru'];
$assignment=$_POST['assignment'];
$tanggal=$_POST{'thn'} . "-" . $_POST{'bln'} . "-" . $_POST{'tgl'};

   $sql="INSERT INTO assignment (Nama, Assignment, Tanggal) VALUES('$guru','$assignment','$tanggal')";
?>
<!DOCTYPE html>
<html>
	<head>
		<?php	
			include("header.php");
		?>
		<title>Create Assignment (<?php echo $nama ?>)</title>
		<link href="css.css" rel="stylesheet" type="text/css">
		<meta charset="utf-8">
		<!--[if lt IE 9]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
<body>
	
<section class="body">
	<div class="profile">
	<?php
 		 if ($con->query($sql) === TRUE) {
  		  echo "New record created successfully";
		} else {
   		  echo "Error: " . $sql . "<br>" . $con->error;
		}
	?>
</div>
</section>

<?php
	include("footer.php");
?>

</body>
</html>