<?php
require_once __DIR__ . '/../config.php';
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create'])){
    $title = $_POST['title'] ?? '';
    $desc = $_POST['description'] ?? '';
    $stmt = $pdo->prepare('INSERT INTO services (title,description,created_at) VALUES (?,?,NOW())');
    $stmt->execute([$title,$desc]);
    header('Location: services.php');
    exit;
}
$rows = $pdo->query('SELECT * FROM services ORDER BY id DESC')->fetchAll();
?>
<!doctype html><html><head><meta charset="utf-8"><title>Kelola Layanan</title><link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css"></head><body>
<div class="container"><h1>Kelola Layanan</h1>
<form method="post">
<input name="title" placeholder="Judul" required style="width:100%;margin:.5rem 0"><br>
<textarea name="description" placeholder="Deskripsi" style="width:100%;margin:.5rem 0"></textarea><br>
<button name="create" class="btn">Simpan</button>
</form>
<hr>
<?php foreach($rows as $r): ?>
<div class="card"><h4><?= htmlspecialchars($r['title']) ?></h4><p><?= htmlspecialchars($r['description']) ?></p>
<form method="post" action="services_delete.php"><button name="id" value="<?= $r['id'] ?>" class="btn">Hapus</button></form>
</div>
<?php endforeach; ?>
</div></body></html>
