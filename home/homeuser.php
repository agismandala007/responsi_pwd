<?php
    include_once("../koneksi.php");
    session_start();

    if(isset($_SESSION['id']) == ""){
        header("Location: index.php");
    }else{
        $id = $_SESSION['id'];
        $krs = mysqli_query($conn, "SELECT mata_kuliah.kode, mata_kuliah.nama, mata_kuliah.sks, mata_kuliah.sem, khs.nilai, khs.id FROM khs INNER JOIN mahasiswa ON mahasiswa.id = khs.id_mhs INNER JOIN mata_kuliah ON khs.id_matkul = mata_kuliah.id WHERE mahasiswa.id = $id");
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
<header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="/home/homeadmin.php">Universitas Alim Sukses</a>
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
                <form class="d-flex" role="search" action="homeadmin.php" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search"> 
                    <button class="btn btn-outline-success me-2" type="submit">Search</button>
                    <a href="../action/logout.php" class="btn btn-outline-success">Logout</a>
                </form>
            </div>
          </div>
        </nav>
    </header>
        <!-- <a href="tambah.php">Tambah Data Baru</a> | <a href="cetak_mhs.php">Cetak Mahasiswa</a><br /><br /><br /><br /> -->
        <!-- <a href="index.php">Logout</a> -->
        <?php 
            echo "<h2> Nim : " . $user['nim'] . "<h2>";
            echo "<h2> Nama : " . $user['nama'] . "<h2>";
        ?>
        <table class="table table-bordered">
            <tr>
                <th>Kode</th>
                <th>Matkul</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
                <th>Action</th>
            </tr>
                <?php
                if(mysqli_num_rows($krs) > 0){
                    while($user_krs = mysqli_fetch_array($krs)){
                        echo "<tr><td>" . $user_krs['kode'] . "</td>";
                        echo "<td>" . $user_krs['nama'] . "</td>";
                        echo "<td>" . $user_krs['sks'] . "</td>";
                        echo "<td>" . $user_krs['sem'] . "</td>";
                        echo "<td>" . $user_krs['nilai'] . "</td>";
                        ?>

                            <td><a class='btn btn-primary' onclick="newDoc('<?php echo $user_krs['id']; ?>', '<?php echo $user_krs['nama']; ?>')" >Delete</a></td></tr>
                         <?php
                    }
                }else{
                    echo "<tr><td colspan='6' align='center'> Data Tidak Ditemukan!!! </td></tr>";
                }
                ?>
        </table>
        <?php
            echo "<a href='../action/tambahkrs.php?id=$id' class='btn btn-primary me-2'>Tambah KRS</a><a href='../action/cetak.php?id=$id' class='btn btn-primary'> Cetak KRS</a>";
        ?>
        <script>
        function newDoc(a, nama){
            if(confirm("Apakah anda ingin menghapus " + nama + "?")){
                window.location.href="../action/deletekrs.php?id=" + a ; 
            }
                 
        }

    </script>
</body>

</html>