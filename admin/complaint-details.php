<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
$page_title = 'Complaint Details';

$id = $_GET['id'] ?? 0;
$stmt = $pdo->prepare("SELECT * FROM complaints WHERE id = ?");
$stmt->execute([$id]);
$c = $stmt->fetch();
if (!$c) {
    header('Location: complaints.php');
    exit;
}
include 'includes/header.php';
?>
<div class="card detail-card">
    <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h4 class="mb-0">Complaint #<?= $c['id'] ?></h4>
        <span class="badge bg-<?= $c['status'] == 'Pending' ? 'warning' : ($c['status'] == 'In Progress' ? 'info' : ($c['status'] == 'Resolved' ? 'success' : 'danger')) ?>"><?= htmlspecialchars($c['status']) ?></span>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <p><strong>Name:</strong> <?= htmlspecialchars($c['full_name']) ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars($c['email']) ?></p>
                <p><strong>WhatsApp:</strong> <?= htmlspecialchars($c['whatsapp']) ?></p>
                <p><strong>Country:</strong> <?= htmlspecialchars($c['country']) ?></p>
                <p><strong>Order ID:</strong> <?= htmlspecialchars($c['order_id']) ?></p>
            </div>
            <div class="col-md-6">
                <p><strong>Account Type:</strong> <?= htmlspecialchars($c['account_type']) ?></p>
                <p><strong>Complaint Type:</strong> <?= htmlspecialchars($c['complaint_type']) ?></p>
                <p><strong>Replacement Required:</strong> <?= $c['replacement_required'] ?></p>
                <p><strong>Submitted:</strong> <?= date('F j, Y, g:i a', strtotime($c['created_at'])) ?></p>
            </div>
        </div>
        <p><strong>Description:</strong></p>
        <div class="border rounded p-3 bg-light mb-3" style="white-space: pre-wrap; word-break: break-word;"><?= nl2br(htmlspecialchars($c['description'])) ?></div>
        <?php if ($c['evidence']): ?>
            <p><strong>Evidence:</strong> <a href="<?= $c['evidence'] ?>" target="_blank" class="btn btn-sm btn-info"><i class="fas fa-download me-1"></i>Download</a></p>
        <?php endif; ?>
        <div class="mt-3 d-flex flex-wrap gap-2">
            <a href="complaints.php" class="btn btn-secondary"><i class="fas fa-arrow-left me-1"></i>Back</a>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>