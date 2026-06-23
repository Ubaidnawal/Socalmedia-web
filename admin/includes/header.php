<?php
// admin/includes/header.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title><?= $page_title ?? 'Admin' ?> - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/admin.css?v=2">
    <link rel="stylesheet" href="../assets/css/responsive.css?v=1.0">
</head>
<body>

<!-- Mobile Top Bar -->
<div class="mobile-topbar d-md-none">
    <button class="sidebar-toggle" id="sidebarToggle" type="button" aria-label="Toggle sidebar">
        <i class="fas fa-bars"></i>
    </button>
    <span class="mobile-topbar-title">Admin Panel</span>
    <div class="dropdown">
        <button class="btn btn-link mobile-user-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user-circle"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
            <li><span class="dropdown-item-text">Welcome, <?= htmlspecialchars($_SESSION['admin_username'] ?? 'Admin') ?></span></li>
            <li><span class="dropdown-item-text text-muted small"><i class="fas fa-user-tag me-1"></i><?= htmlspecialchars($_SESSION['admin_role'] ?? 'Staff') ?></span></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger" href="logout.php"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
        </ul>
    </div>
</div>

<!-- Sidebar Overlay for Mobile -->
<div class="sidebar-overlay d-md-none" id="sidebarOverlay"></div>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h4>Admin</h4>
                <button class="sidebar-close d-md-none" id="sidebarClose" type="button" aria-label="Close sidebar">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="dashboard.php"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
                <li class="nav-item"><a class="nav-link" href="orders.php"><i class="fas fa-shopping-cart"></i> <span>Orders</span></a></li>
                <li class="nav-item"><a class="nav-link" href="products.php"><i class="fas fa-box"></i> <span>Products</span></a></li>
                <li class="nav-item"><a class="nav-link" href="customers.php"><i class="fas fa-users"></i> <span>Customers</span></a></li>
                <li class="nav-item"><a class="nav-link" href="reports.php"><i class="fas fa-chart-bar"></i> <span>Reports</span></a></li>
                <li class="nav-item"><a class="nav-link" href="complaints.php"><i class="fas fa-exclamation-triangle"></i> <span>Complaints</span></a></li>
                <li class="nav-item"><a class="nav-link" href="contact-requests.php"><i class="fas fa-envelope"></i> <span>Contact Requests</span>
                    <?php
                    // Count new (Pending) contact requests for the badge
                    try {
                        $cr_count = $pdo->query("SELECT COUNT(*) FROM contact_requests WHERE status = 'Pending'")->fetchColumn();
                        if ($cr_count > 0) {
                            echo '<span class="badge bg-danger ms-1" style="font-size:0.65rem;">' . (int)$cr_count . '</span>';
                        }
                    } catch (Exception $e) { /* silent fail */ }
                    ?>
                </span></a></li>
                <?php if (isset($_SESSION['admin_role']) && $_SESSION['admin_role'] === 'Super Admin'): ?>
                <li class="nav-item"><a class="nav-link" href="admins.php"><i class="fas fa-user-shield"></i> <span>Admin Management</span></a></li>
                <?php endif; ?>
                <li class="nav-item"><a class="nav-link" href="settings.php"><i class="fas fa-cog"></i> <span>Settings</span></a></li>
                <li class="nav-item mt-2"><a class="nav-link logout-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Desktop top navbar -->
            <div class="topbar d-none d-md-flex justify-content-between align-items-center">
                <h1 class="topbar-title"><?= $page_title ?? 'Dashboard' ?></h1>
                <div class="topbar-user">
                    <i class="fas fa-user-circle me-1"></i>
                    <span>Welcome, <?= htmlspecialchars($_SESSION['admin_username'] ?? 'Admin') ?></span>
                    <span class="badge bg-<?= $_SESSION['admin_role'] === 'Super Admin' ? 'danger' : ($_SESSION['admin_role'] === 'Admin' ? 'primary' : ($_SESSION['admin_role'] === 'Manager' ? 'warning' : 'secondary')) ?> ms-2"><?= htmlspecialchars($_SESSION['admin_role'] ?? 'Staff') ?></span>
                </div>
            </div>
            <!-- Mobile page title -->
            <div class="mobile-page-title d-md-none">
                <h1><?= $page_title ?? 'Dashboard' ?></h1>
            </div>
            <div class="content-wrapper">
