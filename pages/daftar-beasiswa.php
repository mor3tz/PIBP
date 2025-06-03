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
  <link rel="stylesheet" href="../assets/CSS/all-beasiswa.css">
  <title>Daftar Beasiswa</title>
</head>

<body>
  <!-- ================ NAVBAR ============== -->
  <nav class="navbar">
    <div class="container">
      <div class="logo">
        <img src="../assets/img/polnes.png" alt="Logo" />
        <span>INFORMASI BEASISWA 📢</span>
      </div>

      <div class="hamburger" onclick="toggleMenu()">
        <div></div>
        <div></div>
        <div></div>
      </div>

      <div class="nav-wrapper" id="navWrapper">
        <div class="nav-items">
          <a href="../index.php">Beranda</a>
          <a href="#section-2">Tentang Kami</a>
          <a href="../pages/daftar-beasiswa.php">Beasiswa</a>
          <a href="#">Favorite Beasiswa</a>
          <a href="../admin/login-admin.php" class="nav-link">
            <ion-icon name="person"></ion-icon>
            <span>Admin</span>
          </a>
        </div>

        <div class="buttons">
          <a href="../pages/login-user.php" class="login">Sign In</a>
        </div>
      </div>
    </div>
  </nav>


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
        <form class="admin-input-form" enctype="multipart/form-data">
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
            <input type="file" id="imageUpload" name="image" accept="image/*" />
            <p id="uploadStatus" class="upload-status">Belum ada gambar dipilih.</p>
          </div>

          <label>Tanggal Deadline:
            <input type="date" name="deadline" required />
          </label>


          <label>Judul Beasiswa:
            <input type="text" name="judul" required />
          </label>

          <label>Deskripsi Singkat:
            <textarea name="deskripsi" rows="4" required></textarea>
          </label>

          <label>Persyaratan:
            <textarea name="deskripsi" rows="4" required></textarea>
          </label>

          <button type="submit" class="submit-button">Simpan</button>
        </form>
      </div>
    </div>



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
            <a href="detail-beasiswa.php" class="card-link">
              <div class="card-image-wrapper">
                <img src="../assets/img/beasiswa.jpg" alt="Card Image" class="card-image">
              </div>
              <p class="badge nasional">Nasional</p>
              <h2 class="card-title">BEASISWA KALTIM TUNTAS</h2>
              <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
              <button class="card-button material-symbols-rounded">arrow_forward</button>
            </a>
          </li>
          <li class="card-item" data-kategori="nasional" data-popular="baru" style="flex: 1 1 300px; max-width: 300px;">
            <div class="card-label new">Baru!</div>
            <span class="card-save">
              <i class="fa-regular fa-bookmark"></i>
              <span class="tooltip-saved">Tersimpan!</span>
            </span>
            <a href="#" class="card-link">
              <div class="card-image-wrapper">
                <img src="../assets/img/beasiswa5.jpg" alt="Card Image" class="card-image">
              </div>
              <p class="badge nasional">Nasional</p>
              <h2 class="card-title">BEASISWA SANTRI BERPRESTASI</h2>
              <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
              <button class="card-button material-symbols-rounded">arrow_forward</button>
            </a>
          </li>
          <li class="card-item" data-kategori="daerah" data-popular="baru" style="flex: 1 1 300px; max-width: 300px;">
            <div class="card-label new">Baru!</div>
            <span class="card-save">
              <i class="fa-regular fa-bookmark"></i>
              <span class="tooltip-saved">Tersimpan!</span>
            </span>
            <a href="#" class="card-link">
              <div class="card-image-wrapper">
                <img src="../assets/img/beasiswa2.jpg" alt="Card Image" class="card-image">
              </div>
              <p class="badge nasional">Nasional</p>
              <h2 class="card-title">BEASISWA SAWIT 2025 ONLINE</h2>
              <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
              <button class="card-button material-symbols-rounded">arrow_forward</button>
            </a>
          </li>
          <li class="card-item" data-kategori="daerah" data-popular="baru" style="flex: 1 1 300px; max-width: 300px;">
            <div class="card-label new">Baru!</div>
            <span class="card-save">
              <i class="fa-regular fa-bookmark"></i>
              <span class="tooltip-saved">Tersimpan!</span>
            </span>
            <a href="#" class="card-link">
              <div class="card-image-wrapper">
                <img src="../assets/img/beasiswa3.jpg" alt="Card Image" class="card-image">
              </div>
              <p class="badge daerah">Daerah</p>
              <h2 class="card-title">BEASISWA PT. PUPUK KALIMANTAN TIMUR</h2>
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
                <img src="../assets/img/beasiswa4.jpg" alt="Card Image" class="card-image">
              </div>
              <p class="badge daerah">Daerah</p>
              <h2 class="card-title">BEASISWA KALTIM TUNTAS</h2>
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
                <img src="../assets/img/beasiswa5.jpg" alt="Card Image" class="card-image">
              </div>
              <p class="badge swasta">Swasta</p>
              <h2 class="card-title">BEASISWA PERINTIS</h2>
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
                <img src="../assets/img/beasiswa2.jpg" alt="Card Image" class="card-image">
              </div>
              <p class="badge swasta">Swasta</p>
              <h2 class="card-title">BEASISWA PT. PERTAMINA Persero</h2>
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
                <img src="../assets/img/beasiswa5.jpg" alt="Card Image" class="card-image">
              </div>
              <p class="badge swasta">Swasta</p>
              <h2 class="card-title">BEASISWA KALTIM CEMERLANG 2025</h2>
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

  <!-- =============== FOOTER ============== -->
  <footer class="footer-clean">
    <div class="footer-container">
      <div class="footer-logo">
        <img src="../assets/img/polnes.png" alt="Logo" />
        <p>PORTAL INFORMASI BEASISWA POLNES</p>
      </div>

      <ul class="footer-nav">
        <li><a href="#">Pricing</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Reviews</a></li>
        <li><a href="#">Updates</a></li>
      </ul>

      <p class="footer-subtitle">Follow Us</p>
      <div class="footer-social">
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-github"></i></a>
      </div>

      <p class="footer-copy">&copy; Official PIB POLNES</p>
    </div>
  </footer>
</body>

<!-- ==================== JAVASCRIPT ==================== -->
<script src="../assets/JS/all-beasiswa.js"></script>



<!-- ionicons -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>