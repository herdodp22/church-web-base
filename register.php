<?php 

include 'koneksi.php';

if(isset($_POST['submit'])){
  $namalengkap = $_POST['namalengkap'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  //filter 
  $namalengkapfilter = mysqli_real_escape_string($koneksi, $namalengkap);
  $usernamefilter = mysqli_real_escape_string($koneksi, $username);
  $passwordfilter = mysqli_real_escape_string($koneksi, $password);

  if(!empty(trim($namalengkapfilter)) and !empty(trim($usernamefilter)) and !empty(trim($passwordfilter))){
    $simpandataadmin = "INSERT INTO admin set nama_lengkap = '$namalengkapfilter', username = '$usernamefilter', password = '$passwordfilter'";

    $hubungkansimpandataadmin = mysqli_query($koneksi, $simpandataadmin);

    if($hubungkansimpandataadmin){
      header("location:login.php");
    }else{
      echo "username atau password salah, mohon isi dengan benar";
    }
  }else{
    echo "tidak boleh kosong";
  }

}




 ?>

<!DOCTYPE html>
<html>

<head>
  <title>Register HKBP</title>

  <style>
    .body {
      padding: 0;
      margin: 0;
    }

    .Parent {
      display: flex;
      flex-direction: row;
    }

    .child1 {
      width: 50%;
      height: 100vh;
      text-align: right;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .child2 {
      width: 50%;
      background-color: #B8860B;
      color: #ffffff;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .judullogin{
      margin-top: 100px;
    }

  </style>

</head>

<body>



  <div class="Parent">


    <div class="child1">
      <img src="img/coverweb.jpeg" style="width: 100%;height: 100%; opacity: 0.3; z-index: 9998;">
      
     
      <div style="position: absolute;z-index: 9999; color:  #4682B4;">
        <img src="img/logohkbp.png" style="width: 250px; height: 250px;border:1px solid white; border-radius: 50%; padding: 15px; background-color: white;">
        <h1 style="font-weight: bolder;filter: brightness(50%);">SISTEM INFORMASI</h1>
        <H3 style="font-weight: bolder;filter: brightness(50%);">Gereja HKBP Pos Pelayanan Saguba</H3>
      </div>
    </div>


    <div class="child2">
   
       <div style="position: absolute;z-index: 9999;">
        <h1 class="judullogin" style="color: white;text-align: center;">Register admin</h1>

        <form method="POST">
          <div style="display: flex;justify-content: center;width: 100%;">
          <table>

             <tr>
              <td style="padding: 20px;"><input type="text" name="namalengkap" placeholder="Nama lengkap" style="border-radius: 10px;padding: 10px;"></td>
            </tr>

            <tr>
              <td style="padding: 20px;"><input type="text" name="username" placeholder="Username" style="border-radius: 10px;padding: 10px;"></td>
            </tr>

            <tr>
              <td style="padding: 20px;"><input type="password" name="password" placeholder="Password" style="border-radius: 10px;padding: 10px;"></td>
            </tr>

           

            <tr>
              <td style="padding: 20px;"><input type="submit" name="submit" value="Register" style="width: 100%;border-radius: 10px;padding: 10px;background-color: #4682B4;color: #ffffff;"></td>
            </tr>
          </table>
          </div>
        </form>


      </div>
 
    </div>

  </div>


</body>

</html>
