<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "organizer";
	$con = new mysqli($servername ,$username, $password, $dbname);
	$sql = "SELECT User, Pass, Priv, Subjek FROM account ORDER BY User ASC";
	$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		include("header.php");
	?>
	<meta charset="utf-8">
	<link href="css.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<title>Laporan Akhir (<?php echo $nama; ?>)</title>
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>

<section class="body">
	<div class="list">
		<table align="center" width="100%">
			<tr>
				<th width="50%">Nama</th>
				<th width="25%">Bidang Studi</th>
				<th>Nilai</th>
			</tr>
	<?php
		while($row = mysqli_fetch_assoc($result)) {
			if($row["Priv"]<3)
			{
				?>
			<tr>
				<td><?php echo $row['User']?></td>
				<td><?php echo $row['Subjek']?></td>
				<td><?php echo '' #automated nilai here ?></td>
			<tr>
			<?php
				}
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