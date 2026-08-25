<?php
require_once '../includes/functions.php';

// Regenerate ID one more time on logout for security
if (session_status() === PHP_SESSION_ACTIVE) {
    session_regenerate_id(true);
    session_unset();
    session_destroy();
}

// Clear session cookie
if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params['path'], $params['domain'],
        $params['secure'], $params['httponly']
    );
}

redirect('login.php');
