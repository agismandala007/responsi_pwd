<?php
    include_once("../koneksi.php");
    session_start();

    if(isset($_SESSION['id']) == ""){
        header("Location: ../index.html");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Akun</title>
</head>
<body>
    <form action="" method="post">
        
    </form>
</body>
</html>