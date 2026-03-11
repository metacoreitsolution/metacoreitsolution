<?php
/**
 * Server diagnostic - visit /test-server.php to verify PHP works
 * DELETE this file after debugging (security risk)
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>Server Test</h1>";
echo "<p>PHP is working. Version: " . phpversion() . "</p>";

// Test config
$configPath = __DIR__ . '/config.php';
echo "<p>Config exists: " . (file_exists($configPath) ? 'Yes' : 'No') . "</p>";

// Test header meta path (from A_HeaderMeta perspective)
$headerMetaDir = __DIR__ . '/A_Layout/Header/Header_Partials';
$configFromHeader = $headerMetaDir . '/../../../config.php';
echo "<p>Config path from Header_Partials: " . htmlspecialchars($configFromHeader) . "</p>";
echo "<p>Resolved config exists: " . (file_exists($configFromHeader) ? 'Yes' : 'No') . "</p>";

if (file_exists($configPath)) {
    require_once $configPath;
    echo "<p>SITE_BASE_URL: " . (defined('SITE_BASE_URL') ? SITE_BASE_URL : 'not set') . "</p>";
}

echo "<hr><p><strong>Delete test-server.php after debugging!</strong></p>";
