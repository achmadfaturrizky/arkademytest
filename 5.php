<?php 
function count_handshake($x) {
	$sum = 0;
	$i = 0;
	while ($i < $x) {
	$sum = $sum + $i; // menjumlah dengan perulangan
	$i++;
	}
	echo $sum."<br>";
}
echo "jumlah handshake :<br>";
print count_handshake(6);
print count_handshake(3);
 ?>
