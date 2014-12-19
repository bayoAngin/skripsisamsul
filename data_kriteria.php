<?php 
	include "koneksi.php";
	include "cek_login.php";
	
	$user_name = $_SESSION['user_name'];
	$id_wilayah = $_SESSION['id_wilayah'];

	$tampil_kriteria = "SELECT * FROM `wil_kriteria` WHERE `id_wilayah` = ".$id_wilayah;
	$tampil_query = mysql_query($tampil_kriteria);	
	
?>

<html>
<head>
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/datatables/jquery.dataTables.css">

<script type="text/javascript" src="jquery/jquery.js"></script>
<script type="text/javascript" src="bootstrap/datatables/jquery.dataTables.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>

<script>
$(document).ready( function () {
    $('#tabel_kriteria').DataTable({
    	"bAutoWidth": false,
    	"aoColumns": [
    	          	{"sWidth":"10%"},
    	          	{"sWidth":"50%"},
    	          	{"sWidth":"20%"},
    	          	{"sWidth":"20%"}]
        });
    
} );
</script>

<title>Data Kriteria | <?php echo $user_name; ?></title>
</head>
<body>

	<div class="row" style="margin-top: 50pt">
		<div class="col-sm-offset-3 col-sm-6 panel panel-primary" style="text-align: center">
			<div class="panel-heading">
			<h1>Data Kriteria</h1><br>
				Wilayah: <?php echo $_SESSION['nama_wilayah']?>
			</div><br>
	
			<div class="row">
				<div class="col-sm-6">
					<a role="button" class="btn btn-default" href="index.php">Halaman Depan</a>
				</div>
			
				<div class="col-sm-6"><a role="button" class="btn btn-danger" href="logout.php">Keluar</a>
				</div>
			</div>

			<div class="panel-body">
				<div class="row" style="margin-top: 10pt">
					<div class="col-md-offset-1 col-md-10" style="text-align: center">
						<table border="1" cellpadding="5" cellspacing="5" id="tabel_kriteria" class="display">
							<thead>
								<tr>
									<th style="text-align: center;">No.</th>
									<th style="text-align: center;">Kriteria</th>
									<th style="text-align: center;">Alias</th>
									<th style="text-align: center;">Opsi</th>
								</tr>
							</thead>
							<tbody>
	<?php
	$nomor = 1;
	while($tampil_hasil = mysql_fetch_array($tampil_query))
	{
		$id_kriteria = $tampil_hasil['id_kriteria'];
		$query = "SELECT * FROM kriteria WHERE `id_kriteria` = ".$id_kriteria;
		$result = mysql_query($query);
		$kriteria = mysql_fetch_array($result);
		$id_wil_kriteria = $tampil_hasil['id_wil_kriteria'];
		
		echo"<tr>
						<td style=\"text-align: center;\">".$nomor."</td>
						<td>".$kriteria['kriteria']."</td>
						<td style=\"text-align: center;\">".$kriteria['alias']."</td>
						<td style=\"text-align: center;\">
							<a role=\"button\" class=\"btn btn-danger\" href=\"hapus_kriteria.php?id=$id_wil_kriteria\">Hapus</td>
						</td>
					</tr>";
		$nomor++;
	}
	?>
							</tbody>
						</table>
						<a role="button" class="btn btn-danger" href="data_alternatif.php">Kembali</a> 
						<a role="button" class="btn btn-primary" href="tentukan_kriteria.php">Tambah Kriteria</a></td>
						<a role="button" class="btn btn-primary" href="metode.php">Pilih Metode</a></td>					
						</div>
					</div>
				</div>
			</div>
		</div>	
</body>
</html>