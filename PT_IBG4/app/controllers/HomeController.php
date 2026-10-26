<?php
class HomeController {
    private $projectModel;
    private $serviceModel;
    
    public function __construct() {
        $this->projectModel = new Project();
        $this->serviceModel = new Service();
    }
    
    public function index() {
        $data = [
            'title' => 'Home - ' . SITE_NAME,
            'featuredProjects' => $this->projectModel->getFeaturedProjects(),
            'services' => $this->serviceModel->getAllServices(),
            'teamMembers' => $this->serviceModel->getTeamMembers(), // Method yang ditambahkan
            'stats' => [
                'projects' => 150,
                'experience' => 10,
                'clients' => 89,
                'awards' => 12
            ]
        ];
        
        require_once '../app/views/home.php';
    }
    
    public function about() {
        $data = [
            'title' => 'Tentang Kami - ' . SITE_NAME,
            'teamMembers' => $this->serviceModel->getTeamMembers(), // Method yang ditambahkan
            'companyInfo' => [
                'established' => '2014',
                'employees' => '50+',
                'completed_projects' => '150+',
                'operational_areas' => 'Jabodetabek & Sekitarnya'
            ]
        ];
        
        require_once '../app/views/about.php';
    }
}
?>