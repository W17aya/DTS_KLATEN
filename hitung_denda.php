<?php
function HitungDenda($tanggal,$tanggalkembali)
{
	$terlambat = ((strtotime($tanggal))	- (strtotime($tanggalkembali)));
	$jmlHari = $terlambat/86400; //jumlah detik dalam satu hari

	$denda = $jmlHari * 500;
	return $denda;
}

echo "Dendanya adalah ". HitungDenda('2021-04-06','2021-03-29');
?>