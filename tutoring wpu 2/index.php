<!-- tag php -->
<?php 

// pertemuan php dasar wpu
// sintaks php
// standar output
// echo, print
// print_r
// var_dump

echo "Nama Saya Daffa Al Ghifary, ";
print "<br>";
print "coba variabel print, ";
echo "<br>";
print_r("di Tutoring php wpu, ");
echo "<br>";
var_dump("Muhammad Daffa Al Ghifary");
print "<br>";
echo 123456;
print "<br>";

//variabel dan tipe data
// variabel dengan $
// variabel tidak boleh diawali angka, tapi boleh mengandung angka
$nama = "Muhammad Daffa";

// operator
// aritmatika
// + - * / %
echo 1 + 5;
print "<br>";
$x = 18;
$y = 25;
echo $x + $y;
echo "<br>";

$x2 = 20;
$y2 = 30;
$z = 40;
echo $x * $x2 + $y * $y2 - $z;
echo "<br>";

// penggabungan string / concatenation / concat
// *
$nama_depan = "Muhammad Daffa";
$nama_akhir = "Al Ghifary";
echo $nama_depan . " " . $nama_akhir;
echo "<br>";

// assignment
// =, +=, -=, *=, /=, %=, .= 
$a = 140;
$a += 100;
$a *= 20;
echo $a; 
print "<br>";

$b = 30;
$b /= 10;
$b += 120;
$b -= 126; 
echo $b;
print "<br>";

$Name = " Saya Muhammad Daffa";
$Name .= " ";
$Name .= "Al Ghifary, Salam Kenal";
echo $Name;
echo "<br>";

// perbandingan 
// <, >, ==, <=, >=, !=
var_dump(2 <= 10);
echo "<br>";
var_dump(10 > 0);
echo "<br>"; 
var_dump(10 != 8);
echo "<br>";
var_dump(1 == "1");
echo "<br>";

// identitas 
// ===, !==
var_dump(15 === "15");
echo "<br>";

// operator logika
// &&(dan), || (or), !(no)
// $$ (harus sama, agar muncul true), || (salah satu benar akan muncul benar)

$c = 200;
var_dump($c <= 300 && $c % 2 == 0); // hasil adalah true 
echo "<br>";

?>
<!-- penulisan sintaks php -->
<!-- 1. php didalam html -->
<!-- 2. html didalam php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo Dunia <?php echo "nama saya $nama"; ?> </h1>
    <p> <?php echo "ini adalah paragraf"; ?> </p>
    <?php echo "<h1>Halo, $nama</h1>"?>

</body>
</html>
