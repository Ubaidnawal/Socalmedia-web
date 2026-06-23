<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
require_once 'includes/permissions.php';

// Super Admin only
require_super_admin();

$page_title = 'Create Admin';

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm = $_POST['confirm_password'] ?? '';
    $role = $_POST['role'] ?? 'Staff';

    // Validate
    if (empty($username) || empty($password) || empty($confirm)) {
        $error = 'All fields are required.';
    } elseif (!preg_match('/^[a-zA-Z0-9_]{3,50}$/', $username)) {
        $error = 'Username must be 3-50 characters (letters, numbers, underscores only).';
    } elseif (strlen($password) < 6) {
        $error = 'Password must be at least 6 characters.';
    } elseif ($password !== $confirm) {
        $error = 'Passwords do not match.';
    } elseif (!in_array($role, get_all_roles())) {
        $error = 'Invalid role selected.';
    } elseif (!can_assign_role($role)) {
        $error = 'You do not have permission to assign this role.';
    } else {
        // Check for existing username
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM admins WHERE username = ?");
        $stmt->execute([$username]);
        if ($stmt->fetchColumn() > 0) {
            $error = 'Username already exists.';
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO admins (username, password_hash, role, status) VALUES (?, ?, ?, 'Active')");
            $stmt->execute([$username, $hash, $role]);
            $_SESSION['success_message'] = "Admin '$username' created successfully with role: $role.";
            header('Location: admins.php');
            exit;
        }
    }
}

include 'includes/header.php';
?>

<div class="card">
    <div class="card-header"><h4>Create New Admin</h4></div>
    <div class="card-body">
        <?php if ($error): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required
                       value="<?= htmlspecialchars($_POST['username'] ?? '') ?>"
                       pattern="[a-zA-Z0-9_]{3,50}" title="3-50 characters, letters, numbers, underscores">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required minlength="6">
            </div>
            <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" required minlength="6">
            </div>
            <div class="mb-3">
                <label class="form-label">Role</label>
                <select name="role" class="form-select" required>
                    <?php foreach (get_all_roles() as $r): ?>
                        <?php if (can_assign_role($r)): ?>
                            <option value="<?= $r ?>" <?= ($_POST['role'] ?? '') === $r ? 'selected' : '' ?>><?= $r ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
                <small class="text-muted">Only roles you can assign are shown.</small>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i> Create Admin</button>
            <a href="admins.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
