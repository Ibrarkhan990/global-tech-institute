<?php
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="assets/js/theme.js?v=<?= filemtime('assets/js/theme.js') ?>"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details | Global Tech & Institute</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/variables.css?v=<?= filemtime('assets/css/variables.css') ?>">
    <link rel="stylesheet" href="assets/css/base.css?v=<?= filemtime('assets/css/base.css') ?>">
    <link rel="stylesheet" href="assets/css/components.css?v=<?= filemtime('assets/css/components.css') ?>">
    <link rel="stylesheet" href="assets/css/sections.css?v=<?= filemtime('assets/css/sections.css') ?>">
    <link rel="stylesheet" href="assets/css/responsive.css?v=<?= filemtime('assets/css/responsive.css') ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="assets/css/animations.css?v=<?= filemtime('assets/css/animations.css') ?>">
<script>
        (function() {
            const savedTheme = localStorage.getItem('gt-theme');
            const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            if (savedTheme === 'light' || (!savedTheme && !systemPrefersDark)) {
                document.documentElement.setAttribute('data-theme', 'light');
            } else {
                document.documentElement.setAttribute('data-theme', 'dark');
            }
        })();
    </script>
</head>
<body>

        <?php include 'includes/navbar.php'; ?>
        <!-- Page Header Slider -->
    <header class="page-header " style="position: relative; overflow: hidden; height: 40vh; min-height: 300px; margin-top: 70px;">
        <div class="swiper pageSwiper" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Tech" class="hero-img">
                </div>
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Work" class="hero-img">
                </div>
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Team" class="hero-img">
                </div>
            </div>
        </div>
        <div class="container" style="position: relative; z-index: 2; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
            <div data-aos="fade-down" data-aos-duration="800">
                <h1 id="dynamic-page-title" style="color: var(--gt-text); font-size: 3.5rem; text-shadow: 2px 2px 10px rgba(0,0,0,0.5); text-transform: uppercase; letter-spacing: 2px; margin-bottom: 0;">GLOBAL TECH</h1>
            </div>
            </div>
    </header>

    <section class="section" style="padding-top: 150px;">
        <div class="container">
            <div class="grid" style="grid-template-columns: 2fr 1fr;">
                <div class="fade-in">
                    <span class="section-label">COURSE</span>
                    <h1 style="font-size: 3.5rem;">Full Stack<br>Web Development</h1>
                    <p class="text-muted" style="font-size: 1.25rem; margin-bottom: var(--space-lg);">Master front-end and back-end development through hands-on projects.</p>
                    
                    <h3 style="margin-top: var(--space-lg);">Curriculum</h3>
                    <div style="margin-top: var(--space-md); border-top: 1px solid var(--gt-border);">
                        <div class="accordion-item">
                            <div class="accordion-header">
                                Module 01 / HTML & CSS Fundamentals
                            </div>
                            <div class="accordion-content">
                                Learn the building blocks of the web. Semantic HTML, CSS3, layouts, and responsive design.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                Module 02 / JavaScript Programming
                            </div>
                            <div class="accordion-content">
                                DOM manipulation, events, asynchronous JS, and modern ES6+ features.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                Module 03 / PHP & MySQL
                            </div>
                            <div class="accordion-content">
                                Server-side logic, database design, CRUD operations, and secure authentication.
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="fade-in delay-200">
                    <div class="tech-card" style="position: sticky; top: 120px;">
                        <span class="text-accent" style="font-family: var(--font-display); font-weight: 700; margin-bottom: var(--space-sm); display: block;">OVERVIEW</span>
                        <ul style="margin-bottom: var(--space-lg);">
                            <li style="display: flex; justify-content: space-between; padding: 12px 0; border-bottom: 1px solid var(--gt-border);">
                                <span class="text-muted">Duration</span>
                                <strong>3 Months</strong>
                            </li>
                            <li style="display: flex; justify-content: space-between; padding: 12px 0; border-bottom: 1px solid var(--gt-border);">
                                <span class="text-muted">Level</span>
                                <strong>Beginner</strong>
                            </li>
                            <li style="display: flex; justify-content: space-between; padding: 12px 0; border-bottom: 1px solid var(--gt-border);">
                                <span class="text-muted">Certificate</span>
                                <strong>Included</strong>
                            </li>
                        </ul>
                        <a href="apply.html?course=fullstack" class="btn btn-primary" style="width: 100%;">APPLY FOR THIS COURSE →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/navigation.js"></script>
    <script src="assets/js/main.js?v=<?= filemtime('assets/js/main.js') ?>"></script>
    <script src="assets/js/courses.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/animations.js"></script>
</body>
</html>

















