<?php 

include 'koneksi.php';

if(isset($_POST['submit'])){
	$namakegiatan = $_POST['namakegiatan'];
	$tempatibadah = $_POST['tempatibadah'];
	$bahasa = $_POST['bahasa'];
	$tanggalkegiatan = $_POST['tanggalkegiatan'];
	$bulankegiatan = $_POST['bulankegiatan'];
	$tahunkegiatan = $_POST['tahunkegiatan'];
	$jam = $_POST['jam'];
	$telepon = $_POST['telepon'];

	$namakegiatanfilter = mysqli_real_escape_string($koneksi, $namakegiatan);
	$tempatibadahfilter = mysqli_real_escape_string($koneksi, $tempatibadah);
	$bahasafilter = mysqli_real_escape_string($koneksi, $bahasa);
	$tanggalkegiatanfilter = mysqli_real_escape_string($koneksi, $tanggalkegiatan);
	$bulankegiatanfilter = mysqli_real_escape_string($koneksi, $bulankegiatan);
	$tahunkegiatanfilter = mysqli_real_escape_string($koneksi, $tahunkegiatan);
	$jamfilter = mysqli_real_escape_string($koneksi, $jam);
	$teleponfilter = mysqli_real_escape_string($koneksi, $telepon);



	

	if(!empty(trim($namakegiatan)) and !empty(trim($tempatibadah)) and !empty(trim($bahasa)) and !empty(trim($tanggalkegiatan)) and !empty(trim($bulankegiatan)) and !empty(trim($tahunkegiatan)) and !empty(trim($jam)) and !empty(trim($telepon))){

		$simpandatakegiatan = "INSERT INTO kegiatan set nama_kegiatan = '$namakegiatan', tempat_ibadah = '$tempatibadah', bahasa = '$bahasa', tanggal_kegiatan = '$tanggalkegiatan', bulan_kegiatan = '$bulankegiatan', tahun_kegiatan = '$tahunkegiatan', jam = '$jam', telepon = '$telepon'";

		$hubungkansimpandatakegiatan = mysqli_query($koneksi, $simpandatakegiatan);

		if($hubungkansimpandatakegiatan){
			header("location:kegiatan.php");
		}else{
			echo "Data yang dimasukkan gagal";
		}


	}else{
		?>
			<script type="text/javascript">
				alert("Tidak boleh kosong");
			</script>

	<?php 	
	}


}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah kegiatan gereja</title>
</head>
<body style="background-image: url('img/coverweb.jpeg');background-size: cover; background-repeat: no-repeat;filter: brightness(110%);">

	<div style="display: flex; text-align: left;margin: 10px; padding: 10px;margin: 10px;">
		<a href="kegiatan.php" style="text-decoration: none;color: green;margin: 10px;"><h4 style="font-weight: bolder;font-size: 20px;border:1px solid black; border-radius: 10px; background-color: white;padding: 10px;">Kembali ke daftar</h4></a>
		<a href="index.php" style="text-decoration: none;color: red;margin: 10px;"><h4 style="font-weight: bolder;font-size: 20px;border:1px solid black; border-radius: 10px; background-color: white;padding: 10px;">Kembali ke home</h4></a>
	</div>

	<h1 style="text-align: center;margin-top: 100px;font-weight: bolder;">TAMBAH KEGIATAN JEMAAT</h1>

	<div style="display: flex; justify-content: center;margin: 10px; padding: 10px;">
	<form method="POST">
		<table style="font-weight: bolder;line-height: 50px;font-size: 25px;">
			<tr>
				<td><label>Nama kegiatan</label></td>
				<td><input type="text" name="namakegiatan" autofocus></td>
			</tr>

			<tr>
				<td><label>Tempat ibadah</label></td>
				<td><textarea name="tempatibadah" style="width: 350px; height: 100px;"></textarea></td>
			</tr>

			<tr>
				<td><label>Bahasa</label></td>
				<td><input type="text" name="bahasa"></td>
			</tr>


			<tr>
				<td>Tanggal kegiatan</td>
				<td><select name="tanggalkegiatan">
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select></td>
			</tr>

			<tr>
				<td><label>Bulan kegiatan</label></td>
				<td><select name="bulankegiatan">
					<option value="januari">Januari</option>
					<option value="februari">Februari</option>
					<option value="maret">Maret</option>
					<option value="april">April</option>
					<option value="mei">Mei</option>
					<option value="juni">Juni</option>
					<option value="juli">Juli</option>
					<option value="agustus">Agustus</option>
					<option value="september">September</option>
					<option value="oktober">Oktober</option>
					<option value="november">November</option>
					<option value="desember">Desember</option>
				</select></td>
			</tr>

			<tr>
				<td><label>Tahun kegiatan</label></td>
				<td><select name="tahunkegiatan">
					<option value="2020">2020</option>
					<option value="2021">2021</option>
					<option value="2022">2022</option>
					<option value="2023">2023</option>
					<option value="2024">2024</option>
					<option value="2025">2025</option>
				</select></td>
			</tr>

			<tr>
				<td><label>Jam</label></td>
				<td><input type="text" name="jam"></td>
			</tr>

			
			<tr>
				<td><label>Nomor telepon</label></td>
				<td><input type="text" name="telepon"></td>
			</tr>

			<tr>
				<td><input type="submit" name="submit" value="Tambah kegiatan" style="font-weight: bolder; padding: 10px; font-size: 20px; border-radius: 10px; background-color: green; color: white;"></td>
			</tr>

		</table>
	</form>
	</div>

	<div style="margin-bottom: 100px;">
		
	</div>

</body>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>