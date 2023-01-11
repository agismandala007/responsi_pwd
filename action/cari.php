<?php
    include_once("koneksi.php");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian</title>
</head>
<body>
    <table>

    <?php
        if(isset($_GET['cari'])){
            $find = $_GET['cari'];
            $sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nama LIKE '%$find%'");
            ?>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Action</th>
            </tr>
            
                <?php
                while ($user_data = mysqli_fetch_array($sql)){
                    echo "<tr><td>" . $user_data['nim'] . "</td>";
                    echo "<td>" . $user_data['nama'] . "</td>";
                    echo "<td>" . $user_data['jenis_kelamin'] . "</td>";
                    echo "<td>" . $user_data['alamat'] . "</td>";
                    echo "<td>" . $user_data['tgl_lahir'] . "</td>";
                    echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>"
                }
                ?>
        <?php
        }else{
            echo "<h2>Data tidak ditemukan</h2>";
        }
    ?>

    </table>
</body>
</html>