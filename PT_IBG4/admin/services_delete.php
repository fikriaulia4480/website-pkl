<?php
require_once __DIR__ . '/../config.php';
$id = $_POST['id'] ?? null;
if($id){
    $stmt = $pdo->prepare('DELETE FROM services WHERE id=?');
    $stmt->execute([$id]);
}
header('Location: services.php');
