<?php

$huruf = [
	[1, 1, 1, 1, 1, 1, 1],
	[1, 0, 0, 1, 0, 0, 1],
	[1, 0, 0, 1, 0, 0, 1],
	[1, 1, 1, 1, 1, 1, 1],
	[1, 0, 0, 1, 0, 0, 1],
	[1, 0, 0, 1, 0, 0, 1],
	[1, 1, 1, 1, 1, 1, 1],
];

foreach( $huruf as $key => $value ) {

	echo "<table bgcolor='white'>";

	foreach( $value as $key2 => $value2 ) {

		echo $huruf[$key][$key2] == 1 ? '<td width="20" bgcolor="white">*</td>' : '<td width="20" bgcolor="white"></td>';
	
	}

	echo "</table>";

}