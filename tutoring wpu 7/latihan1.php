<?php 
// global variable
$x = 100;

function keluarx () {
    global $x;
    echo $x;
}

keluarx ();
echo "<br>";

// superglobals variable
var_dump($_GET);
echo "<br>";
var_dump($_POST);
echo "<br>";
echo $_SERVER ["SERVER_NAME"];
echo "<br>";

// $_GET
// $_GET ["Nama"] = "Muhammad Daffa Al Ghifary";
$siswa2 = [
    [
        "Nama: " => "Muhammad fachreiza Yeager", 
        "Kelas: " => "X-4",
        "Absen: " => "22",
        "Rumah: " => "Amerika"
    ],
    [
        "Nama: " => "Muhammad Daffa Al Ghifary",
        "Kelas: " => "X-4",
        "Absen: " => "21",
        "Rumah: " => "Yogyakarta"
    ]

];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan get and post</title>
</head>
<body>
    <h2>Daftar Siswa X-4</h2>

    <?php foreach($siswa2 as $si2) :?>
        <ul>
            <li>Nama siswa: 
                <a href="latihan2.php?nama=<?php echo $si2["Nama: "]; ?>&kelas=<?php echo $si2["Kelas: "];?>&absen=<?php echo $si2["Absen: "];?>&rumah=<?php echo $si2["Rumah: "];?>"><?php echo $si2["Nama: "]?></a>
            </li>
        </ul>
    <?php endforeach;?>
</body>
</html>