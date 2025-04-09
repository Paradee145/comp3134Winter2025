<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$path = isset($_GET['q']) ? $_GET['q'] : '.';

// ✅ Mitigation 1: Prevent directory traversal
$path = basename($path);

// ✅ Mitigation 2: Check that the path exists and is a directory
if (file_exists($path) && is_dir($path)) {
    echo "<pre>";
    print_r(scandir($path));
    echo "</pre>";
} else {
    echo "Access Denied or Directory Not Found.";
}
?>
