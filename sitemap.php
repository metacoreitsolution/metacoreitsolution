<?php
/**
 * XML Sitemap for search engine crawling
 * Accessible at /sitemap.xml
 */
header('Content-Type: application/xml; charset=utf-8');

$baseUrl = 'https://metacortexitsolution.com';
$lastmod = date('Y-m-d');

$pages = [
    // Main
    ['url' => '', 'priority' => '1.0', 'changefreq' => 'weekly'],
    ['url' => '/about-us', 'priority' => '0.9', 'changefreq' => 'monthly'],
    ['url' => '/contact-us', 'priority' => '0.9', 'changefreq' => 'monthly'],
    ['url' => '/careers', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/privacy-policy', 'priority' => '0.6', 'changefreq' => 'yearly'],

    // Services
    ['url' => '/services', 'priority' => '0.9', 'changefreq' => 'monthly'],
    ['url' => '/services/mobile-app-development', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/services/web-development', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/services/custom-software-development', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/services/ai-development-services', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/services/blockchain-development', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/services/ar-vr-development', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/services/ui-ux-design-services', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/services/enterprise-software-development', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/services/saas-development-services', 'priority' => '0.8', 'changefreq' => 'monthly'],

    // Technologies
    ['url' => '/technologies', 'priority' => '0.9', 'changefreq' => 'monthly'],
    ['url' => '/technologies/flutter-app-development', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/technologies/react-native-app-development', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/technologies/nodejs-development', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/technologies/python-development', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/technologies/laravel-development', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/technologies/reactjs-development', 'priority' => '0.8', 'changefreq' => 'monthly'],

    // Industries
    ['url' => '/industries', 'priority' => '0.9', 'changefreq' => 'monthly'],
    ['url' => '/industries/healthcare-software-development', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/industries/real-estate-software-development', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/industries/fintech-software-development', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/industries/logistics-software-development', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/industries/edtech-software-development', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/industries/ecommerce-software-development', 'priority' => '0.8', 'changefreq' => 'monthly'],

    // Hire developers
    ['url' => '/hire-developers', 'priority' => '0.9', 'changefreq' => 'monthly'],
    ['url' => '/hire-developers/hire-mobile-app-developers', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/hire-developers/hire-web-developers', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/hire-developers/hire-ai-developers', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/hire-developers/hire-dedicated-developers', 'priority' => '0.8', 'changefreq' => 'monthly'],

    // Portfolio
    ['url' => '/portfolio', 'priority' => '0.9', 'changefreq' => 'monthly'],
    ['url' => '/portfolio/mobile-app-projects', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/portfolio/web-development-projects', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/portfolio/ai-software-projects', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/portfolio/enterprise-software-projects', 'priority' => '0.8', 'changefreq' => 'monthly'],

    // Case studies
    ['url' => '/case-studies', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/case-studies/healthcare-mobile-app-case-study', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['url' => '/case-studies/ecommerce-platform-case-study', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['url' => '/case-studies/ai-automation-platform-case-study', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['url' => '/case-studies/logistics-tracking-system-case-study', 'priority' => '0.7', 'changefreq' => 'monthly'],

    // Blog
    ['url' => '/blog', 'priority' => '0.8', 'changefreq' => 'weekly'],
    ['url' => '/blog/mobile-app-development', 'priority' => '0.7', 'changefreq' => 'weekly'],
    ['url' => '/blog/artificial-intelligence', 'priority' => '0.7', 'changefreq' => 'weekly'],
    ['url' => '/blog/web-development', 'priority' => '0.7', 'changefreq' => 'weekly'],
    ['url' => '/blog/software-development', 'priority' => '0.7', 'changefreq' => 'weekly'],
    ['url' => '/blog/startup-guides', 'priority' => '0.7', 'changefreq' => 'weekly'],

    // Locations
    ['url' => '/locations', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/locations/software-development-company-usa', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['url' => '/locations/software-development-company-uk', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['url' => '/locations/software-development-company-uae', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['url' => '/locations/software-development-company-canada', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['url' => '/locations/software-development-company-australia', 'priority' => '0.7', 'changefreq' => 'monthly'],
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($pages as $page) {
    $loc = $baseUrl . ($page['url'] ?: '/');
    echo "  <url>\n";
    echo "    <loc>" . htmlspecialchars($loc) . "</loc>\n";
    echo "    <lastmod>{$lastmod}</lastmod>\n";
    echo "    <changefreq>{$page['changefreq']}</changefreq>\n";
    echo "    <priority>{$page['priority']}</priority>\n";
    echo "  </url>\n";
}

echo '</urlset>';
