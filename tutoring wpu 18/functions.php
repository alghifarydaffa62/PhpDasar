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
        
        // upload gambar
        $gambar = upload();
        if( !$gambar ) {
            return false;
        }

        // query tambah data
        $query = "INSERT INTO siswa VALUES('', '$gambar', '$nama', '$nis', '$email', '$jurusan', '$absen' )";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload() {
        $file = $_FILES['gambar']['name'];
        $size = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpname = $_FILES['gambar']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if($error === 4) {
            echo "<script>
                    alert('pilih gambar');
                </script>";
            return false;
        }

        // cek apakah file yang diupload adalah gambar
        $validgambar = ['jpg', 'jpeg', 'png'];
        $ekstensigambar = explode('.', $file);
        $ekstensigambar = strtolower(end($ekstensigambar));
        if(!in_array($ekstensigambar, $validgambar)) {
            echo "<script>
                    alert('file yang diupload bukan gambar');
                </script>";
            return false;
        }

        // cek jika ukuran terlalu besar
        if($size > 1000000) {
            echo "<script>
                    alert('file gambar terlalu besar');
                </script>";
            return false;
        }

        // gambar siap upload
        // generate nama file baru
        $filebaru = uniqid();
        $filebaru .= '.';
        $filebaru .= $ekstensigambar;

        move_uploaded_file($tmpname, 'img/' . $filebaru);

        return $filebaru;
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
        $gambarlama = htmlspecialchars($data["gambarlama"]);

        if($_FILES['gambar']['error'] === 4) {
            $gambar = $gambarlama;
        } else {
            $gambar = upload();
        }

        // query edit data
        $query = "UPDATE siswa SET 
            gambar = '$gambar',
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

    function cari($keyword) {
        $query = "SELECT * FROM siswa 
                WHERE 
                nama LIKE '%$keyword%' OR 
                nis LIKE '%$keyword%' OR
                absen LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
                ";
        return query($query);
    }

    function registrasi($data) {
        global $conn;

        $username = strtolower(stripslashes($data["username"])); 
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        // cek username sudah ada atau belum 
        $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

        if(mysqli_fetch_assoc($result) ) {
            echo "
                <script>
                    alert('Username sudah dipakai!');
                </script>
            ";
            return false;
        }
        
        // cek konfirmasi password 
        if($password !== $password2) {
            echo "
                <script>
                    alert('Password tidak sesuai');
                </script>
            ";
            return false; 
        } 

        //  enskripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // insert user baru ke database 
        mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password') ");
        return mysqli_affected_rows($conn);
    }
?>