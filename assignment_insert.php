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
		<?php
			include("header.php");
		?>
		<meta charset="utf-8">
		<link href="css.css" rel="stylesheet" type="text/css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<title>Create Assignment (<?php echo $nama ?>)</title>
		<!--[if lt IE 9]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		
	<section class="body">
		<div class="profiles">
			<form name=createassignment method=post action="assignment_proc.php">
			<table width=75% cellpadding=2 cellspacing=5>
    		<tr>
    			 <td align=right valign=top>Assignment</font></td>
    			 <td align=left valign=top>:</td>
    			 <td align=left valign=top>
    					<textarea rows="5" cols="75" name=assignment></textarea>
    			 </td>
    		</tr>
    		<tr>
    			 <td align=right valign=top>Guru yang dituju</td>
    			 <td align=left valign=top>:</td>
    			 <td align=left valign=top>
					<select name=guru title='Guru' style="background-color:#FF0" >
							<option value=''>------Guru------</option>
<?php
			while($row = mysqli_fetch_assoc($result))
			{
					echo"<option value='$row[nama_guru]'>'$row[nama_guru]'</option>";
			}
			
?>
						</select>

    			 </td>
    		</tr>
			    <tr>
    			 <td align=right valign=top>
						Deadline
    			 </td>
    			 <td align=left valign=top>:</td>
    			 <td align=left valign=top>
						<select name=tgl title='Tanggal' style="background-color:#FF0">
							<option value=''>--Tgl--</option>
<?php 
             for ($i=1;$i<=31;$i++)
             {
             	  if (strlen($i) < 2)
             	  {
             	  	$vari = "0" . $i;
             	  }
             	  else
             	  {
             	  	$vari = $i;
             	  }
             	  if ($tgl == $i)
             	  {
             	     echo "<option value='$vari' selected>$vari</option>";
             	  }
             	  else
             	  {
             	     echo "<option value='$vari'>$vari</option>";
             	  }
             }
?>
						</select>
						&nbsp
						<select name=bln title='Bulan' style="background-color:#FF0">
							<option value=''>--Bln--</option>
<?php 
             $arrbulan = array('','Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des');
             for ($i=1;$i<=12;$i++)
             {
             	  if (strlen($i) < 2)
             	  {
             	  	$vari = "0" . $i;
             	  }
             	  else
             	  {
             	  	$vari = $i;
             	  }
             	  if ($bln == $i)
             	  {
             	     echo "<option value='$vari' selected>$vari - $arrbulan[$i]</option>";
             	  }
             	  else
             	  {
             	     echo "<option value='$vari'>$vari - $arrbulan[$i]</option>";
             	  }
             }
?>
						</select>
						&nbsp
						<select name=thn title='Tahun' style="background-color:#FF0">
							<option value=''>--Thn--</option>
<?php 
             for ($i=Date('Y')-80;$i<=Date('Y')+20;$i++)
             {
             	  	$vari = $i;
             	  if ($thn == $i)
             	  {
             	     echo "<option value='$vari' selected>$vari</option>";
             	  }
             	  else
             	  {
             	     echo "<option value='$vari'>$vari</option>";
             	  }
             }
?>
						</select>
    			 </td>
    		</tr>
    		<tr>
    			 <td colspan="3">
    					<input type=submit value='Pasang' style="width:37mm"></td>
    		</tr>
    	</table>
	</form>
  </div>
</section>

<?php 
	include("footer.php");
?>

</body>
</html>