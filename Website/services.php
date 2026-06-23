<?php session_start(); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium PVA accounts marketplace with unique modern design." />
    <title>Alt • Premium Accounts Marketplace</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- AOS Scroll Animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <style>
        /* ============================================
           RESET & VARIABLES
        ============================================ */
        :root {
            --bg-primary: #B7A08B;
            --text-primary: #023b45;
            --white: #FFFFFF;
            --black: #000000;
            --shadow-soft: 0 4px 20px rgba(2,59,69,0.06);
            --shadow-hover: 0 16px 48px rgba(2,59,69,0.12);
            --radius-card: 24px;
            --radius-btn: 60px;
            --transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            --font-body: 'Inter', sans-serif;
            --font-accent: 'Playfair Display', serif;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: var(--font-body);
            background: var(--bg-primary);
            color: var(--text-primary);
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* ============================================
           SECTION UTILITY
        ============================================ */
        .section-padding { padding: 80px 0; }
        .section-padding-sm { padding: 50px 0; }
        .section-padding-lg { padding: 100px 0; }

        .tag-alt {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--text-primary);
            border: 1px solid rgba(2,59,69,0.15);
            padding: 4px 14px;
            border-radius: 50px;
            margin-bottom: 14px;
            background: rgba(255,255,255,0.3);
        }

        .title-alt {
            font-family: var(--font-accent);
            font-size: clamp(2.2rem, 4.5vw, 3.4rem);
            font-weight: 700;
            line-height: 1.1;
            color: var(--text-primary);
            margin-bottom: 12px;
        }
        .title-alt .highlight {
            font-style: italic;
            position: relative;
            display: inline-block;
        }
        .title-alt .highlight::before {
            content: '';
            position: absolute;
            bottom: 4px;
            left: 0;
            width: 100%;
            height: 6px;
            background: rgba(2,59,69,0.12);
            border-radius: 4px;
            transform: rotate(-2deg);
        }

        .subtitle-alt {
            font-size: 1rem;
            color: var(--text-primary);
            opacity: 0.7;
            max-width: 540px;
            margin: 0 auto;
        }

        .btn-primary-alt {
            background: var(--text-primary);
            color: var(--white);
            border: none;
            padding: 14px 34px;
            border-radius: var(--radius-btn);
            font-weight: 700;
            font-size: 0.9rem;
            transition: var(--transition);
            box-shadow: 0 6px 20px rgba(2,59,69,0.2);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-primary-alt:hover {
            background: #012b34;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(2,59,69,0.3);
            color: var(--white);
        }

        .btn-outline-alt {
            background: transparent;
            color: var(--text-primary);
            border: 2px solid var(--text-primary);
            padding: 12px 30px;
            border-radius: var(--radius-btn);
            font-weight: 600;
            font-size: 0.9rem;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-outline-alt:hover {
            background: var(--text-primary);
            color: var(--white);
            transform: translateY(-3px);
            border-color: var(--text-primary);
        }

        /* ============================================
           HERO
        ============================================ */
        .hero-alt {
            position: relative;
            padding: 80px 0 60px;
            background: var(--bg-primary);
            overflow-x: hidden;
            overflow-y: hidden;
            width: 100%;
            display: flex;
            align-items: center;
        }
        .hero-alt .bg-pattern {
            position: absolute;
            inset: 0;
            background-image: 
                radial-gradient(circle at 20% 30%, rgba(2,59,69,0.03) 0%, transparent 60%),
                radial-gradient(circle at 80% 70%, rgba(2,59,69,0.03) 0%, transparent 50%);
            pointer-events: none;
        }
        .hero-alt .bg-blob-shape {
            position: absolute;
            top: -20%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(2,59,69,0.04), transparent 70%);
            border-radius: 50%;
            max-width: min(500px, 80vw);
            max-height: min(500px, 80vh);
        }
        .hero-title-alt {
            font-family: var(--font-accent);
            font-size: clamp(2.8rem, 7vw, 4.8rem);
            font-weight: 700;
            line-height: 1.08;
            color: var(--text-primary);
        }
        .hero-title-alt .highlight {
            font-style: italic;
            position: relative;
            display: inline-block;
        }
        .hero-title-alt .highlight::before {
            content: '';
            position: absolute;
            bottom: 4px;
            left: 0;
            width: 100%;
            height: 8px;
            background: rgba(2,59,69,0.12);
            border-radius: 4px;
        }
        .hero-desc-alt {
            font-size: 1.1rem;
            color: var(--text-primary);
            opacity: 0.75;
            max-width: 480px;
            margin: 20px 0 30px;
            line-height: 1.8;
        }
        .hero-stats-alt {
            display: flex;
            flex-wrap: wrap;
            gap: 32px;
            margin-top: 32px;
        }
        .hero-stats-alt .stat-item {
            text-align: left;
        }
        .hero-stats-alt .stat-number {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--text-primary);
            display: block;
            line-height: 1.1;
            font-family: var(--font-accent);
        }
        .hero-stats-alt .stat-label {
            font-size: 0.8rem;
            opacity: 0.6;
            color: var(--text-primary);
        }

        .hero-image-alt {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(2,59,69,0.12);
            background: var(--white);
            padding: 16px;
            transition: transform 0.5s;
        }
        .hero-image-alt:hover { transform: scale(1.01); }
        .hero-image-alt img { width: 100%; height: auto; display: block; border-radius: 12px; }

        .float-badge-alt {
            position: absolute;
            background: var(--white);
            padding: 10px 18px;
            border-radius: 40px;
            box-shadow: var(--shadow-soft);
            font-weight: 600;
            font-size: 0.8rem;
            color: var(--text-primary);
            display: flex;
            align-items: center;
            gap: 8px;
            border: 1px solid rgba(2,59,69,0.06);
            z-index: 2;
            animation: floatBadgeAlt 5s infinite alternate ease-in-out;
        }
        .float-badge-alt i { font-size: 1rem; color: var(--text-primary); }
        .float-badge-alt:nth-child(1) { top: 10%; right: 2%; animation-delay: 0s; }
        .float-badge-alt:nth-child(2) { bottom: 12%; right: 6%; animation-delay: 1.8s; }

        @keyframes floatBadgeAlt {
            0% { transform: translateY(0) rotate(0deg); }
            100% { transform: translateY(-14px) rotate(2deg); }
        }

        .hero-alt .float-badge-alt {
            max-width: calc(100% - 20px);
            white-space: nowrap;
        }

        /* ============================================
           SERVICES
        ============================================ */
        .services-alt { background: rgba(255,255,255,0.15); }

        .service-card-alt {
            background: var(--white);
            border-radius: var(--radius-card);
            padding: 2rem 1.8rem;
            border: 1px solid rgba(2,59,69,0.04);
            transition: var(--transition);
            height: 100%;
            box-shadow: var(--shadow-soft);
            position: relative;
            overflow: hidden;
        }
        .service-card-alt::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 0%;
            background: var(--text-primary);
            transition: height 0.5s ease;
        }
        .service-card-alt:hover::before { height: 100%; }
        .service-card-alt:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
            border-color: var(--text-primary);
        }

        .service-icon-alt {
            width: 64px;
            height: 64px;
            background: rgba(2,59,69,0.05);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: var(--text-primary);
            margin-bottom: 16px;
            transition: var(--transition);
        }
        .service-card-alt:hover .service-icon-alt {
            background: var(--text-primary);
            color: var(--white);
            transform: scale(1.05);
        }

        .service-title-alt {
            font-family: var(--font-accent);
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 6px;
        }
        .service-desc-alt {
            font-size: 0.9rem;
            color: var(--text-primary);
            opacity: 0.7;
            margin-bottom: 14px;
        }
        .service-features-alt {
            list-style: none;
            padding: 0;
            margin: 0 0 16px;
        }
        .service-features-alt li {
            font-size: 0.85rem;
            color: var(--text-primary);
            opacity: 0.8;
            padding: 3px 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .service-features-alt li i {
            color: var(--text-primary);
            font-size: 0.7rem;
        }

        .btn-service-alt {
            background: transparent;
            border: 1.5px solid var(--text-primary);
            color: var(--text-primary);
            padding: 8px 22px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.8rem;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .btn-service-alt:hover {
            background: var(--text-primary);
            color: var(--white);
            transform: translateX(4px);
        }

        /* ============================================
           WHY CHOOSE
        ============================================ */
        .why-alt { background: var(--bg-primary); }
        .why-card-alt {
            background: var(--white);
            border-radius: 16px;
            padding: 1.8rem 1.2rem;
            text-align: center;
            transition: var(--transition);
            height: 100%;
            border: 1px solid rgba(2,59,69,0.04);
            box-shadow: var(--shadow-soft);
        }
        .why-card-alt:hover {
            transform: translateY(-6px);
            border-color: var(--text-primary);
            box-shadow: var(--shadow-hover);
        }
        .why-icon-alt {
            width: 56px;
            height: 56px;
            background: rgba(2,59,69,0.05);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            color: var(--text-primary);
            margin: 0 auto 12px;
            transition: var(--transition);
        }
        .why-card-alt:hover .why-icon-alt {
            background: var(--text-primary);
            color: var(--white);
        }
        .why-title-alt {
            font-family: var(--font-accent);
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 2px;
        }
        .why-desc-alt {
            font-size: 0.85rem;
            color: var(--text-primary);
            opacity: 0.6;
        }

        /* ============================================
           FEATURES
        ============================================ */
        .feature-row-alt {
            background: var(--white);
            border-radius: 16px;
            padding: 0.9rem 1.2rem;
            display: flex;
            align-items: center;
            gap: 14px;
            transition: var(--transition);
            border: 1px solid rgba(2,59,69,0.04);
            box-shadow: var(--shadow-soft);
        }
        .feature-row-alt:hover {
            transform: translateX(6px);
            border-color: var(--text-primary);
        }
        .feature-row-alt i {
            font-size: 1.4rem;
            color: var(--text-primary);
            width: 30px;
            text-align: center;
        }
        .feature-row-alt span {
            font-size: 0.95rem;
            font-weight: 500;
            color: var(--text-primary);
        }

        /* ============================================
           PRICING
        ============================================ */
        .pricing-alt { background: rgba(255,255,255,0.1); }
        .pricing-card-alt {
            background: var(--white);
            border-radius: var(--radius-card);
            padding: 2rem 1.8rem;
            text-align: center;
            transition: var(--transition);
            border: 1px solid rgba(2,59,69,0.04);
            height: 100%;
            box-shadow: var(--shadow-soft);
            position: relative;
        }
        .pricing-card-alt:hover {
            transform: translateY(-8px);
            border-color: var(--text-primary);
            box-shadow: var(--shadow-hover);
        }
        .pricing-card-alt .popular-tag {
            display: inline-block;
            background: var(--text-primary);
            color: var(--white);
            font-size: 0.6rem;
            font-weight: 700;
            text-transform: uppercase;
            padding: 4px 16px;
            border-radius: 20px;
            margin-bottom: 12px;
            letter-spacing: 0.5px;
        }
        .pricing-icon-alt {
            font-size: 2.8rem;
            color: var(--text-primary);
            margin-bottom: 6px;
        }
        .pricing-name-alt {
            font-family: var(--font-accent);
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--text-primary);
        }
        .pricing-price-alt {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--text-primary);
            margin: 6px 0;
        }
        .pricing-price-alt span {
            font-size: 0.9rem;
            font-weight: 400;
            opacity: 0.5;
        }
        .pricing-features-alt {
            list-style: none;
            padding: 0;
            margin: 12px 0 20px;
            text-align: left;
        }
        .pricing-features-alt li {
            font-size: 0.85rem;
            color: var(--text-primary);
            opacity: 0.8;
            padding: 4px 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .pricing-features-alt li i {
            color: var(--text-primary);
        }
        .btn-pricing-alt {
            background: var(--text-primary);
            color: var(--white);
            border: none;
            padding: 10px 28px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.85rem;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-pricing-alt:hover {
            background: #012b34;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(2,59,69,0.2);
            color: var(--white);
        }

        /* ============================================
           PROCESS
        ============================================ */
        .step-alt {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            margin-bottom: 28px;
        }
        .step-alt:last-child { margin-bottom: 0; }
        .step-num-alt {
            flex-shrink: 0;
            width: 52px;
            height: 52px;
            background: var(--text-primary);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 1.4rem;
            font-family: var(--font-accent);
            box-shadow: 0 4px 14px rgba(2,59,69,0.2);
        }
        .step-content-alt h4 {
            font-family: var(--font-accent);
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0;
            font-size: 1.1rem;
        }
        .step-content-alt p {
            font-size: 0.9rem;
            color: var(--text-primary);
            opacity: 0.7;
        }

        /* ============================================
           TESTIMONIALS
        ============================================ */
        .testimonial-alt {
            background: var(--white);
            border-radius: var(--radius-card);
            padding: 1.8rem;
            border: 1px solid rgba(2,59,69,0.04);
            box-shadow: var(--shadow-soft);
            transition: var(--transition);
            margin: 0 8px;
        }
        .testimonial-alt:hover {
            transform: translateY(-4px);
            border-color: var(--text-primary);
            box-shadow: var(--shadow-hover);
        }
        .testimonial-alt .stars {
            color: #f59e0b;
            font-size: 0.8rem;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }
        .testimonial-alt .quote {
            font-size: 0.9rem;
            color: var(--text-primary);
            opacity: 0.8;
            line-height: 1.7;
            margin-bottom: 14px;
            font-style: italic;
            font-family: var(--font-accent);
        }
        .testimonial-alt .author {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .testimonial-alt .avatar {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: var(--text-primary);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            flex-shrink: 0;
        }
        .testimonial-alt .name {
            font-weight: 700;
            color: var(--text-primary);
            margin: 0;
        }
        .testimonial-alt .role {
            font-size: 0.75rem;
            color: var(--text-primary);
            opacity: 0.5;
            margin: 0;
        }

        .slider-controls-alt button {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            border: 1.5px solid var(--text-primary);
            background: transparent;
            color: var(--text-primary);
            transition: var(--transition);
            cursor: pointer;
        }
        .slider-controls-alt button:hover {
            background: var(--text-primary);
            color: var(--white);
        }

        /* ============================================
           STATS
        ============================================ */
        .stats-alt {
            background: var(--text-primary);
            border-radius: 28px;
            padding: 2.5rem 2rem;
            color: var(--white);
            box-shadow: 0 15px 40px rgba(2,59,69,0.15);
        }
        .stat-number-alt {
            font-size: 2.8rem;
            font-weight: 800;
            color: #B7A08B;
            line-height: 1.1;
            font-family: var(--font-accent);
        }
        .stat-label-alt {
            font-size: 0.9rem;
            opacity: 0.8;
            margin-top: 4px;
        }

        /* ============================================
           FAQ - FULLY WORKING WITH UNIQUE IDs
        ============================================ */
        .faq-section {
            background: rgba(255,255,255,0.15);
            border-radius: 40px;
            padding: 40px 30px;
        }

        .faq-accordion-final .accordion-item {
            border: 1px solid rgba(2,59,69,0.08);
            border-radius: var(--radius-card) !important;
            margin-bottom: 14px;
            background: var(--white);
            overflow: hidden;
            box-shadow: var(--shadow-soft);
            transition: var(--transition);
        }
        .faq-accordion-final .accordion-item:hover {
            border-color: var(--text-primary);
        }

        .faq-accordion-final .accordion-button {
            background: var(--white);
            font-weight: 700;
            color: var(--text-primary);
            padding: 18px 22px;
            font-size: 0.95rem;
            border: none;
            box-shadow: none;
            width: 100%;
            text-align: left;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .faq-accordion-final .accordion-button:hover {
            background: rgba(2,59,69,0.03);
        }
        .faq-accordion-final .accordion-button:focus {
            box-shadow: none;
        }
        .faq-accordion-final .accordion-button:not(.collapsed) {
            background: rgba(2,59,69,0.05);
            color: var(--text-primary);
        }
        .faq-accordion-final .accordion-button::after {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23023b45'%3E%3Cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3E%3C/svg%3E");
            flex-shrink: 0;
            margin-left: auto;
            transition: transform 0.3s ease;
        }
        .faq-accordion-final .accordion-button:not(.collapsed)::after {
            transform: rotate(180deg);
        }

        .faq-accordion-final .accordion-collapse {
            transition: height 0.35s ease;
        }

        .faq-accordion-final .accordion-body {
            color: var(--text-primary);
            opacity: 0.85;
            padding: 0 22px 22px;
            font-size: 0.9rem;
            line-height: 1.7;
            background: var(--white);
        }

        /* ============================================
           CTA
        ============================================ */
        .cta-alt {
            background: var(--white);
            border-radius: 40px;
            padding: 50px 30px;
            text-align: center;
            box-shadow: var(--shadow-soft);
            border: 1px solid rgba(2,59,69,0.04);
        }
        .cta-alt .cta-title {
            font-family: var(--font-accent);
            font-size: clamp(2rem, 4vw, 2.8rem);
            font-weight: 700;
            color: var(--text-primary);
        }
        .cta-alt .cta-desc {
            font-size: 1rem;
            color: var(--text-primary);
            opacity: 0.7;
            max-width: 480px;
            margin: 12px auto 28px;
        }

        /* ============================================
           RESPONSIVE
        ============================================ */
        @media (max-width: 991px) {
            .section-padding { padding: 60px 0; }
            .section-padding-lg { padding: 70px 0; }
            .hero-alt { padding: 60px 0 40px; min-height: auto; }
            .float-badge-alt { display: none; }
            .hero-stats-alt .stat-number { font-size: 1.8rem; }
        }

        @media (max-width: 768px) {
            .hero-alt { text-align: center; }
            .hero-desc-alt { margin-left: auto; margin-right: auto; max-width: 100%; }
            .hero-cta-group { justify-content: center; }
            .hero-stats-alt { justify-content: center; }
            .hero-stats-alt .stat-item { text-align: center; }
            .hero-stats-alt .stat-number { font-size: 1.6rem; }
            .hero-stats-alt .stat-label { font-size: 0.7rem; }
            .hero-title-alt { font-size: 2.4rem; }
            
            .service-card-alt { padding: 1.2rem; }
            .service-title-alt { font-size: 1.2rem; }
            .service-desc-alt { font-size: 0.85rem; }
            
            .pricing-card-alt { padding: 1.2rem; }
            .pricing-price-alt { font-size: 1.8rem; }
            
            .step-alt { flex-direction: column; align-items: center; text-align: center; }
            .step-num-alt { margin-bottom: 8px; }
            
            .testimonial-alt { padding: 1.2rem; }
            .testimonial-alt .quote { font-size: 0.85rem; }
            
            .stats-alt { padding: 1.5rem; }
            .stat-number-alt { font-size: 2rem; }
            .stat-label-alt { font-size: 0.8rem; }
            
            .cta-alt { padding: 30px 20px; }
            .cta-alt .cta-title { font-size: 1.8rem; }
            .cta-alt .cta-desc { font-size: 0.9rem; }
            
            .section-padding { padding: 40px 0; }
            .section-padding-sm { padding: 30px 0; }
            
            .title-alt { font-size: 1.8rem; }
            .subtitle-alt { font-size: 0.9rem; }

            .faq-section { padding: 20px 15px; }
            .faq-accordion-final .accordion-button {
                padding: 14px 16px;
                font-size: 0.9rem;
            }
            .faq-accordion-final .accordion-body {
                padding: 0 16px 16px;
                font-size: 0.85rem;
            }
        }

        @media (max-width: 576px) {
            .hero-title-alt { font-size: 2rem; }
            .hero-desc-alt { font-size: 1rem; }
            .btn-primary-alt, .btn-outline-alt { padding: 10px 20px; font-size: 0.8rem; }
            .service-card-alt .service-icon-alt { width: 50px; height: 50px; font-size: 1.5rem; }
            .why-card-alt { padding: 1rem 0.8rem; }
            .why-icon-alt { width: 44px; height: 44px; font-size: 1.2rem; }
            .why-title-alt { font-size: 0.95rem; }
            .why-desc-alt { font-size: 0.75rem; }
            .pricing-card-alt .pricing-icon-alt { font-size: 2rem; }
            .pricing-name-alt { font-size: 1.1rem; }
            .pricing-features-alt li { font-size: 0.8rem; }
            .btn-pricing-alt { padding: 8px 20px; font-size: 0.8rem; }
            .step-num-alt { width: 40px; height: 40px; font-size: 1rem; }
            .step-content-alt h4 { font-size: 1rem; }
            .step-content-alt p { font-size: 0.8rem; }
            .testimonial-alt .avatar { width: 36px; height: 36px; font-size: 0.8rem; }
            .testimonial-alt .name { font-size: 0.9rem; }
            .slider-controls-alt button { width: 36px; height: 36px; font-size: 0.8rem; }
            .stats-alt { border-radius: 20px; }
            .stat-number-alt { font-size: 1.6rem; }
            .cta-alt .cta-title { font-size: 1.5rem; }
            .cta-alt .cta-desc { font-size: 0.85rem; }
            .faq-section { padding: 15px 10px; }
            .faq-accordion-final .accordion-button {
                padding: 12px 14px;
                font-size: 0.85rem;
            }
            .faq-accordion-final .accordion-body {
                padding: 0 14px 14px;
                font-size: 0.8rem;
            }
        }

        [data-aos] { pointer-events: none; }
        [data-aos].aos-animate { pointer-events: auto; }

        /* =============================================================
           SURGICAL RESPONSIVE FIXES
           Only fixes for actual issues found in code audit
           ============================================================= */

        /* ISSUE 1: CSS files loaded from header.php use wrong relative path.
           header.php links to assets/css/responsive.css but this file is
           in Website/ subdirectory, so browser requests Website/assets/css/*
           which doesn't exist. Inline the critical fixes here. */

        /* Fix: restore proper container max-widths that responsive.css would provide */
        @media (min-width: 576px) { .container { max-width: 540px; } }
        @media (min-width: 768px) { .container { max-width: 720px; } }
        @media (min-width: 992px) { .container { max-width: 960px; } }
        @media (min-width: 1200px) { .container { max-width: 1140px; } }
        @media (min-width: 1400px) { .container { max-width: 1320px; } }

        /* Fix: global overflow hidden on html/body */
        html, body { overflow-x: hidden; width: 100%; max-width: 100%; }
        img, svg { max-width: 100%; height: auto; }

        /* ISSUE 2: Hero overflow - bg-blob-shape is 500px, positioned right:-10%
           On screens < 500px this can cause overflow. Cap it. */
        .hero-alt .bg-blob-shape {
            max-width: min(500px, 80vw);
            max-height: min(500px, 80vh);
        }

        /* ISSUE 3: Hero stats gap is 32px - too wide on small screens */
        .hero-stats-alt { gap: 32px; }
        @media (max-width: 480px) { .hero-stats-alt { gap: 16px; } }

        /* ISSUE 4: Process steps on tablet (768-991px) need horizontal layout */
        @media (min-width: 768px) and (max-width: 991px) {
            .step-alt { flex-direction: row; align-items: flex-start; text-align: left; }
            .step-num-alt { margin-bottom: 0; }
        }

        /* ISSUE 5: 360px and below - floating badges cause overflow */
        .float-badge-alt { z-index: 2; }
        @media (max-width: 400px) {
            .float-badge-alt { display: none !important; }
            .hero-title-alt { font-size: 1.8rem; }
            .hero-desc-alt { font-size: 0.9rem; }
            .hero-stats-alt .stat-number { font-size: 1.3rem; }
            .hero-stats-alt .stat-label { font-size: 0.65rem; }
            .service-card-alt { padding: 0.9rem; }
            .service-title-alt { font-size: 1.05rem; }
            .pricing-card-alt { padding: 0.9rem; }
            .pricing-price-alt { font-size: 1.5rem; }
            .btn-pricing-alt { padding: 8px 16px; font-size: 0.75rem; }
            .cta-alt { border-radius: 24px; }
            .cta-alt .cta-title { font-size: 1.3rem; }
            .stats-alt { border-radius: 18px; padding: 1rem; }
            .stat-number-alt { font-size: 1.5rem; }
            .faq-section { border-radius: 24px; padding: 12px 10px; }
            .faq-accordion-final .accordion-button { padding: 10px 12px; font-size: 0.82rem; }
            .faq-accordion-final .accordion-body { padding: 0 12px 12px; font-size: 0.78rem; }
        }

        /* ISSUE 6: 320px - smallest devices need extra care */
        @media (max-width: 340px) {
            .hero-title-alt { font-size: 1.5rem; }
            .hero-stats-alt { gap: 10px; }
            .hero-stats-alt .stat-number { font-size: 1.1rem; }
            .hero-cta-group { gap: 6px; }
            .hero-cta-group .btn-primary-alt,
            .hero-cta-group .btn-outline-alt {
                padding: 8px 14px;
                font-size: 0.7rem;
            }
            .title-alt { font-size: 1.2rem; }
            .service-card-alt { padding: 0.7rem; }
            .why-card-alt { padding: 0.6rem 0.4rem; }
            .why-icon-alt { width: 32px; height: 32px; font-size: 0.9rem; }
            .why-title-alt { font-size: 0.75rem; }
            .why-desc-alt { font-size: 0.65rem; }
            .feature-row-alt { padding: 0.4rem 0.5rem; gap: 6px; }
            .feature-row-alt i { font-size: 0.9rem; width: 18px; }
            .feature-row-alt span { font-size: 0.7rem; }
            .pricing-price-alt { font-size: 1.2rem; }
            .btn-pricing-alt { font-size: 0.68rem; padding: 6px 12px; }
        }

        /* ISSUE 7: responsive.css forces width:100% on ALL buttons at ≤576px
           and flex-wrap on all .d-flex elements. Override for services.php. */
        @media (max-width: 576px) {
            .hero-cta-group .btn-primary-alt,
            .hero-cta-group .btn-outline-alt,
            .cta-alt .btn-primary-alt,
            .cta-alt .btn-outline-alt {
                width: auto !important;
                display: inline-flex !important;
            }
            .hero-cta-group { flex-wrap: wrap !important; justify-content: center; }
            .cta-alt .d-flex.flex-wrap { flex-direction: row !important; justify-content: center !important; }
        }

        /* ISSUE 8: responsive.css forces flex-wrap on all rows including
           the Why Choose row which should keep its grid layout. */
        .why-alt .row {
            flex-wrap: wrap !important;
        }

        /* ISSUE 9: Hero row g-5 gutter causes horizontal overflow on mobile.
           Bootstrap g-5 adds negative margins on row + padding on columns.
           On small screens this pushes the columns past viewport width. */
        @media (max-width: 576px) {
            .hero-alt .row.g-5 {
                --bs-gutter-x: 0;
                margin-left: 0;
                margin-right: 0;
            }
            .hero-alt .row.g-5 > [class*="col-"] {
                padding-left: 0;
                padding-right: 0;
            }
        }

        /* ── SCROLLBAR HATAO — surefire fix ── */
        .hero-alt, .hero-alt * {
            overflow-x: hidden !important;
            overflow-y: hidden !important;
        }
        .hero-alt .hero-image-alt,
        .hero-alt .hero-image-alt img,
        .hero-alt .container,
        .hero-alt .row {
            overflow: hidden !important;
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>

    <!-- =========================================
    HERO
    ========================================= -->
    <section class="hero-alt" id="hero">
        <div class="bg-pattern"></div>
        <div class="bg-blob-shape"></div>
        <div class="float-badge-alt"><i class="fas fa-check-circle"></i> Verified Accounts</div>
        <div class="float-badge-alt" style="bottom:12%; right:6%; animation-delay:1.8s;"><i class="fas fa-bolt"></i> Instant Delivery</div>

        <div class="container position-relative" style="z-index:2;">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800">
                    <span class="tag-alt"><i class="fas fa-crown"></i> Premium Marketplace</span>
                    <h1 class="hero-title-alt">
                        Social Media<br>
                        <span class="highlight">Accounts Marketplace</span>
                    </h1>
                    <p class="hero-desc-alt">
                        Get high-quality verified accounts with secure delivery, premium support, and professional service.
                    </p>
                    <div class="hero-cta-group d-flex flex-wrap gap-3">
                        <a href="#services" class="btn-primary-alt"><i class="fas fa-rocket"></i> Explore Services</a>
                        <a href="#pricing" class="btn-outline-alt"><i class="fas fa-tag"></i> View Pricing</a>
                    </div>
                    <div class="hero-stats-alt">
                        <div class="stat-item">
                            <span class="stat-number" data-counter="50000">0</span>
                            <span class="stat-label">Accounts Sold</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-counter="10000">0</span>
                            <span class="stat-label">Happy Clients</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-counter="99">0%</span>
                            <span class="stat-label">Satisfaction</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="hero-image-alt">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='600' height='380' viewBox='0 0 600 380'%3E%3Crect width='600' height='380' fill='%23f5f0eb' rx='16'/%3E%3Ctext x='60' y='110' font-family='Inter' font-size='30' fill='%23023b45' font-weight='800'%3E%F0%9F%94%92%20Premium%20Accounts%3C/text%3E%3Ctext x='60' y='160' font-family='Inter' font-size='18' fill='%23023b45' opacity='0.8'%3EGmail%20%7C%20Facebook%20%7C%20Instagram%20%7C%20Twitter%3C/text%3E%3Ctext x='60' y='200' font-family='Inter' font-size='16' fill='%23023b45' opacity='0.7'%3E%E2%9C%94%EF%B8%8F%20Verified%20%7C%20Aged%20%7C%20Instant%20Delivery%3C/text%3E%3Ctext x='60' y='240' font-family='Inter' font-size='16' fill='%23023b45' opacity='0.7'%3E%F0%9F%92%B0%20Secure%20Purchase%20%7C%20%F0%9F%9B%A1%EF%B8%8F%2024%2F7%20Support%3C/text%3E%3Ccircle cx='460' cy='90' r='50' fill='%23023b45' opacity='0.06'/%3E%3Ccircle cx='460' cy='90' r='30' fill='%23023b45' opacity='0.12'/%3E%3Ctext x='442' y='102' font-family='Inter' font-size='40' fill='%23023b45'%3E%F0%9F%93%A6%3C/text%3E%3C/svg%3E"
                             alt="Premium Accounts" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
    SERVICES
    ========================================= -->
    <section class="services-alt section-padding" id="services">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="tag-alt"><i class="fas fa-th-large"></i> Our Services</span>
                <h2 class="title-alt">Premium <span class="highlight">Account Solutions</span></h2>
                <p class="subtitle-alt">High-quality verified accounts for all major platforms. Fresh and aged options.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card-alt">
                        <div class="service-icon-alt"><i class="fab fa-google"></i></div>
                        <h3 class="service-title-alt">Gmail Accounts</h3>
                        <p class="service-desc-alt">PVA verified with recovery access. Fresh & aged options.</p>
                        <ul class="service-features-alt">
                            <li><i class="fas fa-check-circle"></i> PVA Gmail</li>
                            <li><i class="fas fa-check-circle"></i> Fresh & Aged</li>
                            <li><i class="fas fa-check-circle"></i> Bulk Orders</li>
                            <li><i class="fas fa-check-circle"></i> Instant Delivery</li>
                        </ul>
                        <!-- <a href="add_to_cart.php" class="btn-service-alt">Order Now →</a> -->
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="150">
                    <div class="service-card-alt">
                        <div class="service-icon-alt"><i class="fab fa-facebook-f"></i></div>
                        <h3 class="service-title-alt">Facebook Accounts</h3>
                        <p class="service-desc-alt">Verified profiles, business-ready, aged with history.</p>
                        <ul class="service-features-alt">
                            <li><i class="fas fa-check-circle"></i> Verified Accounts</li>
                            <li><i class="fas fa-check-circle"></i> Business Ready</li>
                            <li><i class="fas fa-check-circle"></i> Aged Accounts</li>
                            <li><i class="fas fa-check-circle"></i> Bulk Orders</li>
                        </ul>
                        <!-- <a href="add_to_cart.php    " class="btn-service-alt">Order Now →</a> -->
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card-alt">
                        <div class="service-icon-alt"><i class="fab fa-instagram"></i></div>
                        <h3 class="service-title-alt">Instagram Accounts</h3>
                        <p class="service-desc-alt">PVA verified, marketing-ready, aged profiles.</p>
                        <ul class="service-features-alt">
                            <li><i class="fas fa-check-circle"></i> PVA Accounts</li>
                            <li><i class="fas fa-check-circle"></i> Marketing Ready</li>
                            <li><i class="fas fa-check-circle"></i> Aged Accounts</li>
                            <li><i class="fas fa-check-circle"></i> Bulk Purchase</li>
                        </ul>
                        <!-- <a href="#pricing" class="btn-service-alt">Order Now →</a> -->
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="250">
                    <div class="service-card-alt">
                        <div class="service-icon-alt"><i class="fab fa-twitter"></i></div>
                        <h3 class="service-title-alt">Twitter / X Accounts</h3>
                        <p class="service-desc-alt">Verified, aged, with followers & engagement.</p>
                        <ul class="service-features-alt">
                            <li><i class="fas fa-check-circle"></i> Verified Accounts</li>
                            <li><i class="fas fa-check-circle"></i> Aged Accounts</li>
                            <li><i class="fas fa-check-circle"></i> Marketing Ready</li>
                            <li><i class="fas fa-check-circle"></i> Bulk Orders</li>
                        </ul>
                        <!-- <a href="#pricing" class="btn-service-alt">Order Now →</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
    WHY CHOOSE
    ========================================= -->
    <section class="why-alt section-padding-sm">
        <div class="container">
            <div class="text-center mb-4" data-aos="fade-up">
                <span class="tag-alt"><i class="fas fa-star"></i> Why Choose Us</span>
                <h2 class="title-alt">Built on <span class="highlight">Trust & Quality</span></h2>
                <p class="subtitle-alt">We deliver premium accounts with unmatched reliability.</p>
            </div>
            <div class="row g-3">
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="why-card-alt"><div class="why-icon-alt"><i class="fas fa-gem"></i></div><h4 class="why-title-alt">Premium Quality</h4><p class="why-desc-alt">Top-tier verified accounts</p></div>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="150">
                    <div class="why-card-alt"><div class="why-icon-alt"><i class="fas fa-bolt"></i></div><h4 class="why-title-alt">Instant Delivery</h4><p class="why-desc-alt">Within minutes</p></div>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="why-card-alt"><div class="why-icon-alt"><i class="fas fa-lock"></i></div><h4 class="why-title-alt">Secure Purchase</h4><p class="why-desc-alt">100% safe transactions</p></div>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="250">
                    <div class="why-card-alt"><div class="why-icon-alt"><i class="fas fa-layer-group"></i></div><h4 class="why-title-alt">Bulk Orders</h4><p class="why-desc-alt">Wholesale available</p></div>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                    <div class="why-card-alt"><div class="why-icon-alt"><i class="fas fa-headset"></i></div><h4 class="why-title-alt">24/7 Support</h4><p class="why-desc-alt">Round-the-clock</p></div>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="350">
                    <div class="why-card-alt"><div class="why-icon-alt"><i class="fas fa-exchange-alt"></i></div><h4 class="why-title-alt">Fast Replacement</h4><p class="why-desc-alt">24-hour guarantee</p></div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
    FEATURES
    ========================================= -->
    <section class="section-padding-sm" style="background: rgba(255,255,255,0.1);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="tag-alt"><i class="fas fa-list-check"></i> Account Features</span>
                    <h2 class="title-alt">What Makes Our <span class="highlight">Accounts Premium</span></h2>
                    <p style="color: var(--text-primary); opacity:0.7; margin-bottom:1.5rem;">Every account undergoes rigorous verification to ensure quality and reliability.</p>
                    <div class="row g-2">
                        <div class="col-sm-6"><div class="feature-row-alt"><i class="fas fa-user-plus"></i><span>Fresh Accounts</span></div></div>
                        <div class="col-sm-6"><div class="feature-row-alt"><i class="fas fa-clock"></i><span>Aged Accounts</span></div></div>
                        <div class="col-sm-6"><div class="feature-row-alt"><i class="fas fa-user-check"></i><span>High Quality Profiles</span></div></div>
                        <div class="col-sm-6"><div class="feature-row-alt"><i class="fas fa-globe"></i><span>Country Options</span></div></div>
                        <div class="col-sm-6"><div class="feature-row-alt"><i class="fas fa-boxes"></i><span>Bulk Availability</span></div></div>
                        <div class="col-sm-6"><div class="feature-row-alt"><i class="fas fa-key"></i><span>Secure Access</span></div></div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="p-4 bg-white rounded-4 shadow-sm">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='500' height='350' viewBox='0 0 500 350'%3E%3Crect width='500' height='350' fill='%23f5f0eb' rx='20'/%3E%3Crect x='40' y='40' width='420' height='270' rx='16' fill='white' stroke='%23023b45' stroke-width='2'/%3E%3Ctext x='70' y='100' font-family='Inter' font-size='24' fill='%23023b45' font-weight='800'%3E%F0%9F%94%90%20Premium%20Features%3C/text%3E%3Ctext x='70' y='145' font-family='Inter' font-size='16' fill='%23023b45' opacity='0.85'%3E%E2%80%A2%20Phone%20Verified%20%28PVA%29%3C/text%3E%3Ctext x='70' y='180' font-family='Inter' font-size='16' fill='%23023b45' opacity='0.85'%3E%E2%80%A2%20Aged%20%26%20Fresh%20Options%3C/text%3E%3Ctext x='70' y='215' font-family='Inter' font-size='16' fill='%23023b45' opacity='0.85'%3E%E2%80%A2%20High%20Trust%20Score%3C/text%3E%3Ctext x='70' y='250' font-family='Inter' font-size='16' fill='%23023b45' opacity='0.85'%3E%E2%80%A2%20Recovery%20Access%3C/text%3E%3Ctext x='70' y='285' font-family='Inter' font-size='16' fill='%23023b45' opacity='0.85'%3E%E2%80%A2%20Instant%20Delivery%3C/text%3E%3Ccircle cx='380' cy='160' r='55' fill='%23023b45' opacity='0.06'/%3E%3Ctext x='364' y='172' font-family='Inter' font-size='44' fill='%23023b45'%3E%F0%9F%94%92%3C/text%3E%3C/svg%3E"
                             alt="Features" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
    PRICING
    ========================================= -->
    <section class="pricing-alt section-padding" id="pricing">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="tag-alt"><i class="fas fa-tags"></i> Pricing Overview</span>
                <h2 class="title-alt">Choose Your <span class="highlight">Package</span></h2>
                <p class="subtitle-alt">Flexible pricing for individual and bulk purchases.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="flip-up" data-aos-delay="100">
                    <div class="pricing-card-alt">
                        <div class="pricing-icon-alt"><i class="fab fa-google"></i></div>
                        <h4 class="pricing-name-alt">Gmail Package</h4>
                        <div class="pricing-price-alt">$70 <span>/ 100 acc</span></div>
                        <center> <s> 10 OFF</s></center>
                        <ul class="pricing-features-alt">
                            <li><i class="fas fa-check-circle"></i> Phone Verified</li>
                            <li><i class="fas fa-check-circle"></i> Fresh Accounts</li>
                            <li><i class="fas fa-check-circle"></i> Recovery Access</li>
                            <li><i class="fas fa-check-circle"></i> Instant Delivery</li>
                        </ul>
                        <a href="#" class="btn-pricing-alt order-now-btn" data-name="Gmail Accounts" data-price="2.99" data-qty="1">Order Now →</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="flip-up" data-aos-delay="150">
                    <div class="pricing-card-alt">
                        <span class="popular-tag">Popular</span>
                        <div class="pricing-icon-alt"><i class="fab fa-facebook-f"></i></div>
                        <h4 class="pricing-name-alt">Facebook Package</h4>
                       
                        <div class="pricing-price-alt">$50 <span>/ 100 acc</span></div>
                        <center> <s> 10 OFF</s></center>
                        <ul class="pricing-features-alt">
                            <li><i class="fas fa-check-circle"></i> Verified Profiles</li>
                            <li><i class="fas fa-check-circle"></i> Aged Accounts</li>
                            <li><i class="fas fa-check-circle"></i> Business Ready</li>
                            <li><i class="fas fa-check-circle"></i> Bulk Available</li>
                        </ul>
                        <a href="#" class="btn-pricing-alt order-now-btn" data-name="Facebook Accounts" data-price="4.99" data-qty="1">Order Now →</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="flip-up" data-aos-delay="200">
                    <div class="pricing-card-alt">
                        <div class="pricing-icon-alt"><i class="fab fa-instagram"></i></div>
                        <h4 class="pricing-name-alt">Instagram Package</h4>
                        <div class="pricing-price-alt">$50<span>/ 100 acc</span></div>
                        <center> <s> 10 OFF</s></center>
                        <ul class="pricing-features-alt">
                            <li><i class="fas fa-check-circle"></i> PVA Verified</li>
                            <li><i class="fas fa-check-circle"></i> Aged Accounts</li>
                            <li><i class="fas fa-check-circle"></i> Marketing Ready</li>
                            <li><i class="fas fa-check-circle"></i> Instant Access</li>
                        </ul>
                        <a href="#" class="btn-pricing-alt order-now-btn" data-name="Instagram Accounts" data-price="3.49" data-qty="1">Order Now →</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="flip-up" data-aos-delay="250">
                    <div class="pricing-card-alt">
                        <div class="pricing-icon-alt"><i class="fab fa-twitter"></i></div>
                        <h4 class="pricing-name-alt">Twitter Package</h4>
                        <div class="pricing-price-alt">$90 <span>/100 acc</span></div>
                        <center> <s> 10 OFF</s></center>
                        <ul class="pricing-features-alt">
                            <li><i class="fas fa-check-circle"></i> Verified Accounts</li>
                            <li><i class="fas fa-check-circle"></i> Aged Profiles</li>
                            <li><i class="fas fa-check-circle"></i> Marketing Ready</li>
                            <li><i class="fas fa-check-circle"></i> Bulk Orders</li>
                        </ul>
                        <a href="#" class="btn-pricing-alt order-now-btn" data-name="Twitter X Accounts" data-price="3.99" data-qty="1">Order Now →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
    PROCESS
    ========================================= -->
    <section class="section-padding-sm" style="background: rgba(255,255,255,0.05);">
        <div class="container">
            <div class="text-center mb-4" data-aos="fade-up">
                <span class="tag-alt"><i class="fas fa-route"></i> How It Works</span>
                <h2 class="title-alt">Simple <span class="highlight">4-Step</span> Process</h2>
                <p class="subtitle-alt">Get your premium accounts in minutes with our streamlined ordering process.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="step-alt" data-aos="fade-right" data-aos-delay="100">
                        <div class="step-num-alt">1</div>
                        <div class="step-content-alt"><h4>Choose Service</h4><p>Select the account type you need</p></div>
                    </div>
                    <div class="step-alt" data-aos="fade-right" data-aos-delay="150">
                        <div class="step-num-alt">2</div>
                        <div class="step-content-alt"><h4>Select Quantity</h4><p>Choose the number of accounts</p></div>
                    </div>
                    <div class="step-alt" data-aos="fade-right" data-aos-delay="200">
                        <div class="step-num-alt">3</div>
                        <div class="step-content-alt"><h4>Complete Payment</h4><p>Secure payment via our partners</p></div>
                    </div>
                    <div class="step-alt" data-aos="fade-right" data-aos-delay="250">
                        <div class="step-num-alt">4</div>
                        <div class="step-content-alt"><h4>Receive Delivery</h4><p>Get your accounts instantly</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- =========================================
    STATS
    ========================================= -->
    <section class="section-padding-sm">
        <div class="container">
            <div class="stats-alt">
                <div class="row text-center g-4">
                    <div class="col-6 col-md-3"><div class="stat-number-alt" data-counter="50000">0</div><div class="stat-label-alt">Accounts Sold</div></div>
                    <div class="col-6 col-md-3"><div class="stat-number-alt" data-counter="10000">0</div><div class="stat-label-alt">Happy Customers</div></div>
                    <div class="col-6 col-md-3"><div class="stat-number-alt" data-counter="100">0</div><div class="stat-label-alt">Daily Orders</div></div>
                    <div class="col-6 col-md-3"><div class="stat-number-alt" data-counter="99">0%</div><div class="stat-label-alt">Satisfaction Rate</div></div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
    FAQ - FULLY WORKING - CLICK TO SHOW/HIDE
    ========================================= -->

    <!-- =========================================
    CTA
    ========================================= -->
    <section class="section-padding-sm">
        <div class="container">
            <div class="cta-alt" data-aos="zoom-in" data-aos-duration="600">
                <h2 class="cta-title">Ready to Order <span style="color: var(--text-primary);">Premium Accounts?</span></h2>
                <p class="cta-desc">Get reliable account solutions with premium service and fast delivery.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="#pricing" class="btn-primary-alt"><i class="fas fa-shopping-cart"></i> Order Now</a>
                    <a href="#" class="btn-outline-alt"><i class="fas fa-headset"></i> Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================
    SCRIPTS
    ========================================================= -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
            // COUNTERS
            // ============================
            const counters = document.querySelectorAll('[data-counter]');
            let countersStarted = false;

            function startCounters() {
                counters.forEach(el => {
                    const target = parseInt(el.getAttribute('data-counter'));
                    if (isNaN(target)) return;
                    let current = 0;
                    const increment = target / 70;
                    const timer = setInterval(() => {
                        current += increment;
                        if (current >= target) {
                            el.innerText = target.toLocaleString();
                            clearInterval(timer);
                        } else {
                            el.innerText = Math.floor(current).toLocaleString();
                        }
                    }, 25);
                });
            }

            const statsObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !countersStarted) {
                        countersStarted = true;
                        startCounters();
                        statsObserver.disconnect();
                    }
                });
            }, { threshold: 0.4 });

            document.querySelectorAll('.hero-stats-alt, .stats-alt').forEach(section => {
                statsObserver.observe(section);
            });

            // ============================
            // TESTIMONIAL SLIDER
            // ============================
            const testimonialsAlt = [
                { name: 'John Doe', role: 'Marketing Manager', text: 'Best Gmail accounts I\'ve ever purchased. Quality outstanding!', avatar: 'JD' },
                { name: 'Sarah Miller', role: 'E-commerce Owner', text: 'Facebook accounts are aged perfectly. Great for ads!', avatar: 'SM' },
                { name: 'Michael K.', role: 'Agency Owner', text: 'Instagram accounts always high quality and reliable.', avatar: 'MK' },
                { name: 'Anna Rodriguez', role: 'Digital Marketer', text: 'Excellent support! Helped with bulk Twitter accounts.', avatar: 'AR' },
                { name: 'David Wilson', role: 'Business Owner', text: 'The best marketplace for PVA accounts. Never disappointed.', avatar: 'DW' },
                { name: 'Lisa Chen', role: 'Startup Founder', text: 'Fast delivery and premium quality. Perfect for my business.', avatar: 'LC' }
            ];

            const trackAlt = document.getElementById('testimonialTrackAlt');
            if (trackAlt) {
                let currentSlide = 0;
                let totalSlides = testimonialsAlt.length;
                let slidesToShow = 3;
                let autoInterval;

                function renderTestimonialsAlt() {
                    trackAlt.innerHTML = '';
                    testimonialsAlt.forEach((t) => {
                        const card = document.createElement('div');
                        card.className = 'testimonial-alt';
                        card.innerHTML = `
                            <div class="stars">★★★★★</div>
                            <div class="quote">"${t.text}"</div>
                            <div class="author">
                                <div class="avatar">${t.avatar}</div>
                                <div>
                                    <p class="name">${t.name}</p>
                                    <p class="role">${t.role}</p>
                                </div>
                            </div>
                        `;
                        trackAlt.appendChild(card);
                    });
                    updateSliderAlt();
                }

                function updateSliderAlt() {
                    const cards = trackAlt.children;
                    const cardWidth = cards[0]?.offsetWidth || 0;
                    const gap = 16;
                    const maxSlides = Math.max(0, totalSlides - slidesToShow);
                    if (currentSlide > maxSlides) currentSlide = maxSlides;
                    const offset = currentSlide * (cardWidth + gap);
                    trackAlt.style.transform = `translateX(-${offset}px)`;
                }

                function getSlidesToShowAlt() {
                    if (window.innerWidth < 768) return 1;
                    if (window.innerWidth < 992) return 2;
                    return 3;
                }

                function handleResizeAlt() {
                    slidesToShow = getSlidesToShowAlt();
                    const maxSlides = Math.max(0, totalSlides - slidesToShow);
                    if (currentSlide > maxSlides) currentSlide = maxSlides;
                    updateSliderAlt();
                }

                renderTestimonialsAlt();
                setTimeout(updateSliderAlt, 100);
                window.addEventListener('resize', handleResizeAlt);

                document.getElementById('prevTestimonialAlt')?.addEventListener('click', () => {
                    if (currentSlide > 0) { currentSlide--; updateSliderAlt(); }
                });
                document.getElementById('nextTestimonialAlt')?.addEventListener('click', () => {
                    const max = Math.max(0, totalSlides - slidesToShow);
                    if (currentSlide < max) { currentSlide++; updateSliderAlt(); }
                });

                function startAutoSlideAlt() {
                    autoInterval = setInterval(() => {
                        const max = Math.max(0, totalSlides - slidesToShow);
                        if (currentSlide < max) { currentSlide++; } else { currentSlide = 0; }
                        updateSliderAlt();
                    }, 5000);
                }
                startAutoSlideAlt();

                const wrapper = document.querySelector('.testimonial-slider-wrapper');
                wrapper?.addEventListener('mouseenter', () => clearInterval(autoInterval));
                wrapper?.addEventListener('mouseleave', startAutoSlideAlt);
            }

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

            // ============================
            // ORDER NOW BUTTONS
            // ============================
            document.querySelectorAll('.order-now-btn').forEach(function(btn) {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Read name from data attribute
                    var name = this.getAttribute('data-name');
                    if (!name) return;

                    // READ PRICE FROM THE CARD'S VISIBLE TEXT, not from data attribute
                    var card = this.closest('.pricing-card-alt');
                    var priceEl = card ? card.querySelector('.pricing-price-alt') : null;
                    var price = 0;
                    if (priceEl) {
                        // Extract numeric price from text like "$70 / 100 acc" → 70
                        var priceText = priceEl.textContent.trim();
                        var match = priceText.match(/\$?(\d+(?:\.\d+)?)/);
                        if (match) price = parseFloat(match[1]);
                    }
                    // Fallback to data-price if card parsing fails
                    if (!price && this.getAttribute('data-price')) {
                        price = parseFloat(this.getAttribute('data-price'));
                    }
                    if (!price || price <= 0) return;

                    var qty = this.getAttribute('data-qty') || 1;

                    var product = {
                        id: name.toLowerCase().replace(/\s+/g, '_') + '_' + Date.now(),
                        name: name,
                        price: price,
                        quantity: parseInt(qty)
                    };

                    // Store in localStorage
                    var cart = JSON.parse(localStorage.getItem('direct_cart') || '[]');
                    var found = false;
                    for (var i = 0; i < cart.length; i++) {
                        if (cart[i].name === product.name) {
                            cart[i].quantity += product.quantity;
                            found = true; break;
                        }
                    }
                    if (!found) cart.push(product);
                    localStorage.setItem('direct_cart', JSON.stringify(cart));

                    // Redirect to checkout (checkout.php will read direct_cart and merge)
                    window.location.href = 'checkout.php?direct=1';
                });
            });

            console.log('FAQ accordion fixed and working flawlessly.');
        })();
    </script>
    <?php
include 'footer.php';
?>
</body>
</html>