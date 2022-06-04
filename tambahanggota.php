<?php 

include 'koneksi.php';

if(isset($_POST['submit'])){
	$namalengkap = $_POST['namalengkap'];
	$tempatlahir = $_POST['tempatlahir'];
	$tanggallahir = $_POST['tanggallahir'];
	$bulanlahir = $_POST['bulanlahir'];
	$alamat = $_POST['alamat'];
	$umur = $_POST['umur'];
	$jeniskelamin = $_POST['jeniskelamin'];
	$nomortelepon = $_POST['nohp'];

	$namalengkapfilter = mysqli_real_escape_string($koneksi, $namalengkap);
	$tempatlahirfilter = mysqli_real_escape_string($koneksi, $tempatlahir);
	$tanggallahirfilter = mysqli_real_escape_string($koneksi, $tanggallahir);
	$bulanlahirfilter = mysqli_real_escape_string($koneksi, $bulanlahir);
	$alamatfilter = mysqli_real_escape_string($koneksi, $alamat);
	$umurfilter = mysqli_real_escape_string($koneksi, $umur);
	$jeniskelaminfilter = mysqli_real_escape_string($koneksi, $jeniskelamin);
	$nomorteleponfilter = mysqli_real_escape_string($koneksi, $nomortelepon);

	

	if(!empty(trim($namalengkap)) and !empty(trim($tempatlahir)) and !empty(trim($tanggallahir)) and !empty(trim($bulanlahir)) and !empty(trim($alamat)) and !empty(trim($umur)) and !empty(trim($jeniskelamin)) and !empty(trim($nomortelepon))){

		$simpandata = "INSERT INTO anggota set nama = '$namalengkapfilter', tempat_lahir = '$tempatlahirfilter', tanggal_lahir = '$tanggallahirfilter', bulan_lahir = '$bulanlahirfilter', alamat = '$alamatfilter', umur = '$umurfilter', jenis_kelamin = '$jeniskelaminfilter', telepon = '$nomorteleponfilter'";

		$hubungkansimpandata = mysqli_query($koneksi, $simpandata);

		if($hubungkansimpandata){
			header("location:informasi.php");
		}else{
			echo "Data yang dimasukkan gagal";
		}

	}else{
		?>
			<script type="text/javascript">
				alert("Tidak bolek kosong");
			</script>

	<?php 	
	}

}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah anggota jemaat</title>
</head>
<body style="background-image: url('img/coverweb.jpeg'); background-repeat: no-repeat;background-size: cover;">

	<div style="display: flex; text-align: left;margin: 10px; padding: 10px;margin: 10px;">
		<a href="informasi.php" style="text-decoration: none;color: green;margin: 10px;"><h4 style="font-weight: bolder;font-size: 20px;border:1px solid black; border-radius: 10px; background-color: white;padding: 10px;">Kembali ke daftar</h4></a>
		<a href="index.php" style="text-decoration: none;color: red;margin: 10px;"><h4 style="font-weight: bolder;font-size: 20px;border:1px solid black; border-radius: 10px; background-color: white;padding: 10px;">Kembali ke home</h4></a>
	</div>

		<div style="display: flex; flex-direction: column; justify-content: center;padding: 10px; margin: 10px;align-items: center;align-content: center;line-height: 50px;">

	<h1 style="text-align: center;font-weight: bolder;margin-top: 100px;">TAMBAH ANGGOTA JEMAAT</h1>

	<div style="display: flex; justify-content: center;line-height: 30px;">
	<form method="POST">
		<table style="line-height: 50px; font-weight: bolder;font-size: 25px;">
			<tr>
				<td><label>Nama lengkap</label></td>
				<td><input type="text" name="namalengkap" autofocus></td>
			</tr>

			<tr>
				<td><label>Tempat lahir</label></td>
				<td><input type="text" name="tempatlahir"></td>
			</tr>

			<tr>
				<td>Tanggal lahir</td>
				<td><select name="tanggallahir">
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
				<td><label>Bulan lahir</label></td>
				<td><select name="bulanlahir">
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
				<td><label>Alamat</label></td>
				<td><textarea name="alamat" style="height: 100px; width: 350px;"></textarea></td>
			</tr>

			<tr>
				<td><label>Umur</label></td>
				<td><input type="text" name="umur"></td>
			</tr>

			<tr>
				<td><label>Jenis Kelamin</label></td>
				<td><select name="jeniskelamin">
					<option value="laki laki">Laki - laki</option>
					<option value="perempuan">Perempuan</option>
				</select></td>
			</tr>

			<tr>
				<td><label>Nomor telepon</label></td>
				<td><input type="text" name="nohp"></td>
			</tr>

			<tr>
				<td><input type="submit" name="submit" value="Tambah anggota" style="font-weight: bolder;font-size: 20px;padding:10px; border-radius: 10px;background-color: green;color: white;"></td>
			</tr>

		</table>
	</form>
	</div>

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