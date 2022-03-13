<?php
// array
// membuat array
$hari = array("kamis", "jumat", "sabtu");
$bulan = ["agustus", "juli", "juni"];

// print array debugger
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// menampilkan 1 elemen array
echo $hari[2];
echo "<br>";
echo $bulan[0];
echo "<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            margin: 10px;
            background-color: salmon;
            text-align: center;
            line-height: 30px; 
            float: left;
            transition: 0.5s; 
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%; 
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php 
        $angka = [
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];
        echo $angka [2][2];
        echo "<br>";
    ?>

    <?php foreach ($angka as $ang) : ?>
        <?php foreach ($ang as $a) :?>
            <div class = "kotak"><?php echo $a;?></div>
        <?php endforeach;?>
        <div class="clear"></div>
    <?php endforeach;?>
    
</body>
</html>