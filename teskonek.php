<html>
<head>
<title>Tes Koneksi MySQL</title>
</head>
<body>

	<?php
		$server = "localhost";
		$pemakai = "root";
		$password = "";
		
		$id_mysql = mysql_connect($server, $pemakai, $password);
		if (! $id_mysql)
			die ("Tak dapat melakukan koneksi ke server MySQL");
		
		print("Koneksi ke MySQL bisa dilakukan<br>\n");
		
		$db_spk_lahan_karet = mysql_select_db("spk_lahan_karet", $id_mysql);
		if (! $db_spk_lahan_karet)
			die ("Tak dapat mengakses database personalia");
			
		print("Database SPK Lahan Karet bisa diakses<br>\n");
		
		mysql_close($id_mysql);
	?>
	
</body>
</html>
