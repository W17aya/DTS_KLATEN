<html>
<head>
	<title>Membuat form validasi</title>
</head>j
<body>
	<h1>Membuat Form Validasi Dengan PHP</h1>
	<?php
	if(isset($_GET['nama'])){
		if($_GET['nama'] == "kosong"){
			echo "<h4 style='color:red'>Nama Belum di Masukkan !</h4>";

		}
	}
	?>
	<h4> Masukkan nama anda : </h4>
	<form action="hasil_form.php" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
				<td><input type="submit" value="cek"></td>
			</tr>
		</table>
	</form>
</body>
</html>