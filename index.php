<?php
    include_once("koneksi.php");

    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UAS</title>
</head>
<body>
    <a href="daftar.php">Daftar</a>
    <div>
        <h2>Login</h2>
        <form action="login.php" method="post">
            <input type="number" name="nim" id="nim" placeholder="Nim..."><br>
            <input type="password" name="password" id="password"><br>
            <img src="captcha.php"><br>
            <input type="text" name="captha_code" id="captha_code">
            <input type="submit" value="Login"><br>
        </form>
    </div>

</body>
</html>