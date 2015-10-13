<?php
//ini_set("display_errors", 0);

		$namadb = "organizer";
		$userdb = "root";
		$passdb = "";
	mysql_connect("localhost", "$userdb", "$passdb")or die("cannot connect"); 
	mysql_select_db("$namadb")or die("cannot select DB");
?>
