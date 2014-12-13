<html>
<head>
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<title>Tambah Wilayah</title>
</head>
<body>

<form class="form-horizontal" role="form" action="proses_tambah_wilayah.php" method="POST">
	<div class="row" style="margin-top: 100pt">
		<div class="col-sm-offset-4 col-sm-4 panel panel-primary" style="text-align: center">
		<div class="panel-heading">	
			<h1>Tambah Wilayah</h1><br>
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
			<label for="user_name" class="col-md-2 control-label">Username</label>
			<div class="col-md-10">
			<input type="text" class="form-control" name="user_name">
			</div>
			</div>
			
			<div class="form-group">
			<label for="nama_wilayah" class="col-md-2 control-label">Wilayah</label>
			<div class="col-md-10">
			<input type="text" class="form-control" name="nama_wilayah">
			</div>
			</div>
				
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
