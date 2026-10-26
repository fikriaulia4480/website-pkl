<?php
// Global helper functions

/**
 * Sanitize input data
 */
function sanitizeInput($data) {
    if (is_array($data)) {
        return array_map('sanitizeInput', $data);
    }
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

/**
 * Redirect to specific page
 */
function redirect($page) {
    header("Location: $page");
    exit;
}

/**
 * Set flash message
 */
function setFlashMessage($type, $message) {
    $_SESSION['flash_message'] = [
        'type' => $type,
        'message' => $message
    ];
}

/**
 * Get and clear flash message
 */
function getFlashMessage() {
    if (isset($_SESSION['flash_message'])) {
        $message = $_SESSION['flash_message'];
        unset($_SESSION['flash_message']);
        return $message;
    }
    return null;
}

/**
 * Global form submission handler
 */
function handleGlobalSubmission($formType, $data) {
    switch ($formType) {
        case 'contact':
            $controller = new ContactController();
            return $controller->store();
            
        case 'project_inquiry':
            return handleProjectInquiry($data);
            
        case 'service_request':
            return handleServiceRequest($data);
            
        case 'newsletter':
            return handleNewsletterSignup($data);
            
        default:
            return ['success' => false, 'message' => 'Unknown form type'];
    }
}

/**
 * Handle global project inquiry
 */
function handleProjectInquiry($data) {
    // Save to database or send email
    $email = new Email();
    $result = $email->sendGlobalNotification('project_inquiry', $data);
    
    if ($result) {
        return ['success' => true, 'message' => 'Permintaan info proyek berhasil dikirim!'];
    }
    
    return ['success' => false, 'message' => 'Gagal mengirim permintaan.'];
}

/**
 * Handle global service request
 */
function handleServiceRequest($data) {
    $email = new Email();
    $result = $email->sendGlobalNotification('service_request', $data);
    
    if ($result) {
        return ['success' => true, 'message' => 'Permintaan layanan berhasil dikirim!'];
    }
    
    return ['success' => false, 'message' => 'Gagal mengirim permintaan.'];
}

/**
 * Handle newsletter signup
 */
function handleNewsletterSignup($data) {
    // Simpan ke database newsletter
    $db = new Database();
    $db->query("INSERT INTO newsletter (email, name, status) VALUES (:email, :name, 'active')");
    $db->bind(':email', $data['email']);
    $db->bind(':name', $data['name'] ?? '');
    
    if ($db->execute()) {
        return ['success' => true, 'message' => 'Berhasil berlangganan newsletter!'];
    }
    
    return ['success' => false, 'message' => 'Gagal berlangganan newsletter.'];
}

/**
 * Global save function for various data
 */
function globalSave($table, $data) {
    $db = new Database();
    
    $columns = implode(', ', array_keys($data));
    $placeholders = ':' . implode(', :', array_keys($data));
    
    $db->query("INSERT INTO $table ($columns) VALUES ($placeholders)");
    
    foreach ($data as $key => $value) {
        $db->bind(":$key", $value);
    }
    
    return $db->execute();
}
?>