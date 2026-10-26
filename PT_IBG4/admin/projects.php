<?php
require_once __DIR__ . '/../config.php';
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create'])){
    // handle upload and insert minimal
    $title = $_POST['title'] ?? '';
    $excerpt = $_POST['excerpt'] ?? '';
    $thumb = 'placeholder.jpg';
    if(!empty($_FILES['thumbnail']['name'])){
        $dest = PUBLIC_PATH . '/assets/uploads/';
        if(!is_dir($dest)) mkdir($dest,0755,true);
        $fn = basename($_FILES['thumbnail']['name']);
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], $dest.$fn);
        $thumb = $fn;
    }
    $stmt = $pdo->prepare('INSERT INTO projects (title,excerpt,thumbnail,created_at) VALUES (?,?,?,NOW())');
    $stmt->execute([$title,$excerpt,$thumb]);
    header('Location: projects.php');
    exit;
}
$rows = $pdo->query('SELECT * FROM projects ORDER BY id DESC')->fetchAll();
?>
<!doctype html><html><head><meta charset="utf-8"><title>Kelola Proyek</title><link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css"></head><body>
<div class="container"><h1>Kelola Proyek</h1>
<form method="post" enctype="multipart/form-data">
<input name="title" placeholder="Judul" required style="width:100%;margin:.5rem 0"><br>
<textarea name="excerpt" placeholder="Ringkasan" style="width:100%;margin:.5rem 0"></textarea><br>
<input type="file" name="thumbnail"><br><button name="create" class="btn">Simpan</button>
</form>
<hr>
<h2>Daftar Proyek</h2>
<?php foreach($rows as $r): ?>
<div class="card"><img src="<?= BASE_URL ?>assets/images/<?= $r['thumbnail'] ?>" style="width:200px;height:120px;object-fit:cover"><h4><?= htmlspecialchars($r['title']) ?></h4><p><?= htmlspecialchars($r['excerpt']) ?></p>
<form method="post" style="display:inline"><button formaction="projects_delete.php" name="id" value="<?= $r['id'] ?>" class="btn">Hapus</button></form>
</div>
<?php endforeach; ?>
</div></body></html>
