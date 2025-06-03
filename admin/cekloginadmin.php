<?php 

$user = $_POST['username'];
$pass = $_POST['password'];

include 'adminkoneksi.php';

$sql = "SELECT * FROM admin WHERE username='$user' AND password='$pass'";

$result = mysqli_query($adminkoneksi, $sql);
if (mysqli_num_rows($result) > 0) {
    // User found, set session variables
    session_start();
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
 
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
} else {
    echo "<meta http-equiv='refresh' content='0; url=login-admin.php'>";
    echo "<script>alert('Login Gagal');</script>";
}

?>