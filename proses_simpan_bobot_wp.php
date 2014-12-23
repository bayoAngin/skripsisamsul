<?php
include('koneksi.php');
include('cek_login.php');

foreach($_POST as $key => $value){
	// Melihat apakah name dari post merupakan bobot
	$bobotinputpost = strcmp('bobot',substr($key, 0, 5));
	// jika ya
	if($bobotinputpost == 0){
		// ambil id_wil_kriteria dari substring (membuang kata 'bobot') 
		$id_wil_kriteria = substr($key,5);

		$sql_simpan_bobot = "UPDATE wil_kriteria SET bobot = '".$value."' WHERE `id_wil_kriteria` = '$id_wil_kriteria'";
		$hasil = mysql_query($sql_simpan_bobot) or die(mysql_error());
	}
}
?>
<script language="javascript">
	alert("Berhasil! Bobot telah disimpan");
	document.location.href = "nilai_wp1.php";
</script>
