<?php
	$user = $_COOKIE['User'];
	$pass = $_COOKIE['Pass'];
	$p = $_COOKIE['Priv'];
?>

<header>
	<div class="name">WELCOME, <?php echo $user ?> <br> <?php echo date("d/m/Y"); ?> </div>
	<div style="float : right">
		<ul>
		<?php
			error_reporting(0); 
			if ($p == 1) {
			?>
				<a href="main1.php"><li>Main Menu</li></a>
				<a href="reports.php"><li>Reports</li></a>
			<?php
			}
			else if ($p == 2) {
			?>
				<a href="main1.php"><li>Main Menu</li></a>
				<a href="lapakhir.php"><li>Laporan Akhir</li></a>
				<a href="assignment_output.php"><li>Assignment</li></a>
			<?php
			}
			else if ($p == 3) {
				?>
				<a href="main3.php"><li>Main Menu</li></a>
				<a href="lapakhir.php"><li>Laporan Akhir</li></a>
				<a href="lapgur_update.php"><li>Laporan Guru/li></a><
				<a href="assignment_ubah.php"><li>Assignment</li></a>
			<?php
			}
		?>
		<a href="profile.php"><li>Profile</li></a>
		<a href="logout.php"><li>Logout</li></a>
    </ul>
	</div>
</header>