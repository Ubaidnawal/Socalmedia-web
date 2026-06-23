<?php

include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Buy Premium Telegram Accounts | Verified & Bulk Telegram Accounts</title>
    <meta name="description" content="Purchase high-quality Telegram accounts with instant delivery and bulk quantity options.">
    <meta name="keywords" content="Telegram Accounts, PVA Telegram Accounts, Buy Telegram Accounts, Bulk Telegram Accounts">

    <!-- Premium Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- GSAP & ScrollTrigger & CustomEase -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/CustomEase.min.js"></script>
    
    <!-- Three.js for 3D Background Effects -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <style>
        /* ── Telegram Page Variables ── */
        :root {
            --tg-primary: #0088cc;
            --tg-primary-dark: #006da8;
            --tg-accent: #27A7E7;
            --tg-glow: rgba(0, 136, 204, 0.25);
            --tg-gradient: linear-gradient(135deg, #0088cc 0%, #005580 100%);
            --tg-card-bg: rgba(255,255,255,0.92);
            --tg-border: rgba(0, 136, 204, 0.12);
        }

        /* ── HERO ── */
        .tg-hero {
            position: relative;
            min-height: 88vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #229ED9 0%, #0088CC 40%, #006699 100%);
            overflow-x: hidden;
            overflow-y: hidden;
        }
        .tg-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='30' cy='30' r='1.5' fill='%23ffffff' opacity='0.06'/%3E%3C/svg%3E") repeat;
            pointer-events: none;
        }
        .tg-hero-paper-plane {
            position: absolute;
            font-size: 4rem;
            color: rgba(255,255,255,0.07);
            animation: tgFloatPlane 12s ease-in-out infinite;
            pointer-events: none;
        }
        .tg-hero-paper-plane:nth-child(1) { top: 10%; left: 5%; animation-delay: 0s; }
        .tg-hero-paper-plane:nth-child(2) { bottom: 15%; right: 8%; font-size: 5rem; animation-delay: -4s; }
        .tg-hero-paper-plane:nth-child(3) { top: 40%; right: 25%; font-size: 2.5rem; animation-delay: -8s; }
        @keyframes tgFloatPlane {
            0%, 100% { transform: translateY(0) rotate(-15deg); opacity: 0.07; }
            50% { transform: translateY(-30px) rotate(0deg); opacity: 0.15; }
        }
        .tg-hero-glow {
            position: absolute;
            width: 700px;
            height: 700px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255,255,255,0.12) 0%, transparent 70%);
            top: -25%;
            right: -5%;
            pointer-events: none;
        }
        .tg-hero-glow-2 {
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
            bottom: -20%;
            left: -5%;
            pointer-events: none;
        }
        .tg-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255,255,255,0.15);
            color: #ffffff;
            font-weight: 700;
            font-size: 0.72rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            padding: 6px 18px;
            border-radius: 60px;
            margin-bottom: 18px;
            border: 1px solid rgba(255,255,255,0.2);
            backdrop-filter: blur(6px);
        }
        .tg-hero-title {
            font-family: "Space Grotesk", sans-serif;
            font-size: clamp(2.6rem, 7vw, 4.6rem);
            font-weight: 800;
            line-height: 1.06;
            color: #ffffff;
            margin-bottom: 18px;
        }
        .tg-hero-title .brand-tg {
            background: linear-gradient(135deg, #ffffff, #cceeff);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .tg-hero-desc {
            font-size: 1.05rem;
            color: rgba(255,255,255,0.9);
            max-width: 500px;
            margin: 0 0 28px;
            line-height: 1.8;
        }
        .tg-btn-primary {
            background: linear-gradient(135deg, #0088cc, #005580);
            color: white;
            border: none;
            padding: 14px 36px;
            border-radius: 60px;
            font-weight: 700;
            font-size: 0.92rem;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 8px 24px rgba(0,136,204,0.3);
        }
        .tg-btn-primary:hover { transform: translateY(-3px); box-shadow: 0 12px 32px rgba(0,136,204,0.4); color: white; }
        .tg-btn-secondary {
            background: rgba(255,255,255,0.1);
            color: #ffffff;
            border: 2px solid rgba(255,255,255,0.35);
            padding: 12px 32px;
            border-radius: 60px;
            font-weight: 600;
            font-size: 0.92rem;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .tg-btn-secondary:hover { border-color: #ffffff; background: rgba(255,255,255,0.2); transform: translateY(-3px); color: #ffffff; }
        .tg-hero-stats { display: flex; flex-wrap: wrap; gap: 28px; margin-top: 32px; }
        .tg-hero-stats .stat-item { text-align: left; }
        .tg-hero-stats .stat-num { font-size: 2rem; font-weight: 800; color: #ffffff; display: block; line-height: 1.1; font-family: "Space Grotesk", sans-serif; }
        .tg-hero-stats .stat-label { font-size: 0.78rem; color: rgba(255,255,255,0.75); }
        .tg-hero-img-wrap {
            background: rgba(255,255,255,0.85);
            backdrop-filter: blur(12px);
            border-radius: 28px;
            padding: 1.5rem;
            box-shadow: 0 24px 60px rgba(0,0,0,0.1);
            border: 1px solid rgba(255,255,255,0.3);
            transition: transform 0.5s;
        }
        .tg-hero-img-wrap:hover { transform: scale(1.01); }
        .tg-hero-img-wrap img { width: 100%; height: auto; border-radius: 16px; }

        .tg-type-card {
            background: var(--tg-card-bg);
            background-filter: blur(4px);
            border-radius: 24px;
            padding: 2rem 1.5rem;
            transition: all 0.4s cubic-bezier(0.2,0.9,0.4,1.1);
            height: 100%;
            border: 1px solid var(--tg-border);
            position: relative;
            overflow: hidden;
        }
        .tg-type-card::before {
            content: "";
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 4px;
            background: var(--tg-gradient);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.5s ease;
        }
        .tg-type-card:hover::before { transform: scaleX(1); }
        .tg-type-card:hover { transform: translateY(-8px); box-shadow: 0 20px 50px rgba(0,136,204,0.12); }
        .tg-type-popular { border: 2px solid #0088cc !important; }
        .tg-type-popular .popular-tag {
            position: absolute; top: -10px; right: 20px;
            background: var(--tg-gradient); color: white;
            font-size: 0.55rem; font-weight: 700;
            padding: 3px 12px; border-radius: 20px; text-transform: uppercase;
        }

        .section-badge-tg {
            display: inline-flex; align-items: center; gap: 8px;
            background: linear-gradient(135deg, rgba(0,136,204,0.12), rgba(0,136,204,0.06));
            color: #023b45; font-weight: 700; font-size: 0.72rem;
            letter-spacing: 1.5px; text-transform: uppercase;
            padding: 6px 18px; border-radius: 60px;
            margin-bottom: 16px; border: 1px solid rgba(0,136,204,0.15);
        }
        .section-title-tg {
            font-family: "Space Grotesk", sans-serif;
            font-size: clamp(2rem,4.5vw,2.8rem);
            font-weight: 800; line-height: 1.12; color: #023b45;
        }
        .section-title-tg .highlight-tg {
            background: var(--tg-gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .section-sub-tg { color: rgba(2,59,69,0.65); max-width: 550px; margin: 0 auto; font-size: 0.95rem; }

        /* Product Cards */
        .tg-card {
            background: #ffffff;
            border-radius: 24px;
            transition: all 0.35s cubic-bezier(0.2,0.9,0.4,1.1);
            height: 100%;
            display: flex;
            flex-direction: column;
            box-shadow: 0 12px 36px rgba(0,0,0,0.08);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(0,136,204,0.06);
        }
        .tg-card:hover { transform: translateY(-10px); box-shadow: 0 24px 50px rgba(0,136,204,0.15); border-color: rgba(0,136,204,0.2); }
        .tg-card-image {
            width: 100%; height: 170px; overflow: hidden;
            background: linear-gradient(135deg, #0088cc, #005580);
            border-top-left-radius: 24px;
            border-top-right-radius: 24px;
            position: relative;
        }
        .tg-card-image img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; display: block; }
        .tg-card:hover .tg-card-image img { transform: scale(1.06); }
        .tg-card-content { padding: 1.5rem 1.3rem; flex: 1; display: flex; flex-direction: column; }
        .tg-card-badge {
            position: absolute; top: 1rem; left: 1rem;
            padding: 0.25rem 0.9rem;
            border-radius: 60px;
            font-size: 0.6rem; font-weight: 800;
            z-index: 5; letter-spacing: 0.3px; text-transform: uppercase;
            box-shadow: 0 4px 12px rgba(0,0,0,0.12);
        }
        .tg-badge-blue { background: var(--tg-gradient); color: white; }
        .tg-badge-hot { background: linear-gradient(105deg, #e74c3c, #c0392b); color: white; }
        .tg-badge-amber { background: linear-gradient(105deg, #f39c12, #e67e22); color: #023b45; }
        .tg-badge-green { background: linear-gradient(105deg, #27ae60, #2ecc71); color: white; }
        .tg-card-title { font-size: 1.4rem; font-weight: 800; letter-spacing: -0.02em; margin-bottom: 0.2rem; color: #023b45 !important; font-family: "Space Grotesk", sans-serif; }
        .tg-card-desc { font-size: 0.82rem; color: #023b45 !important; margin-bottom: 0.7rem; font-weight: 500; opacity: 0.75; }
        .tg-price { font-size: 2rem; font-weight: 800; color: #023b45 !important; }
        .tg-price-unit { font-size: 0.85rem; font-weight: 600; vertical-align: super; }
        .tg-old-price { font-size: 0.95rem; color: #023b45; opacity: 0.4; text-decoration: line-through; font-weight: 500; }
        .tg-qty-tag {
            background: rgba(0,136,204,0.08); padding: 0.25rem 0.8rem;
            border-radius: 60px; font-size: 0.68rem; font-weight: 700; color: #023b45;
            display: inline-flex; align-items: center; gap: 5px; margin-left: auto;
        }
        .tg-feat-grid {
            display: grid; grid-template-columns: repeat(2,1fr);
            gap: 0.3rem 0.6rem;
            background: rgba(0,136,204,0.04);
            padding: 0.7rem;
            border-radius: 16px;
            margin: 0.6rem 0 1rem;
        }
        .tg-feat { font-size: 0.68rem; font-weight: 600; display: flex; align-items: center; gap: 5px; color: #023b45 !important; }
        .tg-feat i { color: #0088cc; font-size: 0.6rem; }
        .tg-btn-cart {
            background: var(--tg-gradient);
            border: none; color: white !important;
            font-weight: 700; padding: 0.65rem 0.9rem;
            border-radius: 60px; font-size: 0.82rem;
            transition: all 0.25s; flex: 1;
            display: inline-flex; align-items: center; justify-content: center; gap: 8px;
            position: relative; overflow: hidden;
        }
        .tg-btn-cart:hover { transform: scale(0.97); box-shadow: 0 10px 20px -6px rgba(0,136,204,0.4); }
        .tg-btn-cart.success { background: linear-gradient(95deg, #27ae60, #2ecc71); }
        .tg-btn-cart .spinner { display: none; width: 16px; height: 16px; border: 2px solid rgba(255,255,255,0.3); border-top: 2px solid #fff; border-radius: 50%; animation: tgSpin 0.8s linear infinite; }
        .tg-btn-cart.loading .spinner { display: inline-block; }
        .tg-btn-cart.loading .cart-text { display: none; }
        @keyframes tgSpin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
        .tg-btn-detail {
            background: transparent;
            border: 1.5px solid rgba(0,136,204,0.25);
            color: #023b45 !important; font-weight: 700;
            padding: 0.65rem 0.9rem; border-radius: 60px; flex: 1;
            transition: all 0.2s; display: inline-flex; align-items: center; justify-content: center; gap: 8px;
        }
        .tg-btn-detail:hover { border-color: #0088cc; background: rgba(0,136,204,0.06); transform: translateY(-2px); }

        .tg-stat-number { font-size: 2.8rem; font-weight: 800; color: #B7A08B; line-height: 1.1; font-family: "Space Grotesk", sans-serif; }

        .tg-why-card {
            background: white; border-radius: 20px; padding: 1.8rem 1.2rem;
            text-align: center; transition: all 0.3s;
            border: 1px solid var(--tg-border);
            box-shadow: 0 4px 15px rgba(0,0,0,0.04);
            height: 100%;
        }
        .tg-why-card:hover { transform: translateY(-6px); border-color: #0088cc; box-shadow: 0 12px 30px rgba(0,136,204,0.1); }
        .tg-why-icon {
            width: 56px; height: 56px;
            background: linear-gradient(135deg, rgba(0,136,204,0.1), rgba(0,136,204,0.05));
            border-radius: 50%; display: flex; align-items: center; justify-content: center;
            font-size: 1.5rem; color: #0088cc; margin: 0 auto 12px;
            transition: all 0.3s;
        }
        .tg-why-card:hover .tg-why-icon { background: var(--tg-gradient); color: white; }
        .tg-why-title { font-weight: 700; font-size: 1rem; color: #023b45; margin-bottom: 2px; }
        .tg-why-desc { font-size: 0.82rem; color: rgba(2,59,69,0.6); }

        .tg-feat-item {
            background: white; border-radius: 16px; padding: 0.9rem 1.1rem;
            display: flex; align-items: center; gap: 12px;
            transition: all 0.3s; border: 1px solid var(--tg-border);
        }
        .tg-feat-item:hover { transform: translateX(6px); border-color: #0088cc; box-shadow: 0 4px 15px rgba(0,136,204,0.08); }
        .tg-feat-item i { font-size: 1.2rem; color: #0088cc; }
        .tg-feat-item span { font-weight: 600; color: #023b45; font-size: 0.88rem; }

        .tg-step {
            background: white; border-radius: 20px; padding: 1.8rem; text-align: center;
            box-shadow: 0 8px 25px rgba(0,0,0,0.05); transition: all 0.3s; height: 100%;
        }
        .tg-step:hover { transform: translateY(-6px); box-shadow: 0 16px 40px rgba(0,136,204,0.1); }
        .tg-step-num {
            width: 60px; height: 60px;
            background: var(--tg-gradient);
            border-radius: 50%; display: flex; align-items: center; justify-content: center;
            margin: 0 auto 12px; font-size: 1.5rem; font-weight: 800; color: white;
        }

        .tg-dashboard-card {
            background: white; border-radius: 20px; padding: 1.8rem;
            box-shadow: 0 8px 25px rgba(0,0,0,0.05);
        }
        .tg-dashboard-card:hover { transform: translateY(-4px); box-shadow: 0 12px 30px rgba(0,136,204,0.1); }
        .tg-review-card {
            background: white; border-radius: 20px; padding: 1.5rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.04); transition: all 0.3s; height: 100%;
            border: 1px solid var(--tg-border);
        }
        .tg-review-card:hover { transform: translateY(-4px); border-color: #0088cc; box-shadow: 0 12px 30px rgba(0,136,204,0.08); }
        .tg-accordion-btn {
            color: #023b45; background: white; padding: 18px 22px;
            font-weight: 700; font-size: 0.92rem;
        }
        .tg-accordion-btn:not(.collapsed) { background: rgba(0,136,204,0.05); color: #023b45; }
        .tg-accordion-body { color: rgba(2,59,69,0.8); padding: 0 22px 22px; font-size: 0.88rem; }

        @media (max-width: 991px) { .section-padding { padding: 60px 0; } .tg-hero { min-height: auto; padding: 50px 0; } }
        @media (max-width: 767px) {
            .tg-hero { padding: 40px 0; text-align: center; }
            .tg-hero-stats { justify-content: center; }
            .tg-hero-stats .stat-item { text-align: center; }
            .tg-hero-desc { max-width: 100%; }
            .tg-cta-btn-group { flex-direction: column; align-items: center; }
            .tg-cta-btn-group a { width: 100%; max-width: 280px; justify-content: center; }
        }
        @media (max-width: 575px) {
            .tg-hero-title { font-size: 1.8rem; }
            .tg-card-title { font-size: 1.15rem; }
            .tg-price { font-size: 1.5rem; }
            .tg-btn-cart, .tg-btn-detail { width: 100%; }
        }
        @media (max-width: 360px) {
            .tg-hero-title { font-size: 1.5rem; }
            .tg-hero-desc { font-size: 0.85rem; }
            .tg-hero-stats { gap: 12px; }
            .tg-hero-stats .stat-num { font-size: 1.2rem; }
            .tg-btn-primary, .tg-btn-secondary { padding: 8px 16px; font-size: 0.75rem; }
        }
        @media (max-width: 400px) {
            .toast-notification { right: 10px !important; bottom: 10px !important; min-width: 0 !important; max-width: 90vw !important; padding: 10px 14px !important; font-size: 0.78rem !important; }
        }
        [data-aos] { pointer-events: none; }
        [data-aos].aos-animate { pointer-events: auto; }
    </style>
</head>
<body>

    <!-- ════════════════════════════════════════════════════
    HERO — Telegram Identity
    ════════════════════════════════════════════════════ -->
    <section class="tg-hero" id="tgHero">
        <div class="tg-hero-glow"></div>
        <div class="tg-hero-glow-2"></div>
        <div class="tg-hero-paper-plane"><i class="fab fa-telegram-plane"></i></div>
        <div class="tg-hero-paper-plane"><i class="fab fa-telegram-plane"></i></div>
        <div class="tg-hero-paper-plane"><i class="fab fa-telegram-plane"></i></div>

        <div class="container position-relative" style="z-index:2;">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                    <div class="tg-hero-badge"><i class="fab fa-telegram-plane"></i> Trusted Telegram Marketplace</div>
                    <h1 class="tg-hero-title">
                        Premium <span class="brand-tg">Telegram</span><br>Account Solutions
                    </h1>
                    <p class="tg-hero-desc">
                        High-quality Telegram accounts for messaging, marketing, channels, groups, and digital growth. Verified &amp; instantly delivered.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#tgProducts" class="tg-btn-primary"><i class="fab fa-telegram-plane"></i> Explore Accounts</a>
                        <a href="#tgFAQs" class="tg-btn-secondary"><i class="fas fa-circle-question"></i> Learn More</a>
                    </div>
                    <div class="tg-hero-stats">
                        <div class="stat-item">
                            <span class="stat-num" data-tg-counter="15000">0</span>
                            <span class="stat-label">Accounts Sold</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-num" data-tg-counter="5000">0</span>
                            <span class="stat-label">Happy Clients</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-num" data-tg-counter="24">24/7</span>
                            <span class="stat-label">Support</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-num" data-tg-counter="99">99%</span>
                            <span class="stat-label">Satisfaction</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
                    
                </div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════════
    ACCOUNT TYPES
    ════════════════════════════════════════════════════ -->
    <section class="section-padding" style="background: rgba(255,255,255,0.1);">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-badge-tg"><i class="fab fa-telegram-plane"></i> Account Types</div>
                <h2 class="section-title-tg">Choose Your <span class="highlight-tg">Telegram</span> Package</h2>
                <p class="section-sub-tg">Select the perfect Telegram account type for your needs</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="flip-up" data-aos-delay="100">
                    <div class="tg-type-card">
                        <div style="font-size:2.6rem; color:#0088cc; margin-bottom:10px;">🆕</div>
                        <h3 style="font-weight:800; font-size:1.3rem; color:#023b45; margin-bottom:4px;">Fresh Telegram Accounts</h3>
                        <p style="color:rgba(2,59,69,0.6); font-size:0.85rem; margin-bottom:12px;">Brand new accounts, ready for immediate use</p>
                        <ul style="list-style:none; padding:0; margin:0;">
                            <li style="padding:3px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#0088cc;"></i> Instantly available</li>
                            <li style="padding:3px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#0088cc;"></i> No activity history</li>
                            <li style="padding:3px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#0088cc;"></i> Perfect for new starts</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="flip-up" data-aos-delay="150">
                    <div class="tg-type-card tg-type-popular">
                        <span class="popular-tag">Popular</span>
                        <div style="font-size:2.6rem; color:#0088cc; margin-bottom:10px;">📞</div>
                        <h3 style="font-weight:800; font-size:1.3rem; color:#023b45; margin-bottom:4px;">PVA Telegram Accounts</h3>
                        <p style="color:rgba(2,59,69,0.6); font-size:0.85rem; margin-bottom:12px;">Phone Verified with maximum security</p>
                        <ul style="list-style:none; padding:0; margin:0;">
                            <li style="padding:3px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#0088cc;"></i> Phone verified</li>
                            <li style="padding:3px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#0088cc;"></i> High trust score</li>
                            <li style="padding:3px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#0088cc;"></i> Recovery access</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="flip-up" data-aos-delay="200">
                    <div class="tg-type-card">
                        <div style="font-size:2.6rem; color:#0088cc; margin-bottom:10px;">📜</div>
                        <h3 style="font-weight:800; font-size:1.3rem; color:#023b45; margin-bottom:4px;">Aged Telegram Accounts</h3>
                        <p style="color:rgba(2,59,69,0.6); font-size:0.85rem; margin-bottom:12px;">6+ month old with established activity</p>
                        <ul style="list-style:none; padding:0; margin:0;">
                            <li style="padding:3px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#0088cc;"></i> 6+ months old</li>
                            <li style="padding:3px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#0088cc;"></i> High reputation</li>
                            <li style="padding:3px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#0088cc;"></i> Activity history</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════════
    PRODUCT CARDS — Telegram Unique
    ════════════════════════════════════════════════════ -->
    <div class="cards-premium-container" id="tgProducts">
        <div class="section-head" data-aos="fade-up">
            <div class="section-badge-tg"><i class="fab fa-telegram-plane"></i> Telegram Marketplace</div>
            <h2 class="section-title-tg">Premium <span class="highlight-tg">Telegram Accounts</span></h2>
            <p class="section-sub-tg">Fresh, verified &amp; instantly delivered — trusted by thousands worldwide</p>
        </div>

        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4" id="productsGrid" data-aos="fade-up">

            <!-- CARD 1 -->
            <div class="col" data-product-id="telegram-fresh">
                <div class="tg-card">
                    <div class="tg-card-badge tg-badge-green"><i class="fas fa-leaf"></i> Fresh</div>
                    <div class="tg-card-image">
                        <img src="../Image/telegram.jpg" alt="Fresh Telegram Accounts">
                    </div>
                    <div class="tg-card-content">
                        <h3 class="tg-card-title"><em>Fresh Telegram Accounts</em></h3>
                        <p class="tg-card-desc"><em>Brand new accounts, instantly available with full access</em></p>
                        <div class="product-rating">
                            <div class="star-rating" data-product="telegram-fresh"></div>
                            <span class="rating-count" data-product="telegram-fresh">(95 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="tg-price"><span class="tg-price-unit">$</span>25</span>
                            <span class="tg-old-price">$35</span>
                            <span class="discount-badge">-29%</span>
                            <span class="tg-qty-tag"><i class="fas fa-database"></i> 50 Acc</span>
                        </div>
                        <div class="stock-info"><i class="fas fa-check-circle in-stock"></i> <strong>320</strong> available</div>
                        <div class="tg-feat-grid">
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> Fresh</div>
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> Instant Delivery</div>
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> Full Access</div>
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> Secure Login</div>
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> High Quality</div>
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> 24H Replacement</div>
                        </div>
                        <div class="btn-group-premium">
                            <button class="tg-btn-detail detailBtn" data-name="Fresh Telegram Accounts"><i class="fas fa-eye"></i> Details</button>
                            <button class="tg-btn-cart addCartBtn" data-name="Fresh Telegram Accounts" data-price="25"><i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col" data-product-id="telegram-pva">
                <div class="tg-card">
                    <div class="tg-card-badge tg-badge-amber"><i class="fas fa-star"></i> -15%</div>
                    <div class="tg-card-image">
                        <img src="../Image/telegram.jpg" alt="PVA Telegram Accounts">
                    </div>
                    <div class="tg-card-content">
                        <h3 class="tg-card-title"><em>PVA Telegram Accounts</em></h3>
                        <p class="tg-card-desc"><em>Phone verified accounts with high trust score</em></p>
                        <div class="product-rating">
                            <div class="star-rating" data-product="telegram-pva"></div>
                            <span class="rating-count" data-product="telegram-pva">(142 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="tg-price"><span class="tg-price-unit">$</span>45</span>
                            <span class="tg-old-price">$55</span>
                            <span class="discount-badge">-18%</span>
                            <span class="tg-qty-tag"><i class="fas fa-database"></i> 50 Acc</span>
                        </div>
                        <div class="stock-info"><i class="fas fa-check-circle in-stock"></i> <strong>280</strong> available</div>
                        <div class="tg-feat-grid">
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> PVA</div>
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> High Trust</div>
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> Recovery</div>
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> Secure Login</div>
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> Premium</div>
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> Fast Delivery</div>
                        </div>
                        <div class="btn-group-premium">
                            <button class="tg-btn-detail detailBtn" data-name="PVA Telegram Accounts"><i class="fas fa-eye"></i> Details</button>
                            <button class="tg-btn-cart addCartBtn" data-name="PVA Telegram Accounts" data-price="45"><i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col" data-product-id="telegram-aged">
                <div class="tg-card">
                    <div class="tg-card-badge tg-badge-blue"><i class="fas fa-crown"></i> Premium</div>
                    <div class="tg-card-image">
                        <img src="../Image/telegram.jpg" alt="Aged Telegram Accounts">
                    </div>
                    <div class="tg-card-content">
                        <h3 class="tg-card-title"><em>Aged Telegram Accounts</em></h3>
                        <p class="tg-card-desc"><em>6+ month old accounts with established activity</em></p>
                        <div class="product-rating">
                            <div class="star-rating" data-product="telegram-aged"></div>
                            <span class="rating-count" data-product="telegram-aged">(118 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="tg-price"><span class="tg-price-unit">$</span>75</span>
                            <span class="tg-old-price">$95</span>
                            <span class="discount-badge">-21%</span>
                            <span class="tg-qty-tag"><i class="fas fa-database"></i> 50 Acc</span>
                        </div>
                        <div class="stock-info"><i class="fas fa-check-circle in-stock"></i> <strong>175</strong> available</div>
                        <div class="tg-feat-grid">
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> Aged 6+</div>
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> History</div>
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> Reputation</div>
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> Full Access</div>
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> Bulk</div>
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> 24H Replace</div>
                        </div>
                        <div class="btn-group-premium">
                            <button class="tg-btn-detail detailBtn" data-name="Aged Telegram Accounts"><i class="fas fa-eye"></i> Details</button>
                            <button class="tg-btn-cart addCartBtn" data-name="Aged Telegram Accounts" data-price="75"><i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 4 -->
            <div class="col" data-product-id="telegram-premium">
                <div class="tg-card">
                    <div class="tg-card-badge tg-badge-hot"><i class="fas fa-fire"></i> Hot Deal</div>
                    <div class="tg-card-image">
                        <img src="../Image/telegram.jpg" alt="Premium Telegram Accounts">
                    </div>
                    <div class="tg-card-content">
                        <h3 class="tg-card-title"><em>Premium Telegram Accounts</em></h3>
                        <p class="tg-card-desc"><em>Top quality with premium features &amp; priority support</em></p>
                        <div class="product-rating">
                            <div class="star-rating" data-product="telegram-premium"></div>
                            <span class="rating-count" data-product="telegram-premium">(203 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="tg-price"><span class="tg-price-unit">$</span>120</span>
                            <span class="tg-old-price">$150</span>
                            <span class="discount-badge">-20%</span>
                            <span class="tg-qty-tag"><i class="fas fa-database"></i> 100 Acc</span>
                        </div>
                        <div class="stock-info"><i class="fas fa-check-circle in-stock"></i> <strong>210</strong> available</div>
                        <div class="tg-feat-grid">
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> Premium</div>
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> Verified</div>
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> Bulk Discount</div>
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> Priority</div>
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> Instant</div>
                            <div class="tg-feat"><i class="fas fa-check-circle"></i> Warranty</div>
                        </div>
                        <div class="btn-group-premium">
                            <button class="tg-btn-detail detailBtn" data-name="Premium Telegram Accounts"><i class="fas fa-eye"></i> Details</button>
                            <button class="tg-btn-cart addCartBtn" data-name="Premium Telegram Accounts" data-price="120"><i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- ════════════════════════════════════════════════════
    MODALS
    ════════════════════════════════════════════════════ -->
    <div class="modal fade review-modal" id="reviewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0 pt-4 px-4">
                    <h5 class="modal-title fw-bold fs-3" id="reviewModalTitle" style="color: #023b45;">Product Reviews</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body px-4 pb-4">
                    <div class="row g-4">
                        <div class="col-md-5">
                            <div class="rating-distribution">
                                <h6 class="fw-bold mb-3" style="color:#023b45;"><i class="fas fa-chart-simple me-2"></i>Rating Breakdown</h6>
                                <div id="distributionBars"></div>
                                <div class="mt-3 text-center">
                                    <span class="fw-bold fs-1" id="modalAvgRating" style="color:#023b45;">4.5</span>
                                    <span class="text-muted"> / 5</span>
                                    <div><span id="modalTotalReviews" class="fw-bold">247</span> global ratings</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h6 class="fw-bold mb-3" style="color:#023b45;"><i class="fas fa-comment-dots me-2"></i>Real customer reviews</h6>
                            <div id="reviewsListContainer" style="max-height: 380px; overflow-y: auto; padding-right: 5px;"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 pb-4 px-4">
                    <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal" style="border-color:#0088cc; color:#023b45;">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade detail-modal" id="productDetailModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0 pt-4 pb-1 px-4">
                    <h5 class="modal-title fw-bold fs-2" id="modalProductTitle" style="color: #023b45;">Premium Package</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body px-4 pb-4">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="detail-image-wrap">
                                <img id="detailProductImage" src="../Image/telegram.jpg" alt="Product Detail">
                            </div>
                            <div class="mt-3 d-flex gap-3 flex-wrap">
                                <span class="badge" style="background:#0088cc; color:white; padding:0.4rem 1rem;"><i class="fas fa-star me-1"></i> <span id="detailRating">4.5</span> ★</span>
                                <span class="badge" style="background:#B7A08B; color:#023b45; padding:0.4rem 1rem;"><i class="fas fa-comment me-1"></i> <span id="detailReviews">128</span> reviews</span>
                                <span class="badge" style="background:#27ae60; color:white; padding:0.4rem 1rem;"><i class="fas fa-check-circle me-1"></i> In Stock</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 id="detailProductName" style="color:#023b45; font-family:"Space Grotesk",sans-serif; font-weight:700;">Product Name</h4>
                            <p id="detailProductDesc" style="color:#023b45; opacity:0.8;">Premium quality accounts with full access and support.</p>
                            <div class="price-modern mb-3">
                                <span class="current-price" id="detailProductPrice" style="font-size:2rem;">$40</span>
                                <span class="old-price" id="detailOldPrice" style="font-size:1.1rem;">$55</span>
                                <span class="discount-badge" id="detailDiscount">-27%</span>
                            </div>
                            <div class="stock-info mb-2"><i class="fas fa-check-circle in-stock"></i> <span id="detailStock">245 available</span></div>
                            <div id="detailFeaturesList">
                                <div class="detail-feature-item"><i class="fas fa-check-circle"></i> Fresh and active accounts</div>
                                <div class="detail-feature-item"><i class="fas fa-check-circle"></i> 24 Hours Replacement Guaranteed</div>
                                <div class="detail-feature-item"><i class="fas fa-check-circle"></i> Manual quality checking</div>
                                <div class="detail-feature-item"><i class="fas fa-check-circle"></i> Fast online delivery</div>
                                <div class="detail-feature-item"><i class="fas fa-check-circle"></i> Secure account information</div>
                            </div>
                        </div>
                    </div>
                    <div class="alert mt-3 rounded-4" style="background:rgba(0,136,204,0.08); border:none; color:#023b45;">
                        <i class="fas fa-shield-alt me-2"></i> 100% secure checkout &amp; instant delivery
                    </div>
                </div>
                <div class="modal-footer border-0 pb-4 px-4">
                    <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal" style="border-color:#0088cc; color:#023b45;">Close</button>
                    <button type="button" class="btn rounded-pill px-4" id="modalAddToCartBtn" style="background: linear-gradient(135deg,#0088cc,#005580); border:none; color:white;"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ════════════════════════════════════════════════════
    SCRIPTS
    ════════════════════════════════════════════════════ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>
        .cards-premium-container { max-width: 1400px; margin: 0 auto; }
        .section-head { text-align: center; margin-bottom: 3.5rem; }
        .section-padding { padding: 80px 0; }
        .rating-count { font-size: 0.8rem; font-weight: 600; color: #023b45; background: rgba(2,59,69,0.08); padding: 0.25rem 0.7rem; border-radius: 40px; cursor: pointer; }
        .rating-count:hover { background: rgba(2,59,69,0.18); }
        .star-rating { display: inline-flex; align-items: center; gap: 0.15rem; }
        .star-rating i { font-size: 1.1rem; cursor: pointer; transition: all 0.15s; color: #d4c4b0; }
        .star-rating i.active-star { color: #f5b042; text-shadow: 0 0 3px rgba(245,176,66,0.5); }
        .star-rating i.hover-star { transform: scale(1.15); filter: brightness(1.2); }
        .product-rating { display: flex; align-items: center; flex-wrap: wrap; gap: 0.65rem; margin: 0.25rem 0 0.75rem; }
        .price-modern { display: flex; align-items: baseline; flex-wrap: wrap; gap: 0.5rem; margin: 0.5rem 0 0.2rem; }
        .discount-badge { background: rgba(231,76,60,0.15); color: #c0392b; font-size: 0.7rem; font-weight: 700; padding: 0.15rem 0.6rem; border-radius: 40px; margin-left: 0.3rem; }
        .stock-info { font-size: 0.68rem; font-weight: 600; color: #023b45; opacity: 0.7; margin-top: 0.2rem; }
        .stock-info .in-stock { color: #27ae60; }
        .btn-group-premium { display: flex; gap: 0.8rem; margin-top: auto; }
        .review-modal .modal-content { background: #fef8f0; border-radius: 2rem; border: 1px solid #B7A08B; }
        .detail-modal .modal-content { background: #fef8f0; border-radius: 2rem; border: 1px solid #0088cc; }
        .detail-image-wrap { background: linear-gradient(135deg, #0088cc, #005580); border-radius: 1.5rem; overflow: hidden; height: 250px; }
        .detail-image-wrap img { width: 100%; height: 100%; object-fit: cover; }
        .detail-feature-item { display: flex; align-items: center; gap: 10px; padding: 0.4rem 0; color: #023b45; font-size: 0.9rem; }
        .detail-feature-item i { color: #0088cc; width: 20px; }
        .rating-distribution { background: rgba(2,59,69,0.05); border-radius: 1.5rem; padding: 1.2rem; }
        .distro-bar { display: flex; align-items: center; gap: 0.6rem; margin-bottom: 0.6rem; }
        .distro-label { width: 45px; font-size: 0.85rem; font-weight: 700; color: #023b45; }
        .bar-bg { flex: 1; height: 8px; background: rgba(2,59,69,0.1); border-radius: 20px; overflow: hidden; }
        .bar-fill { width: 0%; height: 100%; background: #f5b042; border-radius: 20px; transition: width 0.6s cubic-bezier(0.2,0.9,0.4,1.1); }
        .distro-percent { width: 45px; font-size: 0.75rem; font-weight: 600; color: #023b45; }
        .review-card-item { background: white; border-radius: 1.25rem; padding: 1rem; margin-bottom: 0.8rem; transition: all 0.2s; border: 1px solid rgba(183,160,139,0.2); }
        .review-card-item:hover { transform: translateX(4px); }
        .avatar-initial { width: 40px; height: 40px; border-radius: 50%; background: #023b45; color: white; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1rem; flex-shrink: 0; }
        .toast-notification { position: fixed; bottom: 30px; right: 30px; background: #023b45; color: white; padding: 14px 24px; border-radius: 60px; font-weight: 600; font-size: 0.9rem; z-index: 9999; box-shadow: 0 10px 25px rgba(0,0,0,0.2); animation: slideInRight 0.4s ease; border: 1px solid rgba(183,160,139,0.3); display: flex; align-items: center; gap: 10px; min-width: 200px; }
        .toast-notification.success { border-left: 4px solid #2ecc71; }
        .toast-notification.error { border-left: 4px solid #e74c3c; }
        @keyframes slideInRight { from { transform: translateX(100px); opacity: 0; } to { transform: translateX(0); opacity: 1; } }
        .ripple { position: absolute; border-radius: 50%; background: rgba(255,255,255,0.4); transform: scale(0); animation: rippleAnim 0.5s linear; pointer-events: none; }
        @keyframes rippleAnim { to { transform: scale(6); opacity: 0; } }

        @media (max-width: 768px) { .detail-image-wrap { height: 180px; } }
        @media (max-width: 576px) {
            .detail-image-wrap { height: 140px !important; }
            .detail-modal .modal-body { padding: 12px !important; }
            .detail-modal .modal-footer { padding: 12px !important; }
            .modal-dialog { margin: 8px !important; }
            #detailProductPrice { font-size: 1.5rem !important; }
            .detail-feature-item { font-size: 0.8rem !important; }
            .btn-group-premium { flex-direction: column; gap: 0.6rem; }
        }

        /* ── Scrollbar fix ── */
        .tg-hero, .tg-hero * {
            overflow-x: hidden !important;
            overflow-y: hidden !important;
        }
    </style>

    <script>
        (function() {
            "use strict";
            AOS.init({ duration: 700, once: true, offset: 20, easing: "ease-out-cubic", mirror: false });

            const productData = {
                "telegram-fresh": {
                    name: "Fresh Telegram Accounts", desc: "Brand new Telegram accounts with full access and instant delivery.",
                    price: 25, oldPrice: 35, discount: "-29%", stock: 320, avg: 4.5, total: 95,
                    distribution: { 5: 55, 4: 25, 3: 12, 2: 2, 1: 1 },
                    reviews: [
                        { name: "Mark T.", country: "USA", text: "Excellent fresh Telegram accounts, delivery was instant!", rating: 5, date: "2025-01-10" },
                        { name: "Elena R.", country: "Germany", text: "Perfect for my Telegram marketing projects. Great quality.", rating: 4, date: "2025-01-05" },
                        { name: "David S.", country: "Canada", text: "Fast delivery and accounts work perfectly. Will buy again.", rating: 5, date: "2024-12-28" },
                        { name: "Nina K.", country: "UK", text: "Very happy with the purchase. Accounts are fresh and working.", rating: 5, date: "2024-12-20" },
                        { name: "Omar H.", country: "UAE", text: "Good value for fresh accounts. Support was helpful.", rating: 4, date: "2024-12-15" }
                    ]
                },
                "telegram-pva": {
                    name: "PVA Telegram Accounts", desc: "Phone verified Telegram accounts with high trust score and recovery access.",
                    price: 45, oldPrice: 55, discount: "-18%", stock: 280, avg: 4.7, total: 142,
                    distribution: { 5: 85, 4: 35, 3: 15, 2: 4, 1: 3 },
                    reviews: [
                        { name: "Sophie L.", country: "France", text: "Best PVA Telegram accounts on the market. Highly recommended!", rating: 5, date: "2025-01-12" },
                        { name: "James W.", country: "USA", text: "Phone verified accounts work great for my business.", rating: 5, date: "2025-01-08" },
                        { name: "Aisha M.", country: "Malaysia", text: "Quality is outstanding. Trust score is high as promised.", rating: 4, date: "2024-12-30" },
                        { name: "Carlos D.", country: "Spain", text: "Great PVA accounts with recovery access included.", rating: 5, date: "2024-12-22" },
                        { name: "Liam N.", country: "Ireland", text: "Very reliable and support team is quick to respond.", rating: 5, date: "2024-12-18" }
                    ]
                },
                "telegram-aged": {
                    name: "Aged Telegram Accounts", desc: "6+ month old Telegram accounts with activity history and established reputation.",
                    price: 75, oldPrice: 95, discount: "-21%", stock: 175, avg: 4.6, total: 118,
                    distribution: { 5: 65, 4: 30, 3: 15, 2: 5, 1: 3 },
                    reviews: [
                        { name: "Ryan B.", country: "Australia", text: "Aged accounts have great history. Perfect for serious use.", rating: 5, date: "2025-01-11" },
                        { name: "Hannah P.", country: "UK", text: "These aged Telegram profiles are exactly as described.", rating: 4, date: "2025-01-06" },
                        { name: "Viktor S.", country: "Russia", text: "Good reputation on these accounts. Delivery was fast.", rating: 5, date: "2024-12-25" },
                        { name: "Maria F.", country: "Italy", text: "Impressed with the activity history. Excellent purchase.", rating: 5, date: "2024-12-19" },
                        { name: "Tom H.", country: "USA", text: "Aged accounts work perfectly. Support very helpful.", rating: 4, date: "2024-12-14" }
                    ]
                },
                "telegram-premium": {
                    name: "Premium Telegram Accounts", desc: "Top quality Telegram accounts with premium features and priority support.",
                    price: 120, oldPrice: 150, discount: "-20%", stock: 210, avg: 4.8, total: 203,
                    distribution: { 5: 140, 4: 40, 3: 15, 2: 5, 1: 3 },
                    reviews: [
                        { name: "Daniel K.", country: "USA", text: "Premium accounts are worth every penny. Top quality!", rating: 5, date: "2025-01-13" },
                        { name: "Yuki T.", country: "Japan", text: "Excellent quality and priority support was amazing.", rating: 5, date: "2025-01-09" },
                        { name: "Sarah J.", country: "Canada", text: "The best Telegram accounts I have ever purchased.", rating: 5, date: "2024-12-31" },
                        { name: "Ahmed Z.", country: "Egypt", text: "Premium accounts with lifetime warranty. Highly recommended!", rating: 5, date: "2024-12-24" },
                        { name: "Emma W.", country: "UK", text: "Bulk discounts are great. Perfect for my agency needs.", rating: 4, date: "2024-12-16" }
                    ]
                }
            };

            // ═══ Stars ═══
            document.querySelectorAll(".star-rating").forEach(container => {
                const p = container.dataset.product, d = productData[p];
                if (!d) return;
                const a = d.avg, f = Math.floor(a), h = a % 1 >= 0.5 ? 1 : 0, e = 5 - f - h;
                let html = "";
                for (let i = 0; i < f; i++) html += `<i class="fas fa-star active-star" data-star="${i+1}"></i>`;
                if (h) html += `<i class="fas fa-star-half-alt active-star" data-star="${f+1}"></i>`;
                for (let i = 0; i < e; i++) html += `<i class="fas fa-star" data-star="${f+h+i+1}"></i>`;
                container.innerHTML = html;
                const stars = container.querySelectorAll("i");
                stars.forEach((s, idx) => {
                    s.style.cursor = "pointer";
                    s.addEventListener("mouseenter", function() {
                        const idx2 = parseInt(this.dataset.star) || (idx + 1);
                        stars.forEach((ss, i2) => { const si = parseInt(ss.dataset.star) || (i2 + 1); si <= idx2 ? ss.classList.add("hover-star") : ss.classList.remove("hover-star"); });
                    });
                    s.addEventListener("mouseleave", () => stars.forEach(ss => ss.classList.remove("hover-star")));
                    s.addEventListener("click", function(e) {
                        e.stopPropagation();
                        const idx2 = parseInt(this.dataset.star) || (idx + 1);
                        stars.forEach((ss, i2) => { const si = parseInt(ss.dataset.star) || (i2 + 1); ss.className = si <= idx2 ? "fas fa-star active-star" : "fas fa-star"; });
                        showToast("⭐ You rated this product " + idx2 + " stars! Thank you.");
                    });
                });
            });

            function showToast(msg, type) {
                if (!type) type = "success";
                const old = document.querySelector(".toast-notification");
                if (old) old.remove();
                const d = document.createElement("div");
                d.className = "toast-notification " + type;
                d.innerHTML = `<i class="fas ${type==="success"?"fa-check-circle":"fa-exclamation-circle"}"></i><span>${msg}</span>`;
                document.body.appendChild(d);
                setTimeout(() => { d.style.opacity = "0"; d.style.transform = "translateX(50px)"; d.style.transition = "all 0.3s ease"; setTimeout(() => d.remove(), 300); }, 3000);
            }

            document.querySelectorAll(".addCartBtn").forEach(btn => {
                btn.addEventListener("click", function(e) {
                    const name = this.dataset.name;
                    if (!name) return;
                    createRipple(e, this);
                    // Defer DOM mutation so cart.js event delegation
                    // can resolve e.target.closest('.addCartBtn') before
                    // the child nodes are detached.
                    requestAnimationFrame(() => {
                        btn.classList.add("success");
                        btn.innerHTML = "<i class=\"fas fa-check\"></i> <span class=\"cart-text\">Added!</span>";
                        showToast("🛒 " + name + " added to cart!");
                    });
                    setTimeout(() => { this.classList.remove("success"); this.innerHTML = "<i class=\"fas fa-shopping-cart\"></i> <span class=\"cart-text\">Add to Cart</span><span class=\"spinner\"></span>"; }, 1500);
                });
            });

            const detailModal = new bootstrap.Modal(document.getElementById("productDetailModal"));
            const mName = document.getElementById("detailProductName");
            const mDesc = document.getElementById("detailProductDesc");
            const mPrice = document.getElementById("detailProductPrice");
            const mOld = document.getElementById("detailOldPrice");
            const mDisc = document.getElementById("detailDiscount");
            const mStock = document.getElementById("detailStock");
            const mRate = document.getElementById("detailRating");
            const mRev = document.getElementById("detailReviews");
            const mTitle = document.getElementById("modalProductTitle");

            document.querySelectorAll(".detailBtn").forEach(btn => {
                btn.addEventListener("click", function() {
                    const card = this.closest(".tg-card") || this.closest(".col");
                    if (!card) { detailModal.show(); return; }
                    const t = card.querySelector(".tg-card-title"), ds = card.querySelector(".tg-card-desc"), p = card.querySelector(".tg-price"), o = card.querySelector(".tg-old-price"), dsc = card.querySelector(".discount-badge"), q = card.querySelector(".tg-qty-tag"), s = card.querySelector(".stock-info"), f = card.querySelector(".tg-feat-grid");
                    if (t) mName.textContent = t.textContent.trim();
                    if (ds) mDesc.textContent = ds.textContent.trim();
                    if (p) mPrice.textContent = p.textContent.trim();
                    if (o) mOld.textContent = o.textContent.trim();
                    if (dsc) mDisc.textContent = dsc.textContent.trim();
                    if (q) mTitle.textContent = (t ? t.textContent.trim() : "Package") + " — " + q.textContent.trim();
                    if (s) mStock.textContent = s.textContent.trim();
                    const fl = document.getElementById("detailFeaturesList");
                    if (fl && f) { let h = ""; f.querySelectorAll(".tg-feat").forEach(fi => { h += "<div class=\"detail-feature-item\"><i class=\"fas fa-check-circle\"></i> " + fi.textContent.trim() + "</div>"; }); if (h) fl.innerHTML = h; }
                    const pid = (card.closest("[data-product-id]") || {}).dataset.productId || "telegram-fresh";
                    const gd = productData[pid] || productData["telegram-fresh"];
                    if (gd) { mRate.textContent = gd.avg.toFixed(1); mRev.textContent = gd.total; }
                    detailModal.show();
                });
            });

            document.getElementById("modalAddToCartBtn").addEventListener("click", function() {
                const name = mName?.textContent || "";
                const pt = mPrice?.textContent || "0";
                const pp = parseFloat(pt.replace(/[^0-9.]/g, ""));
                if (!name || !pp || pp <= 0) { showToast("Invalid product data.", "error"); return; }
                const id = "modal_" + name.toLowerCase().replace(/\s+/g, "_");
                fetch("/Gmail Website/ajax/add_to_cart.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/x-www-form-urlencoded" },
                    body: "id=" + encodeURIComponent(id) + "&name=" + encodeURIComponent(name) + "&price=" + encodeURIComponent(pp)
                })
                .then(r => r.json())
                .then(d => {
                    if (d.success) {
                        showToast(d.message);
                        if (d.cart_count !== undefined) {
                            document.querySelectorAll(".cart-counter").forEach(c => { c.textContent = d.cart_count; c.classList.toggle("visible", d.cart_count > 0); });
                        }
                        const m = bootstrap.Modal.getInstance(document.getElementById("productDetailModal"));
                        if (m) m.hide();
                    } else { showToast(d.message || "Error adding product.", "error"); }
                })
                .catch(() => showToast("Network error. Please try again.", "error"));
            });

            const reviewModal = new bootstrap.Modal(document.getElementById("reviewModal"));
            const dBars = document.getElementById("distributionBars");
            const rContainer = document.getElementById("reviewsListContainer");
            const mAvg = document.getElementById("modalAvgRating");
            const mTotal = document.getElementById("modalTotalReviews");
            const mTitleR = document.getElementById("reviewModalTitle");

            document.querySelectorAll(".rating-count").forEach(count => {
                count.addEventListener("click", function() {
                    const data = productData[this.dataset.product];
                    if (!data) return;
                    mTitleR.textContent = data.name + " Reviews";
                    mAvg.textContent = data.avg.toFixed(1);
                    mTotal.textContent = data.total;
                    const dist = data.distribution;
                    const max = Math.max(...Object.values(dist));
                    let bars = "";
                    for (let i = 5; i >= 1; i--) { const cv = dist[i] || 0; const pct = max > 0 ? (cv / max * 100) : 0; bars += `<div class="distro-bar"><span class="distro-label">${i} ★</span><div class="bar-bg"><div class="bar-fill" style="width:${pct}%;"></div></div><span class="distro-percent">${cv}</span></div>`; }
                    dBars.innerHTML = bars;
                    let revs = "";
                    (data.reviews || []).forEach(r => {
                        const init = r.name.split(" ").map(n => n[0]).join("");
                        const date = new Date(r.date).toLocaleDateString("en-US", { month: "short", day: "numeric", year: "numeric" });
                        revs += `<div class="review-card-item d-flex align-items-start gap-3"><div class="avatar-initial">${init}</div><div style="flex:1;"><div class="d-flex flex-wrap align-items-center gap-2"><span class="fw-bold" style="color:#023b45;">${r.name}</span><span style="color:#023b45;opacity:0.5;font-size:0.7rem;">${r.country}</span><span style="color:#023b45;opacity:0.4;font-size:0.7rem;margin-left:auto;">${date}</span></div><div class="text-warning mb-1">${"★".repeat(r.rating)}${"☆".repeat(5-r.rating)}</div><div style="color:#023b45;opacity:0.8;font-size:0.9rem;">${r.text}</div></div></div>`;
                    });
                    rContainer.innerHTML = revs || '<p class="text-muted">No reviews yet.</p>';
                    reviewModal.show();
                });
            });

            function createRipple(e, el) {
                const r = document.createElement("span");
                r.className = "ripple";
                const rect = el.getBoundingClientRect();
                const s = Math.max(rect.width, rect.height);
                r.style.width = r.style.height = s + "px";
                r.style.left = (e.clientX - rect.left - s / 2) + "px";
                r.style.top = (e.clientY - rect.top - s / 2) + "px";
                el.appendChild(r);
                setTimeout(() => r.remove(), 500);
            }

            document.querySelectorAll('a[href^="#"]').forEach(a => {
                a.addEventListener("click", function(e) {
                    const id = this.getAttribute("href");
                    if (id === "#") return;
                    const t = document.querySelector(id);
                    if (t) { e.preventDefault(); window.scrollTo({ top: t.getBoundingClientRect().top + window.pageYOffset - 80, behavior: "smooth" }); }
                });
            });

            console.log("✅ Premium Telegram Accounts Page loaded successfully.");
        })();
    </script>

    <!-- ════════════════════════════════════════════════════
    WHY CHOOSE
    ════════════════════════════════════════════════════ -->
    <section class="section-padding" style="background: rgba(255,255,255,0.1);">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-badge-tg"><i class="fas fa-heart"></i> Why Choose Us</div>
                <h2 class="section-title-tg">Why Our <span class="highlight-tg">Telegram</span> Accounts?</h2>
                <p class="section-sub-tg">The advantages of choosing our premium Telegram services</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="tg-why-card">
                        <div class="tg-why-icon"><i class="fas fa-star"></i></div>
                        <h4 class="tg-why-title">High Quality</h4>
                        <p class="tg-why-desc">All accounts manually tested and verified</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="150">
                    <div class="tg-why-card">
                        <div class="tg-why-icon"><i class="fas fa-bolt"></i></div>
                        <h4 class="tg-why-title">Instant Delivery</h4>
                        <p class="tg-why-desc">Receive accounts within minutes</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="tg-why-card">
                        <div class="tg-why-icon"><i class="fas fa-boxes"></i></div>
                        <h4 class="tg-why-title">Bulk Orders</h4>
                        <p class="tg-why-desc">Volume discounts available</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="250">
                    <div class="tg-why-card">
                        <div class="tg-why-icon"><i class="fas fa-lock"></i></div>
                        <h4 class="tg-why-title">Secure Accounts</h4>
                        <p class="tg-why-desc">Bank-level security</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                    <div class="tg-why-card">
                        <div class="tg-why-icon"><i class="fas fa-headset"></i></div>
                        <h4 class="tg-why-title">24/7 Support</h4>
                        <p class="tg-why-desc">Expert customer service</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="350">
                    <div class="tg-why-card">
                        <div class="tg-why-icon"><i class="fas fa-sync-alt"></i></div>
                        <h4 class="tg-why-title">Fast Replacement</h4>
                        <p class="tg-why-desc">24-hour guarantee</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════════
    FEATURES
    ════════════════════════════════════════════════════ -->
    <section class="section-padding" style="background: #B7A08B;">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-badge-tg"><i class="fas fa-list-check"></i> Account Features</div>
                <h2 class="section-title-tg">Premium <span class="highlight-tg">Telegram</span> Features</h2>
                <p class="section-sub-tg">What makes our Telegram accounts exceptional</p>
            </div>
            <div class="row g-3">
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="100"><div class="tg-feat-item"><i class="fas fa-user-plus"></i><span>Fresh Accounts</span></div></div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="150"><div class="tg-feat-item"><i class="fas fa-clock"></i><span>Aged Accounts</span></div></div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="200"><div class="tg-feat-item"><i class="fas fa-key"></i><span>Full Access</span></div></div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="250"><div class="tg-feat-item"><i class="fas fa-lock"></i><span>Secure Login</span></div></div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="300"><div class="tg-feat-item"><i class="fas fa-phone"></i><span>Phone Verified</span></div></div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="350"><div class="tg-feat-item"><i class="fas fa-globe"></i><span>Global Coverage</span></div></div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="400"><div class="tg-feat-item"><i class="fas fa-briefcase"></i><span>Business Ready</span></div></div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="450"><div class="tg-feat-item"><i class="fas fa-boxes"></i><span>Bulk Available</span></div></div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════════
    ORDER PROCESS
    ════════════════════════════════════════════════════ -->
    <section class="section-padding" style="background: rgba(255,255,255,0.1);">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-badge-tg"><i class="fas fa-route"></i> Order Process</div>
                <h2 class="section-title-tg">Simple <span class="highlight-tg">4-Step</span> Process</h2>
                <p class="section-sub-tg">Order your Telegram accounts in minutes</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-right" data-aos-delay="100"><div class="tg-step"><div class="tg-step-num">1</div><h4 style="font-weight:700;font-size:1.05rem;color:#023b45;">Select Package</h4><p style="color:rgba(2,59,69,0.6);font-size:0.82rem;">Choose your Telegram account type</p></div></div>
                <div class="col-md-6 col-lg-3" data-aos="fade-right" data-aos-delay="150"><div class="tg-step"><div class="tg-step-num">2</div><h4 style="font-weight:700;font-size:1.05rem;color:#023b45;">Choose Quantity</h4><p style="color:rgba(2,59,69,0.6);font-size:0.82rem;">Select how many you need</p></div></div>
                <div class="col-md-6 col-lg-3" data-aos="fade-right" data-aos-delay="200"><div class="tg-step"><div class="tg-step-num">3</div><h4 style="font-weight:700;font-size:1.05rem;color:#023b45;">Complete Order</h4><p style="color:rgba(2,59,69,0.6);font-size:0.82rem;">Secure checkout via our partners</p></div></div>
                <div class="col-md-6 col-lg-3" data-aos="fade-right" data-aos-delay="250"><div class="tg-step"><div class="tg-step-num">4</div><h4 style="font-weight:700;font-size:1.05rem;color:#023b45;">Receive Delivery</h4><p style="color:rgba(2,59,69,0.6);font-size:0.82rem;">Get your accounts instantly</p></div></div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════════
    QUALITY METRICS
    ════════════════════════════════════════════════════ -->
    <section class="section-padding" style="background: #023b45;">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-badge-tg" style="background:rgba(255,255,255,0.08); color:#FEFAF7; border-color:rgba(255,255,255,0.15);"><i class="fas fa-chart-simple"></i> Platform Metrics</div>
                <h2 class="section-title-tg" style="color:#FEFAF7;">Telegram <span style="color:#B7A08B;">Quality</span> Standards</h2>
                <p style="color:rgba(254,250,247,0.6); max-width:550px; margin:0 auto;">Our commitment to quality and excellence</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="tg-dashboard-card">
                        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;"><span style="font-weight:600;color:#023b45;">Quality Score</span><span style="font-weight:800;color:#0088cc;font-size:1.2rem;">98%</span></div>
                        <div style="height:8px;background:rgba(0,136,204,0.1);border-radius:10px;overflow:hidden;"><div style="height:100%;width:98%;background:linear-gradient(90deg,#0088cc,#005580);border-radius:10px;"></div></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
                    <div class="tg-dashboard-card">
                        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;"><span style="font-weight:600;color:#023b45;">Verification Rate</span><span style="font-weight:800;color:#0088cc;font-size:1.2rem;">95%</span></div>
                        <div style="height:8px;background:rgba(0,136,204,0.1);border-radius:10px;overflow:hidden;"><div style="height:100%;width:95%;background:linear-gradient(90deg,#3498db,#2980b9);border-radius:10px;"></div></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="tg-dashboard-card">
                        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;"><span style="font-weight:600;color:#023b45;">Delivery Success</span><span style="font-weight:800;color:#0088cc;font-size:1.2rem;">99.8%</span></div>
                        <div style="height:8px;background:rgba(0,136,204,0.1);border-radius:10px;overflow:hidden;"><div style="height:100%;width:99.8%;background:linear-gradient(90deg,#9b59b6,#8e44ad);border-radius:10px;"></div></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="250">
                    <div class="tg-dashboard-card">
                        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;"><span style="font-weight:600;color:#023b45;">Satisfaction</span><span style="font-weight:800;color:#0088cc;font-size:1.2rem;">99%</span></div>
                        <div style="height:8px;background:rgba(0,136,204,0.1);border-radius:10px;overflow:hidden;"><div style="height:100%;width:99%;background:linear-gradient(90deg,#f1c40f,#f39c12);border-radius:10px;"></div></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="tg-dashboard-card">
                        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;"><span style="font-weight:600;color:#023b45;">Support Performance</span><span style="font-weight:800;color:#0088cc;font-size:1.2rem;">97%</span></div>
                        <div style="height:8px;background:rgba(0,136,204,0.1);border-radius:10px;overflow:hidden;"><div style="height:100%;width:97%;background:linear-gradient(90deg,#1abc9c,#16a085);border-radius:10px;"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════════
    CUSTOMER REVIEWS
    ════════════════════════════════════════════════════ -->
    <section class="section-padding" style="background: rgba(255,255,255,0.1);">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-badge-tg"><i class="fas fa-quote-left"></i> Customer Reviews</div>
                <h2 class="section-title-tg">What Our <span class="highlight-tg">Customers</span> Say</h2>
                <p class="section-sub-tg">Real reviews from real Telegram account customers</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="tg-review-card">
                        <div style="display:flex;align-items:center;gap:12px;margin-bottom:10px;"><div style="width:44px;height:44px;border-radius:50%;background:linear-gradient(135deg,#0088cc,#005580);color:white;display:flex;align-items:center;justify-content:center;font-weight:700;">MT</div><div><div style="font-weight:700;color:#023b45;">Mark T.</div><div style="font-size:0.7rem;color:rgba(2,59,69,0.4);">United States</div></div></div>
                        <div style="color:#f5b042;font-size:0.8rem;letter-spacing:1px;">★★★★★</div>
                        <p style="font-size:0.88rem;color:rgba(2,59,69,0.75);line-height:1.6;margin-top:8px;">"Best Telegram accounts I've purchased. Instant delivery and great quality!"</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="150">
                    <div class="tg-review-card">
                        <div style="display:flex;align-items:center;gap:12px;margin-bottom:10px;"><div style="width:44px;height:44px;border-radius:50%;background:linear-gradient(135deg,#0088cc,#005580);color:white;display:flex;align-items:center;justify-content:center;font-weight:700;">ER</div><div><div style="font-weight:700;color:#023b45;">Elena R.</div><div style="font-size:0.7rem;color:rgba(2,59,69,0.4);">Germany</div></div></div>
                        <div style="color:#f5b042;font-size:0.8rem;letter-spacing:1px;">★★★★★</div>
                        <p style="font-size:0.88rem;color:rgba(2,59,69,0.75);line-height:1.6;margin-top:8px;">"Great Telegram accounts for my marketing campaigns. Highly recommended!"</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="tg-review-card">
                        <div style="display:flex;align-items:center;gap:12px;margin-bottom:10px;"><div style="width:44px;height:44px;border-radius:50%;background:linear-gradient(135deg,#0088cc,#005580);color:white;display:flex;align-items:center;justify-content:center;font-weight:700;">SL</div><div><div style="font-weight:700;color:#023b45;">Sophie L.</div><div style="font-size:0.7rem;color:rgba(2,59,69,0.4);">France</div></div></div>
                        <div style="color:#f5b042;font-size:0.8rem;letter-spacing:1px;">★★★★★</div>
                        <p style="font-size:0.88rem;color:rgba(2,59,69,0.75);line-height:1.6;margin-top:8px;">"Excellent quality PVA Telegram accounts. Support is very responsive."</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="250">
                    <div class="tg-review-card">
                        <div style="display:flex;align-items:center;gap:12px;margin-bottom:10px;"><div style="width:44px;height:44px;border-radius:50%;background:linear-gradient(135deg,#0088cc,#005580);color:white;display:flex;align-items:center;justify-content:center;font-weight:700;">RB</div><div><div style="font-weight:700;color:#023b45;">Ryan B.</div><div style="font-size:0.7rem;color:rgba(2,59,69,0.4);">Australia</div></div></div>
                        <div style="color:#f5b042;font-size:0.8rem;letter-spacing:1px;">★★★★★</div>
                        <p style="font-size:0.88rem;color:rgba(2,59,69,0.75);line-height:1.6;margin-top:8px;">"Aged Telegram accounts have great history. Perfect for business use."</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="tg-review-card">
                        <div style="display:flex;align-items:center;gap:12px;margin-bottom:10px;"><div style="width:44px;height:44px;border-radius:50%;background:linear-gradient(135deg,#0088cc,#005580);color:white;display:flex;align-items:center;justify-content:center;font-weight:700;">DK</div><div><div style="font-weight:700;color:#023b45;">Daniel K.</div><div style="font-size:0.7rem;color:rgba(2,59,69,0.4);">USA</div></div></div>
                        <div style="color:#f5b042;font-size:0.8rem;letter-spacing:1px;">★★★★★</div>
                        <p style="font-size:0.88rem;color:rgba(2,59,69,0.75);line-height:1.6;margin-top:8px;">"Premium Telegram accounts are worth every dollar. Top notch quality!"</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="350">
                    <div class="tg-review-card">
                        <div style="display:flex;align-items:center;gap:12px;margin-bottom:10px;"><div style="width:44px;height:44px;border-radius:50%;background:linear-gradient(135deg,#0088cc,#005580);color:white;display:flex;align-items:center;justify-content:center;font-weight:700;">AM</div><div><div style="font-weight:700;color:#023b45;">Aisha M.</div><div style="font-size:0.7rem;color:rgba(2,59,69,0.4);">Malaysia</div></div></div>
                        <div style="color:#f5b042;font-size:0.8rem;letter-spacing:1px;">★★★★★</div>
                        <p style="font-size:0.88rem;color:rgba(2,59,69,0.75);line-height:1.6;margin-top:8px;">"Fast delivery and premium quality accounts. Very satisfied with my purchase."</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="tg-review-card">
                        <div style="display:flex;align-items:center;gap:12px;margin-bottom:10px;"><div style="width:44px;height:44px;border-radius:50%;background:linear-gradient(135deg,#0088cc,#005580);color:white;display:flex;align-items:center;justify-content:center;font-weight:700;">HP</div><div><div style="font-weight:700;color:#023b45;">Hannah P.</div><div style="font-size:0.7rem;color:rgba(2,59,69,0.4);">UK</div></div></div>
                        <div style="color:#f5b042;font-size:0.8rem;letter-spacing:1px;">★★★★★</div>
                        <p style="font-size:0.88rem;color:rgba(2,59,69,0.75);line-height:1.6;margin-top:8px;">"Great service for bulk Telegram orders. Everything went smoothly."</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="450">
                    <div class="tg-review-card">
                        <div style="display:flex;align-items:center;gap:12px;margin-bottom:10px;"><div style="width:44px;height:44px;border-radius:50%;background:linear-gradient(135deg,#0088cc,#005580);color:white;display:flex;align-items:center;justify-content:center;font-weight:700;">YT</div><div><div style="font-weight:700;color:#023b45;">Yuki T.</div><div style="font-size:0.7rem;color:rgba(2,59,69,0.4);">Japan</div></div></div>
                        <div style="color:#f5b042;font-size:0.8rem;letter-spacing:1px;">★★★★★</div>
                        <p style="font-size:0.88rem;color:rgba(2,59,69,0.75);line-height:1.6;margin-top:8px;">"Excellent quality Telegram accounts. Will definitely order again."</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="500">
                    <div class="tg-review-card">
                        <div style="display:flex;align-items:center;gap:12px;margin-bottom:10px;"><div style="width:44px;height:44px;border-radius:50%;background:linear-gradient(135deg,#0088cc,#005580);color:white;display:flex;align-items:center;justify-content:center;font-weight:700;">AZ</div><div><div style="font-weight:700;color:#023b45;">Ahmed Z.</div><div style="font-size:0.7rem;color:rgba(2,59,69,0.4);">Egypt</div></div></div>
                        <div style="color:#f5b042;font-size:0.8rem;letter-spacing:1px;">★★★★★</div>
                        <p style="font-size:0.88rem;color:rgba(2,59,69,0.75);line-height:1.6;margin-top:8px;">"Premium Telegram accounts with lifetime warranty. Amazing service!"</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="550">
                    <div class="tg-review-card">
                        <div style="display:flex;align-items:center;gap:12px;margin-bottom:10px;"><div style="width:44px;height:44px;border-radius:50%;background:linear-gradient(135deg,#0088cc,#005580);color:white;display:flex;align-items:center;justify-content:center;font-weight:700;">CD</div><div><div style="font-weight:700;color:#023b45;">Carlos D.</div><div style="font-size:0.7rem;color:rgba(2,59,69,0.4);">Spain</div></div></div>
                        <div style="color:#f5b042;font-size:0.8rem;letter-spacing:1px;">★★★★★</div>
                        <p style="font-size:0.88rem;color:rgba(2,59,69,0.75);line-height:1.6;margin-top:8px;">"High quality Telegram accounts for my channel management needs."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════════
    FAQ
    ════════════════════════════════════════════════════ -->
  

    <!-- ════════════════════════════════════════════════════
    TRUST
    ════════════════════════════════════════════════════ -->
    <section class="section-padding" style="background: rgba(255,255,255,0.1);">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-badge-tg"><i class="fas fa-shield-alt"></i> Trust & Security</div>
                <h2 class="section-title-tg">Your <span class="highlight-tg">Security</span> Matters</h2>
                <p class="section-sub-tg">We prioritize your security and trust</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="100"><div class="tg-why-card" style="padding:1.2rem;"><div style="font-size:2rem;color:#0088cc;margin-bottom:6px;">🔒</div><div style="font-weight:700;color:#023b45;font-size:0.85rem;">Secure Transactions</div></div></div>
                <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="150"><div class="tg-why-card" style="padding:1.2rem;"><div style="font-size:2rem;color:#0088cc;margin-bottom:6px;">✅</div><div style="font-weight:700;color:#023b45;font-size:0.85rem;">Verified Quality</div></div></div>
                <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200"><div class="tg-why-card" style="padding:1.2rem;"><div style="font-size:2rem;color:#0088cc;margin-bottom:6px;">🛡️</div><div style="font-weight:700;color:#023b45;font-size:0.85rem;">Customer Protection</div></div></div>
                <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="250"><div class="tg-why-card" style="padding:1.2rem;"><div style="font-size:2rem;color:#0088cc;margin-bottom:6px;">⭐</div><div style="font-weight:700;color:#023b45;font-size:0.85rem;">Trusted Service</div></div></div>
                <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="300"><div class="tg-why-card" style="padding:1.2rem;"><div style="font-size:2rem;color:#0088cc;margin-bottom:6px;">⚡</div><div style="font-weight:700;color:#023b45;font-size:0.85rem;">Fast Delivery</div></div></div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════════
    CTA
    ════════════════════════════════════════════════════ -->
    <section class="section-padding" style="background: linear-gradient(135deg, #023b45, #011a1f);">
        <div class="container">
            <div class="text-center" data-aos="zoom-in" data-aos-duration="800">
                <div style="max-width:700px; margin:0 auto;">
                    <h2 style="font-size:clamp(2rem,4.5vw,3rem); font-weight:800; color:#FEFAF7; font-family:'Space Grotesk',sans-serif; line-height:1.1; margin-bottom:16px;">
                        Ready To Get <span style="color:#0088cc;">Premium Telegram</span> Accounts?
                    </h2>
                    <p style="font-size:1rem; color:rgba(254,250,247,0.7); margin:0 auto 28px; max-width:500px;">
                        Get high-quality Telegram accounts with fast delivery and professional support.
                    </p>
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <a href="#tgProducts" class="tg-btn-primary" style="background:linear-gradient(135deg,#0088cc,#005580) !important; box-shadow:0 8px 24px rgba(0,136,204,0.3) !important;"><i class="fab fa-telegram-plane"></i> Order Now</a>
                        <a href="#" class="tg-btn-secondary" style="color:#FEFAF7; border-color:rgba(254,250,247,0.3);">Contact Support</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════════
    COUNTERS & SCROLL
    ════════════════════════════════════════════════════ -->
    <script>
        (function() {
            "use strict";
            if (typeof AOS !== "undefined") AOS.init({ duration: 700, once: true, offset: 20, easing: "ease-out-cubic", mirror: false });

            function startCounters() {
                document.querySelectorAll("[data-tg-counter]").forEach(el => {
                    const t = parseInt(el.getAttribute("data-tg-counter"));
                    if (isNaN(t) || t <= 0) return;
                    let cur = 0, step = 0;
                    const inc = t / 60;
                    const tm = setInterval(() => { step++; cur += inc; if (step >= 60) { el.innerText = t + (t === 99 ? "%" : ""); clearInterval(tm); } else el.innerText = Math.floor(cur); }, 33);
                });
            }

            const obs = new IntersectionObserver((entries) => { if (entries.some(e => e.isIntersecting)) { startCounters(); obs.disconnect(); } }, { threshold: 0.3 });
            const hero = document.getElementById("tgHero");
            if (hero) obs.observe(hero);

            document.querySelectorAll('a[href^="#"]').forEach(a => {
                a.addEventListener("click", function(e) {
                    const id = this.getAttribute("href");
                    if (id === "#") return;
                    const t = document.querySelector(id);
                    if (t) { e.preventDefault(); window.scrollTo({ top: t.getBoundingClientRect().top + window.pageYOffset - 80, behavior: "smooth" }); }
                });
            });
            console.log("✅ Premium Telegram Accounts Page loaded successfully.");
        })();
    </script>

    <?php include 'footer.php'; ?>
</body>
</html>
