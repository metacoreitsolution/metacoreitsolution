<?php
/**
 * Temporary debug file - add ?debug=1 to any URL or visit this file to see PHP errors
 * DELETE THIS FILE after fixing issues (security risk in production)
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

echo "<h2>PHP Error Debug</h2>";
echo "<p>If you see this, PHP is working. Check the output below for any errors.</p>";
echo "<p>Document root: " . htmlspecialchars($_SERVER['DOCUMENT_ROOT'] ?? 'not set') . "</p>";
echo "<p>Script path: " . htmlspecialchars(__FILE__) . "</p>";

// Test config load
$configPath = __DIR__ . '/config.php';
echo "<p>Config exists: " . (file_exists($configPath) ? 'Yes' : 'No') . "</p>";
if (file_exists($configPath)) {
    require_once $configPath;
    echo "<p>SITE_BASE_URL: " . (defined('SITE_BASE_URL') ? SITE_BASE_URL : 'not defined') . "</p>";
}

// Test header meta path
$headerMetaPath = __DIR__ . '/A_Layout/Header/Header_Partials/A_HeaderMeta.php';
echo "<p>Header meta exists: " . (file_exists($headerMetaPath) ? 'Yes' : 'No') . "</p>";

echo "<hr><p><strong>Delete this file (debug-errors.php) after debugging!</strong></p>";
