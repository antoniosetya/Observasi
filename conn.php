<?php

		$namadb = "organizer";
		$userdb = "root";
		$passdb = "";
	mysql_connect("localhost", "$userdb", "$passdb")or die("cannot connect".mysql_error()); 
	mysql_select_db("$namadb")or die("cannot select DB".mysql_error());
?>