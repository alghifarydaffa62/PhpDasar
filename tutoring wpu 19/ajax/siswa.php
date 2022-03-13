<?php 
    require '../functions.php';
    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM siswa WHERE 
                nama LIKE '%$keyword%' OR 
                nis LIKE '%$keyword%' OR
                absen LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
            ";
    $siswa = query($query);
?>
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