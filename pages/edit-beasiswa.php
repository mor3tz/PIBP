<?php
if (!isset($_GET['id_beasiswa']) || empty($_GET['id_beasiswa'])) {
    echo "Halaman tidak ditemukan. ID beasiswa tidak valid.";
    exit;
}

$id_beasiswa = $_GET['id_beasiswa'];
include "koneksiuser.php";

$query = "SELECT * FROM beasiswa WHERE id_beasiswa = '$id_beasiswa'";
$result = mysqli_query($koneksiUser, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $kategori = htmlspecialchars($row['kategori']);
    $populer = htmlspecialchars($row['populer']);
    $nama_beasiswa = htmlspecialchars($row['nama_beasiswa']);
    $image = htmlspecialchars($row['image']);
    $link = htmlspecialchars($row['link_beasiswa']);
    $tanggalMulai = htmlspecialchars($row['tanggal_mulai']);
    $tanggalAkhir = htmlspecialchars($row['tanggal_berakhir']);
    $deskripsi = htmlspecialchars($row['deskripsi']);
    $persyaratan = htmlspecialchars($row['persyaratan']);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/edit-beasiswa.css?v=<?= time(); ?>">
</head>

<body>
    <div class="containerEdit">
        <form action="pages/beasiswa-editproses.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_beasiswa" value="<?php echo $id_beasiswa; ?>" />
            <input type="hidden" name="image" value="<?php echo $image; ?>" />
            <h4 class="form-titleEdit">Edit Beasiswa 📑</h4>
            <label>Kategori:
                <select name="kategori" value="<?php echo $kategori; ?>" required class="styled-select">
                    <option value="Nasional" <?php echo $kategori == 'Nasional' ? 'selected' : ''; ?>>Nasional</option>
                    <option value="swasta" <?php echo $kategori == 'swasta' ? 'selected' : ''; ?>>Swasta</option>
                    <option value="daerah" <?php echo $kategori == 'daerah' ? 'selected' : ''; ?>>Daerah</option>
                </select>
            </label>

            <label>Status Populer:
                <input type="text" name="popular" value="Baru" readonly />
            </label>

            <!-- <label for="image">Upload Gambar: <?php echo $image; ?>
                <input type="file" id="image" name="image" accept="image/*" />
            </label> -->

            <label for="image">Upload Gambar: <br>
                <small>Gambar saat ini: <?= $image ? $image : 'Tidak ada gambar'; ?></small>
                <input type="file" id="image" name="image" accept="image/*" />
            </label>

            <label>Link Beasiswa:
                <input type="text" value="<?php echo $link; ?>" name="link_beasiswa" required />
            </label>

            <label>Tanggal Mulai:
                <input type="date" name="tanggal_mulai" value="<?php echo $tanggalMulai; ?>" required />
            </label>

            <label>Tanggal Berakhir:
                <input type="date" name="tanggal_berakhir" value="<?php echo $tanggalAkhir; ?>" required />
            </label>

            <label>Nama Beasiswa:
                <input type="text" name="nama_beasiswa" value="<?php echo $nama_beasiswa; ?>" required />
            </label>

            <label>Deskripsi Singkat:
                <textarea name="deskripsi" rows="4" required><?php echo $deskripsi; ?></textarea>
            </label>

            <label>Persyaratan:
                <textarea name="persyaratan" rows="4" required><?php echo $persyaratan; ?></textarea>
            </label>

            <button type="submit" class="submit-button">Simpan</button>
            <a href="index.php?p=daftar-beasiswa" type="submit" class="submit-button">Kembali</a>




        </form>
    </div>
</body>

</html>