<?php 
	include "koneksi.php";
	include "cek_login.php";
	$user_name = $_SESSION['user_name'];
	
	$tampil_wilayah = "SELECT * FROM `wilayah` WHERE `user_name` = '$user_name'";
	$tampil_query = mysql_query($tampil_wilayah);	
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
    $('#tabel_wilayah').DataTable({
    	"bAutoWidth": false,
    	"aoColumns": [
    	          	{"sWidth":"10%"},
    	          	{"sWidth":"50%"},
    	          	{"sWidth":"40%"}]
        });
    
} );
</script>

<title>Halaman Depan | <?php echo $user_name; ?></title>
</head>
<body>
	<div class="row" style="margin-top: 50pt">
		<div class="col-sm-offset-3 col-sm-6 panel panel-primary" style="text-align: center">
			<div class="panel-heading">	
				<h1>Halaman Depan</h1><br>
			</div><br>
			
			<div class="row">
				<div class="col-sm-6">
				<a role="button" class="btn btn-default" href="info.php">Tentang Aplikasi</a>
				</div>
				
				<div class="col-sm-6">
				<a role="button" class="btn btn-danger" href="login2.php">Keluar</a>
				</div>
			</div>
		
			<div class="panel-body">
				<div class="row" style="margin-top: 10pt">
					<div class="col-sm-12" style="text-align: center">
						<table border="1" cellpadding="5" cellspacing="5" style="text-align: center" class="display" id="tabel_wilayah">
							<thead>
								<tr>
									<th>No.</th>
									<th>Wilayah</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>						
<?php 
	$nomor = 1;
	while($tampil_hasil = mysql_fetch_array($tampil_query))
	{
		$nama_wilayah = $tampil_hasil['nama_wilayah'];
		$id = $tampil_hasil['id_wilayah'];
											
				echo"<tr>
						<td>$nomor</td>
						<td>$nama_wilayah</td>
							<td>
							<form method=\"POST\" action=\"aksi_wilayah.php?id=$id\"><input type=\"hidden\" value=\"$id\" name=\"id\">
							<a role=\"button\" class=\"btn btn-success\" href=\"data_alternatif.php\">Pilih</a> <button type=\"submit\" name=\"aksi\" class=\"btn btn-default\" value=\"edit\">Ubah</button> <button type=\"submit\" name=\"aksi\" class=\"btn btn-danger\" value=\"hapus\">Hapus</button></td>
							</form>
							</td>
					</tr>";
		$nomor++;
	}
?>	
							</tbody>
						</table>
						<a role="button" class="btn btn-primary" href="tambah_wilayah.php">Tambah Wilayah</a>
					</div>
				</div>		
			</div>
		</div>	
	</div>
</body>
</html>
