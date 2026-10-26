<?php 
// Include header
include_once 'partials/header.php'; 
?>

<!-- ================= CONTACT HERO ================= -->
<section class="contact-hero">
    <div class="container">
        <div class="contact-hero-content" data-aos="fade-up">
            <h1>Konsultasi Proyek Konstruksi</h1>
            <p class="hero-subtitle">Solusi Terpadu untuk Kebutuhan Konstruksi dan Arsitektur Anda</p>
            <div class="hero-divider"></div>
            <div class="hero-badges">
                <span class="badge">✓ Profesional</span>
                <span class="badge">✓ Berpengalaman</span>
                <span class="badge">✓ Terpercaya</span>
            </div>
        </div>
    </div>
</section>

<!-- ================= CONTACT MAIN SECTION ================= -->
<section class="contact-main">
    <div class="container">
        <div class="contact-layout">
            <!-- Contact Form -->
            <div class="contact-form-section" data-aos="fade-up">
                <div class="form-header">
                    <h2>Formulir Konsultasi Profesional</h2>
                    <p>Isi data proyek Anda, tim ahli kami akan menghubungi dalam 1x24 jam</p>
                </div>

                <form id="consultationForm" class="contact-form">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="name">Nama Lengkap *</label>
                            <div class="input-with-icon">
                                <input type="text" id="name" name="name" required class="form-input" placeholder="Masukkan nama lengkap">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email *</label>
                            <div class="input-with-icon">
                                <input type="email" id="email" name="email" required class="form-input" placeholder="email@perusahaan.com">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone">Nomor WhatsApp *</label>
                            <div class="input-with-icon">
                                <input type="tel" id="phone" name="phone" required class="form-input" placeholder="085159127733">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="company">Perusahaan / Instansi</label>
                            <div class="input-with-icon">
                                <input type="text" id="company" name="company" class="form-input" placeholder="Nama perusahaan / instansi">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="service">Jenis Layanan *</label>
                            <div class="input-with-icon">
                                <select id="service" name="service" required class="form-select">
                                    <option value=""></option>
                                    <option value="konsultasi">Konsultasi Proyek Konstruksi</option>
                                    <option value="design">Design & Arsitektur</option>
                                    <option value="konstruksi">Konstruksi Bangunan</option>
                                    <option value="renovasi">Renovasi & Pembangunan Ulang</option>
                                    <option value="manajemen">Manajemen Proyek</option>
                                    <option value="struktural">Perhitungan Struktural & RAB</option>
                                    <option value="mep">MEP (Mechanical, Electrical, Plumbing)</option>
                                    <option value="interior">Desain Interior</option>
                                    <option value="landscape">Desain Landscape & Eksterior</option>
                                    <option value="gedung">Konstruksi Gedung Bertingkat</option>
                                    <option value="rumah">Konstruksi Rumah Tinggal</option>
                                    <option value="ruko">Konstruksi Ruko & Komersial</option>
                                    <option value="pabrik">Konstruksi Pabrik & Gudang</option>
                                    <option value="jalan">Konstruksi Jalan & Infrastruktur</option>
                                    <option value="jembatan">Konstruksi Jembatan</option>
                                    <option value="sipil">Pekerjaan Sipil</option>
                                    <option value="fondasi">Pekerjaan Fondasi & Pondasi</option>
                                    <option value="atap">Pemasangan Atap & Rangka Baja</option>
                                    <option value="finishing">Pekerjaan Finishing & Bangunan</option>
                                    <option value="renovasi-rumah">Renovasi Rumah Lengkap</option>
                                    <option value="renovasi-kantor">Renovasi Kantor</option>
                                    <option value="tambah-bangun">Tambah Bangun & Ekspansi</option>
                                    <option value="restorasi">Restorasi Bangunan Tua</option>
                                    <option value="pengawasan">Pengawasan & Supervisi Proyek</option>
                                    <option value="kontrol">Kontrol Kualitas & Mutu</option>
                                    <option value="scheduling">Scheduling & Time Management</option>
                                    <option value="cost-control">Cost Control & Anggaran</option>
                                    <option value="izin">Pengurusan Izin Konstruksi</option>
                                    <option value="studikelayakan">Studi Kelayakan Proyek</option>
                                    <option value="feasibility">Feasibility Study</option>
                                    <option value="masterplan">Masterplan & Site Planning</option>
                                    <option value="drainase">Perencanaan Drainase</option>
                                    <option value="utilitas">Perencanaan Utilitas Bangunan</option>
                                    <option value="green-building">Green Building & Sustainable Design</option>
                                    <option value="smart-home">Smart Home System</option>
                                    <option value="security">Sistem Keamanan & CCTV</option>
                                    <option value="ac">Instalasi AC Sentral & Split</option>
                                    <option value="listrik">Instalasi Listrik & Panel</option>
                                    <option value="air">Instalasi Air Bersih & Kotor</option>
                                    <option value="gas">Instalasi Gas & Pipa</option>
                                    <option value="fire-alarm">Sistem Fire Alarm & Hydrant</option>
                                    <option value="lift">Instalasi Lift & Eskalator</option>
                                    <option value="waterproofing">Waterproofing & Anti Bocor</option>
                                    <option value="cat">Pengecatan & Coating</option>
                                    <option value="keramik">Pemasangan Keramik & Lantai</option>
                                    <option value="plafon">Pemasangan Plafon & Partisi</option>
                                    <option value="kaca">Pemasangan Kaca & Aluminium</option>
                                    <option value="pagar">Pembangunan Pagar & Gerbang</option>
                                    <option value="carport">Pembangunan Carport & Garasi</option>
                                    <option value="kolam">Pembangunan Kolam Renang</option>
                                    <option value="taman">Pembangunan Taman & Hardscape</option>
                                    <option value="jalan-akses">Pembangunan Jalan Akses</option>
                                    <option value="parkir">Area Parkir & Drainase</option>
                                    <option value="pencahayaan">Pencahayaan & Lighting Design</option>
                                    <option value="akustik">Akustik & Sound System</option>
                                    <option value="laboratorium">Konstruksi Laboratorium</option>
                                    <option value="rumah-sakit">Konstruksi Rumah Sakit & Klinik</option>
                                    <option value="sekolah">Konstruksi Sekolah & Kampus</option>
                                    <option value="hotel">Konstruksi Hotel & Resort</option>
                                    <option value="mall">Konstruksi Mall & Retail</option>
                                    <option value="apartemen">Konstruksi Apartemen & Kondominium</option>
                                    <option value="stadion">Konstruksi Stadion & Arena Olahraga</option>
                                    <option value="masjid">Konstruksi Masjid & Tempat Ibadah</option>
                                    <option value="bunker">Konstruksi Bunker & Bawah Tanah</option>
                                    <option value="menara">Konstruksi Menara & Tower</option>
                                    <option value="dermaga">Konstruksi Dermaga & Pelabuhan</option>
                                    <option value="bandara">Konstruksi Bandara & Hanggar</option>
                                    <option value="tunnel">Konstruksi Tunnel & Terowongan</option>
                                    <option value="bendungan">Konstruksi Bendungan & Waduk</option>
                                    <option value="irigasi">Konstruksi Irigasi & Saluran Air</option>
                                    <option value="sarana">Sarana & Prasarana Umum</option>
                                    <option value="bongkar">Bongkar Bangunan & Demolisi</option>
                                    <option value="cleaning">Cleaning & Site Preparation</option>
                                    <option value="tanah">Pekerjaan Tanah & Galian</option>
                                    <option value="timber">Konstruksi Kayu & Timber</option>
                                    <option value="baja">Konstruksi Baja & Steel Structure</option>
                                    <option value="beton">Konstruksi Beton & Precast</option>
                                    <option value="bata">Pemasangan Bata & Batako</option>
                                    <option value="insulasi">Insulasi & Thermal Protection</option>
                                    <option value="anti-gempa">Konstruksi Tahan Gempa</option>
                                    <option value="maintenance">Maintenance & Perawatan Bangunan</option>
                                    <option value="inspection">Building Inspection & Assessment</option>
                                    <option value="asbuilt">As-Built Drawing & Dokumentasi</option>
                                    <option value="training">Training & Capacity Building</option>
                                    <option value="konsultan">Konsultan Teknis & Engineering</option>
                                    <option value="sertifikasi">Sertifikasi & Legalitas Bangunan</option>
                                    <option value="lainnya">Lainnya (Sebutkan di Deskripsi)</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="budget">Estimasi Budget *</label>
                            <div class="input-with-icon">
                                <select id="budget" name="budget" required class="form-select">
                                    <option value=""></option>
                                    <option value="<100jt">Dibawah 100 Juta</option>
                                    <option value="100-500jt">100 - 500 Juta</option>
                                    <option value="500jt-1m">500 Juta - 1 Miliar</option>
                                    <option value="1-5m">1 - 5 Miliar</option>
                                    <option value="5-10m">5 - 10 Miliar</option>
                                    <option value="10-20m">10 - 20 Miliar</option>
                                    <option value="20-30m">20 - 30 Miliar</option>
                                    <option value="30-40m">30 - 40 Miliar</option>
                                    <option value="40-50m">40 - 50 Miliar</option>
                                    <option value="50-75m">50 - 75 Miliar</option>
                                    <option value="75-100m">75 - 100 Miliar</option>
                                    <option value="100-150m">100 - 150 Miliar</option>
                                    <option value="150-200m">150 - 200 Miliar</option>
                                    <option value="200-250m">200 - 250 Miliar</option>
                                    <option value="250-300m">250 - 300 Miliar</option>
                                    <option value="300-400m">300 - 400 Miliar</option>
                                    <option value="400-500m">400 - 500 Miliar</option>
                                    <option value="500-600m">500 - 600 Miliar</option>
                                    <option value="600-700m">600 - 700 Miliar</option>
                                    <option value="700-800m">700 - 800 Miliar</option>
                                    <option value="800-900m">800 - 900 Miliar</option>
                                    <option value="900m-1t">900 Miliar - 1 Triliun</option>
                                    <option value="1-2t">1 - 2 Triliun</option>
                                    <option value="2-3t">2 - 3 Triliun</option>
                                    <option value="3-4t">3 - 4 Triliun</option>
                                    <option value="4-5t">4 - 5 Triliun</option>
                                    <option value="5-6t">5 - 6 Triliun</option>
                                    <option value="6-7t">6 - 7 Triliun</option>
                                    <option value="7-8t">7 - 8 Triliun</option>
                                    <option value="8-9t">8 - 9 Triliun</option>
                                    <option value="9-10t">9 - 10 Triliun</option>
                                    <option value="10-15t">10 - 15 Triliun</option>
                                    <option value="15-20t">15 - 20 Triliun</option>
                                    <option value="20-25t">20 - 25 Triliun</option>
                                    <option value="25-30t">25 - 30 Triliun</option>
                                    <option value="30-40t">30 - 40 Triliun</option>
                                    <option value="40-50t">40 - 50 Triliun</option>
                                    <option value="50-75t">50 - 75 Triliun</option>
                                    <option value="75-100t">75 - 100 Triliun</option>
                                    <option value="100-150t">100 - 150 Triliun</option>
                                    <option value="150-200t">150 - 200 Triliun</option>
                                    <option value="200-250t">200 - 250 Triliun</option>
                                    <option value="250-300t">250 - 300 Triliun</option>
                                    <option value="300-400t">300 - 400 Triliun</option>
                                    <option value="400-500t">400 - 500 Triliun</option>
                                    <option value="500-600t">500 - 600 Triliun</option>
                                    <option value="600-700t">600 - 700 Triliun</option>
                                    <option value="700-800t">700 - 800 Triliun</option>
                                    <option value="800-900t">800 - 900 Triliun</option>
                                    <option value="900t-1q">900 Triliun - 1 Kuadriliun</option>
                                    <option value=">1q">Diatas 1 Kuadriliun</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group full-width">
                            <label for="message">Deskripsi Proyek *</label>
                            <div class="input-with-icon">
                                <textarea id="message" name="message" required class="form-textarea" rows="5" placeholder="Jelaskan detail proyek yang Anda rencanakan, termasuk lokasi, luas area, dan kebutuhan spesifik lainnya..."></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-footer">
                        <button type="submit" class="submit-btn">
                            <span class="btn-text">Kirim Permintaan Konsultasi</span>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Contact Info & Map -->
            <div class="contact-info-section">
                <!-- Contact Methods -->
                <div class="contact-methods-wrapper" data-aos="fade-left">
                    <div class="info-header">
                        <h2>Hubungi Kami</h2>
                        <p>Multiple channel tersedia untuk konsultasi profesional</p>
                    </div>

                    <div class="contact-methods">
                        <div class="contact-method">
                            <div class="method-icon whatsapp">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893-.001-3.189-1.262-6.209-3.549-8.485"/>
                                </svg>
                            </div>
                            <div class="method-info">
                                <h4>WhatsApp Business</h4>
                                <p>+62 851-5912-7733</p>
                                <span class="method-status">Online • Respons Cepat</span>
                                <a href="https://wa.me/6285159127733" class="contact-link" target="_blank">
                                    Chat Sekarang
                                </a>
                            </div>
                        </div>

                        <div class="contact-method">
                            <div class="method-icon phone">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                </svg>
                            </div>
                            <div class="method-info">
                                <h4>Telepon Kantor</h4>
                                <p>+62 851-5912-7733</p>
                                <span class="method-status">Senin - Jumat, 08:00-17:00</span>
                                <a href="tel:085159127733" class="contact-link">
                                    Telepon Sekarang
                                </a>
                            </div>
                        </div>

                        <div class="contact-method">
                            <div class="method-icon email">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                </svg>
                            </div>
                            <div class="method-info">
                                <h4>Email Perusahaan</h4>
                                <p>ptintisharberkahglobalindo99@gmail.com</p>
                                <span class="method-status">Respon dalam 24 jam</span>
                                <a href="mailto:ptintisharberkahglobalindo99@gmail.com" class="contact-link">
                                    Kirim Email
                                </a>
                            </div>
                        </div>

                        <!-- Instagram 1 -->
                        <div class="contact-method">
                            <div class="method-icon instagram">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </div>
                            <div class="method-info">
                                <h4>Instagram</h4>
                                <p>@pt.ibg</p>
                                <span class="method-status">Company Activities & Behind the Scenes</span>
                                <a href="https://www.instagram.com/pt.ibg/" class="contact-link" target="_blank">
                                    Follow Instagram
                                </a>
                            </div>
                        </div>

                        <!-- Instagram 2 -->
                        <div class="contact-method">
                            <div class="method-icon instagram">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </div>
                            <div class="method-info">
                                <h4>Instagram</h4>
                                <p>@intisharberkahglobalindo2022</p>
                                <span class="method-status">Company Updates & Activities</span>
                                <a href="https://www.instagram.com/intisharberkahglobalindo2022/" class="contact-link" target="_blank">
                                    Follow Instagram
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Google Maps Section -->
                <div class="maps-section" data-aos="fade-left" data-aos-delay="200">
                    <div class="maps-header">
                        <h3>Lokasi Kantor Kami</h3>
                        <p>Kunjungi kantor kami untuk konsultasi langsung</p>
                    </div>
                    
                    <div class="maps-container">
                        <!-- Google Maps Embed -->
                        <div class="google-maps">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.747646628595!2d106.92343227579845!3d-6.175851993824093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698bd7d1c11c4b%3A0x7ab035b4c36c17f1!2sJl.%20A.%20Komp.%20DKI%20No.65%2C%20RT.11%2FRW.1%2C%20Pd.%20Klp.%2C%20Kec.%20Duren%20Sawit%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013450!5e0!3m2!1sen!2sid!4v1698765432100!5m2!1sen!2sid" 
                                width="100%" 
                                height="300" 
                                style="border:0; border-radius: 12px;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                        
                        <div class="maps-actions">
                            <a href="https://maps.google.com/?q=Jl.+A.+Komp.+DKI+No.65,+RT.11/RW.1,+Pd.+Klp.,+Kec.+Duren+Sawit,+Kota+Jakarta+Timur,+Daerah+Khusus+Ibukota+Jakarta+13450" 
                               target="_blank" 
                               class="maps-btn">
                                Buka di Google Maps
                            </a>
                            <a href="https://waze.com/ul?ll=-6.175852,106.925621&navigate=yes" 
                               target="_blank" 
                               class="maps-btn waze">
                                Buka di Waze
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Office Info -->
                <div class="office-info" data-aos="fade-left" data-aos-delay="400">
                    <div class="office-header">
                        <h3>PT.Intishar Berkah GlobalIndo</h3>
                        <p>Perusahaan Konstruksi Profesional</p>
                    </div>
                    
                    <div class="office-details">
                        <div class="detail-item">
                            <div class="detail-content">
                                <h4>Alamat Lengkap</h4>
                                <p>Jl. A. Komp. DKI No.65, RT.11/RW.1, Pd. Klp., Kec. Duren Sawit, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13450</p>
                            </div>
                        </div>
                        
                        <div class="detail-item">
                            <div class="detail-content">
                                <h4>Jam Operasional</h4>
                                <p><strong>Senin - Jumat:</strong> 08:00 - 17:00 WIB</p>
                                <p><strong>Sabtu:</strong> 08:00 - 12:00 WIB</p>
                                <p><strong>Minggu:</strong> Tutup</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= PROFESSIONAL BADGES SECTION ================= -->
<section class="badges-section">
    <div class="container">
        <div class="badges-grid">
            <div class="badge-item" data-aos="fade-up">
                <div class="badge-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                    </svg>
                </div>
                <h4>Berkualitas & Terstandarisasi</h4>
                <p>Material berkualitas tinggi dengan standar konstruksi nasional</p>
            </div>
            
            <div class="badge-item" data-aos="fade-up" data-aos-delay="100">
                <div class="badge-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>
                    </svg>
                </div>
                <h4>Berpengalaman & Terpercaya</h4>
                <p>Tim ahli dengan pengalaman bertahun-tahun di bidang konstruksi</p>
            </div>
            
            <div class="badge-item" data-aos="fade-up" data-aos-delay="200">
                <div class="badge-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M23 12l-2.44-2.78.34-3.68-3.61-.82-1.89-3.18L12 3 8.6 1.54 6.71 4.72l-3.61.81.34 3.68L1 12l2.44 2.78-.34 3.69 3.61.82 1.89 3.18L12 21l3.4 1.46 1.89-3.18 3.61-.82-.34-3.68L23 12zm-10 5h-2v-2h2v2zm0-4h-2V7h2v6z"/>
                    </svg>
                </div>
                <h4>Garansi & After Sales</h4>
                <p>Dukungan purna jual dan garansi untuk kepuasan pelanggan</p>
            </div>
        </div>
    </div>
</section>

<!-- ================= FAQ SECTION ================= -->
<section class="faq-section">
    <div class="container">
        <div class="faq-header" data-aos="fade-up">
            <h2>Pertanyaan Umum</h2>
            <p>Informasi lengkap tentang layanan profesional kami</p>
        </div>
        
        <div class="faq-grid">
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h4>Berapa lama waktu respons untuk konsultasi proyek?</h4>
                    <span class="faq-toggle">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-answer">
                    <p>Tim profesional kami akan merespons dalam 1x24 jam pada hari kerja. Untuk proyek dengan urgensi tinggi, Anda dapat menghubungi langsung melalui WhatsApp Business untuk respons lebih cepat dan langsung dengan project manager kami.</p>
                </div>
            </div>

            <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                <div class="faq-question">
                    <h4>Apakah konsultasi pertama dikenakan biaya?</h4>
                    <span class="faq-toggle">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-answer">
                    <p>Konsultasi awal sepenuhnya gratis tanpa biaya apapun. Kami akan menganalisis kebutuhan proyek Anda, melakukan studi kelayakan, dan memberikan estimasi awal tanpa kewajiban. Biaya profesional hanya berlaku setelah Anda menyetujui proposal detail yang kami ajukan.</p>
                </div>
            </div>

            <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                <div class="faq-question">
                    <h4>Berapa range budget untuk proyek konstruksi?</h4>
                    <span class="faq-toggle">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                        </svg>
                    </span>
                </div>
                <div class="faq-answer">
                    <p>Kami menangani proyek dengan berbagai skala budget, mulai dari Rp 50 juta untuk renovasi kecil hingga Rp 10 trilliun lebih  untuk proyek konstruksi besar. Setiap proyek akan disesuaikan dengan skala, kompleksitas, dan spesifikasi teknis yang dibutuhkan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= STYLES ================= -->
<style>
:root {
  /* === BRAND COLORS === */
  --primary: #009688; /* hijau toska elegan */
  --primary-dark: #00695c; /* versi gelap untuk hover */
  --primary-light: #4db6ac; /* versi terang */

  /* === ACCENT (Highlight) === */
  --accent: #f59e0b; /* emas lembut */
  --accent-dark: #b45309; /* emas tua */

  /* === TEXT COLORS === */
  --text: #1e293b; /* abu kehitaman elegan */
  --text-light: #64748b;
  --text-lighter: #94a3b8;

  /* === BACKGROUND & SURFACE === */
  --background: #f8fafc; /* putih kebiruan */
  --surface: #ffffff; /* putih bersih */
  --surface-dark: #e2e8f0; /* abu lembut */
  --border: #cbd5e1;
  --border-light: #94a3b8;

  /* === SHADOWS === */
  --shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
  --shadow-lg: 0 10px 20px rgba(0, 0, 0, 0.1);
  --shadow-xl: 0 20px 30px rgba(0, 0, 0, 0.12);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    line-height: 1.6;
    color: var(--text);
    background: var(--background);
    overflow-x: hidden;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1.5rem;
}

/* Contact Hero */
.contact-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
    color: white;
    padding: 4rem 0 3rem;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.contact-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="%23ffffff" opacity="0.1"><polygon points="1000,100 1000,0 0,100"/></svg>');
    background-size: cover;
}

.contact-hero-content {
    position: relative;
    z-index: 2;
    padding: 0 1rem;
}

.contact-hero-content h1 {
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 1rem;
    letter-spacing: -0.025em;
    line-height: 1.2;
}

.hero-subtitle {
    font-size: 1.1rem;
    opacity: 0.9;
    margin-bottom: 1.5rem;
    font-weight: 400;
    line-height: 1.5;
}

.hero-divider {
    width: 60px;
    height: 4px;
    background: var(--accent);
    margin: 0 auto 1.5rem;
    border-radius: 2px;
}

.hero-badges {
    display: flex;
    justify-content: center;
    gap: 0.75rem;
    flex-wrap: wrap;
    margin-top: 1.5rem;
}

.badge {
    background: rgba(255, 255, 255, 0.2);
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 500;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    white-space: nowrap;
}

/* Contact Main Layout */
.contact-main {
    padding: 3rem 0;
    background: var(--surface);
}

.contact-layout {
    display: flex;
    flex-direction: column;
    gap: 2.5rem;
}

/* Form Section */
.contact-form-section {
    background: var(--background);
    padding: 2rem;
    border-radius: 16px;
    box-shadow: var(--shadow);
    border: 1px solid var(--border-light);
    order: 2;
}

.form-header {
    margin-bottom: 2rem;
    text-align: center;
}

.form-header h2 {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--text);
    margin-bottom: 0.5rem;
}

.form-header p {
    color: var(--text-light);
    font-size: 1rem;
    line-height: 1.5;
}

.form-grid {
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
    margin-bottom: 1.5rem;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.form-group label {
    font-weight: 600;
    color: var(--text);
    font-size: 0.9rem;
}

.form-input, .form-select, .form-textarea {
    width: 100%;
    padding: 0.875rem;
    border: 2px solid var(--border);
    border-radius: 10px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: var(--surface);
    font-family: inherit;
}

.form-input:focus, .form-select:focus, .form-textarea:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 3px rgba(0, 150, 136, 0.1);
    transform: translateY(-1px);
}

.form-textarea {
    resize: vertical;
    min-height: 120px;
    line-height: 1.5;
}

.form-footer {
    text-align: center;
}

.submit-btn {
    width: 100%;
    padding: 1rem 1.5rem;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    margin-bottom: 1rem;
}

.submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
}

/* Contact Info Section */
.contact-info-section {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    order: 1;
}

.info-header {
    margin-bottom: 1rem;
    text-align: center;
}

.info-header h2 {
    font-size: 1.4rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
}

.info-header p {
    color: var(--text-light);
    font-size: 0.95rem;
}

.contact-methods {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.contact-method {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 1.25rem;
    background: white;
    border-radius: 12px;
    box-shadow: var(--shadow);
    border: 1px solid var(--border);
    transition: all 0.3s ease;
}

.contact-method:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
}

.method-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    flex-shrink: 0;
    font-size: 1.25rem;
}

.method-icon.whatsapp {
    background: linear-gradient(135deg, #25D366, #128C7E);
}

.method-icon.phone {
    background: linear-gradient(135deg, #3B82F6, #1D4ED8);
}

.method-icon.email {
    background: linear-gradient(135deg, #8B5CF6, #7C3AED);
}

.method-icon.instagram {
    background: linear-gradient(135deg, #E1306C, #C13584, #833AB4, #5851DB, #405DE6);
}

.method-info {
    flex: 1;
}

.method-info h4 {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 0.25rem;
}

.method-info p {
    color: var(--text);
    margin-bottom: 0.25rem;
    font-weight: 500;
    font-size: 0.9rem;
}

.method-status {
    color: var(--text-light);
    font-size: 0.8rem;
    margin-bottom: 0.5rem;
    display: block;
}

.contact-link {
    color: var(--primary);
    text-decoration: none;
    font-weight: 600;
    font-size: 0.9rem;
    transition: color 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.25rem;
}

.contact-link:hover {
    color: var(--primary-dark);
}

/* Maps Section */
.maps-section {
    background: white;
    border-radius: 12px;
    box-shadow: var(--shadow);
    border: 1px solid var(--border);
    overflow: hidden;
}

.maps-header {
    padding: 1.25rem;
    border-bottom: 1px solid var(--border);
}

.maps-header h3 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 0.25rem;
}

.maps-header p {
    color: var(--text-light);
    font-size: 0.9rem;
}

.maps-container {
    padding: 1.25rem;
}

.google-maps {
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: 1rem;
    height: 200px;
}

.maps-actions {
    display: grid;
    grid-template-columns: 1fr;
    gap: 0.75rem;
}

.maps-btn {
    padding: 0.75rem 1rem;
    border: 2px solid var(--border);
    border-radius: 8px;
    text-decoration: none;
    color: var(--text);
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
    text-align: center;
    font-size: 0.9rem;
}

.maps-btn:hover {
    border-color: var(--primary);
    color: var(--primary);
    transform: translateY(-1px);
}

.maps-btn.waze:hover {
    border-color: #33ccff;
    color: #33ccff;
}

/* Office Info */
.office-info {
    background: white;
    border-radius: 12px;
    box-shadow: var(--shadow);
    border: 1px solid var(--border);
    overflow: hidden;
}

.office-header {
    padding: 1.25rem;
    border-bottom: 1px solid var(--border);
    background: linear-gradient(135deg, var(--surface) 0%, var(--surface-dark) 100%);
}

.office-header h3 {
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 0.25rem;
    color: var(--primary-dark);
}

.office-header p {
    color: var(--text-light);
    font-weight: 500;
    font-size: 0.9rem;
}

.office-details {
    padding: 1.25rem;
}

.detail-item {
    display: flex;
    gap: 0.75rem;
    margin-bottom: 1.25rem;
}

.detail-item:last-child {
    margin-bottom: 0;
}

.detail-icon {
    width: 24px;
    height: 24px;
    color: var(--primary);
    flex-shrink: 0;
    margin-top: 0.25rem;
}

.detail-content h4 {
    font-size: 0.95rem;
    font-weight: 600;
    margin-bottom: 0.25rem;
}

.detail-content p {
    color: var(--text-light);
    line-height: 1.5;
    font-size: 0.9rem;
}

/* Badges Section */
.badges-section {
    padding: 3rem 0;
    background: var(--background);
}

.badges-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
}

.badge-item {
    text-align: center;
    padding: 2rem 1.5rem;
    background: white;
    border-radius: 12px;
    box-shadow: var(--shadow);
    border: 1px solid var(--border-light);
    transition: all 0.3s ease;
}

.badge-item:hover {
    transform: translateY(-3px);
    box-shadow: var(--shadow-lg);
}

.badge-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.25rem;
    color: white;
    font-size: 1.5rem;
}

.badge-item h4 {
    font-size: 1.1rem;
    font-weight: 700;
    margin-bottom: 0.75rem;
    color: var(--text);
}

.badge-item p {
    color: var(--text-light);
    line-height: 1.6;
    font-size: 0.9rem;
}

/* FAQ Section */
.faq-section {
    background: var(--surface);
    padding: 3rem 0;
}

.faq-header {
    text-align: center;
    margin-bottom: 2rem;
}

.faq-header h2 {
    font-size: 2rem;
    font-weight: 800;
    margin-bottom: 0.75rem;
    letter-spacing: -0.025em;
}

.faq-header p {
    color: var(--text-light);
    font-size: 1rem;
}

.faq-grid {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
}

.faq-item {
    background: white;
    border-radius: 12px;
    box-shadow: var(--shadow);
    border: 1px solid var(--border);
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-item:hover {
    box-shadow: var(--shadow-lg);
}

.faq-question {
    padding: 1.25rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.faq-question:hover {
    background: var(--surface);
}

.faq-question h4 {
    font-size: 1rem;
    font-weight: 600;
    margin: 0;
    flex: 1;
    padding-right: 1rem;
    line-height: 1.4;
}

.faq-toggle {
    color: var(--primary);
    transition: transform 0.3s ease;
    flex-shrink: 0;
    font-size: 1.2rem;
}

.faq-answer {
    padding: 0 1.25rem;
    max-height: 0;
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-answer p {
    color: var(--text-light);
    line-height: 1.6;
    padding-bottom: 1.25rem;
    margin: 0;
    font-size: 0.9rem;
}

.faq-item.active .faq-toggle {
    transform: rotate(45deg);
}

.faq-item.active .faq-answer {
    max-height: 500px;
}

/* ======================= */
/* 📱 RESPONSIVE BREAKPOINTS */
/* ======================= */

/* Tablet (768px dan lebih besar) */
@media (min-width: 768px) {
    .contact-hero {
        padding: 5rem 0 4rem;
    }
    
    .contact-hero-content h1 {
        font-size: 3rem;
    }
    
    .hero-subtitle {
        font-size: 1.25rem;
    }
    
    .contact-main {
        padding: 4rem 0;
    }
    
    .contact-layout {
        display: grid;
        grid-template-columns: 1.2fr 0.8fr;
        gap: 3rem;
    }
    
    .contact-form-section {
        order: 1;
        padding: 2.5rem;
    }
    
    .contact-info-section {
        order: 2;
    }
    
    .form-grid {
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
    }
    
    .form-group.full-width {
        grid-column: 1 / -1;
    }
    
    .badges-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .maps-actions {
        grid-template-columns: 1fr 1fr;
    }
}

/* Desktop (1024px dan lebih besar) */
@media (min-width: 1024px) {
    .contact-hero-content h1 {
        font-size: 3.5rem;
    }
    
    .contact-form-section {
        padding: 3rem;
    }
    
    .badges-grid {
        grid-template-columns: repeat(3, 1fr);
    }
    
    .contact-info-section {
        position: sticky;
        top: 2rem;
    }
}

/* HP Kecil (360px dan lebih kecil) */
@media (max-width: 360px) {
    .container {
        padding: 0 1rem;
    }
    
    .contact-hero-content h1 {
        font-size: 2rem;
    }
    
    .hero-subtitle {
        font-size: 1rem;
    }
    
    .contact-form-section,
    .contact-method,
    .maps-section,
    .office-info,
    .badge-item {
        padding: 1.5rem 1rem;
    }
    
    .method-icon {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }
    
    .badge-icon {
        width: 50px;
        height: 50px;
        font-size: 1.25rem;
    }
}

/* Animasi tambahan untuk profesionalitas */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.contact-hero-content,
.contact-form-section,
.contact-method,
.badge-item,
.faq-item {
    animation: fadeInUp 0.6s ease-out;
}

.contact-method:nth-child(2) { animation-delay: 0.1s; }
.contact-method:nth-child(3) { animation-delay: 0.2s; }
.contact-method:nth-child(4) { animation-delay: 0.3s; }
.badge-item:nth-child(2) { animation-delay: 0.1s; }
.badge-item:nth-child(3) { animation-delay: 0.2s; }

/* Loading state untuk form */
.submit-btn.loading {
    pointer-events: none;
    opacity: 0.7;
}

.submit-btn.loading::after {
    content: '';
    width: 16px;
    height: 16px;
    border: 2px solid transparent;
    border-top: 2px solid white;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

</style>
<!-- ================= JAVASCRIPT ================= -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // AOS Initialization
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });
    }

    // FAQ Functionality
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            faqItems.forEach(faq => faq.classList.remove('active'));
            if (!isActive) item.classList.add('active');
        });
    });

    // ========== AUTO FORM FILL ==========
    const urlParams = new URLSearchParams(window.location.search);
    const service = urlParams.get('service');
    
    if (service) {
        console.log('Auto filling form for service:', service);
        setTimeout(() => {
            fillFormBasedOnService(service);
        }, 1000);
    }

    // Form Submission (tetap seperti sebelumnya)
    const contactForm = document.getElementById('consultationForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const company = document.getElementById('company').value;
            const service = document.getElementById('service').value;
            const budget = document.getElementById('budget').value;
            const message = document.getElementById('message').value;
            
            // Validation
            if (!name || !email || !phone || !service || !budget || !message) {
                showNotification('Harap lengkapi semua field yang wajib diisi!', 'error');
                return;
            }
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                showNotification('Format email tidak valid!', 'error');
                return;
            }
            
            // Phone validation
            const phoneRegex = /^[\+]?[0-9\s\-\(\)]+$/;
            if (!phoneRegex.test(phone.replace(/\s/g, ''))) {
                showNotification('Format nomor telepon tidak valid!', 'error');
                return;
            }
            
            // Show loading
            const submitBtn = contactForm.querySelector('.submit-btn');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = `
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="animate-spin">
                    <path d="M12 4V1L8 5l4 4V6c3.31 0 6 2.69 6 6 0 1.01-.25 1.97-.7 2.8l1.46 1.46C19.54 15.03 20 13.57 20 12c0-4.42-3.58-8-8-8zm0 14c-3.31 0-6-2.69-6-6 0-1.01.25-1.97.7-2.8L5.24 7.74C4.46 8.97 4 10.43 4 12c0 4.42 3.58 8 8 8v3l4-4-4-4v3z"/>
                </svg>
                <span>Mengirim...</span>
            `;
            submitBtn.disabled = true;
            
            // Format WhatsApp message
            const whatsappMessage = 
`*Halo PT. Intishar Berkah Globalindo ,*

Saya ingin berkonsultasi mengenai proyek konstruksi dengan rincian berikut:

━━━━━━━━━━━━━━━━━━━
* INFORMASI PEMOHON*
Nama: ${name.trim()}
Telepon: ${phone.trim()}
Email: ${email.trim()}
${company ? `Perusahaan: ${company.trim()}\n` : ''}

* DETAIL PROYEK*
 Layanan: ${getServiceLabel(service)}
 Estimasi Budget: ${getBudgetLabel(budget)}
 Deskripsi Proyek:
${message.trim()}
━━━━━━━━━━━━━━━━━━━

Saya menunggu kabar dan tindak lanjut dari tim profesional Anda.

Terima kasih 

_Hormat saya,_  
*${name.trim()}*  
${email.trim()} | ${phone.trim()}`;

            // === Kirim ke backend (PHP) ===
            const formData = new FormData(contactForm);

            fetch('/contact/store', {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(result => {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;

                if (result.success) {
                    // Tampilkan notif dari backend
                    showNotification(result.message || '✅ Permintaan konsultasi berhasil dikirim!', 'success');

                    // Buka WhatsApp (kalau dikirim dari PHP)
                    if (result.whatsapp_url) {
                        window.open(result.whatsapp_url, '_blank');
                    }

                    contactForm.reset();
                } else {
                    showNotification(result.message || '❌ Gagal mengirim permintaan konsultasi.', 'error');
                }
            })
            .catch(err => {
                console.error(err);
                showNotification('⚠️ Terjadi kesalahan koneksi ke server.', 'error');
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            });
        });
    }
});

// ========== FUNGSI AUTO FILL ==========
function fillFormBasedOnService(service) {
    // Map service dari URL ke value dropdown yang ada di form
    const serviceMap = {
        'gedung-komersial': 'gedung', // Konstruksi Gedung Bertingkat
        'perumahan': 'perumahan',     // Pengembangan Perumahan  
        'renovasi': 'renovasi',       // Renovasi & Transformasi
        'taman': 'taman'              // Taman & Lanskap
    };
    
    const serviceNames = {
        'gedung-komersial': 'Konstruksi Gedung Komersial',
        'perumahan': 'Pengembangan Perumahan',
        'renovasi': 'Renovasi & Transformasi',
        'taman': 'Taman & Lanskap'
    };
    
    // 1. Isi dropdown service
    const serviceSelect = document.getElementById('service');
    if (serviceSelect) {
        const serviceValue = serviceMap[service] || service;
        console.log('Setting service to:', serviceValue);
        
        // Cari option yang sesuai
        for (let i = 0; i < serviceSelect.options.length; i++) {
            if (serviceSelect.options[i].value === serviceValue) {
                serviceSelect.selectedIndex = i;
                console.log('Service selected:', serviceSelect.options[i].text);
                break;
            }
        }
        
        // Trigger change event
        serviceSelect.dispatchEvent(new Event('change', { bubbles: true }));
    }
    
    // 2. Auto isi pesan
    const messageField = document.getElementById('message');
    if (messageField && !messageField.value.trim()) {
        const serviceName = serviceNames[service] || 'Layanan Konstruksi';
        const autoMessage = generateAutoMessage(service, serviceName);
        messageField.value = autoMessage;
        console.log('Auto message filled');
    }
    
    // 3. Scroll ke form dengan highlight
    setTimeout(() => {
        const formElement = document.getElementById('consultationForm');
        if (formElement) {
            formElement.scrollIntoView({ 
                behavior: 'smooth', 
                block: 'start',
                inline: 'nearest'
            });
            
            // Highlight form
            formElement.style.transition = 'all 0.5s ease';
            formElement.style.boxShadow = '0 0 0 3px #f59e0b';
            formElement.style.borderRadius = '20px';
            
            setTimeout(() => {
                formElement.style.boxShadow = '';
            }, 3000);
            
            console.log('Form scrolled into view');
        }
    }, 1500);
}

function generateAutoMessage(service, serviceName) {
    const messages = {
        'gedung-komersial': `Halo PT. Intishar Berkah Globalindo,

Saya tertarik dengan layanan "${serviceName}" dan ingin request proposal detail untuk proyek gedung komersial.

Mohon informasikan:
- Timeline pengerjaan
- Breakdown biaya konstruksi
- Requirements teknis
- Portfolio proyek gedung serupa
- Sertifikasi yang diperlukan

Terima kasih.`,

        'perumahan': `Halo PT. Intishar Berkah Globalindo,

Saya ingin berkonsultasi mengenai "${serviceName}" untuk pengembangan kawasan hunian.

Bisa minta:
- Feasibility study
- Masterplan development  
- Budget estimation
- Timeline development
- Konsep green living

Mohon info lebih lanjut.`,

        'renovasi': `Halo PT. Intishar Berkah Globalindo,

Saya berminat dengan layanan "${serviceName}" untuk properti yang ada.

Bisa minta:
- Free site survey
- Design concept
- Quotation renovasi
- Timeline pengerjaan
- Rekomendasi material

Terima kasih.`,

        'taman': `Halo PT. Intishar Berkah Globalindo,

Saya tertarik dengan layanan "${serviceName}" untuk properti saya.

Mohon informasikan:
- Konsep desain yang tersedia
- Daftar tanaman recommended
- Budget estimation
- Maintenance plan
- Sistem irigasi

Saya tunggu proposalnya.`
    };
    
    return messages[service] || `Halo, saya tertarik dengan layanan "${serviceName}" dan ingin request proposal detail. Mohon informasikan lebih lanjut mengenai layanan ini.`;
}

// Debug info
console.log('Auto form fill script loaded');
</script>

<!-- Include AOS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>