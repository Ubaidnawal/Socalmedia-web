<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <title>Premium Gmail Accounts – Article</title>
    <!-- Google Fonts + Font Awesome -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        /* ----- Article Wrapper (now truly fluid on mobile) ----- */
        .article-wrapper {
            max-width: 880px;
            width: 100%;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 40px;
            padding: 50px 60px;
            box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.08);
            transition: all 0.2s;
        }

        /* ----- Typography ----- */
        .article-wrapper h1 {
            font-size: 2.8rem;
            font-weight: 800;
            line-height: 1.2;
            color: #023b45;
            margin-bottom: 0.5rem;
            letter-spacing: -0.02em;
        }
        .article-wrapper h1 span {
            color: #B7A08B;
        }

        .article-wrapper .lead {
            font-size: 1.2rem;
            color: #4a5b74;
            margin-bottom: 2.5rem;
            border-left: 4px solid #B7A08B;
            padding-left: 20px;
        }

        .article-wrapper h2 {
            font-size: 1.9rem;
            font-weight: 700;
            color: #023b45;
            margin-top: 2.8rem;
            margin-bottom: 0.8rem;
            letter-spacing: -0.01em;
        }

        .article-wrapper p {
            font-size: 1.05rem;
            color: #2d3a4f;
            margin-bottom: 1.5rem;
        }

        /* ----- Lists with icons ----- */
        .check-list {
            list-style: none;
            padding: 0;
            margin: 1.5rem 0 2rem 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 12px 20px;
        }
        .check-list li {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 500;
            color: #1e2a3a;
            background: #f8f6f2;
            padding: 10px 18px;
            border-radius: 60px;
            transition: background 0.2s;
        }
        .check-list li i {
            color: #B7A08B;
            font-size: 1.2rem;
            width: 1.4rem;
            text-align: center;
        }
        .check-list li:hover {
            background: #f0ebe4;
        }

        .dot-list {
            list-style: none;
            padding: 0;
            margin: 1.2rem 0 1.8rem 0;
        }
        .dot-list li {
            padding: 8px 0 8px 28px;
            position: relative;
            font-weight: 400;
            color: #2d3a4f;
        }
        .dot-list li::before {
            content: "●";
            color: #B7A08B;
            font-size: 1.2rem;
            position: absolute;
            left: 0;
            top: 6px;
        }

        /* ----- CTA Button ----- */
        .cta-section {
            margin-top: 2.8rem;
            padding-top: 2rem;
            border-top: 2px solid #f0ebe4;
            text-align: center;
        }
        .cta-section p:last-of-type {
            font-weight: 600;
            color: #023b45;
            font-size: 1.1rem;
            margin-bottom: 1.2rem;
        }
        .btn-premium {
            display: inline-block;
            background: #023b45;
            color: #fff;
            padding: 14px 40px;
            border-radius: 60px;
            font-weight: 700;
            font-size: 1.1rem;
            text-decoration: none;
            transition: all 0.25s ease;
            box-shadow: 0 8px 18px rgba(2, 59, 69, 0.15);
        }
        .btn-premium:hover {
            background: #024c58;
            transform: scale(1.02);
            box-shadow: 0 12px 24px rgba(2, 59, 69, 0.2);
        }

        /* ----- Tagline ----- */
        .tagline {
            margin-top: 2.5rem;
            text-align: center;
            font-size: 1.15rem;
            font-weight: 600;
            color: #B7A08B;
            letter-spacing: 0.5px;
        }

        /* ----- RESPONSIVE FIXES (mobile-first, truly fluid) ----- */
        /* Tablet and smaller */
        @media (max-width: 768px) {
            body {
                padding: 20px 0; /* remove side padding so wrapper touches edges */
                background: #FEFAF7;
            }
            .article-wrapper {
                max-width: 100%;
                border-radius: 0; /* optional: remove rounded corners on mobile for full-width feel */
                padding: 30px 24px;
                box-shadow: none; /* optional: remove shadow for cleaner full-width */
            }
            .article-wrapper h1 {
                font-size: 2.1rem;
            }
            .article-wrapper .lead {
                font-size: 1rem;
                padding-left: 14px;
            }
            .article-wrapper h2 {
                font-size: 1.6rem;
                margin-top: 2rem;
            }
            .article-wrapper p {
                font-size: 0.98rem;
            }
            .check-list {
                grid-template-columns: 1fr;
                gap: 8px;
            }
            .check-list li {
                padding: 8px 14px;
                font-size: 0.95rem;
            }
            .dot-list li {
                padding-left: 24px;
                font-size: 0.95rem;
            }
            .btn-premium {
                padding: 12px 28px;
                font-size: 1rem;
                width: 100%;
                text-align: center;
                box-sizing: border-box;
            }
            .tagline {
                font-size: 1rem;
            }
        }

        /* Mobile small (320px – 480px) */
        @media (max-width: 480px) {
            body {
                padding: 0; /* full bleed */
            }
            .article-wrapper {
                padding: 20px 16px;
                border-radius: 0;
            }
            .article-wrapper h1 {
                font-size: 1.8rem;
            }
            .article-wrapper h2 {
                font-size: 1.4rem;
            }
            .check-list li {
                font-size: 0.9rem;
                padding: 8px 12px;
            }
            .article-wrapper .lead {
                font-size: 0.95rem;
                padding-left: 12px;
            }
            .btn-premium {
                font-size: 0.95rem;
                padding: 12px 20px;
            }
            .tagline {
                font-size: 0.9rem;
            }
        }

        /* Large screens – keep container width and restore shadow/radius */
        @media (min-width: 769px) {
            .article-wrapper {
                border-radius: 40px;
                box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.08);
            }
        }
        @media (min-width: 1441px) {
            .article-wrapper {
                max-width: 1000px;
            }
        }
    </style>
</head>
<body>

<div class="article-wrapper">

    <!-- Main Heading -->
    <h1>Premium <span>Gmail Accounts</span> for Serious Digital Growth</h1>

    <!-- Intro paragraph (lead) -->
    <p class="lead">
        In today's digital world, having access to reliable online accounts can make a significant difference. Whether you're managing projects, handling communications, supporting clients, or growing your online presence, quality Gmail accounts help create a smoother and more efficient workflow.
    </p>

    <p>
        Our focus is on providing dependable account solutions backed by professional support and a customer-first approach. Every order is handled with attention to quality, reliability, and customer satisfaction.
    </p>

    <!-- Why Customers Choose Us -->
    <h2>Why Customers Choose Our Service</h2>
    <ul class="check-list">
        <li><i class="fas fa-check-circle"></i> Fast and simple ordering process</li>
        <li><i class="fas fa-check-circle"></i> Responsive customer support</li>
        <li><i class="fas fa-check-circle"></i> Reliable account solutions</li>
        <li><i class="fas fa-check-circle"></i> Bulk order availability</li>
        <li><i class="fas fa-check-circle"></i> Smooth delivery experience</li>
        <li><i class="fas fa-check-circle"></i> Customer-focused service</li>
    </ul>

    <!-- Built for Modern Needs -->
    <h2>Built for Modern Digital Needs</h2>
    <p>
        From entrepreneurs and freelancers to agencies and growing businesses, customers need solutions that are efficient, dependable, and easy to manage. That's why we focus on providing a streamlined experience from order placement to delivery.
    </p>

    <!-- A Service You Can Trust -->
    <h2>A Service You Can Trust</h2>
    <p>Thousands of customers choose professional account solutions because they value:</p>
    <ul class="dot-list">
        <li>Reliability</li>
        <li>Convenience</li>
        <li>Consistent support</li>
        <li>Efficient workflows</li>
        <li>Long-term usability</li>
    </ul>
    <p>
        Our goal is to provide a service experience that is simple, transparent, and customer-friendly.
    </p>

    <!-- Customer Satisfaction -->
    <h2>Customer Satisfaction Comes First</h2>
    <p>
        We understand that every customer has unique requirements. Our team is committed to delivering a professional experience with clear communication and ongoing support whenever assistance is needed.
    </p>

    <!-- Call to Action -->
    <div class="cta-section">
        <h2 style="margin-top: 0;">Ready to Get Started?</h2>
        <p>
            Explore our available options and discover why so many customers trust our platform for their digital account needs. Experience professional service, responsive support, and a commitment to quality every step of the way.
        </p>
        <p>
            <a href="#" class="btn-premium"><i class="fas fa-arrow-right" style="margin-right: 10px;"></i> View Gmail Accounts</a>
        </p>
    </div>

    <!-- Final Tagline -->
    <div class="tagline">
        <i class="fas fa-star" style="color: #B7A08B; margin-right: 6px;"></i>
        Professional Service. Reliable Solutions. Customer-Focused Support.
    </div>

</div>
<?php include 'footer.php'; ?>
</body>
</html>