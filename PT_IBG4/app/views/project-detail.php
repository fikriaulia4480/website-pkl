<?php require_once 'partials/header.php'; ?>

<style>
    /* RESET & BASE STYLES */
    .project-detail-page {
        min-height: 100vh;
        background: linear-gradient(135deg, #0c1120 0%, #1a2a4d 50%, #0c1120 100%);
        color: white;
        font-family: 'Inter', sans-serif;
        margin: 0;
        padding: 0;
    }

    /* MAIN CONTAINER - FULL WIDTH */
    .project-container {
        width: 100%;
        max-width: 100%;
        margin: 0;
        padding: 0;
    }

    /* HERO SECTION - FULL WIDTH */
    .project-hero {
        width: 100%;
        padding: 6rem 2rem;
        text-align: center;
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(20px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    /* CONTENT SECTION - MATCH HEADER WIDTH */
    .project-content {
        max-width: 1400px;
        margin: 0 auto;
        padding: 2rem;
    }

    /* GRID LAYOUT - IMPROVED */
    .project-grid {
        display: grid;
        grid-template-columns: 1.2fr 0.8fr;
        gap: 3rem;
        margin-bottom: 4rem;
        align-items: start;
    }

    /* GLASS CARDS - CONSISTENT STYLING */
    .glass-card {
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(25px);
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.15);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        overflow: hidden;
    }

    .glass-card:hover {
        background: rgba(255, 255, 255, 0.12);
        transform: translateY(-8px);
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
    }

    /* STATS GRID - IMPROVED */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1.5rem;
        max-width: 600px;
        margin: 2rem auto 0;
    }

    .stat-card {
        text-align: center;
        padding: 1.5rem;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .stat-number {
        font-size: 2.5rem;
        font-weight: 700;
        background: linear-gradient(135deg, #FFD700, #ffffff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 0.5rem;
    }

    /* BUTTON STYLES */
    .luxury-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.8rem;
        padding: 1rem 2rem;
        background: linear-gradient(135deg, #0066ff, #003399);
        color: white;
        text-decoration: none;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.4s ease;
        border: none;
        cursor: pointer;
        box-shadow: 0 8px 25px rgba(0, 102, 255, 0.3);
        font-size: 0.95rem;
    }

    .luxury-btn:hover {
        transform: translateY(-3px) scale(1.02);
        box-shadow: 0 15px 35px rgba(0, 102, 255, 0.4);
    }

    /* BACKGROUND EFFECTS */
    .bg-effects {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        pointer-events: none;
        overflow: hidden;
    }

    .floating-orb {
        position: absolute;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(0, 102, 255, 0.15) 0%, rgba(255, 215, 0, 0.08) 50%, transparent 70%);
        border-radius: 50%;
        filter: blur(80px);
        animation: float 25s ease-in-out infinite;
    }

    .orb-1 {
        top: -10%;
        left: -10%;
    }

    .orb-2 {
        bottom: -10%;
        right: -10%;
        animation-delay: 12.5s;
    }

    @keyframes float {
        0%, 100% { transform: translate(0, 0) scale(1) rotate(0deg); }
        25% { transform: translate(100px, 50px) scale(1.1) rotate(90deg); }
        50% { transform: translate(0, 100px) scale(1.05) rotate(180deg); }
        75% { transform: translate(-100px, 50px) scale(1.1) rotate(270deg); }
    }

    /* TEXT STYLES */
    .gold-text {
        background: linear-gradient(135deg, #ffffff 0%, #FFD700 50%, #b0c4de 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 700;
    }

    /* RESPONSIVE DESIGN */
    @media (max-width: 1024px) {
        .project-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
        
        .project-hero {
            padding: 4rem 1rem;
        }
        
        .project-content {
            padding: 1rem;
        }
    }

    @media (max-width: 768px) {
        .stats-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
        }
        
        .stat-number {
            font-size: 2rem;
        }
    }
</style>
<div class="project-detail-page">
    <!-- Background Effects -->
    <div class="bg-effects">
        <div class="floating-orb orb-1"></div>
        <div class="floating-orb orb-2"></div>
    </div>

    <div class="project-container">
        <!-- Hero Section - Full Width -->
        <div class="project-hero">
            <h1 class="gold-text" style="font-size: 3.5rem; margin-bottom: 1.5rem; font-weight: 800;">
                <?= htmlspecialchars($project->title ?? 'Rumah Keluarga Modern') ?>
            </h1>
            <p style="font-size: 1.4rem; opacity: 0.9; margin-bottom: 0.5rem;">
                <?= htmlspecialchars($project->client ?? 'Klien tidak diketahui') ?>
            </p>
            <p style="font-size: 1.2rem; opacity: 0.8; margin-bottom: 2rem;">
                • <?= htmlspecialchars($project->year_completed ?? '2024') ?> •
            </p>
            
            <!-- Stats -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">98%</div>
                    <div style="opacity: 0.9;">Kepuasan Klien</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">A+</div>
                    <div style="opacity: 0.9;">Kualitas</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">24/7</div>
                    <div style="opacity: 0.9;">Support</div>
                </div>
            </div>
        </div>

        <!-- Main Content - Centered but Full Width Background -->
        <div class="project-content">
            <!-- Image & Details Grid -->
            <div class="project-grid">
                <!-- Main Image - YANG DIPERBAIKI -->
                <div class="glass-card" style="overflow: hidden;">
                    <?php
                    // CEK BERBAGAI PATH YANG MUNGKIN
                    $imageFile = $project->image ?? 'default-project.jpg';
                    $possiblePaths = [
                        'public/assets/uploads/' . $imageFile,
                        'public/assets/images/' . $imageFile,
                        'assets/uploads/' . $imageFile,
                        'uploads/' . $imageFile,
                        $imageFile
                    ];
                    
                    $imageFound = false;
                    foreach ($possiblePaths as $path) {
                        if (file_exists($path)) {
                            echo '<img src="' . $path . '" alt="' . htmlspecialchars($project->title ?? '') . '" 
                                  style="width: 100%; height: 500px; object-fit: cover;">';
                            $imageFound = true;
                            break;
                        }
                    }
                    
                    if (!$imageFound) {
                        echo '<div style="width: 100%; height: 500px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
                              display: flex; flex-direction: column; align-items: center; justify-content: center; color: white; 
                              font-size: 1.2rem; border-radius: 10px;">';
                        echo '🏗️<br>Gambar Proyek';
                        echo '<small style="margin-top: 10px; font-size: 0.9rem; opacity: 0.8;">';
                        echo 'File: ' . htmlspecialchars($imageFile) . ' tidak ditemukan';
                        echo '</small>';
                        echo '</div>';
                    }
                    ?>
                </div>

                <!-- Project Details -->
                <div class="glass-card" style="padding: 2.5rem;">
                    <h3 style="color: #FFD700; margin-bottom: 2rem;">
                        <i class="fas fa-info-circle"></i> Detail Proyek
                    </h3>
                    
                    <div style="display: grid; gap: 1.2rem;">
                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 1rem;">
                            <strong>Klien:</strong>
                            <span><?= htmlspecialchars($project->client_name ?? $project->client ?? '-') ?></span>
                        </div>
                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 1rem;">
                            <strong>Lokasi:</strong>
                            <span><?= htmlspecialchars($project->location ?? '-') ?></span>
                        </div>
                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 1rem;">
                            <strong>Tahun:</strong>
                            <span><?= htmlspecialchars($project->year_completed ?? '-') ?></span>
                        </div>
                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 1rem;">
                            <strong>Status:</strong>
                            <span style="color: #4CAF50;">● <?= htmlspecialchars($project->status ?? 'Selesai') ?></span>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div style="margin-top: 2.5rem;">
                        <a href="?page=projects" class="luxury-btn" style="width: 100%; text-align: center; justify-content: center;">
                            <i class="fas fa-arrow-left"></i> Kembali ke Proyek
                        </a>
                    </div>
                </div>
            </div>

            <!-- Description Section -->
            <div class="glass-card" style="padding: 3rem; margin-bottom: 4rem;">
                <h3 style="color: #FFD700; margin-bottom: 2rem;">
                    <i class="fas fa-file-alt"></i> Deskripsi Proyek
                </h3>
                <p style="line-height: 1.8; font-size: 1.1rem;">
                    <?= nl2br(htmlspecialchars($project->description ?? 'Proyek rumah keluarga modern dengan desain terkini dan fitur lengkap. Menggabungkan estetika dan fungsionalitas untuk menciptakan ruang hidup yang nyaman dan elegan.')) ?>
                </p>
            </div>

            <!-- Related Projects - JUGA DIPERBAIKI -->
            <?php if (!empty($relatedProjects)): ?>
            <div class="glass-card" style="padding: 3rem;">
                <h3 style="color: #FFD700; margin-bottom: 3rem; text-align: center;">
                    <i class="fas fa-rocket"></i> Proyek Lainnya
                </h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
                    <?php foreach ($relatedProjects as $related): ?>
                        <div class="glass-card" style="overflow: hidden;">
                            <?php
                            $relatedImage = $related->image ?? 'default-project.jpg';
                            $relatedPaths = [
                                'public/assets/uploads/' . $relatedImage,
                                'public/assets/images/' . $relatedImage,
                                'assets/uploads/' . $relatedImage,
                                $relatedImage
                            ];
                            
                            $relatedImageFound = false;
                            foreach ($relatedPaths as $path) {
                                if (file_exists($path)) {
                                    echo '<img src="' . $path . '" alt="' . htmlspecialchars($related->title ?? 'Proyek') . '" 
                                          style="width: 100%; height: 250px; object-fit: cover;">';
                                    $relatedImageFound = true;
                                    break;
                                }
                            }
                            
                            if (!$relatedImageFound) {
                                echo '<div style="width: 100%; height: 250px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
                                      display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">';
                                echo $related->category === 'commercial' ? '🏢' : '🏠';
                                echo '</div>';
                            }
                            ?>
                            <div style="padding: 1.5rem;">
                                <h4 style="margin-bottom: 1rem;"><?= htmlspecialchars($related->title ?? 'Proyek') ?></h4>
                                <a href="?page=project-detail&id=<?= htmlspecialchars($related->id ?? 0) ?>" 
                                   class="luxury-btn" 
                                   style="width: 100%; text-align: center; justify-content: center;">
                                   <i class="fas fa-eye"></i> Lihat Detail
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require_once 'partials/footer.php'; ?>