<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teh Tarik Hanaang - Landing Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/daftar_mitra.css') }}">
</head>
<body>
    <header class="navbar">
        <div class="container navbar-content">
            <a href="{{ url('/') }}" class="brand" aria-label="Teh Tarik Hanaang">
                <span class="brand-mark">
                    <img src="{{asset ('images/logokecilputih.png')}}" alt="Teh Tarik Hanaang" class="logokecil">
                </span>
                <span>Teh Tarik<br>Hanaang<small>Original Jelly Milk Tea</small></span>
            </a>

            <nav class="nav-links" aria-label="Navigasi utama">
                <a href="{{ url('/') }}">Beranda</a>
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
            <div class="container-form">
                <div class="section-heading">
                    <h2>Daftar Kemitraan Teh Hanaang</h2>
                </div>
                <form class="partner-form" id="partnerForm" novalidate>
                    <div class="form-step firstgroup" data-step="first">
                        <div class="step-header">
                            <span>1</span>
                            <div>
                                <h3>Data Calon Mitra</h3>
                                <p>Lengkapi data utama terlebih dahulu.</p>
                            </div>
                        </div>

                        <div class="form-grid">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap (Sesuai KTP)<span class="required">*</span></label>
                                <input type="text" id="nama" name="nama" class="input-underline" placeholder="Masukkan nama Anda" required>
                            </div>

                            <div class="form-group">
                                <label for="whatsapp">Nomor HP (WhatsApp)<span class="required">*</span></label>
                                <input type="tel" id="whatsapp" name="whatsapp" class="input-underline" placeholder="Contoh: 08xxxxxxxx" required>
                            </div>

                            <div class="form-group">
                                <label>Apakah sudah memiliki lokasi untuk berjualan?<span class="required">*</span></label>
                                <div class="radio-group">
                                    <label class="radio-label">
                                        <input type="radio" name="status_lokasi" value="sudah" required>
                                        <span class="radio-custom"></span>
                                        <span class="radio-text">Sudah</span>
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" name="status_lokasi" value="belum" required>
                                        <span class="radio-custom"></span>
                                        <span class="radio-text">Belum</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lokasi">Lokasi Usaha Anda<span class="required">*</span></label>
                                <div class="sub-label">Isi dengan nama Kota / Kabupaten:</div>
                                <input type="text" id="lokasi" name="lokasi" class="input-underline" placeholder="Masukkan lokasi usaha Anda" required>
                            </div>

                            <div class="form-group">
                                <label for="pulau">Pulau<span class="required">*</span></label>
                                <select id="pulau" name="pulau" class="select-custom" required>
                                    <option value="" selected disabled>Pilih Pulau</option>
                                    <option value="Jawa">Pulau Jawa</option>
                                    <option value="Luar Pulau Jawa">Luar Pulau Jawa</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-step secondgroup is-hidden" data-step="second" aria-hidden="true">
                        <div class="step-header">
                            <span>2</span>
                            <div>
                                <h3>Sumber Informasi</h3>
                                <p>Pilih minimal satu sumber informasi.</p>
                            </div>
                        </div>

                        <div class="form-group checkbox-section">
                            <label>Dari mana Anda mengetahui tentang kemitraan Teh Hanaang?<span class="required">*</span></label>
                            <div class="checkbox-grid">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="source[]" value="kerabat">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Kerabat</span>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="source[]" value="teman">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Teman</span>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="source[]" value="facebook">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Facebook</span>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="source[]" value="instagram">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Instagram</span>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="source[]" value="tiktok">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Tiktok</span>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="source[]" value="tv">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">TV</span>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="source[]" value="radio">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Mitra</span>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="source[]" value="lainnya">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Lainnya</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-step confirmation-step is-hidden" data-step="confirmation" aria-hidden="true">
                        <div class="step-header">
                            <span>3</span>
                            <div>
                                <h3>Konfirmasi Pengisian</h3>
                                <p>Cek ulang ringkasan data sebelum dikirim.</p>
                            </div>
                        </div>

                        <div class="confirmation-summary" aria-live="polite">
                            <div class="summary-row">
                                <span>Nama Lengkap</span>
                                <strong id="summaryNama">-</strong>
                            </div>
                            <div class="summary-row">
                                <span>Nomor WhatsApp</span>
                                <strong id="summaryWhatsapp">-</strong>
                            </div>
                            <div class="summary-row">
                                <span>Status Lokasi</span>
                                <strong id="summaryStatusLokasi">-</strong>
                            </div>
                            <div class="summary-row">
                                <span>Lokasi Usaha</span>
                                <strong id="summaryLokasi">-</strong>
                            </div>
                            <div class="summary-row">
                                <span>Pulau</span>
                                <strong id="summaryPulau">-</strong>
                            </div>
                            <div class="summary-row summary-row-full">
                                <span>Sumber Informasi</span>
                                <strong id="summarySource">-</strong>
                            </div>
                        </div>

                        <label class="confirm-box">
                            <input type="checkbox" id="agreement" name="agreement" required>
                            <span class="checkbox-custom"></span>
                            <span>Saya menyatakan data yang saya isi sudah benar dan siap dihubungi oleh tim Teh Hanaang.</span>
                        </label>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary" id="submitButton" disabled>Kirim Form</button>
                        </div>
                    </div>

                    <div class="form-success is-hidden" id="formSuccess" role="status">
                        Form terkirim dengan sukses! Terima kasih telah mendaftar sebagai mitra Teh Hanaang. Tim kami akan segera menghubungi Anda.
                    </div>
                </form>
            </div>
        </section>
    </main>

    <footer class="footer" id="kontak">
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
                    <li><a href="{{ url('daftar-mitra') }}">Daftar Mitra</a></li>
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
        <div class="copyright">&copy; 2024 Teh Tarik Hanaang. All Rights Reserved.</div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="{{ asset('js/mitraform.js') }}"></script>
</body>
</html>
