<?php
include'koneksi.php';
$tgl=date('Y-m-d');
session_start();
if (isset($_SESSION['sesi'])) {
	?>
	<!doctype html>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Sistem Informasi Perpustakaan</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	<div id="container">
		<div id="header">
			<div id="logo-perpustakaan-container">
				<image id="logo-perpustakaan" src="image/logo-perpustakaan3.png" border=0 style="border:0; text-decoration: none; outline:none">
				</div>
				<div id="nama-alamat-perpustakaan-container">
					<div class="nama-alamat-perpustakaan">
						<h1>PERPUSTAKAAN UMUM</h1>
					</div>
					<div class="nama-alamat-perpustakaan">
						<h4>Jl. Lembah Abang No 11, Telp: (021)55555555</h4>
					</div>
				</div>
			</div>
			<div id="header-2">
				<div id="nama-user">Hai <?php echo $_SESSION['sesi']; ?>!</div>
			</div>
		</div>
		<div id="header-2">
			<div id="nama-user">Hai <?php echo $_SESSION['sesi']; ?>!</div>
		</div>
		</div id="sidebar">
		<a href="index/php?p=beranda">Beranda</a>
		<p href="label-navigasi">Data Master</p>
		<ul>
		<li><a href="index.php?p=anggota">Data Anggota</a>
			<li><a href="index.php?p=buku">Data Buku</a>
			</ul>
			<p class="label-navigasi">Data Transaksi</p>
		</ul>
		<p class="label-navigasi" style="color: white;"><a href="index.php?p=transaksi" style="color: white;">Laporan Transaksi></a></p>
		<a href="logout.php">Logout</a>
	</div>
	<div id="content-container">
		<div class="container">
			<div class="row"><br/><br></br>
				<div class="col-md-10 col-md-offset-1" style="background-image: url('..asanoer-background.jpg');">
					<div
						class="col-md-4 col-md-offset-4">
					<div class="panel panel-warning login-panel" style="background-color: rgba(255,255,255,0.6);position: relative;">
						<div class="panel-footer">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include('pages/beranda.php');
?>
</div>
<div id="footer"><h3>Sistem Informasi Perpustakaan (sipus) | Praktikum</h3></div>
</div>
</body>
</html>
<?php
}
else{
	echo "<script>
	alert('Anda Harus Login Dahulu!');
	</script>";
	header('location:login.php');
}
?>