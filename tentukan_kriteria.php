<?php
    include "koneksi.php";
    include "cek_login.php";
    $user_name = $_SESSION['user_name'];
?>

<html>
<head>
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/datatables/jquery.dataTables.css">

<script type="text/javascript" src="jquery/jquery.js"></script>
<script type="text/javascript" src="bootstrap/datatables/jquery.dataTables.js"></script>

<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<title>Tentukan Kriteria | <?php echo $user_name; ?></title>

<script>
$(document).ready( function () {
    $('#tabel_alternatif').DataTable({
    	"bAutoWidth": false,
    	"aoColumns": [
    	          	{"sWidth":"10%"},
    	          	{"sWidth":"50%"},
    	          	{"sWidth":"10%"},
    	          	{"sWidth":"30%"}]
        });
    
} );
</script>



</head>
<body>

<form role="form" action="proses_simpan_data_kriteria.php" method="POST">
<div class="row" style="margin-top: 50pt">
<div class="col-sm-offset-3 col-sm-6 panel panel-primary"
	style="text-align: center">
<div class="panel-heading">
<h1>Data Kriteria</h1>
</div>
<br>



<h4>Tentukan Kriteria yang Anda Gunakan!</h4>
<div class="row">
<div class="col-sm-4" style="text-align: left"><input type="checkbox"
	name="C1" value="1"> Suhu tahunan rata-rata<br>
<input type="checkbox" name="C2" value="1"> Curah hujan tahunan
rata-rata<br>
<input type="checkbox" name="C3" value="1"> Jumlah bulan kering<br>
</div>

<div class="col-sm-4" style="text-align: left"><input type="checkbox"
	name="C4" value="1"> Fraksi kasar<br>
<input type="checkbox" name="C5" value="1"> Kedalaman tanah<br>
<input type="checkbox" name="C6" value="1"> Ketebalan gambut<br>
<input type="checkbox" name="C7" value="1"> Salinitas<br>
</div>

<div class="col-sm-4" style="text-align: left"><input type="checkbox"
	name="C8" value="1"> Kedalaman sulfidik<br>
<input type="checkbox" name="C9" value="1"> Lereng<br>
<input type="checkbox" name="C10" value="1"> Batuan permukaan<br>
<input type="checkbox" name="C11" value="1"> Singkapan batuan<br>
<br>
</div>
</div>
<br>

<div class="row">
<div style="text-align: center"><input type="submit"
	class="btn btn-primary" value="Simpan"></submit> <a role="button"
	class="btn btn-default" href="data_kriteria.php">Batal</a></div>
</div>
<br>
</div>
</div>
</div>
</form>
</body>
</html>
