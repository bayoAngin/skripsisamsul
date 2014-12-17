<?php
	include('koneksi.php');
	include('cek_login.php');
	
	$id_wilayah= $_SESSION['id_wilayah'];
	
	if(isset ($_POST["C1"]) || isset ($_POST["C2"]) || isset ($_POST["C3"]) || isset ($_POST["C4"]) || isset ($_POST["C5"]) || isset ($_POST["C6"]) || isset ($_POST["C7"]) || isset ($_POST["C8"]) || isset ($_POST["9"]) || isset ($_POST["C10"]) || isset ($_POST["C11"])){
		$sql_simpan_data_kriteria = "INSERT INTO `wil_kriteria` (`id_wil_kriteria`, `id_wilayah`, `id_kriteria`) VALUES ";
		
		$before = false;

		if(isset ($_POST["C1"])){
			$sql_simpan_data_kriteria = $sql_simpan_data_kriteria."(NULL,".$id_wilayah.",1)";
			$before = true;
		}
		if(isset ($_POST["C2"])){
			if($before){
				$sql_simpan_data_kriteria = $sql_simpan_data_kriteria.",";
			}
			$before=true;
			$sql_simpan_data_kriteria = $sql_simpan_data_kriteria."(NULL,".$id_wilayah.",2)";
		}
		if(isset ($_POST["C3"])){
			if($before){
				$sql_simpan_data_kriteria = $sql_simpan_data_kriteria.",";
			}
			$before=true;
			$sql_simpan_data_kriteria = $sql_simpan_data_kriteria."(NULL,".$id_wilayah.",3)";
		}
		if(isset ($_POST["C4"])){
			if($before){
				$sql_simpan_data_kriteria = $sql_simpan_data_kriteria.",";
			}
			$before=true;
			$sql_simpan_data_kriteria = $sql_simpan_data_kriteria."(NULL,".$id_wilayah.",4)";
		}
		if(isset ($_POST["C5"])){
			if($before){
				$sql_simpan_data_kriteria = $sql_simpan_data_kriteria.",";
			}
			$before=true;
			$sql_simpan_data_kriteria = $sql_simpan_data_kriteria."(NULL,".$id_wilayah.",5)";
		}
		if(isset ($_POST["C6"])){
			if($before){
				$sql_simpan_data_kriteria = $sql_simpan_data_kriteria.",";
			}
			$before=true;
			$sql_simpan_data_kriteria = $sql_simpan_data_kriteria."(NULL,".$id_wilayah.",6)";
		}
		if(isset ($_POST["C7"])){
			if($before){
				$sql_simpan_data_kriteria = $sql_simpan_data_kriteria.",";
			}
			$before=true;
			$sql_simpan_data_kriteria = $sql_simpan_data_kriteria."(NULL,".$id_wilayah.",7)";
		}
		if(isset ($_POST["C8"])){
			if($before){
				$sql_simpan_data_kriteria = $sql_simpan_data_kriteria.",";
			}
			$before=true;
			$sql_simpan_data_kriteria = $sql_simpan_data_kriteria."(NULL,".$id_wilayah.",8)";
		}
		if(isset ($_POST["C9"])){
			if($before){
				$sql_simpan_data_kriteria = $sql_simpan_data_kriteria.",";
			}
			$before=true;
			$sql_simpan_data_kriteria = $sql_simpan_data_kriteria."(NULL,".$id_wilayah.",9)";
		}
		if(isset ($_POST["C10"])){
			if($before){
				$sql_simpan_data_kriteria = $sql_simpan_data_kriteria.",";
			}
			$before=true;
			$sql_simpan_data_kriteria = $sql_simpan_data_kriteria."(NULL,".$id_wilayah.",10)";
		}
		if(isset ($_POST["C11"])){
			if($before){
				$sql_simpan_data_kriteria = $sql_simpan_data_kriteria.",";
			}
			$before=true;
			$sql_simpan_data_kriteria = $sql_simpan_data_kriteria."(NULL,".$id_wilayah.",11)";
		}
		$sql_simpan_data_kriteria = $sql_simpan_data_kriteria.";";
		//echo $sql_simpan_data_kriteria;
		$hasil = mysql_query($sql_simpan_data_kriteria) or die(mysql_error()); 
		
		if($hasil == 0){
			header("Location:data_kriteria.php");
		} else {
			// header("Location:metode.php");
			?>
				<script language="javascript">
					alert("Berhasil! Data Kriteria telah disimpan");
					document.location.href = "metode.php";
				</script>
			<?php	
			
		}
	}
?>