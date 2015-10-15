<?php
	include ("serv.php");
	
	$nama	=$_POST['nama'];
	$user	=$_POST['ui'];
	$pw		=$_POST['pw'];
	$priv	=$_POST['priv'];
	$subjek	=$_POST['subjek'];
	$tgl	=$_POST['thn'] . "-" . $_POST['bln'] . "-" . $_POST['tgl'];
	
	$tes=md5($pw);
	   $sql="INSERT INTO account (User, Pass, Priv, Subjek, nama_guru, tgl_lahir) VALUES('$user','$tes','$priv','$subjek','$nama','$tgl')";
	   $result=mysql_query($sql);
		echo "<br><br><p align=center>Registration complete.</p>";
		echo "<BR>";
		echo "<p align=center><a href=./entrydataguru.php>Enter Moar Data</a></p>";
		//		echo "<A HREF=./insert.php>Klik Disini Untuk Mengisi Kembali</A>";
//		echo "&nbsp &nbsp &nbsp";
//		echo "<A HREF=./index.php>Klik Disini Untuk Ke MENU</A>";
		exit;
?>
