<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $data['title'] ?? SITE_NAME; ?></title>

  <link rel="stylesheet" href="<?php echo SITE_URL; ?>/public/assets/css/style.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

  <header class="site-header">
    <div class="nav-wrap">

      <!-- Logo -->
      <a href="index.php" class="logo">
        <img src="<?php echo SITE_URL; ?>/public/assets/images/Picture (2).png" alt="PT. IBG" class="logo-img">
      </a>

      <!-- Hamburger -->
<div class="hamburger" id="hamburger" aria-label="Toggle menu" role="button" tabindex="0">
    <span></span>
    <span></span>
    <span></span>
</div>

      <!-- NAVIGATION -->
      <nav class="nav-menu" id="nav-menu">
        <a href="?page=home" class="nav-link">Home</a>
        <a href="?page=about" class="nav-link">Tentang</a>
        <a href="?page=services" class="nav-link">Layanan</a>
        <a href="?page=projects" class="nav-link">Proyek</a>
        <a href="?page=contact" class="nav-link">Kontak</a>
      </nav>

      <!-- WA CTA -->
      <div class="nav-cta">
        <a href="https://wa.me/<?php echo COMPANY_WHATSAPP; ?>" class="wa-link">
          <img src="<?php echo SITE_URL; ?>/public/assets/images/whhaaaaattatssasss.jpg" alt="WA">
          <span>Hubungi Kami</span>
        </a>
      </div>

    </div>
  </header>

  <!-- OVERLAY -->
  <div class="menu-overlay" id="menuOverlay"></div>
  
<script src="<?php echo SITE_URL; ?>/public/assets/js/main.js"></script>
<script>
// Di header.php - update JavaScript
document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById("hamburger");
    const navMenu = document.getElementById("nav-menu");
    const overlay = document.querySelector(".menu-overlay");

    function toggleMenu() {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("show");
        overlay.classList.toggle("show");
        document.body.style.overflow = navMenu.classList.contains('show') ? 'hidden' : '';
    }

    function closeMenu() {
        hamburger.classList.remove("active");
        navMenu.classList.remove("show");
        overlay.classList.remove("show");
        document.body.style.overflow = '';
    }

    // Click event
    hamburger.addEventListener("click", toggleMenu);
    
    // Enter key support for accessibility
    hamburger.addEventListener("keypress", function(e) {
        if (e.key === "Enter") {
            toggleMenu();
        }
    });

    overlay.addEventListener("click", closeMenu);

    // Close menu when clicking nav links
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 768) {
                closeMenu();
            }
        });
    });
});
</script>


</body>
</html>