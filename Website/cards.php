```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>LuxeConnect | Premium Contact Hub</title>
  <!-- Bootstrap 5 + Font Awesome + Google Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/responsive.css?v=1.0">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: #023b45;
      color: #FEFAF7;
      overflow-x: hidden;
      position: relative;
    }

    /* animated background elements */
    .bg-shape {
      position: fixed;
      width: 40vw;
      height: 40vw;
      border-radius: 50%;
      background: rgba(183, 160, 139, 0.15);
      filter: blur(90px);
      z-index: 0;
      animation: floatShape 18s infinite alternate ease-in-out;
      pointer-events: none;
    }

    .shape1 { top: -10%; left: -10%; width: 60vw; height: 60vw; animation-duration: 22s; }
    .shape2 { bottom: -5%; right: -5%; width: 50vw; height: 50vw; background: rgba(183, 160, 139, 0.1); animation-duration: 19s; animation-delay: -2s; }
    .shape3 { top: 40%; left: 30%; width: 35vw; height: 35vw; background: rgba(2, 59, 69, 0.2); animation-duration: 25s; }

    @keyframes floatShape {
      0% { transform: translate(0, 0) scale(1); }
      100% { transform: translate(4%, 4%) scale(1.08); }
    }

    /* glassmorphism core */
    .glass-card {
      background: rgba(183, 160, 139, 0.12);
      backdrop-filter: blur(12px);
      border-radius: 2rem;
      border: 1px solid rgba(255, 245, 235, 0.25);
      transition: all 0.3s cubic-bezier(0.2, 0.9, 0.4, 1.1);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    }

    .glass-card:hover {
      transform: translateY(-6px);
      background: rgba(183, 160, 139, 0.2);
      border-color: rgba(255, 245, 235, 0.4);
      box-shadow: 0 25px 40px rgba(0, 0, 0, 0.3);
    }

    .btn-premium {
      background: linear-gradient(105deg, #B7A08B, #9e8771);
      border: none;
      color: #023b45 !important;
      font-weight: 800;
      padding: 0.75rem 1.8rem;
      border-radius: 60px;
      transition: all 0.25s;
      letter-spacing: -0.2px;
    }

    .btn-premium:hover {
      transform: scale(0.97);
      background: linear-gradient(105deg, #c9b297, #B7A08B);
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      color: #023b45;
    }

    .form-control, .form-select {
      background: rgba(255, 250, 240, 0.95);
      border: 1px solid rgba(2, 59, 69, 0.3);
      border-radius: 1.2rem;
      padding: 0.7rem 1.2rem;
      font-weight: 500;
      color: #023b45;
      transition: all 0.2s;
    }

    .form-control:focus, .form-select:focus {
      background: #ffffff;
      border-color: #B7A08B;
      box-shadow: 0 0 0 3px rgba(183, 160, 139, 0.4);
    }

    .error-msg {
      font-size: 0.7rem;
      color: #ffbc8c;
      margin-top: 0.3rem;
      margin-left: 0.5rem;
      font-weight: 600;
      display: none;
    }

    .stat-card {
      background: rgba(183, 160, 139, 0.2);
      border-radius: 1.5rem;
      padding: 1.5rem;
      text-align: center;
      backdrop-filter: blur(5px);
      transition: 0.2s;
    }

    .stat-card i { font-size: 2.2rem; color: #B7A08B; margin-bottom: 0.5rem; }
    .social-icon {
      background: rgba(255,250,240,0.15);
      width: 48px;
      height: 48px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 60px;
      font-size: 1.4rem;
      transition: all 0.2s;
      color: #FEFAF7;
      margin: 0 6px;
    }
    .social-icon:hover {
      background: #B7A08B;
      color: #023b45;
      transform: translateY(-5px) scale(1.05);
    }
    .accordion-button {
      background: rgba(183, 160, 139, 0.2);
      color: #FEFAF7;
      font-weight: 700;
      border-radius: 1rem !important;
    }
    .accordion-button:not(.collapsed) {
      background: #B7A08B;
      color: #023b45;
    }
    .accordion-body { background: rgba(0,0,0,0.2); border-radius: 1rem; color:#FEFAF7; }
    .map-placeholder {
      border-radius: 1.5rem;
      overflow: hidden;
      border: 1px solid rgba(183,160,139,0.5);
    }
    .char-counter {
      font-size: 0.7rem;
      text-align: right;
      color: #B7A08B;
      margin-top: 0.3rem;
    }
    .loading-spinner {
      display: none;
      margin-right: 8px;
    }
    @media (max-width: 768px) {
      .glass-card { padding: 1rem; }
      .hero h1 { font-size: 2rem; }
    }
  </style>
</head>
<body>

<div class="bg-shape shape1"></div>
<div class="bg-shape shape2"></div>
<div class="bg-shape shape3"></div>

<main class="container py-4" style="position: relative; z-index: 2;">
  <!-- Hero Section -->
  <div class="row justify-content-center text-center mb-5 mt-4">
    <div class="col-lg-8">
      <div class="glass-card p-4 p-lg-5">
        <h1 class="display-3 fw-bold" style="background: linear-gradient(135deg, #FEFAF7, #B7A08B); -webkit-background-clip: text; background-clip: text; color: transparent;">Let's talk business</h1>
        <p class="lead mt-3">Premium support, enterprise solutions, and bespoke account packages — we're just a message away. <br> Join 1,500+ satisfied brands.</p>
        <div class="mt-3">
          <span class="badge bg-secondary bg-opacity-25 px-3 py-2 rounded-pill"><i class="fas fa-clock me-1"></i> 24/7 priority response</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact Information Cards (Email, WhatsApp, Phone, Address, Business Hours) -->
  <div class="row g-4 mb-5">
    <div class="col-md-6 col-lg-4"><div class="glass-card p-4 text-center h-100"><i class="fas fa-envelope fa-2x mb-3" style="color:#B7A08B;"></i><h5>Email</h5><p class="mb-0">hello@luxecards.com</p><small>support@luxecards.com</small></div></div>
    <div class="col-md-6 col-lg-4"><div class="glass-card p-4 text-center h-100"><i class="fab fa-whatsapp fa-2x mb-3" style="color:#B7A08B;"></i><h5>WhatsApp</h5><p class="mb-0">+92 314 1001807</p><small>Business line</small></div></div>
    <div class="col-md-6 col-lg-4"><div class="glass-card p-4 text-center h-100"><i class="fas fa-phone-alt fa-2x mb-3" style="color:#B7A08B;"></i><h5>Call us</h5><p class="mb-0">+1 (888) 471-2244</p><small>Mon-Fri 9am-8pm EST</small></div></div>
    <div class="col-md-6 col-lg-6"><div class="glass-card p-4 text-center h-100"><i class="fas fa-map-marker-alt fa-2x mb-3" style="color:#B7A08B;"></i><h5>Headquarters</h5><p class="mb-0">Luxe Tower, 123 Madison Avenue, New York, NY 10016, USA</p></div></div>
    <div class="col-md-6 col-lg-6"><div class="glass-card p-4 text-center h-100"><i class="fas fa-business-time fa-2x mb-3" style="color:#B7A08B;"></i><h5>Business Hours</h5><p class="mb-0">Monday – Friday: 9:00 AM – 8:00 PM (EST)<br>Saturday: 10 AM – 4 PM</p></div></div>
  </div>

  <!-- Advanced Contact Form + Side info? (Full width) -->
  <div class="row g-5 mb-5">
    <div class="col-lg-12">
      <div class="glass-card p-4 p-lg-5">
        <h3 class="mb-3"><i class="fas fa-paper-plane me-2"></i> Get a tailored quote</h3>
        <p class="mb-4">Fill out the form and we'll get back within 2 hours – guaranteed.</p>
        <form id="premiumContactForm">
          <div class="row g-3">
            <div class="col-md-6"><label class="form-label fw-bold">Full Name *</label><input type="text" class="form-control" id="fullName" placeholder="Alex Morgan"><div class="error-msg" id="errorName">Name required</div></div>
            <div class="col-md-6"><label class="form-label fw-bold">Email Address *</label><input type="email" class="form-control" id="email" placeholder="alex@luxe.com"><div class="error-msg" id="errorEmail">Valid email required</div></div>
            <div class="col-md-6"><label class="form-label fw-bold">Phone Number *</label><input type="tel" class="form-control" id="phoneNumber" placeholder="(123) 456-7890"><div class="error-msg" id="errorPhone">10+ digits required</div></div>
            <div class="col-md-6"><label class="form-label fw-bold">WhatsApp Number</label><input type="tel" class="form-control" id="whatsappNumber" placeholder="(123) 456-7890"></div>
            <div class="col-md-6"><label class="form-label fw-bold">Company Name</label><input type="text" class="form-control" id="companyName" placeholder="Your brand / agency"></div>
            <div class="col-md-6"><label class="form-label fw-bold">Country *</label><select id="countrySelect" class="form-select"><option value="">Select country</option><option>United States</option><option>Canada</option><option>United Kingdom</option><option>Australia</option><option>Germany</option><option>France</option><option>India</option><option>UAE</option><option>Singapore</option><option>Brazil</option></select><div class="error-msg" id="errorCountry">Select country</div></div>
            <div class="col-md-6"><label class="form-label fw-bold">Service *</label><select id="serviceSelect" class="form-select"><option value="">Choose service</option><option>Social Media Accounts (Bulk)</option><option>PVA / Aged Accounts</option><option>Marketing Automation</option><option>Account Recovery</option><option>White-label Partnership</option></select><div class="error-msg" id="errorService">Select service</div></div>
            <div class="col-md-6"><label class="form-label fw-bold">Budget Range</label><select id="budgetSelect" class="form-select"><option value="">Select budget</option><option>&lt; $500</option><option>$500 - $1,500</option><option>$1,500 - $5,000</option><option>$5,000+</option></select></div>
            <div class="col-12"><label class="form-label fw-bold">Subject *</label><input type="text" class="form-control" id="subject" placeholder="Brief subject line"><div class="error-msg" id="errorSubject">Subject required</div></div>
            <div class="col-12"><label class="form-label fw-bold">Message *</label><textarea class="form-control" id="message" rows="4" maxlength="500" placeholder="Tell us about your project..."></textarea><div class="char-counter"><span id="charCount">0</span>/500 characters</div><div class="error-msg" id="errorMessage">Message required</div></div>
            <div class="col-12"><label class="form-label fw-bold">Attachment (optional)</label><input type="file" class="form-control" id="fileUpload" accept=".pdf,.jpg,.png,.docx"></div>
            <div class="col-12"><div class="form-check"><input class="form-check-input" type="checkbox" id="termsCheckbox"><label class="form-check-label" for="termsCheckbox"> I agree to the <strong>Terms & Conditions</strong> and privacy policy.*</label><div class="error-msg" id="errorTerms">You must agree to continue</div></div></div>
            <div class="col-12"><button type="submit" class="btn-premium w-100 py-3" id="submitBtn"><i class="fas fa-spinner fa-pulse loading-spinner" id="spinnerIcon"></i><span id="btnText">Send message</span> <i class="fas fa-arrow-right ms-2"></i></button></div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Business Statistics Section -->
  <div class="row g-4 mb-5 text-center">
    <div class="col-md-3 col-6"><div class="stat-card"><i class="fas fa-smile"></i><h2 class="fw-bold mt-2" id="statClients">2,480+</h2><p>Happy Clients</p></div></div>
    <div class="col-md-3 col-6"><div class="stat-card"><i class="fas fa-rocket"></i><h2 class="fw-bold mt-2" id="statProjects">1,230+</h2><p>Projects Completed</p></div></div>
    <div class="col-md-3 col-6"><div class="stat-card"><i class="fas fa-globe-americas"></i><h2 class="fw-bold mt-2" id="statCountries">48</h2><p>Countries Served</p></div></div>
    <div class="col-md-3 col-6"><div class="stat-card"><i class="fas fa-clock"></i><h2 class="fw-bold mt-2" id="statResponse">&lt;2h</h2><p>Avg Response Time</p></div></div>
  </div>

  <!-- FAQ Accordion + Map & Social Media Section -->
  <div class="row g-5 mb-5">
    <div class="col-lg-6">
      <div class="glass-card p-4 h-100">
        <h4 class="mb-3"><i class="fas fa-question-circle me-2"></i> Frequently asked</h4>
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item bg-transparent border-0 mb-2"><h2 class="accordion-header"><button class="accordion-button collapsed bg-glass text-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">What's your replacement policy?</button></h2><div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">24/7 replacement for any accounts that become locked within 30 days. Quality guaranteed.</div></div></div>
          <div class="accordion-item bg-transparent border-0 mb-2"><h2 class="accordion-header"><button class="accordion-button collapsed bg-glass text-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">Do you offer bulk discounts?</button></h2><div id="faq2" class="accordion-collapse collapse"><div class="accordion-body">Absolutely. Discounts start at 10% for orders over 50 accounts. Contact our sales team.</div></div></div>
          <div class="accordion-item bg-transparent border-0 mb-2"><h2 class="accordion-header"><button class="accordion-button collapsed bg-glass text-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">How fast are accounts delivered?</button></h2><div id="faq3" class="accordion-collapse collapse"><div class="accordion-body">Instant delivery after payment, max 2 minutes. Aged profiles ready to use.</div></div></div>
          <div class="accordion-item bg-transparent border-0"><h2 class="accordion-header"><button class="accordion-button collapsed bg-glass text-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">Can I request custom packages?</button></h2><div id="faq4" class="accordion-collapse collapse"><div class="accordion-body">Yes! Fill the form with your exact needs and we'll craft a bespoke solution within hours.</div></div></div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="glass-card p-4 h-100">
        <h4 class="mb-3"><i class="fas fa-map-pin me-2"></i> Our location</h4>
        <div class="map-placeholder mb-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.987319684593!3d40.748441979328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1644261943455!5m2!1sen!2sus" width="100%" height="220" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <h5 class="mt-2"><i class="fab fa-discord me-2"></i> Connect with us</h5>
        <div class="d-flex flex-wrap justify-content-start gap-2 mt-2">
          <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-discord"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Call to Action Section -->
  <div class="row mb-5">
    <div class="col-12">
      <div class="glass-card p-5 text-center">
        <h2>Ready to scale your presence?</h2>
        <p class="mb-3 fs-5">Join hundreds of thriving businesses that trust LuxeCards for premium social accounts.</p>
        <button class="btn-premium px-5 py-3" onclick="document.getElementById('premiumContactForm').scrollIntoView({behavior:'smooth'})"><i class="fas fa-calendar-check me-2"></i> Request consultation</button>
      </div>
    </div>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  (function() {
    // ---------- DOM elements ----------
    const form = document.getElementById('premiumContactForm');
    const fullName = document.getElementById('fullName');
    const email = document.getElementById('email');
    const phoneNumber = document.getElementById('phoneNumber');
    const whatsapp = document.getElementById('whatsappNumber');
    const company = document.getElementById('companyName');
    const country = document.getElementById('countrySelect');
    const service = document.getElementById('serviceSelect');
    const budget = document.getElementById('budgetSelect');
    const subject = document.getElementById('subject');
    const message = document.getElementById('message');
    const terms = document.getElementById('termsCheckbox');
    const fileUpload = document.getElementById('fileUpload');

    const errorName = document.getElementById('errorName');
    const errorEmail = document.getElementById('errorEmail');
    const errorPhone = document.getElementById('errorPhone');
    const errorCountry = document.getElementById('errorCountry');
    const errorService = document.getElementById('errorService');
    const errorSubject = document.getElementById('errorSubject');
    const errorMessage = document.getElementById('errorMessage');
    const errorTerms = document.getElementById('errorTerms');

    const charSpan = document.getElementById('charCount');
    const submitBtn = document.getElementById('submitBtn');
    const spinner = document.getElementById('spinnerIcon');
    const btnText = document.getElementById('btnText');

    // Helper: show/hide error
    function showError(errorEl, show) { errorEl.style.display = show ? 'block' : 'none'; }

    // Real-time validation
    function validateName() { const valid = fullName.value.trim().length >= 2; showError(errorName, !valid); return valid; }
    function validateEmail() { const re = /^[^\s@]+@([^\s@.,]+\.)+[^\s@]{2,}$/; const valid = re.test(email.value.trim()); showError(errorEmail, !valid); return valid; }
    function validatePhone() { const digits = phoneNumber.value.replace(/\D/g, ''); const valid = digits.length >= 10; showError(errorPhone, !valid); return valid; }
    function validateCountry() { const valid = country.value !== ""; showError(errorCountry, !valid); return valid; }
    function validateService() { const valid = service.value !== ""; showError(errorService, !valid); return valid; }
    function validateSubject() { const valid = subject.value.trim().length >= 2; showError(errorSubject, !valid); return valid; }
    function validateMessage() { const valid = message.value.trim().length >= 5; showError(errorMessage, !valid); return valid; }
    function validateTerms() { const valid = terms.checked; showError(errorTerms, !valid); return valid; }

    // Attach real-time events
    fullName.addEventListener('input', validateName);
    email.addEventListener('input', validateEmail);
    phoneNumber.addEventListener('input', function() { validatePhone(); formatPhoneNumber(phoneNumber); });
    country.addEventListener('change', validateCountry);
    service.addEventListener('change', validateService);
    subject.addEventListener('input', validateSubject);
    message.addEventListener('input', function() { validateMessage(); updateCharCount(); });
    terms.addEventListener('change', validateTerms);

    // Character counter
    function updateCharCount() { const len = message.value.length; charSpan.innerText = len; }
    updateCharCount();

    // Phone auto formatting (US style)
    function formatPhoneNumber(input) {
      let raw = input.value.replace(/\D/g, '');
      if (raw.length === 0) input.value = '';
      else if (raw.length <= 3) input.value = `(${raw}`;
      else if (raw.length <= 6) input.value = `(${raw.slice(0,3)}) ${raw.slice(3)}`;
      else input.value = `(${raw.slice(0,3)}) ${raw.slice(3,6)}-${raw.slice(6,10)}`;
    }
    // optional whatsapp simple formatting
    if(whatsapp) whatsapp.addEventListener('input', function() { formatPhoneNumber(whatsapp); });

    // localStorage: save & load
    const storageKey = 'luxe_contact_form_data';
    function saveToLocalStorage() {
      const formData = {
        fullName: fullName.value, email: email.value, phoneNumber: phoneNumber.value,
        whatsappNumber: whatsapp.value, companyName: company.value, country: country.value,
        service: service.value, budget: budget.value, subject: subject.value, message: message.value,
        terms: terms.checked
      };
      localStorage.setItem(storageKey, JSON.stringify(formData));
    }
    function loadFromLocalStorage() {
      const saved = localStorage.getItem(storageKey);
      if(saved) {
        const data = JSON.parse(saved);
        fullName.value = data.fullName || '';
        email.value = data.email || '';
        phoneNumber.value = data.phoneNumber || '';
        whatsapp.value = data.whatsappNumber || '';
        company.value = data.companyName || '';
        country.value = data.country || '';
        service.value = data.service || '';
        budget.value = data.budget || '';
        subject.value = data.subject || '';
        message.value = data.message || '';
        terms.checked = data.terms || false;
        updateCharCount(); if(phoneNumber.value) formatPhoneNumber(phoneNumber); if(whatsapp.value) formatPhoneNumber(whatsapp);
        // trigger validations
        validateName(); validateEmail(); validatePhone(); validateCountry(); validateService(); validateSubject(); validateMessage(); validateTerms();
      }
    }
    // auto save on any input
    const allInputs = [fullName, email, phoneNumber, whatsapp, company, country, service, budget, subject, message, terms];
    allInputs.forEach(field => field.addEventListener('input', () => saveToLocalStorage()));
    loadFromLocalStorage();

    // Form submit with loading & toast
    function showSuccessToast(msg) {
      let existingToast = document.querySelector('.custom-toast');
      if(existingToast) existingToast.remove();
      const toastDiv = document.createElement('div');
      toastDiv.className = 'custom-toast';
      toastDiv.style.position = 'fixed';
      toastDiv.style.bottom = '30px';
      toastDiv.style.left = '30px';
      toastDiv.style.background = '#B7A08B';
      toastDiv.style.color = '#023b45';
      toastDiv.style.padding = '12px 24px';
      toastDiv.style.borderRadius = '60px';
      toastDiv.style.fontWeight = 'bold';
      toastDiv.style.boxShadow = '0 10px 20px rgba(0,0,0,0.2)';
      toastDiv.style.zIndex = '9999';
      toastDiv.style.backdropFilter = 'blur(8px)';
      toastDiv.innerHTML = `<i class="fas fa-check-circle me-2"></i> ${msg}`;
      document.body.appendChild(toastDiv);
      setTimeout(() => toastDiv.remove(), 3500);
    }

    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      const isNameValid = validateName(), isEmailValid = validateEmail(), isPhoneValid = validatePhone();
      const isCountryValid = validateCountry(), isServiceValid = validateService(), isSubjectValid = validateSubject();
      const isMsgValid = validateMessage(), isTermsValid = validateTerms();
      if(!isNameValid || !isEmailValid || !isPhoneValid || !isCountryValid || !isServiceValid || !isSubjectValid || !isMsgValid || !isTermsValid) {
        showSuccessToast("⚠️ Please fix errors before sending");
        return;
      }
      // simulate loading
      submitBtn.disabled = true;
      spinner.style.display = 'inline-block';
      btnText.innerText = 'Sending...';
      await new Promise(resolve => setTimeout(resolve, 1500));
      // success scenario
      showSuccessToast("✨ Message sent! Our team will reply within 2 hours.");
      // reset form + clear localStorage + file input
      form.reset();
      localStorage.removeItem(storageKey);
      // reset file input manually
      fileUpload.value = '';
      // reset character counter
      message.value = '';
      updateCharCount();
      // reset fields validations UI
      [fullName, email, phoneNumber, whatsapp, company, country, service, budget, subject, message].forEach(f => f.dispatchEvent(new Event('input')));
      terms.checked = false;
      validateTerms();
      // optional reset phone/formatting
      phoneNumber.value = ''; whatsapp.value = '';
      submitBtn.disabled = false;
      spinner.style.display = 'none';
      btnText.innerText = 'Send message';
    });

    // initial validations
    [validateName, validateEmail, validatePhone, validateCountry, validateService, validateSubject, validateMessage, validateTerms].forEach(fn => fn());
  })();
</script>
</body>
</html>
```