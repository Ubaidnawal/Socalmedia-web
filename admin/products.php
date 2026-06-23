<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
require_once 'includes/permissions.php';
$page_title = 'Products';

$products = $pdo->query("SELECT * FROM products ORDER BY created_at DESC")->fetchAll();

include 'includes/header.php';
?>
<div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
    <h4 class="section-title mb-0">Products</h4>
    <?php if (has_role(3)): ?>
    <a href="add-product.php" class="btn btn-primary"><i class="fas fa-plus me-1"></i> Add Product</a>
    <?php endif; ?>
</div>
<div class="table-responsive">
<table class="table table-bordered">
    <thead><tr><th>ID</th><th>Image</th><th>Name</th><th>Price</th><th>Stock</th><th>Actions</th></tr></thead>
    <tbody>
    <?php foreach ($products as $p): ?>
        <tr>
            <td data-label="ID"><?= $p['id'] ?></td>
            <td data-label="Image"><img src="<?= htmlspecialchars($p['product_image'] ?? '') ?>" width="50" height="50" alt="product"></td>
            <td data-label="Name"><?= htmlspecialchars($p['product_name']) ?></td>
            <td data-label="Price">$<?= number_format($p['product_price'], 2) ?></td>
            <td data-label="Stock"><?= $p['stock'] ?></td>
            <td data-label="Actions">
                <div class="action-btns">
                    <?php if (has_role(3)): ?>
                    <a href="edit-product.php?id=<?= $p['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="delete-product.php?id=<?= $p['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</a>
                    <?php else: ?>
                    <span class="badge bg-secondary">View Only</span>
                    <?php endif; ?>
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
<?php include 'includes/footer.php'; ?>