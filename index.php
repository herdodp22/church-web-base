<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sistem pendataan jemaat gereja</title>
  </head>
  <body style="background-color: black;">

 <?php 
include 'koneksi.php';

session_start();

if(isset($_SESSION['namauser'])){
?>

<!-- open navbar -->
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #B8860B; filter: brightness(110%);">
		  <div class="container-fluid">
		  	<img src="img/logohkbp.png" alt="logo hkbp" width="50" height="60" class="d-inline-block align-text-top">
		    <a class="navbar-brand" href="#"><span style="font-weight: bolder;color: #ffffff;font-size: 25px;">HKBP POS PELAYANAN<br>SAGUBA</span></a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>

	
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    	
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="index.php"><span style="font-weight: bolder;color: #ffffff;">HOME</span></a>
		        </li>

		        <li class="nav-item">
		          <a class="nav-link" href="#profil"><span style="font-weight: bolder;color: #ffffff;">PROFIL</span></a>
		        </li>

		           <li class="nav-item">
		          <a class="nav-link" href="informasi.php"><span style="font-weight: bolder;color: #ffffff;">INFORMASI</span></a>
		        </li>

		         <li class="nav-item">
		          <a class="nav-link" href="#galeri"><span style="font-weight: bolder;color: #ffffff;">GALERI</span></a>
		        </li>

		        <li class="nav-item">
		          <a class="nav-link" href="#jadwal"><span style="font-weight: bolder;color: #ffffff;">JADWAL</span></a>
		        </li>

		        <li class="nav-item">
		          <a class="nav-link" href="#visimisi"><span style="font-weight: bolder;color: #ffffff;">VISI MISI</span></a>
		        </li>
		      </ul>
		  	

		      
		     
		  	

		  		<div style="display: flex;flex-direction: row;">
		  		<a href="#" style="text-decoration: none;margin-right: 10px;margin-left: 10px;color: white;font-weight: bolder;"><?php echo $_SESSION['namauser']; ?></a>
		  		<a href="logout.php" style="text-decoration: none;margin-right: 10px;margin-left: 10px;color: white;font-weight: bolder;">Logout</a>	
		  		</div>
		  		

		    </div>
		  </div>
		</nav>
		<!-- close navbar -->







		<!-- open cover -->
		<div style="display: flex; width: 100%;z-index: 999;position: relative;">
			<img src="img/coverweb.jpeg" style="width: 100%;height: 600px;filter: brightness(40%);">
		</div>
		<!-- close cover -->









			<!-- open judul cover -->
			<div style="display: flex; justify-content: center;margin-top: -400px;z-index: 9999;position: relative;">
				<div>
					<h1 style="font-size: 50px; text-align: center;color: #ffffff;"><font color="yellow">Selamat Datang</font> Di Website</h1>
					<h2 style="font-size: 30px;text-align: center;color: #ffffff;">HKBP POS PELAYANAN SAGUBA</h2>
					<h4 style="text-align: center;color: #ffffff;margin-top: 100px;">"Akulah Jalan Kebenaran dan Hidup.<br> Tidak Ada Seorang pun Yang Datang Bapa, Kalau Tidak Melalui Aku"</h4>
					<h4 style="text-align: center;color: #ffffff;margin-top: 100px;"><font color="yellow">Yohanes</font> 14:6</h4>

				</div>
			</div>
			<!-- close judul cover -->




			<!-- open jadwal ibadah -->

			<div id="jadwal" style="display: flex; flex-direction: column; background-color: black;color: yellow;padding-top: 50px; padding-bottom: 50px;">

				<h2 style="text-align: center;margin: 10px; padding: 10px;">JADWAL IBADAH</h2>
				
				<div style="display: flex; flex-direction: row; justify-content: center;">
					<div style="text-align: center; display: flex;justify-content: center;flex-direction: column;margin: 10px; padding: 10px;">
						<h3><u>SEKOLAH MINGGU</u></h3>
						<span style="margin-top: 10px;font-weight: bolder;font-size: 25px;">07.00 - 08.30</span>
						<span style="color: white; font-weight: bolder;font-size: 20px;">Setiap hari minggu</span>
					</div>	

					<div style="text-align: center; display: flex;justify-content: center;flex-direction: column;margin: 10px; padding: 10px;">
						<h3><u>IBADAH UMUM</u></h3>
						<span style="margin-top: 10px;font-weight: bolder;font-size: 25px;">10.30 - 12.30</span>
						<div style="display: flex;flex-direction: column; color: white;">
						<span style="color: white; font-weight: bolder;font-size: 20px;">Minggu I & III</span>
						<span style="color: white; font-weight: bolder;">Bahasa Indonesia</span>
						</div>
						<hr>
						<div style="display: flex;flex-direction: column; color: white;">
						<span style="color: white; font-weight: bolder;font-size: 20px;">Minggu II & IV</span>
						<span style="color: white; font-weight: bolder;">Bahasa Batak</span>
						</div>
					</div>

					<div style="text-align: center; display: flex;justify-content: center;flex-direction: column;margin: 10px; padding: 10px;">
						<h3><u>IBADAH REMAJA</u></h3>
						<span style="margin-top: 10px;font-weight: bolder;font-size: 25px;">09.00 - 10.30</span>
						<span style="color: white; font-weight: bolder;font-size: 20px;">Setiap hari minggu</span>
					</div>
				</div>

			</div>
			<!-- close jadwal ibadah --> 



			<!-- open daftar internal gereja 

			<div style="display: flex; justify-content: center;flex-direction: column;background-color: blue;align-content: center;">

				<div style="display: flex;flex-direction: column;justify-content: center;">
					<div style="display: flex; flex-direction: column;text-align: center;margin: 20px;">
						<span style="font-weight: bolder; color: white;">PENDETA</span>
						<span style="font-weight: bolder;text-align: center;color: white;font-size: 20px;">Nama pendeta</span>
						<span style="color: white; font-size: 15px;"><i>Pendeta</i></span>
						<span style="border-radius: 20px; color: black;">08123456789</span>
					</div>






					<div style="display: flex; text-align: center;justify-content: center;">
						<span style="color: white; font-weight: bolder; font-size: 30px;">SINTUA</span>
					</div>




					<div style="display: flex; flex-direction: row;margin-bottom: 50px;">
						<div style="display: flex; flex-direction: column;text-align: center; margin: 20px;">
							<span style="font-weight: bolder; color: white;">PENDETA</span>
							<span style="font-weight: bolder;text-align: center;color: white;font-size: 20px;">Nama pendeta</span>
							<span style="color: white; font-size: 15px;"><i>Pendeta</i></span>
							<span style="border-radius: 20px; color: black;">08123456789</span>
						</div>

						<div style="display: flex; flex-direction: column;text-align: center;margin: 20px;">
							<span style="font-weight: bolder; color: white;">PENDETA</span>
							<span style="font-weight: bolder;text-align: center;color: white;font-size: 20px;">Nama pendeta</span>
							<span style="color: white; font-size: 15px;"><i>Pendeta</i></span>
							<span style="border-radius: 20px; color: black;">08123456789</span>
						</div>
					</div>


					<div style="display: flex; flex-direction: row;margin-bottom: 50px;">
						<div style="display: flex; flex-direction: column;text-align: center;margin: 20px;">
							<span style="font-weight: bolder; color: white;">PENDETA</span>
							<span style="font-weight: bolder;text-align: center;color: white;font-size: 20px;">Nama pendeta</span>
							<span style="color: white; font-size: 15px;"><i>Pendeta</i></span>
							<span style="border-radius: 20px; color: black;">08123456789</span>
						</div>

						<div style="display: flex; flex-direction: column;text-align: center;margin: 20px;">
							<span style="font-weight: bolder; color: white;">PENDETA</span>
							<span style="font-weight: bolder;text-align: center;color: white;font-size: 20px;">Nama pendeta</span>
							<span style="color: white; font-size: 15px;"><i>Pendeta</i></span>
							<span style="border-radius: 20px; color: black;">08123456789</span>
						</div>

						<div style="display: flex; flex-direction: column;text-align: center;margin: 20px;">
							<span style="font-weight: bolder; color: white;">PENDETA</span>
							<span style="font-weight: bolder;text-align: center;color: white;font-size: 20px;">Nama pendeta</span>
							<span style="color: white; font-size: 15px;"><i>Pendeta</i></span>
							<span style="border-radius: 20px; color: black;">08123456789</span>
						</div>
					</div>

					
				</div>
				

			</div>
			 close daftar internal gereja -->

<hr style="color: yellow;border:5px solid yellow;">

			<!-- open visi misi -->

				<div id="visimisi" style="display: flex; justify-content: center;background-color: black;">
					<div style="display: flex; justify-content: center;margin: 10px; flex-direction: row;padding: 10px;">
						<div style="margin: 10px;">
							<div style="display: flex; flex-direction: column;">
							<h4 style="text-align: center; color: white;font-weight:bolder;">VISI</h4>
							<p style="color: yellow; font-weight: bolder; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>

						<div style="margin: 10px;">
							<div style="display: flex; flex-direction: column;">
							<h4 style="text-align: center;color: white;font-weight:bolder;">MISI</h4>
							<p style="color: yellow; font-weight: bolder;text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>

					</div>
					
				</div>


			<!-- close visi misi -->









<?php
}else{
?>

<!-- open navbar -->
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #B8860B; filter: brightness(110%);">
		  <div class="container-fluid">
		  	<img src="img/logohkbp.png" alt="logo hkbp" width="50" height="60" class="d-inline-block align-text-top">
		    <a class="navbar-brand" href="#"><span style="font-weight: bolder;color: #ffffff;font-size: 25px;">HKBP POS PELAYANAN<br>SAGUBA</span></a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>

	
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    	
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="index.php"><span style="font-weight: bolder;color: #ffffff;">HOME</span></a>
		        </li>

		        <li class="nav-item">
		          <a class="nav-link" href="#profil"><span style="font-weight: bolder;color: #ffffff;">PROFIL</span></a>
		        </li>

		           <li class="nav-item">
		          <a class="nav-link" href="informasi.php"><span style="font-weight: bolder;color: #ffffff;">INFORMASI</span></a>
		        </li>

		         <li class="nav-item">
		          <a class="nav-link" href="#galeri"><span style="font-weight: bolder;color: #ffffff;">GALERI</span></a>
		        </li>

		        <li class="nav-item">
		          <a class="nav-link" href="#jadwal"><span style="font-weight: bolder;color: #ffffff;">JADWAL</span></a>
		        </li>

		        <li class="nav-item">
		          <a class="nav-link" href="#visimisi"><span style="font-weight: bolder;color: #ffffff;">VISI MISI</span></a>
		        </li>
		      </ul>
		  

		      

		  		<div style="display: flex;flex-direction: row;">
		  		<a href="login.php" style="text-decoration: none;margin-right: 10px;margin-left: 10px;color: white;font-weight: bolder;">Login</a>	
		  		</div>
		  		

		    </div>
		  </div>
		</nav>
		<!-- close navbar -->







		<!-- open cover -->
		<div style="display: flex; width: 100%;z-index: 999;position: relative;">
			<img src="img/coverweb.jpeg" style="width: 100%;height: 600px;filter: brightness(40%);">
		</div>
		<!-- close cover -->









			<!-- open judul cover -->
			<div style="display: flex; justify-content: center;margin-top: -400px;z-index: 9999;position: relative;">
				<div>
					<h1 style="font-size: 50px; text-align: center;color: #ffffff;"><font color="yellow">Selamat Datang</font> Di Website</h1>
					<h2 style="font-size: 30px;text-align: center;color: #ffffff;">HKBP POS PELAYANAN SAGUBA</h2>
					<h4 style="text-align: center;color: #ffffff;margin-top: 100px;">"Akulah Jalan Kebenaran dan Hidup.<br> Tidak Ada Seorang pun Yang Datang Bapa, Kalau Tidak Melalui Aku"</h4>
					<h4 style="text-align: center;color: #ffffff;margin-top: 100px;"><font color="yellow">Yohanes</font> 14:6</h4>

				</div>
			</div>
			<!-- close judul cover -->



			<!-- open jadwal ibadah -->

			<div id="jadwal" style="display: flex; flex-direction: column; background-color: black;color: yellow;padding-top: 50px; padding-bottom: 50px;">

				<h2 style="text-align: center;margin: 10px; padding: 10px;">JADWAL IBADAH</h2>
				
				<div style="display: flex; flex-direction: row; justify-content: center;">
					<div style="text-align: center; display: flex;justify-content: center;flex-direction: column;margin: 10px; padding: 10px;">
						<h3><u>SEKOLAH MINGGU</u></h3>
						<span style="margin-top: 10px;font-weight: bolder;font-size: 25px;">07.00 - 08.30</span>
						<span style="color: white; font-weight: bolder;font-size: 20px;">Setiap hari minggu</span>
					</div>	

					<div style="text-align: center; display: flex;justify-content: center;flex-direction: column;margin: 10px; padding: 10px;">
						<h3><u>IBADAH UMUM</u></h3>
						<span style="margin-top: 10px;font-weight: bolder;font-size: 25px;">10.30 - 12.30</span>
						<div style="display: flex;flex-direction: column; color: white;">
						<span style="color: white; font-weight: bolder;font-size: 20px;">Minggu I & III</span>
						<span style="color: white; font-weight: bolder;">Bahasa Indonesia</span>
						</div>
						<hr>
						<div style="display: flex;flex-direction: column; color: white;">
						<span style="color: white; font-weight: bolder;font-size: 20px;">Minggu II & IV</span>
						<span style="color: white; font-weight: bolder;">Bahasa Batak</span>
						</div>
					</div>

					<div style="text-align: center; display: flex;justify-content: center;flex-direction: column;margin: 10px; padding: 10px;">
						<h3><u>IBADAH REMAJA</u></h3>
						<span style="margin-top: 10px;font-weight: bolder;font-size: 25px;">09.00 - 10.30</span>
						<span style="color: white; font-weight: bolder;font-size: 20px;">Setiap hari minggu</span>
					</div>
				</div>

			</div>


			<!-- close jadwal ibadah --> 


			<hr style="color: yellow;border:5px solid yellow;">

			<!-- open visi misi -->

				<div id="visimisi" style="display: flex; justify-content: center;background-color: black;">
					<div style="display: flex; justify-content: center;margin: 10px; flex-direction: row;padding: 10px;">
						<div style="margin: 10px;">
							<div style="display: flex; flex-direction: column;">
							<h4 style="text-align: center; color: white;font-weight:bolder;">VISI</h4>
							<p style="color: yellow; font-weight: bolder; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>

						<div style="margin: 10px;">
							<div style="display: flex; flex-direction: column;">
							<h4 style="text-align: center;color: white;font-weight:bolder;">MISI</h4>
							<p style="color: yellow; font-weight: bolder;text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>

					</div>
					
				</div>


			<!-- close visi misi -->



<?php  
}
?>
  



		





		








		<!-- open footer -->
		<div class="footer" style="display: flex;bottom: 0;right: 0;left: 0;padding: 10px; background-color: #000000; width: 100%;margin-top: 50px;">
			<div style="text-align: center;width: 100%;">
				<div style="color: #ffffff;padding-top: 30px;padding-bottom: 30px;font-weight: bolder;font-size: 25px;">© HKBP Pos Pelayanan Saguba - 2022</div>
			</div>
		</div>
		<!-- close footer -->










    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>