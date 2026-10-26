<?php
// Base Path Constants
define('APP_PATH', dirname(dirname(__DIR__)) . '/');
define('PUBLIC_PATH', APP_PATH . 'public/');
define('VIEW_PATH', APP_PATH . 'app/views/');

// Site Constants
define('APP_NAME', 'PT. Intishar Berkah Globalindo'); // TAMBAH INI
define('SITE_NAME', 'PT. Intishar Berkah Globalindo');
define('SITE_TAGLINE', 'Kontraktor Profesional & Developer Terpercaya');
define('SITE_URL', 'http://localhost/PT_IBG4');
define('BASE_URL', SITE_URL . '/public/');

// Company Info
define('COMPANY_PHONE', '085159127733');
define('COMPANY_EMAIL', 'ptintisharberkahglobalindo99@gmail.com');
define('COMPANY_ADDRESS', 'Jl. A. Komp. DKI No.65, RT.11/RW.1, Pd. Klp., Kec. Duren Sawit, Kota Jakarta Timur');
define('COMPANY_WHATSAPP', '085159127733');

// Social Media
define('SOCIAL_FACEBOOK', 'https://facebook.com/PTIBG4');
define('SOCIAL_INSTAGRAM', 'https://www.instagram.com/pt.ibg/');
define('SOCIAL_INSTAGRAM2', 'https://www.instagram.com/intisharberkahglobalindo2022/');
define('SOCIAL_LINKEDIN', 'https://linkedin.com/company/PTIBG4');

// Upload Paths
define('UPLOAD_PROJECTS', 'assets/uploads/projects/');
define('UPLOAD_TEAM', 'assets/uploads/team/');

// Debug Mode
define('DEBUG_MODE', true);

// Timezone
date_default_timezone_set('Asia/Jakarta');
?>