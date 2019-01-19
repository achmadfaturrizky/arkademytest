<?php 
function count_handshake($x) {
	$sum = 0;
	$i = 0;
	while ($i < $x) {
	$sum = $sum + $i; // menjumlah dengan perulangan
	$i++;
	}
	echo $sum;
	echo "<br>";
}
echo "jumlah handshake : ";
echo "<br>";
print count_handshake(6);
print count_handshake(3);
 ?>
