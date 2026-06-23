<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
require_once 'includes/permissions.php';
$page_title = 'Settings';

$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['change_password'])) {
        $current = $_POST['current_password'] ?? '';
        $new_pass = $_POST['new_password'] ?? '';
        $confirm = $_POST['confirm_password'] ?? '';

        if (empty($current) || empty($new_pass) || empty($confirm)) {
            $error = 'All password fields are required.';
        } elseif ($new_pass !== $confirm) {
            $error = 'New passwords do not match.';
        } elseif (strlen($new_pass) < 6) {
            $error = 'New password must be at least 6 characters.';
        } else {
            // Verify current password
            $stmt = $pdo->prepare("SELECT password_hash FROM admins WHERE username = ?");
            $stmt->execute([$_SESSION['admin_username']]);
            $admin = $stmt->fetch();

            if ($admin && password_verify($current, $admin['password_hash'])) {
                $new_hash = password_hash($new_pass, PASSWORD_DEFAULT);
                $stmt = $pdo->prepare("UPDATE admins SET password_hash = ? WHERE username = ?");
                $stmt->execute([$new_hash, $_SESSION['admin_username']]);
                $success = 'Password changed successfully.';
            } else {
                $error = 'Current password is incorrect.';
            }
        }
    }
}

include 'includes/header.php';
?>

<div class="card">
    <div class="card-header"><h4>Change Password</h4></div>
    <div class="card-body">
        <?php if ($success): ?>
            <div class="alert alert-success alert-dismissible fade show"><?= htmlspecialchars($success) ?><button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
        <?php endif; ?>
        <?php if ($error): ?>
            <div class="alert alert-danger alert-dismissible fade show"><?= htmlspecialchars($error) ?><button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
        <?php endif; ?>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Current Password</label>
                <input type="password" name="current_password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">New Password</label>
                <input type="password" name="new_password" class="form-control" required minlength="6">
            </div>
            <div class="mb-3">
                <label class="form-label">Confirm New Password</label>
                <input type="password" name="confirm_password" class="form-control" required minlength="6">
            </div>
            <div class="d-flex flex-wrap gap-2">
                <button type="submit" name="change_password" class="btn btn-primary"><i class="fas fa-save me-1"></i>Change Password</button>
            </div>
        </form>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
