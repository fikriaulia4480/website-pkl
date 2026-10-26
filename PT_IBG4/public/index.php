<?php
// Website Kontraktor PT. Intishar Berkah Globalindo
session_start();
require_once '../app/config/database.php';
require_once '../app/config/constants.php';

// Auto load classes
spl_autoload_register(function($className) {
    $file = '../app/models/' . $className . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

// Routing System
$page = $_GET['page'] ?? 'home';
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

// Handle Pages
switch($page) {
    case 'home':
        require_once '../app/controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
        break;
        
    case 'projects':
    require_once '../app/controllers/ProjectController.php';
    $controller = new ProjectController();

    // ✅ Tambahin inisialisasi id dulu
    $id = $_GET['id'] ?? null;

    if ($id) {
        $controller->show($id);
    } else {
        $controller->index();
    }
    break;

        
    case 'services':
        require_once '../app/controllers/ServiceController.php';
        $controller = new ServiceController();
        $controller->index();
        break;
        
    case 'contact':
        require_once '../app/controllers/ContactController.php';
        $controller = new ContactController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->store();
        } else {
            $controller->index();
        }
        break;
        
    case 'about':
        require_once '../app/controllers/HomeController.php';
        $controller = new HomeController();
        $controller->about();
        break;
        
    default:
        http_response_code(404);
        include '../app/views/404.php';
}

?>