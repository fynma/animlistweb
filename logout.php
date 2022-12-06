<?php
session_start();

unset ($_SESSION['login']);
unset ($_SESSION['level']);
header('Location: login.php');
session_destroy();

// echo "anda telah logout <br>";
// echo "<a href='login.php'> Kembali login</a><br>";
?>