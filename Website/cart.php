<?php
session_start();
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$total_items = array_sum(array_column($cart, 'quantity'));
$total_price = 0;
foreach ($cart as $item) {
    $total_price += $item['price'] * $item['quantity'];
}
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shopping Cart</title>
<style>
.cart-page-cont { max-width: 1000px; margin: 40px auto; padding: 0 20px; }
.cart-page-cont h1 { font-size: 2rem; font-weight: 700; color: #023b45; margin-bottom: 20px; }
.cart-grid { display: grid; grid-template-columns: 1.5fr 1fr; gap: 30px; align-items: start; }
.cart-item { display: flex; align-items: center; justify-content: space-between; padding: 15px 0; border-bottom: 1px solid #e0e0e0; gap: 10px; flex-wrap: wrap; }
.item-details h3 { margin: 0; font-size: 1.1rem; color: #023b45; }
.item-price { color: #555; font-size: 0.9rem; }
.item-quantity { display: flex; align-items: center; gap: 8px; }
.item-quantity input { width: 60px; padding: 6px; border: 1.5px solid #ddd; border-radius: 6px; font-size: 0.9rem; }
.remove-item { background: none; border: none; color: #d9534f; font-size: 1.5rem; cursor: pointer; padding: 4px 8px; }
.cart-summary { background: #fff; border-radius: 12px; padding: 24px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); position: sticky; top: 100px; }
.cart-summary h2 { font-size: 1.2rem; font-weight: 700; color: #023b45; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid #f0ece7; }
.cart-summary .grand-total { font-size: 1.3rem; font-weight: bold; margin: 20px 0; }
.btn-checkout, .btn-continue { display: inline-block; padding: 12px 24px; color: #fff; text-decoration: none; border-radius: 8px; border: none; cursor: pointer; font-size: 1rem; margin: 5px 0; text-align: center; }
.btn-checkout { background: #023b45; }
.btn-checkout:hover { background: #045d6c; }
.btn-continue { background: #6c757d; }
.btn-continue:hover { background: #5a6268; }
.empty-cart { font-size: 1.2rem; padding: 40px 0; text-align: center; }
@media (max-width: 768px) { .cart-grid { grid-template-columns: 1fr; } .cart-summary { position: static; } }
@media (max-width: 480px) { .cart-item { flex-direction: column; align-items: stretch; gap: 8px; } .btn-checkout, .btn-continue { width: 100%; } }
</style>
</head>
<body>

<div class="cart-page-cont">
    <h1>Your Cart</h1>
    <?php if (empty($cart)): ?>
        <p class="empty-cart">Your cart is empty. <a href="index.php" style="color:#023b45; font-weight:600;">Continue Shopping</a></p>
    <?php else: ?>
        <div class="cart-grid">
            <div>
                <?php foreach ($cart as $item): ?>
                    <div class="cart-item" data-id="<?= htmlspecialchars($item['id']) ?>">
                        <div class="item-details">
                            <h3><?= htmlspecialchars($item['name']) ?></h3>
                            <p class="item-price">$<?= number_format($item['price'], 2) ?></p>
                        </div>
                        <div class="item-quantity">
                            <label>Qty:</label>
                            <input type="number" value="<?= $item['quantity'] ?>" min="1" class="qty-input">
                        </div>
                        <div class="item-subtotal" style="font-weight:600;">$<?= number_format($item['price'] * $item['quantity'], 2) ?></div>
                        <button class="remove-item" data-id="<?= htmlspecialchars($item['id']) ?>" aria-label="Remove">✕</button>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="cart-summary">
                <h2>Summary</h2>
                <p>Total Products: <span id="totalProducts"><?= count($cart) ?></span></p>
                <p>Total Quantity: <span id="totalQuantity"><?= $total_items ?></span></p>
                <p class="grand-total">Grand Total: $<span id="grandTotal"><?= number_format($total_price, 2) ?></span></p>
                <a href="checkout.php" class="btn-checkout">Proceed to Checkout</a>
                <a href="index.php" class="btn-continue">Continue Shopping</a>
            </div>
        </div>
    <?php endif; ?>
</div>

<script>
// Qty change handler
document.querySelectorAll('.qty-input').forEach(function(input) {
    input.addEventListener('change', function() {
        var item = this.closest('.cart-item');
        var productId = item.dataset.id;
        var qty = parseInt(this.value) || 1;
        if (qty < 1) { this.value = 1; return; }
        fetch('../ajax/update_cart.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'id=' + encodeURIComponent(productId) + '&quantity=' + qty
        })
        .then(function(r) { return r.json(); })
        .then(function(data) {
            if (data.success) {
                var price = parseFloat(item.querySelector('.item-price').textContent.replace('$', '')) || 0;
                item.querySelector('.item-subtotal').textContent = '$' + (price * qty).toFixed(2);
                document.getElementById('totalQuantity').textContent = data.cart_count;
                document.getElementById('grandTotal').textContent = data.total_price;
            }
        })
        .catch(function(e) { console.error('Update error:', e); });
    });
});

// Remove handler
document.querySelectorAll('.remove-item').forEach(function(btn) {
    btn.addEventListener('click', function() {
        var item = this.closest('.cart-item');
        var productId = item.dataset.id;
        if (!confirm('Remove this item?')) return;
        fetch('../ajax/remove_from_cart.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'id=' + encodeURIComponent(productId)
        })
        .then(function(r) { return r.json(); })
        .then(function(data) {
            if (data.success) {
                item.remove();
                var remaining = document.querySelectorAll('.cart-item');
                document.getElementById('totalQuantity').textContent = data.cart_count;
                document.getElementById('grandTotal').textContent = data.total_price;
                document.getElementById('totalProducts').textContent = remaining.length;
                if (remaining.length === 0) location.reload();
            }
        })
        .catch(function(e) { console.error('Remove error:', e); });
    });
});
</script>

<?php include 'footer.php'; ?>
</body>
</html>
