<?php 
    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    // ambil data (query) dari tabel database
    $result = mysqli_query($conn, "SELECT * FROM siswa");

    // var_dump($result);
    // echo "<br>";

    // ambil data (fetch) siswa dari objek result
    // mysqli_fetch_row() // mengembalikan dengan array numerik
    // mysqli_fetch_assoc() // mengembalikan dengan array assosiativ
    // mysqli_fetch_array() // mengembalikan keduanya
    // mysqli_fetch_object() // 

    // while( $siswa = mysqli_fetch_assoc($result) ) {
    //     var_dump($siswa);
    //     echo "<br>";
    // }

    // $siswa2 = mysqli_fetch_object($result);
    // var_dump($siswa2);
    // echo "<br>";
    // var_dump($siswa2->nama);
    // echo "<br>";

    // $siswa3 = mysqli_fetch_array($result);
    // var_dump($siswa3["nama"]);
    // echo "<br>";
    // var_dump($siswa3);
    // echo "<br>";




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

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Absen</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1;?>
        <?php while($row = mysqli_fetch_assoc($result)):?>
        <tr> 
            <td><?php echo $i?></td>
            <td>
                <a href="">Edit</a> | <a href="">Delete</a>
            </td>
            <td><?php echo $row["absen"]?></td>
            <td><?php echo $row["nis"]?></td>
            <td><?php echo $row["nama"]?></td>
            <td><?php echo $row["email"]?></td>
            <td><?php echo $row["jurusan"]?></td>
        </tr>
        <?php $i++?>
        <?php endwhile;?>

    </table>

</body>
</html>