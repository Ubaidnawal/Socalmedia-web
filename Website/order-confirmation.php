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
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="../assets/css/cart.css?v=2">
    <link rel="stylesheet" href="../assets/css/responsive.css?v=1.0">
    <style>
        /* Invoice-specific styles for print/download */
        .invoice-wrapper {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 20px rgba(0,0,0,0.08);
            padding: 40px;
        }
        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #f0ece7;
        }
        .invoice-logo h2 {
            font-size: 1.8rem;
            font-weight: 800;
            color: #023b45;
            margin: 0;
        }
        .invoice-logo small {
            color: #6c757d;
            font-size: 0.8rem;
        }
        .invoice-title {
            text-align: right;
        }
        .invoice-title h1 {
            font-size: 1.6rem;
            color: #023b45;
            margin: 0;
        }
        .invoice-title .status-badge {
            display: inline-block;
            padding: 4px 16px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            background: #ffc107;
            color: #333;
            margin-top: 5px;
        }
        .invoice-divider {
            height: 2px;
            background: linear-gradient(90deg, #023b45, #B7A08B, transparent);
            margin: 20px 0;
        }
        .invoice-info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }
        .invoice-info-grid h4 {
            font-size: 0.85rem;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }
        .invoice-info-grid p {
            margin: 0;
            color: #333;
            font-size: 0.95rem;
        }
        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .invoice-table th {
            background: #023b45;
            color: #fff;
            padding: 12px 16px;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            text-align: left;
        }
        .invoice-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #f0ece7;
            font-size: 0.9rem;
        }
        .invoice-table tfoot td {
            font-weight: 700;
            font-size: 1.1rem;
            border-bottom: none;
            padding-top: 16px;
        }
        .invoice-total-row td {
            border-top: 2px solid #023b45;
        }
        .invoice-actions {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #f0ece7;
        }
        .btn-print {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 28px;
            background: #023b45;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
        }
        .btn-print:hover {
            background: #045d6c;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(2,59,69,0.3);
        }
        .btn-continue {
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        @media print {
            .invoice-actions { display: none !important; }
            .invoice-wrapper { box-shadow: none; padding: 20px; }
            .btn-continue { display: none !important; }
            .sticky-nav, .top-bar, footer, .cyber-footer { display: none !important; }
        }
        @media (max-width: 600px) {
            .invoice-wrapper { padding: 20px; }
            .invoice-header { flex-direction: column; text-align: center; }
            .invoice-title { text-align: center; }
            .invoice-info-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <main style="padding: 40px 20px;">
        <div class="container">
            <div class="invoice-wrapper" id="invoiceContent">
                <!-- Invoice Header -->
                <div class="invoice-header">
                    <div class="invoice-logo">
                        <h2><i class="fas fa-crown" style="color:#B7A08B;"></i> LuxeHaven</h2>
                        <small>Premium Account Services</small>
                    </div>
                    <div class="invoice-title">
                        <h1>INVOICE</h1>
                        <span class="status-badge"><?= htmlspecialchars($order['order_status']) ?></span>
                    </div>
                </div>

                <div class="invoice-divider"></div>

                <!-- Customer & Order Info -->
                <div class="invoice-info-grid">
                    <div>
                        <h4>Bill To</h4>
                        <p><strong><?= htmlspecialchars($order['customer_name']) ?></strong></p>
                        <p>Email: <?= htmlspecialchars($order['email']) ?></p>
                        <p>WhatsApp: <?= htmlspecialchars($order['whatsapp']) ?></p>
                        <p>Address: <?= htmlspecialchars($order['address']) ?>, <?= htmlspecialchars($order['city']) ?>, <?= htmlspecialchars($order['country']) ?> <?= htmlspecialchars($order['postal_code']) ?></p>
                        <?php if (!empty($order['notes'])): ?>
                            <p>Notes: <?= nl2br(htmlspecialchars($order['notes'])) ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <h4>Order Info</h4>
                        <p><strong>Order ID:</strong> <?= htmlspecialchars($order['order_id']) ?></p>
                        <p><strong>Date:</strong> <?= date('F j, Y, g:i a', strtotime($order['created_at'])) ?></p>
                        <p><strong>Products:</strong> <?= $order['total_products'] ?></p>
                        <p><strong>Status:</strong> <?= $order['order_status'] ?></p>
                    </div>
                </div>

                <!-- Items Table -->
                <table class="invoice-table">
                    <thead>
                        <tr><th>Product</th><th>Price</th><th>Quantity</th><th>Subtotal</th></tr>
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
                        <tr class="invoice-total-row">
                            <td colspan="3" style="text-align:right;">Grand Total</td>
                            <td>$<?= number_format($order['total_amount'], 2) ?></td>
                        </tr>
                    </tfoot>
                </table>

                <!-- Action Buttons -->
                <div class="invoice-actions">
                    <button class="btn-print" onclick="window.print()"><i class="fas fa-print"></i> Print / Download PDF</button>
                    <a href="index.php" class="btn-continue" style="background:#6c757d;">Continue Shopping</a>
                </div>
            </div>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
