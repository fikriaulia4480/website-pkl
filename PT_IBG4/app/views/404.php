<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tidak Ditemukan - PT. Intishar Berkah Globalindo</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #0c1a32 0%, #1e3a5f 50%, #0c1a32 100%);
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        /* Background Elements */
        .bg-particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        .glass-effect {
            position: absolute;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.15) 0%, transparent 70%);
            border-radius: 50%;
            filter: blur(40px);
            z-index: 1;
        }

        .glass-effect-1 {
            top: 10%;
            left: 10%;
            animation: moveGlass1 20s ease-in-out infinite;
        }

        .glass-effect-2 {
            bottom: 10%;
            right: 10%;
            animation: moveGlass2 25s ease-in-out infinite;
        }

        @keyframes moveGlass1 {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(50px, 30px) scale(1.2); }
        }

        @keyframes moveGlass2 {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(-50px, -30px) scale(1.1); }
        }

        .error-container {
            max-width: 800px;
            padding: 4rem;
            position: relative;
            z-index: 2;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 32px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.25),
                inset 0 1px 0 rgba(255, 255, 255, 0.2),
                inset 0 -1px 0 rgba(0, 0, 0, 0.1);
            animation: containerEntrance 1s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        @keyframes containerEntrance {
            0% {
                opacity: 0;
                transform: translateY(50px) scale(0.9);
            }
            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .error-code {
            font-size: 12rem;
            font-weight: 800;
            background: linear-gradient(135deg, #87ceeb 0%, #4682b4 50%, #1e90ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            text-shadow: 0 10px 30px rgba(135, 206, 235, 0.3);
            position: relative;
            display: inline-block;
        }

        .error-code::after {
            content: '';
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, transparent, #87ceeb, transparent);
            border-radius: 2px;
        }

        .error-title {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            font-weight: 600;
            background: linear-gradient(135deg, #ffffff 0%, #b0c4de 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .error-message {
            font-size: 1.2rem;
            margin-bottom: 3rem;
            opacity: 0.9;
            line-height: 1.8;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 300;
        }

        .error-actions {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 3rem;
        }

        .btn {
            padding: 1rem 2.5rem;
            border-radius: 16px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            position: relative;
            overflow: hidden;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.6s ease;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
            color: white;
            box-shadow: 0 10px 30px rgba(37, 211, 102, 0.3);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .btn:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .btn-primary:hover {
            box-shadow: 0 20px 40px rgba(37, 211, 102, 0.4);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
        }

        .company-info {
            margin-top: 3rem;
            padding-top: 2.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
        }

        .company-info::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 2px;
            background: linear-gradient(90deg, transparent, #87ceeb, transparent);
        }

        .company-name {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            background: linear-gradient(135deg, #ffffff 0%, #b0c4de 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .company-tagline {
            opacity: 0.8;
            font-size: 1rem;
            font-weight: 300;
            letter-spacing: 0.5px;
        }

        .floating-icon {
            position: absolute;
            font-size: 2rem;
            opacity: 0.1;
            animation: floatIcon 8s ease-in-out infinite;
        }

        @keyframes floatIcon {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(20px, -20px) rotate(90deg); }
            50% { transform: translate(0, -40px) rotate(180deg); }
            75% { transform: translate(-20px, -20px) rotate(270deg); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .error-container {
                padding: 2.5rem;
                margin: 1rem;
                border-radius: 24px;
            }
            
            .error-code {
                font-size: 8rem;
            }
            
            .error-title {
                font-size: 2rem;
            }
            
            .error-message {
                font-size: 1.1rem;
            }
            
            .error-actions {
                flex-direction: column;
                align-items: center;
            }
            
            .btn {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .error-container {
                padding: 2rem;
            }
            
            .error-code {
                font-size: 6rem;
            }
            
            .error-title {
                font-size: 1.7rem;
            }
            
            .company-name {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Background Elements -->
    <div class="bg-particles" id="particles"></div>
    <div class="glass-effect glass-effect-1"></div>
    <div class="glass-effect glass-effect-2"></div>

    <!-- Floating Icons -->
    <div class="floating-icon" style="top: 20%; left: 15%;">🏗️</div>
    <div class="floating-icon" style="top: 30%; right: 10%;">🔧</div>
    <div class="floating-icon" style="bottom: 25%; left: 20%;">🏢</div>
    <div class="floating-icon" style="bottom: 15%; right: 25%;">📐</div>

    <div class="error-container">
        <div class="error-code">404</div>
        <h1 class="error-title">Halaman Tidak Ditemukan</h1>
        <p class="error-message">
            Maaf, halaman yang Anda cari tidak dapat ditemukan. 
            Mungkin halaman telah dipindahkan atau alamat URL yang dimasukkan tidak tepat.
            Silakan kembali ke halaman utama atau hubungi tim kami untuk bantuan lebih lanjut.
        </p>
        
        <div class="error-actions">
            <a href="/" class="btn btn-primary">
                <span>🏠</span>
                Kembali ke Homepage
            </a>
            <a href="?page=contact" class="btn btn-secondary">
                <span>📞</span>
                Hubungi Customer Service
            </a>
        </div>
        
        <div class="company-info">
            <div class="company-name">PT. Intishar Berkah Globalindo</div>
            <div class="company-tagline">General Contractor Professional - Membangun Masa Depan dengan Presisi dan Inovasi</div>
        </div>
    </div>

    <script>
        // Create floating particles
        document.addEventListener('DOMContentLoaded', function() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 15;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                
                // Random properties
                const size = Math.random() * 6 + 2;
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                const delay = Math.random() * 5;
                const duration = Math.random() * 3 + 3;
                
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${posX}%`;
                particle.style.top = `${posY}%`;
                particle.style.animationDelay = `${delay}s`;
                particle.style.animationDuration = `${duration}s`;
                
                particlesContainer.appendChild(particle);
            }
        });
    </script>
</body>
</html>