<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "organizer";
	$con = new mysqli($servername ,$username, $password, $dbname);
	$sql = "SELECT ID, nama_guru FROM account ORDER BY nama_guru ASC";
	$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<title>Report</title>
	</head>
	<body>
			<form name=report method=post action="report_proc.php">
			<div align=center>
				<table width=100% cellpadding=2 cellspacing=5 border=0>
    		<tr>
    			 <td width=30% align=right valign=top>
    					&nbsp
    			 </td>
    			 <td width=15% align=left valign=top>
    					<font face=Verdana size=2>Report &nbsp &nbsp</font>
    			 </td>
    			 <td width=55% align=left valign=top>
    					<textarea rows="20" cols="100" name=report></textarea>
    			 </td>
    		</tr>
    		<tr>
    			 <td width=30% align=right valign=top>
    					&nbsp
    			 </td>
    			 <td width=15% align=left valign=top>
    					<font face=Verdana size=2>Topik &nbsp &nbsp</font>
    			 </td>
    			 <td width=55% align=left valign=top>
						<input type=text name=topik style="background-color:#FF0" size=40 maxlength=20>
    			 </td>
    		</tr>
    		<tr>
    			 <td width=30% align=right valign=top>
    					&nbsp
    			 </td>
    			 <td width=15% align=right valign=top>
    					&nbsp
    			 </td>
    			 <td width=55% align=left valign=top>
    					<input type=submit value='Simpan' style="width:37mm"
    		</tr>
    	</table>
  </div>
 </form>
	</body>