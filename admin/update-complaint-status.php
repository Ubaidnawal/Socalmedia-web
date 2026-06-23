<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
require_once 'includes/permissions.php';
require_role(2, 'complaints.php'); // Manager+

$id = $_GET['id'] ?? 0;
$status = $_GET['status'] ?? '';
$valid = ['Pending', 'In Progress', 'Resolved', 'Rejected'];

if ($id && in_array($status, $valid)) {
    $stmt = $pdo->prepare("UPDATE complaints SET status = ? WHERE id = ?");
    $stmt->execute([$status, $id]);
}
header('Location: complaints.php');
exit;
?>