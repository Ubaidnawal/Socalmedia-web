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
<section class="gmail-hero-master-nexus section-padding" id="gmailHeroMaster" style="background: #B7A08B; position:relative; overflow:hidden;">
    <!-- Animated background shapes -->
    <div style="position:absolute; top:-20%; right:-10%; width:500px; height:500px; background:rgba(2,59,69,0.04); border-radius:50%; pointer-events:none; animation:gmailFloatBlob 8s ease-in-out infinite alternate;"></div>
    <div style="position:absolute; bottom:-20%; left:-10%; width:400px; height:400px; background:rgba(2,59,69,0.04); border-radius:50%; pointer-events:none; animation:gmailFloatBlob 10s ease-in-out infinite alternate-reverse;"></div>
    
    <style>
        @keyframes gmailFloatBlob {
            0% { transform: translate(0, 0) scale(1); }
            100% { transform: translate(50px, 30px) scale(1.1); }
        }
    </style>
    
    <div class="container position-relative" style="z-index:2;">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                <span class="gmail-hero-badge" style="display:inline-flex; align-items:center; gap:8px; background:rgba(2,59,69,0.12); color:#023b45; font-weight:700; font-size:0.75rem; letter-spacing:1.5px; text-transform:uppercase; padding:6px 16px; border-radius:60px; margin-bottom:16px; border:0.5px solid rgba(2,59,69,0.15);">
                    <i class="fab fa-facebook-f me-2"></i> Premium Facebook Solutions
                </span>
                <h1 class="gmail-hero-headline" style="font-size:clamp(2.8rem,7vw,4.8rem); font-weight:800; line-height:1.08; color:#023b45; margin-bottom:20px; font-family:'Playfair Display',serif;">
                    Premium <span style="position:relative; display:inline-block; color:#023b45;">Facebook<span style="position:absolute; bottom:4px; left:0; width:100%; height:8px; background:rgba(2,59,69,0.12); border-radius:4px;"></span></span> Accounts
                </h1>
                <p class="gmail-hero-subtitle" style="font-size:1.1rem; color:rgba(2,59,69,0.75); max-width:520px; margin:0 0 28px 0; line-height:1.7;">
                    High-quality Facebook accounts for business, marketing, advertising, and social media growth.
                </p>
                <div class="gmail-hero-cta-group d-flex flex-wrap gap-3">
                    <a href="#gmailProducts" class="gmail-hero-btn-primary" style="background:#023b45; color:white; border:none; padding:14px 36px; border-radius:60px; font-weight:700; font-size:0.95rem; transition:all 0.3s; text-decoration:none; display:inline-flex; align-items:center; gap:10px;">
                        <i class="fas fa-rocket"></i> Explore Accounts
                    </a>
                    <a href="#gmailFAQs" class="gmail-hero-btn-secondary" style="background:transparent; color:#023b45; border:2px solid rgba(2,59,69,0.3); padding:12px 32px; border-radius:60px; font-weight:600; font-size:0.95rem; transition:all 0.3s; text-decoration:none; display:inline-flex; align-items:center; gap:8px;">
                        <i class="fas fa-circle-question"></i> Learn More
                    </a>
                </div>
                <div class="gmail-hero-stats d-flex flex-wrap gap-4 mt-5">
                    <div class="gmail-stat-item" style="text-align:center;">
                        <div class="gmail-stat-number" style="font-size:2.2rem; font-weight:800; color:#023b45; display:block; line-height:1.1;" data-gmail-counter=""></div>
                        <div style="font-size:0.8rem; color:rgba(2,59,69,0.6);"></div>
                    </div>
                    <div class="gmail-stat-item" style="text-align:center;">
                        <div class="gmail-stat-number" style="font-size:2.2rem; font-weight:800; color:#023b45; display:block; line-height:1.1;" data-gmail-counter=""></div>
                        <div style="font-size:0.8rem; color:rgba(2,59,69,0.6);"></div>
                    </div>
                    <div class="gmail-stat-item" style="text-align:center;">
                        <div class="gmail-stat-number" style="font-size:2.2rem; font-weight:800; color:#023b45; display:block; line-height:1.1;" data-gmail-counter=""></div>
                        <div style="font-size:0.8rem; color:rgba(2,59,69,0.6);"></div>
                    </div>
                    <div class="gmail-stat-item" style="text-align:center;">
                        <div class="gmail-stat-number" style="font-size:2.2rem; font-weight:800; color:#023b45; display:block; line-height:1.1;" data-gmail-counter=""></div>
                        <div style="font-size:0.8rem; color:rgba(2,59,69,0.6);"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
                <div class="gmail-hero-image-wrapper" style="background:white; border-radius:24px; padding:1.5rem; box-shadow:0 20px 50px rgba(0,0,0,0.08);">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='500' height='350' viewBox='0 0 500 350'%3E%3Crect width='500' height='350' fill='%23f5f0eb' rx='16'/%3E%3Ctext x='60' y='100' font-family='Inter' font-size='32' fill='%23023b45' font-weight='800'%3E%F0%9F%93%98%20Facebook%20Premium%3C/text%3E%3Ctext x='60' y='150' font-family='Inter' font-size='18' fill='%23023b45' opacity='0.8'%3EVerified%20%26%20Aged%20Facebook%20Accounts%3C/text%3E%3Ctext x='60' y='190' font-family='Inter' font-size='16' fill='%23023b45' opacity='0.7'%3E%E2%9C%94%EF%B8%8F%20Profile%20Ready%20%7C%20Secure%20Login%3C/text%3E%3Ctext x='60' y='225' font-family='Inter' font-size='16' fill='%23023b45' opacity='0.7'%3E%E2%9C%94%EF%B8%8F%20Business%20Ready%20%7C%20Bulk%20Available%3C/text%3E%3Ccircle cx='400' cy='110' r='50' fill='%23023b45' opacity='0.06'/%3E%3Ctext x='385' y='122' font-family='Inter' font-size='40' fill='%23023b45'%3E%F0%9F%93%98%3C/text%3E%3C/svg%3E" alt="Premium Facebook Accounts" style="width:100%; height:auto; display:block; border-radius:12px;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
   FACEBOOK ACCOUNT TYPES
   ========================================================= -->
<section class="gmail-types-master-nexus section-padding" id="gmailAccountTypes" style="background: rgba(255,255,255,0.12);">
    <div class="container">
        <div class="gmail-types-header text-center mb-5" data-aos="fade-up">
            <span class="gmail-types-badge" style="display:inline-flex; align-items:center; gap:8px; background:rgba(2,59,69,0.12); color:#023b45; font-weight:700; font-size:0.75rem; letter-spacing:1.5px; text-transform:uppercase; padding:6px 16px; border-radius:60px; margin-bottom:16px; border:0.5px solid rgba(2,59,69,0.15);">
                <i class="fas fa-th-large me-2"></i> Account Types
            </span>
            <h2 class="gmail-types-title" style="font-size:clamp(2rem,4vw,2.8rem); font-weight:800; line-height:1.15; color:#023b45; font-family:'Playfair Display',serif;">
                Choose Your <span style="position:relative; display:inline-block; color:#023b45;">Facebook<span style="position:absolute; bottom:2px; left:0; width:100%; height:4px; background:rgba(2,59,69,0.2); border-radius:4px;"></span></span> Package
            </h2>
            <p style="color:rgba(2,59,69,0.7); max-width:550px; margin:0 auto;">Select the perfect Facebook account type for your needs</p>
        </div>
        <div class="gmail-types-grid row g-4" data-aos="fade-up" data-aos-delay="100">
            <!-- Type 1: Fresh Facebook -->
            <div class="col-md-6 col-lg-4" data-aos="flip-up" data-aos-delay="100">
                <div class="gmail-type-card" style="background:white; border-radius:24px; padding:2rem 1.5rem; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.4s; height:100%; border:1px solid rgba(2,59,69,0.04);">
                    <div style="font-size:2.8rem; color:#023b45; margin-bottom:12px;">🆕</div>
                    <h3 style="color:#023b45; font-weight:800; font-size:1.4rem; margin-bottom:4px;">Fresh Facebook Accounts</h3>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem; margin-bottom:12px;">Brand new accounts, ready for immediate use</p>
                    <ul style="list-style:none; padding:0; margin:0 0 16px 0;">
                        <li style="padding:4px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#023b45;"></i> Instantly available</li>
                        <li style="padding:4px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#023b45;"></i> No activity history</li>
                        <li style="padding:4px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#023b45;"></i> Perfect for new starts</li>
                    </ul>
                </div>
            </div>
            <!-- Type 2: PVA Facebook -->
            <div class="col-md-6 col-lg-4" data-aos="flip-up" data-aos-delay="150">
                <div class="gmail-type-card" style="background:white; border-radius:24px; padding:2rem 1.5rem; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.4s; height:100%; border:2px solid #023b45; position:relative;">
                    <div style="position:absolute; top:-10px; right:20px; background:#023b45; color:white; font-size:0.6rem; font-weight:700; padding:3px 12px; border-radius:20px; text-transform:uppercase;">Popular</div>
                    <div style="font-size:2.8rem; color:#023b45; margin-bottom:12px;">📞</div>
                    <h3 style="color:#023b45; font-weight:800; font-size:1.4rem; margin-bottom:4px;">PVA Facebook Accounts</h3>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem; margin-bottom:12px;">Phone Verified Accounts with maximum security</p>
                    <ul style="list-style:none; padding:0; margin:0 0 16px 0;">
                        <li style="padding:4px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#023b45;"></i> Phone verified</li>
                        <li style="padding:4px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#023b45;"></i> High trust score</li>
                        <li style="padding:4px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#023b45;"></i> Recovery access</li>
                    </ul>
                </div>
            </div>
            <!-- Type 3: Aged Facebook -->
            <div class="col-md-6 col-lg-4" data-aos="flip-up" data-aos-delay="200">
                <div class="gmail-type-card" style="background:white; border-radius:24px; padding:2rem 1.5rem; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.4s; height:100%; border:1px solid rgba(2,59,69,0.04);">
                    <div style="font-size:2.8rem; color:#023b45; margin-bottom:12px;">📜</div>
                    <h3 style="color:#023b45; font-weight:800; font-size:1.4rem; margin-bottom:4px;">Aged Facebook Accounts</h3>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem; margin-bottom:12px;">2+ year old accounts with established history</p>
                    <ul style="list-style:none; padding:0; margin:0 0 16px 0;">
                        <li style="padding:4px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#023b45;"></i> 2+ years old</li>
                        <li style="padding:4px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#023b45;"></i> High reputation</li>
                        <li style="padding:4px 0; display:flex; align-items:center; gap:8px; font-size:0.85rem; color:rgba(2,59,69,0.8);"><i class="fas fa-check-circle" style="color:#023b45;"></i> Activity history</li>
                    </ul>
                </div>
            </div>

</section>

<!-- =========================================================
   PRODUCT SHOWCASE SECTION
   ========================================================= -->

   
    <style>
        /* ============================================
           GLOBAL STYLES
        ============================================ */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .cards-premium-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        /* ============================================
           SECTION HEADER
        ============================================ */
        .section-head {
            text-align: center;
            margin-bottom: 3.5rem;
        }
        .section-badge {
            background: rgba(2, 59, 69, 0.15);
            backdrop-filter: blur(4px);
            display: inline-block;
            padding: 0.4rem 1.2rem;
            border-radius: 60px;
            font-size: 0.75rem;
            font-weight: 700;
            color: #023b45;
            letter-spacing: 0.5px;
            margin-bottom: 1rem;
            border: 0.5px solid rgba(2, 59, 69, 0.2);
        }
        .section-badge i {
            margin-right: 6px;
        }

        .section-title-head {
            font-size: clamp(2.2rem, 4.5vw, 3.2rem);
            font-weight: 800;
            background: linear-gradient(125deg, #023b45, #1a6b7a, #023b45);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            letter-spacing: -0.02em;
            font-family: 'Playfair Display', serif;
        }
        .section-sub-head {
            color: #023b45;
            font-size: 1.05rem;
            max-width: 550px;
            margin: 0.5rem auto 0;
            font-weight: 500;
            opacity: 0.85;
        }

        /* ============================================
           PREMIUM PRODUCT CARDS
        ============================================ */
        .attract-card {
            background: #ffffff;
            backdrop-filter: blur(2px);
            border-radius: 2rem;
            transition: all 0.35s cubic-bezier(0.2, 0.9, 0.4, 1.1);
            height: 100%;
            display: flex;
            flex-direction: column;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(2, 59, 69, 0.06);
        }

        /* Top image */
        .card-top-image {
            width: 100%;
            height: 180px;
            overflow: hidden;
            background: linear-gradient(135deg, #023b45, #1a6b7a);
            border-top-left-radius: 2rem;
            border-top-right-radius: 2rem;
            position: relative;
        }
        .card-top-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
            display: block;
        }
        .attract-card:hover .card-top-image img {
            transform: scale(1.06);
        }

        /* Card content */
        .card-content {
            padding: 1.8rem 1.5rem 1.8rem 1.5rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* Animated border glow */
        .attract-card::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 2rem;
            padding: 2px;
            background: linear-gradient(125deg, #023b45, #1a6b7a, #e9cba7, #023b45);
            background-size: 200% 200%;
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            opacity: 0;
            transition: opacity 0.4s;
            pointer-events: none;
        }
        .attract-card:hover::after {
            opacity: 1;
            animation: borderGlowMove 2.5s ease infinite;
        }
        @keyframes borderGlowMove {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .attract-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 28px 40px -16px rgba(0, 0, 0, 0.3);
            background: #ffffff;
        }

        /* Badges */
        .badge-extra {
            position: absolute;
            top: 1.2rem;
            left: 1.2rem;
            background: linear-gradient(105deg, #023b45, #1f6e7a);
            color: white;
            font-size: 0.65rem;
            font-weight: 800;
            padding: 0.3rem 1rem;
            border-radius: 60px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            z-index: 5;
            letter-spacing: 0.3px;
            text-transform: uppercase;
        }
        .badge-hot {
            background: linear-gradient(105deg, #c0392b, #e74c3c);
            color: white;
        }
        .badge-prem {
            background: linear-gradient(105deg, #8B7355, #B7A08B);
            color: #023b45;
        }
        .badge-best {
            background: linear-gradient(105deg, #f39c12, #f1c40f);
            color: #023b45;
        }
        .badge-new {
            background: linear-gradient(105deg, #27ae60, #2ecc71);
            color: white;
        }
        .badge-trend {
            background: linear-gradient(105deg, #8e44ad, #9b59b6);
            color: white;
        }

        /* Card title */
        .card-title {
            font-size: 1.6rem;
            font-weight: 800;
            letter-spacing: -0.02em;
            margin-bottom: 0.2rem;
            color: #023b45 !important;
            font-family: 'Playfair Display', serif;
        }
        .short-desc {
            font-size: 0.85rem;
            color: #023b45 !important;
            margin-bottom: 0.8rem;
            font-weight: 500;
            opacity: 0.8;
        }

        /* Rating */
        .product-rating {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 0.65rem;
            margin: 0.25rem 0 0.75rem 0;
            transition: all 0.2s ease;
        }
        .star-rating {
            display: inline-flex;
            align-items: center;
            gap: 0.15rem;
        }
        .star-rating i {
            font-size: 1.1rem;
            cursor: pointer;
            transition: transform 0.15s ease, color 0.2s, filter 0.2s;
            color: #d4c4b0;
        }
        .star-rating i.hover-star {
            transform: scale(1.15);
            filter: brightness(1.2);
        }
        .star-rating i.active-star {
            color: #f5b042;
            text-shadow: 0 0 3px rgba(245, 176, 66, 0.5);
        }
        .rating-count {
            font-size: 0.8rem;
            font-weight: 600;
            color: #023b45;
            background: rgba(2, 59, 69, 0.08);
            padding: 0.25rem 0.7rem;
            border-radius: 40px;
            letter-spacing: -0.01em;
            backdrop-filter: blur(2px);
            transition: all 0.2s;
            cursor: pointer;
        }
        .rating-count:hover {
            background: rgba(2, 59, 69, 0.18);
            transform: translateY(-1px);
        }

        /* Price */
        .price-modern {
            display: flex;
            align-items: baseline;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin: 0.5rem 0 0.2rem;
        }
        .current-price {
            font-size: 2.2rem;
            font-weight: 800;
            color: #023b45 !important;
        }
        .price-unit {
            font-size: 0.9rem;
            font-weight: 600;
            vertical-align: super;
        }
        .old-price {
            font-size: 1rem;
            color: #023b45;
            opacity: 0.5;
            text-decoration: line-through;
            font-weight: 500;
        }
        .discount-badge {
            background: rgba(231, 76, 60, 0.15);
            color: #c0392b;
            font-size: 0.7rem;
            font-weight: 700;
            padding: 0.15rem 0.6rem;
            border-radius: 40px;
            margin-left: 0.3rem;
        }
        .qty-badge {
            background: rgba(2, 59, 69, 0.08);
            padding: 0.3rem 1rem;
            border-radius: 60px;
            font-size: 0.7rem;
            font-weight: 700;
            color: #023b45;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            margin-left: auto;
        }
        .stock-info {
            font-size: 0.7rem;
            font-weight: 600;
            color: #023b45;
            opacity: 0.7;
            margin-top: 0.2rem;
        }
        .stock-info .in-stock {
            color: #27ae60;
        }
        .stock-info .out-stock {
            color: #e74c3c;
        }

        /* Features grid */
        .features-mega {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0.4rem 0.8rem;
            background: rgba(2, 59, 69, 0.04);
            padding: 0.8rem;
            border-radius: 1.2rem;
            margin: 0.8rem 0 1.2rem;
        }
        .feat {
            font-size: 0.7rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
            color: #023b45 !important;
        }
        .feat i {
            color: #1f6e7a;
            font-size: 0.65rem;
        }

        /* Buttons */
        .btn-group-premium {
            display: flex;
            gap: 0.8rem;
            margin-top: auto;
        }
        .btn-gradient-cart {
            background: linear-gradient(95deg, #023b45, #1f6e7a);
            border: none;
            color: white !important;
            font-weight: 700;
            padding: 0.75rem 1rem;
            border-radius: 60px;
            font-size: 0.85rem;
            transition: all 0.25s;
            flex: 1;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            position: relative;
            overflow: hidden;
        }
        .btn-gradient-cart:hover {
            background: linear-gradient(95deg, #1f6e7a, #023b45);
            transform: scale(0.98);
            box-shadow: 0 10px 20px -6px rgba(2, 59, 69, 0.5);
        }
        .btn-gradient-cart.loading {
            pointer-events: none;
            opacity: 0.7;
        }
        .btn-gradient-cart.loading .cart-text {
            display: none;
        }
        .btn-gradient-cart.loading .spinner {
            display: inline-block;
        }
        .btn-gradient-cart.success {
            background: linear-gradient(95deg, #27ae60, #2ecc71);
        }

        .btn-gradient-cart .spinner {
            display: none;
            width: 18px;
            height: 18px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-top: 2px solid #fff;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .btn-outline-details {
            background: transparent;
            border: 1.5px solid rgba(2, 59, 69, 0.3);
            color: #023b45 !important;
            font-weight: 700;
            padding: 0.75rem 1rem;
            border-radius: 60px;
            flex: 1;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        .btn-outline-details:hover {
            border-color: #023b45;
            background: rgba(2, 59, 69, 0.06);
            transform: translateY(-2px);
        }

        /* Ripple */
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.4);
            transform: scale(0);
            animation: rippleAnim 0.5s linear;
            pointer-events: none;
        }
        @keyframes rippleAnim {
            to {
                transform: scale(6);
                opacity: 0;
            }
        }

        /* ============================================
           REVIEW MODAL
        ============================================ */
        .review-modal .modal-content {
            background: #fef8f0;
            border-radius: 2rem;
            border: 1px solid #B7A08B;
        }
        .rating-distribution {
            background: rgba(2, 59, 69, 0.05);
            border-radius: 1.5rem;
            padding: 1.2rem;
        }
        .distro-bar {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            margin-bottom: 0.6rem;
        }
        .distro-label {
            width: 45px;
            font-size: 0.85rem;
            font-weight: 700;
            color: #023b45;
        }
        .bar-bg {
            flex: 1;
            height: 8px;
            background: rgba(2, 59, 69, 0.1);
            border-radius: 20px;
            overflow: hidden;
        }
        .bar-fill {
            width: 0%;
            height: 100%;
            background: #f5b042;
            border-radius: 20px;
            transition: width 0.6s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }
        .distro-percent {
            width: 45px;
            font-size: 0.75rem;
            font-weight: 600;
            color: #023b45;
        }
        .review-card-item {
            background: white;
            border-radius: 1.25rem;
            padding: 1rem;
            margin-bottom: 0.8rem;
            transition: all 0.2s;
            border: 1px solid rgba(183, 160, 139, 0.2);
        }
        .review-card-item:hover {
            transform: translateX(4px);
            background: #ffffffd9;
        }
        .avatar-initial {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #023b45;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 1rem;
            flex-shrink: 0;
        }

        /* ============================================
           DETAILS MODAL
        ============================================ */
        .detail-modal .modal-content {
            background: #fef8f0;
            border-radius: 2rem;
            border: 1px solid #B7A08B;
        }
        .detail-image-wrap {
            background: linear-gradient(135deg, #023b45, #1a6b7a);
            border-radius: 1.5rem;
            overflow: hidden;
            height: 250px;
        }
        .detail-image-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .detail-feature-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0.4rem 0;
            color: #023b45;
            font-size: 0.9rem;
        }
        .detail-feature-item i {
            color: #1f6e7a;
            width: 20px;
        }

        /* ============================================
           TOAST NOTIFICATION
        ============================================ */
        .toast-notification {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: #023b45;
            backdrop-filter: blur(12px);
            color: white;
            padding: 14px 24px;
            border-radius: 60px;
            font-weight: 600;
            font-size: 0.9rem;
            z-index: 9999;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            animation: slideInRight 0.4s ease;
            border: 1px solid rgba(183, 160, 139, 0.3);
            display: flex;
            align-items: center;
            gap: 10px;
            min-width: 200px;
        }
        .toast-notification.success {
            border-left: 4px solid #2ecc71;
        }
        .toast-notification.error {
            border-left: 4px solid #e74c3c;
        }
        @keyframes slideInRight {
            from {
                transform: translateX(100px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* ============================================
           RESPONSIVE
        ============================================ */
        @media (max-width: 768px) {
            .card-title {
                font-size: 1.4rem;
            }
            .current-price {
                font-size: 1.8rem;
            }
            .star-rating i {
                font-size: 1rem;
            }
            .features-mega {
                grid-template-columns: 1fr 1fr;
                gap: 0.3rem 0.6rem;
                padding: 0.6rem;
            }
            .feat {
                font-size: 0.65rem;
            }
            .card-top-image {
                height: 140px;
            }
            .attract-card {
                border-radius: 1.5rem;
            }
            .card-top-image {
                border-top-left-radius: 1.5rem;
                border-top-right-radius: 1.5rem;
            }
            .attract-card::after {
                border-radius: 1.5rem;
            }
            .qty-badge {
                font-size: 0.65rem;
                padding: 0.2rem 0.7rem;
            }
            .badge-extra {
                font-size: 0.55rem;
                padding: 0.2rem 0.7rem;
                top: 0.8rem;
                left: 0.8rem;
            }
        }

        @media (max-width: 576px) {
            .btn-group-premium {
                flex-direction: column;
                gap: 0.6rem;
            }
            .btn-gradient-cart,
            .btn-outline-details {
                width: 100%;
            }
            .card-title {
                font-size: 1.2rem;
            }
            .current-price {
                font-size: 1.5rem;
            }
            .card-content {
                padding: 1.2rem 1rem 1.2rem 1rem;
            }
            .card-top-image {
                height: 120px;
            }
            .price-modern {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.3rem;
            }
            .qty-badge {
                margin-left: 0;
            }
            .features-mega {
                grid-template-columns: 1fr 1fr;
                gap: 0.2rem 0.4rem;
                padding: 0.5rem;
            }
            .feat {
                font-size: 0.6rem;
            }
            .section-title-head {
                font-size: 1.8rem;
            }
            .detail-image-wrap {
                height: 180px;
            }
        }

        @media (min-width: 1400px) {
            .cards-premium-container {
                max-width: 1500px;
            }
        }

        /* AOS override */
        [data-aos] {
            pointer-events: none;
        }
        [data-aos].aos-animate {
            pointer-events: auto;
        }
    </style>
</head>
<body>

    <!-- =========================================
    PREMIUM PRODUCT CARDS SECTION
    ========================================= -->
    <div class="cards-premium-container">
        <!-- Section Header -->
        <div class="section-head" data-aos="fade-up">
            <div class="section-badge"><i class="fas fa-crown"></i> Elite Marketplace</div>
            <h2 class="section-title-head"><em>Premium Social Accounts</em></h2>
            <p class="section-sub-head"><em>Fresh, verified &amp; instantly delivered — trusted by 15k+ creators worldwide</em></p>
        </div>

        <!-- Cards Grid -->
        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4" id="productsGrid" data-aos="fade-up">

            <!-- =========================================
            CARD 1: FRESH FACEBOOK
            ========================================= -->
            <div class="col" data-product-id="facebook">
                <div class="attract-card">
                    <div class="badge-extra badge-best"><i class="fas fa-star"></i> Fresh</div>
                    <div class="card-top-image">
                        <img src="../Image/facebook.jpg" alt="Fresh Facebook Accounts">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title"><em>Fresh Facebook Accounts</em></h3>
                        <p class="short-desc"><em>Brand new Facebook accounts, ready for immediate use</em></p>
                        <div class="product-rating">
                            <div class="star-rating" data-product="facebook"></div>
                            <span class="rating-count" data-product="facebook">(95 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="current-price"><span class="price-unit">$</span>30</span>
                            <span class="old-price">$40</span>
                            <span class="discount-badge">-25%</span>
                            <span class="qty-badge"><i class="fas fa-database"></i> 50 Accounts</span>
                        </div>
                        <div class="stock-info"><i class="fas fa-check-circle in-stock"></i> In Stock — <strong>320</strong> available</div>
                        <div class="features-mega">
                            <div class="feat"><i class="fas fa-check-circle"></i> Fresh Accounts</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Instant Access</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Secure Login</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Fast Delivery</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> No History</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> 24H Replacement</div>
                        </div>
                        <div class="btn-group-premium">
                            <button class="btn-outline-details detailBtn" data-name="Fresh Facebook Accounts"><i class="fas fa-eye"></i> Details</button>
                            <button class="btn-gradient-cart addCartBtn" data-name="Fresh Facebook Accounts"><i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- =========================================
            CARD 2: PVA FACEBOOK
            ========================================= -->
            <div class="col" data-product-id="facebook">
                <div class="attract-card">
                    <div class="badge-extra badge-hot"><i class="fas fa-fire"></i> PVA</div>
                    <div class="card-top-image">
                        <img src="../Image/facebook.jpg" alt="PVA Facebook Accounts">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title"><em>PVA Facebook Accounts</em></h3>
                        <p class="short-desc"><em>Phone verified Facebook accounts with high trust score</em></p>
                        <div class="product-rating">
                            <div class="star-rating" data-product="facebook"></div>
                            <span class="rating-count" data-product="facebook">(215 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="current-price"><span class="price-unit">$</span>55</span>
                            <span class="old-price">$70</span>
                            <span class="discount-badge">-29%</span>
                            <span class="qty-badge"><i class="fas fa-database"></i> 100 Accounts</span>
                        </div>
                        <div class="stock-info"><i class="fas fa-check-circle in-stock"></i> In Stock — <strong>180</strong> available</div>
                        <div class="features-mega">
                            <div class="feat"><i class="fas fa-check-circle"></i> Phone Verified</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> High Trust Score</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Business Ready</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Bulk Available</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Activity History</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Recovery Access</div>
                        </div>
                        <div class="btn-group-premium">
                            <button class="btn-outline-details detailBtn" data-name="PVA Facebook Accounts"><i class="fas fa-eye"></i> Details</button>
                            <button class="btn-gradient-cart addCartBtn" data-name="PVA Facebook Accounts"><i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- =========================================
            CARD 3: AGED FACEBOOK
            ========================================= -->
            <div class="col" data-product-id="facebook">
                <div class="attract-card">
                    <div class="badge-extra badge-prem"><i class="fas fa-crown"></i> Aged</div>
                    <div class="card-top-image">
                        <img src="../Image/facebook.jpg" alt="Aged Facebook Accounts">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title"><em>Aged Facebook Accounts</em></h3>
                        <p class="short-desc"><em>2+ year old Facebook profiles with established history</em></p>
                        <div class="product-rating">
                            <div class="star-rating" data-product="facebook"></div>
                            <span class="rating-count" data-product="facebook">(178 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="current-price"><span class="price-unit">$</span>150</span>
                            <span class="old-price">$180</span>
                            <span class="discount-badge">-25%</span>
                            <span class="qty-badge"><i class="fas fa-database"></i> 300 Accounts</span>
                        </div>
                        <div class="stock-info"><i class="fas fa-check-circle in-stock"></i> In Stock — <strong>95</strong> available</div>
                        <div class="features-mega">
                            <div class="feat"><i class="fas fa-check-circle"></i> Aged Profiles</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Activity History</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> High Reputation</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Business Ready</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Email Access</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Bulk Orders</div>
                        </div>
                        <div class="btn-group-premium">
                            <button class="btn-outline-details detailBtn" data-name="Aged Facebook Accounts"><i class="fas fa-eye"></i> Details</button>
                            <button class="btn-gradient-cart addCartBtn" data-name="Aged Facebook Accounts"><i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- =========================================
            CARD 4: BUSINESS FACEBOOK
            ========================================= -->
            <div class="col" data-product-id="facebook">
                <div class="attract-card">
                    <div class="badge-extra badge-prem"><i class="fas fa-briefcase"></i> Business</div>
                    <div class="card-top-image">
                        <img src="../Image/facebook.jpg" alt="Business Facebook Accounts">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title"><em>Business Facebook Accounts</em></h3>
                        <p class="short-desc"><em>Premium business-ready Facebook profiles for marketing</em></p>
                        <div class="product-rating">
                            <div class="star-rating" data-product="facebook"></div>
                            <span class="rating-count" data-product="facebook">(142 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="current-price"><span class="price-unit">$</span>250</span>
                            <span class="old-price">$280</span>
                            <span class="discount-badge">-45%</span>
                            <span class="qty-badge"><i class="fas fa-database"></i> 500 Accounts</span>
                        </div>
                        <div class="stock-info"><i class="fas fa-check-circle in-stock"></i> In Stock — <strong>55</strong> available</div>
                        <div class="features-mega">
                            <div class="feat"><i class="fas fa-check-circle"></i> Business Ready</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Manager Role</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Ad Account Ready</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Page Included</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Email Access</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> 24/7 Support</div>
                        </div>
                        <div class="btn-group-premium">
                            <button class="btn-outline-details detailBtn" data-name="Business Facebook Accounts"><i class="fas fa-eye"></i> Details</button>
                            <button class="btn-gradient-cart addCartBtn" data-name="Business Facebook Accounts"><i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span></button>
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
                            <h4 id="detailProductName" style="color:#023b45; font-family:'Playfair Display',serif; font-weight:700;">Product Name</h4>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
    </script>
    <script>
        (function() {
            'use strict';

            AOS.init({
                duration: 700,
                once: true,
                offset: 20,
                easing: 'ease-out-cubic',
                mirror: false,
            });

            // ============================
            // PRODUCT DATA
            // ============================
            const productData = {
                gmail: {
                    name: 'Gmail Accounts',
                    desc: 'Premium GSuite ready, aged profiles with full recovery access and instant delivery.',
                    price: 40,
                    oldPrice: 55,
                    discount: '-27%',
                    stock: 245,
                    avg: 4.5,
                    total: 128,
                    distribution: { 5: 60, 4: 25, 3: 10, 2: 3, 1: 2 },
                    reviews: [
                        { name: 'Alex J.', country: 'USA', text: 'Perfect Gmail accounts, very fast delivery!', rating: 5,
                            date: '2024-12-15' },
                        { name: 'Maria S.', country: 'UK', text: 'Aged profiles work great for my business.', rating: 4,
                            date: '2024-12-10' },
                        { name: 'Tom R.', country: 'Canada', text: 'Good quality, support was helpful.', rating: 5,
                            date: '2024-12-05' },
                        { name: 'Linda K.', country: 'Australia', text: 'Highly recommend these accounts!', rating: 5,
                            date: '2024-11-28' },
                        { name: 'James M.', country: 'USA', text: 'Very reliable, will order again.', rating: 4,
                            date: '2024-11-20' }
                    ]
                },
                facebook: {
                    name: 'Facebook Accounts',
                    desc: 'Aged Facebook profiles with activity history, ready for ads and business use.',
                    price: 50,
                    oldPrice: 70,
                    discount: '-29%',
                    stock: 180,
                    avg: 4.7,
                    total: 215,
                    distribution: { 5: 70, 4: 20, 3: 7, 2: 2, 1: 1 },
                    reviews: [
                        { name: 'Emily W.', country: 'USA', text: 'Facebook accounts are aged perfectly. Great for ads!',
                            rating: 5, date: '2024-12-14' },
                        { name: 'James M.', country: 'UK', text: 'Very reliable, will order again.', rating: 5,
                            date: '2024-12-08' },
                        { name: 'Sophia L.', country: 'Canada', text: 'Good value for money.', rating: 4,
                            date: '2024-12-02' },
                        { name: 'Robert K.', country: 'Australia', text: 'Accounts work perfectly for my campaigns.',
                            rating: 5, date: '2024-11-25' },
                        { name: 'Anna R.', country: 'USA', text: 'Fast delivery and good support.', rating: 5,
                            date: '2024-11-18' }
                    ]
                },
                instagram: {
                    name: 'Instagram Accounts',
                    desc: 'High engagement Instagram profiles with real followers potential and email access.',
                    price: 50,
                    oldPrice: 65,
                    discount: '-23%',
                    stock: 156,
                    avg: 4.3,
                    total: 189,
                    distribution: { 5: 55, 4: 22, 3: 12, 2: 6, 1: 5 },
                    reviews: [
                        { name: 'Chris P.', country: 'UK', text: 'Instagram profiles look authentic.', rating: 4,
                            date: '2024-12-12' },
                        { name: 'Anna R.', country: 'USA', text: 'Fast delivery and good support.', rating: 5,
                            date: '2024-12-06' },
                        { name: 'David K.', country: 'Canada', text: 'Good quality but a bit pricy.', rating: 3,
                            date: '2024-11-30' },
                        { name: 'Lisa M.', country: 'Australia', text: 'Great for marketing campaigns.', rating: 5,
                            date: '2024-11-22' }
                    ]
                },
                twitter: {
                    name: 'Twitter X Accounts',
                    desc: 'Established Twitter accounts with email access, perfect for brand building.',
                    price: 50,
                    oldPrice: 60,
                    discount: '-17%',
                    stock: 98,
                    avg: 4.6,
                    total: 156,
                    distribution: { 5: 62, 4: 24, 3: 8, 2: 4, 1: 2 },
                    reviews: [
                        { name: 'Laura B.', country: 'USA', text: 'Twitter accounts are top-notch.', rating: 5,
                            date: '2024-12-11' },
                        { name: 'Brian H.', country: 'UK', text: 'Excellent for marketing campaigns.', rating: 5,
                            date: '2024-12-04' },
                        { name: 'Megan T.', country: 'Canada', text: 'Quick delivery, satisfied.', rating: 4,
                            date: '2024-11-27' },
                        { name: 'Steve R.', country: 'Australia', text: 'Good quality accounts.', rating: 4,
                            date: '2024-11-19' }
                    ]
                },
                tiktok: {
                    name: 'TikTok Accounts',
                    desc: 'Viral-ready TikTok profiles with high engagement potential and verified status.',
                    price: 60,
                    oldPrice: 80,
                    discount: '-25%',
                    stock: 67,
                    avg: 4.2,
                    total: 94,
                    distribution: { 5: 40, 4: 25, 3: 15, 2: 10, 1: 4 },
                    reviews: [
                        { name: 'Tyler S.', country: 'USA', text: 'Great TikTok accounts!', rating: 5,
                            date: '2024-12-13' },
                        { name: 'Emma R.', country: 'UK', text: 'High engagement potential.', rating: 4,
                            date: '2024-12-07' },
                        { name: 'Jake W.', country: 'Canada', text: 'Perfect for my content creation.', rating: 5,
                            date: '2024-12-01' },
                        { name: 'Sophia C.', country: 'Australia', text: 'Good value for money.', rating: 4,
                            date: '2024-11-24' },
                        { name: 'Liam P.', country: 'USA', text: 'Will order again!', rating: 5, date: '2024-11-17' }
                    ]
                },
                linkedin: {
                    name: 'LinkedIn Accounts',
                    desc: 'Professional LinkedIn profiles with network ready status and premium access.',
                    price: 55,
                    oldPrice: 75,
                    discount: '-27%',
                    stock: 43,
                    avg: 4.4,
                    total: 112,
                    distribution: { 5: 48, 4: 28, 3: 12, 2: 6, 1: 4 },
                    reviews: [
                        { name: 'David B.', country: 'USA', text: 'Perfect for professional networking.', rating: 5,
                            date: '2024-12-14' },
                        { name: 'Nina T.', country: 'UK', text: 'Great quality profiles.', rating: 4,
                            date: '2024-12-09' },
                        { name: 'Peter L.', country: 'Canada', text: 'Highly recommended for business.', rating: 5,
                            date: '2024-12-03' },
                        { name: 'Olivia W.', country: 'Australia', text: 'Fast delivery and good support.', rating: 4,
                            date: '2024-11-26' },
                        { name: 'Mark J.', country: 'USA', text: 'Excellent service!', rating: 5, date: '2024-11-21' }
                    ]
                }
            };

            // ============================
            // STAR RATING
            // ============================
            const ratingContainers = document.querySelectorAll('.star-rating');
            ratingContainers.forEach(container => {
                const product = container.dataset.product;
                const data = productData[product];
                if (!data) return;
                const avg = data.avg;
                const fullStars = Math.floor(avg);
                const halfStar = avg % 1 >= 0.5 ? 1 : 0;
                const emptyStars = 5 - fullStars - halfStar;

                let html = '';
                for (let i = 0; i < fullStars; i++) {
                    html += `<i class="fas fa-star active-star" data-star="${i+1}"></i>`;
                }
                if (halfStar) {
                    html += `<i class="fas fa-star-half-alt active-star" data-star="${fullStars+1}"></i>`;
                }
                for (let i = 0; i < emptyStars; i++) {
                    const starNum = fullStars + halfStar + i + 1;
                    html += `<i class="fas fa-star" data-star="${starNum}"></i>`;
                }
                container.innerHTML = html;

                // Star click handler
                const stars = container.querySelectorAll('i');
                let selectedRating = 0;

                stars.forEach((star, idx) => {
                    star.style.cursor = 'pointer';
                    star.addEventListener('mouseenter', function() {
                        const index = parseInt(this.dataset.star) || (idx + 1);
                        stars.forEach((s, i) => {
                            const sIdx = parseInt(s.dataset.star) || (i + 1);
                            if (sIdx <= index) {
                                s.classList.add('hover-star');
                            } else {
                                s.classList.remove('hover-star');
                            }
                        });
                    });
                    star.addEventListener('mouseleave', function() {
                        stars.forEach(s => s.classList.remove('hover-star'));
                    });
                    star.addEventListener('click', function(e) {
                        e.stopPropagation();
                        const index = parseInt(this.dataset.star) || (idx + 1);
                        selectedRating = index;
                        stars.forEach((s, i) => {
                            const sIdx = parseInt(s.dataset.star) || (i + 1);
                            if (sIdx <= index) {
                                s.classList.add('active-star');
                                s.classList.remove('fas');
                                s.classList.add('fas');
                            } else {
                                s.classList.remove('active-star');
                            }
                        });
                        // Update all stars to reflect the rating
                        for (let i = 0; i < stars.length; i++) {
                            const sIdx = parseInt(stars[i].dataset.star) || (i + 1);
                            if (sIdx <= index) {
                                stars[i].className = 'fas fa-star active-star';
                            } else {
                                stars[i].className = 'fas fa-star';
                            }
                        }
                        showToast('⭐ You rated this product ' + index + ' stars! Thank you.');
                    });
                });
            });

            // ============================
            // TOAST NOTIFICATION
            // ============================
            function showToast(message, type = 'success') {
                const existing = document.querySelector('.toast-notification');
                if (existing) existing.remove();

                const div = document.createElement('div');
                div.className = 'toast-notification ' + type;
                div.innerHTML = `
                    <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'}"></i>
                    <span>${message}</span>
                `;
                document.body.appendChild(div);

                setTimeout(() => {
                    div.style.opacity = '0';
                    div.style.transform = 'translateX(50px)';
                    div.style.transition = 'all 0.3s ease';
                    setTimeout(() => div.remove(), 300);
                }, 3000);
            }

            // ============================
            // ADD TO CART
            // ============================
            document.querySelectorAll('.addCartBtn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    const name = this.dataset.name;
                    const price = this.dataset.price;
                    createRipple(e, this);

                    // Loading state
                    this.classList.add('loading');
                    this.disabled = true;

                    setTimeout(() => {
                        this.classList.remove('loading');
                        this.classList.add('success');
                        this.innerHTML =
                            `<i class="fas fa-check"></i> <span class="cart-text">Added!</span>`;
                        showToast('🛒 ' + name + ' added to cart successfully!');

                        setTimeout(() => {
                            this.classList.remove('success');
                            this.innerHTML =
                                `<i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span>`;
                            this.disabled = false;
                        }, 1500);
                    }, 1200);
                });
            });

            // ============================
            // DETAILS MODAL
            // ============================
            const detailModal = new bootstrap.Modal(document.getElementById('productDetailModal'));
            const modalProductName = document.getElementById('detailProductName');
            const modalProductDesc = document.getElementById('detailProductDesc');
            const modalProductPrice = document.getElementById('detailProductPrice');
            const modalOldPrice = document.getElementById('detailOldPrice');
            const modalDiscount = document.getElementById('detailDiscount');
            const modalStock = document.getElementById('detailStock');
            const modalRating = document.getElementById('detailRating');
            const modalReviews = document.getElementById('detailReviews');
            const modalProductTitle = document.getElementById('modalProductTitle');

            document.querySelectorAll('.detailBtn').forEach(btn => {
                btn.addEventListener('click', function() {
                    var card = this.closest('.attract-card') || this.closest('.col');
                    if (!card) { detailModal.show(); return; }

                    var titleEl = card.querySelector('.card-title');
                    var descEl = card.querySelector('.short-desc');
                    var priceEl = card.querySelector('.current-price');
                    var oldPriceEl = card.querySelector('.old-price');
                    var discountEl = card.querySelector('.discount-badge');
                    var qtyEl = card.querySelector('.qty-badge');
                    var stockEl = card.querySelector('.stock-info');
                    var featuresEl = card.querySelector('.features-mega');

                    if (titleEl) modalProductName.textContent = titleEl.textContent.trim();
                    if (descEl) modalProductDesc.textContent = descEl.textContent.trim();
                    if (priceEl) modalProductPrice.textContent = priceEl.textContent.trim();
                    if (oldPriceEl) modalOldPrice.textContent = oldPriceEl.textContent.trim();
                    if (discountEl) modalDiscount.textContent = discountEl.textContent.trim();
                    if (qtyEl) modalProductTitle.textContent = (titleEl ? titleEl.textContent.trim() : 'Package') + ' — ' + qtyEl.textContent.trim();
                    if (stockEl) modalStock.textContent = stockEl.textContent.trim();

                    var detailFeatures = document.getElementById('detailFeaturesList');
                    if (detailFeatures && featuresEl) {
                        var featItems = featuresEl.querySelectorAll('.feat');
                        var html = '';
                        featItems.forEach(function(f) {
                            html += '<div class="detail-feature-item"><i class="fas fa-check-circle"></i> ' + f.textContent.trim() + '</div>';
                        });
                        if (html) detailFeatures.innerHTML = html;
                    }

                    var fdata = productData['facebook'];
                    if (fdata) {
                        modalRating.textContent = fdata.avg.toFixed(1);
                        modalReviews.textContent = fdata.total;
                    }

                    var detailImage = document.getElementById('detailProductImage');
                    if (detailImage) {
                        detailImage.src = '../Image/instagram.jpg';
                    }

                    detailModal.show();
                });
            });

            // Modal Add to Cart
            document.getElementById('modalAddToCartBtn').addEventListener('click', function() {
                const name = modalProductName.textContent;
                showToast('🛒 ' + name + ' added to cart from details!');
                detailModal.hide();
            });

            // ============================
            // REVIEW MODAL
            // ============================
            const reviewModal = new bootstrap.Modal(document.getElementById('reviewModal'));
            const distributionBars = document.getElementById('distributionBars');
            const reviewsListContainer = document.getElementById('reviewsListContainer');
            const modalAvgRating = document.getElementById('modalAvgRating');
            const modalTotalReviews = document.getElementById('modalTotalReviews');
            const reviewModalTitle = document.getElementById('reviewModalTitle');

            document.querySelectorAll('.rating-count').forEach(count => {
                count.addEventListener('click', function() {
                    const product = this.dataset.product;
                    const data = productData[product];
                    if (!data) return;

                    const productName = data.name;
                    reviewModalTitle.textContent = productName + ' Reviews';
                    modalAvgRating.textContent = data.avg.toFixed(1);
                    modalTotalReviews.textContent = data.total;

                    const dist = data.distribution;
                    const max = Math.max(...Object.values(dist));
                    let barsHTML = '';
                    for (let i = 5; i >= 1; i--) {
                        const countVal = dist[i] || 0;
                        const percent = max > 0 ? (countVal / max * 100) : 0;
                        barsHTML += `
                            <div class="distro-bar">
                                <span class="distro-label">${i} ★</span>
                                <div class="bar-bg"><div class="bar-fill" style="width:${percent}%;"></div></div>
                                <span class="distro-percent">${countVal}</span>
                            </div>
                        `;
                    }
                    distributionBars.innerHTML = barsHTML;

                    const reviews = data.reviews || [];
                    let reviewsHTML = '';
                    reviews.forEach(r => {
                        const initials = r.name.split(' ').map(n => n[0]).join('');
                        const dateObj = new Date(r.date);
                        const formattedDate = dateObj.toLocaleDateString('en-US', { month: 'short',
                            day: 'numeric', year: 'numeric' });
                        reviewsHTML += `
                            <div class="review-card-item d-flex align-items-start gap-3">
                                <div class="avatar-initial">${initials}</div>
                                <div style="flex:1;">
                                    <div class="d-flex flex-wrap align-items-center gap-2">
                                        <span class="fw-bold" style="color:#023b45;">${r.name}</span>
                                        <span style="color:#023b45; opacity:0.5; font-size:0.7rem;">${r.country}</span>
                                        <span style="color:#023b45; opacity:0.4; font-size:0.7rem; margin-left:auto;">${formattedDate}</span>
                                    </div>
                                    <div class="text-warning mb-1">${'★'.repeat(r.rating)}${'☆'.repeat(5 - r.rating)}</div>
                                    <div style="color:#023b45; opacity:0.8; font-size:0.9rem;">${r.text}</div>
                                </div>
                            </div>
                        `;
                    });
                    reviewsListContainer.innerHTML = reviewsHTML ||
                        '<p class="text-muted">No reviews yet.</p>';

                    reviewModal.show();
                });
            });

            // ============================
            // RIPPLE EFFECT
            // ============================
            function createRipple(event, element) {
                const ripple = document.createElement('span');
                ripple.className = 'ripple';
                const rect = element.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = (event.clientX - rect.left - size / 2) + 'px';
                ripple.style.top = (event.clientY - rect.top - size / 2) + 'px';
                element.appendChild(ripple);
                setTimeout(() => ripple.remove(), 500);
            }

            console.log('Premium product cards loaded successfully.');
        })();
    </script>

<!-- product cards end -->

<!-- =========================================================
   WHY CHOOSE OUR GMAIL ACCOUNTS
   ========================================================= -->
<section class="gmail-why-master-nexus section-padding" id="gmailWhyChoose" style="background: rgba(255,255,255,0.12);">
    <div class="container">
        <div class="gmail-why-header text-center mb-5" data-aos="fade-up">
            <span class="gmail-why-badge" style="display:inline-flex; align-items:center; gap:8px; background:rgba(2,59,69,0.12); color:#023b45; font-weight:700; font-size:0.75rem; letter-spacing:1.5px; text-transform:uppercase; padding:6px 16px; border-radius:60px; margin-bottom:16px; border:0.5px solid rgba(2,59,69,0.15);">
                <i class="fas fa-heart me-2"></i> Why Choose Us
            </span>
            <h2 class="gmail-why-title" style="font-size:clamp(2rem,4vw,2.8rem); font-weight:800; line-height:1.15; color:#023b45; font-family:'Playfair Display',serif;">
                Why Our <span style="position:relative; display:inline-block; color:#023b45;">Gmail<span style="position:absolute; bottom:2px; left:0; width:100%; height:4px; background:rgba(2,59,69,0.2); border-radius:4px;"></span></span> Accounts?
            </h2>
            <p style="color:rgba(2,59,69,0.7); max-width:550px; margin:0 auto;">The advantages of choosing our premium Gmail services</p>
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
                    <div style="font-size:2.5rem; color:#023b45; margin-bottom:10px;">📞</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.05rem;">Phone Verified</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">PVA accounts with real phone verification</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                <div class="gmail-why-card" style="background:white; border-radius:20px; padding:1.8rem 1.2rem; text-align:center; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04); box-shadow:0 4px 15px rgba(0,0,0,0.04); height:100%;">
                    <div style="font-size:2.5rem; color:#023b45; margin-bottom:10px;">⚡</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.05rem;">Instant Delivery</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">Receive accounts within minutes of ordering</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="250">
                <div class="gmail-why-card" style="background:white; border-radius:20px; padding:1.8rem 1.2rem; text-align:center; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04); box-shadow:0 4px 15px rgba(0,0,0,0.04); height:100%;">
                    <div style="font-size:2.5rem; color:#023b45; margin-bottom:10px;">🔒</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.05rem;">Secure Access</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">Bank-level security for all accounts</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                <div class="gmail-why-card" style="background:white; border-radius:20px; padding:1.8rem 1.2rem; text-align:center; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04); box-shadow:0 4px 15px rgba(0,0,0,0.04); height:100%;">
                    <div style="font-size:2.5rem; color:#023b45; margin-bottom:10px;">📦</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.05rem;">Bulk Orders</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">Volume discounts for large orders</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="350">
                <div class="gmail-why-card" style="background:white; border-radius:20px; padding:1.8rem 1.2rem; text-align:center; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04); box-shadow:0 4px 15px rgba(0,0,0,0.04); height:100%;">
                    <div style="font-size:2.5rem; color:#023b45; margin-bottom:10px;">🔄</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.05rem;">Fast Replacement</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">24-hour replacement guarantee</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
                <div class="gmail-why-card" style="background:white; border-radius:20px; padding:1.8rem 1.2rem; text-align:center; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04); box-shadow:0 4px 15px rgba(0,0,0,0.04); height:100%;">
                    <div style="font-size:2.5rem; color:#023b45; margin-bottom:10px;">💬</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.05rem;">Premium Support</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">24/7 expert customer service</p>
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
                Premium <span style="position:relative; display:inline-block; color:#023b45;">Gmail<span style="position:absolute; bottom:2px; left:0; width:100%; height:4px; background:rgba(2,59,69,0.2); border-radius:4px;"></span></span> Features
            </h2>
            <p style="color:rgba(2,59,69,0.7); max-width:550px; margin:0 auto;">What makes our Gmail accounts exceptional</p>
        </div>
        <div class="gmail-features-grid row g-3" data-aos="fade-up" data-aos-delay="100">
            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="100">
                <div class="gmail-feature-item" style="background:white; border-radius:16px; padding:1rem 1.2rem; display:flex; align-items:center; gap:12px; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04);">
                    <i class="fas fa-user-plus" style="font-size:1.2rem; color:#023b45;"></i>
                    <span style="font-weight:600; color:#023b45; font-size:0.9rem;">Fresh Accounts</span>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="150">
                <div class="gmail-feature-item" style="background:white; border-radius:16px; padding:1rem 1.2rem; display:flex; align-items:center; gap:12px; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04);">
                    <i class="fas fa-clock" style="font-size:1.2rem; color:#023b45;"></i>
                    <span style="font-weight:600; color:#023b45; font-size:0.9rem;">Aged Accounts</span>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="200">
                <div class="gmail-feature-item" style="background:white; border-radius:16px; padding:1rem 1.2rem; display:flex; align-items:center; gap:12px; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04);">
                    <i class="fas fa-key" style="font-size:1.2rem; color:#023b45;"></i>
                    <span style="font-weight:600; color:#023b45; font-size:0.9rem;">Recovery Information</span>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="250">
                <div class="gmail-feature-item" style="background:white; border-radius:16px; padding:1rem 1.2rem; display:flex; align-items:center; gap:12px; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04);">
                    <i class="fas fa-lock" style="font-size:1.2rem; color:#023b45;"></i>
                    <span style="font-weight:600; color:#023b45; font-size:0.9rem;">Secure Login</span>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="300">
                <div class="gmail-feature-item" style="background:white; border-radius:16px; padding:1rem 1.2rem; display:flex; align-items:center; gap:12px; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04);">
                    <i class="fas fa-chart-line" style="font-size:1.2rem; color:#023b45;"></i>
                    <span style="font-weight:600; color:#023b45; font-size:0.9rem;">High Success Rate</span>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="350">
                <div class="gmail-feature-item" style="background:white; border-radius:16px; padding:1rem 1.2rem; display:flex; align-items:center; gap:12px; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04);">
                    <i class="fas fa-globe" style="font-size:1.2rem; color:#023b45;"></i>
                    <span style="font-weight:600; color:#023b45; font-size:0.9rem;">Country Options</span>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="400">
                <div class="gmail-feature-item" style="background:white; border-radius:16px; padding:1rem 1.2rem; display:flex; align-items:center; gap:12px; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04);">
                    <i class="fas fa-briefcase" style="font-size:1.2rem; color:#023b45;"></i>
                    <span style="font-weight:600; color:#023b45; font-size:0.9rem;">Business Ready</span>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="flip-up" data-aos-delay="450">
                <div class="gmail-feature-item" style="background:white; border-radius:16px; padding:1rem 1.2rem; display:flex; align-items:center; gap:12px; transition:all 0.3s; border:1px solid rgba(2,59,69,0.04);">
                    <i class="fas fa-boxes" style="font-size:1.2rem; color:#023b45;"></i>
                    <span style="font-weight:600; color:#023b45; font-size:0.9rem;">Bulk Availability</span>
                </div>
            </div>
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
            <p style="color:rgba(2,59,69,0.7); max-width:550px; margin:0 auto;">Order your Gmail accounts in minutes</p>
        </div>
        <div class="gmail-order-steps row g-4" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-6 col-lg-3" data-aos="fade-right" data-aos-delay="100">
                <div class="gmail-order-step" style="background:white; border-radius:20px; padding:1.8rem; text-align:center; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="width:60px; height:60px; background:#023b45; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 12px; font-size:1.6rem; font-weight:800; color:white;">1</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.1rem;">Select Gmail Package</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">Choose your preferred Gmail account type</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-right" data-aos-delay="150">
                <div class="gmail-order-step" style="background:white; border-radius:20px; padding:1.8rem; text-align:center; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="width:60px; height:60px; background:#023b45; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 12px; font-size:1.6rem; font-weight:800; color:white;">2</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.1rem;">Choose Quantity</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">Select the number of accounts you need</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-right" data-aos-delay="200">
                <div class="gmail-order-step" style="background:white; border-radius:20px; padding:1.8rem; text-align:center; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="width:60px; height:60px; background:#023b45; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 12px; font-size:1.6rem; font-weight:800; color:white;">3</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.1rem;">Complete Order</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">Secure checkout via our payment partners</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-right" data-aos-delay="250">
                <div class="gmail-order-step" style="background:white; border-radius:20px; padding:1.8rem; text-align:center; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="width:60px; height:60px; background:#023b45; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 12px; font-size:1.6rem; font-weight:800; color:white;">4</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.1rem;">Receive Delivery</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">Get your Gmail accounts instantly</p>
                </div>
            </div>
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
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="gmail-dashboard-card" style="background:white; border-radius:20px; padding:1.8rem; box-shadow:0 8px 25px rgba(0,0,0,0.05);">
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px;">
                        <span style="font-weight:600; color:#023b45;">Quality Score</span>
                        <span style="font-weight:800; color:#023b45; font-size:1.2rem;">98%</span>
                    </div>
                    <div style="height:8px; background:rgba(2,59,69,0.1); border-radius:10px; overflow:hidden;">
                        <div style="height:100%; width:98%; background:linear-gradient(90deg,#2ecc71,#27ae60); border-radius:10px; transition:width 1.5s ease;"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
                <div class="gmail-dashboard-card" style="background:white; border-radius:20px; padding:1.8rem; box-shadow:0 8px 25px rgba(0,0,0,0.05);">
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px;">
                        <span style="font-weight:600; color:#023b45;">Verification Rate</span>
                        <span style="font-weight:800; color:#023b45; font-size:1.2rem;">95%</span>
                    </div>
                    <div style="height:8px; background:rgba(2,59,69,0.1); border-radius:10px; overflow:hidden;">
                        <div style="height:100%; width:95%; background:linear-gradient(90deg,#3498db,#2980b9); border-radius:10px; transition:width 1.5s ease;"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="gmail-dashboard-card" style="background:white; border-radius:20px; padding:1.8rem; box-shadow:0 8px 25px rgba(0,0,0,0.05);">
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px;">
                        <span style="font-weight:600; color:#023b45;">Delivery Success</span>
                        <span style="font-weight:800; color:#023b45; font-size:1.2rem;">99.8%</span>
                    </div>
                    <div style="height:8px; background:rgba(2,59,69,0.1); border-radius:10px; overflow:hidden;">
                        <div style="height:100%; width:99.8%; background:linear-gradient(90deg,#9b59b6,#8e44ad); border-radius:10px; transition:width 1.5s ease;"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="250">
                <div class="gmail-dashboard-card" style="background:white; border-radius:20px; padding:1.8rem; box-shadow:0 8px 25px rgba(0,0,0,0.05);">
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px;">
                        <span style="font-weight:600; color:#023b45;">Customer Satisfaction</span>
                        <span style="font-weight:800; color:#023b45; font-size:1.2rem;">99%</span>
                    </div>
                    <div style="height:8px; background:rgba(2,59,69,0.1); border-radius:10px; overflow:hidden;">
                        <div style="height:100%; width:99%; background:linear-gradient(90deg,#f1c40f,#f39c12); border-radius:10px; transition:width 1.5s ease;"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="gmail-dashboard-card" style="background:white; border-radius:20px; padding:1.8rem; box-shadow:0 8px 25px rgba(0,0,0,0.05);">
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px;">
                        <span style="font-weight:600; color:#023b45;">Support Performance</span>
                        <span style="font-weight:800; color:#023b45; font-size:1.2rem;">97%</span>
                    </div>
                    <div style="height:8px; background:rgba(2,59,69,0.1); border-radius:10px; overflow:hidden;">
                        <div style="height:100%; width:97%; background:linear-gradient(90deg,#1abc9c,#16a085); border-radius:10px; transition:width 1.5s ease;"></div>
                    </div>
                </div>
            </div>
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
            <!-- Review 1-10 -->
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="gmail-review-card" style="background:white; border-radius:20px; padding:1.5rem; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;">
                    <div style="display:flex; align-items:center; gap:12px; margin-bottom:10px;">
                        <div style="width:44px; height:44px; border-radius:50%; background:#023b45; color:white; display:flex; align-items:center; justify-content:center; font-weight:700;">JD</div>
                        <div>
                            <div style="font-weight:700; color:#023b45;">John Doe</div>
                            <div style="font-size:0.7rem; color:rgba(2,59,69,0.4);">United States</div>
                        </div>
                    </div>
                    <div style="color:#f5b042; font-size:0.8rem; letter-spacing:1px; margin-bottom:8px;">★★★★★</div>
                    <p style="font-size:0.9rem; color:rgba(2,59,69,0.75); line-height:1.6;">"Best Gmail accounts I've ever purchased. Quality outstanding and delivery was instant."</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="150">
                <div class="gmail-review-card" style="background:white; border-radius:20px; padding:1.5rem; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;">
                    <div style="display:flex; align-items:center; gap:12px; margin-bottom:10px;">
                        <div style="width:44px; height:44px; border-radius:50%; background:#023b45; color:white; display:flex; align-items:center; justify-content:center; font-weight:700;">SM</div>
                        <div>
                            <div style="font-weight:700; color:#023b45;">Sarah Miller</div>
                            <div style="font-size:0.7rem; color:rgba(2,59,69,0.4);">United Kingdom</div>
                        </div>
                    </div>
                    <div style="color:#f5b042; font-size:0.8rem; letter-spacing:1px; margin-bottom:8px;">★★★★★</div>
                    <p style="font-size:0.9rem; color:rgba(2,59,69,0.75); line-height:1.6;">"Great service! The aged Gmail accounts work perfectly for my business needs."</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="gmail-review-card" style="background:white; border-radius:20px; padding:1.5rem; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;">
                    <div style="display:flex; align-items:center; gap:12px; margin-bottom:10px;">
                        <div style="width:44px; height:44px; border-radius:50%; background:#023b45; color:white; display:flex; align-items:center; justify-content:center; font-weight:700;">MK</div>
                        <div>
                            <div style="font-weight:700; color:#023b45;">Michael K.</div>
                            <div style="font-size:0.7rem; color:rgba(2,59,69,0.4);">Canada</div>
                        </div>
                    </div>
                    <div style="color:#f5b042; font-size:0.8rem; letter-spacing:1px; margin-bottom:8px;">★★★★★</div>
                    <p style="font-size:0.9rem; color:rgba(2,59,69,0.75); line-height:1.6;">"Excellent quality Gmail accounts. The support team is very responsive and helpful."</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="250">
                <div class="gmail-review-card" style="background:white; border-radius:20px; padding:1.5rem; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;">
                    <div style="display:flex; align-items:center; gap:12px; margin-bottom:10px;">
                        <div style="width:44px; height:44px; border-radius:50%; background:#023b45; color:white; display:flex; align-items:center; justify-content:center; font-weight:700;">AR</div>
                        <div>
                            <div style="font-weight:700; color:#023b45;">Anna Rodriguez</div>
                            <div style="font-size:0.7rem; color:rgba(2,59,69,0.4);">Spain</div>
                        </div>
                    </div>
                    <div style="color:#f5b042; font-size:0.8rem; letter-spacing:1px; margin-bottom:8px;">★★★★★</div>
                    <p style="font-size:0.9rem; color:rgba(2,59,69,0.75); line-height:1.6;">"Fast delivery and premium quality accounts. Perfect for my marketing campaigns."</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="gmail-review-card" style="background:white; border-radius:20px; padding:1.5rem; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;">
                    <div style="display:flex; align-items:center; gap:12px; margin-bottom:10px;">
                        <div style="width:44px; height:44px; border-radius:50%; background:#023b45; color:white; display:flex; align-items:center; justify-content:center; font-weight:700;">DW</div>
                        <div>
                            <div style="font-weight:700; color:#023b45;">David Wilson</div>
                            <div style="font-size:0.7rem; color:rgba(2,59,69,0.4);">Australia</div>
                        </div>
                    </div>
                    <div style="color:#f5b042; font-size:0.8rem; letter-spacing:1px; margin-bottom:8px;">★★★★★</div>
                    <p style="font-size:0.9rem; color:rgba(2,59,69,0.75); line-height:1.6;">"Highly recommended! The aged Gmail accounts have great reputation and work perfectly."</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="350">
                <div class="gmail-review-card" style="background:white; border-radius:20px; padding:1.5rem; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;">
                    <div style="display:flex; align-items:center; gap:12px; margin-bottom:10px;">
                        <div style="width:44px; height:44px; border-radius:50%; background:#023b45; color:white; display:flex; align-items:center; justify-content:center; font-weight:700;">LC</div>
                        <div>
                            <div style="font-weight:700; color:#023b45;">Lisa Chen</div>
                            <div style="font-size:0.7rem; color:rgba(2,59,69,0.4);">Singapore</div>
                        </div>
                    </div>
                    <div style="color:#f5b042; font-size:0.8rem; letter-spacing:1px; margin-bottom:8px;">★★★★★</div>
                    <p style="font-size:0.9rem; color:rgba(2,59,69,0.75); line-height:1.6;">"Great value for money. The accounts are high quality and service is professional."</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="gmail-review-card" style="background:white; border-radius:20px; padding:1.5rem; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;">
                    <div style="display:flex; align-items:center; gap:12px; margin-bottom:10px;">
                        <div style="width:44px; height:44px; border-radius:50%; background:#023b45; color:white; display:flex; align-items:center; justify-content:center; font-weight:700;">RJ</div>
                        <div>
                            <div style="font-weight:700; color:#023b45;">Robert James</div>
                            <div style="font-size:0.7rem; color:rgba(2,59,69,0.4);">United States</div>
                        </div>
                    </div>
                    <div style="color:#f5b042; font-size:0.8rem; letter-spacing:1px; margin-bottom:8px;">★★★★★</div>
                    <p style="font-size:0.9rem; color:rgba(2,59,69,0.75); line-height:1.6;">"The best Gmail account provider I've found. Quality is consistently excellent."</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="450">
                <div class="gmail-review-card" style="background:white; border-radius:20px; padding:1.5rem; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;">
                    <div style="display:flex; align-items:center; gap:12px; margin-bottom:10px;">
                        <div style="width:44px; height:44px; border-radius:50%; background:#023b45; color:white; display:flex; align-items:center; justify-content:center; font-weight:700;">EP</div>
                        <div>
                            <div style="font-weight:700; color:#023b45;">Emily Parker</div>
                            <div style="font-size:0.7rem; color:rgba(2,59,69,0.4);">United Kingdom</div>
                        </div>
                    </div>
                    <div style="color:#f5b042; font-size:0.8rem; letter-spacing:1px; margin-bottom:8px;">★★★★★</div>
                    <p style="font-size:0.9rem; color:rgba(2,59,69,0.75); line-height:1.6;">"Amazing service! They helped me with a bulk order and everything went smoothly."</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="500">
                <div class="gmail-review-card" style="background:white; border-radius:20px; padding:1.5rem; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;">
                    <div style="display:flex; align-items:center; gap:12px; margin-bottom:10px;">
                        <div style="width:44px; height:44px; border-radius:50%; background:#023b45; color:white; display:flex; align-items:center; justify-content:center; font-weight:700;">CG</div>
                        <div>
                            <div style="font-weight:700; color:#023b45;">Carlos Garcia</div>
                            <div style="font-size:0.7rem; color:rgba(2,59,69,0.4);">Mexico</div>
                        </div>
                    </div>
                    <div style="color:#f5b042; font-size:0.8rem; letter-spacing:1px; margin-bottom:8px;">★★★★★</div>
                    <p style="font-size:0.9rem; color:rgba(2,59,69,0.75); line-height:1.6;">"Excellent quality Gmail accounts. Will definitely order again for my business."</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="550">
                <div class="gmail-review-card" style="background:white; border-radius:20px; padding:1.5rem; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;">
                    <div style="display:flex; align-items:center; gap:12px; margin-bottom:10px;">
                        <div style="width:44px; height:44px; border-radius:50%; background:#023b45; color:white; display:flex; align-items:center; justify-content:center; font-weight:700;">AK</div>
                        <div>
                            <div style="font-weight:700; color:#023b45;">Aisha Khan</div>
                            <div style="font-size:0.7rem; color:rgba(2,59,69,0.4);">UAE</div>
                        </div>
                    </div>
                    <div style="color:#f5b042; font-size:0.8rem; letter-spacing:1px; margin-bottom:8px;">★★★★★</div>
                    <p style="font-size:0.9rem; color:rgba(2,59,69,0.75); line-height:1.6;">"Great Gmail accounts for business use. The support team is very professional."</p>
                </div>
            </div>
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
            <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="100">
                <div class="gmail-trust-card" style="background:white; border-radius:16px; padding:1.2rem; text-align:center; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;">
                    <div style="font-size:2.2rem; color:#023b45; margin-bottom:6px;">🔒</div>
                    <div style="font-weight:700; color:#023b45; font-size:0.85rem;">Secure Transactions</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="150">
                <div class="gmail-trust-card" style="background:white; border-radius:16px; padding:1.2rem; text-align:center; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;">
                    <div style="font-size:2.2rem; color:#023b45; margin-bottom:6px;">✅</div>
                    <div style="font-weight:700; color:#023b45; font-size:0.85rem;">Verified Quality</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                <div class="gmail-trust-card" style="background:white; border-radius:16px; padding:1.2rem; text-align:center; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;">
                    <div style="font-size:2.2rem; color:#023b45; margin-bottom:6px;">🛡️</div>
                    <div style="font-weight:700; color:#023b45; font-size:0.85rem;">Customer Protection</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="250">
                <div class="gmail-trust-card" style="background:white; border-radius:16px; padding:1.2rem; text-align:center; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;">
                    <div style="font-size:2.2rem; color:#023b45; margin-bottom:6px;">⭐</div>
                    <div style="font-weight:700; color:#023b45; font-size:0.85rem;">Trusted Service</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2" data-aos="zoom-in" data-aos-delay="300">
                <div class="gmail-trust-card" style="background:white; border-radius:16px; padding:1.2rem; text-align:center; box-shadow:0 4px 15px rgba(0,0,0,0.04); transition:all 0.3s; height:100%;">
                    <div style="font-size:2.2rem; color:#023b45; margin-bottom:6px;">⚡</div>
                    <div style="font-weight:700; color:#023b45; font-size:0.85rem;">Fast Delivery</div>
                </div>
            </div>
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
                    Ready To Order <span style="color:#B7A08B;">Premium Gmail Accounts</span>?
                </h2>
                <p style="font-size:1.1rem; color:rgba(254,250,247,0.8); margin:0 auto 30px;">
                    Get high-quality Gmail accounts with fast delivery and professional support.
                </p>
                <div class="gmail-cta-btn-group d-flex flex-wrap justify-content-center gap-3">
                    <a href="#gmailProducts" class="gmail-cta-primary" style="background:#B7A08B; color:#023b45; border:none; padding:14px 38px; border-radius:60px; font-weight:700; font-size:0.95rem; transition:all 0.3s; text-decoration:none; display:inline-flex; align-items:center; gap:10px;">
                        <i class="fas fa-shopping-cart"></i> Order Now
                    </a>
                    <a href="#" class="gmail-cta-secondary" style="background:transparent; color:#FEFAF7; border:2px solid rgba(254,250,247,0.3); padding:12px 34px; border-radius:60px; font-weight:600; font-size:0.95rem; transition:all 0.3s; text-decoration:none; display:inline-flex; align-items:center; gap:8px;">
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
    /* ========== UNIQUE GMAIL PAGE STYLES ========== */
    .section-padding {
        padding: 80px 0;
    }
    
    /* Hero hover effects */
    .gmail-hero-btn-primary:hover {
        background: #012b34 !important;
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(2,59,69,0.3);
    }
    .gmail-hero-btn-secondary:hover {
        border-color: #023b45 !important;
        background: rgba(2,59,69,0.06);
        transform: translateY(-3px);
    }
    
    /* Type card hover */
    .gmail-type-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 40px rgba(0,0,0,0.10) !important;
    }
    .gmail-type-btn:hover {
        background: #012b34 !important;
        transform: translateX(4px);
        box-shadow: 0 8px 20px rgba(2,59,69,0.2);
    }
    
    /* Product card hover */
    .gmail-product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 40px rgba(0,0,0,0.12) !important;
    }
    .gmail-product-cart-btn:hover {
        background: #012b34 !important;
        transform: scale(0.97);
    }
    .gmail-product-detail-btn:hover {
        background: rgba(2,59,69,0.06) !important;
        border-color: #023b45 !important;
    }
    
    /* Why choose cards hover */
    .gmail-why-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.08) !important;
        border-color: #023b45 !important;
    }
    
    /* Feature items hover */
    .gmail-feature-item:hover {
        transform: translateX(6px);
        border-color: #023b45 !important;
        box-shadow: 0 4px 15px rgba(0,0,0,0.06) !important;
    }
    
    /* Order steps hover */
    .gmail-order-step:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 40px rgba(0,0,0,0.10) !important;
    }
    
    /* Dashboard cards hover */
    .gmail-dashboard-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.08) !important;
    }
    
    /* Review cards hover */
    .gmail-review-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.08) !important;
        border-color: #023b45 !important;
    }
    
    /* FAQ toggle hover */
    .gmail-faq-toggle:hover {
        background: rgba(2,59,69,0.02) !important;
    }
    .gmail-faq-toggle:not(.collapsed) {
        background: rgba(2,59,69,0.04) !important;
    }
    .gmail-faq-toggle:not(.collapsed) span i {
        transform: rotate(180deg);
    }
    
    /* Trust cards hover */
    .gmail-trust-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.08) !important;
        border-color: #023b45 !important;
    }
    
    /* CTA buttons hover */
    .gmail-cta-primary:hover {
        background: #a08b77 !important;
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(183,160,139,0.4);
    }
    .gmail-cta-secondary:hover {
        border-color: #FEFAF7 !important;
        background: rgba(254,250,247,0.08);
        transform: translateY(-3px);
    }
    
    /* Responsive */
    @media (max-width: 991px) {
        .section-padding {
            padding: 60px 0;
        }
        .gmail-hero-headline {
            font-size: 2.8rem !important;
        }
        .gmail-hero-stats {
            gap: 16px !important;
        }
        .gmail-stat-number {
            font-size: 1.8rem !important;
        }
    }
    
    @media (max-width: 767px) {
        .section-padding {
            padding: 40px 0;
        }
        .gmail-hero-headline {
            font-size: 2.2rem !important;
        }
        .gmail-hero-stats {
            gap: 12px !important;
        }
        .gmail-stat-number {
            font-size: 1.4rem !important;
        }
        .gmail-cta-btn-group {
            flex-direction: column;
            align-items: center;
        }
        .gmail-cta-btn-group a {
            width: 100%;
            max-width: 280px;
            justify-content: center;
        }
        .gmail-product-btns {
            flex-direction: column;
        }
        .gmail-product-btns button {
            width: 100%;
        }
        .gmail-dashboard-grid .col-md-6 {
            padding: 0 6px;
        }
        .gmail-reviews-grid .col-md-6 {
            padding: 0 6px;
        }
        .gmail-why-grid .col-md-6 {
            padding: 0 6px;
        }
        .gmail-features-grid .col-sm-6 {
            padding: 0 6px;
        }
        .gmail-trust-grid .col-md-6 {
            padding: 0 6px;
        }
        .gmail-types-grid .col-md-6 {
            padding: 0 6px;
        }
        .gmail-products-grid .col-md-6 {
            padding: 0 6px;
        }
        .gmail-order-steps .col-md-6 {
            padding: 0 6px;
        }
        .gmail-faq-toggle {
            font-size: 0.85rem !important;
            padding: 14px 16px !important;
        }
        .gmail-faq-body {
            font-size: 0.85rem !important;
            padding: 0 16px 16px !important;
        }
    }
    
    @media (max-width: 575px) {
        .gmail-hero-headline {
            font-size: 1.8rem !important;
        }
        .gmail-type-card {
            padding: 1.2rem !important;
        }
        .gmail-product-card {
            padding: 0 !important;
        }
        .gmail-product-card h4 {
            font-size: 0.9rem !important;
        }
        .gmail-product-card .gmail-product-cart-btn,
        .gmail-product-card .gmail-product-detail-btn {
            font-size: 0.65rem !important;
            padding: 4px 10px !important;
        }
        .gmail-why-card {
            padding: 1rem !important;
        }
        .gmail-why-card h4 {
            font-size: 0.9rem !important;
        }
        .gmail-why-card p {
            font-size: 0.75rem !important;
        }
        .gmail-review-card {
            padding: 1rem !important;
        }
        .gmail-review-card p {
            font-size: 0.8rem !important;
        }
        .gmail-dashboard-card {
            padding: 1rem !important;
        }
        .gmail-dashboard-card span {
            font-size: 0.9rem !important;
        }
        .gmail-order-step {
            padding: 1rem !important;
        }
        .gmail-order-step h4 {
            font-size: 0.95rem !important;
        }
        .gmail-trust-card {
            padding: 0.8rem !important;
        }
        .gmail-trust-card div:first-child {
            font-size: 1.8rem !important;
        }
        .gmail-trust-card div:last-child {
            font-size: 0.7rem !important;
        }
    }
</style>

<!-- =========================================================
   SCRIPTS FOR INTERACTIVE FEATURES
   ========================================================= -->
<script>
    (function() {
        'use strict';
        
        // ============================
        // AOS INITIALIZATION
        // ============================
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 700,
                once: true,
                offset: 20,
                easing: 'ease-out-cubic',
                mirror: false,
            });
        }
        
        // ============================
        // COUNTER ANIMATIONS
        // ============================
        function startGmailCounters() {
            const counters = document.querySelectorAll('[data-gmail-counter]');
            counters.forEach(el => {
                const target = parseInt(el.getAttribute('data-gmail-counter'));
                if (isNaN(target) || target <= 0) return;
                
                let current = 0;
                const duration = 2000;
                const steps = 60;
                const increment = target / steps;
                let step = 0;
                
                const timer = setInterval(() => {
                    step++;
                    current += increment;
                    if (step >= steps) {
                        el.innerText = target + (target === 99 ? '%' : target === 24 ? '' : '');
                        clearInterval(timer);
                    } else {
                        el.innerText = Math.floor(current);
                    }
                }, duration / steps);
            });
        }
        
        // Use Intersection Observer for counters
        const counterObserver = new IntersectionObserver((entries) => {
            let shouldStart = false;
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    shouldStart = true;
                }
            });
            if (shouldStart) {
                startGmailCounters();
                counterObserver.disconnect();
            }
        }, { threshold: 0.3 });
        
        const heroSection = document.getElementById('gmailHeroMaster');
        if (heroSection) {
            counterObserver.observe(heroSection);
        }
        
        // ============================
        // FAQ ACCORDION TOGGLE - Fix chevron rotation
        // ============================
        document.querySelectorAll('.gmail-faq-toggle').forEach(btn => {
            btn.addEventListener('click', function() {
                const chevron = this.querySelector('span i');
                if (chevron) {
                    // Check if the target collapse is shown or hidden
                    const targetId = this.getAttribute('data-bs-target');
                    if (targetId) {
                        const target = document.querySelector(targetId);
                        if (target) {
                            // Toggle will happen via Bootstrap, we check after a small delay
                            setTimeout(() => {
                                if (target.classList.contains('show')) {
                                    chevron.style.transform = 'rotate(180deg)';
                                } else {
                                    chevron.style.transform = 'rotate(0deg)';
                                }
                            }, 50);
                        }
                    }
                }
            });
        });
        
        // Initialize chevron states
        document.querySelectorAll('.gmail-faq-toggle').forEach(btn => {
            const chevron = btn.querySelector('span i');
            if (chevron) {
                const targetId = btn.getAttribute('data-bs-target');
                if (targetId) {
                    const target = document.querySelector(targetId);
                    if (target && target.classList.contains('show')) {
                        chevron.style.transform = 'rotate(180deg)';
                    } else {
                        chevron.style.transform = 'rotate(0deg)';
                    }
                }
            }
        });
        
        // ============================
        // ADD TO CART BUTTONS
        // ============================
        document.querySelectorAll('.gmail-product-cart-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const originalText = this.innerHTML;
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Adding...';
                this.disabled = true;
                
                setTimeout(() => {
                    this.innerHTML = '<i class="fas fa-check"></i> Added!';
                    this.style.background = '#27ae60';
                    
                    setTimeout(() => {
                        this.innerHTML = originalText;
                        this.style.background = '#023b45';
                        this.disabled = false;
                    }, 1500);
                }, 800);
            });
        });
        
        // ============================
        // SMOOTH SCROLL
        // ============================
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                const target = document.querySelector(targetId);
                if (target) {
                    e.preventDefault();
                    const top = target.getBoundingClientRect().top + window.pageYOffset - 80;
                    window.scrollTo({ top, behavior: 'smooth' });
                }
            });
        });
        
        console.log('✅ Premium Gmail Accounts Page loaded successfully.');
    })();
</script>
<?php

include 'footer.php';
?>
</body>
</html>