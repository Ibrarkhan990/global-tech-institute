<?php
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="assets/js/theme.js?v=<?= filemtime('assets/js/theme.js') ?>"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Tech & Institute | Technology. Skills. Future.</title>
    
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
    <?php include "includes/navbar.php"; ?>
    <div id="breadcrumb-container"></div>

        <!-- Hero Section -->
    <header class="hero force-dark-mode" style="position: relative; overflow: hidden; min-height: 100vh; padding-bottom: clamp(3rem, 6vw, 5rem);">
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

        <div class="container" style="position: relative; z-index: 2; height: 100%; display: flex; flex-direction: column; justify-content: flex-start; padding-top: clamp(6rem, 15vh, 120px);">
            <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
                <h1 style="color: var(--gt-text); font-size: clamp(3rem, 8vw, 6rem); text-shadow: 2px 2px 10px rgba(0,0,0,0.5); line-height: 1.1; margin-bottom: 1rem;">Build Skills.<br>Build Software.<br><span class="text-accent">Build the Future.</span></h1>
                <p style="color: #e0e0e0; font-size: clamp(1rem, 2.5vw, 1.25rem); text-shadow: 1px 1px 5px rgba(0,0,0,0.5); max-width: 600px; margin-top: 1rem;">Global Tech & Institute combines professional software development with practical technology education to help businesses and people move forward.</p>
                <div class="hero-actions" style="margin-top: 2rem; display: flex; gap: 1rem; flex-wrap: wrap;">
                    <a href="apply.php" class="btn btn-primary">Apply Now →</a>
                    <a href="courses.php" class="btn btn-outline" style="border-color: #ffffff; color: #ffffff;">Explore Courses</a>
                </div>
            </div>
        </div>
        
        <div class="hero-metadata" data-aos="fade-left" data-aos-delay="300">
            BASED IN PAKISTAN<br>
            SERVING DIGITAL FUTURES<br><br>
            <span class="text-accent" style="font-weight: bold;">SYSTEM ONLINE</span>
        </div>
    </header>

    <!-- Data Strip -->
    <section class="data-strip">
        <div class="container">
            <div class="grid grid-4 text-center">
                <div class="data-item reveal">
                    <div class="data-value" data-target="500">0</div>
                    <div class="data-label">Students Trained</div>
                </div>
                <div class="data-item reveal delay-100">
                    <div class="data-value" data-target="50">0</div>
                    <div class="data-label">Digital Projects</div>
                </div>
                <div class="data-item reveal delay-200">
                    <div class="data-value" data-target="20">0</div>
                    <div class="data-label">Tech Courses</div>
                </div>
                <div class="data-item reveal delay-300">
                    <div class="data-value" data-target="95">0</div>
                    <div class="data-label">Satisfaction %</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divisions / Split Layout -->
    <section class="section">
        <div class="container">
            <div data-aos="fade-up">
                <span class="section-label">01 / Divisions</span>
                <h2 style="font-size: clamp(2.2rem, 6vw, 3.5rem); margin-bottom: var(--space-lg); line-height: 1.1;">We Build Technology.<br><span class="text-accent">We Build People.</span></h2>
            </div>
            
            <div class="grid grid-2" data-aos="fade-up" data-aos-delay="100" style="gap: 2.5rem;">
                <!-- Division 1 -->
                <div style="background: linear-gradient(145deg, var(--gt-surface), var(--gt-bg)); border: 1px solid var(--gt-border); border-radius: 16px; padding: 3.5rem; position: relative; overflow: hidden; transition: transform 0.4s ease, box-shadow 0.4s ease;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.6)'; this.style.borderColor='var(--gt-accent)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.style.borderColor='var(--gt-border)';">
                    <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: var(--gt-accent); opacity: 0.03; border-radius: 50%;"></div>
                    <span style="display: inline-block; padding: 8px 16px; background: var(--gt-focus-ring); color: var(--gt-accent); font-family: var(--font-display); font-weight: 700; font-size: 0.85rem; border-radius: 30px; margin-bottom: 2rem; letter-spacing: 1px;">01 — SOFTWARE HOUSE</span>
                    <h2 style="font-size: clamp(1.8rem, 4vw, 2.5rem); margin-bottom: 1.5rem;">Technology for Businesses</h2>
                    <p class="text-muted" style="margin-bottom: 2.5rem; font-size: 1.15rem; line-height: 1.8;">Digital products, websites, custom systems, and business solutions meticulously designed for scale and performance.</p>
                    <ul style="margin-bottom: 3rem; list-style: none; padding: 0;">
                        <li style="margin-bottom: 16px; display: flex; align-items: center; font-size: 1.1rem;"><span style="color: var(--gt-bg); background: var(--gt-accent); border-radius: 8px; width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg></span> Web Applications</li>
                        <li style="margin-bottom: 16px; display: flex; align-items: center; font-size: 1.1rem;"><span style="color: var(--gt-bg); background: var(--gt-accent); border-radius: 8px; width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></span> E-Commerce Solutions</li>
                        <li style="margin-bottom: 16px; display: flex; align-items: center; font-size: 1.1rem;"><span style="color: var(--gt-bg); background: var(--gt-accent); border-radius: 8px; width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg></span> Custom Software</li>
                        <li style="margin-bottom: 16px; display: flex; align-items: center; font-size: 1.1rem;"><span style="color: var(--gt-bg); background: var(--gt-accent); border-radius: 8px; width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg></span> APIs & Database Architecture</li>
                        <li style="margin-bottom: 16px; display: flex; align-items: center; font-size: 1.1rem;"><span style="color: var(--gt-bg); background: var(--gt-accent); border-radius: 8px; width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4"></path><path d="M12 8h.01"></path></svg></span> AI Solutions</li>
                        <li style="margin-bottom: 16px; display: flex; align-items: center; font-size: 1.1rem;"><span style="color: var(--gt-bg); background: var(--gt-accent); border-radius: 8px; width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg></span> Desktop Applications</li>
                        <li style="margin-bottom: 16px; display: flex; align-items: center; font-size: 1.1rem;"><span style="color: var(--gt-bg); background: var(--gt-accent); border-radius: 8px; width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg></span> Android Applications</li>
                    </ul>
                    <a href="services.php" class="btn btn-primary" style="width: 100%; padding: 16px; font-size: 1rem;">Explore Services &rarr;</a>
                </div>
                
                <!-- Division 2 -->
                <div style="background: linear-gradient(145deg, var(--gt-surface), var(--gt-bg)); border: 1px solid var(--gt-border); border-radius: 16px; padding: 3.5rem; position: relative; overflow: hidden; transition: transform 0.4s ease, box-shadow 0.4s ease;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.6)'; this.style.borderColor='var(--gt-accent)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.style.borderColor='var(--gt-border)';">
                    <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: var(--gt-accent); opacity: 0.03; border-radius: 50%;"></div>
                    <span style="display: inline-block; padding: 8px 16px; background: var(--gt-focus-ring); color: var(--gt-accent); font-family: var(--font-display); font-weight: 700; font-size: 0.85rem; border-radius: 30px; margin-bottom: 2rem; letter-spacing: 1px;">02 — TECHNOLOGY INSTITUTE</span>
                    <h2 style="font-size: clamp(1.8rem, 4vw, 2.5rem); margin-bottom: 1.5rem;">Skills for the Future</h2>
                    <p class="text-muted" style="margin-bottom: 2.5rem; font-size: 1.15rem; line-height: 1.8;">Practical courses, technical training, and career development designed to make you industry-ready for the modern economy.</p>
                    <ul style="margin-bottom: 3rem; list-style: none; padding: 0;">
                        <li style="margin-bottom: 16px; display: flex; align-items: center; font-size: 1.1rem;"><span style="color: var(--gt-bg); background: var(--gt-accent); border-radius: 8px; width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l8 4.5v9L12 22l-8-4.5v-9L12 2z"></path><polyline points="12 22 12 11"></polyline><polyline points="20 6.5 12 11"></polyline><polyline points="4 6.5 12 11"></polyline></svg></span> Python with AI</li>
                        <li style="margin-bottom: 16px; display: flex; align-items: center; font-size: 1.1rem;"><span style="color: var(--gt-bg); background: var(--gt-accent); border-radius: 8px; width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg></span> Web Development</li>
                        <li style="margin-bottom: 16px; display: flex; align-items: center; font-size: 1.1rem;"><span style="color: var(--gt-bg); background: var(--gt-accent); border-radius: 8px; width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></span> CIT</li>
                        <li style="margin-bottom: 16px; display: flex; align-items: center; font-size: 1.1rem;"><span style="color: var(--gt-bg); background: var(--gt-accent); border-radius: 8px; width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg></span> DIT</li>
                        <li style="margin-bottom: 16px; display: flex; align-items: center; font-size: 1.1rem;"><span style="color: var(--gt-bg); background: var(--gt-accent); border-radius: 8px; width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg></span> MS Office Automation</li>
                        <li style="margin-bottom: 16px; display: flex; align-items: center; font-size: 1.1rem;"><span style="color: var(--gt-bg); background: var(--gt-accent); border-radius: 8px; width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></span> English Language</li>
                        <li style="margin-bottom: 16px; display: flex; align-items: center; font-size: 1.1rem;"><span style="color: var(--gt-bg); background: var(--gt-accent); border-radius: 8px; width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></span> Facebook & TikTok & YouTube Automation</li>
                    </ul>
                    <a href="courses.php" class="btn btn-primary" style="width: 100%; padding: 16px; font-size: 1rem;">Explore Courses &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Discover Courses -->
    <section class="section bg-surface">
        <div class="container">
            <div class="course-discovery" style="display: grid; gap: 4rem; align-items: start;">
                <!-- Sidebar -->
                <div class="course-sidebar" data-aos="fade-right" style="position: sticky; top: 120px;">
                    <div style="position: absolute; top: -50px; left: -50px; max-width: 100vw; max-height: 100vh; width: 150px; height: 150px; background: var(--gt-accent); filter: blur(80px); opacity: 0.15; z-index: 0;"></div>
                    <div style="position: relative; z-index: 1;">
                        <span style="display: inline-block; padding: 6px 14px; background: var(--gt-focus-ring); border: 1px solid var(--gt-focus-ring); color: var(--gt-accent); font-family: var(--font-display); font-weight: 700; font-size: 0.8rem; border-radius: 30px; margin-bottom: 1.5rem; letter-spacing: 2px;">02 / EDUCATION</span>
                        <h2 style="font-size: clamp(3rem, 5vw, 4.5rem); line-height: 1; margin-bottom: 2rem; letter-spacing: -2px;">Master<br>The<br><span style="color: transparent; -webkit-text-stroke: 1px #fff;">Future.</span></h2>
                        <p class="text-muted" style="font-size: 1.1rem; margin-bottom: 3rem; line-height: 1.6; max-width: 90%;">Industry-leading programs designed to transform beginners into highly-paid tech professionals.</p>
                        
                        <div class="course-filters" style="display: flex; flex-direction: column; gap: 12px;">
                            <button class="filter-btn active" data-filter="all" style="border-radius: 12px; padding: 16px 24px; border: 1px solid var(--gt-accent); background: linear-gradient(90deg, rgba(199,240,0,0.15) 0%, var(--gt-accent-soft) 100%); color: var(--gt-accent); font-weight: 700; width: 100%; text-align: left; display: flex; justify-content: space-between; align-items: center; cursor: pointer; transition: all 0.3s;">
                                <span>ALL PROGRAMS</span>
                                <span style="background: var(--gt-accent); color: var(--gt-inverted-text); padding: 2px 8px; border-radius: 20px; font-size: 0.75rem;">12</span>
                            </button>
                            <button class="filter-btn" data-filter="python" style="border-radius: 12px; padding: 16px 24px; border: 1px solid var(--gt-border); background: var(--gt-card-bg); color: var(--gt-text); font-weight: 600; width: 100%; text-align: left; display: flex; justify-content: space-between; align-items: center; cursor: pointer; transition: all 0.3s;" onmouseover="this.style.background='var(--gt-border)'; this.style.borderColor='var(--gt-border)';" onmouseout="this.style.background='var(--gt-border)'; this.style.borderColor='var(--gt-border)';">
                                <span>PYTHON WITH AI</span>
                                <span style="background: var(--gt-control-bg); color: var(--gt-text); padding: 2px 8px; border-radius: 20px; font-size: 0.75rem;">08</span>
                            </button>
                            <button class="filter-btn" data-filter="webdev" style="border-radius: 12px; padding: 16px 24px; border: 1px solid var(--gt-border); background: var(--gt-card-bg); color: var(--gt-text); font-weight: 600; width: 100%; text-align: left; display: flex; justify-content: space-between; align-items: center; cursor: pointer; transition: all 0.3s;" onmouseover="this.style.background='var(--gt-border)'; this.style.borderColor='var(--gt-border)';" onmouseout="this.style.background='var(--gt-border)'; this.style.borderColor='var(--gt-border)';">
                                <span>WEB DEVELOPMENT</span>
                                <span style="background: var(--gt-control-bg); color: var(--gt-text); padding: 2px 8px; border-radius: 20px; font-size: 0.75rem;">04</span>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Cards Grid -->
                <div class="course-list" data-aos="fade-up" data-aos-delay="150" style="display: flex; flex-direction: column; gap: 2rem;">
                    
                    <!-- Premium Course Item 1 -->
                    <div class="course-item" data-category="webdev" style="background: var(--gt-surface); border: 1px solid var(--gt-border); border-radius: 24px; padding: 2.5rem; position: relative; overflow: hidden; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);" onmouseover="this.style.transform='translateY(-5px) scale(1.01)'; this.style.borderColor='var(--gt-focus-ring)'; this.style.boxShadow='0 30px 60px rgba(0,0,0,0.4)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.borderColor='var(--gt-border)'; this.style.boxShadow='none';">
                        <div style="position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: var(--gt-accent);"></div>
                        
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                            <div style="display: flex; gap: 10px;">
                                <span style="background: var(--gt-focus-ring); border: 1px solid var(--gt-focus-ring); color: var(--gt-accent); padding: 6px 14px; border-radius: 30px; font-size: 0.75rem; font-weight: 800; letter-spacing: 1px; display: flex; align-items: center; gap: 6px;"><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg> BESTSELLER</span>
                                <span style="background: var(--gt-card-hover); color: var(--gt-text); padding: 6px 14px; border-radius: 30px; font-size: 0.75rem; font-weight: 700; letter-spacing: 1px;">WEB DEV</span>
                            </div>
                            <span style="font-family: var(--font-display); font-size: clamp(2.2rem, 6vw, 3.5rem); color: rgba(255,255,255,0.03); font-weight: 800; line-height: 0.8;">01</span>
                        </div>
                        
                        <h3 style="font-size: 2.2rem; margin-bottom: 1rem; color: var(--gt-text); letter-spacing: -0.5px;">Web Development</h3>
                        <p class="text-muted" style="margin-bottom: 2rem; font-size: 1.1rem; line-height: 1.6; max-width: 90%;">Master HTML, CSS, JavaScript, PHP, and MySQL. Build scalable, high-performance web applications from scratch.</p>
                        
                        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-bottom: 2.5rem; background: var(--gt-input-bg); padding: 1.5rem; border-radius: 16px;">
                            <div>
                                <div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Duration</div>
                                <div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 3 Months</div>
                            </div>
                            <div>
                                <div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Level</div>
                                <div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><path d="M18 20V10M12 20V4M6 20v-4"/></svg> All Levels</div>
                            </div>
                            <div>
                                <div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Certificate</div>
                                <div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Included</div>
                            </div>
                        </div>
                        
                        <div style="display: flex; gap: 1rem;">
                            <a href="course-details.php" class="btn" style="background: var(--gt-card-hover); color: var(--gt-text); border-radius: 12px; padding: 16px; flex: 1; text-align: center; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.background='var(--gt-border)'" onmouseout="this.style.background='var(--gt-border)'">View Syllabus</a>
                            <a href="apply.php" class="btn" style="background: var(--gt-accent); color: var(--gt-inverted-text); border-radius: 12px; padding: 16px; flex: 1.5; text-align: center; font-weight: 800; display: flex; justify-content: center; align-items: center; gap: 10px; transition: all 0.3s;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">ENROLL NOW <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
                        </div>
                    </div>

                    <!-- Premium Course Item 2 -->
                    <div class="course-item" data-category="python" style="background: var(--gt-surface); border: 1px solid var(--gt-border); border-radius: 24px; padding: 2.5rem; position: relative; overflow: hidden; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);" onmouseover="this.style.transform='translateY(-5px) scale(1.01)'; this.style.borderColor='var(--gt-focus-ring)'; this.style.boxShadow='0 30px 60px rgba(0,0,0,0.4)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.borderColor='var(--gt-border)'; this.style.boxShadow='none';">
                        <div style="position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: #fff; opacity: 0.2;"></div>
                        
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                            <div style="display: flex; gap: 10px;">
                                <span style="background: var(--gt-focus-ring); border: 1px solid var(--gt-focus-ring); color: var(--gt-accent); padding: 6px 14px; border-radius: 30px; font-size: 0.75rem; font-weight: 800; letter-spacing: 1px; display: flex; align-items: center; gap: 6px;"><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg> BESTSELLER</span>
                                <span style="background: var(--gt-card-hover); color: var(--gt-text); padding: 6px 14px; border-radius: 30px; font-size: 0.75rem; font-weight: 700; letter-spacing: 1px;">PYTHON</span>
                            </div>
                            <span style="font-family: var(--font-display); font-size: clamp(2.2rem, 6vw, 3.5rem); color: rgba(255,255,255,0.03); font-weight: 800; line-height: 0.8;">02</span>
                        </div>
                        
                        <h3 style="font-size: 2.2rem; margin-bottom: 1rem; color: var(--gt-text); letter-spacing: -0.5px;">Python with AI</h3>
                        <p class="text-muted" style="margin-bottom: 2rem; font-size: 1.1rem; line-height: 1.6; max-width: 90%;">Master Python programming and build intelligent AI models, machine learning algorithms, and automation scripts.</p>
                        
                        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-bottom: 2.5rem; background: var(--gt-input-bg); padding: 1.5rem; border-radius: 16px;">
                            <div>
                                <div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Duration</div>
                                <div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 3 Months</div>
                            </div>
                            <div>
                                <div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Level</div>
                                <div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><path d="M18 20V10M12 20V4M6 20v-4"/></svg> Advanced</div>
                            </div>
                            <div>
                                <div style="font-size: 0.75rem; color: var(--gt-muted); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;">Certificate</div>
                                <div style="font-weight: 700; color: var(--gt-text); font-size: 1.1rem; display: flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Included</div>
                            </div>
                        </div>
                        
                        <div style="display: flex; gap: 1rem;">
                            <a href="course-details.php" class="btn" style="background: var(--gt-card-hover); color: var(--gt-text); border-radius: 12px; padding: 16px; flex: 1; text-align: center; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.background='var(--gt-border)'" onmouseout="this.style.background='var(--gt-border)'">View Syllabus</a>
                            <a href="apply.php" class="btn" style="background: var(--gt-accent); color: var(--gt-inverted-text); border-radius: 12px; padding: 16px; flex: 1.5; text-align: center; font-weight: 800; display: flex; justify-content: center; align-items: center; gap: 10px; transition: all 0.3s;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">ENROLL NOW <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
                        </div>
                    </div>
                    
                    <!-- View All Courses Button -->
                    <a href="courses.php" data-aos="fade-up" style="display: flex; align-items: center; justify-content: space-between; padding: 1.5rem 2.5rem; background: linear-gradient(90deg, var(--gt-border) 0%, var(--gt-border) 100%); border: 1px dashed var(--gt-border); border-radius: 20px; text-decoration: none; color: var(--gt-text); font-size: 1.25rem; font-weight: 700; transition: all 0.4s ease;" onmouseover="this.style.background='linear-gradient(90deg, var(--gt-accent-soft) 0%, rgba(199,240,0,0.15) 100%)'; this.style.borderColor='var(--gt-accent)'; this.style.color='var(--gt-accent)';" onmouseout="this.style.background='linear-gradient(90deg, var(--gt-border) 0%, var(--gt-border) 100%)'; this.style.borderColor='var(--gt-border)'; this.style.color='#fff';">
                        <span>VIEW ALL COURSES</span>
                        <div style="width: 44px; height: 44px; border-radius: 50%; background: rgba(0,0,0,0.3); display: flex; align-items: center; justify-content: center; border: 1px solid var(--gt-border);">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services (Premium Grid) -->
    <section class="section" style="position: relative; overflow: hidden;">
        <!-- Background subtle glow -->
        <div style="position: absolute; top: 20%; left: 50%; width: 600px; height: 600px; background: var(--gt-accent); opacity: 0.02; filter: blur(100px); border-radius: 50%; transform: translateX(-50%); pointer-events: none;"></div>
        
        <div class="container">
            <div data-aos="fade-up" style="text-align: center; margin-bottom: 4rem;">
                <span style="display: inline-block; padding: 8px 16px; background: var(--gt-focus-ring); color: var(--gt-accent); font-family: var(--font-display); font-weight: 700; font-size: 0.85rem; border-radius: 30px; margin-bottom: 1.5rem; letter-spacing: 2px;">03 / OUR EXPERTISE</span>
                <h2 style="font-size: clamp(2.5rem, 5vw, 4.5rem); line-height: 1.1; margin-bottom: 1rem;">Digital Products.<br>Built With <span style="color: transparent; -webkit-text-stroke: 1px var(--gt-accent);">Purpose.</span></h2>
                <p style="color: var(--gt-muted); max-width: 600px; margin: 0 auto; font-size: 1.15rem;">We transform ideas into scalable, high-performance digital solutions designed to elevate your business.</p>
            </div>
            
            <div class="grid grid-2" data-aos="fade-up" data-aos-delay="200" style="gap: 2rem;">
                <!-- Premium Service Card 1 -->
                <a href="services.php" class="premium-svc-card" style="display: flex; flex-direction: column; justify-content: space-between; padding: 3rem; background: var(--gt-surface); border: 1px solid var(--gt-border); border-radius: 24px; text-decoration: none; position: relative; overflow: hidden; min-height: 380px; transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);">
                    <div class="svc-bg-icon" style="position: absolute; right: -20px; top: -20px; opacity: 0.03; transition: all 0.5s ease;">
                        <svg width="200" height="200" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L2 22h20L12 2zm0 3.83L18.17 19H5.83L12 5.83z"/></svg>
                    </div>
                    <div style="position: relative; z-index: 2;">
                        <div style="width: 60px; height: 60px; background: var(--gt-focus-ring); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 2rem; color: var(--gt-accent);">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                        </div>
                        <h3 style="font-size: 2rem; color: var(--gt-text); margin-bottom: 1rem;">Web Development</h3>
                        <p style="color: var(--gt-muted); font-size: 1.1rem; line-height: 1.6; max-width: 90%;">Fast, responsive, and robust web applications tailored to your exact business needs.</p>
                    </div>
                    <div class="svc-footer" style="display: flex; align-items: center; justify-content: space-between; margin-top: 2rem; border-top: 1px solid var(--gt-border); padding-top: 1.5rem; position: relative; z-index: 2;">
                        <span style="color: var(--gt-accent); font-weight: 700; letter-spacing: 1px; font-size: 0.9rem;">EXPLORE SOLUTION</span>
                        <div class="svc-arrow" style="width: 40px; height: 40px; border-radius: 50%; background: var(--gt-accent); color: var(--gt-inverted-text); display: flex; align-items: center; justify-content: center; transform: translateX(-10px); opacity: 0; transition: all 0.4s ease;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </div>
                    </div>
                </a>

                <!-- Premium Service Card 2 -->
                <a href="services.php" class="premium-svc-card" style="display: flex; flex-direction: column; justify-content: space-between; padding: 3rem; background: var(--gt-surface); border: 1px solid var(--gt-border); border-radius: 24px; text-decoration: none; position: relative; overflow: hidden; min-height: 380px; transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);">
                    <div class="svc-bg-icon" style="position: absolute; right: -20px; top: -20px; opacity: 0.03; transition: all 0.5s ease;">
                        <svg width="200" height="200" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg>
                    </div>
                    <div style="position: relative; z-index: 2;">
                        <div style="width: 60px; height: 60px; background: var(--gt-focus-ring); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 2rem; color: var(--gt-accent);">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        </div>
                        <h3 style="font-size: 2rem; color: var(--gt-text); margin-bottom: 1rem;">E-Commerce</h3>
                        <p style="color: var(--gt-muted); font-size: 1.1rem; line-height: 1.6; max-width: 90%;">Scalable and secure e-commerce platforms that drive sales and provide frictionless shopping.</p>
                    </div>
                    <div class="svc-footer" style="display: flex; align-items: center; justify-content: space-between; margin-top: 2rem; border-top: 1px solid var(--gt-border); padding-top: 1.5rem; position: relative; z-index: 2;">
                        <span style="color: var(--gt-accent); font-weight: 700; letter-spacing: 1px; font-size: 0.9rem;">EXPLORE SOLUTION</span>
                        <div class="svc-arrow" style="width: 40px; height: 40px; border-radius: 50%; background: var(--gt-accent); color: var(--gt-inverted-text); display: flex; align-items: center; justify-content: center; transform: translateX(-10px); opacity: 0; transition: all 0.4s ease;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </div>
                    </div>
                </a>
                
                <!-- Premium Service Card 3 -->
                <a href="services.php" class="premium-svc-card" style="display: flex; flex-direction: column; justify-content: space-between; padding: 3rem; background: var(--gt-surface); border: 1px solid var(--gt-border); border-radius: 24px; text-decoration: none; position: relative; overflow: hidden; min-height: 380px; transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);">
                    <div class="svc-bg-icon" style="position: absolute; right: -20px; top: -20px; opacity: 0.03; transition: all 0.5s ease;">
                        <svg width="200" height="200" viewBox="0 0 24 24" fill="currentColor"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/></svg>
                    </div>
                    <div style="position: relative; z-index: 2;">
                        <div style="width: 60px; height: 60px; background: var(--gt-focus-ring); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 2rem; color: var(--gt-accent);">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                        </div>
                        <h3 style="font-size: 2rem; color: var(--gt-text); margin-bottom: 1rem;">Custom Software</h3>
                        <p style="color: var(--gt-muted); font-size: 1.1rem; line-height: 1.6; max-width: 90%;">Bespoke software systems designed from the ground up to solve complex enterprise challenges.</p>
                    </div>
                    <div class="svc-footer" style="display: flex; align-items: center; justify-content: space-between; margin-top: 2rem; border-top: 1px solid var(--gt-border); padding-top: 1.5rem; position: relative; z-index: 2;">
                        <span style="color: var(--gt-accent); font-weight: 700; letter-spacing: 1px; font-size: 0.9rem;">EXPLORE SOLUTION</span>
                        <div class="svc-arrow" style="width: 40px; height: 40px; border-radius: 50%; background: var(--gt-accent); color: var(--gt-inverted-text); display: flex; align-items: center; justify-content: center; transform: translateX(-10px); opacity: 0; transition: all 0.4s ease;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </div>
                    </div>
                </a>

                <!-- Premium Service Card 4 -->
                <a href="services.php" class="premium-svc-card" style="display: flex; flex-direction: column; justify-content: space-between; padding: 3rem; background: var(--gt-surface); border: 1px solid var(--gt-border); border-radius: 24px; text-decoration: none; position: relative; overflow: hidden; min-height: 380px; transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);">
                    <div class="svc-bg-icon" style="position: absolute; right: -20px; top: -20px; opacity: 0.03; transition: all 0.5s ease;">
                        <svg width="200" height="200" viewBox="0 0 24 24" fill="currentColor"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                    </div>
                    <div style="position: relative; z-index: 2;">
                        <div style="width: 60px; height: 60px; background: var(--gt-focus-ring); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 2rem; color: var(--gt-accent);">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                        </div>
                        <h3 style="font-size: 2rem; color: var(--gt-text); margin-bottom: 1rem;">UI/UX Design</h3>
                        <p style="color: var(--gt-muted); font-size: 1.1rem; line-height: 1.6; max-width: 90%;">Engaging, intuitive, and modern digital experiences that captivate users and drive conversions.</p>
                    </div>
                    <div class="svc-footer" style="display: flex; align-items: center; justify-content: space-between; margin-top: 2rem; border-top: 1px solid var(--gt-border); padding-top: 1.5rem; position: relative; z-index: 2;">
                        <span style="color: var(--gt-accent); font-weight: 700; letter-spacing: 1px; font-size: 0.9rem;">EXPLORE SOLUTION</span>
                        <div class="svc-arrow" style="width: 40px; height: 40px; border-radius: 50%; background: var(--gt-accent); color: var(--gt-inverted-text); display: flex; align-items: center; justify-content: center; transform: translateX(-10px); opacity: 0; transition: all 0.4s ease;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </div>
                    </div>
                </a>

                <!-- Premium Service Card 5 (AI) -->
                <a href="services.php" class="premium-svc-card" style="display: flex; flex-direction: column; justify-content: space-between; padding: 3rem; background: var(--gt-surface); border: 1px solid var(--gt-border); border-radius: 24px; text-decoration: none; position: relative; overflow: hidden; min-height: 380px; transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);">
                    <div class="svc-bg-icon" style="position: absolute; right: -20px; top: -20px; opacity: 0.03; transition: all 0.5s ease;">
                        <svg width="200" height="200" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                    </div>
                    <div style="position: relative; z-index: 2;">
                        <div style="width: 60px; height: 60px; background: var(--gt-focus-ring); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 2rem; color: var(--gt-accent);">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4"></path><path d="M12 8h.01"></path></svg>
                        </div>
                        <h3 style="font-size: 2rem; color: var(--gt-text); margin-bottom: 1rem;">AI Solutions</h3>
                        <p style="color: var(--gt-muted); font-size: 1.1rem; line-height: 1.6; max-width: 90%;">Intelligent solutions powered by machine learning, predictive analytics, and process automation to future-proof your business.</p>
                    </div>
                    <div class="svc-footer" style="display: flex; align-items: center; justify-content: space-between; margin-top: 2rem; border-top: 1px solid var(--gt-border); padding-top: 1.5rem; position: relative; z-index: 2;">
                        <span style="color: var(--gt-accent); font-weight: 700; letter-spacing: 1px; font-size: 0.9rem;">EXPLORE SOLUTION</span>
                        <div class="svc-arrow" style="width: 40px; height: 40px; border-radius: 50%; background: var(--gt-accent); color: var(--gt-inverted-text); display: flex; align-items: center; justify-content: center; transform: translateX(-10px); opacity: 0; transition: all 0.4s ease;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </div>
                    </div>
                </a>
                <!-- Premium Service Card 6 (SEO) -->
                <a href="services.php" class="premium-svc-card" style="display: flex; flex-direction: column; justify-content: space-between; padding: 3rem; background: var(--gt-surface); border: 1px solid var(--gt-border); border-radius: 24px; text-decoration: none; position: relative; overflow: hidden; min-height: 380px; transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);">
                    <div class="svc-bg-icon" style="position: absolute; right: -20px; top: -20px; opacity: 0.03; transition: all 0.5s ease;">
                        <svg width="200" height="200" viewBox="0 0 24 24" fill="currentColor"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                    </div>
                    <div style="position: relative; z-index: 2;">
                        <div style="width: 60px; height: 60px; background: var(--gt-focus-ring); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 2rem; color: var(--gt-accent);">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                        </div>
                        <h3 style="font-size: 2rem; color: var(--gt-text); margin-bottom: 1rem;">SEO & Growth</h3>
                        <p style="color: var(--gt-muted); font-size: 1.1rem; line-height: 1.6; max-width: 90%;">Data-driven digital marketing and Search Engine Optimization to exponentially scale your organic reach.</p>
                    </div>
                    <div class="svc-footer" style="display: flex; align-items: center; justify-content: space-between; margin-top: 2rem; border-top: 1px solid var(--gt-border); padding-top: 1.5rem; position: relative; z-index: 2;">
                        <span style="color: var(--gt-accent); font-weight: 700; letter-spacing: 1px; font-size: 0.9rem;">EXPLORE SOLUTION</span>
                        <div class="svc-arrow" style="width: 40px; height: 40px; border-radius: 50%; background: var(--gt-accent); color: var(--gt-inverted-text); display: flex; align-items: center; justify-content: center; transform: translateX(-10px); opacity: 0; transition: all 0.4s ease;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </div>
                    </div>
                </a>
            </div>
            
            <style>
                .premium-svc-card:hover {
                    transform: translateY(-10px);
                    border-color: var(--gt-accent) !important;
                    box-shadow: 0 20px 40px rgba(0,0,0,0.5);
                    background: var(--gt-card-hover) !important;
                }
                .premium-svc-card:hover .svc-bg-icon {
                    transform: scale(1.1) rotate(5deg);
                    opacity: 0.08 !important;
                    color: var(--gt-accent);
                }
                .premium-svc-card:hover .svc-arrow {
                    opacity: 1 !important;
                    transform: translateX(0) !important;
                }
            </style>
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
                    
                    <h2 style="font-size: clamp(3rem, 6vw, 5.5rem); line-height: 1.1; margin-bottom: 1.5rem; letter-spacing: -2px;">Your Future<br><span style="color: transparent; -webkit-text-stroke: 1px var(--gt-accent);">Starts With One Decision.</span></h2>
                    
                    <p class="text-muted" style="font-size: 1.25rem; margin-bottom: 3.5rem; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.6;">Join thousands of students and transform your career. Learn the skills. Build the projects. Create the future.</p>
                    
                    <div style="display: flex; justify-content: center; gap: 1.5rem; flex-wrap: wrap;">
                        <a href="apply.php" style="background: var(--gt-accent); color: var(--gt-inverted-text); font-weight: 800; padding: 18px 45px; border-radius: 14px; font-size: 1.1rem; display: flex; align-items: center; gap: 12px; transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275); text-decoration: none; box-shadow: 0 10px 25px var(--gt-focus-ring);" onmouseover="this.style.transform='translateY(-5px) scale(1.02)'; this.style.boxShadow='0 20px 35px var(--gt-focus-ring)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 10px 25px var(--gt-focus-ring)';">
                            APPLY NOW <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                        <a href="courses.php" style="background: var(--gt-card-hover); border: 1px solid var(--gt-border); color: var(--gt-text); font-weight: 600; padding: 18px 45px; border-radius: 14px; font-size: 1.1rem; display: flex; align-items: center; gap: 10px; transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275); text-decoration: none;" onmouseover="this.style.background='var(--gt-border)'; this.style.transform='translateY(-5px) scale(1.02)'; this.style.borderColor='var(--gt-border-hover)';" onmouseout="this.style.background='var(--gt-border)'; this.style.transform='translateY(0) scale(1)'; this.style.borderColor='var(--gt-border)';">
                            Explore Courses
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




















