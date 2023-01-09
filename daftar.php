<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="email" name="input_email" id="input_email" placeholder="Email...">
        <input type="text" name="input_name" id="input_name" placeholder="Nama...">
        <input type="password" name="input_pass" id="input_pass" placeholder="Password...">
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Jenis Kelamin</a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><input class="dropdown-item" type="radio" name="input_jenis" value="L"><label for="L">Laki-laki </label></li>
                <li><input class="dropdown-item" type="radio" name="input_jenis" value="P"><label for="P">Perempuan </label></li>
            </ul>
        </div>
        <input type="text" name="input_alamat" id="input_alamat" placeholder="Alamat...">


    </form>
</body>
</html>