<?php
/**
 * delete-contact.php
 * Deletes a contact request. Admin+ (role >= 3) only.
 */
require_once 'includes/auth.php';
require_once 'includes/db.php';
require_once 'includes/permissions.php';
require_role(3, 'contact-requests.php');

$id = (int)($_GET['id'] ?? 0);

if ($id) {
    $stmt = $pdo->prepare("DELETE FROM contact_requests WHERE id = ?");
    $stmt->execute([$id]);
    $_SESSION['success_message'] = 'Contact request #' . $id . ' has been deleted.';
} else {
    $_SESSION['error_message'] = 'Invalid request.';
}

header('Location: contact-requests.php');
exit;
