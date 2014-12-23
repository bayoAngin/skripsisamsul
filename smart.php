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
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<title>SMART | <?php echo $user_name; ?></title>
</head>
<body>

   <div class="row" style="margin-top: 30pt">
      <div class="col-sm-offset-2 col-sm-8 panel panel-primary" style="text-align: center">
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
            <label for="name">Kriteria Paling Penting (Bobot dimulai dari 100 -> 10)</label>
               <div class="row">
                  <div class="col-sm-8">
                  <?php for($i = 0; $i < mysql_num_rows($tampil_query); $i++) { ?>
                  <select class="form-control">
                  <?php 
                     $tampil_wilayah = "SELECT * FROM `wil_kriteria` WHERE `id_wilayah` = '$id_wilayah'";
                     $tampil_query2 = mysql_query($tampil_wilayah); 
                     while($tampil_hasil = mysql_fetch_array($tampil_query2))
                     {
                        $id_wil_kriteria = $tampil_hasil['id_wil_kriteria'];
                        $id_kriteria = $tampil_hasil['id_kriteria'];

                        // Ambil definisi kriteria berdasarkan id_kriteria 
                        $query = "SELECT kriteria FROM kriteria WHERE `id_kriteria` = ".$id_kriteria;
                        $result = mysql_query($query);
                        $kriteria = mysql_fetch_array($result);
                        echo "<option>".$kriteria['kriteria']."</option>";
                     }
                  ?> 
                  </select>
                  <? } ?>
                  </div>

                  <div class="col-sm-4">
                     <?php for($i = 0; $i < mysql_num_rows($tampil_query); $i++) { ?>
                     <input type="text" class="form-control" id="bobot" name="bobot" placeholder="bobot">
                     <? } ?>
                  </div>
               </div>
            </div>
            

            <div class="col-sm-6">
            <label for="name">Kriteria Paling Tidak Penting (Bobot dimulai dari 10 -> 100)</label>
               <div class="row">
                  <div class="col-sm-8">
                  <?php for($i = 0; $i < mysql_num_rows($tampil_query); $i++) { ?>
                  <select class="form-control">
                  <?php 
                     $tampil_wilayah = "SELECT * FROM `wil_kriteria` WHERE `id_wilayah` = '$id_wilayah'";
                     $tampil_query2 = mysql_query($tampil_wilayah); 
                     while($tampil_hasil = mysql_fetch_array($tampil_query2))
                     {
                        $id_wil_kriteria = $tampil_hasil['id_wil_kriteria'];
                        $id_kriteria = $tampil_hasil['id_kriteria'];

                        // Ambil definisi kriteria berdasarkan id_kriteria 
                        $query = "SELECT kriteria FROM kriteria WHERE `id_kriteria` = ".$id_kriteria;
                        $result = mysql_query($query);
                        $kriteria = mysql_fetch_array($result);
                        echo "<option>".$kriteria['kriteria']."</option>";
                     }
                  ?> 
                  </select>
                  <? } ?>
                  </div>

                  <div class="col-sm-4">
                     <?php for($i = 0; $i < mysql_num_rows($tampil_query); $i++) { ?>
                     <input type="text" class="form-control" id="bobot" name="bobot" placeholder="bobot">
                     <? } ?>
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