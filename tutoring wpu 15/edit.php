<?php 

    require 'functions.php';

    $id = $_GET["id"];

    //query data siswa 
    $ssw = query("SELECT * FROM siswa WHERE id = $id")[0];

    if(isset($_POST["submit"]) ) {

        // cek apakah data berhasil diubah

        if( edit($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal diubah!');
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
    <title>Edit Data Siswa</title>
</head>
<body>
    
    <h1>EDIT DATA SISWA</h1>
    <form action="" method="post" enctype = "multipart/form-data">
        <input type="hidden" name="id" value = "<?php echo $ssw["id"];?>">
        <input type="hidden" name="gambarlama" value = "<?php echo $ssw["gambar"];?>">
        <ul>
            <li>
                <label for="nama">Edit nama:</label>
                <input type="text" name="nama" id="nama" required value = "<?php echo $ssw["nama"];?>">
            </li>
            <li>
                <label for="nis">Edit Nis:</label>
                <input type="text" name="nis" id="nis" value = "<?php echo $ssw["nis"];?>">
            </li>
            <li>
                <label for="email">Edit Email:</label>
                <input type="text" name="email" id="email" value = "<?php echo $ssw["email"];?>">
            </li>
            <li>
                <label for="jurusan">Edit Jurusan:</label>
                <input type="text" name="jurusan" id="jurusan" value = "<?php echo $ssw["jurusan"];?>">
            </li>
            <li>
                <label for="absen">Edit Absen:</label>
                <input type="text" name="absen" id="absen" value = "<?php echo $ssw["absen"];?>">
            </li>
            <li>
                <label for="gambar">Edit gambar:</label>
                <img src="img/<?= $ssw["gambar"];?>" width = "60"><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">EDIT</button>
            </li>
        </ul>
    </form>
</body>
</html>