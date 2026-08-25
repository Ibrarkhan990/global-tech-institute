<?php
require_once '../includes/functions.php';
require_admin();
define('ADMIN_CONTEXT', true);

$pdo = db();

// ── HANDLE POST ACTIONS ───────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_csrf_or_redirect('courses.php');
    $action = $_POST['action'] ?? '';
    
    if ($action === 'add_course') {
        $title = trim($_POST['title'] ?? '');
        $duration = trim($_POST['duration'] ?? '');
        $level = trim($_POST['level'] ?? '');
        $sort_order = filter_var($_POST['sort_order'] ?? 0, FILTER_VALIDATE_INT);
        $status = $_POST['status'] === 'inactive' ? 'inactive' : 'active';
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
        
        if ($title && $slug) {
            $stmt = $pdo->prepare("INSERT INTO courses (title, slug, duration, level, sort_order, status, created_at) VALUES (?, ?, ?, ?, ?, ?, NOW())");
            try {
                $stmt->execute([$title, $slug, $duration, $level, $sort_order, $status]);
                redirect('courses.php?success=added');
            } catch (PDOException $e) {
                redirect('courses.php?error=exists');
            }
        }
    }
    
    if ($action === 'edit_course') {
        $id = filter_var($_POST['id'] ?? 0, FILTER_VALIDATE_INT);
        $title = trim($_POST['title'] ?? '');
        $duration = trim($_POST['duration'] ?? '');
        $level = trim($_POST['level'] ?? '');
        $sort_order = filter_var($_POST['sort_order'] ?? 0, FILTER_VALIDATE_INT);
        
        if ($id && $title) {
            $stmt = $pdo->prepare("UPDATE courses SET title = ?, duration = ?, level = ?, sort_order = ?, updated_at = NOW() WHERE id = ?");
            $stmt->execute([$title, $duration, $level, $sort_order, $id]);
            redirect('courses.php?success=updated');
        }
    }
    
    if ($action === 'toggle_status') {
        $id = filter_var($_POST['id'] ?? 0, FILTER_VALIDATE_INT);
        if ($id) {
            $pdo->prepare("UPDATE courses SET status = IF(status='active', 'inactive', 'active') WHERE id = ?")->execute([$id]);
            redirect('courses.php?success=status');
        }
    }
    
    if ($action === 'delete_course') {
        $id = filter_var($_POST['id'] ?? 0, FILTER_VALIDATE_INT);
        if ($id) {
            // Check constraints
            $count = $pdo->prepare("SELECT COUNT(*) FROM applications WHERE course_id = ?");
            $count->execute([$id]);
            if ($count->fetchColumn() > 0) {
                redirect('courses.php?error=has_applications');
            } else {
                $pdo->prepare("DELETE FROM courses WHERE id = ?")->execute([$id]);
                redirect('courses.php?success=deleted');
            }
        }
    }
}

// ── FETCH COURSES ─────────────────────────────────────────────────────────
$courses = $pdo->query("
    SELECT c.*, (SELECT COUNT(*) FROM applications WHERE course_id = c.id) as app_count 
    FROM courses c 
    ORDER BY c.sort_order ASC, c.id DESC
")->fetchAll();

$unread_count  = (int)$pdo->query("SELECT COUNT(*) FROM messages WHERE status='unread'")->fetchColumn();
$pending_count = (int)$pdo->query("SELECT COUNT(*) FROM applications WHERE status='pending'")->fetchColumn();

$active_page = 'courses';
$page_title  = 'Courses';
$page_sub    = 'Manage Programs';

$flash_success = match ($_GET['success'] ?? '') {
    'added'   => 'Course added successfully.',
    'updated' => 'Course updated successfully.',
    'status'  => 'Course status toggled.',
    'deleted' => 'Course deleted.',
    default   => '',
};
$flash_error   = match ($_GET['error'] ?? '') {
    'exists'           => 'A course with this title/slug already exists.',
    'has_applications' => 'Cannot delete course: it has existing applications.',
    'csrf'             => 'Security token invalid.',
    default            => '',
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses | GTI Admin</title>
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
            <div class="flash-message flash-success"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <?= e($flash_success) ?></div>
            <?php endif; ?>
            <?php if ($flash_error): ?>
            <div class="flash-message flash-error"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg> <?= e($flash_error) ?></div>
            <?php endif; ?>

            <!-- Add Course -->
            <div class="section-card" id="addCourseCard" style="<?= isset($_GET['add']) ? '' : 'display:none;' ?>">
                <div class="section-card-header">
                    <h2>Add New Course</h2>
                    <button class="btn-admin btn-ghost btn-sm" onclick="document.getElementById('addCourseCard').style.display='none'">Cancel</button>
                </div>
                <div class="section-card-body">
                    <form method="POST" action="">
                        <?= csrf_field() ?>
                        <input type="hidden" name="action" value="add_course">
                        
                        <div class="dashboard-grid" style="grid-template-columns:1fr 1fr;">
                            <div class="form-group">
                                <label class="form-label">Course Title *</label>
                                <input type="text" name="title" class="form-control" required placeholder="e.g. Web Development">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Duration</label>
                                <input type="text" name="duration" class="form-control" placeholder="e.g. 3 Months">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Level</label>
                                <input type="text" name="level" class="form-control" placeholder="e.g. Beginner">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Sort Order</label>
                                <input type="number" name="sort_order" class="form-control" value="0">
                            </div>
                            <div class="form-group span-full">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="active">Active (Visible)</option>
                                    <option value="inactive">Inactive (Hidden)</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn-admin btn-primary-admin">Add Course</button>
                    </form>
                </div>
            </div>

            <!-- List Courses -->
            <div class="section-card">
                <div class="section-card-header">
                    <h2>All Courses</h2>
                    <button class="btn-admin btn-primary-admin btn-sm" onclick="document.getElementById('addCourseCard').style.display='block'">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        Add Course
                    </button>
                </div>
                
                <div class="table-wrapper">
                    <?php if (empty($courses)): ?>
                    <div class="empty-state">
                        <div class="empty-state-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></div>
                        <h3>No courses yet</h3>
                        <p>Add a course to start receiving applications.</p>
                    </div>
                    <?php else: ?>
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th style="width:50px;">#</th>
                                <th>Title</th>
                                <th>Duration & Level</th>
                                <th>Status</th>
                                <th>Apps</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($courses as $c): ?>
                            
                            <!-- Display Row -->
                            <tr id="row-<?= $c['id'] ?>">
                                <td data-label="Order" class="mono"><?= $c['sort_order'] ?></td>
                                <td data-label="Title">
                                    <div class="name-cell"><?= e($c['title']) ?></div>
                                    <div class="sub-cell">/<?= e($c['slug']) ?></div>
                                </td>
                                <td data-label="Duration & Level">
                                    <?= e($c['duration']) ?>
                                    <div class="sub-cell"><?= e($c['level']) ?></div>
                                </td>
                                <td data-label="Status">
                                    <span class="badge <?= $c['status']==='active' ? 'badge-success' : 'badge-muted' ?>">
                                        <span class="badge-dot"></span><?= ucfirst($c['status']) ?>
                                    </span>
                                </td>
                                <td data-label="Apps">
                                    <span class="badge badge-info"><?= $c['app_count'] ?></span>
                                </td>
                                <td data-label="Actions">
                                    <div style="display:flex; gap:6px;">
                                        <button onclick="toggleEdit(<?= $c['id'] ?>)" class="btn-admin btn-ghost btn-xs">Edit</button>
                                        
                                        <form method="POST" action="" style="display:inline;">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="action" value="toggle_status">
                                            <input type="hidden" name="id" value="<?= $c['id'] ?>">
                                            <button type="submit" class="btn-admin btn-ghost btn-xs"><?= $c['status']==='active' ? 'Deactivate' : 'Activate' ?></button>
                                        </form>
                                        
                                        <?php if ($c['app_count'] == 0): ?>
                                        <form method="POST" action="" style="display:inline;" onsubmit="return confirm('Delete this course?');">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="action" value="delete_course">
                                            <input type="hidden" name="id" value="<?= $c['id'] ?>">
                                            <button type="submit" class="btn-admin btn-ghost btn-xs" style="color:#ff5252;">Delete</button>
                                        </form>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                            
                            <!-- Edit Row (Hidden) -->
                            <tr id="edit-<?= $c['id'] ?>" style="display:none; background:var(--surface-2);">
                                <td colspan="6" style="padding:1.5rem;">
                                    <form method="POST" action="">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="action" value="edit_course">
                                        <input type="hidden" name="id" value="<?= $c['id'] ?>">
                                        <div class="dashboard-grid" style="grid-template-columns:1fr 1fr 1fr 1fr;">
                                            <div class="form-group span-full">
                                                <label class="form-label">Title</label>
                                                <input type="text" name="title" class="form-control" value="<?= e($c['title']) ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Duration</label>
                                                <input type="text" name="duration" class="form-control" value="<?= e($c['duration']) ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Level</label>
                                                <input type="text" name="level" class="form-control" value="<?= e($c['level']) ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Sort Order</label>
                                                <input type="number" name="sort_order" class="form-control" value="<?= $c['sort_order'] ?>">
                                            </div>
                                        </div>
                                        <div style="display:flex; gap:1rem; margin-top:1rem;">
                                            <button type="submit" class="btn-admin btn-primary-admin btn-sm">Save Changes</button>
                                            <button type="button" class="btn-admin btn-ghost btn-sm" onclick="toggleEdit(<?= $c['id'] ?>)">Cancel</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </main>
</div>

<script>
function toggleEdit(id) {
    const row = document.getElementById('row-' + id);
    const edit = document.getElementById('edit-' + id);
    if (edit.style.display === 'none') {
        row.style.display = 'none';
        edit.style.display = 'table-row';
    } else {
        row.style.display = 'table-row';
        edit.style.display = 'none';
    }
}
function toggleSidebar() { document.getElementById('adminSidebar').classList.toggle('open'); document.getElementById('sidebarOverlay').classList.toggle('open'); }
function closeSidebar() { document.getElementById('adminSidebar').classList.remove('open'); document.getElementById('sidebarOverlay').classList.remove('open'); }
</script>
</body>
</html>
