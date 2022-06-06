<?php 
include 'koneksi.php';

session_start();

$ambilidkegiatan = $_GET['idkegiatan'];
$hapuskegiatan = "DELETE FROM kegiatan WHERE id_kegiatan = '$ambilidkegiatan'";
$hubungkanhapuskegiatan = mysqli_query($koneksi, $hapuskegiatan);
if($hubungkanhapuskegiatan){
	header("location:kegiatan.php");
}



 ?>