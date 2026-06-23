<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Premium Product Cards</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- AOS Scroll Animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css?v=1.0">

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
            CARD 1: GMAIL
            ========================================= -->
            <div class="col" data-product-id="gmail">
                <div class="attract-card">
                    <div class="badge-extra badge-best"><i class="fas fa-star"></i> Best Seller</div>
                    <div class="card-top-image">
                        <img src="../Image/gmail.jpg" alt="Gmail Accounts">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title"><em>Gmail Accounts</em></h3>
                        <p class="short-desc"><em>Premium GSuite ready, aged profiles, instant access</em></p>
                        <div class="product-rating">
                            <div class="star-rating" data-product="gmail"></div>
                            <span class="rating-count" data-product="gmail">(128 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="current-price"><span class="price-unit">$</span>40</span>
                            <span class="old-price">$55</span>
                            <span class="discount-badge">-27%</span>
                            <span class="qty-badge"><i class="fas fa-database"></i> 10 Accounts</span>
                        </div>
                        <div class="stock-info"><i class="fas fa-check-circle in-stock"></i> In Stock — <strong>245</strong> available</div>
                        <div class="features-mega">
                            <div class="feat"><i class="fas fa-check-circle"></i> Fresh Accounts</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Verified Accounts</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Secure Login</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Fast Delivery</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> High Quality</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> 24H Replacement</div>
                        </div>
                        <div class="btn-group-premium">
                            <button class="btn-outline-details detailBtn" data-name="Gmail Accounts"><i class="fas fa-eye"></i> Details</button>
                            <button class="btn-gradient-cart addCartBtn" data-name="Gmail Accounts" data-price="40"><i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- =========================================
            CARD 2: FACEBOOK
            ========================================= -->
            <div class="col" data-product-id="facebook">
                <div class="attract-card">
                    <div class="badge-extra badge-hot"><i class="fas fa-fire"></i> Hot Deal</div>
                    <div class="card-top-image">
                        <img src="../Image/facebook.jpg" alt="Facebook Accounts">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title"><em>Facebook Accounts</em></h3>
                        <p class="short-desc"><em>Aged profiles, activity history, ready for ads &amp; business</em></p>
                        <div class="product-rating">
                            <div class="star-rating" data-product="facebook"></div>
                            <span class="rating-count" data-product="facebook">(215 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="current-price"><span class="price-unit">$</span>50</span>
                            <span class="old-price">$70</span>
                            <span class="discount-badge">-29%</span>
                            <span class="qty-badge"><i class="fas fa-database"></i> 10 Accounts</span>
                        </div>
                        <div class="stock-info"><i class="fas fa-check-circle in-stock"></i> In Stock — <strong>180</strong> available</div>
                        <div class="features-mega">
                            <div class="feat"><i class="fas fa-check-circle"></i> Verified Profiles</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Aged Accounts</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Business Ready</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Bulk Available</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Activity History</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> High Trust Score</div>
                        </div>
                        <div class="btn-group-premium">
                            <button class="btn-outline-details detailBtn" data-name="Facebook Accounts"><i class="fas fa-eye"></i> Details</button>
                            <button class="btn-gradient-cart addCartBtn" data-name="Facebook Accounts" data-price="50"><i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- =========================================
            CARD 3: INSTAGRAM
            ========================================= -->
            <div class="col" data-product-id="instagram">
                <div class="attract-card">
                    <div class="badge-extra badge-prem"><i class="fas fa-crown"></i> Premium</div>
                    <div class="card-top-image">
                        <img src="../Image/instagram.jpg" alt="Instagram Accounts">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title"><em>Instagram Accounts</em></h3>
                        <p class="short-desc"><em>High engagement, real followers potential, profile ready</em></p>
                        <div class="product-rating">
                            <div class="star-rating" data-product="instagram"></div>
                            <span class="rating-count" data-product="instagram">(189 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="current-price"><span class="price-unit">$</span>50</span>
                            <span class="old-price">$65</span>
                            <span class="discount-badge">-23%</span>
                            <span class="qty-badge"><i class="fas fa-database"></i> 10 Accounts</span>
                        </div>
                        <div class="stock-info"><i class="fas fa-check-circle in-stock"></i> In Stock — <strong>156</strong> available</div>
                        <div class="features-mega">
                            <div class="feat"><i class="fas fa-check-circle"></i> PVA Accounts</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Marketing Ready</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Aged Accounts</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Bulk Purchase</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Real Followers</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Profile Picture</div>
                        </div>
                        <div class="btn-group-premium">
                            <button class="btn-outline-details detailBtn" data-name="Instagram Accounts"><i class="fas fa-eye"></i> Details</button>
                            <button class="btn-gradient-cart addCartBtn" data-name="Instagram Accounts" data-price="50"><i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- =========================================
            CARD 4: TWITTER X
            ========================================= -->
            <div class="col" data-product-id="twitter">
                <div class="attract-card">
                    <div class="badge-extra badge-trend"><i class="fas fa-arrow-trend-up"></i> Trending</div>
                    <div class="card-top-image">
                        <img src="../Image/twitter.jpg" alt="Twitter X Accounts">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title"><em>Twitter (X) Accounts</em></h3>
                        <p class="short-desc"><em>Established accounts with email access, perfect for brand</em></p>
                        <div class="product-rating">
                            <div class="star-rating" data-product="twitter"></div>
                            <span class="rating-count" data-product="twitter">(156 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="current-price"><span class="price-unit">$</span>50</span>
                            <span class="old-price">$60</span>
                            <span class="discount-badge">-17%</span>
                            <span class="qty-badge"><i class="fas fa-database"></i> 10 Accounts</span>
                        </div>
                        <div class="stock-info"><i class="fas fa-check-circle in-stock"></i> In Stock — <strong>98</strong> available</div>
                        <div class="features-mega">
                            <div class="feat"><i class="fas fa-check-circle"></i> Verified Accounts</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Aged Profiles</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Marketing Ready</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Bulk Orders</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Engagement Ready</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Email Access</div>
                        </div>
                        <div class="btn-group-premium">
                            <button class="btn-outline-details detailBtn" data-name="Twitter X Accounts"><i class="fas fa-eye"></i> Details</button>
                            <button class="btn-gradient-cart addCartBtn" data-name="Twitter X Accounts" data-price="50"><i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- =========================================
            CARD 5: TIKTOK
            ========================================= -->
            <div class="col" data-product-id="tiktok">
                <div class="attract-card">
                    <div class="badge-extra badge-new"><i class="fas fa-sparkles"></i> New</div>
                    <div class="card-top-image">
                        <img src="../Image/tiktoke.jpg" alt="TikTok Accounts">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title"><em>TikTok Accounts</em></h3>
                        <p class="short-desc"><em>Viral-ready profiles, high engagement potential, verified</em></p>
                        <div class="product-rating">
                            <div class="star-rating" data-product="tiktok"></div>
                            <span class="rating-count" data-product="tiktok">(94 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="current-price"><span class="price-unit">$</span>60</span>
                            <span class="old-price">$80</span>
                            <span class="discount-badge">-25%</span>
                            <span class="qty-badge"><i class="fas fa-database"></i> 10 Accounts</span>
                        </div>
                        <div class="stock-info"><i class="fas fa-check-circle in-stock"></i> In Stock — <strong>67</strong> available</div>
                        <div class="features-mega">
                            <div class="feat"><i class="fas fa-check-circle"></i> PVA Accounts</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Aged Profiles</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> High Engagement</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Viral Ready</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Email Access</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Bulk Orders</div>
                        </div>
                        <div class="btn-group-premium">
                            <button class="btn-outline-details detailBtn" data-name="TikTok Accounts"><i class="fas fa-eye"></i> Details</button>
                            <button class="btn-gradient-cart addCartBtn" data-name="TikTok Accounts" data-price="60"><i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- =========================================
            CARD 6: LINKEDIN
            ========================================= -->
            <div class="col" data-product-id="linkedin">
                <div class="attract-card">
                    <div class="badge-extra badge-prem"><i class="fas fa-briefcase"></i> Professional</div>
                    <div class="card-top-image">
                        <img src="../Image/instagram.jpg" alt="LinkedIn Accounts">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title"><em>LinkedIn Accounts</em></h3>
                        <p class="short-desc"><em>Professional profiles, network ready, premium access</em></p>
                        <div class="product-rating">
                            <div class="star-rating" data-product="linkedin"></div>
                            <span class="rating-count" data-product="linkedin">(112 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="current-price"><span class="price-unit">$</span>55</span>
                            <span class="old-price">$75</span>
                            <span class="discount-badge">-27%</span>
                            <span class="qty-badge"><i class="fas fa-database"></i> 10 Accounts</span>
                        </div>
                        <div class="stock-info"><i class="fas fa-check-circle in-stock"></i> In Stock — <strong>43</strong> available</div>
                        <div class="features-mega">
                            <div class="feat"><i class="fas fa-check-circle"></i> Verified Profiles</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Aged Accounts</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Network Ready</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Professional Bio</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Email Access</div>
                            <div class="feat"><i class="fas fa-check-circle"></i> Bulk Orders</div>
                        </div>
                        <div class="btn-group-premium">
                            <button class="btn-outline-details detailBtn" data-name="LinkedIn Accounts"><i class="fas fa-eye"></i> Details</button>
                            <button class="btn-gradient-cart addCartBtn" data-name="LinkedIn Accounts" data-price="55"><i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span></button>
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
                                <img id="detailProductImage" src="../Image/gmail.jpg" alt="Product Detail">
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
                    const name = this.dataset.name;
                    let productKey = '';
                    if (name.includes('Gmail')) productKey = 'gmail';
                    else if (name.includes('Facebook')) productKey = 'facebook';
                    else if (name.includes('Instagram')) productKey = 'instagram';
                    else if (name.includes('Twitter')) productKey = 'twitter';
                    else if (name.includes('TikTok')) productKey = 'tiktok';
                    else if (name.includes('LinkedIn')) productKey = 'linkedin';
                    else if (name.includes('Outlook')) productKey = 'outlook';
                    else if (name.includes('Threads')) productKey = 'threads';
                    else if (name.includes('Telegram')) productKey = 'telegram';

                    const data = productData[productKey];
                    if (!data) return;

                    modalProductName.textContent = data.name;
                    modalProductDesc.textContent = data.desc;
                    modalProductPrice.textContent = '$' + data.price;
                    modalOldPrice.textContent = '$' + data.oldPrice;
                    modalDiscount.textContent = data.discount;
                    modalStock.textContent = data.stock + ' available';
                    modalRating.textContent = data.avg.toFixed(1);
                    modalReviews.textContent = data.total;
                    modalProductTitle.textContent = data.name + ' Package';

                    // Update detail image based on product
                    const detailImage = document.getElementById('detailProductImage');
                    if (detailImage) {
                        const imageMap = {
                            'gmail': '../Image/gmail.jpg',
                            'facebook': '../Image/facebook.jpg',
                            'instagram': '../Image/instagram.jpg',
                            'twitter': '../Image/twitter.jpg',
                            'tiktok': '../Image/tiktoke.jpg',
                            'outlook': '../Image/outlook.jpg',
                            'telegram': '../Image/telegram.jpg',
                            'threads': '../Image/threads.png'
                        };
                        detailImage.src = imageMap[productKey] || '../Image/gmail.jpg';
                    }

                    detailModal.show();
                });
            });

            // Modal Add to Cart — calls server, updates counter
            document.getElementById('modalAddToCartBtn').addEventListener('click', function() {
                const name = document.getElementById('detailProductName')?.textContent || '';
                const priceText = document.getElementById('detailProductPrice')?.textContent || '0';
                const productPrice = parseFloat(priceText.replace(/[^0-9.]/g, ''));
                if (!name || !productPrice || productPrice <= 0) { showToast('Invalid product data.', 'error'); return; }
                const productId = 'modal_' + name.toLowerCase().replace(/\s+/g, '_');
                fetch('/Gmail Website/ajax/add_to_cart.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: 'id=' + encodeURIComponent(productId) + '&name=' + encodeURIComponent(name) + '&price=' + encodeURIComponent(productPrice)
                })
                .then(function(r) { return r.json(); })
                .then(function(data) {
                    if (data.success) {
                        showToast(data.message);
                        if (data.cart_count !== undefined) {
                            document.querySelectorAll('.cart-counter').forEach(function(c) {
                                c.textContent = data.cart_count;
                                if (data.cart_count > 0) c.classList.add('visible');
                                else c.classList.remove('visible');
                            });
                        }
                        var modal = bootstrap.Modal.getInstance(document.getElementById('productDetailModal'));
                        if (modal) modal.hide();
                    } else { showToast(data.message || 'Error adding product.', 'error'); }
                })
                .catch(function() { showToast('Network error. Please try again.', 'error'); });
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

</body>
</html>
