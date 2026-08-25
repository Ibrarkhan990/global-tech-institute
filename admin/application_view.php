<?php
require_once '../includes/functions.php';
require_admin();
define('ADMIN_CONTEXT', true);

$pdo = db();
$id = filter_var($_GET['id'] ?? 0, FILTER_VALIDATE_INT);

if (!$id) {
    redirect('applications.php');
}

// ── HANDLE POST UPDATE ────────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_csrf_or_redirect('application_view.php?id=' . $id);
    
    $action = $_POST['action'] ?? '';
    if ($action === 'update') {
        $status = $_POST['status'] ?? '';
        $notes  = trim($_POST['admin_notes'] ?? '');
        
        if (validate_application_status($status)) {
            $stmt = $pdo->prepare("UPDATE applications SET status = ?, admin_notes = ?, updated_at = NOW() WHERE id = ?");
            $stmt->execute([$status, $notes, $id]);
            redirect("application_view.php?id={$id}&success=1");
        } else {
            redirect("application_view.php?id={$id}&error=invalid");
        }
    }
}

// ── FETCH APPLICATION ─────────────────────────────────────────────────────
$stmt = $pdo->prepare("
    SELECT a.*, c.title as course_title 
    FROM applications a 
    JOIN courses c ON a.course_id = c.id 
    WHERE a.id = ?
");
$stmt->execute([$id]);
$app = $stmt->fetch();

if (!$app) {
    redirect('applications.php');
}

$unread_count = (int)$pdo->query("SELECT COUNT(*) FROM messages WHERE status='unread'")->fetchColumn();

$active_page = 'applications';
$page_title  = 'Application Details';
$page_sub    = e($app['application_no']);

$flash_success = isset($_GET['success']) ? 'Application updated successfully.' : '';
$flash_error   = match ($_GET['error'] ?? '') {
    'csrf'    => 'Security token invalid. Please try again.',
    'invalid' => 'Invalid status provided.',
    default   => '',
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($app['application_no']) ?> | GTI Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
<div class="admin-layout">
    <?php include __DIR__ . '/includes/sidebar.php'; ?>
    <main class="admin-main">
        <?php include __DIR__ . '/includes/header.php'; ?>

        <div class="admin-content">
            
            <div style="margin-bottom:1.5rem;">
                <a href="applications.php" class="btn-admin btn-ghost btn-sm">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                    Back to Applications
                </a>
            </div>

            <?php if ($flash_success): ?>
            <div class="flash-message flash-success">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                <?= e($flash_success) ?>
            </div>
            <?php endif; ?>
            <?php if ($flash_error): ?>
            <div class="flash-message flash-error">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
                <?= e($flash_error) ?>
            </div>
            <?php endif; ?>

            <div class="dashboard-grid" style="grid-template-columns: 2fr 1fr;">
                
                <!-- Left Column: Details -->
                <div class="section-card">
                    <div class="section-card-header">
                        <h2>Application Information</h2>
                        <span class="badge <?= get_status_badge_class($app['status']) ?>">
                            <span class="badge-dot"></span>
                            <?= ucfirst(e($app['status'])) ?>
                        </span>
                    </div>
                    <div class="section-card-body">
                        <div class="detail-grid">
                            
                            <div class="detail-item detail-full">
                                <div class="detail-label">Application Number</div>
                                <div class="detail-value mono" style="font-size:1.1rem; color:var(--accent);"><?= e($app['application_no']) ?></div>
                            </div>

                            <div class="detail-item">
                                <div class="detail-label">Full Name</div>
                                <div class="detail-value"><?= e($app['full_name']) ?></div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Father's Name</div>
                                <div class="detail-value"><?= e($app['father_name'] ?: '—') ?></div>
                            </div>

                            <div class="detail-item">
                                <div class="detail-label">Email Address</div>
                                <div class="detail-value"><a href="mailto:<?= e($app['email']) ?>" style="text-decoration:underline;"><?= e($app['email']) ?></a></div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Phone & WhatsApp</div>
                                <div class="detail-value">
                                    <?= e($app['phone']) ?>
                                    <?php if ($app['whatsapp']): ?>
                                    <span style="color:var(--muted);">/ <?= e($app['whatsapp']) ?> (WA)</span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="detail-item">
                                <div class="detail-label">Gender & DOB</div>
                                <div class="detail-value">
                                    <?= e($app['gender'] ?: '—') ?> 
                                    <?= $app['date_of_birth'] ? ' · ' . format_date($app['date_of_birth']) : '' ?>
                                </div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">City</div>
                                <div class="detail-value"><?= e($app['city'] ?: '—') ?></div>
                            </div>

                            <div class="detail-item detail-full">
                                <div class="detail-label">Full Address</div>
                                <div class="detail-value"><?= nl2br(e($app['address'] ?: '—')) ?></div>
                            </div>

                            <div class="detail-item detail-full" style="border-top:1px solid var(--border); padding-top:1rem; margin-top:0.5rem;"></div>

                            <div class="detail-item detail-full">
                                <div class="detail-label">Course Applied For</div>
                                <div class="detail-value" style="font-weight:700;"><?= e($app['course_title']) ?></div>
                            </div>
                            
                            <div class="detail-item">
                                <div class="detail-label">Batch</div>
                                <div class="detail-value"><?= e($app['batch'] ?: '—') ?></div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Timing</div>
                                <div class="detail-value"><?= e($app['timing'] ?: '—') ?></div>
                            </div>

                            <div class="detail-item detail-full" style="border-top:1px solid var(--border); padding-top:1rem; margin-top:0.5rem;"></div>

                            <div class="detail-item">
                                <div class="detail-label">Education</div>
                                <div class="detail-value"><?= e($app['education'] ?: '—') ?></div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Institution</div>
                                <div class="detail-value"><?= e($app['institution'] ?: '—') ?></div>
                            </div>

                            <?php if ($app['message']): ?>
                            <div class="detail-item detail-full">
                                <div class="detail-label">Additional Message</div>
                                <div class="detail-value" style="background:var(--surface-2); padding:1rem; border-radius:var(--radius-md); font-size:0.85rem;">
                                    <?= nl2br(e($app['message'])) ?>
                                </div>
                            </div>
                            <?php endif; ?>

                            <div class="detail-item detail-full">
                                <div class="detail-label">Submitted On</div>
                                <div class="detail-value" style="color:var(--muted); font-size:0.8rem;"><?= format_datetime($app['created_at']) ?></div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Right Column: Status & Notes -->
                <div class="section-card">
                    <div class="section-card-header">
                        <h2>Manage Status</h2>
                    </div>
                    <div class="section-card-body">
                        <form method="POST" action="">
                            <?= csrf_field() ?>
                            <input type="hidden" name="action" value="update">
                            
                            <div class="form-group">
                                <label class="form-label">Application Status</label>
                                <select name="status" class="form-control">
                                    <option value="pending" <?= $app['status']==='pending' ? 'selected' : '' ?>>Pending</option>
                                    <option value="reviewing" <?= $app['status']==='reviewing' ? 'selected' : '' ?>>Reviewing</option>
                                    <option value="approved" <?= $app['status']==='approved' ? 'selected' : '' ?>>Approved</option>
                                    <option value="rejected" <?= $app['status']==='rejected' ? 'selected' : '' ?>>Rejected</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Admin Notes (Internal only)</label>
                                <textarea name="admin_notes" class="form-control" placeholder="Add private notes about this application here..."><?= e($app['admin_notes']) ?></textarea>
                            </div>
                            
                            <button type="submit" class="btn-admin btn-primary-admin" style="width:100%; justify-content:center;">
                                Save Changes
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>
</div>
<script>
function toggleSidebar() {
    document.getElementById('adminSidebar').classList.toggle('open');
    document.getElementById('sidebarOverlay').classList.toggle('open');
}
function closeSidebar() {
    document.getElementById('adminSidebar').classList.remove('open');
    document.getElementById('sidebarOverlay').classList.remove('open');
}
</script>
</body>
</html>
