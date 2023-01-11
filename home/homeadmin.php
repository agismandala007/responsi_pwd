<?php
    include_once("../koneksi.php");
    session_start();

    if(isset($_SESSION['id']) == ""){
        header("Location: index.php");
    }else{
        $info = mysqli_query($conn, "SELECT * FROM mahasiswa");
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
        <a class="navbar-brand" href="/home/homeadmin.php">Universitas Alim Sukses</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <form class="d-flex justify-content-end" role="search">
            <input class="form-control me-2" type="search" placeholder="Pencarian Mahasiswa" aria-label="Search">
            <button class="btn btn-outline-dark me-2" type="submit">Search</button>
            <a href="../action/logout.php" class="btn btn-danger">Logout</a>
        </form>
        </div>
    </div>
    </nav>
        <!-- <a href="tambah.php">Tambah Data Baru</a> | <a href="cetak_mhs.php">Cetak Mahasiswa</a><br /><br /><br /><br /> -->
        <!-- <a href="index.php">Logout</a> -->
        <!-- <form action="cari.php" method="get">
            <input type="text" name="cari" id="cari" placeholder="Pencarian berdasarkan nama...">
        </form> -->


        <table class="table table-bordered">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Action</th>
            </tr>
                <?php
                    while($user_krs = mysqli_fetch_array($info)){
                        echo "<tr><td>" . $user_krs['nim'] . "</td>";
                        echo "<td>" . $user_krs['nama'] . "</td>";
                        echo "<td>" . $user_krs['jenis_kelamin'] . "</td>";
                        echo "<td>" . $user_krs['alamat'] . "</td>";
                        echo "<td>" . $user_krs['tgl_lahir'] . "</td>";
                        echo "<td><a class='btn btn-primary' href='../action/edit.php?id=$user_krs[id]'>Edit </a> | <a class='btn btn-primary' href='../action/delete.php?id=$user_krs[id]'>Delete</a></td></tr>";
                    }
                ?>
        </table>
 
</body>

</html>