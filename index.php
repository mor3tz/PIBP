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
  <link rel="stylesheet" href="/assets/CSS/style.css">

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

  <!-- ===============  HERO SECTION 1 ============== -->

  <section class="hero" id="section-1">
    <div class="hero-container">

      <div class="hero-content">
        <h1>INFORMASI BEASISWA</h1>
        <p>Your journey to excellence starts here.</p>
        <a href="#section-2" class="btn-primary">Jelajahi &raquo;</a>
      </div>
    </div>
  </section>

  <!-- =============== SECTION 2 ============== -->
  <section class="section-2 grid-2col" id="section-2">
    <div class="container">
      <h2>What We Offer &#128075;</h2>
      <div class="grid-features">
        <div class="feature-item">
          <h3>Always Up-to-Date</h3>
          <p>Mengutamakan Informasi Terbaru disetiap Waktunya.</p>
        </div>
        <div class="feature-item">
          <h3>TRUSTED</h3>
          <p>Informasi selalu akurat dan terpercaya</p>
        </div>
        <div class="feature-item">
          <h3>Affordable</h3>
          <p>Layanan gratis dan mudah diakses</p>
        </div>
        <div class="feature-item">
          <h3>Support Community</h3>
          <p>Komunitas pencari beasiswa dan saling berbagi info.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- =============== SECTION 3 ============== -->
  <section class="section-3" id="section-3">
    <div class="container-section3">
      <h2>Featured</h2>
      <p>Daftar Beasiswa Terbaru dan pastinya Akurat🎉</p>
    </div>
    <div class="container">
      <!-- swiper card -->
      <div class="container swiper">
        <div class="card-wrapper">
          <ul class="card-list swiper-wrapper">
            <li class="card-item swiper-slide">
              <div class="card-label new">Baru!</div>
              <span class="card-save">
                <i class="fa-regular fa-bookmark"></i>
                <span class="tooltip-saved">Tersimpan!</span>
              </span>
              <a href="#" class="card-link">
                <div class="card-image-wrapper">
                  <img src="/assets/img/beasiswa.jpg" alt="Card Image" class="card-image">
                </div>
                <p class="badge ">Swasta</p>
                <h2 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <button class="card-button material-symbols-rounded">
                  arrow_forward
                </button>
              </a>
            </li>
            <li class="card-item swiper-slide">
              <div class="card-label new">Baru!</div>
              <span class="card-save">
                <i class="fa-regular fa-bookmark"></i>
                <span class="tooltip-saved">Tersimpan!</span>
              </span>
              <a href="#" class="card-link">
                <div class="card-image-wrapper">
                  <img src="/assets/img/beasiswa2.jpg" alt="Card Image" class="card-image">
                </div>
                <p class="badge daerah">Daerah</p>
                <h2 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <button class="card-button material-symbols-rounded">
                  arrow_forward
                </button>
              </a>
            </li>
            <li class="card-item swiper-slide">
              <div class="card-label new">Baru!</div>
              <span class="card-save">
                <i class="fa-regular fa-bookmark"></i>
                <span class="tooltip-saved">Tersimpan!</span>
              </span>
              <a href="#" class="card-link">
                <div class="card-image-wrapper">
                  <img src="/assets/img/beasiswa3.jpg" alt="Card Image" class="card-image">
                </div>
                <p class="badge nasional">Nasional</p>
                <h2 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <button class="card-button material-symbols-rounded">
                  arrow_forward
                </button>
              </a>
            </li>
            <li class="card-item swiper-slide">
              <div class="card-label expire">Segera Berakhir!</div>
              <span class="card-save">
                <i class="fa-regular fa-bookmark"></i>
                <span class="tooltip-saved">Tersimpan!</span>
              </span>
              <a href="#" class="card-link">
                <div class="card-image-wrapper">
                  <img src="/assets/img/beasiswa4.jpg" alt="Card Image" class="card-image">
                </div>
                <p class="badge nasional">Nasional</p>
                <h2 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <button class="card-button material-symbols-rounded">
                  arrow_forward
                </button>
              </a>
            </li>
            <li class="card-item swiper-slide">
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
                <h2 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <button class="card-button material-symbols-rounded">
                  arrow_forward
                </button>
              </a>
            </li>
          </ul>

          <!-- show more -->
          <div class="show-more-wrapper">
            <a href="/pages/daftar-beasiswa.php" class="show-more-btn" target="_blank">Show More</a>
          </div>

          <div class="swiper-pagination"></div>
          <div class="swiper-slide-button swiper-button-prev"></div>
          <div class="swiper-slide-button swiper-button-next"></div>
        </div>
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
  <!-- js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="/assets/JS/script.js"></script>
</body>

</html>