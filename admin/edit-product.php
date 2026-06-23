<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
require_once 'includes/permissions.php';
$id = $_GET['id'] ?? 0;
$product = $pdo->prepare("SELECT * FROM products WHERE id = ?");
$product->execute([$id]);
$p = $product->fetch();
if (!$p) { header('Location: products.php'); exit; }

require_role(3, 'products.php'); // Admin+

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $price = floatval($_POST['price']);
    $stock = intval($_POST['stock']);
    $desc = trim($_POST['description']);
    $image = $_POST['image'] ?? '';
    $stmt = $pdo->prepare("UPDATE products SET product_name=?, product_price=?, stock=?, description=?, product_image=? WHERE id=?");
    $stmt->execute([$name, $price, $stock, $desc, $image, $id]);
    header('Location: products.php');
    exit;
}
$page_title = 'Edit Product';
include 'includes/header.php';
?>
<div class="card">
    <div class="card-header"><h4 class="mb-0">Edit Product</h4></div>
    <div class="card-body">
        <form method="POST">
            <div class="mb-3"><label class="form-label">Product Name</label><input type="text" name="name" class="form-control" value="<?= htmlspecialchars($p['product_name']) ?>" required></div>
            <div class="row g-3 mb-3">
                <div class="col-md-6"><label class="form-label">Price ($)</label><input type="number" step="0.01" name="price" class="form-control" value="<?= $p['product_price'] ?>" required></div>
                <div class="col-md-6"><label class="form-label">Stock</label><input type="number" name="stock" class="form-control" value="<?= $p['stock'] ?>"></div>
            </div>
            <div class="mb-3"><label class="form-label">Description</label><textarea name="description" class="form-control" rows="4"><?= htmlspecialchars($p['description']) ?></textarea></div>
            <div class="mb-3"><label class="form-label">Image URL</label><input type="text" name="image" class="form-control" value="<?= htmlspecialchars($p['product_image']) ?>"></div>
            <div class="d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i>Update Product</button>
                <a href="products.php" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
<?php include 'includes/footer.php'; ?>