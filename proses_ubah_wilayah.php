<?php
	include('koneksi.php');
	
	if(isset ($_POST["nama_wilayah"])){
		$sql_ubah_wilayah = "UPDATE wilayah SET nama_wilayah = '".$_POST['nama_wilayah']."' WHERE id_wilayah = '".$_POST['id_wilayah']."'";
		$hasil = mysql_query($sql_ubah_wilayah) or die(mysql_error());
		
		if($hasil == 0){
			header("Location:index.php");
		} else {
			// header("Location:data_alternatif.php");
			?>
				<script language="javascript">
					alert("Berhasil! Wilayah telah diubah");
					document.location.href = "index.php";
				</script>
			<?php	
			
		}
	}
?>