<?php
// Enhanced PHP Data Arrays for Dynamic Content
class GDVWebsite {

    private $ventures = [
    [
            'name' => 'NexusTech',
        'sector' => 'Technology & AI',
            'description' => 'Pioneering AI-driven software and cloud services for global enterprises.',
            'link' => '#',
            'icon' => 'fas fa-laptop-code',
            'logo' => 'https://placehold.co/150x40/0a2540/aebfd1?text=NexusTech&font=raleway',
            'color' => '#635bff',
            'stats' => ['50+ AI Models', '200+ Clients', '99.9% Uptime']
        ],
        [
            'name' => 'TerraBuild',
        'sector' => 'Real Estate & Infrastructure',
            'description' => 'Developing sustainable and smart residential and commercial properties.',
            'link' => '#',
            'icon' => 'fas fa-building-user',
            'logo' => 'https://placehold.co/150x40/0a2540/aebfd1?text=TerraBuild&font=raleway',
            'color' => '#00d4aa',
            'stats' => ['100+ Projects', '50M+ Sq Ft', 'LEED Certified']
        ],
        [
            'name' => 'Veridian',
        'sector' => 'Healthcare & Biotech',
            'description' => 'Advancing medical technology and patient care through innovative research.',
            'link' => '#',
            'icon' => 'fas fa-heart-pulse',
            'logo' => 'https://placehold.co/150x40/0a2540/aebfd1?text=Veridian&font=raleway',
            'color' => '#ff6b6b',
            'stats' => ['15+ Patents', '500K+ Patients', 'FDA Approved']
        ],
        [
            'name' => 'Helios Energy',
        'sector' => 'Renewable Energy',
            'description' => 'Harnessing solar and wind power to create a cleaner, sustainable future.',
            'link' => '#',
            'icon' => 'fas fa-solar-panel',
            'logo' => 'https://placehold.co/150x40/0a2540/aebfd1?text=Helios+Energy&font=raleway',
            'color' => '#ffa726',
            'stats' => ['1GW+ Capacity', '75% Efficiency', 'Carbon Neutral']
        ],
        [
            'name' => 'Momentum',
        'sector' => 'Logistics & Supply Chain',
            'description' => 'Tech-enabled supply chain solutions that connect businesses globally.',
            'link' => '#',
            'icon' => 'fas fa-truck-fast',
            'logo' => 'https://placehold.co/150x40/0a2540/aebfd1?text=Momentum&font=raleway',
            'color' => '#4ecdc4',
            'stats' => ['24/7 Tracking', '150+ Countries', '98% On-Time']
        ],
        [
            'name' => 'GDV Capital',
            'sector' => 'Venture Capital',
            'description' => 'Funding the next generation of disruptive startups and bold ideas.',
            'link' => '#',
            'icon' => 'fas fa-cash-register',
            'logo' => 'https://placehold.co/150x40/0a2540/aebfd1?text=GDV+Capital&font=raleway',
            'color' => '#9c88ff',
            'stats' => ['$500M+ AUM', '80+ Startups', '10x Returns']
        ]
    ];

    private $blogPosts = [
    [
        'title' => 'The Future is AI: How NexusTech is Leading the Charge',
        'date' => 'July 28, 2025',
            'excerpt' => 'Discover the latest breakthroughs in artificial intelligence from our leading tech division and how we\'re shaping the future of enterprise solutions.',
        'link' => '#',
            'image' => 'https://images.unsplash.com/photo-1531297484001-80022131f5a1?q=80&w=1420&auto=format&fit=crop',
            'category' => 'Technology',
            'readTime' => '5 min read'
    ],
    [
        'title' => 'Green Building: A Look Inside TerraBuild\'s New Eco-Campus',
        'date' => 'July 22, 2025',
            'excerpt' => 'Sustainability is the foundation of our new commercial projects. See how we\'re revolutionizing construction with eco-friendly innovations.',
        'link' => '#',
            'image' => 'https://images.unsplash.com/photo-1511068798311-33cbf39366e5?q=80&w=1470&auto=format&fit=crop',
            'category' => 'Sustainability',
            'readTime' => '7 min read'
    ],
    [
        'title' => 'Powering Tomorrow: The Rise of Renewable Energy',
        'date' => 'July 15, 2025',
            'excerpt' => 'Helios Energy reports a 40% increase in efficiency from its new generation of solar panels, setting industry benchmarks.',
        'link' => '#',
            'image' => 'https://images.unsplash.com/photo-1624397503442-14838b377f88?q=80&w=1470&auto=format&fit=crop',
            'category' => 'Energy',
            'readTime' => '6 min read'
        ]
    ];

    private $stats = [
        ['number' => '6', 'label' => 'Portfolio Companies', 'prefix' => '', 'suffix' => ''],
        ['number' => '500', 'label' => 'Million+ Revenue', 'prefix' => '$', 'suffix' => 'M+'],
        ['number' => '2500', 'label' => 'Employees', 'prefix' => '', 'suffix' => '+'],
        ['number' => '15', 'label' => 'Years Experience', 'prefix' => '', 'suffix' => '']
    ];

    private $features = [
        [
            'icon' => 'fas fa-rocket',
            'title' => 'Growth Acceleration',
            'description' => 'Strategic scaling through proven methodologies',
            'color' => 'primary'
        ],
        [
            'icon' => 'fas fa-leaf',
            'title' => 'Sustainable Impact',
            'description' => 'ESG-focused investments for long-term value',
            'color' => 'success'
        ],
        [
            'icon' => 'fas fa-network-wired',
            'title' => 'Strategic Networks',
            'description' => 'Access to industry leaders and partnerships',
            'color' => 'warning'
        ],
        [
            'icon' => 'fas fa-chart-line',
            'title' => 'Data-Driven Decisions',
            'description' => 'Analytics and insights for optimal outcomes',
            'color' => 'info'
        ]
    ];

    public function getVentures() { return $this->ventures; }
    public function getBlogPosts() { return $this->blogPosts; }
    public function getStats() { return $this->stats; }
    public function getFeatures() { return $this->features; }
    
    // Additional companies for footer links
    public function getOtherCompanies() {
        return [
    ['name' => 'GDV Capital', 'link' => '#'],
    ['name' => 'Innovate Hub', 'link' => '#']
];
    }

    public function generateGradient($index) {
        $gradients = [
            'linear-gradient(135deg, #667eea 0%, #764ba2 100%)',
            'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)',
            'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)',
            'linear-gradient(135deg, #43e97b 0%, #38f9d7 100%)',
            'linear-gradient(135deg, #fa709a 0%, #fee140 100%)',
            'linear-gradient(135deg, #a8edea 0%, #fed6e3 100%)'
        ];
        return $gradients[$index % count($gradients)];
    }

    public function formatDate($date) {
        return date('M j, Y', strtotime($date));
    }
}

$gdv = new GDVWebsite();
$ventures = $gdv->getVentures();
$blogPosts = $gdv->getBlogPosts();
$stats = $gdv->getStats();
$features = $gdv->getFeatures();
$otherCompanies = $gdv->getOtherCompanies();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gee Dee Ventures Private Limited - Building Tomorrow's Market Leaders</title>
    <meta name="description" content="Gee Dee Ventures - Strategic investments across high-growth sectors. We partner with visionary companies to create sustainable value and drive innovation.">
    <meta name="keywords" content="venture capital, private equity, investments, portfolio companies, technology, healthcare, renewable energy, Gee Dee Ventures, India">
    <meta name="author" content="Gee Dee Ventures Private Limited">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🏢</text></svg>">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Gee Dee Ventures - Building Tomorrow's Market Leaders">
    <meta property="og:description" content="Strategic investments across high-growth sectors that are shaping tomorrow's economy.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://gdventures.com">
    <meta property="og:image" content="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=1200&auto=format&fit=crop">
    <meta property="og:site_name" content="Gee Dee Ventures">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Gee Dee Ventures - Building Tomorrow's Market Leaders">
    <meta name="twitter:description" content="Strategic investments across high-growth sectors that are shaping tomorrow's economy.">
    <meta name="twitter:image" content="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=1200&auto=format&fit=crop">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Gee Dee Ventures Private Limited",
        "description": "Strategic investments across high-growth sectors that are shaping tomorrow's economy.",
        "url": "https://gdventures.com",
        "logo": "https://placehold.co/200x200/0a2540/ffffff?text=GDV&font=raleway",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Venture Towers, MG Road",
            "addressLocality": "Mangaluru",
            "addressRegion": "Karnataka",
            "postalCode": "575001",
            "addressCountry": "IN"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+91-123-456-7890",
            "contactType": "customer service",
            "email": "contact@gdventures.com"
        },
        "sameAs": [
            "https://linkedin.com/company/gdventures",
            "https://twitter.com/gdventures"
        ]
    }
    </script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --c-primary: #0a0a0a;
            --c-secondary: #635bff;
            --c-accent: #00d4aa;
            --c-text: #1a1a1a;
            --c-text-muted: #6b7280;
            --c-bg-light: #fafafa;
            --c-border: #e5e7eb;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }

        * { box-sizing: border-box; }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: #fff;
            color: var(--c-text);
            line-height: 1.6;
            font-weight: 400;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: var(--c-secondary); border-radius: 4px; }

        /* Navigation */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding: 1.2rem 0;
            box-shadow: var(--shadow-sm);
        }
        .navbar-brand {
            font-weight: 800;
            color: var(--c-primary);
            font-size: 1.5rem;
            letter-spacing: -0.02em;
        }
        .nav-link {
            font-weight: 500;
            color: var(--c-text) !important;
            padding: 0.5rem 1rem !important;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .nav-link:hover {
            background: rgba(99, 91, 255, 0.1);
            color: var(--c-secondary) !important;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=1920&auto=format&fit=crop') no-repeat center center;
            background-size: cover;
            opacity: 0.4;
            z-index: 1;
        }
        
        .hero::after {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.8) 0%, rgba(118, 75, 162, 0.8) 100%);
            z-index: 2;
        }

        .hero-content {
            position: relative;
            z-index: 3;
        }

        .hero-badge {
            display: inline-block;
        }

        .hero-title {
            font-weight: 800;
            font-size: clamp(2.5rem, 5vw, 4rem);
            color: #fff;
            line-height: 1.1;
            letter-spacing: -0.02em;
            margin-bottom: 1.5rem;
        }

        .text-gradient {
            background: linear-gradient(135deg, #ffd700, #ffed4e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.6;
            margin-bottom: 2rem;
            max-width: 500px;
        }

        .hero-cta {
            margin-bottom: 2rem;
        }

        .hero-social-proof {
            margin-top: 2rem;
        }

        .rating {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .stars {
            margin-bottom: 0.5rem;
        }

        .rating-text {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
        }

        .trust-badges img {
            height: 30px;
            opacity: 0.8;
        }

        .hero-visual {
            position: relative;
            z-index: 3;
        }

        .hero-image-container {
            position: relative;
            text-align: center;
            min-height: 400px;
        }

        .floating-card {
            position: absolute;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            gap: 0.75rem;
            min-width: 150px;
        }

        .card-1 {
            top: 10%;
            left: -10%;
            animation: float 4s ease-in-out infinite;
        }

        .card-2 {
            bottom: 20%;
            right: -10%;
            animation: float 4s ease-in-out infinite 2s;
        }

        .card-icon {
            font-size: 1.5rem;
        }

        .card-content {
            flex: 1;
        }

        .card-title {
            font-size: 0.8rem;
            color: #666;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .card-value {
            font-size: 1.2rem;
            font-weight: 700;
            color: #333;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        /* Buttons */
        .btn {
            font-weight: 600;
            padding: 16px 32px;
            border-radius: 12px;
            border: none;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }
        .btn-primary {
            background: var(--c-secondary);
            color: white;
            box-shadow: 0 4px 15px rgba(99, 91, 255, 0.4);
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(99, 91, 255, 0.6);
            color: white;
        }
        .btn-outline-primary {
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            background: rgba(255, 255, 255, 0.1);
        }
        .btn-outline-primary:hover {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            transform: translateY(-2px);
        }
        
        .btn-outline-light {
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            background: rgba(255, 255, 255, 0.1);
        }
        .btn-outline-light:hover {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            transform: translateY(-2px);
        }

        /* Responsive Hero */
        @media (max-width: 991.98px) {
            .hero {
                text-align: center;
                padding: 4rem 0;
            }
            
            .hero-title {
                font-size: clamp(2rem, 4vw, 3rem);
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
                margin: 0 auto 2rem auto;
            }
            
            .hero-cta {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero-cta .btn {
                width: 100%;
                max-width: 300px;
                margin: 0 auto;
            }
            
            .hero-social-proof {
                justify-content: center;
            }
            
            .floating-card {
                display: none;
            }
        }

        /* Stats Section */
        .stats-section {
            background: var(--c-primary);
            color: white;
            padding: 4rem 0;
        }
        .stat-item { text-align: center; padding: 2rem 1rem; }
        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: var(--c-accent);
            display: block;
            line-height: 1;
        }
        .stat-label {
            font-size: 0.9rem;
            opacity: 0.8;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 0.5rem;
        }

        /* Sections */
        .section { padding: 6rem 0; }
        .section-title {
            font-weight: 800;
            color: var(--c-primary);
            font-size: clamp(2rem, 4vw, 3rem);
            letter-spacing: -0.02em;
        }
        .section-subtitle {
            font-size: 1.2rem;
            color: var(--c-text-muted);
            max-width: 700px;
            margin: 1.5rem auto 0 auto;
        }

        /* Venture Cards */
        .venture-card {
            background: white;
            border-radius: 20px;
            padding: 3rem 2rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid var(--c-border);
            position: relative;
            overflow: hidden;
            height: 100%;
            text-decoration: none;
            color: inherit;
        }
        .venture-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 4px;
            background: var(--gradient, linear-gradient(135deg, #667eea 0%, #764ba2 100%));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }
        .venture-card:hover {
            text-decoration: none;
            color: inherit;
            transform: translateY(-12px);
            box-shadow: var(--shadow-xl);
            border-color: transparent;
        }
        .venture-card:hover::before { transform: scaleX(1); }
        
        .venture-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .venture-card-title {
            font-weight: 700;
            color: var(--c-primary);
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }
        .venture-sector {
            color: var(--c-text-muted);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 1rem;
        }
        .venture-stats {
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--c-border);
        }
        .venture-stat {
            display: inline-block;
            background: var(--c-bg-light);
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            margin: 0.25rem;
            color: var(--c-text-muted);
        }

        /* Blog Cards */
        .blog-card {
            border-radius: 20px;
            overflow: hidden;
            background: white;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid var(--c-border);
            text-decoration: none;
            color: inherit;
            height: 100%;
        }
        .blog-card:hover {
            text-decoration: none;
            color: inherit;
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
            border-color: transparent;
        }
        .blog-card .card-img-top {
            height: 250px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        .blog-card:hover .card-img-top { transform: scale(1.05); }
        .blog-card .card-body { padding: 2rem; }
        .blog-card .card-title {
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 1rem;
        }
        .blog-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }
        .blog-category {
            background: var(--c-secondary);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }
        .blog-date {
            color: var(--c-text-muted);
            font-size: 0.85rem;
        }

        /* Features Section */
        .feature-item {
            text-align: center;
            padding: 2rem 1rem;
        }
        .feature-icon {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem auto;
            font-size: 2rem;
        }

        /* Footer */
        .footer {
            background: var(--c-primary);
            color: #9ca3af;
            position: relative;
        }
        .footer::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--c-accent), transparent);
        }
        .footer h5 {
            color: #fff;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        .footer a {
            color: #9ca3af;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .footer a:hover {
            color: var(--c-accent);
        }
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            margin-right: 1rem;
            transition: all 0.3s ease;
        }
        .social-links a:hover {
            background: var(--c-accent);
            color: white;
            transform: translateY(-2px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero { padding: 8rem 0 6rem 0; }
            .section { padding: 4rem 0; }
            .venture-card { padding: 2rem 1.5rem; }
            .stat-number { font-size: 2.5rem; }
        }

        /* Animation Classes */
        .fade-in { opacity: 0; animation: fadeIn 0.6s ease forwards; }
        .fade-in-up { opacity: 0; transform: translateY(30px); animation: fadeInUp 0.6s ease forwards; }
        .fade-in-left { opacity: 0; transform: translateX(-30px); animation: fadeInLeft 0.6s ease forwards; }
        .fade-in-right { opacity: 0; transform: translateX(30px); animation: fadeInRight 0.6s ease forwards; }

        @keyframes fadeIn {
            to { opacity: 1; }
        }
        @keyframes fadeInUp {
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInLeft {
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes fadeInRight {
            to { opacity: 1; transform: translateX(0); }
        }

        /* Animation Delays */
        <?php for($i = 1; $i <= 10; $i++): ?>
        .delay-<?php echo $i; ?> { animation-delay: <?php echo $i * 0.1; ?>s; }
        <?php endfor; ?>
        
        /* Loading state */
        body:not(.loaded) {
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        body.loaded {
            opacity: 1;
        }
        
        /* Enhanced focus states for accessibility */
        .btn:focus,
        .nav-link:focus,
        .form-control:focus {
            outline: 2px solid var(--c-secondary);
            outline-offset: 2px;
        }
        
        /* Improved card hover effects */
        .venture-card:hover .venture-icon {
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }
        
        /* Better mobile navigation */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background: rgba(255, 255, 255, 0.98);
                backdrop-filter: blur(20px);
                border-radius: 12px;
                margin-top: 1rem;
                padding: 1rem;
                box-shadow: var(--shadow-lg);
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#hero">Gee Dee Ventures</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#ventures">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#overview">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#blog">Insights</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="hero" class="hero">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6 fade-in-left">
        <div class="hero-content">
                        <div class="hero-badge mb-4">
                            <span class="badge bg-light text-primary px-3 py-2 rounded-pill">
                                <i class="fas fa-star me-2"></i>Trusted by 10,000+ Companies
                            </span>
                        </div>
                        <h1 class="hero-title">
                            Building Tomorrow's 
                            <span class="text-gradient">Market Leaders</span>
                        </h1>
                        <p class="hero-subtitle">
                            Strategic investments across high-growth sectors. We partner with visionary companies 
                            to create sustainable value, drive innovation, and shape the future of business.
                        </p>
                        <div class="hero-cta mb-4">
                            <a href="#ventures" class="btn btn-primary btn-lg me-3">
                                <i class="fas fa-chart-line me-2"></i>Explore Portfolio
                            </a>
                            <a href="#overview" class="btn btn-outline-primary btn-lg">
                                <i class="fas fa-play me-2"></i>Our Story
                            </a>
                        </div>
                        <div class="hero-social-proof">
                            <div class="d-flex align-items-center gap-4">
                                <div class="rating">
                                    <div class="stars">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                    <span class="rating-text">4.9/5 from 2,500+ reviews</span>
                                </div>
                                <div class="trust-badges">
                                    <img src="https://placehold.co/80x30/ffffff/666666?text=SSL+Secure" alt="SSL Secure" class="me-2">
                                    <img src="https://placehold.co/80x30/ffffff/666666?text=GDPR+Ready" alt="GDPR Ready">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 fade-in-right">
                    <div class="hero-visual">
                        <div class="hero-image-container">
                            <div class="floating-card card-1">
                                <div class="card-icon">
                                    <i class="fas fa-chart-line text-success"></i>
                                </div>
                                <div class="card-content">
                                    <div class="card-title">Portfolio Growth</div>
                                    <div class="card-value">+156%</div>
                                </div>
                            </div>
                            <div class="floating-card card-2">
                                <div class="card-icon">
                                    <i class="fas fa-building text-primary"></i>
                                </div>
                                <div class="card-content">
                                    <div class="card-title">Companies</div>
                                    <div class="card-value">6+</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <?php foreach($stats as $index => $stat): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item fade-in-up delay-<?php echo $index + 1; ?>">
                        <span class="stat-number">
                            <?php echo $stat['prefix'] . $stat['number'] . $stat['suffix']; ?>
                        </span>
                        <div class="stat-label"><?php echo htmlspecialchars($stat['label']); ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
                </div>
        </div>
    </section>

    <main>
        <section id="ventures" class="section bg-light">
            <div class="container">
                <div class="text-center mb-5 pb-3 fade-in-up">
                    <h2 class="section-title">Our Investment Portfolio</h2>
                    <p class="section-subtitle">Strategic investments across high-growth sectors that are shaping tomorrow's economy.</p>
                </div>
                <div class="row g-4">
                    <?php foreach($ventures as $index => $venture): ?>
                    <div class="col-lg-4 col-md-6">
                        <a href="<?php echo htmlspecialchars($venture['link']); ?>" 
                           class="venture-card text-center fade-in-up delay-<?php echo $index + 1; ?>"
                           style="--gradient: <?php echo $gdv->generateGradient($index); ?>">
                            <div class="venture-icon">
                                <i class="<?php echo htmlspecialchars($venture['icon']); ?>"></i>
                            </div>
                            <h4 class="venture-card-title"><?php echo htmlspecialchars($venture['name']); ?></h4>
                            <div class="venture-sector"><?php echo htmlspecialchars($venture['sector']); ?></div>
                            <p class="text-muted mb-3"><?php echo htmlspecialchars($venture['description']); ?></p>
                            
                            <div class="venture-stats">
                                <?php foreach($venture['stats'] as $stat): ?>
                                <span class="venture-stat"><?php echo htmlspecialchars($stat); ?></span>
                                <?php endforeach; ?>
                    </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="overview" class="section">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 fade-in-left">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=1484&auto=format&fit=crop" 
                                 class="img-fluid rounded-4 shadow-lg" alt="Our team in action">
                </div>
                    </div>
                    <div class="col-lg-6 fade-in-right">
                        <h2 class="section-title mb-4">Where Vision Meets Execution</h2>
                        <p class="section-subtitle mb-4">We don't just invest capital—we forge partnerships. Our hands-on approach combines strategic guidance, operational expertise, and cutting-edge resources to accelerate growth and unlock potential.</p>
                        
                <div class="row g-4">
                            <?php foreach($features as $index => $feature): ?>
                            <div class="col-sm-6">
                                <div class="feature-item text-start">
                                    <div class="feature-icon bg-<?php echo $feature['color']; ?> bg-opacity-10">
                                        <i class="<?php echo $feature['icon']; ?> text-<?php echo $feature['color']; ?>"></i>
                            </div>
                                    <h6 class="fw-bold mb-2"><?php echo htmlspecialchars($feature['title']); ?></h6>
                                    <p class="text-muted mb-0"><?php echo htmlspecialchars($feature['description']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="blog" class="section bg-light">
            <div class="container">
                <div class="text-center mb-5 pb-3 fade-in-up">
                    <h2 class="section-title">Latest Insights</h2>
                    <p class="section-subtitle">Thought leadership and updates from across our portfolio ecosystem.</p>
                </div>
                <div class="row g-4">
                    <?php foreach($blogPosts as $index => $post): ?>
                    <div class="col-lg-4 col-md-6">
                        <article class="blog-card fade-in-up delay-<?php echo $index + 1; ?>">
                            <div class="position-relative overflow-hidden">
                                <img src="<?php echo htmlspecialchars($post['image']); ?>" 
                                     class="card-img-top" alt="<?php echo htmlspecialchars($post['title']); ?>">
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-start justify-content-between p-3">
                                    <span class="blog-category"><?php echo htmlspecialchars($post['category']); ?></span>
                                    <span class="badge bg-dark bg-opacity-75 text-white"><?php echo htmlspecialchars($post['readTime']); ?></span>
                            </div>
                        </div>
                            <div class="card-body d-flex flex-column">
                                <div class="blog-meta">
                                    <span class="blog-date"><?php echo $gdv->formatDate($post['date']); ?></span>
                                </div>
                                <h5 class="card-title"><?php echo htmlspecialchars($post['title']); ?></h5>
                                <p class="text-muted flex-grow-1"><?php echo htmlspecialchars($post['excerpt']); ?></p>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <a href="<?php echo htmlspecialchars($post['link']); ?>" class="btn btn-outline-primary btn-sm">
                                        Read Article <i class="fas fa-arrow-right ms-1"></i>
                                    </a>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-link btn-sm p-0" title="Share">
                                            <i class="fas fa-share-alt text-muted"></i>
                                        </button>
                                        <button class="btn btn-link btn-sm p-0" title="Bookmark">
                                            <i class="fas fa-bookmark text-muted"></i>
                                        </button>
                                    </div>
                            </div>
                        </div>
                        </article>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <!-- View All Posts Button -->
                <div class="text-center mt-5 fade-in-up delay-4">
                    <a href="#" class="btn btn-primary btn-lg">
                        View All Insights <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="section" style="background: linear-gradient(135deg, var(--c-primary) 0%, #1e293b 100%);">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8 fade-in-up">
                        <h2 class="section-title text-white mb-4">Ready to Partner With Us?</h2>
                        <p class="section-subtitle text-white-50 mb-5">
                            Whether you're a startup looking for investment or an established company seeking strategic partnership, 
                            we're here to help you achieve your next level of growth.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                            <a href="#contact" class="btn btn-primary btn-lg px-5">
                                <i class="fas fa-handshake me-2"></i>
                                Partner With Us
                            </a>
                            <a href="#" class="btn btn-outline-light btn-lg px-5">
                                <i class="fas fa-download me-2"></i>
                                Download Portfolio
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="contact" class="footer pt-5 pb-4">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-4 mb-4 mb-lg-0 fade-in-up">
                    <h5 class="mb-4">Gee Dee Ventures</h5>
                    <p class="mb-4">Building tomorrow's market leaders through strategic partnerships and innovative investments.</p>
                    <div class="mb-4">
                        <p class="mb-2"><strong>Headquarters</strong></p>
                        <address class="text-muted mb-0">
                    Venture Towers, MG Road<br>
                            Mangaluru, Karnataka 575001<br>
                            India
                        </address>
                </div>
                    <div class="social-links">
                        <a href="#" aria-label="LinkedIn" title="Follow us on LinkedIn">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" aria-label="Twitter" title="Follow us on Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" aria-label="Facebook" title="Follow us on Facebook">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" aria-label="Instagram" title="Follow us on Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-6 mb-4 mb-lg-0 fade-in-up delay-1">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#ventures">Portfolio</a></li>
                        <li class="mb-2"><a href="#overview">About Us</a></li>
                        <li class="mb-2"><a href="#blog">Insights</a></li>
                        <li class="mb-2"><a href="#">Careers</a></li>
                        <li class="mb-2"><a href="#">Press Kit</a></li>
                        <li class="mb-2"><a href="#">ESG Report</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-6 mb-4 mb-lg-0 fade-in-up delay-2">
                    <h5>Contact & Support</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-envelope me-2 text-muted"></i>
                            <a href="mailto:contact@gdventures.com">contact@gdventures.com</a>
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-phone me-2 text-muted"></i>
                            <a href="tel:+911234567890">+91 123 456 7890</a>
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-building me-2 text-muted"></i>
                            <a href="#">Investor Relations</a>
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-users me-2 text-muted"></i>
                            <a href="#">Partnership Inquiries</a>
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-newspaper me-2 text-muted"></i>
                            <a href="#">Media Inquiries</a>
                        </li>
                    </ul>
                    </div>
                
                <div class="col-lg-3 fade-in-up delay-3">
                    <h5>Stay Updated</h5>
                    <p class="text-muted mb-3">Get the latest insights and updates from our portfolio companies.</p>
                    <form class="newsletter-form mb-4" method="POST" action="#" onsubmit="return handleNewsletter(event)">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Enter your email" required
                                   style="background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); color: white;">
                            <button class="btn btn-outline-light" type="submit">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                            <label class="form-check-label small text-muted" for="agreeTerms">
                                I agree to receive updates and marketing communications
                            </label>
            </div>
                    </form>
                    
                    <!-- Quick Links -->
                    <div class="mb-3">
                        <h6 class="text-white mb-2">Quick Access</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="#" class="btn btn-sm btn-outline-light">Investment Criteria</a>
                            <a href="#" class="btn btn-sm btn-outline-light">Portfolio Login</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <hr class="my-4" style="border-color: rgba(255,255,255,0.1); opacity: 0.3;">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="text-muted small mb-0">
                        &copy; <?php echo date("Y"); ?> Gee Dee Ventures Private Limited. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="d-flex flex-wrap justify-content-md-end gap-3">
                        <a href="#" class="text-muted small">Privacy Policy</a>
                        <a href="#" class="text-muted small">Terms of Service</a>
                        <a href="#" class="text-muted small">Cookie Policy</a>
                        <a href="#" class="text-muted small">Accessibility</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#hero" class="btn btn-primary position-fixed bottom-0 end-0 m-4 rounded-circle back-to-top" 
       style="width: 50px; height: 50px; display: none; z-index: 1000; text-decoration: none;">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Show/hide back to top button
        window.addEventListener('scroll', function() {
            const backToTopBtn = document.querySelector('.back-to-top');
            if (backToTopBtn) {
                if (window.scrollY > 300) {
                    backToTopBtn.style.display = 'flex';
                    backToTopBtn.style.alignItems = 'center';
                    backToTopBtn.style.justifyContent = 'center';
                } else {
                    backToTopBtn.style.display = 'none';
                }
            }
        });

        // Newsletter form handling
        function handleNewsletter(event) {
            event.preventDefault();
            const form = event.target;
            const button = form.querySelector('button');
            const input = form.querySelector('input[type="email"]');
            
            // Simple email validation
            const email = input.value.trim();
            if (!email || !email.includes('@') || !email.includes('.')) {
                input.style.borderColor = '#ff6b6b';
                input.focus();
                setTimeout(() => {
                    input.style.borderColor = '';
                }, 2000);
                return false;
            }
            
            // Show success state
            const originalText = button.innerHTML;
            button.innerHTML = '<i class="fas fa-check"></i>';
            button.disabled = true;
            button.classList.add('btn-success');
            button.classList.remove('btn-outline-light');
            
            // Reset form after 3 seconds
            setTimeout(() => {
                button.innerHTML = originalText;
                button.disabled = false;
                button.classList.remove('btn-success');
                button.classList.add('btn-outline-light');
                form.reset();
            }, 3000);
            
            return false;
        }

        // Add animation classes when elements come into view
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0) translateX(0)';
                }
            });
        }, observerOptions);

        // Observe all animated elements
        document.querySelectorAll('.fade-in, .fade-in-up, .fade-in-left, .fade-in-right').forEach(el => {
            observer.observe(el);
        });

        // Enhanced hover effects for cards
        document.querySelectorAll('.venture-card, .blog-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = this.classList.contains('venture-card') ? 
                    'translateY(-12px) scale(1.02)' : 'translateY(-8px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Add loading state to buttons
        document.querySelectorAll('a[href="#"]').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const originalText = this.innerHTML;
                this.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Loading...';
                
                setTimeout(() => {
                    this.innerHTML = originalText;
                }, 2000);
            });
        });

        // Performance optimization for scroll events
        let ticking = false;
        function handleScroll() {
            if (!ticking) {
                requestAnimationFrame(() => {
                    // Add navbar background on scroll
                    const navbar = document.querySelector('.navbar');
                    if (navbar) {
                        if (window.scrollY > 100) {
                            navbar.style.background = 'rgba(255, 255, 255, 0.98)';
                            navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
                        } else {
                            navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                            navbar.style.boxShadow = '0 1px 2px 0 rgba(0, 0, 0, 0.05)';
                        }
                    }
                    ticking = false;
                });
                ticking = true;
            }
        }

        window.addEventListener('scroll', handleScroll);

        // Close mobile menu when clicking on nav links
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                const navbar = document.querySelector('.navbar-collapse');
                if (navbar && navbar.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(navbar);
                    bsCollapse.hide();
                }
            });
        });

        // Add ripple effect to buttons
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function(e) {
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.6);
                    transform: scale(0);
                    animation: ripple 0.6s linear;
                    width: ${size}px;
                    height: ${size}px;
                    left: ${x}px;
                    top: ${y}px;
                    pointer-events: none;
                `;
                
                this.style.position = 'relative';
                this.style.overflow = 'hidden';
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });

        // Add ripple animation
        const rippleStyle = document.createElement('style');
        rippleStyle.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(rippleStyle);

        console.log('Gee Dee Ventures website loaded successfully - PHP Version');
        
        // Performance monitoring
        window.addEventListener('load', function() {
            const loadTime = performance.now();
            console.log(`Page loaded in ${loadTime.toFixed(2)}ms`);
        });
        
        // Enhanced error handling
        window.addEventListener('error', function(e) {
            console.error('JavaScript error:', e.error);
        });
        
        // Add loading states for better UX
        document.addEventListener('DOMContentLoaded', function() {
            document.body.classList.add('loaded');
        });
    </script>
</body>
</html>