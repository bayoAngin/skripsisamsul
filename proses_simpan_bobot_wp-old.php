<?php
	include('koneksi.php');
	include('cek_login.php');

	$id_wilayah = $_SESSION['id_wilayah'];
	
	if(isset ($_POST["bobot"])){
		$sql_simpan_bobot = "UPDATE wil_kriteria SET bobot =  '".$_POST['bobot']."' WHERE `id_wilayah` = '$id_wilayah'";
		$hasil = mysql_query($sql_simpan_bobot) or die(mysql_error());
		
		if($hasil == 0){
			header("Location:wp.php");
		} else {
			// header("Location:data_alternatif.php");
			?>
				<script language="javascript">
					alert("Berhasil! Bobot telah disimpan");
					document.location.href = "nilai_wp.php";
				</script>
			<?php	
			
		}
	}
?>
