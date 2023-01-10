<?php
    include_once("koneksi.php");

    $nim = $_POST['nim'];
    $in_pass = $_POST['password'];


    $result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = $nim AND pass = $in_pass");
    if(isset($result)){
        echo "<h2>Password atau nim yang anda masukan salah</h2>";
        echo "<a href='index.html'>Coba lagi</a>";
    }else{

        while($user_data = mysqli_fetch_array($result)){
            $user = $user_data['nama'];
            $id = $user_data['id'];
        }
    }

    // $krs = mysqli_query($conn, "SELECT * FROM khs, mata_kuliah WHERE khs.id_mhs = $id, khs.id_matkul = mata_kuliah.id");
    $krs = mysqli_query($conn, "SELECT mata_kuliah.kode, mata_kuliah.nama, mata_kuliah.sks, khs.nilai FROM khs INNER JOIN mahasiswa ON mahasiswa.id = khs.id_mhs INNER JOIN mata_kuliah ON khs.id_matkul = mata_kuliah.id WHERE mahasiswa.nim = $id");


?>
<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UAS</title>
</head>

<body>
    <a href="tambah.php">Tambah Data Baru</a> | <a href="cari_mhs.php">Cari Mahasiswa</a> | <a href="cetak_mhs.php">Cetak Mahasiswa</a><br /><br /><br /><br />
    <?php 
        echo "<h2> Nim : " . $nim . "<h2>";
        echo "<h2> Nama : " . $user . "<h2>";
        while($user_krs = mysqli_fetch_array($krs)){
            echo $user_krs['kode'] . "<br>";
            echo $user_krs['nama'] . "<br>";
            echo $user_krs['nilai'] . "<br>";
        }?>

        <a href="editkrs.php?nim=$nim"> Edit </a> | <a href="cetak.php"> Cetak </a> | <a href="delete.php">Delete</a>
</body>

</html>