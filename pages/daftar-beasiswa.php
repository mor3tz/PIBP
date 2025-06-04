

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- ============= GOOGLE ICONS ===============  -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
  <!-- =============== FONT AWESOME ================ -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- ========================== CSS ==================== -->
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
      <?php if(isset($_SESSION['adminuser'])): ?>
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
        <input
          type="text"
          id="searchInput"
          placeholder="Cari nama beasiswa..."
          aria-label="Cari nama beasiswa"
          autocomplete="off" />

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
    <div id="adminModal" class="modal">
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
            <label for="imageUpload">Upload Gambar:</label>
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

          <!-- CARD 1 -->
          <li class="card-item" data-kategori="nasional" data-popular="baru" style="flex: 1 1 300px; max-width: 300px;">
            <div class="card-label new">Baru!</div>
            <span class="card-save">
              <i class="fa-regular fa-bookmark"></i>
              <span class="tooltip-saved">Tersimpan!</span>
            </span>
            <a href="index.php?p=detail-beasiswa" class="card-link">
              <div class="card-image-wrapper">
                <img src="img/beasiswa.jpg" alt="Card Image" class="card-image">
              </div>
              <p class="badge nasional">Nasional</p>
              <h2 class="card-title">BEASISWA KALTIM TUNTAS</h2>
              <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
              <button class="card-button material-symbols-rounded">arrow_forward</button>
            </a>
          </li>
          <li class="card-item" data-kategori="daerah" data-popular="segera" style="flex: 1 1 300px; max-width: 300px;">
            <div class="card-label expire">Segera Berakhir!</div>
            <span class="card-save">
              <i class="fa-regular fa-bookmark"></i>
              <span class="tooltip-saved">Tersimpan!</span>
            </span>
            <a href="#" class="card-link">
              <div class="card-image-wrapper">
                <img src="img/beasiswa5.jpg" alt="Card Image" class="card-image">
              </div>
              <p class="badge daerah">Daerah</p>
              <h2 class="card-title">BEASISWA SANTRI BERPRESTASI</h2>
              <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
              <button class="card-button material-symbols-rounded">arrow_forward</button>
            </a>
          </li>
          <li class="card-item" data-kategori="swasta" data-popular="segera" style="flex: 1 1 300px; max-width: 300px;">
            <div class="card-label expire">Segera Berakhir!</div>
            <span class="card-save">
              <i class="fa-regular fa-bookmark"></i>
              <span class="tooltip-saved">Tersimpan!</span>
            </span>
            <a href="#" class="card-link">
              <div class="card-image-wrapper">
                <img src="img/beasiswa2.jpg" alt="Card Image" class="card-image">
              </div>
              <p class="badge swasta">Swasta</p>
              <h2 class="card-title">BEASISWA SAWIT 2025 ONLINE</h2>
              <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
              <button class="card-button material-symbols-rounded">arrow_forward</button>
            </a>
          </li>

        </ul>
        <p id="noResultsMessage" style="display: none; text-align: center; margin-top: 20px; font-weight: bold;">
          Pencarian tidak ditemukan.
        </p>

      </div>
    </div>
  </section>
  <!-- ==================== JAVASCRIPT ==================== -->
  <script src="JS/all-beasiswa.js"></script>
  
  <!-- ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  
</body>
</html>