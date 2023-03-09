<?php 

$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = ['Dzikri', '21', false];
$binatang = ['🐈', '🐄', '🐦', '🦆', '🦬'];

// Mencetak array
// Mencteak 1 elemen di dalam array menggunakan echo
echo $hari[2], $hari[1], $hari[0];
echo "<hr>";


// Mencetak semua array
// var_dump, print
var_dump($hari);
echo "<br>";

print_r($bulan);
echo "<br>";

var_dump($myArray);
echo "<br>";

print_r($binatang);
echo "<hr>";

// Manipulasi array
// menambahkan elemen menggunakan index
$hari[3] = 'kamis';
print_r($hari);
echo "<hr>";

// menambahkan elemen di akhir array menggunakan []
$hari[] = "Jum'at";
$hari[] = "Sabtu";
$hari[] = "Ahad";
print_r($hari);
echo "<hr>";

// menambah elemen di akhir array menggunakan array_push
array_push($bulan, 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November');
print_r($bulan);
echo "<hr>";

// menambah elemen di awal array menggunakan array_unshift
array_unshift($binatang, '🐍');
print_r($binatang);
echo "<hr>";

// menghapus elemen di belakang array menggunakan array_pop
array_pop($hari);
print_r($hari);
echo "<hr>";

// menghapus elemen di depan array menggunakan array_shift
array_shift($bulan);
print_r($bulan);
?>