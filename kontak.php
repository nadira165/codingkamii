<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Kontak Kelompok 5</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Kontak Kelompok 5</h1>
        <p>Hubungi kami kapan saja, kami siap membantu!</p>
    </header>

    <!-- Navigasi -->
    <nav class="main-menu">
        <a href="index.php">Beranda</a>
        <a href="aktivitas.php">Aktivitas</a>
        <a href="hobi.php">Hobi</a>
        <a href="kontak.php">Kontak</a>
        <a href="login.php">Login</a>
    </nav>

    <!-- Konten Kontak -->
    <main class="container">
        <div class="services-section">

            <div class="services-box">
                <img src="images/phone.png" alt="Telepon" />
                <h3>Telepon</h3>
                <p>0812-3456-7890</p>
                <a href="tel:081234567890" class="btn">Call Now</a>
            </div>

            <div class="services-box">
                <img src="images/email.png" alt="Email" />
                <h3>Email</h3>
                <p>kelompok5@webokta.com</p>
                <a href="mailto:kelompok5@webokta.com" class="btn">Send Email</a>
            </div>

            <div class="services-box">
                <img src="images/location.png" alt="Alamat" />
                <h3>Alamat</h3>
                <p>Jl. Merdeka No. 123, Bandung, Indonesia</p>
                <a href="#" class="btn">View Map</a>
            </div>

        </div>

        <!-- Form Kontak -->
        <div class="services-section" style="margin-top: 40px;">

            <div class="services-box" style="flex-basis: 100%;">
                <h3>Kirim Pesan</h3>
                <form action="#" method="post" class="contact-form" style="text-align: left;">
                    <label for="name">Nama Lengkap</label><br />
                    <input type="text" id="name" name="name" placeholder="Nama Lengkap" required style="width: 100%; margin-bottom: 15px; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" />

                    <label for="email">Email</label><br />
                    <input type="email" id="email" name="email" placeholder="Email" required style="width: 100%; margin-bottom: 15px; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" />

                    <label for="message">Pesanmu</label><br />
                    <textarea id="message" name="message" rows="6" placeholder="Tulis pesanmu di sini..." required style="width: 100%; margin-bottom: 15px; padding: 10px; border-radius: 8px; border: 1px solid #ccc;"></textarea>

                    <input type="submit" value="Kirim Pesan" class="btn" style="width: 100%; padding: 12px; font-weight: 700; border-radius: 10px;" />
                </form>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-left">
            <p>&copy; 2025 Kelompok 5 - Web Okta</p>
        </div>
        <div class="footer-right">
            <p>Disclaimer: Konten ini dibuat untuk keperluan belajar dan pengembangan web.</p>
        </div>
    </footer>
</body>
</html>
