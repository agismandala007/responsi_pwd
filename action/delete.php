<?php
    include_once("../koneksi.php");
    session_start();

    $id = $_GET['id'];
    $fk1 = mysqli_query($conn, "ALTER TABLE khs ADD FOREIGN KEY (id_mhs) REFERENCES mahasiswa(id) ON DELETE CASCADE");
    $fk2 = mysqli_query($conn, "ALTER TABLE khs ADD FOREIGN KEY (id_matkul) REFERENCES mata_kuliah(id) ON DELETE CASCADE");
    $sql = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    header("Location: ../home/homeadmin.php");

?>