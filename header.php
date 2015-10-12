<header>
	<div class="name">WELCOME, <?php /* automated name here */ echo $nama; ?> Ig. Ari Krisnawati <br> <?php echo date("d/m/Y"); ?> </div>
	<ul>
		<?php
			$admin = $_GET["admin"];
			if ($admin == 0) {
			?>
				<li><a href="main.php?admin=0">Main Menu</a></li>
				<li><a href="reports.php?admin=0">Reports</a></li>
		        <li><a href="profile.php?admin=0">Profile</a></li>
			<?php
			}
			else if ($admin == 1) {
			?>
				<li><a href="main.php?admin=1">Main Menu</a></li>
				<li><a href="scoring.php?admin=1">Scoring</a></li>
				<li><a href="profile.php?admin=1">Profile</a></li> 
			<?php
			}
		?>
    </ul> 
</header>