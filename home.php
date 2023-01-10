<?php
    include_once("koneksi.php");
    session_start();

    $nim = $_GET['nim'];
    
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = $nim");
    $user_data = mysqli_fetch_array($result);
    $user = $user_data['nama'];
    $id = $user_data['id'];
    $level = $user_data['level'];

    $_SESSION['id'] = $id;

    $krs = mysqli_query($conn, "SELECT mata_kuliah.kode, mata_kuliah.nama, mata_kuliah.sks, mata_kuliah.sem, khs.nilai FROM khs INNER JOIN mahasiswa ON mahasiswa.id = khs.id_mhs INNER JOIN mata_kuliah ON khs.id_matkul = mata_kuliah.id WHERE mahasiswa.nim = $id");
    $info = mysqli_query($conn, "SELECT * FROM mahasiswa");

?>
<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UAS</title>
</head>

<body>
    <?php
        if($level == "Mahasiswa"){
            ?>
               <!-- <a href="tambah.php">Tambah Data Baru</a> | <a href="cetak_mhs.php">Cetak Mahasiswa</a><br /><br /><br /><br /> -->
                <a href="index.php">Logout</a>
                <?php 
                    echo "<h2> Nim : " . $nim . "<h2>";
                    echo "<h2> Nama : " . $user . "<h2>";
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
                echo "<a href='cetak.php?nim=$nim'> Cetak KRS</a>";
        }
        elseif($level == "Admin"){
            ?>
                <!-- <a href="tambah.php">Tambah Data Baru</a> | <a href="cetak_mhs.php">Cetak Mahasiswa</a><br /><br /><br /><br /> -->
                <a href="index.php">Logout</a>
                <?php 
                    echo "<h2> Nim : " . $nim . "<h2>";
                    echo "<h2> Nama : " . $user . "<h2>";
                ?>
                <table border="1px">
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
                                echo "<td><a href='editkrs.php?nim=$nim'>Edit </a> | <a href='deletekrs.php?nim=$nim'>Delete</a></td></tr>";
                            }
                        ?>
                </table>
                <?php

        }
    ?>
 
</body>

</html>