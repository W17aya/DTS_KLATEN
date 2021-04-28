<?php
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tb_anggota WHERE anggota_id='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
?>
<div id="label-page"><h3>Edit Data Anggota</h3></div>
<div id="content">
	<form action="proses/anggota-edit-proses.php" method="post">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Anggota</td>
			<td class="isian-formulir"><input type="text" name="anggota_id" readonly value="<?php echo $r_tampil_anggota['anggota_id']; ?>" 
			readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama</td>
			<td class="isian-formulir"><input type="text" name="anggota_nama" value="<?php echo $r_tampil_anggota['anggota_nama']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis Kelamin</td>			
			<?php
			if($r_tampil_anggota['anggota_gender']=="Pria")
			{
				echo "<td class='isian-formulir'><input type='radio' name='anggota_gender' value='Pria' checked>Pria</label></td>
					</tr>
		<tr>
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='anggota_gender' value='Wanita'>Wanita</td>";
			}
			elseif($r_tampil_anggota['anggota_gender']=="Wanita")
			{
				echo "<td class='isian-formulir'><input type='radio' name='anggota_gender' value='Pria'>Pria</label></td>
					</tr>
		<tr>
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='anggota_gender' value='Wanita' checked>Wanita</td>";
			}
			?>
			<input type="text" name="anggota_gender" value="<?php echo $r_tampil_anggota['anggota_gender']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Alamat</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="anggota_alamat" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['anggota_alamat']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir">Kontak</td>
			<td class="isian-formulir"><input type="text" name="anggota_kontak" value="<?php echo $r_tampil_anggota['anggota_kontak']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>