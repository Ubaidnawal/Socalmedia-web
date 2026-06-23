<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Contact Us | PVA Accounts – Next‑Level Support</title>
    <!-- Google Fonts + Font Awesome + GSAP + Tilt.js -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.8.1/dist/vanilla-tilt.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #FEFAF7;
            color: #1e2a3a;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        /* animated gradient background */
        .bg-gradient-animate {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            background: radial-gradient(circle at 20% 30%, rgba(2,59,69,0.03) 0%, rgba(183,160,139,0.02) 100%);
        }

        .particles-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        :root {
            --primary: #023b45;
            --secondary: #B7A08B;
            --white-bg: #FEFAF7;
            --shadow-sm: 0 12px 28px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 20px 35px -12px rgba(0, 0, 0, 0.12);
            --shadow-hover: 0 30px 45px -12px rgba(0, 0, 0, 0.2);
        }

        section {
            padding: 100px 0;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 800;
            text-align: center;
            background: linear-gradient(135deg, #023b45, #B7A08B);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            letter-spacing: -0.02em;
        }

        /* Glassmorphism card (premium) */
        .glass-premium {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(183, 160, 139, 0.3);
            border-radius: 32px;
            transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
            box-shadow: var(--shadow-sm);
        }
        .glass-premium:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
            border-color: rgba(183, 160, 139, 0.6);
            backdrop-filter: blur(12px);
        }

        /* Buttons with glow */
        .btn-next {
            background: var(--primary);
            color: white;
            border: none;
            padding: 14px 36px;
            border-radius: 60px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            transition: 0.3s;
            position: relative;
            overflow: hidden;
        }
        .btn-next::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        .btn-next:hover::after { left: 100%; }
        .btn-next:hover { transform: scale(1.02); box-shadow: 0 8px 20px rgba(2,59,69,0.3); }

        .btn-outline-glow {
            background: transparent;
            border: 2px solid var(--secondary);
            color: var(--primary);
            padding: 12px 32px;
            border-radius: 60px;
            font-weight: 600;
            transition: 0.25s;
        }
        .btn-outline-glow:hover { background: var(--secondary); color: white; box-shadow: 0 0 15px rgba(183,160,139,0.5); }

        /* Hero Section advanced */
        .hero-advanced {
            min-height: 85vh;
            display: flex;
            align-items: center;
            position: relative;
        }
        .floating-badge {
            animation: float 3s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        /* Trust pills */
        .trust-pill {
            background: rgba(255,255,255,0.9);
            backdrop-filter: blur(4px);
            padding: 10px 24px;
            border-radius: 60px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            box-shadow: var(--shadow-sm);
        }

        /* Contact info grid with tilt */
        .contact-grid-adv {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 30px;
            margin-top: -50px;
            margin-bottom: 60px;
        }
        .tilt-card {
            background: white;
            border-radius: 28px;
            padding: 32px 20px;
            text-align: center;
            box-shadow: var(--shadow-sm);
            transition: all 0.2s;
        }
        .tilt-card i { font-size: 3rem; color: var(--secondary); margin-bottom: 16px; }

        /* Advanced form */
        .form-advanced {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(8px);
            border-radius: 40px;
            padding: 48px;
            box-shadow: var(--shadow-md);
        }
        .input-group-modern {
            margin-bottom: 24px;
        }
        .input-group-modern label {
            font-weight: 600;
            margin-bottom: 8px;
            display: block;
            color: var(--primary);
        }
        .input-group-modern input, 
        .input-group-modern select, 
        .input-group-modern textarea {
            width: 100%;
            padding: 14px 20px;
            border: 1.5px solid #e9ecef;
            border-radius: 28px;
            transition: 0.2s;
            background: white;
        }
        .input-group-modern input:focus, 
        .input-group-modern select:focus, 
        .input-group-modern textarea:focus {
            border-color: var(--secondary);
            box-shadow: 0 0 0 4px rgba(183,160,139,0.2);
            outline: none;
        }
        .error-modern { color: #e53e3e; font-size: 0.75rem; margin-top: 6px; }
        .success-modern { background: #c6f6d5; border-radius: 28px; padding: 14px; text-align: center; }

        /* Why cards with neon border */
        .why-card-adv {
            background: white;
            padding: 32px 24px;
            border-radius: 32px;
            text-align: center;
            transition: all 0.4s;
            position: relative;
            overflow: hidden;
        }
        .why-card-adv::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 32px;
            padding: 2px;
            background: linear-gradient(125deg, #023b45, #B7A08B);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            opacity: 0;
            transition: 0.4s;
        }
        .why-card-adv:hover::before { opacity: 1; }

        /* Process timeline modern */
        .process-steps-adv {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
        }
        .step-adv {
            background: white;
            border-radius: 36px;
            padding: 30px;
            text-align: center;
            flex: 1;
            min-width: 200px;
            backdrop-filter: blur(4px);
        }
        .step-number-adv {
            width: 56px;
            height: 56px;
            background: var(--primary);
            color: white;
            font-size: 1.8rem;
            font-weight: 800;
            border-radius: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 8px 14px rgba(2,59,69,0.2);
        }

        /* FAQ with micro interactions */
        .faq-adv-item {
            background: white;
            border-radius: 28px;
            margin-bottom: 18px;
            overflow: hidden;
        }
        .faq-adv-question {
            padding: 22px 28px;
            font-weight: 700;
            display: flex;
            justify-content: space-between;
            cursor: pointer;
            background: white;
        }
        .faq-adv-answer { padding: 0 28px; max-height: 0; overflow: hidden; transition: 0.4s; }

        /* Review cards 3D */
        .review-adv {
            background: white;
            border-radius: 32px;
            padding: 28px;
            transition: 0.3s;
        }

        /* CTA section with animated button */
        .cta-adv {
            background: linear-gradient(145deg, #023b45, #0a5e6b);
            border-radius: 56px;
            padding: 70px 40px;
            text-align: center;
        }

        /* reveal animations */
        .reveal-up {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        .reveal-up.revealed {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            section { padding: 60px 0; }
            .section-title { font-size: 2.2rem; }
            .form-advanced { padding: 28px; }
        }
    </style>
</head>
<body>
<div class="bg-gradient-animate"></div>
<canvas id="particleCanvas" class="particles-canvas"></canvas>

<!-- Hero Section Advanced -->
<section class="hero-advanced">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 text-center text-lg-start" data-aos="fade-up">
                <div class="floating-badge d-inline-block mb-4">
                    <span class="trust-pill"><i class="fas fa-headset"></i> Premium Support 24/7</span>
                </div>
               <em> <h1 style="font-size: 3.8rem; font-weight: 800; color: #023b45;">Connect With <span style="color: #B7A08B;">PVA Experts</span></h1></em>
                <p class="lead my-4" style="color: #4a5b74;">Instant assistance for Gmail, Facebook, Instagram, Twitter PVA accounts — your success is our mission.</p>
                <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-start">
                    <button class="btn-next" onclick="document.getElementById('contactFormAdv').scrollIntoView({behavior:'smooth'})"><i class="fas fa-paper-plane"></i> Send Inquiry</button>
                    <a href="https://wa.me/923141001807" class="btn-outline-glow"><i class="fab fa-whatsapp"></i> WhatsApp Now</a>
                </div>
                <div class="d-flex flex-wrap gap-3 mt-5">
                    <div class="trust-pill"><i class="fas fa-clock"></i> 24/7 Support</div>
                    <div class="trust-pill"><i class="fas fa-bolt"></i> Fast Response</div>
                    <div class="trust-pill"><i class="fas fa-lock"></i> Secure Comms</div>
                    <div class="trust-pill"><i class="fas fa-smile"></i> 99% Satisfied</div>
                </div>
            </div>
            <div class="col-lg-5 text-center mt-5 mt-lg-0">
                <div class="glass-premium p-4" style="background: rgba(255,255,255,0.7);">
                    <i class="fas fa-headset" style="font-size: 5rem; color: var(--secondary);"></i>
                    <h3 class="mt-3">We reply in <span id="dynamicReply">10</span> minutes avg.</h3>
                    <div class="progress mt-3" style="height: 8px;"><div class="progress-bar bg-success" style="width: 98%"></div></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Info Cards with Tilt -->
<div class="container contact-grid-adv">

    <!-- WhatsApp -->
    <a href="https://wa.me/923141001807" target="_blank" class="tilt-card" data-tilt data-tilt-max="5">
        <i class="fab fa-whatsapp"></i>
        <h4>WhatsApp</h4>
        <p>0314 1001807</p>
        <small>Click to chat</small>
    </a>

    <!-- Telegram -->
    <a href="https://t.me/pvafast947" target="_blank" class="tilt-card" data-tilt data-tilt-max="5">
        <i class="fab fa-telegram"></i>
        <h4>Telegram</h4>
        <p>@pvafast947</p>
        <small>Instant reply</small>
    </a>

    <!-- Email -->
    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=pvafast947@gmail.com"
   target="_blank"
   class="tilt-card"
   data-tilt
   data-tilt-max="5">
    <i class="fas fa-envelope"></i>
    <h4>Email</h4>
    <p>pvafast947@gmail.com</p>
    <small>Send Email</small>
</a>

    <!-- Live Chat -->
    <a href="https://wa.me/923141001807" target="_blank" class="tilt-card" data-tilt data-tilt-max="5">
        <i class="fas fa-comment-dots"></i>
        <h4>Live Chat</h4>
        <p>Talk with Agent</p>
        <small>24/7 Available</small>
    </a>

</div>

<style>
.contact-grid-adv .tilt-card{
    text-decoration:none;
    color:inherit;
    cursor:pointer;
    display:flex;
    flex-direction:column;
}

    
</style>
<!-- Advanced Contact Form -->
<section>
    <div class="container">
        <h2 class="section-title">Send a <span style="color: #B7A08B;">Secure Message</span></h2>
        <p class="text-center mb-5">All fields with * are required. We encrypt your data.</p>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="form-advanced" id="contactFormAdv">
                    <form id="advancedForm" action="submit_contact.php" method="POST" novalidate>
                        <div class="row g-4">
                            <div class="col-md-6"><div class="input-group-modern"><label>Full Name *</label><input type="text" id="fullname_adv" name="full_name"><div class="error-modern" id="nameError_adv"></div></div></div>
                            <div class="col-md-6"><div class="input-group-modern"><label>Email *</label><input type="email" id="email_adv" name="email"><div class="error-modern" id="emailError_adv"></div></div></div>
                            <div class="col-md-6"><div class="input-group-modern"><label>WhatsApp (optional)</label><input type="tel" id="whatsapp_adv" name="whatsapp"></div></div>
                            <div class="col-md-6"><div class="input-group-modern"><label>Service Required *</label><select id="service_adv" name="service_required"><option value="">-- Select --</option><option>Buy PVA Accounts</option><option>Bulk Order</option><option>Account Replacement</option><option>Technical Support</option></select><div class="error-modern" id="serviceError_adv"></div></div></div>
                            <div class="col-md-6"><div class="input-group-modern"><label>Account Type *</label><select id="account_adv" name="account_type"><option value="">-- Select --</option><option>Gmail PVA</option><option>Facebook PVA</option><option>Instagram PVA</option><option>Twitter/X PVA</option></select><div class="error-modern" id="accountError_adv"></div></div></div>
                            <div class="col-md-6"><div class="input-group-modern"><label>Order ID (optional)</label><input type="text" id="order_adv" name="order_id" placeholder="#ORD-123"></div></div>
                            <div class="col-12"><div class="input-group-modern"><label>Subject *</label><input type="text" id="subject_adv" name="subject"><div class="error-modern" id="subjectError_adv"></div></div></div>
                            <div class="col-12"><div class="input-group-modern"><label>Message *</label><textarea rows="5" id="message_adv" name="message"></textarea><div class="error-modern" id="messageError_adv"></div></div></div>
                            <div class="col-12"><button type="submit" id="submitAdv" class="btn-next w-100 justify-content-center"><i class="fas fa-paper-plane"></i> Submit Request</button><div id="formStatusAdv"></div></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us with Animated Border -->
<section>
    <div class="container">
        <h2 class="section-title">Why Choose <span style="color:#B7A08B;">PVA Website</span></h2>
        <div class="row g-4 mt-3">
            <div class="col-md-4"><div class="why-card-adv"><i class="fas fa-bolt fa-3x" style="color: var(--secondary);"></i><h4 class="mt-3">Instant Support</h4><p>Live agents 24/7</p></div></div>
            <div class="col-md-4"><div class="why-card-adv"><i class="fas fa-sync-alt fa-3x" style="color: var(--secondary);"></i><h4 class="mt-3">24h Replacement</h4><p>100% warranty</p></div></div>
            <div class="col-md-4"><div class="why-card-adv"><i class="fas fa-shield-alt fa-3x" style="color: var(--secondary);"></i><h4 class="mt-3">Secure Payments</h4><p>SSL encrypted</p></div></div>
            <div class="col-md-4"><div class="why-card-adv"><i class="fas fa-users fa-3x" style="color: var(--secondary);"></i><h4 class="mt-3">Expert Team</h4><p>5+ years exp</p></div></div>
            <div class="col-md-4"><div class="why-card-adv"><i class="fas fa-rocket fa-3x" style="color: var(--secondary);"></i><h4 class="mt-3">Fast Delivery</h4><p>Under 30 min</p></div></div>
            <div class="col-md-4"><div class="why-card-adv"><i class="fas fa-star fa-3x" style="color: var(--secondary);"></i><h4 class="mt-3">Top Rated</h4><p>4.9/5 from 2k+</p></div></div>
        </div>
    </div>
</section>

<!-- Process Timeline Advanced -->
<section style="background: rgba(183,160,139,0.05);">
    <div class="container">
        <h2 class="section-title">Simple 4‑Step Process</h2>
        <div class="process-steps-adv mt-5">
            <div class="step-adv reveal-up"><div class="step-number-adv">1</div><h4>Contact</h4><p>Reach out via any channel</p></div>
            <div class="step-adv reveal-up"><div class="step-number-adv">2</div><h4>Requirements</h4><p>Share account details</p></div>
            <div class="step-adv reveal-up"><div class="step-number-adv">3</div><h4>Confirm Order</h4><p>Secure payment</p></div>
            <div class="step-adv reveal-up"><div class="step-number-adv">4</div><h4>Instant Delivery</h4><p>Accounts received</p></div>
        </div>
    </div>
</section>

<!-- Customer Reviews 3D -->
<section style="background: #FEFAF7;">
    <div class="container">
        <h2 class="section-title">What Our Clients Say</h2>
        <div class="row g-4 mt-3">
            <div class="col-md-4"><div class="review-adv" data-tilt><div style="background: var(--secondary); width: 60px; height: 60px; border-radius: 60px; display: flex; align-items: center; justify-content: center;"><i class="fas fa-user fa-2x text-white"></i></div><h4 class="mt-3">Alex Morgan</h4><div class="stars text-warning mb-2">★★★★★</div><p>"Incredible support! Got my Facebook PVA accounts within 10 minutes. Highly recommended."</p></div></div>
            <div class="col-md-4"><div class="review-adv" data-tilt><div style="background: var(--secondary); width: 60px; height: 60px; border-radius: 60px; display: flex; align-items: center; justify-content: center;"><i class="fas fa-user fa-2x text-white"></i></div><h4 class="mt-3">Priya Sharma</h4><div class="stars text-warning mb-2">★★★★★</div><p>"Best provider for Instagram PVA. Replacement policy is a lifesaver."</p></div></div>
            <div class="col-md-4"><div class="review-adv" data-tilt><div style="background: var(--secondary); width: 60px; height: 60px; border-radius: 60px; display: flex; align-items: center; justify-content: center;"><i class="fas fa-user fa-2x text-white"></i></div><h4 class="mt-3">James Carter</h4><div class="stars text-warning mb-2">★★★★★</div><p>"Gmail accounts work perfectly. Support team is super responsive."</p></div></div>
        </div>
    </div>
</section>

<!-- Trust & Security Section -->
<section style="background: #023b45; border-radius: 60px; margin: 20px 24px; width: auto;">
    <div class="container text-center py-5">
        <h2 class="section-title" style="color: white; background: none;">Bank-Level Security</h2>
        <div class="d-flex flex-wrap justify-content-center gap-5 mt-4">
            <div><i class="fas fa-shield-alt fa-3x" style="color: #B7A08B;"></i><p class="text-white mt-2">Encrypted Chat</p></div>
            <div><i class="fas fa-user-secret fa-3x" style="color: #B7A08B;"></i><p class="text-white mt-2">Privacy First</p></div>
            <div><i class="fas fa-check-circle fa-3x" style="color: #B7A08B;"></i><p class="text-white mt-2">Verified Team</p></div>
            <div><i class="fas fa-clock fa-3x" style="color: #B7A08B;"></i><p class="text-white mt-2">24/7 Monitoring</p></div>
        </div>
    </div>
</section>

<!-- CTA Next Level -->
<div class="container my-5">
    <div class="cta-adv">
        <h2 style="font-size: 2.5rem; font-weight: 800;">Need immediate assistance?</h2>
        <p class="mt-3">Click below to chat with a real person — we're online 24/7.</p>
        <div class="d-flex gap-3 justify-content-center mt-4 flex-wrap">
            <button class="btn-next" onclick="window.open('https://wa.me/923141001807','_blank')"><i class="fab fa-whatsapp"></i> WhatsApp Now</button>
            <button class="btn-outline-glow" onclick="document.getElementById('contactFormAdv').scrollIntoView({behavior:'smooth'})"><i class="fas fa-envelope"></i> Contact Form</button>
        </div>
    </div>
</div>

<script>
    // Particle background (advanced)
    const canvas = document.getElementById('particleCanvas');
    const ctx = canvas.getContext('2d');
    let particles = [];
    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }
    function initParticles() {
        particles = [];
        for(let i=0;i<120;i++) {
            particles.push({
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                radius: Math.random() * 2 + 0.5,
                alpha: Math.random() * 0.5 + 0.2,
                vx: (Math.random() - 0.5) * 0.3,
                vy: (Math.random() - 0.5) * 0.2
            });
        }
    }
    function animateParticles() {
        if(!ctx) return;
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        particles.forEach(p => {
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.radius, 0, Math.PI*2);
            ctx.fillStyle = `rgba(183, 160, 139, ${p.alpha})`;
            ctx.fill();
            p.x += p.vx;
            p.y += p.vy;
            if(p.x < 0) p.x = canvas.width;
            if(p.x > canvas.width) p.x = 0;
            if(p.y < 0) p.y = canvas.height;
            if(p.y > canvas.height) p.y = 0;
        });
        requestAnimationFrame(animateParticles);
    }
    window.addEventListener('resize', () => { resizeCanvas(); initParticles(); });
    resizeCanvas();
    initParticles();
    animateParticles();

    // ── Non-critical enhancements (wrapped so failures don't block form) ──
    try { gsap.registerPlugin(ScrollTrigger); } catch(e) {}
    try {
        document.querySelectorAll('.reveal-up').forEach(el => {
            gsap.fromTo(el, { y: 40, opacity: 0 }, {
                y: 0, opacity: 1, duration: 0.8, scrollTrigger: { trigger: el, start: 'top 85%', toggleActions: 'play none none reverse' }
            });
        });
    } catch(e) {}

    try { VanillaTilt.init(document.querySelectorAll("[data-tilt]"), { max: 8, speed: 400, glare: true, "max-glare": 0.2 }); } catch(e) {}

    try {
        document.querySelectorAll('.faq-adv-question').forEach(q => {
            q.addEventListener('click', () => {
                const parent = q.parentElement;
                const answer = parent.querySelector('.faq-adv-answer');
                const isActive = parent.classList.contains('active');
                document.querySelectorAll('.faq-adv-item').forEach(i => i.classList.remove('active'));
                if (!isActive) parent.classList.add('active');
                else parent.classList.remove('active');
            });
        });
    } catch(e) {}

    // ── Form submission handler (critical — always registered) ──
    (function() {
        try {
            const formAdv = document.getElementById('advancedForm');
            if (!formAdv) return; // safety: form element must exist

            const submitBtnAdv = document.getElementById('submitAdv');
            const statusAdv = document.getElementById('formStatusAdv');

            function showErrorAdv(id, msg) { const el = document.getElementById(id); if(el) el.innerText = msg; }
            function clearErrorsAdv() { ['nameError_adv','emailError_adv','serviceError_adv','accountError_adv','subjectError_adv','messageError_adv'].forEach(id => { const e = document.getElementById(id); if(e) e.innerText = ''; }); }

            formAdv.addEventListener('submit', (e) => {
                e.preventDefault();
                clearErrorsAdv();
                let valid = true;
                const name = document.getElementById('fullname_adv').value.trim();
                const email = document.getElementById('email_adv').value.trim();
                const service = document.getElementById('service_adv').value;
                const account = document.getElementById('account_adv').value;
                const subject = document.getElementById('subject_adv').value.trim();
                const message = document.getElementById('message_adv').value.trim();
                if(!name) { showErrorAdv('nameError_adv','Full name required'); valid=false; }
                const emailRegex = /^[^\s@]+@([^\s@.,]+\.)+[^\s@.,]{2,}$/;
                if(!email || !emailRegex.test(email)) { showErrorAdv('emailError_adv','Valid email required'); valid=false; }
                if(!service || service === '-- Select --') { showErrorAdv('serviceError_adv','Select service'); valid=false; }
                if(!account || account === '-- Select --') { showErrorAdv('accountError_adv','Select account type'); valid=false; }
                if(!subject) { showErrorAdv('subjectError_adv','Subject required'); valid=false; }
                if(!message) { showErrorAdv('messageError_adv','Message required'); valid=false; }

                if(valid) {
                    const original = submitBtnAdv.innerHTML;
                    submitBtnAdv.disabled = true;
                    submitBtnAdv.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Sending...';

                    const formData = new FormData();
                    formData.append('full_name', name);
                    formData.append('email', email);
                    formData.append('whatsapp', document.getElementById('whatsapp_adv').value.trim());
                    formData.append('service_required', service);
                    formData.append('account_type', account);
                    formData.append('order_id', document.getElementById('order_adv').value.trim());
                    formData.append('subject', subject);
                    formData.append('message', message);

                    fetch('submit_contact.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(res => res.json().then(data => ({ status: res.status, data })))
                    .then(({ status, data }) => {
                        if (data.success) {
                            statusAdv.innerHTML = '<div class="success-modern mt-3"><i class="fas fa-check-circle"></i> ' + data.message + '</div>';
                            formAdv.reset();
                        } else {
                            statusAdv.innerHTML = '<div class="alert alert-danger mt-3"><i class="fas fa-exclamation-circle"></i> ' + data.message + '</div>';
                        }
                        submitBtnAdv.disabled = false;
                        submitBtnAdv.innerHTML = original;
                        setTimeout(() => statusAdv.innerHTML = '', 8000);
                    })
                    .catch(err => {
                        statusAdv.innerHTML = '<div class="alert alert-danger mt-3"><i class="fas fa-exclamation-circle"></i> Network error. Please try again.</div>';
                        submitBtnAdv.disabled = false;
                        submitBtnAdv.innerHTML = original;
                        setTimeout(() => statusAdv.innerHTML = '', 5000);
                    });
                } else {
                    statusAdv.innerHTML = '<div class="alert alert-danger mt-3">Please fix errors above.</div>';
                    setTimeout(() => statusAdv.innerHTML = '', 4000);
                }
            });
        } catch(e) {
            // Final safety net — if anything above fails, log and inform the user
            var statusEl = document.getElementById('formStatusAdv');
            if (statusEl) statusEl.innerHTML = '<div class="alert alert-danger mt-3">Form could not be initialized. Please refresh the page.</div>';
        }
    })();

    // dynamic counter for hero
    let count = 2;
    setInterval(() => { count = count === 2 ? 1.2 : 2; document.getElementById('dynamicReply').innerText = count; }, 3000);
</script>
<?php
include 'footer.php';
?>
</body>
</html>