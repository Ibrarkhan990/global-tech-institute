<?php
require_once '../includes/functions.php';

if (is_logged_in()) {
    redirect('dashboard.php');
}

$error = '';
$timeout = isset($_GET['timeout']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verify_csrf_token($_POST['csrf_token'] ?? '')) {
        $error = 'Security token expired. Please try again.';
    } else {
        $email    = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        if (!$email || !$password) {
            $error = 'Please enter your email and password.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = 'Please enter a valid email address.';
        } else {
            try {
                $pdo = db();
                $stmt = $pdo->prepare("SELECT id, password, name, role, status FROM users WHERE email = ? LIMIT 1");
                $stmt->execute([$email]);
                $user = $stmt->fetch();

                if ($user && $user['status'] === 'active' && password_verify($password, $user['password'])) {
                    // Secure session regeneration
                    session_regenerate_id(true);

                    $_SESSION['admin_id']      = $user['id'];
                    $_SESSION['admin_name']    = $user['name'];
                    $_SESSION['admin_role']    = $user['role'];
                    $_SESSION['last_activity'] = time();

                    // Record login time
                    $pdo->prepare("UPDATE users SET last_login = NOW() WHERE id = ?")->execute([$user['id']]);

                    redirect('dashboard.php');
                } else {
                    $error = 'Invalid email or password. Please try again.';
                }
            } catch (\Exception $e) {
                error_log('[GTI-Login] ' . $e->getMessage());
                $error = 'A system error occurred. Please try again.';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Global Tech &amp; Institute</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/admin.css">
    <style>
        .login-form-label { display:block; font-size:0.8rem; font-weight:600; color:var(--muted); margin-bottom:0.5rem; letter-spacing:0.3px; text-transform:uppercase; }
        .login-input { width:100%; background:var(--bg); border:1px solid var(--border); border-radius:var(--radius-md); color:var(--text); padding:0.75rem 1rem; font-size:0.9rem; font-family:var(--font-body); outline:none; transition:border-color var(--transition), box-shadow var(--transition); }
        .login-input:focus { border-color:var(--accent); box-shadow:0 0 0 3px var(--accent-ring); }
        .timeout-notice { background:rgba(102,176,255,0.08); border:1px solid rgba(102,176,255,0.25); color:#66b0ff; padding:0.75rem 1rem; border-radius:var(--radius-md); font-size:0.85rem; margin-bottom:1.5rem; }
        .input-group { margin-bottom:1.25rem; }
    </style>
</head>
<body>
<div class="login-glow"></div>
<div class="login-page">
    <div class="login-card">
        <div class="login-logo">
            <div class="login-logo-mark">GTI</div>
            <div>
                <div class="login-logo-text">Global Tech &amp; Institute</div>
                <div class="login-logo-sub">Administration Panel</div>
            </div>
        </div>

        <h1 class="login-title">Welcome back</h1>
        <p class="login-subtitle">Sign in to access the administration dashboard.</p>

        <?php if ($timeout): ?>
        <div class="timeout-notice">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;margin-right:6px;"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            Your session expired due to inactivity. Please sign in again.
        </div>
        <?php endif; ?>

        <?php if ($error): ?>
        <div class="login-error">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
            <?= e($error) ?>
        </div>
        <?php endif; ?>

        <form method="POST" action="" autocomplete="on">
            <?= csrf_field() ?>

            <div class="input-group">
                <label class="login-form-label" for="email">Email Address</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="login-input"
                    value="<?= e($_POST['email'] ?? '') ?>"
                    required
                    autofocus
                    autocomplete="email"
                    placeholder="admin@globaltech.edu">
            </div>

            <div class="input-group">
                <label class="login-form-label" for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    class="login-input"
                    required
                    autocomplete="current-password"
                    placeholder="Enter your password">
            </div>

            <button type="submit" class="login-btn">
                SIGN IN TO ADMIN PANEL
            </button>
        </form>

        <div class="login-footer">
            Global Tech &amp; Institute &copy; <?= date('Y') ?> &mdash; Secure Administration
        </div>
    </div>
</div>
</body>
</html>
