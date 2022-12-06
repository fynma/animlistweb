<?php
session_start();
$userName = $_SESSION['username'];
include "../koneksi.php";
$query = "SELECT *FROM tbl_user";
$hasil = mysqli_query($koneksi_db, $query);
$no = 1;
$jum = mysqli_num_rows($hasil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="property/user.css">
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
        <table style="margin : 10px;">
                <tr  >
                    <th style="margin-left: 50px;">
                      no_id
                    </th>
                    <th style="margin-left : 50px;">
                        username
                    </th>
                    <th style="margin-left : 50px;">
                        level
                    </th>
                    <th style="margin-left : 50px;">
                        hapus
                    </th>
                </tr>
                <?php
                while ($data = mysqli_fetch_array($hasil)) {
                ?>
                <tr style="margin : 30px;">
                    <td><?= $data ['id_user']; ?></td>
                    <td><?= $data ['username']; ?></td>
                    <td><?= $data ['level']; ?></td>
                    <td><a href="delete.php?id=<?php echo $data['id_user']; ?> "onclick="return confirm('apakah anda yakin?')">Delete</a></td>
                </tr>
               <?php }?>
                </table>
    </div>
    </div>
</body>
</html>