<?php
include "../koneksi.php";

?>
<link rel="stylesheet" type="text/css" href="../style.css">
<h3>Data Anggota</h3></div>
<div id="content">
<table border="1" id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</th>
			<th>ID Anggota</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>Kontak</th>
		</tr>
		
		<?php		
		$nomor=1;
		$query="SELECT * FROM tb_anggota ORDER BY anggota_id DESC";
		$q_tampil_anggota = mysqli_query($db, $query);
		if(mysqli_num_rows($q_tampil_anggota)>0)
		{
		while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
		?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $r_tampil_anggota['anggota_id']; ?></td>
			<td><?php echo $r_tampil_anggota['anggota_nama']; ?></td>
			<td><?php echo $r_tampil_anggota['anggota_gender']; ?></td>
			<td><?php echo $r_tampil_anggota['anggota_alamat']; ?></td>		
			<td><?php echo $r_tampil_anggota['anggota_kontak']; ?></td>		
		</tr>		
		<?php $nomor++; } 
		}?>		
	</table>
	<script>
		window.print();
	</script>
</div>
