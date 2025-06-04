<?php
session_start();
include 'koneksiuser.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$konfirmasi = $_POST['konfirmasi'];
$jenjang = $_POST['jenjang'];

// Cek apakah password dan konfirmasi password cocok
if ($password !== $konfirmasi) {
    echo "<script>alert('Password dan Konfirmasi Password tidak cocok❌.'); window.location.href = 'login.php';</script>";
    exit();
}

// Cek apakah username atau email sudah terdaftar
$cek = mysqli_query($koneksiUser, "SELECT * FROM pengguna where username = '$username' OR email = '$email'");

if (mysqli_num_rows($cek) > 0) {
    echo "<script>alert('Username atau Email sudah terdaftar❌.'); window.location.href = 'login.php';</script>";
    exit();
}

// simpan ke database
$query = "INSERT INTO pengguna (nama,username,email,password,konfirmasi_password,jenjang_kuliah)
values ('$nama','$username','$email','$password','$konfirmasi','$jenjang')";

if (mysqli_query($koneksiUser, $query)) {
    echo "<script>alert('Registrasi berhasil✅. Silakan login kembali.'); window.location.href = 'pages/login-user.php';</script>";
} else {
    echo "<script>alert('Registrasi gagal❌. Silakan coba lagi.'); window.location.href = 'pages/login-user.php';</script>";
}
