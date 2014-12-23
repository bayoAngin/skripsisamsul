<?php
   include "koneksi.php";
   include "cek_login.php";
   $user_name = $_SESSION['user_name'];
?>

<html>
<head>
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<title>SMART | <?php echo $user_name; ?></title>
</head>
<body>

   <div class="row" style="margin-top: 30pt">
      <div class="col-sm-offset-3 col-sm-6 panel panel-primary" style="text-align: center">
         <div class="panel-heading">   
         <h1>SMART</h1><br>
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
         <form action="proses_simpan_bobot_smart.php" method="POST">
         <h4>Tentukan ranking dan bobot masing-masin kriteria!</h4><br>
            <div class="col-sm-6">
            <label for="name">Kriteria Paling Penting</label>
               <div class="row">
                  <div class="col-sm-8">
                  <select class="form-control">
                     <option>C1</option>
                     <option>C2</option>
                     <option>C3</option>
                     <option>C4</option>
                     <option>C5</option>
                  </select>
                  </div>

                  <div class="col-sm-4">
                     <input type="text" class="form-control" id="bobot" name="bobot" placeholder="bobot">
                  </div>
               </div>
            </div>
            

            <div class="col-sm-6">
            <label for="name">Kriteria Paling Tidak Penting</label>
               <div class="row">
                  <div class="col-sm-8">
                  <select class="form-control">
                     <option>C1</option>
                     <option>C2</option>
                     <option>C3</option>
                     <option>C4</option>
                     <option>C5</option>
                  </select>
                  </div>

                  <div class="col-sm-4">
                     <input type="text" class="form-control" id="bobot" name="bobot" placeholder="bobot">
                  </div>
               </div>
            </div>
                  

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
</body>
</html>