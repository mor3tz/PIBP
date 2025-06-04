<?php 

include "../koneksiuser.php";

$kategori = $_POST['kategori'];
$popular = $_POST['popular'];
$link_beasiswa = $_POST['link_beasiswa'];
$tanggal_mulai = $_POST['tanggal_mulai'];
$tanggal_berakhir = $_POST['tanggal_berakhir'];
$nama_beasiswa = $_POST['nama_beasiswa'];
$deskripsi = $_POST['deskripsi'];
$persyaratan = $_POST['persyaratan'];



// Proses upload gambar
$target_dir = "C:/xampp/htdocs/PIBP/img";

$target_file = $target_dir . basename($_FILES["image"]["name"]);

$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


if (move_uploaded_file($_FILES["image"]["tmp_name"],
$target_file)) {
    $filefoto = basename($_FILES["image"]["name"]);

    $sql = "INSERT INTO beasiswa (populer,nama_beasiswa,kategori,image,deskripsi,persyaratan,link_beasiswa,tanggal_mulai,tanggal_berakhir) 
    VALUES ('$popular', '$nama_beasiswa', '$kategori', '$filefoto', '$deskripsi', '$persyaratan', '$link_beasiswa', '$tanggal_mulai', '$tanggal_berakhir')";

    if (mysqli_query($koneksiUser, $sql)) {
    echo "<script>
        alert('Data berhasil tersimpan ✅.');
        window.location.href = '../index.php?p=daftar-beasiswa';
    </script>";
} else {
    echo "<script>
        alert('Data gagal tersimpan. Silakan cek ulang.');
        window.location.href = '../index.php?p=daftar-beasiswa';
    </script>";
}

} 
?>