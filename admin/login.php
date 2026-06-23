<?php
// Prevent caching — browsers must NOT cache this page or its redirects
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Expires: -1');
header('Vary: Cookie');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once 'includes/db.php';

// DO NOT auto-redirect on GET — always show the login form on first load.
// A 302 redirect here would be cached by the browser, bypassing login entirely.
// The redirect to dashboard ONLY happens on successful POST (below).

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM admins WHERE username = ?");
    $stmt->execute([$username]);
    $admin = $stmt->fetch();

    if ($admin && password_verify($password, $admin['password_hash'])) {
        // Check if admin account is active
        if (($admin['status'] ?? 'Active') !== 'Active') {
            $error = 'Your account has been deactivated. Contact a Super Admin.';
        } else {
            // Regenerate session ID to prevent session fixation
            session_regenerate_id(true);

            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $admin['username'];
            $_SESSION['admin_role'] = $admin['role'] ?? 'Staff';
            $_SESSION['admin_status'] = $admin['status'] ?? 'Active';
            $_SESSION['admin_id'] = (int)$admin['id'];
            $_SESSION['created_at'] = time();
            $_SESSION['last_activity'] = time();

            header('Location: dashboard.php');
            exit;
        }
    } else {
        $error = 'Invalid username or password.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f4f2ef; display: flex; align-items: center; justify-content: center; min-height: 100vh; padding: 20px; margin: 0; }
        .login-box { max-width: 400px; width: 100%; padding: 30px; background: white; border-radius: 12px; box-shadow: 0 8px 24px rgba(0,0,0,0.1); }
        @media (max-width: 480px) {
            .login-box { padding: 20px; margin: 0 10px; }
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h3 class="text-center">Admin Login</h3>
        <?php if (isset($_GET['expired'])): ?>
            <div class="alert alert-info">Your session has expired. Please log in again.</div>
        <?php endif; ?>
        <?php if (isset($_GET['deactivated'])): ?>
            <div class="alert alert-warning">Your session has ended. Account may have been deactivated.</div>
        <?php endif; ?>
        <?php if (isset($_GET['loggedout'])): ?>
            <div class="alert alert-success">You have been logged out successfully.</div>
        <?php endif; ?>
        <?php if ($error): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form method="POST">
            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</body>
</html>