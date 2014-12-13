<?php

	include "koneksi.php";

	$aksi = strtolower($_POST['aksi']);
	$id = $_REQUEST['id'];
	
	if($aksi == "hapus")
	{
		//echo "Anda memilih aksi Hapus pada record $id...<br/>";
		$hapus = "DELETE FROM alternatif WHERE id_alternatif = '$id'";
		$hapus_query = mysql_query($hapus);
		
		if($hapus_query == 0){
				header("Location:data_alternatif.php");
			} else {
				?>
					<script language="javascript">
						alert("Berhasil! Alternatif telah dihapus");
						document.location.href = "data_alternatif.php";
					</script>
				<?php	
			}
		
		//if ($hapus_query) {echo "Record $id berhasil dihapus ...";}
		//else {echo "Gagal menghapus record";}
	}

	else 
	{
		$pilih = "SELECT * FROM alternatif WHERE id_alternatif = '$id'";
		$pilih_query = mysql_query($pilih);
		
		while ($pilih_hasil = mysql_fetch_array($pilih_query))
		{
			$id_alternatif = $pilih_hasil['id_alternatif'];
			$no_spt = $pilih_hasil['no_spt'];
			$klasifikasi = $pilih_hasil['klasifikasi'];
?>

<html>
<head>
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<title>Edit Data Alternatif</title>
</head>
<body>

<form class="form-horizontal" role="form" action="proses_update_alternatif.php" method="POST">
	<div class="row" style="margin-top: 100pt">
		<div class="col-sm-offset-4 col-sm-4 panel panel-primary" style="text-align: center">
		<div class="panel-heading">	
			<h1>Edit Data Alternatif</h1><br>
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
			<input type ="hidden" name="id_alternatif" size="30" value="<?php echo $id_alternatif;?>" maxlength="50"/>
			<div class="form-group">
			<tr>
				<td><label for="no_spt" class="col-md-2 control-label">No.SPT</label></td>
				<div class="col-md-10">
				<td><input type="text" class="form-control" name="no_spt" value="<?php echo $no_spt;?>" size="30" maxlength="50"/></td>
				</div>
			</div>
			</tr>
			
			<div class="form-group">
			<tr>
				<td><label for="klasifikasi" class="col-md-2 control-label">Klasifikasi</label></td>
				<div class="col-md-10">
				<td><input type="text" class="form-control" name="klasifikasi" value="<?php echo $klasifikasi;?>" size="30" maxlength="50"/></td>
				</div>
			</div>
			</tr>
					
			<div class="form-group">	
			<input type="submit" class="btn btn-success" value="Simpan"></submit>
			<a role="button" class="btn btn-default" href="data_alternatif.php">Batal</a>
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