<?php
    include_once("koneksi.php");
    session_start();

    $nim = $_POST['nim'];
    $pass = $_POST['password'];

    if($_POST['captha_code'] == $_SESSION['captcha_code']){
        $result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim=$nim");
    }else{
        ?>
        <script>
            alert("Captha Salah!!!");
            window.location.href="index.php";
        </script>
        <?php
        echo "<h2>Captha salah !!</h2>";
        echo "<a href='index.php'>Login</a>";
    }
    
    
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
            echo "<h2>Password yang anda masukan salh</h2>";
            echo "<a href='index.php'>Login</a>";
        }
    }else{
        echo "<h2>Nim tidak ditemukan!!</h2>";
        echo "<a href='index.php'>Login</a>";
    }

?>