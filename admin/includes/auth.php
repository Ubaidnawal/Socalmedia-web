<?php
// admin/includes/auth.php  —  session guard for all admin pages

// ── 1. Prevent browser caching of authenticated pages ──
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
header('Expires: -1');
header('Vary: Cookie');

// ── 2. Session lifetime limits ──
define('SESSION_INACTIVITY_LIMIT', 1800);  // 30 min idle before expiry
define('SESSION_ABSOLUTE_LIMIT',   28800); //  8 hours absolute max from login

// ── 3. Start session ──
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ── 4. Verify login flag ──
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    auth_failed_logout('login.php');
}

// ── 5. Session inactivity timeout (30 minutes of no activity) ──
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > SESSION_INACTIVITY_LIMIT) {
    // Session expired due to inactivity
    auth_failed_logout('login.php?expired=1');
}

// ── 6. Maximum absolute session lifetime (8 hours from login) ──
if (isset($_SESSION['created_at']) && (time() - $_SESSION['created_at']) > SESSION_ABSOLUTE_LIMIT) {
    // Session too old — force re-login
    auth_failed_logout('login.php?expired=1');
}

// Update last activity timestamp
$_SESSION['last_activity'] = time();

// ── 7. Verify admin still exists and is active in the database ──
if (!isset($_SESSION['admin_id'])) {
    auth_failed_logout('login.php');
}

require_once __DIR__ . '/db.php';
$stmt = $pdo->prepare("SELECT id, role, status, username FROM admins WHERE id = ?");
$stmt->execute([(int)$_SESSION['admin_id']]);
$admin_data = $stmt->fetch();

if (!$admin_data) {
    // Admin account was deleted
    auth_failed_logout('login.php');
}

if ($admin_data['status'] !== 'Active') {
    // Account was deactivated — force logout
    auth_failed_logout('login.php?deactivated=1');
}

// ── 8. Sync session with latest DB values ──
$_SESSION['admin_role'] = $admin_data['role'] ?? 'Staff';
$_SESSION['admin_status'] = $admin_data['status'] ?? 'Active';
$_SESSION['admin_username'] = $admin_data['username'];

// ── 9. Load permissions helper ──
require_once __DIR__ . '/permissions.php';

/**
 * Cleanly destroy the session, clear the cookie, and redirect.
 */
function auth_failed_logout(string $redirect_url): void {
    $_SESSION = [];
    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params['path'], $params['domain'],
            $params['secure'], $params['httponly']
        );
    }
    session_destroy();
    header("Location: $redirect_url");
    exit;
}
?>
