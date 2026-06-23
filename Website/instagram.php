<?php

include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>NOVA | Holographic Quantum Slider</title>

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
    
<!-- =========================================================
   HERO SECTION
   ========================================================= -->
<section class="gmail-hero-master-nexus section-padding" id="gmailHeroMaster" style="background: #ffffff; position:relative; overflow-x: hidden; overflow-y: hidden;">
    <!-- Subtle background shapes -->
    <div style="position:absolute; top:-20%; right:-10%; width:500px; height:500px; background:radial-gradient(circle, rgba(131,58,180,0.04) 0%, transparent 70%); border-radius:50%; pointer-events:none;"></div>
    <div style="position:absolute; bottom:-20%; left:-10%; width:400px; height:400px; background:radial-gradient(circle, rgba(225,48,108,0.03) 0%, transparent 70%); border-radius:50%; pointer-events:none;"></div>

    <div class="container position-relative" style="z-index:2;">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                <span class="gmail-hero-badge" style="display:inline-flex; align-items:center; gap:8px; background:#f1f3f4; color:#444; font-weight:700; font-size:0.75rem; letter-spacing:1.5px; text-transform:uppercase; padding:6px 16px; border-radius:60px; margin-bottom:16px; border:0.5px solid #e8eaed;">
                    <i class="fab fa-instagram me-2" style="color:#E1306C;"></i> Premium Instagram Solutions
                </span>
                <h1 class="gmail-hero-headline" style="font-size:clamp(2.8rem,7vw,4.8rem); font-weight:800; line-height:1.08; color:#111; margin-bottom:20px; font-family:'Playfair Display',serif;">
                    Premium <span style="position:relative; display:inline-block; color:#E1306C;">Instagram<span style="position:absolute; bottom:4px; left:0; width:100%; height:8px; background:rgba(225,48,108,0.12); border-radius:4px;"></span></span> Accounts
                </h1>
                <p class="gmail-hero-subtitle" style="font-size:1.1rem; color:rgba(0,0,0,0.6); max-width:520px; margin:0 0 28px 0; line-height:1.7;">
                    High-quality Instagram accounts for business, marketing, advertising, and social media growth.
                </p>
                <div class="gmail-hero-cta-group d-flex flex-wrap gap-3">
                    <a href="#gmailProducts" class="gmail-hero-btn-primary" style="background:#E1306C; color:#fff; border:none; padding:14px 36px; border-radius:60px; font-weight:700; font-size:0.95rem; transition:all 0.3s; text-decoration:none; display:inline-flex; align-items:center; gap:10px; box-shadow:0 8px 24px rgba(225,48,108,0.25);">
                        <i class="fas fa-rocket"></i> Explore Accounts
                    </a>
                    <a href="#gmailFAQs" class="gmail-hero-btn-secondary" style="background:transparent; color:#444; border:1.5px solid #dadce0; padding:12px 32px; border-radius:60px; font-weight:600; font-size:0.95rem; transition:all 0.3s; text-decoration:none; display:inline-flex; align-items:center; gap:8px;">
                        <i class="fas fa-circle-question"></i> Learn More
                    </a>
                </div>
                <div class="gmail-hero-stats d-flex flex-wrap gap-4 mt-5">
                    <div class="gmail-stat-item" style="text-align:center;">
                        <div class="gmail-stat-number" style="font-size:2.2rem; font-weight:800; color:#111; display:block; line-height:1.1;" data-gmail-counter=""></div>
                        <div style="font-size:0.8rem; color:#80868b;"></div>
                    </div>
                    <div class="gmail-stat-item" style="text-align:center;">
                        <div class="gmail-stat-number" style="font-size:2.2rem; font-weight:800; color:#111; display:block; line-height:1.1;" data-gmail-counter=""></div>
                        <div style="font-size:0.8rem; color:#80868b;"></div>
                    </div>
                    <div class="gmail-stat-item" style="text-align:center;">
                        <div class="gmail-stat-number" style="font-size:2.2rem; font-weight:800; color:#111; display:block; line-height:1.1;" data-gmail-counter=""></div>
                        <div style="font-size:0.8rem; color:#80868b;"></div>
                    </div>
                    <div class="gmail-stat-item" style="text-align:center;">
                        <div class="gmail-stat-number" style="font-size:2.2rem; font-weight:800; color:#111; display:block; line-height:1.1;" data-gmail-counter=""></div>
                        <div style="font-size:0.8rem; color:#80868b;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
                
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
   INSTAGRAM ACCOUNT TYPES
   ========================================================= -->
<section class="gmail-types-master-nexus section-padding" id="gmailAccountTypes" style="background: rgba(255,255,255,0.12);">
    <div class="container">
        <div class="gmail-types-header text-center mb-5" data-aos="fade-up">
            <span class="gmail-types-badge" style="display:inline-flex; align-items:center; gap:8px; background:rgba(2,59,69,0.12); color:#023b45; font-weight:700; font-size:0.75rem; letter-spacing:1.5px; text-transform:uppercase; padding:6px 16px; border-radius:60px; margin-bottom:16px; border:0.5px solid rgba(2,59,69,0.15);">
                <i class="fas fa-th-large me-2"></i> Account Types
            </span>
            <h2 class="gmail-types-title" style="font-size:clamp(2rem,4vw,2.8rem); font-weight:800; line-height:1.15; color:#023b45; font-family:'Playfair Display',serif;">
                Choose Your <span style="position:relative; display:inline-block; color:#023b45;">Instagram<span style="position:absolute; bottom:2px; left:0; width:100%; height:4px; background:rgba(2,59,69,0.2); border-radius:4px;"></span></span> Package
            </h2>
            <p style="color:rgba(2,59,69,0.7); max-width:550px; margin:0 auto;">Select the perfect Instagram account type for your needs</p>
        </div>
        <div class="gmail-types-grid row g-4" data-aos="fade-up" data-aos-delay="100">
            <!-- Type 1: Fresh Instagram -->
            <div class="col-md-6 col-lg-4" data-aos="flip-up" data-aos-delay="100">
                <div class="gmail-type-card" style="background:white; border-radius:24px; padding:2rem 1.5rem; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.4s; height:100%; border:1px solid rgba(2,59,69,0.04);">
                    <div style="font-size:2.8rem; color:#023b45; margin-bottom:12px;">🆕</div>
                    <h3 style="color:#023b45; font-weight:800; font-size:1.4rem; margin-bottom:4px;">Fresh Instagram Accounts</h3>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem; margin-bottom:12px;">Brand new accounts, ready for immediate use</p>
                    <ul style="list-style:none; padding:0; margin:0 0 16px 0;">
                        <li style="padding:4px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#023b45;"></i> Instantly available</li>
                        <li style="padding:4px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#023b45;"></i> No activity history</li>
                        <li style="padding:4px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#023b45;"></i> Perfect for new starts</li>
                    </ul>
                </div>
            </div>
            <!-- Type 2: PVA Instagram -->
            <div class="col-md-6 col-lg-4" data-aos="flip-up" data-aos-delay="150">
                <div class="gmail-type-card" style="background:white; border-radius:24px; padding:2rem 1.5rem; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.4s; height:100%; border:2px solid #023b45; position:relative;">
                    <div style="position:absolute; top:-10px; right:20px; background:#023b45; color:white; font-size:0.6rem; font-weight:700; padding:3px 12px; border-radius:20px; text-transform:uppercase;">Popular</div>
                    <div style="font-size:2.8rem; color:#023b45; margin-bottom:12px;">📞</div>
                    <h3 style="color:#023b45; font-weight:800; font-size:1.4rem; margin-bottom:4px;">PVA Instagram Accounts</h3>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem; margin-bottom:12px;">Phone Verified Accounts with maximum security</p>
                    <ul style="list-style:none; padding:0; margin:0 0 16px 0;">
                        <li style="padding:4px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#023b45;"></i> Phone verified</li>
                        <li style="padding:4px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#023b45;"></i> High trust score</li>
                        <li style="padding:4px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#023b45;"></i> Recovery access</li>
                    </ul>
                </div>
            </div>
            <!-- Type 3: Aged Instagram -->
            <div class="col-md-6 col-lg-4" data-aos="flip-up" data-aos-delay="200">
                <div class="gmail-type-card" style="background:white; border-radius:24px; padding:2rem 1.5rem; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.4s; height:100%; border:1px solid rgba(2,59,69,0.04);">
                    <div style="font-size:2.8rem; color:#023b45; margin-bottom:12px;">📜</div>
                    <h3 style="color:#023b45; font-weight:800; font-size:1.4rem; margin-bottom:4px;">Aged Instagram Accounts</h3>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem; margin-bottom:12px;">2+ year old accounts with established history</p>
                    <ul style="list-style:none; padding:0; margin:0 0 16px 0;">
                        <li style="padding:4px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#023b45;"></i> 2+ years old</li>
                        <li style="padding:4px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#023b45;"></i> High reputation</li>
                        <li style="padding:4px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#023b45;"></i> Activity history</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
   PRODUCT SHOWCASE SECTION
   ========================================================= -->

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        .cards-premium-container { max-width: 1400px; margin: 0 auto; }
        .section-head { text-align: center; margin-bottom: 3.5rem; }
        .section-badge { background: rgba(2,59,69,0.15); backdrop-filter: blur(4px); display: inline-block; padding: 0.4rem 1.2rem; border-radius: 60px; font-size: 0.75rem; font-weight: 700; color: #023b45; letter-spacing: 0.5px; margin-bottom: 1rem; border: 0.5px solid rgba(2,59,69,0.2); }
        .section-badge i { margin-right: 6px; }
        .section-title-head { font-size: clamp(2.2rem,4.5vw,3.2rem); font-weight: 800; background: linear-gradient(125deg, #023b45, #1a6b7a, #023b45); -webkit-background-clip: text; background-clip: text; color: transparent; letter-spacing: -0.02em; font-family: "Playfair Display", serif; }
        .section-sub-head { color: #023b45; font-size: 1.05rem; max-width: 550px; margin: 0.5rem auto 0; font-weight: 500; opacity: 0.85; }
        .attract-card { background: #ffffff; backdrop-filter: blur(2px); border-radius: 2rem; transition: all 0.35s cubic-bezier(0.2,0.9,0.4,1.1); height: 100%; display: flex; flex-direction: column; box-shadow: 0 15px 40px rgba(0,0,0,0.25); position: relative; overflow: hidden; border: 1px solid rgba(2,59,69,0.06); }
        .card-top-image { width: 100%; height: 180px; overflow: hidden; background: linear-gradient(135deg, #023b45, #1a6b7a); border-top-left-radius: 2rem; border-top-right-radius: 2rem; position: relative; }
        .card-top-image img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; display: block; }
        .attract-card:hover .card-top-image img { transform: scale(1.06); }
        .card-content { padding: 1.8rem 1.5rem; flex: 1; display: flex; flex-direction: column; }
        .attract-card::after { content: ""; position: absolute; inset: 0; border-radius: 2rem; padding: 2px; background: linear-gradient(125deg, #023b45, #1a6b7a, #e9cba7, #023b45); background-size: 200% 200%; -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0); mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0); -webkit-mask-composite: xor; mask-composite: exclude; opacity: 0; transition: opacity 0.4s; pointer-events: none; }
        .attract-card:hover::after { opacity: 1; animation: borderGlowMove 2.5s ease infinite; }
        @keyframes borderGlowMove { 0% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } 100% { background-position: 0% 50%; } }
        .attract-card:hover { transform: translateY(-12px); box-shadow: 0 28px 40px -16px rgba(0,0,0,0.3); background: #ffffff; }
        .badge-extra { position: absolute; top: 1.2rem; left: 1.2rem; background: linear-gradient(105deg, #023b45, #1f6e7a); color: white; font-size: 0.65rem; font-weight: 800; padding: 0.3rem 1rem; border-radius: 60px; box-shadow: 0 6px 12px rgba(0,0,0,0.15); z-index: 5; letter-spacing: 0.3px; text-transform: uppercase; }
        .badge-hot { background: linear-gradient(105deg, #c0392b, #e74c3c); color: white; }
        .badge-prem { background: linear-gradient(105deg, #8B7355, #B7A08B); color: #023b45; }
        .badge-best { background: linear-gradient(105deg, #f39c12, #f1c40f); color: #023b45; }
        .badge-new { background: linear-gradient(105deg, #27ae60, #2ecc71); color: white; }
        .card-title { font-size: 1.6rem; font-weight: 800; letter-spacing: -0.02em; margin-bottom: 0.2rem; color: #023b45 !important; font-family: "Playfair Display", serif; }
        .short-desc { font-size: 0.85rem; color: #023b45 !important; margin-bottom: 0.8rem; font-weight: 500; opacity: 0.8; }
        .product-rating { display: flex; align-items: center; flex-wrap: wrap; gap: 0.65rem; margin: 0.25rem 0 0.75rem; }
        .star-rating { display: inline-flex; align-items: center; gap: 0.15rem; }
        .star-rating i { font-size: 1.1rem; cursor: pointer; transition: all 0.15s; color: #d4c4b0; }
        .star-rating i.hover-star { transform: scale(1.15); filter: brightness(1.2); }
        .star-rating i.active-star { color: #f5b042; text-shadow: 0 0 3px rgba(245,176,66,0.5); }
        .rating-count { font-size: 0.8rem; font-weight: 600; color: #023b45; background: rgba(2,59,69,0.08); padding: 0.25rem 0.7rem; border-radius: 40px; cursor: pointer; }
        .rating-count:hover { background: rgba(2,59,69,0.18); transform: translateY(-1px); }
        .price-modern { display: flex; align-items: baseline; flex-wrap: wrap; gap: 0.5rem; margin: 0.5rem 0 0.2rem; }
        .current-price { font-size: 2.2rem; font-weight: 800; color: #023b45 !important; }
        .price-unit { font-size: 0.9rem; font-weight: 600; vertical-align: super; }
        .old-price { font-size: 1rem; color: #023b45; opacity: 0.5; text-decoration: line-through; font-weight: 500; }
        .discount-badge { background: rgba(231,76,60,0.15); color: #c0392b; font-size: 0.7rem; font-weight: 700; padding: 0.15rem 0.6rem; border-radius: 40px; margin-left: 0.3rem; }
        .qty-badge { background: rgba(2,59,69,0.08); padding: 0.3rem 1rem; border-radius: 60px; font-size: 0.7rem; font-weight: 700; color: #023b45; display: inline-flex; align-items: center; gap: 5px; margin-left: auto; }
        .stock-info { font-size: 0.7rem; font-weight: 600; color: #023b45; opacity: 0.7; margin-top: 0.2rem; }
        .stock-info .in-stock { color: #27ae60; }
        .stock-info .out-stock { color: #e74c3c; }
        .features-mega { display: grid; grid-template-columns: repeat(2,1fr); gap: 0.4rem 0.8rem; background: rgba(2,59,69,0.04); padding: 0.8rem; border-radius: 1.2rem; margin: 0.8rem 0 1.2rem; }
        .feat { font-size: 0.7rem; font-weight: 600; display: flex; align-items: center; gap: 6px; color: #023b45 !important; }
        .feat i { color: #1f6e7a; font-size: 0.65rem; }
        .btn-group-premium { display: flex; gap: 0.8rem; margin-top: auto; }
        .btn-gradient-cart { background: linear-gradient(95deg, #023b45, #1f6e7a); border: none; color: white !important; font-weight: 700; padding: 0.75rem 1rem; border-radius: 60px; font-size: 0.85rem; transition: all 0.25s; flex: 1; display: inline-flex; align-items: center; justify-content: center; gap: 8px; position: relative; overflow: hidden; }
        .btn-gradient-cart:hover { background: linear-gradient(95deg, #1f6e7a, #023b45); transform: scale(0.98); box-shadow: 0 10px 20px -6px rgba(2,59,69,0.5); }
        .btn-gradient-cart.loading { pointer-events: none; opacity: 0.7; }
        .btn-gradient-cart.loading .cart-text { display: none; }
        .btn-gradient-cart.loading .spinner { display: inline-block; }
        .btn-gradient-cart.success { background: linear-gradient(95deg, #27ae60, #2ecc71); }
        .btn-gradient-cart .spinner { display: none; width: 18px; height: 18px; border: 2px solid rgba(255,255,255,0.3); border-top: 2px solid #fff; border-radius: 50%; animation: spin 0.8s linear infinite; }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
        .btn-outline-details { background: transparent; border: 1.5px solid rgba(2,59,69,0.3); color: #023b45 !important; font-weight: 700; padding: 0.75rem 1rem; border-radius: 60px; flex: 1; transition: all 0.2s; display: inline-flex; align-items: center; justify-content: center; gap: 8px; }
        .btn-outline-details:hover { border-color: #023b45; background: rgba(2,59,69,0.06); transform: translateY(-2px); }
        .ripple { position: absolute; border-radius: 50%; background: rgba(255,255,255,0.4); transform: scale(0); animation: rippleAnim 0.5s linear; pointer-events: none; }
        @keyframes rippleAnim { to { transform: scale(6); opacity: 0; } }
        .review-modal .modal-content { background: #fef8f0; border-radius: 2rem; border: 1px solid #B7A08B; }
        .rating-distribution { background: rgba(2,59,69,0.05); border-radius: 1.5rem; padding: 1.2rem; }
        .distro-bar { display: flex; align-items: center; gap: 0.6rem; margin-bottom: 0.6rem; }
        .distro-label { width: 45px; font-size: 0.85rem; font-weight: 700; color: #023b45; }
        .bar-bg { flex: 1; height: 8px; background: rgba(2,59,69,0.1); border-radius: 20px; overflow: hidden; }
        .bar-fill { width: 0%; height: 100%; background: #f5b042; border-radius: 20px; transition: width 0.6s cubic-bezier(0.2,0.9,0.4,1.1); }
        .distro-percent { width: 45px; font-size: 0.75rem; font-weight: 600; color: #023b45; }
        .review-card-item { background: white; border-radius: 1.25rem; padding: 1rem; margin-bottom: 0.8rem; transition: all 0.2s; border: 1px solid rgba(183,160,139,0.2); }
        .review-card-item:hover { transform: translateX(4px); background: #ffffffd9; }
        .avatar-initial { width: 40px; height: 40px; border-radius: 50%; background: #023b45; color: white; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1rem; flex-shrink: 0; }
        .detail-modal .modal-content { background: #fef8f0; border-radius: 2rem; border: 1px solid #B7A08B; }
        .detail-image-wrap { background: linear-gradient(135deg, #023b45, #1a6b7a); border-radius: 1.5rem; overflow: hidden; height: 250px; }
        .detail-image-wrap img { width: 100%; height: 100%; object-fit: cover; }
        .detail-feature-item { display: flex; align-items: center; gap: 10px; padding: 0.4rem 0; color: #023b45; font-size: 0.9rem; }
        .detail-feature-item i { color: #1f6e7a; width: 20px; }
        .toast-notification { position: fixed; bottom: 30px; right: 30px; background: #023b45; backdrop-filter: blur(12px); color: white; padding: 14px 24px; border-radius: 60px; font-weight: 600; font-size: 0.9rem; z-index: 9999; box-shadow: 0 10px 25px rgba(0,0,0,0.2); animation: slideInRight 0.4s ease; border: 1px solid rgba(183,160,139,0.3); display: flex; align-items: center; gap: 10px; min-width: 200px; }
        .toast-notification.success { border-left: 4px solid #2ecc71; }
        .toast-notification.error { border-left: 4px solid #e74c3c; }
        @keyframes slideInRight { from { transform: translateX(100px); opacity: 0; } to { transform: translateX(0); opacity: 1; } }
        @media (max-width: 768px) { .card-title { font-size: 1.4rem; } .current-price { font-size: 1.8rem; } .star-rating i { font-size: 1rem; } .features-mega { grid-template-columns: 1fr 1fr; gap: 0.3rem 0.6rem; padding: 0.6rem; } .feat { font-size: 0.65rem; } .card-top-image { height: 140px; } .attract-card { border-radius: 1.5rem; } .card-top-image { border-top-left-radius: 1.5rem; border-top-right-radius: 1.5rem; } .attract-card::after { border-radius: 1.5rem; } .qty-badge { font-size: 0.65rem; padding: 0.2rem 0.7rem; } .badge-extra { font-size: 0.55rem; padding: 0.2rem 0.7rem; top: 0.8rem; left: 0.8rem; } }
        @media (max-width: 576px) { .btn-group-premium { flex-direction: column; gap: 0.6rem; } .btn-gradient-cart, .btn-outline-details { width: 100%; } .card-title { font-size: 1.2rem; } .current-price { font-size: 1.5rem; } .card-content { padding: 1.2rem 1rem; } .card-top-image { height: 120px; } .price-modern { flex-direction: column; align-items: flex-start; gap: 0.3rem; } .qty-badge { margin-left: 0; } .features-mega { grid-template-columns: 1fr 1fr; gap: 0.2rem 0.4rem; padding: 0.5rem; } .feat { font-size: 0.6rem; } .section-title-head { font-size: 1.8rem; } .detail-image-wrap { height: 180px; } }
        @media (min-width: 1400px) { .cards-premium-container { max-width: 1500px; } }
        @media (max-width: 768px) { .gmail-hero-master-nexus > div[style*="position:absolute"] { display: none !important; } }
        @media (max-width: 576px) { .gmail-hero-subtitle { max-width: 100% !important; } }
        @media (max-width: 576px) { .card-top-image { height: 110px !important; } .attract-card { margin-bottom: 0 !important; } .card-content { padding: 0.8rem !important; } .card-title { font-size: 1.1rem !important; } .current-price { font-size: 1.3rem !important; } .old-price { font-size: 0.85rem !important; } .qty-badge { font-size: 0.6rem !important; padding: 0.15rem 0.5rem !important; } .features-mega { padding: 0.4rem !important; gap: 0.15rem 0.3rem !important; } .feat { font-size: 0.55rem !important; gap: 3px !important; } .btn-gradient-cart, .btn-outline-details { font-size: 0.72rem !important; padding: 0.5rem 0.6rem !important; } }
        @media (max-width: 576px) { .detail-image-wrap { height: 140px !important; } .detail-modal .modal-body { padding: 12px !important; } .detail-modal .modal-footer { padding: 12px !important; } .modal-dialog { margin: 8px !important; } #detailProductPrice { font-size: 1.5rem !important; } .detail-feature-item { font-size: 0.8rem !important; } }
        [data-aos] { pointer-events: none; }
        [data-aos].aos-animate { pointer-events: auto; }
    </style>
</head>
<body>

    <!-- =========================================
    PREMIUM PRODUCT CARDS SECTION
    ========================================= -->
    <div class="cards-premium-container" id="gmailProducts">
        <div class="section-head" data-aos="fade-up">
            <div class="section-badge"><i class="fas fa-crown"></i> Elite Marketplace</div>
            <h2 class="section-title-head"><em>Premium Social Accounts</em></h2>
            <p class="section-sub-head"><em>Fresh, verified &amp; instantly delivered — trusted by 15k+ creators worldwide</em></p>
        </div>

        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4" id="productsGrid" data-aos="fade-up">

            <div class="col" data-product-id="instagram">
                <div class="attract-card">
                    <div class="badge-extra badge-best"><i class="fas fa-star"></i> Fresh</div>
                    <div class="card-top-image">
                        <img src="../Image/instagram.jpg" alt="Instagram Accounts">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title"><em>Fresh Instagram Accounts</em></h3>
                        <p class="short-desc"><em>Brand new Instagram accounts, ready for immediate use</em></p>
                        <h5><em>Fresh account</em></h5>
                        <div class="product-rating">
                            <div class="star-rating" data-product="instagram"></div>
                            <span class="rating-count" data-product="instagram">(95 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="current-price"><span class="price-unit">$</span>9</span>
                            <span class="old-price">$17</span>
                            <span class="discount-badge">-22%</span>
                            <span class="qty-badge"><i class="fas fa-database"></i> 50 Accounts</span>
                        </div>
                        <div class="stock-info"><i class="fas fa-check-circle in-stock"></i> In Stock — <strong>280</strong> available</div>
                        <div class="features-mega">
                            <div class="feat"><i class="fas fa-check-circle"></i> Fresh Accounts</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Instant Delivery</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Full Access</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Secure Login</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> High Quality</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> 24H Replacement</div>
                        </div>
                        <div class="btn-group-premium">
                            <button class="btn-outline-details detailBtn" data-name="Fresh Instagram Accounts"><i class="fas fa-eye"></i> Details</button>
                            <button class="btn-gradient-cart addCartBtn" data-name="Fresh Instagram Accounts"><i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col" data-product-id="instagram">
                <div class="attract-card">
                    <div class="badge-extra badge-hot"><i class="fas fa-fire"></i> PVA</div>
                    <div class="card-top-image">
                        <img src="../Image/instagram.jpg" alt="PVA Instagram Accounts">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title"><em>PVA Instagram Accounts</em></h3>
                        <p class="short-desc"><em>Phone verified Instagram accounts with high trust score</em></p>
                        <h5><em>1-3 months Old </em></h5>
                        <div class="product-rating">
                            <div class="star-rating" data-product="instagram"></div>
                            <span class="rating-count" data-product="instagram">(142 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="current-price"><span class="price-unit">$</span>36</span>
                            <span class="old-price">$50</span>
                            <span class="discount-badge">-19%</span>
                            <span class="qty-badge"><i class="fas fa-database"></i> 100 Accounts</span>
                        </div>
                        <div class="stock-info"><i class="fas fa-check-circle in-stock"></i> In Stock — <strong>220</strong> available</div>
                        <div class="features-mega">
                            <div class="feat"><i class="fas fa-check-circle"></i> Phone Verified</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> High Trust Score</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Recovery Access</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Secure Login</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Premium Quality</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Fast Delivery</div>
                        </div>
                        <div class="btn-group-premium">
                            <button class="btn-outline-details detailBtn" data-name="PVA Instagram Accounts"><i class="fas fa-eye"></i> Details</button>
                            <button class="btn-gradient-cart addCartBtn" data-name="PVA Instagram Accounts"><i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col" data-product-id="instagram">
                <div class="attract-card">
                    <div class="badge-extra badge-prem"><i class="fas fa-crown"></i> Aged</div>
                    <div class="card-top-image">
                        <img src="../Image/instagram.jpg" alt="Aged Instagram Accounts">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title"><em>Aged Instagram Accounts</em></h3>
                        <p class="short-desc"><em> Instagram profiles with established history</em></p>
                        <h5><em>Fresh Account</em></h5>
                        <div class="product-rating">
                            <div class="star-rating" data-product="instagram"></div>
                            <span class="rating-count" data-product="instagram">(118 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="current-price"><span class="price-unit">$</span>18</span>
                            <span class="old-price">$30</span>
                            <span class="discount-badge">-13%</span>
                            <span class="qty-badge"><i class="fas fa-database"></i> 100 Accounts</span>
                        </div>
                        <div class="stock-info"><i class="fas fa-check-circle in-stock"></i> In Stock — <strong>155</strong> available</div>
                        <div class="features-mega">
                            <div class="feat"><i class="fas fa-check-circle"></i> Aged 6+ Months</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Activity History</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> High Reputation</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Full Access</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Bulk Available</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> 24H Replacement</div>
                        </div>
                        <div class="btn-group-premium">
                            <button class="btn-outline-details detailBtn" data-name="Aged Instagram Accounts"><i class="fas fa-eye"></i> Details</button>
                            <button class="btn-gradient-cart addCartBtn" data-name="Aged Instagram Accounts"><i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col" data-product-id="instagram">
                <div class="attract-card">
                    <div class="badge-extra badge-prem"><i class="fas fa-briefcase"></i> Business</div>
                    <div class="card-top-image">
                        <img src="../Image/instagram.jpg" alt="Business Instagram Accounts">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title"><em>Business Instagram Accounts</em></h3>
                        <p class="short-desc"><em>Premium business-ready Instagram profiles for marketing</em></p>
                        <h5><em>Fresh Account</em></h5>
                        <div class="product-rating">
                            <div class="star-rating" data-product="instagram"></div>
                            <span class="rating-count" data-product="instagram">(168 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="current-price"><span class="price-unit">$</span>90</span>
                            <span class="old-price">$135</span>
                            <span class="discount-badge">-36%</span>
                            <span class="qty-badge"><i class="fas fa-database"></i> 500 Accounts</span>
                        </div>
                        <div class="stock-info"><i class="fas fa-check-circle in-stock"></i> In Stock — <strong>200</strong> available</div>
                        <div class="features-mega">
                            <div class="feat"><i class="fas fa-check-circle"></i> Business Ready</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Manager Role</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Ad Account Ready</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Page Included</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Email Access</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> 24/7 Support</div>
                        </div>
                        <div class="btn-group-premium">
                            <button class="btn-outline-details detailBtn" data-name="Business Instagram Accounts"><i class="fas fa-eye"></i> Details</button>
                            <button class="btn-gradient-cart addCartBtn" data-name="Business Instagram Accounts"><i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- =========================================
    REVIEW MODAL
    ========================================= -->
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
                    <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal" style="border-color:#B7A08B; color:#023b45;">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- =========================================
    DETAILS MODAL
    ========================================= -->
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
                                <img id="detailProductImage" src="../Image/instagram.jpg" alt="Product Detail">
                            </div>
                            <div class="mt-3 d-flex gap-3 flex-wrap">
                                <span class="badge" style="background:#023b45; color:white; padding:0.4rem 1rem;"><i class="fas fa-star me-1"></i> <span id="detailRating">4.5</span> ★</span>
                                <span class="badge" style="background:#B7A08B; color:#023b45; padding:0.4rem 1rem;"><i class="fas fa-comment me-1"></i> <span id="detailReviews">128</span> reviews</span>
                                <span class="badge" style="background:#27ae60; color:white; padding:0.4rem 1rem;"><i class="fas fa-check-circle me-1"></i> In Stock</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 id="detailProductName" style="color:#023b45; font-family:"Playfair Display",serif; font-weight:700;">Product Name</h4>
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
                    <div class="alert mt-3 rounded-4" style="background:#B7A08B25; border:none; color:#023b45;">
                        <i class="fas fa-shield-alt me-2"></i> 100% secure checkout &amp; instant details delivery
                    </div>
                </div>
                <div class="modal-footer border-0 pb-4 px-4">
                    <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal" style="border-color:#B7A08B; color:#023b45;">Close</button>
                    <button type="button" class="btn rounded-pill px-4" id="modalAddToCartBtn" style="background: linear-gradient(95deg,#023b45,#1f6e7a); border:none; color:white;"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <!-- =========================================================
    SCRIPTS
    ========================================================= -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        (function() {
            "use strict";

            AOS.init({ duration: 700, once: true, offset: 20, easing: "ease-out-cubic", mirror: false });

            const productData = {
                instagram: {
                    name: "Instagram Accounts",
                    desc: "Premium Instagram profiles with full access, email recovery, and instant delivery.",
                    price: 50,
                    oldPrice: 65,
                    discount: "-23%",
                    stock: 156,
                    avg: 4.3,
                    total: 189,
                    distribution: {5:55,4:22,3:12,2:6,1:5},
                    reviews: [
                        {name:"Chris P.",country:"UK",text:"Instagram profiles look authentic.",rating:4,date:"2024-12-12"},
                        {name:"Anna R.",country:"USA",text:"Fast delivery and good support.",rating:5,date:"2024-12-06"},
                        {name:"David K.",country:"Canada",text:"Good quality but a bit pricy.",rating:3,date:"2024-11-30"},
                        {name:"Lisa M.",country:"Australia",text:"Great for marketing campaigns.",rating:5,date:"2024-11-22"},
                        {name:"Jake P.",country:"USA",text:"Best Instagram accounts I\'ve purchased!",rating:5,date:"2024-11-15"}
                    ]
                }
            };

            // Stars
            document.querySelectorAll(".star-rating").forEach(c => {
                const p = c.dataset.product, d = productData[p];
                if (!d) return;
                const a = d.avg, f = Math.floor(a), h = a % 1 >= 0.5 ? 1 : 0, e = 5 - f - h;
                let htm = "";
                for (let i = 0; i < f; i++) htm += `<i class="fas fa-star active-star" data-star="${i+1}"></i>`;
                if (h) htm += `<i class="fas fa-star-half-alt active-star" data-star="${f+1}"></i>`;
                for (let i = 0; i < e; i++) htm += `<i class="fas fa-star" data-star="${f+h+i+1}"></i>`;
                c.innerHTML = htm;
                const ss = c.querySelectorAll("i");
                ss.forEach((s, idx) => {
                    s.style.cursor = "pointer";
                    s.addEventListener("mouseenter", function() { const ix = parseInt(this.dataset.star) || (idx + 1); ss.forEach((x, i2) => { const si = parseInt(x.dataset.star) || (i2 + 1); si <= ix ? x.classList.add("hover-star") : x.classList.remove("hover-star"); }); });
                    s.addEventListener("mouseleave", () => ss.forEach(x => x.classList.remove("hover-star")));
                    s.addEventListener("click", function(e) { e.stopPropagation(); const ix = parseInt(this.dataset.star) || (idx + 1); ss.forEach((x, i2) => { const si = parseInt(x.dataset.star) || (i2 + 1); x.className = si <= ix ? "fas fa-star active-star" : "fas fa-star"; }); showToast("⭐ You rated this product " + ix + " stars! Thank you."); });
                });
            });

            function showToast(m, t) { if (!t) t = "success"; const o = document.querySelector(".toast-notification"); if (o) o.remove(); const d = document.createElement("div"); d.className = "toast-notification " + t; d.innerHTML = `<i class="fas ${t==="success"?"fa-check-circle":"fa-exclamation-circle"}"></i><span>${m}</span>`; document.body.appendChild(d); setTimeout(() => { d.style.opacity = "0"; d.style.transform = "translateX(50px)"; d.style.transition = "all 0.3s ease"; setTimeout(() => d.remove(), 300); }, 3000); }

            // Add to cart
            document.querySelectorAll(".addCartBtn").forEach(function(b) { b.addEventListener("click", function(e) { const n = this.dataset.name; if (!n) return; createRipple(e, this); requestAnimationFrame(function() { b.classList.add("success"); b.innerHTML = '<i class="fas fa-check"></i> <span class="cart-text">Added!</span>'; showToast("🛒 " + n + " added to cart!"); }); setTimeout(() => { this.classList.remove("success"); this.innerHTML = '<i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span>'; }, 1500); }); });

            // Details modal
            const dm = new bootstrap.Modal(document.getElementById("productDetailModal"));
            const mN = document.getElementById("detailProductName"), mD = document.getElementById("detailProductDesc"), mP = document.getElementById("detailProductPrice"), mO = document.getElementById("detailOldPrice"), mC = document.getElementById("detailDiscount"), mS = document.getElementById("detailStock"), mR = document.getElementById("detailRating"), mV = document.getElementById("detailReviews"), mT = document.getElementById("modalProductTitle");

            document.querySelectorAll(".detailBtn").forEach(b => { b.addEventListener("click", function() {
                const card = this.closest(".attract-card") || this.closest(".col"); if (!card) { dm.show(); return; }
                const t = card.querySelector(".card-title"), ds = card.querySelector(".short-desc"), p = card.querySelector(".current-price"), o = card.querySelector(".old-price"), d = card.querySelector(".discount-badge"), q = card.querySelector(".qty-badge"), s = card.querySelector(".stock-info"), f = card.querySelector(".features-mega");
                if (t) mN.textContent = t.textContent.trim(); if (ds) mD.textContent = ds.textContent.trim(); if (p) mP.textContent = p.textContent.trim(); if (o) mO.textContent = o.textContent.trim(); if (d) mC.textContent = d.textContent.trim(); if (q) mT.textContent = (t ? t.textContent.trim() : "Package") + " — " + q.textContent.trim(); if (s) mS.textContent = s.textContent.trim();
                const fl = document.getElementById("detailFeaturesList"); if (fl && f) { let h = ""; f.querySelectorAll(".feat").forEach(fi => { h += '<div class="detail-feature-item"><i class="fas fa-check-circle"></i> ' + fi.textContent.trim() + "</div>"; }); if (h) fl.innerHTML = h; }
                const gd = productData["instagram"]; if (gd) { mR.textContent = gd.avg.toFixed(1); mV.textContent = gd.total; }
                const di = document.getElementById("detailProductImage"); if (di) di.src = "../Image/instagram.jpg";
                dm.show();
            }); });

            // Modal add to cart
            document.getElementById("modalAddToCartBtn").addEventListener("click", function() {
                const n = mN?.textContent || "", pt = mP?.textContent || "0", pp = parseFloat(pt.replace(/[^0-9.]/g, ""));
                if (!n || !pp || pp <= 0) { showToast("Invalid product data.", "error"); return; }
                fetch("/Gmail Website/ajax/add_to_cart.php", { method: "POST", headers: { "Content-Type": "application/x-www-form-urlencoded" }, body: "id=modal_" + encodeURIComponent(n.toLowerCase().replace(/\s+/g, "_")) + "&name=" + encodeURIComponent(n) + "&price=" + encodeURIComponent(pp) })
                .then(r => r.json()).then(d => { if (d.success) { showToast(d.message); if (d.cart_count !== undefined) { document.querySelectorAll(".cart-counter").forEach(c => { c.textContent = d.cart_count; c.classList.toggle("visible", d.cart_count > 0); }); } const m = bootstrap.Modal.getInstance(document.getElementById("productDetailModal")); if (m) m.hide(); } else { showToast(d.message || "Error adding product.", "error"); } })
                .catch(() => showToast("Network error. Please try again.", "error"));
            });

            // Review modal
            const rv = new bootstrap.Modal(document.getElementById("reviewModal"));
            const dB = document.getElementById("distributionBars"), rC = document.getElementById("reviewsListContainer"), mA = document.getElementById("modalAvgRating"), mTl = document.getElementById("modalTotalReviews"), mTr = document.getElementById("reviewModalTitle");
            document.querySelectorAll(".rating-count").forEach(c => { c.addEventListener("click", function() {
                const d = productData[this.dataset.product]; if (!d) return;
                mTr.textContent = d.name + " Reviews"; mA.textContent = d.avg.toFixed(1); mTl.textContent = d.total;
                const di = d.distribution, mx = Math.max(...Object.values(di)); let b = "";
                for (let i = 5; i >= 1; i--) { const cv = di[i] || 0, pct = mx > 0 ? (cv / mx * 100) : 0; b += `<div class="distro-bar"><span class="distro-label">${i} ★</span><div class="bar-bg"><div class="bar-fill" style="width:${pct}%;"></div></div><span class="distro-percent">${cv}</span></div>`; }
                dB.innerHTML = b; let rh = ""; (d.reviews || []).forEach(r => { const init = r.name.split(" ").map(n => n[0]).join(""), dt = new Date(r.date).toLocaleDateString("en-US", { month: "short", day: "numeric", year: "numeric" }); rh += `<div class="review-card-item d-flex align-items-start gap-3"><div class="avatar-initial">${init}</div><div style="flex:1;"><div class="d-flex flex-wrap align-items-center gap-2"><span class="fw-bold" style="color:#023b45;">${r.name}</span><span style="color:#023b45;opacity:0.5;font-size:0.7rem;">${r.country}</span><span style="color:#023b45;opacity:0.4;font-size:0.7rem;margin-left:auto;">${dt}</span></div><div class="text-warning mb-1">${"★".repeat(r.rating)}${"☆".repeat(5 - r.rating)}</div><div style="color:#023b45;opacity:0.8;font-size:0.9rem;">${r.text}</div></div></div>`; });
                rC.innerHTML = rh || '<p class="text-muted">No reviews yet.</p>'; rv.show();
            }); });

            function createRipple(e, el) { const r = document.createElement("span"); r.className = "ripple"; const rect = el.getBoundingClientRect(), s = Math.max(rect.width, rect.height); r.style.width = r.style.height = s + "px"; r.style.left = (e.clientX - rect.left - s / 2) + "px"; r.style.top = (e.clientY - rect.top - s / 2) + "px"; el.appendChild(r); setTimeout(() => r.remove(), 500); }

            document.querySelectorAll('a[href^="#"]').forEach(a => { a.addEventListener("click", function(e) { const id = this.getAttribute("href"); if (id === "#") return; const t = document.querySelector(id); if (t) { e.preventDefault(); window.scrollTo({ top: t.getBoundingClientRect().top + window.pageYOffset - 80, behavior: "smooth" }); } }); });

            console.log("✅ Premium Instagram Accounts Page loaded successfully.");
        })();
    </script>

<!-- =========================================================
   WHY CHOOSE INSTAGRAM ACCOUNTS
   ========================================================= -->
<section class="gmail-why-master-nexus section-padding" id="gmailWhyChoose" style="background: rgba(255,255,255,0.12);">
    <div class="container">
        <div class="gmail-why-header text-center mb-5" data-aos="fade-up">
            <span class="gmail-why-badge" style="display:inline-flex; align-items:center; gap:8px; background:rgba(2,59,69,0.12); color:#023b45; font-weight:700; font-size:0.75rem; letter-spacing:1.5px; text-transform:uppercase; padding:6px 16px; border-radius:60px; margin-bottom:16px; border:0.5px solid rgba(2,59,69,0.15);">
                <i class="fas fa-heart me-2"></i> Why Choose Us
            </span>
            <h2 class="gmail-why-title" style="font-size:clamp(2rem,4vw,2.8rem); font-weight:800; line-height:1.15; color:#023b45; font-family:'Playfair Display',serif;">
                Why Our <span style="position:relative; display:inline-block; color:#023b45;">Instagram<span style="position:absolute; bottom:2px; left:0; width:100%; height:4px; background:rgba(2,59,69,0.2); border-radius:4px;"></span></span> Accounts?
            </h2>
            <p style="color:rgba(2,59,69,0.7); max-width:550px; margin:0 auto;">The advantages of choosing our premium Instagram services</p>
        </div>
        <div class="gmail-why-grid row g-4" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="gmail-why-card" style="background:white; border-radius:20px; padding:1.8rem 1.2rem; text-align:center; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04); box-shadow:0 4px 15px rgba(0,0,0,0.04); height:100%;">
                    <div style="font-size:2.5rem; color:#023b45; margin-bottom:10px;">⭐</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.05rem;">High Quality Accounts</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">All accounts manually tested and verified</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="150">
                <div class="gmail-why-card" style="background:white; border-radius:20px; padding:1.8rem 1.2rem; text-align:center; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04); box-shadow:0 4px 15px rgba(0,0,0,0.04); height:100%;">
                    <div style="font-size:2.5rem; color:#023b45; margin-bottom:10px;">⚡</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.05rem;">Instant Delivery</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">Receive accounts within minutes of ordering</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                <div class="gmail-why-card" style="background:white; border-radius:20px; padding:1.8rem 1.2rem; text-align:center; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04); box-shadow:0 4px 15px rgba(0,0,0,0.04); height:100%;">
                    <div style="font-size:2.5rem; color:#023b45; margin-bottom:10px;">📦</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.05rem;">Bulk Orders</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">Volume discounts for large orders</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="250">
                <div class="gmail-why-card" style="background:white; border-radius:20px; padding:1.8rem 1.2rem; text-align:center; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04); box-shadow:0 4px 15px rgba(0,0,0,0.04); height:100%;">
                    <div style="font-size:2.5rem; color:#023b45; margin-bottom:10px;">🔒</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.05rem;">Secure Accounts</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">Bank-level security for all accounts</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                <div class="gmail-why-card" style="background:white; border-radius:20px; padding:1.8rem 1.2rem; text-align:center; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04); box-shadow:0 4px 15px rgba(0,0,0,0.04); height:100%;">
                    <div style="font-size:2.5rem; color:#023b45; margin-bottom:10px;">💬</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.05rem;">Fast Support</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">24/7 expert customer service</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="350">
                <div class="gmail-why-card" style="background:white; border-radius:20px; padding:1.8rem 1.2rem; text-align:center; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04); box-shadow:0 4px 15px rgba(0,0,0,0.04); height:100%;">
                    <div style="font-size:2.5rem; color:#023b45; margin-bottom:10px;">🔄</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.05rem;">Fast Replacement</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">24-hour replacement guarantee</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
   ACCOUNT FEATURES SECTION
   ========================================================= -->
<section class="gmail-features-master-nexus section-padding" id="gmailFeatures" style="background: #B7A08B;">
    <div class="container">
        <div class="gmail-features-header text-center mb-5" data-aos="fade-up">
            <span class="gmail-features-badge" style="display:inline-flex; align-items:center; gap:8px; background:rgba(2,59,69,0.12); color:#023b45; font-weight:700; font-size:0.75rem; letter-spacing:1.5px; text-transform:uppercase; padding:6px 16px; border-radius:60px; margin-bottom:16px; border:0.5px solid rgba(2,59,69,0.15);">
                <i class="fas fa-list-check me-2"></i> Account Features
            </span>
            <h2 class="gmail-features-title" style="font-size:clamp(2rem,4vw,2.8rem); font-weight:800; line-height:1.15; color:#023b45; font-family:'Playfair Display',serif;">
                Premium <span style="position:relative; display:inline-block; color:#023b45;">Instagram<span style="position:absolute; bottom:2px; left:0; width:100%; height:4px; background:rgba(2,59,69,0.2); border-radius:4px;"></span></span> Features
            </h2>
            <p style="color:rgba(2,59,69,0.7); max-width:550px; margin:0 auto;">What makes our Instagram accounts exceptional</p>
        </div>
        <div class="gmail-features-grid row g-3" data-aos="fade-up" data-aos-delay="100">
            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="100"><div class="gmail-feature-item" style="background:white; border-radius:16px; padding:1rem 1.2rem; display:flex; align-items:center; gap:12px; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04);"><i class="fas fa-user-plus" style="font-size:1.2rem; color:#023b45;"></i><span style="font-weight:600; color:#023b45; font-size:0.9rem;">Fresh Accounts</span></div></div>
            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="150"><div class="gmail-feature-item" style="background:white; border-radius:16px; padding:1rem 1.2rem; display:flex; align-items:center; gap:12px; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04);"><i class="fas fa-clock" style="font-size:1.2rem; color:#023b45;"></i><span style="font-weight:600; color:#023b45; font-size:0.9rem;">Aged Accounts</span></div></div>
            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="200"><div class="gmail-feature-item" style="background:white; border-radius:16px; padding:1rem 1.2rem; display:flex; align-items:center; gap:12px; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04);"><i class="fas fa-key" style="font-size:1.2rem; color:#023b45;"></i><span style="font-weight:600; color:#023b45; font-size:0.9rem;">Recovery Information</span></div></div>
            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="250"><div class="gmail-feature-item" style="background:white; border-radius:16px; padding:1rem 1.2rem; display:flex; align-items:center; gap:12px; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04);"><i class="fas fa-lock" style="font-size:1.2rem; color:#023b45;"></i><span style="font-weight:600; color:#023b45; font-size:0.9rem;">Secure Login</span></div></div>
            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="300"><div class="gmail-feature-item" style="background:white; border-radius:16px; padding:1rem 1.2rem; display:flex; align-items:center; gap:12px; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04);"><i class="fas fa-chart-line" style="font-size:1.2rem; color:#023b45;"></i><span style="font-weight:600; color:#023b45; font-size:0.9rem;">High Success Rate</span></div></div>
            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="350"><div class="gmail-feature-item" style="background:white; border-radius:16px; padding:1rem 1.2rem; display:flex; align-items:center; gap:12px; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04);"><i class="fas fa-globe" style="font-size:1.2rem; color:#023b45;"></i><span style="font-weight:600; color:#023b45; font-size:0.9rem;">Country Options</span></div></div>
            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="400"><div class="gmail-feature-item" style="background:white; border-radius:16px; padding:1rem 1.2rem; display:flex; align-items:center; gap:12px; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04);"><i class="fas fa-briefcase" style="font-size:1.2rem; color:#023b45;"></i><span style="font-weight:600; color:#023b45; font-size:0.9rem;">Business Ready</span></div></div>
            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="450"><div class="gmail-feature-item" style="background:white; border-radius:16px; padding:1rem 1.2rem; display:flex; align-items:center; gap:12px; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04);"><i class="fas fa-boxes" style="font-size:1.2rem; color:#023b45;"></i><span style="font-weight:600; color:#023b45; font-size:0.9rem;">Bulk Availability</span></div></div>
        </div>
    </div>
</section>

<!-- =========================================================
   ORDER PROCESS
   ========================================================= -->
<section class="gmail-order-master-nexus section-padding" id="gmailOrderProcess" style="background: rgba(255,255,255,0.12);">
    <div class="container">
        <div class="gmail-order-header text-center mb-5" data-aos="fade-up">
            <span class="gmail-order-badge" style="display:inline-flex; align-items:center; gap:8px; background:rgba(2,59,69,0.12); color:#023b45; font-weight:700; font-size:0.75rem; letter-spacing:1.5px; text-transform:uppercase; padding:6px 16px; border-radius:60px; margin-bottom:16px; border:0.5px solid rgba(2,59,69,0.15);">
                <i class="fas fa-route me-2"></i> Order Process
            </span>
            <h2 class="gmail-order-title" style="font-size:clamp(2rem,4vw,2.8rem); font-weight:800; line-height:1.15; color:#023b45; font-family:'Playfair Display',serif;">
                Simple <span style="position:relative; display:inline-block; color:#023b45;">4-Step<span style="position:absolute; bottom:2px; left:0; width:100%; height:4px; background:rgba(2,59,69,0.2); border-radius:4px;"></span></span> Process
            </h2>
            <p style="color:rgba(2,59,69,0.7); max-width:550px; margin:0 auto;">Order your Instagram accounts in minutes</p>
        </div>
        <div class="gmail-order-steps row g-4" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-6 col-lg-3" data-aos="fade-right" data-aos-delay="100"><div class="gmail-order-step" style="background:white; border-radius:20px; padding:1.8rem; text-align:center; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;"><div style="width:60px;height:60px;background:#023b45;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;font-size:1.6rem;font-weight:800;color:white;">1</div><h4 style="color:#023b45;font-weight:700;font-size:1.1rem;">Select Instagram Package</h4><p style="color:rgba(2,59,69,0.6);font-size:0.85rem;">Choose your preferred type</p></div></div>
            <div class="col-md-6 col-lg-3" data-aos="fade-right" data-aos-delay="150"><div class="gmail-order-step" style="background:white; border-radius:20px; padding:1.8rem; text-align:center; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;"><div style="width:60px;height:60px;background:#023b45;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;font-size:1.6rem;font-weight:800;color:white;">2</div><h4 style="color:#023b45;font-weight:700;font-size:1.1rem;">Choose Quantity</h4><p style="color:rgba(2,59,69,0.6);font-size:0.85rem;">Select number of accounts</p></div></div>
            <div class="col-md-6 col-lg-3" data-aos="fade-right" data-aos-delay="200"><div class="gmail-order-step" style="background:white; border-radius:20px; padding:1.8rem; text-align:center; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;"><div style="width:60px;height:60px;background:#023b45;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;font-size:1.6rem;font-weight:800;color:white;">3</div><h4 style="color:#023b45;font-weight:700;font-size:1.1rem;">Complete Order</h4><p style="color:rgba(2,59,69,0.6);font-size:0.85rem;">Secure checkout via partners</p></div></div>
            <div class="col-md-6 col-lg-3" data-aos="fade-right" data-aos-delay="250"><div class="gmail-order-step" style="background:white; border-radius:20px; padding:1.8rem; text-align:center; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;"><div style="width:60px;height:60px;background:#023b45;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;font-size:1.6rem;font-weight:800;color:white;">4</div><h4 style="color:#023b45;font-weight:700;font-size:1.1rem;">Receive Delivery</h4><p style="color:rgba(2,59,69,0.6);font-size:0.85rem;">Get your accounts instantly</p></div></div>
        </div>
    </div>
</section>

<!-- =========================================================
   ACCOUNT QUALITY DASHBOARD
   ========================================================= -->
<section class="gmail-dashboard-master-nexus section-padding" id="gmailQualityDashboard" style="background: #B7A08B;">
    <div class="container">
        <div class="gmail-dashboard-header text-center mb-5" data-aos="fade-up">
            <span class="gmail-dashboard-badge" style="display:inline-flex; align-items:center; gap:8px; background:rgba(2,59,69,0.12); color:#023b45; font-weight:700; font-size:0.75rem; letter-spacing:1.5px; text-transform:uppercase; padding:6px 16px; border-radius:60px; margin-bottom:16px; border:0.5px solid rgba(2,59,69,0.15);">
                <i class="fas fa-chart-simple me-2"></i> Quality Dashboard
            </span>
            <h2 class="gmail-dashboard-title" style="font-size:clamp(2rem,4vw,2.8rem); font-weight:800; line-height:1.15; color:#023b45; font-family:'Playfair Display',serif;">
                Account <span style="position:relative; display:inline-block; color:#023b45;">Quality<span style="position:absolute; bottom:2px; left:0; width:100%; height:4px; background:rgba(2,59,69,0.2); border-radius:4px;"></span></span> Metrics
            </h2>
            <p style="color:rgba(2,59,69,0.7); max-width:550px; margin:0 auto;">Our commitment to quality and excellence</p>
        </div>
        <div class="gmail-dashboard-grid row g-4" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100"><div class="gmail-dashboard-card" style="background:white; border-radius:20px; padding:1.8rem; box-shadow:0 8px 25px rgba(0,0,0,0.05);"><div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;"><span style="font-weight:600;color:#023b45;">Quality Score</span><span style="font-weight:800;color:#023b45;font-size:1.2rem;">98%</span></div><div style="height:8px;background:rgba(2,59,69,0.1);border-radius:10px;overflow:hidden;"><div style="height:100%;width:98%;background:linear-gradient(90deg,#2ecc71,#27ae60);border-radius:10px;"></div></div></div></div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="150"><div class="gmail-dashboard-card" style="background:white; border-radius:20px; padding:1.8rem; box-shadow:0 8px 25px rgba(0,0,0,0.05);"><div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;"><span style="font-weight:600;color:#023b45;">Verification Rate</span><span style="font-weight:800;color:#023b45;font-size:1.2rem;">95%</span></div><div style="height:8px;background:rgba(2,59,69,0.1);border-radius:10px;overflow:hidden;"><div style="height:100%;width:95%;background:linear-gradient(90deg,#3498db,#2980b9);border-radius:10px;"></div></div></div></div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200"><div class="gmail-dashboard-card" style="background:white; border-radius:20px; padding:1.8rem; box-shadow:0 8px 25px rgba(0,0,0,0.05);"><div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;"><span style="font-weight:600;color:#023b45;">Delivery Success</span><span style="font-weight:800;color:#023b45;font-size:1.2rem;">99.8%</span></div><div style="height:8px;background:rgba(2,59,69,0.1);border-radius:10px;overflow:hidden;"><div style="height:100%;width:99.8%;background:linear-gradient(90deg,#9b59b6,#8e44ad);border-radius:10px;"></div></div></div></div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="250"><div class="gmail-dashboard-card" style="background:white; border-radius:20px; padding:1.8rem; box-shadow:0 8px 25px rgba(0,0,0,0.05);"><div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;"><span style="font-weight:600;color:#023b45;">Customer Satisfaction</span><span style="font-weight:800;color:#023b45;font-size:1.2rem;">99%</span></div><div style="height:8px;background:rgba(2,59,69,0.1);border-radius:10px;overflow:hidden;"><div style="height:100%;width:99%;background:linear-gradient(90deg,#f1c40f,#f39c12);border-radius:10px;"></div></div></div></div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300"><div class="gmail-dashboard-card" style="background:white; border-radius:20px; padding:1.8rem; box-shadow:0 8px 25px rgba(0,0,0,0.05);"><div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;"><span style="font-weight:600;color:#023b45;">Support Performance</span><span style="font-weight:800;color:#023b45;font-size:1.2rem;">97%</span></div><div style="height:8px;background:rgba(2,59,69,0.1);border-radius:10px;overflow:hidden;"><div style="height:100%;width:97%;background:linear-gradient(90deg,#1abc9c,#16a085);border-radius:10px;"></div></div></div></div>
        </div>
    </div>
</section>

<!-- =========================================================
   CUSTOMER REVIEWS SECTION
   ========================================================= -->
<section class="gmail-reviews-master-nexus section-padding" id="gmailReviews" style="background: rgba(255,255,255,0.12);">
    <div class="container">
        <div class="gmail-reviews-header text-center mb-5" data-aos="fade-up">
            <span class="gmail-reviews-badge" style="display:inline-flex; align-items:center; gap:8px; background:rgba(2,59,69,0.12); color:#023b45; font-weight:700; font-size:0.75rem; letter-spacing:1.5px; text-transform:uppercase; padding:6px 16px; border-radius:60px; margin-bottom:16px; border:0.5px solid rgba(2,59,69,0.15);">
                <i class="fas fa-quote-left me-2"></i> Customer Reviews
            </span>
            <h2 class="gmail-reviews-title" style="font-size:clamp(2rem,4vw,2.8rem); font-weight:800; line-height:1.15; color:#023b45; font-family:'Playfair Display',serif;">
                What Our <span style="position:relative; display:inline-block; color:#023b45;">Customers<span style="position:absolute; bottom:2px; left:0; width:100%; height:4px; background:rgba(2,59,69,0.2); border-radius:4px;"></span></span> Say
            </h2>
            <p style="color:rgba(2,59,69,0.7); max-width:550px; margin:0 auto;">Real reviews from real customers</p>
        </div>
        <div class="gmail-reviews-grid row g-4" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100"><div class="gmail-review-card" style="background:white; border-radius:20px; padding:1.5rem; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;"><div style="display:flex;align-items:center;gap:12px;margin-bottom:10px;"><div style="width:44px;height:44px;border-radius:50%;background:#023b45;color:white;display:flex;align-items:center;justify-content:center;font-weight:700;">CP</div><div><div style="font-weight:700;color:#023b45;">Chris P.</div><div style="font-size:0.7rem;color:rgba(2,59,69,0.4);">United Kingdom</div></div></div><div style="color:#f5b042;font-size:0.8rem;letter-spacing:1px;">★★★★★</div><p style="font-size:0.9rem;color:rgba(2,59,69,0.75);line-height:1.6;">"Best Instagram accounts I've purchased. Quality outstanding and delivery was instant."</p></div></div>
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="150"><div class="gmail-review-card" style="background:white; border-radius:20px; padding:1.5rem; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;"><div style="display:flex;align-items:center;gap:12px;margin-bottom:10px;"><div style="width:44px;height:44px;border-radius:50%;background:#023b45;color:white;display:flex;align-items:center;justify-content:center;font-weight:700;">AR</div><div><div style="font-weight:700;color:#023b45;">Anna R.</div><div style="font-size:0.7rem;color:rgba(2,59,69,0.4);">United States</div></div></div><div style="color:#f5b042;font-size:0.8rem;letter-spacing:1px;">★★★★★</div><p style="font-size:0.9rem;color:rgba(2,59,69,0.75);line-height:1.6;">"Great service! The aged Instagram accounts work perfectly for my business needs."</p></div></div>
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200"><div class="gmail-review-card" style="background:white; border-radius:20px; padding:1.5rem; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;"><div style="display:flex;align-items:center;gap:12px;margin-bottom:10px;"><div style="width:44px;height:44px;border-radius:50%;background:#023b45;color:white;display:flex;align-items:center;justify-content:center;font-weight:700;">LM</div><div><div style="font-weight:700;color:#023b45;">Lisa M.</div><div style="font-size:0.7rem;color:rgba(2,59,69,0.4);">Australia</div></div></div><div style="color:#f5b042;font-size:0.8rem;letter-spacing:1px;">★★★★★</div><p style="font-size:0.9rem;color:rgba(2,59,69,0.75);line-height:1.6;">"Excellent quality Instagram accounts. The support team is very responsive."</p></div></div>
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="250"><div class="gmail-review-card" style="background:white; border-radius:20px; padding:1.5rem; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;"><div style="display:flex;align-items:center;gap:12px;margin-bottom:10px;"><div style="width:44px;height:44px;border-radius:50%;background:#023b45;color:white;display:flex;align-items:center;justify-content:center;font-weight:700;">DK</div><div><div style="font-weight:700;color:#023b45;">David K.</div><div style="font-size:0.7rem;color:rgba(2,59,69,0.4);">Canada</div></div></div><div style="color:#f5b042;font-size:0.8rem;letter-spacing:1px;">★★★★★</div><p style="font-size:0.9rem;color:rgba(2,59,69,0.75);line-height:1.6;">"Fast delivery and premium quality accounts. Perfect for my marketing campaigns."</p></div></div>
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300"><div class="gmail-review-card" style="background:white; border-radius:20px; padding:1.5rem; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;"><div style="display:flex;align-items:center;gap:12px;margin-bottom:10px;"><div style="width:44px;height:44px;border-radius:50%;background:#023b45;color:white;display:flex;align-items:center;justify-content:center;font-weight:700;">JP</div><div><div style="font-weight:700;color:#023b45;">Jake P.</div><div style="font-size:0.7rem;color:rgba(2,59,69,0.4);">United States</div></div></div><div style="color:#f5b042;font-size:0.8rem;letter-spacing:1px;">★★★★★</div><p style="font-size:0.9rem;color:rgba(2,59,69,0.75);line-height:1.6;">"Highly recommended! The aged Instagram accounts have great reputation."</p></div></div>
        </div>
    </div>
</section>

<!-- =========================================================
   FAQ SECTION
   ========================================================= -->


<!-- =========================================================
   TRUST & SECURITY SECTION
   ========================================================= -->
<section class="gmail-trust-master-nexus section-padding" id="gmailTrustSecurity" style="background: rgba(255,255,255,0.12);">
    <div class="container">
        <div class="gmail-trust-header text-center mb-5" data-aos="fade-up">
            <span class="gmail-trust-badge" style="display:inline-flex; align-items:center; gap:8px; background:rgba(2,59,69,0.12); color:#023b45; font-weight:700; font-size:0.75rem; letter-spacing:1.5px; text-transform:uppercase; padding:6px 16px; border-radius:60px; margin-bottom:16px; border:0.5px solid rgba(2,59,69,0.15);">
                <i class="fas fa-shield-alt me-2"></i> Trust & Security
            </span>
            <h2 class="gmail-trust-title" style="font-size:clamp(2rem,4vw,2.8rem); font-weight:800; line-height:1.15; color:#023b45; font-family:'Playfair Display',serif;">
                Your <span style="position:relative; display:inline-block; color:#023b45;">Security<span style="position:absolute; bottom:2px; left:0; width:100%; height:4px; background:rgba(2,59,69,0.2); border-radius:4px;"></span></span> Matters
            </h2>
            <p style="color:rgba(2,59,69,0.7); max-width:550px; margin:0 auto;">We prioritize your security and trust</p>
        </div>
        <div class="gmail-trust-grid row g-4" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="100"><div class="gmail-trust-card" style="background:white; border-radius:16px; padding:1.2rem; text-align:center; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;"><div style="font-size:2.2rem; color:#023b45; margin-bottom:6px;">🔒</div><div style="font-weight:700; color:#023b45; font-size:0.85rem;">Secure Transactions</div></div></div>
            <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="150"><div class="gmail-trust-card" style="background:white; border-radius:16px; padding:1.2rem; text-align:center; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;"><div style="font-size:2.2rem; color:#023b45; margin-bottom:6px;">✅</div><div style="font-weight:700; color:#023b45; font-size:0.85rem;">Verified Quality</div></div></div>
            <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200"><div class="gmail-trust-card" style="background:white; border-radius:16px; padding:1.2rem; text-align:center; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;"><div style="font-size:2.2rem; color:#023b45; margin-bottom:6px;">🛡️</div><div style="font-weight:700; color:#023b45; font-size:0.85rem;">Customer Protection</div></div></div>
            <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="250"><div class="gmail-trust-card" style="background:white; border-radius:16px; padding:1.2rem; text-align:center; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;"><div style="font-size:2.2rem; color:#023b45; margin-bottom:6px;">⭐</div><div style="font-weight:700; color:#023b45; font-size:0.85rem;">Trusted Service</div></div></div>
            <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="300"><div class="gmail-trust-card" style="background:white; border-radius:16px; padding:1.2rem; text-align:center; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;"><div style="font-size:2.2rem; color:#023b45; margin-bottom:6px;">⚡</div><div style="font-weight:700; color:#023b45; font-size:0.85rem;">Fast Delivery</div></div></div>
        </div>
    </div>
</section>

<!-- =========================================================
   FINAL CTA SECTION
   ========================================================= -->
<section class="gmail-cta-master-nexus section-padding" id="gmailFinalCTA" style="background: #023b45;">
    <div class="container">
        <div class="gmail-cta-wrapper text-center" data-aos="zoom-in" data-aos-duration="800">
            <div style="max-width:700px; margin:0 auto;">
                <h2 style="font-size:clamp(2.2rem,4.5vw,3.2rem); font-weight:800; color:#FEFAF7; font-family:'Playfair Display',serif; line-height:1.1; margin-bottom:16px;">
                    Ready To Order <span style="color:#B7A08B;">Premium Instagram Accounts</span>?
                </h2>
                <p style="font-size:1.1rem; color:rgba(254,250,247,0.8); margin:0 auto 30px;">
                    Get high-quality Instagram accounts with fast delivery and professional support.
                </p>
                <div class="gmail-cta-btn-group d-flex flex-wrap justify-content-center gap-3">
                    <a href="#gmailProducts" class="gmail-cta-primary" style="background:#B7A08B; color:#023b45; border:none; padding:14px 38px; border-radius:60px; font-weight:700; font-size:0.95rem; transition:all 0.3s; text-decoration:none; display:inline-flex; align-items:center; gap:10px;">
                        <i class="fas fa-shopping-cart"></i> Order Now
                    </a>
                    <a href="contact.php" class="gmail-cta-secondary" style="background:transparent; color:#FEFAF7; border:2px solid rgba(254,250,247,0.3); padding:12px 34px; border-radius:60px; font-weight:600; font-size:0.95rem; transition:all 0.3s; text-decoration:none; display:inline-flex; align-items:center; gap:8px;">
                        <i class="fas fa-headset"></i> Contact Support
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
   STYLES - Unique to this page
   ========================================================= -->
<style>
    .section-padding { padding: 80px 0; }
    .gmail-hero-btn-primary:hover { background: #c4285c !important; transform: translateY(-3px); box-shadow: 0 10px 30px rgba(225,48,108,0.35); }
    .gmail-hero-btn-secondary:hover { border-color: #999 !important; background: #f8f9fa; transform: translateY(-3px); }
    .gmail-type-card:hover { transform: translateY(-8px); box-shadow: 0 16px 40px rgba(0,0,0,0.10) !important; }
    .gmail-why-card:hover { transform: translateY(-6px); box-shadow: 0 12px 30px rgba(0,0,0,0.08) !important; border-color: #023b45 !important; }
    .gmail-feature-item:hover { transform: translateX(6px); border-color: #023b45 !important; box-shadow: 0 4px 15px rgba(0,0,0,0.06) !important; }
    .gmail-order-step:hover { transform: translateY(-6px); box-shadow: 0 16px 40px rgba(0,0,0,0.10) !important; }
    .gmail-dashboard-card:hover { transform: translateY(-4px); box-shadow: 0 12px 30px rgba(0,0,0,0.08) !important; }
    .gmail-review-card:hover { transform: translateY(-4px); box-shadow: 0 12px 30px rgba(0,0,0,0.08) !important; border-color: #023b45 !important; }
    .gmail-trust-card:hover { transform: translateY(-6px); box-shadow: 0 12px 30px rgba(0,0,0,0.08) !important; border-color: #023b45 !important; }
    .gmail-cta-primary:hover { background: #a08b77 !important; transform: translateY(-3px); box-shadow: 0 10px 30px rgba(183,160,139,0.4); }
    .gmail-cta-secondary:hover { border-color: #FEFAF7 !important; background: rgba(254,250,247,0.08); transform: translateY(-3px); }
    @media (max-width: 991px) { .section-padding { padding: 60px 0; } .gmail-hero-headline { font-size: 2.8rem !important; } .gmail-hero-stats { gap: 16px !important; } .gmail-stat-number { font-size: 1.8rem !important; } }
    @media (max-width: 767px) { .section-padding { padding: 40px 0; } .gmail-hero-headline { font-size: 2.2rem !important; } .gmail-hero-stats { gap: 12px !important; } .gmail-stat-number { font-size: 1.4rem !important; } .gmail-cta-btn-group { flex-direction: column; align-items: center; } .gmail-cta-btn-group a { width: 100%; max-width: 280px; justify-content: center; } }
    @media (max-width: 575px) { .gmail-hero-headline { font-size: 1.8rem !important; } .gmail-type-card { padding: 1.2rem !important; } .gmail-why-card { padding: 1rem !important; } .gmail-why-card h4 { font-size: 0.9rem !important; } .gmail-why-card p { font-size: 0.75rem !important; } .gmail-review-card { padding: 1rem !important; } .gmail-review-card p { font-size: 0.8rem !important; } .gmail-dashboard-card { padding: 1rem !important; } .gmail-order-step { padding: 1rem !important; } .gmail-order-step h4 { font-size: 0.95rem !important; } .gmail-trust-card { padding: 0.8rem !important; } .gmail-trust-card div:first-child { font-size: 1.8rem !important; } .gmail-trust-card div:last-child { font-size: 0.7rem !important; } }
    /* ── Scrollbar fix ── */
    .gmail-hero-master-nexus,
    .gmail-hero-master-nexus * {
        overflow-x: hidden !important;
        overflow-y: hidden !important;
    }
</style>

<!-- =========================================================
   SCRIPTS FOR INTERACTIVE FEATURES
   ========================================================= -->
<script>
    (function() {
        "use strict";
        if (typeof AOS !== "undefined") { AOS.init({ duration: 700, once: true, offset: 20, easing: "ease-out-cubic", mirror: false }); }

        function startCounters() {
            document.querySelectorAll("[data-gmail-counter]").forEach(el => {
                const target = parseInt(el.getAttribute("data-gmail-counter"));
                if (isNaN(target) || target <= 0) return;
                let current = 0, step = 0;
                const increment = target / 60;
                const timer = setInterval(() => { step++; current += increment; if (step >= 60) { el.innerText = target + (target === 99 ? "%" : target === 24 ? "" : ""); clearInterval(timer); } else { el.innerText = Math.floor(current); } }, 33);
            });
        }

        const observer = new IntersectionObserver((entries) => { let start = false; entries.forEach(e => { if (e.isIntersecting) start = true; }); if (start) { startCounters(); observer.disconnect(); } }, { threshold: 0.3 });
        const hero = document.getElementById("gmailHeroMaster"); if (hero) observer.observe(hero);

        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener("click", function(e) { const id = this.getAttribute("href"); if (id === "#") return; const t = document.querySelector(id); if (t) { e.preventDefault(); window.scrollTo({ top: t.getBoundingClientRect().top + window.pageYOffset - 80, behavior: "smooth" }); } });
        });
        console.log("✅ Premium Instagram Accounts Page loaded successfully.");
    })();
</script>

<?php include 'footer.php'; ?>
</body>
</html>
