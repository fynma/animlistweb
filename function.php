<?php
include 'koneksi.php';



function register($data)
{
    global $koneksi_db;

    $username = $data['username'];
    $password = $data['password'];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO tbl_user (username, password , level) VALUES (
        '$username', '$passwordHash' , 'user') ";

    return mysqli_query($koneksi_db, $query);
}

function login($data)
{
    global $koneksi_db;

    $username = $data['username'];
    $password = $data['password'];

    $querySelect = "SELECT * FROM tbl_user WHERE username = '$username'";

    $rawSelectResult = mysqli_query($koneksi_db, $querySelect);
    $selectResult = mysqli_fetch_assoc($rawSelectResult);
    if (is_null($selectResult)) {
        return null;
    }

    $passwordHash = $selectResult['password'];

    if (password_verify($password, $passwordHash)) {
        return true;
    } else {
        return false;
    }
}

function getUserData($username)
{
    global $koneksi_db;

    $query = "SELECT username, level FROM tbl_user WHERE username = '$username'";
    $rawResult = mysqli_query($koneksi_db, $query);
    $result = mysqli_fetch_assoc($rawResult);
    return $result;
}


function tambah($anime)
{
    global $koneksi_db;
    if (isset($_POST['submit'])){
    $foto_anime     = $anime['foto_anime'];
    $nama_anime_ind = $anime['nama_anime_ind'];
    $nama_anime_jp  = $anime['nama_anime_jp'];
    $peringkat      = $anime['peringkat'];
    $rating         = $anime['rating'];
    $episode        = $anime['episode'];
    $studio         = $anime['studio'];
    $rilis          = $anime['rilis'];
    $genre          = $anime['genre_anime'];
    $link_anime     = $anime['link_anime'];
    $sinopsis       = $anime['sinopsis'];

    $query = "INSERT INTO tbl_anim (`id_anim`, `nama_anime_ind`, `nama_anime_jp`, `foto_anime`, `peringkat`, `rating`, `episode`, `studio`, `rilis`, `genre_anime`, `penilaian`, `link_anim`,`sinopsis`) VALUES ('','$nama_anime_ind','$nama_anime_jp','$foto_anime','$peringkat','$rating ','$episode','$studio ',' $rilis','$genre','$link_anime',' $sinopsis')";

    return mysqli_query ($koneksi_db, $query);
    } else {
        echo "gagal ygy";
    }
}