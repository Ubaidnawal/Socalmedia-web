<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
$page_title = 'Dashboard';

// Get counts
$total_orders = $pdo->query("SELECT COUNT(*) FROM orders")->fetchColumn();
$total_revenue = $pdo->query("SELECT SUM(total_amount) FROM orders WHERE order_status != 'Cancelled'")->fetchColumn() ?: 0;
$total_products = $pdo->query("SELECT COUNT(*) FROM products")->fetchColumn();
$pending = $pdo->query("SELECT COUNT(*) FROM orders WHERE order_status = 'Pending'")->fetchColumn();
$processing = $pdo->query("SELECT COUNT(*) FROM orders WHERE order_status = 'Processing'")->fetchColumn();
$completed = $pdo->query("SELECT COUNT(*) FROM orders WHERE order_status = 'Completed'")->fetchColumn();
$contact_pending = $pdo->query("SELECT COUNT(*) FROM contact_requests WHERE status = 'Pending'")->fetchColumn();
$total_contacts = $pdo->query("SELECT COUNT(*) FROM contact_requests")->fetchColumn();

// Recent orders
$recent = $pdo->query("SELECT * FROM orders ORDER BY created_at DESC LIMIT 5")->fetchAll();

include 'includes/header.php';
?>
<div class="row stat-cards">
    <div class="col-6 col-md-3"><div class="card text-white bg-primary mb-3"><div class="card-body"><h5 class="text-white">Total Orders</h5><h2><?= $total_orders ?></h2></div></div></div>
    <div class="col-6 col-md-3"><div class="card text-white bg-success mb-3"><div class="card-body"><h5>Revenue</h5><h2>$<?= number_format($total_revenue, 2) ?></h2></div></div></div>
    <div class="col-6 col-md-3"><div class="card text-white bg-info mb-3"><div class="card-body"><h5>Products</h5><h2><?= $total_products ?></h2></div></div></div>
    <div class="col-6 col-md-3"><div class="card text-white bg-warning mb-3"><div class="card-body"><h5>Pending</h5><h2><?= $pending ?></h2></div></div></div>
</div>
<div class="row stat-cards">
    <div class="col-6 col-md-4"><div class="card"><div class="card-body"><h5>Processing</h5><h3><?= $processing ?></h3></div></div></div>
    <div class="col-6 col-md-4"><div class="card"><div class="card-body"><h5>Completed</h5><h3><?= $completed ?></h3></div></div></div>
</div>
<div class="row stat-cards">
    <div class="col-6 col-md-3"><div class="card text-white bg-danger mb-3"><div class="card-body"><h5>Pending Contacts</h5><h2><?= $contact_pending ?></h2></div></div></div>
    <div class="col-6 col-md-3"><div class="card text-white bg-dark mb-3"><div class="card-body"><h5>Total Contacts</h5><h2><?= $total_contacts ?></h2></div></div></div>
</div>
<h4 class="section-title mt-4">Recent Orders</h4>
<div class="table-responsive">
<table class="table table-striped">
    <thead><tr><th>Order ID</th><th>Customer</th><th>Country</th><th>Total</th><th>Status</th><th>Date</th></tr></thead>
    <tbody>
        <?php foreach ($recent as $order): ?>
            <tr>
                <td data-label="Order ID"><a href="order-details.php?order_id=<?= $order['order_id'] ?>"><?= $order['order_id'] ?></a></td>
                <td data-label="Customer"><?= htmlspecialchars($order['customer_name']) ?></td>
                <td data-label="Country"><?= htmlspecialchars($order['country'] ?? '') ?></td>
                <td data-label="Total">$<?= number_format($order['total_amount'], 2) ?></td>
                <td data-label="Status"><span class="badge bg-<?= $order['order_status'] == 'Pending' ? 'warning' : ($order['order_status'] == 'Processing' ? 'info' : ($order['order_status'] == 'Completed' ? 'success' : 'danger')) ?>"><?= $order['order_status'] ?></span></td>
                <td data-label="Date"><?= date('d-m-Y', strtotime($order['created_at'])) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
<?php include 'includes/footer.php'; ?>