// admin/assets/js/admin.js
document.addEventListener('DOMContentLoaded', function() {
    // --- Mobile Sidebar Toggle ---
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    const toggleBtn = document.getElementById('sidebarToggle');
    const closeBtn = document.getElementById('sidebarClose');

    function openSidebar() {
        sidebar.classList.add('show');
        overlay.classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    function closeSidebar() {
        sidebar.classList.remove('show');
        overlay.classList.remove('show');
        document.body.style.overflow = '';
    }

    if (toggleBtn) toggleBtn.addEventListener('click', openSidebar);
    if (closeBtn) closeBtn.addEventListener('click', closeSidebar);
    if (overlay) overlay.addEventListener('click', closeSidebar);

    // Close sidebar when a nav link is clicked on mobile
    if (sidebar) {
        sidebar.querySelectorAll('.nav-link').forEach(function(link) {
            link.addEventListener('click', function() {
                if (window.innerWidth < 768) closeSidebar();
            });
        });
    }

    // Close sidebar on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeSidebar();
    });

    // --- Highlight Active Nav Link ---
    var currentPage = window.location.pathname.split('/').pop() || 'index.php';
    if (sidebar) {
        sidebar.querySelectorAll('.nav-link').forEach(function(link) {
            var href = link.getAttribute('href');
            if (href === currentPage) {
                link.classList.add('active');
            }
        });
    }

    // --- Auto-dismiss alerts after 4 seconds ---
    document.querySelectorAll('.alert-dismissible').forEach(function(alert) {
        setTimeout(function() {
            var bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
            bsAlert.close();
        }, 4000);
    });

    // --- Resize handler: close sidebar when crossing from mobile to tablet+ ---
    var lastWidth = window.innerWidth;
    window.addEventListener('resize', function() {
        var w = window.innerWidth;
        if (w >= 768 && lastWidth < 768 && sidebar && sidebar.classList.contains('show')) {
            closeSidebar();
        }
        lastWidth = w;
    });
});
