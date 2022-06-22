<!DOCTYPE html>
<html>
<head>
	<title>Tambah data pernikahan</title>
</head>
<body>

	<div style="display: flex; text-align: left;margin: 10px; padding: 10px;margin: 10px;">
		<a href="informasi.php" style="text-decoration: none;color: green;margin: 10px;"><h4 style="font-weight: bolder;font-size: 20px;border:1px solid black; border-radius: 10px; background-color: white;padding: 10px;">Kembali ke daftar</h4></a>
		<a href="index.php" style="text-decoration: none;color: red;margin: 10px;"><h4 style="font-weight: bolder;font-size: 20px;border:1px solid black; border-radius: 10px; background-color: white;padding: 10px;">Kembali ke home</h4></a>
	</div>

		<div style="display: flex; flex-direction: column; justify-content: center;padding: 10px; margin: 10px;align-items: center;align-content: center;line-height: 50px;">

	<h1 style="text-align: center;font-weight: bolder;margin-top: 100px;">TAMBAH DATA PERNIKAHAN</h1>

	<div style="display: flex; justify-content: center;line-height: 30px;">
	<form method="POST">
		<table style="line-height: 50px; font-weight: bolder;font-size: 25px;">
			<tr>
				<td><label>Nama mempelai pria</label></td>
				<td><input type="text" name="namamempelaipria" autofocus></td>
			</tr>

			<tr>
				<td><label>Nama mempelai wanita</label></td>
				<td><input type="text" name="namamempelaiwanita"></td>
			</tr>

			<tr>
				<td><label>Jenis Kelamin</label></td>
				<td><select name="jeniskelamin">
					<option value="laki laki">Laki - laki</option>
					<option value="perempuan">Perempuan</option>
				</select></td>
			</tr>


			<tr>
				<td><label>Alamat pernikahan</label></td>
				<td><input type="text" name="alamatpernikahan"></td>
			</tr>

			

			<tr>
				<td>Tanggal pernikahan</td>
				<td><select name="tanggalpernikahan">
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
				<td><label>Bulan pernikahan</label></td>
				<td><select name="bulanpernikahan">
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
				<td><label>Nomor telepon</label></td>
				<td><input type="text" name="nohp"></td>
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