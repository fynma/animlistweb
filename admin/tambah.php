<?php
//require_once '../function.php';
include '../koneksi.php';
session_start();
$userName = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="property/tambah.css">
    <title>Admin</title>
</head>
<body>
<nav>
        <div class="username">
            <div class="admin">Admin :</div>
            <div class="nickname"> <?= $userName?></div>
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
    <h1>Upload Anime Baru</h1>
        <form method="post" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>gambar</td>
                <td>:</td>
                <td><input type="file" name="foto_anime" id="foto_anime"></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td>:</td>
                <td><input type="text" name="nama_anime_ind"></td>
            </tr>
            <tr>
                <td></td>
                <td>:</td>
                <td><input type="text" name="nama_anime_jp"></td>
            </tr>
            <tr>
                <td>Peringkat</td>
                <td>:</td>
                <td><input type="text" name="peringkat"></td>
            </tr>
            <tr>
                <td>Rating</td>
                <td>:</td>
                <td><input type="text" name="rating"></td>
            </tr>
            <tr>
                <td>Episode</td>
                <td>:</td>
                <td><input type="text" name="episode"></td>
            </tr>
            <tr>
                <td>Studio</td>
                <td>:</td>
                <td><input type="text" name="studio"></td>
            </tr>
            <tr>
                <td>Rilis</td>
                <td>:</td>
                <td><input type="text" name="rilis"></td>
            </tr>
            <tr>
                <td>Genre</td>
                <td>:</td>
                <td><input type="text" name="genre_anime"></td>
            </tr>
            <tr>
                <td>Link Menonton</td>
                <td>:</td>
                <td><input type="text" name="link_anime"></td>
            </tr>
            <tr>
                <td>sinopsis</td>
                <td>:</td>
                <td><input type="textarea" name="sinopsis"></td>
            </tr>
        </table>
        <input type="submit" value="tambahkan" name="submit">
        </form>
        
        <?php
            // $nama_anime_ind = $_POST['nama_anime_ind'];
            // $nama_anime_jp  = $_POST['nama_anime_jp'];
            // $peringkat      = $_POST['peringkat'];
            // $rating         = $_POST['rating'];
            // $episode        = $_POST['episode'];
            // $studio         = $_POST['studio'];
            // $rilis          = $_POST['rilis'];
            // $genre          = $_POST['genre_anime'];
            // $link_anime     = $_POST['link_anime'];
            // $sinopsis       = $_POST['sinopsis'];

            if (isset($_POST['submit']))
            {
                $nama_anime_ind = $_POST['nama_anime_ind'];
                $nama_anime_jp  = $_POST['nama_anime_jp'];
                $peringkat      = $_POST['peringkat'];
                $rating         = $_POST['rating'];
                $episode        = $_POST['episode'];
                $studio         = $_POST['studio'];
                $rilis          = $_POST['rilis'];
                $genre          = $_POST['genre_anime'];
                $link_anime     = $_POST['link_anime'];
                $sinopsis       = $_POST['sinopsis'];

                if (!empty($_FILES["foto_anime"])) {
                $direktori = "img/";
                // $foto = $_FILES['foto_anime']['name'];
                $lokasi = $_FILES["foto_anime"]["tmp_name"];
                //mengambil tipe file misal .jpg dkk
                $name = pathinfo($_FILES["foto_anime"]["name"], PATHINFO_EXTENSION);
                //nama gambar akan disimpan sebagai kopiku.jpg atau sesuai tipe file dan nama kafe yang diinputkan
                $nama_baru = $_POST['nama_anime_ind'].".".$name;
                move_uploaded_file($lokasi, $direktori.$nama_baru);
                $foto_anime = $nama_baru;
                }
                //ketika tidak ada gambar yang diupload
                else {
                    //nama gambar akan diisi dengan - yang mana nantinya gambar akan ditampilkan default gambar.
                    $foto_anime = '-';
                }

                // $foto_anime     = $_POST['foto_anime'];
 
                // $query = "insert into tbl_anim VALUES ('','$foto_anime','$nama_anime_ind','$nama_anime_jp','$peringkat','$rating ','$episode','$studio',' $rilis','$genre','$link_anime',' $sinopsis')";
                // $save = mysqli_query ($koneksi_db, $query);
                $save = mysqli_query($koneksi_db, "INSERT INTO tbl_anim VALUES ('', '$foto_anime', '$nama_anime_ind', '$nama_anime_jp','$peringkat','$rating','$episode','$studio','$rilis','$genre','-','$link_anime','$sinopsis')");

                //INSERT INTO `tbl_anim`(`id_anim`, `nama_anime_ind`, `nama_anime_jp`, `foto_anime`, `peringkat`, `rating`, `episode`, `studio`, `rilis`, `genre_anime`, `penilaian`, `link_anim`) 
                //VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]')

                if ($save) {
                    if (empty($foto_anime) or ($foto_anime == '-')) {
                        //gambar yang akan ditampilkan adalah gambar default
                        $gambar = "noimage.jpg";
                    } else {
                        //gambar ditampilkan sesuai gambar yang diinputkan
                        $gambar = $foto_anime;
                    }
                    
                    //echo "<img src='img/$gambar' width=70px height=90px>";
                    //echo $nama_anime_ind;
                    //echo $nama_anime_jp;
                    echo "<div class='alert alert-info'>Data Tersimpan</div>";
                }
            }
        ?> 
    </div>
    </div>
    </div>
</body>
</html>