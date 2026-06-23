<?php
session_start();
if (!isset($_GET['order_id'])) {
    header('Location: index.php');
    exit;
}
$order_id = $_GET['order_id'];
require_once __DIR__ . '/../includes/db_connect.php';

$stmt = $pdo->prepare("SELECT * FROM orders WHERE order_id = ?");
$stmt->execute([$order_id]);
$order = $stmt->fetch();
if (!$order) {
    header('Location: index.php');
    exit;
}
$stmt = $pdo->prepare("SELECT * FROM order_items WHERE order_id = ?");
$stmt->execute([$order_id]);
$items = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link rel="stylesheet" href="../assets/css/cart.css?v=2">
    <link rel="stylesheet" href="../assets/css/responsive.css?v=1.0">
</head>
<body>
    <?php include 'header.php'; ?>
    <main class="order-details-page">
        <div class="container">
            <h1>Order Details</h1>
            <div class="order-info">
                <h2>Order #<?= htmlspecialchars($order['order_id']) ?></h2>
                <p><strong>Status:</strong> <?= $order['order_status'] ?></p>
                <p><strong>Placed on:</strong> <?= date('F j, Y', strtotime($order['created_at'])) ?></p>
            </div>
            <div class="customer-info">
                <h3>Customer Information</h3>
                <p><strong>Name:</strong> <?= htmlspecialchars($order['customer_name']) ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars($order['email']) ?></p>
                <p><strong>WhatsApp:</strong> <?= htmlspecialchars($order['whatsapp']) ?></p>
                <p><strong>Address:</strong> <?= htmlspecialchars($order['address']) ?>, <?= htmlspecialchars($order['city']) ?>, <?= htmlspecialchars($order['country']) ?> <?= htmlspecialchars($order['postal_code']) ?></p>
                <?php if (!empty($order['notes'])): ?>
                    <p><strong>Notes:</strong> <?= nl2br(htmlspecialchars($order['notes'])) ?></p>
                <?php endif; ?>
            </div>
            <div class="order-items">
                <h3>Products</h3>
                <table>
                    <thead>
                        <tr><th>Product</th><th>Price</th><th>Qty</th><th>Subtotal</th></tr>
                    </thead>
                    <tbody>
                        <?php foreach ($items as $item): ?>
                            <tr>
                                <td><?= htmlspecialchars($item['product_name']) ?></td>
                                <td>$<?= number_format($item['product_price'], 2) ?></td>
                                <td><?= $item['quantity'] ?></td>
                                <td>$<?= number_format($item['subtotal'], 2) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr><th colspan="3">Grand Total</th><th>$<?= number_format($order['total_amount'], 2) ?></th></tr>
                    </tfoot>
                </table>
            </div>
            <div style="display:flex; gap:12px; flex-wrap:wrap; margin-top:20px;">
                <a href="index.php" class="btn-continue">Continue Shopping</a>
                <button class="btn-details" onclick="window.print()" style="border:none; cursor:pointer;"><i class="fas fa-print"></i> Print / Download PDF</button>
            </div>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>