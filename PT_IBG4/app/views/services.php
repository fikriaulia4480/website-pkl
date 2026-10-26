<?php 
// Include header dengan path yang benar
include_once 'partials/header.php'; 
?>
<?php
// services.php
?>
<!-- Include CSS -->
<style>
/* services.css - PROFESSIONAL VERSION */
:root {
    --primary-dark: #0c315eff;
    --primary-main: #bbc7d6ff;
    --primary-light: #ffffffff;
    --accent-gold: #b8941f;
    --accent-green: #0d9665;
    --neutral-dark: #1a202c;
    --neutral-medium: #4a5568;
    --neutral-light: #1e2a3a;
    --neutral-lighter: #2d3748;
    --white: #ffffff;
    --gradient-primary: linear-gradient(135deg, #0a1625 0%, #1a2d4d 100%);
    --gradient-dark: linear-gradient(135deg, #0a1625 0%, #1e2a3a 100%);
    --gradient-gold: linear-gradient(135deg, #b8941f 0%, #d4af37 100%);
    --gradient-blue: linear-gradient(135deg, #154a8a 0%, #1e5bb8 100%);
    --shadow-sm: 0 4px 6px -1px rgba(0, 0, 0, 0.2);
    --shadow-md: 0 10px 15px -3px rgba(0, 0, 0, 0.25);
    --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.3);
    --shadow-xl: 0 25px 50px -12px rgba(0, 0, 0, 0.4);
    --border-light: rgba(255, 255, 255, 0.1);
    --border-gold: rgba(184, 148, 31, 0.3);
}

/* ===== GLOBAL STYLES ===== */
.services-section * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

.services-section {
    background: var(--neutral-dark);
    color: var(--white);
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    line-height: 1.6;
    min-height: 100vh;
}

.services-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

/* ===== SERVICES GRID SECTION ===== */
.services-grid-section {
    padding: 80px 0;
    background: var(--neutral-dark);
    position: relative;
}

.section-intro {
    text-align: center;
    margin-bottom: 4rem;
    animation: fadeInUp 0.8s ease-out;
}

.section-badge {
    display: inline-block;
    background: var(--gradient-blue);
    color: var(--white);
    padding: 0.6rem 1.5rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin-bottom: 1.2rem;
    border: 1px solid rgba(30, 91, 184, 0.3);
    box-shadow: var(--shadow-sm);
}

.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--white);
    margin-bottom: 1.2rem;
    line-height: 1.2;
    background: linear-gradient(135deg, #ffffff 0%, #b0c4de 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.section-subtitle {
    font-size: 1.1rem;
    color: #cbd5e0;
    max-width: 550px;
    margin: 0 auto;
    line-height: 1.6;
    opacity: 0.9;
    font-weight: 400;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    animation: fadeInUp 0.8s ease-out 0.2s both;
}

.service-card {
    background: var(--neutral-light);
    padding: 2.5rem;
    border-radius: 16px;
    box-shadow: var(--shadow-sm);
    transition: all 0.3s ease;
    position: relative;
    border: 1px solid var(--border-light);
    backdrop-filter: blur(10px);
    overflow: hidden;
}

.service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: var(--gradient-blue);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.service-card:hover::before {
    transform: scaleX(1);
}

.service-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
    border-color: var(--border-gold);
}

.service-card.featured {
    background: var(--neutral-lighter);
    border: 1px solid var(--border-gold);
}

.service-card.featured::before {
    background: var(--gradient-gold);
    transform: scaleX(1);
}

.service-header {
    position: relative;
    margin-bottom: 2rem;
    text-align: center;
}

.service-icon {
    width: 80px;
    height: 80px;
    background: var(--gradient-primary);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    font-size: 2rem;
    color: var(--white);
    box-shadow: var(--shadow-md);
    transition: all 0.3s ease;
}

.service-card:hover .service-icon {
    transform: scale(1.1);
    box-shadow: 0 15px 30px rgba(21, 74, 138, 0.3);
}

.service-badge {
    position: absolute;
    top: -8px;
    right: -8px;
    background: var(--gradient-gold);
    color: var(--primary-dark);
    padding: 0.5rem 1rem;
    border-radius: 12px;
    font-size: 0.7rem;
    font-weight: 700;
    text-transform: uppercase;
    box-shadow: var(--shadow-sm);
    z-index: 2;
}

.service-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--white);
    margin-bottom: 1rem;
    text-align: center;
    line-height: 1.3;
}

.service-description {
    color: #cbd5e0;
    line-height: 1.6;
    margin-bottom: 2rem;
    text-align: center;
    font-size: 1rem;
    opacity: 0.9;
}

.service-features {
    margin-bottom: 2rem;
}

.feature-item {
    display: flex;
    align-items: center;
    margin-bottom: 0.8rem;
    color: #e2e8f0;
    font-size: 0.95rem;
    padding: 0.5rem 0;
}

.feature-check {
    color: var(--accent-green);
    font-weight: 700;
    margin-right: 1rem;
    font-size: 1.1rem;
    flex-shrink: 0;
}

.service-meta {
    display: flex;
    justify-content: space-between;
    margin-bottom: 2rem;
    padding: 1.2rem;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 12px;
    border: 1px solid var(--border-light);
}

.meta-item {
    text-align: center;
    flex: 1;
}

.meta-label {
    display: block;
    font-size: 0.8rem;
    color: #a0aec0;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 0.5rem;
    font-weight: 500;
}

.meta-value {
    display: block;
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--white);
}

.service-cta {
    display: inline-flex;
    align-items: center;
    gap: 0.8rem;
    background: var(--gradient-blue);
    color: var(--white);
    padding: 1rem 2rem;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    width: 100%;
    justify-content: center;
    border: 1px solid rgba(21, 74, 138, 0.5);
    font-size: 1rem;
}

.service-cta:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
    background: var(--primary-light);
}

/* ===== CTA SECTION ===== */
.professional-cta {
    background: var(--gradient-dark);
    padding: 80px 0;
    text-align: center;
    border-top: 1px solid var(--border-light);
}

.cta-content {
    max-width: 800px;
    margin: 0 auto;
}

.cta-badge {
    display: inline-block;
    background: var(--gradient-gold);
    color: var(--primary-dark);
    padding: 0.6rem 1.5rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 2rem;
}

.cta-content h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    background: linear-gradient(135deg, #ffffff 0%, #b0c4de 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.cta-subtitle {
    font-size: 1.1rem;
    color: #cbd5e0;
    line-height: 1.6;
    margin-bottom: 3rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.cta-features {
    display: flex;
    justify-content: center;
    gap: 2rem;
    margin-bottom: 3rem;
    flex-wrap: wrap;
}

.cta-feature {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--white);
    font-weight: 500;
}

.cta-actions {
    display: flex;
    gap: 1rem;
    justify-content: center;
    margin-bottom: 2rem;
    flex-wrap: wrap;
}

.cta-actions a {
    display: inline-flex;
    align-items: center;
    gap: 0.8rem;
    padding: 1rem 2rem;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    border: 1px solid transparent;
}

.btn-primary {
    background: var(--gradient-blue);
    color: var(--white);
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

.btn-secondary {
    background: rgba(255, 255, 255, 0.1);
    color: var(--white);
    border: 1px solid var(--border-light) !important;
}

.btn-secondary:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-2px);
}

.btn-whatsapp {
    background: #25D366;
    color: var(--white);
}

.btn-whatsapp:hover {
    background: #128C7E;
    transform: translateY(-2px);
}

.cta-note {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(184, 148, 31, 0.1);
    color: var(--accent-gold);
    padding: 1rem 1.5rem;
    border-radius: 10px;
    border: 1px solid var(--border-gold);
    font-size: 0.9rem;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* ===== RESPONSIVE DESIGN ===== */
@media (max-width: 768px) {
    .services-container {
        padding: 0 1.5rem;
    }
    
    .services-grid-section {
        padding: 60px 0;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .services-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .service-card {
        padding: 2rem;
    }
    
    .professional-cta {
        padding: 60px 0;
    }
    
    .cta-content h2 {
        font-size: 2rem;
    }
    
    .cta-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .cta-actions a {
        width: 100%;
        max-width: 300px;
        justify-content: center;
    }
    
    .cta-features {
        flex-direction: column;
        gap: 1rem;
    }
}

@media (max-width: 480px) {
    .service-card {
        padding: 1.5rem;
    }
    
    .service-meta {
        flex-direction: column;
        gap: 1rem;
    }
    
    .cta-content h2 {
        font-size: 1.8rem;
    }
}
</style>

<!-- ================= SERVICES GRID SECTION ================= -->
<section class="services-grid-section">
    <div class="services-container">
        <div class="section-intro">
            <div class="section-badge">Portfolio Layanan</div>
            <h2 class="section-title">Solusi Konstruksi Komprehensif</h2>
            <p class="section-subtitle">
                Menghadirkan inovasi dan keahlian teknis dalam setiap tahap proyek konstruksi Anda
            </p>
        </div>

        <div class="services-grid">
            <!-- Service 1: Gedung Komersial -->
            <div class="service-card">
                <div class="service-header">
                    <div class="service-badge">Korporat</div>
                </div>
                
                <h3 class="service-title">Konstruksi Gedung Komersial</h3>
                
                <p class="service-description">
                    Pembangunan perkantoran, hotel, dan fasilitas bisnis berstandar tinggi dengan efisiensi struktur dan desain modern.
                </p>

                <div class="service-features">
                    <div class="feature-item"><span class="feature-check">✓</span><span>Struktur kuat & efisien</span></div>
                    <div class="feature-item"><span class="feature-check">✓</span><span>Desain arsitektur premium</span></div>
                    <div class="feature-item"><span class="feature-check">✓</span><span>Sertifikasi green building</span></div>
                </div>

                <div class="service-meta">
                    <div class="meta-item"><span class="meta-label">Tim</span><span class="meta-value">20+ Engineer</span></div>
                    <div class="meta-item"><span class="meta-label">Garansi</span><span class="meta-value">10 Tahun</span></div>
                </div>

                <a href="index.php?page=contact&service=gedung-komersial" class="service-cta">
                    <span>Request Proposal</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Service 2: Perumahan -->
            <div class="service-card featured">
                <div class="service-header">
                    <div class="service-badge">Terlaris</div>
                </div>
                
                <h3 class="service-title">Pengembangan Perumahan</h3>
                
                <p class="service-description">
                    Pembangunan kawasan hunian nyaman, ramah lingkungan, dan bernilai investasi tinggi untuk masa depan.
                </p>

                <div class="service-features">
                    <div class="feature-item"><span class="feature-check">✓</span><span>Konsep green living</span></div>
                    <div class="feature-item"><span class="feature-check">✓</span><span>Infrastruktur lengkap</span></div>
                    <div class="feature-item"><span class="feature-check">✓</span><span>Fasilitas komunitas</span></div>
                </div>

                <div class="service-meta">
                    <div class="meta-item"><span class="meta-label">Proyek</span><span class="meta-value">50+ Cluster</span></div>
                    <div class="meta-item"><span class="meta-label">Unit</span><span class="meta-value">500+ Rumah</span></div>
                </div>

                <a href="index.php?page=contact&service=perumahan" class="service-cta">
                    <span>Konsultasi Gratis</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Service 3: Renovasi -->
            <div class="service-card">
                <div class="service-header">
                    <div class="service-badge">Ekonomis</div>
                </div>
                
                <h3 class="service-title">Renovasi & Transformasi</h3>
                
                <p class="service-description">
                    Ubah properti lama menjadi ruang modern dan fungsional tanpa mengorbankan efisiensi waktu dan biaya.
                </p>

                <div class="service-features">
                    <div class="feature-item"><span class="feature-check">✓</span><span>Desain sesuai kebutuhan</span></div>
                    <div class="feature-item"><span class="feature-check">✓</span><span>Proses cepat</span></div>
                    <div class="feature-item"><span class="feature-check">✓</span><span>Anggaran fleksibel</span></div>
                </div>

                <div class="service-meta">
                    <div class="meta-item"><span class="meta-label">Durasi</span><span class="meta-value">30–60 Hari</span></div>
                    <div class="meta-item"><span class="meta-label">Mulai Dari</span><span class="meta-value">Rp 50 Juta</span></div>
                </div>

                <a href="index.php?page=contact&service=renovasi" class="service-cta">
                    <span>Survey Gratis</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Service 4: Taman & Lanskap -->
            <div class="service-card">
                <div class="service-header">
                    <div class="service-badge">Baru</div>
                </div>
                
                <h3 class="service-title">Taman & Lanskap</h3>
                
                <p class="service-description">
                    Desain dan pembangunan taman, area hijau, dan lanskap estetis untuk lingkungan komersial maupun residensial.
                </p>

                <div class="service-features">
                    <div class="feature-item"><span class="feature-check">✓</span><span>Desain natural & modern</span></div>
                    <div class="feature-item"><span class="feature-check">✓</span><span>Drainase & irigasi optimal</span></div>
                    <div class="feature-item"><span class="feature-check">✓</span><span>Pemilihan tanaman tahan cuaca</span></div>
                </div>

                <div class="service-meta">
                    <div class="meta-item"><span class="meta-label">Tim</span><span class="meta-value">Ahli Lanskap</span></div>
                    <div class="meta-item"><span class="meta-label">Garansi</span><span class="meta-value">6 Bulan</span></div>
                </div>

                <a href="index.php?page=contact&service=taman" class="service-cta">
                    <span>Desain Sekarang</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ================= CTA SECTION ================= -->
<section class="professional-cta">
    <div class="services-container">
        <div class="cta-content">
            <div class="cta-badge">Momentum Tepat untuk Investasi</div>
            
            <h2>Wujudkan Vision Anda Bersama Kami</h2>
            
            <p class="cta-subtitle">
                Setiap proyek dimulai dengan percakapan. Mari diskusikan bagaimana kami dapat 
                membantu mewujudkan impian konstruksi Anda dengan solusi yang tepat dan bernilai.
            </p>

            <div class="cta-features">
                <div class="cta-feature">
                    <span>Gratis Konsultasi Awal</span>
                </div>
                <div class="cta-feature">
                    <span>Solusi Custom</span>
                </div>
                <div class="cta-feature">
                    <span>Respon 24 Jam</span>
                </div>
            </div>

            <div class="cta-actions">
                <a href="index.php?page=contact&source=cta-main&service=konsultasi-umum" class="btn-primary">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
                    </svg>
                    <span>Diskusi Proyek</span>
                </a>

                <a href="tel:085159127733" class="btn-secondary">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                    <span>085159127733</span>
                </a>

                <a href="https://wa.me/6285159127733?text=Halo,%20saya%20tertarik%20dengan%20layanan%20PT.%20Intishar%20Berkah%20Globalindo%20dan%20ingin%20konsultasi%20proyek%20konstruksi%20saya." class="btn-whatsapp">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
                    </svg>
                    <span>WhatsApp</span>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// Auto fill form ketika ada parameter service di URL
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const service = urlParams.get('service');
    
    if (service) {
        // Tunggu sebentar agar form fully loaded
        setTimeout(() => {
            fillFormBasedOnService(service);
        }, 500);
    }
});

function fillFormBasedOnService(service) {
    // Map service ke value dropdown yang ada di form
    const serviceMap = {
        'gedung-komersial': 'gedung',
        'perumahan': 'perumahan', 
        'renovasi': 'renovasi',
        'taman': 'taman'
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
        serviceSelect.value = serviceValue;
    }
    
    // 2. Auto isi pesan
    const messageField = document.getElementById('message');
    if (messageField && !messageField.value.trim()) {
        const serviceName = serviceNames[service] || 'Layanan Konstruksi';
        const autoMessage = generateAutoMessage(service, serviceName);
        messageField.value = autoMessage;
    }
    
    // 3. Scroll ke form
    setTimeout(() => {
        const formElement = document.getElementById('consultationForm');
        if (formElement) {
            formElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
            
            // Highlight form
            formElement.style.boxShadow = '0 0 0 3px gold';
            setTimeout(() => {
                formElement.style.boxShadow = '';
            }, 3000);
        }
    }, 1000);
}

function generateAutoMessage(service, serviceName) {
    const messages = {
        'gedung-komersial': `Halo PT. Intishar Berkah Globalindo,

Saya tertarik dengan layanan "${serviceName}" dan ingin request proposal detail.

Mohon informasikan:
- Timeline pengerjaan
- Breakdown biaya konstruksi  
- Requirements teknis
- Portfolio proyek serupa

Terima kasih.`,

        'perumahan': `Halo PT. Intishar Berkah Globalindo,

Saya ingin berkonsultasi mengenai "${serviceName}" untuk pengembangan properti.

Bisa minta:
- Feasibility study
- Masterplan development
- Budget estimation  
- Timeline development

Mohon info lebih lanjut.`,

        'renovasi': `Halo PT. Intishar Berkah Globalindo,

Saya berminat dengan layanan "${serviceName}" untuk properti yang ada.

Bisa minta:
- Free site survey
- Design concept
- Quotation renovasi
- Timeline pengerjaan

Terima kasih.`,

        'taman': `Halo PT. Intishar Berkah Globalindo,

Saya tertarik dengan layanan "${serviceName}" untuk properti saya.

Mohon informasikan:
- Konsep desain yang tersedia
- Daftar tanaman recommended  
- Budget estimation
- Maintenance plan

Saya tunggu proposalnya.`
    };
    
    return messages[service] || `Halo, saya tertarik dengan layanan "${serviceName}" dan ingin request proposal detail. Mohon informasikan lebih lanjut.`;
}
</script>