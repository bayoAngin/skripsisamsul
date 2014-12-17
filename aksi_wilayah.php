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
		$pilih = "SELECT * FROM wilayah WHERE id_wilayah = '$id'";
		$pilih_query = mysql_query($pilih);
		
		while ($pilih_hasil = mysql_fetch_array($pilih_query))
		{
			$id_wilayah = $pilih_hasil['id_wilayah'];
			$user_name = $pilih_hasil['user_name'];
			$nama_wilayah = $pilih_hasil['nama_wilayah'];
?>

<html>
<head>
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<title>Ubah Wilayah | <?php echo $user_name; ?></title>
</head>
<body>

<form class="form-horizontal" role="form" action="proses_ubah_wilayah.php" method="POST">
	<div class="row" style="margin-top: 100pt">
		<div class="col-sm-offset-4 col-sm-4 panel panel-primary" style="text-align: center">
		<div class="panel-heading">	
			<h1>Ubah Wilayah</h1><br>
		</div><br>
		
		<div class="row">
			<div class="col-sm-6">
				<a role="button" class="btn btn-default" href="index.php">Halaman Depan</a>
				</div>
				
				<div class="col-sm-6">
				<a role="button" class="btn btn-danger" href="logout.php">Keluar</a>
			</div>
		</div>
	
		<div class="panel-body">
			<input type ="hidden" name="id_wilayah" size="30" value="<?php echo $id_wilayah;?>" maxlength="50"/>
			<div class="form-group">
			<tr>
				<td><label for="nama_wilayah" class="col-md-2 control-label">Wilayah</label></td>
				<div class="col-md-10">
				<td><input type="text" class="form-control" name="nama_wilayah" value="<?php echo $nama_wilayah;?>" size="30" maxlength="50"/></td>
				</div>
			</div>
			</tr>
				
			<div class="form-group">	
			<input type="submit" class="btn btn-success" value="Simpan"></submit>
			<a role="button" class="btn btn-default" href="index.php">Batal</a>
			</div>
		</div>
		</div>
	</div>
</form>
</body>
</html>

<?php 
		}
	}
?>
