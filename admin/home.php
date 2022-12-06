<?php
session_start();
$userName = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="property/home.css">
    <title>Admin</title>
</head>
<body>
<nav>
        <div class="username">
            <div class="admin">Admin :</div>
            <div class="nickname" style="margin-left:10px"> <?= $userName?></div>
        </div>
        <div class="logout">
            <a href="../logout.php">Logout</a>
        </div>
    </nav>
    <div class="background">
    <div class="bar-left">
        <img src="property/logo.png" alt="">
        <ul style="margin-top:5px">
            <div class="item">
                <li><a href="home.php">Tentang anime</a></li>
                <li><a href="tambah.php">Tambah anime</a></li>
                <li><a href="user.php">Tentang user</a></li>
                <li><a href="komentar.php">Komentar User</a></li>
            </div>
        </ul>
    </div>
    <!-- kotak isiii -->
    <div class="kotak">
        <div class="gambar">
        </div>
        <div class="isi">
            <h1>Info Anime</h1>
            <form  method="get" action="">
                <label for="cari">Cari Anime</label>
                <input type="text" name="cari">
                <?php
                if(isset($_GET['cari'])){
                    $query = mysqli_query ($koneksi_db, "SELECT * FROM tbl_anim WHERE nama_anime_ind
                    LIKE '%".$_GET['cari']."%'");
                }
                ?>
            </form>

            <table >
                <tr>
                    <td>Gambar </td>
                    <td>:</td>
                    <td> 
                       <img src="../image/jjk.jpg" alt="" style="width:80px; height:Auto;">
                     </td>
                </tr>
                <tr >
                    <td>Judul</td>
                    <td> : </td>
                    <td>
                        Jujutsu kaisen
                        </td>
                </tr>
                <tr>
                    <td>    </td>
                    <td>:</td>
                    <td>
                    呪術廻戦 
                        </td>
                </tr>
                <tr >
                    <td>Peringkat</td>
                    <td>:</td>
                    <td >
                   30 
                    </td>
                </tr>
                <tr>
                    <td>Rating</td>
                    <td>:</td>
                    <td >
                    8.13 
                    </td>
                </tr>
                <tr>
                    <td>Episode</td>
                    <td>:</td>
                    <td >
                    11 Episode
                    </td>
                </tr>
                <tr>
                    <td>Studio</td>
                    <td>:</td>
                    <td 
                    >Mappa</td>
                </tr>
                <tr>
                    <td>Rilis</td>
                    <td>:</td>
                    <td> 
                    2020 
                    </td>
                </tr>
                <tr>
                    <td>Genre</td>
                    <td>:</td>
                    <td >
                    Action, Adventure
                    </td>
                </tr>
                <tr>
                    <td>Link menonton</td>
                    <td>:</td>
                    <td><a href="">Klik disini</a></td>
                </tr>
                <tr>
                    <td> Sinopsis</td>
                    <td>: </td>
                    <td>ISi sinopsis </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>