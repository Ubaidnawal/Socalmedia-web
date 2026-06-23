<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
require_once 'includes/permissions.php';
$page_title = 'Orders';

$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$status_filter = isset($_GET['status']) ? $_GET['status'] : '';

$sql = "SELECT * FROM orders WHERE 1=1";
$params = [];
if ($search) {
    $sql .= " AND order_id LIKE ?";
    $params[] = "%$search%";
}
if ($status_filter) {
    $sql .= " AND order_status = ?";
    $params[] = $status_filter;
}
$sql .= " ORDER BY created_at DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$orders = $stmt->fetchAll();

include 'includes/header.php';
?>
<div class="filter-bar">
    <form method="GET" class="d-flex flex-wrap gap-2 align-items-center">
        <input type="text" name="search" class="form-control" placeholder="Search order ID" value="<?= htmlspecialchars($search) ?>">
        <select name="status" class="form-select" style="max-width:200px;">
            <option value="">All Status</option>
            <option value="Pending" <?= $status_filter == 'Pending' ? 'selected' : '' ?>>Pending</option>
            <option value="Processing" <?= $status_filter == 'Processing' ? 'selected' : '' ?>>Processing</option>
            <option value="Completed" <?= $status_filter == 'Completed' ? 'selected' : '' ?>>Completed</option>
            <option value="Cancelled" <?= $status_filter == 'Cancelled' ? 'selected' : '' ?>>Cancelled</option>
        </select>
        <button type="submit" class="btn btn-primary">Filter</button>
        <a href="orders.php" class="btn btn-secondary">Reset</a>
    </form>
</div>
<div class="table-responsive">
<table class="table table-bordered">
    <thead><tr><th>Order ID</th><th>Customer</th><th>Country</th><th>Total</th><th>Status</th><th>Date</th><th>Actions</th></tr></thead>
    <tbody>
        <?php if (count($orders) == 0): ?>
            <tr><td colspan="7">No orders found.</td></tr>
        <?php else: ?>
            <?php foreach ($orders as $order): ?>
                <tr>
                    <td data-label="Order ID"><?= $order['order_id'] ?></td>
                    <td data-label="Customer"><?= htmlspecialchars($order['customer_name']) ?></td>
                    <td data-label="Country"><?= htmlspecialchars($order['country'] ?? '') ?></td>
                    <td data-label="Total">$<?= number_format($order['total_amount'], 2) ?></td>
                    <td data-label="Status"><span class="badge bg-<?= $order['order_status'] == 'Pending' ? 'warning' : ($order['order_status'] == 'Processing' ? 'info' : ($order['order_status'] == 'Completed' ? 'success' : 'danger')) ?>"><?= $order['order_status'] ?></span></td>
                    <td data-label="Date"><?= date('d-m-Y', strtotime($order['created_at'])) ?></td>
                    <td data-label="Actions">
                        <div class="action-btns">
                            <a href="order-details.php?order_id=<?= $order['order_id'] ?>" class="btn btn-sm btn-info">View</a>
                            <?php if (has_role(2)): ?>
                            <a href="update-order-status.php?order_id=<?= $order['order_id'] ?>&status=Processing" class="btn btn-sm btn-warning">Process</a>
                            <a href="update-order-status.php?order_id=<?= $order['order_id'] ?>&status=Completed" class="btn btn-sm btn-success">Complete</a>
                            <a href="update-order-status.php?order_id=<?= $order['order_id'] ?>&status=Cancelled" class="btn btn-sm btn-danger">Cancel</a>
                            <?php endif; ?>
                            <?php if (has_role(3)): ?>
                            <a href="delete-order.php?order_id=<?= $order['order_id'] ?>" class="btn btn-sm btn-dark" onclick="return confirm('Delete this order?')">Delete</a>
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