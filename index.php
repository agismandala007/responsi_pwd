<?php
    include_once("koneksi.php");

    $nim = "";
    $pass = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nim = $_POST['nim'];
        $pass = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim=$nim");
        
        //echo mysqli_num_rows($result);
        if(mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_array($result);
            if($user_data['pass'] == $pass){
                echo "<h2>behasil</h2>";
                header("Location: home.php?nim=$nim");
                exit();
            }else{
                echo "<h3>Password yang anda masukan salah!!</h3>";
            }
        }else{
            echo "<h3>Nim yang anda masukan salah!!</h3>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UAS</title>
</head>
<body>
    <a href="daftar.php">Daftar</a>
    <div>
        <h2>Login</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="number" name="nim" id="nim" placeholder="Nim..."><br>
            <input type="password" name="password" id="password" placeholder="Password..."><br>
            <!-- <img src="captcha.php"><br>
            <input type="text" name="captha_code" id="captha_code" placeholder="Captcha..."><br> -->
            <input type="submit" value="Login"><br>
        </form>
    </div>

</body>
</html>