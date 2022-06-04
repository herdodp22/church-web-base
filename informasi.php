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
        <a href="tambahanggota.php" style="text-decoration: none;color: blue;margin-right: 10px;">Tambah anggota</a>
      </div>

      </li>
     
      <li>
        <div style="display: flex; flex-direction: column;justify-content: center;">
          <div style="text-align: center;display: flex;justify-content: center;">
        </div>
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
          <a href="informasi.php" style="text-decoration: none; color: black;">Anggota</a>
        </div>
      </li>
      <hr>
      <li>
        <div style="font-size: 30px; font-weight: bolder;">
          <a href="kegiatan.php" style="text-decoration: none;color: white;">Kegiatan</a>
        </div>
      </li>
    </ul>
    </div>
      
    
    </div>




    <div class="child2">

       <div style="margin-top: -300px;">
          <h1 style="font-weight: bolder;text-align: center;">KEANGGOTAAN JEMAAT GEREJA</h1>
        </div>

      <div style="color: black; padding: 10px;">

        <table border="1" style="padding: 10px; margin: 10px; font-size: 20px;text-align: center;">
      
      <tr>
        <td>Nama</td>
        <td>Tempat lahir</td>
        <td>Tanggal lahir</td>
        <td>Bulan lahir</td>
        <td>Alamat</td>
        <td>Umur</td>
        <td>Jenis kelamin</td>
        <td>Telepon</td>
      </tr>





      <?php 
        include 'koneksi.php';
        $ambildata = "SELECT * FROM anggota";
        $hubungkanambildata = mysqli_query($koneksi, $ambildata);

        while($takedata = mysqli_fetch_array($hubungkanambildata)){
          $nama = $takedata['nama'];
          $tempat_lahir = $takedata['tempat_lahir'];
          $tanggal_lahir = $takedata['tanggal_lahir'];
          $bulan_lahir = $takedata['bulan_lahir'];
          $alamat = $takedata['alamat'];
          $umur = $takedata['umur'];
          $jenis_kelamin = $takedata['jenis_kelamin'];
          $telepon = $takedata['telepon'];
          ?>
        <tr>
          <td><?php echo $nama; ?></td>
          <td><?php echo $tempat_lahir; ?></td>
          <td><?php echo $tanggal_lahir; ?></td>
          <td><?php echo $bulan_lahir; ?></td>
          <td><?php echo $alamat; ?></td>
          <td><?php echo $umur; ?></td>
          <td><?php echo $jenis_kelamin; ?></td>
          <td><?php echo $telepon; ?></td>
        </tr>
        <?php
        }
       ?>
    </table>
    </div>
    
    </div>

   

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
          <a href="informasi.php" style="text-decoration: none; color: black;">Anggota</a>
        </div>
      </li>
      <hr>
      <li>
        <div style="font-size: 30px; font-weight: bolder;">
          <a href="kegiatan.php" style="text-decoration: none;color: white;">Kegiatan</a>
        </div>
      </li>
    </ul>
    </div>
      
    
    </div>


    <div class="child2">

       <div style="margin-top: -300px;">
          <h1 style="font-weight: bolder;text-align: center;">KEANGGOTAAN JEMAAT GEREJA</h1>
        </div>

      <div style="color: black;">

        <table border="1" style="padding: 10px; margin: 10px; font-size: 20px;text-align: center;">
      
      <tr>
        <td>Nama</td>
        <td>Tempat lahir</td>
        <td>Tanggal lahir</td>
        <td>Bulan lahir</td>
        <td>Alamat</td>
        <td>Umur</td>
        <td>Jenis kelamin</td>
        <td>Telepon</td>
      </tr>





      <?php 
        include 'koneksi.php';
        $ambildata = "SELECT * FROM anggota";
        $hubungkanambildata = mysqli_query($koneksi, $ambildata);

        while($takedata = mysqli_fetch_array($hubungkanambildata)){
          $nama = $takedata['nama'];
          $tempat_lahir = $takedata['tempat_lahir'];
          $tanggal_lahir = $takedata['tanggal_lahir'];
          $bulan_lahir = $takedata['bulan_lahir'];
          $alamat = $takedata['alamat'];
          $umur = $takedata['umur'];
          $jenis_kelamin = $takedata['jenis_kelamin'];
          $telepon = $takedata['telepon'];
          ?>
        <tr>
          <td><?php echo $nama; ?></td>
          <td><?php echo $tempat_lahir; ?></td>
          <td><?php echo $tanggal_lahir; ?></td>
          <td><?php echo $bulan_lahir; ?></td>
          <td><?php echo $alamat; ?></td>
          <td><?php echo $umur; ?></td>
          <td><?php echo $jenis_kelamin; ?></td>
          <td><?php echo $telepon; ?></td>
        </tr>
        <?php
        }
       ?>
    </table>
    </div>
    
    </div>
   

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
