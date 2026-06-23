<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>About Us | PVA Website â€“ Premium Phone Verified Accounts</title>
    
    <!-- Bootstrap 5 + Icons + Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- AOS & Swiper -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* === CRITICAL FIX: prevent horizontal scroll on all devices === */
        html, body {
            overflow-x: hidden !important;
            width: 100%;
            position: relative;
        }
        
        body {
            overflow-x: hidden;
            max-width: 100%;
        }
        
        /* ensure all containers respect viewport width */
        .container, .container-fluid, .row, [class*="col-"] {
            max-width: 100%;
        }
        
        /* fix negative margin overflow from Bootstrap rows */
        .row {
            --bs-gutter-x: 1.5rem;
            margin-right: calc(-.5 * var(--bs-gutter-x));
            margin-left: calc(-.5 * var(--bs-gutter-x));
        }
        .row > * {
            padding-right: calc(var(--bs-gutter-x) * .5);
            padding-left: calc(var(--bs-gutter-x) * .5);
        }
        
        /* images and canvas never overflow */
        img, video, iframe, canvas {
            max-width: 100%;
            height: auto;
        }
        
        /* card text wrapping */
        .glass-card, .feature-card, .service-card, .value-card, .team-card, .testimonial-card, .contact-card, .stat-card {
            word-break: break-word;
            overflow-wrap: break-word;
        }
        
        /* preserve original card styles */
        .glass-card, .feature-card, .service-card, .value-card, .team-card, .testimonial-card, .contact-card, .stat-card {
            background: #FEFAF7;
            backdrop-filter: none;
            border: none;
            border-radius: 1.5rem;
            transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
            box-shadow: 0 15px 30px -12px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
        }
        .glass-card::before, .feature-card::before, .service-card::before, .value-card::before, .team-card::before, .testimonial-card::before, .contact-card::before, .stat-card::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 1.5rem;
            padding: 2px;
            background: linear-gradient(125deg, #023b45, #B7A08B, #023b45);
            background-size: 200% 200%;
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            opacity: 0;
            transition: opacity 0.4s;
            pointer-events: none;
        }
        .glass-card:hover::before, .feature-card:hover::before, .service-card:hover::before, .value-card:hover::before, .team-card:hover::before, .testimonial-card:hover::before, .contact-card:hover::before, .stat-card:hover::before {
            opacity: 1;
            animation: borderGlow 2.5s ease infinite;
        }
        @keyframes borderGlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .glass-card:hover, .feature-card:hover, .service-card:hover, .value-card:hover, .team-card:hover, .testimonial-card:hover, .contact-card:hover, .stat-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 40px -12px rgba(0, 0, 0, 0.15);
        }
        .hero-section {
            min-height: 80vh;
            display: flex;
            align-items: center;
            position: relative;
            background: #023b45;
            overflow: hidden;
        }
        .animated-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            overflow: hidden;
        }
        .btn-gold {
            background: #B7A08B;
            color: #023b45;
            font-weight: 700;
            padding: 12px 32px;
            border-radius: 60px;
            transition: 0.3s;
            border: none;
        }
        .btn-gold:hover {
            background: #a58b74;
            transform: scale(1.02);
            box-shadow: 0 10px 20px -5px rgba(183,160,139,0.4);
        }
        .btn-outline-gold {
            border: 2px solid #B7A08B;
            color: #023b45;
            background: transparent;
            padding: 12px 32px;
            border-radius: 60px;
            transition: 0.3s;
        }
        .btn-outline-gold:hover {
            background: #B7A08B;
            color: white;
        }
        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: #B7A08B;
            line-height: 1;
        }
        .section-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, #023b45, #B7A08B);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .process-step {
            position: relative;
            padding-left: 2.5rem;
            margin-bottom: 2rem;
        }
        .step-number {
            position: absolute;
            left: 0;
            top: 0;
            width: 40px;
            height: 40px;
            background: #B7A08B;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            color: white;
        }
        .timeline-milestone {
            position: relative;
            padding-left: 1.5rem;
            border-left: 2px solid #B7A08B;
            margin-bottom: 1.5rem;
        }
        .floating-wa, .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 55px;
            height: 55px;
            background: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.8rem;
            z-index: 1000;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            transition: 0.3s;
            cursor: pointer;
        }
        .back-to-top {
            bottom: 100px;
            background: #B7A08B;
            right: 30px;
        }
        .floating-wa:hover, .back-to-top:hover {
            transform: scale(1.1);
        }
        /* Custom Accordion Styles */
        .faq-custom-accordion {
            max-width: 900px;
            margin: 0 auto;
        }
        .faq-custom-item {
            background: #FEFAF7;
            border-radius: 1rem;
            margin-bottom: 1rem;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        .faq-custom-question {
            padding: 1.2rem 1.8rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-weight: 700;
            font-size: 1.1rem;
            color: #1a1a2e;
            background: #FEFAF7;
            transition: background 0.3s;
        }
        .faq-custom-question:hover {
            background: #f8f5f0;
        }
        .faq-custom-question i {
            transition: transform 0.3s ease;
            color: #B7A08B;
            font-size: 1.2rem;
        }
        .faq-custom-question.active i {
            transform: rotate(45deg);
        }
        .faq-custom-answer {
            max-height: 0;
            padding: 0 1.8rem;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.3s ease;
            color: #4a5568;
            line-height: 1.6;
            border-top: 1px solid transparent;
        }
        .faq-custom-question.active + .faq-custom-answer {
            max-height: 200px;
            padding: 0 1.8rem 1.2rem 1.8rem;
            border-top-color: rgba(183,160,139,0.3);
        }

        /* ========== RESPONSIVE MEDIA QUERIES (only fixes, no design changes) ========== */
        @media (max-width: 767px) {
            .hero-section h1.display-3 {
                font-size: 2.2rem !important;
                line-height: 1.2;
            }
            .hero-section .lead {
                font-size: 1rem;
            }
            .section-title {
                font-size: 1.8rem;
            }
            .stat-number {
                font-size: 2rem;
            }
            .faq-custom-question {
                font-size: 0.95rem;
                padding: 1rem 1rem;
            }
            .faq-custom-answer {
                font-size: 0.85rem;
            }
            .btn-gold, .btn-outline-gold {
                padding: 8px 20px;
                font-size: 0.9rem;
            }
            .floating-wa, .back-to-top {
                width: 45px;
                height: 45px;
                font-size: 1.4rem;
                right: 20px;
            }
            .back-to-top {
                bottom: 85px;
            }
            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }
            .glass-card, .feature-card, .service-card, .value-card, .team-card, .testimonial-card, .contact-card {
                padding: 1.25rem !important;
            }
            .timeline-milestone {
                padding-left: 1rem;
            }
            .process-step {
                padding-left: 2rem;
            }
        }

        @media (min-width: 768px) and (max-width: 1024px) {
            .hero-section h1.display-3 {
                font-size: 3rem;
            }
            .section-title {
                font-size: 2.2rem;
            }
            .stat-number {
                font-size: 2.5rem;
            }
            .container {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
        }

        @media (min-width: 1025px) and (max-width: 1440px) {
            .container {
                max-width: 1280px;
            }
        }

        @media (min-width: 1441px) {
            .container {
                max-width: 1400px;
            }
        }
        
        /* === FIX CONTACT SECTION OVERFLOW (removed ms-5 margin that caused horizontal scroll) === */
        .contact-card-row {
            justify-content: center;
            gap: 0.5rem;
        }
        .contact-card-row > div {
            flex: 0 0 auto;
        }
        /* preserve spacing on larger screens */
        @media (min-width: 992px) {
            .contact-card-row .contact-card {
                margin: 0 0.25rem;
            }
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<section class="hero-section">
    <div class="animated-bg" id="heroCanvas"></div>
    <div class="container position-relative z-1 py-5">
        <div class="row align-items-center">
            <div class="col-lg-8 text-center text-lg-start" data-aos="fade-up">
                <h1 class=" text-white display-3 fw-bold"><em>About</em> <span style="color:#B7A08B;"><em>PVA Website</em></span></h1>
                <p class="lead my-4" style="color:white">Premium Phone Verified Accounts for global businesses, marketers, and agencies. Fast, secure, and 100% reliable.</p>
                <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                    <a href="index.php"  style= " background:#B7A08B ;" class="btn btn-gold"> <em>Get Started</em></a>
                    <a href="contact.php" style= " background:#B7A08B ;" class="btn btn-outline-gold"><em>Contact US</em></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company Introduction -->
<div class="container py-5 ">
    <div class="row g-5 align-items-center">
        <div class="col-lg-6" data-aos="fade-right">
            <h2 class="section-title"><em>Who We Are</em></h2>
            <p style="color:#4a5568;">PVA Website is a global leader in providing high-quality phone-verified accounts for all major social platforms. Founded in 2018, we've helped over 25,000+ clients scale their digital operations with authentic, secure, and instantly delivered accounts.</p>
            <p class="mt-3" style="color:#4a5568;">Our rigorous verification process ensures every account is created using real SIM cards, manually tested, and backed by a 24-hour replacement guarantee. We combine advanced technology with a customer-first approach.</p>
        </div>
        <div style='background:#023b45 ;' class="col-lg-6" data-aos="fade-left ">
            <div class="glass-card p-4 rounded-5">
                <div class="row g-3 text-center ">
                    <div class="col-4"><i class="fas fa-shield-alt fa-3x" style="color:#B7A08B;"></i><p class="mt-2 fw-bold" style="color:#1a1a2e;">Secure</p></div>
                    <div class="col-4"><i class="fas fa-bolt fa-3x" style="color:#B7A08B;"></i><p class="mt-2 fw-bold" style="color:#1a1a2e;">Instant</p></div>
                    <div class="col-4"><i class="fas fa-headset fa-3x" style="color:#B7A08B;"></i><p class="mt-2 fw-bold" style="color:#1a1a2e;">24/7 Support</p></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mission & Vision -->
<div class="container py-5" style="background:#023b45; border-radius: 2rem;">
    <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title" style="color: white; background: none; -webkit-background-clip: unset; background-clip: unset;">Our Mission & Vision</h2>
    </div>
    <div class="row g-4">
        <div class="col-md-4" data-aos="flip-left">
            <div class="glass-card p-4 text-center h-100">
                <i class="fas fa-bullseye fa-3x mb-3" style="color:#B7A08B;"></i>
                <h4 class="fw-bold" style="color:#1a1a2e;">Mission</h4>
                <p style="color:#4a5568;">To empower digital entrepreneurs with trustworthy, high-performance PVA accounts that drive real results.</p>
            </div>
        </div>
        <div class="col-md-4" data-aos="flip-left" data-aos-delay="100">
            <div class="glass-card p-4 text-center h-100">
                <i class="fas fa-eye fa-3x mb-3" style="color:#B7A08B;"></i>
                <h4 class="fw-bold" style="color:#1a1a2e;">Vision</h4>
                <p style="color:#4a5568;">To become the world's most trusted PVA marketplace, setting new standards for security and reliability.</p>
            </div>
        </div>
        <div class="col-md-4" data-aos="flip-left" data-aos-delay="200">
            <div class="glass-card p-4 text-center h-100">
                <i class="fas fa-chart-line fa-3x mb-3" style="color:#B7A08B;"></i>
                <h4 class="fw-bold" style="color:#1a1a2e;">Future Goals</h4>
                <p style="color:#4a5568;">Expand to 50+ countries, integrate AI-driven account health monitoring, and launch a client dashboard.</p>
            </div>
        </div>
    </div>
</div>


<!-- Why Choose PVA Website (12+ Feature Cards) -->
<div class="container py-5">
    <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title">Why Choose PVA Website?</h2>
        <p style="color:#4a5568;">We deliver excellence at every step</p>
    </div>
    <div class="row g-4">
        <div class="col-md-6 col-lg-3"><div class="feature-card p-4 text-center h-100" data-aos="zoom-in"><i class="fas fa-tachometer-alt fa-2x mb-3" style="color:#B7A08B;"></i><h5 style="color:#1a1a2e;">Fast Delivery</h5><p class="small" style="color:#4a5568;">Instant account delivery after payment</p></div></div>
        <div class="col-md-6 col-lg-3"><div class="feature-card p-4 text-center h-100" data-aos="zoom-in" data-aos-delay="50"><i class="fas fa-gem fa-2x mb-3" style="color:#B7A08B;"></i><h5 style="color:#1a1a2e;">Premium Quality</h5><p class="small" style="color:#4a5568;">Every account manually tested</p></div></div>
        <div class="col-md-6 col-lg-3"><div class="feature-card p-4 text-center h-100" data-aos="zoom-in" data-aos-delay="100"><i class="fas fa-lock fa-2x mb-3" style="color:#B7A08B;"></i><h5 style="color:#1a1a2e;">Secure Service</h5><p class="small" style="color:#4a5568;">256-bit SSL encryption</p></div></div>
        <div class="col-md-6 col-lg-3"><div class="feature-card p-4 text-center h-100" data-aos="zoom-in" data-aos-delay="150"><i class="fas fa-headset fa-2x mb-3" style="color:#B7A08B;"></i><h5 style="color:#1a1a2e;">24/7 Support</h5><p class="small" style="color:#4a5568;">Live chat & ticket system</p></div></div>
        <div class="col-md-6 col-lg-3"><div class="feature-card p-4 text-center h-100" data-aos="zoom-in" data-aos-delay="200"><i class="fas fa-users fa-2x mb-3" style="color:#B7A08B;"></i><h5 style="color:#1a1a2e;">Expert Team</h5><p class="small" style="color:#4a5568;">Years of industry experience</p></div></div>
        <div class="col-md-6 col-lg-3"><div class="feature-card p-4 text-center h-100" data-aos="zoom-in" data-aos-delay="250"><i class="fas fa-smile fa-2x mb-3" style="color:#B7A08B;"></i><h5 style="color:#1a1a2e;">Customer Satisfaction</h5><p class="small" style="color:#4a5568;">99.6% positive feedback</p></div></div>
        <div class="col-md-6 col-lg-3"><div class="feature-card p-4 text-center h-100" data-aos="zoom-in" data-aos-delay="300"><i class="fas fa-money-bill-wave fa-2x mb-3" style="color:#B7A08B;"></i><h5 style="color:#1a1a2e;">Money Back Guarantee</h5><p class="small" style="color:#4a5568;">7-day refund policy</p></div></div>
        <div class="col-md-6 col-lg-3"><div class="feature-card p-4 text-center h-100" data-aos="zoom-in" data-aos-delay="350"><i class="fas fa-tag fa-2x mb-3" style="color:#B7A08B;"></i><h5 style="color:#1a1a2e;">Affordable Pricing</h5><p class="small" style="color:#4a5568;">Best rates in market</p></div></div>
        <div class="col-md-6 col-lg-3"><div class="feature-card p-4 text-center h-100" data-aos="zoom-in" data-aos-delay="400"><i class="fas fa-microchip fa-2x mb-3" style="color:#B7A08B;"></i><h5 style="color:#1a1a2e;">Advanced Technology</h5><p class="small" style="color:#4a5568;">AI-powered verification</p></div></div>
        <div class="col-md-6 col-lg-3"><div class="feature-card p-4 text-center h-100" data-aos="zoom-in" data-aos-delay="450"><i class="fas fa-check-circle fa-2x mb-3" style="color:#B7A08B;"></i><h5 style="color:#1a1a2e;">Easy Process</h5><p class="small" style="color:#4a5568;">3-step ordering</p></div></div>
        <div class="col-md-6 col-lg-3"><div class="feature-card p-4 text-center h-100" data-aos="zoom-in" data-aos-delay="500"><i class="fas fa-handshake fa-2x mb-3" style="color:#B7A08B;"></i><h5 style="color:#1a1a2e;">Trusted Service</h5><p class="small" style="color:#4a5568;">10,000+ repeat clients</p></div></div>
        <div class="col-md-6 col-lg-3"><div class="feature-card p-4 text-center h-100" data-aos="zoom-in" data-aos-delay="550"><i class="fas fa-chart-simple fa-2x mb-3" style="color:#B7A08B;"></i><h5 style="color:#1a1a2e;">High Success Rate</h5><p class="small" style="color:#4a5568;">99.8% account success</p></div></div>
    </div>
</div>

<!-- Our Services -->
<div style='background:#023b45; ' class="container py-1 rounded-5">
    <div class="text-center mb-5" data-aos="fade-up"><h2 class="section-title text-white"><em>Our Services</em></h2></div>
    <div class="row g-4">
        <div class="col-md-6 col-lg-4"><div class="service-card p-4 h-100" data-aos="fade-up"><i class="fas fa-envelope fa-2x mb-3" style="color:#B7A08B;"></i><h4 style="color:#1a1a2e;">Gmail PVA</h4><p style="color:#4a5568;">Phone verified Gmail accounts, ideal for business and marketing.</p><a href="#" class="text-decoration-none" style="color:#B7A08B;">Learn More â†’</a></div></div>
        <div class="col-md-6 col-lg-4"><div class="service-card p-4 h-100" data-aos="fade-up" data-aos-delay="100"><i class="fab fa-facebook fa-2x mb-3" style="color:#B7A08B;"></i><h4 style="color:#1a1a2e;">Facebook PVA</h4><p style="color:#4a5568;">Aged profiles with high trust scores for ads and pages.</p><a href="#" class="text-decoration-none" style="color:#B7A08B;">Learn More â†’</a></div></div>
        <div class="col-md-6 col-lg-4"><div class="service-card p-4 h-100" data-aos="fade-up" data-aos-delay="200"><i class="fab fa-instagram fa-2x mb-3" style="color:#B7A08B;"></i><h4 style="color:#1a1a2e;">Instagram PVA</h4><p style="color:#4a5568;">Real engagement-ready accounts with profile pictures.</p><a href="#" class="text-decoration-none" style="color:#B7A08B;">Learn More â†’</a></div></div>
        <div class="col-md-6 col-lg-4"><div class="service-card p-4 h-100" data-aos="fade-up" data-aos-delay="300"><i class="fab fa-twitter fa-2x mb-3" style="color:#B7A08B;"></i><h4 style="color:#1a1a2e;">Twitter (X) PVA</h4><p style="color:#4a5568;">Verified with email access, perfect for brand influence.</p><a href="#" class="text-decoration-none" style="color:#B7A08B;">Learn More â†’</a></div></div>
    </div>
</div>

<!-- How Our Process Works -->
<div class="container py-5">
    <div class="text-center mb-5" data-aos="fade-up"><h2 class="section-title"><em>Our Process</em></h2></div>
    <div class="row g-4">
        <div class="col-md-6 col-lg-4"><div class="glass-card p-4 process-step"><div class="step-number">1</div><br><h5 style="color:#1a1a2e;">Contact Us</h5><p style="color:#4a5568;">Reach out via chat or order form.</p></div></div>
        <div class="col-md-6 col-lg-4"><div class="glass-card p-4 process-step"><div class="step-number">2</div><br><h5 style="color:#1a1a2e;">Requirement Analysis</h5><p style="color:#4a5568;">We understand your needs.</p></div></div>
        <div class="col-md-6 col-lg-4"><div class="glass-card p-4 process-step"><div class="step-number">3</div><br><h5 style="color:#1a1a2e;">Processing</h5><p style="color:#4a5568;">Accounts prepared & verified.</p></div></div>
        <div class="col-md-6 col-lg-4"><div class="glass-card p-4 process-step"><div class="step-number">4</div><br><h5 style="color:#1a1a2e;">Delivery</h5><p style="color:#4a5568;">Instant credentials shared.</p></div></div>
        <div class="col-md-6 col-lg-4"><div class="glass-card p-4 process-step"><div class="step-number">5</div><br><h5 style="color:#1a1a2e;">Customer Support</h5><p style="color:#4a5568;">24/7 assistance after delivery.</p></div></div>
    </div>
</div>

<!-- Our Core Values -->
<div class="container py-5">
    <div class="text-center mb-5" data-aos="fade-up"><h2 class="section-title"><em>Our Core Values</em></h2></div>
    <div class="row g-4">
        <div class="col-sm-6 col-md-4 col-lg-3"><div class="value-card p-3 text-center"><i class="fas fa-handshake fa-2x mb-2" style="color:#B7A08B;"></i><h5 style="color:#1a1a2e;">Trust</h5></div></div>
        <div class="col-sm-6 col-md-4 col-lg-3"><div class="value-card p-3 text-center"><i class="fas fa-eye fa-2x mb-2" style="color:#B7A08B;"></i><h5 style="color:#1a1a2e;">Transparency</h5></div></div>
        <div class="col-sm-6 col-md-4 col-lg-3"><div class="value-card p-3 text-center"><i class="fas fa-lightbulb fa-2x mb-2" style="color:#B7A08B;"></i><h5 style="color:#1a1a2e;">Innovation</h5></div></div>
        <div class="col-sm-6 col-md-4 col-lg-3"><div class="value-card p-3 text-center"><i class="fas fa-shield-alt fa-2x mb-2" style="color:#B7A08B;"></i><h5 style="color:#1a1a2e;">Security</h5></div></div>
        <div class="col-sm-6 col-md-4 col-lg-3"><div class="value-card p-3 text-center"><i class="fas fa-star fa-2x mb-2" style="color:#B7A08B;"></i><h5 style="color:#1a1a2e;">Quality</h5></div></div>
        <div class="col-sm-6 col-md-4 col-lg-3"><div class="value-card p-3 text-center"><i class="fas fa-user-check fa-2x mb-2" style="color:#B7A08B;"></i><h5 style="color:#1a1a2e;">Customer First</h5></div></div>
    </div>
</div>

<style>
   
</style>
<!-- Team Section -->
<div  class="container py-5">
    <div class="text-center mb-5" data-aos="fade-up"><h2 class="section-title"><em>Meet Our Team</em></h2></div>
    <div  class="row g-4">
        <div  style='background: #023b45;' class="rounded-5 col-md-4"><div class="team-card p-4 text-center" data-aos="flip-left"><div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width:100px;height:100px;background:#B7A08B;"><i class="fas fa-user-cog fa-3x text"></i></div><h5 style="color:#1a1a2e; "><em>Aftab</em></h5><p style="color:#B7A08B;"> Operations Head</p><div class="d-flex justify-content-center gap-3 mt-2"><a href="#" class="text-dark"><i class="fab fa-linkedin"></i></a><a href="#" class="text-dark"><i class="fab fa-twitter"></i></a></div></div></div>
        <div  style='background: #023b45;' class=" rounded-5 col-md-4"><div class="team-card p-4 text-center" data-aos="flip-left" data-aos-delay="100"><div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width:100px;height:100px;background:#B7A08B;"><i class="fas fa-user-tie fa-3x text-"></i></div><h5 style="color:#1a1a2e;"><em>Ubaid</em></h5><p style="color:#B7A08B;">CEO & Founder</p><div class="d-flex justify-content-center gap-3 mt-2"><a href="https://wa.me/923141001807" class="text-dark" target="_blank"><i class="fab fa-whatsapp"></i></a><a href="#" class="text-dark"><i class="fab fa-telegram"></i></a></div></div></div>
        <div style='background: #023b45;' class=" rounded-5     col-md-4"><div class="team-card p-4 text-center" data-aos="flip-left" data-aos-delay="200"><div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width:100px;height:100px;background:#B7A08B;"><i class="fas fa-headset fa-3x text-"></i></div><h5 style="color:#1a1a2e;"><em>Ammar</em></h5><p style="color:#B7A08B;">Replacement Services Department</p><div class="d-flex justify-content-center gap-3 mt-2"><a href="#" class="text-dark"><i class="fab fa-linkedin"></i></a><a href="#" class="text-dark"><i class="fab fa-twitter"></i></a></div></div></div>
    </div>
</div>

<!-- Testimonials Slider -->
<div class="container py-5">
    <div class="text-center mb-5" data-aos="fade-up"><h2 class="section-title"><em>Client Testimonials</em></h2></div>
    <div class="swiper testimonialSwiper" data-aos="fade-up">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><div class="testimonial-card p-4"><i class="fas fa-quote-left fa-2x mb-3" style="color:#B7A08B;"></i><p style="color:#4a5568;">"Best PVA provider! Accounts are high quality and support is instant."</p><div class="mt-3"><strong style="color:#1a1a2e;">Michael R.</strong><div class="text-warning">â˜…â˜…â˜…â˜…â˜…</div></div></div></div>
            <div class="swiper-slide"><div class="testimonial-card p-4"><i class="fas fa-quote-left fa-2x mb-3" style="color:#B7A08B;"></i><p style="color:#4a5568;">"I've ordered 50+ Facebook accounts. Flawless delivery every time."</p><div class="mt-3"><strong style="color:#1a1a2e;">Jessica K.</strong><div class="text-warning">â˜…â˜…â˜…â˜…â˜…</div></div></div></div>
            <div class="swiper-slide"><div class="testimonial-card p-4"><i class="fas fa-quote-left fa-2x mb-3" style="color:#B7A08B;"></i><p style="color:#4a5568;">"The 24h replacement guarantee saved my campaign. Highly recommend!"</p><div class="mt-3"><strong style="color:#1a1a2e;">David L.</strong><div class="text-warning">â˜…â˜…â˜…â˜…â˜…</div></div></div></div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- Achievement & Milestones Timeline -->
<div class="container py-5">
    <div class="text-center mb-5" data-aos="fade-up"><h2 class="section-title"><em>Our Milestones</em></h2></div>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="timeline-milestone" data-aos="fade-right"><div class="fw-bold" style="color:#B7A08B;">2018</div><p style="color:#4a5568;">Company founded with a vision to provide authentic PVA accounts.</p></div>
            <div class="timeline-milestone" data-aos="fade-right"><div class="fw-bold" style="color:#B7A08B;">2019</div><p style="color:#4a5568;">Reached 5,000+ happy customers & expanded service portfolio.</p></div>
            <div class="timeline-milestone" data-aos="fade-right"><div class="fw-bold" style="color:#B7A08B;">2021</div><p style="color:#4a5568;">Launched AI verification system â€“ increased account quality by 40%.</p></div>
            <div class="timeline-milestone" data-aos="fade-right"><div class="fw-bold" style="color:#B7A08B;">2023</div><p style="color:#4a5568;">Awarded "Best PVA Provider" by Digital Marketplace Association.</p></div>
            <div class="timeline-milestone" data-aos="fade-right"><div class="fw-bold" style="color:#B7A08B;">2025</div><p style="color:#4a5568;">Now serving 25,000+ clients across 45+ countries.</p></div>
        </div>
    </div>
</div>

<!-- FAQ Section (10 questions) - CUSTOM ACCORDION (WORKING) -->
<div class="container py-5">
    <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title"><em>Frequently Asked Questions</em></h2>
    </div>
    <div class="faq-custom-accordion" id="faqCustomAccordion">
        <div class="faq-custom-item">
            <div class="faq-custom-question">
                <span>What is a PVA account?</span>
                <i class="fas fa-plus"></i>
            </div>
            <div class="faq-custom-answer">A PVA (Phone Verified Account) is created using a real SIM card and verified via SMS, making it more secure and trusted.</div>
        </div>
        <div class="faq-custom-item">
            <div class="faq-custom-question">
                <span>How fast is delivery?</span>
                <i class="fas fa-plus"></i>
            </div>
            <div class="faq-custom-answer">Most orders delivered within 15-30 minutes after payment confirmation.</div>
        </div>
        <div class="faq-custom-item">
            <div class="faq-custom-question">
                <span>Do you offer replacements?</span>
                <i class="fas fa-plus"></i>
            </div>
            <div class="faq-custom-answer">Yes, 24-hour replacement guarantee for any account issue.</div>
        </div>
        <div class="faq-custom-item">
            <div class="faq-custom-question">
                <span>Can I use these for ads?</span>
                <i class="fas fa-plus"></i>
            </div>
            <div class="faq-custom-answer">Absolutely, our accounts are perfect for Facebook, Google, and Instagram ads.</div>
        </div>
        <div class="faq-custom-item">
            <div class="faq-custom-question">
                <span>What payment methods?</span>
                <i class="fas fa-plus"></i>
            </div>
            <div class="faq-custom-answer">We accept Crypto, PayPal, Credit Cards, and Bank Transfer.</div>
        </div>
        <div class="faq-custom-item">
            <div class="faq-custom-question">
                <span>Is my data safe?</span>
                <i class="fas fa-plus"></i>
            </div>
            <div class="faq-custom-answer">Yes, we use 256-bit SSL encryption and never share your information.</div>
        </div>
        <div class="faq-custom-item">
            <div class="faq-custom-question">
                <span>Do you have bulk discounts?</span>
                <i class="fas fa-plus"></i>
            </div>
            <div class="faq-custom-answer">Yes, contact sales for custom pricing on orders 50+.</div>
        </div>
        <div class="faq-custom-item">
            <div class="faq-custom-question">
                <span>How do I contact support?</span>
                <i class="fas fa-plus"></i>
            </div>
            <div class="faq-custom-answer">Live chat 24/7 or email support@pvasite.com</div>
        </div>
        <div class="faq-custom-item">
            <div class="faq-custom-question">
                <span>What if an account gets banned?</span>
                <i class="fas fa-plus"></i>
            </div>
            <div class="faq-custom-answer">We will replace it within 24 hours under our warranty.</div>
        </div>
        <div class="faq-custom-item">
            <div class="faq-custom-question">
                <span>Do you offer recovery email access?</span>
                <i class="fas fa-plus"></i>
            </div>
            <div class="faq-custom-answer">Yes, all accounts come with recovery email/phone details.</div>
        </div>
    </div>
</div>

<!-- Trust & Security Section -->
<div class="container py-5">
    <div class="text-center mb-5" data-aos="fade-up"><h2 class="section-title">Trust & Security</h2></div>
    <div class="row g-4 justify-content-center">
        <div class="col-6 col-md-4 text-center"><i class="fas fa-lock fa-3x mb-2" style="color:#B7A08B;"></i><p style="color:#1a1a2e;">SSL Secure</p></div>
        <div class="col-6 col-md-4 text-center"><i class="fas fa-database fa-3x mb-2" style="color:#B7A08B;"></i><p style="color:#1a1a2e;">Data Protection</p></div>
        <div class="col-6 col-md-4 text-center"><i class="fas fa-shield-alt fa-3x mb-2" style="color:#B7A08B;"></i><p style="color:#1a1a2e;">Privacy Assurance</p></div>
        <div class="col-6 col-md-4 text-center"><i class="fas fa-credit-card fa-3x mb-2" style="color:#B7A08B;"></i><p style="color:#1a1a2e;">Secure Payment</p></div>
        <div class="col-6 col-md-4 text-center"><i class="fas fa-check-double fa-3x mb-2" style="color:#B7A08B;"></i><p style="color:#1a1a2e;">Verified Badge</p></div>
    </div>
</div>

<!-- Call To Action -->
<div style='background: #023b45;' class="container py-1 rounded-5">
    <div class="glass-card p-5 text-center" data-aos="zoom-in">
        <h2 class="fw-bold" style="color:#1a1a2e;">Ready to Grow With Trusted PVA Accounts?</h2>
        <p class="mb-4" style="color:#4a5568;">Join thousands of satisfied clients who scaled their business with us.</p>
        <a href="contact.php" style='background: #023b45; color: white;' class="btn btn-gold me-3"><em>Contact Us</em></a>
        <a href="index.php" style='background: #023b45; color: white;' class="btn btn-outline-gold"><em>Get Started</em></a>
    </div>
</div>
<br>
<br>
<!-- Contact Information Cards (FIXED: removed ms-5 margin to kill horizontal scroll) -->
<div class='text-center'>
    <h1><b><em>Contact US</em> </b></h1>
</div>
<br>
<div style='background: #023b45;' class="container py-2 rounded-5">
    <div class="row g-3 text-center justify-content-center contact-card-row">
        <div class="col-md-3 col-12">
            <div class="contact-card p-3"><i class="fas fa-envelope fa-2x mb-2" style="color:#B7A08B;"></i><p style="color:#1a1a2e;">ubaidnawal@gmail.com</p></div>
        </div>
        <div class="col-md-3 col-12">
            <div class="contact-card p-3"><i class="fab fa-whatsapp fa-2x mb-2" style="color:#25D366;"></i><p style="color:#1a1a2e;">+92 314 1001807</p></div>
        </div>
        <div class="col-md-3 col-12">
            <div class="contact-card p-3"><i class="fas fa-clock fa-2x mb-2" style="color:#B7A08B;"></i><p style="color:#1a1a2e;">24/7 Support</p></div>
        </div>
    </div>
</div>
<br>
<br>
<!-- Floating Elements -->
<div class="floating-wa" id="waFloat"><i class="fab fa-whatsapp"></i></div>

<!-- <div class="back-to-top" id="backToTop"><i class="fas fa-arrow-up"></i></div> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

<script>
    AOS.init({ duration: 800, once: true, offset: 50 });
    
    // Animated Counters
    function animateCounter(id, end) {
        let obj = { val: 0 };
        gsap.to(obj, {
            val: end,
            duration: 2,
            ease: "power2.out",
            onUpdate: () => document.getElementById(id).innerText = Math.floor(obj.val).toLocaleString(),
            scrollTrigger: { trigger: "#"+id, start: "top 80%", once: true }
        });
    }
    animateCounter('stat1', 25480);
    animateCounter('stat2', 42800);
    animateCounter('stat3', 12450);
    animateCounter('stat4', 45);
    animateCounter('stat5', 7);
    animateCounter('stat6', 35600);

    // Testimonial Swiper
    new Swiper('.testimonialSwiper', {
        loop: true,
        autoplay: { delay: 4000, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true },
        slidesPerView: 1,
        breakpoints: { 768: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
    });

    // Newsletter Validation
    const newsletterForm = document.getElementById('newsletterForm');
    if(newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            let email = document.getElementById('newsEmail').value;
            if(email.includes('@') && email.includes('.')) {
                document.getElementById('newsMsg').innerHTML = '<i class="fas fa-check"></i> Subscribed successfully!';
                this.reset();
            } else {
                document.getElementById('newsMsg').innerHTML = '<i class="fas fa-exclamation-triangle"></i> Enter a valid email.';
            }
        });
    }

    // Back to top & WhatsApp floating
    document.getElementById('backToTop').addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    document.getElementById('waFloat').addEventListener('click', () => window.open('https://wa.me/923141001807', '_blank'));

    // Custom Accordion Functionality
    const faqQuestions = document.querySelectorAll('.faq-custom-question');
    faqQuestions.forEach(question => {
        question.addEventListener('click', function() {
            this.classList.toggle('active');
            const answer = this.nextElementSibling;
            if (answer.style.maxHeight) {
                answer.style.maxHeight = null;
            } else {
                answer.style.maxHeight = answer.scrollHeight + "px";
            }
        });
    });

    // Simple animated background (hero canvas) - fixed to not cause overflow
    const canvas = document.createElement('canvas');
    const heroCanvas = document.getElementById('heroCanvas');
    if(heroCanvas) {
        heroCanvas.appendChild(canvas);
        canvas.style.width = '100%';
        canvas.style.height = '100%';
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        const ctx = canvas.getContext('2d');
        let particles = [];
        for(let i=0;i<100;i++) particles.push({x:Math.random()*canvas.width, y:Math.random()*canvas.height, radius:Math.random()*2+1, alpha:Math.random()});
        function drawBg() {
            if(!ctx) return;
            ctx.clearRect(0,0,canvas.width,canvas.height);
            particles.forEach(p => {
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.radius, 0, Math.PI*2);
                ctx.fillStyle = `rgba(183, 160, 139, ${p.alpha * 0.3})`;
                ctx.fill();
                p.y -= 0.3;
                if(p.y < 0) p.y = canvas.height;
            });
            requestAnimationFrame(drawBg);
        }
        drawBg();
        window.addEventListener('resize', () => { 
            canvas.width = window.innerWidth; 
            canvas.height = window.innerHeight;
            // regenerate particles to fit new size
            particles = [];
            for(let i=0;i<100;i++) particles.push({x:Math.random()*canvas.width, y:Math.random()*canvas.height, radius:Math.random()*2+1, alpha:Math.random()});
        });
    }
</script>

<?php include 'footer.php'; ?>
</body>
</html>