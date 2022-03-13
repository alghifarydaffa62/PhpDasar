<?php 
    // koneksi ke database
    require 'functions.php';

    $siswa = query("SELECT * FROM siswa ORDER BY id ");

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

    <h1>Daftar Mahasiswa</h1>
    <a href="tambahdata.php">Tambah Data siswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="25" autofocus placeholder="Cari Data Siswa" 
            autocomplete="off">
        <button type="submit" name="Search!">Cari Siswa!</button>
    </form>
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