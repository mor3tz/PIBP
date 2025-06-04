<?php
session_start();
include 'koneksiuser.php';


$login = $_POST['login'];
$password = $_POST['password'];

// Query: cari user berdasarkan username ATAU email
$sql = "SELECT * FROM pengguna WHERE (username = '$login' OR email = '$login')";
$result = mysqli_query($koneksiUser, $sql);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);

    // Verifikasi password secara langsung TANPA hash
    if ($password === $user['password']) {
        $_SESSION['id_pengguna'] = $user['id_pengguna'];
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['konfirmasi'] = $user['konfirmasi_password'];
        $_SESSION['jenjang'] = $user['jenjang_kuliah'];

        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Password salah❌.'); window.location.href = 'pages/login-user.php';</script>";
    }
} else {
    echo "<script>alert('Username atau Email tidak ditemukan❌.'); window.location.href = 'login-user.php';</script>";
}
?>
