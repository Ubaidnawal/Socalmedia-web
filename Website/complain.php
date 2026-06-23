<?php
session_start();
$errors = $_SESSION['complaint_errors'] ?? [];
$old = $_SESSION['complaint_data'] ?? [];
unset($_SESSION['complaint_errors'], $_SESSION['complaint_data']);

// Countries list for dropdown (same as before)
$countries = [
    'Afghanistan', 'Albania', 'Algeria', 'Andorra', 'Angola', 'Antigua and Barbuda',
    'Argentina', 'Armenia', 'Australia', 'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain',
    'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bhutan',
    'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Brazil', 'Brunei', 'Bulgaria',
    'Burkina Faso', 'Burundi', 'Cabo Verde', 'Cambodia', 'Cameroon', 'Canada',
    'Central African Republic', 'Chad', 'Chile', 'China', 'Colombia', 'Comoros',
    'Congo (DRC)', 'Congo (Republic)', 'Costa Rica', 'Croatia', 'Cuba', 'Cyprus',
    'Czechia', 'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic', 'Ecuador',
    'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Eswatini',
    'Ethiopia', 'Fiji', 'Finland', 'France', 'Gabon', 'Gambia', 'Georgia', 'Germany',
    'Ghana', 'Greece', 'Grenada', 'Guatemala', 'Guinea', 'Guinea-Bissau', 'Guyana',
    'Haiti', 'Honduras', 'Hungary', 'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq',
    'Ireland', 'Israel', 'Italy', 'Jamaica', 'Japan', 'Jordan', 'Kazakhstan', 'Kenya',
    'Kiribati', 'Kuwait', 'Kyrgyzstan', 'Laos', 'Latvia', 'Lebanon', 'Lesotho',
    'Liberia', 'Libya', 'Liechtenstein', 'Lithuania', 'Luxembourg', 'Madagascar',
    'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands',
    'Mauritania', 'Mauritius', 'Mexico', 'Micronesia', 'Moldova', 'Monaco',
    'Mongolia', 'Montenegro', 'Morocco', 'Mozambique', 'Myanmar', 'Namibia',
    'Nauru', 'Nepal', 'Netherlands', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria',
    'North Korea', 'North Macedonia', 'Norway', 'Oman', 'Pakistan', 'Palau',
    'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Poland',
    'Portugal', 'Qatar', 'Romania', 'Russia', 'Rwanda', 'Saint Kitts and Nevis',
    'Saint Lucia', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino',
    'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles',
    'Sierra Leone', 'Singapore', 'Slovakia', 'Slovenia', 'Solomon Islands',
    'Somalia', 'South Africa', 'South Korea', 'South Sudan', 'Spain', 'Sri Lanka',
    'Sudan', 'Suriname', 'Sweden', 'Switzerland', 'Syria', 'Tajikistan', 'Tanzania',
    'Thailand', 'Timor-Leste', 'Togo', 'Tonga', 'Trinidad and Tobago', 'Tunisia',
    'Turkey', 'Turkmenistan', 'Tuvalu', 'Uganda', 'Ukraine', 'United Arab Emirates',
    'United Kingdom', 'United States', 'Uruguay', 'Uzbekistan', 'Vanuatu',
    'Vatican City', 'Venezuela', 'Vietnam', 'Yemen', 'Zambia', 'Zimbabwe'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Easy Complaint & Replacement | PVA Accounts</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* (Your existing CSS – keep as it is) */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html, body {
            overflow-x: hidden !important;
            width: 100%;
            position: relative;
        }
        body {
            font-family: 'Inter', sans-serif;
            background: #FEFAF7;
            color: #1f2a3e;
            line-height: 1.5;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        :root {
            --primary: #023b45;
            --secondary: #B7A08B;
            --light-bg: #ffffff;
            --shadow: 0 8px 20px rgba(0,0,0,0.05);
            --shadow-hover: 0 12px 28px rgba(0,0,0,0.1);
        }
        section {
            padding: 60px 0;
        }
        .section-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-align: center;
            color: var(--primary);
        }
        .section-sub {
            text-align: center;
            color: #4a5b74;
            margin-bottom: 40px;
        }
        .card {
            background: var(--light-bg);
            border-radius: 28px;
            padding: 28px;
            box-shadow: var(--shadow);
            transition: 0.2s;
        }
        .card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-hover);
        }
        .btn-primary {
            background: var(--primary);
            color: white;
            border: none;
            padding: 12px 28px;
            border-radius: 40px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: 0.2s;
        }
        .btn-primary:hover {
            background: #024c58;
            transform: scale(1.02);
        }
        .btn-outline {
            background: transparent;
            border: 2px solid var(--secondary);
            color: var(--primary);
            padding: 10px 24px;
            border-radius: 40px;
            font-weight: 500;
            cursor: pointer;
        }
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        .full-width {
            grid-column: span 2;
        }
        .input-field {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }
        .input-field label {
            font-weight: 600;
            color: var(--primary);
        }
        .input-field input, .input-field select, .input-field textarea {
            padding: 12px 16px;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            font-family: inherit;
            transition: 0.2s;
            background: white;
            width: 100%;
        }
        .input-field input:focus, .input-field select:focus, .input-field textarea:focus {
            outline: none;
            border-color: var(--secondary);
            box-shadow: 0 0 0 3px rgba(183,160,139,0.2);
        }
        .error-msg {
            color: #e53e3e;
            font-size: 0.75rem;
            margin-top: 4px;
        }
        .radio-group {
            display: flex;
            gap: 20px;
            align-items: center;
        }
        .file-hint {
            font-size: 0.75rem;
            color: #6c757d;
        }
        .timeline {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 30px;
            gap: 10px;
        }
        .timeline-step {
            flex: 1;
            text-align: center;
            min-width: 70px;
        }
        .step-icon {
            width: 48px;
            height: 48px;
            background: #e9ecef;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 8px;
            color: #6c757d;
        }
        .step-icon.active {
            background: var(--primary);
            color: white;
        }
        .step-label {
            font-size: 0.75rem;
            font-weight: 500;
        }
        .policy-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
            margin-top: 20px;
        }
        .policy-card {
            text-align: center;
        }
        .policy-card i {
            font-size: 2.2rem;
            color: var(--secondary);
            margin-bottom: 12px;
        }
        .faq-item {
            background: white;
            border-radius: 20px;
            margin-bottom: 12px;
            padding: 0 20px;
            cursor: pointer;
        }
        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 0;
            font-weight: 600;
        }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: 0.3s;
            color: #4a5b74;
            padding-bottom: 0;
        }
        .faq-item.open .faq-answer {
            max-height: 200px;
            padding-bottom: 20px;
        }
        .support-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 24px;
        }
        .support-card {
            text-align: center;
            background: white;
            border-radius: 24px;
            padding: 24px 16px;
        }
        .support-card i {
            font-size: 2rem;
            color: var(--secondary);
        }
        .toast-popup {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: white;
            padding: 12px 24px;
            border-radius: 50px;
            box-shadow: var(--shadow-hover);
            display: flex;
            align-items: center;
            gap: 10px;
            z-index: 1000;
            animation: slide 0.3s ease;
            max-width: calc(100% - 40px);
        }
        @keyframes slide {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        /* Responsive */
        @media (max-width: 767px) {
            .container { padding: 0 16px; }
            section { padding: 40px 0; }
            .section-title { font-size: 1.6rem; }
            .hero-heading { font-size: 1.8rem !important; }
            h1[style*="font-size: 2.8rem"] { font-size: 1.8rem !important; }
            .hero-description { font-size: 0.95rem; padding: 0 10px; }
            .form-grid { grid-template-columns: 1fr; gap: 16px; }
            .full-width { grid-column: span 1; }
            .card { padding: 20px; }
            .timeline-step { min-width: 60px; }
            .step-label { font-size: 0.65rem; }
            .step-icon { width: 40px; height: 40px; font-size: 0.9rem; }
            .policy-grid { grid-template-columns: 1fr; }
            .support-grid { grid-template-columns: 1fr; }
            .how-steps { flex-direction: column; align-items: center; gap: 20px; }
            .how-step { max-width: 100%; }
            .faq-question { font-size: 0.9rem; padding: 14px 0; }
            .btn-primary, .btn-outline { padding: 10px 20px; font-size: 0.9rem; }
            .track-input-group { flex-direction: column; gap: 12px; }
            #trackOrderId { width: 100%; min-width: auto; }
        }
        @media (min-width: 768px) and (max-width: 1024px) {
            .container { padding: 0 24px; }
            .section-title { font-size: 1.9rem; }
            .form-grid { gap: 20px; }
            .policy-grid { grid-template-columns: repeat(2, 1fr); }
            .support-grid { grid-template-columns: repeat(2, 1fr); }
            .timeline-step { min-width: 70px; }
        }
        @media (min-width: 1441px) {
            .container { max-width: 1400px; }
        }
        /* Alert messages */
        .alert {
            padding: 15px 20px;
            border-radius: 12px;
            margin-bottom: 20px;
        }
        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .alert-danger {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .alert ul {
            margin: 0;
            padding-left: 20px;
        }
    </style>
</head>
<body>

<!-- Include Header -->
<?php include 'header.php'; ?>

<!-- Hero section -->
<section style="padding-bottom: 0;">
    <div class="container" style="text-align: center;">
        <em><h1 class="hero-heading" style="font-size: 2.8rem; font-weight: 800; color: var(--primary);">Complaint & <span style="color: var(--secondary);">Replacement Center</span></h1></em>
        <p class="hero-description" style="font-size: 1.1rem; max-width: 650px; margin: 16px auto;">Wrong account? Login issue? We're here to help. Submit your request and our team will solve it within 24 hours.</p>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 16px; margin-top: 24px;">
            <span style="background: white; padding: 6px 18px; border-radius: 40px; box-shadow: var(--shadow);"><i class="fas fa-clock" style="color: var(--secondary);"></i> 24h Replacement</span>
            <span style="background: white; padding: 6px 18px; border-radius: 40px; box-shadow: var(--shadow);"><i class="fas fa-bolt" style="color: var(--secondary);"></i> Fast Response</span>
            <span style="background: white; padding: 6px 18px; border-radius: 40px; box-shadow: var(--shadow);"><i class="fas fa-lock" style="color: var(--secondary);"></i> Secure Process</span>
        </div>
    </div>
</section>

<!-- ==== COMPLAINT FORM (FIXED WITH PHP) ==== -->
<section>
    <div class="container">
        <h2 class="section-title">Submit Your Complaint</h2>
        <div class="card" style="max-width: 900px; margin: 0 auto;">

            <!-- Show success or error messages from PHP -->
            <?php if (isset($_GET['success'])): ?>
                <div class="alert alert-success">✅ Your complaint has been submitted successfully! We will contact you soon.</div>
            <?php endif; ?>
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($errors as $e): ?>
                            <li><?= htmlspecialchars($e) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <!-- FORM WITH PHP ACTION -->
            <form method="POST" action="submit_complaint.php" enctype="multipart/form-data" id="complaintForm">
                <div class="form-grid">

                    <!-- Full Name -->
                    <div class="input-field">
                        <label>Full Name *</label>
                        <input type="text" id="fullName" name="fullName" placeholder="e.g., John Smith" value="<?= htmlspecialchars($old['fullName'] ?? '') ?>">
                        <div class="error-msg" id="nameError"></div>
                    </div>

                    <!-- Email -->
                    <div class="input-field">
                        <label>Email *</label>
                        <input type="email" id="email" name="email" placeholder="you@example.com" value="<?= htmlspecialchars($old['email'] ?? '') ?>">
                        <div class="error-msg" id="emailError"></div>
                    </div>

                    <!-- Country (Dynamic) -->
                    <div class="input-field">
                        <label>Country *</label>
                        <select id="country" name="country">
                            <option value="">-- Select Country --</option>
                            <?php foreach ($countries as $c): ?>
                                <option value="<?= $c ?>" <?= ($old['country'] ?? '') == $c ? 'selected' : '' ?>><?= $c ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="error-msg" id="countryError"></div>
                    </div>

                    <!-- WhatsApp -->
                    <div class="input-field">
                        <label>WhatsApp (with country code) *</label>
                        <input type="tel" id="whatsapp" name="whatsapp" placeholder="+92 300 1234567" value="<?= htmlspecialchars($old['whatsapp'] ?? '') ?>">
                        <div class="error-msg" id="whatsappError"></div>
                    </div>

                    <!-- Order ID -->
                    <div class="input-field">
                        <label>Order ID *</label>
                        <input type="text" id="orderId" name="orderId" placeholder="ORD-123456" value="<?= htmlspecialchars($old['orderId'] ?? '') ?>">
                        <div class="error-msg" id="orderIdError"></div>
                    </div>

                    <!-- Account Type -->
                    <div class="input-field">
                        <label>Account Type *</label>
                        <select id="accountType" name="accountType">
                            <option value="">-- Select --</option>
                            <?php
                            $accountTypes = ['Gmail PVA', 'Facebook PVA', 'Instagram PVA', 'Twitter/X PVA', 'Other'];
                            foreach ($accountTypes as $at): ?>
                                <option value="<?= $at ?>" <?= ($old['accountType'] ?? '') == $at ? 'selected' : '' ?>><?= $at ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="error-msg" id="accountError"></div>
                    </div>

                    <!-- Complaint Type -->
                    <div class="input-field">
                        <label>Complaint Type *</label>
                        <select id="complaintType" name="complaintType">
                            <option value="">-- Select --</option>
                            <?php
                            $complaintTypes = ['Wrong Account Delivered', 'Invalid Login / Password', 'Account Disabled', 'Delivery Issue', 'Replacement Request', 'Other'];
                            foreach ($complaintTypes as $ct): ?>
                                <option value="<?= $ct ?>" <?= ($old['complaintType'] ?? '') == $ct ? 'selected' : '' ?>><?= $ct ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="error-msg" id="typeError"></div>
                    </div>

                    <!-- Description -->
                    <div class="full-width input-field">
                        <label>Describe your issue *</label>
                        <textarea rows="4" id="description" name="description" placeholder="Tell us exactly what happened..."><?= htmlspecialchars($old['description'] ?? '') ?></textarea>
                        <div class="error-msg" id="descError"></div>
                    </div>

                    <!-- Replacement Required -->
                    <div class="input-field">
                        <label>Replacement required?</label>
                        <div class="radio-group">
                            <label><input type="radio" name="replacement" value="Yes" <?= ($old['replacement'] ?? '') == 'Yes' ? 'checked' : '' ?>> Yes</label>
                            <label><input type="radio" name="replacement" value="No" <?= ($old['replacement'] ?? 'No') == 'No' ? 'checked' : '' ?>> No</label>
                        </div>
                    </div>

                    <!-- Upload Evidence -->
                    <div class="input-field">
                        <label>Upload evidence (optional)</label>
                        <input type="file" id="evidence" name="evidence" accept="image/*,application/pdf,.zip">
                        <div class="file-hint">Screenshots or PDF (max 5MB)</div>
                        <div id="fileError" class="error-msg"></div>
                    </div>

                    <!-- Agree Checkbox -->
                    <div class="full-width input-field">
                        <label>
                            <input type="checkbox" id="agree" name="agree" <?= isset($old['agree']) ? 'checked' : '' ?>> I confirm the information is correct. *
                        </label>
                        <div class="error-msg" id="agreeError"></div>
                    </div>

                </div>

                <div style="text-align: center; margin-top: 28px;">
                    <button type="submit" id="submitBtn" class="btn-primary"><i class="fas fa-paper-plane"></i> Submit Complaint</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Complaint Status Tracker (user friendly) -->
<section style="background: #fefaf7;">
    <div class="container">
        <h2 class="section-title">Track Your Complaint</h2>
        <div class="card" style="max-width: 700px; margin: 0 auto; text-align: center;">
            <div class="track-input-group" style="display: flex; gap: 12px; flex-wrap: wrap; justify-content: center;">
                <input type="text" id="trackOrderId" placeholder="Enter Order ID (e.g., ORD-123456)" style="flex: 2; min-width: 200px; padding: 12px 16px; border-radius: 60px; border: 1px solid #ddd;">
                <button id="trackBtn" class="btn-primary"><i class="fas fa-search"></i> Track</button>
            </div>
            <div id="trackResult" style="margin-top: 32px;">
                <div class="timeline" id="timeline">
                    <div class="timeline-step"><div class="step-icon" id="step1"><i class="fas fa-file-alt"></i></div><div class="step-label">Submitted</div></div>
                    <div class="timeline-step"><div class="step-icon" id="step2"><i class="fas fa-eye"></i></div><div class="step-label">Under Review</div></div>
                    <div class="timeline-step"><div class="step-icon" id="step3"><i class="fas fa-check-circle"></i></div><div class="step-label">Approved</div></div>
                    <div class="timeline-step"><div class="step-icon" id="step4"><i class="fas fa-truck"></i></div><div class="step-label">Replaced</div></div>
                </div>
                <p id="trackMessage" class="mt-3 text-muted">Enter your Order ID to see real‑time status.</p>
            </div>
        </div>
    </div>
</section>

<!-- Replacement Policy Cards -->
<section>
    <div class="container">
        <h2 class="section-title">Replacement Policy</h2>
        <div class="policy-grid">
            <div class="card policy-card"><i class="fas fa-clock"></i><h4>24‑Hour Guarantee</h4><p>We replace any faulty account within 24h</p></div>
            <div class="card policy-card"><i class="fas fa-exchange-alt"></i><h4>Wrong Account</h4><p>Immediate replacement if wrong item sent</p></div>
            <div class="card policy-card"><i class="fas fa-unlock-alt"></i><h4>Invalid Login</h4><p>Full refund or replacement for login issues</p></div>
            <div class="card policy-card"><i class="fas fa-headset"></i><h4>Friendly Support</h4><p>Real humans, not bots</p></div>
        </div>
    </div>
</section>

<!-- How it works -->
<section style="background: #fefaf7;">
    <div class="container">
        <h2 class="section-title">How to Get a Replacement</h2>
        <div class="how-steps" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px;">
            <div class="how-step" style="text-align: center; max-width: 200px;"><div style="background: var(--primary); width: 50px; height: 50px; border-radius: 60px; display: flex; align-items: center; justify-content: center; color: white; margin: 0 auto 12px; font-weight: bold;">1</div><p><strong>Submit complaint</strong><br>Fill the form above</p></div>
            <div class="how-step" style="text-align: center; max-width: 200px;"><div style="background: var(--primary); width: 50px; height: 50px; border-radius: 60px; display: flex; align-items: center; justify-content: center; color: white; margin: 0 auto 12px; font-weight: bold;">2</div><p><strong>We verify</strong><br>Within 2 hours</p></div>
            <div class="how-step" style="text-align: center; max-width: 200px;"><div style="background: var(--primary); width: 50px; height: 50px; border-radius: 60px; display: flex; align-items: center; justify-content: center; color: white; margin: 0 auto 12px; font-weight: bold;">3</div><p><strong>Replacement sent</strong><br>New account delivered</p></div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section>
    <div class="container">
        <h2 class="section-title">Common Questions</h2>
        <div style="max-width: 800px; margin: 0 auto;">
            <div class="faq-item"><div class="faq-question">How long does it take to review my complaint? <i class="fas fa-chevron-down"></i></div><div class="faq-answer">We usually respond within 2 hours. Replacement is processed within 24 hours after approval.</div></div>
            <div class="faq-item"><div class="faq-question">What if I don't have an Order ID? <i class="fas fa-chevron-down"></i></div><div class="faq-answer">Please check your email or WhatsApp from us. If you still can't find it, contact live chat.</div></div>
            <div class="faq-item"><div class="faq-question">Do I need to upload evidence? <i class="fas fa-chevron-down"></i></div><div class="faq-answer">It's optional but highly recommended to help us resolve faster.</div></div>
            <div class="faq-item"><div class="faq-question">Can I track my complaint? <i class="fas fa-chevron-down"></i></div><div class="faq-answer">Yes! Use the "Track Your Complaint" section above with your Order ID.</div></div>
        </div>
    </div>
</section>

<!-- Support & CTA -->
<section style="background: #fefaf7;">
    <div class="container">
        <h2 class="section-title">Need Help? Talk to Us</h2>
        <div class="support-grid">
            <div class="support-card"><i class="fab fa-whatsapp"></i><h4>WhatsApp</h4><p>+92 314 1001807</p><small>Response within 5 min</small></div>
            <div class="support-card"><i class="fab fa-telegram"></i><h4>Telegram</h4><p>@PVA_Support</p><small>Live chat</small></div>
            <div class="support-card"><i class="fas fa-envelope"></i><h4>Email</h4><p>support@pvasite.com</p><small>24/7</small></div>
        </div>
        <div style="text-align: center; margin-top: 40px;">
            <button class="btn-outline" onclick="window.open('https://wa.me/923141001807','_blank')"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</button>
        </div>
    </div>
</section>

<!-- Include Footer -->
<?php include 'footer.php'; ?>

<!-- JavaScript (combined – fixes form validation and tracking) -->
<script>
    // ---------- Local storage for complaints (demo tracking) ----------
    let complaints = JSON.parse(localStorage.getItem('easy_complaints')) || [];

    // Helper toast
    function showToast(msg, isError = false) {
        const toast = document.createElement('div');
        toast.className = 'toast-popup';
        toast.style.background = isError ? '#fff5f5' : '#e6fffa';
        toast.style.borderLeft = `4px solid ${isError ? '#e53e3e' : '#38a169'}`;
        toast.innerHTML = `<i class="fas ${isError ? 'fa-exclamation-circle' : 'fa-check-circle'}"></i> ${msg}`;
        document.body.appendChild(toast);
        setTimeout(() => toast.remove(), 4000);
    }

    // Form submission – client-side validation (but form will still submit to PHP)
    const form = document.getElementById('complaintForm');
    const submitBtn = document.getElementById('submitBtn');

    form.addEventListener('submit', function(e) {
        // Let the form submit to PHP – we just validate client-side to give instant feedback
        let isValid = true;
        const name = document.getElementById('fullName').value.trim();
        const email = document.getElementById('email').value.trim();
        const whatsapp = document.getElementById('whatsapp').value.trim();
        const orderId = document.getElementById('orderId').value.trim();
        const accountType = document.getElementById('accountType').value;
        const complaintType = document.getElementById('complaintType').value;
        const description = document.getElementById('description').value.trim();
        const agree = document.getElementById('agree').checked;

        document.getElementById('nameError').innerText = '';
        document.getElementById('emailError').innerText = '';
        document.getElementById('whatsappError').innerText = '';
        document.getElementById('orderIdError').innerText = '';
        document.getElementById('accountError').innerText = '';
        document.getElementById('typeError').innerText = '';
        document.getElementById('descError').innerText = '';
        document.getElementById('agreeError').innerText = '';

        if (!name) { document.getElementById('nameError').innerText = 'Full name required'; isValid = false; }
        const emailRegex = /^[^\s@]+@([^\s@.,]+\.)+[^\s@.,]{2,}$/;
        if (!email || !emailRegex.test(email)) { document.getElementById('emailError').innerText = 'Valid email required'; isValid = false; }
        const phoneRegex = /^[\+0-9]{1,3}?[0-9\s\-]{7,15}$/;
        if (!whatsapp || !phoneRegex.test(whatsapp)) { document.getElementById('whatsappError').innerText = 'Valid WhatsApp number required'; isValid = false; }
        if (!orderId || !orderId.match(/^ORD-\d{4,}$/i)) { document.getElementById('orderIdError').innerText = 'Order ID must be ORD-123456 format'; isValid = false; }
        if (!accountType) { document.getElementById('accountError').innerText = 'Select account type'; isValid = false; }
        if (!complaintType) { document.getElementById('typeError').innerText = 'Select complaint type'; isValid = false; }
        if (!description) { document.getElementById('descError').innerText = 'Please describe your issue'; isValid = false; }
        if (!agree) { document.getElementById('agreeError').innerText = 'You must confirm the information'; isValid = false; }

        if (!isValid) {
            e.preventDefault(); // stop submission
            showToast('Please fix the errors above', true);
        }
        // else: form submits normally to PHP
    });

    // File type validation
    const evidenceInput = document.getElementById('evidence');
    evidenceInput.addEventListener('change', () => {
        const file = evidenceInput.files[0];
        if (file && !['image/jpeg','image/png','application/pdf','application/zip'].includes(file.type)) {
            document.getElementById('fileError').innerText = 'Only JPG, PNG, PDF, ZIP allowed';
            evidenceInput.value = '';
        } else {
            document.getElementById('fileError').innerText = '';
        }
    });

    // Tracking system (using localStorage for demo)
    const trackBtn = document.getElementById('trackBtn');
    const trackInput = document.getElementById('trackOrderId');
    const stepIcons = ['step1','step2','step3','step4'];
    function resetTimeline() { stepIcons.forEach(id => document.getElementById(id).classList.remove('active')); }
    function setStep(stepIndex) { for (let i=0; i<=stepIndex; i++) document.getElementById(stepIcons[i]).classList.add('active'); }

    trackBtn.addEventListener('click', () => {
        const query = trackInput.value.trim().toUpperCase();
        if (!query) { showToast('Enter your Order ID (e.g., ORD-123456)', true); return; }
        // First check in localStorage (for demo)
        let complaint = complaints.find(c => c.orderId.toUpperCase() === query);
        if (!complaint) {
            // If not found, you could fetch from server via AJAX, but for now we show not found.
            resetTimeline();
            document.getElementById('trackMessage').innerHTML = '❌ No complaint found with this Order ID. Please submit a complaint first.';
            document.getElementById('trackMessage').style.color = '#e53e3e';
            return;
        }
        const hoursSince = (new Date() - new Date(complaint.timestamp)) / (1000 * 3600);
        let step = 0;
        if (hoursSince < 1) step = 0;
        else if (hoursSince < 3) step = 1;
        else if (hoursSince < 8) step = 2;
        else step = 3;
        resetTimeline();
        setStep(step);
        const statusText = ['Submitted', 'Under Review', 'Approved', 'Replacement Sent'][step];
        document.getElementById('trackMessage').innerHTML = `✅ Order ${complaint.orderId}: ${statusText}. ${step === 3 ? 'New account details sent to your email.' : 'Our team is working on it.'}`;
        document.getElementById('trackMessage').style.color = '#023b45';
    });

    // FAQ accordion
    document.querySelectorAll('.faq-item').forEach(item => {
        const q = item.querySelector('.faq-question');
        q.addEventListener('click', () => {
            const isOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
            if (!isOpen) item.classList.add('open');
        });
    });
</script>
</body>
</html>