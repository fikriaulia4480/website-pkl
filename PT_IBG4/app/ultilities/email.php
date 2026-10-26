<?php
class Email {
    private $senderEmail;
    private $senderName;
    
    public function __construct() {
        $this->senderEmail = COMPANY_EMAIL;
        $this->senderName  = SITE_NAME;
    }

    /* ============================================================
       1. SEND CONTACT FORM NOTIFICATION
    ============================================================ */
    public function sendContactNotification($contactData) {
        $to      = COMPANY_EMAIL;
        $subject = "Pesan Kontak Baru: " . ($contactData['subject'] ?? 'Tanpa Subjek');

        $message = $this->buildContactEmailTemplate($contactData);
        $headers = $this->buildEmailHeaders();

        return mail($to, $subject, $message, $headers);
    }

    /* ============================================================
       2. Global Notification Router
    ============================================================ */
    public function sendGlobalNotification($type, $data) {
        switch ($type) {
            case 'project_inquiry':
                return $this->sendProjectInquiry($data);

            case 'service_request':
                return $this->sendServiceRequest($data);

            case 'general_contact':
                return $this->sendContactNotification($data);

            default:
                return false;
        }
    }

    /* ============================================================
       3. Project Inquiry Email
    ============================================================ */
    private function sendProjectInquiry($data) {
        $to      = COMPANY_EMAIL;
        $subject = "Permintaan Info Proyek: " . ($data['project_name'] ?? 'Tanpa Nama Proyek');

        $message = "
Permintaan Informasi Proyek:

Nama       : {$data['name']}
Email      : {$data['email']}
Telepon    : {$data['phone']}
Proyek     : {$data['project_name']}

Pesan:
{$data['message']}

Dikirim pada: " . date('Y-m-d H:i:s') . "
        ";

        $headers = $this->buildEmailHeaders();
        return mail($to, $subject, $message, $headers);
    }


    /* ============================================================
       4. Service Request Email
    ============================================================ */
    private function sendServiceRequest($data) {
        $to      = COMPANY_EMAIL;
        $subject = "Permintaan Layanan: " . ($data['service_name'] ?? 'Tanpa Layanan');

        $message = "
Permintaan Layanan Baru:

Nama       : {$data['name']}
Email      : {$data['email']}
Telepon    : {$data['phone']}
Layanan    : {$data['service_name']}
Budget     : {$data['budget']}
Timeline   : {$data['timeline']}

Deskripsi Kebutuhan:
{$data['description']}

Dikirim pada: " . date('Y-m-d H:i:s') . "
        ";

        $headers = $this->buildEmailHeaders();
        return mail($to, $subject, $message, $headers);
    }


    /* ============================================================
       5. Contact Email Template (FIXED)
    ============================================================ */
    private function buildContactEmailTemplate($data) {

        $phone = !empty($data['phone']) ? $data['phone'] : 'Tidak dicantumkan';

        return "
===============================
PESAN KONTAK BARU - " . SITE_NAME . "
===============================

Informasi Pengirim:
------------------
Nama    : {$data['name']}
Email   : {$data['email']}
Telepon : {$phone}
Subjek  : {$data['subject']}

Isi Pesan:
----------
{$data['message']}

-------------------------------
Dikirim pada: " . date('d F Y H:i:s') . "
IP Address  : {$_SERVER['REMOTE_ADDR']}
";
    }


    /* ============================================================
       6. Email Headers Builder
    ============================================================ */
    private function buildEmailHeaders() {
        return "From: {$this->senderName} <{$this->senderEmail}>" . "\r\n" .
               "Reply-To: {$this->senderEmail}" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    }
}
?>
