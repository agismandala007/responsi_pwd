<?php
    include_once("../koneksi.php");
    session_start();
    $id = $_SESSION['id'];
    
    if (isset($_POST['submit'])){
        if(!empty($_POST['matkul'])){
            
            $matkul = $_POST['matkul'];
            $nilai = "-";

            foreach($matkul as $mk){
                $insert = mysqli_query($conn, "INSERT INTO khs (id_mhs, id_matkul, nilai) VALUES ('$id', '$mk', '$nilai')");
            }
            ?>
            <script>
                alert("Data berhasil disimpan");
                window.location.href="../home/homeuser.php?id=" + <?php echo $id; ?>; 
            </script>

            <?php
            
        }
    }else{
        // $khs = mysqli_query($conn, "SELECT * FROM mata_kuliah");
        // $khs = mysqli_query($conn, "SELECT mata_kuliah.id, mata_kuliah.nama, mata_kuliah.sem, mata_kuliah.sks, khs.id_matkul, khs.id_mhs FROM khs LEFT JOIN mata_kuliah ON mata_kuliah.id = khs.id_matkul WHERE khs.id_mhs = $id ");
            $khs = mysqli_query($conn, "SELECT * FROM mata_kuliah WHERE id NOT IN (SELECT id_matkul FROM khs WHERE id_mhs = $id)");
    }



?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <title>Tambah data mahasiswa</title>
</head>

<body>
<header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">''
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
    <form action="<?php echo 'tambahkrs.php?id=' . $_SESSION['id'] ?>" method="POST">
        <table class="table table-bordered w-75 m-auto">
            <tr>
                <th></th>
                <th>Mata Kuliah</th>
                <th>Semester</th>
                <th>SKS</th>
            </tr>
        

        <?php
            while($matkul = mysqli_fetch_array($khs)){
                ?>
                <tr>
                    <td>
                        <input type="checkbox" name="matkul[]" value="<?php echo $matkul['id']; ?>">
                    </td>
                    <td>
                        <?php echo $matkul['nama']; ?>
                    </td>
                    <td>
                        <?php echo $matkul['sem']; ?>
                    </td>
                    <td>
                        <?php echo $matkul['sks']; ?>
                    </td>
                </tr>
                
                <?php
            }
        ?>
        <tr>
            <td colspan=4 style="text-align: right;"><input type="submit" name="submit" value="Tambah" class="btn btn-primary"></td>
        </tr>
        </table>
    </form>
</body>

</html>