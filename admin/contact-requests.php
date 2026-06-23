<?php
require_once 'includes/auth.php';
require_once 'includes/db.php';
require_once 'includes/permissions.php';
$page_title = 'Contact Requests';

// ── Search & Filters ──
$search       = isset($_GET['search']) ? trim($_GET['search']) : '';
$status_filter = isset($_GET['status']) ? $_GET['status'] : '';

// ── Sorting ──
$sortable_cols = ['id', 'full_name', 'email', 'status', 'created_at'];
$sort          = isset($_GET['sort']) && in_array($_GET['sort'], $sortable_cols, true) ? $_GET['sort'] : 'created_at';
$order         = isset($_GET['order']) && strtoupper($_GET['order']) === 'ASC' ? 'ASC' : 'DESC';
$opposite      = $order === 'ASC' ? 'DESC' : 'ASC';
$sort_arrow    = $order === 'ASC' ? ' ▲' : ' ▼';

// ── Pagination ──
$page     = max(1, (int)($_GET['p'] ?? 1));
$per_page = 15;
$offset   = ($page - 1) * $per_page;

// ── Count query ──
$count_sql = "SELECT COUNT(*) FROM contact_requests WHERE 1=1";
$count_params = [];
if ($search) {
    $count_sql .= " AND (full_name LIKE ? OR email LIKE ? OR order_id LIKE ? OR subject LIKE ?)";
    $s = "%$search%";
    $count_params[] = $s; $count_params[] = $s; $count_params[] = $s; $count_params[] = $s;
}
if ($status_filter) {
    $count_sql .= " AND status = ?";
    $count_params[] = $status_filter;
}
$total_rows = $pdo->prepare($count_sql);
$total_rows->execute($count_params);
$total = (int)$total_rows->fetchColumn();
$total_pages = max(1, (int)ceil($total / $per_page));
if ($page > $total_pages) $page = $total_pages;

// ── Data query ──
$data_sql = "SELECT * FROM contact_requests WHERE 1=1";
$data_params = [];
if ($search) {
    $data_sql .= " AND (full_name LIKE ? OR email LIKE ? OR order_id LIKE ? OR subject LIKE ?)";
    $s = "%$search%";
    $data_params[] = $s; $data_params[] = $s; $data_params[] = $s; $data_params[] = $s;
}
if ($status_filter) {
    $data_sql .= " AND status = ?";
    $data_params[] = $status_filter;
}
// Validate sort column (safe for direct injection since we whitelist)
$data_sql .= " ORDER BY $sort $order LIMIT $per_page OFFSET $offset";
$stmt = $pdo->prepare($data_sql);
$stmt->execute($data_params);
$requests = $stmt->fetchAll();

// ── Status badge helper ──
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
<?php if (isset($_SESSION['success_message'])): ?>
    <div class="alert alert-success alert-dismissible fade show"><?= htmlspecialchars($_SESSION['success_message']) ?><button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
    <?php unset($_SESSION['success_message']); ?>
<?php endif; ?>
<?php if (isset($_SESSION['error_message'])): ?>
    <div class="alert alert-danger alert-dismissible fade show"><?= htmlspecialchars($_SESSION['error_message']) ?><button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
    <?php unset($_SESSION['error_message']); ?>
<?php endif; ?>

<div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
    <h4 class="section-title mb-0" style="border: none; padding: 0;">All Contact Requests</h4>
    <span class="text-muted small"><?= $total ?> request<?= $total !== 1 ? 's' : '' ?> found</span>
</div>

<!-- Filter Bar -->
<div class="filter-bar">
    <form method="GET" class="d-flex flex-wrap gap-2 align-items-center">
        <input type="text" name="search" class="form-control" placeholder="Search by name, email, order, subject …" value="<?= htmlspecialchars($search) ?>">
        <select name="status" class="form-select" style="max-width:200px;">
            <option value="">All Statuses</option>
            <option value="Pending" <?= $status_filter === 'Pending' ? 'selected' : '' ?>>Pending</option>
            <option value="In Progress" <?= $status_filter === 'In Progress' ? 'selected' : '' ?>>In Progress</option>
            <option value="Resolved" <?= $status_filter === 'Resolved' ? 'selected' : '' ?>>Resolved</option>
            <option value="Closed" <?= $status_filter === 'Closed' ? 'selected' : '' ?>>Closed</option>
        </select>
        <button type="submit" class="btn btn-primary"><i class="fas fa-filter me-1"></i>Filter</button>
        <a href="contact-requests.php" class="btn btn-secondary"><i class="fas fa-undo me-1"></i>Reset</a>
    </form>
</div>

<!-- Table -->
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th><a href="?<?= http_build_query(array_merge($_GET, ['sort' => 'id', 'order' => $sort === 'id' ? $opposite : 'ASC'])) ?>" class="text-white text-decoration-none">ID<?= $sort === 'id' ? $sort_arrow : '' ?></a></th>
                <th><a href="?<?= http_build_query(array_merge($_GET, ['sort' => 'full_name', 'order' => $sort === 'full_name' ? $opposite : 'ASC'])) ?>" class="text-white text-decoration-none">Full Name<?= $sort === 'full_name' ? $sort_arrow : '' ?></a></th>
                <th><a href="?<?= http_build_query(array_merge($_GET, ['sort' => 'email', 'order' => $sort === 'email' ? $opposite : 'ASC'])) ?>" class="text-white text-decoration-none">Email<?= $sort === 'email' ? $sort_arrow : '' ?></a></th>
                <th>WhatsApp</th>
                <th>Service</th>
                <th>Account Type</th>
                <th>Order ID</th>
                <th>Subject</th>
                <th>Message</th>
                <th><a href="?<?= http_build_query(array_merge($_GET, ['sort' => 'status', 'order' => $sort === 'status' ? $opposite : 'ASC'])) ?>" class="text-white text-decoration-none">Status<?= $sort === 'status' ? $sort_arrow : '' ?></a></th>
                <th><a href="?<?= http_build_query(array_merge($_GET, ['sort' => 'created_at', 'order' => $sort === 'created_at' ? $opposite : 'DESC'])) ?>" class="text-white text-decoration-none">Date<?= $sort === 'created_at' ? $sort_arrow : '' ?></a></th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($requests) === 0): ?>
                <tr><td colspan="12" class="text-center py-4 text-muted">No contact requests found.</td></tr>
            <?php else: ?>
                <?php foreach ($requests as $r): ?>
                <tr>
                    <td data-label="ID"><?= (int)$r['id'] ?></td>
                    <td data-label="Name"><?= htmlspecialchars($r['full_name']) ?></td>
                    <td data-label="Email"><?= htmlspecialchars($r['email']) ?></td>
                    <td data-label="WhatsApp"><?= htmlspecialchars($r['whatsapp'] ?: '—') ?></td>
                    <td data-label="Service"><?= htmlspecialchars($r['service_required']) ?></td>
                    <td data-label="Account"><?= htmlspecialchars($r['account_type']) ?></td>
                    <td data-label="Order ID"><?= htmlspecialchars($r['order_id'] ?: '—') ?></td>
                    <td data-label="Subject"><?= htmlspecialchars(mb_substr($r['subject'], 0, 40)) . (mb_strlen($r['subject']) > 40 ? '…' : '') ?></td>
                    <td data-label="Message"><?= htmlspecialchars(mb_substr($r['message'], 0, 50)) . (mb_strlen($r['message']) > 50 ? '…' : '') ?></td>
                    <td data-label="Status"><span class="badge <?= status_badge($r['status']) ?>"><?= htmlspecialchars($r['status']) ?></span></td>
                    <td data-label="Date"><?= date('d-m-Y', strtotime($r['created_at'])) ?></td>
                    <td data-label="Actions">
                        <div class="action-btns">
                            <a href="contact-request-details.php?id=<?= (int)$r['id'] ?>" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                            <?php if (has_role(2)): ?>
                                <?php if ($r['status'] !== 'In Progress'): ?>
                                <a href="update-contact-status.php?id=<?= (int)$r['id'] ?>&status=In Progress" class="btn btn-sm btn-warning" title="Mark In Progress"><i class="fas fa-spinner"></i></a>
                                <?php endif; ?>
                                <?php if ($r['status'] !== 'Resolved'): ?>
                                <a href="update-contact-status.php?id=<?= (int)$r['id'] ?>&status=Resolved" class="btn btn-sm btn-success" title="Resolve"><i class="fas fa-check"></i></a>
                                <?php endif; ?>
                                <?php if ($r['status'] !== 'Closed'): ?>
                                <a href="update-contact-status.php?id=<?= (int)$r['id'] ?>&status=Closed" class="btn btn-sm btn-secondary" title="Close"><i class="fas fa-times"></i></a>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php if (has_role(3)): ?>
                            <a href="delete-contact.php?id=<?= (int)$r['id'] ?>" class="btn btn-sm btn-dark" onclick="return confirm('Delete this contact request permanently?')" title="Delete"><i class="fas fa-trash"></i></a>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<!-- Pagination -->
<?php if ($total_pages > 1): ?>
<nav aria-label="Contact requests pagination">
    <ul class="pagination pagination-sm justify-content-center flex-wrap">
        <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
            <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['p' => 1])) ?>"><i class="fas fa-angle-double-left"></i></a>
        </li>
        <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
            <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['p' => $page - 1])) ?>"><i class="fas fa-angle-left"></i></a>
        </li>
        <?php
        $start_page = max(1, $page - 2);
        $end_page   = min($total_pages, $page + 2);
        for ($i = $start_page; $i <= $end_page; $i++):
        ?>
            <li class="page-item <?= $i === $page ? 'active' : '' ?>">
                <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['p' => $i])) ?>"><?= $i ?></a>
            </li>
        <?php endfor; ?>
        <li class="page-item <?= $page >= $total_pages ? 'disabled' : '' ?>">
            <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['p' => $page + 1])) ?>"><i class="fas fa-angle-right"></i></a>
        </li>
        <li class="page-item <?= $page >= $total_pages ? 'disabled' : '' ?>">
            <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['p' => $total_pages])) ?>"><i class="fas fa-angle-double-right"></i></a>
        </li>
    </ul>
</nav>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>
