<?php 
    session_start();
    if(!isset($_SESSION["login"])) {
        header("location: login.php");
        exit;
    }
    
    // koneksi ke function
    require 'functions.php';

    // pagination
    // konfigurasi
    $jumlahdataperhalaman = 2;
    $totaldata = count(query("SELECT * FROM siswa"));
    $totalhalaman = ceil($totaldata / $jumlahdataperhalaman);
    $activepage = (isset($_GET["page"])) ? $_GET["page"] : 1;
    $awaldata = ($jumlahdataperhalaman * $activepage) - $jumlahdataperhalaman;

    $siswa = query("SELECT * FROM siswa ORDER BY id LIMIT $awaldata, $jumlahdataperhalaman");

    if(isset($_POST["Search!"]) ) {
        $siswa = cari($_POST["keyword"]);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambahdata.php">Tambah Data siswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="25" autofocus placeholder="Cari Data Siswa" 
            autocomplete="off">
        <button type="submit" name="Search!">Cari Siswa!</button>
    </form>
    <br>

    <!-- navigasi pagination -->
    <?php if($activepage > 1) :?>
        <a href="?page=<?php echo $activepage - 1;?>">&laquo;</a>
    <?php endif;?>

    <?php for($i = 1; $i <= $totalhalaman; $i++) : ?>
        <?php if($i == $activepage) : ?>
            <a href="?page=<?= $i;?>" style="font-weight: bold; color: red;"><?php echo $i;?></a>
        <?php else : ?>
            <a href="?page=<?= $i;?>"><?php echo $i;?></a>
        <?php endif;?>
    <?php endfor;?>

    <?php if($activepage < $totalhalaman) :?>
        <a href="?page=<?php echo $activepage + 1;?>">&raquo;</a>
    <?php endif;?>

    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar Siswa</th>
            <th>Absen</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1;?>
        <?php foreach( $siswa as $row ):?>
        <tr> 
            <td><?php echo $i?></td>
            <td>
                <a href="edit.php?id=<?php echo $row["id"];?>">Edit</a> | <a href="hapus.php?id=<?php echo $row["id"];?>" onclick="
                return confirm('apakah anda yakin ?');">Delete</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?php echo $row["absen"]?></td>
            <td><?php echo $row["nis"]?></td>
            <td><?php echo $row["nama"]?></td>
            <td><?php echo $row["email"]?></td>
            <td><?php echo $row["jurusan"]?></td>
        </tr>
        <?php $i++?>
        <?php endforeach;?>
    </table>

</body>
</html>