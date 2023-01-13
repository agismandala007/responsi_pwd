<?php
    include_once("../koneksi.php");
    session_start();

    if(!isset($_SESSION['id']) && $_SESSION['level'] != "Admin"){
        ?>
            <script>
                alert("Anda tidak memiliki akses, silahkan untuk kembali lagi");
            </script>

        <?php
    }

    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $pass = $_POST['pass'];
        $jenis_kelamin = $_POST['gender'];
        $alamat = $_POST['alamat'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $level = $_POST['level_akun'];
    
        $result = mysqli_query($conn, "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, alamat, tgl_lahir, pass, level_akun) VALUES ('$nim', '$nama', '$jenis_kelamin', '$alamat', '$tgl_lahir', '$pass', '$level')");
        ?>
        <script>
            alert("Data berhasil disimpan");
            window.location.href="../home/homeadmin.php";  
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
    <style>
        th, td{
            padding: 5px;
        }
    </style>

</head>
<body class="text-center">
<header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="../home/homeadmin.php">Universitas Alim Sukses</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                </li>
                <li class="nav-item">
                  <!-- <a class="nav-link" href="#">Link</a> -->
                </li>
                <li class="nav-item">
                  <!-- <a class="nav-link disabled">Disabled</a> -->
                </li>
              </ul>
                <!-- Button trigger modal -->
                <form class="d-flex" role="search" action="../home/homeadmin.php" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search"> 
                    <button class="btn btn-outline-success me-2" type="submit">Search</button>
                    <a href="../action/logout.php" class="btn btn-outline-success">Logout</a>
                </form>
            </div>
          </div>
        </nav>
    </header>

    <main class="form-signin w-50 m-auto align-items-start ">
    <h2>Data User</h2>
    <form action="tambahuser.php" method="POST">
        <table style="text-align: left;">
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
                    <label for="level_akun">Level Akun (Admin/Mahasiswa)</label>
                </td>
                <td>
                    <select name="level_akun" id="level_akun">
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Admin">Admin</option>
                    </select>
                    <!-- <input type="text" name="level_akun" id="level_akun" placeholder="Mahasiswa/Admin"> -->
                </td>
            </tr>
            <tr style="text-align: right;">
                <td colspan='2'>
                    <button type="submit" name="submit" value="daftar" class="btn btn-primary">Tambah User</button>
                </td>
            </tr>
        </table>
    </form>
    </main>

    
</body>
</html>