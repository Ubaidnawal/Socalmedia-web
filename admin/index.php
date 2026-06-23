<?php
/**
 * Admin Panel — Landing Page
 *
 * Apache loads this file by default when visiting /admin/.
 * It immediately redirects to the login page.
 *
 * After successful login, users are sent to dashboard.php.
 */

// Prevent caching
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Expires: -1');

// Redirect straight to login
header('Location: login.php');
exit;
