<html>
<head>
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<title>Metode</title>
</head>
<body>
	
<form role="form" action="proses_metode.php" method="POST">	
	<div class="row" style="margin-top: 20pt">
		<div class="col-sm-offset-4 col-sm-4 panel panel-primary" style="text-align: center">
		<div class="panel-heading">
			<h1>Metode</h1>
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
			<h4>Tentukan Metode yang Anda Gunakan!</h4><br>
			<div class="row">
				<div class="panel panel-primary">
					<div class="panel-body">
					<h4>Weighted Product</h4>
					<a role="button" class="btn btn-success" href="hitung_wp.php">Hitung</a>	
					</div>
				</div>
			
				<div class="panel panel-primary">	
					<div class="panel-body">
					<h4>SMART</h4>
					<a role="button" class="btn btn-success" href="hitung_smart.php">Hitung</a>
					</div>
				</div>
					
				<div class="panel panel-primary">
					<div class="panel-body">
					<h4>Weighted Product dan SMART</h4>
					<a role="button" class="btn btn-success" href="hitung_wp_smart.php">Hitung</a>	
					</div>	
				</div>
			</div>
		</div>
		</div>
	</div>
</form>
</body>
</html>
