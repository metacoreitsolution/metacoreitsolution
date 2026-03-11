<?php
/**
 * Schema.org JSON-LD markup for SEO
 * Organization schema on all pages; Service/FAQ added per page when $SchemaType is set
 */
if (!defined('SITE_BASE_URL')) {
    require_once __DIR__ . '/../../../config.php';
}
$baseUrl = SITE_BASE_URL;

$organizationSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => 'MetaCortex IT Solution',
    'url' => $baseUrl,
    'logo' => $baseUrl . '/assets/img/logo/MetaCortex-It-Solution-Logo.svg',
    'description' => 'MetaCortex IT Solution delivers innovative software and mobile app solutions tailored to modern business needs.',
    'address' => [
        '@type' => 'PostalAddress',
        'addressLocality' => 'Ahmedabad',
        'addressRegion' => 'Gujarat',
        'addressCountry' => 'IN'
    ],
    'contactPoint' => [
        '@type' => 'ContactPoint',
        'telephone' => '+91-9104902707',
        'contactType' => 'customer service',
        'email' => 'info@metacortexitsolution.com',
        'areaServed' => 'IN'
    ],
    'sameAs' => [
        'https://www.linkedin.com/company/metacortex-it-solution/',
        'https://www.instagram.com/metacortexitsolution'
    ]
];

$schemas = [$organizationSchema];

// Service schema for service pages
if (!empty($SchemaService)) {
    $schemas[] = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => $SchemaService['name'] ?? $Title,
        'description' => $SchemaService['description'] ?? $MetaDescription,
        'provider' => [
            '@type' => 'Organization',
            'name' => 'MetaCortex IT Solution'
        ],
        'url' => $canonicalUrl ?? $baseUrl
    ];
}

// FAQ schema for pages with FAQ
if (!empty($SchemaFAQ)) {
    $faqItems = [];
    foreach ($SchemaFAQ as $item) {
        $faqItems[] = [
            '@type' => 'Question',
            'name' => $item['question'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $item['answer']
            ]
        ];
    }
    $schemas[] = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $faqItems
    ];
}
?>
<script type="application/ld+json">

<?php echo json_encode($organizationSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>

</script>
<?php if (!empty($SchemaService)): ?>
<script type="application/ld+json">
<?php
$svc = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => $SchemaService['name'] ?? $Title,
    'description' => $SchemaService['description'] ?? $MetaDescription,
    'provider' => ['@type' => 'Organization', 'name' => 'MetaCortex IT Solution'],
    'url' => $canonicalUrl ?? $baseUrl
];
echo json_encode($svc, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>
</script>
<?php endif; ?>
<?php if (!empty($SchemaFAQ)): ?>
<script type="application/ld+json">
<?php
$faqItems = [];
foreach ($SchemaFAQ as $item) {
    $faqItems[] = [
        '@type' => 'Question',
        'name' => $item['question'],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $item['answer']]
    ];
}
echo json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => $faqItems
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>
</script>
<?php endif; ?>
