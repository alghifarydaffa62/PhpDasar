<?php 
    session_start();
    if(!isset($_SESSION["login"])) {
        header("location: login.php");
        exit;
    }
    
    require 'functions.php';

    if(isset($_POST["submit"]) ) {

        // cek apakah data berhasil atau gagal 

        if( tambah($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            "; 
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>
    
    <h1>TAMBAH DATA SiSWA</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Tambahkan nama:</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nis">Tambahkan Nis:</label>
                <input type="text" name="nis" id="nis">
            </li>
            <li>
                <label for="email">Tambahkan Email:</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Tambahkan Jurusan:</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="absen">Tambahkan Absen:</label>
                <input type="text" name="absen" id="absen">
            </li>
            <li>
                <label for="gambar">Tambahkan Gambar:</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Masukkan</button>
            </li>
        </ul>
    </form>
</body>
</html>