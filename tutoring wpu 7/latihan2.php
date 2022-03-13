<?php 
// cek apakah ada tidak ada data $_GET
if( !isset($_GET["nama"]) || 
    !isset($_GET["kelas"])||
    !isset($_GET["absen"])||
    !isset($_GET["rumah"])) {
    //redirect
    header("Location: latihan1.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail siswa</title>
</head>
<body>
    <H3>DATA SISWA</H3>
    <ul>
        <li><?php echo $_GET["nama"];?></li>
        <li><?php echo $_GET["kelas"];?></li>
        <li><?php echo $_GET["absen"];?></li>
        <li><?php echo $_GET["rumah"];?></li>
    </ul>
    <a href="latihan1.php">Kembali ke beranda</a>
</body>
</html>