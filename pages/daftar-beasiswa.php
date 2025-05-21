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
        <img src="/assets/img/polnes.png" alt="Logo" />
        <span>INFORMASI BEASISWA 📢</span>
      </div>

      <div class="hamburger" onclick="toggleMenu()">
        <div></div>
        <div></div>
        <div></div>
      </div>

      <div class="nav-wrapper" id="navWrapper">
        <div class="nav-items">
          <a href="#section-1">Beranda</a>
          <a href="#section-2">Tentang Kami</a>
          <a href="#section-3">Beasiswa</a>
          <a href="#">Favorite Beasiswa</a>
        </div>

        <div class="buttons">
          <a href="/pages/login.php" class="login">Sign In</a>
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
    <div class="filter-container">
      <button id="filterToggle">
        🔍 Filter Beasiswa
      </button>
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


    <div class="container">
      <!-- Card grid layout -->
      <div class="card-wrapper">
        <ul class="card-list" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; padding-left: 0;">

          <!-- CARD 1 -->
          <li class="card-item" data-kategori="nasional" data-popular="baru"  style="flex: 1 1 300px; max-width: 300px;">
            <div class="card-label new">Baru!</div>
            <span class="card-save">
              <i class="fa-regular fa-bookmark"></i>
              <span class="tooltip-saved">Tersimpan!</span>
            </span>
            <a href="#" class="card-link">
              <div class="card-image-wrapper">
                <img src="/assets/img/beasiswa.jpg" alt="Card Image" class="card-image">
              </div>
              <p class="badge swasta">Swasta</p>
              <h2 class="card-title">BEASISWA KALTIM TUNTAS</h2>
              <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
              <button class="card-button material-symbols-rounded">arrow_forward</button>
            </a>
          </li>
          <li class="card-item" data-kategori="nasional" data-popular="baru"  style="flex: 1 1 300px; max-width: 300px;">
            <div class="card-label new">Baru!</div>
            <span class="card-save">
              <i class="fa-regular fa-bookmark"></i>
              <span class="tooltip-saved">Tersimpan!</span>
            </span>
            <a href="#" class="card-link">
              <div class="card-image-wrapper">
                <img src="/assets/img/beasiswa5.jpg" alt="Card Image" class="card-image">
              </div>
              <p class="badge swasta">Swasta</p>
              <h2 class="card-title">BEASISWA SANTRI BERPRESTASI</h2>
              <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
              <button class="card-button material-symbols-rounded">arrow_forward</button>
            </a>
          </li>
          <li class="card-item" data-kategori="daerah" data-popular="baru"  style="flex: 1 1 300px; max-width: 300px;">
            <div class="card-label new">Baru!</div>
            <span class="card-save">
              <i class="fa-regular fa-bookmark"></i>
              <span class="tooltip-saved">Tersimpan!</span>
            </span>
            <a href="#" class="card-link">
              <div class="card-image-wrapper">
                <img src="/assets/img/beasiswa2.jpg" alt="Card Image" class="card-image">
              </div>
              <p class="badge swasta">Swasta</p>
              <h2 class="card-title">BEASISWA SAWIT 2025 ONLINE</h2>
              <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
              <button class="card-button material-symbols-rounded">arrow_forward</button>
            </a>
          </li>
          <li class="card-item" data-kategori="daerah" data-popular="baru"  style="flex: 1 1 300px; max-width: 300px;">
            <div class="card-label new">Baru!</div>
            <span class="card-save">
              <i class="fa-regular fa-bookmark"></i>
              <span class="tooltip-saved">Tersimpan!</span>
            </span>
            <a href="#" class="card-link">
              <div class="card-image-wrapper">
                <img src="/assets/img/beasiswa3.jpg" alt="Card Image" class="card-image">
              </div>
              <p class="badge swasta">Swasta</p>
              <h2 class="card-title">BEASISWA PT. PUPUK KALIMANTAN TIMUR</h2>
              <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
              <button class="card-button material-symbols-rounded">arrow_forward</button>
            </a>
          </li>
          <li class="card-item" data-kategori="daerah" data-popular="segera"  style="flex: 1 1 300px; max-width: 300px;">
            <div class="card-label expire">Segera Berakhir!</div>
            <span class="card-save">
              <i class="fa-regular fa-bookmark"></i>
              <span class="tooltip-saved">Tersimpan!</span>
            </span>
            <a href="#" class="card-link">
              <div class="card-image-wrapper">
                <img src="/assets/img/beasiswa4.jpg" alt="Card Image" class="card-image">
              </div>
              <p class="badge swasta">Swasta</p>
              <h2 class="card-title">BEASISWA KALTIM TUNTAS</h2>
              <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
              <button class="card-button material-symbols-rounded">arrow_forward</button>
            </a>
          </li>
          <li class="card-item" data-kategori="swasta" data-popular="segera"  style="flex: 1 1 300px; max-width: 300px;">
            <div class="card-label expire">Segera Berakhir!</div>
            <span class="card-save">
              <i class="fa-regular fa-bookmark"></i>
              <span class="tooltip-saved">Tersimpan!</span>
            </span>
            <a href="#" class="card-link">
              <div class="card-image-wrapper">
                <img src="/assets/img/beasiswa5.jpg" alt="Card Image" class="card-image">
              </div>
              <p class="badge swasta">Swasta</p>
              <h2 class="card-title">BEASISWA PERINTIS</h2>
              <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
              <button class="card-button material-symbols-rounded">arrow_forward</button>
            </a>
          </li>
          <li class="card-item" data-kategori="swasta" data-popular="segera"  style="flex: 1 1 300px; max-width: 300px;">
            <div class="card-label expire">Segera Berakhir!</div>
            <span class="card-save">
              <i class="fa-regular fa-bookmark"></i>
              <span class="tooltip-saved">Tersimpan!</span>
            </span>
            <a href="#" class="card-link">
              <div class="card-image-wrapper">
                <img src="/assets/img/beasiswa2.jpg" alt="Card Image" class="card-image">
              </div>
              <p class="badge swasta">Swasta</p>
              <h2 class="card-title">BEASISWA PT. PERTAMINA Persero</h2>
              <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
              <button class="card-button material-symbols-rounded">arrow_forward</button>
            </a>
          </li>
          <li class="card-item" data-kategori="daerah" data-popular="segera"  style="flex: 1 1 300px; max-width: 300px;">
            <div class="card-label expire">Segera Berakhir!</div>
            <span class="card-save">
              <i class="fa-regular fa-bookmark"></i>
              <span class="tooltip-saved">Tersimpan!</span>
            </span>
            <a href="#" class="card-link">
              <div class="card-image-wrapper">
                <img src="/assets/img/beasiswa5.jpg" alt="Card Image" class="card-image">
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
        <img src="/assets/img/polnes.png" alt="Logo" />
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

</html>