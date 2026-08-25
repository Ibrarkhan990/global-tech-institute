<?php
require_once '../includes/functions.php';
require_admin();
define('ADMIN_CONTEXT', true);

$pdo = db();

// ── SIDEBAR BADGES ────────────────────────────────────────────────────────
$unread_count  = (int)$pdo->query("SELECT COUNT(*) FROM messages WHERE status='unread'")->fetchColumn();
$pending_count = (int)$pdo->query("SELECT COUNT(*) FROM applications WHERE status='pending'")->fetchColumn();

// ── BUILD FILTER PARAMS ───────────────────────────────────────────────────
$q             = trim($_GET['q'] ?? '');
$status_filter = trim($_GET['status'] ?? '');
$course_filter = trim($_GET['course_id'] ?? '');
$per_page      = 20;
$page          = get_current_page();

$valid_statuses = ['pending', 'reviewing', 'approved', 'rejected'];
if ($status_filter && !in_array($status_filter, $valid_statuses, true)) $status_filter = '';
if ($course_filter && !filter_var($course_filter, FILTER_VALIDATE_INT, ['options'=>['min_range'=>1]])) $course_filter = '';

// ── BUILD QUERY ───────────────────────────────────────────────────────────
$where  = 'WHERE 1=1';
$params = [];

if ($q) {
    $like    = "%$q%";
    $where  .= ' AND (a.full_name LIKE ? OR a.email LIKE ? OR a.application_no LIKE ? OR a.phone LIKE ?)';
    $params  = array_merge($params, [$like, $like, $like, $like]);
}
if ($status_filter) {
    $where  .= ' AND a.status = ?';
    $params[] = $status_filter;
}
if ($course_filter) {
    $where  .= ' AND a.course_id = ?';
    $params[] = (int)$course_filter;
}

// Total count for pagination
$count_stmt = $pdo->prepare("SELECT COUNT(*) FROM applications a $where");
$count_stmt->execute($params);
$total_items = (int)$count_stmt->fetchColumn();
$total_pages = max(1, (int)ceil($total_items / $per_page));
$page        = min($page, $total_pages);
$offset      = get_pagination_offset($page, $per_page);

// Fetch applications
$stmt = $pdo->prepare("
    SELECT a.*, c.title as course_title
    FROM applications a
    JOIN courses c ON a.course_id = c.id
    $where
    ORDER BY a.id DESC
    LIMIT $per_page OFFSET $offset
");
$stmt->execute($params);
$applications = $stmt->fetchAll();

// Courses for filter dropdown
$all_courses = $pdo->query("SELECT id, title FROM courses ORDER BY sort_order, title")->fetchAll();

// Flash messages
$flash_success = isset($_GET['success']) ? 'Application status updated successfully.' : '';
$flash_error   = match ($_GET['error'] ?? '') {
    'csrf'    => 'Security token invalid. Please try again.',
    'invalid' => 'Invalid status value.',
    default   => '',
};

$active_page = 'applications';
$page_title  = 'Applications';
$page_sub    = 'Admissions Management';

// Build query string for pagination (preserve filters)
function build_query(array $extra = []): string {
    global $q, $status_filter, $course_filter;
    $params = array_filter(['q'=>$q, 'status'=>$status_filter, 'course_id'=>$course_filter]);
    return '?' . http_build_query(array_merge($params, $extra));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications | GTI Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/admin.css">
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

            <?php if ($flash_error): ?>
            <div class="flash-message flash-error">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
                <?= e($flash_error) ?>
            </div>
            <?php endif; ?>

            <div class="section-card">
                <!-- Filter Bar -->
                <form method="GET" action="">
                    <div class="filter-bar">
                        <div class="filter-search">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                            <input type="text" name="q" class="form-control" placeholder="Search name, email, phone, app no…" value="<?= e($q) ?>">
                        </div>

                        <div class="filter-select">
                            <select name="status" class="form-control" onchange="this.form.submit()">
                                <option value="">All Statuses</option>
                                <?php foreach ($valid_statuses as $s): ?>
                                <option value="<?= e($s) ?>" <?= $status_filter === $s ? 'selected' : '' ?>><?= ucfirst($s) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="filter-select">
                            <select name="course_id" class="form-control" onchange="this.form.submit()">
                                <option value="">All Courses</option>
                                <?php foreach ($all_courses as $c): ?>
                                <option value="<?= (int)$c['id'] ?>" <?= (string)$course_filter === (string)$c['id'] ? 'selected' : '' ?>><?= e($c['title']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <button type="submit" class="btn-admin btn-primary-admin">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                            Search
                        </button>

                        <?php if ($q || $status_filter || $course_filter): ?>
                        <a href="applications.php" class="btn-admin btn-ghost">Clear</a>
                        <?php endif; ?>
                    </div>
                </form>

                <!-- Results Info -->
                <div style="padding:0.875rem 1.5rem; border-bottom:1px solid var(--border); font-size:0.82rem; color:var(--muted); display:flex; justify-content:space-between; align-items:center; background:var(--surface-2);">
                    <span>
                        Showing <?= number_format(min(($page-1)*$per_page+1, $total_items)) ?>–<?= number_format(min($page*$per_page, $total_items)) ?> of <strong style="color:var(--text)"><?= number_format($total_items) ?></strong> results
                    </span>
                    <?php if ($q || $status_filter || $course_filter): ?>
                    <span>Filtered results</span>
                    <?php endif; ?>
                </div>

                <!-- Table -->
                <div class="table-wrapper">
                    <?php if (empty($applications)): ?>
                    <div class="empty-state">
                        <div class="empty-state-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                        </div>
                        <h3>No applications found</h3>
                        <p><?= $q || $status_filter || $course_filter ? 'Try adjusting your search or filters.' : 'Applications submitted via the Apply page will appear here.' ?></p>
                    </div>
                    <?php else: ?>
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>App No.</th>
                                <th>Applicant</th>
                                <th>Course</th>
                                <th>Phone</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th style="min-width:220px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($applications as $app): ?>
                            <tr id="row-<?= (int)$app['id'] ?>">
                                <td data-label="App No." class="mono"><?= e($app['application_no']) ?></td>
                                <td data-label="Applicant">
                                    <div class="name-cell"><?= e($app['full_name']) ?></div>
                                    <div class="sub-cell"><?= e($app['email']) ?></div>
                                </td>
                                <td data-label="Course">
                                    <?= e($app['course_title']) ?>
                                    <?php if ($app['batch'] || $app['timing']): ?>
                                    <div class="sub-cell"><?= e($app['batch']) ?><?= $app['batch'] && $app['timing'] ? ' · ' : '' ?><?= e($app['timing']) ?></div>
                                    <?php endif; ?>
                                </td>
                                <td data-label="Phone" style="color:var(--muted);"><?= e($app['phone']) ?></td>
                                <td data-label="Date" style="color:var(--muted);"><?= format_date($app['created_at']) ?></td>
                                <td data-label="Status">
                                    <span class="badge <?= get_status_badge_class($app['status']) ?>" id="badge-<?= (int)$app['id'] ?>">
                                        <span class="badge-dot"></span>
                                        <?= ucfirst(e($app['status'])) ?>
                                    </span>
                                </td>
                                <td data-label="Actions">
                                    <div style="display:flex;gap:6px;align-items:center;flex-wrap:wrap;">
                                        <a href="application_view.php?id=<?= (int)$app['id'] ?>" class="btn-admin btn-ghost btn-xs">View</a>

                                        <div class="inline-form">
                                            <select class="status-select" id="sel-<?= (int)$app['id'] ?>" style="font-size:0.75rem;">
                                                <?php foreach ($valid_statuses as $s): ?>
                                                <option value="<?= e($s) ?>" <?= $app['status'] === $s ? 'selected' : '' ?>><?= ucfirst($s) ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <button
                                                class="btn-admin btn-primary-admin btn-xs"
                                                onclick="updateStatus(<?= (int)$app['id'] ?>)"
                                                id="savebtn-<?= (int)$app['id'] ?>">
                                                Save
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php endif; ?>
                </div>

                <!-- Pagination -->
                <?php if ($total_pages > 1): ?>
                <div class="pagination">
                    <span class="pagination-info">Page <?= $page ?> of <?= $total_pages ?></span>
                    <div class="pagination-links">
                        <a href="<?= e(build_query(['page' => 1])) ?>" class="page-link <?= $page <= 1 ? 'disabled' : '' ?>" title="First">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="11 17 6 12 11 7"/><polyline points="18 17 13 12 18 7"/></svg>
                        </a>
                        <a href="<?= e(build_query(['page' => $page - 1])) ?>" class="page-link <?= $page <= 1 ? 'disabled' : '' ?>" title="Previous">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
                        </a>

                        <?php
                        $range_start = max(1, min($page - 2, $total_pages - 4));
                        $range_end   = min($total_pages, $range_start + 4);
                        for ($i = $range_start; $i <= $range_end; $i++): ?>
                        <a href="<?= e(build_query(['page' => $i])) ?>" class="page-link <?= $i === $page ? 'active' : '' ?>"><?= $i ?></a>
                        <?php endfor; ?>

                        <a href="<?= e(build_query(['page' => $page + 1])) ?>" class="page-link <?= $page >= $total_pages ? 'disabled' : '' ?>" title="Next">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
                        </a>
                        <a href="<?= e(build_query(['page' => $total_pages])) ?>" class="page-link <?= $page >= $total_pages ? 'disabled' : '' ?>" title="Last">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="13 17 18 12 13 7"/><polyline points="6 17 11 12 6 7"/></svg>
                        </a>
                    </div>
                </div>
                <?php endif; ?>

            </div><!-- .section-card -->
        </div><!-- .admin-content -->
    </main>
</div>

<div class="toast-container" id="toastContainer"></div>

<script>
const CSRF_TOKEN = <?= json_encode(generate_csrf_token()) ?>;

async function updateStatus(appId) {
    const sel     = document.getElementById('sel-' + appId);
    const btn     = document.getElementById('savebtn-' + appId);
    const newStatus = sel.value;

    btn.disabled   = true;
    btn.innerHTML  = '<span class="spinner"></span>';

    try {
        const resp = await fetch('../ajax/update_application_status.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `id=${appId}&status=${encodeURIComponent(newStatus)}&csrf_token=${encodeURIComponent(CSRF_TOKEN)}`
        });
        const data = await resp.json();

        if (data.success) {
            // Update badge in DOM
            const badge    = document.getElementById('badge-' + appId);
            const classes  = { pending:'badge-warning', reviewing:'badge-info', approved:'badge-success', rejected:'badge-danger' };
            badge.className = 'badge ' + (classes[newStatus] || 'badge-muted');
            badge.innerHTML = '<span class="badge-dot"></span>' + newStatus.charAt(0).toUpperCase() + newStatus.slice(1);
            showToast('Status updated to ' + newStatus);
        } else {
            showToast(data.message || 'Update failed.', 'error');
        }
    } catch (e) {
        showToast('Network error. Please try again.', 'error');
    } finally {
        btn.disabled  = false;
        btn.innerHTML = 'Save';
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
