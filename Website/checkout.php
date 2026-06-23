<?php
session_start();

// Handle direct order from services.php (cart stored in localStorage)
// The JS below will POST the cart data to this page on load
if (isset($_GET['direct']) && $_GET['direct'] === '1' && isset($_POST['cart_data'])) {
    $new_items = json_decode($_POST['cart_data'], true);
    if (is_array($new_items) && !empty($new_items)) {
        // MERGE new items with existing cart instead of replacing
        if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        foreach ($new_items as $new_item) {
            $found = false;
            foreach ($_SESSION['cart'] as &$existing) {
                if ($existing['name'] === $new_item['name']) {
                    $existing['quantity'] += $new_item['quantity'];
                    $found = true;
                    break;
                }
            }
            unset($existing);
            if (!$found) {
                $_SESSION['cart'][] = $new_item;
            }
        }
    }
}

if (empty($_SESSION['cart']) && !isset($_GET['direct'])) {
    header('Location: cart.php');
    exit;
}

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once __DIR__ . '/../includes/db_connect.php';

    $name    = trim($_POST['fullname'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $whatsapp= trim($_POST['whatsapp'] ?? '');
    $country = trim($_POST['country'] ?? '');
    $city    = trim($_POST['city'] ?? '');
    $address = trim($_POST['address'] ?? '');
    $postal  = trim($_POST['postal'] ?? '');
    $notes   = trim($_POST['notes'] ?? '');

    if (empty($name)) $errors[] = 'Full Name is required.';
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid Email is required.';
    if (empty($whatsapp)) $errors[] = 'WhatsApp number is required.';
    if (empty($country)) $errors[] = 'Country is required.';
    if (empty($city)) $errors[] = 'City is required.';
    if (empty($address)) $errors[] = 'Complete Address is required.';

    if (empty($errors)) {
        do {
            $order_id = 'ORD-' . str_pad(rand(100000, 999999), 6, '0', STR_PAD_LEFT);
            $check = $pdo->prepare("SELECT COUNT(*) FROM orders WHERE order_id = ?");
            $check->execute([$order_id]);
        } while ($check->fetchColumn() > 0);

        $cart = $_SESSION['cart'];
        $total_amount = 0;
        foreach ($cart as $item) {
            $total_amount += $item['price'] * $item['quantity'];
        }
        $total_products = count($cart);

        $pdo->prepare("INSERT INTO orders (order_id, customer_name, email, whatsapp, country, city, address, postal_code, notes, total_amount, total_products, order_status) VALUES (?,?,?,?,?,?,?,?,?,?,?,'Pending')")->execute([$order_id, $name, $email, $whatsapp, $country, $city, $address, $postal, $notes, $total_amount, $total_products]);

        $stmt = $pdo->prepare("INSERT INTO order_items (order_id, product_name, product_price, quantity, subtotal) VALUES (?,?,?,?,?)");
        foreach ($cart as $item) {
            $subtotal = $item['price'] * $item['quantity'];
            $stmt->execute([$order_id, $item['name'], $item['price'], $item['quantity'], $subtotal]);
        }

        unset($_SESSION['cart']);
        header("Location: order-confirmation.php?order_id=" . urlencode($order_id));
        exit;
    }
}

include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checkout - LuxeHaven</title>
<style>
.checkout-wrap { max-width: 900px; margin: 40px auto; padding: 0 20px; }
.checkout-wrap h1 { font-size: 2rem; font-weight: 700; color: #023b45; margin-bottom: 20px; }
.checkout-grid { display: grid; grid-template-columns: 1.5fr 1fr; gap: 30px; align-items: start; }
.form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.form-group { display: flex; flex-direction: column; }
.form-group.full { grid-column: 1 / -1; }
.form-group label { font-weight: 600; font-size: 0.85rem; color: #023b45; margin-bottom: 5px; }
.form-group input, .form-group textarea { padding: 11px 14px; border: 1.5px solid #ddd; border-radius: 8px; font-size: 0.95rem; background: #fff; }
.form-group input:focus, .form-group textarea:focus { border-color: #023b45; outline: none; box-shadow: 0 0 0 3px rgba(2,59,69,0.1); }
.err-msg { display: none; color: #dc3545; font-size: 0.78rem; margin-top: 4px; }
.err-box { background: #f8d7da; color: #721c24; padding: 15px 20px; border-radius: 8px; margin-bottom: 20px; }
.err-box ul { margin: 0; padding-left: 20px; }
.summary-card { background: #fff; border-radius: 12px; padding: 24px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); position: sticky; top: 100px; }
.summary-card h3 { font-size: 1.1rem; font-weight: 700; color: #023b45; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid #f0ece7; }
.summary-row { display: flex; justify-content: space-between; padding: 8px 0; font-size: 0.9rem; border-bottom: 1px solid #f5f5f5; }
.summary-total { display: flex; justify-content: space-between; padding: 12px 0 0; font-size: 1.2rem; font-weight: 700; color: #023b45; border-top: 2px solid #023b45; margin-top: 10px; }
.btn-order { width: 100%; padding: 14px; background: #023b45; color: #fff; border: none; border-radius: 8px; font-size: 1rem; font-weight: 600; cursor: pointer; transition: background 0.2s; margin-top: 20px; }
.btn-order:hover { background: #045d6c; }
@media (max-width: 768px) { .checkout-grid { grid-template-columns: 1fr; } .form-grid { grid-template-columns: 1fr; } .form-group.full { grid-column: 1; } .summary-card { position: static; } }
</style>

<div class="checkout-wrap">
    <h1>Checkout</h1>

    <?php if (!empty($errors)): ?>
    <div class="err-box"><ul><?php foreach ($errors as $e): ?><li><?= htmlspecialchars($e) ?></li><?php endforeach; ?></ul></div>
    <?php endif; ?>

    <form method="POST" id="checkoutForm" novalidate>
        <div class="checkout-grid">

            <div class="form-grid">
                <div class="form-group">
                    <label>Full Name *</label>
                    <input type="text" name="fullname" id="fname" required value="<?= htmlspecialchars($_POST['fullname'] ?? '') ?>" placeholder="John Doe">
                    <span class="err-msg" id="fnameErr">Full Name is required</span>
                </div>
                <div class="form-group">
                    <label>Email *</label>
                    <input type="email" name="email" id="email" required value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" placeholder="john@example.com">
                    <span class="err-msg" id="emailErr">Valid email is required</span>
                </div>
                <div class="form-group">
                    <label>WhatsApp *</label>
                    <input type="text" name="whatsapp" id="whatsapp" required value="<?= htmlspecialchars($_POST['whatsapp'] ?? '') ?>" placeholder="+1234567890">
                    <span class="err-msg" id="whatsappErr">WhatsApp is required</span>
                </div>
                <div class="form-group">
                    <label>Country *</label>
                    <select name="country" id="country" required>
                        <option value="">Select your country...</option>
                    </select>
                    <span class="err-msg" id="countryErr">Country is required</span>
                </div>
                <div class="form-group">
                    <label>City *</label>
                    <input type="text" name="city" id="city" required value="<?= htmlspecialchars($_POST['city'] ?? '') ?>" placeholder="New York">
                    <span class="err-msg" id="cityErr">City is required</span>
                </div>
                <div class="form-group">
                    <label>Postal Code</label>
                    <input type="text" name="postal" value="<?= htmlspecialchars($_POST['postal'] ?? '') ?>" placeholder="10001">
                </div>
                <div class="form-group full">
                    <label>Address *</label>
                    <textarea name="address" id="address" required rows="3" placeholder="Street, building, apartment..."><?= htmlspecialchars($_POST['address'] ?? '') ?></textarea>
                    <span class="err-msg" id="addressErr">Address is required</span>
                </div>
                <div class="form-group full">
                    <label>Order Notes (optional)</label>
                    <textarea name="notes" rows="2" placeholder="Special requests..."><?= htmlspecialchars($_POST['notes'] ?? '') ?></textarea>
                </div>
            </div>

            <div class="summary-card">
                <h3><i class="fas fa-shopping-bag me-2"></i>Order Summary</h3>
                <?php
                $cart = $_SESSION['cart'];
                $total = 0;
                foreach ($cart as $item):
                    $sub = $item['price'] * $item['quantity'];
                    $total += $sub;
                ?>
                <div class="summary-row">
                    <span><?= htmlspecialchars($item['name']) ?> × <?= $item['quantity'] ?></span>
                    <span>$<?= number_format($sub, 2) ?></span>
                </div>
                <?php endforeach; ?>
                <div class="summary-total">
                    <span>Total</span>
                    <span>$<?= number_format($total, 2) ?></span>
                </div>
                <button type="submit" class="btn-order" id="placeOrderBtn"><i class="fas fa-lock me-2"></i>Place Order</button>
                <p style="font-size:0.75rem; color:#999; margin-top:10px; text-align:center;"><i class="fas fa-shield-alt me-1"></i>Secure checkout</p>
            </div>

        </div>
    </form>
</div>

<script>
// ---- Direct order from services.php via localStorage ----
(function() {
    var urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('direct') === '1') {
        var cartData = localStorage.getItem('direct_cart');
        if (cartData) {
            // Create a form and submit it POST to this page with the cart data
            var form = document.createElement('form');
            form.method = 'POST';
            form.style.display = 'none';
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'cart_data';
            input.value = cartData;
            form.appendChild(input);
            document.body.appendChild(form);
            localStorage.removeItem('direct_cart');
            form.submit();
        }
    }
})();

// Pre-selected country from form submission
var selectedCountry = <?= json_encode($_POST['country'] ?? '') ?>;

// ---- Full 193 countries list ----
var countries = [
    "Afghanistan","Albania","Algeria","Andorra","Angola","Antigua and Barbuda","Argentina","Armenia",
    "Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus",
    "Belgium","Belize","Benin","Bhutan","Bolivia","Bosnia and Herzegovina","Botswana","Brazil",
    "Brunei","Bulgaria","Burkina Faso","Burundi","Cabo Verde","Cambodia","Cameroon","Canada",
    "Central African Republic","Chad","Chile","China","Colombia","Comoros","Congo","Costa Rica",
    "Croatia","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic",
    "Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Eswatini","Ethiopia",
    "Fiji","Finland","France","Gabon","Gambia","Georgia","Germany","Ghana","Greece","Grenada",
    "Guatemala","Guinea","Guinea-Bissau","Guyana","Haiti","Honduras","Hungary","Iceland","India",
    "Indonesia","Iran","Iraq","Ireland","Israel","Italy","Ivory Coast","Jamaica","Japan","Jordan",
    "Kazakhstan","Kenya","Kiribati","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho",
    "Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Madagascar","Malawi","Malaysia",
    "Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia",
    "Moldova","Monaco","Mongolia","Montenegro","Morocco","Mozambique","Myanmar","Namibia","Nauru",
    "Nepal","Netherlands","New Zealand","Nicaragua","Niger","Nigeria","North Korea","North Macedonia",
    "Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru",
    "Philippines","Poland","Portugal","Qatar","Romania","Russia","Rwanda","Saint Kitts and Nevis",
    "Saint Lucia","Saint Vincent and the Grenadines","Samoa","San Marino","Sao Tome and Principe",
    "Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia",
    "Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka",
    "Sudan","Suriname","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand",
    "Timor-Leste","Togo","Tonga","Trinidad and Tobago","Tunisia","Turkey","Turkmenistan","Tuvalu",
    "Uganda","Ukraine","United Arab Emirates","United Kingdom","United States","Uruguay","Uzbekistan",
    "Vanuatu","Vatican City","Venezuela","Vietnam","Yemen","Zambia","Zimbabwe"
];
countries.sort();
var countrySelect = document.getElementById('country');
countries.forEach(function(c) {
    var opt = document.createElement('option');
    opt.value = c;
    opt.textContent = c;
    if (c === selectedCountry) opt.selected = true;
    countrySelect.appendChild(opt);
});

// Search/filter for the country select
var searchInput = document.createElement('input');
searchInput.type = 'text';
searchInput.placeholder = 'Type to search country...';
searchInput.style.cssText = 'padding:10px 14px;border:1.5px solid #ddd;border-radius:8px;font-size:0.95rem;margin-bottom:6px;width:100%;box-sizing:border-box;';
searchInput.id = 'countrySearch';
countrySelect.parentNode.insertBefore(searchInput, countrySelect);

countrySelect.style.display = 'none';
if (selectedCountry) {
    searchInput.value = selectedCountry;
}

searchInput.addEventListener('input', function() {
    var val = this.value.toLowerCase();
    countrySelect.innerHTML = '<option value="">Select your country...</option>';
    countries.forEach(function(c) {
        if (c.toLowerCase().includes(val)) {
            var opt = document.createElement('option');
            opt.value = c;
            opt.textContent = c;
            countrySelect.appendChild(opt);
        }
    });
    countrySelect.size = Math.min(countrySelect.options.length, 10);
    countrySelect.style.display = val.length > 0 ? 'block' : 'none';
});

searchInput.addEventListener('blur', function() {
    setTimeout(function() {
        countrySelect.style.display = 'none';
        searchInput.style.display = 'block';
    }, 200);
});

searchInput.addEventListener('focus', function() {
    this.value = '';
    countrySelect.innerHTML = '<option value="">Select your country...</option>';
    countries.forEach(function(c) {
        var opt = document.createElement('option');
        opt.value = c;
        opt.textContent = c;
        countrySelect.appendChild(opt);
    });
    countrySelect.style.display = 'block';
    countrySelect.size = Math.min(countries.length + 1, 10);
});

countrySelect.addEventListener('change', function() {
    if (this.value) {
        searchInput.value = this.value;
        searchInput.style.display = 'block';
        countrySelect.style.display = 'none';
    }
});

document.getElementById('checkoutForm').addEventListener('submit', function(e) {
    var valid = true;
    // Field validation
    var fieldList = [
        { id: 'fname', err: 'fnameErr' },
        { id: 'email', err: 'emailErr' },
        { id: 'whatsapp', err: 'whatsappErr' },
        { id: 'city', err: 'cityErr' },
        { id: 'address', err: 'addressErr' }
    ];
    fieldList.forEach(function(f) {
        var el = document.getElementById(f.id);
        var err = document.getElementById(f.err);
        if (!el.value.trim()) { err.style.display = 'block'; valid = false; }
        else { err.style.display = 'none'; }
    });
    // Country validation — check both select and search input
    var countrySel = document.getElementById('country');
    var countrySearch = document.getElementById('countrySearch');
    var countryErr = document.getElementById('countryErr');
    var countryVal = countrySel.value || countrySearch.value;
    if (!countryVal) { countryErr.style.display = 'block'; valid = false; }
    else { countryErr.style.display = 'none'; }
    // Sync country select value with search input
    if (countrySearch && countrySearch.value && !countrySel.value) {
        // Find matching country
        for (var i = 0; i < countries.length; i++) {
            if (countries[i].toLowerCase() === countrySearch.value.toLowerCase()) {
                countrySel.value = countries[i];
                break;
            }
        }
    }
    var em = document.getElementById('email');
    var emErr = document.getElementById('emailErr');
    if (em.value.trim() && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(em.value.trim())) {
        emErr.textContent = 'Enter a valid email'; emErr.style.display = 'block'; valid = false;
    } else if (em.value.trim()) {
        emErr.textContent = 'Valid email is required'; emErr.style.display = 'none';
    }
    if (!valid) e.preventDefault();
});
// Real-time error clearing for search input
document.getElementById('countrySearch').addEventListener('input', function() {
    document.getElementById('countryErr').style.display = 'none';
});
document.getElementById('country').addEventListener('change', function() {
    document.getElementById('countryErr').style.display = 'none';
});

document.querySelectorAll('#checkoutForm input, #checkoutForm textarea, #checkoutForm select').forEach(function(el) {
    el.addEventListener('input', function() {
        var err = document.getElementById(this.id + 'Err');
        if (err && this.value.trim()) err.style.display = 'none';
    });
});
</script>

</body>
</html>
<?php include 'footer.php'; ?>
