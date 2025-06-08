<?php
session_start();

include "koneksiuser.php";

$id_user = $_SESSION['id_pengguna'] ?? null;

if (!$id_user) {
    echo "<script>alert('Silakan login terlebih dahulu.'); window.location.href='index.php?p=login';</script>";
    exit;
}

$query = "SELECT * FROM beasiswa WHERE aktif = 1";
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
  <link rel="stylesheet" href="CSS/all-beasiswa.css?v=<?= time(); ?>">
  <title>Daftar Beasiswa</title>
  <style>
    
  </style>
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
          <button id="editModal">
            <ion-icon name="settings-sharp"></ion-icon> Edit Beasiswa
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

    <!-- ====================== MODAL ADD BEASISWA ===================-->
    <div id="adminModal" class="modal" style="display: none;">
      <div class="modal-content modern-modal">
        <span class="close-button">&times;</span>
        <h2>Tambah Beasiswa</h2>

        <form action="pages/beasiswa-inputproses.php" class="admin-input-form" method="post" enctype="multipart/form-data">
          <label>Kategori:
            <select name="kategori" required class="styled-select">
              <option value="Nasional">Nasional</option>
              <option value="swasta">Swasta</option>
              <option value="daerah">Daerah</option>
            </select>
          </label>

          <label>Status Populer:
            <input type="text" name="popular" value="Baru" readonly />
          </label>

          <label for="image">Upload Gambar:
            <input type="file" id="image" name="image" accept="image/*" />
          </label>

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

    <!-- ====================== MODAL EDIT BEASISWA ===================-->
    <div id="editBeasiswaModal" class="modalEdit" style="display: none;">
      <div class="modal-contentEdit">
        <span class="close">&times;</span>
        <h2>Edit Beasiswa</h2>
        <div class="table-container">
          <div class="search-edit">
            <input type="text" id="searchEditInput" placeholder="Cari nama beasiswa..." />
          </div>
          <table id="editTable">
            <thead>
              <tr class="table-row">
                <th>No</th>
                <th>Kategori</th>
                <th>Popular</th>
                <th>Nama Beasiswa</th>
                <th>Gambar</th>
                <th>Aksi</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
              include "admin/adminkoneksi.php";

              // Ambil data untuk TABEL
              $sqlTable = "SELECT * FROM beasiswa where aktif = 1";
              $resultTable = mysqli_query($koneksiUser, $sqlTable);

              $no = 1;

              if (mysqli_num_rows($resultTable) > 0) {
                while ($row = mysqli_fetch_assoc($resultTable)) {
                  if ($row['id_beasiswa'] != 1) {

                    $populer = strtolower($row['populer']);
                    $warnaClass = '';

                    if ($populer == 'baru') {
                      $warnaClass = 'badge-baru';
                    } elseif ($populer == 'populer') {
                      $warnaClass = 'badge-populer';
                    } elseif ($populer == 'segera berakhir') {
                      $warnaClass = 'badge-akhir';
                    } else {
                      $warnaClass = 'badge-default';
                    }

                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . htmlspecialchars($row['kategori']) . "</td>";


                    echo "<td class='populer $warnaClass'>" . htmlspecialchars($row['populer']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['nama_beasiswa']) . "</td>";
                    echo "<td><img src='img/" . htmlspecialchars($row['image']) . "' alt='Gambar Beasiswa' style='width: 100px; height: auto;'></td>";

                    $id_beasiswa = htmlspecialchars($row['id_beasiswa']);

                    // edit
                    echo "<td><a href='index.php?p=edit-beasiswa&id_beasiswa=" . $row['id_beasiswa'] . "' class='btn-edit' style='text-decoration: none; color: white; background-color: #007BFF; padding: 8px 20px; border-radius: 5px; cursor: pointer;'>Edit</a></td>";


                    // hapus
                    echo "<td><a href='index.php?p=beasiswa-hapus&id_beasiswa=" . $row['id_beasiswa'] . "' class='btn-hapus' style='text-decoration: none; color: white; background-color: #FF0000; padding: 8px 20px; border-radius: 5px; cursor: pointer; '>Hapus</a></td>";
                  }
                }
              } else {
                echo "<tr><td colspan='11'>Tidak ada data beasiswa yang ditemukan.</td></tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- CARD BEASISWA -->
    <?php
    $sqlCard = "SELECT * FROM beasiswa WHERE aktif = 1";
    $resultCard = mysqli_query($koneksiUser, $sqlCard);
    ?>
    <div class="container">
      <div class="card-wrapper">
        <ul class="card-list" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; padding-left: 0;">

          <?php while ($row = mysqli_fetch_assoc($resultCard)): ?>
            <?php
$id_beasiswa = $row['id_beasiswa'];
$queryFavorit = "SELECT * FROM favorite WHERE id_pengguna = $id_user AND id_beasiswa = $id_beasiswa";
$resultFavorit = mysqli_query($koneksiUser, $queryFavorit);
$isFavorited = mysqli_num_rows($resultFavorit) > 0;
?>

            <li class="card-item" data-kategori="<?php echo $row['kategori']; ?>" data-popular="<?php echo $row['populer']; ?>" style="flex: 1 1 300px; max-width: 300px;">
              <div class="card-label <?php echo (strtolower($row['populer']) == 'baru') ? 'new' : 'expire'; ?>">
                <?php echo (strtolower($row['populer']) == 'baru') ? 'Baru!' : 'Segera Berakhir!'; ?>
              </div>
              <span class="card-save">
  <?php if ($isFavorited): ?>
    <i class="fa-solid fa-bookmark bookmarked"></i>
    <span class="tooltip-saved">Tersimpan!</span>
  <?php else: ?>
    <i class="fa-regular fa-bookmark"></i>
    <span class="tooltip-saved">Klik untuk Simpan</span>
  <?php endif; ?>
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
        <p id="noResultsMessage">
          Pencarian tidak ditemukan.
        </p>
      </div>
    </div>
  </section>
  <!-- ==================== JAVASCRIPT ==================== -->
  <script src="JS/all-beasiswa.js?v<?= time() ?>"></script>
  <!-- ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>