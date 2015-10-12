<header>
	<div class="name">WELCOME, <?php /* automated name here */ echo $nama; ?> Ig. Ari Krisnawati <br> <?php echo date("d/m/Y"); ?> </div>
	<ul>
		<?php
			$admin = $_GET["admin"];
			echo $admin;
			if ($admin == 0) {
				echo '<li><a href="main.php?admin=0">Main Menu</a></li>
					  <li><a href="reports.php?admin=0">Reports</a></li>
		           	  <li><a href="profile.php?admin=0">Profile</a></li> ';
			}
			else if ($admin == 1) {
				echo '<li><a href="main.php?admin=1">Main Menu</a></li>
					  <li><a href="reports.php?admin=1">Scoring</a></li>
					  <li><a href="profile.php?admin=1">Profile</a></li>';
			}
		?>
    </ul> 
</header>