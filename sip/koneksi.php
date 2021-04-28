<?php

$server = "localhost:3306";
$user = "root";
$password = "root";
$nama_database = "perpustakaan_v1_db";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
} 

?>

