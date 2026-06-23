<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
$page_title = 'Customers';
// Distinct customers from orders
$stmt = $pdo->query("SELECT DISTINCT email, customer_name, whatsapp, country, city FROM orders ORDER BY created_at DESC");
$customers = $stmt->fetchAll();
include 'includes/header.php';
?>
<div class="table-responsive">
<table class="table table-bordered">
    <thead><tr><th>Name</th><th>Email</th><th>WhatsApp</th><th>Country</th><th>City</th><th>Orders</th></tr></thead>
    <tbody>
    <?php foreach ($customers as $c): ?>
        <tr>
            <td data-label="Name"><?= htmlspecialchars($c['customer_name']) ?></td>
            <td data-label="Email"><?= htmlspecialchars($c['email']) ?></td>
            <td data-label="WhatsApp"><?= htmlspecialchars($c['whatsapp']) ?></td>
            <td data-label="Country"><?= htmlspecialchars($c['country']) ?></td>
            <td data-label="City"><?= htmlspecialchars($c['city']) ?></td>
            <td data-label="Orders"><a href="customer-details.php?email=<?= urlencode($c['email']) ?>" class="btn btn-sm btn-info">View Orders</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
<?php include 'includes/footer.php'; ?>