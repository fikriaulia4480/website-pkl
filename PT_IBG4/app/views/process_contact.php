<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aktifkan error untuk debugging (hapus di production)
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Ambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $company = htmlspecialchars($_POST['company'] ?? '');
    $service_type = htmlspecialchars($_POST['service_type']);
    $project_budget = htmlspecialchars($_POST['project_budget']);
    $project_timeline = htmlspecialchars($_POST['project_timeline']);
    $project_location = htmlspecialchars($_POST['project_location']);
    $project_description = htmlspecialchars($_POST['project_description']);
    $reference = htmlspecialchars($_POST['reference'] ?? '');
    $selected_service = htmlspecialchars($_POST['selected_service'] ?? '');

    // === Validasi sederhana ===
    if (!$name || !$email || !$phone || !$project_description) {
        header('Location: contact.php?error=1');
        exit;
    }

    // === Data mapping ===
    $service_names = [
        'gedung' => 'Konstruksi Gedung & Komersial',
        'perumahan' => 'Pengembangan Perumahan',
        'renovasi' => 'Renovasi & Transformasi',
        'lainnya' => 'Layanan Lainnya'
    ];

    $budget_ranges = [
        '<50jt' => 'Dibawah Rp 50 Juta',
        '50jt-500jt' => 'Rp 50 Juta - Rp 500 Juta',
        '500jt-2m' => 'Rp 500 Juta - Rp 2 Miliar',
        '2m-10m' => 'Rp 2 Miliar - Rp 10 Miliar',
        '>10m' => 'Diatas Rp 10 Miliar'
    ];

    $timelines = [
        'segera' => 'Segera (1-3 bulan)',
        '3-6bulan' => '3-6 Bulan Mendatang',
        '6-12bulan' => '6-12 Bulan Mendatang',
        '>1tahun' => 'Lebih dari 1 Tahun',
        'belum-tentu' => 'Belum Dapat Dipastikan'
    ];

    // === KIRIM EMAIL (HTML format) ===
    $to = "info@intisharberkah.com, sales@intisharberkah.com";
    $subject = "Permintaan Konsultasi Proyek - " . ($service_names[$service_type] ?? 'Layanan Konstruksi');

    $email_message = "
    <h2>Permintaan Konsultasi Proyek Baru</h2>
    <table border='1' cellpadding='10' cellspacing='0'>
        <tr><td><strong>Nama</strong></td><td>$name</td></tr>
        <tr><td><strong>Email</strong></td><td>$email</td></tr>
        <tr><td><strong>Telepon/WhatsApp</strong></td><td>$phone</td></tr>
        <tr><td><strong>Perusahaan</strong></td><td>" . ($company ?: '-') . "</td></tr>
        <tr><td><strong>Layanan yang Diminati</strong></td><td>" . ($service_names[$service_type] ?? 'Layanan Konstruksi') . "</td></tr>
        <tr><td><strong>Perkiraan Budget</strong></td><td>" . ($budget_ranges[$project_budget] ?? '') . "</td></tr>
        <tr><td><strong>Timeline Proyek</strong></td><td>" . ($timelines[$project_timeline] ?? '') . "</td></tr>
        <tr><td><strong>Lokasi Proyek</strong></td><td>$project_location</td></tr>
        <tr><td><strong>Referensi</strong></td><td>" . ($reference ?: '-') . "</td></tr>
    </table>
    <h3>Deskripsi Proyek:</h3>
    <p>$project_description</p>
    <hr>
    <p><small>Dikirim pada: " . date('d F Y H:i:s') . "</small></p>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: website@intisharberkah.com" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";

    @mail($to, $subject, $email_message, $headers);

    // === Buat link WhatsApp Admin ===
    $admin_whatsapp = "6285159127733";
    $whatsapp_message = "🚀 *LEAD BARU DARI WEBSITE* 🚀%0A%0A" .
        "📛 *Nama:* $name%0A" .
        "📞 *Telepon:* $phone%0A" .
        "📧 *Email:* $email%0A" .
        "🏢 *Perusahaan:* " . ($company ?: '-') . "%0A" .
        "🔧 *Layanan:* " . ($service_names[$service_type] ?? 'Layanan Konstruksi') . "%0A" .
        "💰 *Budget:* " . ($budget_ranges[$project_budget] ?? '') . "%0A" .
        "📍 *Lokasi:* $project_location%0A" .
        "⏰ *Timeline:* " . ($timelines[$project_timeline] ?? '') . "%0A%0A" .
        "📝 *Deskripsi:*%0A" . substr($project_description, 0, 100) . "...%0A%0A" .
        "💬 *Balas ke pelanggan:* https://wa.me/62" . substr($phone, 1) . "%0A" .
        "🕒 " . date('d/m/Y H:i:s');

    $whatsapp_url = "https://wa.me/$admin_whatsapp?text=$whatsapp_message";
    ?>

    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Terima Kasih</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body { font-family: Arial, sans-serif; text-align: center; padding: 50px; background: #f5f5f5; }
            .success-box { background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); max-width: 500px; margin: 0 auto; }
            .btn { background: #25D366; color: white; padding: 15px 30px; text-decoration: none; border-radius: 5px; display: inline-block; margin: 20px 0; font-weight: bold; }
            .loading { color: #666; font-style: italic; }
        </style>
    </head>
    <body>
        <div class="success-box">
            <h2>✅ Terima Kasih, <?= $name; ?>!</h2>
            <p>Permintaan konsultasi Anda telah dikirim. Tim kami akan menghubungi Anda dalam 1x24 jam.</p>
            <p class="loading">Mengarahkan ke WhatsApp...</p>
            <a href="<?= $whatsapp_url; ?>" class="btn" target="_blank">💬 Chat via WhatsApp Sekarang</a>
            <p><small>Jika tidak otomatis terarah, klik tombol di atas</small></p>
        </div>

        <script>
            // Auto redirect ke WhatsApp
            setTimeout(() => window.open('<?= $whatsapp_url; ?>', '_blank'), 2000);
            // Redirect balik ke contact page
            setTimeout(() => window.location.href = 'contact.php?success=1', 4000);
        </script>
    </body>
    </html>
    <?php
    exit;
} else {
    header("Location: contact.php");
    exit;
}
?>
