<?php
include 'header.php';

$query = isset($_GET['q']) ? trim($_GET['q']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results: <?= htmlspecialchars($query) ?: 'All Products' ?> - LuxeHaven</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: #B7A08B; color: #023b45; overflow-x: hidden; }
        .search-page { padding: 50px 0; min-height: 60vh; }
        .search-page .container { max-width: 1100px; margin: 0 auto; padding: 0 20px; }
        .search-page h1 { font-size: 2rem; font-weight: 800; color: #023b45; margin-bottom: 8px; }
        .search-page .search-summary { font-size: 0.95rem; color: rgba(2,59,69,0.7); margin-bottom: 30px; }
        .search-page .search-summary strong { color: #023b45; }

        .search-result-card {
            background: #fff;
            border-radius: 16px;
            padding: 20px 24px;
            margin-bottom: 14px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            display: flex;
            align-items: center;
            gap: 20px;
            transition: transform 0.2s;
            text-decoration: none;
            color: inherit;
            border: 1px solid transparent;
        }
        .search-result-card:hover {
            transform: translateY(-2px);
            border-color: #023b45;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }
        .search-result-card .icon {
            width: 50px;
            height: 50px;
            background: rgba(2,59,69,0.08);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            flex-shrink: 0;
        }
        .search-result-card .info h3 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #023b45;
            margin-bottom: 3px;
        }
        .search-result-card .info p {
            font-size: 0.85rem;
            color: rgba(2,59,69,0.65);
        }
        .search-result-card .badge {
            margin-left: auto;
            background: #023b45;
            color: #fff;
            padding: 4px 14px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            flex-shrink: 0;
        }
        .no-results {
            text-align: center;
            padding: 60px 20px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
        }
        .no-results h3 { font-size: 1.4rem; margin-bottom: 8px; }
        .no-results p { color: rgba(2,59,69,0.6); }
        @media (max-width: 600px) {
            .search-result-card { flex-direction: column; text-align: center; padding: 16px; }
            .search-result-card .badge { margin-left: 0; }
        }
    </style>
</head>
<body>

<div class="search-page">
    <div class="container">
        <h1><i class="fas fa-search me-2"></i>Search Results</h1>
        <?php if ($query): ?>
            <p class="search-summary">Showing results for: <strong><?= htmlspecialchars($query) ?></strong></p>
        <?php else: ?>
            <p class="search-summary">Browse all available products and services</p>
        <?php endif; ?>

        <?php
        // Define all products
        $all_products = [
            ['name' => 'Fresh Gmail Accounts',    'page' => 'gmail.php',       'icon' => 'fa-envelope',  'cat' => 'Gmail',      'desc' => 'Brand new Gmail accounts, ready for immediate use'],
            ['name' => 'PVA Gmail Accounts',       'page' => 'gmail.php',       'icon' => 'fa-envelope',  'cat' => 'Gmail',      'desc' => 'Phone verified Gmail accounts with maximum security'],
            ['name' => 'Aged Gmail Accounts',      'page' => 'gmail.php',       'icon' => 'fa-envelope',  'cat' => 'Gmail',      'desc' => '2+ year old Gmail accounts with established history'],
            ['name' => 'Business Gmail Accounts',  'page' => 'gmail.php',       'icon' => 'fa-envelope',  'cat' => 'Gmail',      'desc' => 'Premium business-ready Gmail profiles'],
            ['name' => 'Fresh Facebook Accounts',  'page' => 'facebook.php',    'icon' => 'fa-facebook',  'cat' => 'Facebook',   'desc' => 'Brand new Facebook accounts, ready for immediate use'],
            ['name' => 'PVA Facebook Accounts',    'page' => 'facebook.php',    'icon' => 'fa-facebook',  'cat' => 'Facebook',   'desc' => 'Phone verified Facebook accounts with high trust score'],
            ['name' => 'Aged Facebook Accounts',   'page' => 'facebook.php',    'icon' => 'fa-facebook',  'cat' => 'Facebook',   'desc' => '2+ year old Facebook profiles with established history'],
            ['name' => 'Business Facebook Accounts', 'page' => 'facebook.php', 'icon' => 'fa-facebook',  'cat' => 'Facebook',   'desc' => 'Premium business-ready Facebook profiles for marketing'],
            ['name' => 'Fresh Instagram Accounts', 'page' => 'instagram.php',  'icon' => 'fa-instagram', 'cat' => 'Instagram',  'desc' => 'Brand new Instagram accounts, ready for immediate use'],
            ['name' => 'PVA Instagram Accounts',   'page' => 'instagram.php',  'icon' => 'fa-instagram', 'cat' => 'Instagram',  'desc' => 'Phone verified Instagram accounts with high trust score'],
            ['name' => 'Aged Instagram Accounts',  'page' => 'instagram.php',  'icon' => 'fa-instagram', 'cat' => 'Instagram',  'desc' => '2+ year old Instagram profiles with established history'],
            ['name' => 'Business Instagram Accounts', 'page' => 'instagram.php', 'icon' => 'fa-instagram','cat' => 'Instagram',  'desc' => 'Premium business-ready Instagram profiles'],
            ['name' => 'Fresh Twitter Accounts',   'page' => 'twitter.php',     'icon' => 'fa-twitter',  'cat' => 'Twitter',    'desc' => 'Brand new Twitter / X accounts, ready for immediate use'],
            ['name' => 'PVA Twitter Accounts',     'page' => 'twitter.php',     'icon' => 'fa-twitter',  'cat' => 'Twitter',    'desc' => 'Phone verified Twitter / X accounts with high trust score'],
            ['name' => 'Aged Twitter Accounts',    'page' => 'twitter.php',     'icon' => 'fa-twitter',  'cat' => 'Twitter',    'desc' => '2+ year old Twitter / X profiles with established history'],
            ['name' => 'Business Twitter Accounts','page' => 'twitter.php',     'icon' => 'fa-twitter',  'cat' => 'Twitter',    'desc' => 'Premium business-ready Twitter / X profiles'],
            ['name' => 'Fresh Outlook Accounts',   'page' => 'outlook.php',     'icon' => 'fa-envelope', 'cat' => 'Outlook',   'desc' => 'Brand new Outlook accounts, ready for immediate use'],
            ['name' => 'PVA Outlook Accounts',     'page' => 'outlook.php',     'icon' => 'fa-envelope', 'cat' => 'Outlook',   'desc' => 'Phone verified Outlook accounts with maximum security'],
            ['name' => 'Aged Outlook Accounts',    'page' => 'outlook.php',     'icon' => 'fa-envelope', 'cat' => 'Outlook',   'desc' => '2+ year old Outlook accounts with established history'],
            ['name' => 'Business Outlook Accounts','page' => 'outlook.php',     'icon' => 'fa-envelope', 'cat' => 'Outlook',   'desc' => 'Premium business-ready Outlook profiles'],
            ['name' => 'Fresh Threads Accounts',   'page' => 'threads.php',     'icon' => 'fa-threads',  'cat' => 'Threads',   'desc' => 'Brand new Threads accounts, ready for immediate use'],
            ['name' => 'PVA Threads Accounts',     'page' => 'threads.php',     'icon' => 'fa-threads',  'cat' => 'Threads',   'desc' => 'Phone verified Threads accounts with high trust score'],
            ['name' => 'Aged Threads Accounts',    'page' => 'threads.php',     'icon' => 'fa-threads',  'cat' => 'Threads',   'desc' => '2+ year old Threads profiles with established history'],
            ['name' => 'Business Threads Accounts','page' => 'threads.php',     'icon' => 'fa-threads',  'cat' => 'Threads',   'desc' => 'Premium business-ready Threads profiles'],
            ['name' => 'Fresh TikTok Accounts',    'page' => 'tiktok.php',      'icon' => 'fa-tiktok',   'cat' => 'TikTok',    'desc' => 'Brand new TikTok accounts, ready for immediate use'],
            ['name' => 'PVA TikTok Accounts',      'page' => 'tiktok.php',      'icon' => 'fa-tiktok',   'cat' => 'TikTok',    'desc' => 'Phone verified TikTok accounts with high trust score'],
            ['name' => 'Aged TikTok Accounts',     'page' => 'tiktok.php',      'icon' => 'fa-tiktok',   'cat' => 'TikTok',    'desc' => '2+ year old TikTok profiles with established history'],
            ['name' => 'Business TikTok Accounts', 'page' => 'tiktok.php',      'icon' => 'fa-tiktok',   'cat' => 'TikTok',    'desc' => 'Premium business-ready TikTok profiles'],
            ['name' => 'Fresh Telegram Accounts',  'page' => 'telegram.php',    'icon' => 'fa-telegram', 'cat' => 'Telegram',  'desc' => 'Brand new Telegram accounts, ready for immediate use'],
            ['name' => 'PVA Telegram Accounts',    'page' => 'telegram.php',    'icon' => 'fa-telegram', 'cat' => 'Telegram',  'desc' => 'Phone verified Telegram accounts with high trust score'],
            ['name' => 'Aged Telegram Accounts',   'page' => 'telegram.php',    'icon' => 'fa-telegram', 'cat' => 'Telegram',  'desc' => '2+ year old Telegram profiles with established history'],
            ['name' => 'Premium Telegram Accounts','page' => 'telegram.php',    'icon' => 'fa-telegram', 'cat' => 'Telegram',  'desc' => 'Premium business-ready Telegram profiles'],
            ['name' => 'Gmail Package',            'page' => 'services.php',    'icon' => 'fa-google',   'cat' => 'Services',   'desc' => 'Premium Gmail accounts package'],
            ['name' => 'Facebook Package',         'page' => 'services.php',    'icon' => 'fa-facebook', 'cat' => 'Services',   'desc' => 'Premium Facebook accounts package'],
            ['name' => 'Instagram Package',        'page' => 'services.php',    'icon' => 'fa-instagram','cat' => 'Services',   'desc' => 'Premium Instagram accounts package'],
            ['name' => 'Twitter Package',          'page' => 'services.php',    'icon' => 'fa-twitter',  'cat' => 'Services',   'desc' => 'Premium Twitter / X accounts package'],
            ['name' => 'Outlook Package',          'page' => 'services.php',    'icon' => 'fa-envelope', 'cat' => 'Services',   'desc' => 'Premium Outlook accounts package'],
            ['name' => 'TikTok Package',           'page' => 'services.php',    'icon' => 'fa-tiktok',   'cat' => 'Services',   'desc' => 'Premium TikTok accounts package'],
            ['name' => 'Telegram Package',         'page' => 'services.php',    'icon' => 'fa-telegram', 'cat' => 'Services',   'desc' => 'Premium Telegram accounts package'],
        ];

        // Keyword aliases for common searches (maps partial input → search terms to also try)
        $keyword_aliases = [
            'x'       => 'twitter',
            'twit'    => 'twitter',
            'tw'      => 'twitter',
            'insta'   => 'instagram',
            'out'     => 'outlook',
            'thread'  => 'threads',
            'tik'     => 'tiktok',
            'tok'     => 'tiktok',
            'tele'    => 'telegram',
            'tlg'     => 'telegram',
            'g'       => 'gmail',
            'fb'      => 'facebook',
            'yt'      => 'gmail',
        ];

        if ($query) {
            $q = strtolower($query);
            // Collect additional keywords from aliases that match the query
            $extra_terms = [$q];
            foreach ($keyword_aliases as $alias => $target) {
                // If the query contains the alias (e.g. "twit" -> also search "twitter")
                // or the alias contains the query (e.g. "t" -> "twit" -> "twitter")
                if (strpos($q, $alias) !== false || strpos($alias, $q) !== false) {
                    $extra_terms[] = $target;
                    $extra_terms[] = $alias;
                }
            }
            $results = array_filter($all_products, function($p) use ($q, $extra_terms) {
                $name_lower = strtolower($p['name']);
                $cat_lower  = strtolower($p['cat']);
                $desc_lower = strtolower($p['desc']);
                // Direct match on name, category, or description
                if (strpos($name_lower, $q) !== false
                    || strpos($cat_lower, $q) !== false
                    || strpos($desc_lower, $q) !== false) {
                    return true;
                }
                // Match against alias-expanded terms
                foreach ($extra_terms as $term) {
                    if ($term !== $q && strpos($name_lower, $term) !== false) {
                        return true;
                    }
                }
                return false;
            });
        } else {

        if ($query) {
            $q = strtolower($query);
            $results = array_filter($all_products, function($p) use ($q) {
                return strpos(strtolower($p['name']), $q) !== false
                    || strpos(strtolower($p['cat']), $q) !== false
                    || strpos(strtolower($p['desc']), $q) !== false;
            });
        } else {
            $results = $all_products;
        }
        ?>

        <?php if (count($results) > 0): ?>
            <?php foreach ($results as $r): ?>
            <a href="<?= $r['page'] ?>" class="search-result-card">
                <div class="icon"><i class="fab <?= $r['icon'] ?>"></i></div>
                <div class="info">
                    <h3><?= htmlspecialchars($r['name']) ?></h3>
                    <p><?= htmlspecialchars($r['desc']) ?></p>
                </div>
                <span class="badge"><?= htmlspecialchars($r['cat']) ?></span>
            </a>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="no-results">
                <h3>🔍 No results found</h3>
                <p>Try searching for "Gmail", "Facebook", "Instagram", "Twitter", "Outlook", "Threads", "TikTok", "Telegram", "PVA", "Aged", "Business", "Fresh", "Package", or "Services"</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
