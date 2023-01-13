<?php
    include_once("../koneksi.php");


    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $pass = $_POST['pass'];
        $jenis_kelamin = $_POST['gender'];
        $alamat = $_POST['alamat'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $level = "Mahasiswa";
    
        $result = mysqli_query($conn, "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, alamat, tgl_lahir, pass, level_akun) VALUES ('$nim', '$nama', '$jenis_kelamin', '$alamat', '$tgl_lahir', '$pass', '$level')");
        ?>
        <script>
            alert("Data berhasil disimpan");
            window.location.href="../index.html";  
        </script>

        <?php
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg text-bg-warning p-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home/homeadmin.php">Universitas Alim Sukses</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <form class="d-flex" role="search">
            <a href="../index.html" class="btn btn-primary">Home</a>
        </form>
        </div>
    </div>
    </nav>
    <h2>Daftar</h2>
    <form action="daftar.php" method="POST">
        <table>
            <tr>
                <td>
                    <label for="nim">NIM</label>
                </td>
                <td>
                    <input type="number" name="nim" id="nim" placeholder="Nim...">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nama">Nama</label>
                </td>
                <td>
                    <input type="text" name="nama" id="nama" placeholder="Nama...">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="pass">Password</label>
                </td>
                <td>
                    <input type="password" name="pass" id="pass" placeholder="Password...">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gender">Jenis Kelamin(L/P)</label>
                </td>
                <td>
                    <input type="text" name="gender" id="gender" placeholder="Jenis Kelamin...">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="alamat">Alamat</label>
                </td>
                <td>
                    <input type="text" name="alamat" id="alamat" placeholder="Alamat..."><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tgl_lahir">Tanggal Lahir</label>
                </td>
                <td>
                    <input type="date" name="tgl_lahir">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit" value="daftar">Daftar</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>