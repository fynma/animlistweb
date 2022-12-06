<?php
include "../koneksi.php";
$id = $_GET['id'];
$query = "DELETE FROM `tbl_user` WHERE id_user= '$id'";
$hasil = mysqli_query($koneksi_db, $query);
if ($hasil){
    ?>
    <script language="javascript">document.location.href="user.php";</script>
    <?php
} else {
    echo "gagal hapus data ";
}
?>