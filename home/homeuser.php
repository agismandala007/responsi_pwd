<?php
    include_once("../koneksi.php");
    session_start();

    if(isset($_SESSION['id']) == ""){
        header("Location: index.php");
    }else{
        $id = $_SESSION['id'];
        $krs = mysqli_query($conn, "SELECT mata_kuliah.kode, mata_kuliah.nama, mata_kuliah.sks, mata_kuliah.sem, khs.nilai FROM khs INNER JOIN mahasiswa ON mahasiswa.id = khs.id_mhs INNER JOIN mata_kuliah ON khs.id_matkul = mata_kuliah.id WHERE mahasiswa.id = $id");
        $info = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = $id");
        $user = mysqli_fetch_array($info);
    }    

?>
<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Portal Akademik UAS</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg text-bg-warning p-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Universitas Alim Sukses</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <form class="d-flex justify-content-end" role="search">
            <input class="form-control me-2" type="search" placeholder="Pencarian Mahasiswa" aria-label="Search">
            <button class="btn btn-outline-dark me-2" type="submit">Search</button>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </form>
        </div>
    </div>
    </nav>
        <!-- <a href="tambah.php">Tambah Data Baru</a> | <a href="cetak_mhs.php">Cetak Mahasiswa</a><br /><br /><br /><br /> -->
        <!-- <a href="index.php">Logout</a> -->
        <?php 
            echo "<h2> Nim : " . $user['nim'] . "<h2>";
            echo "<h2> Nama : " . $user['nama'] . "<h2>";
        ?>
        <table border="1px">
            <tr>
                <th>Kode</th>
                <th>Matkul</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
                <!-- <th>Action</th> -->
            </tr>
                <?php
                    while($user_krs = mysqli_fetch_array($krs)){
                        echo "<tr><td>" . $user_krs['kode'] . "</td>";
                        echo "<td>" . $user_krs['nama'] . "</td>";
                        echo "<td>" . $user_krs['sks'] . "</td>";
                        echo "<td>" . $user_krs['sem'] . "</td>";
                        echo "<td>" . $user_krs['nilai'] . "</td></tr>";
                    }
                ?>
        </table>
        <?php
            echo "<a href='action/cetak.php?nim=$nim'> Cetak KRS</a>";
        ?>
 
</body>

</html>