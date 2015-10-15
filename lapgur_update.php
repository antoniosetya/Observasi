<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "organizer";
	$con = new mysqli($servername ,$username, $password, $dbname);
	$sql = "SELECT no, Laporan, topik, nilai, tanggal, reply FROM lapgur ORDER BY tanggal ASC";
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
	<title>Laporan Guru (<?php echo $user; ?>)</title>
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	
<section class="body">
	<div class="list" width="75%">
		<table align="center">
			<tr>
				<th>Topik</th>
				<th>Laporan</th>
				<th>Tanggal Masuk</th>
				<th>Nilai</th>
				<th>Reply</th>
				<th>Ubah</th>
			</tr>
		<?php
			while($row = mysqli_fetch_assoc($result))
			{  ?>
			<tr>
				<td><?php echo $row[topik] ?></td>
				<td><?php echo $row[Laporan] ?></td>
				<td><?php echo $row[tanggal] ?></td>
				<td><?php echo $row[nilai] ?></td>
				<td><?php echo $row[reply] ?></td>
				<td><form action='lapgur_update_do.php' method='POST'>
					<input type=hidden value='<?php echo $row[topik] ?>' name='topik'>
					<input type=hidden value='<?php echo $row[Laporan] ?>' name='laporan'>
					<input type=hidden value='<?php echo $row[tanggal] ?>' name=tanggal>
					<input type=hidden value='<?php echo $row[nilai] ?>' name=nilai>
					<input type=hidden value='<?php echo $row[reply] ?>' name=reply>
					<input type=submit name=submit value='Ubah'>
					<input type=hidden value='<?php echo $row[no] ?>' name=no>
					</form></td>
			</tr>
			<?php } ?>
		</table>	
	</div>
</section>

<?php 
	include("footer.php");
?>

</body>
</html>