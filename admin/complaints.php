<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
require_once 'includes/permissions.php';
$page_title = 'Complaints';

$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$status_filter = isset($_GET['status']) ? $_GET['status'] : '';

$sql = "SELECT * FROM complaints WHERE 1=1";
$params = [];
if ($search) {
    $sql .= " AND (full_name LIKE ? OR email LIKE ? OR order_id LIKE ?)";
    $params[] = "%$search%";
    $params[] = "%$search%";
    $params[] = "%$search%";
}
if ($status_filter) {
    $sql .= " AND status = ?";
    $params[] = $status_filter;
}
$sql .= " ORDER BY created_at DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$complaints = $stmt->fetchAll();

include 'includes/header.php';
?>
<div class="filter-bar">
    <form method="GET" class="d-flex flex-wrap gap-2 align-items-center">
        <input type="text" name="search" class="form-control" placeholder="Search by name, email, order" value="<?= htmlspecialchars($search) ?>">
        <select name="status" class="form-select" style="max-width:200px;">
            <option value="">All Status</option>
            <option value="Pending" <?= $status_filter == 'Pending' ? 'selected' : '' ?>>Pending</option>
            <option value="In Progress" <?= $status_filter == 'In Progress' ? 'selected' : '' ?>>In Progress</option>
            <option value="Resolved" <?= $status_filter == 'Resolved' ? 'selected' : '' ?>>Resolved</option>
            <option value="Rejected" <?= $status_filter == 'Rejected' ? 'selected' : '' ?>>Rejected</option>
        </select>
        <button type="submit" class="btn btn-primary">Filter</button>
        <a href="complaints.php" class="btn btn-secondary">Reset</a>
    </form>
</div>
<div class="table-responsive">
<table class="table table-bordered">
    <thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Order ID</th><th>Type</th><th>Status</th><th>Date</th><th>Actions</th></tr></thead>
    <tbody>
        <?php if (count($complaints) == 0): ?>
            <tr><td colspan="8">No complaints found.</td></tr>
        <?php else: ?>
            <?php foreach ($complaints as $c): ?>
                <tr>
                    <td data-label="ID"><?= $c['id'] ?></td>
                    <td data-label="Name"><?= htmlspecialchars($c['full_name']) ?></td>
                    <td data-label="Email"><?= htmlspecialchars($c['email']) ?></td>
                    <td data-label="Order ID"><?= htmlspecialchars($c['order_id']) ?></td>
                    <td data-label="Type"><?= htmlspecialchars($c['complaint_type']) ?></td>
                    <td data-label="Status"><span class="badge bg-<?= $c['status'] == 'Pending' ? 'warning' : ($c['status'] == 'In Progress' ? 'info' : ($c['status'] == 'Resolved' ? 'success' : 'danger')) ?>"><?= $c['status'] ?></span></td>
                    <td data-label="Date"><?= date('d-m-Y', strtotime($c['created_at'])) ?></td>
                    <td data-label="Actions">
                        <div class="action-btns">
                            <a href="complaint-details.php?id=<?= $c['id'] ?>" class="btn btn-sm btn-info">View</a>
                            <?php if (has_role(2)): ?>
                            <a href="update-complaint-status.php?id=<?= $c['id'] ?>&status=In Progress" class="btn btn-sm btn-warning">In Progress</a>
                            <a href="update-complaint-status.php?id=<?= $c['id'] ?>&status=Resolved" class="btn btn-sm btn-success">Resolve</a>
                            <a href="update-complaint-status.php?id=<?= $c['id'] ?>&status=Rejected" class="btn btn-sm btn-danger">Reject</a>
                            <?php endif; ?>
                            <?php if (has_role(3)): ?>
                            <a href="delete-complaint.php?id=<?= $c['id'] ?>" class="btn btn-sm btn-dark" onclick="return confirm('Delete this complaint?')">Delete</a>
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