<?php
    include_once("../koneksi.php");
    session_start();

    if(isset($_SESSION['id']) == ""){
        header("Location: index.php");
    }else{
        $sql = mysqli_query($conn, "SELECT * FROM mahasiswa");
    }

    if(isset($_GET['search'])){
        $nama = $_GET['search'];
        $sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nama LIKE '%$nama%'");                        
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

    <style>
        .contrainer{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <script>
        function newDoc(a){}
    </script>
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
        <form class="d-flex" role="search" action="homeadmin.php" method="GET">
            <input class="form-control me-2" type="search" name="search" placeholder="Pencarian berdasarkan Nama" aria-label="Search">
            <button class="btn btn-outline-dark me-2" type="submit">Search</button>
            <a href="../action/logout.php" class="btn btn-primary">Logout</a>
        </form>
        </div>
    </div>
    </nav>
    <div class="container">
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
                    if(mysqli_num_rows($sql) > 0){
                        while($user_krs = mysqli_fetch_array($sql)){
                            echo "<tr><td>" . $user_krs['nim'] . "</td>";
                            echo "<td>" . $user_krs['nama'] . "</td>";
                            echo "<td>" . $user_krs['jenis_kelamin'] . "</td>";
                            echo "<td>" . $user_krs['alamat'] . "</td>";
                            echo "<td>" . $user_krs['tgl_lahir'] . "</td>";
                            ?>

                            <td><a class='btn btn-primary' href="<?php echo '../action/edit.php?id='. $user_krs['id']; ?>">Edit </a> | <a class='btn btn-primary' onclick="newDoc('<?php echo $user_krs['id']; ?>')" >Delete</a></td></tr>
                            <?php
                        }
                    }else{
                        echo "<tr><td colspan='6' align='center'> Data Tidak Ditemukan!!! </td></tr>";
                    }

                ?>
            <tr>
                <td colspan="6"><a class="btn btn-primary" href="../action/tambahuser.php">Tambah Akun</a></td>
            </tr>
        </table>
    </div>
    <script>
        function newDoc(a){
            alert("Apakah anda ingin menghapus barang?");
            window.location.href="../action/delete.php?id=" + a ;  
        }

    </script>
</body>


</html>