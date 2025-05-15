<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PIBP - Portal Informasi Beasiswa</title>
  <!-- ============= GOOGLE ICONS ===============  -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
  <!-- ================== CSS ================ -->
  <link rel="stylesheet" href="/assets/CSS/style.css">
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>

<body>
  <!-- ================ NAVBAR ============== -->
  <nav class="navbar">
    <div class="container">
      <div class="logo">
        <img src="/assets/img/polnes.png" alt="Logo" />
        <span>INFORMASI BEASISWA</span>
      </div>

      <div class="hamburger" onclick="toggleMenu()">
        <div></div>
        <div></div>
        <div></div>
      </div>

      <div class="nav-wrapper" id="navWrapper">
        <div class="nav-items">
          <a href="#section-1">Beranda</a>
          <a href="#section-2">Beasiswa</a>
          <a href="#">Favorite Beasiswa</a>
        </div>

        <div class="buttons">
          <button class="login">Sign In</button>
          <button class="login">Sign Up</button>
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
        <button class="btn-primary">Jelajahi &raquo;</button>
      </div>
    </div>
  </section>

  <!-- =============== SECTION 2 ============== -->
  <section class="section-2 grid-2col" id="section-2">
    <div class="container">
      <h2>What We Offer</h2>
      <div class="grid-features">
        <div class="feature-item">
          <h3>Fast Delivery</h3>
          <p>Kami mengutamakan kecepatan dalam setiap pengiriman.</p>
        </div>
        <div class="feature-item">
          <h3>Best Quality</h3>
          <p>Produk kami selalu melewati standar kualitas tertinggi.</p>
        </div>
        <div class="feature-item">
          <h3>24/7 Support</h3>
          <p>Tim kami siap membantu kapan saja, tanpa henti.</p>
        </div>
        <div class="feature-item">
          <h3>Affordable</h3>
          <p>Harga bersaing tanpa mengurangi kualitas layanan.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- =============== SECTION 3 ============== -->
   <div class="section-3">
    <!-- swiper card -->
   </div>

   <!-- =============== FOOTER ============== -->




  <!-- js -->
  <script src="/assets/JS/script.js"></script>

</body>

</html>