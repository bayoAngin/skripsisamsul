<?php
	include('koneksi.php');
	
	if(isset ($_POST["C1"]) || isset ($_POST["C2"]) || isset ($_POST["C3"]) || isset ($_POST["C4"]) || isset ($_POST["C5"]) || isset ($_POST["C6"]) || isset ($_POST["C7"]) || isset ($_POST["C8"]) || isset ($_POST["9"]) || isset ($_POST["C10"]) || isset ($_POST["C11"])){
		$sql_simpan_data_kriteria = "INSERT INTO kriteria (kriteria) VALUES ('".$_POST['C1'].", ".$_POST['C2'].", ".$_POST['C3'].", ".$_POST['C4'].", ".$_POST['C5'].", ".$_POST['C6'].", ".$_POST['C7'].", ".$_POST['C8'].", ".$_POST['C9'].", ".$_POST['C10'].", ".$_POST['C11']."')";
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