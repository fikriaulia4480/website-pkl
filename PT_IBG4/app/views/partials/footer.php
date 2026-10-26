<footer>
  <div class="container">
    <div class="footer-content">
      <div class="footer-section">
        <h3><?php echo APP_NAME ?? 'PT. Intishar Berkah Globalindo'; ?></h3>
        <p>Kontraktor profesional yang berkomitmen memberikan hasil terbaik di setiap proyek — dengan presisi dan integritas.</p>
      </div>

      <div class="footer-section">
        <h3>Kontak</h3>
        <p><?php echo COMPANY_EMAIL ?? 'ptintisharberkahglobalindo99@gmail.com'; ?></p>
        <p><?php echo COMPANY_PHONE ?? '085159127733'; ?></p>
        <p><?php echo COMPANY_ADDRESS ?? 'Jl. A. Komp. DKI No.65, RT.11/RW.1, Pd. Klp., Kec. Duren Sawit, Kota Jakarta Timur'; ?></p>
      </div>

      <div class="footer-section">
        <h3>Quick Links</h3>
        <p><a href="?page=home">Home</a></p>
        <p><a href="?page=services">Layanan</a></p>
        <p><a href="?page=projects">Proyek</a></p>
        <p><a href="?page=contact">Kontak</a></p>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?php echo date('2023'); ?> <?php echo APP_NAME ?? 'PT. Intishar Berkah Globalindo'; ?> — All Rights Reserved.</p>
    </div>
  </div>
</footer>

<!-- JS Utama -->
<script src="<?php echo SITE_URL; ?>/public/assets/js/main.js"></script>

</body>
</html>
