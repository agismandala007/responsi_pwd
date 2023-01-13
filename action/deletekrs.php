<?php
    include_once("../koneksi.php");
    session_start();

    $id = $_GET['id'];
    $sql = mysqli_query($conn, "DELETE FROM khs WHERE id = $id");
    
    header("Location: ../home/homeuser.php");

?>