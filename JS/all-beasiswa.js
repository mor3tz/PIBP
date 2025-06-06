document.addEventListener("DOMContentLoaded", function () {
  // === Bookmark Save Feature ===
  document.querySelectorAll(".card-save").forEach(function (btn) {
    btn.addEventListener("click", function (e) {
      e.preventDefault();
      const icon = btn.querySelector("i");
      const tooltip = btn.querySelector(".tooltip-saved");
      btn.classList.toggle("saved");

      if (btn.classList.contains("saved")) {
        icon.classList.remove("fa-regular");
        icon.classList.add("fa-solid");
        tooltip.style.opacity = "1";

        setTimeout(() => {
          tooltip.style.opacity = "0";
          btn.classList.remove("saved");
          icon.classList.remove("fa-solid");
          icon.classList.add("fa-regular");
        }, 1200);
      } else {
        icon.classList.remove("fa-solid");
        icon.classList.add("fa-regular");
      }
    });
  });

  // === Filter Toggle ===
  const toggleBtn = document.getElementById("filterToggle");
  const filterBox = document.getElementById("filterBox");

  if (toggleBtn && filterBox) {
    toggleBtn.addEventListener("click", function () {
      filterBox.classList.toggle("show");
    });
  }

  // === Filtering Feature ===
  const searchInput = document.getElementById("searchInput");
  const kategoriSelect = document.getElementById("kategoriSelect");
  const popularSelect = document.getElementById("popularSelect");
  const cards = document.querySelectorAll(".card-item");
  const noResults = document.getElementById("noResultsMessage");

  function filterCards() {
    const searchValue = searchInput?.value.toLowerCase().trim() || "";
    const kategoriValue = kategoriSelect?.value || "";
    const popularValue = popularSelect?.value || "";

    let visibleCount = 0;

    cards.forEach((card) => {
      const title = card.dataset.title?.toLowerCase() || "";
      const cardTitle =
        card.querySelector(".card-title")?.textContent.toLowerCase() || "";
      const description =
        card.querySelector(".card-description")?.textContent.toLowerCase() ||
        "";
      const badge =
        card.querySelector(".badge")?.textContent.toLowerCase() || "";

      const kategori = card.dataset.kategori;
      const popular = card.dataset.popular;

      const searchableText = `${title} ${cardTitle} ${description} ${badge}`;
      const matchSearch = searchableText.includes(searchValue);
      const matchKategori = kategoriValue === "" || kategori === kategoriValue;
      const matchPopular = popularValue === "" || popular === popularValue;

      if (matchSearch && matchKategori && matchPopular) {
        card.style.display = "flex";
        visibleCount++;
      } else {
        card.style.display = "none";
      }
    });

    if (noResults) {
      noResults.style.display = visibleCount === 0 ? "block" : "none";
    }
  }

  if (searchInput) searchInput.addEventListener("input", filterCards);
  if (kategoriSelect) kategoriSelect.addEventListener("change", filterCards);
  if (popularSelect) popularSelect.addEventListener("change", filterCards);
  filterCards();
});

// MODAL ADD BEASISWA
const modal = document.getElementById("adminModal");
const openBtn = document.getElementById("addModal");
const closeBtn = document.querySelector(".close-button");

openBtn.onclick = () => {
  modal.style.display = "block";
  const content = modal.querySelector(".modal-content");
  content.style.animation = "none"; // reset
  void content.offsetWidth; // trigger reflow
  content.style.animation = "slideUp 0.4s ease forwards";
};

closeBtn.onclick = () => {
  modal.style.display = "none";
};

// MODAL EDIT BEASISWA
const modalEditContent = document.getElementById("editBeasiswaModal");
const btn = document.getElementById("editModal");
const span = document.querySelector(".close");

btn.onclick = function () {
  modalEditContent.style.display = "block";
};

span.onclick = function () {
  modalEditContent.style.display = "none";
};

window.addEventListener("click", function (event) {
  if (modal.style.display === "block" && event.target === modal) {
    modal.style.display = "none";
  }

  if (
    modalEditContent.style.display === "block" &&
    event.target === modalEditContent
  ) {
    modalEditContent.style.display = "none";
  }
});

// KETERANGAN UPLOAD IMAGE
const imageInput = document.getElementById("imageUpload");
const statusText = document.getElementById("uploadStatus");

imageInput.addEventListener("change", function () {
  if (this.files && this.files[0]) {
    const fileName = this.files[0].name;
    statusText.textContent = `Gambar dipilih: ${fileName}`;
  } else {
    statusText.textContent = "Belum ada gambar dipilih.";
  }
});

// MODAL LOGOUT ADMIN
const logoutBtn = document.getElementById("logout-admin");
const modalAdmin = document.getElementById("logoutModal");
const cancelBtn = document.getElementById("cancelLogout");

logoutBtn.addEventListener("click", function (e) {
  e.preventDefault(); // Mencegah langsung ke logout
  modalAdmin.style.display = "flex";
});

cancelBtn.addEventListener("click", function () {
  modalAdmin.style.display = "none";
});

// Tutup modal jika klik luar area konten
window.addEventListener("click", function (e) {
  if (e.target === modalAdmin) {
    modalAdmin.style.display = "none";
  }
});


// DATA DUMMY

