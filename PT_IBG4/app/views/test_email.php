<?php
require_once "../utilities/email.php";

$email = new Email();

$data = [
    'name' => 'Tester',
    'email' => 'test@example.com',
    'phone' => '08123456789',
    'subject' => 'Test Email',
    'message' => 'Ini email testing dari script!'
];

if ($email->sendContactNotification($data)) {
    echo "EMAIL TERKIRIM!";
} else {
    echo "GAGAL KIRIM EMAIL!";
}
