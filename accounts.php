<!DOCTYPE html>
<html>
<head>
	<?php  
		include("conn.php");
	?>	
	<meta charset="utf-8">
	<link href="css.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<title>Profile (<?php echo "Ig. Ari Krisnawati" #Nama User ?>)</title>
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

<?php 
	include("header.php");
?>

<section class="body">
	<h1 align="center">DAFTAR ACCOUNT</h1>
	<div class="accounts">
		<form method="POST" action="accounts.php">
			<?php 
			$sortby = $_POST["sortby"];
				if ($sortby == "") $sortby = "nama_guru"; 
				if ($sortby == "nama_guru") $sortname = "Nama Guru";
				else if ($sortby == "user") $sortname = "User";
				else if ($sortby == "Priv") $sortname = "Privilege";
				else if ($sortby == "Subjek") $sortname = "Bidang Studi";
				else if ($sortby == "tgl_lahir") $sortname = "Tanggal Lahir";
				?>
		<p style="font-size : 16px">Sortir menurut <?php echo $sortname ?>. <br> Ubah sortir menurut :  <select name="sortby" id="box"style="background-color:rgba(0,0,0,0.5)">
							<option value='nama_guru'>Nama Guru</option>
							<option value='user'>User</option>
							<option value='Priv'>Privilege</option>
							<option value="Subjek">Bidang Studi</option>
							<option value="tgl_lahir">Tanggal Lahir</option>
						</select> <input type="submit" value="U P D A T E"><br> </p>
		<table cellspacing="0" border="1" width="100%" bordercolor="black">
			<tr>
				<th width="3%">No.</th>
				<th width="10%">User</th>
				<th width="20%">Nama Guru</th>
				<th width="8%">Pass</th>
				<th width="3%">Priv</th>
				<th width="10%">Subjek</th>
				<th width="12%">Tanggal Lahir</th>
			</tr>
			<?php
				$query = "SELECT * FROM account ORDER BY $sortby";
				$result = mysql_query($query);
				if ($result == false) {
					echo 'The query failed. '.mysql_error();
					exit();
				}	
				$num = mysql_num_rows($result);
				$i = 0;
				while($i < $num) {
			?>
				<tr>
				<td align=center valign=top>
    					<font face=Arial size=2><?php echo mysql_result($result,$i,"ID") ?></font>
    			 </td>
    			 <td align=left valign=top>
    					<font face=Arial size=2><?php echo mysql_result($result,$i,"User") ?></font>
    			 </td>
    			 <td align=left valign=top>
    					<font face=Arial size=2><?php echo mysql_result($result,$i,"nama_guru") ?></font>
    			 </td>
    			 <td align=left valign=top>
    					<font face=Arial size=2><?php echo mysql_result($result,$i,"Pass") ?></font>
    			 </td>
    			 <td align=left valign=top>
    					<font face=Arial size=2><?php echo mysql_result($result,$i,"Priv") ?></font>
    			 </td>
				 <td align=left valign=top>
    					<font face=Arial size=2><?php echo mysql_result($result,$i,"Subjek") ?></font>
    			 </td>
				 <td align=left valign=top>
    					<font face=Arial size=2><?php echo mysql_result($result,$i,"tgl_lahir") ?></font>
    			 </td>
    		</tr> <?php $i++; } ?>
		</table>	
	</div>
</section>

<?php 
	include("footer.php");
?>

</body>
</html>