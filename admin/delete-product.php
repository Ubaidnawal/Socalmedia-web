<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
require_once 'includes/permissions.php';
require_role(3, 'products.php'); // Admin+
$id = $_GET['id'] ?? 0;
if ($id) {
    $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$id]);
}
header('Location: products.php');
exit;
?>