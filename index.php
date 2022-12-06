
<?php 
 
 require_once 'function.php'; 
 session_start(); 
  error_reporting(0); 
 $userName = $_SESSION['username'];
 $userLevel = 'guest'; 
 if (isset($_SESSION['login'])) { 
     if ($_SESSION['level'] == 'admin') { 
         header('Location: http://localhost/aplikasiweb/admin/home.php'); 
     } else { 
         $userLevel = $_SESSION['level']; 
     } 
 } 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="cssindex/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
    <nav>
    <a href="index.php">
            <div class=logo>
                <img src="image/logo.png" style="width:175px; height:auto">
        </div>
        </a>
    <a href="profile.php">
    <div class="profile">
            <img src="image/profile.jpg" alt="">
        </div>
    </a>
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
    

    <!--batas ------------------------------------------------navbar-->
    


    <div class="container">
        <main class="grid">
            <a href="infoanim.php" style="color: #d9d9d9; text-decoration:none">
            <article>
                <img src="image/jjk.jpg" width="239px" height="320px">
                <div class="konten">
                    <h2>Jujutsu Kaisen<br></h2>
                    <h2>Complete</h2>
                </div>
            </article>
            </a>
            <article>
                <img src="image/hunter.jfif" width="239px" height="320px">
                <div class="konten">
                    <h2>Hunter x Hunter<br></h2>
                    <h2>Complete</h2>
                </div>
            </article>
            <article>
                <img src="image/onepiece.jpg" width="239px" height="320px">
                <div class="konten">
                    <h2>One Piece<br></h2>
                    <h2>On Going</h2>
                </div>
            </article>
            <article>
                <img src="image/kny.jpg" width="239px" height="320px">
                <div class="konten">
                    <h2>Kimetsu no yaiba<br></h2>
                    <h2>Complete</h2>
                </div>
            </article>
            <article>
                <img src="image/overlord.jpg" width="239px" height="320px">
                <div class="konten">
                    <h2>Overlord<br></h2>
                    <h2>Complete</h2>
                </div>
            </article>
            <article>
                <img src="image/spy.jpg" width="239px" height="320px">
                <div class="konten">
                    <h2>Spy X Family<br></h2>
                    <h2>Complete</h2>
                </div>
            </article>
            <article>
                <img src="image/cote.jpg" width="239px" height="320px">
                <div class="konten">
                    <h2>Classroom of the Elite<br></h2>
                    <h2>Complete</h2>
                </div>
            </article>
            <article>
                <img src="image/opm.jpg" width="239px" height="320px">
                <div class="konten">
                    <h2>One Punch Man<br></h2>
                    <h2>Complete</h2>
                </div>
            </article>
        </main>
    </div>
</body>
</html>