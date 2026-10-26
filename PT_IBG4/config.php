<?php
// Basic config for local XAMPP environment
define('APP_NAME', 'PT Intishar Berkah Globalindo');
define('BASE_PATH', dirname(__FILE__));
define('PUBLIC_PATH', BASE_PATH . '/public');
define('APP_PATH', BASE_PATH . '/app');
define('DB_NAME', 'intishar_berkah_globalindo');
define('DB_USER', 'root');
define('DB_PASS', '');
define('BASE_URL', 'http://localhost/pt_ibg4/public/');
// Autoload and DB
require_once APP_PATH . '/config/database.php';
require_once APP_PATH . '/config/constants.php';
