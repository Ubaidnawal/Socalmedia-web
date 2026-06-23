<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
require_once 'includes/permissions.php';
require_role(3, 'complaints.php'); // Admin+

$id = $_GET['id'] ?? 0;
if ($id) {
    $stmt = $pdo->prepare("DELETE FROM complaints WHERE id = ?");
    $stmt->execute([$id]);
}
header('Location: complaints.php');
exit;
?>