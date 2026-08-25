<?php
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="assets/js/theme.js?v=<?= filemtime('assets/js/theme.js') ?>"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses | Global Tech & Institute</title>
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
    <!-- Hero Section (Index Style) -->
    <header class="hero force-dark-mode" style="position: relative; overflow: hidden; min-height: 100vh; padding-bottom: 80px;">
        <!-- Swiper Container -->
        <div class="swiper heroSwiper" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Technology" style="width: 100%; height: 100%; object-fit: cover; filter: brightness(0.4);">
                </div>
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Code" style="width: 100%; height: 100%; object-fit: cover; filter: brightness(0.4);">
                </div>
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Team" style="width: 100%; height: 100%; object-fit: cover; filter: brightness(0.4);">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="container" style="position: relative; z-index: 2; height: 100%; display: flex; flex-direction: column; justify-content: flex-start; padding-top: 100px;">
            <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
                <div id="breadcrumb-container" style="margin-bottom: 2rem;"></div>
                <h1 style="color: var(--gt-text); text-shadow: 2px 2px 10px rgba(0,0,0,0.5);">Learn Fast.<br>Code Hard.<br><span class="text-accent">Shape the Future.</span></h1>
                <p style="color: #e0e0e0; text-shadow: 1px 1px 5px rgba(0,0,0,0.5); max-width: 600px;">Explore our industry-leading programs designed to transform beginners into highly-paid technology professionals.</p>
                <div class="hero-actions" style="margin-top: 2rem;">
                    <a href="#explore-courses" class="btn btn-primary" onclick="event.preventDefault(); document.querySelector('#explore-courses').scrollIntoView({behavior: 'smooth'})">View All Programs →</a>
                </div>
            </div>
        </div>
        <div class="hero-metadata">
            PRACTICAL EDUCATION<br>
            INDUSTRY FOCUSED<br><br>
            <span class="text-accent" style="font-weight: bold;">ADMISSIONS OPEN</span>
        </div>
    </header>
    
    <div id="explore-courses"></div>

    <section class="section bg-surface">
        <div class="container">
            <div class="course-section-wrapper">
                <!-- Centered Header & Filters -->
                <div class="course-header" data-aos="fade-up" style="text-align: center; max-width: 800px; margin: 0 auto 4rem; position: relative;">
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); max-width: 100vw; max-height: 100vh; width: 300px; height: 300px; background: var(--gt-accent); filter: blur(120px); opacity: 0.1; z-index: 0;"></div>
                    
                    <div style="position: relative; z-index: 1;">
                        <span style="display: inline-block; padding: 6px 14px; background: var(--gt-focus-ring); border: 1px solid var(--gt-focus-ring); color: var(--gt-accent); font-family: var(--font-display); font-weight: 700; font-size: 0.8rem; border-radius: 30px; margin-bottom: 1.5rem; letter-spacing: 2px;">02 / EDUCATION</span>
                        <h2 style="font-size: clamp(3.5rem, 6vw, 5rem); line-height: 1; margin-bottom: 2rem; letter-spacing: -2px;">Master<br>The<br><span style="color: transparent; -webkit-text-stroke: 1.5px #fff;">Future.</span></h2>
                        <p class="text-muted" style="font-size: 1.15rem; margin-bottom: 3rem; line-height: 1.6; max-width: 600px; margin-left: auto; margin-right: auto;">Industry-leading programs designed to transform beginners into highly-paid professionals.</p>
                        
                        <style>
                            .course-filters-row {
                                display: flex;
                                justify-content: center;
                                flex-wrap: wrap;
                                gap: 12px;
                            }
                            .course-filters-row .filter-btn {
                                display: flex !important;
                                align-items: center;
                                gap: 10px;
                                padding: 12px 28px !important;
                                border-radius: 50px !important;
                                background: var(--gt-card-hover) !important;
                                color: #aaa !important;
                                border: none !important;
                                font-family: var(--font-primary) !important;
                                font-size: 1rem !important;
                                font-weight: 500 !important;
                                text-transform: none !important;
                                letter-spacing: 0 !important;
                                width: auto !important;
                                transition: all 0.3s ease !important;
                                cursor: pointer;
                            }
                            .course-filters-row .filter-btn svg {
                                stroke: #aaa;
                                transition: all 0.3s ease;
                            }
                            .course-filters-row .filter-btn:hover {
                                background: rgba(255, 255, 255, 0.12) !important;
                                color: var(--gt-text) !important;
                                padding-left: 28px !important;
                            }
                            .course-filters-row .filter-btn:hover svg {
                                stroke: #fff;
                            }
                            .course-filters-row .filter-btn.active {
                                background: var(--gt-accent) !important;
                                color: var(--gt-inverted-text) !important;
                                font-weight: 700 !important;
                                padding-left: 28px !important;
                                box-shadow: 0 4px 15px var(--gt-focus-ring);
                            }
                            .course-filters-row .filter-btn.active svg {
                                stroke: #000;
                            }
                        </style>
                        <div class="course-filters-row">
                            <button class="filter-btn active" data-filter="all">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
                                <span>All Programs</span>
                            </button>
                            <button class="filter-btn" data-filter="tech">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                                <span>Development</span>
                            </button>
                            <button class="filter-btn" data-filter="digital">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                                <span>IT & Digital</span>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Cards Grid -->
                <div class="course-list" data-aos="fade-up" data-aos-delay="150" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 2rem;">
                    
                    <!-- 1. Python with AI -->
                    <div class="course-item" data-category="tech" style="background: var(--gt-surface); border: 1px solid var(--gt-border); border-radius: 24px; padding: 2.5rem; position: relative; overflow: hidden; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);" onmouseover="this.style.transform='translateY(-5px) scale(1.01)'; this.style.borderColor='var(--gt-focus-ring)'; this.style.boxShadow='0 30px 60px rgba(0,0,0,0.4)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.borderColor='var(--gt-border)'; this.style.boxShadow='none';">
                        <div style="position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: var(--gt-accent);"></div>
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                            <div style="display: flex; gap: 10px;">
                                <span style="background: var(--gt-focus-ring); border: 1px solid var(--gt-focus-ring); color: var(--gt-accent); padding: 6px 14px; border-radius: 30px; font-size: 0.75rem; font-weight: 800; letter-spacing: 1px; display: flex; align-items: center; gap: 6px;"><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg> BESTSELLER</span>
                                <span style="background: var(--gt-card-hover); color: var(--gt-text); padding: 6px 14px; border-radius: 30px; font-size: 0.75rem; font-weight: 700; letter-spacing: 1px;">TECH</span>
                            </div>
                            <span style="font-family: var(--font-display); font-size: 3.5rem; color: rgba(255,255,255,0.03); font-weight: 800; line-height: 0.8;">01</span>
                        </div>
                        <h3 style="font-size: 2.2rem; margin-bottom: 1rem; color: var(--gt-text); letter-spacing: -0.5px;">Python with AI</h3>
                        <p class="text-muted" style="margin-bottom: 2rem; font-size: 1.1rem; line-height: 1.6; max-width: 90%;">Master Python programming and build intelligent AI models, machine learning algorithms, and automation scripts.</p>
                        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-bottom: 2.5rem; background: var(--gt-input-bg); padding: 1.5rem; border-radius: 16px;">
                            <div><div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Duration</div><div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 3 Months</div></div>
                            <div><div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Level</div><div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><path d="M18 20V10M12 20V4M6 20v-4"/></svg> Advanced</div></div>
                            <div><div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Certificate</div><div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Included</div></div>
                        </div>
                        <div style="display: flex; gap: 1rem;">
                            <a href="course-details.php" class="btn" style="background: var(--gt-card-hover); color: var(--gt-text); border-radius: 12px; padding: 16px; flex: 1; text-align: center; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.background='var(--gt-border)'" onmouseout="this.style.background='var(--gt-border)'">View Syllabus</a>
                            <a href="apply.php" class="btn" style="background: var(--gt-accent); color: var(--gt-inverted-text); border-radius: 12px; padding: 16px; flex: 1.5; text-align: center; font-weight: 800; display: flex; justify-content: center; align-items: center; gap: 10px; transition: all 0.3s;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">ENROLL NOW <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
                        </div>
                    </div>

                    <!-- 2. Web Development -->
                    <div class="course-item" data-category="tech" style="background: var(--gt-surface); border: 1px solid var(--gt-border); border-radius: 24px; padding: 2.5rem; position: relative; overflow: hidden; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);" onmouseover="this.style.transform='translateY(-5px) scale(1.01)'; this.style.borderColor='var(--gt-focus-ring)'; this.style.boxShadow='0 30px 60px rgba(0,0,0,0.4)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.borderColor='var(--gt-border)'; this.style.boxShadow='none';">
                        <div style="position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: #fff; opacity: 0.2;"></div>
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                            <div style="display: flex; gap: 10px;"><span style="background: var(--gt-card-hover); color: var(--gt-text); padding: 6px 14px; border-radius: 30px; font-size: 0.75rem; font-weight: 700; letter-spacing: 1px;">TECH</span></div>
                            <span style="font-family: var(--font-display); font-size: 3.5rem; color: rgba(255,255,255,0.03); font-weight: 800; line-height: 0.8;">02</span>
                        </div>
                        <h3 style="font-size: 2.2rem; margin-bottom: 1rem; color: var(--gt-text); letter-spacing: -0.5px;">Web Development</h3>
                        <p class="text-muted" style="margin-bottom: 2rem; font-size: 1.1rem; line-height: 1.6; max-width: 90%;">Master HTML, CSS, JavaScript, PHP, and MySQL. Build scalable, high-performance web applications from scratch.</p>
                        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-bottom: 2.5rem; background: var(--gt-input-bg); padding: 1.5rem; border-radius: 16px;">
                            <div><div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Duration</div><div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 3 Months</div></div>
                            <div><div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Level</div><div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><path d="M18 20V10M12 20V4M6 20v-4"/></svg> All Levels</div></div>
                            <div><div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Certificate</div><div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Included</div></div>
                        </div>
                        <div style="display: flex; gap: 1rem;">
                            <a href="course-details.php" class="btn" style="background: var(--gt-card-hover); color: var(--gt-text); border-radius: 12px; padding: 16px; flex: 1; text-align: center; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.background='var(--gt-border)'" onmouseout="this.style.background='var(--gt-border)'">View Syllabus</a>
                            <a href="apply.php" class="btn" style="background: var(--gt-accent); color: var(--gt-inverted-text); border-radius: 12px; padding: 16px; flex: 1.5; text-align: center; font-weight: 800; display: flex; justify-content: center; align-items: center; gap: 10px; transition: all 0.3s;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">ENROLL NOW <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
                        </div>
                    </div>

                    <!-- 3. CIT -->
                    <div class="course-item" data-category="tech" style="background: var(--gt-surface); border: 1px solid var(--gt-border); border-radius: 24px; padding: 2.5rem; position: relative; overflow: hidden; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);" onmouseover="this.style.transform='translateY(-5px) scale(1.01)'; this.style.borderColor='var(--gt-focus-ring)'; this.style.boxShadow='0 30px 60px rgba(0,0,0,0.4)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.borderColor='var(--gt-border)'; this.style.boxShadow='none';">
                        <div style="position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: #fff; opacity: 0.2;"></div>
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                            <div style="display: flex; gap: 10px;"><span style="background: var(--gt-card-hover); color: var(--gt-text); padding: 6px 14px; border-radius: 30px; font-size: 0.75rem; font-weight: 700; letter-spacing: 1px;">TECH</span></div>
                            <span style="font-family: var(--font-display); font-size: 3.5rem; color: rgba(255,255,255,0.03); font-weight: 800; line-height: 0.8;">03</span>
                        </div>
                        <h3 style="font-size: 2.2rem; margin-bottom: 1rem; color: var(--gt-text); letter-spacing: -0.5px;">CIT (Certificate in IT)</h3>
                        <p class="text-muted" style="margin-bottom: 2rem; font-size: 1.1rem; line-height: 1.6; max-width: 90%;">A complete foundation course in Information Technology, covering software, hardware, and basic programming.</p>
                        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-bottom: 2.5rem; background: var(--gt-input-bg); padding: 1.5rem; border-radius: 16px;">
                            <div><div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Duration</div><div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 3 Months</div></div>
                            <div><div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Level</div><div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><path d="M18 20V10M12 20V4M6 20v-4"/></svg> Beginner</div></div>
                            <div><div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Certificate</div><div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Included</div></div>
                        </div>
                        <div style="display: flex; gap: 1rem;">
                            <a href="course-details.php" class="btn" style="background: var(--gt-card-hover); color: var(--gt-text); border-radius: 12px; padding: 16px; flex: 1; text-align: center; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.background='var(--gt-border)'" onmouseout="this.style.background='var(--gt-border)'">View Syllabus</a>
                            <a href="apply.php" class="btn" style="background: var(--gt-accent); color: var(--gt-inverted-text); border-radius: 12px; padding: 16px; flex: 1.5; text-align: center; font-weight: 800; display: flex; justify-content: center; align-items: center; gap: 10px; transition: all 0.3s;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">ENROLL NOW <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
                        </div>
                    </div>

                    <!-- 4. DIT -->
                    <div class="course-item" data-category="tech" style="background: var(--gt-surface); border: 1px solid var(--gt-border); border-radius: 24px; padding: 2.5rem; position: relative; overflow: hidden; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);" onmouseover="this.style.transform='translateY(-5px) scale(1.01)'; this.style.borderColor='var(--gt-focus-ring)'; this.style.boxShadow='0 30px 60px rgba(0,0,0,0.4)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.borderColor='var(--gt-border)'; this.style.boxShadow='none';">
                        <div style="position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: #fff; opacity: 0.2;"></div>
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                            <div style="display: flex; gap: 10px;"><span style="background: var(--gt-card-hover); color: var(--gt-text); padding: 6px 14px; border-radius: 30px; font-size: 0.75rem; font-weight: 700; letter-spacing: 1px;">TECH</span></div>
                            <span style="font-family: var(--font-display); font-size: 3.5rem; color: rgba(255,255,255,0.03); font-weight: 800; line-height: 0.8;">04</span>
                        </div>
                        <h3 style="font-size: 2.2rem; margin-bottom: 1rem; color: var(--gt-text); letter-spacing: -0.5px;">DIT (Diploma in IT)</h3>
                        <p class="text-muted" style="margin-bottom: 2rem; font-size: 1.1rem; line-height: 1.6; max-width: 90%;">An advanced diploma providing in-depth training in programming, networking, and IT infrastructure.</p>
                        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-bottom: 2.5rem; background: var(--gt-input-bg); padding: 1.5rem; border-radius: 16px;">
                            <div><div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Duration</div><div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 6 Months</div></div>
                            <div><div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Level</div><div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><path d="M18 20V10M12 20V4M6 20v-4"/></svg> Intermediate</div></div>
                            <div><div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Certificate</div><div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Included</div></div>
                        </div>
                        <div style="display: flex; gap: 1rem;">
                            <a href="course-details.php" class="btn" style="background: var(--gt-card-hover); color: var(--gt-text); border-radius: 12px; padding: 16px; flex: 1; text-align: center; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.background='var(--gt-border)'" onmouseout="this.style.background='var(--gt-border)'">View Syllabus</a>
                            <a href="apply.php" class="btn" style="background: var(--gt-accent); color: var(--gt-inverted-text); border-radius: 12px; padding: 16px; flex: 1.5; text-align: center; font-weight: 800; display: flex; justify-content: center; align-items: center; gap: 10px; transition: all 0.3s;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">ENROLL NOW <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
                        </div>
                    </div>

                    <!-- 5. MS Office Automation -->
                    <div class="course-item" data-category="digital" style="background: var(--gt-surface); border: 1px solid var(--gt-border); border-radius: 24px; padding: 2.5rem; position: relative; overflow: hidden; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);" onmouseover="this.style.transform='translateY(-5px) scale(1.01)'; this.style.borderColor='var(--gt-focus-ring)'; this.style.boxShadow='0 30px 60px rgba(0,0,0,0.4)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.borderColor='var(--gt-border)'; this.style.boxShadow='none';">
                        <div style="position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: #fff; opacity: 0.2;"></div>
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                            <div style="display: flex; gap: 10px;"><span style="background: var(--gt-card-hover); color: var(--gt-text); padding: 6px 14px; border-radius: 30px; font-size: 0.75rem; font-weight: 700; letter-spacing: 1px;">DIGITAL SKILLS</span></div>
                            <span style="font-family: var(--font-display); font-size: 3.5rem; color: rgba(255,255,255,0.03); font-weight: 800; line-height: 0.8;">05</span>
                        </div>
                        <h3 style="font-size: 2.2rem; margin-bottom: 1rem; color: var(--gt-text); letter-spacing: -0.5px;">MS Office Automation</h3>
                        <p class="text-muted" style="margin-bottom: 2rem; font-size: 1.1rem; line-height: 1.6; max-width: 90%;">Become highly proficient in Word, Excel, PowerPoint, and modern office automation tools.</p>
                        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-bottom: 2.5rem; background: var(--gt-input-bg); padding: 1.5rem; border-radius: 16px;">
                            <div><div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Duration</div><div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 2 Months</div></div>
                            <div><div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Level</div><div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><path d="M18 20V10M12 20V4M6 20v-4"/></svg> Beginner</div></div>
                            <div><div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Certificate</div><div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Included</div></div>
                        </div>
                        <div style="display: flex; gap: 1rem;">
                            <a href="course-details.php" class="btn" style="background: var(--gt-card-hover); color: var(--gt-text); border-radius: 12px; padding: 16px; flex: 1; text-align: center; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.background='var(--gt-border)'" onmouseout="this.style.background='var(--gt-border)'">View Syllabus</a>
                            <a href="apply.php" class="btn" style="background: var(--gt-accent); color: var(--gt-inverted-text); border-radius: 12px; padding: 16px; flex: 1.5; text-align: center; font-weight: 800; display: flex; justify-content: center; align-items: center; gap: 10px; transition: all 0.3s;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">ENROLL NOW <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
                        </div>
                    </div>

                    <!-- 6. English Language -->
                    <div class="course-item" data-category="digital" style="background: var(--gt-surface); border: 1px solid var(--gt-border); border-radius: 24px; padding: 2.5rem; position: relative; overflow: hidden; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);" onmouseover="this.style.transform='translateY(-5px) scale(1.01)'; this.style.borderColor='var(--gt-focus-ring)'; this.style.boxShadow='0 30px 60px rgba(0,0,0,0.4)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.borderColor='var(--gt-border)'; this.style.boxShadow='none';">
                        <div style="position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: #fff; opacity: 0.2;"></div>
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                            <div style="display: flex; gap: 10px;"><span style="background: var(--gt-card-hover); color: var(--gt-text); padding: 6px 14px; border-radius: 30px; font-size: 0.75rem; font-weight: 700; letter-spacing: 1px;">DIGITAL SKILLS</span></div>
                            <span style="font-family: var(--font-display); font-size: 3.5rem; color: rgba(255,255,255,0.03); font-weight: 800; line-height: 0.8;">06</span>
                        </div>
                        <h3 style="font-size: 2.2rem; margin-bottom: 1rem; color: var(--gt-text); letter-spacing: -0.5px;">English Language</h3>
                        <p class="text-muted" style="margin-bottom: 2rem; font-size: 1.1rem; line-height: 1.6; max-width: 90%;">Spoken English and professional communication skills to help you excel in the global freelance market.</p>
                        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-bottom: 2.5rem; background: var(--gt-input-bg); padding: 1.5rem; border-radius: 16px;">
                            <div><div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Duration</div><div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 3 Months</div></div>
                            <div><div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Level</div><div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><path d="M18 20V10M12 20V4M6 20v-4"/></svg> All Levels</div></div>
                            <div><div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Certificate</div><div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Included</div></div>
                        </div>
                        <div style="display: flex; gap: 1rem;">
                            <a href="course-details.php" class="btn" style="background: var(--gt-card-hover); color: var(--gt-text); border-radius: 12px; padding: 16px; flex: 1; text-align: center; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.background='var(--gt-border)'" onmouseout="this.style.background='var(--gt-border)'">View Syllabus</a>
                            <a href="apply.php" class="btn" style="background: var(--gt-accent); color: var(--gt-inverted-text); border-radius: 12px; padding: 16px; flex: 1.5; text-align: center; font-weight: 800; display: flex; justify-content: center; align-items: center; gap: 10px; transition: all 0.3s;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">ENROLL NOW <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
                        </div>
                    </div>

                    <!-- 7. Automation -->
                    <div class="course-item" data-category="digital" style="background: var(--gt-surface); border: 1px solid var(--gt-border); border-radius: 24px; padding: 2.5rem; position: relative; overflow: hidden; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);" onmouseover="this.style.transform='translateY(-5px) scale(1.01)'; this.style.borderColor='var(--gt-focus-ring)'; this.style.boxShadow='0 30px 60px rgba(0,0,0,0.4)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.borderColor='var(--gt-border)'; this.style.boxShadow='none';">
                        <div style="position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: #fff; opacity: 0.2;"></div>
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                            <div style="display: flex; gap: 10px;">
                                <span style="background: var(--gt-focus-ring); border: 1px solid var(--gt-focus-ring); color: var(--gt-accent); padding: 6px 14px; border-radius: 30px; font-size: 0.75rem; font-weight: 800; letter-spacing: 1px; display: flex; align-items: center; gap: 6px;"><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg> TRENDING</span>
                                <span style="background: var(--gt-card-hover); color: var(--gt-text); padding: 6px 14px; border-radius: 30px; font-size: 0.75rem; font-weight: 700; letter-spacing: 1px;">DIGITAL SKILLS</span>
                            </div>
                            <span style="font-family: var(--font-display); font-size: 3.5rem; color: rgba(255,255,255,0.03); font-weight: 800; line-height: 0.8;">07</span>
                        </div>
                        <h3 style="font-size: 2.2rem; margin-bottom: 1rem; color: var(--gt-text); letter-spacing: -0.5px;">FB, TikTok & YT Automation</h3>
                        <p class="text-muted" style="margin-bottom: 2rem; font-size: 1.1rem; line-height: 1.6; max-width: 90%;">Learn to automate social media channels, create viral content strategies, and monetize on Facebook, TikTok & YouTube.</p>
                        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-bottom: 2.5rem; background: var(--gt-input-bg); padding: 1.5rem; border-radius: 16px;">
                            <div><div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Duration</div><div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 2 Months</div></div>
                            <div><div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Level</div><div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><path d="M18 20V10M12 20V4M6 20v-4"/></svg> Beginner</div></div>
                            <div><div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Certificate</div><div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Included</div></div>
                        </div>
                        <div style="display: flex; gap: 1rem;">
                            <a href="course-details.php" class="btn" style="background: var(--gt-card-hover); color: var(--gt-text); border-radius: 12px; padding: 16px; flex: 1; text-align: center; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.background='var(--gt-border)'" onmouseout="this.style.background='var(--gt-border)'">View Syllabus</a>
                            <a href="apply.php" class="btn" style="background: var(--gt-accent); color: var(--gt-inverted-text); border-radius: 12px; padding: 16px; flex: 1.5; text-align: center; font-weight: 800; display: flex; justify-content: center; align-items: center; gap: 10px; transition: all 0.3s;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">ENROLL NOW <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section force-dark-mode" style="padding: 6rem 0;">
        <div class="container">
            <div data-aos="zoom-in" style="position: relative; background: linear-gradient(135deg, rgba(30,35,40,0.8) 0%, rgba(10,12,15,1) 100%); border: 1px solid var(--gt-focus-ring); border-radius: 32px; padding: 6rem 2rem; text-align: center; overflow: hidden; box-shadow: 0 30px 60px rgba(0,0,0,0.6);">
                
                <!-- Background Effects -->
                <div style="position: absolute; top: -150px; left: -150px; max-width: 100vw; max-height: 100vh; width: 400px; height: 400px; background: var(--gt-accent); filter: blur(120px); opacity: 0.15; z-index: 0; border-radius: 50%;"></div>
                <div style="position: absolute; bottom: -150px; right: -150px; max-width: 100vw; max-height: 100vh; width: 400px; height: 400px; background: var(--gt-accent-soft); filter: blur(120px); opacity: 0.1; z-index: 0; border-radius: 50%;"></div>
                
                <!-- Grid pattern background -->
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.2; z-index: 0; background-image: linear-gradient(var(--gt-border) 1px, transparent 1px), linear-gradient(90deg, var(--gt-border) 1px, transparent 1px); background-size: 30px 30px;"></div>

                <div style="position: relative; z-index: 1;">
                    <span style="display: inline-flex; align-items: center; gap: 8px; padding: 8px 20px; background: var(--gt-card-hover); border: 1px solid var(--gt-border); color: var(--gt-text); font-family: var(--font-display); font-weight: 700; font-size: 0.9rem; border-radius: 30px; margin-bottom: 2rem; letter-spacing: 2px;"><span style="color: var(--gt-accent); font-size: 1.2rem; line-height: 1;">●</span> READY TO START?</span>
                    
                    <h2 style="font-size: clamp(2rem, 8vw, 5.5rem); line-height: 1.1; margin-bottom: 1.5rem; letter-spacing: -2px;">Your Future<br><span style="color: transparent; -webkit-text-stroke: 1px var(--gt-accent);">Starts With One Decision.</span></h2>
                    
                    <p class="text-muted" style="font-size: 1.25rem; margin-bottom: 3.5rem; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.6;">Join thousands of students and transform your career. Learn the skills. Build the projects. Create the future.</p>
                    
                    <div style="display: flex; justify-content: center; gap: 1.5rem; flex-wrap: wrap;">
                        <a href="apply.php" style="background: var(--gt-accent); color: var(--gt-inverted-text); font-weight: 800; padding: 18px 45px; border-radius: 14px; font-size: 1.1rem; display: flex; align-items: center; gap: 12px; transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275); text-decoration: none; box-shadow: 0 10px 25px var(--gt-focus-ring);" onmouseover="this.style.transform='translateY(-5px) scale(1.02)'; this.style.boxShadow='0 20px 35px var(--gt-focus-ring)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 10px 25px var(--gt-focus-ring)';">
                            APPLY NOW <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter / Stay Updated Section -->
    <section class="section" style="padding: 2rem 0;">
        <div class="container">
            <div data-aos="fade-up" style="background: linear-gradient(90deg, rgba(30,35,40,0.6) 0%, rgba(19,23,26,0.9) 100%); border: 1px solid var(--gt-border); border-radius: 24px; padding: 4rem; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 3rem; position: relative; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.3);">
                <div style="position: absolute; top: -50px; left: -50px; max-width: 100vw; max-height: 100vh; width: 200px; height: 200px; background: var(--gt-accent); filter: blur(100px); opacity: 0.1; z-index: 0;"></div>
                <div style="position: absolute; bottom: -50px; right: -50px; max-width: 100vw; max-height: 100vh; width: 200px; height: 200px; background: var(--gt-accent-soft); filter: blur(100px); opacity: 0.05; z-index: 0;"></div>
                
                <div style="flex: 1; min-width: 300px; position: relative; z-index: 1;">
                    <h3 style="font-size: 2.8rem; margin-bottom: 1rem; color: var(--gt-text); font-family: var(--font-display); letter-spacing: -1px;">Stay <span style="color: transparent; -webkit-text-stroke: 1px var(--gt-accent);">Updated</span></h3>
                    <p style="color: var(--gt-muted); font-size: 1.15rem; line-height: 1.6; max-width: 90%;">Subscribe to our newsletter to get the latest tech insights, course updates, and exclusive offers directly in your inbox.</p>
                </div>
                
                <div style="flex: 1; min-width: 300px; position: relative; z-index: 1; display: flex; justify-content: flex-end;">
                    <div style="width: 100%; max-width: 480px; display: flex; background: var(--gt-overlay); border: 1px solid var(--gt-border); border-radius: 16px; overflow: hidden; height: 65px; transition: border-color 0.3s, box-shadow 0.3s;" onmouseover="this.style.borderColor='var(--gt-accent)'; this.style.boxShadow='0 0 20px var(--gt-focus-ring)';" onmouseout="this.style.borderColor='var(--gt-border)'; this.style.boxShadow='none';">
                        <input type="email" placeholder="Enter your email address" style="background: transparent; border: none; padding: 0 24px; color: var(--gt-text); width: 100%; outline: none; font-size: 1.1rem;">
                        <button style="background: var(--gt-accent); border: none; padding: 0 35px; cursor: pointer; color: var(--gt-inverted-text); font-weight: 800; font-size: 1.05rem; transition: background 0.3s; display: flex; align-items: center; gap: 10px;" onmouseover="this.style.background='#b0d400'" onmouseout="this.style.background='var(--gt-accent)'">
                            SUBSCRIBE <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ultra Modern Footer -->
    <?php include "includes/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/animations.js"></script>
    <script src="assets/js/navigation.js"></script>
    <script src="assets/js/main.js?v=<?= filemtime('assets/js/main.js') ?>"></script>
    <script src="assets/js/courses.js"></script>
</body>
</html>

















