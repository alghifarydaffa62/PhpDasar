<?php 
    // FUNCTION DATE PHP
    echo date("l, d-M-Y");
    echo "<br>";

    // function time
    // UNIX Timestamp / EPOCH TIME
    // waktu yang sudah berlalu sejak 1 januari 1970 
    echo Time();
    echo "<br>";

    echo date("d M Y", time() - 60*60*24*100);
    echo "<br>";

    // mktime
    // membuat sendiri detik yang diinginkan 
    // mktime (0,0,0,0,0,0,)
    // jam, menit, detik, bulan, tanggal, tahun
    echo date("l", mktime(0,0,0,7,7,2006)) ;
    echo "<br>";
    echo date("l", mktime(0,0,0,12,3,2000));
    echo "<br>";

    // str to time
    echo date("l", strtotime("16 sep 2011")); 
?>