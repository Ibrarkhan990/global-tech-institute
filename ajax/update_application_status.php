<?php
require_once '../includes/functions.php';
header('Content-Type: application/json; charset=utf-8');

// Admin only + correct request method
if (!is_logged_in() || $_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_response(false, 'Unauthorized.');
}

// Check CSRF
if (!verify_csrf_token($_POST['csrf_token'] ?? '')) {
    json_response(false, 'Security token invalid.');
}

try {
    $id = filter_var($_POST['id'] ?? 0, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
    $status = trim($_POST['status'] ?? '');
    
    if (!$id) {
        json_response(false, 'Invalid application ID.');
    }
    if (!validate_application_status($status)) {
        json_response(false, 'Invalid status value.');
    }
    
    $pdo = db();
    
    // Check exists
    $exists = $pdo->prepare("SELECT id FROM applications WHERE id = ?");
    $exists->execute([$id]);
    if (!$exists->fetch()) {
        json_response(false, 'Application not found.');
    }
    
    // Update
    $stmt = $pdo->prepare("UPDATE applications SET status = ?, updated_at = NOW() WHERE id = ?");
    $stmt->execute([$status, $id]);
    
    json_response(true, 'Status updated successfully.', ['status' => $status, 'id' => $id]);
    
} catch (Exception $e) {
    error_log('[GTI-AppStatus] Error: ' . $e->getMessage());
    json_response(false, 'Update failed. Please try again.');
}
