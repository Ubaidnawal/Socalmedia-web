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
    
    <style>
        body{
background: white;

        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            /* background: var(--primary); */
            overflow-x: hidden;
            font-family: 'Space Grotesk', sans-serif;
        }

        /* Quantum Slider Container */
        .quantum-slider {
            position: relative;
            width: 100%;
            height: 85vh;
            overflow: hidden;
            background: var(--primary);
        }

        /* Canvas 3D Background */
        #canvas3d {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            pointer-events: none;
        }

        /* Slides Container with 3D Space */
        .slides-quantum {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 10;
        }

        .slide-quantum {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            visibility: hidden;
            transition: opacity 1.2s cubic-bezier(0.16, 1, 0.3, 1), visibility 1.2s;
            overflow: hidden;
        }

        .slide-quantum.active {
            opacity: 1;
            visibility: visible;
            z-index: 20;
        }

        /* Holographic Background Layer */
        .holographic-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            filter: brightness(0.7) saturate(1.2);
            transition: transform 10s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }

        .slide-quantum.active .holographic-bg {
            transform: scale(1.15);
            animation: quantumDrift 12s infinite alternate;
        }

        @keyframes quantumDrift {
            0% { transform: scale(1.15) translate(0, 0); }
            100% { transform: scale(1.25) translate(-2%, -2%); }
        }

        /* Neural Overlay System */
        .neural-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 30% 40%, rgba(2,59,69,0.6) 0%, rgba(0,0,0,0.85) 100%);
            z-index: 1;
        }

        /* Holographic Glass Card */
        .holo-card {
            position: relative;
            z-index: 15;
            background: rgba(254, 250, 247, 0.05);
            backdrop-filter: blur(20px) saturate(180%);
            border-radius: 64px;
            border: 1px solid rgba(183, 160, 139, 0.3);
            padding: 3rem 3.5rem;
            transition: all 0.6s cubic-bezier(0.34, 1.2, 0.64, 1);
            animation: levitate 5s infinite alternate ease-in-out;
            box-shadow: 0 30px 60px rgba(0,0,0,0.4), inset 0 1px 1px rgba(255,255,255,0.1);
        }

        @keyframes levitate {
            0% { transform: translateY(0px) rotateX(0deg); }
            100% { transform: translateY(-20px) rotateX(5deg); }
        }

        .holo-card:hover {
            border-color: var(--gold);
            box-shadow: 0 40px 80px rgba(0,0,0,0.5), 0 0 40px rgba(183, 160, 139, 0.4);
            transform: translateY(-8px) scale(1.02);
        }

        /* Quantum Typography */
        .quantum-badge {
            font-size: 0.85rem;
            letter-spacing: 6px;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 1rem;
            display: inline-block;
            font-weight: 500;
            position: relative;
            font-family: 'Space Grotesk', monospace;
        }

        .quantum-badge::before {
            content: '✦';
            margin-right: 8px;
            opacity: 0.8;
        }

        .quantum-badge::after {
            content: '✦';
            margin-left: 8px;
            opacity: 0.8;
        }

        .quantum-heading {
            font-size: clamp(3rem, 9vw, 6rem);
            font-weight: 800;
            line-height: 1.05;
            background: linear-gradient(135deg, var(--cream) 0%, var(--gold) 50%, var(--cream) 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 1.5rem;
            letter-spacing: -0.02em;
            font-family: 'Playfair Display', serif;
        }

        .quantum-text {
            font-size: 1rem;
            line-height: 1.7;
            color: rgba(254, 250, 247, 0.85);
            margin-bottom: 2rem;
            max-width: 90%;
        }

        /* Neural Button */
        .neural-btn {
            background: rgba(183, 160, 139, 0.15);
            border: 1.5px solid var(--gold);
            padding: 14px 40px;
            font-weight: 600;
            font-size: 0.9rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--cream);
            border-radius: 100px;
            position: relative;
            overflow: hidden;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            transition: all 0.4s;
            cursor: pointer;
            backdrop-filter: blur(5px);
        }

        .neural-btn i {
            transition: transform 0.3s;
        }

        .neural-btn:hover {
            background: var(--gold);
            color: var(--primary);
            transform: scale(1.08);
            box-shadow: 0 0 35px rgba(183, 160, 139, 0.7);
            gap: 18px;
        }

        .neural-btn:hover i {
            transform: translateX(8px);
        }

        /* 3D Navigation Orbs */
        .nav-orb {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 70px;
            height: 70px;
            background: rgba(254, 250, 247, 0.08);
            backdrop-filter: blur(15px);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 30;
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            border: 1px solid rgba(183, 160, 139, 0.5);
            color: var(--cream);
            font-size: 1.6rem;
        }

        .nav-orb-left { left: 2rem; }
        .nav-orb-right { right: 2rem; }

        .nav-orb:hover {
            background: var(--gold);
            transform: translateY(-50%) scale(1.3) rotate(360deg);
            border-color: var(--cream);
            color: var(--primary);
            box-shadow: 0 0 40px rgba(183, 160, 139, 0.9);
        }

        /* Quantum Dots */
        .quantum-dots {
            position: absolute;
            bottom: 2.5rem;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            gap: 1rem;
            z-index: 30;
        }

        .quantum-dot {
            width: 12px;
            height: 12px;
            background: rgba(254, 250, 247, 0.4);
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            position: relative;
        }

        .quantum-dot.active {
            background: var(--gold);
            width: 45px;
            border-radius: 20px;
            box-shadow: 0 0 20px var(--gold);
        }

        .quantum-dot:hover {
            transform: scale(1.3);
            background: var(--gold);
        }

        /* Animated Time Crystal */
        .time-crystal {
            position: absolute;
            bottom: 30px;
            right: 30px;
            width: 80px;
            height: 80px;
            z-index: 35;
            cursor: pointer;
        }

        .crystal-ring {
            transition: stroke-dashoffset 0.05s linear;
            filter: drop-shadow(0 0 5px var(--gold));
        }

        /* Particle Effect Container */
        .particle-field {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 25;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            width: 2px;
            height: 2px;
            background: var(--gold);
            border-radius: 50%;
            opacity: 0;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .holo-card { padding: 1.5rem; border-radius: 40px; margin: 0 1rem; }
            .nav-orb { width: 45px; height: 45px; font-size: 1rem; }
            .nav-orb-left { left: 1rem; }
            .nav-orb-right { right: 1rem; }
            .time-crystal { width: 55px; height: 55px; bottom: 20px; right: 20px; }
            .quantum-text { font-size: 0.85rem; max-width: 100%; }
        }

        @media (min-width: 1600px) {
            .holo-card { max-width: 800px; }
        }

        /* Text Reveal Quantum Style */
        .reveal-quantum {
            opacity: 0;
            transform: translateY(40px) scale(0.95);
        }

        /* Glowing Border Animation */
        @keyframes quantumPulse {
            0%, 100% { border-color: rgba(183, 160, 139, 0.3); box-shadow: 0 0 0 0 rgba(183, 160, 139, 0); }
            50% { border-color: rgba(183, 160, 139, 0.8); box-shadow: 0 0 30px 10px rgba(183, 160, 139, 0.3); }
        }

        .active .holo-card {
            animation: quantumPulse 3s infinite;
        }
    </style>
</head>
<body>
<!--  -->


<!--  -->

    <div class="quantum-slider" id="quantumSlider">
        <!-- 3D Canvas Background -->
        <canvas id="canvas3d"></canvas>
        
        <div class="slides-quantum" id="quantumSlides">
            <!-- Slide 1 - Quantum Realm -->
            <div class="slide-quantum active" data-index="0">
                <div class="holographic-bg" style="background-image: url('Gemini_Generated_Image_bml1d9bml1d9bml1.png');"></div>
                <div class="neural-overlay"></div>
                <div class="container h-100 d-flex align-items-center">
                    <div class="row w-100 justify-content-start ms-lg-5">
                        <div class="col-12 col-md-8 col-lg-6">
                            <div class="holo-card">
                                <div class="quantum-badge reveal-quantum">QUANTUM REALM</div>
                                <h1 class="quantum-heading reveal-quantum">Dimensional<br><span style="background: linear-gradient(135deg, #B7A08B, #FEFAF7); -webkit-background-clip: text;">Elegance</span></h1>
                                <p class="quantum-text reveal-quantum">Step into a dimension where luxury transcends reality. Experience the fusion of art, technology, and timeless sophistication.</p>
                                <button class="neural-btn reveal-quantum">ENTER QUANTUM <i class="fas fa-angle-double-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 - Holographic Dreams -->
            <div class="slide-quantum" data-index="1">
                <div class="holographic-bg" style="background-image: url('Gemini_Generated_Image_cmy0tdcmy0tdcmy0.png');"></div>
                <div class="neural-overlay"></div>
                <div class="container h-100 d-flex align-items-center">
                    <div class="row w-100 justify-content-end me-lg-5">
                        <div class="col-12 col-md-8 col-lg-6 text-end">
                            <div class="holo-card text-start">
                                <div class="quantum-badge reveal-quantum">HOLOGRAPHIC VISIONS</div>
                                <h1 class="quantum-heading reveal-quantum">Infinite<br><span style="background: linear-gradient(135deg, #FEFAF7, #B7A08B); -webkit-background-clip: text;">Possibilities</span></h1>
                                <p class="quantum-text reveal-quantum">Where holographic dreams meet tangible reality. Redefining the boundaries of premium living.</p>
                                <button class="neural-btn reveal-quantum">EXPLORE INFINITY <i class="fas fa-angle-double-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 - Neural Luxury -->
            <div class="slide-quantum" data-index="2">
                <div class="holographic-bg" style="background-image: url('Gemini_Generated_Image_60k6hk60k6hk60k6.png');"></div>
                <div class="neural-overlay"></div>
                <div class="container h-100 d-flex align-items-center">
                    <div class="row w-100 justify-content-center">
                        <div class="col-12 col-md-8 col-lg-6 text-center">
                            <div class="holo-card">
                                <div class="quantum-badge reveal-quantum">NEURAL LUXURY</div>
                                <h1 class="quantum-heading reveal-quantum">Future<br><span style="background: linear-gradient(135deg, #B7A08B, #FEFAF7); -webkit-background-clip: text;">Awakens</span></h1>
                                <p class="quantum-text reveal-quantum">Neural interfaces meet classical elegance. The pinnacle of tomorrow's luxury experience awaits.</p>
                                <button class="neural-btn reveal-quantum">AWAKEN NOW <i class="fas fa-angle-double-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3D Navigation Orbs -->
        <div class="nav-orb nav-orb-left" id="quantumPrev">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="nav-orb nav-orb-right" id="quantumNext">
            <i class="fas fa-chevron-right"></i>
        </div>

        <!-- Quantum Dots -->
        <div class="quantum-dots" id="quantumDots"></div>

        <!-- Time Crystal Progress -->
        <div class="time-crystal" id="timeCrystal">
            <svg width="80" height="80" viewBox="0 0 80 80">
                <circle cx="40" cy="40" r="35" fill="none" stroke="rgba(183,160,139,0.2)" stroke-width="3"/>
                <circle class="crystal-ring" cx="40" cy="40" r="35" fill="none" stroke="#B7A08B" stroke-width="3" stroke-dasharray="219.91" stroke-dashoffset="0"/>
            </svg>
        </div>

        <!-- Particle Field -->
        <div class="particle-field" id="particleField"></div>

        



    </div>
<br>
<br>
<!-- features -->
<div class="bg-white">

<center><H1><em><B>Our Feauters</B></em></H1></center>
  <style>
        :root {
            --card-radius: 18px;
            --card-shadow: 0 4px 24px rgba(0, 0, 0, 0.07);
            --card-shadow-hover: 0 20px 50px rgba(0, 0, 0, 0.15);
            /*   */
            --transition: 0.4s cubic-bezier(0.25, 0.8, 0.25, 1.2);
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 28px;
            padding: 20px;
            max-width: 1300px;
            margin: 0 auto;
            width: 100%;
        }

        .card {
            position: relative;
            background: #fff;
            border-radius: var(--card-radius);
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: transform var(--transition), box-shadow var(--transition);
            cursor: pointer;
            display: flex;
            flex-direction: column;
            box-shadow: 0 8px 10px #023b45;
        }

        .card:hover {
            transform: translateY(-12px);
            box-shadow: var(--card-shadow-hover);
        }

        /* Image wrapper */
        .card-img-wrap {
            position: relative;
            overflow: hidden;
            aspect-ratio: 4 / 3;
            width: 100%;
        }

        .card-img-wrap img {
            width: 100%;
            height: 130%;
            object-fit: cover;
            display: block;
            transition: transform 0.6s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .card:hover .card-img-wrap img {
            transform: scale(1.12);
        }

        /* Gradient overlay */
        .card-img-wrap::after {
            content: '';
            position: absolute;
            inset: 0;
            opacity: 0;
            transition: opacity 0.4s ease;
            pointer-events: none;
            z-index: 1;
        }
        .card:nth-child(1) .card-img-wrap::after {
            /* background: linear-gradient(180deg, transparent 50%, rgba(99, 102, 241, 0.45)); */
        }
        .card:nth-child(2) .card-img-wrap::after {
            /* background: linear-gradient(180deg, transparent 50%, rgba(236, 72, 153, 0.45)); */
        }
        .card:nth-child(3) .card-img-wrap::after {
            /* background: linear-gradient(180deg, transparent 50%, rgba(245, 158, 11, 0.45)); */
        }
        .card:nth-child(4) .card-img-wrap::after {
            /* background: linear-gradient(180deg, transparent 50%, rgba(16, 185, 129, 0.45)); */
        }
        .card:hover .card-img-wrap::after {
            opacity: 1;
        }

        /* Accent bar */
        .card-accent {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 4px;
            z-index: 2;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }
        .card:nth-child(1) .card-accent {
            background: var(--accent-1);
        }
        .card:nth-child(2) .card-accent {
            background: var(--accent-2);
        }
        .card:nth-child(3) .card-accent {
            background: var(--accent-3);
        }
        .card:nth-child(4) .card-accent {
            background: var(--accent-4);
        }
        .card:hover .card-accent {
            transform: scaleX(1);
        }

        /* Body */
        .card-body {
            padding: 22px 20px 24px;
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 8px;
            position: relative;
            z-index: 1;
            background: #fff;
              box-shadow: 10px 10px black;

        }

        .card-body .tag {
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            display: inline-block;
            padding: 4px 10px;
            border-radius: 20px;
            width: fit-content;
             box-shadow: 2px 3px black;
        }
        .card:nth-child(1) .tag {
            color: #6366f1;
            background: #eef2ff;
        }
        .card:nth-child(2) .tag {
            color: #ec4899;
            background: #fdf2f8;
        }
        .card:nth-child(3) .tag {
            color: #f59e0b;
            background: #fffbeb;
        }
        .card:nth-child(4) .tag {
            color: #10b981;
            background: #ecfdf5;
        }

        .card-body h3 {
            font-size: 1.2rem;
            font-weight: 700;
            color: #111827;
            margin: 0;
            line-height: 1.3;
        }

        .card-body p {
            font-size: 0.9rem;
            color: #6b7280;
            line-height: 1.6;
            margin: 0;
            flex: 1;
        }

        .card-body .read-more {
            font-size: 0.85rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 4px;
            transition: gap 0.3s ease;
        }
        .card:nth-child(1) .read-more {
            color: #6366f1;
        }
        .card:nth-child(2) .read-more {
            color: #ec4899;
        }
        .card:nth-child(3) .read-more {
            color: #f59e0b;
        }
        .card:nth-child(4) .read-more {
            color: #10b981;
        }
        .card:hover .read-more {
            gap: 10px;
        }
        .read-more .arrow {
            transition: transform 0.3s ease;
            font-size: 1.1rem;
        }
        .card:hover .read-more .arrow {
            transform: translateX(4px);
        }

        /* ============ RESPONSIVE ============ */
        @media (max-width: 1024px) {
            .card-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
                padding: 16px;
            }
        }

        @media (max-width: 560px) {
            .card-grid {
                grid-template-columns: 1fr;
                gap: 18px;
                padding: 12px;
                max-width: 420px;
                margin: 0 auto;
            }
            .card:hover {
                transform: translateY(-6px);
            }
            .card-body {
                padding: 16px 14px 20px;
            }
            .card-body h3 {
                font-size: 1.1rem;
            }
            .card-body p {
                font-size: 0.85rem;
            }
        }
    </style>
</head>
<body>

    <!-- ========== 4 FEATURE IMAGE CARDS ========== -->
    <div class="card-grid">

        <!-- Card 1 -->
        <div class="card">
            <div class="card-img-wrap">
                <img src="../Image/gmail.jpg" alt="Design" loading="lazy">
                <div class="card-accent"></div>
            </div>
            <div class="card-body">
                <span class="tag">Gmail</span>
                <h3><em>Article</em></h3>
                <p><em>Choose our premium PVA Gmail accounts for reliable access, fast delivery, high-quality service, and dedicated customer support.
</p></em>
                <a href="gmail_artical.php" class="read-more">More Details <span class="arrow">→</span></a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card">
            <div class="card-img-wrap">
                <img src="../Image/facebook.jpg" alt="Development" loading="lazy">
                <div class="card-accent"></div>
            </div>
            <div class="card-body">
                <span class="tag">Develop</span>
                <h3><em>Article</em></h3>
                <p><em>Choose our premium Facebook accounts for reliable performance, fast delivery, quality assurance, and professional customer support.
</em></p>
                <a href="facebook_artical.php" class="read-more">More Details <span class="arrow">→</span></a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="card">
            <div class="card-img-wrap">
                <img src="../Image/instagram.jpg" alt="Analytics" loading="lazy">
                <div class="card-accent"></div>
            </div>
            <div class="card-body">
                <span class="tag">Analytics</span>
                <h3><em>Article</em></h3>
                <p> <em>Choose our premium Instagram accounts for reliable performance, quick delivery, high-quality profiles, and dedicated customer support.
</em></p>
                <a href="instagram_artical.php" class="read-more">More Details <span class="arrow">→</span></a>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="card">
            <div class="card-img-wrap">
                <img src="../Image/twitter.jpg" alt="Strategy" loading="lazy">
                <div class="card-accent"></div>
            </div>
            <div class="card-body">
                <span class="tag">Strategy</span>
                <h3><em>Article</em></h3>
                <p><em>Choose our premium Twitter (X) accounts for dependable access, fast delivery, quality profiles, and responsive customer support.
</em></p>
                <a href="tiwitter_artical.php" class="read-more">More Details <span class="arrow">→</span></a>
            </div>
        </div>
<!-- second -->




    </div>

</div>
<!-- headings Accounts -->

<center class="bg-white"><h1><em>More_Accounts</em></h1></center>
<!-- proudts cars -->

<div class="bg-white">
<!-- product cards -->

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
            padding: 0.75rem 1.5rem;
            border-radius: 60px;
            font-size: 0.85rem;
            transition: all 0.25s;
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

        /* AOS override - NEVER block clicks on interactive elements */
        [data-aos] {
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
                    <div class="badge-extra badge-best"><i class="fas fa-star"></i> 25% Off</div>
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
                            <span class="current-price"><span class="price-unit">$</span>5</span>
                            <span class="old-price">$14</span>
                            <span class="discount-badge">-25 OFF%</span>
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
                           <a href="add_to_cart.php"> <button class="btn-gradient-cart addCartBtn" data-name="Gmail Accounts" data-price="40"><i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span></button></a>
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
                        <h5><em>Fresh Account</em></h5>
                        <div class="product-rating">
                            <div class="star-rating" data-product="facebook"></div>
                            <span class="rating-count" data-product="facebook">(215 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="current-price"><span class="price-unit">$</span>9</span>
                            <span class="old-price">$15</span>
                            <span class="discount-badge">-20%</span>
                            <span class="qty-badge"><i class="fas fa-database"></i> 50 Accounts</span>
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
                            <span class="current-price"><span class="price-unit">$</span>9</span>
                            <span class="old-price">$16</span>
                            <span class="discount-badge">-22%</span>
                            <span class="qty-badge"><i class="fas fa-database"></i> 50 Accounts</span>
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
                        <h5><em>Fresh Account</em></h5>
                        <div class="product-rating">
                            <div class="star-rating" data-product="twitter"></div>
                            <span class="rating-count" data-product="twitter">(156 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="current-price"><span class="price-unit">$</span>35</span>
                            <span class="old-price">$45</span>
                            <span class="discount-badge">-20%</span>
                            <span class="qty-badge"><i class="fas fa-database"></i> 50 Accounts</span>
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
                        <h5><em>Fresh Account</em></h5>
                        <div class="product-rating">
                            <div class="star-rating" data-product="tiktok"></div>
                            <span class="rating-count" data-product="tiktok">(94 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="current-price"><span class="price-unit">$</span>35</span>
                            <span class="old-price">$50</span>
                            <span class="discount-badge">-25%</span>
                            <span class="qty-badge"><i class="fas fa-database"></i> 50 Accounts</span>
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
<!-- outlook -->
             <div class="col" data-product-id="outlook">
                <div class="attract-card">
                    <div class="badge-extra badge-trend"><i class="fas fa-arrow-trend-up"></i> Trending</div>
                    <div class="card-top-image">
                        <img src="../Image/outlook.jpg" alt="Outlook Accounts">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title"><em>Outlook Accounts</em></h3>
                        <p class="short-desc"><em>Established accounts with email access, perfect for brand</em></p>
                        <h5><em>Fresh Account</em></h5>
                        <div class="product-rating">
                            <div class="star-rating" data-product="outlook"></div>
                            <span class="rating-count" data-product="outlook">(156 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="current-price"><span class="price-unit">$</span>9</span>
                            <span class="old-price">$15</span>
                            <span class="discount-badge">-16%</span>
                            <span class="qty-badge"><i class="fas fa-database"></i> 50 Accounts</span>
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
                            <button class="btn-outline-details detailBtn" data-name="Outlook Accounts"><i class="fas fa-eye"></i> Details</button>
                            <button class="btn-gradient-cart addCartBtn" data-name="Outlook Accounts" data-price="50"><i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span></button>
                        </div>
                    </div>
                </div>
            </div>
<!-- threads -->
             <div class="col" data-product-id="threads">
                <div class="attract-card">
                    <div class="badge-extra badge-trend"><i class="fas fa-arrow-trend-up"></i> Trending</div>
                    <div class="card-top-image">
                        <img src="../Image/threads.png" alt="Threads Accounts">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title"><em>Threads Accounts</em></h3>
                        <p class="short-desc"><em>Established accounts with email access, perfect for brand</em></p>
                        <h5><em>Fresh Account</em></h5>
                        <div class="product-rating">
                            <div class="star-rating" data-product="threads"></div>
                            <span class="rating-count" data-product="threads">(156 reviews)</span>
                        </div>
                        <div class="price-modern">
                            <span class="current-price"><span class="price-unit">$</span>9</span>
                            <span class="old-price">$16</span>
                            <span class="discount-badge">-20%</span>
                            <span class="qty-badge"><i class="fas fa-database"></i> 50 Accounts</span>
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
                            <button class="btn-outline-details detailBtn" data-name="Threads Accounts"><i class="fas fa-eye"></i> Details</button>
                            <button class="btn-gradient-cart addCartBtn" data-name="Threads Accounts" data-price="50"><i class="fas fa-shopping-cart"></i> <span class="cart-text">Add to Cart</span><span class="spinner"></span></button>
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
                },
                outlook: {
                    name: 'Outlook Accounts',
                    desc: 'Established Outlook accounts with email access, perfect for business and brand use.',
                    price: 30,
                    oldPrice: 45,
                    discount: '-33%',
                    stock: 98,
                    avg: 4.3,
                    total: 112,
                    distribution: { 5: 48, 4: 28, 3: 12, 2: 6, 1: 4 },
                    reviews: [
                        { name: 'David B.', country: 'USA', text: 'Perfect for business use.', rating: 5,
                            date: '2024-12-14' },
                        { name: 'Nina T.', country: 'UK', text: 'Great quality accounts.', rating: 4,
                            date: '2024-12-09' },
                        { name: 'Peter L.', country: 'Canada', text: 'Highly recommended.', rating: 5,
                            date: '2024-12-03' },
                        { name: 'Olivia W.', country: 'Australia', text: 'Fast delivery.', rating: 4,
                            date: '2024-11-26' },
                        { name: 'Mark J.', country: 'USA', text: 'Excellent service!', rating: 5, date: '2024-11-21' }
                    ]
                },
                threads: {
                    name: 'Threads Accounts',
                    desc: 'Established Threads accounts with email access, perfect for brand building.',
                    price: 25,
                    oldPrice: 38,
                    discount: '-34%',
                    stock: 98,
                    avg: 4.2,
                    total: 98,
                    distribution: { 5: 40, 4: 30, 3: 15, 2: 8, 1: 5 },
                    reviews: [
                        { name: 'Emma W.', country: 'USA', text: 'Great Threads accounts!', rating: 5,
                            date: '2024-12-13' },
                        { name: 'James R.', country: 'UK', text: 'Perfect for marketing.', rating: 4,
                            date: '2024-12-07' },
                        { name: 'Sophia L.', country: 'Canada', text: 'Good quality profiles.', rating: 5,
                            date: '2024-12-01' },
                        { name: 'Oliver C.', country: 'Australia', text: 'Fast delivery!', rating: 4,
                            date: '2024-11-24' },
                        { name: 'Liam P.', country: 'USA', text: 'Will order again!', rating: 5, date: '2024-11-17' }
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
<!--product cards and  -->
<br>
<!-- features -->

<!-- =========================================================
   SECTION 4: GLOBAL COVERAGE MAP
   ========================================================= -->
<section class="global-map-nexus section-padding" id="coverageWorldMap" style="background: rgba(255,255,255,0.1);">
    <div class="container">
        <div class="map-head-matrix text-center mb-5" data-aos="fade-up">
            <span class="badge-map-premium" style="display:inline-flex; align-items:center; gap:8px; background:rgba(2,59,69,0.12); color:#023b45; font-weight:700; font-size:0.75rem; letter-spacing:1.5px; text-transform:uppercase; padding:6px 16px; border-radius:60px; margin-bottom:16px; border:0.5px solid rgba(2,59,69,0.15);">
                <i class="fas fa-globe-americas me-2"></i> Global Coverage
            </span>
            <h2 class="map-title-prime" style="font-size:clamp(2rem,4vw,2.8rem); font-weight:800; line-height:1.15; color:#023b45; margin-bottom:12px; font-family:'Playfair Display',serif;">
                We Serve <span style="position:relative; display:inline-block; color:#023b45;">The World<span style="position:absolute; bottom:2px; left:0; width:100%; height:4px; background:#023b45; border-radius:4px; opacity:0.2;"></span></span>
            </h2>
            <p style="color:rgba(2,59,69,0.7); max-width:550px; margin:0 auto;">Our reach spans across continents</p>
        </div>
        <div class="map-visual-wrapper row g-4 align-items-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-8">
                <div class="map-svg-container" style="background:white; border-radius:24px; padding:1rem; box-shadow:0 8px 25px rgba(0,0,0,0.05);">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='800' height='450' viewBox='0 0 800 450'%3E%3Crect width='800' height='450' fill='%23f5f0eb' rx='16'/%3E%3Cpath d='M200,100 Q300,80 400,120 Q500,160 600,100 Q700,40 750,150 Q780,250 700,320 Q600,380 500,350 Q400,320 300,360 Q200,400 150,350 Q100,300 150,220 Q200,140 200,100Z' fill='%23B7A08B' opacity='0.3'/%3E%3Ccircle cx='300' cy='200' r='40' fill='%23023b45' opacity='0.6'/%3E%3Ctext x='270' y='210' font-family='Inter' font-size='18' fill='white' font-weight='700'%3E10K%3C/text%3E%3Ccircle cx='500' cy='180' r='35' fill='%23023b45' opacity='0.5'/%3E%3Ctext x='475' y='190' font-family='Inter' font-size='16' fill='white' font-weight='700'%3E8K%3C/text%3E%3Ccircle cx='650' cy='250' r='30' fill='%23023b45' opacity='0.4'/%3E%3Ctext x='630' y='260' font-family='Inter' font-size='14' fill='white' font-weight='700'%3E5K%3C/text%3E%3Ccircle cx='150' cy='280' r='25' fill='%23023b45' opacity='0.4'/%3E%3Ctext x='135' y='290' font-family='Inter' font-size='14' fill='white' font-weight='700'%3E3K%3C/text%3E%3Ctext x='50' y='420' font-family='Inter' font-size='14' fill='%23023b45' opacity='0.6'%3E*%20Approximate%20active%20customers%3C/text%3E%3C/svg%3E" alt="World Map Coverage" style="width:100%; height:auto; display:block;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="map-stats-grid row g-3">
                    <div class="col-6">
                        <div class="map-stat-card" style="background:white; border-radius:16px; padding:1rem; text-align:center; box-shadow:0 4px 15px rgba(0,0,0,0.05);">
                            <div style="font-size:1.8rem; font-weight:800; color:#023b45;">50+</div>
                            <div style="font-size:0.8rem; color:rgba(2,59,69,0.6);">Countries Served</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="map-stat-card" style="background:white; border-radius:16px; padding:1rem; text-align:center; box-shadow:0 4px 15px rgba(0,0,0,0.05);">
                            <div style="font-size:1.8rem; font-weight:800; color:#023b45;">10K+</div>
                            <div style="font-size:0.8rem; color:rgba(2,59,69,0.6);">Active Customers</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="map-stat-card" style="background:white; border-radius:16px; padding:1rem; text-align:center; box-shadow:0 4px 15px rgba(0,0,0,0.05);">
                            <div style="font-size:1.8rem; font-weight:800; color:#023b45;">100+</div>
                            <div style="font-size:0.8rem; color:rgba(2,59,69,0.6);">Daily Deliveries</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="map-stat-card" style="background:white; border-radius:16px; padding:1rem; text-align:center; box-shadow:0 4px 15px rgba(0,0,0,0.05);">
                            <div style="font-size:1.8rem; font-weight:800; color:#023b45;">98%</div>
                            <div style="font-size:0.8rem; color:rgba(2,59,69,0.6);">Global Reach</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
   SECTION 5: BUSINESS SOLUTIONS
   ========================================================= -->
<section class="solutions-ultra-nexus section-padding" id="businessSolutionsPro" style="background:#023b45;">
    <div class="container">
        <div class="solutions-head-matrix text-center mb-5" data-aos="fade-up">
            <span class="badge-solutions-premium" style="display:inline-flex; align-items:center; gap:8px; background:rgba(2,59,69,0.12); color:#023b45; font-weight:700; font-size:0.75rem; letter-spacing:1.5px; text-transform:uppercase; padding:6px 16px; border-radius:60px; margin-bottom:16px; border:0.5px solid rgba(2,59,69,0.15);">
                <i class="fas fa-briefcase me-2"></i> Business Solutions
            </span>
            <h2 class="solutions-title-prime" style="font-size:clamp(2rem,4vw,2.8rem); font-weight:800; line-height:1.15; color:#023b45; margin-bottom:12px; font-family:'Playfair Display',serif;">
                Tailored <span style="position:relative; display:inline-block; color:#023b45;">Business<span style="position:absolute; bottom:2px; left:0; width:100%; height:4px; background:#023b45; border-radius:4px; opacity:0.2;"></span></span> Solutions
            </h2>
            <p style="color:rgba(2,59,69,0.7); max-width:550px; margin:0 auto;">Industry-specific account solutions for your business needs</p>
        </div>
        <div class="solutions-grid-pro row g-4" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-6 col-lg-4">
                <div class="solution-card-premium" style="background:white; border-radius:20px; padding:1.8rem; transition:all 0.3s; border:1px solid rgba(2,59,69,0.06); box-shadow:0 8px 25px rgba(0,0,0,0.05); height:100%; text-align:center;">
                    <div style="font-size:2.8rem; color:#023b45; margin-bottom:12px;">📱</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.2rem;">Digital Marketing</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.9rem;">Aged accounts optimized for marketing campaigns</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="solution-card-premium" style="background:white; border-radius:20px; padding:1.8rem; transition:all 0.3s; border:1px solid rgba(2,59,69,0.06); box-shadow:0 8px 25px rgba(0,0,0,0.05); height:100%; text-align:center;">
                    <div style="font-size:2.8rem; color:#023b45; margin-bottom:12px;">🎯</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.2rem;">Lead Generation</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.9rem;">High-trust accounts for effective lead capture</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="solution-card-premium" style="background:white; border-radius:20px; padding:1.8rem; transition:all 0.3s; border:1px solid rgba(2,59,69,0.06); box-shadow:0 8px 25px rgba(0,0,0,0.05); height:100%; text-align:center;">
                    <div style="font-size:2.8rem; color:#023b45; margin-bottom:12px;">📊</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.2rem;">Advertising</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.9rem;">Ad-ready accounts with high engagement history</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="solution-card-premium" style="background:white; border-radius:20px; padding:1.8rem; transition:all 0.3s; border:1px solid rgba(2,59,69,0.06); box-shadow:0 8px 25px rgba(0,0,0,0.05); height:100%; text-align:center;">
                    <div style="font-size:2.8rem; color:#023b45; margin-bottom:12px;">📈</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.2rem;">Brand Growth</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.9rem;">Establish brand presence with premium profiles</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="solution-card-premium" style="background:white; border-radius:20px; padding:1.8rem; transition:all 0.3s; border:1px solid rgba(2,59,69,0.06); box-shadow:0 8px 25px rgba(0,0,0,0.05); height:100%; text-align:center;">
                    <div style="font-size:2.8rem; color:#023b45; margin-bottom:12px;">🤝</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.2rem;">Agency Support</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.9rem;">Bulk orders and white-label solutions</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="solution-card-premium" style="background:white; border-radius:20px; padding:1.8rem; transition:all 0.3s; border:1px solid rgba(2,59,69,0.06); box-shadow:0 8px 25px rgba(0,0,0,0.05); height:100%; text-align:center;">
                    <div style="font-size:2.8rem; color:#023b45; margin-bottom:12px;">🚀</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.2rem;">Business Expansion</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.9rem;">Scale with verified accounts for new markets</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- =========================================================
   SECTION 7: CLIENT ACHIEVEMENT SHOWCASE
   ========================================================= -->
<section class="achievement-ultra-nexus section-padding" id="clientSuccessStories" style="background: #B7A08B;">
    <div class="container">
        <div class="achievement-head-matrix text-center mb-5" data-aos="fade-up">
            <span class="badge-achievement-premium" style="display:inline-flex; align-items:center; gap:8px; background:rgba(2,59,69,0.12); color:#023b45; font-weight:700; font-size:0.75rem; letter-spacing:1.5px; text-transform:uppercase; padding:6px 16px; border-radius:60px; margin-bottom:16px; border:0.5px solid rgba(2,59,69,0.15);">
                <i class="fas fa-trophy me-2"></i> Client Achievements
            </span>
            <h2 class="achievement-title-prime" style="font-size:clamp(2rem,4vw,2.8rem); font-weight:800; line-height:1.15; color:#023b45; margin-bottom:12px; font-family:'Playfair Display',serif;">
                Real <span style="position:relative; display:inline-block; color:#023b45;">Results<span style="position:absolute; bottom:2px; left:0; width:100%; height:4px; background:#023b45; border-radius:4px; opacity:0.2;"></span></span> From Real Clients
            </h2>
            <p style="color:rgba(2,59,69,0.7); max-width:550px; margin:0 auto;">See how businesses transformed with our accounts</p>
        </div>
        <div class="achievement-grid-pro row g-4" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-6 col-lg-3">
                <div class="achievement-card-premium" style="background:white; border-radius:20px; padding:1.8rem; text-align:center; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="font-size:2.5rem; color:#023b45; margin-bottom:8px;">📈</div>
                    <div style="font-size:2.2rem; font-weight:800; color:#023b45;">350%</div>
                    <div style="color:rgba(2,59,69,0.6); font-size:0.9rem;">Average Revenue Growth</div>
                    <div style="font-size:0.75rem; color:rgba(2,59,69,0.4); margin-top:6px;">within 6 months</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="achievement-card-premium" style="background:white; border-radius:20px; padding:1.8rem; text-align:center; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="font-size:2.5rem; color:#023b45; margin-bottom:8px;">👥</div>
                    <div style="font-size:2.2rem; font-weight:800; color:#023b45;">2.5K</div>
                    <div style="color:rgba(2,59,69,0.6); font-size:0.9rem;">New Customers Acquired</div>
                    <div style="font-size:0.75rem; color:rgba(2,59,69,0.4); margin-top:6px;">per campaign</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="achievement-card-premium" style="background:white; border-radius:20px; padding:1.8rem; text-align:center; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="font-size:2.5rem; color:#023b45; margin-bottom:8px;">⚡</div>
                    <div style="font-size:2.2rem; font-weight:800; color:#023b45;">75%</div>
                    <div style="color:rgba(2,59,69,0.6); font-size:0.9rem;">Faster Time-to-Market</div>
                    <div style="font-size:0.75rem; color:rgba(2,59,69,0.4); margin-top:6px;">with aged accounts</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="achievement-card-premium" style="background:white; border-radius:20px; padding:1.8rem; text-align:center; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="font-size:2.5rem; color:#023b45; margin-bottom:8px;">💯</div>
                    <div style="font-size:2.2rem; font-weight:800; color:#023b45;">99%</div>
                    <div style="color:rgba(2,59,69,0.6); font-size:0.9rem;">Customer Retention Rate</div>
                    <div style="font-size:0.75rem; color:rgba(2,59,69,0.4); margin-top:6px;">repeat purchases</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
   SECTION 8: LIVE SUPPORT EXPERIENCE
   ========================================================= -->
<section class="support-ultra-nexus section-padding" id="liveSupportHub" style="background: rgba(255,255,255,0.1);">
    <div class="container">
        <div class="support-head-matrix text-center mb-5" data-aos="fade-up">
            <span class="badge-support-premium" style="display:inline-flex; align-items:center; gap:8px; background:rgba(2,59,69,0.12); color:#023b45; font-weight:700; font-size:0.75rem; letter-spacing:1.5px; text-transform:uppercase; padding:6px 16px; border-radius:60px; margin-bottom:16px; border:0.5px solid rgba(2,59,69,0.15);">
                <i class="fas fa-headset me-2"></i> Live Support
            </span>
            <h2 class="support-title-prime" style="font-size:clamp(2rem,4vw,2.8rem); font-weight:800; line-height:1.15; color:#023b45; margin-bottom:12px; font-family:'Playfair Display',serif;">
                We're Here <span style="position:relative; display:inline-block; color:#023b45;">24/7<span style="position:absolute; bottom:2px; left:0; width:100%; height:4px; background:#023b45; border-radius:4px; opacity:0.2;"></span></span>
            </h2>
            <p style="color:rgba(2,59,69,0.7); max-width:550px; margin:0 auto;">Professional support team ready to assist you</p>
        </div>
        <div class="support-grid-pro row g-4" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-6 col-lg-3">
                <div class="support-card-premium" style="background:white; border-radius:20px; padding:1.8rem; text-align:center; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="width:70px; height:70px; background:rgba(2,59,69,0.08); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 14px;">
                        <i class="fas fa-clock" style="font-size:2rem; color:#023b45;"></i>
                    </div>
                    <h4 style="color:#023b45; font-weight:700;">24/7 Availability</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">Round-the-clock support</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="support-card-premium" style="background:white; border-radius:20px; padding:1.8rem; text-align:center; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="width:70px; height:70px; background:rgba(2,59,69,0.08); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 14px;">
                        <i class="fas fa-bolt" style="font-size:2rem; color:#023b45;"></i>
                    </div>
                    <h4 style="color:#023b45; font-weight:700;">Fast Response</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">Average 2-min reply</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="support-card-premium" style="background:white; border-radius:20px; padding:1.8rem; text-align:center; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="width:70px; height:70px; background:rgba(2,59,69,0.08); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 14px;">
                        <i class="fas fa-users" style="font-size:2rem; color:#023b45;"></i>
                    </div>
                    <h4 style="color:#023b45; font-weight:700;">Professional Team</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">Expert account specialists</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="support-card-premium" style="background:white; border-radius:20px; padding:1.8rem; text-align:center; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="width:70px; height:70px; background:rgba(2,59,69,0.08); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 14px;">
                        <i class="fas fa-star" style="font-size:2rem; color:#023b45;"></i>
                    </div>
                    <h4 style="color:#023b45; font-weight:700;">Customer Satisfaction</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">99% satisfaction rate</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
   SECTION 9: TRUST CERTIFICATION WALL
   ========================================================= -->
<section class="trust-ultra-nexus section-padding" id="trustCertificationWall" style="background: #023b45;">
    <div class="container">
        <div class="trust-head-matrix text-center mb-0" data-aos="fade-up">
            <span class="badge-trust-premium" style="display:inline-flex; align-items:center; gap:8px; background:rgba(2,59,69,0.12); color:#023b45; font-weight:700; font-size:0.75rem; letter-spacing:1.5px; text-transform:uppercase; padding:6px 16px; border-radius:60px; margin-bottom:16px; border:0.5px solid rgba(2,59,69,0.15);">
                <i class="fas fa-shield-alt me-2"></i> Trust Certifications
            </span>
            <h2 class="trust-title-prime" style="font-size:clamp(2rem,4vw,2.8rem); font-weight:800; line-height:1.15; color:#023b45; margin-bottom:12px; font-family:'Playfair Display',serif;">
                Certified <span style="position:relative; display:inline-block; color:#023b45;">Quality<span style="position:absolute; bottom:2px; left:0; width:100%; height:4px; background:#023b45; border-radius:4px; opacity:0.2;"></span></span> Standards
            </h2>
            <p style="color:rgba(2,59,69,0.7); max-width:550px; margin:0 auto;">Our certifications and quality guarantees</p>
        </div>
        <div class="trust-grid-pro row g-4" data-aos="fade-up" data-aos-delay="100">
            <div class="col-6 col-md-4 col-lg-2">
                <div class="trust-badge-card" style="background:white; border-radius:16px; padding:1.2rem; text-align:center; box-shadow:0 4px 15px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="font-size:2.5rem; color:#023b45;">✅</div>
                    <div style="font-weight:700; color:#023b45; font-size:0.85rem; margin-top:8px;">Verified Quality</div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="trust-badge-card" style="background:white; border-radius:16px; padding:1.2rem; text-align:center; box-shadow:0 4px 15px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="font-size:2.5rem; color:#023b45;">🔒</div>
                    <div style="font-weight:700; color:#023b45; font-size:0.85rem; margin-top:8px;">Secure Transactions</div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="trust-badge-card" style="background:white; border-radius:16px; padding:1.2rem; text-align:center; box-shadow:0 4px 15px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="font-size:2.5rem; color:#023b45;">🚀</div>
                    <div style="font-weight:700; color:#023b45; font-size:0.85rem; margin-top:8px;">Fast Delivery</div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="trust-badge-card" style="background:white; border-radius:16px; padding:1.2rem; text-align:center; box-shadow:0 4px 15px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="font-size:2.5rem; color:#023b45;">💎</div>
                    <div style="font-weight:700; color:#023b45; font-size:0.85rem; margin-top:8px;">Premium Service</div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="trust-badge-card" style="background:white; border-radius:16px; padding:1.2rem; text-align:center; box-shadow:0 4px 15px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="font-size:2.5rem; color:#023b45;">⭐</div>
                    <div style="font-weight:700; color:#023b45; font-size:0.85rem; margin-top:8px;">Customer Approved</div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="trust-badge-card" style="background:white; border-radius:16px; padding:1.2rem; text-align:center; box-shadow:0 4px 15px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="font-size:2.5rem; color:#023b45;">🛡️</div>
                    <div style="font-weight:700; color:#023b45; font-size:0.85rem; margin-top:8px;">Protected Privacy</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
   SECTION 10: ADVANCED RESOURCE CENTER
   ========================================================= -->
<section class="resource-ultra-nexus section-padding" id="advancedResourceHub" style="background: rgba(255,255,255,0.1);">
    <div class="container">
        <div class="resource-head-matrix text-center mb-5" data-aos="fade-up">
            <span class="badge-resource-premium" style="display:inline-flex; align-items:center; gap:8px; background:rgba(2,59,69,0.12); color:#023b45; font-weight:700; font-size:0.75rem; letter-spacing:1.5px; text-transform:uppercase; padding:6px 16px; border-radius:60px; margin-bottom:16px; border:0.5px solid rgba(2,59,69,0.15);">
                <i class="fas fa-book me-2"></i> Resource Center
            </span>
            <h2 class="resource-title-prime" style="font-size:clamp(2rem,4vw,2.8rem); font-weight:800; line-height:1.15; color:#023b45; margin-bottom:12px; font-family:'Playfair Display',serif;">
                Helpful <span style="position:relative; display:inline-block; color:#023b45;">Guides<span style="position:absolute; bottom:2px; left:0; width:100%; height:4px; background:#023b45; border-radius:4px; opacity:0.2;"></span></span> & Resources
            </h2>
            <p style="color:rgba(2,59,69,0.7); max-width:550px; margin:0 auto;">Everything you need to know</p>
        </div>
        <div class="resource-grid-pro row g-4" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-6 col-lg-4">
                <div class="resource-card-premium" style="background:white; border-radius:20px; padding:1.8rem; transition:all 0.3s; border:1px solid rgba(2,59,69,0.06); box-shadow:0 8px 25px rgba(0,0,0,0.05); height:100%; display:flex; flex-direction:column;">
                    <div style="font-size:2rem; color:#023b45; margin-bottom:10px;">📖</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.1rem;">Buying Guide</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem; flex:1;">Step-by-step guide to choose the right accounts</p>
                    <a href="#" style="color:#023b45; font-weight:600; text-decoration:none; display:inline-flex; align-items:center; gap:6px; margin-top:10px;">Read More <i class="fas fa-arrow-right" style="font-size:0.7rem;"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="resource-card-premium" style="background:white; border-radius:20px; padding:1.8rem; transition:all 0.3s; border:1px solid rgba(2,59,69,0.06); box-shadow:0 8px 25px rgba(0,0,0,0.05); height:100%; display:flex; flex-direction:column;">
                    <div style="font-size:2rem; color:#023b45; margin-bottom:10px;">🔐</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.1rem;">Account Safety Guide</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem; flex:1;">Best practices for secure account usage</p>
                    <a href="#" style="color:#023b45; font-weight:600; text-decoration:none; display:inline-flex; align-items:center; gap:6px; margin-top:10px;">Read More <i class="fas fa-arrow-right" style="font-size:0.7rem;"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="resource-card-premium" style="background:white; border-radius:20px; padding:1.8rem; transition:all 0.3s; border:1px solid rgba(2,59,69,0.06); box-shadow:0 8px 25px rgba(0,0,0,0.05); height:100%; display:flex; flex-direction:column;">
                    <div style="font-size:2rem; color:#023b45; margin-bottom:10px;">🚚</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.1rem;">Delivery Process</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem; flex:1;">How we deliver accounts instantly</p>
                    <a href="#" style="color:#023b45; font-weight:600; text-decoration:none; display:inline-flex; align-items:center; gap:6px; margin-top:10px;">Read More <i class="fas fa-arrow-right" style="font-size:0.7rem;"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="resource-card-premium" style="background:white; border-radius:20px; padding:1.8rem; transition:all 0.3s; border:1px solid rgba(2,59,69,0.06); box-shadow:0 8px 25px rgba(0,0,0,0.05); height:100%; display:flex; flex-direction:column;">
                    <div style="font-size:2rem; color:#023b45; margin-bottom:10px;">💬</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.1rem;">Customer Support Guide</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem; flex:1;">How to get help when you need it</p>
                    <a href="#" style="color:#023b45; font-weight:600; text-decoration:none; display:inline-flex; align-items:center; gap:6px; margin-top:10px;">Read More <i class="fas fa-arrow-right" style="font-size:0.7rem;"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="resource-card-premium" style="background:white; border-radius:20px; padding:1.8rem; transition:all 0.3s; border:1px solid rgba(2,59,69,0.06); box-shadow:0 8px 25px rgba(0,0,0,0.05); height:100%; display:flex; flex-direction:column;">
                    <div style="font-size:2rem; color:#023b45; margin-bottom:10px;">📚</div>
                    <h4 style="color:#023b45; font-weight:700; font-size:1.1rem;">Frequently Used Resources</h4>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem; flex:1;">Quick links to our most popular guides</p>
                    <a href="#" style="color:#023b45; font-weight:600; text-decoration:none; display:inline-flex; align-items:center; gap:6px; margin-top:10px;">View All <i class="fas fa-arrow-right" style="font-size:0.7rem;"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="timeline-ultra-nexus section-padding" id="companyMilestonesTimeline" style="background: rgba(255,255,255,0.1);">
    <div class="container">
        <div class="timeline-head-matrix text-center mb-5" data-aos="fade-up">
            <span class="badge-timeline-premium" style="display:inline-flex; align-items:center; gap:8px; background:rgba(2,59,69,0.12); color:#023b45; font-weight:700; font-size:0.75rem; letter-spacing:1.5px; text-transform:uppercase; padding:6px 16px; border-radius:60px; margin-bottom:16px; border:0.5px solid rgba(2,59,69,0.15);">
                <i class="fas fa-timeline me-2"></i> Our Journey
            </span>
            <h2 class="timeline-title-prime" style="font-size:clamp(2rem,4vw,2.8rem); font-weight:800; line-height:1.15; color:#023b45; margin-bottom:12px; font-family:'Playfair Display',serif;">
                Company <span style="position:relative; display:inline-block; color:#023b45;">Milestones<span style="position:absolute; bottom:2px; left:0; width:100%; height:4px; background:#023b45; border-radius:4px; opacity:0.2;"></span></span>
            </h2>
            <p style="color:rgba(2,59,69,0.7); max-width:550px; margin:0 auto;">Our growth story from launch to global expansion</p>
        </div>
        <div class="timeline-grid-pro row g-4" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-6 col-lg-3">
                <div class="milestone-card-premium" style="background:white; border-radius:20px; padding:1.8rem; text-align:center; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="font-size:2.2rem; font-weight:800; color:#023b45;">2019</div>
                    <div style="font-size:1.2rem; font-weight:700; color:#023b45; margin:6px 0;">Launch Year</div>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">Started with a vision to provide premium accounts</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="milestone-card-premium" style="background:white; border-radius:20px; padding:1.8rem; text-align:center; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="font-size:2.2rem; font-weight:800; color:#023b45;">2020</div>
                    <div style="font-size:1.2rem; font-weight:700; color:#023b45; margin:6px 0;">First 1K Customers</div>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">Reached 1,000 happy clients within the first year</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="milestone-card-premium" style="background:white; border-radius:20px; padding:1.8rem; text-align:center; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="font-size:2.2rem; font-weight:800; color:#023b45;">2022</div>
                    <div style="font-size:1.2rem; font-weight:700; color:#023b45; margin:6px 0;">10K Orders</div>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">Surpassed 10,000 successful orders</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="milestone-card-premium" style="background:white; border-radius:20px; padding:1.8rem; text-align:center; box-shadow:0 8px 25px rgba(0,0,0,0.05); transition:all 0.3s; height:100%;">
                    <div style="font-size:2.2rem; font-weight:800; color:#023b45;">2024</div>
                    <div style="font-size:1.2rem; font-weight:700; color:#023b45; margin:6px 0;">Global Expansion</div>
                    <p style="color:rgba(2,59,69,0.6); font-size:0.85rem;">Now serving customers in 50+ countries worldwide</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
   SECTION 15: MEGA CALL TO ACTION
   ========================================================= -->
<section class="cta-mega-ultra-nexus section-padding" id="megaActionHub" style="background: #023b45;">
    <div class="container">
        <div class="cta-mega-wrapper text-center" data-aos="zoom-in" data-aos-duration="800">
            <div style="max-width:750px; margin:0 auto;">
                <div style="font-size:4rem; margin-bottom:16px;">🚀</div>
                <h2 style="font-size:clamp(2.5rem,5vw,3.8rem); font-weight:800; color:#FEFAF7; font-family:'Playfair Display',serif; line-height:1.1; margin-bottom:16px;">
                    Start Growing <span style="color:#B7A08B;">Faster</span> Today
                </h2>
                <p style="font-size:1.1rem; color:rgba(254,250,247,0.8); max-width:500px; margin:0 auto 30px;">
                    Join thousands of successful businesses using our premium accounts to scale their operations instantly.
                </p>
                <div class="cta-mega-btn-group d-flex flex-wrap justify-content-center gap-3">
                    <a href="#" style="background:#B7A08B; color:#023b45; border:none; padding:16px 42px; border-radius:60px; font-weight:700; font-size:1rem; transition:all 0.3s; text-decoration:none; display:inline-flex; align-items:center; gap:10px;">
                        <i class="fas fa-rocket"></i> Order Now
                    </a>
                    <a href="#" style="background:transparent; color:#FEFAF7; border:2px solid rgba(254,250,247,0.3); padding:14px 38px; border-radius:60px; font-weight:600; font-size:1rem; transition:all 0.3s; text-decoration:none; display:inline-flex; align-items:center; gap:8px;">
                        <i class="fas fa-cart-plus"></i> View Products
                    </a>
                    <a href="#" style="background:transparent; color:#FEFAF7; border:2px solid rgba(254,250,247,0.3); padding:14px 38px; border-radius:60px; font-weight:600; font-size:1rem; transition:all 0.3s; text-decoration:none; display:inline-flex; align-items:center; gap:8px;">
                        <i class="fas fa-headset"></i> Contact Support
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
   STYLES (Unique to these sections)
   ========================================================= -->
<style>
    /* ========== UNIQUE SECTION STYLES ========== */
    .section-padding {
        padding: 80px 0;
    }
    
    /* Finder card hover */
    .finder-result-card:hover {
        border-color: #023b45 !important;
        box-shadow: 0 20px 50px rgba(0,0,0,0.12) !important;
    }
    .btn-finder-primary:hover {
        background: #012b34 !important;
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(2,59,69,0.3);
    }
    
    /* Activity feed items */
    .activity-feed-item {
        background: white;
        border-radius: 16px;
        padding: 1rem 1.2rem;
        margin-bottom: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.04);
        display: flex;
        align-items: center;
        gap: 14px;
        border-left: 4px solid #023b45;
        animation: slideInActivity 0.5s ease;
    }
    @keyframes slideInActivity {
        from { opacity: 0; transform: translateX(-20px); }
        to { opacity: 1; transform: translateX(0); }
    }
    .activity-feed-item .timestamp {
        font-size: 0.7rem;
        color: rgba(2,59,69,0.4);
        margin-left: auto;
    }
    .activity-feed-item .emoji {
        font-size: 1.8rem;
    }
    .activity-feed-item .detail {
        flex: 1;
        font-size: 0.9rem;
        color: rgba(2,59,69,0.8);
    }
    .activity-feed-item .detail strong {
        color: #023b45;
        font-weight: 700;
    }
    
    /* Quality score cards */
    .quality-score-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 16px 40px rgba(0,0,0,0.08) !important;
    }
    
    /* Business solutions cards */
    .solution-card-premium:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 40px rgba(0,0,0,0.12) !important;
        border-color: #023b45 !important;
    }
    
    /* Comparison table */
    .comparison-premium-table tbody tr:hover {
        background: rgba(2,59,69,0.02) !important;
    }
    .comparison-premium-table th,
    .comparison-premium-table td {
        border: none;
    }
    
    /* Achievement cards */
    .achievement-card-premium:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 40px rgba(0,0,0,0.10) !important;
    }
    
    /* Support cards */
    .support-card-premium:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 40px rgba(0,0,0,0.10) !important;
    }
    .support-card-premium:hover > div:first-child {
        background: #023b45 !important;
    }
    .support-card-premium:hover > div:first-child i {
        color: white !important;
    }
    
    /* Trust badges */
    .trust-badge-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.10) !important;
    }
    
    /* Resource cards */
    .resource-card-premium:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 40px rgba(0,0,0,0.10) !important;
        border-color: #023b45 !important;
    }
    
    /* Top selling cards */
    .topselling-card-premium:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 40px rgba(0,0,0,0.12) !important;
    }
    .topselling-card-premium a:hover {
        background: #012b34 !important;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(2,59,69,0.25);
    }
    
    /* Milestone cards */
    .milestone-card-premium:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 40px rgba(0,0,0,0.10) !important;
    }
    
    /* CTA mega buttons */
    .cta-mega-btn-group a:hover {
        transform: translateY(-4px);
    }
    .cta-mega-btn-group a:first-child:hover {
        background: #a08b77 !important;
        box-shadow: 0 12px 30px rgba(183,160,139,0.3);
    }
    .cta-mega-btn-group a:not(:first-child):hover {
        border-color: #FEFAF7 !important;
        background: rgba(254,250,247,0.08);
    }
    
    /* Floating stats bar */
    .floating-stats-bar .floating-stat-item {
        transition: all 0.3s;
    }
    .floating-stats-bar .floating-stat-item:hover {
        transform: scale(1.05);
    }
    
    /* Newsletter form */
    #newsletterForm button:hover {
        background: #012b34 !important;
        transform: scale(0.97);
        box-shadow: 0 8px 20px rgba(2,59,69,0.3);
    }
    
    /* Responsive */
    @media (max-width: 991px) {
        .section-padding {
            padding: 60px 0;
        }
        .floating-stats-bar {
            flex-wrap: wrap;
            justify-content: center;
            padding: 10px 16px !important;
            border-radius: 30px !important;
            margin: 0 10px !important;
            bottom: 10px !important;
        }
        .floating-stat-item {
            font-size: 0.8rem !important;
        }
        .floating-stat-item .floating-counter {
            font-size: 0.8rem !important;
        }
    }
    
    @media (max-width: 767px) {
        .section-padding {
            padding: 40px 0;
        }
        .newsletter-wrapper-glass {
            padding: 2rem 1.5rem !important;
        }
        #newsletterForm {
            flex-direction: column !important;
            background: transparent !important;
            box-shadow: none !important;
            padding: 0 !important;
            border-radius: 0 !important;
        }
        #newsletterForm input {
            width: 100% !important;
            border-radius: 60px !important;
            background: white !important;
            padding: 12px 20px !important;
        }
        #newsletterForm button {
            width: 100% !important;
            justify-content: center !important;
        }
        .cta-mega-btn-group {
            flex-direction: column;
            align-items: center;
        }
        .cta-mega-btn-group a {
            width: 100%;
            max-width: 280px;
            justify-content: center;
        }
        .comparison-premium-table {
            font-size: 0.8rem;
        }
        .comparison-premium-table th,
        .comparison-premium-table td {
            padding: 8px 12px !important;
        }
        .floating-stats-bar {
            display: none !important;
        }
    }
    
    @media (max-width: 575px) {
        .finder-card-glass {
            padding: 1.2rem !important;
        }
        .trust-badge-card {
            padding: 0.8rem !important;
        }
        .trust-badge-card div:first-child {
            font-size: 2rem !important;
        }
        .topselling-card-premium {
            padding: 1.2rem !important;
        }
        .milestone-card-premium {
            padding: 1.2rem !important;
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
        // SECTION 1: ACCOUNT FINDER
        // ============================
        const finderBtn = document.getElementById('finderSubmitBtn');
        const finderPlatform = document.getElementById('finderPlatform');
        const finderType = document.getElementById('finderType');
        const finderQty = document.getElementById('finderQty');
        const finderCountry = document.getElementById('finderCountry');
        const finderPackageName = document.getElementById('finderPackageName');
        const finderPackageDesc = document.getElementById('finderPackageDesc');
        const finderPackagePrice = document.getElementById('finderPackagePrice');
        
        function updateFinderRecommendation() {
            const platform = finderPlatform.value;
            const type = finderType.value;
            const qty = finderQty.value;
            const country = finderCountry.value;
            
            let packageName = 'Premium ' + platform.charAt(0).toUpperCase() + platform.slice(1) + ' ' + type.charAt(0).toUpperCase() + type.slice(1);
            let description = 'Perfect for ' + qty + ' accounts targeting ' + country.toUpperCase();
            let price = '$' + (Math.floor(Math.random() * 80) + 50) + ' - $' + (Math.floor(Math.random() * 150) + 100);
            
            if (type === 'bulk') {
                packageName = 'Bulk ' + platform.charAt(0).toUpperCase() + platform.slice(1) + ' Package';
                description = 'Ideal for large-scale operations in ' + country.toUpperCase();
                price = 'Custom Quote';
            } else if (type === 'premium') {
                packageName = 'Premium Verified ' + platform.charAt(0).toUpperCase() + platform.slice(1);
                description = 'Top-tier accounts with full verification for ' + country.toUpperCase();
                price = '$' + (Math.floor(Math.random() * 120) + 80) + ' - $' + (Math.floor(Math.random() * 200) + 150);
            }
            
            finderPackageName.textContent = packageName;
            finderPackageDesc.textContent = description;
            finderPackagePrice.textContent = price;
        }
        
        if (finderBtn) {
            finderBtn.addEventListener('click', updateFinderRecommendation);
        }
        // Initial recommendation
        setTimeout(updateFinderRecommendation, 200);
        
        // ============================
        // SECTION 2: LIVE ACTIVITY FEED
        // ============================
        const feedContainer = document.getElementById('liveFeedContainer');
        if (feedContainer) {
            const activities = [
                { name: 'Ahmed', action: 'purchased', qty: 100, platform: 'Gmail', emoji: '📧' },
                { name: 'John', action: 'purchased', qty: 50, platform: 'Facebook', emoji: '📘' },
                { name: 'Ali', action: 'purchased', qty: 200, platform: 'Instagram', emoji: '📸' },
                { name: 'Sarah', action: 'purchased', qty: 75, platform: 'Twitter X', emoji: '🐦' },
                { name: 'Michael', action: 'purchased', qty: 120, platform: 'LinkedIn', emoji: '💼' },
                { name: 'Emma', action: 'purchased', qty: 60, platform: 'TikTok', emoji: '🎵' },
                { name: 'David', action: 'purchased', qty: 300, platform: 'Gmail', emoji: '📧' },
                { name: 'Lisa', action: 'purchased', qty: 40, platform: 'Facebook', emoji: '📘' },
                { name: 'Sophia', action: 'purchased', qty: 90, platform: 'Instagram', emoji: '📸' },
                { name: 'James', action: 'purchased', qty: 150, platform: 'Twitter X', emoji: '🐦' },
            ];
            let activityIndex = 0;
            
            function addActivityItem() {
                const activity = activities[activityIndex % activities.length];
                const item = document.createElement('div');
                item.className = 'activity-feed-item';
                item.innerHTML = `
                    <span class="emoji">${activity.emoji}</span>
                    <span class="detail"><strong>${activity.name}</strong> ${activity.action} <strong>${activity.qty}</strong> ${activity.platform} Accounts</span>
                    <span class="timestamp">just now</span>
                `;
                feedContainer.prepend(item);
                // Keep only 10 items
                while (feedContainer.children.length > 10) {
                    feedContainer.removeChild(feedContainer.lastChild);
                }
                activityIndex++;
            }
            
            // Add initial items
            for (let i = 0; i < 6; i++) {
                addActivityItem();
            }
            
            // Auto-add every 8 seconds
            setInterval(addActivityItem, 8000);
        }
        
        // ============================
        // SECTION 12: FLOATING COUNTERS
        // ============================
        function animateFloatingCounters() {
            const counters = document.querySelectorAll('.floating-counter');
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
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
                        counter.innerText = target;
                        clearInterval(timer);
                    } else {
                        counter.innerText = Math.floor(current);
                    }
                }, duration / steps);
            });
        }
        
        // Trigger floating counters when bar becomes visible
        const floatingBar = document.getElementById('floatingStatsBar');
        if (floatingBar) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateFloatingCounters();
                        observer.disconnect();
                    }
                });
            }, { threshold: 0.1 });
            observer.observe(floatingBar);
        }
        
        // ============================
        // NEWSLETTER FORM SUBMISSION
        // ============================
        const newsletterForm = document.getElementById('newsletterForm');
        if (newsletterForm) {
            newsletterForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const input = this.querySelector('input[type="email"]');
                if (input && input.value) {
                    alert('Thank you for subscribing! You will receive our updates.');
                    input.value = '';
                }
            });
        }
        
        // ============================
        // SMOOTH SCROLL FOR ANCHOR LINKS
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
        
        console.log('✅ All 15 ultra-premium homepage sections loaded successfully.');
    })();
</script>


<!-- features end -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Product definitions
  const productDefinitions = {
    gmail: { name: "Gmail Accounts", defaultAvg: 4.5, defaultTotal: 247, distribution: {5:160,4:60,3:18,2:6,1:3} },
    facebook: { name: "Facebook Accounts", defaultAvg: 4.5, defaultTotal: 247, distribution: {5:158,4:62,3:17,2:7,1:3} },
    instagram: { name: "Instagram Accounts", defaultAvg: 4.5, defaultTotal: 247, distribution: {5:162,4:58,3:16,2:8,1:3} },
    twitter: { name: "Twitter (X) Accounts", defaultAvg: 4.5, defaultTotal: 247, distribution: {5:155,4:65,3:19,2:5,1:3} }
  };
  
  const sampleReviews = [
    { userName: "Alex Rivera", initials: "AR", rating: 5, date: "2025-02-18", comment: "Absolutely flawless! Accounts were delivered instantly and worked perfectly for my campaigns." },
    { userName: "Jordan Lee", initials: "JL", rating: 4, date: "2025-02-10", comment: "Great quality, support answered quickly. One minor issue was resolved within hours." },
    { userName: "Taylor Chen", initials: "TC", rating: 5, date: "2025-02-01", comment: "Best social account provider I've tried. Highly recommend the premium batch." },
    { userName: "Morgan Smith", initials: "MS", rating: 4, date: "2025-01-28", comment: "Solid accounts, good value. Will purchase again." }
  ];
  
  function loadProductData(productId) {
    const key = `luxe_rating_${productId}`;
    const stored = localStorage.getItem(key);
    if (stored) return JSON.parse(stored);
    const def = productDefinitions[productId];
    const reviews = sampleReviews.map(r => ({ ...r, id: crypto.randomUUID ? crypto.randomUUID() : Math.random() }));
    return {
      avgRating: def.defaultAvg,
      totalReviews: def.defaultTotal,
      distribution: { ...def.distribution },
      userRated: false,      // user has already rated this product?
      userRatingValue: null,
      reviews: reviews,
      productName: def.name
    };
  }
  
  function saveProductData(productId, data) {
    localStorage.setItem(`luxe_rating_${productId}`, JSON.stringify(data));
  }
  
  function showAlreadyRatedMessage() {
    let toast = document.querySelector('.floating-message');
    if(toast) toast.remove();
    const div = document.createElement('div');
    div.className = 'floating-message';
    div.innerHTML = '<i class="fas fa-info-circle me-2"></i> You have already rated this product';
    document.body.appendChild(div);
    setTimeout(() => div.remove(), 2000);
  }
  
  // Render interactive stars - if user already rated, stars become non-clickable (disabled)
  function renderStarsInteractive(container, currentAvg, productId, userRated) {
    container.innerHTML = '';
    const fullStars = Math.floor(currentAvg);
    const hasHalf = (currentAvg - fullStars) >= 0.5;
    for (let i = 1; i <= 5; i++) {
      const star = document.createElement('i');
      if (i <= fullStars) star.className = 'fas fa-star active-star';
      else if (i === fullStars+1 && hasHalf) star.className = 'fas fa-star-half-alt active-star';
      else star.className = 'far fa-star';
      star.setAttribute('data-star-value', i);
      if (!userRated) {
        star.style.cursor = 'pointer';
        star.addEventListener('mouseenter', () => star.classList.add('hover-star'));
        star.addEventListener('mouseleave', () => star.classList.remove('hover-star'));
        star.addEventListener('click', (e) => {
          e.stopPropagation();
          const selectedVal = parseInt(star.getAttribute('data-star-value'));
          submitRating(productId, selectedVal);
        });
      } else {
        star.style.cursor = 'default';
        star.classList.add('disabled-star');
      }
      container.appendChild(star);
    }
  }
  
  // Submit rating only if user hasn't rated before
  function submitRating(productId, newRating) {
    let productData = loadProductData(productId);
    if (productData.userRated) {
      showAlreadyRatedMessage();
      return;
    }
    // Mark as rated
    productData.userRated = true;
    productData.userRatingValue = newRating;
    let dist = { ...productData.distribution };
    let totalRev = productData.totalReviews;
    dist[newRating] = (dist[newRating] || 0) + 1;
    totalRev += 1;
    let sumRatings = 0;
    for (let s=1; s<=5; s++) sumRatings += (dist[s] || 0) * s;
    const newAvg = sumRatings / totalRev;
    productData.distribution = dist;
    productData.totalReviews = totalRev;
    productData.avgRating = parseFloat(newAvg.toFixed(2));
    // Add user review
    const newReview = {
      userName: "You", initials: "YO", rating: newRating, date: new Date().toISOString().slice(0,10),
      comment: `Gave ${newRating} star${newRating>1 ? 's' : ''} rating. Great experience!`,
      id: crypto.randomUUID?.() || Date.now()
    };
    productData.reviews = [newReview, ...productData.reviews];
    saveProductData(productId, productData);
    updateProductCardUI(productId);
  }
  
  function updateProductCardUI(productId) {
    const productData = loadProductData(productId);
    const cardCol = document.querySelector(`.col[data-product-id="${productId}"]`);
    if (!cardCol) return;
    const ratingContainer = cardCol.querySelector('.star-rating');
    const countSpan = cardCol.querySelector('.rating-count');
    if (ratingContainer) {
      renderStarsInteractive(ratingContainer, productData.avgRating, productId, productData.userRated);
    }
    if (countSpan) {
      countSpan.innerText = `(${productData.totalReviews} Reviews)`;
    }
  }
  
  function buildModalContent(productId) {
    const data = loadProductData(productId);
    const total = data.totalReviews;
    const dist = data.distribution;
    let barsHtml = '';
    for (let stars = 5; stars >= 1; stars--) {
      const count = dist[stars] || 0;
      const percent = total > 0 ? (count / total * 100) : 0;
      barsHtml += `<div class="distro-bar"><div class="distro-label">${stars} <i class="fas fa-star" style="color:#f5b042; font-size:0.7rem;"></i></div><div class="bar-bg"><div class="bar-fill" style="width: ${percent}%;"></div></div><div class="distro-percent">${Math.round(percent)}%</div></div>`;
    }
    document.getElementById('distributionBars').innerHTML = barsHtml;
    document.getElementById('modalAvgRating').innerText = data.avgRating.toFixed(1);
    document.getElementById('modalTotalReviews').innerText = data.totalReviews;
    document.getElementById('reviewModalTitle').innerHTML = `<i class="fas fa-star me-2" style="color:#f5b042;"></i> ${productDefinitions[productId].name} · Reviews`;
    let reviewsHtml = '';
    const sorted = [...data.reviews].sort((a,b) => new Date(b.date) - new Date(a.date));
    sorted.forEach(rev => {
      const starRatingHtml = Array(5).fill().map((_,i) => `<i class="fas fa-star" style="color:${i < rev.rating ? '#f5b042' : '#d4c4a8'}; font-size:0.7rem;"></i>`).join('');
      reviewsHtml += `<div class="review-card-item"><div class="d-flex gap-3"><div class="avatar-initial" style="background: #1f6e7a;">${rev.initials || rev.userName.charAt(0)}</div><div class="flex-grow-1"><div class="d-flex flex-wrap justify-content-between align-items-center mb-1"><strong class="text-dark">${rev.userName}</strong><small class="text-muted">${rev.date}</small></div><div class="mb-1">${starRatingHtml}</div><p class="mb-0 small" style="color:#2d4a55;">${rev.comment}</p></div></div></div>`;
    });
    document.getElementById('reviewsListContainer').innerHTML = reviewsHtml || '<p class="text-muted">No reviews yet. Be the first to rate!</p>';
  }
  
  function initializeAllProducts() {
    const productIds = ['gmail', 'facebook', 'instagram', 'twitter'];
    productIds.forEach(pid => {
      loadProductData(pid);
      updateProductCardUI(pid);
    });
    document.querySelectorAll('.col[data-product-id]').forEach(col => {
      const countSpan = col.querySelector('.rating-count');
      const pid = col.getAttribute('data-product-id');
      if (countSpan) {
        countSpan.addEventListener('click', (e) => {
          e.stopPropagation();
          buildModalContent(pid);
          new bootstrap.Modal(document.getElementById('reviewModal')).show();
        });
      }
    });
  }
  
  // Fill missing features-mega for cards 2,3,4
  const featureHTML = `<div class="feat"><i class="fas fa-check-circle"></i> Fresh Accounts</div><div class="feat"><i class="fas fa-check-circle"></i> Verified Accounts</div><div class="feat"><i class="fas fa-check-circle"></i> Secure Login</div><div class="feat"><i class="fas fa-check-circle"></i> Fast Delivery</div><div class="feat"><i class="fas fa-check-circle"></i> High Quality</div><div class="feat"><i class="fas fa-check-circle"></i> 24H Replacement</div><div class="feat"><i class="fas fa-check-circle"></i> Customer Support</div><div class="feat"><i class="fas fa-check-circle"></i> Instant Details</div>`;
  document.querySelectorAll('.col[data-product-id] .features-mega').forEach(el => { if(el.children.length === 0) el.innerHTML = featureHTML; });
  
  // Cart functionality (unchanged)
  let cartItems = [];
  function showNotification(productName, cartLength) {
    const existing = document.querySelector('.floating-notify');
    if(existing) existing.remove();
    const toast = document.createElement('div');
    toast.className = 'floating-notify';
    toast.innerHTML = `<i class="fas fa-shopping-bag" style="color:#e9cba7;"></i> ${productName} added · ${cartLength} item${cartLength !== 1 ? 's' : ''} in cart`;
    document.body.appendChild(toast);
    setTimeout(() => toast.remove(), 2600);
  }
  const addBtns = document.querySelectorAll('.addCartBtn');
  addBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      const name = btn.getAttribute('data-name');
      const price = parseFloat(btn.getAttribute('data-price'));
      cartItems.push({ name, price });
      showNotification(name, cartItems.length);
      const ripple = document.createElement('span');
      ripple.classList.add('ripple');
      const rect = btn.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height);
      ripple.style.width = ripple.style.height = `${size}px`;
      const x = e.clientX - rect.left - size/2;
      const y = e.clientY - rect.top - size/2;
      ripple.style.left = `${x}px`;
      ripple.style.top = `${y}px`;
      btn.style.position = 'relative';
      btn.appendChild(ripple);
      setTimeout(() => ripple.remove(), 500);
    });
  });
  const productDetailModal = new bootstrap.Modal(document.getElementById('productDetailModal'));
  const detailButtons = document.querySelectorAll('.detailBtn');
  let currentProductForModal = '';
  detailButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      currentProductForModal = btn.getAttribute('data-name');
      document.getElementById('modalProductTitle').innerText = currentProductForModal;
      document.getElementById('modalProductNameSpan').innerText = currentProductForModal;
      productDetailModal.show();
    });
  });
  const modalAddBtn = document.getElementById('modalAddToCartBtn');
  if(modalAddBtn) {
    modalAddBtn.addEventListener('click', () => {
      cartItems.push({ name: currentProductForModal || "Premium Package", price: 50 });
      showNotification(currentProductForModal || "Premium Package", cartItems.length);
      productDetailModal.hide();
    });
  }
  
  initializeAllProducts();
</script>

<!--  -->





<!-- <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

  
    .cards-premium-container {
      max-width: 1400px;
      margin: 0 auto;
    }

    /* section header */
    .section-head {
      text-align: center;
      margin-bottom: 3rem;
    }
    .section-badge {
      background: rgba(2, 59, 69, 0.12);
      backdrop-filter: blur(4px);
      display: inline-block;
      padding: 0.4rem 1.2rem;
      border-radius: 60px;
      font-size: 0.8rem;
      font-weight: 600;
      color: #023b45;
      letter-spacing: 0.5px;
      margin-bottom: 1rem;
      border: 0.5px solid rgba(2, 59, 69, 0.2);
    }
    h1 {
      font-size: 2.8rem;
      font-weight: 800;
      background: linear-gradient(125deg, #023b45, #1a6b7a, #B7A08B);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      letter-spacing: -0.02em;
    }
    .sub {
      color: #2d4a55;
      font-size: 1.1rem;
      max-width: 550px;
      margin: 0.5rem auto 0;
      font-weight: 500;
    }

    /* MODERN CARD with full top image */
    .attract-card {
      background: #B7A08B;
      backdrop-filter: blur(2px);
      border-radius: 2rem;
      transition: all 0.35s cubic-bezier(0.2, 0.9, 0.4, 1.1);
      height: 100%;
      display: flex;
      flex-direction: column;
      /* border: 1px solid rgba(255, 255, 255, 0.3); */
      box-shadow: 5 20px 35px -18px rgba(0, 0, 0, 0.15);
      

    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);




      position: relative;
      overflow: hidden;
    }

    /* full image container at top */
    .card-top-image {
      width: 100%;
      height: 160px;
      overflow: hidden;
      background: #023b45;
      border-top-left-radius: 2rem;
      border-top-right-radius: 2rem;
      position: relative;
    }
    .card-top-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.4s ease;
    }
    .attract-card:hover .card-top-image img {
      transform: scale(1.03);
    }

    /* inner content */
    .card-content {
      padding: 1.8rem 1.5rem 1.8rem 1.5rem;
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    /* animated border glow (applies to whole card) */
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
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .attract-card:hover {
      transform: translateY(-12px);
      box-shadow: 0 28px 40px -16px rgba(0, 0, 0, 0.25);
      background: #c2ab97;
      border-color: rgba(2, 59, 69, 0.3);
    }

    /* badges (position absolute over image) */
    .badge-extra {
      position: absolute;
      top: 1.2rem;
      left: 1.2rem;
      background: linear-gradient(105deg, #023b45, #1f6e7a);
      color: white;
      font-size: 0.7rem;
      font-weight: 800;
      padding: 0.3rem 1rem;
      border-radius: 60px;
      box-shadow: 0 6px 12px rgba(0,0,0,0.15);
      z-index: 5;
      letter-spacing: 0.3px;
    }
    .badge-hot {
      background: linear-gradient(105deg, #9c6e4b, #c28a5c);
      color: #023b45;
    }
    .badge-prem {
      background: linear-gradient(105deg, #d4b28c, #b78f67);
      color: #023b45;
    }
    .badge-best {
      background: linear-gradient(105deg, #e1c8a8, #c2a073);
      color: #023b45;
    }

    /* text styling */
    .card-title {
      font-size: 1.8rem;
      font-weight: 800;
      letter-spacing: -0.02em;
      margin-bottom: 0.3rem;
      color: #023b45 !important;
    }
    .short-desc {
      font-size: 0.85rem;
      color: #023b45 !important;
      margin-bottom: 1rem;
      font-weight: 500;
      opacity: 0.9;
    }

    /* price + quantity */
    .price-modern {
      display: flex;
      align-items: baseline;
      justify-content: space-between;
      flex-wrap: wrap;
      margin: 0.5rem 0 0.2rem;
    }
    .current-price {
      font-size: 2.3rem;
      font-weight: 800;
      color: #023b45 !important;
    }
    .price-unit {
      font-size: 1rem;
      font-weight: 600;
      vertical-align: super;
    }
    .qty-badge {
      background: rgba(2, 59, 69, 0.15);
      padding: 0.3rem 1rem;
      border-radius: 60px;
      font-size: 0.75rem;
      font-weight: 700;
      color: #023b45;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    /* features grid */
    .features-mega {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 0.65rem 1rem;
      background: rgba(255, 250, 240, 0.7);
      padding: 0.9rem;
      border-radius: 1.5rem;
      margin: 1rem 0 1.2rem;
    }
    .feat {
      font-size: 0.75rem;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 8px;
      color: #023b45 !important;
    }
    .feat i {
      color: #1f6e7a;
      font-size: 0.8rem;
    }

    /* buttons */
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
      box-shadow: 0 10px 20px -6px rgba(2,59,69,0.5);
    }
    .btn-outline-details {
      background: transparent;
      border: 1.5px solid rgba(2, 59, 69, 0.5);
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
      background: rgba(2, 59, 69, 0.1);
      color: #023b45 !important;
      transform: translateY(-2px);
    }

    /* ripple */
    .ripple {
      position: absolute;
      border-radius: 50%;
      background: rgba(255,255,255,0.4);
      transform: scale(0);
      animation: rippleAnim 0.5s linear;
      pointer-events: none;
    }
    @keyframes rippleAnim {
      to { transform: scale(6); opacity: 0; }
    }

    /* modal */
    .modal-premium .modal-content {
      background: #fef8f0;
      border-radius: 2rem;
      border: 1px solid #B7A08B;
    }

    /* toast */
    .floating-notify {
      position: fixed;
      bottom: 30px;
      right: 30px;
      background: #023b45;
      backdrop-filter: blur(12px);
      color: white;
      padding: 12px 24px;
      border-radius: 60px;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 12px;
      z-index: 9999;
      box-shadow: 0 15px 25px -12px rgba(0,0,0,0.2);
      animation: slideInRight 0.3s ease;
    }
    @keyframes slideInRight {
      from { opacity: 0; transform: translateX(50px); }
      to { opacity: 1; transform: translateX(0); }
    }

    /* responsive */
    @media (max-width: 992px) {
      .card-title { font-size: 1.5rem; }
      .current-price { font-size: 2rem; }
      .card-top-image { height: 140px; }
    }
    @media (max-width: 768px) {
      .features-mega { grid-template-columns: 1fr; }
      .card-content { padding: 1.5rem; }
      h1 { font-size: 2rem; }
      .card-top-image { height: 130px; }
    }
    @media (max-width: 576px) {
      body { padding: 1.5rem; }
      .btn-group-premium { flex-direction: column; gap: 0.6rem; }
      .btn-gradient-cart, .btn-outline-details { width: 100%; }
    }
  </style>

<div class="cards-premium-container">
  <div class="section-head">
    <div class="section-badge"><i class="fas fa-crown me-1"></i> elite marketplace</div>
    <h1><em>Premium Social Accounts</em></h1>
    <p class="sub"><em>Fresh, verified & instantly delivered — trusted by 15k+ creators worldwide</em></p>
  </div>

  <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-4">
    
    <!-- CARD 1: GMAIL with full image at top -->
    <!-- <div class="col">
      <div class="attract-card">
        <div class="badge-extra badge-best"><i class="fas fa-fire me-1"></i> Best Seller</div>
        <div class="card-top-image">
            <img src="pexels-brettjordan-5417844(1).jpg" alt="Instagram Accounts">
          <!-- <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 400'%3E%3Crect width='1200' height='400' fill='%23023b45'/%3E%3Ccircle cx='200' cy='200' r='80' fill='%23EA4335' opacity='0.9'/%3E%3Ccircle cx='500' cy='200' r='80' fill='%234285F4' opacity='0.9'/%3E%3Ccircle cx='800' cy='200' r='80' fill='%2334A853' opacity='0.9'/%3E%3Ccircle cx='1100' cy='200' r='80' fill='%23FBBC05' opacity='0.9'/%3E%3Ctext x='600' y='320' font-family='Arial' font-size='48' fill='white' text-anchor='middle' font-weight='bold'%3EGMAIL%3C/text%3E%3C/svg%3E"
               alt="Gmail Accounts Banner"> -->
        <!-- </div>
        <div class="card-content">
          <h3 class="card-title"><em>Gmail Accounts</em></h3>
          <p class="short-desc"><em>Premium GSuite ready, aged profiles, instant access</em></p>
          <div class="price-modern">
            <span class="current-price"><span class="price-unit">$</span>40</span>
            <span class="qty-badge"><i class="fas fa-database"></i> <b><em>10 Accounts</em></b></span>
          </div>
          <div class="features-mega">
            <div class="feat"><i class="fas fa-check-circle"></i> Fresh Accounts</div>
            <div class="feat"><i class="fas fa-check-circle"></i> Verified Accounts</div>
            <div class="feat"><i class="fas fa-check-circle"></i> Secure Login</div>
            <div class="feat"><i class="fas fa-check-circle"></i> Fast Delivery</div>
            <div class="feat"><i class="fas fa-check-circle"></i> High Quality</div>
            <div class="feat"><i class="fas fa-check-circle"></i> 24H Replacement</div>
            <div class="feat"><i class="fas fa-check-circle"></i> Customer Support</div>
            <div class="feat"><i class="fas fa-check-circle"></i> Instant Details</div>
          </div>
          <div class="btn-group-premium">
            <button class="btn-outline-details detailBtn" data-name="Gmail Accounts"><i class="fas fa-eye"></i> Details</button>
            <button class="btn-gradient-cart addCartBtn" data-name="Gmail Accounts" data-price="50"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
          </div>
        </div>
      </div>
    </div> -->

    <!-- CARD 2: FACEBOOK with full image -->
    <!-- <div class="col">
      <div class="attract-card">
        <div class="badge-extra badge-hot"><i class="fas fa-bolt me-1"></i> Hot Deal</div>
        <div class="card-top-image">
            <img src="pexels-brettjordan-5426402(1).jpg" alt="Instagram Accounts">
        </div>
        <div class="card-content">
          <h3 class="card-title"><em>Facebook Accounts</em></h3>
          <p class="short-desc"><em>Aged profiles, activity history, ready for ads & business</em></p>
          <div class="price-modern">
            <span class="current-price"><span class="price-unit">$</span>50</span>
            <span class="qty-badge"><i class="fas fa-database"></i> <b><em>10 Accounts</em></b></span>
          </div> -->
          <!-- <div class="features-mega">
            <div class="feat"><i class="fas fa-check-circle"></i> Fresh Accounts</div>
            <div class="feat"><i class="fas fa-check-circle"></i> Verified Accounts</div>
            <div class="feat"><i class="fas fa-check-circle"></i> Secure Login</div>
            <div class="feat"><i class="fas fa-check-circle"></i> Fast Delivery</div>
            <div class="feat"><i class="fas fa-check-circle"></i> High Quality</div>
            <div class="feat"><i class="fas fa-check-circle"></i> 24H Replacement</div>
            <div class="feat"><i class="fas fa-check-circle"></i> Customer Support</div>
            <div class="feat"><i class="fas fa-check-circle"></i> Instant Details</div>
          </div>
          <div class="btn-group-premium">
            <button class="btn-outline-details detailBtn" data-name="Facebook Accounts"><i class="fas fa-eye"></i> Details</button>
            <button class="btn-gradient-cart addCartBtn" data-name="Facebook Accounts" data-price="50"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
          </div>
        </div>
      </div>
    </div> -->

    <!-- CARD 3: INSTAGRAM with full image -->
    <!-- <div class="col">
      <div class="attract-card">
        <div class="badge-extra badge-prem"><i class="fas fa-gem me-1"></i> Premium</div>
        <div class="card-top-image">
            <img src="pexels-brettjordan-5426401(1).jpg" alt="Instagram Accounts">
       
        </div>
        <div class="card-content">
          <h3 class="card-title"><em>Instagram Accounts</em></h3>
          <p class="short-desc"><em>High engagement, real followers potential, profile ready</em></p>
          <div class="price-modern">
            <span class="current-price"><span class="price-unit">$</span>50</span>
            <span class="qty-badge"><i class="fas fa-database"></i><b><em> 10 Accounts</em></b></span>
          </div>
          <div class="features-mega">
            <div class="feat"><i class="fas fa-check-circle"></i> Fresh Accounts</div>
            <div class="feat"><i class="fas fa-check-circle"></i> Verified Accounts</div>
            <div class="feat"><i class="fas fa-check-circle"></i> Secure Login</div>
            <div class="feat"><i class="fas fa-check-circle"></i> Fast Delivery</div>
            <div class="feat"><i class="fas fa-check-circle"></i> High Quality</div>
            <div class="feat"><i class="fas fa-check-circle"></i> 24H Replacement</div>
            <div class="feat"><i class="fas fa-check-circle"></i> Customer Support</div>
            <div class="feat"><i class="fas fa-check-circle"></i> Instant Details</div>
          </div>
          <div class="btn-group-premium">
            <button class="btn-outline-details detailBtn" data-name="Instagram Accounts"><i class="fas fa-eye"></i> Details</button>
            <button class="btn-gradient-cart addCartBtn" data-name="Instagram Accounts" data-price="50"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
          </div>
        </div>
      </div>
    </div> -->

    <!-- CARD 4: TWITTER (X) with full image -->
    <!-- <div class="col">
      <div class="attract-card">
        <div class="badge-extra" style="background: linear-gradient(105deg, #1f6e7a, #023b45); color:white;"><i class="fas fa-check-double me-1"></i> Verified</div>
        <div class="card-top-image">
<img src="pexels-brettjordan-5417837(1).jpg" alt="Instagram Accounts">
        
        </div>
        <div class="card-content">
          <h3 class="card-title"><em>Twitter (X) Accounts</em></h3>
          <p class="short-desc"><em>Established accounts with email access, perfect for brand</em></p>
          <div class="price-modern">
            <span class="current-price"><span class="price-unit">$</span>50</span>
            <span class="qty-badge"><i class="fas fa-database"></i> <b><em>10 Accounts</em></b></span>
          </div>
          <div class="features-mega">
            <div class="feat"><i class="fas fa-check-circle"></i> Fresh Accounts</div>
            <div class="feat"><i class="fas fa-check-circle"></i> Verified Accounts</div>
            <div class="feat"><i class="fas fa-check-circle"></i> Secure Login</div>
            <div class="feat"><i class="fas fa-check-circle"></i> Fast Delivery</div>
            <div class="feat"><i class="fas fa-check-circle"></i> High Quality</div>
            <div class="feat"><i class="fas fa-check-circle"></i> 24H Replacement</div>
            <div class="feat"><i class="fas fa-check-circle"></i> Customer Support</div>
            <div class="feat"><i class="fas fa-check-circle"></i> Instant Details</div>
          </div>
          <div class="btn-group-premium">
            <button class="btn-outline-details detailBtn" data-name="Twitter (X) Accounts"><i class="fas fa-eye"></i> Details</button>
            <button class="btn-gradient-cart addCartBtn" data-name="Twitter (X) Accounts" data-price="50"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<!-- MODAL (details popup) -->
<!-- <div class="modal fade modal-premium" id="productDetailModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header border-0 pt-4 pb-1 px-4">
        <h5 class="modal-title fw-bold fs-2" id="modalProductTitle" style="color: #023b45;">Premium Package</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body px-4 pb-4">
        <div class="rounded-4 p-3 mb-3" style="background: #B7A08B20; border:1px solid #B7A08B;"><i class="fas fa-star-of-life me-2" style="color:#023b45;"></i> <strong id="modalProductNameSpan" style="color:#023b45;">Product</strong> <span style="color:#023b45;">– elite quality accounts</span></div>
        <div class="row g-3">
          <div class="col-md-6">
            <ul class="list-unstyled">
              <li class="mb-2" style="color:#023b45;"><i class="fas fa-check-circle" style="color:#1f6e7a;"></i> Fresh and active accounts</li>
              <li class="mb-2" style="color:#023b45;"><i class="fas fa-check-circle" style="color:#1f6e7a;"></i> 24 Hours Replacement Guaranteed</li>
              <li class="mb-2" style="color:#023b45;"><i class="fas fa-check-circle" style="color:#1f6e7a;"></i> Manual quality checking</li>
              <li class="mb-2" style="color:#023b45;"><i class="fas fa-check-circle" style="color:#1f6e7a;"></i> Fast online delivery</li>
              <li class="mb-2" style="color:#023b45;"><i class="fas fa-check-circle" style="color:#1f6e7a;"></i> Secure account information</li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list-unstyled">
              <li class="mb-2" style="color:#023b45;"><i class="fas fa-check-circle" style="color:#1f6e7a;"></i> Multiple quantity available</li>
              <li class="mb-2" style="color:#023b45;"><i class="fas fa-check-circle" style="color:#1f6e7a;"></i> Customer support assistance</li>
              <li class="mb-2" style="color:#023b45;"><i class="fas fa-check-circle" style="color:#1f6e7a;"></i> Instant account access after purchase</li>
              <li class="mb-2" style="color:#023b45;"><i class="fas fa-check-circle" style="color:#1f6e7a;"></i> Professional service</li>
              <li class="mb-2" style="color:#023b45;"><i class="fas fa-check-circle" style="color:#1f6e7a;"></i> Satisfaction focused support</li>
            </ul>
          </div>
        </div>
        <div class="alert mt-3 rounded-4" style="background:#B7A08B30; border:none; color:#023b45;"><i class="fas fa-shield-alt me-2"></i> 100% secure checkout & instant details delivery</div>
      </div>
      <div class="modal-footer border-0 pb-4 px-4">
        <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal" style="border-color:#B7A08B; color:#023b45;">Close</button>
        <button type="button" class="btn rounded-pill px-4" id="modalAddToCartBtn" style="background: linear-gradient(95deg,#023b45,#1f6e7a); border:none; color:white;"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
      </div>
    </div>
  </div>
</div> -->


<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
<!-- <script>
  let cartItems = [];

  function showNotification(productName, cartLength) {
    const existing = document.querySelector('.floating-notify');
    if(existing) existing.remove();
    const toast = document.createElement('div');
    toast.className = 'floating-notify';
    toast.innerHTML = `<i class="fas fa-shopping-bag" style="color:#e9cba7;"></i> ${productName} added · ${cartLength} item${cartLength !== 1 ? 's' : ''} in cart`;
    document.body.appendChild(toast);
    setTimeout(() => toast.remove(), 2600);
  }

  const addBtns = document.querySelectorAll('.addCartBtn');
  addBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      const name = btn.getAttribute('data-name');
      const price = parseFloat(btn.getAttribute('data-price'));
      cartItems.push({ name, price });
      showNotification(name, cartItems.length);
      
      const ripple = document.createElement('span');
      ripple.classList.add('ripple');
      const rect = btn.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height);
      ripple.style.width = ripple.style.height = `${size}px`;
      const x = e.clientX - rect.left - size/2;
      const y = e.clientY - rect.top - size/2;
      ripple.style.left = `${x}px`;
      ripple.style.top = `${y}px`;
      btn.style.position = 'relative';
      btn.appendChild(ripple);
      setTimeout(() => ripple.remove(), 500);
    });
  });

  const modalEl = document.getElementById('productDetailModal');
  const modalBs = new bootstrap.Modal(modalEl);
  const modalTitleSpan = document.getElementById('modalProductTitle');
  const modalProductSpan = document.getElementById('modalProductNameSpan');
  let currentProductForModal = '';

  const detailButtons = document.querySelectorAll('.detailBtn');
  detailButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const product = btn.getAttribute('data-name');
      currentProductForModal = product;
      modalTitleSpan.innerText = product;
      modalProductSpan.innerText = product;
      modalBs.show();
    });
  });

  const modalAddBtn = document.getElementById('modalAddToCartBtn');
  if(modalAddBtn) {
    modalAddBtn.addEventListener('click', () => {
      if(currentProductForModal) {
        cartItems.push({ name: currentProductForModal, price: 50 });
        showNotification(currentProductForModal, cartItems.length);
        modalBs.hide();
      } else {
        cartItems.push({ name: "Premium Package", price: 50 });
        showNotification("Premium Package", cartItems.length);
        modalBs.hide();
      }
    });
  }
</script> -->


<!-- </div>  -->
<br>


<!-- =========================================================
     COMPREHENSIVE RESPONSIVE FIX — ALL DEVICES
     ========================================================= -->
<style>
    /* ===== RESET & GLOBAL ===== */
    html { overflow-x: hidden; }
    body { overflow-x: hidden; }
    .section-padding { padding: 80px 0; }

    /* ===== QUANTUM SLIDER ===== */
    @media (max-width: 768px) {
        .quantum-slider { height: 70vh; }
        .holo-card {
            padding: 1.2rem;
            border-radius: 32px;
            margin: 0 0.5rem;
        }
        .quantum-badge {
            font-size: 0.6rem;
            letter-spacing: 3px;
        }
        .quantum-badge::before,
        .quantum-badge::after { display: none; }
        .quantum-heading {
            font-size: clamp(2rem, 8vw, 3.5rem);
        }
        .quantum-text {
            font-size: 0.8rem;
            line-height: 1.5;
        }
        .neural-btn {
            padding: 10px 24px;
            font-size: 0.7rem;
            letter-spacing: 1px;
        }
        .nav-orb { width: 40px; height: 40px; font-size: 0.9rem; }
        .nav-orb-left { left: 0.75rem; }
        .nav-orb-right { right: 0.75rem; }
        .time-crystal { width: 50px; height: 50px; bottom: 15px; right: 15px; }
        .time-crystal svg { width: 50px; height: 50px; }
        .quantum-dots { bottom: 1.5rem; }
    }
    @media (max-width: 480px) {
        .quantum-slider { height: 65vh; }
        .holo-card { padding: 1rem; border-radius: 24px; }
        .quantum-heading {
            font-size: clamp(1.6rem, 7vw, 2.5rem);
            margin-bottom: 0.8rem;
        }
        .quantum-text { font-size: 0.75rem; }
        .neural-btn { padding: 8px 18px; font-size: 0.65rem; }
        .nav-orb { width: 34px; height: 34px; font-size: 0.8rem; }
        .quantum-dots { gap: 0.6rem; }
    }

    /* ===== ULTRA-WIDE (1600px+) ===== */
    @media (min-width: 1600px) {
        .quantum-slider { height: 90vh; }
        .holo-card { max-width: 850px; }
        .cards-premium-container { max-width: 1600px; }
        .section-padding { padding: 100px 0; }
    }
    @media (min-width: 2000px) {
        .cards-premium-container { max-width: 1800px; }
    }

    /* ===== FEATURE CARDS (section 1) ===== */
    .card-grid {
        padding: 20px;
        max-width: 1300px;
        margin: 0 auto;
    }
    @media (max-width: 1024px) {
        .card-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            padding: 16px;
            max-width: 100%;
        }
    }
    @media (max-width: 640px) {
        .card-grid {
            grid-template-columns: 1fr;
            gap: 16px;
            padding: 12px 16px;
            max-width: 420px;
            margin: 0 auto;
        }
        .card-body { padding: 16px 14px 20px; }
        .card-body h3 { font-size: 1.1rem; }
        .card-body p { font-size: 0.85rem; }
    }

    /* ===== SECTION HEADINGS (centered) ===== */
    @media (max-width: 768px) {
        h1 { font-size: clamp(1.5rem, 5vw, 2rem) !important; }
        .section-padding { padding: 40px 0; }
        .mb-5 { margin-bottom: 2rem !important; }
    }
    @media (max-width: 480px) {
        .section-padding { padding: 30px 0; }
    }

    /* ===== PRODUCT CARDS (section 2) ===== */
    @media (max-width: 576px) {
        .card-content { padding: 1rem 0.8rem 1.2rem; }
        .features-mega { grid-template-columns: 1fr 1fr; padding: 0.5rem; gap: 0.3rem 0.5rem; }
        .feat { font-size: 0.6rem; gap: 4px; }
        .feat i { font-size: 0.55rem; }
        .card-top-image { height: 120px; }
        .card-title { font-size: 1.2rem !important; }
        .current-price { font-size: 1.6rem !important; }
        .btn-group-premium { flex-direction: column; gap: 0.5rem; }
        .btn-gradient-cart, .btn-outline-details { width: 100%; }
        .price-modern { flex-direction: column; align-items: flex-start; gap: 0.3rem; }
        .qty-badge { margin-left: 0; }
        .attract-card { border-radius: 1.2rem; }
        .card-top-image { border-radius: 1.2rem 1.2rem 0 0; }
        .badge-extra { font-size: 0.5rem; padding: 0.2rem 0.6rem; top: 0.6rem; left: 0.6rem; }
    }

    /* ===== GLOBAL MAP SECTION ===== */
    @media (max-width: 992px) {
        .map-svg-container { order: 1; }
        .map-stats-grid { order: 2; }
    }
    @media (max-width: 576px) {
        .map-svg-container img { height: auto; }
        .map-stat-card div:first-child { font-size: 1.4rem !important; }
    }

    /* ===== SOLUTIONS CARDS ===== */
    @media (max-width: 768px) {
        .solutions-grid-pro .solution-card-premium { padding: 1.4rem; }
    }
    @media (max-width: 576px) {
        .solutions-grid-pro .solution-card-premium {
            padding: 1.2rem;
            margin-bottom: 0.5rem;
        }
    }

    /* ===== ACHIEVEMENT / SUPPORT / TIMELINE CARDS ===== */
    @media (max-width: 768px) {
        .achievement-grid-pro .col-md-6,
        .support-grid-pro .col-md-6,
        .timeline-grid-pro .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }
    @media (max-width: 576px) {
        .achievement-grid-pro .col-md-6,
        .support-grid-pro .col-md-6,
        .timeline-grid-pro .col-md-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .achievement-card-premium,
        .support-card-premium,
        .milestone-card-premium {
            padding: 1.4rem;
        }
    }

    /* ===== TRUST BADGES (6-col on desktop) ===== */
    @media (max-width: 992px) {
        .trust-grid-pro .col-lg-2 {
            flex: 0 0 33.333%;
            max-width: 33.333%;
        }
    }
    @media (max-width: 576px) {
        .trust-grid-pro .col-lg-2 {
            flex: 0 0 33.333%;
            max-width: 33.333%;
        }
        .trust-badge-card { padding: 0.8rem; }
        .trust-badge-card div:first-child { font-size: 2rem !important; }
        .trust-badge-card div:last-child { font-size: 0.7rem !important; }
    }

    /* ===== RESOURCE CARDS ===== */
    @media (max-width: 768px) {
        .resource-grid-pro .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }
    @media (max-width: 576px) {
        .resource-grid-pro .col-md-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    /* ===== CTA SECTION ===== */
    @media (max-width: 768px) {
        .cta-mega-btn-group { flex-direction: column; align-items: center; }
        .cta-mega-btn-group a {
            width: 100%;
            max-width: 300px;
            justify-content: center;
            padding: 14px 24px !important;
            font-size: 0.9rem !important;
        }
    }

    /* ===== FEATURES SECTION HEADING ===== */
    @media (max-width: 576px) {
        .card-grid .card { transform: none !important; }
    }

    /* ===== MODALS ON MOBILE ===== */
    @media (max-width: 768px) {
        .modal-dialog { margin: 0.5rem; }
        .modal-content { border-radius: 1.2rem !important; }
        .modal-body { padding: 1rem !important; }
        .modal-body .row { gap: 1rem !important; }
        .detail-image-wrap { height: 180px; border-radius: 1rem; }
    }

    /* ===== SECTION HEADINGS INSIDE DARK SECTIONS ===== */
    .solutions-head-matrix h2,
    .achievement-head-matrix h2,
    .support-head-matrix h2,
    .trust-head-matrix h2,
    .resource-head-matrix h2,
    .timeline-head-matrix h2 {
        color: #023b45;
    }
    .solutions-head-matrix p,
    .achievement-head-matrix p,
    .support-head-matrix p,
    .trust-head-matrix p,
    .resource-head-matrix p,
    .timeline-head-matrix p {
        color: rgba(2,59,69,0.7);
    }

    /* ===== BADGE TEXT INSIDE DARK SECTIONS ===== */
    .badge-solutions-premium,
    .badge-achievement-premium,
    .badge-support-premium,
    .badge-trust-premium,
    .badge-resource-premium,
    .badge-timeline-premium {
        background: rgba(2,59,69,0.12);
        color: #023b45;
    }
</style>

    <script>
        // --------------------------------------------------------------
        // QUANTUM SLIDER: 3D, PARTICLES, HOLOGRAPHIC EFFECTS
        // --------------------------------------------------------------
        
        // Three.js Background Setup
        const canvas = document.getElementById('canvas3d');
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ canvas, alpha: true });
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setClearColor(0x023b45, 0);
        
        // Create floating particles 3D
        const particleCount = 800;
        const particlesGeometry = new THREE.BufferGeometry();
        const particlesPositions = new Float32Array(particleCount * 3);
        for(let i = 0; i < particleCount; i++) {
            particlesPositions[i*3] = (Math.random() - 0.5) * 200;
            particlesPositions[i*3+1] = (Math.random() - 0.5) * 100;
            particlesPositions[i*3+2] = (Math.random() - 0.5) * 100 - 50;
        }
        particlesGeometry.setAttribute('position', new THREE.BufferAttribute(particlesPositions, 3));
        const particlesMaterial = new THREE.PointsMaterial({
            color: 0xB7A08B,
            size: 0.2,
            transparent: true,
            opacity: 0.6,
            blending: THREE.AdditiveBlending
        });
        const particlesMesh = new THREE.Points(particlesGeometry, particlesMaterial);
        scene.add(particlesMesh);
        
        // Rotating ring
        const ringGeometry = new THREE.TorusGeometry(2, 0.05, 64, 200);
        const ringMaterial = new THREE.MeshBasicMaterial({ color: 0xB7A08B, transparent: true, opacity: 0.4 });
        const ring = new THREE.Mesh(ringGeometry, ringMaterial);
        scene.add(ring);
        
        camera.position.z = 15;
        
        function animate3D() {
            requestAnimationFrame(animate3D);
            particlesMesh.rotation.y += 0.002;
            particlesMesh.rotation.x += 0.001;
            ring.rotation.x += 0.01;
            ring.rotation.y += 0.005;
            ring.rotation.z += 0.007;
            renderer.render(scene, camera);
        }
        animate3D();
        
        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });
        
        // Slider Logic
        const slides = document.querySelectorAll('.slide-quantum');
        const prevBtn = document.getElementById('quantumPrev');
        const nextBtn = document.getElementById('quantumNext');
        const dotsContainer = document.getElementById('quantumDots');
        const crystalRing = document.querySelector('.crystal-ring');
        
        let currentIdx = 0;
        let autoInterval;
        let isAnimating = false;
        let autoDelay = 7000;
        let ringInterval;
        let startRingTime;
        const circumference = 2 * Math.PI * 35;
        
        function buildDots() {
            dotsContainer.innerHTML = '';
            for(let i = 0; i < slides.length; i++) {
                const dot = document.createElement('div');
                dot.classList.add('quantum-dot');
                if(i === currentIdx) dot.classList.add('active');
                dot.setAttribute('data-index', i);
                dot.addEventListener('click', () => {
                    if(!isAnimating && i !== currentIdx) goToSlide(i);
                });
                dotsContainer.appendChild(dot);
            }
        }
        
        function updateDots() {
            document.querySelectorAll('.quantum-dot').forEach((dot, i) => {
                if(i === currentIdx) dot.classList.add('active');
                else dot.classList.remove('active');
            });
        }
        
        function createParticleExplosion() {
            const field = document.getElementById('particleField');
            for(let i = 0; i < 30; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                const x = Math.random() * window.innerWidth;
                const y = Math.random() * window.innerHeight;
                particle.style.left = x + 'px';
                particle.style.top = y + 'px';
                particle.style.width = Math.random() * 4 + 1 + 'px';
                particle.style.height = particle.style.width;
                field.appendChild(particle);
                gsap.fromTo(particle, 
                    { opacity: 0, scale: 0 },
                    { opacity: 0.8, scale: 1, duration: 0.5, yoyo: true, repeat: 1, onComplete: () => particle.remove() }
                );
            }
        }
        
        function goToSlide(index) {
            if(isAnimating) return;
            if(index < 0) index = slides.length - 1;
            if(index >= slides.length) index = 0;
            if(index === currentIdx) return;
            
            isAnimating = true;
            const current = slides[currentIdx];
            const next = slides[index];
            
            createParticleExplosion();
            
            // GSAP Quantum Transition
            gsap.to(current, {
                opacity: 0,
                scale: 0.9,
                rotationX: -15,
                duration: 0.7,
                ease: "power3.in",
                onComplete: () => {
                    current.classList.remove('active');
                    next.classList.add('active');
                    gsap.fromTo(next, 
                        { opacity: 0, scale: 0.9, rotationX: 15 },
                        { opacity: 1, scale: 1, rotationX: 0, duration: 0.9, ease: "back.out(0.5)", onComplete: () => {
                            isAnimating = false;
                            animateTextReveal(next);
                            createParticleExplosion();
                        }}
                    );
                }
            });
            
            currentIdx = index;
            updateDots();
            resetRingProgress();
        }
        
        function animateTextReveal(slide) {
            const elements = slide.querySelectorAll('.reveal-quantum');
            elements.forEach((el, i) => {
                gsap.fromTo(el,
                    { opacity: 0, y: 50, scale: 0.9 },
                    { opacity: 1, y: 0, scale: 1, duration: 0.8, delay: i * 0.12, ease: "elastic.out(1, 0.5)" }
                );
            });
        }
        
        function nextSlide() { if(!isAnimating) goToSlide(currentIdx + 1); resetAutoTimer(); }
        function prevSlide() { if(!isAnimating) goToSlide(currentIdx - 1); resetAutoTimer(); }
        
        function startRingProgress() {
            if(ringInterval) clearInterval(ringInterval);
            startRingTime = performance.now();
            const updateRing = () => {
                const elapsed = performance.now() - startRingTime;
                let progress = Math.min(elapsed / autoDelay, 1);
                const offset = circumference * (1 - progress);
                if(crystalRing) crystalRing.style.strokeDashoffset = offset;
                if(progress >= 1) clearInterval(ringInterval);
            };
            ringInterval = setInterval(updateRing, 30);
        }
        
        function resetRingProgress() {
            if(ringInterval) clearInterval(ringInterval);
            if(crystalRing) crystalRing.style.strokeDashoffset = circumference;
            startRingProgress();
        }
        
        function startAutoSlide() {
            if(autoInterval) clearInterval(autoInterval);
            autoInterval = setInterval(() => {
                if(!isAnimating) nextSlide();
            }, autoDelay);
        }
        
        function resetAutoTimer() {
            if(autoInterval) {
                clearInterval(autoInterval);
                startAutoSlide();
            }
            resetRingProgress();
        }
        
        let isPaused = false;
        const sliderContainer = document.getElementById('quantumSlider');
        sliderContainer.addEventListener('mouseenter', () => { isPaused = true; if(ringInterval) clearInterval(ringInterval); });
        sliderContainer.addEventListener('mouseleave', () => { isPaused = false; resetRingProgress(); resetAutoTimer(); });
        
        // Touch Swipe
        let touchStart = 0;
        sliderContainer.addEventListener('touchstart', (e) => { touchStart = e.touches[0].clientX; });
        sliderContainer.addEventListener('touchend', (e) => {
            const diff = touchStart - e.changedTouches[0].clientX;
            if(Math.abs(diff) > 50) diff > 0 ? nextSlide() : prevSlide();
        });
        
        // Button Events
        prevBtn.addEventListener('click', prevSlide);
        nextBtn.addEventListener('click', nextSlide);
        
        // Button Ripple Effect
        document.querySelectorAll('.neural-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const ripple = document.createElement('span');
                ripple.style.position = 'absolute';
                ripple.style.borderRadius = '50%';
                ripple.style.background = 'radial-gradient(circle, rgba(255,255,255,0.8), rgba(183,160,139,0.5))';
                const rect = btn.getBoundingClientRect();
                ripple.style.width = ripple.style.height = '150px';
                ripple.style.left = `${e.clientX - rect.left - 75}px`;
                ripple.style.top = `${e.clientY - rect.top - 75}px`;
                ripple.style.transform = 'scale(0)';
                ripple.style.transition = 'transform 0.6s, opacity 0.6s';
                btn.style.position = 'relative';
                btn.style.overflow = 'hidden';
                btn.appendChild(ripple);
                setTimeout(() => { ripple.style.transform = 'scale(2)'; ripple.style.opacity = '0'; }, 10);
                setTimeout(() => ripple.remove(), 600);
            });
        });
        
        // Initialize
        buildDots();
        startAutoSlide();
        startRingProgress();
        animateTextReveal(slides[0]);
        
        // Mouse Parallax for 3D Effect
        document.addEventListener('mousemove', (e) => {
            const x = (e.clientX / window.innerWidth - 0.5) * 0.02;
            const y = (e.clientY / window.innerHeight - 0.5) * 0.02;
            particlesMesh.rotation.x += y * 0.02;
            particlesMesh.rotation.y += x * 0.02;
        });
    </script>

<style>

    .accordion-button {
      background: rgba(183, 160, 139, 0.2);
      color: #FEFAF7;
      font-weight: 700;
      border-radius: 1rem !important;
    }
</style>

<script>
  if(whatsapp) whatsapp.addEventListener('input', function() { formatPhoneNumber(whatsapp); });

</script>

<?php

include 'footer.php';

?>
</body>
</html>

