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
        <a href="tambahanggota.php" style="text-decoration: none;color: blue;margin-right: 10px;">Tambah data baptis</a>
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
     
      <li>
        <div style="font-size: 30px;font-weight: bolder;">
          <a href="informasi.php" style="text-decoration: none; color: white;">Data jemaat</a>
        </div>
      </li>

       <li>
        <div style="font-size: 30px;font-weight: bolder;">
          <a href="kegiatan.php" style="text-decoration: none; color: white;">Data kegiatan</a>
        </div>
      </li>
     
      <li>
        <div style="font-size: 30px; font-weight: bolder;">
          <a href="datapernikahan.php" style="text-decoration: none;color: white;">Data pernikahan</a>
        </div>
      </li>
      <li>
        <div style="font-size: 30px; font-weight: bolder;">
          <a href="databaptis.php" style="text-decoration: none;color: black;">Data baptis</a>
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





    <div class="child2">

    
       <div style="">
          <h1 style="font-weight: bolder;text-align: center;">DATA BAPTIS</h1>
        </div>

          <div style="display: flex; justify-content: right;margin: 10px; padding: 10px; ">
           <form class="d-flex" method="POST" action="result.php">
                <input class="form-control me-2" type="search" placeholder="Cari jemaat" name="searchweb" aria-label="Search" style="width: 200px; height: 40px; border-radius: 5px;padding-left: 5px;">
                <button class="btn btn-outline-success" type="submit" name="submit" style="height: 40px;border-radius: 5px;"><span style="color: black;padding:5px;">Cari</span></button>
              </form>
             </div> 


      <div style="color: black; padding: 10px;">

        <table border="1" style="padding: 10px; margin: 10px; font-size: 20px;text-align: center;">
      
      <tr>
        <td style="font-weight: bolder;">ID baptis</td>
        <td style="font-weight: bolder;">Nama pembaptis</td>
        <td style="font-weight: bolder;">Nama terbaptis</td>
        <td style="font-weight: bolder;">Tanggal baptis</td>
        <td style="font-weight: bolder;">Tanggal data diinput</td>
        <td style="font-weight: bolder;">ACTION</td>
      </tr>





      <?php 
        include 'koneksi.php';
        $ambildatabaptis = "SELECT * FROM databaptis";
        $hubungkanambildatabaptis = mysqli_query($koneksi, $ambildatabaptis);

        while($takedatabaptis = mysqli_fetch_array($hubungkanambildatabaptis)){
          $idbaptis = $takedatabaptis['id_baptis'];
          $nama_pembaptis = $takedatabaptis['nama_pembaptis'];
          $nama_terbaptis = $takedatabaptis['nama_terbaptis'];
          $tanggal_baptis = $takedatabaptis['tanggal_baptis'];
          $bulan_baptis = $takedatabaptis['bulan_baptis'];
          $tahun_baptis = $takedatabaptis['tahun_baptis'];
          $tanggalinputdata = $takedatabaptis['tanggal_inputdata'];
          ?>
        <tr>
          <td><?php echo $idbaptis; ?></td>
          <td><?php echo $nama_pembaptis; ?></td>
          <td><?php echo $nama_terbaptis; ?></td>
          <td><?php echo $tanggal_baptis; ?>-<?php echo $bulan_baptis; ?>-<?php echo $tahun_baptis; ?></td>
          <td><?php echo $tanggalinputdata; ?></td>
          <td>
            <div style="display: flex;justify-content: center; flex-direction: column;margin-left: 10px; margin-right: 10px;align-content: center; align-items: center;">
             
                <table>
                  <form method="POST" action="deletebaptis.php?idbaptis=<?php echo $idbaptis; ?>">
                  <tr>
                    <td><button name="deletedatabaptis" style="background-color: red; color: white; font-weight: bolder;border:none;padding: 5px;border-radius: 5px;">Delete</button></td>
                  </tr>
                  </form>

                  <form method="POST" action="editdatabaptis.php?idbaptis=<?php echo $idbaptis; ?>">
                  <tr>
                    <td><button name="editdatabaptis" style="background-color: green; color: white; font-weight: bolder;border:none;padding: 5px;border-radius: 5px;">Edit</button></td>
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
          <a href="datapernikahan.php" style="text-decoration: none;color: white;">Data pernikahan</a>
        </div>
      </li>
      <li>
        <div style="font-size: 30px; font-weight: bolder;">
          <a href="databaptis.php" style="text-decoration: none;color: black;">Data baptis</a>
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


    <div class="child2">

       <div style="margin-top: -300px;">
          <h1 style="font-weight: bolder;text-align: center;">DATA Baptis</h1>
        </div>

      <div style="color: black;">

        <table border="1" style="padding: 10px; margin: 10px; font-size: 20px;text-align: center;">
      
       <tr>
        <td style="font-weight: bolder;">ID anggota</td>
        <td style="font-weight: bolder;">Nama</td>
        <td style="font-weight: bolder;">Tempat lahir</td>
        <td style="font-weight: bolder;">Tanggal lahir</td>
        <td style="font-weight: bolder;">Bulan lahir</td>
        <td style="font-weight: bolder;">Alamat</td>
        <td style="font-weight: bolder;">Umur</td>
        <td style="font-weight: bolder;">Jenis kelamin</td>
        <td style="font-weight: bolder;">Telepon</td>
      </tr>





      <?php 
        include 'koneksi.php';
        $ambildatabaptis = "SELECT * FROM databaptis";
        $hubungkanambildatabaptis = mysqli_query($koneksi, $ambildatabaptis);

        while($takedatabaptis = mysqli_fetch_array($hubungkanambildatabaptis)){
          $idbaptis = $takedatabaptis['id_baptis'];
          $nama_pembaptis = $takedatabaptis['nama_pembaptis'];
          $nama_terbaptis = $takedatabaptis['nama_terbaptis'];
          $tanggal_baptis = $takedatabaptis['tanggal_baptis'];
          $bulan_baptis = $takedatabaptis['bulan_baptis'];
          $tahun_baptis = $takedatabaptis['tahun_baptis'];
          $tanggal_inputdata = $takedata['tanggal_inputdata'];
          ?>
        <tr>
          <td><?php echo $idbaptis; ?></td>
          <td><?php echo $nama_pembaptis; ?></td>
          <td><?php echo $nama_terbaptis; ?></td>
          <td><?php echo $tanggal_baptis; ?></td>
          <td><?php echo $bulan_baptis; ?></td>
          <td><?php echo $tahun_baptis; ?></td>
          <td><?php echo $tanggal_inputdata; ?></td>
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
