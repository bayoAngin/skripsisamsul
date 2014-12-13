<html>
<head>
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<title>Data Kriteria</title>
</head>
<body>

<form role="form" action="proses_simpan_data_kriteria.php" method="POST">
	<div class="row" style="margin-top: 50pt">
		<div class="col-sm-offset-3 col-sm-6 panel panel-primary" style="text-align: center">
		<div class="panel-heading">
			<h1>Data Kriteria</h1>
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
			<h4>Tentukan Kriteria yang Anda Gunakan!</h4>
				<div class="row">
					<div class="col-sm-4" style="text-align: left">
					<input type="checkbox" name="C1" value="1"> Suhu tahunan rata-rata<br>
					<input type="checkbox" name="C2" value="1"> Curah hujan tahunan rata-rata<br>
					<input type="checkbox" name="C3" value="1"> Jumlah bulan kering<br>
					</div>
					
					<div class="col-sm-4" style="text-align: left">
					<input type="checkbox" name="C4" value="1"> Fraksi kasar<br>
					<input type="checkbox" name="C5" value="1"> Kedalaman tanah<br>
					<input type="checkbox" name="C6" value="1"> Ketebalan gambut<br>
					<input type="checkbox" name="C7" value="1"> Salinitas<br>
					</div>
				
					<div class="col-sm-4" style="text-align: left">
					<input type="checkbox" name="C8" value="1"> Kedalaman sulfidik<br>
					<input type="checkbox" name="C9" value="1"> Lereng<br>
					<input type="checkbox" name="C10" value="1"> Batuan permukaan<br>
					<input type="checkbox" name="C11" value="1"> Singkapan batuan<br><br>
					</div>
				</div><br>
	
				<div class="row">
					<div style="text-align: center">
						<input type="submit" class="btn btn-primary" value="Simpan"></submit>
						<a role="button" class="btn btn-default" href="data_alternatif.php">Batal</a>
					</div>
				</div>	
		</div>
		</div>
	</div>
</form>
</body>
</html>
