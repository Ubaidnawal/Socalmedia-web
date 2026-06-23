<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
require_once 'includes/permissions.php';
require_role(3, 'orders.php'); // Admin+

$order_id = $_GET['order_id'] ?? '';
if ($order_id) {
    // Delete order items first
    $stmt = $pdo->prepare("DELETE FROM order_items WHERE order_id = ?");
    $stmt->execute([$order_id]);
    $stmt = $pdo->prepare("DELETE FROM orders WHERE order_id = ?");
    $stmt->execute([$order_id]);
}
header('Location: orders.php');
exit;
?>