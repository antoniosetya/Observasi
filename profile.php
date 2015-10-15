<!DOCTYPE html>
<html>
<head>
	<?php  
		include("header.php");
		$conn = new mysqli("localhost","root","","organizer");
		if ($conn == false) {
			echo "Connection error : ".$conn->connect_error();
		}
	 	$query = "SELECT * FROM account WHERE User='$user'";
		$result = mysqli_query($conn,$query);
		while($row = mysqli_fetch_assoc($result))
			{
				$name = $row["nama_guru"];
				$ID = $row["ID"];
				$username = $row["User"];
				$Priv = $row["Priv"];
						if ($Priv == 1) $jabatan = "Guru";
						else if ($Priv == 2) $jabatan = "Wakil Kepala Sekolah";
						else if ($Priv == 3) $jabatan = "Kepala Sekolah";
				$bidang = $row["Subjek"];
				$lahir = $row["tgl_lahir"];
			}
	?>	
	<meta charset="utf-8">
	<link href="css.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<title>Profile (<?php echo $user; ?>)</title>
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

<section class="body">
	<div class="profiles">
		<table cellspacing="4">
			<tr>
				<td>Nama </td>
				<td>:</td>
				<td><?php echo $name ?></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><?php echo $lahir ?></td>
			</tr>
			<tr>
				<td>Foto </td>
				<td>:</td>
				<td><img src="./img/<?php /* automated filename here */ ?>.jpg" width="50px" height="50px" /></td>
			<tr>
			<tr>
				<td>Account ID </td>
				<td>:</td>
				<td><?php echo $ID ?></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><?php echo $username ?></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td><?php echo $jabatan ?></td>
			</tr>
			<tr>
				<td>Bidang Studi</td>
				<td>:</td>
				<td><?php echo $bidang ?></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><a href="gantipass.php">Ganti Password</a></td>
			</tr>
		</table>	
	</div>
</section>

<?php 
	include("footer.php");
?>

</body>
</html>