<div id="label-page"><h3>Tampil Data transaksi</h3></div>
<div id="content">
	
	<p id="tombol-tambah-container"><a href="index.php?p=transaksi-input" class="tombol">Tambah transaksi</a>
	<a target="_blank" href="pages/cetak_transaksi.php"><img src="print.png" height="50px" height="50px"></a>
	<FORM CLASS="form-inline" METHOD="POST">
	<div align="right"><form method=post><input type="text" name="pencarian"><input type="submit" name="search" value="search" class="tombol"></form>
	</FORM>
	</p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID transaksi</th>
			<th>Nama Peminjam</th>
			<th>Judul Buku</th>
			<th>Tanggal Pinjam</th>
			<th>Tanggal Kembali</th>
			<th>Status</th>
			<th id="label-opsi">Opsi</th>
		</tr>	
		<?php
		$batas = 5;
		extract($_GET);
		if(empty($hal)){
			$posisi = 0;
			$hal = 1;
			$nomor = 1;
		}
		else {
			$posisi = ($hal - 1) * $batas;
			$nomor = $posisi+1;
		}	
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$pencarian = trim(mysqli_real_escape_string($db, $_POST['pencarian']));
			if($pencarian != ""){
				$sql = "SELECT * FROM tb_transaksi a
                        LEFT JOIN tb_anggota b ON a.anggota_id = b.anggota_id
                        LEFT JOIN tb_buku c ON c.buku_id = a.buku_id
                        WHERE c.buku_judul LIKE '%$pencarian%'
						OR b.anggota_nama LIKE '%$pencarian%'";
				
				$query = $sql;
				$queryJml = $sql;	
						
			}
			else {
				$query = "SELECT * FROM tb_transaksi a
                LEFT JOIN tb_anggota b ON a.anggota_id = b.anggota_id
                LEFT JOIN tb_buku c ON c.buku_id = a.buku_id LIMIT $posisi, $batas";
				$queryJml = "SELECT * FROM tb_transaksi a
                LEFT JOIN tb_anggota b ON a.anggota_id = b.anggota_id
                LEFT JOIN tb_buku c ON c.buku_id = a.buku_id";
				$no = $posisi * 1;
			}			
		}
		else {
			$query = "SELECT * FROM tb_transaksi a
            LEFT JOIN tb_anggota b ON a.anggota_id = b.anggota_id
            LEFT JOIN tb_buku c ON c.buku_id = a.buku_id LIMIT $posisi, $batas";
			$queryJml = "SELECT * FROM tb_transaksi a
            LEFT JOIN tb_anggota b ON a.anggota_id = b.anggota_id
            LEFT JOIN tb_buku c ON c.buku_id = a.buku_id";
			$no = $posisi * 1;
		}
		
		$q_tampil_transaksi = mysqli_query($db, $query);
		if(mysqli_num_rows($q_tampil_transaksi)>0)
		{
		while($r_tampil_transaksi=mysqli_fetch_array($q_tampil_transaksi)){
		?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $r_tampil_transaksi['transaksi_id']; ?></td>
			<td><?php echo $r_tampil_transaksi['anggota_nama']; ?></td>
			<td><?php echo $r_tampil_transaksi['buku_judul']; ?></td>
			<td><?php echo $r_tampil_transaksi['transaksi_tgl_pinjam']; ?></td>
			<td><?php if ($r_tampil_transaksi['transaksi_tgl_kembali'] == '') {echo 'Tidak ada';} else { echo $r_tampil_transaksi['transaksi_tgl_kembali'];}  ?></td>
			<td><?php if($r_tampil_transaksi['transaksi_st'] == '0') {echo 'Belum Kembali';} else {echo 'Kembali';} ?></td>
			<td>
				<div class="tombol-opsi-container"><a href="proses/transaksi-kembali.php?id=<?php echo $r_tampil_transaksi['transaksi_id']; ?>" onclick = "return_confirmation('Apakah Buku ini sudah kembali?')" class="tombol">Buku Kembali</a></div>
			</td>			
		</tr>		
		<?php $nomor++; } 
		}
		else {
			echo "<tr><td colspan=6>Data Tidak Ditemukan</td></tr>";
		}?>		
	</table>
	<?php
	if(isset($_POST['pencarian'])){
	if($_POST['pencarian']!=''){
		echo "<div style=\"float:left;\">";
		$jml = mysqli_num_rows(mysqli_query($db, $queryJml));
		echo "Data Hasil Pencarian: <b>$jml</b>";
		echo "</div>";
	}
	}
	else{ ?>
		<div style="float: left;">		
		<?php
			$jml = mysqli_num_rows(mysqli_query($db, $queryJml));
			echo "Jumlah Data : <b>$jml</b>";
		?>			
		</div>		
		<div class="pagination">		
				<?php
				$jml_hal = ceil($jml/$batas);
				for($i=1; $i<=$jml_hal; $i++){
					if($i != $hal){
						echo "<a href=\"?p=transaksi&hal=$i\">$i</a>";
					}
					else {
						echo "<a class=\"active\">$i</a>";
					}
				}
				?>
		</div>
	<?php
	}
	?>
</div>