<?php 
    $Siswa = [
        ["Ahmad Fatih","006914456566","X - 4","Laki laki", "Islam"],
        ["Muhammad Daffa Al Ghifary", "006915467776", "X - 4", "Laki Laki", "Islam"] 
    ];

    // associative arrray
    // key nya adalah string yang dibuat sendiri
    $siswa2 = [
        "Nama: " => "Muhammad fachreiza Yeager", 
        "Kelas: " => "X - 4",
        "Absen: " => "22",
        "Rumah: " => "Amerika";
    ];
    echo $siswa2["Nama: "];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 array</title>
</head>
<body>
    <h3>DAFTAR SISWA KELAS X - 4</h3>

    <?php foreach ($Siswa as $s) : ?>
    <ul>
        <li>Nama Siswa: <?php echo $s[0];?></li>
        <li>NISN: <?php echo $s[1];?></li>
        <li>Kelas: <?php echo $s[2];?></li>
        <li>Jenis kelamin: <?php echo $s[3];?></li>
        <li>Agama: <?php echo $s[4];?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>