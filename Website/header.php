<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$cart_count = 0;
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $cart_count = array_sum(array_column($_SESSION['cart'], 'quantity'));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>LuxeHaven | Modern Premium Navbar</title>

  <!-- Libraries -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link rel="stylesheet" href="../assets/css/cart.css">
  <link rel="stylesheet" href="../assets/css/responsive.css?v=1.0">

  <style>
    /* ===== RESET ===== */
    *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

    body {
      background: #f4f2ef;
      font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, sans-serif;
    }
    a { text-decoration: none; }

    /* ===== TOP BAR (thin black strip) ===== */
    .top-bar {
      background: #000000;
      color: #ffffff;
      width: 100%;
    }
    .top-bar-inner {
      max-width: 1440px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 6px 24px;
    }
    .top-bar-email {
      color: #ffffff;
      font-size: 0.8rem;
      font-style: italic;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    .top-bar-email:hover { color: #B7A08B; }
    .top-bar-socials {
      display: flex;
      align-items: center;
      gap: 14px;
      flex-shrink: 0;
    }
    .top-bar-socials a {
      font-size: 1rem;
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }
    .top-bar-socials a:hover {
      /* no changes on hover — icons stay identical */
    }

    /* ===== STICKY NAV (dark teal) ===== */
    .sticky-nav {
      position: sticky;
      top: 0;
      z-index: 1030;
      background: #023b45;
      transition: box-shadow 0.3s ease;
    }
    .sticky-nav.scrolled {
      box-shadow: 0 8px 28px rgba(0, 0, 0, 0.25);
    }

    .nav-inner {
      max-width: 1440px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 14px 24px;
    }

    /* ===== BRAND / LOGO ===== */
    .brand {
      display: flex;
      align-items: center;
      gap: 10px;
      flex-shrink: 0;
      text-decoration: none;
    }
    .brand i {
      font-size: 1.6rem;
      color: #B7A08B;
    }
    .brand span {
      font-size: 1.6rem;
      font-weight: 800;
      letter-spacing: -0.03em;
      background: linear-gradient(135deg, #FEFAF7 0%, #e6ddd4 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      line-height: 1;
    }

    /* ===== DESKTOP NAV LINKS — PERFECTLY CENTERED ===== */
    .desktop-nav {
      display: flex;
      align-items: center;
      justify-content: center;
      flex: 1 1 auto;
      margin: 0 20px;
      gap: 4px;
    }
    .nav-link {
      color: rgba(254, 250, 247, 0.9) !important;
      font-weight: 500;
      font-size: 0.92rem;
      padding: 0.5rem 1rem;
      border-radius: 8px;
      transition: all 0.2s ease;
      white-space: nowrap;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
    }
    .nav-link:hover {
      background: rgba(183, 160, 139, 0.2);
      color: #ffffff !important;
      border-radius: 8px;
    }
    .nav-link.active {
      background: #B7A08B;
      color: #023b45 !important;
      font-weight: 600;
      border-radius: 8px;
    }
    .dropdown-item-custom.active-item {
      background: #B7A08B;
      color: #023b45 !important;
      padding-left: 1.8rem;
      font-weight: 700;
    }
    .mob-link.active-mob {
      color: #B7A08B !important;
      font-weight: 700;
      border-bottom-color: #B7A08B;
    }
    .mob-dropdown-item.active-mob-item {
      color: #B7A08B !important;
      font-weight: 700;
    }

    /* ===== DESKTOP DROPDOWN ===== */
    .dropdown-wrap { position: relative; }
    .dropdown-menu-custom {
      position: absolute;
      top: 100%;
      left: 50%;
      transform: translateX(-50%) translateY(-8px);
      z-index: 1050;
      background: rgba(2, 59, 69, 0.98);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(183, 160, 139, 0.3);
      border-radius: 18px;
      padding: 8px 0;
      margin-top: 6px;
      width: 210px;
      box-shadow: 0 20px 35px rgba(0,0,0,0.35);
      opacity: 0;
      visibility: hidden;
      transition: all 0.25s ease;
    }
    .dropdown-menu-custom.show {
      opacity: 1;
      visibility: visible;
      transform: translateX(-50%) translateY(0);
    }
    .dropdown-item-custom {
      display: block;
      padding: 0.55rem 1.4rem;
      color: #FEFAF7 !important;
      font-size: 0.88rem;
      font-weight: 500;
      transition: all 0.2s;
      text-decoration: none;
    }
    .dropdown-item-custom:hover {
      background: #B7A08B;
      color: #023b45 !important;
      padding-left: 1.8rem;
    }

    /* ===== RIGHT ACTIONS (search + cart) ===== */
    .right-actions {
      display: flex;
      align-items: center;
      gap: 10px;
      flex-shrink: 0;
    }
    .search-wrap { position: relative; }
    .search-wrap i {
      position: absolute;
      left: 12px;
      top: 50%;
      transform: translateY(-50%);
      color: #B7A08B;
      font-size: 0.8rem;
      pointer-events: none;
    }
    .search-wrap input {
      background: rgba(254, 250, 247, 0.12);
      border: 1px solid rgba(183, 160, 139, 0.4);
      border-radius: 60px;
      padding: 0.4rem 1rem 0.4rem 2.2rem;
      color: #FEFAF7;
      font-size: 0.82rem;
      width: 180px;
      outline: none;
      transition: all 0.25s ease;
    }
    .search-wrap input:focus {
      background: rgba(254, 250, 247, 0.2);
      border-color: #B7A08B;
      width: 200px;
    }
    .search-wrap input::placeholder { color: rgba(254, 250, 247, 0.55); }

    .cart-btn {
      border: 1.5px solid #B7A08B;
      background: transparent;
      color: #FEFAF7;
      border-radius: 8px;
      padding: 0.4rem 1rem;
      font-size: 0.85rem;
      font-weight: 600;
      transition: all 0.25s ease;
      position: relative;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }
    .cart-btn:hover {
      background: #B7A08B;
      color: #023b45;
    }
    .cart-counter {
      display: none;
      background: #B7A08B;
      color: #023b45;
      border-radius: 50%;
      padding: 0 5px;
      font-size: 0.65rem;
      font-weight: 700;
      line-height: 1.4;
      min-width: 17px;
      text-align: center;
    }
    .cart-counter.visible { display: inline-block !important; }

    /* ===== MOBILE-ONLY CART ===== */
    .mobile-cart {
      display: none;
      position: relative;
      border: 1.5px solid #B7A08B;
      border-radius: 8px;
      width: 36px;
      height: 36px;
      align-items: center;
      justify-content: center;
      color: #FEFAF7;
      font-size: 0.9rem;
      text-decoration: none;
      flex-shrink: 0;
      transition: background 0.2s;
    }
    .mobile-cart:hover { background: rgba(183,160,139,0.15); }
    .mobile-cart .cart-counter {
      position: absolute;
      top: -5px;
      right: -5px;
      font-size: 0.55rem;
      min-width: 15px;
      padding: 0 3px;
    }

    /* ===== HAMBURGER ===== */
    .hamburger {
      display: none;
      background: transparent;
      border: none;
      cursor: pointer;
      width: 36px;
      height: 36px;
      padding: 6px;
      flex-shrink: 0;
      border-radius: 8px;
      transition: background 0.2s;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
    .hamburger:hover { background: rgba(183,160,139,0.15); }
    .hamburger span {
      display: block;
      width: 22px;
      height: 2.5px;
      background: #FEFAF7;
      border-radius: 2px;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .hamburger span + span { margin-top: 5px; }

    /* Hamburger open = X */
    .hamburger.open span:nth-child(1) {
      transform: translateY(7.5px) rotate(45deg);
    }
    .hamburger.open span:nth-child(2) {
      opacity: 0;
      transform: scaleX(0);
    }
    .hamburger.open span:nth-child(3) {
      transform: translateY(-7.5px) rotate(-45deg);
    }

    /* ===== MOBILE MENU ===== */
    .mobile-menu {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.45s cubic-bezier(0.23, 1, 0.32, 1);
      background: #023b45;
    }
    .mobile-menu.open { max-height: 560px; }
    .mobile-menu-inner { padding: 0 24px 16px; }
    .mobile-menu .search-wrap { margin-bottom: 16px; }
    .mobile-menu .search-wrap input { width: 100%; }

    .mob-link {
      display: block;
      color: #FEFAF7 !important;
      padding: 0.7rem 0;
      font-weight: 500;
      font-size: 0.92rem;
      border-bottom: 1px solid rgba(183,160,139,0.15);
      text-decoration: none;
    }
    .mob-link:hover { color: #B7A08B !important; }
    .mob-dropdown-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      cursor: pointer;
    }
    .mob-dropdown-items {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease;
    }
    .mob-dropdown-items.open { max-height: 250px; }
    .mob-dropdown-item {
      display: block;
      color: #FEFAF7;
      padding: 0.55rem 0 0.55rem 1rem;
      font-size: 0.88rem;
      text-decoration: none;
    }
    .mob-dropdown-item:hover { color: #B7A08B; }

    .fa-chevron-down { font-size: 11px; transition: transform 0.2s; }

    /* ==============================================================
       RESPONSIVE BREAKPOINTS
    ============================================================== */

    /* ---- Desktop 1200px+ (large) ---- */
    @media (min-width: 1200px) {
      .nav-link { font-size: 0.95rem; padding: 0.55rem 1.1rem; }
      .desktop-nav { gap: 6px; }
      .search-wrap input { width: 200px; }
      .search-wrap input:focus { width: 220px; }
      .nav-inner { padding: 16px 32px; }
      .top-bar-inner { padding: 7px 32px; }
    }

    /* ---- Ultra-wide 1440px+ ---- */
    @media (min-width: 1440px) {
      .nav-inner, .top-bar-inner { padding-left: 40px; padding-right: 40px; }
      .desktop-nav { gap: 8px; }
      .nav-link { font-size: 1rem; padding: 0.55rem 1.2rem; }
      .brand span { font-size: 1.8rem; }
      .brand i { font-size: 1.8rem; }
      .search-wrap input { width: 220px; }
      .search-wrap input:focus { width: 240px; }
    }

    /* ---- Desktop 992px+ ---- */
    @media (min-width: 992px) {
      .desktop-nav { display: flex !important; }
      .right-actions { display: flex !important; }
      .hamburger { display: none !important; }
      .mobile-cart { display: none !important; }
      .mobile-menu { display: none !important; }
    }

    /* ---- Small Desktop / Large Tablet 992–1199px ---- */
    @media (min-width: 992px) and (max-width: 1199px) {
      .brand span { font-size: 1.3rem; }
      .brand i { font-size: 1.3rem; }
      .brand { gap: 6px; }
      .nav-link { font-size: 0.78rem; padding: 0.35rem 0.65rem; }
      .desktop-nav { gap: 2px; margin: 0 10px; }
      .search-wrap input { width: 130px; font-size: 0.76rem; }
      .search-wrap input:focus { width: 145px; }
      .right-actions { gap: 6px; }
      .cart-btn { font-size: 0.76rem; padding: 0.3rem 0.7rem; }
    }

    /* ---- Tablet 768–991px ---- */
    @media (min-width: 768px) and (max-width: 991px) {
      .brand span { font-size: 1.5rem; }
      .brand i { font-size: 1.5rem; }
      .top-bar-inner { padding: 6px 20px; }
      .top-bar-socials { gap: 12px; }
    }

    /* ---- Mobile under 992px ---- */
    @media (max-width: 991px) {
      .desktop-nav { display: none !important; }
      .right-actions { display: none !important; }
      .hamburger { display: flex !important; }
      .mobile-cart { display: flex !important; }
      .nav-inner { padding: 10px 16px; }
      .top-bar-inner { padding: 5px 16px; }
    }

    /* ---- Small phones < 576px ---- */
    @media (max-width: 575px) {
      .top-bar-email { font-size: 0.7rem; max-width: 55%; }
      .top-bar-socials { gap: 8px; }
      .top-bar-socials a { font-size: 0.9rem; }

      .nav-inner { padding: 8px 12px; }
      .brand i { font-size: 1.2rem; }
      .brand span { font-size: 1.15rem; }
      .brand { gap: 6px; }

      .hamburger { width: 32px; height: 32px; padding: 5px; }
      .hamburger span { width: 20px; height: 2px; }
      .hamburger span + span { margin-top: 4px; }
      .hamburger.open span:nth-child(1) { transform: translateY(6px) rotate(45deg); }
      .hamburger.open span:nth-child(3) { transform: translateY(-6px) rotate(-45deg); }

      .mobile-cart { width: 32px; height: 32px; font-size: 0.85rem; }
      .mobile-menu-inner { padding: 0 16px 12px; }
      .mob-link { font-size: 0.85rem; padding: 0.6rem 0; }
      .mob-dropdown-item { font-size: 0.82rem; }
    }

    /* ---- Tiny phones < 380px ---- */
    @media (max-width: 379px) {
      .top-bar-email { font-size: 0.6rem; max-width: 50%; }
      .top-bar-socials { gap: 5px; }
      .top-bar-socials a { font-size: 0.8rem; }
      .brand span { font-size: 1rem; }
      .brand i { font-size: 1rem; }
      .mobile-cart { width: 28px; height: 28px; font-size: 0.75rem; }
      .hamburger { width: 28px; height: 28px; padding: 4px; }
      .hamburger span { width: 18px; }
    }
  </style>
</head>
<body>

<!-- ============================================= -->
<!-- TOP BAR                                        -->
<!-- ============================================= -->
<div class="top-bar">
  <div class="top-bar-inner">
<a href="https://mail.google.com/mail/?view=cm&fs=1&to=pvafast947@gmail.com"
   class="nexum text-white"
   target="_blank">
    <i class="fa-regular fa-envelope"></i>
    pvafast947@gmail.com
</a>
    <div class="top-bar-socials">
 <a href="https://t.me/pvafast947" class="nexum" target="_blank" aria-label="Telegram" style="color:#0088cc;">
    <i class="fa-brands fa-telegram"></i>
</a>
<a href="https://wa.me/923141001807" class="nexum" target="_blank" aria-label="WhatsApp" style="color:#25D366;">
    <i class="fa-brands fa-whatsapp"></i>
</a>
     
    </div>
  </div>
</div>

<!-- ============================================= -->
<!-- MAIN NAVBAR                                    -->
<!-- ============================================= -->
<nav class="sticky-nav" id="mainNavbar">
  <div class="nav-inner">

    <!-- Logo -->
    <a href="index.php" class="brand">
      <i class="fa-solid fa-"></i>
      <span><em>PVA Fast</em></span>
    </a>

    <!-- Desktop Nav Links — perfectly centered with flex:1 -->
    <div class="desktop-nav">
      <a href="index.php" class=" ms-5 nav-link" data-nav="home"><em>Home</em></a>
      <a href="about.php" class=" ms-2 nav-link" data-nav="about"><em>About</em></a>
      <a href="services.php" class=" ms-2 nav-link" data-nav="services"><em>Services</em></a>

      <!-- Accounts Dropdown -->
      <div class="dropdown-wrap" id="desktopDropdownWrap">
        <a href="#" class=" ms-2 nav-link" id="desktopPackagesLink">
          <em>Accounts</em> <i class="fa-solid fa-chevron-down ms-1"></i>
        </a>
        <div class="dropdown-menu-custom" id="desktopPackagesMenu">
          <a href="gmail.php" class="dropdown-item-custom"><i class="fa-regular fa-compass me-2"></i><em>Gmail Accounts</em></a>
          <a href="facebook.php" class="dropdown-item-custom"><i class="fa-regular fa-sun me-2"></i><em>Facebook Accounts</em></a>
          <a href="instagram.php" class="dropdown-item-custom"><i class="fa-regular fa-mountain me-2"></i><em>Instagram Accounts</em></a>
          <a href="twitter.php" class="dropdown-item-custom"><i class="fa-regular fa-champagne-glasses me-2"></i><em>Twitter Accounts</em></a>
          <a href="telegram.php" class="dropdown-item-custom"><i class="fa-regular fa-paper-plane me-2"></i><em>Telegram Accounts</em></a>
          <a href="outlook.php" class="dropdown-item-custom"><i class="fa-regular fa-paper-plane me-2"></i><em>Outlook Accounts</em></a>
          <a href="threads.php" class="dropdown-item-custom"><i class="fa-regular fa-at me-2"></i><em>Threads Accounts</em></a>
          <a href="tiktok.php" class="dropdown-item-custom"><i class="fa-brands fa-tiktok me-2"></i><em>TikTok Accounts</em></a>
        </div>
      </div>
      <style>

.nexum{
    text-decoration: none;
}          
      </style>

      <a href="complain.php" class=" ms-2 nav-link" data-nav="complain"><em>Complain</em></a>
      <a href="contact.php" class="ms-2 nav-link" data-nav="contact"><em>Contact</em></a>
    </div>

    <!-- Right Actions (Desktop) -->
    <div class="right-actions">
      <div class="search-wrap">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" placeholder="Search..." id="globalSearch">
      </div>
      <a href="cart.php" class="cart-btn">
        <i class="fa-solid fa-cart-shopping"></i>
        <span class="cart-counter <?= $cart_count > 0 ? 'visible' : '' ?>" id="cartCounterNav"><?= $cart_count ?></span>
      </a>
    </div>

    <!-- Mobile Actions (cart + hamburger) — always on far right -->
    <div style="display:flex; align-items:center; gap:6px; flex-shrink:0;">
      <a href="cart.php" class="mobile-cart">
        <i class="fa-solid fa-cart-shopping"></i>
        <span class="cart-counter <?= $cart_count > 0 ? 'visible' : '' ?>" id="cartCounterMobile"><?= $cart_count ?></span>
      </a>
      <button class="hamburger" id="hamburgerToggle" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div class="mobile-menu" id="mobileMenu">
    <div class="mobile-menu-inner">
      <div class="search-wrap">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" placeholder="Search..." id="mobileSearch">
      </div>

      <a href="index.php" class="mob-link" data-mob-nav="home">Home</a>
      <a href="about.php" class="mob-link" data-mob-nav="about">About</a>
      <a href="services.php" class="mob-link" data-mob-nav="services">Services</a>

      <div class="mob-link mob-dropdown-header" id="mobilePackagesHeader">
        Accounts <i class="fa-solid fa-chevron-down" id="mobileChevron"></i>
      </div>
      <div class="mob-dropdown-items" id="mobilePackagesItems">
        <a href="gmail.php" class="mob-dropdown-item"><i class="fa-regular fa-compass me-2"></i> Gmail Accounts</a>
        <a href="facebook.php" class="mob-dropdown-item"><i class="fa-regular fa-sun me-2"></i> Facebook Accounts</a>
        <a href="instagram.php" class="mob-dropdown-item"><i class="fa-regular fa-mountain me-2"></i> Instagram Accounts</a>
        <a href="twitter.php" class="mob-dropdown-item"><i class="fa-regular fa-champagne-glasses me-2"></i> Twitter Accounts</a>
        <a href="telegram.php" class="mob-dropdown-item"><i class="fa-regular fa-paper-plane me-2"></i> Telegram Accounts</a>
        <a href="threads.php" class="mob-dropdown-item"><i class="fa-regular fa-at me-2"></i> Threads Accounts</a>
        <a href="tiktok.php" class="mob-dropdown-item"><i class="fa-brands fa-tiktok me-2"></i> TikTok Accounts</a>
      </div>

      <a href="complain.php" class="mob-link" data-mob-nav="complain">Complain</a>
      <a href="contact.php" class="mob-link" data-mob-nav="contact">Contact</a>
    </div>
  </div>
</nav>

<script>
(function() {
  var navbar = document.getElementById('mainNavbar');
  var hamburger = document.getElementById('hamburgerToggle');
  var mobileMenu = document.getElementById('mobileMenu');
  var desktopMenu = document.getElementById('desktopPackagesMenu');
  var desktopLink = document.getElementById('desktopPackagesLink');
  var dropdownWrap = document.getElementById('desktopDropdownWrap');
  var chevron = desktopLink ? desktopLink.querySelector('.fa-chevron-down') : null;

  // Scroll shadow
  window.addEventListener('scroll', function() {
    if (window.scrollY > 10) navbar.classList.add('scrolled');
    else navbar.classList.remove('scrolled');
  });

  // Hamburger toggle
  hamburger.addEventListener('click', function() {
    mobileMenu.classList.toggle('open');
    hamburger.classList.toggle('open');
  });

  // Mobile links — close menu
  document.querySelectorAll('[data-mob-nav]').forEach(function(link) {
    link.addEventListener('click', function() {
      mobileMenu.classList.remove('open');
      hamburger.classList.remove('open');
    });
  });

  // Mobile dropdown
  var mobHeader = document.getElementById('mobilePackagesHeader');
  var mobItems = document.getElementById('mobilePackagesItems');
  var mobChevron = document.getElementById('mobileChevron');
  if (mobHeader) {
    mobHeader.addEventListener('click', function(e) {
      e.preventDefault();
      mobItems.classList.toggle('open');
      if (mobChevron) {
        mobChevron.style.transform = mobItems.classList.contains('open') ? 'rotate(180deg)' : '';
      }
    });
  }

  // Desktop dropdown
  if (desktopLink && desktopMenu) {
    desktopLink.addEventListener('click', function(e) {
      e.preventDefault();
      desktopMenu.classList.toggle('show');
      if (chevron) chevron.style.transform = desktopMenu.classList.contains('show') ? 'rotate(180deg)' : '';
    });
    document.addEventListener('click', function(e) {
      if (dropdownWrap && !dropdownWrap.contains(e.target)) {
        desktopMenu.classList.remove('show');
        if (chevron) chevron.style.transform = '';
      }
    });
  }

  // Auto-detect active page from URL
  var currentPage = window.location.pathname.split('/').pop() || 'index.php';

  // Desktop nav: .nav-link active
  var allNavLinks = document.querySelectorAll('.nav-link');
  var activeFound = false;
  allNavLinks.forEach(function(link) {
    var href = link.getAttribute('href');
    if (href === currentPage) {
      link.classList.add('active');
      activeFound = true;
    } else {
      link.classList.remove('active');
    }
  });

  // Desktop dropdown items: .dropdown-item-custom active
  document.querySelectorAll('.dropdown-item-custom').forEach(function(item) {
    var href = item.getAttribute('href');
    if (href === currentPage) {
      item.classList.add('active-item');
      if (desktopLink) desktopLink.classList.add('active');
    } else {
      item.classList.remove('active-item');
    }
  });

  // Mobile nav: .mob-link active
  document.querySelectorAll('.mob-link[data-mob-nav]').forEach(function(link) {
    var href = link.getAttribute('href');
    if (href === currentPage) {
      link.classList.add('active-mob');
    } else {
      link.classList.remove('active-mob');
    }
  });

  // Mobile dropdown items: .mob-dropdown-item active
  document.querySelectorAll('.mob-dropdown-item').forEach(function(item) {
    var href = item.getAttribute('href');
    if (href === currentPage) {
      item.classList.add('active-mob-item');
    } else {
      item.classList.remove('active-mob-item');
    }
  });

  // Click handlers for desktop nav
  allNavLinks.forEach(function(link) {
    link.addEventListener('click', function(e) {
      if (this.id === 'desktopPackagesLink') return;
      if (this.getAttribute('href') === '#') e.preventDefault();
      allNavLinks.forEach(function(l) { l.classList.remove('active'); });
      this.classList.add('active');
    });
  });

  // Dropdown items click → highlight Accounts
  document.querySelectorAll('.dropdown-item-custom').forEach(function(item) {
    item.addEventListener('click', function() {
      allNavLinks.forEach(function(l) { l.classList.remove('active'); });
      if (desktopLink) desktopLink.classList.add('active');
    });
  });

  // Mobile dropdown items → close menu
  document.querySelectorAll('.mob-dropdown-item').forEach(function(item) {
    item.addEventListener('click', function() {
      mobileMenu.classList.remove('open');
      hamburger.classList.remove('open');
    });
  });

  // ── LIVE SEARCH: filter product cards in real-time ──
  function filterProductCards(q) {
    // Find the product grid — common ID across all product pages
    var grid = document.getElementById('productsGrid');
    if (!grid) return; // not a product page

    var productCols = grid.querySelectorAll(':scope > .col');
    if (productCols.length === 0) return;

    var query = q.trim().toLowerCase();

    // Keyword map: alias → the main terms that should match
    var keywordMap = {
      'x':       ['twitter','x'],
      'twit':    ['twitter','x'],
      'tw':      ['twitter','x'],
      'insta':   ['instagram'],
      'out':     ['outlook'],
      'thread':  ['threads'],
      'tik':     ['tiktok'],
      'tok':     ['tiktok'],
      'tele':    ['telegram'],
      'tlg':     ['telegram'],
      'gmail':   ['gmail'],
      'fb':      ['facebook'],
      'gm':      ['gmail']
    };

    productCols.forEach(function(col) {
      if (query.length === 0) {
        col.style.display = '';
        return;
      }

      // Collect text from the product-id attribute
      var productId = col.getAttribute('data-product-id') || '';

      // Collect text from the card title
      var title = '';
      var titleEl = col.querySelector('.card-title, .tg-card-title, h3.card-title, h3.tg-card-title, .card-title em, .tg-card-title em');
      if (!titleEl) titleEl = col.querySelector('h3');
      if (titleEl) title = titleEl.textContent.trim().toLowerCase();

      // Collect text from the short description
      var desc = '';
      var descEl = col.querySelector('.short-desc, .tg-card-desc');
      if (descEl) desc = descEl.textContent.trim().toLowerCase();

      // Build a combined searchable string from all sources
      var searchable = [productId, title, desc].join(' ').toLowerCase();

      // Direct match check
      if (searchable.indexOf(query) !== -1) {
        col.style.display = '';
        return;
      }

      // Also check against alias-expanded terms
      var found = false;
      for (var alias in keywordMap) {
        if (query.indexOf(alias) !== -1 || alias.indexOf(query) !== -1) {
          var targets = keywordMap[alias];
          for (var i = 0; i < targets.length; i++) {
            if (searchable.indexOf(targets[i]) !== -1) {
              found = true;
              break;
            }
          }
          if (found) break;
        }
      }

      col.style.display = found ? '' : 'none';
    });
  }

  function onSearchInput(input) {
    filterProductCards(input.value);
  }

  // Search handlers — redirect to search.php on Enter + live filtering on input
  function doSearch(input) {
    var q = input.value.trim();
    if (q.length > 0) window.location.href = 'search.php?q=' + encodeURIComponent(q);
  }
  var globalSearch = document.getElementById('globalSearch');
  var mobileSearch = document.getElementById('mobileSearch');
  if (globalSearch) {
    globalSearch.addEventListener('input', function() { onSearchInput(this); });
    globalSearch.addEventListener('keydown', function(e) { if (e.key === 'Enter') { e.preventDefault(); doSearch(this); } });
  }
  if (mobileSearch) {
    mobileSearch.addEventListener('input', function() { onSearchInput(this); });
    mobileSearch.addEventListener('keydown', function(e) { if (e.key === 'Enter') { e.preventDefault(); doSearch(this); } });
  }

  // Close mobile menu on resize to desktop
  window.addEventListener('resize', function() {
    if (window.innerWidth >= 992) {
      mobileMenu.classList.remove('open');
      hamburger.classList.remove('open');
      if (desktopMenu) desktopMenu.classList.remove('show');
      if (chevron) chevron.style.transform = '';
    }
  });
})();
</script>

<script src="../assets/js/cart.js?v=2"></script>

</body>
</html>