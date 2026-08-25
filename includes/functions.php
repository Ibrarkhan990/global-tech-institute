<?php
// includes/functions.php — Complete Helper Library
// Single authoritative source for: DB access, CSRF, auth, helpers, session security.

// ── SESSION SETUP ────────────────────────────────────────────────────────────
if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params([
        'lifetime' => 0,
        'path'     => '/',
        'secure'   => false, // Set true on HTTPS/production
        'httponly' => true,
        'samesite' => 'Strict',
    ]);
    session_start();
}

// ── SESSION TIMEOUT (30 min idle) ────────────────────────────────────────────
define('SESSION_TIMEOUT', 1800); // 30 minutes

function check_session_timeout(): void {
    $timeout_seconds = 30 * 60; // 30 minutes
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout_seconds) {
        session_unset();
        session_destroy();
        if (defined('ADMIN_CONTEXT')) {
            redirect('login.php?timeout=1');
        }
    }
    $_SESSION['last_activity'] = time();
}

// ── DATABASE ─────────────────────────────────────────────────────────────────
function db(): PDO {
    require_once __DIR__ . '/../config/database.php';
    return Database::getInstance()->getConnection();
}

// ── CSRF PROTECTION ──────────────────────────────────────────────────────────
function generate_csrf_token(): string {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Verify a submitted CSRF token against the session-stored token.
 * Always compare against $_SESSION['csrf_token'], NEVER against csrf_field() output.
 */
function verify_csrf_token(string $submitted_token): bool {
    if (empty($submitted_token) || empty($_SESSION['csrf_token'])) {
        return false;
    }
    return hash_equals($_SESSION['csrf_token'], $submitted_token);
}

/**
 * Returns an HTML hidden input element for CSRF protection.
 * Usage in forms: <?= csrf_field() ?>
 */
function csrf_field(): string {
    $token = generate_csrf_token();
    return '<input type="hidden" name="csrf_token" value="' . htmlspecialchars($token, ENT_QUOTES, 'UTF-8') . '">';
}

/**
 * Verify CSRF from $_POST and die with JSON error if invalid.
 * Use in AJAX endpoints.
 */
function require_csrf_ajax(): void {
    if (!verify_csrf_token($_POST['csrf_token'] ?? '')) {
        http_response_code(403);
        echo json_encode(['success' => false, 'message' => 'Security token invalid. Please refresh the page.']);
        exit;
    }
}

/**
 * Verify CSRF from $_POST and redirect with error if invalid.
 * Use in form POST handlers.
 */
function require_csrf_or_redirect(string $redirect_url): void {
    if (!verify_csrf_token($_POST['csrf_token'] ?? '')) {
        redirect($redirect_url . '?error=csrf');
    }
}

// ── XSS PROTECTION ───────────────────────────────────────────────────────────
/**
 * Escape a value for safe HTML output.
 */
function e(?string $string): string {
    return htmlspecialchars($string ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

// ── REDIRECT ─────────────────────────────────────────────────────────────────
function redirect(string $url): never {
    header('Location: ' . $url);
    exit;
}

// ── APPLICATION NUMBER GENERATION ────────────────────────────────────────────
/**
 * Generates a unique, race-condition-safe application number.
 *
 * Strategy: INSERT into app_sequences (which has AUTO_INCREMENT id) for current year,
 * use the returned AUTO_INCREMENT id as the sequence number.
 * Then UPDATE the application record with the formatted number.
 *
 * Format: GTI-{YEAR}-{6-digit-padded-id}
 *
 * Call AFTER inserting the application row. Pass the app's auto-increment $id.
 */
function generate_application_number(int $app_id): string {
    $year = date('Y');
    return 'GTI-' . $year . '-' . str_pad($app_id, 6, '0', STR_PAD_LEFT);
}

// ── AUTHENTICATION ────────────────────────────────────────────────────────────
function is_logged_in(): bool {
    return isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id']);
}

function require_admin(): void {
    if (!is_logged_in()) {
        redirect('login.php');
    }
    check_session_timeout();
}

// ── CONTACT SETTINGS ─────────────────────────────────────────────────────────
function get_contact_settings(): array {
    try {
        $pdo = db();
        $settings = $pdo->query("SELECT * FROM contact_settings LIMIT 1")->fetch();
        return $settings ?: [];
    } catch (\Exception $e) {
        return [];
    }
}

// ── FORMAT HELPERS ────────────────────────────────────────────────────────────
function format_date(string $date, string $format = 'd M Y'): string {
    try {
        return date($format, strtotime($date));
    } catch (\Exception $e) {
        return $date;
    }
}

function format_datetime(string $date): string {
    return format_date($date, 'd M Y, H:i');
}

function get_status_badge_class(string $status): string {
    return match(strtolower($status)) {
        'pending'    => 'badge-warning',
        'reviewing'  => 'badge-info',
        'approved'   => 'badge-success',
        'rejected'   => 'badge-danger',
        'unread'     => 'badge-warning',
        'read'       => 'badge-info',
        'replied'    => 'badge-success',
        'archived'   => 'badge-muted',
        'active'     => 'badge-success',
        'inactive'   => 'badge-danger',
        default      => 'badge-muted',
    };
}

/**
 * Validate application status value (whitelist).
 */
function validate_application_status(string $status): bool {
    return in_array($status, ['pending', 'reviewing', 'approved', 'rejected'], true);
}

/**
 * Validate message status value (whitelist).
 */
function validate_message_status(string $status): bool {
    return in_array($status, ['unread', 'read', 'replied', 'archived'], true);
}

// ── RATE LIMITING ─────────────────────────────────────────────────────────────
/**
 * Simple session-based rate limiting.
 * Prevents the same session from submitting more than $max_attempts within $window seconds.
 */
function check_rate_limit(string $action_key, int $max_attempts = 3, int $window = 300): bool {
    $key = 'rate_limit_' . $action_key;
    if (!isset($_SESSION[$key])) {
        $_SESSION[$key] = ['count' => 0, 'reset_at' => time() + $window];
    }
    if (time() > $_SESSION[$key]['reset_at']) {
        $_SESSION[$key] = ['count' => 0, 'reset_at' => time() + $window];
    }
    $_SESSION[$key]['count']++;
    return $_SESSION[$key]['count'] <= $max_attempts;
}

// ── SAFE JSON RESPONSE ────────────────────────────────────────────────────────
function json_response(bool $success, string $message, array $extra = []): never {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(array_merge(['success' => $success, 'message' => $message], $extra));
    exit;
}

// ── PAGINATION ────────────────────────────────────────────────────────────────
function get_pagination_offset(int $page, int $per_page): int {
    return max(0, ($page - 1) * $per_page);
}

function get_current_page(): int {
    return max(1, (int)($_GET['page'] ?? 1));
}
?>
