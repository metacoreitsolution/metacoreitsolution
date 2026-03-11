<?php
if (!defined('SITE_BASE_URL')) {
    require_once __DIR__ . '/../../../config.php';
}
$baseUrl = SITE_BASE_URL;
if (empty($Title)) $Title = 'MetaCortex IT Solution';
if (empty($MetaDescription)) $MetaDescription = 'MetaCortex IT Solution delivers innovative software and mobile app solutions.';
if (empty($MetaKeywords)) $MetaKeywords = 'MetaCortex, IT solutions, software development';

// Build canonical URL - use $CanonicalPath if set per page, else derive from path
if (!empty($CanonicalPath)) {
    $canonicalUrl = $baseUrl . ($CanonicalPath === '/' ? '' : $CanonicalPath);
} else {
    $path = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
    $canonicalUrl = $baseUrl . ($path ?: '/');
}

// Default OG image - override with $OgImage if needed per page
$ogImage = $baseUrl . '/assets/img/logo/MetaCortex-It-Solution-Logo.svg';
if (!empty($OgImage)) {
    $ogImage = (strpos($OgImage, 'http') === 0) ? $OgImage : $baseUrl . $OgImage;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />

<meta name="description" content="<?php echo htmlspecialchars($MetaDescription); ?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($MetaKeywords); ?>" />
<meta name="author" content="MetaCortex IT Solution" />
<meta name="robots" content="index, follow" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

<title><?php echo htmlspecialchars($Title); ?></title>
<link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>" />
<link href="images/logo/favicon-logo.png" rel="shortcut icon">

<!-- Google Search Console verification - Replace with your verification code from Google -->
<meta name="google-site-verification" content="YOUR_GOOGLE_VERIFICATION_CODE" />

<meta property="og:title" content="<?php echo htmlspecialchars($Title); ?>" />
<meta property="og:description" content="<?php echo htmlspecialchars($MetaDescription); ?>" />
<meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>" />
<meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="MetaCortex IT Solution" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?php echo htmlspecialchars($Title); ?>" />
<meta name="twitter:description" content="<?php echo htmlspecialchars($MetaDescription); ?>" />
<meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage); ?>" />
<meta name="twitter:site" content="@metacortexitsolution" />

<meta property="whatsapp:title" content="<?php echo htmlspecialchars($Title); ?>" />
<meta property="whatsapp:description" content="<?php echo htmlspecialchars($MetaDescription); ?>" />
<meta property="whatsapp:image" content="<?php echo htmlspecialchars($ogImage); ?>" />
<meta property="whatsapp:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>" />

<meta name="instagram:card" content="summary_large_image" />
<meta name="instagram:title" content="<?php echo htmlspecialchars($Title); ?>" />
<meta name="instagram:description" content="<?php echo htmlspecialchars($MetaDescription); ?>" />
<meta name="instagram:image" content="<?php echo htmlspecialchars($ogImage); ?>" />
