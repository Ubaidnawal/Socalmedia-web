<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
$email = $_GET['email'] ?? '';
$stmt = $pdo->prepare("SELECT * FROM orders WHERE email = ? ORDER BY created_at DESC");
$stmt->execute([$email]);
$orders = $stmt->fetchAll();
$page_title = 'Customer Orders';
include 'includes/header.php';
?>
<h4>Orders for <?= htmlspecialchars($email) ?></h4>
<div class="table-responsive">
<table class="table"><thead><tr><th>Order ID</th><th>Date</th><th>Total</th><th>Status</th></tr></thead>
    <tbody>
    <?php foreach ($orders as $o): ?>
        <tr><td data-label="Order ID"><a href="order-details.php?order_id=<?= $o['order_id'] ?>"><?= $o['order_id'] ?></a></td><td data-label="Date"><?= $o['created_at'] ?></td><td data-label="Total">$<?= number_format($o['total_amount'], 2) ?></td><td data-label="Status"><?= $o['order_status'] ?></td></tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
<?php include 'includes/footer.php'; ?>