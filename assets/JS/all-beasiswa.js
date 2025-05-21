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

  // === Back to Top Button ===
  const backToTopBtn = document.getElementById("backToTopBtn");

  if (backToTopBtn) {
    window.addEventListener("scroll", () => {
      backToTopBtn.style.display = window.scrollY > 90 ? "block" : "none";
    });

    backToTopBtn.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  }
});
