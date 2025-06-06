<?php

include "koneksiuser.php";


$query = "SELECT * FROM beasiswa ORDER BY tanggal_berakhir DESC";
$result = mysqli_query($koneksiUser, $query);


if (!$result) {
  die("Query gagal: " . mysqli_error($koneksiUser));
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link ke font dan CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="CSS/all-beasiswa.css">
  <title>Daftar Beasiswa</title>
</head>

<body>
  <!-- ================= DAFTAR BEASISWA ============== -->
  <section class="section-4">
    <div class="container-section4">
      <h2>Discover</h2>
      <p>Temukan Beasiswa yang kamu minati disini🎉</p>
    </div>

    <!-- Filter Toggle Button -->
    <div class="filter-wrapper">
      <div class="filter-container">
        <button id="filterToggle">
          🔍 Filter Beasiswa
        </button>
      </div>

      <!-- SESSION ADMIN ONLY -->
      <?php if (isset($_SESSION['adminuser'])): ?>
        <div class="filter-container">
          <button id="addModal">
            <ion-icon name="add"></ion-icon> Tambah Beasiswa
          </button>
        </div>
        <div class="filter-container">
          <button id="EditModal">
            <ion-icon name="settings-sharp"></ion-icon> Edit Beasiswa
          </button>
        </div>
        <div class="filter-container">
          <button id="deleteCard">
            <ion-icon name="trash-sharp"></ion-icon> Hapus Beasiswa
          </button>
        </div>
      <?php endif; ?>
      <!-- END SESSION ADMIN ONLY -->
    </div>

    <!-- Filter Form -->
    <div id="filterBox" style="display: block;">
      <form id="filterForm">
        <input type="text" id="searchInput" placeholder="Cari nama beasiswa..." autocomplete="off" />

        <select id="kategoriSelect" aria-label="Kategori Beasiswa">
          <option value="">Semua Kategori</option>
          <option value="nasional">Nasional</option>
          <option value="daerah">Daerah</option>
          <option value="swasta">Swasta</option>
        </select>

        <select id="popularSelect" aria-label="Urutan Beasiswa">
          <option value="">Popular</option>
          <option value="baru">Baru</option>
          <option value="segera">Segera Berakhir</option>
        </select>
      </form>
    </div>

    <!-- modal CRUD -->
    <div id="adminModal" class="modal" style="display: none;">
      <div class="modal-content modern-modal">
        <span class="close-button">&times;</span>
        <h2>Tambah Beasiswa</h2>

        <form action="pages/beasiswa-inputproses.php" class="admin-input-form" method="post" enctype="multipart/form-data">
          <label>Kategori:
            <select name="kategori" required>
              <option value="Nasional">Nasional</option>
              <option value="swasta">Swasta</option>
              <option value="daerah">Daerah</option>
            </select>
          </label>

          <label>Status Populer:
            <input type="text" name="popular" value="Baru" readonly />
          </label>

          <div class="form-group">
            <label for="image">Upload Gambar:</label>
            <input type="file" id="image" name="image" accept="image/*" />
            <p id="uploadStatus" class="upload-status">Belum ada gambar dipilih.</p>
          </div>

          <label>Link Beasiswa:
            <input type="text" name="link_beasiswa" required />
          </label>

          <label>Tanggal Mulai:
            <input type="date" name="tanggal_mulai" required />
          </label>

          <label>Tanggal Berakhir:
            <input type="date" name="tanggal_berakhir" required />
          </label>

          <label>Nama Beasiswa:
            <input type="text" name="nama_beasiswa" required />
          </label>

          <label>Deskripsi Singkat:
            <textarea name="deskripsi" rows="4" required></textarea>
          </label>

          <label>Persyaratan:
            <textarea name="persyaratan" rows="4" required></textarea>
          </label>

          <button type="submit" class="submit-button">Simpan</button>
        </form>
      </div>
    </div>

    <!-- CARD BEASISWA -->
    <div class="container">
      <!-- Card grid layout -->
      <div class="card-wrapper">
        <ul class="card-list" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; padding-left: 0;">

          <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <li class="card-item" data-kategori="<?php echo $row['kategori']; ?>" data-popular="<?php echo $row['populer']; ?>" style="flex: 1 1 300px; max-width: 300px;">
              <div class="card-label <?php echo (strtolower($row['populer']) == 'baru') ? 'new' : 'expire'; ?>">
                <?php echo (strtolower($row['populer']) == 'baru') ? 'Baru!' : 'Segera Berakhir!'; ?>
              </div>
              <span class="card-save">
                <i class="fa-regular fa-bookmark"></i>
                <span class="tooltip-saved">Tersimpan!</span>
              </span>
              <a href="index.php?p=detail-beasiswa&id_beasiswa=<?php echo $row['id_beasiswa']; ?>" class="card-link">
                <div class="card-image-wrapper">
                  <img src="img/<?php echo $row['image']; ?>" alt="Card Image" class="card-image">
                </div>
                <p class="badge <?php echo $row['kategori']; ?>"><?php echo ucfirst($row['kategori']); ?></p>
                <h2 class="card-title"><?php echo $row['nama_beasiswa']; ?></h2>
                <p class="card-description"><?php echo $row['deskripsi']; ?></p>
                <button class="card-button material-symbols-rounded">arrow_forward</button>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>
        <p id="noResultsMessage" style="display: none; text-align: center; margin-top: 20px; font-weight: bold;">
          Pencarian tidak ditemukan.
        </p>
      </div>
    </div>
  </section>

  <!-- =================== MODAL EDIT ================== -->




  <!-- ==================== JAVASCRIPT ==================== -->
  <script src="JS/all-beasiswa.js"></script>

  <!-- ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>

</html>