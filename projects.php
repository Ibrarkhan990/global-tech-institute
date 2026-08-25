<?php
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="assets/js/theme.js?v=<?= filemtime('assets/js/theme.js') ?>"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | Global Tech & Institute</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/variables.css?v=<?= filemtime('assets/css/variables.css') ?>">
    <link rel="stylesheet" href="assets/css/base.css?v=<?= filemtime('assets/css/base.css') ?>">
    <link rel="stylesheet" href="assets/css/components.css?v=<?= filemtime('assets/css/components.css') ?>">
    <link rel="stylesheet" href="assets/css/sections.css?v=<?= filemtime('assets/css/sections.css') ?>">
    <link rel="stylesheet" href="assets/css/responsive.css?v=<?= filemtime('assets/css/responsive.css') ?>">
    <link rel="stylesheet" href="assets/css/projects.css?v=<?= filemtime('assets/css/projects.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <!-- Devicon for original tech icons -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
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
<body class="bg-dark">

    <?php include "includes/navbar.php"; ?>

    <!-- 01 PROJECT HERO (MATCHES OTHER PAGES) -->
    <header class="hero force-dark-mode" style="position: relative; overflow: hidden; min-height: 100vh; padding-bottom: 80px; background: #0a0c0f;">
        <!-- Swiper Container -->
        <div class="swiper heroSwiper" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1541888081622-15cb6bc78be4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Technology" style="width: 100%; height: 100%; object-fit: cover; filter: brightness(0.4);">
                </div>
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Code" style="width: 100%; height: 100%; object-fit: cover; filter: brightness(0.4);">
                </div>
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Team" style="width: 100%; height: 100%; object-fit: cover; filter: brightness(0.4);">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        
        <div class="hero-tech-grid" style="z-index: 2; opacity: 0.1;"></div>
        <div style="position: absolute; bottom: -200px; left: -200px; max-width: 100vw; max-height: 100vh; width: 600px; height: 600px; background: var(--gt-accent); filter: blur(250px); opacity: 0.15; z-index: 2;"></div>

        <div class="container" style="position: relative; z-index: 3; height: 100%; display: flex; flex-direction: column; justify-content: flex-start; padding-top: 100px;">
            <div class="hero-content" data-aos="fade-up" data-aos-duration="1000" style="max-width: 900px;">
                <div id="breadcrumb-container" style="margin-bottom: 2rem;"></div>
                <span class="section-label" style="text-shadow: 2px 2px 10px rgba(0,0,0,0.8);">04 / PROJECTS</span>
                <h1 style="color: var(--gt-text); font-size: clamp(3.5rem, 8vw, 6.5rem); line-height: 1.05; margin-bottom: 2rem; letter-spacing: -2px; text-shadow: 2px 2px 10px rgba(0,0,0,0.8);">We Build.<br>We Ship.<br><span class="text-accent" style="color: transparent; -webkit-text-stroke: 1.5px var(--gt-accent);">We Improve.</span></h1>
                <p style="color: var(--gt-muted); font-size: 1.35rem; margin-bottom: 3rem; line-height: 1.6; max-width: 700px; text-shadow: 1px 1px 5px rgba(0,0,0,0.8);">A selection of digital products, software systems and technology projects built by Global Tech & Institute.</p>
                <div style="display: flex; gap: 1.5rem; flex-wrap: wrap;">
                    <a href="#project-filters" class="btn btn-primary" onclick="event.preventDefault(); document.querySelector('#project-filters').scrollIntoView({behavior: 'smooth'})">Start a Project →</a>
                    <a href="services.php" class="btn" style="background: var(--gt-card-hover); color: var(--gt-text); border: 1px solid var(--gt-border-hover);">Explore Services →</a>
                </div>
            </div>
        </div>
        
        <div class="hero-metadata">
            <div style="margin-bottom: 2rem;">
                WEB<br>SOFTWARE<br>E-COMMERCE<br>SYSTEMS
            </div>
        </div>
    </header>

    <!-- 02 PROJECT FILTER SYSTEM -->
    <section id="project-filters" class="section" style="padding: 6rem 0 4rem 0; background: var(--gt-bg); border-top: 1px solid var(--gt-border);">
        <div class="container" style="text-align: center;">
            <div class="filter-container" data-aos="fade-up">
                <button class="filter-btn active" data-filter="all">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path></svg>
                    ALL
                </button>
                <button class="filter-btn" data-filter="websites">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                    WEBSITES
                </button>
                <button class="filter-btn" data-filter="ecommerce">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                    E-COMMERCE
                </button>
                <button class="filter-btn" data-filter="software">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="3" x2="9" y2="21"></line></svg>
                    SOFTWARE
                </button>
                <button class="filter-btn" data-filter="business">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                    BUSINESS SYSTEMS
                </button>
                <button class="filter-btn" data-filter="webapps">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                    WEB APPS
                </button>
                <button class="filter-btn" data-filter="calculators">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                    CALCULATORS
                </button>
            </div>
        </div>
    </section>

    <!-- 03 SELECTED WORK GRID -->
    <section class="section" style="padding: 0 0 8rem 0; background: var(--gt-bg);">
        <div class="container">
            <div style="margin-bottom: 5rem;" data-aos="fade-up">
                <span class="section-label">05 / SELECTED WORK</span>
                <h2 style="font-size: 4rem; line-height: 1; margin: 1rem 0;">Built for<br>Real Use.</h2>
                <p class="editorial-text" style="max-width: 600px; margin-top: 2rem;">Every project is built around a specific problem, audience and purpose.</p>
            </div>

            <div class="projects-grid" id="projects-grid">
                <!-- Injected via JS -->
            </div>
        </div>
    </section>

    <!-- 04 FEATURED CASE STUDY -->
    <section class="section" style="padding: 8rem 0; background: var(--gt-surface); border-top: 1px solid var(--gt-border); border-bottom: 1px solid var(--gt-border);">
        <div class="container">
            <div style="text-align: center; margin-bottom: 5rem;" data-aos="fade-up">
                <h2 style="font-size: 3.5rem;">Behind the Build</h2>
            </div>
            
            <div class="featured-project-card" data-aos="fade-up">
                <div class="fp-image">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80" alt="SKD Prime E-Commerce">
                    <div class="status-badge progress-badge">● IN PROGRESS</div>
                </div>
                <div class="fp-content">
                    <span class="section-label">E-COMMERCE</span>
                    <h3 style="font-size: 3.5rem; margin: 0.5rem 0 1.5rem; letter-spacing: -1px;">SKD PRIME</h3>
                    <p style="color: var(--gt-muted); font-size: 1.1rem; line-height: 1.6; margin-bottom: 2rem;">A modern e-commerce ecosystem designed around products, customers, checkout, orders and administration. Built to handle complex product catalogs and customer workflows securely.</p>
                    
                    <div class="fp-tech">
                        <span style="display:inline-flex; align-items:center; gap:6px;"><i class="devicon-php-plain colored" style="font-size: 16px;"></i> PHP</span>
                        <span style="display:inline-flex; align-items:center; gap:6px;"><i class="devicon-mysql-plain colored" style="font-size: 16px;"></i> MYSQL</span>
                        <span style="display:inline-flex; align-items:center; gap:6px;"><i class="devicon-javascript-plain colored" style="font-size: 16px;"></i> JAVASCRIPT</span>
                        <span style="display:inline-flex; align-items:center; gap:6px;"><i class="devicon-bootstrap-plain colored" style="font-size: 16px;"></i> BOOTSTRAP</span>
                    </div>
                    
                    <button class="btn btn-outline" style="width: 100%; border-color: var(--gt-border); color: var(--gt-text); cursor: default;">Project Details (Available on Request)</button>
                </div>
            </div>
        </div>
    </section>

    <!-- 05 SOFTWARE SYSTEMS & WEB EXPERIENCES -->
    <section class="section" style="padding: 8rem 0; background: var(--gt-bg); position: relative; overflow: hidden;">
        <div style="position: absolute; top: 0; left: 50%; transform: translateX(-50%); width: 1px; height: 100%; background: linear-gradient(to bottom, transparent, var(--gt-border), transparent); z-index: 1;"></div>
        
        <div class="container" style="position: relative; z-index: 2;">
            <div class="grid grid-2" style="gap: 6rem;">
                
                <!-- SOFTWARE SYSTEMS -->
                <div data-aos="fade-right">
                    <span class="section-label">06 / SOFTWARE SYSTEMS</span>
                    <h2 style="font-size: 3.5rem; margin: 1rem 0 3rem; line-height: 1.1; letter-spacing: -1px;">Systems That<br>Run Businesses.</h2>
                    
                    <div class="modern-list">
                        <div class="ml-item">
                            <div class="ml-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                            </div>
                            <div class="ml-content">
                                <h4>SKD Prime</h4>
                                <p>E-Commerce Platform</p>
                            </div>
                        </div>
                        <div class="ml-item">
                            <div class="ml-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                            </div>
                            <div class="ml-content">
                                <h4>Billing System</h4>
                                <p>Python Business Workflow</p>
                            </div>
                        </div>
                        <div class="ml-item">
                            <div class="ml-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            </div>
                            <div class="ml-content">
                                <h4>Academy Management</h4>
                                <p>Administration Portal</p>
                            </div>
                        </div>
                    </div>
                    
                    <p style="color: var(--gt-muted); margin: 3rem 0; line-height: 1.6; font-size: 1.1rem;">We develop robust business software, billing systems, management platforms, e-commerce solutions, and database-driven applications that scale with your operations.</p>
                    <a href="services.php" class="btn btn-outline">Explore Services &rarr;</a>
                </div>
                
                <!-- WEB EXPERIENCES -->
                <div data-aos="fade-left">
                    <span class="section-label">07 / WEB EXPERIENCES</span>
                    <h2 style="font-size: 3.5rem; margin: 1rem 0 3rem; line-height: 1.1; letter-spacing: -1px;">Websites That<br>Represent Brands.</h2>
                    
                    <div class="modern-list">
                        <div class="ml-item">
                            <div class="ml-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                            </div>
                            <div class="ml-content">
                                <h4>Road Construction</h4>
                                <p>Corporate Presence</p>
                            </div>
                        </div>
                        <div class="ml-item">
                            <div class="ml-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                            </div>
                            <div class="ml-content">
                                <h4>Cognito Soft</h4>
                                <p>Agency Website</p>
                            </div>
                        </div>
                        <div class="ml-item">
                            <div class="ml-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                            </div>
                            <div class="ml-content">
                                <h4>Calculators</h4>
                                <p>BMI & Age Utility Apps</p>
                            </div>
                        </div>
                    </div>
                    
                    <p style="color: var(--gt-muted); margin: 3rem 0; line-height: 1.6; font-size: 1.1rem;">Focusing on responsive design, exceptional user experience, high performance, and professional branding to ensure your digital presence stands out globally.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 08 TECH STACK -->
    <section class="section" style="padding: 8rem 0; background: var(--gt-surface); border-top: 1px solid var(--gt-border);">
        <div class="container">
            <div style="text-align: center; margin-bottom: 5rem;" data-aos="fade-up">
                <h2 style="font-size: 3.5rem;">Technologies Behind<br>The Projects.</h2>
            </div>
            
            <div class="bento-tech-grid" style="display: grid; grid-template-columns: repeat(12, 1fr); gap: 2rem;">
                
                <!-- FRONTEND (Span 7) -->
                <div class="tech-bento-card" data-aos="fade-up" data-aos-delay="0" style="grid-column: span 7;">
                    <h4 style="font-family: var(--font-display); letter-spacing: 2px; color: var(--gt-muted); margin-bottom: 2rem;">01 / FRONTEND</h4>
                    <div style="display: flex; gap: 3rem; flex-wrap: wrap; margin-top: auto; justify-content: center;">
                        <div style="text-align: center;"><i class="devicon-html5-plain colored" style="font-size: 4rem;"></i><div style="margin-top: 15px; font-size: 0.9rem; color: var(--gt-text); font-family: var(--font-display); letter-spacing: 1px;">HTML5</div></div>
                        <div style="text-align: center;"><i class="devicon-css3-plain colored" style="font-size: 4rem;"></i><div style="margin-top: 15px; font-size: 0.9rem; color: var(--gt-text); font-family: var(--font-display); letter-spacing: 1px;">CSS3</div></div>
                        <div style="text-align: center;"><i class="devicon-javascript-plain colored" style="font-size: 4rem;"></i><div style="margin-top: 15px; font-size: 0.9rem; color: var(--gt-text); font-family: var(--font-display); letter-spacing: 1px;">JAVASCRIPT</div></div>
                        <div style="text-align: center;"><i class="devicon-bootstrap-plain colored" style="font-size: 4rem;"></i><div style="margin-top: 15px; font-size: 0.9rem; color: var(--gt-text); font-family: var(--font-display); letter-spacing: 1px;">BOOTSTRAP</div></div>
                    </div>
                </div>

                <!-- BACKEND (Span 5) -->
                <div class="tech-bento-card" data-aos="fade-up" data-aos-delay="100" style="grid-column: span 5;">
                    <h4 style="font-family: var(--font-display); letter-spacing: 2px; color: var(--gt-muted); margin-bottom: 2rem;">02 / BACKEND</h4>
                    <div style="display: flex; gap: 3rem; flex-wrap: wrap; margin-top: auto; justify-content: center;">
                        <div style="text-align: center;"><i class="devicon-php-plain colored" style="font-size: 4rem;"></i><div style="margin-top: 15px; font-size: 0.9rem; color: var(--gt-text); font-family: var(--font-display); letter-spacing: 1px;">PHP</div></div>
                        <div style="text-align: center;"><i class="devicon-python-plain colored" style="font-size: 4rem;"></i><div style="margin-top: 15px; font-size: 0.9rem; color: var(--gt-text); font-family: var(--font-display); letter-spacing: 1px;">PYTHON</div></div>
                    </div>
                </div>

                <!-- DATABASE (Span 5) -->
                <div class="tech-bento-card" data-aos="fade-up" data-aos-delay="200" style="grid-column: span 5;">
                    <h4 style="font-family: var(--font-display); letter-spacing: 2px; color: var(--gt-muted); margin-bottom: 2rem;">03 / DATABASE</h4>
                    <div style="display: flex; gap: 3rem; flex-wrap: wrap; margin-top: auto; justify-content: center;">
                        <div style="text-align: center;"><i class="devicon-mysql-plain colored" style="font-size: 4rem;"></i><div style="margin-top: 15px; font-size: 0.9rem; color: var(--gt-text); font-family: var(--font-display); letter-spacing: 1px;">MYSQL</div></div>
                    </div>
                </div>

                <!-- TOOLS (Span 7) -->
                <div class="tech-bento-card" data-aos="fade-up" data-aos-delay="300" style="grid-column: span 7;">
                    <h4 style="font-family: var(--font-display); letter-spacing: 2px; color: var(--gt-muted); margin-bottom: 2rem;">04 / TOOLS & APIs</h4>
                    <div style="display: flex; gap: 3rem; flex-wrap: wrap; margin-top: auto; justify-content: center;">
                        <div style="text-align: center;"><i class="devicon-git-plain colored" style="font-size: 4rem;"></i><div style="margin-top: 15px; font-size: 0.9rem; color: var(--gt-text); font-family: var(--font-display); letter-spacing: 1px;">GIT</div></div>
                        <div style="text-align: center;"><i class="devicon-github-original" style="font-size: 4rem; color: var(--gt-text);"></i><div style="margin-top: 15px; font-size: 0.9rem; color: var(--gt-text); font-family: var(--font-display); letter-spacing: 1px;">GITHUB</div></div>
                        <div style="text-align: center;"><svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg><div style="margin-top: 15px; font-size: 0.9rem; color: var(--gt-text); font-family: var(--font-display); letter-spacing: 1px;">REST APIs</div></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 09 PROCESS & PRINCIPLES -->
    <section class="section" style="padding: 8rem 0; background: var(--gt-bg);">
        <div class="container">
            <div class="grid grid-2" style="gap: 6rem;">
                <div data-aos="fade-right">
                    <span class="section-label">08 / PROCESS</span>
                    <h2 style="font-size: 3.5rem; margin: 1rem 0 4rem; line-height: 1.1;">From Concept<br>To Product.</h2>
                    
                    <div class="modern-process">
                        <div class="mp-step">
                            <div class="mp-num">01</div>
                            <div class="mp-text">DISCOVER</div>
                        </div>
                        <div class="mp-step">
                            <div class="mp-num">02</div>
                            <div class="mp-text">PLAN</div>
                        </div>
                        <div class="mp-step">
                            <div class="mp-num">03</div>
                            <div class="mp-text">DESIGN</div>
                        </div>
                        <div class="mp-step">
                            <div class="mp-num">04</div>
                            <div class="mp-text">DEVELOP</div>
                        </div>
                        <div class="mp-step">
                            <div class="mp-num">05</div>
                            <div class="mp-text">TEST</div>
                        </div>
                        <div class="mp-step">
                            <div class="mp-num">06</div>
                            <div class="mp-text">DEPLOY</div>
                        </div>
                    </div>
                </div>
                
                <div data-aos="fade-left">
                    <h2 style="font-size: 3.5rem; margin: 1rem 0 4rem; line-height: 1.1;">What We<br>Focus On.</h2>
                    
                    <div class="principles-list">
                        <div class="principle-modern">
                            <h4>01 / USER EXPERIENCE</h4>
                            <p>Designing intuitive, accessible, and meaningful interactions.</p>
                        </div>
                        <div class="principle-modern">
                            <h4>02 / RESPONSIVE DESIGN</h4>
                            <p>Flawless execution across mobile, tablet, and desktop.</p>
                        </div>
                        <div class="principle-modern">
                            <h4>03 / PERFORMANCE</h4>
                            <p>Fast load times, optimized assets, and efficient code.</p>
                        </div>
                        <div class="principle-modern">
                            <h4>04 / SECURITY</h4>
                            <p>Protecting user data and business logic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10 PROJECT STATISTICS -->
    <section class="section" style="padding: 6rem 0; background: var(--gt-accent);">
        <div class="container">
            <div class="grid grid-4" style="text-align: center; gap: 2rem;">
                <div data-aos="fade-up" data-aos-delay="0">
                    <div style="font-size: 4rem; font-family: var(--font-display); font-weight: 700; color: var(--gt-inverted-text); line-height: 1;">07+</div>
                    <div style="color: var(--gt-inverted-text); font-weight: 600; font-size: 1rem; letter-spacing: 2px; margin-top: 10px;">PROJECTS</div>
                </div>
                <div data-aos="fade-up" data-aos-delay="100">
                    <div style="font-size: 4rem; font-family: var(--font-display); font-weight: 700; color: var(--gt-inverted-text); line-height: 1;">04+</div>
                    <div style="color: var(--gt-inverted-text); font-weight: 600; font-size: 1rem; letter-spacing: 2px; margin-top: 10px;">LIVE PROJECTS</div>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <div style="font-size: 4rem; font-family: var(--font-display); font-weight: 700; color: var(--gt-inverted-text); line-height: 1;">03+</div>
                    <div style="color: var(--gt-inverted-text); font-weight: 600; font-size: 1rem; letter-spacing: 2px; margin-top: 10px;">SOFTWARE SYSTEMS</div>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <div style="font-size: 4rem; font-family: var(--font-display); font-weight: 700; color: var(--gt-inverted-text); line-height: 1;">08+</div>
                    <div style="color: var(--gt-inverted-text); font-weight: 600; font-size: 1rem; letter-spacing: 2px; margin-top: 10px;">TECHNOLOGIES</div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- 11 LEARN BY BUILDING -->
    <section class="section" style="padding: 8rem 0; background: var(--gt-surface); border-bottom: 1px solid var(--gt-border);">
        <div class="container" style="text-align: center;" data-aos="fade-up">
            <h3 style="font-size: 3.5rem; margin-bottom: 1.5rem;">Learn By Building.</h3>
            <p style="color: var(--gt-muted); max-width: 600px; margin: 0 auto 3rem; font-size: 1.15rem; line-height: 1.6;">Our technology ecosystem connects practical learning with real-world software development.</p>
            <a href="courses.php" class="btn btn-outline" style="padding: 1rem 2.5rem; font-size: 1.1rem;">Explore Courses &rarr;</a>
        </div>
    </section>

    <!-- 12 CTA -->
    <section class="section force-dark-mode" style="padding: 10rem 0; text-align: center; position: relative; overflow: hidden; background: var(--gt-bg);">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); max-width: 100vw; max-height: 100vh; width: 800px; height: 800px; background: var(--gt-accent); filter: blur(300px); opacity: 0.1; z-index: 1; pointer-events: none;"></div>
        <div class="container" style="position: relative; z-index: 2;" data-aos="zoom-in">
            <span class="section-label">READY TO BUILD?</span>
            <h2 style="font-size: clamp(3rem, 6vw, 5rem); margin: 1.5rem 0 2rem;">Your Idea Could<br>Be Next.</h2>
            <p style="color: var(--gt-muted); font-size: 1.25rem; max-width: 600px; margin: 0 auto 3rem; line-height: 1.6;">Have a website, software system or digital product in mind? Let's turn the idea into a practical solution.</p>
            <div style="display: flex; gap: 1.5rem; justify-content: center; flex-wrap: wrap;">
                <a href="#contact" class="btn btn-primary" style="padding: 1.2rem 3rem; font-size: 1.1rem;">Start a Project →</a>
                <a href="contact.php" class="btn btn-outline" style="padding: 1.2rem 3rem; font-size: 1.1rem;">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Footer Template -->
    <?php include "includes/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/projects.js"></script>
    <script src="assets/js/animations.js"></script>
    <script src="assets/js/navigation.js"></script>
    <script src="assets/js/main.js?v=<?= filemtime('assets/js/main.js') ?>"></script>
</body>
</html>











