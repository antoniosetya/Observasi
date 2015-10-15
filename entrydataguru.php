<?php
	  include ("serv.php");
?>
<DOCTYPE! html meta charset="UTF-8">
<html>

<head>
<link rel="stylesheet" type="text/css" href="css.css">
	<script type="text/javascript">
    	function cek()
    	{	
		    
		    var valPriv="12.";
			document.entry.nama.value = document.entry.nama.value.toUpperCase();
			if (document.entry.nama.value == "")   		
			{
    			alert("Harap isi Nama Lengkap");
    			document,entry.nama.focus();
    			return false;
    		}
			
    		if (document.entry.ui.value == "")
    		{
    			alert("Harap isi username");
    			document,entry.ui.focus();
    			return false;
    		}
    		if (document.entry.pw.value == "")
    		{
    			alert("Harap isi Password");
    			document,entry.pw.focus();
    			return false;
    		}
    		if (document.entry.priv.value == "")
    		{
    			alert("Harap isi Account Access");
    			document,entry.priv.focus();
    			return false;
    		}
			for (var i = 0; i < document.entry.priv.value.length; i++)
				{
					if (valPriv.indexOf(document.entry.priv.value.charAt(i)) == -1)
					{
						alert("Account Access hanya dapat diisi dengan 1 atau 2"); 
						document.entry.priv.focus();
						return false;
					}
				}
			if (document.entry.subjek.value == "")
    		{
    			alert("Harap isi bidang studi");
    			document,entry.subjek.focus();
    			return false;
    		}
    		if (document.entry.tgl.options[document.entry.tgl.selectedIndex].value == "")
    		{
    			alert("Harap Isi Tanggal Lahir");
    			document.entry.tgl.focus();
    			return false;
    		}
    		if (document.entry.bln.options[document.entry.bln.selectedIndex].value == "")
    		{
    			alert("Harap Isi Bulan Lahir");
    			document.entry.bln.focus();
    			return false;
    		}
    		if (document.entry.thn.options[document.entry.thn.selectedIndex].value == "")
    		{
    			alert("Harap Isi Tahun Lahir");
    			document.entry.thn.focus();
    			return false;
    		}
           submitform = window.confirm("Submit ?")
           if (submitform == true)
           {
              document.entry.submit();
              return true;
           }
           else
           {
              return false;
           }
    	}
    </script>
	<title>Entry Data Guru</title>
</head>
<body>
	<form name=entry method=post action=entry_do.php>
	<br>
	<p align="center"><h1>ENTRY DATA GURU</h1></p>
	<p align="center">
		<table>
			<tr>
				<td>
					Nama Lengkap
				</td>
				<td>
					<input type=text name=nama maxlength=20>
				</td>
			</tr>
			<tr>
				<td>
					Username
				</td>
				<td>
					<input type=text name=ui maxlength=20>
				</td>
			</tr>
			<tr>
				<td>
					Password
				</td>
				<td>
					<input type=password name=pw maxlength=20>
				</td>
			</tr>
			<tr>
				<td>
					Account Access (1 atau 2)
				</td>
				<td>
					<input type=text name=priv maxlength=20>
				</td>
			</tr>
			<tr>
				<td>
					Bidang Studi
				</td>
				<td>
					<input type=text name=subjek maxlength=20>
				</td>
			</tr>
			<tr>
				<td>
					Tanggal Lahir
				</td>
				<td>
					<select name=tgl title='Tanggal'>
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
						<select name=bln title='Bulan'>
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
						<select name=thn title='Tahun'>
							<option value=''>--Thn--</option>
<?php
             for ($i=Date('Y')-80;$i<=Date('Y');$i++)
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
				<td>&nbsp </td>
			</tr>
    		<tr>
    			 <td colspan=2">
    					<p align="center"><input type=button value='SUBMIT' style="width:72mm" ONCLICK=cek()></p>
    			 </td>
    		</tr>
			<tr>
				<td>&nbsp </td>
			</tr>
		</table></p>
		<footer>
	<div class="foot-temp" style="height : 150px">
		<div class="foot-tab" style="order: 1; flex: 0 1 200px">
			<a href="http://kanisius.edu/index.php/en/">
			<img src="./img/contact_cc.png"/>
			</a>
		</div>
	<div class="foot-tab" style="order: 3; width : 220px; position : absolute; right : 0px; flex: 0 1 200px; margin-right : 30px">
		<img height="64px" src="./img/logo_amdg.png" style="position : absolute; left : 50%; margin-left : -30px" width="64px" />
	</div>
</div>
</footer>

	</form>