<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "organizer";
	$con = new mysqli($servername ,$username, $password, $dbname);
	$sql = "SELECT no, assignment, nama, selesai, tanggal FROM assignment ORDER BY nama ASC";
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
	<title>Review Assignment (<?php echo $user; ?>)</title>
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

<section class="body">
	<div class="list">
		<table width="100%">
			<tr>
				<th>Nama Guru</th>
				<th>Tugas/Assigment</th>
				<th>Deadline</th>
				<th>Selesai</th>
				<th>Ubah</th>
			</tr>
			<?php
				while($row = mysqli_fetch_assoc($result)) {
					if($row['selesai']==0){$check='';}else{$check='checked';} ?>
					<tr>
						<td><?php echo $row[nama] ?></td>
						<td><?php echo $row[assignment] ?></td>
						<td><?php echo $row[tanggal] ?></td>
						<td><input type=checkbox disabled <?php echo $check ?>></td>
						<td><form action='edit_asg.php' method='POST'>
							<input type=hidden value='<?php echo $row[nama]?>' name='nama'>
							<input type=hidden value='<?php echo $row[assignment]?>' name=assignment>
							<input type=hidden value='<?php echo $row[selesai]?>' name=selesai>
							<input type=hidden value='<?php echo $row[tanggal]?>' name=tanggal>
							<input type=submit name=submit value='Ubah'>
							<input type=hidden value='<?php echo $row[no]?>' name=no></form><br></td>
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