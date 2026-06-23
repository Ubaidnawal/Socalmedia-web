<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
require_once 'includes/permissions.php';

// Super Admin only
require_super_admin();

$page_title = 'Edit Admin';

$id = (int)($_GET['id'] ?? 0);
$stmt = $pdo->prepare("SELECT * FROM admins WHERE id = ?");
$stmt->execute([$id]);
$admin = $stmt->fetch();

if (!$admin) {
    $_SESSION['error_message'] = 'Admin not found.';
    header('Location: admins.php');
    exit;
}

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $role = $_POST['role'] ?? '';
    $status = $_POST['status'] ?? '';
    $new_password = $_POST['new_password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Validate username
    if (empty($username) || !preg_match('/^[a-zA-Z0-9_]{3,50}$/', $username)) {
        $error = 'Username must be 3-50 characters (letters, numbers, underscores only).';
    } elseif (!in_array($role, get_all_roles())) {
        $error = 'Invalid role selected.';
    } elseif (!in_array($status, ['Active', 'Inactive'])) {
        $error = 'Invalid status selected.';
    } elseif (!can_assign_role($role)) {
        $error = 'You do not have permission to assign this role.';
    } else {
        // Check for duplicate username (excluding current admin)
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM admins WHERE username = ? AND id != ?");
        $stmt->execute([$username, $id]);
        if ($stmt->fetchColumn() > 0) {
            $error = 'Username already exists.';
        } else {
            // Don't allow changing own role/status
            if ($id === (int)$_SESSION['admin_id']) {
                $username = $admin['username'];
                $role = $admin['role'];
                $status = $admin['status'];
                $error = 'You cannot change your own role or status.';
            }

            if (empty($error)) {
                // Update basic info
                $stmt = $pdo->prepare("UPDATE admins SET username = ?, role = ?, status = ? WHERE id = ?");
                $stmt->execute([$username, $role, $status, $id]);
                $success = 'Admin updated successfully.';

                // Update password if provided
                if (!empty($new_password)) {
                    if (strlen($new_password) < 6) {
                        $error = 'Password must be at least 6 characters.';
                    } elseif ($new_password !== $confirm_password) {
                        $error = 'Passwords do not match.';
                    } else {
                        $hash = password_hash($new_password, PASSWORD_DEFAULT);
                        $stmt = $pdo->prepare("UPDATE admins SET password_hash = ? WHERE id = ?");
                        $stmt->execute([$hash, $id]);
                        $success = 'Admin updated with new password.';
                    }
                }

                // Refresh admin data
                $stmt = $pdo->prepare("SELECT * FROM admins WHERE id = ?");
                $stmt->execute([$id]);
                $admin = $stmt->fetch();

                if (empty($error) && !$success) {
                    $success = 'Admin updated successfully.';
                }
            }
        }
    }
}
?>

<?php
// If error + success both set (password issue after basic update), keep the error visible
include 'includes/header.php';
?>

<?php if ($success): ?>
    <div class="alert alert-success alert-dismissible"><?= htmlspecialchars($success) ?></div>
<?php endif; ?>
<?php if ($error): ?>
    <div class="alert alert-danger alert-dismissible"><?= htmlspecialchars($error) ?></div>
<?php endif; ?>

<div class="card">
    <div class="card-header"><h4>Edit Admin: <?= htmlspecialchars($admin['username']) ?></h4></div>
    <div class="card-body">
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required
                       value="<?= htmlspecialchars($admin['username']) ?>"
                       pattern="[a-zA-Z0-9_]{3,50}" title="3-50 characters, letters, numbers, underscores"
                       <?= $id === (int)$_SESSION['admin_id'] ? 'readonly' : '' ?>>
                <?php if ($id === (int)$_SESSION['admin_id']): ?>
                    <small class="text-muted">You cannot change your own username.</small>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Role</label>
                <select name="role" class="form-select" <?= $id === (int)$_SESSION['admin_id'] ? 'disabled' : '' ?> required>
                    <?php foreach (get_all_roles() as $r): ?>
                        <?php if (can_assign_role($r)): ?>
                            <option value="<?= $r ?>" <?= $admin['role'] === $r ? 'selected' : '' ?>><?= $r ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
                <?php if ($id === (int)$_SESSION['admin_id']): ?>
                    <small class="text-muted">You cannot change your own role.</small>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select" <?= $id === (int)$_SESSION['admin_id'] ? 'disabled' : '' ?> required>
                    <option value="Active" <?= $admin['status'] === 'Active' ? 'selected' : '' ?>>Active</option>
                    <option value="Inactive" <?= $admin['status'] === 'Inactive' ? 'selected' : '' ?>>Inactive</option>
                </select>
                <?php if ($id === (int)$_SESSION['admin_id']): ?>
                    <small class="text-muted">You cannot change your own status.</small>
                <?php endif; ?>
            </div>
            <hr>
            <h5>Change Password (optional)</h5>
            <div class="mb-3">
                <label class="form-label">New Password</label>
                <input type="password" name="new_password" class="form-control" minlength="6" placeholder="Leave blank to keep current">
            </div>
            <div class="mb-3">
                <label class="form-label">Confirm New Password</label>
                <input type="password" name="confirm_password" class="form-control" minlength="6" placeholder="Leave blank to keep current">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i> Update Admin</button>
            <a href="admins.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
