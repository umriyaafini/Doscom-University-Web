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
		echo "its merah";
		break;
	case "kuning" :
		echo "its kuning";
		break;
	case "hijau" :
		echo "its hijau";
		break;
	default :
		echo "apa warna favoritmu? aku sih coklat";
}