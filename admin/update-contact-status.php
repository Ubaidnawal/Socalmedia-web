<?php
/**
 * update-contact-status.php
 * Updates the status of a contact request. Manager+ (role >= 2) only.
 */
require_once 'includes/auth.php';
require_once 'includes/db.php';
require_once 'includes/permissions.php';
require_role(2, 'contact-requests.php');

$id     = (int)($_GET['id'] ?? 0);
$status = $_GET['status'] ?? '';
$from   = $_GET['from'] ?? 'list'; // 'details' or 'list' — for redirect

$valid_statuses = ['Pending', 'In Progress', 'Resolved', 'Closed'];

if ($id && in_array($status, $valid_statuses, true)) {
    $stmt = $pdo->prepare("UPDATE contact_requests SET status = ?, updated_at = NOW() WHERE id = ?");
    $stmt->execute([$status, $id]);
    $_SESSION['success_message'] = 'Contact request status updated to "' . $status . '".';
} else {
    $_SESSION['error_message'] = 'Invalid request.';
}

$redirect = ($from === 'details') ? 'contact-request-details.php?id=' . $id : 'contact-requests.php';
header("Location: $redirect");
exit;
