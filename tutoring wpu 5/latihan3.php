<?php 
$murid = [
    ["Muhammad Fathoni", "0069185546", "X-4", "MIPA", "thonifcgeaaaa@gmail.com"],
    ["Muhammad Daffa Al Ghifary", "00698885546", "X-4", "MIPA", "daffa-kun aaaa@gmail.com"],
    ["Muhammad ghani", "00691976546", "X-4", "MIPA", "ahsiaaaappppeaaaa@gmail.com"],
    ["Muhammad andri", "00691765246", "X-4", "MIPA", "Hiyaaaaaeaaaa@gmail.com"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <h1>Daftar Murid X-4</h1>

    <?php foreach($murid as $mrd) :?>
    <ul>
        <li>Nama siswa: <?= $mrd [0]; ?></li>
        <li>NISN: <?= $mrd [1]; ?></li>
        <li>Kelas: <?= $mrd [2]; ?></li>
        <li>Jurusan: <?= $mrd [3]; ?></li>
        <li>Email: <?= $mrd [4]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>