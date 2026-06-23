<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Premium Footer | Gmail Services</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts: Modern Typography -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- AOS Scroll Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../assets/css/responsive.css?v=1.0">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* body { */
            /* background: white; */
/* 
            background-color: #023b45;
            font-family: 'Inter', sans-serif;
            color: black;
        } */

        /* ========== ULTRA MODERN PREMIUM FOOTER ========== */
        .cyber-footer {
            position: relative;
            background: linear-gradient(180deg, #023b45 0%, #011a1f 100%);
            padding-top: 4rem;
            overflow: hidden;
            z-index: 1;
        }

        /* Animated Background Particles */
        .footer-particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }

        .particle-dot {
            position: absolute;
            background: radial-gradient(circle, #B7A08B, transparent);
            border-radius: 50%;
            opacity: 0.15;
            animation: floatParticle 12s infinite alternate;
        }

        @keyframes floatParticle {
            0% { transform: translateY(0) translateX(0) scale(1); opacity: 0.05; }
            100% { transform: translateY(-50px) translateX(30px) scale(1.5); opacity: 0.2; }
        }

        /* Animated Light Beam */
        .light-beam {
            position: absolute;
            top: 0;
            left: -50%;
            width: 200%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent, 
                rgba(183, 160, 139, 0.05), 
                transparent);
            transform: skewX(-20deg);
            animation: beamMove 8s linear infinite;
            pointer-events: none;
        }

        @keyframes beamMove {
            0% { transform: skewX(-20deg) translateX(-100%); }
            100% { transform: skewX(-20deg) translateX(100%); }
        }

        /* Footer Container */
        .footer-container {
            position: relative;
            z-index: 5;
        }

        /* Glassmorphism Cards in Footer */
        .glass-footer-card {
            background: rgba(254, 250, 247, 0.03);
            backdrop-filter: blur(12px);
            border-radius: 24px;
            padding: 1.5rem;
            border: 1px solid rgba(183, 160, 139, 0.2);
            transition: all 0.4s ease;
            height: 100%;
        }

        .glass-footer-card:hover {
            border-color: #B7A08B;
            transform: translateY(-5px);
            box-shadow: 0 20px 35px -12px rgba(0,0,0,0.3);
        }

        /* Logo Section */
        .footer-logo {
            font-size: 1.8rem;
            font-weight: 800;
            background: linear-gradient(135deg, #FEFAF7 0%, #B7A08B 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 1rem;
            font-family: 'Space Grotesk', sans-serif;
        }

        .footer-logo i {
            background: none;
            -webkit-background-clip: unset;
            background-clip: unset;
            color: #B7A08B;
            margin-right: 5px;
        }

        .footer-desc {
            font-size: 0.85rem;
            color: rgba(254, 250, 247, 0.7);
            line-height: 1.6;
            margin-bottom: 1.2rem;
        }

        /* Social Icons - Modern Glass */
        .social-icons {
            display: flex;
            gap: 0.8rem;
            flex-wrap: wrap;
        }

        .social-icon {
            width: 38px;
            height: 38px;
            background: rgba(183, 160, 139, 0.12);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #B7A08B;
            font-size: 1rem;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(183, 160, 139, 0.2);
            text-decoration: none;
        }

        .social-icon:hover {
            background: #B7A08B;
            color: #023b45;
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 0 20px rgba(183, 160, 139, 0.6);
            border-color: transparent;
        }

        /* Footer Headings */
        .footer-heading {
            font-size: 1.1rem;
            font-weight: 700;
            color: #FEFAF7;
            margin-bottom: 1.2rem;
            letter-spacing: -0.3px;
            position: relative;
            display: inline-block;
        }

        .footer-heading::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            width: 35px;
            height: 2px;
            background: linear-gradient(90deg, #B7A08B, transparent);
            border-radius: 2px;
        }

        /* Modern Link Lists */
        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 0.7rem;
        }

        .footer-links a {
            color: rgba(254, 250, 247, 0.7);
            text-decoration: none;
            font-size: 0.85rem;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .footer-links a i {
            font-size: 0.7rem;
            color: #B7A08B;
            opacity: 0;
            transform: translateX(-5px);
            transition: all 0.3s;
        }

        .footer-links a:hover {
            color: #B7A08B;
            transform: translateX(8px);
        }

        .footer-links a:hover i {
            opacity: 1;
            transform: translateX(0);
        }

        /* Contact Info Items */
        .contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 1rem;
            padding: 0.5rem 0;
            transition: all 0.3s;
        }

        .contact-item:hover {
            transform: translateX(5px);
        }

        .contact-icon {
            width: 35px;
            height: 35px;
            background: rgba(183, 160, 139, 0.12);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #B7A08B;
            font-size: 0.9rem;
        }

        .contact-text {
            flex: 1;
        }

        .contact-text strong {
            color: #FEFAF7;
            font-size: 0.85rem;
            display: block;
        }

        .contact-text span {
            color: rgba(254, 250, 247, 0.6);
            font-size: 0.75rem;
        }

        /* Newsletter Input - Glass Design */
        .newsletter-group {
            position: relative;
            margin-bottom: 1rem;
        }

        .newsletter-input {
            width: 100%;
            background: rgba(254, 250, 247, 0.05);
            border: 1px solid rgba(183, 160, 139, 0.3);
            border-radius: 60px;
            padding: 12px 20px;
            color: #FEFAF7;
            font-size: 0.85rem;
            transition: all 0.3s;
            outline: none;
        }

        .newsletter-input:focus {
            border-color: #B7A08B;
            box-shadow: 0 0 20px rgba(183, 160, 139, 0.3);
            background: rgba(254, 250, 247, 0.08);
        }

        .newsletter-input::placeholder {
            color: rgba(254, 250, 247, 0.4);
        }

        .btn-subscribe {
            width: 100%;
            background: linear-gradient(135deg, #B7A08B, #8B7355);
            border: none;
            border-radius: 60px;
            padding: 12px;
            color: #023b45;
            font-weight: 700;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .btn-subscribe:hover {
            transform: scale(1.02);
            box-shadow: 0 0 25px rgba(183, 160, 139, 0.6);
        }

        /* Ripple Effect */
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.6);
            transform: scale(0);
            animation: rippleAnim 0.6s linear;
            pointer-events: none;
        }

        @keyframes rippleAnim {
            to { transform: scale(4); opacity: 0; }
        }

        /* Divider */
        .footer-divider {
            border-top: 1px solid rgba(183, 160, 139, 0.15);
            margin: 2rem 0 1rem;
        }

        /* Bottom Bar */
        .bottom-bar {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 1.2rem 0;
            gap: 1rem;
        }

        .copyright {
            font-size: 0.75rem;
            color: rgba(254, 250, 247, 0.5);
        }

        .footer-legal {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .footer-legal a {
            color: rgba(254, 250, 247, 0.5);
            text-decoration: none;
            font-size: 0.75rem;
            transition: color 0.3s;
        }

        .footer-legal a:hover {
            color: #B7A08B;
        }

        .designer-text {
            font-size: 0.7rem;
            color: rgba(183, 160, 139, 0.6);
        }

        /* Neon Divider Line */
        .neon-divider {
            height: 2px;
            background: linear-gradient(90deg, transparent, #B7A08B, #B7A08B, transparent);
            width: 100%;
            margin: 1rem 0;
            animation: neonPulse 2s infinite;
        }

        @keyframes neonPulse {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 0.8; }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .cyber-footer { padding-top: 2.5rem; }
            .glass-footer-card { margin-bottom: 1rem; }
            .bottom-bar { flex-direction: column; text-align: center; }
            .footer-legal { justify-content: center; }
        }

        @media (min-width: 1400px) {
            .container { max-width: 1280px; }
        }
    </style>
</head>
<body>
    <!-- Ultra Modern Premium Footer Section -->
    <footer class="cyber-footer">
        <!-- Animated Particles Background -->
        <div class="footer-particles" id="particlesContainer"></div>
        <div class="light-beam"></div>

        <div class="footer-container container">
            <!-- Main Footer Content -->
            <div class="row g-4" data-aos="fade-up" data-aos-duration="800">
                <!-- Brand / About Section -->
                <div class="col-lg-4 col-md-6">
                    <div class="glass-footer-card">
                        <div class="footer-logo">
                            <i class="fas fa-envelope-open-text"></i> Gmail<span style="color: #B7A08B;">Hub</span>
                        </div>
                        <p class="footer-desc">
                            Premium Gmail account provider trusted by 5000+ businesses worldwide. 
                            Secure, verified, and instantly delivered accounts with lifetime support.
                        </p>
                        <div class="social-icons">
  <a href="https://mail.google.com/mail/?view=cm&fs=1&to=pvafast947@gmail.com" class="social-icon" target="_blank">
    <i class="fa-solid fa-envelope"></i>
</a>
                            <a href="https://t.me/pvafast947" class="social-icon" target="_blank" aria-label="Telegram">
    <i class="fab fa-telegram"></i>
</a>

<a href="https://wa.me/923141001807" class="social-icon" target="_blank" aria-label="WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>
                            
                            
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6">
                    <div class="glass-footer-card">
                        <h3 class="footer-heading">Quick Links</h3>
                        <ul class="footer-links">
                            <li><a href="index.php"><i class="fas fa-chevron-right"></i> Home</a></li>
                            <li><a href="about.php"><i class="fas fa-chevron-right"></i> About Us</a></li>
                            <li><a href="services.php"><i class="fas fa-chevron-right"></i> Services</a></li>
                            <li><a href="complain.php"><i class="fas fa-chevron-right"></i> Complain</a></li>
                            <li><a href="contact.php"><i class="fas fa-chevron-right"></i> Contact</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Services Links -->
                <div class="col-lg-3 col-md-6">
                    <div class="glass-footer-card">
                        <h3 class="footer-heading">Our Services</h3>
                        <ul class="footer-links">
                            <li><a href="#"><i class="fas fa-check-circle"></i> Verified Gmail Accounts</a></li>
                            <li><a href="#"><i class="fas fa-calendar-alt"></i> Aged Gmail Accounts</a></li>
                            <li><a href="#"><i class="fas fa-layer-group"></i> Bulk Gmail Accounts</a></li>
                            <li><a href="#"><i class="fas fa-shield-alt"></i> Secure Accounts</a></li>
                            <li><a href="#"><i class="fas fa-bolt"></i> Instant Delivery</a></li>
                            <li><a href="#"><i class="fas fa-headset"></i> 24/7 Support</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Contact & Newsletter -->
 <div class="col-lg-3 col-md-6">
    <div class="glass-footer-card">
        <h3 class="footer-heading">Get In Touch</h3>

        <div class="contact-item">
            <div class="contact-icon"><i class="fas fa-envelope"></i></div>
            <div class="contact-text">
                <strong>Email Us</strong>
                <span>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=pvafast947@gmail.com" class="text-white nexum" target="_blank">
                        pvafast947@gmail.com
                    </a>
                </span>
            </div>
        </div>

        <div class="contact-item">
            <div class="contact-icon"><i class="fab fa-whatsapp"></i></div>
            <div class="contact-text">
                <strong>WhatsApp</strong>
                <span>
                    <a href="https://wa.me/923141001807" class="text-white nexum" target="_blank">
                        +92 314 1001807
                    </a>
                </span>
            </div>
        </div>

        <div class="contact-item">
            <div class="contact-icon"><i class="fab fa-telegram"></i></div>
            <div class="contact-text">
                <strong>Telegram</strong>
                <span>
                    <a href="https://t.me/pvafast947" class="text-white nexum" target="_blank">
                        @pvafast947
                    </a>
                </span>
            </div>
        </div>

        <div class="contact-item">
            <div class="contact-icon"><i class="fas fa-clock"></i></div>
            <div class="contact-text">
                <strong>Support Timing</strong>
                <span>24/7 Live Support</span>
            </div>
        </div>
    </div>
</div>
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="glass-footer-card">
                        <h3 class="footer-heading">Get In Touch</h3>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                            <div class="contact-text">
                                <strong>Email Us</strong>
                                <span>support@gmailhub.com</span>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fab fa-whatsapp"></i></div>
                            <div class="contact-text">
                                <strong>WhatsApp</strong>
                                <span>+1 (555) 123-4567</span>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fab fa-telegram"></i></div>
                            <div class="contact-text">
                                <strong>Telegram</strong>
                                <span>@gmailhub_support</span>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-clock"></i></div>
                            <div class="contact-text">
                                <strong>Support Timing</strong>
                                <span>24/7 Live Support</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Newsletter Section Row -->
            <div class="row mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="col-12">
                    <div class="glass-footer-card" style="padding: 1.5rem;">
                        <div class="row align-items-center g-3">
                            <div class="col-md-6">
                                <h3 class="footer-heading" style="margin-bottom: 0;">Subscribe to Newsletter</h3>
                                <p class="text-sm text-[#FEFAF7] opacity-60 mb-0 mt-1">Get latest updates & exclusive offers</p>
                            </div>
                            <div class="col-md-6">
                                <div class="newsletter-group">
                                    <input type="email" class="newsletter-input" placeholder="Enter your email address" id="newsletterEmail">
                                </div>
                                <button class="btn-subscribe" id="subscribeBtn">
                                    Subscribe Now <i class="fas fa-paper-plane ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Neon Divider -->
            <div class="neon-divider"></div>

            <!-- Bottom Bar -->
            <div class="bottom-bar">
                <div class="copyright">
                    © 2024 GmailHub | Premium Gmail Accounts. All rights reserved.
                </div>
                <div class="footer-legal">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Cookie Policy</a>
                </div>
                <div class="designer-text">
                    <i class="fas fa-code"></i> Designed with premium experience
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // ==============================================
        // ULTRA MODERN PREMIUM FOOTER - JAVASCRIPT
        // Interactive effects & animations
        // ==============================================
        
        (function() {
            // Initialize AOS
            AOS.init({
                duration: 800,
                once: true,
                offset: 30,
                easing: 'ease-out-cubic'
            });

            // ========== 1. ANIMATED PARTICLES SYSTEM ==========
            const particlesContainer = document.getElementById('particlesContainer');
            if(particlesContainer) {
                const particleCount = 25;
                for(let i = 0; i < particleCount; i++) {
                    const particle = document.createElement('div');
                    particle.classList.add('particle-dot');
                    const size = Math.random() * 4 + 2;
                    particle.style.width = `${size}px`;
                    particle.style.height = `${size}px`;
                    particle.style.left = `${Math.random() * 100}%`;
                    particle.style.top = `${Math.random() * 100}%`;
                    particle.style.animationDuration = `${Math.random() * 10 + 8}s`;
                    particle.style.animationDelay = `${Math.random() * 5}s`;
                    particlesContainer.appendChild(particle);
                }
            }

            // ========== 2. NEWSLETTER SUBSCRIBE WITH RIPPLE & TOAST ==========
            const subscribeBtn = document.getElementById('subscribeBtn');
            const emailInput = document.getElementById('newsletterEmail');
            
            function createRipple(event, element) {
                const ripple = document.createElement('span');
                ripple.classList.add('ripple');
                const rect = element.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = event.clientX - rect.left - size / 2;
                const y = event.clientY - rect.top - size / 2;
                ripple.style.width = ripple.style.height = `${size}px`;
                ripple.style.left = `${x}px`;
                ripple.style.top = `${y}px`;
                element.style.position = 'relative';
                element.style.overflow = 'hidden';
                element.appendChild(ripple);
                setTimeout(() => ripple.remove(), 600);
            }
            
            function showToast(message, isSuccess = true) {
                const toast = document.createElement('div');
                toast.style.cssText = `
                    position: fixed;
                    bottom: 30px;
                    right: 30px;
                    background: rgba(0,0,0,0.9);
                    backdrop-filter: blur(16px);
                    border: 1px solid ${isSuccess ? '#B7A08B' : '#ff4444'};
                    border-radius: 16px;
                    padding: 12px 24px;
                    color: #FEFAF7;
                    font-size: 0.85rem;
                    font-family: 'Inter', sans-serif;
                    z-index: 10000;
                    animation: slideInRight 0.4s ease;
                    box-shadow: 0 10px 25px rgba(0,0,0,0.3);
                    display: flex;
                    align-items: center;
                    gap: 10px;
                `;
                toast.innerHTML = `<i class="fas ${isSuccess ? 'fa-check-circle' : 'fa-exclamation-circle'}" style="color: ${isSuccess ? '#B7A08B' : '#ff4444'}"></i> ${message}`;
                document.body.appendChild(toast);
                
                setTimeout(() => {
                    toast.style.animation = 'fadeOutRight 0.4s ease';
                    setTimeout(() => toast.remove(), 400);
                }, 3000);
            }
            
            if(subscribeBtn) {
                subscribeBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    createRipple(e, this);
                    const email = emailInput ? emailInput.value.trim() : '';
                    
                    if(email === '' || !email.includes('@')) {
                        showToast('Please enter a valid email address', false);
                        emailInput.style.borderColor = '#ff4444';
                        setTimeout(() => {
                            emailInput.style.borderColor = 'rgba(183, 160, 139, 0.3)';
                        }, 2000);
                        return;
                    }
                    
                    // Simulate subscription success
                    showToast(`Thanks! ${email} subscribed successfully!`, true);
                    emailInput.value = '';
                    
                    // Add additional glow effect
                    subscribeBtn.style.transform = 'scale(0.98)';
                    setTimeout(() => {
                        subscribeBtn.style.transform = 'scale(1)';
                    }, 200);
                });
            }
            
            // Email input focus glow effect
            if(emailInput) {
                emailInput.addEventListener('focus', () => {
                    emailInput.parentElement.style.transform = 'scale(1.01)';
                });
                emailInput.addEventListener('blur', () => {
                    emailInput.parentElement.style.transform = 'scale(1)';
                });
            }

            // ========== 3. SOCIAL ICONS GLOW INTERACTION ==========
            const socialIcons = document.querySelectorAll('.social-icon');
            socialIcons.forEach(icon => {
                icon.addEventListener('mouseenter', (e) => {
                    icon.style.transform = 'translateY(-5px) scale(1.1)';
                });
                icon.addEventListener('mouseleave', () => {
                    icon.style.transform = 'translateY(0) scale(1)';
                });
            });

            // ========== 4. ANIMATED UNDERLINE EFFECT FOR LINKS ==========
            const allLinks = document.querySelectorAll('.footer-links a, .footer-legal a');
            allLinks.forEach(link => {
                link.addEventListener('mouseenter', function() {
                    this.style.gap = '10px';
                });
                link.addEventListener('mouseleave', function() {
                    this.style.gap = '6px';
                });
            });

            // ========== 5. CONTACT ITEMS HOVER EFFECT ==========
            const contactItems = document.querySelectorAll('.contact-item');
            contactItems.forEach(item => {
                item.addEventListener('mouseenter', () => {
                    const icon = item.querySelector('.contact-icon');
                    if(icon) {
                        icon.style.background = '#B7A08B';
                        icon.style.color = '#023b45';
                        icon.style.transform = 'scale(1.05)';
                    }
                });
                item.addEventListener('mouseleave', () => {
                    const icon = item.querySelector('.contact-icon');
                    if(icon) {
                        icon.style.background = 'rgba(183, 160, 139, 0.12)';
                        icon.style.color = '#B7A08B';
                        icon.style.transform = 'scale(1)';
                    }
                });
            });

            // ========== 6. GLASS CARD HOVER ANIMATION ==========
            const glassCards = document.querySelectorAll('.glass-footer-card');
            glassCards.forEach(card => {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    card.style.setProperty('--mouse-x', `${x}px`);
                    card.style.setProperty('--mouse-y', `${y}px`);
                });
            });

            // ========== 7. ADD FLOATING ANIMATION STYLE ==========
            const styleSheet = document.createElement('style');
            styleSheet.textContent = `
                @keyframes slideInRight {
                    from { transform: translateX(100px); opacity: 0; }
                    to { transform: translateX(0); opacity: 1; }
                }
                @keyframes fadeOutRight {
                    from { transform: translateX(0); opacity: 1; }
                    to { transform: translateX(100px); opacity: 0; }
                }
                .glass-footer-card {
                    transition: transform 0.3s ease, border-color 0.3s, box-shadow 0.3s;
                }
                .glass-footer-card:hover {
                    transform: translateY(-5px);
                }
                .footer-links a {
                    transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                }
                .btn-subscribe {
                    position: relative;
                    overflow: hidden;
                }
                .newsletter-input {
                    transition: all 0.3s;
                }
            `;
            document.head.appendChild(styleSheet);

            // ========== 8. SCROLL REVEAL FOR FOOTER ELEMENTS ==========
            const footerElements = document.querySelectorAll('.glass-footer-card, .neon-divider, .bottom-bar');
            const scrollObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if(entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                        scrollObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            
            footerElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                scrollObserver.observe(el);
            });
            
            // Force reveal after small delay
            setTimeout(() => {
                footerElements.forEach(el => {
                    if(el.style.opacity === '0') {
                        el.style.opacity = '1';
                        el.style.transform = 'translateY(0)';
                    }
                });
            }, 300);
        })();
    </script>

    <!-- Global WhatsApp Floating Button -->
    <style>
    .whatsapp-float {
        position: fixed; bottom: 28px; right: 28px;
        background: #25D366; width: 56px; height: 56px;
        border-radius: 60px; display: flex;
        align-items: center; justify-content: center;
        font-size: 2rem; color: white;
        box-shadow: 0 8px 22px rgba(0,0,0,0.3);
        transition: 0.2s; z-index: 1030;
        text-decoration: none !important;
    }
    .whatsapp-float:hover { transform: scale(1.08); background: #20b859; color: white; }
    @media (max-width: 480px) {
        .whatsapp-float { width: 48px; height: 48px; font-size: 1.6rem; bottom: 20px; right: 20px; }
    }
    </style>
    <a href="https://wa.me/923141001807?text=Hello!%20I%20need%20assistance" target="_blank" class="whatsapp-float" rel="noopener" aria-label="Chat on WhatsApp"><i class="fab fa-whatsapp"></i></a>
</body>
</html>