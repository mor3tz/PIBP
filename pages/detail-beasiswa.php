<?php
// Koneksi ke database
include "koneksiuser.php";

// Cek jika ada id yang dikirim melalui URL
if (isset($_GET['id_beasiswa'])) {
  $beasiswa_id = $_GET['id_beasiswa'];

  // Query untuk mengambil data beasiswa berdasarkan ID
  $query = "SELECT * FROM beasiswa WHERE id_beasiswa = '$beasiswa_id'";
  $result = mysqli_query($koneksiUser, $query);

  if (!$result) {
    die("Query gagal: " . mysqli_error($koneksiUser));
  }

  // Ambil data beasiswa
  $row = mysqli_fetch_assoc($result);
} else {
  echo "ID Beasiswa tidak ditemukan!";
  exit;
}
?>

<!DOCTYPE html>
<html lang="id_beasiswa">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- ============= GOOGLE ICONS ===============  -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
  <!-- =============== FONT AWESOME ================ -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- ========================== CSS ==================== -->
  <link rel="stylesheet" href="CSS/detail.css">
  <title>Detail Beasiswa</title>
</head>

<body data-logged-in="<?php echo isset($_SESSION['username']) ? 'true' : 'false'; ?>">
  <!-- =============== CONTAINER DETAIL BEASISWA ============== -->
  <div class="container-detail">
    <h2 class="detail-title"><?php echo $row['nama_beasiswa']; ?></h2>

    <!-- Detail Beasiswa -->
    <section class="beasiswa-details">
      <div class="card-image-wrapper">
        <img src="img/<?php echo $row['image']; ?>" alt="Card Image" class="card-image">
      </div>
      <p><strong>Nama Beasiswa:</strong> <?php echo $row['nama_beasiswa']; ?></p>
      <p><strong>Deskripsi:</strong> <?php echo $row['deskripsi']; ?></p>
      <p><strong>Tanggal Awal:</strong> <?php echo date('d M Y', strtotime($row['tanggal_mulai'])); ?></p>
      <p><strong>Tanggal Akhir:</strong> <?php echo date('d M Y', strtotime($row['tanggal_berakhir'])); ?></p>
      <div class="favorite-icon" id="favorite-icon">
        <i class="fa-regular fa-bookmark" id="bookmark-icon"></i><span>Simpan</span>
      </div>
    </section>

    <!-- Syarat Beasiswa -->
    <section class="beasiswa-syarat">
      <h3 class="syarat-title">Syarat Beasiswa</h3>
      <ul>

        <?php

        $persyaratan = explode("\n", $row['persyaratan']);

        foreach ($persyaratan as $syarat) {
          echo "<li>" . htmlspecialchars($syarat) . "</li>";
        }
        ?>
        <li>Link Pendaftaran: <a href="<?php echo htmlspecialchars($row['link_beasiswa']); ?>">Pendaftaran Beasiswa</a></li>
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

  <!-- MODAL LOGIN USER -->
  <div id="loginModal" class="modal">
    <div class="modal-content">
      <p>Anda harus login untuk menyimpan beasiswa.</p>
      <div class="modal-actions">
        <a href="pages/login-user.php" class="btn btn-primary">Sign In</a>
        <a href="register.php" class="btn btn-secondary">Daftar</a>
      </div>
    </div>
  </div>

  <!-- ==================== JAVASCRIPT ==================== -->
  <script src="JS/detail-beasiswa.js"></script>
  <script src="JS/favorite.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>