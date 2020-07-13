<?php
require 'function.php';

if( isset($_POST["daftar"]) ) {

    if(Daftar($_POST)> 0 ) {
        echo "<script>
                alert('user baru berhasil ditambahkan')
        </script>";

    } else {

        echo mysqli_eror($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>
    

      <form action="" method="post">
        <ul>
            <li>
                <label for="username">username :</label>
                <input type="text" name="username" id="username">
            </li>
            
            <li>
                <label for="password">password :</label>
                <input type="password" name="password" id="password">
            </li>

            <li>
                <label for="password2">konfirmasi password :</label>
                <input type="password" name="password2" id="">
            </li>
            <li>
                <button type="submit" name="daftar">Daftar</button>
            </li>
        </ul>
    </form>
</body>
</html>

          
