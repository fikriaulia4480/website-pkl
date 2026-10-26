<?php
class ProjectController {
    private $projectModel;
    
    public function __construct() {
        $this->projectModel = new Project();
    }
    
    public function index() {
        $data = [
            'title' => 'Portfolio Proyek - ' . SITE_NAME,
            'projects' => $this->projectModel->getAllProjects(),
            'categories' => $this->projectModel->getProjectCategories()
        ];
        
        require_once '../app/views/projects.php';
    }
    
 public function show($id) {
    // 🔍 Ambil data project dari model
    $project = $this->projectModel->getProjectById($id);
    
    // 🚫 Handle case jika project tidak ditemukan
    if (!$project) {
        http_response_code(404);
        require_once '../app/views/404.php';
        exit;
    }

    // 🧠 Siapkan data untuk view
    $data = [
        'title' => $project->title . ' - ' . SITE_NAME,
        'project' => $project,
        'relatedProjects' => $this->projectModel->getFeaturedProjects(6)
    ];

    // ✅ Load view dengan data
    require_once '../app/views/project-detail.php';
}
    public function store() {
        // Method untuk handle form submission (jika ada form tambah project)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validation dan processing data
            $result = $this->handleProjectSubmission($_POST);
            
            if ($result['success']) {
                $_SESSION['success_message'] = 'Project berhasil ditambahkan!';
                header('Location: ?page=projects');
                exit;
            } else {
                $_SESSION['error_message'] = $result['message'];
                header('Location: ?page=projects');
                exit;
            }
        }
    }
    
    private function handleProjectSubmission($data) {
        // Implementasi validasi dan penyimpanan data
        // Ini contoh sederhana, sesuaikan dengan kebutuhan
        return [
            'success' => true,
            'message' => 'Project berhasil disimpan'
        ];
    }
}
?>