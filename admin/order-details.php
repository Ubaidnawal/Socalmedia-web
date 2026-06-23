<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
$page_title = 'Order Details';

$order_id = $_GET['order_id'] ?? '';
$stmt = $pdo->prepare("SELECT * FROM orders WHERE order_id = ?");
$stmt->execute([$order_id]);
$order = $stmt->fetch();
if (!$order) {
    header('Location: orders.php');
    exit;
}
$stmt = $pdo->prepare("SELECT * FROM order_items WHERE order_id = ?");
$stmt->execute([$order_id]);
$items = $stmt->fetchAll();

include 'includes/header.php';
?>
<div class="card detail-card">
    <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h4 class="mb-0">Order #<?= $order['order_id'] ?></h4>
        <span class="badge bg-<?= $order['order_status'] == 'Pending' ? 'warning' : ($order['order_status'] == 'Processing' ? 'info' : ($order['order_status'] == 'Completed' ? 'success' : 'danger')) ?>"><?= $order['order_status'] ?></span>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <p><strong>Customer:</strong> <?= htmlspecialchars($order['customer_name']) ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars($order['email']) ?></p>
                <p><strong>WhatsApp:</strong> <?= htmlspecialchars($order['whatsapp']) ?></p>
            </div>
            <div class="col-md-6">
                <p><strong>Country:</strong> <?= htmlspecialchars($order['country'] ?? '') ?></p>
                <p><strong>Address:</strong> <?= htmlspecialchars($order['address']) ?>, <?= $order['city'] ?></p>
                <p><strong>Total:</strong> $<?= number_format($order['total_amount'], 2) ?></p>
            </div>
        </div>
        <h5 class="mt-3">Items</h5>
        <div class="table-responsive">
        <table class="table">
            <thead><tr><th>Product</th><th>Price</th><th>Qty</th><th>Subtotal</th></tr></thead>
            <tbody>
            <?php foreach ($items as $item): ?>
                <tr><td data-label="Product"><?= htmlspecialchars($item['product_name']) ?></td><td data-label="Price">$<?= number_format($item['product_price'], 2) ?></td><td data-label="Qty"><?= $item['quantity'] ?></td><td data-label="Subtotal">$<?= number_format($item['subtotal'], 2) ?></td></tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        </div>
        <div class="mt-3 d-flex flex-wrap gap-2">
            <a href="orders.php" class="btn btn-secondary"><i class="fas fa-arrow-left me-1"></i>Back</a>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>