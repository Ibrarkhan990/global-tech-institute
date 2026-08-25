<?php
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insight Detail - Global Tech Institute</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/variables.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="stylesheet" href="assets/css/sections.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body class="bg-bg text-text">
    <?php include "includes/navbar.php"; ?>

    <section class="section" style="padding: 10rem 0 4rem 0;">
        <div class="container" style="max-width: 800px;">
            <span class="badge-accent" style="margin-bottom: 2rem; display: inline-block;">TECHNOLOGY</span>
            <h1 style="font-size: clamp(2.5rem, 6vw, 4rem); margin-bottom: 2rem; color: var(--gt-text-strong); line-height: 1.1;">The Future of Digital Architecture</h1>
            <div style="display: flex; gap: 2rem; color: var(--gt-muted); margin-bottom: 4rem; padding-bottom: 2rem; border-bottom: 1px solid var(--gt-border);">
                <span>By Global Tech Team</span>
                <span>August 2026</span>
                <span>8 Min Read</span>
            </div>
            
            <div style="aspect-ratio: 16/9; background: var(--gt-surface); border-radius: 16px; margin-bottom: 4rem; overflow: hidden;">
                <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Tech" style="width: 100%; height: 100%; object-fit: cover;">
            </div>

            <div style="font-size: 1.15rem; line-height: 1.8; color: var(--gt-text);">
                <p style="margin-bottom: 2rem;">Technology is constantly evolving, and keeping up with the latest trends is essential for any modern business. In this article, we explore the fundamental shifts happening in digital architecture and how they impact software development.</p>
                <h2 style="font-size: 2rem; margin: 3rem 0 1.5rem; color: var(--gt-text-strong);">1. The Rise of Microservices</h2>
                <p style="margin-bottom: 2rem;">Monolithic applications are becoming a thing of the past. By breaking down applications into smaller, independent services, development teams can deploy faster and scale more efficiently.</p>
                <h2 style="font-size: 2rem; margin: 3rem 0 1.5rem; color: var(--gt-text-strong);">2. Cloud-Native Development</h2>
                <p style="margin-bottom: 2rem;">Building applications specifically for the cloud has changed how we write code. Containerization, orchestration, and serverless computing are now standard practices for enterprise software.</p>
            </div>
            
            <div style="margin-top: 5rem; padding-top: 3rem; border-top: 1px solid var(--gt-border);">
                <a href="insights.php" class="btn btn-outline">&larr; Back to Insights</a>
            </div>
        </div>
    </section>

    <?php include "includes/footer.php"; ?>
    <script src="assets/js/navigation.js"></script>
</body>
</html>
