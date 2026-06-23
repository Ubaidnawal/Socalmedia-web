<?php
/**
 * submit_contact.php
 * AJAX handler for the contact form — validates, sanitises, stores in DB.
 * Returns JSON only; never redirects or echoes HTML.
 */

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

require_once __DIR__ . '/../includes/db_connect.php';

// ── Only accept POST ──
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// ── Helper: read input (JSON body or form-encoded) ──
$raw  = file_get_contents('php://input');
$data = [];
if ($raw && ($json = json_decode($raw, true)) !== null) {
    $data = $json;
} else {
    $data = $_POST;
}

// ── Trim all string values ──
foreach ($data as $k => $v) {
    if (is_string($v)) {
        $data[$k] = trim($v);
    }
}

// ── Validation ──
$errors = [];

$full_name       = $data['full_name']       ?? '';
$email           = $data['email']           ?? '';
$whatsapp        = $data['whatsapp']        ?? '';
$service_required = $data['service_required'] ?? '';
$account_type    = $data['account_type']    ?? '';
$order_id        = $data['order_id']        ?? '';
$subject         = $data['subject']         ?? '';
$message         = $data['message']         ?? '';

if ($full_name === '') {
    $errors[] = 'Full name is required.';
} elseif (mb_strlen($full_name) > 255) {
    $errors[] = 'Full name must not exceed 255 characters.';
}

if ($email === '') {
    $errors[] = 'Email is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'A valid email address is required.';
} elseif (mb_strlen($email) > 255) {
    $errors[] = 'Email must not exceed 255 characters.';
}

$valid_services = ['Buy PVA Accounts', 'Bulk Order', 'Account Replacement', 'Technical Support'];
if ($service_required === '' || !in_array($service_required, $valid_services, true)) {
    $errors[] = 'Please select a valid service.';
}

$valid_accounts = ['Gmail PVA', 'Facebook PVA', 'Instagram PVA', 'Twitter/X PVA'];
if ($account_type === '' || !in_array($account_type, $valid_accounts, true)) {
    $errors[] = 'Please select a valid account type.';
}

if ($subject === '') {
    $errors[] = 'Subject is required.';
} elseif (mb_strlen($subject) > 255) {
    $errors[] = 'Subject must not exceed 255 characters.';
}

if ($message === '') {
    $errors[] = 'Message is required.';
} elseif (mb_strlen($message) > 5000) {
    $errors[] = 'Message must not exceed 5000 characters.';
}

// Optional fields — max length check
if ($whatsapp !== '' && mb_strlen($whatsapp) > 20) {
    $errors[] = 'WhatsApp number must not exceed 20 characters.';
}
if ($order_id !== '' && mb_strlen($order_id) > 100) {
    $errors[] = 'Order ID must not exceed 100 characters.';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => implode(' ', $errors), 'errors' => $errors]);
    exit;
}

// ── Insert with prepared statement ──
try {
    $stmt = $pdo->prepare("
        INSERT INTO contact_requests
            (full_name, email, whatsapp, service_required, account_type, order_id, subject, message, status, created_at, updated_at)
        VALUES
            (?, ?, ?, ?, ?, ?, ?, ?, 'Pending', NOW(), NOW())
    ");

    $stmt->execute([
        htmlspecialchars($full_name, ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($email, ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($whatsapp, ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($service_required, ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($account_type, ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($order_id, ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($subject, ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($message, ENT_QUOTES, 'UTF-8'),
    ]);

    echo json_encode([
        'success' => true,
        'message' => 'Your message has been sent! We\'ll reply within 2 hours.'
    ]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'A server error occurred. Please try again later.']);
    // Log the real error for debugging (do NOT expose to the user)
    error_log('Contact form DB error: ' . $e->getMessage());
}
