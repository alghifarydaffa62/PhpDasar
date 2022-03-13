<?php 
// Array
// variabel yang menampung banyak nilai
// elemen dalam array boleh tipe data berbeda

// membuat array
// cara lama
$hari = array("senin","selasa","Rabu");
// cara baru
$bulan = ["Januari","Februari","Maret"];
$arr1 = [123, "Hello world", false];

// menampilkan array
// var_dump
// print_r()
var_dump($bulan);
echo "<br>";
print_r($hari);
echo "<br>";

// menampilkan 1 nilai array
echo $arr1[0];
echo "<br>";
echo $bulan[1];
echo "<br>";

// menambahkan array
var_dump($bulan);
$bulan[] = "April";
$bulan[]= "Mei";
echo "<br>";
var_dump($bulan);

?>