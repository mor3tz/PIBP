<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_portal_informasi";

// Create connection
$koneksiUser = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$koneksiUser) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

