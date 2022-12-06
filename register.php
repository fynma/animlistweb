<?php
require_once 'function.php';
session_start();
if (isset($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}

$alert = '';

// kalo button submit diklik
if (isset($_POST['submit'])) {
    if ($_POST['password'] != $_POST['confirm']) {
        $alert = "Password confirm doesn't match!";
    } else {
        $result = register($_POST);
        if ($result) {
            echo "<script>
                alert('Registration Success!');
                document.location.href = 'login.php';
            </script>";
        } else {
            echo "<script>
                alert('Registration Failed!');
                document.location.href = login.php;
            </script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
    <link rel="stylesheet" href="cssregister/style.css">
</head>
<body>
    <form action="" method="post" entype="multipart/form-data">
    <div class="ini-kotak">
        <h2>Silahkan Daftar</h2>
        <div class="username">
            <label for="name" class="labelname">Username</label>
            <input type="text" name="username" id="username" placeholder="username" class="box" required>
        </div>
        <div class="username">
            <label for="name" class="labelpassword">Password</label>
            <input type="password" name="password" id="password" placeholder="password" class="box" required>
        </div>
        <div class="username">
            <label for="name" class="labelpassword2">Konfirmasi Password</label>
            <input type="password" name="confirm" id="confirm" placeholder="konfirmasi password" class="box" required>
        </div>
            <input type="submit" name="submit" value="Daftar" class="daftar">
        <p> Sudah Mempunyai akun? <a href="login.php">Login disini</a></p>
    </div>
    </form>
</body>
</html>