<?php
/**
 * admin/includes/header.php — Reusable Admin Page Header
 *
 * Expected vars from parent:
 *   $page_title  (string) - Main heading e.g. "Dashboard"
 *   $page_sub    (string) - Optional sub-text / breadcrumb
 *   $unread_count (int)  - For notification badge
 */
?>
<header class="admin-header">
    <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle sidebar" onclick="toggleSidebar()">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/>
        </svg>
    </button>

    <div class="header-title">
        <h1><?= e($page_title ?? 'Dashboard') ?></h1>
        <?php if (!empty($page_sub)): ?>
        <div class="breadcrumb">Admin Panel › <?= e($page_sub) ?></div>
        <?php endif; ?>
    </div>

    <div class="header-actions">
        <?php if (!empty($unread_count) && $unread_count > 0): ?>
        <a href="messages.php" class="header-notif-btn" title="<?= (int)$unread_count ?> unread message(s)">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
            </svg>
            <span class="notif-dot"></span>
        </a>
        <?php endif; ?>

        <div style="font-size:0.8rem; color: var(--muted); display:flex; align-items:center; gap:0.5rem;">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 1 0-16 0"/>
            </svg>
            <?= e($_SESSION['admin_name'] ?? 'Admin') ?>
        </div>
    </div>
</header>
