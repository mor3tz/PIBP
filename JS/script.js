new Swiper(".card-wrapper", {
  loop: true,
  spaceBetween: 30,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

document.querySelectorAll('.card-save').forEach(function(btn) {
  btn.addEventListener('click', function(e) {
    e.preventDefault();
    const icon = btn.querySelector('i');
    btn.classList.toggle('saved');
    if (btn.classList.contains('saved')) {
      icon.classList.remove('fa-regular');
      icon.classList.add('fa-solid');
      // Tooltip otomatis hilang setelah 1.2 detik
      const tooltip = btn.querySelector('.tooltip-saved');
      tooltip.style.opacity = '1';
      setTimeout(() => {
        tooltip.style.opacity = '0';
        btn.classList.remove('saved');
        icon.classList.remove('fa-solid');
        icon.classList.add('fa-regular');
      }, 1200);
    } else {
      icon.classList.remove('fa-solid');
      icon.classList.add('fa-regular');
    }
  });
});



// MODAL LOGOUT ADMIN

    const logoutBtn = document.getElementById('logout-admin');
    const modal = document.getElementById('logoutModal');
    const cancelBtn = document.getElementById('cancelLogout');

    logoutBtn.addEventListener('click', function(e) {
      e.preventDefault(); // Mencegah langsung ke logout
      modal.style.display = 'flex';
    });

    cancelBtn.addEventListener('click', function() {
      modal.style.display = 'none';
    });

    // Tutup modal jika klik luar area konten
    window.addEventListener('click', function(e) {
      if (e.target === modal) {
        modal.style.display = 'none';
      }
    });