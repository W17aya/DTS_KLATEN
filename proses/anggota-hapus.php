<?php
$id_anggota=$_GET['id'];

$server="localhost:3306";
$user="root";
$password="";
$nama_database="perpustakaan_v1_db";
$db= mysqli_connect($server,$user,$password,$nama_database);

mysqli_query($db,
"DELETE FROM tb_anggota WHERE anggota_id='$id_anggota'");
header("location:../index.php?p=anggota");
?>