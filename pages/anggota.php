@@ -0,0 +1,113 @@
<?php
include "./koneksi.php";
?>
<div id="label-page">
	<h3>Tampil Data Anggota</h3>
</div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=anggota-input" class="tombol">Tambah Anggota</a>
		<a target="_blank" href="pages/cetak.php"><img src="print.png" height="50px">
		</a>
	<FORM CLASS="form-inline" METHOD="POST">
		<div align="right">
			<form method="post"><input type="text" name="pencarian"><input type="submit" name="search" value="search
" class="tombol"></form>
	</FORM>
	</p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Anggota</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Kontak</th>
			<th>Alamat</th>
		
			<th id="label-opsi">Opsi</th>
		</tr>
		<?php
		$batas = 5;
		if (empty($hal)) {
			$posisi = 0;
			$hal = 1;
			$nomor = 1;
		} else {
			$posisi = ($hal - 1) * $batas;
			$nomor = $posisi + 1;
		}
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$pencarian = trim(mysqli_real_escape_string($db, $_POST['pencarian']));
			if ($pencarian != "") {
				$sql = "SELECT * FROM tb_anggota WHERE anggota_nama LIKE '%$pencarian%'
		OR anggota_id LIKE '%$pencarian%'
		OR anggota_gender LIKE '%$pencarian%'";

				$query = $sql;
				$queryJml = $sql;
			} else {
				$query = " SELECT * FROM tb_anggota LIMIT $posisi, $batas";
				$queryJml = "SELECT * FROM tb_anggota";
				$no = $posisi * 1;
			}
		} else {
			$query = "SELECT * FROM tb_anggota LIMIT $posisi, $batas";
			$queryJml = "SELECT * FROM tb_anggota";
			$no = $posisi * 1;
		}

		//&sql="SELECT * FROM tbanggota ORDER BY idanggota DESC";

		$q_tampil_anggota = mysqli_query($db, $query);
		if (mysqli_num_rows($q_tampil_anggota) > 0) {
			while ($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {
		?>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $r_tampil_anggota['anggota_id']; ?></td>
					<td><?php echo $r_tampil_anggota['anggota_nama']; ?></td>
					<td><?php echo $r_tampil_anggota['anggota_gender']; ?></td>
					<td><?php echo $r_tampil_anggota['anggota_kontak']; ?></td>
					<td><?php echo $r_tampil_anggota['anggota_alamat']; ?></td>
					<td>
						<div class="tombol-opsi-container"><a target="_blank" href="pages/cetak_kartu.php?id=<?php echo $r_tampil_anggota['anggota_id']; ?>" class="tombol">Cetak Kartu</a></div>
						<div class="tombol-opsi-container"><a href="index.php?p=anggota-edit&id=<?php echo $r_tampil_anggota['anggota_id']; ?>" class="tombol">Edit</a></div>
						<div class="tombol-opsi-container"><a href="proses/anggota-hapus.php?id=<?php echo $r_tampil_anggota['anggota_id']; ?>" onclick="return_confirmation('Apakah Anda Yakin Akan Menghapus Data Ini?')" class="tombol">Hapus</a></div>
					</td>
				</tr>
		<?php $nomor++;
			}
		} else {
			echo "<tr><td colspan=6> Data Tidak Ditemukan</td></tr>";
		} ?>
	</table>
	<?php
	if (isset($_POST['pencarian'])) {
		if ($_POST['pencarian'] != '') {
			echo "<div style=\"float:left;\">";
			$jml = mysqli_num_rows(mysqli_query($db, $queryJml));
			echo " Data Hasil Pencarian: <b>$jml</b>";
			echo "</div>";
		}
	} else { ?>
		<div style="float:left;">
			<?php
			$jml = mysqli_num_rows(mysqli_query($db, $queryJml));
			echo " Jumlah Data: <b>$jml</b>";
			?>
		</div>
		<div class="pagination">
			<?php
			$jml_hal = ceil($jml / $batas);
			for ($i = 1; $i <= $jml_hal; $i++) {
				if ($i != $hal) {
					echo "<a href=\"?p=anggota&hal=$i\">$i</a>";
				} else {
					echo "<a class=\"active\">$i</a>";
				}
			}
			?>
		</div>
	<?php
	}
	?>
</div>