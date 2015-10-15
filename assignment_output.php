<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "organizer";
	$con = new mysqli($servername ,$username, $password, $dbname);
	$sql = "SELECT assignment, nama, tanggal, selesai FROM assignment ORDER BY nama ASC";
	$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<?php
			include("header.php");
		?>
		<meta charset="utf-8">
		<link href="css.css" rel="stylesheet" type="text/css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
		<title>Output Assignment (<?php echo $user ?>)</title>
	</head>
	<body>
	
	<section class="body">
		<div class="list">
			<table width="100%">
				<tr>
					<th>Guru</th>
					<th>Tugas/Assignment</th>
					<th>Deadline</th>
					<th>Selesai</th>
				</tr>
		<?php
			while($row = mysqli_fetch_assoc($result))
			{ 
				if($row['selesai']==0){$check='';}else{$check='checked';}
				?>
				<tr>
					<td><?php echo $row[nama] ?></td>
					<td><?php echo $row[assignment] ?></td>
					<td><?php echo $row[tanggal] ?></td>
					<td><input type=checkbox disabled <?php echo $check ?>></td>
				</tr>
				<?php
			}
		?>
		</table>
		</div>
	</section>
	
<?php
	include("footer.php");
?>
</body>
</html>