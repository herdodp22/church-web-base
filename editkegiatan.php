<?php 

include 'koneksi.php';

session_start();

$ambilget = $_GET['idkegiatan'];

$cekdataanggota = "SELECT * FROM kegiatan WHERE id_kegiatan = '$ambilget'";
$hubungkancekdataanggota = mysqli_query($koneksi, $cekdataanggota);
if(mysqli_num_rows($hubungkancekdataanggota)>0){
	while($ambildata = mysqli_fetch_array($hubungkancekdataanggota)){
		$namakegiatan = $ambildata['nama_kegiatan'];
		$tempatibadah = $ambildata['tempat_ibadah'];
		$bahasa = $ambildata['bahasa'];
		$tanggalkegiatan = $ambildata['tanggal_kegiatan'];
		$bulankegiatan = $ambildata['bulan_kegiatan'];
		$tahunkegiatan = $ambildata['tahun_kegiatan'];
		$jam = $ambildata['jam'];
		$telepon = $ambildata['telepon'];
		$tanggalterbitkegiatan = $ambildata['tanggal_register_kegiatan'];
	}
}


if(isset($_POST['submit'])){
	$nama = $_POST['nama'];
	$tempat = $_POST['tempat'];
	$bahasakegiatan = $_POST['bahasa'];
	$tanggal = $_POST['tanggal'];
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	$jamkegiatan = $_POST['jamkegiatan'];
	$teleponkegiatan = $_POST['teleponkegiatan'];

	$namafilter = mysqli_real_escape_string($koneksi, $nama);
	$tempatfilter = mysqli_real_escape_string($koneksi, $tempat);
	$bahasafilter = mysqli_real_escape_string($koneksi, $bahasa);
	$tanggalfilter = mysqli_real_escape_string($koneksi, $tanggal);
	$bulanfilter = mysqli_real_escape_string($koneksi, $bulan);
	$tahunfilter = mysqli_real_escape_string($koneksi, $tahun);
	$jamkegiatanfilter = mysqli_real_escape_string($koneksi, $jamkegiatan);
	$teleponkegiatanfilter = mysqli_real_escape_string($koneksi, $telepon);

	if(!empty(trim($nama)) && !empty(trim($tempat)) && !empty(trim($bahasa)) && !empty(trim($tanggal)) && !empty(trim($bulan)) && !empty(trim($tahun)) && !empty(trim($jamkegiatan)) && !empty(trim($teleponkegiatan))){

		$updatedatakegiatan = "UPDATE kegiatan set nama_kegiatan = '$nama', tempat_ibadah = '$tempat', bahasa = '$bahasakegiatan', tanggal_kegiatan = '$tanggal', bulan_kegiatan = '$bulan', tahun_kegiatan = '$tahun', jam = '$jamkegiatan', telepon = '$teleponkegiatan'";
		$hubungkanupdatedatakegiatan = mysqli_query($koneksi, $updatedatakegiatan);
		if($hubungkanupdatedatakegiatan){
			header("location:kegiatan.php");
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

	<span><a href="kegiatan.php" style="text-decoration: none;color: red;">batal</a></span>

	<h1 style="text-align: center; margin-top: 50px;font-weight: bolder;">EDIT KEGIATAN</h1>

	<div style="display: flex; flex-direction: column;">
		<div style="display: flex;justify-content: center;margin: 20px;text-align: center;">
			<form method="POST">
				<table>
					<tr>
						<td style="font-weight: bolder;">Nama kegiatan</td>
						<td><input type="text" name="nama" value="<?php echo $namakegiatan; ?>"></td>
					</tr>

					<tr>
						<td style="font-weight: bolder;">Tempat ibadah</td>
						<td><input type="text" name="tempat" value="<?php echo $tempatibadah; ?>"></td>
					</tr>

					<tr>
						<td style="font-weight: bolder;">Bahasa</td>
						<td><input type="text" name="bahasa" value="<?php echo $bahasa; ?>"></td>
					</tr>

					<tr>
						<td style="font-weight: bolder;">Tanggal kegiatan</td>
						<td><input type="text" name="tanggal" value="<?php echo $tanggalkegiatan; ?>"></td>
					</tr>

					<tr>
						<td style="font-weight: bolder;">Bulan kegiatan</td>
						<td><input type="text" name="bulan" value="<?php echo $bulankegiatan; ?>"></td>
					</tr>

					<tr>
						<td style="font-weight: bolder;">Tahun kegiatan</td>
						<td><input type="text" name="tahun" value="<?php echo $tahunkegiatan; ?>"></td>
					</tr>

					<tr>
						<td style="font-weight: bolder;">Jam</td>
						<td><input type="text" name="jamkegiatan" value="<?php echo $jam; ?>"></td>
					</tr>
						
					<tr>
						<td style="font-weight: bolder;">Telepon</td>
						<td><input type="text" name="teleponkegiatan" value="<?php echo $telepon; ?>"></td>
					</tr>

					<tr>
						<td style="font-weight: bolder;">Terbit</td>
						<td><?php echo $tanggalterbitkegiatan; ?></td>
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