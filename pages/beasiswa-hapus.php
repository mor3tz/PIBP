<?php
include "admin/adminkoneksi.php"; // relatif terhadap folder 'pages'

if (isset($_GET['id_beasiswa'])) {
    $id_beasiswa = $_GET['id_beasiswa'];
    $query = "UPDATE beasiswa SET aktif = 0 WHERE id_beasiswa = '$id_beasiswa'";
    
    if (mysqli_query($adminkoneksi, $query)) {
        echo "<script>alert('Beasiswa berhasil dihapus.'); window.location.href = 'index.php?p=daftar-beasiswa';</script>";
    } else {
        echo "<script>alert('Gagal menghapus beasiswa: " . mysqli_error($adminkoneksi) . "'); window.location.href = 'index.php?p=daftar-beasiswa';</script>";
    }
} else {
    echo "<script>alert('ID beasiswa tidak ditemukan'); window.location.href = 'index.php?p=daftar-beasiswa';</script>";
}
