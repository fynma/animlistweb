
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Profile user</title>
    <link rel="stylesheet" href="../cssprofile/style.css">
</head>
<body>
    <nav>
        <a href="index.php">
            <div class=logo>
                <img src="../image/logo.png" style="width:175px; height:auto">
        </div>
        </a>
    <form action="profile.php">
    <div class="profile">
            <img src="../image/guest.png" alt="">
        </div>
    </form>
       <ul>
        <div class="item">
            <li ><a href="index.php">Home</a></li>
            <li ><a href="genre.php">Genre</a></li>
            <li ><a href="profile.php">Profile</a></li>
        </div>
       </ul>
       <div class="search">
        <form action="">
            <input type="text" placeholder="Cari Anime">
        </form>
        </div>
    </nav>


    <div>
    <div class="pp">
        <img src="../image/guest.png" >
    </div>

    <div class="data-akun">
        <div class="username"><p>Anda belum Login</p></div>
        <a href="../login.php"><button>Login</button></a>
    </div>
    </div>

    <div class="container-pin">
        <div>
        <p>Anime yang anda pin :</p>
        </div>
        <div class="login" style="margin-top: 70px; margin-left:400px; color:blue;">
        <p><a href="../login.php"> Login Untuk melanjutkan tindakan</a></p>
        </div>
    </div>
</body>
</html>