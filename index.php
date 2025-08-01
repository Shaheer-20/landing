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

   

        /* Hero Section */
        .hero {
            min-height: 100vh;
            background: none;
            position: relative;
            overflow: hidden;
        }
        
        /* Ensure carousel content is properly positioned */
        .hero .carousel {
            position: relative;
            z-index: 1;
        }
        
        .hero .carousel-inner {
            position: relative;
            z-index: 1;
        }
        
        .hero .carousel-item {
            position: relative;
            z-index: 1;
            transition: all 0.5s ease;
        }
        
        /* Smooth slide transitions for carousel */
        .carousel-item {
            transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .carousel-item.active,
        .carousel-item-next,
        .carousel-item-prev {
            display: block;
        }
        
        .carousel-item-next:not(.carousel-item-start),
        .active.carousel-item-end {
            transform: translateX(100%);
        }
        
        .carousel-item-prev:not(.carousel-item-end),
        .active.carousel-item-start {
            transform: translateX(-100%);
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=1920&auto=format&fit=crop') no-repeat center center;
            background-size: cover;
            filter: blur(8px) brightness(0.7); /* Add blur and darken for contrast */
            z-index: 0;
        }
        
        /* Remove the old background since we're using carousel backgrounds */
        .hero::before {
            display: none;
        }
        
        /* Ensure smooth carousel transitions */
        .carousel {
            overflow: hidden;
        }
        
        .carousel-inner {
            transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Ensure all carousel items have consistent dimensions */
        .carousel-item {
            width: 100%;
            height: 100%;
        }
        
        /* Smooth transitions for hero content elements */
        .hero-title,
        .hero-subtitle,
        .hero-card {
            will-change: opacity, transform;
        }
        
        /* Ensure consistent positioning for all carousel items */
        .carousel-item .row {
            min-height: 400px;
            align-items: center;
            padding: 2rem 0;
        }
        
        .carousel-item .col-lg-6 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 1rem;
        }

        .hero-badge {
            display: inline-block;
        }

        .hero-title {
            font-weight: 800;
            font-size: clamp(2rem, 4vw, 3.5rem);
            color: #fff;
            line-height: 1.2;
            letter-spacing: -0.02em;
            margin-bottom: 1.5rem;
            overflow-wrap: break-word;
            word-wrap: break-word;
        }

        .text-gradient {
            background: linear-gradient(135deg, #ffd700, #ffed4e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.5;
            margin-bottom: 1.5rem;
            max-width: 450px;
            overflow-wrap: break-word;
            word-wrap: break-word;
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
                font-size: clamp(1.8rem, 3.5vw, 2.5rem);
                line-height: 1.3;
                margin-bottom: 1rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
                line-height: 1.4;
                margin: 0 auto 1.5rem auto;
                max-width: 400px;
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
            
            .hero-card {
                margin: 1rem auto 0 auto;
                max-width: 300px;
                padding: 1.25rem;
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
        
        /* Main Hero Card (centered) */
        .main-hero-card {
            background: rgba(255,255,255,0.95);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            padding: 2rem 2.5rem;
            min-width: 260px;
            max-width: 350px;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        .main-hero-card .card-icon {
            font-size: 2.5rem;
        }
        .main-hero-card .card-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #666;
            margin-bottom: 0.5rem;
        }
        .main-hero-card .card-value {
            font-size: 2rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 0.5rem;
        }
        .main-hero-card .card-desc {
            font-size: 1rem;
            color: #888;
        }
        /* Portfolio cards grid styles */
.portfolio-cards-container {
  padding: 2rem 0;
}

.portfolio-card {
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 4px 16px rgba(99,91,255,0.10), 0 1.5px 6px rgba(0,0,0,0.04);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  padding: 24px 10px 18px 10px;
  min-height: 180px;
  transition: box-shadow 0.3s, transform 0.3s;
  border: none;
  text-align: center;
}

.portfolio-card .card-img {
  width: 64px;
  height: 64px;
  object-fit: cover;
  border-radius: 50%;
  margin-bottom: 14px;
  box-shadow: 0 2px 8px rgba(0,212,170,0.10);
  background: #f0f4ff;
}

.portfolio-card .card-title {
  font-size: 1.05rem;
  font-weight: 600;
  color: #222;
  line-height: 1.2;
  word-break: break-word;
}

.portfolio-card.main-card {
  background: linear-gradient(135deg, #7e7fff, #5e5bff);
  color: #fff;
  box-shadow: 0 12px 35px rgba(99, 91, 255, 0.18);
}

.portfolio-card.main-card .card-title {
  color: #fff;
  font-size: 1.15rem;
  font-weight: 700;
}

.portfolio-card:hover {
  transform: translateY(-6px) scale(1.03);
  box-shadow: 0 8px 24px rgba(99,91,255,0.18);
  background: #f8faff;
}

/* About cards for sub-branches */
.about-card {
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 2px 12px rgba(99,91,255,0.07);
  transition: transform 0.2s, box-shadow 0.2s;
}
.about-card:hover {
  transform: translateY(-6px) scale(1.03);
  box-shadow: 0 8px 24px rgba(99,91,255,0.13);
}
.about-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 56px;
  height: 56px;
  margin: 0 auto 1rem auto;
  border-radius: 50%;
  background: #f0f4ff;
}
/* Hero carousel images and cards - Uniform positioning */
.hero-img {
  width: 100%;
  height: 400px;
  object-fit: cover;
  border-radius: 1.5rem;
  box-shadow: 0 8px 32px rgba(99,91,255,0.10);
  transition: all 0.5s ease;
}

.hero-content {
  height: auto;
  min-height: 250px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 1rem 0;
  overflow: hidden;
}

.hero-title {
  font-weight: 800;
  font-size: clamp(2.5rem, 5vw, 4rem);
  color: #fff;
  line-height: 1.1;
  letter-spacing: -0.02em;
  margin-bottom: 1.5rem;
  transition: all 0.5s ease;
}

.hero-subtitle {
  font-size: 1.1rem;
  color: rgba(255, 255, 255, 0.9);
  line-height: 1.5;
  margin-bottom: 1.5rem;
  max-width: 450px;
  overflow-wrap: break-word;
  word-wrap: break-word;
  transition: all 0.5s ease;
}

.hero-card {
  background: #fff;
  border-radius: 1rem;
  padding: 1.5rem;
  box-shadow: 0 8px 32px rgba(99,91,255,0.10);
  min-width: 220px;
  max-width: 350px;
  transition: all 0.5s ease;
  margin-top: 1rem;
}
@media (max-width: 991.98px) {
  .hero-img {
    width: 100%;
    height: 300px;
    margin-bottom: 1rem;
  }
  .hero-content {
    height: auto;
    min-height: 300px;
    padding: 1rem 0;
  }
  
  .carousel-item .row {
    min-height: 300px;
  }
  
  .carousel-item .col-lg-6 {
    min-height: 200px;
  }
  .hero-card {
    min-width: 180px;
    max-width: 100%;
    padding: 1rem;
  }
}
.carousel-control-prev, .carousel-control-next {
    top: 50%;
    transform: translateY(-50%);
    width: 48px;
    height: 48px;
    z-index: 10;
    opacity: 0.85;
    background: rgba(0, 0, 0, 0.3);
    border-radius: 50%;
    border: none;
    transition: all 0.3s ease;
}

.carousel-control-prev:hover, .carousel-control-next:hover {
    background: rgba(0, 0, 0, 0.6);
    opacity: 1;
}

.carousel-control-prev {
    left: 20px;
    right: auto;
    display: none !important; /* Completely hide the previous button */
}

.carousel-control-next {
    right: 20px;
    left: auto;
}
@media (max-width: 991.98px) {
    .carousel-control-prev, .carousel-control-next {
        width: 40px;
        height: 40px;
    }
    .carousel-control-prev {
        left: 20px;
    }
    .carousel-control-next {
        right: 20px;
    }
}
@media (max-width: 575.98px) {
    .carousel-control-prev {
        left: 5px;
    }
    .carousel-control-next {
        right: 5px;
    }
    
    .hero-title {
        font-size: clamp(1.5rem, 3vw, 2rem);
        line-height: 1.4;
        margin-bottom: 0.75rem;
    }
    
    .hero-subtitle {
        font-size: 0.9rem;
        line-height: 1.3;
        margin-bottom: 1rem;
        max-width: 350px;
    }
    
    .hero-content {
        min-height: 200px;
        padding: 0.75rem 0;
    }
    
    .hero-card {
        padding: 1rem;
        margin-top: 0.75rem;
    }
    
    .carousel-item .row {
        min-height: 250px;
        padding: 1rem 0;
    }
}
    </style>
</head>
<body>
 

    <section id="hero" class="hero">
        <!-- Background Carousel -->
        <div id="heroBgCarousel" class="carousel slide hero-bg-carousel" data-bs-ride="carousel" data-bs-interval="5000" data-bs-wrap="true" style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:0;overflow:hidden;">
            <div class="carousel-inner" style="width:100%;height:100%;">
                <div class="carousel-item active" style="width:100%;height:100%;">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=1200&q=80" class="d-block w-100 h-100 hero-bg-img" alt="Pro Gee Dee Ventures background" style="object-fit:cover;filter:blur(16px) brightness(0.7);height:100%;">
                </div>
                <div class="carousel-item" style="width:100%;height:100%;">
                    <img src="assets/black-gold-glitter-background.jpg" class="d-block w-100 h-100 hero-bg-img" alt="Goldendream background" style="object-fit:cover;filter:blur(16px) brightness(0.7);height:100%;">
                </div>
                <div class="carousel-item" style="width:100%;height:100%;">
                    <img src="assets/colleagues-working-desk.jpg" class="d-block w-100 h-100 hero-bg-img" alt="The Brand Weave background" style="object-fit:cover;filter:blur(16px) brightness(0.7);height:100%;">
                </div>
                <div class="carousel-item" style="width:100%;height:100%;">
                    <img src="assets/view-brilliant-cartoon-diamond.jpg" class="d-block w-100 h-100 hero-bg-img" alt="Liyas Gold and Diamonds background" style="object-fit:cover;filter:blur(16px) brightness(0.7);height:100%;">
                </div>
                <div class="carousel-item" style="width:100%;height:100%;">
                    <img src="assets/construction-silhouette.jpg" class="d-block w-100 h-100 hero-bg-img" alt="Liyas Construction background" style="object-fit:cover;filter:blur(16px) brightness(0.7);height:100%;">
                </div>
                <div class="carousel-item" style="width:100%;height:100%;">
                    <img src="assets/delicious-products-arrangement-bakery.jpg" class="d-block w-100 h-100 hero-bg-img" alt="Liyas Bakes and Cafe background" style="object-fit:cover;filter:blur(16px) brightness(0.7);height:100%;">
                </div>
            </div>
        </div>
        <!-- End Background Carousel -->
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-12">
                    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" data-bs-wrap="true">
                        <div class="carousel-inner">
                            <!-- Slide 1: Pro Gee Dee Ventures -->
                            <div class="carousel-item active">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 order-lg-1 order-2">
                                        <div class="hero-content">
                                            <h1 class="hero-title">Pro Gee Dee Ventures</h1>
                                            <p class="hero-subtitle">
                                                Strategic investments across technology, gold, diamonds, and digital innovation. Partnering with ambitious companies to drive sustainable growth and shape tomorrow's market leaders.
                                            </p>

                                            <div class="hero-cta mt-4">
                                                <a href="#" class="btn btn-primary btn-lg me-3">
                                                    <i class="fas fa-arrow-right me-2"></i>
                                                    Learn More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 order-lg-2 order-1 text-center mb-4 mb-lg-0">
                                        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80" alt="Pro Gee Dee Ventures" class="img-fluid rounded-4 shadow-lg hero-img">
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 2: Goldendream -->
                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 order-lg-1 order-2">
                                        <div class="hero-content">
                                            <h1 class="hero-title">Goldendream</h1>
                                            <p class="hero-subtitle">
                                                Premium gold, diamond, and gemstone jewelry with investment plans and customization options. Trusted by 10,000+ clients for quality and ethical sourcing.
                                            </p>

                                            <div class="hero-cta mt-4">
                                                <a href="https://goldendream.in/" target="_blank" class="btn btn-primary btn-lg me-3">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    Visit Website
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 order-lg-2 order-1 text-center mb-4 mb-lg-0">
                                        <img src="assets/black-gold-glitter-background.jpg" alt="Goldendream" class="img-fluid rounded-4 shadow-lg hero-img">
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 3: The Brand Weave -->
                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 order-lg-1 order-2">
                                        <div class="hero-content">
                                            <h1 class="hero-title">The Brand Weave</h1>
                                            <p class="hero-subtitle">
                                                Digital agency specializing in creative solutions, digital marketing, branding, and design. Empowering businesses to grow online with data-driven strategies.
                                            </p>

                                            <div class="hero-cta mt-4">
                                                <a href="https://thebrandweave.com/" target="_blank" class="btn btn-primary btn-lg me-3">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    Visit Website
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 order-lg-2 order-1 text-center mb-4 mb-lg-0">
                                        <img src="assets/colleagues-working-desk.jpg" alt="The Brand Weave" class="img-fluid rounded-4 shadow-lg hero-img">
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 4: Liyas Gold and Diamonds -->
                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 order-lg-1 order-2">
                                        <div class="hero-content">
                                            <h1 class="hero-title">Liyas Gold and Diamonds</h1>
                                            <p class="hero-subtitle">
                                                Trusted, high-quality gold and diamond jewelry with ethical sourcing and customization. Helping secure your financial future with confidence and award-winning service.
                                            </p>

                                            <div class="hero-cta mt-4">
                                                <a href="https://liyasgoldanddiamonds.com/" target="_blank" class="btn btn-primary btn-lg me-3">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    Visit Website
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 order-lg-2 order-1 text-center mb-4 mb-lg-0">
                                        <img src="assets/view-brilliant-cartoon-diamond.jpg" alt="Liyas Gold and Diamonds" class="img-fluid rounded-4 shadow-lg hero-img">
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 5: Liyas Construction -->
                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 order-lg-1 order-2">
                                        <div class="hero-content">
                                            <h1 class="hero-title">Liyas Construction</h1>
                                            <p class="hero-subtitle">
                                                Comprehensive construction services including residential, commercial, and industrial projects. Specializing in modern architecture, sustainable building practices, and turnkey solutions with quality craftsmanship.
                                            </p>

                                            <div class="hero-cta mt-4">
                                                <a href="coming-soon-construction.html" class="btn btn-primary btn-lg me-3">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    View Website
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 order-lg-2 order-1 text-center mb-4 mb-lg-0">
                                        <img src="assets/construction-silhouette.jpg" alt="Liyas Construction" class="img-fluid rounded-4 shadow-lg hero-img">
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 6: Liyas Bakes and Cafe -->
                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 order-lg-1 order-2">
                                        <div class="hero-content">
                                            <h1 class="hero-title">Liyas Bakes and Cafe</h1>
                                            <p class="hero-subtitle">
                                                Premium bakery and cafe serving fresh pastries, cakes, breads, and specialty coffee. Offering custom cakes for celebrations, corporate events, and daily fresh baked goods with exceptional taste and presentation.
                                            </p>

                                            <div class="hero-cta mt-4">
                                                <a href="coming-soon-bakery.html" class="btn btn-primary btn-lg me-3">
                                                    <i class="fas fa-external-link-alt me-2"></i>
                                                    View Website
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 order-lg-2 order-1 text-center mb-4 mb-lg-0">
                                        <img src="assets/delicious-products-arrangement-bakery.jpg" alt="Liyas Bakes and Cafe" class="img-fluid rounded-4 shadow-lg hero-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel controls - Only Next button visible -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" style="display: none;">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <main>
        <section id="ventures" class="section bg-light">
            <div class="container">
                <h2 style="text-align: center;">Our Ventures</h2>
                <div class="text-center">
                    <img src="assets/BROCHUR_page-00012.jpg" alt="Investment Portfolio Brochure" class="img-fluid" style="max-width: 100%; height: auto;">
                </div>
            </div>
        </section>

        <!-- YouTube Video Section -->
        <section id="youtube-video" class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center fade-in-up">
                        <h2 class="section-title mb-4">Watch Our Latest Videos</h2>
                        <p class="section-subtitle mb-5">Discover our vision and mission through our latest presentations</p>
                        
                        <div class="row g-4">
                            <!-- Video 1 -->
                            <div class="col-lg-4 col-md-6">
                                <div class="video-card h-100">
                                    <div class="video-thumbnail position-relative" style="cursor: pointer; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.2); aspect-ratio: 16/9;" onclick="openVideoModal('NYHDu0_5afQ', 'Gee Dee Ventures Presentation')">
                                        <img src="https://img.youtube.com/vi/NYHDu0_5afQ/maxresdefault.jpg" 
                                             alt="Gee Dee Ventures Video" 
                                             class="img-fluid w-100 h-100" 
                                             style="transition: transform 0.3s ease; object-fit: cover;">
                                        <div class="play-button-overlay position-absolute top-50 start-50 translate-middle" 
                                             style="background: rgba(255,0,0,0.9); width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                            <i class="fas fa-play text-white" style="font-size: 18px; margin-left: 3px;"></i>
                                        </div>
                                    </div>
                                    <div class="video-info mt-3">
                                        <h6 class="fw-bold mb-2">Gee Dee Ventures Presentation</h6>
                                        <p class="text-muted small mb-0">Our latest company presentation</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Video 2 -->
                            <div class="col-lg-4 col-md-6">
                                <div class="video-card h-100">
                                    <div class="video-thumbnail position-relative" style="cursor: pointer; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.2); aspect-ratio: 16/9;" onclick="openVideoModal('LfKhSRvn-Es', 'Gee Dee Ventures Video 2')">
                                        <img src="https://img.youtube.com/vi/LfKhSRvn-Es/hqdefault.jpg" 
                                             alt="Gee Dee Ventures Video 2" 
                                             class="img-fluid w-100 h-100" 
                                             style="transition: transform 0.3s ease; object-fit: cover;"
                                             onerror="this.src='https://img.youtube.com/vi/LfKhSRvn-Es/mqdefault.jpg'">
                                        <div class="play-button-overlay position-absolute top-50 start-50 translate-middle" 
                                             style="background: rgba(255,0,0,0.9); width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                            <i class="fas fa-play text-white" style="font-size: 18px; margin-left: 3px;"></i>
                                        </div>
                                    </div>
                                    <div class="video-info mt-3">
                                        <h6 class="fw-bold mb-2">Gee Dee Ventures Video 2</h6>
                                        <p class="text-muted small mb-0">Additional insights and updates</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Video 3 -->
                            <div class="col-lg-4 col-md-6">
                                <div class="video-card h-100">
                                    <div class="video-thumbnail position-relative" style="cursor: pointer; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.2); aspect-ratio: 16/9;" onclick="openVideoModal('gnPM77ECZOM', 'Gee Dee Ventures Video 3')">
                                        <img src="https://img.youtube.com/vi/gnPM77ECZOM/maxresdefault.jpg" 
                                             alt="Gee Dee Ventures Video 3" 
                                             class="img-fluid w-100 h-100" 
                                             style="transition: transform 0.3s ease; object-fit: cover;">
                                        <div class="play-button-overlay position-absolute top-50 start-50 translate-middle" 
                                             style="background: rgba(255,0,0,0.9); width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                            <i class="fas fa-play text-white" style="font-size: 18px; margin-left: 3px;"></i>
                                        </div>
                                    </div>
                                    <div class="video-info mt-3">
                                        <h6 class="fw-bold mb-2">Gee Dee Ventures Video 3</h6>
                                        <p class="text-muted small mb-0">More about our ventures</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content bg-dark">
                    <div class="modal-header border-0">
                        <h5 class="modal-title text-white" id="videoModalLabel">Gee Dee Ventures Presentation</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="ratio ratio-16x9">
                            <iframe id="youtubeIframe" 
                                    src="" 
                                    title="Gee Dee Ventures Video" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action Section - The Brand Weave -->
        <section class="section" style="background: linear-gradient(135deg, var(--c-primary) 0%, #1e293b 100%);">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8 fade-in-up">
                        <h2 class="section-title text-white mb-4">Ready to Partner With The Brand Weave?</h2>
                        <p class="section-subtitle text-white-50 mb-5">
                            The Brand Weave is a premier digital agency specializing in creative solutions, digital marketing, branding, and design. 
                            We empower businesses to grow online with data-driven strategies and innovative design solutions. 
                            From brand identity to comprehensive digital marketing campaigns, we deliver measurable results that drive your business forward.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                            <a href="https://thebrandweave.com/" target="_blank" class="btn btn-danger btn-lg px-5" style="background: linear-gradient(135deg, #dc3545 0%, #8b0000 100%); border: none; box-shadow: 0 4px 15px rgba(220, 53, 69, 0.3);">
                                <i class="fas fa-external-link-alt me-2"></i>
                                Partner With Us
                            </a>
                            <a href="https://thebrandweave.com/" target="_blank" class="btn btn-outline-light btn-lg px-5">
                                <i class="fas fa-globe me-2"></i>
                                Visit Website
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

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
                    ticking = false;
                });
                ticking = true;
            }
        }

        window.addEventListener('scroll', handleScroll);

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

        // Initialize and sync hero carousels with smooth slide transitions
        document.addEventListener('DOMContentLoaded', function() {
            const heroCarousel = document.getElementById('heroCarousel');
            const heroBgCarousel = document.getElementById('heroBgCarousel');
            
            if (heroCarousel && heroBgCarousel) {
                // Initialize carousels with smooth slide transitions
                const mainCarousel = new bootstrap.Carousel(heroCarousel, {
                    interval: 5000,
                    wrap: true,
                    ride: 'carousel',
                    touch: true
                });
                
                const bgCarousel = new bootstrap.Carousel(heroBgCarousel, {
                    interval: 5000,
                    wrap: true,
                    ride: 'carousel',
                    touch: true
                });
                
                // Sync carousels with smooth slide transitions
                heroCarousel.addEventListener('slide.bs.carousel', function (event) {
                    // Smooth transition for background carousel
                    bgCarousel.to(event.to);
                });
                
                // Add manual navigation sync with smooth transitions
                document.querySelectorAll('[data-bs-target="#heroCarousel"]').forEach(button => {
                    button.addEventListener('click', function() {
                        const direction = this.getAttribute('data-bs-slide');
                        if (direction === 'prev') {
                            bgCarousel.prev();
                        } else if (direction === 'next') {
                            bgCarousel.next();
                        }
                    });
                });
                
                // Pause carousels on hover for better UX
                heroCarousel.addEventListener('mouseenter', function() {
                    mainCarousel.pause();
                    bgCarousel.pause();
                });
                
                heroCarousel.addEventListener('mouseleave', function() {
                    mainCarousel.cycle();
                    bgCarousel.cycle();
                });
                
                // Handle carousel errors gracefully
                heroCarousel.addEventListener('error', function(e) {
                    console.warn('Carousel error:', e);
                });
                
                // Ensure carousels are properly initialized with smooth slide transitions
                setTimeout(() => {
                    if (mainCarousel && bgCarousel) {
                        mainCarousel.cycle();
                        bgCarousel.cycle();
                        
                        // Verify carousel synchronization
                        console.log('Carousels initialized with wrap enabled and smooth slide transitions');
                        console.log('Main carousel wrap:', mainCarousel._config.wrap);
                        console.log('Background carousel wrap:', bgCarousel._config.wrap);
                    }
                }, 100);
                
                // Additional sync check for perfect synchronization
                heroCarousel.addEventListener('slid.bs.carousel', function (event) {
                    // Ensure background carousel is on the same slide
                    const activeBgSlide = bgCarousel._element.querySelector('.carousel-item.active');
                    const activeMainSlide = event.relatedTarget;
                    
                    if (activeBgSlide && activeMainSlide) {
                        const bgIndex = Array.from(bgCarousel._element.querySelectorAll('.carousel-item')).indexOf(activeBgSlide);
                        const mainIndex = event.to;
                        
                        if (bgIndex !== mainIndex) {
                            bgCarousel.to(mainIndex);
                        }
                    }
                    
                    // Ensure content is fully visible after transition
                    const currentSlide = event.relatedTarget;
                    if (currentSlide) {
                        currentSlide.querySelector('.hero-content').style.opacity = '1';
                        currentSlide.querySelector('.hero-img').style.transform = 'scale(1)';
                    }
                });
            }
        });

        // YouTube Video Modal Function
        function openVideoModal(videoId, videoTitle) {
            const modal = new bootstrap.Modal(document.getElementById('videoModal'));
            const iframe = document.getElementById('youtubeIframe');
            const modalTitle = document.getElementById('videoModalLabel');
            
            // Set the modal title
            modalTitle.textContent = videoTitle;
            
            // Set the YouTube embed URL with autoplay
            iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&modestbranding=1`;
            
            // Show the modal
            modal.show();
            
            // Clear iframe src when modal is hidden to stop video
            document.getElementById('videoModal').addEventListener('hidden.bs.modal', function () {
                iframe.src = '';
            });
        }

        // Add hover effects for video thumbnails
        document.addEventListener('DOMContentLoaded', function() {
            const videoThumbnails = document.querySelectorAll('.video-thumbnail');
            
            videoThumbnails.forEach(function(thumbnail) {
                const playButton = thumbnail.querySelector('.play-button-overlay');
                
                if (playButton) {
                    thumbnail.addEventListener('mouseenter', function() {
                        this.querySelector('img').style.transform = 'scale(1.05)';
                        playButton.style.transform = 'translate(-50%, -50%) scale(1.1)';
                        playButton.style.background = 'rgba(255,0,0,1)';
                    });
                    
                    thumbnail.addEventListener('mouseleave', function() {
                        this.querySelector('img').style.transform = 'scale(1)';
                        playButton.style.transform = 'translate(-50%, -50%) scale(1)';
                        playButton.style.background = 'rgba(255,0,0,0.9)';
                    });
                }
            });
        });
    </script>
</body>
</html>