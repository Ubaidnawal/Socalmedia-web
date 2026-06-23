<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
require_once 'includes/permissions.php';
require_role(2, 'orders.php'); // Manager+

$order_id = $_GET['order_id'] ?? '';
$status = $_GET['status'] ?? '';
$valid_statuses = ['Pending', 'Processing', 'Completed', 'Cancelled'];

if ($order_id && in_array($status, $valid_statuses)) {
    $stmt = $pdo->prepare("UPDATE orders SET order_status = ? WHERE order_id = ?");
    $stmt->execute([$status, $order_id]);
}
header('Location: orders.php');
exit;
?>