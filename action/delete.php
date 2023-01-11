<?php
    include_once("../koneksi.php");
    session_start();

    $id = $_GET['id'];
    $sql = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    // header("Location: ../home/homeadmin.php");

?>