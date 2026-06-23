<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
$page_title = 'Reports';
// Monthly revenue
$monthly = $pdo->query("SELECT DATE_FORMAT(created_at, '%Y-%m') as month, SUM(total_amount) as revenue FROM orders WHERE order_status != 'Cancelled' GROUP BY month ORDER BY month DESC LIMIT 12")->fetchAll();
include 'includes/header.php';
?>
<h4 class="section-title">Monthly Revenue</h4>
<div class="table-responsive">
<table class="table table-bordered">
    <thead><tr><th>Month</th><th>Revenue</th></tr></thead>
    <tbody>
    <?php foreach ($monthly as $m): ?>
        <tr><td data-label="Month"><?= $m['month'] ?></td><td data-label="Revenue">$<?= number_format($m['revenue'], 2) ?></td></tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
<?php include 'includes/footer.php'; ?>