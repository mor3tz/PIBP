document.addEventListener('DOMContentLoaded', function () {
  const favoriteBtn = document.getElementById('favorite-icon');
  const loginModal = document.getElementById('loginModal');
  const isLoggedIn = document.body.dataset.loggedIn === 'true';

  if (favoriteBtn) {
    favoriteBtn.addEventListener('click', function () {
      if (!isLoggedIn) {
        loginModal.style.display = 'flex';
      } else {
        // Tambahkan logika menyimpan favorite di sini
        alert('Beasiswa disimpan ke favorit!');
      }
    });
  }

  // Klik di luar modal untuk menutup
  window.addEventListener('click', function (e) {
    if (e.target === loginModal) {
      loginModal.style.display = 'none';
    }
  });
});