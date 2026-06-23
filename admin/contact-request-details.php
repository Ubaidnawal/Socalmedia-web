<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
$page_title = 'Contact Request Details';

$id = (int)($_GET['id'] ?? 0);
$stmt = $pdo->prepare("SELECT * FROM contact_requests WHERE id = ?");
$stmt->execute([$id]);
$r = $stmt->fetch();

if (!$r) {
    $_SESSION['error_message'] = 'Contact request not found.';
    header('Location: contact-requests.php');
    exit;
}

function status_badge(string $status): string {
    return match ($status) {
        'Pending'     => 'bg-warning text-dark',
        'In Progress' => 'bg-info text-dark',
        'Resolved'    => 'bg-success',
        'Closed'      => 'bg-secondary',
        default       => 'bg-secondary',
    };
}

include 'includes/header.php';
?>
<div class="card detail-card">
    <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h4 class="mb-0">Contact Request #<?= (int)$r['id'] ?></h4>
        <span class="badge <?= status_badge($r['status']) ?>" style="font-size:0.85rem; padding:6px 16px;"><?= htmlspecialchars($r['status']) ?></span>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <p><strong>Full Name:</strong> <?= htmlspecialchars($r['full_name']) ?></p>
                <p><strong>Email:</strong> <a href="mailto:<?= htmlspecialchars($r['email']) ?>"><?= htmlspecialchars($r['email']) ?></a></p>
                <p><strong>WhatsApp:</strong> <?= htmlspecialchars($r['whatsapp'] ?: '—') ?></p>
                <p><strong>Service Required:</strong> <?= htmlspecialchars($r['service_required']) ?></p>
                <p><strong>Account Type:</strong> <?= htmlspecialchars($r['account_type']) ?></p>
            </div>
            <div class="col-md-6">
                <p><strong>Order ID:</strong> <?= htmlspecialchars($r['order_id'] ?: '—') ?></p>
                <p><strong>Subject:</strong> <?= htmlspecialchars($r['subject']) ?></p>
                <p><strong>Status:</strong> <span class="badge <?= status_badge($r['status']) ?>"><?= htmlspecialchars($r['status']) ?></span></p>
                <p><strong>Submitted:</strong> <?= date('F j, Y, g:i a', strtotime($r['created_at'])) ?></p>
                <?php if ($r['updated_at'] && $r['updated_at'] !== $r['created_at']): ?>
                <p><strong>Last Updated:</strong> <?= date('F j, Y, g:i a', strtotime($r['updated_at'])) ?></p>
                <?php endif; ?>
            </div>
        </div>
        <hr>
        <p><strong>Message:</strong></p>
        <div class="border rounded p-3 bg-light" style="white-space: pre-wrap; word-break: break-word;"><?= nl2br(htmlspecialchars($r['message'])) ?></div>

        <div class="mt-4 d-flex flex-wrap gap-2">
            <a href="contact-requests.php" class="btn btn-secondary"><i class="fas fa-arrow-left me-1"></i>Back to List</a>

            <?php if (has_role(2)): ?>
                <?php if ($r['status'] !== 'In Progress'): ?>
                <a href="update-contact-status.php?id=<?= (int)$r['id'] ?>&status=In Progress&from=details" class="btn btn-warning"><i class="fas fa-spinner me-1"></i>Mark In Progress</a>
                <?php endif; ?>
                <?php if ($r['status'] !== 'Resolved'): ?>
                <a href="update-contact-status.php?id=<?= (int)$r['id'] ?>&status=Resolved&from=details" class="btn btn-success"><i class="fas fa-check me-1"></i>Resolve</a>
                <?php endif; ?>
                <?php if ($r['status'] !== 'Closed'): ?>
                <a href="update-contact-status.php?id=<?= (int)$r['id'] ?>&status=Closed&from=details" class="btn btn-secondary"><i class="fas fa-times me-1"></i>Close</a>
                <?php endif; ?>
            <?php endif; ?>

            <?php if (has_role(3)): ?>
            <a href="delete-contact.php?id=<?= (int)$r['id'] ?>" class="btn btn-danger" onclick="return confirm('Delete this contact request permanently?')"><i class="fas fa-trash me-1"></i>Delete</a>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
