<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
require_once 'includes/permissions.php';
require_role(3, 'products.php'); // Admin+
$page_title = 'Add Product';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $price = floatval($_POST['price']);
    $stock = intval($_POST['stock']);
    $desc = trim($_POST['description']);
    $image = $_POST['image'] ?? ''; // simple image URL, or handle upload

    $stmt = $pdo->prepare("INSERT INTO products (product_name, product_price, stock, description, product_image) VALUES (?,?,?,?,?)");
    $stmt->execute([$name, $price, $stock, $desc, $image]);
    header('Location: products.php');
    exit;
}
include 'includes/header.php';
?>
<div class="card">
    <div class="card-header"><h4 class="mb-0">Add New Product</h4></div>
    <div class="card-body">
        <form method="POST">
            <div class="mb-3"><label class="form-label">Product Name</label><input type="text" name="name" class="form-control" required></div>
            <div class="row g-3 mb-3">
                <div class="col-md-6"><label class="form-label">Price ($)</label><input type="number" step="0.01" name="price" class="form-control" required></div>
                <div class="col-md-6"><label class="form-label">Stock</label><input type="number" name="stock" class="form-control" value="0"></div>
            </div>
            <div class="mb-3"><label class="form-label">Description</label><textarea name="description" class="form-control" rows="4"></textarea></div>
            <div class="mb-3"><label class="form-label">Image URL</label><input type="text" name="image" class="form-control" placeholder="https://example.com/image.jpg"></div>
            <div class="d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i>Add Product</button>
                <a href="products.php" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
<?php include 'includes/footer.php'; ?>