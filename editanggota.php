<?php 

include 'koneksi.php';

session_start();

$ambilgetanggota = $_GET['idanggota'];

$cekdataanggota = "SELECT * FROM anggota WHERE id_anggota = '$ambilgetanggota'";
$hubungkancekdataanggota = mysqli_query($koneksi, $cekdataanggota);
if(mysqli_num_rows($hubungkancekdataanggota)>0){
	while($ambildata = mysqli_fetch_array($hubungkancekdataanggota)){
		$namaanggota = $ambildata['nama'];
		$tempatlahir = $ambildata['tempat_lahir'];
		$tanggallahir = $ambildata['tanggal_lahir'];
		$bulanlahir = $ambildata['bulan_lahir'];
		$alamatanggota = $ambildata['alamat'];
		$umuranggota = $ambildata['umur'];
		$jeniskelamin = $ambildata['jenis_kelamin'];
		$telepon = $ambildata['telepon'];
		$tanggalregistrasianggota = $ambildata['tanggal_daftar'];
	}
}else{
	?>

	<script type="text/javascript">
		alert("data tidak ditemukan");
	</script>

<?php  	
}


if(isset($_POST['submit'])){
	$namaanggota = $_POST['namaanggota'];
	$tempatlahiranggota = $_POST['tempatlahiranggota'];
	$tanggallahiranggota = $_POST['tanggallahiranggota'];
	$bulanlahiranggota = $_POST['bulanlahiranggota'];
	$alamatanggota = $_POST['alamatanggota'];
	$umuranggota = $_POST['umuranggota'];
	$jeniskelaminanggota = $_POST['jeniskelaminanggota'];
	$teleponanggota = $_POST['teleponanggota'];

	$namaanggotafilter = mysqli_real_escape_string($koneksi, $namaanggota);
	$tempalahiranggotafilter = mysqli_real_escape_string($koneksi, $tempatlahiranggota);
	$tanggallahiranggotafilter = mysqli_real_escape_string($koneksi, $tanggallahiranggota);
	$bulanlahiranggotafilter = mysqli_real_escape_string($koneksi, $bulanlahiranggota);
	$alamatanggotafilter = mysqli_real_escape_string($koneksi, $alamatanggota);
	$umuranggotafilter = mysqli_real_escape_string($koneksi, $umuranggota);
	$jeniskelaminanggotafilter = mysqli_real_escape_string($koneksi, $jeniskelaminanggota);
	$teleponanggotafilter = mysqli_real_escape_string($koneksi, $teleponanggota);

	if(!empty(trim($namaanggota)) && !empty(trim($tempatlahiranggota)) && !empty(trim($tanggallahiranggota)) && !empty(trim($bulanlahiranggota)) && !empty(trim($alamatanggota)) && !empty(trim($umuranggota)) && !empty(trim($jeniskelaminanggota)) && !empty(trim($teleponanggota))){

		$updatedataanggota = "UPDATE anggota set nama = '$namaanggotafilter', tempat_lahir = '$tempatlahiranggotafilter', tanggal_lahir = '$tanggallahiranggotafilter', bulan_lahir = '$bulanlahiranggotafilter', alamat = '$alamatanggotafilter', umur = '$umuranggotafilter', jenis_kelamin = '$jeniskelaminanggotafilter', telepon = '$teleponanggotafilter'";
		$hubungkanupdatedataanggota = mysqli_query($koneksi, $updatedataanggota);
		if($hubungkanupdatedataanggota){
			header("location:informasi.php");
		}

	}


}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit anggota</title>
</head>
<body>

	<span style="font-weight: bolder;"><a href="informasi.php" style="text-decoration: none;color: red;">Batal</a></span>

	<h1 style="text-align: center; margin-top: 50px;font-weight: bolder;">EDIT ANGGOTA</h1>

	<div style="display: flex; flex-direction: column;">
		<div style="display: flex;justify-content: center;margin: 20px;text-align: center;">
			<form method="POST">
				<table>
					<tr>
						<td style="font-weight: bolder;">Nama</td>
						<td><input type="text" name="namaanggota" value="<?php echo $namaanggota; ?>"></td>
					</tr>

					<tr>
						<td style="font-weight: bolder;">Tempat lahir</td>
						<td><input type="text" name="tempatlahiranggota" value="<?php echo $tempatlahir; ?>"></td>
					</tr>

					<tr>
						<td style="font-weight: bolder;">Tanggal lahir</td>
						<td><input type="text" name="tanggallahiranggota" value="<?php echo $tanggallahir; ?>"></td>
					</tr>

					<tr>
						<td style="font-weight: bolder;">Bulan lahir</td>
						<td><input type="text" name="bulanlahiranggota" value="<?php echo $bulanlahir; ?>"></td>
					</tr>

					<tr>
						<td style="font-weight: bolder;">Alamat anggota</td>
						<td><input type="text" name="alamatanggota" value="<?php echo $alamatanggota; ?>"></td>
					</tr>

					<tr>
						<td style="font-weight: bolder;">Umur</td>
						<td><input type="text" name="umuranggota" value="<?php echo $umuranggota; ?>"></td>
					</tr>

					<tr>
						<td style="font-weight: bolder;">Jenis kelamin</td>
						<td><input type="text" name="jeniskelaminanggota" value="<?php echo $jeniskelamin; ?>"></td>
					</tr>
						
					<tr>
						<td style="font-weight: bolder;">Telepon</td>
						<td><input type="text" name="teleponanggota" value="<?php echo $telepon; ?>"></td>
					</tr>

					<tr>
						<td style="font-weight: bolder;">Registrasi</td>
						<td><?php echo $tanggalregistrasianggota; ?></td>
					</tr>
						

					<tr>
						<td><input type="submit" name="submit" value="simpan perubahan" style="padding: 10px; border-radius: 10px; background-color: green; color: white; font-weight: bolder;margin-top: 20px; margin-bottom: 20px;"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>


</body>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>