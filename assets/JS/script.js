
document.addEventListener('DOMContentLoaded', function () {
  const toggleBtn = document.getElementById('toggleFilter');
  const modalFilter = document.getElementById('modalFilter');
  const searchInput = document.getElementById('search');
  const labelSelect = document.getElementById('labelFilter');
  const kategoriSelect = document.getElementById('kategori');
  const noResult = document.getElementById('noResultMessage');

  // Toggle filter modal dengan animasi
  toggleBtn.addEventListener('click', () => {
    const isShown = modalFilter.classList.contains('show');
    if (isShown) {
      modalFilter.classList.remove('show');
      setTimeout(() => {
        modalFilter.style.display = 'none';
      }, 300);
    } else {
      modalFilter.style.display = 'block';
      setTimeout(() => {
        modalFilter.classList.add('show');
      }, 10);
    }
  });

  // Fungsi untuk filter kartu
  function filterCards() {
    const searchVal = searchInput.value.toLowerCase();
    const labelVal = labelSelect.value;
    const kategoriVal = kategoriSelect.value;

    let anyVisible = false;

    document.querySelectorAll('.card').forEach(card => {
      const title = card.querySelector('h3').innerText.toLowerCase();
      const label = card.getAttribute('data-label');
      const kategori = card.getAttribute('data-kategori');

      const matchSearch = title.includes(searchVal);
      const matchLabel = !labelVal || label === labelVal;
      const matchKategori = !kategoriVal || kategori === kategoriVal;

      const isVisible = matchSearch && matchLabel && matchKategori;

      card.style.display = isVisible ? 'block' : 'none';

      if (isVisible) anyVisible = true;
    });

    // Tampilkan pesan jika tidak ada hasil
    noResult.style.display = anyVisible ? 'none' : 'block';
  }

  // Event listener: pencarian dan dropdown langsung memfilter
  searchInput.addEventListener('input', filterCards);
  labelSelect.addEventListener('change', filterCards);
  kategoriSelect.addEventListener('change', filterCards);
});


