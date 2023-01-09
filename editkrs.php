<?php
    include_once("koneksi.php");


    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $tgl_lahir = $_POST['tgl_lahir'];

        $result = mysqli_query($conn, "UPDATE mahasiswa SET nama='$nama',jenis_kelamin='$jenis_kelamin',alamat='$alamat',tgl_lahir='$tgl_lahir' WHERE id='$id'");

        header("Location: index.php");
    }
?>

<html>

<head>
    <title>Edit KRS</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br /><br />
    <form name="update_mahasiswa" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama; ?>></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="text" name="jenis_kelamin" maxlength="1" value=<?php echo $jenis_kelamin; ?>></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
            </tr>
            <tr>
                <td>Tgl Lahir</td>
                <td><input type="date" name="tgl_lahir" value=<?php echo $tgl_lahir; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $id ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>