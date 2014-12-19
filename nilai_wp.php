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
	    $('#tabel_wilayah').DataTable({
	    	"bAutoWidth": false,
	    	"aoColumns": [
	    	          	{"sWidth":"10%"},
	    	          	{"sWidth":"50%"},
	    	          	{"sWidth":"40%"}]
	        });
	    
	} );
	</script>

	<title>Nilai Weighted Product | <?php echo $user_name; ?></title>
</head>
<body>


	<div class="row" style="margin-top: 50pt">
		<div class="panel panel-primary" style="text-align: center">
			<div class="panel-heading">	
				<h1>Weighted Product</h1><br>
			</div><br>
			
			<div class="row">
				<div class="col-sm-6">
				<a role="button" class="btn btn-default" href="index.php">Halaman Depan</a>
				</div>
				
				<div class="col-sm-6">
				<a role="button" class="btn btn-danger" href="login2.php">Keluar</a>
				</div>
			</div><br>

			<h4>Masukkan nilai masing-masing kriteria!</h4>
		
			<div class="panel-body">
				<div class="row" style="margin-top: 10pt">
					<div class="col-sm-12" style="text-align: center;">
						<form action="proses_simpan_bobot_wp.php" method="POST">
							<table border="1" cellpadding="5" cellspacing="5" class="display" id="tabel_wilayah">
							<thead  text-align="center" >
		
		<tr>
			<th rowspan="2">No.</th>
			<th rowspan="2">Alternatif</th>
			<th colspan="11">Kriteria</th>
		</tr>

		<tr>
			<td>C1</td>
			<td>C2</td>
			<td>C3</td>
			<td>C4</td>
			<td>C5</td>
			<td>C6</td>
			<td>C7</td>
			<td>C8</td>
			<td>C9</td>
			<td>C10</td>
			<td>C11</td>
		</tr>
		
		<tr>
			<td>1</td>
			<td>3</td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
		</tr>
		
		<tr>
			<td>2</td>
			<td>16</td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
		</tr>

		<tr>
			<td>3</td>
			<td>4</td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
		</tr>

		<tr>
			<td>4</td>
			<td>27</td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
			<td style=\"text-align: center;\"><input type='text' class='form-control' id='nilai' name='nilai'></td>
		</tr>
							</thead>
							<tbody>						
<?php 
	$nomor = 1;
	while($tampil_hasil = mysql_fetch_array($tampil_query))
	{
		$alternatif = $tampil_hasil['alternatif'];
		$id = $tampil_hasil['id_alternatif'];
		
		echo"<tr>
						<td style=\"text-align: center;\">$nomor</td>
						<td>$alternatif</td>
						
					</tr>";
		$nomor++;
	}
?>	
							</tbody>
						</table>
						<div class="row">
						<div style="text-align: center">
						    <input type="submit" class="btn btn-success" value="Hitung">
						    <a role="button" class="btn btn-default" href="metode.php">Batal</a>
						</div>
						</div>
					</form>
					</div>
				</div>		
			</div>
		</div>	
	</div>

</body>
</html>
