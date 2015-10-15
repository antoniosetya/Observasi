<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "organizer";
	$con = new mysqli($servername ,$username, $password, $dbname);
	$sql = "SELECT ID, nama_guru FROM account ORDER BY nama_guru ASC";
	$result = mysqli_query($con, $sql);
	$nama = $_POST['nama'];
	$assignment=$_POST['assignment'];
	$selesai=$_POST['selesai'];
	$tanggal=$_POST['tanggal'];
	$no=$_POST['no'];
	if($selesai==0){$check='';}else{$check='checked';}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<?php	
	include("header.php");
	?>
	<head>
	<meta charset="utf-8">
	<link href="css.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<title>Edit Data (<?php echo $user; ?>)</title>
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	
<section class="body">
	<div class="profiles">
		<form action='edit_asg_proc.php' method='POST'>
			<table align="center" cellspacing="2" width="75%">
				<tr>
					<td>Guru</td>
					<td>:</td>
					<td><select name=nama title='Guru' style="background-color:#FF0" >
					<?php echo "<option value='$nama'>".$nama."</option>"?>
			<?php
			while($row = mysqli_fetch_assoc($result))
			{
					if($row['nama_guru']==$nama){}
					else
					echo"<option value='$row[nama_guru]'>$row[nama_guru]</option>";
			}
			?>
			</select>
				</tr>
				<tr>
					<td>Tugas</td>
					<td>:</td>
					<td><input type=text  value='<?php echo $assignment ?>' name='assignment'></td>
				</tr>
				<tr>
					<td>Deadline</td>
					<td>:</td>
					<td><input type=text  value='<?php echo $tanggal ?>' name='tanggal'></td>
				</tr>
				<tr>
					<td>Selesai</td>
					<td>:</td>
					<td><input type=checkbox value='selesai' name='selesai' id='selesai' <?php echo $check?>></td>
				</tr>
				<tr>
					<td colspan="2" valign="bottom"><input type='submit' value='Save'><input type=hidden name=no value='<?php echo $no ?>'></td></form>
					<td><form action='del_asg_proc.php' method='POST'><br><input type='submit' value='Hapus'><input type=hidden name=no value='<?php echo $no?>'></form></td>
				</tr>
			</table>
		</div>
</section>

<?php 
	include("footer.php");
?>
</body>
</html>
	
	
