<!DOCTYPE html>
<html>

<head>
  <title>Informasi</title>

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
            <a href="tambahkegiatan.php" style="text-decoration: none;color: blue;margin-right: 10px;">Tambah kegiatan</a>
          </div>
      </li>
     
      <li>
        <div style="font-size: 30px;font-weight: bolder;">
          <a href="index.php" style="text-decoration: none; color: white;">Beranda</a>
        </div>
      </li>
      <hr>
      <li>
        <div style="font-size: 30px;font-weight: bolder;">
          <a href="informasi.php" style="text-decoration: none; color: white;">Anggota</a>
        </div>
      </li>
      <hr>
      <li>
        <div style="font-size: 30px; font-weight: bolder;">
          <a href="kegiatan.php" style="text-decoration: none;color: black;">Kegiatan</a>
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
          <h1 style="font-weight: bolder;text-align: center;">KEGIATAN JEMAAT GEREJA</h1>
        </div>

      <div style="color: black; padding: 10px;">

        <table border="1" style="padding: 10px; margin: 10px; font-size: 20px;text-align: center;">
      
      <tr>
        <td>Nama Kegiatan</td>
        <td>Tempat Ibadah</td>
        <td>Bahasa</td>
        <td>Tanggal kegiatan</td>
        <td>Bulan kegiatan</td>
        <td>Tahun kegiatan</td>
        <td>Jam</td>
        <td>Telepon</td>
      </tr>





      <?php 
        include 'koneksi.php';
        $ambildatakegiatan = "SELECT * FROM kegiatan";
        $hubungkanambildatakegiatan = mysqli_query($koneksi, $ambildatakegiatan);

        while($takedata = mysqli_fetch_array($hubungkanambildatakegiatan)){
          $nama_kegiatan = $takedata['nama_kegiatan'];
          $tempat_ibadah = $takedata['tempat_ibadah'];
          $bahasa = $takedata['bahasa'];
          $tanggal_kegiatan = $takedata['tanggal_kegiatan'];
          $bulan_kegiatan = $takedata['bulan_kegiatan'];
          $tahun_kegiatan = $takedata['tahun_kegiatan'];
          $jam = $takedata['jam'];
          $telepon = $takedata['telepon'];
          ?>
        <tr>
          <td><?php echo $nama_kegiatan; ?></td>
          <td><?php echo $tempat_ibadah; ?></td>
          <td><?php echo $bahasa; ?></td>
          <td><?php echo $tanggal_kegiatan; ?></td>
          <td><?php echo $bulan_kegiatan; ?></td>
          <td><?php echo $tahun_kegiatan; ?></td>
          <td><?php echo $jam; ?></td>
          <td><?php echo $telepon; ?></td>
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
          <h1 style="font-weight: bolder;text-align: center;">BELUM ADA KEGIATAN JEMAAT GEREJA</h1>
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
      <hr>
      <li>
        <div style="font-size: 30px;font-weight: bolder;">
          <a href="informasi.php" style="text-decoration: none; color: white;">Anggota</a>
        </div>
      </li>
      <hr>
      <li>
        <div style="font-size: 30px; font-weight: bolder;">
          <a href="kegiatan.php" style="text-decoration: none;color: black;">Kegiatan</a>
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
          <h1 style="font-weight: bolder;text-align: center;">KEGIATAN JEMAAT GEREJA</h1>
        </div>

      <div style="color: black; padding: 10px;">

        <table border="1" style="padding: 10px; margin: 10px; font-size: 20px;text-align: center;">
      
      <tr>
        <td>Nama Kegiatan</td>
        <td>Tempat Ibadah</td>
        <td>Bahasa</td>
        <td>Tanggal kegiatan</td>
        <td>Bulan kegiatan</td>
        <td>Tahun kegiatan</td>
        <td>Jam</td>
        <td>Telepon</td>
      </tr>





      <?php 
        include 'koneksi.php';
        $ambildatakegiatan = "SELECT * FROM kegiatan";
        $hubungkanambildatakegiatan = mysqli_query($koneksi, $ambildatakegiatan);

        while($takedata = mysqli_fetch_array($hubungkanambildatakegiatan)){
          $nama_kegiatan = $takedata['nama_kegiatan'];
          $tempat_ibadah = $takedata['tempat_ibadah'];
          $bahasa = $takedata['bahasa'];
          $tanggal_kegiatan = $takedata['tanggal_kegiatan'];
          $bulan_kegiatan = $takedata['bulan_kegiatan'];
          $tahun_kegiatan = $takedata['tahun_kegiatan'];
          $jam = $takedata['jam'];
          $telepon = $takedata['telepon'];
          ?>
        <tr>
          <td><?php echo $nama_kegiatan; ?></td>
          <td><?php echo $tempat_ibadah; ?></td>
          <td><?php echo $bahasa; ?></td>
          <td><?php echo $tanggal_kegiatan; ?></td>
          <td><?php echo $bulan_kegiatan; ?></td>
          <td><?php echo $tahun_kegiatan; ?></td>
          <td><?php echo $jam; ?></td>
          <td><?php echo $telepon; ?></td>
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
          <h1 style="font-weight: bolder;text-align: center;">BELUM ADA KEGIATAN JEMAAT GEREJA</h1>
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
