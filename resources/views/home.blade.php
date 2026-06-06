<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teh Tarik Hanaang - Landing Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <header class="navbar">
        <div class="container navbar-content">
            <a href="#beranda" class="brand" aria-label="Teh Tarik Hanaang">
                <span class="brand-mark">
                    <img src="{{asset ('images/logokecilputih.png')}}" alt="Teh Tarik Hanaang" class="logokecil">
                </span>
                <span>Teh Tarik<br>Hanaang<small>Original Jelly Milk Tea</small></span>
            </a>

            <nav class="nav-links" aria-label="Navigasi utama">
                <a href="#beranda">Beranda</a>
                <a href="#produk">Produk Kami</a>
                <a href="#kemitraan">Langkah Mitra</a>
                <a href="#faq">FAQ</a>
            </nav>

            <div class="nav-actions">
                <a class="btn btn-primary" href="{{ url('daftar-mitra') }}">Daftar Mitra</a>
                <a class="whatsapp-mini" href="https://wa.me/6281212182958" aria-label="WhatsApp">
                    <img src="{{ asset('images/logowa.png') }}" alt="WhatsApp">
                </a>
            </div>
        </div>
    </header>

    <main class="page">
        <section class="page-section hero" id="beranda">
            <div class="container hero-grid">
                <div class="hero-copy fade-in-element">
                    <p class="eyebrow">Peluang Usaha Menguntungkan</p>
                    <h1>Jadi Bagian dari Jaringan Distribusi <span>Teh Tarik Hanaang</span></h1>
                    <p>Teh tarik dengan cita rasa khas dan berkualitas, siap menemani setiap momen dan peluang bisnis Anda.</p>
                    <div class="hero-buttons">
                        <a class="btn btn-primary" href="{{ url('daftar-mitra') }}">Daftar Jadi Mitra</a>
                        <a class="btn btn-light" href="https://wa.me/6281212182958">Hubungi via WhatsApp</a>
                    </div>
                </div>

                <div class="hero-media fade-in-element">
                    <img class="cup-image hero-cup" src="{{ asset('images/teh-tarik-cup.png') }}" alt="Cup Teh Tarik Hanaang">
                </div>
            </div>
        </section>

        <section class="page-section product-section" id="produk">
            <div class="container">
                <div class="section-heading fade-in-element">
                    <p class="eyebrow">Produk Kami</p>
                    <h2>Teh Tarik Hanaang</h2>
                </div>

                <div class="product-layout fade-in-element">
                    <div class="product-media">
                        <img class="cup-image product-cup" src="{{ asset('images/teh-tarik-cup.png') }}" alt="Cup Teh Tarik Hanaang">
                    </div>

                    <div class="product-copy">
                        <p>Teh tarik dengan perpaduan teh pilihan, susu berkualitas, dan tekstur lembut yang bikin nagih. Satu rasa, sejuta peluang untuk usaha harian.</p>
                        <div class="product-tags">
                            <article class="tag"><span>01</span><strong>Rasa Khas</strong><small>Teh tarik autentik</small></article>
                            <article class="tag"><span>02</span><strong>Tekstur Lembut</strong><small>Dengan jelly premium</small></article>
                            <article class="tag"><span>03</span><strong>Sajian Praktis</strong><small>Cepat dan mudah</small></article>
                            <article class="tag"><span>04</span><strong>Cocok untuk Semua</strong><small>Warung, kantin, cafe</small></article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section steps-section" id="kemitraan">
            <div class="container">
                <div class="section-heading fade-in-element">
                    <p class="eyebrow">Cara Bergabung</p>
                    <h2>Langkah Mudah Menjadi Mitra</h2>
                </div>

                <div class="steps">
                    <article class="step fade-in-element"><span>1</span><h3>Isi Form Pendaftaran</h3><p>Lengkapi data diri dan kebutuhan usaha Anda.</p></article>
                    <article class="step fade-in-element"><span>2</span><h3>Admin Menghubungi</h3><p>Tim kami akan menghubungi Anda melalui WhatsApp.</p></article>
                    <article class="step fade-in-element"><span>3</span><h3>Diskusi Kerja Sama</h3><p>Menyesuaikan sistem dan kebutuhan usaha Anda.</p></article>
                    <article class="step fade-in-element"><span>4</span><h3>Mulai Distribusi</h3><p>Produk kami kirimkan, siap untuk dijual.</p></article>
                    <article class="step fade-in-element"><span>5</span><h3>Usaha Makin Untung</h3><p>Jual mudah, laris manis, keuntungan maksimal.</p></article>
                </div>
            </div>
        </section>

        <section class="page-section faq-section" id="faq">
            <div class="container">
                <div class="section-heading fade-in-element">
                    <p class="eyebrow">Pertanyaan yang Sering Ditanyakan</p>
                    <h2>FAQ</h2>
                </div>

                <div class="faq-grid">
                    <details class="fade-in-element">
                        <summary>Bagaimana cara menjadi mitra Teh Tarik Hanaang?</summary>
                        <p>Isi form pendaftaran, lalu admin kami akan menghubungi Anda untuk proses berikutnya.</p>
                    </details>
                    <details class="fade-in-element">
                        <summary>Apakah sistemnya bisa titip jual?</summary>
                        <p>Bisa. Kami menyediakan beberapa pilihan kerja sama sesuai kebutuhan usaha Anda.</p>
                    </details>
                    <details class="fade-in-element">
                        <summary>Apakah harus membeli stok dalam jumlah besar?</summary>
                        <p>Jumlah stok bisa dibicarakan dengan admin agar sesuai kapasitas penjualan awal.</p>
                    </details>
                    <details class="fade-in-element">
                        <summary>Wilayah mana saja yang bisa bergabung?</summary>
                        <p>Kemitraan terbuka untuk berbagai wilayah dan akan disesuaikan dengan jalur distribusi.</p>
                    </details>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer fade-in-element" id="kontak">
        <div class="container footer-grid">
            <div>
                <a href="#beranda" class="brand">
                    <span class="brand-mark">
                        <img src="{{asset ('images/logokecilhitam.png')}}" alt="Teh Tarik Hanaang" class="logokecil">
                    </span>
                    <span>Teh Tarik<br>Hanaang<small>Original Jelly Milk Tea</small></span>
                </a>
                <p>Teh tarik dengan rasa khas dan kualitas terbaik, siap menjadi bagian dari kesuksesan usaha Anda.</p>
            </div>
            <div>
                <h3>Menu</h3>
                <ul>
                    <li><a href="#beranda">Beranda</a></li>
                    <li><a href="#produk">Produk Kami</a></li>
                    <li><a href="#kemitraan">Langkah Mitra</a></li>
                    <li><a href="#daftar">Daftar Mitra</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>
            </div>
            <div>
                <h3>Hubungi Kami</h3>
                <p>WhatsApp: 0812-3456-7890<br>Instagram: @tehtarikhanaang<br>Email: info@tehtarikhanaang.com</p>
            </div>
            <div class="chat-box">
                <a class="whatsapp-float" href="https://wa.me/6281212182958" aria-label="Chat WhatsApp">
                    <img src="{{ asset('images/logowa.png') }}" alt="WhatsApp">
                </a>
                <span>Chat dengan kami<br>via WhatsApp</span>
            </div>
        </div>
        <div class="copyright">&copy; 2026 Teh Tarik Hanaang. All Rights Reserved.</div>
    </footer>
    <script src="{{ asset('js/fade.js') }}" defer></script>
</body>
</html>
