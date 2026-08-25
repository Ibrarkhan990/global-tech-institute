<?php
require_once '../includes/functions.php';
header('Content-Type: application/json; charset=utf-8');

if (!is_logged_in() || $_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_response(false, 'Unauthorized.');
}

if (!verify_csrf_token($_POST['csrf_token'] ?? '')) {
    json_response(false, 'Security token invalid.');
}

try {
    $id = filter_var($_POST['id'] ?? 0, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
    $status = trim($_POST['status'] ?? '');
    
    if (!$id) {
        json_response(false, 'Invalid message ID.');
    }
    if (!validate_message_status($status)) {
        json_response(false, 'Invalid status value.');
    }
    
    $pdo = db();
    $exists = $pdo->prepare("SELECT id FROM messages WHERE id = ?");
    $exists->execute([$id]);
    if (!$exists->fetch()) {
        json_response(false, 'Message not found.');
    }
    
    $stmt = $pdo->prepare("UPDATE messages SET status = ?, updated_at = NOW() WHERE id = ?");
    $stmt->execute([$status, $id]);
    
    json_response(true, 'Message status updated.', ['status' => $status, 'id' => $id]);
    
} catch (Exception $e) {
    error_log('[GTI-MsgStatus] Error: ' . $e->getMessage());
    json_response(false, 'Update failed. Please try again.');
}
