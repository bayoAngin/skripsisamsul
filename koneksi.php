<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbName = "spk_lahan_karet";
	mysql_connect($host, $user, $pass);
	mysql_select_db($dbName) or die ("Connect Failed !! : ".mysql_error());
?>

