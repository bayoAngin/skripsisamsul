<html>
<head>

<script src="jquery/jquery.js"></script>

<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
<script src="bootstrap/dist/js/bootstrap.min.js"></script>

<title>Masuk</title>
</head>
<body>

<form class="form-horizontal" role="form" action="proses_login.php" method="POST">
	<div class="row" style="margin-top: 100pt">
		<div class="col-sm-offset-4 col-sm-4 panel panel-primary" style="text-align: center">
		<div class="panel-heading">
			<h3>Penentuan Lahan Karet Terbaik</h3>
		</div>
		
		<div class="panel-body">
			<h4>Masukkan Username dan Password Anda!</h4><br>
				<div class="form-group">
				<label for="username" class="col-md-2 control-label">Username</label>
				<div class="col-md-10">
				<input type="text" class="form-control" id="username" name="username" placeholder="Username">
				</div>
				</div>
		  
				<div class="form-group">
				<label for="password" class="col-md-2 control-label">Password</label>
				<div class="col-md-10">
				<input type="password" class="form-control" id="password" name="password" placeholder="Password">
				</div>
				</div>
				
				<div class="form-group">
				<button type="submit" class="btn btn-success">Masuk</button>
				</div>
		</div>
		</div>
	</div>
</form>
</body>
</html>
