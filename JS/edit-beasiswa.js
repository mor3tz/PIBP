
    const tbody = document.querySelector('#editTable tbody');

const beasiswaData = [
  {
    No: 1,
    kategori: "S1",
    popular: "Ya",
    link: "https://contohbeasiswa.com",
    mulai: "2025-07-01",
    akhir: "2025-08-15",
    nama: "Beasiswa Unggulan",
    deskripsi: "Untuk mahasiswa berprestasi.",
    syarat: "IPK ≥ 3.5, aktif organisasi",
    gambar: "https://via.placeholder.com/80"
  },
  {
    No: 2,
    kategori: "SMA",
    popular: "Tidak",
    link: "https://beasiswa-sma.com",
    mulai: "2025-06-01",
    akhir: "2025-07-20",
    nama: "Beasiswa Pelajar Hebat",
    deskripsi: "Bagi pelajar SMA kelas 12.",
    syarat: "Nilai rata-rata 85, esai motivasi",
    gambar: "https://via.placeholder.com/80"
  }
];

beasiswaData.forEach(data => {
  const row = document.createElement("tr");

  row.innerHTML = `
    <td>${data.No}</td>
    <td>${data.kategori}</td>
    <td>${data.popular}</td>
    <td><a href="${data.link}" target="_blank">Kunjungi</a></td>
    <td>${data.mulai}</td>
    <td>${data.akhir}</td>
    <td>${data.nama}</td>
    <td>${data.deskripsi}</td>
    <td>${data.syarat}</td>
    <td><img src="${data.gambar}" alt="Gambar" /></td>
    <td>
      <div class="action-buttons">
        <button class="edit">Edit</button>
        <button class="delete">Hapus</button>
      </div>
    </td>
  `;

  tbody.appendChild(row);
});
