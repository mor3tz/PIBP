<?php
session_start();

include 'adminkoneksi.php';
$adminkoneksi -> close();
session_unset();
session_destroy();
header("Location: ../index.php");
exit();
?>