<?php
	include('koneksi.php');
	
	if(isset ($_POST["no_spt"]) && isset ($_POST["klasifikasi"])){
		$sql_ubah_data_alternatif = "UPDATE alternatif SET no_spt = ". $_POST['no_spt']. ", klasifikasi = '".$_POST['klasifikasi']."' WHERE id_alternatif = ".$_POST['id_alternatif'];
		$hasil = mysql_query($sql_ubah_data_alternatif) or die(mysql_error());
		
		if($hasil == 0){
			header("Location:data_alternatif.php");
		} else {
			// header("Location:data_alternatif.php");
			?>
				<script language="javascript">
					alert("Berhasil! Data Alternatif telah diubah");
					document.location.href = "data_alternatif.php";
				</script>
			<?php	
			
		}
	}
?>