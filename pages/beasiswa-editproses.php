<?php

include "../admin/adminkoneksi.php";

// ambil data dari form
$id_beasiswa = $_POST['id_beasiswa'];
$kategori = $_POST['kategori'];
$populer = $_POST['popular'];
$nama_beasiswa = $_POST['nama_beasiswa'];
$link = $_POST['link_beasiswa'];
$tanggalMulai = $_POST['tanggal_mulai'];
$tanggalAkhir = $_POST['tanggal_berakhir'];
$deskripsi = $_POST['deskripsi'];
$persyaratan = $_POST['persyaratan'];
$imageLama = $_POST['image'] ?? '';  // nama gambar lama dari input hidden

// cek apakah ada file gambar baru yang diupload
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $imageBaru = basename($_FILES['image']['name']);
    $target_dir = "C:/xampp/htdocs/PIBP/img/"; // pastikan folder ini ada dan bisa ditulis

    // pindahkan file upload ke folder tujuan
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $imageBaru)) {
        // sukses upload, gunakan gambar baru
        $image = $imageBaru;
    } else {
        // gagal upload, fallback ke gambar lama
        $image = $imageLama;
    }
} else {
    // tidak ada gambar baru, gunakan gambar lama
    $image = $imageLama;
}

// query update
$query = "UPDATE beasiswa SET 
    kategori = '$kategori',
    populer = '$populer',
    nama_beasiswa = '$nama_beasiswa',
    image = '$image',
    link_beasiswa = '$link',
    tanggal_mulai = '$tanggalMulai',
    tanggal_berakhir = '$tanggalAkhir',
    deskripsi = '$deskripsi',
    persyaratan = '$persyaratan'
    WHERE id_beasiswa = '$id_beasiswa'";

if (mysqli_query($adminkoneksi, $query)) {
    header("Location: ../index.php?p=daftar-beasiswa");
    exit;
} else {
    echo "Error update: " . mysqli_error($adminkoneksi);
}

































// $id_beasiswa = $_POST['id_beasiswa'];
// $image = $_POST['image'];


// $kategori = $_POST['kategori'];
// $populer = $_POST['populer'];
// $nama_beasiswa = $_POST['nama_beasiswa'];
// $link = $_POST['link_beasiswa'];
// $tanggalMulai = $_POST['tanggal_mulai'];
// $tanggalAkhir = $_POST['tanggal_berakhir'];
// $deskripsi = $_POST['deskripsi'];
// $persyaratan = $_POST['persyaratan'];

// // Cek apakah ada file gambar yang diupload
// if ($image == '' || basename($_FILES["image"]["name"]) == '') {
//     $image = '';
// } else {
//     $image = basename($_FILES["image"]["name"]);
// }

// // Query untuk update data beasiswa
// if ($image == '') {

//     $query = "UPDATE beasiswa SET 
// kategori = '$kategori',
// populer = '$populer',
// nama_beasiswa = '$nama_beasiswa',
// image = '$image',
// link_beasiswa = '$link',
// tanggal_mulai = '$tanggalMulai',
// tanggal_berakhir = '$tanggalAkhir',
// deskripsi = '$deskripsi',
// persyaratan = '$persyaratan'
// WHERE id_beasiswa = '$id_beasiswa'";

//     if (mysqli_query($koneksiUser, $query)) {
//         header("Location: ../index.php?p=daftar-beasiswa");
//     }
// } else {

//     // jika ada gambar yang diupload, lakukan proses upload
//     $target_dir = "C:/xampp/htdocs/PIBP";
//     $target_file = $target_dir . $image;
//     move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

//     $query = "UPDATE beasiswa SET
//     kategori = '$kategori',
//     populer = '$populer',
//     nama_beasiswa = '$nama_beasiswa',
//     image = '$image',
//     link_beasiswa = '$link',
//     tanggal_mulai = '$tanggalMulai',
//     tanggal_berakhir = '$tanggalAkhir',
//     deskripsi = '$deskripsi',
//     persyaratan = '$persyaratan'
//     WHERE id_beasiswa = '$id_beasiswa'";

//     if (mysqli_query($koneksiUser, $query)) {
//         header("Location: ../index.php?p=daftar-beasiswa");
//     }
// }
