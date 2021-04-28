<?php
$server ="Localhost:3306";
$user ="root";
$password="";
$nama_database ="perpustakaan_v1_db";

$db = mysqli_connect($server, $user, $password, $nama_database);
$nama=$_POST['anggota_nama'];
$jenis_kelamin=$_POST['anggota_gender'];
$alamat=$_POST['anggota_alamat'];
$kontak=$_POST['anggota_kontak'];
	
if(isset($_POST['simpan'])){
	$sql = 
	"INSERT INTO tb_anggota (anggota_nama, anggota_gender, anggota_alamat, anggota_kontak)
		VALUES('$nama','$jenis_kelamin','$alamat','$kontak')";
	$query = mysqli_query($db, $sql);
	// Show Errors
	error_reporting(E_ALL);
	ini_set('display_errors','On');
	// Redirect
	header('Location: ../index.php?p=anggota');
	die();

}

?>