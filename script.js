// Tampilkan tombol scroll to top saat digulir ke bawah
const scrollBtn = document.createElement("button");
scrollBtn.innerText = "↑";
scrollBtn.className = "scroll-to-top";
document.body.appendChild(scrollBtn);

window.addEventListener("scroll", () => {
  if (window.scrollY > 300) {
    scrollBtn.style.display = "block";
  } else {
    scrollBtn.style.display = "none";
  }
});

scrollBtn.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

// Validasi form kontak (opsional jika pakai Google Form)
document.querySelector("form")?.addEventListener("submit", function (e) {
  const inputs = this.querySelectorAll("input, textarea");
  for (let input of inputs) {
    if (!input.value.trim()) {
      alert("Mohon isi semua kolom!");
      e.preventDefault();
      return;
    }
  }
});
