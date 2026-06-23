<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
require_once 'includes/permissions.php';

// Super Admin only
require_super_admin();

$page_title = 'Admin Management';

// Handle status toggle
if (isset($_GET['toggle_status']) && isset($_GET['id'])) {
    $target_id = (int)$_GET['id'];
    // Cannot toggle own status
    if ($target_id === (int)$_SESSION['admin_id']) {
        $_SESSION['error_message'] = 'You cannot change your own status.';
    } else {
        $stmt = $pdo->prepare("SELECT status FROM admins WHERE id = ?");
        $stmt->execute([$target_id]);
        $target = $stmt->fetch();
        if ($target) {
            $new_status = $target['status'] === 'Active' ? 'Inactive' : 'Active';
            $stmt = $pdo->prepare("UPDATE admins SET status = ? WHERE id = ?");
            $stmt->execute([$new_status, $target_id]);
            $_SESSION['success_message'] = 'Admin status updated successfully.';
        }
    }
    header('Location: admins.php');
    exit;
}

// Handle delete admin
if (isset($_GET['delete']) && isset($_GET['id'])) {
    $target_id = (int)$_GET['id'];
    // Cannot delete self
    if ($target_id === (int)$_SESSION['admin_id']) {
        $_SESSION['error_message'] = 'You cannot delete your own account.';
    } else {
        $stmt = $pdo->prepare("DELETE FROM admins WHERE id = ?");
        $stmt->execute([$target_id]);
        $_SESSION['success_message'] = 'Admin deleted successfully.';
    }
    header('Location: admins.php');
    exit;
}

// Fetch all admins
$admins = $pdo->query("SELECT id, username, role, status, created_at FROM admins ORDER BY id ASC")->fetchAll();

include 'includes/header.php';
?>

<?php if (isset($_SESSION['success_message'])): ?>
    <div class="alert alert-success alert-dismissible fade show"><?= $_SESSION['success_message'] ?><button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
    <?php unset($_SESSION['success_message']); ?>
<?php endif; ?>
<?php if (isset($_SESSION['error_message'])): ?>
    <div class="alert alert-danger alert-dismissible fade show"><?= $_SESSION['error_message'] ?><button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
    <?php unset($_SESSION['error_message']); ?>
<?php endif; ?>

<div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
    <h4 class="section-title mb-0">Admin Management</h4>
    <a href="create-admin.php" class="btn btn-primary"><i class="fas fa-plus me-1"></i> Create Admin</a>
</div>

<div class="table-responsive">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if (count($admins) == 0): ?>
            <tr><td colspan="6">No admins found.</td></tr>
        <?php else: ?>
            <?php foreach ($admins as $admin): ?>
                <tr>
                    <td data-label="ID"><?= $admin['id'] ?></td>
                    <td data-label="Username"><?= htmlspecialchars($admin['username']) ?></td>
                    <td data-label="Role">
                        <span class="badge bg-<?= $admin['role'] === 'Super Admin' ? 'danger' : ($admin['role'] === 'Admin' ? 'primary' : ($admin['role'] === 'Manager' ? 'warning' : 'secondary')) ?>">
                            <?= htmlspecialchars($admin['role']) ?>
                        </span>
                    </td>
                    <td data-label="Status">
                        <span class="badge bg-<?= $admin['status'] === 'Active' ? 'success' : 'dark' ?>">
                            <?= htmlspecialchars($admin['status']) ?>
                        </span>
                    </td>
                    <td data-label="Created"><?= date('d-m-Y', strtotime($admin['created_at'])) ?></td>
                    <td data-label="Actions">
                        <div class="action-btns">
                            <a href="edit-admin.php?id=<?= $admin['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                            <?php if ((int)$admin['id'] !== (int)$_SESSION['admin_id']): ?>
                                <a href="admins.php?toggle_status=1&id=<?= $admin['id'] ?>" class="btn btn-sm <?= $admin['status'] === 'Active' ? 'btn-dark' : 'btn-success' ?>"
                                   onclick="return confirm('Toggle status for <?= htmlspecialchars(addslashes($admin['username'])) ?>?')">
                                    <?= $admin['status'] === 'Active' ? 'Deactivate' : 'Activate' ?>
                                </a>
                                <a href="admins.php?delete=1&id=<?= $admin['id'] ?>" class="btn btn-sm btn-danger"
                                   onclick="return confirm('Delete admin <?= htmlspecialchars(addslashes($admin['username'])) ?>? This cannot be undone.')">Delete</a>
                            <?php else: ?>
                                <span class="badge bg-info">You</span>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>
</div>

<?php include 'includes/footer.php'; ?>
