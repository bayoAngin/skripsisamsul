<?php 
	include "koneksi.php";
	include "cek_login.php";

	$user_name = $_SESSION['user_name'];
	$id_wilayah = $_SESSION['id_wilayah'];
	
	$tampil_wilayah = "SELECT * FROM `wil_kriteria` WHERE `id_wilayah` = '$id_wilayah'";
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
	    $('#tabel_bobot_wp').DataTable({
	    	"bAutoWidth": false,
	    	"aoColumns": [
	    	          	{"sWidth":"10%"},
	    	          	{"sWidth":"50%"},
	    	          	{"sWidth":"40%"}]
	        });
	    
	} );
	</script>

	<title>Weighted Product | <?php echo $user_name; ?></title>
</head>
<body>


	<div class="row" style="margin-top: 50pt">
		<div class="col-sm-offset-3 col-sm-6 panel panel-primary" style="text-align: center">
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

			<h4>Tentukan bobot masing-masing kriteria!</h4>
		
			<div class="panel-body">
				<div class="row" style="margin-top: 10pt">
					<div class="col-sm-12" style="text-align: center;">
						<form action="proses_simpan_bobot_wp.php" method="POST">
							<table border="1" cellpadding="5" cellspacing="5" class="display" id="tabel_bobot_wp">
							<thead  text-align="center" >
								<tr>
									<th style="text-align: center;">No.</th>
									<th style="text-align: center;">Kriteria</th>
									<th style="text-align: center;">Bobot</th>
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
		$bobot = mysql_fetch_array($result);
		$id_wil_kriteria = $tampil_hasil['id_wil_kriteria'];
		
		echo"<tr>
						<td style=\"text-align: center;\">".$nomor."</td>
						<td>".$kriteria['kriteria']."</td>
						<td style=\"text-align: center;\"><input type='text' class='form-control' id='bobot' name='bobot'></td>
					</tr>";
		$nomor++;
	}
?>	
							</tbody>
						</table>
						<div class="row">
						<div style="text-align: center">
						    <input type="submit" class="btn btn-success" value="Simpan">
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
