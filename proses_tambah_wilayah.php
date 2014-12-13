<?php
	include('koneksi.php');
	
	if(isset ($_POST["user_name"]) && isset ($_POST["nama_wilayah"])){
		$sql_tambah_wilayah = "INSERT INTO wilayah (user_name, nama_wilayah) VALUES ('". $_POST['user_name']. "', '" .$_POST['nama_wilayah']. "') ";
		$hasil = mysql_query($sql_tambah_wilayah) or die(mysql_error());
		
		if($hasil == 0){
			header("Location:tambah_wilayah.php");
		} else {
			//header("Location:index.php");
			?>
				<script language="javascript">
					alert("Berhasil! Wilayah telah ditambahkan");
					document.location.href = "index.php";
				</script>
			<?php	
		}
	}
?>