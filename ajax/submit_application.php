<?php
require_once '../includes/functions.php';
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_response(false, 'Invalid request.');
}

if (!verify_csrf_token($_POST['csrf_token'] ?? '')) {
    json_response(false, 'Security token invalid. Please refresh the page.');
}

if (!check_rate_limit('apply_submit', 3, 300)) {
    json_response(false, 'Too many submissions. Please wait a few minutes before trying again.');
}

try {
    $pdo = db();
    
    // Validate inputs
    $full_name   = trim($_POST['full_name'] ?? '');
    $father_name = trim($_POST['father_name'] ?? '');
    $email       = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $phone       = trim($_POST['phone'] ?? '');
    $whatsapp    = trim($_POST['whatsapp'] ?? '');
    $dob         = trim($_POST['dob'] ?? '');
    $gender      = trim($_POST['gender'] ?? '');
    $address     = trim($_POST['address'] ?? '');
    $city        = trim($_POST['city'] ?? '');
    $course_id   = filter_var($_POST['course_id'] ?? 0, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
    $batch       = trim($_POST['batch'] ?? '');
    $timing      = trim($_POST['timing'] ?? '');
    $education   = trim($_POST['education'] ?? '');
    $institution = trim($_POST['institution'] ?? '');
    $message     = trim($_POST['message'] ?? '');

    $errors = [];
    if (strlen($full_name) < 2) $errors[] = 'Full name is required.';
    if (!$email) $errors[] = 'A valid email address is required.';
    if (strlen($phone) < 7) $errors[] = 'A valid phone number is required.';
    if (!$city) $errors[] = 'City is required.';
    if (!$course_id) $errors[] = 'Please select a valid course.';
    if (!$batch) $errors[] = 'Please select a batch.';
    if (!$timing) $errors[] = 'Please select a timing.';
    if (!$education) $errors[] = 'Please select your qualification.';

    if ($errors) {
        json_response(false, implode(' ', $errors));
    }

    // Verify course exists
    $course_check = $pdo->prepare("SELECT id FROM courses WHERE id = ? AND status = 'active'");
    $course_check->execute([$course_id]);
    if (!$course_check->fetch()) {
        json_response(false, 'The selected course is not available.');
    }

    // Insert (Application No will be generated post-insert to avoid race conditions)
    $stmt = $pdo->prepare("
        INSERT INTO applications (
            application_no, full_name, father_name, email, phone, whatsapp, 
            date_of_birth, gender, address, city, course_id, batch, timing, 
            education, institution, message, status, created_at
        ) VALUES (
            'PENDING', ?, ?, ?, ?, ?, 
            ?, ?, ?, ?, ?, ?, ?, 
            ?, ?, ?, 'pending', NOW()
        )
    ");
    
    $stmt->execute([
        $full_name, $father_name, $email, $phone, $whatsapp, 
        $dob ?: null, $gender ?: null, $address, $city, $course_id, $batch, $timing, 
        $education, $institution, $message
    ]);

    $app_id = (int)$pdo->lastInsertId();

    // Generate safe application number using sequences or auto_increment ID
    $app_no = generate_application_number($app_id);

    // Update with real application number
    $pdo->prepare("UPDATE applications SET application_no = ? WHERE id = ?")->execute([$app_no, $app_id]);

    json_response(true, 'Application submitted successfully!', ['application_no' => $app_no]);

} catch (Exception $e) {
    error_log('[GTI-Apply] Error: ' . $e->getMessage());
    json_response(false, 'Something went wrong. Please try again.');
}
