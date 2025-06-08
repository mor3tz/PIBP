<?php
session_start();

include_once __DIR__ . '/../koneksiuser.php';

if (!isset($_SESSION['id_pengguna'])) {
    die("Harap login terlebih dahulu.");
}

if (!isset($_GET['id_beasiswa'])) {
    die("ID beasiswa tidak dikirim.");
}

$id_beasiswa = $_GET['id_beasiswa'];
$id_user = $_SESSION['id_pengguna'];

// Cek apakah beasiswa sudah difavoritkan
$cek = mysqli_query($koneksiUser, "SELECT * FROM favorite WHERE id_pengguna='$id_user' AND id_beasiswa='$id_beasiswa'");

if (mysqli_num_rows($cek) > 0) {
    echo "Sudah difavoritkan.";
} else {
    // Simpan ke tabel favorit
    $simpan = mysqli_query($koneksiUser, "INSERT INTO favorite (id_pengguna, id_beasiswa) VALUES ('$id_user', '$id_beasiswa')");
    echo $simpan ? "Berhasil ditambahkan ke favorit." : "Gagal menyimpan.";
}
?>
