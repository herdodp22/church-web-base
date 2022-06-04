<!DOCTYPE html>
<html>
<head>
	<title>Hasil pencarian</title>
</head>
<body>

	<div style="display: flex;justify-content: center;">
		<div style="display: flex;justify-content: center; margin-top: 100px; margin: 10px;padding: 10px;">
		
			<?php 

			include 'koneksi.php';

			session_start();

			if(isset($_POST['submit'])){
				$searchweb = $_POST['searchweb'];

				$searchwebfilter = mysqli_real_escape_string($koneksi, $searchweb);

				if(!empty(trim($searchweb))){
					$caridatajemaat = "SELECT * FROM anggota WHERE nama LIKE '%".$searchwebfilter."%'";
					$hubungkancaridatajemaan = mysqli_query($koneksi, $caridatajemaat);

					if(mysqli_num_rows($hubungkancaridatajemaan)>0){
				?>

				<table border="1" style="font-size: 20px; margin: 10px; padding: 10px;text-align: center;">
					<tr>
						<td><span style="font-weight: bolder;">Nama</span></td>
						<td><span style="font-weight: bolder;">TTL</span></td>
						<td><span style="font-weight: bolder;">Alamat</span></td>
						<td><span style="font-weight: bolder;">Umur</span></td>
						<td><span style="font-weight: bolder;">Jenis kelamin</span></td>
						<td><span style="font-weight: bolder;">Telepon</span></td>
						<td><span style="font-weight: bolder;">Tanggal Registrasi</span></td>
					</tr>


				<?php 
				while($ambildataanggota = mysqli_fetch_array($hubungkancaridatajemaan)){
					$namaanggota = $ambildataanggota['nama'];
					$tempatlahir = $ambildataanggota['tempat_lahir'];
					$tanggallahir = $ambildataanggota['tanggal_lahir'];
					$bulanlahir = $ambildataanggota['bulan_lahir'];
					$alamat = $ambildataanggota['alamat'];
					$umur = $ambildataanggota['umur'];
					$jeniskelamin = $ambildataanggota['jenis_kelamin'];
					$telepon = $ambildataanggota['telepon'];
					$tanggalregistrasi = $ambildataanggota['tanggal_daftar'];
					?>
					<tr>
						<td><?php echo $namaanggota; ?></td>
						<td><?php echo $tempatlahir; ?>,<?php echo $tanggallahir; ?> <?php echo $bulanlahir; ?></td>
						<td><?php echo $alamat; ?></td>
						<td><?php echo $umur; ?></td>
						<td><?php echo $jeniskelamin; ?></td>
						<td><?php echo $telepon; ?></td>
						<td><?php echo $tanggalregistrasi; ?></td>
					</tr>
				<?php 
				}
				?>
				</table>
				<?php
			}else{
			?>
				<h1 style="text-align: center;margin-top: 100px; font-weight: bolder; color: black;">DATA ANGGOTA TIDAK DITEMUKAN</h1>
			<?php 
			}
			
				}else{
					?>
					<script type="text/javascript">
						function konfirmasi(){
							var confirmation = confirm("Kolom pencarian tidak boleh kosong");

							if(confirmation === true){
								window.location.href="index.php";
							}else{
								window.location.href="index.php";
							}
						}

						konfirmasi();

					</script>
				<?php 	
				}
			}

			
			 ?>	
			
		
		</div>
		


	</div>


</body>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>