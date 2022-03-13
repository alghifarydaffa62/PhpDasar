<?php 
// cek apakah tombol submit sudah di click
if ( isset($_POST["submit"]) ) {
    // cek usename dan password
    if($_POST["Username"] == "admin" && $_POST["Password"] == "123") {
        // jika benar redirect ke halaman admin
        header("location: admin.php");
        exit;

    } else {
        // jika salah muncul tulisan
        $error = true;
    }
    
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Silahkan Login!</h1>

    <?php if( isset($error) ) : ?>
        <p style="color: red">Username dan password anda salah</p>
    <?php endif; ?>
    
    <ul>
    <form action="" method="post">
        <li>
            <label for="Username">Username :</label>
            <input type="text" name="Username" id="Username">
        </li>
        <li>
            <label for="Password">Password :</label>
            <input type="password" name="Password" id="Password">
        </li>
        <li>
            <button type="submit" name="submit">Login</button>
        </li>

    </form>
    </ul>

</body>
</html>