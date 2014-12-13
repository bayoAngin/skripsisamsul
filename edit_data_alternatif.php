<html>
<head>
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<title>Edit Data Alternatif</title>
</head>
<body>

<form class="form-horizontal" role="form" action="proses_tambah_data_alternatif.php" method="POST">
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
			<div class="form-group">
			<label for="no_spt" class="col-md-2 control-label">No.SPT</label>
			<div class="col-md-10">
			<input type="text" class="form-control" name="no_spt">
			</div>
			</div>
			
			<div class="form-group">
			<label for="klasifikasi" class="col-md-2 control-label">Klasifikasi</label>
			<div class="col-md-10">
			<input type="text" class="form-control" name="klasifikasi">
			</div>
			</div>
				
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
