<?php
require_once '../includes/functions.php';
require_admin();
define('ADMIN_CONTEXT', true);

$pdo = db();

// ── HANDLE POST ACTIONS ───────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_csrf_or_redirect('messages.php');
    
    $action = $_POST['action'] ?? '';
    
    if ($action === 'delete') {
        $id = filter_var($_POST['id'] ?? 0, FILTER_VALIDATE_INT);
        if ($id) {
            $stmt = $pdo->prepare("DELETE FROM messages WHERE id = ?");
            $stmt->execute([$id]);
            redirect('messages.php?success=deleted');
        }
    } elseif ($action === 'mark_all_read') {
        $pdo->query("UPDATE messages SET status = 'read' WHERE status = 'unread'");
        redirect('messages.php?success=readall');
    }
}

// ── SIDEBAR BADGES ────────────────────────────────────────────────────────
$unread_count  = (int)$pdo->query("SELECT COUNT(*) FROM messages WHERE status='unread'")->fetchColumn();
$pending_count = (int)$pdo->query("SELECT COUNT(*) FROM applications WHERE status='pending'")->fetchColumn();

// ── BUILD FILTER PARAMS ───────────────────────────────────────────────────
$q             = trim($_GET['q'] ?? '');
$status_filter = trim($_GET['status'] ?? '');
$per_page      = 15;
$page          = get_current_page();

$valid_statuses = ['unread', 'read', 'replied', 'archived'];
if ($status_filter && !in_array($status_filter, $valid_statuses, true)) $status_filter = '';

// ── BUILD QUERY ───────────────────────────────────────────────────────────
$where  = 'WHERE 1=1';
$params = [];

if ($q) {
    $like    = "%$q%";
    $where  .= ' AND (name LIKE ? OR email LIKE ? OR subject LIKE ? OR phone LIKE ?)';
    $params  = array_merge($params, [$like, $like, $like, $like]);
}
if ($status_filter) {
    $where  .= ' AND status = ?';
    $params[] = $status_filter;
}

// Pagination Count
$count_stmt = $pdo->prepare("SELECT COUNT(*) FROM messages $where");
$count_stmt->execute($params);
$total_items = (int)$count_stmt->fetchColumn();
$total_pages = max(1, (int)ceil($total_items / $per_page));
$page        = min($page, $total_pages);
$offset      = get_pagination_offset($page, $per_page);

// Fetch Messages
$stmt = $pdo->prepare("SELECT * FROM messages $where ORDER BY id DESC LIMIT $per_page OFFSET $offset");
$stmt->execute($params);
$messages = $stmt->fetchAll();

// Flash messages
$flash_success = match ($_GET['success'] ?? '') {
    'deleted' => 'Message deleted successfully.',
    'readall' => 'All unread messages marked as read.',
    default   => '',
};
$flash_error   = match ($_GET['error'] ?? '') {
    'csrf'    => 'Security token invalid. Please try again.',
    default   => '',
};

$active_page = 'messages';
$page_title  = 'Messages';
$page_sub    = 'Contact Form Submissions';

function build_query(array $extra = []): string {
    global $q, $status_filter;
    $params = array_filter(['q'=>$q, 'status'=>$status_filter]);
    return '?' . http_build_query(array_merge($params, $extra));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages | GTI Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/admin.css">
    <style>
        .msg-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 1.5rem;
            margin-bottom: 1rem;
            display: flex;
            gap: 1.25rem;
            transition: all var(--transition);
        }
        .msg-card:hover { border-color: var(--border-hover); box-shadow: var(--shadow); }
        .msg-card.unread { border-left: 3px solid var(--accent); background: var(--surface-2); }
        .msg-avatar { width: 44px; height: 44px; font-size: 1rem; }
        .msg-content { flex: 1; min-width: 0; }
        .msg-header { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 0.5rem; flex-wrap: wrap; gap: 0.5rem; }
        .msg-sender { font-family: var(--font-display); font-weight: 700; font-size: 1.1rem; color: var(--text-strong); }
        .msg-meta { font-size: 0.8rem; color: var(--muted); display: flex; gap: 1rem; align-items: center; flex-wrap: wrap; }
        .msg-subject { font-weight: 600; font-size: 0.95rem; margin-bottom: 0.5rem; color: var(--text); }
        .msg-body { font-size: 0.875rem; color: var(--muted); background: var(--bg); padding: 1rem; border-radius: var(--radius-md); border: 1px solid var(--border); line-height: 1.6; }
        .msg-actions { margin-top: 1rem; display: flex; justify-content: space-between; align-items: center; }
    </style>
</head>
<body>
<div class="admin-layout">
    <?php include __DIR__ . '/includes/sidebar.php'; ?>
    <main class="admin-main">
        <?php include __DIR__ . '/includes/header.php'; ?>

        <div class="admin-content">

            <?php if ($flash_success): ?>
            <div class="flash-message flash-success">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                <?= e($flash_success) ?>
            </div>
            <?php endif; ?>
            
            <div class="section-card">
                <div class="section-card-header" style="flex-wrap: wrap;">
                    <form method="GET" action="" style="display:flex; gap:0.75rem; flex:1; flex-wrap:wrap;">
                        <div class="filter-search" style="max-width:300px;">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                            <input type="text" name="q" class="form-control" placeholder="Search messages…" value="<?= e($q) ?>">
                        </div>
                        <div class="filter-select">
                            <select name="status" class="form-control" onchange="this.form.submit()">
                                <option value="">All Statuses</option>
                                <?php foreach ($valid_statuses as $s): ?>
                                <option value="<?= e($s) ?>" <?= $status_filter === $s ? 'selected' : '' ?>><?= ucfirst($s) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn-admin btn-ghost">Filter</button>
                        <?php if ($q || $status_filter): ?><a href="messages.php" class="btn-admin btn-ghost">Clear</a><?php endif; ?>
                    </form>

                    <?php if ($unread_count > 0): ?>
                    <form method="POST" action="" onsubmit="return confirm('Mark all unread messages as read?');">
                        <?= csrf_field() ?>
                        <input type="hidden" name="action" value="mark_all_read">
                        <button type="submit" class="btn-admin btn-ghost" style="color:var(--color-info);">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            Mark All Read
                        </button>
                    </form>
                    <?php endif; ?>
                </div>

                <div class="section-card-body" style="background:var(--bg);">
                    <?php if (empty($messages)): ?>
                    <div class="empty-state">
                        <div class="empty-state-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                        </div>
                        <h3>No messages found</h3>
                        <p>No contact inquiries match your criteria.</p>
                    </div>
                    <?php else: ?>
                    
                        <?php foreach ($messages as $msg): ?>
                        <div class="msg-card <?= $msg['status'] === 'unread' ? 'unread' : '' ?>" id="msg-<?= $msg['id'] ?>">
                            <div class="msg-avatar"><?= strtoupper(substr($msg['name'], 0, 1)) ?></div>
                            <div class="msg-content">
                                <div class="msg-header">
                                    <div>
                                        <div class="msg-sender"><?= e($msg['name']) ?></div>
                                        <div class="msg-meta">
                                            <span><a href="mailto:<?= e($msg['email']) ?>" style="text-decoration:underline;"><?= e($msg['email']) ?></a></span>
                                            <?php if ($msg['phone']): ?><span><?= e($msg['phone']) ?></span><?php endif; ?>
                                            <span><?= format_datetime($msg['created_at']) ?></span>
                                        </div>
                                    </div>
                                    <span class="badge <?= get_status_badge_class($msg['status']) ?>" id="badge-<?= $msg['id'] ?>">
                                        <span class="badge-dot"></span>
                                        <?= ucfirst(e($msg['status'])) ?>
                                    </span>
                                </div>
                                
                                <div class="msg-subject">Subject: <?= e($msg['subject'] ?: $msg['inquiry_type']) ?></div>
                                <div class="msg-body"><?= nl2br(e($msg['message'])) ?></div>
                                
                                <div class="msg-actions">
                                    <div class="inline-form">
                                        <select class="status-select" id="sel-<?= $msg['id'] ?>" onchange="updateMsgStatus(<?= $msg['id'] ?>)">
                                            <?php foreach ($valid_statuses as $s): ?>
                                            <option value="<?= e($s) ?>" <?= $msg['status'] === $s ? 'selected' : '' ?>><?= ucfirst($s) ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    
                                    <form method="POST" action="" onsubmit="return confirm('Delete this message permanently?');">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="action" value="delete">
                                        <input type="hidden" name="id" value="<?= $msg['id'] ?>">
                                        <button type="submit" class="btn-admin btn-ghost btn-sm" style="color:#ff5252; border-color:transparent;">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                    <?php endif; ?>
                </div>

                <!-- Pagination -->
                <?php if ($total_pages > 1): ?>
                <div class="pagination">
                    <span class="pagination-info">Page <?= $page ?> of <?= $total_pages ?></span>
                    <div class="pagination-links">
                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <a href="<?= e(build_query(['page' => $i])) ?>" class="page-link <?= $i === $page ? 'active' : '' ?>"><?= $i ?></a>
                        <?php endfor; ?>
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </main>
</div>

<div class="toast-container" id="toastContainer"></div>

<script>
const CSRF_TOKEN = <?= json_encode(generate_csrf_token()) ?>;

async function updateMsgStatus(msgId) {
    const sel = document.getElementById('sel-' + msgId);
    const newStatus = sel.value;
    
    sel.disabled = true;

    try {
        const resp = await fetch('../ajax/update_message_status.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `id=${msgId}&status=${encodeURIComponent(newStatus)}&csrf_token=${encodeURIComponent(CSRF_TOKEN)}`
        });
        const data = await resp.json();

        if (data.success) {
            const badge = document.getElementById('badge-' + msgId);
            const classes = { unread:'badge-warning', read:'badge-info', replied:'badge-success', archived:'badge-muted' };
            badge.className = 'badge ' + (classes[newStatus] || 'badge-muted');
            badge.innerHTML = '<span class="badge-dot"></span>' + newStatus.charAt(0).toUpperCase() + newStatus.slice(1);
            
            const card = document.getElementById('msg-' + msgId);
            if (newStatus !== 'unread') card.classList.remove('unread');
            else card.classList.add('unread');

            showToast('Message status updated.');
        } else {
            showToast(data.message || 'Update failed.', 'error');
        }
    } catch (e) {
        showToast('Network error.', 'error');
    } finally {
        sel.disabled = false;
    }
}

function toggleSidebar() {
    document.getElementById('adminSidebar').classList.toggle('open');
    document.getElementById('sidebarOverlay').classList.toggle('open');
}
function closeSidebar() {
    document.getElementById('adminSidebar').classList.remove('open');
    document.getElementById('sidebarOverlay').classList.remove('open');
}

function showToast(msg, type = 'success') {
    const c = document.getElementById('toastContainer');
    const t = document.createElement('div');
    t.className = 'toast toast-' + type;
    const color = type === 'success' ? '#C7F000' : '#ff5252';
    t.innerHTML = `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="${color}" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>${msg}`;
    c.appendChild(t);
    setTimeout(() => { t.style.animation = 'slideOut 0.3s ease forwards'; setTimeout(() => t.remove(), 300); }, 3000);
}
</script>
</body>
</html>
