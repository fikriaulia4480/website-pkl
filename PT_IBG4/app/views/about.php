<?php 
// Include header dengan path yang benar
include_once 'partials/header.php'; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - PT. Intishar Berkah Globalindo | General Contractor Terpercaya</title>
    <meta name="description" content="PT. Intishar Berkah Globalindo - Perusahaan konstruksi terpercaya dengan pengalaman 10+ tahun dalam pembangunan gedung komersial, residensial, dan proyek infrastruktur.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* === VARIABLES & RESET === */
        :root {
            --primary: #0238e9ff;
            --secondary: #ffffffff;
            --accent: #575655ff;
            --light: #f8fafc;
            --dark: #0e223d;
            --gray: #94a3b8;
            --glass-bg: rgba(255, 255, 255, 0.12);
            --glass-border: rgba(255, 255, 255, 0.25);
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            --shadow-soft: 0 8px 32px rgba(0, 0, 0, 0.15);
            --shadow-strong: 0 20px 40px rgba(0, 0, 0, 0.25);
            --blur: 16px;
            --radius: 20px;
            --construction-gold: #474744ff;
            --construction-blue: #1e3a5c;
            --construction-light: #e8e6e1;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: linear-gradient(135deg, #0e223d 0%, #1b3a6f 50%, #2563eb 100%);
            background-attachment: fixed;
            color: var(--dark);
            overflow-x: hidden;
        }

        /* === CONTAINER === */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* === HERO SECTION === */
        .about-hero {
            position: relative;
            padding: 180px 0 140px;
            color: #fff;
            text-align: center;
            background: linear-gradient(135deg, #0b1f3a 0%, #2563eb 100%);
            overflow: hidden;
        }

        .about-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: 
                radial-gradient(circle at 20% 80%, rgba(255, 123, 0, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 179, 71, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(37, 99, 235, 0.1) 0%, transparent 50%);
        }

        .about-hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: url('https://www.transparenttextures.com/patterns/concrete-wall.png');
            opacity: 0.1;
        }

        .about-hero-content {
            position: relative;
            z-index: 2;
            backdrop-filter: blur(var(--blur));
            background: rgba(255, 255, 255, 0.08);
            padding: 70px 60px;
            border-radius: var(--radius);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: var(--shadow-soft);
            animation: fadeInUp 1s ease-out;
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

        .hero-badge {
            background: linear-gradient(90deg, var(--construction-orange), var(--construction-yellow));
            padding: 10px 24px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            display: inline-block;
            margin-bottom: 1.5rem;
            color: white;
            box-shadow: 0 4px 12px rgba(255, 123, 0, 0.3);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 4px 12px rgba(255, 123, 0, 0.3);
            }
            50% {
                box-shadow: 0 4px 20px rgba(255, 123, 0, 0.5);
            }
            100% {
                box-shadow: 0 4px 12px rgba(255, 123, 0, 0.3);
            }
        }

        .about-hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            background: linear-gradient(90deg, #ffffff, #cde3ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 1rem;
            line-height: 1.1;
        }

        .about-hero-subtitle {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 3rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .hero-stat {
            background: rgba(53, 52, 52, 0.15);
            border: 1px solid var(--glass-border);
            border-radius: var(--radius);
            backdrop-filter: blur(var(--blur));
            padding: 1.5rem 1rem;
            box-shadow: var(--shadow-soft);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .hero-stat::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), transparent);
            opacity: 0;
            transition: var(--transition);
        }

        .hero-stat:hover {
            transform: translateY(-6px);
            background: rgba(255, 255, 255, 0.25);
        }

        .hero-stat:hover::before {
            opacity: 1;
        }

        .hero-stat-number {
            font-size: 2.2rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 0.5rem;
        }

        .hero-stat-label {
            font-size: 0.95rem;
            opacity: 0.85;
        }

        /* === SECTION BASE === */
        .section {
            padding: 120px 0;
            position: relative;
        }

        .section-light {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(var(--blur));
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
        }

        .section-title .title-main {
            font-size: 2.8rem;
            font-weight: 700;
            background: linear-gradient(90deg, #ffffff, #cde3ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 0.75rem;
        }

        .section-title .title-sub {
            color: #e2e8f0;
            font-size: 1.15rem;
            max-width: 650px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* === CARDS (GLASS STYLE) === */
        .card {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            backdrop-filter: blur(var(--blur));
            box-shadow: var(--shadow-soft);
            border-radius: var(--radius);
            padding: 2.5rem;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), transparent);
            opacity: 0;
            transition: var(--transition);
        }

        .card:hover {
            transform: translateY(-8px);
            background: rgba(255, 255, 255, 0.22);
            box-shadow: var(--shadow-strong);
        }

        .card:hover::before {
            opacity: 1;
        }

        /* === OVERVIEW GRID === */
        .overview-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2.5rem;
        }

        .vision-mission {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .vision, .mission {
            position: relative;
        }

        .vision-icon, .mission-icon {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .vision h3, .mission h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: white;
            margin-bottom: 1rem;
        }

        .vision p, .mission p {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
        }

        .mission ul {
            color: rgba(255, 255, 255, 0.8);
            padding-left: 1.5rem;
            line-height: 1.6;
        }

        .mission li {
            margin-bottom: 0.5rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .stat-card {
            text-align: center;
            padding: 2rem 1rem;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: white;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.95rem;
        }

        /* === TEAM SECTION === */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
        }

        .team-card {
            text-align: center;
            padding: 2.5rem 1.5rem;
        }

        .member-avatar {
            width: 140px;
            height: 140px;
            margin: 0 auto 1.5rem;
            background: linear-gradient(135deg, var(--construction-orange), var(--construction-yellow));
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2.5rem;
            box-shadow: var(--shadow-soft);
            position: relative;
            overflow: hidden;
            transition: var(--transition);
        }

        .member-avatar::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: url('https://www.transparenttextures.com/patterns/concrete-wall.png');
            opacity: 0.2;
        }

        .member-name {
            font-size: 1.4rem;
            font-weight: 600;
            color: white;
            margin-bottom: 0.5rem;
        }

        .member-position {
            color: var(--construction-yellow);
            font-weight: 500;
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        .member-expertise {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* === VALUES SECTION === */
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .value-card {
            text-align: center;
            padding: 2.5rem 1.5rem;
        }

        .value-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
        }

        .value-card h3 {
            font-size: 1.4rem;
            font-weight: 600;
            color: white;
            margin-bottom: 1rem;
        }

        .value-card p {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
        }

        /* === TIMELINE === */
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, var(--construction-orange), var(--construction-yellow));
            transform: translateX(-50%);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 3rem;
            width: 45%;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .timeline-item:nth-child(1) { animation-delay: 0.1s; }
        .timeline-item:nth-child(2) { animation-delay: 0.3s; }
        .timeline-item:nth-child(3) { animation-delay: 0.5s; }
        .timeline-item:nth-child(4) { animation-delay: 0.7s; }

        .timeline-item:nth-child(odd) {
            left: 0;
        }

        .timeline-item:nth-child(even) {
            left: 55%;
        }

        .timeline-year {
            background: linear-gradient(135deg, var(--construction-orange), var(--construction-yellow));
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 1rem;
            box-shadow: 0 4px 12px rgba(255, 123, 0, 0.3);
        }

        .timeline-content {
            padding: 1.5rem;
            border-radius: var(--radius);
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(var(--blur));
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .timeline-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: white;
            margin-bottom: 0.5rem;
        }

        .timeline-desc {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
        }

        /* === CTA === */
       .about-cta {
    background: linear-gradient(135deg, #162185 0%, #545963 100%);
    color: white;
    text-align: center;
    padding: 120px 0;
    position: relative;
    overflow: hidden;
}

.about-cta {
    background: linear-gradient(135deg, #162185 0%, #545963 100%);
    color: white;
    text-align: center;
    padding: 120px 0;
    position: relative;
    overflow: hidden;
    z-index: 1;
}

.about-cta::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background:
        linear-gradient(45deg, rgba(0,0,0,0.5), rgba(0,0,0,0.4)),
        url("../images/mohd-syahril-khalid-uQGvhcQb5R8-unsplash.png") center/cover no-repeat;
    opacity: 0.35;
    z-index: -1;
    filter: brightness(0.8) contrast(1.15);
}



        .cta-content {
            max-width: 600px;
            margin: 0 auto;
            backdrop-filter: blur(var(--blur));
            background: rgba(255, 255, 255, 0.1);
            border-radius: var(--radius);
            padding: 4rem 2rem;
            box-shadow: var(--shadow-soft);
            position: relative;
            z-index: 2;
            animation: fadeInUp 1s ease-out;
        }

        .cta-title {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
            background: linear-gradient(90deg, #ffffff, #cde3ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .cta-subtitle {
            opacity: 0.9;
            margin-bottom: 2.5rem;
            line-height: 1.6;
            font-size: 1.15rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 32px;
            border-radius: 12px;
            font-weight: 500;
            font-size: 1rem;
            text-decoration: none;
            transition: var(--transition);
            cursor: pointer;
            border: none;
            gap: 8px;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: var(--transition);
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: linear-gradient(90deg, var(--construction-orange), var(--construction-yellow));
            color: white;
            box-shadow: 0 4px 12px rgba(255, 123, 0, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(255, 123, 0, 0.4);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-4px);
        }

        .cta-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* === FOOTER === */
        .footer {
            background: var(--primary);
            color: white;
            padding: 60px 0 30px;
            text-align: center;
        }

        .footer-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .footer-logo {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            background: linear-gradient(90deg, var(--construction-orange), var(--construction-yellow));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .footer-link {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-link:hover {
            color: var(--construction-yellow);
        }

        .footer-copyright {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
            margin-top: 2rem;
        }

        /* === RESPONSIVE === */
        @media (max-width: 768px) {
            .about-hero-title {
                font-size: 2.5rem;
            }
            
            .about-hero-content {
                padding: 40px 20px;
            }
            
            .overview-grid {
                grid-template-columns: 1fr;
            }
            
            .timeline::before {
                left: 30px;
            }
            
            .timeline-item {
                width: calc(100% - 80px);
                left: 80px !important;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn {
                width: 100%;
                max-width: 250px;
            }
            
            .section-title .title-main {
                font-size: 2.2rem;
            }
            
            .cta-title {
                font-size: 2.2rem;
            }
        }
    </style>
</head>
<body>

    <!-- Elegant Hero Section -->
    <section class="about-hero">
        <div class="container">
            <div class="about-hero-content">
                <div class="hero-badge">General Contractor Terpercaya</div>
                <h1 class="about-hero-title">PT. Intishar Berkah Globalindo</h1>
                <p class="about-hero-subtitle">Mitra konstruksi profesional dengan komitmen terhadap kualitas, inovasi, dan keberlanjutan sejak 2014.</p>
                
                <div class="hero-stats">
                    <div class="hero-stat">
                        <div class="hero-stat-number">7+</div>
                        <div class="hero-stat-label">Tahun Pengalaman</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-number">150+</div>
                        <div class="hero-stat-label">Proyek Terselesaikan</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-number">50+</div>
                        <div class="hero-stat-label">Tim Profesional</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-number">98%</div>
                        <div class="hero-stat-label">Kepuasan Klien</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Overview -->
    <section class="section section-light">
        <div class="container">
            <div class="section-title">
                <h2 class="title-main">Visi & Misi Perusahaan</h2>
                <p class="title-sub">Komitmen kami dalam memberikan solusi konstruksi terbaik dengan standar internasional</p>
            </div>
            
            <div class="overview-grid">
                <div class="vision-mission">
                    <div class="vision card">
                        <h3>Visi Perusahaan</h3>
                        <p>Menjadi perusahaan konstruksi terdepan yang inovatif dan terpercaya dalam menciptakan karya konstruksi berkualitas tinggi untuk mendukung pembangunan infrastruktur Indonesia yang berkelanjutan.</p>
                    </div>
                    <div class="mission card">
                        <h3>Misi Perusahaan</h3>
                        <ul>
                            <ul>
    <li>Menyediakan produk dan layanan konstruksi berkualitas tinggi yang memenuhi kebutuhan serta ekspektasi pelanggan.</li>
    <li>Menerapkan praktik pembangunan yang ramah lingkungan dan berkelanjutan demi mendukung pembangunan nasional.</li>
    <li>Memperkuat kolaborasi dengan seluruh pemangku kepentingan—pelanggan, mitra kerja, dan masyarakat—melalui komunikasi yang transparan.</li>
    <li>Menjalankan prinsip Good Corporate Governance (GCG) dan etika bisnis yang profesional, akuntabel, dan berintegritas.</li>
    <li>Mengembangkan inovasi berkelanjutan dalam teknologi dan metode konstruksi untuk meningkatkan efektivitas, efisiensi, serta nilai tambah bagi seluruh stakeholder.</li>
</ul>
</li>
                        </ul>
                    </div>
                </div>
                <div class="stats-grid">
                    <div class="stat-card card">
                        <div class="stat-number">ISO 9001:2015</div>
                        <div class="stat-label">Sertifikasi Mutu</div>
                    </div>
                    <div class="stat-card card">
                        <div class="stat-number">150+</div>
                        <div class="stat-label">Proyek Nasional</div>
                    </div>
                    <div class="stat-card card">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Profesional Bersertifikat</div>
                    </div>
                    <div class="stat-card card">
                        <div class="stat-number">0</div>
                        <div class="stat-label">Kecelakaan Kerja</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company History -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2 class="title-main">Perjalanan Perusahaan</h2>
                <p class="title-sub">Dari awal yang sederhana hingga menjadi mitra konstruksi terpercaya</p>
            </div>
            
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-year">2014</div>
                    <div class="timeline-content card">
                        <h3>Pendirian Perusahaan</h3>
                        <p>PT. Intishar Berkah Globalindo didirikan dengan fokus pada jasa konstruksi gedung komersial dan residensial.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2016</div>
                    <div class="timeline-content card">
                        <h3>Ekspansi Layanan</h3>
                        <p>Memperluas layanan ke bidang renovasi dan desain interior dengan tim profesional.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2019</div>
                    <div class="timeline-content card">
                        <h3>Proyek Skala Besar</h3>
                        <p>Pertama kali menangani proyek konstruksi gedung perkantoran 10 lantai di kawasan bisnis Jakarta.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2023</div>
                    <div class="timeline-content card">
                        <h3>Era Digital & Inovasi</h3>
                        <p>Mengintegrasikan teknologi Building Information Modeling (BIM) untuk meningkatkan efisiensi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section section-light">
        <div class="container">
            <div class="section-title">
                <h2 class="title-main">Tim Leadership</h2>
                <p class="title-sub">Didukung oleh tim profesional dengan pengalaman dan kompetensi di bidangnya</p>
            </div>
            
            <div class="team-grid">
                <div class="team-card card">
                    <h3 class="member-name">SYAHRUL HUDAYA</h3>
                    <p class="member-position">Direktur Utama</p>
                    <p class="member-expertise">Memimpin strategi perusahaan dengan visi jangka panjang, ahli dalam manajemen konstruksi dan pengembangan bisnis.</p>
                </div>
                
                <div class="team-card card">
                    <h3 class="member-name">Edie Rianto, DRS, EC</h3>
                    <p class="member-position">Komisaris</p>
                    <p class="member-expertise">Mengawasi tata kelola perusahaan dan strategi bisnis dengan latar belakang pendidikan ekonomi yang kuat.</p>
                </div>
                
                <div class="team-card card">
                    <h3 class="member-name">Qomar</h3>
                    <p class="member-position">Direktur Teknik</p>
                    <p class="member-expertise">Mengelola aspek teknis proyek dengan keahlian dalam optimasi desain dan implementasi teknologi terkini.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2 class="title-main">Nilai-Nilai Perusahaan</h2>
                <p class="title-sub">Prinsip yang menjadi fondasi dalam setiap aspek bisnis kami</p>
            </div>
            
            <div class="values-grid">
                <div class="value-card card">
                    <div class="value-icon">🤝</div>
                    <h3>Integritas</h3>
                    <p>Menjunjung tinggi kejujuran, transparansi, dan etika bisnis dalam setiap hubungan.</p>
                </div>
                <div class="value-card card">
                    <div class="value-icon">⭐</div>
                    <h3>Kualitas</h3>
                    <p>Komitmen terhadap standar kualitas tertinggi dalam material dan pengerjaan proyek.</p>
                </div>
                <div class="value-card card">
                    <div class="value-icon">⚡</div>
                    <h3>Inovasi</h3>
                    <p>Terus mengadopsi teknologi dan metode konstruksi terkini untuk efisiensi optimal.</p>
                </div>
                <div class="value-card card">
                    <div class="value-icon">🛡️</div>
                    <h3>Keselamatan</h3>
                    <p>Mengutamakan keselamatan kerja dan perlindungan lingkungan dalam setiap proyek.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="about-cta">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Siap Bekerjasama Dengan Kami?</h2>
                <p class="cta-subtitle">Konsultasikan kebutuhan konstruksi Anda dengan tim profesional kami</p>
                
                <div class="cta-buttons">
                    <a href="?page=contact" class="btn btn-primary">
                        <i class="fas fa-phone"></i>
                        Konsultasi Gratis
                    </a>
                    <a href="?page=projects" class="btn btn-secondary">
                        <i class="fas fa-building"></i>
                        Lihat Portfolio
                    </a>
                </div>
            </div>
        </div>
    </section>

</body>
</html>