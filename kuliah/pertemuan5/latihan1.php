<?php
//ARRAY
//membuat Array
$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = ['Gio', 24, False];
$binatang = ['🐶', '🐰', '🐵', '🐨', '🐮'];

//menampilkan isi array
//mencetak satu elemen pada array menggunakan array
echo $hari[1];
echo "<hr>";

//mencetak seluruh isi array
//var_dump
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($myArray);
echo "<br>";
print_r($binatang);
echo "<hr>";

//manipulasi isi array
//isi elemen menggunakan index nya
$hari[3] = 'Kamis';



//menambahkan elemen di akhir array menggunakan index kosong[]
$hari[]= "Jum'at";
$hari[]= "Sabtu";
print_r($hari);
echo"<br>";

//menambahkan elemen baru di akhir array menggunakan array_push()
array_push($bulan, 'April', 'Mei', 'Juni', 'Juli');
print_r($bulan);
echo "<hr>";

//
array_pop($hari);
array_pop($hari);
print_r($hari);

//menambahkan elemen di awal menggunakan array_unshift
array_unshift($binatang, '🐍');
print_r($binatang);
echo "<hr>";

//menghapus elemen di awal array menggunakan array_shift
array_shift($hari);
print_r($hari);

?>