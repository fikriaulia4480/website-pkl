<?php
class ServiceController {
    private $serviceModel;
    
    public function __construct() {
        $this->serviceModel = new Service();
    }
    
    public function index() {
        $data = [
            'title' => 'Layanan Kami - ' . SITE_NAME,
            'services' => $this->serviceModel->getAllServices(),
            'categories' => $this->serviceModel->getActiveCategories()
        ];
        
        require_once '../app/views/services.php';
    }
    
    public function show($id) {
        $service = $this->serviceModel->getServiceById($id);
        
        if (!$service) {
            http_response_code(404);
            include '../app/views/404.php';
            return;
        }
        
        $data = [
            'title' => $service->name . ' - ' . SITE_NAME,
            'service' => $service,
            'relatedServices' => $this->serviceModel->getAllServices()
        ];
        
        require_once '../app/views/service-detail.php';
    }
    
    public function store() {
        // Method untuk handle service form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $result = $this->handleServiceSubmission($_POST);
            
            if ($result['success']) {
                $_SESSION['success_message'] = 'Permintaan layanan berhasil dikirim!';
                header('Location: ?page=services');
                exit;
            } else {
                $_SESSION['error_message'] = $result['message'];
                header('Location: ?page=services');
                exit;
            }
        }
    }
    
    private function handleServiceSubmission($data) {
        // Validasi dan processing data layanan
        return [
            'success' => true,
            'message' => 'Permintaan layanan berhasil dikirim'
        ];
    }
}
?>