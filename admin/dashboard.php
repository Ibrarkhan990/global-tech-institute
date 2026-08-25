<?php
require_once '../includes/functions.php';
require_admin();
define('ADMIN_CONTEXT', true);

$pdo = db();

// ── REAL KPI QUERIES ──────────────────────────────────────────────────────
$total_apps    = (int)$pdo->query("SELECT COUNT(*) FROM applications")->fetchColumn();
$pending_apps  = (int)$pdo->query("SELECT COUNT(*) FROM applications WHERE status='pending'")->fetchColumn();
$unread_count  = (int)$pdo->query("SELECT COUNT(*) FROM messages WHERE status='unread'")->fetchColumn();
$active_courses= (int)$pdo->query("SELECT COUNT(*) FROM courses WHERE status='active'")->fetchColumn();
$pending_count = $pending_apps;

// ── STATUS DISTRIBUTION ───────────────────────────────────────────────────
$status_rows = $pdo->query("SELECT status, COUNT(*) as cnt FROM applications GROUP BY status")->fetchAll();
$status_map  = ['pending'=>0, 'reviewing'=>0, 'approved'=>0, 'rejected'=>0];
foreach ($status_rows as $row) {
    if (isset($status_map[$row['status']])) {
        $status_map[$row['status']] = (int)$row['cnt'];
    }
}
$status_colors = [
    'pending'   => '#ffc107',
    'reviewing' => '#66b0ff',
    'approved'  => '#C7F000',
    'rejected'  => '#ff5252',
];

// ── APPLICATIONS BY MONTH (last 6 months) — for Chart.js ─────────────────
$chart_labels = [];
$chart_data   = [];
for ($i = 5; $i >= 0; $i--) {
    $ts    = strtotime("-$i months");
    $label = date('M Y', $ts);
    $y     = date('Y', $ts);
    $m     = date('m', $ts);
    $count_stmt = $pdo->prepare("SELECT COUNT(*) FROM applications WHERE YEAR(created_at) = ? AND MONTH(created_at) = ?");
    $count_stmt->execute([$y, $m]);
    $chart_labels[] = $label;
    $chart_data[]   = (int)$count_stmt->fetchColumn();
}

// ── RECENT APPLICATIONS ───────────────────────────────────────────────────
$recent_apps = $pdo->query("
    SELECT a.id, a.application_no, a.full_name, a.email, c.title as course_title, a.created_at, a.status
    FROM applications a
    JOIN courses c ON a.course_id = c.id
    ORDER BY a.id DESC
    LIMIT 8
")->fetchAll();

// ── RECENT MESSAGES ───────────────────────────────────────────────────────
$recent_msgs = $pdo->query("
    SELECT id, name, email, subject, message, status, created_at
    FROM messages
    ORDER BY id DESC
    LIMIT 5
")->fetchAll();

// ── PAGE META ─────────────────────────────────────────────────────────────
$active_page = 'dashboard';
$page_title  = 'Dashboard';
$page_sub    = 'Overview';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | GTI Admin</title>
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

            <!-- KPI Cards -->
            <div class="kpi-grid">
                <div class="kpi-card kpi-total">
                    <div class="kpi-card-top">
                        <span class="kpi-label">Total Applications</span>
                        <div class="kpi-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <polyline points="14 2 14 8 20 8"/>
                            </svg>
                        </div>
                    </div>
                    <div class="kpi-value"><?= number_format($total_apps) ?></div>
                    <div class="kpi-footer">All-time applications received</div>
                </div>

                <div class="kpi-card kpi-pending">
                    <div class="kpi-card-top">
                        <span class="kpi-label">Pending Review</span>
                        <div class="kpi-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12 6 12 12 16 14"/>
                            </svg>
                        </div>
                    </div>
                    <div class="kpi-value"><?= number_format($pending_apps) ?></div>
                    <div class="kpi-footer">Awaiting your review</div>
                </div>

                <div class="kpi-card kpi-unread">
                    <div class="kpi-card-top">
                        <span class="kpi-label">Unread Messages</span>
                        <div class="kpi-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="kpi-value"><?= number_format($unread_count) ?></div>
                    <div class="kpi-footer">New contact messages</div>
                </div>

                <div class="kpi-card kpi-courses">
                    <div class="kpi-card-top">
                        <span class="kpi-label">Active Courses</span>
                        <div class="kpi-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="kpi-value"><?= number_format($active_courses) ?></div>
                    <div class="kpi-footer">Courses available for enrollment</div>
                </div>
            </div>

            <!-- Analytics Grid -->
            <div class="dashboard-grid" style="margin-bottom:1.5rem;">

                <!-- Applications by Month Chart -->
                <div class="section-card">
                    <div class="section-card-header">
                        <h2>Applications by Month</h2>
                        <span style="font-size:0.75rem;color:var(--muted);">Last 6 months</span>
                    </div>
                    <div class="section-card-body">
                        <?php if (array_sum($chart_data) === 0): ?>
                        <div class="empty-state" style="padding:2rem;">
                            <div class="empty-state-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                            </div>
                            <p>No application data yet. Chart will populate as applications come in.</p>
                        </div>
                        <?php else: ?>
                        <div class="chart-container">
                            <canvas id="appsChart"></canvas>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Status Distribution -->
                <div class="section-card">
                    <div class="section-card-header">
                        <h2>Application Status</h2>
                        <span style="font-size:0.75rem;color:var(--muted);"><?= $total_apps ?> total</span>
                    </div>
                    <div class="section-card-body">
                        <?php if ($total_apps === 0): ?>
                        <div class="empty-state" style="padding:2rem;">
                            <div class="empty-state-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/></svg>
                            </div>
                            <p>No applications yet. Status distribution will appear here.</p>
                        </div>
                        <?php else: ?>
                        <div class="status-bar-group">
                            <?php foreach ($status_map as $status => $count): ?>
                            <?php $pct = $total_apps > 0 ? round(($count / $total_apps) * 100) : 0; ?>
                            <div class="status-bar-item">
                                <div class="status-bar-label">
                                    <span><?= ucfirst(e($status)) ?></span>
                                    <span><?= $count ?> <span style="color:var(--muted);font-weight:400;">(<?= $pct ?>%)</span></span>
                                </div>
                                <div class="status-bar-track">
                                    <div class="status-bar-fill" style="width:<?= $pct ?>%;background:<?= $status_colors[$status] ?? '#555' ?>;"></div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

            </div>

            <!-- Recent Applications -->
            <div class="section-card" style="margin-bottom:1.5rem;">
                <div class="section-card-header">
                    <h2>Recent Applications</h2>
                    <a href="applications.php" class="btn-admin btn-ghost btn-sm">View All →</a>
                </div>
                <div class="table-wrapper">
                    <?php if (empty($recent_apps)): ?>
                    <div class="empty-state">
                        <div class="empty-state-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                        </div>
                        <h3>No applications yet</h3>
                        <p>Applications submitted via the Apply page will appear here.</p>
                    </div>
                    <?php else: ?>
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>App No.</th>
                                <th>Applicant</th>
                                <th>Course</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($recent_apps as $app): ?>
                            <tr>
                                <td data-label="App No." class="mono"><?= e($app['application_no']) ?></td>
                                <td data-label="Applicant">
                                    <div class="name-cell"><?= e($app['full_name']) ?></div>
                                    <div class="sub-cell"><?= e($app['email']) ?></div>
                                </td>
                                <td data-label="Course"><?= e($app['course_title']) ?></td>
                                <td data-label="Date" style="color:var(--muted);"><?= format_date($app['created_at']) ?></td>
                                <td data-label="Status">
                                    <span class="badge <?= get_status_badge_class($app['status']) ?>">
                                        <span class="badge-dot"></span>
                                        <?= ucfirst(e($app['status'])) ?>
                                    </span>
                                </td>
                                <td data-label="Action">
                                    <a href="application_view.php?id=<?= (int)$app['id'] ?>" class="btn-admin btn-ghost btn-xs">View</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Recent Messages -->
            <div class="section-card">
                <div class="section-card-header">
                    <h2>Recent Messages</h2>
                    <a href="messages.php" class="btn-admin btn-ghost btn-sm">View All →</a>
                </div>
                <div class="section-card-body" style="padding-top:0;">
                    <?php if (empty($recent_msgs)): ?>
                    <div class="empty-state">
                        <div class="empty-state-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                        </div>
                        <h3>No messages yet</h3>
                        <p>Contact form submissions will appear here.</p>
                    </div>
                    <?php else: ?>
                    <?php foreach ($recent_msgs as $msg): ?>
                    <div class="msg-preview-card">
                        <div class="msg-avatar"><?= strtoupper($msg['name'][0] ?? '?') ?></div>
                        <div class="msg-preview-content">
                            <div class="msg-preview-name">
                                <?= e($msg['name']) ?>
                                <?php if ($msg['status'] === 'unread'): ?>
                                <span class="badge badge-warning" style="font-size:0.65rem;padding:2px 7px;margin-left:6px;">New</span>
                                <?php endif; ?>
                            </div>
                            <div class="msg-preview-subject"><?= e($msg['subject'] ?: 'No subject') ?></div>
                            <div class="msg-preview-text"><?= e(mb_substr($msg['message'], 0, 100)) ?>...</div>
                        </div>
                        <div style="display:flex;flex-direction:column;align-items:flex-end;gap:6px;flex-shrink:0;">
                            <span class="msg-preview-meta"><?= format_date($msg['created_at'], 'd M') ?></span>
                            <a href="messages.php" class="btn-admin btn-ghost btn-xs">Open</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

        </div><!-- .admin-content -->
    </main>
</div>

<!-- Toast Container -->
<div class="toast-container" id="toastContainer"></div>

<?php if (array_sum($chart_data) > 0): ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
const chartLabels = <?= json_encode($chart_labels) ?>;
const chartData   = <?= json_encode($chart_data) ?>;

const ctx = document.getElementById('appsChart').getContext('2d');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: chartLabels,
        datasets: [{
            label: 'Applications',
            data: chartData,
            backgroundColor: 'rgba(199, 240, 0, 0.25)',
            borderColor: '#C7F000',
            borderWidth: 2,
            borderRadius: 6,
            borderSkipped: false,
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { display: false },
            tooltip: {
                backgroundColor: '#111418',
                borderColor: 'rgba(255,255,255,0.1)',
                borderWidth: 1,
                titleColor: '#fff',
                bodyColor: '#8b949e',
                padding: 10,
            }
        },
        scales: {
            x: {
                grid: { color: 'rgba(255,255,255,0.05)', drawBorder: false },
                ticks: { color: '#8b949e', font: { size: 11 } }
            },
            y: {
                beginAtZero: true,
                grid: { color: 'rgba(255,255,255,0.05)', drawBorder: false },
                ticks: {
                    color: '#8b949e',
                    font: { size: 11 },
                    precision: 0
                }
            }
        }
    }
});
</script>
<?php endif; ?>

<script>
// Mobile sidebar toggle
function toggleSidebar() {
    document.getElementById('adminSidebar').classList.toggle('open');
    document.getElementById('sidebarOverlay').classList.toggle('open');
}
function closeSidebar() {
    document.getElementById('adminSidebar').classList.remove('open');
    document.getElementById('sidebarOverlay').classList.remove('open');
}

// Toast notification
function showToast(msg, type = 'success') {
    const c = document.getElementById('toastContainer');
    const t = document.createElement('div');
    t.className = 'toast toast-' + type;
    t.innerHTML = `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="${type==='success'?'#C7F000':'#ff5252'}" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>${msg}`;
    c.appendChild(t);
    setTimeout(() => { t.style.animation = 'slideOut 0.3s ease forwards'; setTimeout(() => t.remove(), 300); }, 3000);
}
</script>
</body>
</html>
