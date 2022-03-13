<?php 
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        
        while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row; 
        }
        return $rows;
    }

    function tambah($data) {
        global $conn;
        
        $nama = htmlspecialchars($data["nama"]);
        $nis = htmlspecialchars($data["nis"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $absen = htmlspecialchars($data["absen"]);

        // query tambah data
        $query = "INSERT INTO siswa VALUES('', '$nama', '$nis', '$email', '$jurusan', '$absen' )";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM siswa WHERE id = $id"); 
        return mysqli_affected_rows($conn);
    }

    function Edit($data) {
        global $conn;
        
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $nis = htmlspecialchars($data["nis"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $absen = htmlspecialchars($data["absen"]);

        // query tambah data
        $query = "UPDATE siswa SET 
            nama = '$nama',
            nis = '$nis',
            email = '$email',
            jurusan = '$jurusan',
            absen = '$absen'
            WHERE id = $id
        ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }


?>