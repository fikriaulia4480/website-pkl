<?php
class ContactController {
    private $contactModel;
    
    public function __construct() {
        $this->contactModel = new Contact();
    }
    
    public function index() {
        $data = [
            'title' => 'Kontak & Penawaran - ' . SITE_NAME,
            'company_info' => [
                'phone' => COMPANY_PHONE,
                'email' => COMPANY_EMAIL,
                'address' => COMPANY_ADDRESS,
                'whatsapp' => COMPANY_WHATSAPP
            ]
        ];
        
        require_once '../app/views/contact.php';
    }
    
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validasi data
            $validation = $this->validateProjectInquiryForm($_POST);
            
            $response = [];
            
            if ($validation['success']) {
                // Simpan ke database
                $result = $this->contactModel->saveProjectInquiry($_POST);
                
                if ($result) {
                    // Kirim notifikasi email
                    $this->sendProjectInquiryEmail($_POST);
                    
                    // Buat URL WhatsApp
                    $whatsapp_url = $this->sendWhatsAppNotification($_POST);
                    
                    $response = [
                        'success' => true,
                        'message' => 'Permintaan penawaran berhasil dikirim!',
                        'whatsapp_url' => $whatsapp_url
                    ];
                    
                } else {
                    $response = [
                        'success' => false,
                        'message' => 'Maaf, terjadi kesalahan. Silakan coba lagi.'
                    ];
                }
            } else {
                $response = [
                    'success' => false,
                    'message' => $validation['message']
                ];
            }
            
            // Return JSON response untuk AJAX
            header('Content-Type: application/json');
            echo json_encode($response);
            exit;
        }
    }
    
    private function validateProjectInquiryForm($data) {
        $errors = [];
        
        if (empty($data['name'])) {
            $errors[] = 'Nama lengkap harus diisi';
        }
        
        if (empty($data['email'])) {
            $errors[] = 'Email harus diisi';
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Format email tidak valid';
        }
        
        if (empty($data['phone'])) {
            $errors[] = 'Nomor telepon/WhatsApp harus diisi';
        }
        
        if (empty($data['project_type'])) {
            $errors[] = 'Jenis proyek harus dipilih';
        }
        
        if (empty($data['construction_scope'])) {
            $errors[] = 'Lingkup pekerjaan harus dipilih';
        }
        
        if (empty($data['budget_range'])) {
            $errors[] = 'Range budget harus dipilih';
        }
        
        if (count($errors) > 0) {
            return [
                'success' => false,
                'message' => implode(', ', $errors)
            ];
        }
        
        return ['success' => true];
    }
    
    private function sendProjectInquiryEmail($data) {
        $to = COMPANY_EMAIL;
        $subject = "Permintaan Penawaran Proyek: " . $this->getProjectTypeLabel($data['project_type']);
        
        $message = $this->buildProjectInquiryEmailTemplate($data);
        $headers = $this->buildEmailHeaders();
        
        // Uncomment untuk mengaktifkan email
        // mail($to, $subject, $message, $headers);
        
        error_log("Project Inquiry Email: " . $subject);
    }
    
    private function sendWhatsAppNotification($data) {
        $whatsappMessage = "🚀 *PERMINTAAN PENAWARAN BARU* 🚀%0A%0A" .
                          "📛 *Nama:* " . ($data['name'] ?? '') . "%0A" .
                          "📞 *Telepon:* " . ($data['phone'] ?? '') . "%0A" .
                          "📧 *Email:* " . ($data['email'] ?? '') . "%0A" .
                          "🏗️ *Jenis Proyek:* " . $this->getProjectTypeLabel($data['project_type'] ?? '') . "%0A" .
                          "🔧 *Lingkup Pekerjaan:* " . ($data['construction_scope'] ?? '') . "%0A" .
                          "💰 *Budget:* " . ($data['budget_range'] ?? '') . "%0A" .
                          "⏰ *Timeline:* " . ($data['timeline'] ?? '') . "%0A%0A" .
                          "📝 *Deskripsi:*%0A" . substr(($data['message'] ?? 'Tidak ada deskripsi'), 0, 100) . "...%0A%0A" .
                          "💬 *Balas ke pelanggan:* https://wa.me/62" . substr(($data['phone'] ?? ''), 1) . "%0A" .
                          "📧 *Email pelanggan:* " . ($data['email'] ?? '') . "%0A%0A" .
                          "🕒 " . date('d/m/Y H:i:s');
        
        $admin_whatsapp = "6285159127733"; // GANTI DENGAN NOMOR ANDA
        $whatsapp_url = "https://wa.me/" . $admin_whatsapp . "?text=" . $whatsappMessage;
        
        return $whatsapp_url;
    }
    
    private function getProjectTypeLabel($projectType) {
        $labels = [
            'rumah_tinggal' => 'Pembangunan Rumah Tinggal',
            'renovasi_rumah' => 'Renovasi Rumah',
            'gedung_kantor' => 'Gedung Perkantoran',
            'ruko' => 'Ruko (Rumah Toko)',
            'apartemen' => 'Apartemen/Residensial',
            'pabrik' => 'Pabrik/Gudang',
            'interior' => 'Desain Interior',
            'lainnya' => 'Lainnya'
        ];
        
        return $labels[$projectType] ?? 'Lainnya';
    }
    
    private function buildProjectInquiryEmailTemplate($data) {
        return "
            ===============================
            PERMINTAAN PENAWARAN PROYEK BARU
            ===============================
            
            INFORMASI CUSTOMER:
            -------------------
            Nama    : {$data['name']}
            Email   : {$data['email']}
            Telepon : {$data['phone']}
            
            DETAIL PROYEK:
            --------------
            Jenis Proyek      : " . $this->getProjectTypeLabel($data['project_type']) . "
            Lingkup Pekerjaan : {$data['construction_scope']}
            Perkiraan Budget  : {$data['budget_range']}
            Timeline          : {$data['timeline']}
            
            DESKRIPSI TAMBAHAN:
            -------------------
            " . ($data['message'] ?? 'Tidak ada deskripsi tambahan') . "
            
            -------------------------------
            Dikirim melalui website pada: " . date('d F Y H:i:s') . "
        ";
    }
    
    private function buildEmailHeaders() {
        return "From: " . SITE_NAME . " <" . COMPANY_EMAIL . ">" . "\r\n" .
               "Reply-To: " . COMPANY_EMAIL . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    }
}
?>