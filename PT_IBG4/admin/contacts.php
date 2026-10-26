<?php
require_once __DIR__ . '/../config.php';
$rows = $pdo->query('SELECT * FROM contacts ORDER BY id DESC')->fetchAll();
?>
<!doctype html><html><head><meta charset="utf-8"><title>Pesan Masuk</title><link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css"></head><body>
<div class="container"><h1>Pesan Masuk</h1>
<?php foreach($rows as $r): ?>
<div class="card"><h4><?= htmlspecialchars($r['name']) ?> — <?= htmlspecialchars($r['email']) ?></h4><p><?= nl2br(htmlspecialchars($r['message'])) ?></p><small><?= $r['created_at'] ?></small></div>
<?php endforeach; ?></div></body></html>
