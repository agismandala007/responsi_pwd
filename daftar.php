<?php
    include_once("koneksi.php")

    if (isset($_POST['Submit'])) {
        // Variable untuk menampung data $_POST yang dikirimkan melalui form.
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $tgl_lahir = $_POST['tgl_lahir'];
    
        // Syntax untuk menambahkan data ke table mahasiswa
        $result = mysqli_query($conn, "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, alamat, tgl_lahir, pass) VALUES ($nim, $nama, $jenis_kelamin, $alamat, $tgl_lahir, $pass)");
    
        // Menampilkan pesan jika data berhasil disimpan.
        echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";
        exit();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <a href="login.php">Home</a>
    <h2>Daftar</h2>
    <form action="daftar.php" method="post">
        <input type="number" name="nim" id="nim" placeholder="Nim...">
        <input type="text" name="nama" id="nama" placeholder="Nama...">
        <input type="text">
        <select name="radio" id="radio-dropdown"><br>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        <input type="text" name="input_alamat" id="input_alamat" placeholder="Alamat..."><br>
        <button type="submit">Daftar</button>
    </form>
</body>
</html>