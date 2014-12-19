<?php 
	include "koneksi.php";
	include "cek_login.php";
	
	$user_name = $_SESSION['user_name'];
	if(isset($_GET['id'])){
		$id_wilayah = $_GET['id'];
		$_SESSION['id_wilayah'] = $id_wilayah;
	} else {
		$id_wilayah = $_SESSION['id_wilayah'];
	}
	
	$nama_wilayah = "SELECT * FROM `wilayah` WHERE `id_wilayah` = ".$id_wilayah;
	$wilayah_query = mysql_query($nama_wilayah);
	$wilayah = mysql_fetch_array($wilayah_query);
	$nama_wilayah = $wilayah['nama_wilayah'];
	
	$_SESSION['nama_wilayah'] = $nama_wilayah;
	
	$tampil_alternatif = "SELECT * FROM `alternatif` WHERE `id_wilayah` = ".$id_wilayah;
	$tampil_query = mysql_query($tampil_alternatif);	
?>

<html>
<head>

<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/datatables/jquery.dataTables.css">

<script type="text/javascript" src="jquery/jquery.js"></script>

<script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/datatables/jquery.dataTables.js"></script>

<script>
$(document).ready( function () {
    $('#tabel_alternatif').DataTable({
    	"bAutoWidth": false,
    	"aoColumns": [
    	          	{"sWidth":"10%"},
    	          	{"sWidth":"10%"},
    	          	{"sWidth":"40%"},
    	          	{"sWidth":"40%"}]
        });
    
} );
</script>

<title>Data Alternatif | <?php echo $user_name; ?></title>
</head>
<body>

	<div class="row" style="margin-top: 50pt">
		<div class="col-sm-offset-3 col-sm-6 panel panel-primary" style="text-align: center">
			<div class="panel-heading">
				<h1>Data Alternatif</h1><br>
				Wilayah: <?php echo $_SESSION['nama_wilayah']?>
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
				<div class="row" style="margin-top: 10pt">
					<div class="col-sm-offset-1 col-sm-10" style="text-align: center">
						<table border="1" cellpadding="5" cellspacing="5" id="tabel_alternatif" class="display">
							<thead>
								<tr>
									<th style="text-align: center;">No.</th>
									<th style="text-align: center;">No.SPT</th>
									<th style="text-align: center;">Klasifikasi</th>
									<th style="text-align: center;">Opsi</th>
								</tr>
							</thead>
							<tbody>	
<?php 
	$nomor = 1;
	while($tampil_hasil = mysql_fetch_array($tampil_query))
	{
		$no_spt = $tampil_hasil['no_spt'];
		$klasifikasi = $tampil_hasil['klasifikasi'];
		$id = $tampil_hasil['id_alternatif'];
											
				echo"<tr>
						<td style=\"text-align: center;\">$nomor</td>
						<td style=\"text-align: center;\">$no_spt</td>
						<td>$klasifikasi</td>
						<td style=\"text-align: center;\">
							<form method=\"POST\" action=\"aksi_alternatif.php?id=$id\"><input type=\"hidden\" value=\"$id\" name=\"id\">
							<button type=\"submit\" name=\"aksi\" class=\"btn btn-success\" value=\"edit\">Ubah</button> <button type=\"submit\" name=\"aksi\" class=\"btn btn-danger\" value=\"hapus\">Hapus</button></td>
							</form>
						</td>
					</tr>";
		$nomor++;
	}
?>
							</tbody>		
						</table>
						<a role="button" class="btn btn-primary" href="tambah_data_alternatif.php">Tambah Data Alternatif</a>
						<a role="button" class="btn btn-primary" href="data_kriteria.php">Tentukan Kriteria</a> 
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>
