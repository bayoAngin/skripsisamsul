<?php
	include('koneksi.php');
	include('cek_login.php');
	
	if(isset ($_POST["nama_wilayah"])){
		$sql_tambah_wilayah = "INSERT INTO wilayah (user_name, nama_wilayah) VALUES ('". $_SESSION['user_name']. "', '" .$_POST['nama_wilayah']. "') ";
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