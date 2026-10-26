<?php 
// Include header dengan path yang benar
include_once 'partials/header.php'; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - PT. Intishar Berkah Globalindo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* === VARIABLES & RESET === */
        :root {
            /* === WARNA PREMIUM & MEWAH === */
            --primary: #0c1a2d;
            --primary-dark: #081120;
            --primary-light: #1e3a8a;
            --secondary: #d4af37;
            --secondary-dark: #b8941f;
            --secondary-light: #f4e4a9;
            --accent: #c9a96e;
            --accent-dark: #a88c54;
            --emerald: #10b981;
            --royal-blue: #3730a3;
            --deep-purple: #7c3aed;
            --light: #ffffff;
            --dark: #1f2937;
            --gray: #6b7280;
            --light-gray: #f8fafc;
            --border-gray: #e5e7eb;
            
            /* === EFFECTS PREMIUM === */
            --transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            --shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            --shadow-lg: 0 30px 60px rgba(0, 0, 0, 0.12);
            --shadow-xl: 0 40px 80px rgba(0, 0, 0, 0.15);
            --shadow-gold: 0 10px 30px rgba(212, 175, 55, 0.3);
            --border-radius: 20px;
            
            /* === GRADIENTS MEWAH === */
            --gradient-primary: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            --gradient-gold: linear-gradient(135deg, var(--secondary) 0%, var(--accent) 50%, var(--secondary-dark) 100%);
            --gradient-emerald: linear-gradient(135deg, var(--emerald) 0%, #059669 100%);
            --gradient-glass: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.05) 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            color: var(--dark);
            line-height: 1.7;
            overflow-x: hidden;
            background: linear-gradient(135deg, var(--light-gray) 0%, #f1f5f9 100%);
            font-weight: 400;
        }

        .container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 40px;
        }

        .text-center {
            text-align: center;
        }

        /* === PROJECTS HERO === */
        .projects-hero {
            background: var(--gradient-primary);
            color: white;
            padding: 180px 0 100px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .projects-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 80%, rgba(212, 175, 55, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(30, 58, 138, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(201, 169, 110, 0.05) 0%, transparent 50%);
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        .projects-hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
        }

        .projects-hero-title {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, #ffffff 0%, var(--secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1.1;
            letter-spacing: -1px;
            text-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .projects-hero-subtitle {
            font-size: 1.4rem;
            opacity: 0.9;
            line-height: 1.6;
            font-weight: 300;
            margin-bottom: 2rem;
        }

        .hero-stats {
            display: flex;
            justify-content: center;
            gap: 3rem;
            margin-top: 3rem;
            flex-wrap: wrap;
        }

        .hero-stat {
            text-align: center;
        }

        .hero-stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--secondary);
            display: block;
            line-height: 1;
        }

        .hero-stat-label {
            font-size: 0.9rem;
            opacity: 0.8;
            font-weight: 500;
            margin-top: 0.5rem;
        }

        /* === PROJECTS FILTER === */
        .projects-filter {
            padding: 4rem 0;
            background: var(--light);
            position: relative;
            border-bottom: 1px solid var(--border-gray);
        }

        .filter-options {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .filter-btn {
            background: var(--light);
            border: 2px solid var(--border-gray);
            padding: 16px 32px;
            border-radius: 50px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 600;
            font-size: 1rem;
            position: relative;
            overflow: hidden;
            color: var(--dark);
        }

        .filter-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--gradient-gold);
            transition: left 0.6s;
            z-index: -1;
        }

        .filter-btn:hover::before,
        .filter-btn.active::before {
            left: 0;
        }

        .filter-btn:hover,
        .filter-btn.active {
            color: white;
            border-color: var(--secondary);
            transform: translateY(-3px);
            box-shadow: var(--shadow-gold);
        }

        /* === PROJECTS GRID === */
        .projects-grid-section {
            padding: 100px 0;
            background: transparent;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 3rem;
        }

        .project-card {
            background: var(--light);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            opacity: 1;
            transform: translateY(0);
            position: relative;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }

        .project-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, transparent 100%);
            opacity: 0;
            transition: var(--transition);
            z-index: 1;
        }

        .project-card:hover {
            transform: translateY(-12px);
            box-shadow: var(--shadow-xl);
        }

        .project-card:hover::before {
            opacity: 1;
        }

        .project-image {
            position: relative;
            height: 300px;
            overflow: hidden;
        }

        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .project-card:hover .project-image img {
            transform: scale(1.1);
        }

        .project-placeholder {
            width: 100%;
            height: 100%;
            background: var(--gradient-gold);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: white;
        }

        .project-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            padding: 1.5rem;
            background: linear-gradient(to bottom, rgba(12, 26, 45, 0.9) 0%, transparent 100%);
            display: flex;
            justify-content: space-between;
            color: white;
            font-size: 0.9rem;
            font-weight: 600;
            z-index: 2;
        }

        .project-year {
            background: var(--secondary);
            padding: 0.4rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
        }

        .project-status {
            background: var(--emerald);
            padding: 0.4rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
        }

        .project-content {
            padding: 2rem;
            position: relative;
            z-index: 2;
        }

        .project-category {
            display: inline-block;
            background: var(--gradient-gold);
            color: white;
            padding: 0.5rem 1.2rem;
            border-radius: 25px;
            font-size: 0.8rem;
            font-weight: 700;
            margin-bottom: 1rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .project-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--primary);
            line-height: 1.3;
        }

        .project-description {
            color: var(--gray);
            line-height: 1.6;
            margin-bottom: 1.5rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            font-size: 0.95rem;
        }

        .project-meta {
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
            margin-bottom: 1.5rem;
            padding: 1rem 0;
            border-top: 1px solid var(--border-gray);
            border-bottom: 1px solid var(--border-gray);
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            color: var(--gray);
            font-size: 0.9rem;
        }

        .meta-icon {
            width: 32px;
            height: 32px;
            background: var(--gradient-gold);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            color: white;
        }

        .project-link {
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            color: var(--primary);
            text-decoration: none;
            font-weight: 700;
            transition: var(--transition);
            padding: 0.8rem 1.5rem;
            border: 2px solid var(--primary);
            border-radius: 50px;
            position: relative;
            overflow: hidden;
        }

        .project-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--gradient-primary);
            transition: left 0.4s;
            z-index: -1;
        }

        .project-link:hover::before {
            left: 0;
        }

        .project-link:hover {
            color: white;
            border-color: var(--primary);
            gap: 1rem;
            transform: translateX(5px);
        }

        /* === PROJECTS STATS === */
        .projects-stats {
            padding: 120px 0;
            background: var(--gradient-primary);
            position: relative;
            color: white;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 3rem;
        }

        .stat-item {
            text-align: center;
            padding: 4rem 2rem;
            background: var(--gradient-glass);
            border-radius: var(--border-radius);
            transition: var(--transition);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        .stat-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--gradient-gold);
        }

        .stat-item:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-xl);
            background: rgba(255, 255, 255, 0.15);
        }

        .stat-number {
            font-size: 4rem;
            font-weight: 800;
            color: var(--secondary);
            margin-bottom: 1rem;
            line-height: 1;
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .stat-label {
            color: rgba(255, 255, 255, 0.9);
            font-weight: 600;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* === PROJECTS CTA === */
        .projects-cta {
            background: var(--gradient-primary);
            color: white;
            padding: 120px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .projects-cta::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 30% 70%, rgba(212, 175, 55, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 70% 30%, rgba(201, 169, 110, 0.1) 0%, transparent 50%);
            animation: float 8s ease-in-out infinite;
        }

        .cta-content {
            position: relative;
            z-index: 2;
            max-width: 700px;
            margin: 0 auto;
        }

        .cta-content h2 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            line-height: 1.1;
            background: linear-gradient(135deg, #ffffff 0%, var(--secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .cta-content p {
            font-size: 1.3rem;
            opacity: 0.9;
            margin-bottom: 3rem;
            line-height: 1.6;
            font-weight: 300;
        }

        .cta-buttons {
            display: flex;
            gap: 2rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            padding: 18px 36px;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            font-size: 1.1rem;
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: var(--gradient-gold);
            color: var(--primary-dark);
            box-shadow: var(--shadow-gold);
        }

        .btn-primary:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(212, 175, 55, 0.4);
        }

        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--secondary);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.2);
        }

        /* === RESPONSIVE DESIGN === */
        @media (max-width: 1200px) {
            .container {
                padding: 0 30px;
            }
            
            .projects-grid {
                grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
                gap: 2rem;
            }
        }

        @media (max-width: 768px) {
            .projects-hero-title {
                font-size: 2.8rem;
            }
            
            .projects-hero-subtitle {
                font-size: 1.2rem;
            }
            
            .hero-stats {
                gap: 2rem;
            }
            
            .hero-stat-number {
                font-size: 2rem;
            }
            
            .filter-options {
                justify-content: flex-start;
                overflow-x: auto;
                padding-bottom: 1rem;
            }
            
            .filter-btn {
                white-space: nowrap;
                padding: 14px 24px;
            }
            
            .projects-grid {
                grid-template-columns: 1fr;
            }
            
            .cta-content h2 {
                font-size: 2.2rem;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn {
                width: 100%;
                max-width: 300px;
            }
            
            .projects-grid-section,
            .projects-stats,
            .projects-cta {
                padding: 80px 0;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 20px;
            }
            
            .projects-hero-title {
                font-size: 2.2rem;
            }
            
            .project-image {
                height: 250px;
            }
            
            .project-placeholder {
                font-size: 3rem;
            }
            
            .project-content {
                padding: 1.5rem;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .stat-number {
                font-size: 3rem;
            }
        }
    </style>
</head>
<body>

    <!-- Projects Hero Section -->
    <section class="projects-hero">
        <div class="container">
            <div class="projects-hero-content">
                <h1 class="projects-hero-title">Portfolio Prestasi Kami</h1>
                <p class="projects-hero-subtitle">Karya terbaik yang telah kami selesaikan dengan standar kualitas tertinggi dan komitmen profesional</p>
                <div class="hero-stats">
                    <div class="hero-stat">
                        <span class="hero-stat-number">150+</span>
                        <span class="hero-stat-label">Proyek Diselesaikan</span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-number">89+</span>
                        <span class="hero-stat-label">Klien Puas</span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-number">7+</span>
                        <span class="hero-stat-label">Tahun Pengalaman</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Filter -->
    <section class="projects-filter">
        <div class="container">
            <div class="filter-options">
                <button class="filter-btn active" data-filter="all">Semua Proyek</button>
                <button class="filter-btn" data-filter="residential">🏠 Residential</button>
                <button class="filter-btn" data-filter="commercial">🏢 Commercial</button>
                <button class="filter-btn" data-filter="renovation">🔨 Renovasi</button>
                <button class="filter-btn" data-filter="industrial">🏭 Industrial</button>
            </div>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="projects-grid-section">
        <div class="container">
            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card" data-category="residential">
                    <div class="project-image">
                        <div class="project-overlay">
                            <span class="project-year">2024</span>
                            <span class="project-status">✅ Selesai</span>
                        </div>
                        <?php
                        $possiblePaths1 = [
                            'public/assets/uploads/rumahdepok.png',
                            'assets/uploads/rumahdepok.png',
                            'uploads/rumahdepok.png',
                            'rumahdepok.png'
                        ];
                        
                        $imageFound1 = false;
                        foreach ($possiblePaths1 as $path) {
                            if (file_exists($path)) {
                                echo '<img src="' . $path . '" alt="Rumah Depok" loading="lazy">';
                                $imageFound1 = true;
                                break;
                            }
                        }
                        
                        if (!$imageFound1): ?>
                            <div class="project-placeholder">
                                🏠
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="project-content">
                        <span class="project-category">Residential</span>
                        <h3 class="project-title">Rumah Keluarga Modern</h3>
                        <p class="project-description">Rumah mewah dengan desain kontemporer untuk kenyamanan dan keharmonisan keluarga</p>
                        <div class="project-meta">
                            <div class="meta-item">
                                <span class="meta-icon">👤</span>
                                <span class="meta-text">PT. INTISHAR BERKAH GLOBALINDO</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-icon">📍</span>
                                <span class="meta-text">Depok, Jawa Barat</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-icon">📐</span>
                                <span class="meta-text">4,000 m²</span>
                            </div>
                        </div>
                        <a href="?page=projects&id=1" class="project-link">
                            Lihat Detail <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="project-card" data-category="residential">
                    <div class="project-image">
                        <div class="project-overlay">
                            <span class="project-year">2023</span>
                            <span class="project-status">✅ Selesai</span>
                        </div>
                        <?php
                        $possiblePaths2 = [
                            'public/assets/uploads/rusunmatraman.png',
                            'assets/uploads/rusunmatraman.png',
                            'uploads/rusunmatraman.png',
                            'rusunmatraman.png'
                        ];
                        
                        $imageFound2 = false;
                        foreach ($possiblePaths2 as $path) {
                            if (file_exists($path)) {
                                echo '<img src="' . $path . '" alt="Rumah Susun Matraman" loading="lazy">';
                                $imageFound2 = true;
                                break;
                            }
                        }
                        
                        if (!$imageFound2): ?>
                            <div class="project-placeholder">
                                🏢
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="project-content">
                        <span class="project-category">Residential</span>
                        <h3 class="project-title">Rumah Susun Matraman</h3>
                        <p class="project-description">Hunian vertikal modern dengan fasilitas lengkap untuk gaya hidup perkotaan</p>
                        <div class="project-meta">
                            <div class="meta-item">
                                <span class="meta-icon">👤</span>
                                <span class="meta-text">PT. INTISHAR BERKAH GLOBALINDO</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-icon">📍</span>
                                <span class="meta-text">Matraman, Jakarta Timur</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-icon">📐</span>
                                <span class="meta-text">10,500 m²</span>
                            </div>
                        </div>
                        <a href="?page=projects&id=2" class="project-link">
                            Lihat Detail <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="project-card" data-category="residential">
                    <div class="project-image">
                        <div class="project-overlay">
                            <span class="project-year">2024</span>
                            <span class="project-status">✅ Selesai</span>
                        </div>
                        <?php
                        $possiblePaths3 = [
                            'public/assets/uploads/rusuntni.png',
                            'assets/uploads/rusuntni.png',
                            'uploads/rusuntni.png',
                            'rusuntni.png'
                        ];
                        
                        $imageFound3 = false;
                        foreach ($possiblePaths3 as $path) {
                            if (file_exists($path)) {
                                echo '<img src="' . $path . '" alt="Rumah susun TNI" loading="lazy">';
                                $imageFound3 = true;
                                break;
                            }
                        }
                        
                        if (!$imageFound3): ?>
                            <div class="project-placeholder">
                                🏠
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="project-content">
                        <span class="project-category">Residential</span>
                        <h3 class="project-title">Rumah Susun TNI</h3>
                        <p class="project-description">Hunian Layak untuk Prajurit Tangguh, Demi Keluarga dan Negeri.</p>
                        <div class="project-meta">
                            <div class="meta-item">
                                <span class="meta-icon">👤</span>
                                <span class="meta-text">PT. INTISHAR BERKAH GLOBALINDO</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-icon">📍</span>
                                <span class="meta-text">Karawang</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-icon">📐</span>
                                <span class="meta-text">35,000 m²</span>
                            </div>
                        </div>
                        <a href="?page=projects&id=3" class="project-link">
                            Lihat Detail <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="project-card" data-category="commercial">
                    <div class="project-image">
                        <div class="project-overlay">
                            <span class="project-year">2023</span>
                            <span class="project-status">✅ Selesai</span>
                        </div>
                        <?php
                        $possiblePaths4 = [
                            'public/assets/uploads/HOTEL WHIZ.jpg',
                            'assets/uploads/HOTEL WHIZ.jpg',
                            'uploads/HOTEL WHIZ.jpg',
                            'HOTEL WHIZ.jpg'
                        ];
                        
                        $imageFound4 = false;
                        foreach ($possiblePaths4 as $path) {
                            if (file_exists($path)) {
                                echo '<img src="' . $path . '" alt="HOTEL WHIZ" loading="lazy">';
                                $imageFound4 = true;
                                break;
                            }
                        }
                        
                        if (!$imageFound4): ?>
                            <div class="project-placeholder">
                                🏨
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="project-content">
                        <span class="project-category">Commercial</span>
                        <h3 class="project-title">HOTEL WHIZ</h3>
                        <p class="project-description">Renovasi total hotel bintang 4 dengan penambahan fasilitas modern dan desain interior baru.</p>
                        <div class="project-meta">
                            <div class="meta-item">
                                <span class="meta-icon">👤</span>
                                <span class="meta-text">HOTEL WHIZ</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-icon">📍</span>
                                <span class="meta-text">Lampung</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-icon">📐</span>
                                <span class="meta-text">60,000 m²</span>
                            </div>
                        </div>
                        <a href="?page=projects&id=4" class="project-link">
                            Lihat Detail <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="project-card" data-category="residential">
                    <div class="project-image">
                        <div class="project-overlay">
                            <span class="project-year">2024</span>
                            <span class="project-status">✅ Selesai</span>
                        </div>
                        <?php
                        $possiblePaths5 = [
                            'public/assets/uploads/RUSUN PORLES NATUNA.jpg',
                            'assets/uploads/RUSUN PORLES NATUNA.jpg',
                            'uploads/RUSUN PORLES NATUNA.jpg',
                            'RUSUN PORLES NATUNA.jpg'
                        ];
                        
                        $imageFound5 = false;
                        foreach ($possiblePaths5 as $path) {
                            if (file_exists($path)) {
                                echo '<img src="' . $path . '" alt="RUMAH SUSUN POLRES" loading="lazy">';
                                $imageFound5 = true;
                                break;
                            }
                        }
                        
                        if (!$imageFound5): ?>
                            <div class="project-placeholder">
                                🏠
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="project-content">
                        <span class="project-category">Residential</span>
                        <h3 class="project-title">Rumah Susun POLRES</h3>
                        <p class="project-description">Pembangunan apartemen tinggi 30 lantai di kawasan strategis daerah Natuna.</p>
                        <div class="project-meta">
                            <div class="meta-item">
                                <span class="meta-icon">👤</span>
                                <span class="meta-text">PT. INTISHAR BERKAH GLOBALINDO</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-icon">📍</span>
                                <span class="meta-text">Natuna</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-icon">📐</span>
                                <span class="meta-text">28,000 m²</span>
                            </div>
                        </div>
                        <a href="?page=projects&id=5" class="project-link">
                            Lihat Detail <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="project-card" data-category="residential">
                    <div class="project-image">
                        <div class="project-overlay">
                            <span class="project-year">2023</span>
                            <span class="project-status">✅ Selesai</span>
                        </div>
                        <?php
                        $possiblePaths6 = [
                            'public/assets/uploads/RUSUS KAB.KULON PROGO.jpg',
                            'assets/uploads/RUSUS KAB.KULON PROGO.jpg',
                            'uploads/RUSUS KAB.KULON PROGO.jpg',
                            'RUSUS KAB.KULON PROGO.jpg'
                        ];
                        
                        $imageFound6 = false;
                        foreach ($possiblePaths6 as $path) {
                            if (file_exists($path)) {
                                echo '<img src="' . $path . '" alt="RUMAH SUSUN" loading="lazy">';
                                $imageFound6 = true;
                                break;
                            }
                        }
                        
                        if (!$imageFound6): ?>
                            <div class="project-placeholder">
                                🏠
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="project-content">
                        <span class="project-category">Residential</span>
                        <h3 class="project-title">Rumah Susun Kulon Progo</h3>
                        <p class="project-description">Kami Tak Sekadar Membangun Rumah Susun, Kami Menciptakan Ruang Hidup Berkualitas</p>
                        <div class="project-meta">
                            <div class="meta-item">
                                <span class="meta-icon">👤</span>
                                <span class="meta-text">PT. INTISHAR BERKAH GLOBALINDO</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-icon">📍</span>
                                <span class="meta-text">Kabupaten Progo</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-icon">📐</span>
                                <span class="meta-text">20,000 m²</span>
                            </div>
                        </div>
                        <a href="?page=projects&id=6" class="project-link">
                            Lihat Detail <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="projects-stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">150+</div>
                    <div class="stat-label">Proyek Diselesaikan</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">89+</div>
                    <div class="stat-label">Klien Puas</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">7+</div>
                    <div class="stat-label">Tahun Pengalaman</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">99%</div>
                    <div class="stat-label">Rate Kepuasan</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="projects-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Siap Mewujudkan Proyek Impian Anda?</h2>
                <p>Konsultasikan visi konstruksi Anda dengan tim profesional kami yang berpengalaman</p>
                <div class="cta-buttons">
                    <a href="?page=contact" class="btn btn-primary">
                        <i class="fas fa-gem"></i>
                        Konsultasi Premium
                    </a>
                    <a href="tel:+6285159127733" class="btn btn-secondary">
                        <i class="fas fa-phone"></i>
                        Telepon Eksklusif
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>
    // Enhanced Filter Functionality dengan Animasi
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const projectCards = document.querySelectorAll('.project-card');
        
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');
                
                const filterValue = this.getAttribute('data-filter');
                
                projectCards.forEach((card, index) => {
                    const cardCategory = card.getAttribute('data-category').toLowerCase();
                    
                    if (filterValue === 'all' || cardCategory === filterValue) {
                        setTimeout(() => {
                            card.style.display = 'block';
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0)';
                            }, 50);
                        }, index * 100);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // Add scroll animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all project cards
        projectCards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    });
    </script>

</body>
</html>