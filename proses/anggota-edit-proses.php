<?php
$server ="Localhost:3306";
$user ="root";
$password="";
$nama_database ="perpustakaan_v1_db";

$db = mysqli_connect($server, $user, $password, $nama_database);
$anggota_id=$_POST['anggota_id'];
$nama=$_POST['anggota_nama'];
$jenis_kelamin=$_POST['anggota_gender'];
$alamat=$_POST['anggota_alamat'];
$kontak=$_POST['anggota_kontak'];
	
if(isset($_POST['simpan'])){
	mysqli_query($db,
	"UPDATE tb_anggota
	SET anggota_nama= '$nama', anggota_gender='$jenis_kelamin', anggota_alamat='$alamat',anggota_kontak='$kontak'
	WHERE anggota_id='$anggota_id'"
);
header("location:../index.php?p=anggota");
}
?>