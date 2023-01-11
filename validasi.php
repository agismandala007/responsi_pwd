<?php
    include_once("koneksi.php");
    session_start();

    $nim = $_POST['nim'];
    $pass = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim=$nim");
    
    if(mysqli_num_rows($result) > 0){
        $user_data = mysqli_fetch_array($result);
        if($user_data['pass'] == $pass){
            $_SESSION['id'] = $user_data['id'];
            if($user_data['level_akun'] == "Admin"){
                header("Location: home/homeadmin.php");
            }elseif($user_data['level_akun'] == "Mahasiswa"){
                header("Location: home/homeuser.php");
            }
            
        }else{
            header("Location: index.html");
        }
    }else{
        header("Location: index.html");
    }

?>