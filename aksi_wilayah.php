<?php

	include "koneksi.php";

	$aksi = strtolower($_POST['aksi']);
	$id = $_REQUEST['id'];
	
	if($aksi == "hapus")
	{
		//echo "Anda memilih aksi Hapus pada record $id...<br/>";
		$hapus = "DELETE FROM wilayah WHERE id_wilayah = '$id'";
		$hapus_query = mysql_query($hapus);
		
		if($hapus_query == 0){
				header("Location:index.php");
			} else {
				?>
					<script language="javascript">
						alert("Berhasil! Wilayah telah dihapus");
						document.location.href = "index.php";
					</script>
				<?php	
			}
		
		//if ($hapus_query) {echo "Record $id berhasil dihapus ...";}
		//else {echo "Gagal menghapus record";}
	}

	else 
	{
		echo "Anda memilih aksi Edit ...";
	}
?>