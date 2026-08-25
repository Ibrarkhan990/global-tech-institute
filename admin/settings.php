<?php
require_once '../includes/functions.php';
require_admin();
define('ADMIN_CONTEXT', true);

$pdo = db();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_csrf_or_redirect('settings.php');
    $action = $_POST['action'] ?? '';
    
    if ($action === 'update_contact') {
        $stmt = $pdo->prepare("UPDATE contact_settings SET email=?, phone=?, whatsapp=?, address=?, working_hours=?, map_url=? WHERE id=1");
        $stmt->execute([
            trim($_POST['email'] ?? ''), trim($_POST['phone'] ?? ''), trim($_POST['whatsapp'] ?? ''),
            trim($_POST['address'] ?? ''), trim($_POST['working_hours'] ?? ''), trim($_POST['map_url'] ?? '')
        ]);
        redirect('settings.php?success=contact&tab=contact');
    }
    
    if ($action === 'update_social') {
        $stmt = $pdo->prepare("UPDATE contact_settings SET facebook_url=?, instagram_url=?, linkedin_url=?, youtube_url=? WHERE id=1");
        $stmt->execute([
            trim($_POST['facebook_url'] ?? ''), trim($_POST['instagram_url'] ?? ''),
            trim($_POST['linkedin_url'] ?? ''), trim($_POST['youtube_url'] ?? '')
        ]);
        redirect('settings.php?success=social&tab=social');
    }
    
    if ($action === 'change_password') {
        $current = $_POST['current_password'] ?? '';
        $new = $_POST['new_password'] ?? '';
        $confirm = $_POST['confirm_password'] ?? '';
        
        if (strlen($new) < 8) {
            redirect('settings.php?error=pass_length&tab=security');
        }
        if ($new !== $confirm) {
            redirect('settings.php?error=pass_match&tab=security');
        }
        
        $admin_id = $_SESSION['admin_id'];
        $user = $pdo->prepare("SELECT password FROM users WHERE id = ?");
        $user->execute([$admin_id]);
        $hash = $user->fetchColumn();
        
        if (password_verify($current, $hash)) {
            $new_hash = password_hash($new, PASSWORD_BCRYPT, ['cost' => 12]);
            $pdo->prepare("UPDATE users SET password = ?, updated_at = NOW() WHERE id = ?")->execute([$new_hash, $admin_id]);
            redirect('settings.php?success=password&tab=security');
        } else {
            redirect('settings.php?error=pass_wrong&tab=security');
        }
    }
}

$settings = get_contact_settings();
$unread_count  = (int)$pdo->query("SELECT COUNT(*) FROM messages WHERE status='unread'")->fetchColumn();
$pending_count = (int)$pdo->query("SELECT COUNT(*) FROM applications WHERE status='pending'")->fetchColumn();

$active_page = 'settings';
$page_title  = 'Settings';
$page_sub    = 'Platform Configuration';
$active_tab  = $_GET['tab'] ?? 'contact';

$flash_success = match ($_GET['success'] ?? '') {
    'contact'  => 'Contact information updated.',
    'social'   => 'Social media links updated.',
    'password' => 'Password changed successfully. Please use it next time you login.',
    default    => '',
};
$flash_error = match ($_GET['error'] ?? '') {
    'pass_length' => 'New password must be at least 8 characters.',
    'pass_match'  => 'New passwords do not match.',
    'pass_wrong'  => 'Current password is incorrect.',
    'csrf'        => 'Security token invalid.',
    default       => '',
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | GTI Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
<div class="admin-layout">
    <?php include __DIR__ . '/includes/sidebar.php'; ?>
    <main class="admin-main">
        <?php include __DIR__ . '/includes/header.php'; ?>

        <div class="admin-content" style="max-width:800px;">

            <?php if ($flash_success): ?>
            <div class="flash-message flash-success"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <?= e($flash_success) ?></div>
            <?php endif; ?>
            <?php if ($flash_error): ?>
            <div class="flash-message flash-error"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg> <?= e($flash_error) ?></div>
            <?php endif; ?>

            <div class="section-card">
                <div class="settings-tabs">
                    <button class="settings-tab <?= $active_tab==='contact' ? 'active' : '' ?>" onclick="switchTab('contact')">Contact Info</button>
                    <button class="settings-tab <?= $active_tab==='social' ? 'active' : '' ?>" onclick="switchTab('social')">Social Media</button>
                    <button class="settings-tab <?= $active_tab==='security' ? 'active' : '' ?>" onclick="switchTab('security')">Security</button>
                </div>
                
                <div class="section-card-body">
                    
                    <!-- Contact Tab -->
                    <div id="tab-contact" class="settings-panel <?= $active_tab==='contact' ? 'active' : '' ?>">
                        <form method="POST" action="">
                            <?= csrf_field() ?>
                            <input type="hidden" name="action" value="update_contact">
                            <div class="dashboard-grid">
                                <div class="form-group">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" name="email" class="form-control" value="<?= e($settings['email'] ?? '') ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" name="phone" class="form-control" value="<?= e($settings['phone'] ?? '') ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">WhatsApp Number</label>
                                    <input type="text" name="whatsapp" class="form-control" value="<?= e($settings['whatsapp'] ?? '') ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Working Hours</label>
                                    <input type="text" name="working_hours" class="form-control" value="<?= e($settings['working_hours'] ?? '') ?>">
                                </div>
                                <div class="form-group span-full">
                                    <label class="form-label">Office Address</label>
                                    <textarea name="address" class="form-control" rows="3"><?= e($settings['address'] ?? '') ?></textarea>
                                </div>
                                <div class="form-group span-full">
                                    <label class="form-label">Google Maps Embed URL</label>
                                    <textarea name="map_url" class="form-control" rows="2"><?= e($settings['map_url'] ?? '') ?></textarea>
                                    <div style="font-size:0.75rem; color:var(--muted); margin-top:4px;">Paste the src URL from Google Maps embed iframe.</div>
                                </div>
                            </div>
                            <button type="submit" class="btn-admin btn-primary-admin">Save Contact Info</button>
                        </form>
                    </div>

                    <!-- Social Tab -->
                    <div id="tab-social" class="settings-panel <?= $active_tab==='social' ? 'active' : '' ?>">
                        <form method="POST" action="">
                            <?= csrf_field() ?>
                            <input type="hidden" name="action" value="update_social">
                            <div class="form-group">
                                <label class="form-label">Facebook URL</label>
                                <input type="url" name="facebook_url" class="form-control" value="<?= e($settings['facebook_url'] ?? '') ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Instagram URL</label>
                                <input type="url" name="instagram_url" class="form-control" value="<?= e($settings['instagram_url'] ?? '') ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label">LinkedIn URL</label>
                                <input type="url" name="linkedin_url" class="form-control" value="<?= e($settings['linkedin_url'] ?? '') ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label">YouTube URL</label>
                                <input type="url" name="youtube_url" class="form-control" value="<?= e($settings['youtube_url'] ?? '') ?>">
                            </div>
                            <button type="submit" class="btn-admin btn-primary-admin">Save Social Links</button>
                        </form>
                    </div>

                    <!-- Security Tab -->
                    <div id="tab-security" class="settings-panel <?= $active_tab==='security' ? 'active' : '' ?>">
                        <form method="POST" action="">
                            <?= csrf_field() ?>
                            <input type="hidden" name="action" value="change_password">
                            
                            <div class="form-group" style="max-width:400px;">
                                <label class="form-label">Current Password</label>
                                <input type="password" name="current_password" class="form-control" required>
                            </div>
                            <hr style="border:0; border-top:1px solid var(--border); margin:1.5rem 0;">
                            <div class="form-group" style="max-width:400px;">
                                <label class="form-label">New Password</label>
                                <input type="password" name="new_password" class="form-control" required minlength="8">
                                <div style="font-size:0.75rem; color:var(--muted); margin-top:4px;">Minimum 8 characters.</div>
                            </div>
                            <div class="form-group" style="max-width:400px;">
                                <label class="form-label">Confirm New Password</label>
                                <input type="password" name="confirm_password" class="form-control" required minlength="8">
                            </div>
                            
                            <button type="submit" class="btn-admin btn-primary-admin" style="background:#ff5252; color:#fff; border-color:#ff5252;">Update Password</button>
                        </form>
                    </div>

                </div>
            </div>
            
        </div>
    </main>
</div>
<script>
function switchTab(tabId) {
    document.querySelectorAll('.settings-tab').forEach(el => el.classList.remove('active'));
    document.querySelectorAll('.settings-panel').forEach(el => el.classList.remove('active'));
    
    event.target.classList.add('active');
    document.getElementById('tab-' + tabId).classList.add('active');
    
    // Update URL without reload
    const url = new URL(window.location);
    url.searchParams.set('tab', tabId);
    window.history.pushState({}, '', url);
}

function toggleSidebar() { document.getElementById('adminSidebar').classList.toggle('open'); document.getElementById('sidebarOverlay').classList.toggle('open'); }
function closeSidebar() { document.getElementById('adminSidebar').classList.remove('open'); document.getElementById('sidebarOverlay').classList.remove('open'); }
</script>
</body>
</html>
