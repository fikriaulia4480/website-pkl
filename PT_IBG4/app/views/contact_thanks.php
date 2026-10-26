<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih - Konfirmasi Pesan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #0b1f3a;
            --secondary: #2563eb;
            --accent: #4f9efc;
            --success: #10b981;
            --light: #f8fafc;
            --dark: #0e223d;
            --gray: #94a3b8;
            --glass-bg: rgba(255, 255, 255, 0.12);
            --glass-border: rgba(255, 255, 255, 0.25);
            --transition: all 0.4s ease;
            --shadow-soft: 0 8px 24px rgba(0, 0, 0, 0.15);
            --blur: 16px;
            --radius: 20px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #0e223d, #1b3a6f, #2563eb);
            background-attachment: fixed;
            color: var(--dark);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Header Styles */
        .header {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(var(--blur));
            border-bottom: 1px solid var(--glass-border);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo i {
            color: var(--accent);
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
        }

        .nav-link:hover {
            color: white;
        }

        /* Main Content */
        .section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 0;
        }

        .confirmation-card {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            backdrop-filter: blur(var(--blur));
            box-shadow: var(--shadow-soft);
            border-radius: var(--radius);
            padding: 3rem;
            text-align: center;
            max-width: 600px;
            width: 100%;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .confirmation-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--success), var(--accent));
        }

        .confirmation-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            background: linear-gradient(135deg, var(--success), #34d399);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2.5rem;
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.3);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.5);
            }
            70% {
                box-shadow: 0 0 0 15px rgba(16, 185, 129, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0);
            }
        }

        .confirmation-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: white;
            margin-bottom: 1rem;
        }

        .confirmation-message {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .confirmation-details {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            text-align: left;
        }

        .detail-item {
            display: flex;
            justify-content: space-between;
            padding: 0.5rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .detail-item:last-child {
            border-bottom: none;
        }

        .detail-label {
            color: rgba(255, 255, 255, 0.7);
        }

        .detail-value {
            color: white;
            font-weight: 500;
        }

        .btn-group {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 24px;
            border-radius: 12px;
            font-weight: 500;
            font-size: 1rem;
            text-decoration: none;
            transition: var(--transition);
            cursor: pointer;
            border: none;
            gap: 8px;
        }

        .btn-primary {
            background: var(--secondary);
            color: white;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(37, 99, 235, 0.4);
            background: #1d4ed8;
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
        }

        /* Footer Styles */
        .footer {
            background: rgba(11, 31, 58, 0.8);
            color: white;
            padding: 2rem 0;
            text-align: center;
            margin-top: auto;
        }

        .footer-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
        }

        .footer-link {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-link:hover {
            color: var(--accent);
        }

        .footer-copyright {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
        }

        /* Animasi */
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

        .confirmation-card {
            animation: fadeInUp 0.6s ease-out;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }
            
            .nav-links {
                gap: 1.5rem;
            }
            
            .confirmation-card {
                padding: 2rem 1.5rem;
            }
            
            .confirmation-title {
                font-size: 1.8rem;
            }
            
            .btn-group {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <a href="/" class="logo">
                    <i class="fas fa-building"></i>
                    <span>BuildCorp</span>
                </a>
                <nav class="nav-links">
                    <a href="/" class="nav-link">Beranda</a>
                    <a href="/about" class="nav-link">Tentang Kami</a>
                    <a href="/services" class="nav-link">Layanan</a>
                    <a href="/contact" class="nav-link">Kontak</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="section">
        <div class="container">
            <div class="confirmation-card">
                <div class="confirmation-icon">
                    <i class="fas fa-check"></i>
                </div>
                <h1 class="confirmation-title">Terima Kasih!</h1>
                <p class="confirmation-message">
                    Pesan Anda sudah kami terima. Tim kami akan menghubungi Anda dalam waktu 1-2 hari kerja.
                </p>
                
                <div class="confirmation-details">
                    <div class="detail-item">
                        <span class="detail-label">Nomor Referensi:</span>
                        <span class="detail-value">#CT-<?php echo rand(1000, 9999); ?></span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Tanggal:</span>
                        <span class="detail-value"><?php echo date('d M Y'); ?></span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Status:</span>
                        <span class="detail-value" style="color: var(--success);">
                            <i class="fas fa-circle" style="font-size: 0.7rem;"></i> Diterima
                        </span>
                    </div>
                </div>
                
                <div class="btn-group">
                    <a href="/" class="btn btn-primary">
                        <i class="fas fa-home"></i> Kembali ke Beranda
                    </a>
                    <a href="/contact" class="btn btn-secondary">
                        <i class="fas fa-envelope"></i> Kirim Pesan Lain
                    </a>
                </div>
            </div>
        </div>
    </main>
    <!-- contact.php -->
<form action="contact_process.php" method="post">
  <input type="text" name="name" placeholder="Nama" required>
  <input type="email" name="email" placeholder="Email" required>
  <textarea name="message" placeholder="Pesan" required></textarea>
  <button type="submit">Kirim</button>
</form>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-links">
                    <a href="/privacy" class="footer-link">Kebijakan Privasi</a>
                    <a href="/terms" class="footer-link">Syarat & Ketentuan</a>
                    <a href="/contact" class="footer-link">Hubungi Kami</a>
                </div>
                <p class="footer-copyright">
                    &copy; 2023 BuildCorp Construction. Semua hak dilindungi.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>