<?php
    include_once("../koneksi.php");
    session_start();

    $id = $_GET['id'];
    if (isset($_POST['update'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $pass = $_POST['pass'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $level = $_POST['level_akun'];

        $result = mysqli_query($conn, "UPDATE mahasiswa SET nim='$nim', nama='$nama', pass='$pass',jenis_kelamin='$jenis_kelamin',alamat='$alamat',tgl_lahir='$tgl_lahir', level_akun='$level' WHERE id='$id'");
        ?>
        <script>
            alert("Data berhasil diupdate");
            window.location.href="../home/homeadmin.php";  
        </script>

        <?php
    }


    $result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id='$id'");
    while ($user_data = mysqli_fetch_array($result)) {
        $nim = $user_data['nim'];
        $nama = $user_data['nama'];
        $pass = $user_data['pass'];
        $jenis_kelamin = $user_data['jenis_kelamin'];
        $alamat = $user_data['alamat'];
        $tgl_lahir = $user_data['tgl_lahir'];
        $level = $user_data['level_akun'];
    }
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Edit Data Mahasiswa</title>
    <style>
        th, td{
            padding: 5px;
        }
    </style>
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

    <main class="form-signin w-50 m-auto align-items-start ">
    <h2>Edit Data Mahasiswa</h2>
    <form action="<?php echo 'edit.php?id=' . $id ?>" method="POST" >
        <table table="table table-bordered">
            <tr>
                <td>NIM</td>
                <td><input type="number" name="nim" value="<?php echo $nim; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" value="<?php echo $pass; ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin (L/P)</td>
                <td><input type="text" name="jenis_kelamin" maxlength="1" value="<?php echo $jenis_kelamin; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>"></td>
            </tr>
            <tr>
                <td>Level Akun</td>
                <td><input type="text" name="level_akun" value="<?php echo $level; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
    </main>
    
</body>

</html>