<?php
$server ="Localhost:3306";
$user ="root";
$password="";
$nama_database ="perpustakaan_v1_db";

$db=mysqli_connect($server,$user, $password,$nama_database);
if (!$db) {
	die("Gagal terhubung dengan database:" .mysqli_connect_error());
}
?>