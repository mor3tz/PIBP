<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PIBP - Portal Informasi Beasiswa</title>
  <!-- ============= GOOGLE ICONS ===============  -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
  <!-- =============== FONT AWESOME ================ -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- =============== SWIPER JS ================ -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- ================== CSS ================ -->
  <link rel="stylesheet" href="CSS/style.css?v=<?= time(); ?>" />

  <style>
    .hamburger {
      display: none;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 30px;
      height: 24px;
      cursor: pointer;
      z-index: 10000;
      position: relative;
      gap: 5px;
    }

    .hamburger div {
      width: 100%;
      height: 3px;
      background-color: #333;
      border-radius: 2px;
      transition: all 0.3s ease-in-out;
      transform-origin: center;
    }


    /* Default untuk layar besar */
    .nav-wrapper {
      display: flex;
      position: static;
      /* biasa saja, bukan absolute */
      flex-direction: row;
      gap: 40px;
      align-items: center;
      justify-content: flex-end;
      width: auto;
      background: none;
      padding: 0;
      box-shadow: none;
      font-size: 16px;
    }

    /* Responsive untuk layar kecil */
    @media (max-width: 768px) {
      .hamburger {
        display: flex;
      }

      .nav-wrapper {
        position: absolute;
        top: 80px;
        left: 0;
        right: 0;
        width: 80%;
        margin: 0 auto;
        background-color: #f5f5f5;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        display: none;
        /* default sembunyi */
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        gap: 20px;
        z-index: 999;
        font-size: 18px;
      }

      .nav-wrapper.active {
        display: flex;
      }

      .nav-items {
        flex-direction: column;
        gap: 15px;
      }

      .nav-items a {
        font-size: 18px;
        font-weight: 400;
        padding: 10px 20px;
        border-radius: 8px;
        background-color: #e0e0e0;
      }

      .buttons {
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 100%;
        align-items: center;
      }

      .buttons a {
        width: 100%;
        font-size: 18px;
        text-align: center;
      }
    }
  </style>
</head>

<body>
  <!-- ================ NAVBAR ============== -->
  <nav class="navbar">
    <div class="container">
      <div class="logo">
        <img src="img/polnes.png" alt="Logo" />
        <a href="index.php" style="text-decoration: none; color: inherit;"><span>INFORMASI BEASISWA 📢</span> </a>
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

          <?php if (isset($_SESSION['id_pengguna'])): ?>
            <a href="index.php?p=favorite">Favorite Beasiswa</a>
          <?php endif; ?>

          <!-- Tampilkan button Admin hanya jika BELUM login -->
          <?php if (!isset($_SESSION['id_pengguna']) && !isset($_SESSION['adminuser'])): ?>
            <a href="admin/login-admin.php" class="nav-link">
              <ion-icon name="person"></ion-icon>
              <span>Admin</span>
            </a>
          <?php endif; ?>

          <?php if (isset($_SESSION['adminuser'])): ?>
            <a href="#" id="logout-admin" class="nav-link">
              <ion-icon name="log-out"></ion-icon>
              <span>Log Out</span>
            </a>
          <?php endif; ?>
        </div>
        <!-- User Section -->
        <div class="buttons">
          <?php if (isset($_SESSION['id_pengguna'])): ?>
            <!-- User sedang login, tampilkan logout user -->
            <a href="logoutuser.php" class="logout-user" id="logout-user">
              <ion-icon name="log-out"></ion-icon> <span>Logout</span></a>
          <?php elseif (!isset($_SESSION['adminuser'])): ?>
            <!-- Belum login sebagai admin, tampilkan tombol Sign In user -->
            <a href="pages/login-user.php" class="login">Sign In</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </nav>
  <!-- =============== END NAVBAR ============== -->

  <div class="col-sm-10">
    <?php
    $pages_dir = 'pages';
    if (!empty($_GET['p'])) {
      $pages = scandir($pages_dir, 0);
      unset($pages[0], $pages[1]);
      $p = $_GET['p'];
      if (in_array($p . '.php', $pages)) {
        include($pages_dir . '/' . $p . '.php');
      } else {
        echo 'Halaman Tidak ditemukan';
      }
    } else {
      include($pages_dir . '/beranda.php');
    }
    ?>
  </div>
  </li>


  <!-- =============== FOOTER ============== -->
  <footer class="footer-clean">
    <div class="footer-container">
      <div class="footer-logo">
        <img src="img/polnes.png" alt="Logo" />
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

  <!-- ================== MODAL LOGOUT ADMIN ================== -->
  <div id="logoutModal" class="modal">
    <div class="modal-content">
      <p>Apakah Anda yakin ingin logout?</p>
      <div class="modal-actions">
        <button id="cancelLogout" class="btn">Batal</button>
        <a href="admin/logoutadmin.php" class="btn btn-danger">Logout</a>
      </div>
    </div>
  </div>


  <!-- ================== JAVASCRIPT ================== -->
  <!-- HAMBURGER MENU -->
  <script>
    function toggleMenu() {
      const nav = document.getElementById("navWrapper");
      const burger = document.querySelector('.hamburger');
      nav.classList.toggle("active");
      burger.classList.toggle("active");
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="JS/script.js?v=<?= time(); ?>"></script>
</body>

</html>