<?php
	include "koneksi.php";
	include "cek_login.php";
	$user_name = $_SESSION['user_name'];
?>

<html>
<head>
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<title>Info | <?php echo $user_name; ?></title>
</head>
<body>

	<div class="row" style="margin-top: 30pt">
		<div class="col-sm-offset-3 col-sm-6 panel panel-primary" style="text-align: center">
			<div class="panel-heading">	
			<h1>Tentang Aplikasi</h1><br>
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
		<div class="row">
		<h3>Penentuan Lahan Karet Terbaik berdasarkan Metode Weighted Product atau SMART</h3><br>
			<div class="col-sm-4">
			<img src="gambar/karet.jpg">
			</div>

			<div class="col-sm-8" style="text-align: left">
			<p>
				Weighted Product yang lebih efisien karena waktu yang dibutuhkan dalam 
				perhitungan lebih singkat, metode SMART, melakukan pengambilan keputusan 
				yang multiatribut. Sehingga diharapkan akan tercipta suatu sistem pengambilan 
				keputusan yang akurat. Dan kedua metode ini perlu dibandingkan apakah memberikan 
				alternatif keputusan yang sama sehingga si pengambil keputusan yakin telah menentukan 
				pilihan terbaik.
			</p>
			
			<p>
				Weighted Product yang lebih efisien karena waktu yang dibutuhkan dalam 
				perhitungan lebih singkat, metode SMART, melakukan pengambilan keputusan 
				yang multiatribut. Sehingga diharapkan akan tercipta suatu sistem pengambilan 
				keputusan yang akurat. Dan kedua metode ini perlu dibandingkan apakah memberikan 
				alternatif keputusan yang sama sehingga si pengambil keputusan yakin telah menentukan 
				pilihan terbaik.
			</p>
			</div>	
		</div>
		</div>
		</div>
	</div>
</body>
</html>
