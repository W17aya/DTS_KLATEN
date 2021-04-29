<div id="label-page"><h3>Input Data Anggota</h3></div>
<div id="content">
	<form action="proses/anggota-input-proses.php" method="post">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">Nama</td>
			<td class="isian-formulir"><input type="text" name="anggota_nama" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis Kelamin</td>
			<td class="isian-formulir"><input type="radio" name="anggota_gender" value="Pria">Pria</label></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="radio" name="anggota_gender" value="Wanita">Wanita</td>
		</tr>
		<tr>
			<td class="label-formulir">Alamat</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="anggota_alamat" class="isian-formulir isian-formulir-border"></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir">Kontak</td>
			<td class="isian-formulir"><input type="number" name="anggota_kontak" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
</div>