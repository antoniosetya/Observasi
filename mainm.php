<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "organizer";
	$user = $_POST['user'];
	$pass = md5($_POST['pass']);
	$conn = new mysqli($servername ,$username, $password, $dbname);
	$sql = "SELECT User, Pass, Priv FROM account";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
			if($user==$row["User"]&&$pass==$row["Pass"]	)
			{
				if ($row["Priv"]=='1') 
				{
					$appl = "main1.php";
					$p = 1;
					setcookie("User",$user, time() + (86400),"/");
					setcookie("Pass",$pass, time() + (86400),"/");
					setcookie("Priv",1, time() + (86400),"/");
					break;
				}
				else if($row["Priv"]=='2') 
				{
				    $appl = "main2.php";
					$p = 2;
					setcookie("User",$user, time() + (86400),"/");
					setcookie("Pass",$pass, time() + (86400),"/");
					setcookie("Priv",2, time() + (86400),"/");
					break;
				}
				else if($row["Priv"]=='3') 
				{
				    $appl = "main3.php";
					$p = 3;
					setcookie("User",$user, time() + (86400),"/");
					setcookie("Pass",$pass, time() + (86400),"/");
					setcookie("Priv",3, time() + (86400),"/");
					break;
				}
			}
			else {
				$appl = "";
				$p = "";
			}
		}
	}
	if ($user==""){
		echo"<script>
			alert('Harap isi Username');
			window.location.href='login.php';
			</script>";
	}
	else { 
		if ($_POST['pass']==""){
		echo"<script>
			alert('Harap isi Password');
			window.location.href='login.php';
			</script>";
		}
		else if (($appl=="")) {
		echo "<script>
			alert('Username/Password Anda salah');
			window.location.href='login.php';
			</script>";
		}
	}

?>
<HTML>
  <HEAD>
     <TITLE></TITLE>
	 <Script Language="JavaScript">
	    function RunAppl()
		{
		   document.formappl.action = document.formappl.appl.value;
		   document.formappl.submit();
		}
	 </Script>
  </HEAD>
  <BODY onload=RunAppl()>
     <form name=formappl method=post>
	    <input type=hidden name=user value=<?php echo $user ?>>
	    <input type=hidden name=pass value=<?php echo $pass ?>>
	    <input type=hidden name=appl value=<?php echo $appl ?>>
		<input type=hidden name=priv value=<?php echo $p ?>>
	 </form>
  </BODY>
</HTML>