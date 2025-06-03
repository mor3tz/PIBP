<?php 
$servername =  "localhost";
$username = "root";
$password = "";
$database = "db_portal_informasi";

// Create connection
$adminkoneksi = mysqli_connect($servername, $username, $password, $database);

if (!$adminkoneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

?>