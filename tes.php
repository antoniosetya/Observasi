<?php

# Copyright 2012
# Written by Budi Hartoyo


  include ("open_con.php");

$no=$_POST['no'];
$nama=$_POST['namaguru'];
$id=$_POST['idguru'];
$rincian=$_POST['rincian'];
$status=$_POST['selesai'];

	$query = "SELECT COUNT(*)
		   									FROM assignment
		   									WHERE id='$id'";
	$result=mysql_query($query);
	$row = mysql_fetch_row($result);
	if ($row[0] > 0)
	{
		echo "ID $id sudah ada, silahkan cek dan ulangi kembali";
		exit;
	}

   $sql="INSERT INTO assignment VALUES('$no','$nama','$id',
         '$rincian','$status')";
   $result=mysql_query($sql);
		echo "Entry Data Berhasil";
		echo "<BR>";
		echo "<A HREF=./assignment.php>Klik Disini Untuk Mengisi Kembali</A>";
		echo "&nbsp &nbsp &nbsp";
		echo "<A HREF=./main.php>Klik Disini Untuk Ke MENU</A>";
		exit;