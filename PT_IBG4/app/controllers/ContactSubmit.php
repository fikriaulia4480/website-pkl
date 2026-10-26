<?php
require_once APP_PATH . '/models/Contact.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Validasi input
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    // Cek validasi
    if($name && $email && $message){
        $c = new Contact($GLOBALS['pdo']);
        $saved = $c->save([
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);
        
        if($saved){
            header('Location: ' . BASE_URL . '?page=contact_thanks');
            exit;
        } else {
            // Handle error saving
            header('Location: ' . BASE_URL . '?page=contact&error=1');
            exit;
        }
    } else {
        // Handle validation error
        header('Location: ' . BASE_URL . '?page=contact&error=2');
        exit;
    }
}
?>