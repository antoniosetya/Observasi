<?php

# Copyright 2012
# Written by Budi Hartoyo


  include ("open_con.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <Script type="text/javascript">
    	function cek()
    	{
    		if (document.assignment.no.value == "")
    		{
    			alert("Harap isi nomor tugas Anda");
    			document.assignment.no.focus();
    			return false;
    		}
    		if (document.assignment.namaguru.value == "")
    		{
    			alert("Harap isi nama Anda");
    			document,assignment.namaguru.focus();
    			return false;
    		}
			if (document.assignment.idguru.value == "")
    		{
    			alert("Harap isi ID Anda");
    			document,assignment.idguru.focus();
    			return false;
    		}
    		if (document.assignment.rincian.value == "")
    		{
    			alert("Harap isi rincian tugas");
    			document,assignment.rincian.focus();
    			return false;
    		}
    		if (document.assignment.selesai.value == "")
    		{
    			alert("Harap isi status tugas Anda");
    			document,assignment.selesai.focus();
    			return false;
    		}
			
			submitform = window.confirm("Submit ?")
			if (submitform == true)
			{
              document.assignment.submit();
              return true;
			}
			else
			{
              return false;
			}
    	}
    </script>
</head>

<body>
<form name="assignment" method=post action="tes.php">
	<table>
	<tr>
		<td>FORM PENUGASAN</td>
	</tr>
	<tr>
		<td>No</td>
		<td><input type="text" name="no"></td>
	</tr>
	<tr>
		<td>Nama Guru</td>
		<td><input type="text" name="namaguru"></td>
	</tr>
	<tr>
		<td>ID Guru</td>
		<td><input type="text" name="idguru"></td>
	</tr>
	<tr>
		<td>Assignment</td>
		<td><textarea name="rincian" rows="12" cols="60"></textarea>
	</tr>
	<tr>
		<td>Status</td>
		<td><input type="radio" name="selesai" value="1">Selesai
			<input type="radio" name="selesai" value="0">Belum Selesai</td>
	</tr>
	<tr>
		<td><input type="button" value='S U B M I T' onclick=cek()/>
	</tr>
	</table>
</form>
</body>
</html>
<?php
exit;
?>