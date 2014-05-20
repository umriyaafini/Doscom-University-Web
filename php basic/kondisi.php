<?php

$a=10;

// contoh kondisi
if($a<4){
	echo "nomer kurang dari empat";
}else{
	echo "nomer lebih dari empat";
}

// contoh switch
echo '<br/>';

$warna="hijau";

switch ($warna){
	case "merah" :
		echo "its red";
		break;
	case "kuning" :
		echo "its yellow";
		break;
	case "hijau" :
		echo "its green";
		break;
	default :
		echo "apa warna favoritmu? aku sih coklat";
}