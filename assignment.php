<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "organizer";
	$conn = new mysqli($servername ,$username, $password, $dbname);
	$sql = "SELECT IdGuru, Assignment, Selesai FROM assignment";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
			if($row["IdGuru"]==$_SESSION['user_id'])
				{
					echo "Tugas: " .$row["Assignment"]. " - Selesai: " .$row["Selesai"]."<br>";
				}
			}	
		}
		echo'asd'.$_SESSION['user_id'].'';
?>