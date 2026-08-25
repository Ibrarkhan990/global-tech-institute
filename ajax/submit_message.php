<?php
require_once '../includes/functions.php';
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_response(false, 'Invalid request.');
}

if (!verify_csrf_token($_POST['csrf_token'] ?? '')) {
    json_response(false, 'Security token invalid. Please refresh the page.');
}

if (!check_rate_limit('contact_submit', 3, 300)) {
    json_response(false, 'Too many submissions. Please wait a moment and try again.');
}

try {
    $name    = trim($_POST['name'] ?? '');
    $email   = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $phone   = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $inquiry_type = trim($_POST['inquiry_type'] ?? 'General Inquiry');
    
    if (strlen($name) < 2) {
        json_response(false, 'Please enter your full name.');
    }
    if (!$email) {
        json_response(false, 'Please enter a valid email address.');
    }
    if (strlen($message) < 10) {
        json_response(false, 'Message is too short. Please provide more detail.');
    }
    
    if (!$subject) {
        $subject = $inquiry_type ?: 'General Inquiry';
    }
    
    $pdo = db();
    $stmt = $pdo->prepare("INSERT INTO messages (name, email, phone, subject, message, inquiry_type, status, created_at) VALUES (?, ?, ?, ?, ?, ?, 'unread', NOW())");
    $stmt->execute([$name, $email, $phone, $subject, $message, $inquiry_type]);
    
    json_response(true, 'Thank you! Your message has been received. We will get back to you shortly.');
    
} catch (Exception $e) {
    error_log('[GTI-Contact] Error: ' . $e->getMessage());
    json_response(false, 'An error occurred. Please try again later.');
}
