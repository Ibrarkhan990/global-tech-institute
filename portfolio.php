<?php
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="assets/js/theme.js?v=<?= filemtime('assets/js/theme.js') ?>"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio & Projects | Global Tech & Institute</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css?v=<?= filemtime('assets/css/style.css') ?>">
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
    <header class="page-header force-dark-mode" style="position: relative; overflow: hidden; height: 40vh; min-height: 300px; margin-top: 70px;">
        <div class="swiper pageSwiper" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Tech" style="width: 100%; height: 100%; object-fit: cover; filter: brightness(0.3);">
                </div>
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Work" style="width: 100%; height: 100%; object-fit: cover; filter: brightness(0.3);">
                </div>
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Team" style="width: 100%; height: 100%; object-fit: cover; filter: brightness(0.3);">
                </div>
            </div>
        </div>
        <div class="container" style="position: relative; z-index: 2; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
            <div data-aos="fade-down" data-aos-duration="800">
                <h1 id="dynamic-page-title" style="color: var(--gt-text); font-size: 3.5rem; text-shadow: 2px 2px 10px rgba(0,0,0,0.5); text-transform: uppercase; letter-spacing: 2px; margin-bottom: 0;">GLOBAL TECH</h1>
            </div>
            <div id="breadcrumb-container" data-aos="fade-up" data-aos-delay="200" style="margin-top: 1.5rem;"></div>
        </div>
    </header>

    <section class="py-section bg-primary text-white text-center" style="padding-top: 100px; padding-bottom: 60px;">
        <div class="container fade-in">
            <h1 class="fw-bold mb-3">Our Recent Work</h1>
            <p class="lead">Projects delivered by our software house and top students.</p>
        </div>
    </section>

    <section class="py-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 fade-in delay-100">
                    <div class="card custom-card">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Project">
                        <div class="card-body p-4">
                            <span class="badge bg-dark mb-2">E-Commerce</span>
                            <h5 class="fw-bold">TechStore Online Shop</h5>
                            <p class="text-muted small">A full-featured e-commerce platform with payment gateway integration.</p>
                            <div class="mb-3">
                                <span class="badge bg-light text-dark border">PHP</span>
                                <span class="badge bg-light text-dark border">MySQL</span>
                                <span class="badge bg-light text-dark border">Bootstrap</span>
                            </div>
                            <a href="#" class="btn btn-sm btn-outline-custom w-100">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js?v=<?= filemtime('assets/js/main.js') ?>"></script>
</body>
</html>














