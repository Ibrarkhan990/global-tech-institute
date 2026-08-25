<?php
/**
 * admin/includes/sidebar.php — Reusable Admin Sidebar
 *
 * Usage: include this file, passing $active_page string:
 *   $active_page = 'dashboard'; // or 'applications', 'messages', 'courses', 'settings'
 *   include __DIR__ . '/includes/sidebar.php';
 *
 * Also requires: $unread_count (int) for badge — pass from parent page.
 */

// Determine admin initials for avatar
$admin_name = $_SESSION['admin_name'] ?? 'Admin';
$admin_initials = implode('', array_map(fn($part) => strtoupper($part[0] ?? ''), array_slice(explode(' ', $admin_name), 0, 2)));

$nav_items = [
    'dashboard'    => ['label' => 'Dashboard',    'href' => 'dashboard.php',    'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>'],
    'applications' => ['label' => 'Applications', 'href' => 'applications.php', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>'],
    'messages'     => ['label' => 'Messages',     'href' => 'messages.php',     'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>'],
    'courses'      => ['label' => 'Courses',      'href' => 'courses.php',      'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>'],
    'settings'     => ['label' => 'Settings',     'href' => 'settings.php',     'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>'],
];
?>
<aside class="admin-sidebar" id="adminSidebar">
    <div class="sidebar-brand">
        <div class="sidebar-logo-mark">GTI</div>
        <div class="sidebar-brand-text">
            <span class="brand-name">Global Tech</span>
            <span class="brand-sub">Admin Panel</span>
        </div>
    </div>

    <nav class="sidebar-nav">
        <div class="nav-section-label">Navigation</div>
        <?php foreach ($nav_items as $key => $item): ?>
        <a href="<?= e($item['href']) ?>"
           class="sidebar-link <?= ($active_page ?? '') === $key ? 'active' : '' ?>">
            <?= $item['icon'] ?>
            <span><?= e($item['label']) ?></span>
            <?php if ($key === 'messages' && !empty($unread_count) && $unread_count > 0): ?>
            <span class="sidebar-badge"><?= min($unread_count, 99) ?></span>
            <?php endif; ?>
            <?php if ($key === 'applications' && !empty($pending_count) && $pending_count > 0): ?>
            <span class="sidebar-badge" style="background: rgba(255,193,7,0.2); color: #ffc107;"><?= min($pending_count, 99) ?></span>
            <?php endif; ?>
        </a>
        <?php endforeach; ?>
    </nav>

    <div class="sidebar-footer">
        <div class="sidebar-user">
            <div class="user-avatar"><?= e($admin_initials) ?></div>
            <div class="user-info">
                <div class="user-name"><?= e($admin_name) ?></div>
                <div class="user-role">Administrator</div>
            </div>
        </div>
        <a href="logout.php" class="sidebar-link" style="color: #ff5252;" onclick="return confirm('Are you sure you want to logout?')">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:#ff5252;">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                <polyline points="16 17 21 12 16 7"/>
                <line x1="21" y1="12" x2="9" y2="12"/>
            </svg>
            <span>Logout</span>
        </a>
    </div>
</aside>

<!-- Mobile overlay -->
<div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>
