<!DOCTYPE html>
<html>

<head>
  <title>Data pernikahan</title>

  <style>
     *{
      margin: 0;
      padding: 0;
    }
    
    .body {
      padding: 0;
      margin: 0;
    }

    .Parent {
      display: flex;
      flex-direction: row;
    }

    .child1 {
      width: 25%;
      height: 100vh;
      background-color: #B8860B;
      text-align: right;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .child2 {
      width: 75%;
      background-color: #ffffff;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .judullogin{
      margin-top: 100px;
    }

  </style>

</head>

<body>

  <?php 

  include 'koneksi.php';

  session_start();

  if(isset($_SESSION['namauser'])){
?>
 <div class="Parent">


    <div class="child1">
    
    <div style="display: flex; width: 100%;justify-content: center;">
    <ul style="list-style-type: none;">
      <li>
          <div style="display: flex; justify-content: center;text-align: center;padding: 10px;margin: 10px;border:1px solid black; border-radius: 10px;font-weight: bolder;flex-direction: column;">
            <span>Admin : <?php echo $_SESSION['namauser']; ?></span>
            <a href="tambahpernikahan.php" style="text-decoration: none;color: blue;margin-right: 10px;">Tambah data pernikahan</a>
          </div>
      </li>
     
      <li>
        <div style="font-size: 30px;font-weight: bolder;">
          <a href="index.php" style="text-decoration: none; color: white;">Beranda</a>
        </div>
      </li>
    
      <li>
        <div style="font-size: 30px;font-weight: bolder;">
          <a href="informasi.php" style="text-decoration: none; color: white;">Data jemaat</a>
        </div>
      </li>
  
      <li>
        <div style="font-size: 30px; font-weight: bolder;">
          <a href="kegiatan.php" style="text-decoration: none;color: white;">Data kegiatan</a>
        </div>
      </li>
      <li>
        <div style="font-size: 30px; font-weight: bolder;">
          <a href="datapernikahan.php" style="text-decoration: none;color: black;">Data pernikahan</a>
        </div>
      </li>
      <li>
        <div style="font-size: 30px; font-weight: bolder;">
          <a href="databaptis.php" style="text-decoration: none;color: white;">Data baptis</a>
        </div>
      </li>
      <li>
        <div style="font-size: 30px; font-weight: bolder;">
          <a href="datajemaatkeluar.php" style="text-decoration: none;color: white;">Data jemaat keluar</a>
        </div>
      </li>
    </ul>
    </div>
      
    
    </div>








<?php 

include 'koneksi.php';

$cekdatapernikahan = "SELECT * FROM datapernikahan";
$hubungkancekdatapernikahan = mysqli_query($koneksi, $cekdatapernikahan);

if(mysqli_num_rows($hubungkancekdatapernikahan)>0){
?>

<div class="child2">

       <div style="margin-top: -300px;">
          <h1 style="font-weight: bolder;text-align: center;">DATA PERNIKAHAN</h1>
        </div>

      <div style="color: black; padding: 10px;">

        <table border="1" style="padding: 10px; margin: 10px; font-size: 20px;text-align: center;">
      
      <tr>
        <td style="font-weight: bolder;">Nama mempelai pria</td>
        <td style="font-weight: bolder;">Nama mempelai wanita</td>
        <td style="font-weight: bolder;">Jenis kelamin</td>
        <td style="font-weight: bolder;">Alamat pernikahan</td>
        <td style="font-weight: bolder;">Tanggal pernikahan</td>
        <td style="font-weight: bolder;">Tanggal input data</td>
        <td style="font-weight: bolder;">ACTION</td>
      </tr>





      <?php 
        include 'koneksi.php';
        $ambildatapernikahan = "SELECT * FROM datapernikahan";
        $hubungkanambildatapernikahan = mysqli_query($koneksi, $ambildatapernikahan);

        while($takedatapernikahan = mysqli_fetch_array($hubungkanambildatapernikahan)){
          $idpernikahan = $takedatapernikahan['id_pernikahan'];
          $nama_mempelai_pria = $takedatapernikahan['nama_mempelai_pria'];
          $nama_mempelai_wanita = $takedatapernikahan['nama_mempelai_wanita'];
          $jenis_kelamin = $takedatapernikahan['jenis_kelamin'];
          $alamat_pernikahan = $takedatapernikahan['alamat_pernikahan'];
          $tanggal_pernikahan = $takedatapernikahan['tanggal_pernikahan'];
          $bulan_pernikahan = $takedatapernikahan['bulan_pernikahan'];
          $tahun_pernikahan = $takedatapernikahan['tahun_pernikahan'];
          $tanggal_inputdata = $takedatapernikahan['tanggal_inputdata'];
          $nohp = $takedatapernikahan['nohp'];
          ?>
        <tr>
          <td><?php echo $nama_mempelai_pria; ?></td>
          <td><?php echo $nama_mempelai_wanita ?></td>
          <td><?php echo $jenis_kelamin; ?></td>
          <td><?php echo $alamat_pernikahan; ?></td>
          <td><?php echo $tanggal_pernikahan; ?>-<?php echo $bulan_pernikahan; ?>-<?php echo $tahun_pernikahan; ?></td>
          <td><?php echo $tanggal_inputdata; ?></td>
          <td><?php echo $nohp; ?></td>
          <td>
            <div style="display: flex;justify-content: center; flex-direction: column;margin-left: 10px; margin-right: 10px;align-content: center; align-items: center;">
           
              <table> 
               <form method="POST" action="editpernikahan.php?idpernikahan=<?php echo $id_pernikahan; ?>">
                <tr>
                  <td><button style="background-color: green; color: white; font-weight: bolder;border:none;padding: 5px;border-radius: 5px;">Edit</button></td>
                </tr>
                </form>
              </table>
            
             </div>
          </td>
        </tr>
        <?php
        }
       ?>
    </table>
    </div>
    </div>



<?php
}else{
?>

    <div class="child2">
       <div style="margin-top: -300px;">
          <h1 style="font-weight: bolder;text-align: center;">BELUM ADA DATA PERNIKAHAN</h1>
        </div>
    </div>




<?php 
}
 ?>
    
    








      

  </div>




<?php
  }else {
?>

     <div class="Parent">


    <div class="child1">
    
    <div style="display: flex; width: 100%;justify-content: center;">
    <ul style="list-style-type: none;">

       <li>
        <div style="font-size: 30px;font-weight: bolder;">
          <a href="index.php" style="text-decoration: none; color: white;">Beranda</a>
        </div>
      </li>
      
      <li>
        <div style="font-size: 30px;font-weight: bolder;">
          <a href="informasi.php" style="text-decoration: none; color: white;">Data Jemaat</a>
        </div>
      </li>
   
      <li>
        <div style="font-size: 30px; font-weight: bolder;">
          <a href="kegiatan.php" style="text-decoration: none;color: white;">Data Kegiatan</a>
        </div>
      </li>
      <li>
        <div style="font-size: 30px; font-weight: bolder;">
          <a href="datapernikahan.php" style="text-decoration: none;color: black;">Data pernikahan</a>
        </div>
      </li>
      <li>
        <div style="font-size: 30px; font-weight: bolder;">
          <a href="databaptis.php" style="text-decoration: none;color: white;">Data baptis</a>
        </div>
      </li>
      <li>
        <div style="font-size: 30px; font-weight: bolder;">
          <a href="datajemaatkeluar.php" style="text-decoration: none;color: white;">Data jemaat keluar</a>
        </div>
      </li>
    </ul>
    </div>
      
    
    </div>


    <?php 

include 'koneksi.php';

$cekrow = "SELECT * FROM kegiatan";
$hubungkancekrow = mysqli_query($koneksi, $cekrow);

if(mysqli_num_rows($hubungkancekrow)>0){
?>

<div class="child2">

       <div style="margin-top: -300px;">
          <h1 style="font-weight: bolder;text-align: center;">DATA PERNIKAHAN</h1>
        </div>

      <div style="color: black; padding: 10px;">

        <table border="1" style="padding: 10px; margin: 10px; font-size: 20px;text-align: center;">
      
      <tr>
        <td style="font-weight: bolder;">N</td>
        <td style="font-weight: bolder;">Tempat Ibadah</td>
        <td style="font-weight: bolder;">Bahasa</td>
        <td style="font-weight: bolder;">Tanggal pernikahan</td>
        
        <td style="font-weight: bolder;">Jam</td>
        <td style="font-weight: bolder;">Telepon</td>
      </tr>





      <?php 
        include 'koneksi.php';
        $ambildatapernikahan = "SELECT * FROM datapernikahan";
        $hubungkanambildatapernikahan = mysqli_query($koneksi, $ambildatapernikahan);

        while($takedata = mysqli_fetch_array($hubungkanambildatapernikahan)){
          $idpernikahan = $takedatapernikahan['id_pernikahan'];
          $nama_mempelai_pria = $takedatapernikahan['nama_mempelai_pria'];
          $nama_mempelai_wanita = $takedatapernikahan['nama_mempelai_wanita'];
          $jenis_kelamin = $takedatapernikahan['jenis_kelamin'];
          $alamat_pernikahan = $takedatapernikahan['alamat_pernikahan'];
          $tanggal_pernikahan = $takedatapernikahan['tanggal_pernikahan'];
          $bulan_pernikahan = $takedatapernikahan['bulan_pernikahan'];
          $tahun_pernikahan = $takedatapernikahan['tahun_pernikahan'];
          $tanggal_inputdata = $takedatapernikahan['tanggal_inputdata'];
          $nohp = $takedatapernikahan['nohp'];
          ?>
        <tr>
          <td><?php echo $nama_mempelai_pria; ?></td>
          <td><?php echo $nama_mempelai_wanita ?></td>
          <td><?php echo $jenis_kelamin; ?></td>
          <td><?php echo $alamat_pernikahan; ?></td>
          <td><?php echo $tanggal_pernikahan; ?>-<?php echo $bulan_pernikahan; ?>-<?php echo $tahun_pernikahan; ?></td>
          <td><?php echo $tanggal_inputdata; ?></td>
          <td><?php echo $nohp; ?></td>
        </tr>
        <?php
        }
       ?>
    </table>
    </div>
    </div>



<?php
}else{
?>

    <div class="child2">
       <div style="margin-top: -300px;">
          <h1 style="font-weight: bolder;text-align: center;">BELUM ADA DATA PERNIKAHAN</h1>
        </div>
    </div>




<?php 
}
 ?>

    








      

  </div>







<?php
  }
   ?>



 












    <!-- open footer -->
    <div class="footer" style="display: flex;bottom: 0;right: 0;left: 0;padding: 10px; background-color: #000000; width: 100%;">
      <div style="text-align: center;width: 100%;">
        <div style="color: #ffffff;padding-top: 30px;padding-bottom: 30px;">© HKBP Pos Pelayanan Saguba - 2022</div>
      </div>
    </div>
    <!-- close footer -->


</body>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>
