   <?php
require_once 'function.php'; 
session_start();
$userName = $_SESSION['username'];
//$data = getUserData(null, $_SESSION['id_user']);
//if(isset($_POST['submit'])){
 //   $result = updateUser($_SESSION['id_user'], $_POST['fullname']);
 //   header("Refresh:0");
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Profile user</title>
    <link rel="stylesheet" href="cssprofile/style.css">
</head>
<body>
    <nav>
        <a href="index.php">
            <div class=logo>
                <img src="image/logo.png" style="width:175px; height:auto">
        </div>
        </a>
    <form action="profile.php">
    <div class="profile">
            <img src="image/profile.jpg" alt="">
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
        <img src="image/profile.jpg" >
    </div>

    <div class="data-akun">
   <form action="" method="post">
    <div class="username"><p>Username : <?= $userName?></p></div>
    </form>
        <a href="logout.php"><button>Logout</button></a>
    </div>
    </div>

    <div class="container-pin">
        <p>Anime yang anda pin :</p>
        <main class="sejajar">
            <a href="">
                <article>
                    <img src="image/cote.jpg" alt="">
                    <div class="konten">
                        <h6>Jujutsu Kaisen</h6>
                    </div>
                </article>
            </a>

            <a href="">
                <article>
                    <img src="image/hunter.jfif" alt="">
                    <div class="konten">
                        <h6>Jujutsu Kaisen</h6>
                    </div>
                </article>
            </a>

            <a href="">
                <article>
                    <img src="image/kny.jpg" alt="">
                    <div class="konten">
                        <h6>Jujutsu Kaisen</h6>
                    </div>
                </article>
            </a>

            <a href="">
                <article>
                    <img src="image/opm.jpg" alt="">
                    <div class="konten">
                        <h6>Jujutsu Kaisen</h6>
                    </div>
                </article>
            </a>

            <a href="">
                <article>
                    <img src="image/spy.jpg" alt="">
                    <div class="konten">
                        <h6>Jujutsu Kaisen</h6>
                    </div>
                </article>
            </a>

            <a href="">
                <article>
                    <img src="image/onepiece.jpg" alt="">
                    <div class="konten">
                        <h6>Jujutsu Kaisen</h6>
                    </div>
                </article>
            </a>
        </main>

        <a href="fav.php">
        <div class="next-page">
            <h5>
                <br>
                tampilkan <br>
                lebih <br>
                banyak <br>
                <i class="fa fa-arrow-right"></i>
            </h5>
        </div>
        </a>
    </div>
</body>
</html>