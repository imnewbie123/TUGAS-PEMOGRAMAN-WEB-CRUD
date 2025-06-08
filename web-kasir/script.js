document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("form");
  form.addEventListener("submit", function (e) {
    const nama = form.nama_barang.value.trim();
    const harga = form.harga.value;
    const jumlah = form.jumlah.value;

    if (!nama || harga <= 0 || jumlah <= 0) {
      alert("Harap isi semua data dengan benar.");
      e.preventDefault();
    }
  });

  const hapusLinks = document.querySelectorAll(".hapus-link");
  hapusLinks.forEach(link => {
    link.addEventListener("click", function (e) {
      if (!confirm("Yakin ingin menghapus data ini?")) {
        e.preventDefault();
      }
    });
  });
});