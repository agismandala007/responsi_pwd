<?php
    include_once("koneksi.php");


    if (isset($_POST['submit'])) {
        $nim = $_POST['nim_daftar'];
        $nama = $_POST['nama'];
        $pass = $_POST['pass_daftar'];
        $jenis_kelamin = $_POST['gender'];
        $alamat = $_POST['alamat'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $level = "Mahasiswa";
    
        $result = mysqli_query($conn, "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, alamat, tgl_lahir, pass, level_akun) VALUES ('$nim', '$nama', '$jenis_kelamin', '$alamat', '$tgl_lahir', '$pass', '$level')");
        ?>
        <script>
            alert("Data berhasil disimpan");
            window.location.href="index.php";  
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
    <title>Portal Akademik UAS</title>
    <style>
        .table{
            width: 200px;
        }
        .contrainer{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <link href="carousel.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Universitas Alim Sukses</a>
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
                <button type="button" class="btn btn-outline-success me-2" data-bs-toggle="modal" data-bs-target="#daftar">Daftar</button>
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#login">Login</button>
            </div>
          </div>
        </nav>
    </header>
      

        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/carousel-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Kampus Nomor 1</h5>
                  <p>Dengan dukungan yang memadai dan biaya yang murah.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/carousel-2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Kampus akan Prestasi</h5>
                  <p>Berisi dengan orang-orang genius yang siap menyabet semua gelar yang ada.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/carousel-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Suasana Kampus yang liar</h5>
                  <p>Dengan sedikitnya aturan, membuat para mahasiswa lebih nyaman berada di kampus.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="img/carousel-1.jpg" alt="pict-1" width="140" height="140" class="bd-placeholder-img rounded-circle">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->

        <h2 class="fw-normal">Kampus Nomor 1</h2>
        <p>Dengan dukungan yang memadai dan biaya yang murah.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="img/carousel-2.jpg" alt="pict-2" width="140" height="140" class="bd-placeholder-img rounded-circle">

        <h2 class="fw-normal">Kampus akan Prestasi</h2>
        <p>Berisi dengan orang-orang genius yang siap menyabet semua gelar yang ada.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="img/carousel-3.jpg" alt="pict-3" width="140" height="140" class="bd-placeholder-img rounded-circle">

        <h2 class="fw-normal">Suasana Kampus yang liar</h2>
        <p>Dengan sedikitnya aturan, membuat para mahasiswa lebih nyaman berada di kampus.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->



  <!-- FOOTER -->
  <footer class="container">
    <p>&copy; 2017-2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
          




           <!-- Daftar -->
        <div class="modal fade" id="daftar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h1 class="modal-title fs-5 text-bg-dark" id="staticBackdropLabel">Daftar</h1>
                    <button type="button" class="btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="index.php" method="POST">
                    <table>
                        <tr>
                            <td>
                                <label for="nim_daftar">NIM</label>
                            </td>
                            <td>
                                <input type="number" name="nim_daftar" id="nim_daftar" placeholder="Nim...">
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
                                <label for="pass_daftar">Password</label>
                            </td>
                            <td>
                                <input type="password" name="pass_daftar" id="pass_daftar" placeholder="Password...">
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
                    </table>
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" value="daftar" class="btn btn-primary">Daftar</button>
                    </form>
                </div>
                </div>
            </div>
        </div>



        <!-- Login -->
        <div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                <h1 class="modal-title fs-5 text-bg-dark" id="staticBackdropLabel1">Login</h1>
                <button type="button" class="btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="validasi.php" method="POST">
                    <div class="contrainer">
                        <table class="table">
                            <tr>
                                <td>NIM</td>
                                <td><input type="number" name="nim" id="nim" placeholder="Nim..."></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" id="password" placeholder="Password..."></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <img src="captcha.php" width="250">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="text" name="captha_code" id="captha_code" placeholder="Captcha...">  
                                </td>
                            </tr>
                        </table>
                    </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" value="Login" class="btn btn-primary">
                    </div>
                </form>
                </div>
            </div>
        </div>
</body>
</html>