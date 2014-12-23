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


	/*$id_kriteria = 0;
	
	$query = "SELECT alias FROM kriteria";
	$tampil_query2 = mysql_query($query)or die (mysql_error());*/

	$user_name = $_SESSION['user_name'];
	$id_wilayah = $_SESSION['id_wilayah'];
	
	$tampil_wilayah = "SELECT * FROM `wil_kriteria` WHERE `id_wilayah` = '$id_wilayah'";
	$tampil_query2 = mysql_query($tampil_wilayah);


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
	    $('#tabel_wp').DataTable({
	    	"bAutoWidth": false,
	    	"aoColumns": [
				{"sWidth":"20%"},
	    	          	{"sWidth":"30%"},
	    	          	{"sWidth":"50%"}]
	        });
	    
	} );
	</script>

	<title>Nilai Weighted Product | <?php echo $user_name; ?></title>
</head>
<body>

	<div class="row" style="margin-top: 50pt">
		<div class="col-sm-offset-1 col-sm-10 panel panel-primary" style="text-align: center">
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
						<form action="proses_hitung_wp.php" method="POST">
							<table border="1" cellpadding="5" cellspacing="5" class="display" id="tabel_wp">
							<thead  text-align="center">
								<tr>
									<th rowspan="2"  style="text-align: center;">Alternatif (No. SPT)</th>
									<th colspan="<?php echo(mysql_num_rows($tampil_query2)); ?>" style="text-align: center;">Kriteria </th>
								</tr>
								<tr>
				
<?php
	while($tampil_hasil2 = mysql_fetch_array($tampil_query2))
	{
		$id_wil_kriteria = $tampil_hasil2['id_wil_kriteria'];
		$id_kriteria = $tampil_hasil2['id_kriteria'];

		// Ambil definisi kriteria berdasarkan id_kriteria	
		$query = "SELECT alias FROM kriteria WHERE `id_kriteria` = ".$id_kriteria;
		$result = mysql_query($query);
		$alias = mysql_fetch_array($result);
		
		echo"<th>".$alias['alias']."</th>";
	}
?>
								</tr>
							</thead>
							<tbody>	
<?php 
	$jlh_kriteria = mysql_num_rows($tampil_query2);

	while($tampil_hasil = mysql_fetch_array($tampil_query))
	{
		$alternatif = $tampil_hasil['no_spt'];
		echo "<tr>";		
		echo"<td style=\"text-align: center;\">$alternatif</td>";

		for($i = 0; $i < $jlh_kriteria; $i++) {
			echo "<td style=\"text-align: center;\"> <input type='text' class='form-control' id='nilai' name='nilai'> </td>";
		}

		echo "</tr>";
	}
?>	
							
							</tbody>
							</table><br>
			<div class="row">
				<div style="text-align: center">
					<input type="submit" class="btn btn-success" value="Hitung">
					<a role="button" class="btn btn-default" href="wp.php">Batal</a>
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
