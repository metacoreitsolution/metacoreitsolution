<?php
/**
 * URL Router - Maps new URL structure to page content
 * Handles: /about-us, /services/*, /technologies/*, /industries/*, /hire-developers/*, /portfolio/*, /case-studies/*, /blog/*, /locations/*, /careers, /contact-us, /privacy-policy
 */
if (!defined('SITE_BASE_URL')) {
    $configPath = __DIR__ . '/config.php';
    if (file_exists($configPath)) require_once $configPath;
}
$path = isset($_GET['path']) ? trim($_GET['path'], '/') : '';
$pathParts = $path ? explode('/', $path) : [];

// URL to PHP file mapping (new URL => existing file or page template)
$routeMap = [
    // Main pages
    'about-us' => 'about.php',
    'contact-us' => 'contact.php',
    'careers' => 'pages/careers.php',
    'privacy-policy' => 'pages/privacy-policy.php',

    // Services section
    'services' => 'service.php',
    'services/mobile-app-development' => 'ios-android-app-development.php',
    'services/web-development' => 'webdevelopment.php',
    'services/custom-software-development' => 'custom-software-development.php',
    'services/ai-development-services' => 'ai-ml-development.php',
    'services/blockchain-development' => 'blockchain-development.php',
    'services/ar-vr-development' => 'ar-vr-development.php',
    'services/ui-ux-design-services' => 'uxdesign.php',
    'services/enterprise-software-development' => 'pages/services/enterprise-software-development.php',
    'services/saas-development-services' => 'pages/services/saas-development-services.php',

    // Technologies section
    'technologies' => 'pages/technologies/index.php',
    'technologies/flutter-app-development' => 'pages/technologies/flutter-app-development.php',
    'technologies/react-native-app-development' => 'pages/technologies/react-native-app-development.php',
    'technologies/nodejs-development' => 'pages/technologies/nodejs-development.php',
    'technologies/python-development' => 'pages/technologies/python-development.php',
    'technologies/laravel-development' => 'pages/technologies/laravel-development.php',
    'technologies/reactjs-development' => 'pages/technologies/reactjs-development.php',

    // Industries section
    'industries' => 'pages/industries/index.php',
    'industries/healthcare-software-development' => 'healthCareSolution.php',
    'industries/real-estate-software-development' => 'realestatepropertymanagement.php',
    'industries/fintech-software-development' => 'billingaccountingSoftware.php',
    'industries/logistics-software-development' => 'logisticmanagement.php',
    'industries/edtech-software-development' => 'education-technology-solution.php',
    'industries/ecommerce-software-development' => 'retaile-commercesolution.php',

    // Hire developers
    'hire-developers' => 'pages/hire-developers/index.php',
    'hire-developers/hire-mobile-app-developers' => 'pages/hire-developers/hire-mobile-app-developers.php',
    'hire-developers/hire-web-developers' => 'pages/hire-developers/hire-web-developers.php',
    'hire-developers/hire-ai-developers' => 'pages/hire-developers/hire-ai-developers.php',
    'hire-developers/hire-dedicated-developers' => 'pages/hire-developers/hire-dedicated-developers.php',

    // Portfolio
    'portfolio' => 'projects.php',
    'portfolio/mobile-app-projects' => 'pages/portfolio/mobile-app-projects.php',
    'portfolio/web-development-projects' => 'pages/portfolio/web-development-projects.php',
    'portfolio/ai-software-projects' => 'pages/portfolio/ai-software-projects.php',
    'portfolio/enterprise-software-projects' => 'pages/portfolio/enterprise-software-projects.php',

    // Case studies
    'case-studies' => 'pages/case-studies/index.php',
    'case-studies/healthcare-mobile-app-case-study' => 'pages/case-studies/healthcare-mobile-app-case-study.php',
    'case-studies/ecommerce-platform-case-study' => 'pages/case-studies/ecommerce-platform-case-study.php',
    'case-studies/ai-automation-platform-case-study' => 'pages/case-studies/ai-automation-platform-case-study.php',
    'case-studies/logistics-tracking-system-case-study' => 'pages/case-studies/logistics-tracking-system-case-study.php',

    // Blog
    'blog' => 'blog.php',
    'blog/mobile-app-development' => 'pages/blog/mobile-app-development.php',
    'blog/artificial-intelligence' => 'pages/blog/artificial-intelligence.php',
    'blog/web-development' => 'pages/blog/web-development.php',
    'blog/software-development' => 'pages/blog/software-development.php',
    'blog/startup-guides' => 'pages/blog/startup-guides.php',

    // Locations
    'locations' => 'pages/locations/index.php',
    'locations/software-development-company-usa' => 'pages/locations/software-development-company-usa.php',
    'locations/software-development-company-uk' => 'pages/locations/software-development-company-uk.php',
    'locations/software-development-company-uae' => 'pages/locations/software-development-company-uae.php',
    'locations/software-development-company-canada' => 'pages/locations/software-development-company-canada.php',
    'locations/software-development-company-australia' => 'pages/locations/software-development-company-australia.php',
];

$targetFile = $routeMap[$path] ?? null;

if ($targetFile && file_exists(__DIR__ . '/' . $targetFile)) {
    // Override canonical path for routed pages
    $CanonicalPath = '/' . $path;
    include __DIR__ . '/' . $targetFile;
} else {
    include __DIR__ . '/error.php';
}
