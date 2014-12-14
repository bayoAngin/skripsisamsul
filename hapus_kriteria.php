<?php

	include "koneksi.php";
	
	$id_wil_kriteria = $_GET['id'];

		//echo "Anda memilih aksi Hapus pada record $id...<br/>";
		$hapus = "DELETE FROM wil_kriteria WHERE id_wil_kriteria = '$id_wil_kriteria'";
		$hapus_query = mysql_query($hapus);
		
		if($hapus_query == 0){
				header("Location:data_kriteria.php");
			} else {
				?>
					<script language="javascript">
						alert("Berhasil! Wilayah telah dihapus");
						document.location.href = "data_kriteria.php";
					</script>
				<?php	
			}
		
		//if ($hapus_query) {echo "Record $id berhasil dihapus ...";}
		//else {echo "Gagal menghapus record";}
?>


