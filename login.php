<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="csslogin/style.css">
</head>
<body>
    <div class="kotak">
        <nav>
            <img src="image/logo.png" alt="">
            <h2>L O G I N</h2>
        </nav>
            <form method="post">
                <div class="kotak-2">
                    <div class="inputan">
                        <label for="username">Username</label>
                        <input type="text" placeholder="Username" name="username" id="username" class="box-field" required>
                    </div>
                    <div class="inputan">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Password" name="password" id="password" class="box-field"required>
                    </div>
                    <input type="submit" name="submit" value="Login" class="login">
                    <h4>Anda Belum memiliki akun? daftar <a href="register.php">Disini</a></h4>
                    <h4>lewati sesi?? <a href="guest/index.php">masuk sebagai guest</a></h4>
                </div>
            </form>
    </div>
</body>
</html>

<?php 
require_once 'function.php'; 
session_start(); 
 
if (isset($_SESSION['login'])) { 
    header('Location: index.php'); 
    exit; 
} 
 
if (isset($_POST['submit'])) { 
    if (is_null(login($_POST))) { 
        echo "<script> 
            alert('Username not registered!'); 
        </script>"; 
    } else if (!login($_POST)) { 
        echo "<script> 
            alert('Wrong username/ password!'); 
        </script>"; 
    } else { 
        $_SESSION['login'] = true; 
        $userData = getUserData($_POST['username']); 
        $_SESSION['level'] = $userData['level']; 
        $_SESSION['username'] = $userData['username'];
        $_SESSION['login'] = true;
        header('Location: index.php'); 
        exit; 
    } 
} 
?>