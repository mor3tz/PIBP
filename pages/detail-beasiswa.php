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
  <link rel="stylesheet" href="../assets/CSS/detail.css">
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
          <a href="../index.php">Beranda</a>
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

  <!-- =============== CONTAINER DETAIL BEASISWA ============== -->
  <div class="container">
    <h2>Detail BEASISWA KALTIM TUNTAS</h2>

    <!-- Detail Beasiswa -->
    <section class="beasiswa-details">
      <div class="card-image-wrapper">
        <img src="/assets/img/beasiswa.jpg" alt="Card Image" class="card-image">
      </div>
      <p><strong>Nama Beasiswa:</strong> BEASISWA KALTIM TUNTAS</p>
      <p><strong>Deskripsi:</strong> Beasiswa ini diberikan kepada mahasiswa yang memiliki prestasi akademik dan aktif dalam kegiatan sosial. Beasiswa ini mencakup biaya kuliah dan biaya hidup selama 1 tahun.</p>
      <p><strong>Tanggal Awal:</strong> 1 Januari 2025</p>
      <p><strong>Tanggal Akhir:</strong> 30 Juni 2025</p>
      <div class="favorite-icon" id="favorite-icon">
        <i class="fa-regular fa-bookmark" id="bookmark-icon"></i><span>Favorite</span>
      </div>

    </section>

    <!-- Syarat Beasiswa -->
    <section class="beasiswa-syarat">
      <h3>Syarat Beasiswa</h3>
      <ul>
        <li>Mahasiswa aktif di perguruan tinggi di Indonesia.</li>
        <li>Memiliki IPK minimal 3.0.</li>
        <li>Aktif dalam kegiatan sosial dan organisasi kampus.</li>
        <li>Melampirkan surat rekomendasi dari dosen atau organisasi.</li>
      </ul>
    </section>

    <!-- Kolom Komentar -->
    <section class="komentar">
      <h3>Kolom Komentar</h3>
      <button id="toggle-comment-btn">Tampilkan Komentar</button>
      <br>
      <br>
      <div id="comment-section" class="comment-section">
        <textarea placeholder="Tulis komentar Anda di sini..." rows="4" cols="50"></textarea>
        <button class="submit-comment">Kirim Komentar</button>

        <!-- List of Comments -->
        <div class="comments-list">
          <div class="comment">
            <div class="comment-header">
              <strong>user</strong> - 2 Januari 2025
            </div>
            <div class="comment-body">
              <p>Ini adalah komentar pertama saya! Sangat bermanfaat beasiswanya.</p>
            </div>
            <div class="comment-footer">
              <button class="like-btn"><i class="fa-solid fa-thumbs-up"></i> Like</button>
              <button class="reply-btn"><i class="fa-solid fa-reply"></i> Reply</button>
            </div>
            <div class="replies">
              <div class="reply">
                <strong>Admin</strong> - 3 Januari 2025
                <p>Terima kasih atas komentar Anda! Semoga informasi beasiswa ini bermanfaat.</p>
              </div>
            </div>
          </div>

          <div class="comment">
            <div class="comment-header">
              <strong>user2</strong> - 4 Januari 2025
            </div>
            <div class="comment-body">
              <p>Sangat membantu, semoga saya bisa mendapatkan beasiswa ini!</p>
            </div>
            <div class="comment-footer">
              <button class="like-btn"><i class="fa-solid fa-thumbs-up"></i> Like</button>
              <button class="reply-btn"><i class="fa-solid fa-reply"></i> Reply</button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

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

  <!-- ==================== JAVASCRIPT ==================== -->
  <script src="../assets/JS/detail-beasiswa.js"></script>
  
</body>

</html>
