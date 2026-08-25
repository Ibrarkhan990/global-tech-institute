<?php
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="assets/js/theme.js?v=<?= filemtime('assets/js/theme.js') ?>"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insights | Global Tech & Institute</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/variables.css?v=<?= filemtime('assets/css/variables.css') ?>">
    <link rel="stylesheet" href="assets/css/base.css?v=<?= filemtime('assets/css/base.css') ?>">
    <link rel="stylesheet" href="assets/css/components.css?v=<?= filemtime('assets/css/components.css') ?>">
    <link rel="stylesheet" href="assets/css/sections.css?v=<?= filemtime('assets/css/sections.css') ?>">
    <link rel="stylesheet" href="assets/css/responsive.css?v=<?= filemtime('assets/css/responsive.css') ?>">
    <link rel="stylesheet" href="assets/css/insights.css?v=<?= filemtime('assets/css/insights.css') ?>">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
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

    <!-- 01 INSIGHTS HERO (STANDARD SLIDER) -->
    <header class="hero" style="position: relative; overflow: hidden; min-height: 100vh; padding-bottom: 80px; background: #0a0c0f;">
        <!-- Swiper Container -->
        <div class="swiper heroSwiper" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Future of Web" class="hero-img">
                </div>
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="PHP Dev" class="hero-img">
                </div>
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Education" class="hero-img">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        
        <div class="hero-tech-grid" style="z-index: 2; opacity: 0.1;"></div>
        <div style="position: absolute; bottom: -200px; left: -200px; max-width: 100vw; max-height: 100vh; width: 600px; height: 600px; background: var(--gt-accent); filter: blur(250px); opacity: 0.15; z-index: 2;"></div>

        <div class="container" style="position: relative; z-index: 3; height: 100%; display: flex; flex-direction: column; justify-content: flex-start; padding-top: 100px;">
            <div class="hero-content" data-aos="fade-up" data-aos-duration="1000" style="max-width: 900px;">
                <div id="breadcrumb-container" style="margin-bottom: 2rem;"></div>
                <span class="section-label" style="text-shadow: 2px 2px 10px rgba(0,0,0,0.8);">05 / INSIGHTS</span>
                <h1 style="color: var(--gt-text); font-size: clamp(3.5rem, 8vw, 6.5rem); line-height: 1.05; margin-bottom: 2rem; letter-spacing: -2px; text-shadow: 2px 2px 10px rgba(0,0,0,0.8);">Ideas.<br>Knowledge.<br><span class="text-accent" style="color: transparent; -webkit-text-stroke: 1.5px var(--gt-accent);">What's Next.</span></h1>
                <p style="color: var(--gt-muted); font-size: 1.35rem; margin-bottom: 3rem; line-height: 1.6; max-width: 700px; text-shadow: 1px 1px 5px rgba(0,0,0,0.8);">Explore technology, software development, education, career insights, digital trends and practical knowledge from Global Tech & Institute.</p>
                <div style="display: flex; gap: 1.5rem; flex-wrap: wrap;">
                    <a href="#latest-insights" class="btn btn-primary" onclick="event.preventDefault(); document.querySelector('#latest-insights').scrollIntoView({behavior: 'smooth'})">Explore Insights →</a>
                    <a href="courses.php" class="btn" style="background: var(--gt-card-hover); color: var(--gt-text); border: 1px solid var(--gt-border-hover);">Explore Courses →</a>
                </div>
            </div>
        </div>
        
        <div class="hero-metadata">
            <div style="margin-bottom: 2rem;">
                TECHNOLOGY<br>EDUCATION<br>SOFTWARE<br>CAREER
            </div>
        </div>
    </header>

    <!-- 03 INSIGHTS CATEGORIES & SEARCH -->
    <div class="insights-categories">
        <div class="container" style="display: flex; align-items: center; justify-content: space-between; gap: 2rem; width: 100%;">
            <div style="display: flex; gap: 10px; flex-wrap: wrap; padding-bottom: 5px;">
                <button class="cat-btn active" data-filter="all">ALL</button>
                <button class="cat-btn" data-filter="technology">TECHNOLOGY</button>
                <button class="cat-btn" data-filter="development">WEB DEVELOPMENT</button>
                <button class="cat-btn" data-filter="ecommerce">E-COMMERCE</button>
                <button class="cat-btn" data-filter="career">CAREER</button>
                <button class="cat-btn" data-filter="design">UI / UX</button>
            </div>
        </div>
    </div>

    <!-- 04 LATEST INSIGHTS -->
    <section id="latest-insights" class="section" style="padding: 6rem 0; background: var(--gt-bg);">
        <div class="container">
            <div style="margin-bottom: 5rem;" data-aos="fade-up">
                <span class="section-label">06 / LATEST INSIGHTS</span>
                <h2 style="font-size: clamp(2.5rem, 7vw, 4rem); line-height: 1; margin: 1rem 0;">What We're<br>Thinking About.</h2>
                
                <div class="search-container" style="margin: 3rem 0 0 0; max-width: 500px;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <input type="text" id="insights-search" placeholder="Search insights, technologies, or keywords...">
                </div>
            </div>

            <div id="search-empty-state" style="display: none; padding: 4rem; text-align: center; background: var(--gt-card-bg); border-radius: 20px; border: 1px dashed var(--gt-border);">
                <h3 style="font-size: 2rem; margin-bottom: 1rem;">No insights match your search.</h3>
                <p style="color: var(--gt-muted);">Try another search term or browse our categories.</p>
            </div>

            <div class="insights-grid">
                
                <!-- Card 1 (Large) -->
                <div class="ig-large filterable" data-category="development" data-aos="fade-up">
                    <a href="insight-detail.php" class="article-card" style="height: 100%; text-decoration: none;">
                        <div class="ac-image large">
                            <span class="ac-category">WEB DEVELOPMENT</span>
                            <img src="https://images.unsplash.com/photo-1555099962-4199c345e5dd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80" alt="Frontend Arch">
                        </div>
                        <div class="ac-content">
                            <h3 class="ac-title">Architecting the Frontend: Component Driven Design</h3>
                            <p class="ac-excerpt">How modern web development is changing the way businesses build digital products through reusable component architectures.</p>
                            <div class="ac-meta">
                                <div class="ac-author">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Author">
                                    <span>By Global Tech Editorial Team</span>
                                </div>
                                <span>6 min read</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 2 (Medium) -->
                <div class="ig-medium filterable" data-category="ecommerce" data-aos="fade-up" data-aos-delay="100">
                    <a href="insight-detail.php" class="article-card" style="height: 100%; text-decoration: none;">
                        <div class="ac-image medium">
                            <span class="ac-category">E-COMMERCE</span>
                            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="E-Commerce">
                        </div>
                        <div class="ac-content">
                            <h3 class="ac-title">What Makes a Modern E-Commerce Experience</h3>
                            <p class="ac-excerpt">From seamless checkouts to intelligent product discovery.</p>
                            <div class="ac-meta">
                                <span>Aug 15, 2026</span>
                                <span>5 min read</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 3 (Half) -->
                <div class="ig-half filterable" data-category="career" data-aos="fade-up">
                    <a href="insight-detail.php" class="article-card" style="height: 100%; text-decoration: none;">
                        <div class="ac-image medium">
                            <span class="ac-category">CAREER</span>
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Career">
                        </div>
                        <div class="ac-content">
                            <h3 class="ac-title">How to Build Your First Developer Portfolio</h3>
                            <p class="ac-excerpt">Practical advice on showcasing your skills, selecting the right projects, and impressing tech recruiters.</p>
                            <div class="ac-meta">
                                <span>Aug 10, 2026</span>
                                <span>4 min read</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 4 (Half) -->
                <div class="ig-half filterable" data-category="design" data-aos="fade-up" data-aos-delay="100">
                    <a href="insight-detail.php" class="article-card" style="height: 100%; text-decoration: none;">
                        <div class="ac-image medium">
                            <span class="ac-category">UI / UX</span>
                            <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Design">
                        </div>
                        <div class="ac-content">
                            <h3 class="ac-title">Designing Interfaces That Users Understand</h3>
                            <p class="ac-excerpt">Why visual hierarchy, whitespace, and interaction design matter more than aesthetic trends.</p>
                            <div class="ac-meta">
                                <span>Aug 05, 2026</span>
                                <span>7 min read</span>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- 05 EDITORIAL FEATURE -->
    <section class="section" style="padding: 8rem 0; background: var(--gt-surface); border-top: 1px solid var(--gt-border);">
        <div class="container">
            <div style="margin-bottom: 5rem;" data-aos="fade-up">
                <span class="section-label">07 / FEATURED</span>
                <h2 style="font-size: clamp(2.5rem, 7vw, 4rem); line-height: 1; margin: 1rem 0;">Ideas Worth<br>Exploring.</h2>
            </div>
            
            <div class="editorial-feature" data-aos="fade-up">
                <div class="ef-image">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80" alt="Education">
                </div>
                <div class="ef-content">
                    <span class="section-label" style="margin-bottom: 1.5rem;">EDUCATION · 10 MIN READ</span>
                    <h3 style="font-size: clamp(2rem, 5vw, 3rem); color: var(--gt-text); margin-bottom: 1.5rem; line-height: 1.1; letter-spacing: -1px;">Why Practical Projects Matter in Technology Education</h3>
                    <p style="color: var(--gt-muted); font-size: 1.15rem; line-height: 1.6; margin-bottom: 3rem;">Theory is essential, but execution is what builds careers. A deep dive into Global Tech & Institute's project-based learning methodology.</p>
                    
                    <div>
                        <a href="insight-detail.php" class="btn btn-primary" style="padding: 1rem 2rem;">READ MORE →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 06 THEMATIC BLOCKS (TECH, DEV, E-COMMERCE, CAREER) -->
    
    <!-- TECHNOLOGY -->
    <section class="section" style="padding: 6rem 0; background: var(--gt-bg); border-bottom: 1px solid var(--gt-border);">
        <div class="container">
            <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 4rem; flex-wrap: wrap; gap: 2rem;">
                <div>
                    <span class="section-label">08 / TECHNOLOGY</span>
                    <h2 style="font-size: clamp(1.8rem, 6vw, 3.5rem); line-height: 1.1; margin-top: 1rem;">Technology,<br>Explained Clearly.</h2>
                </div>
                <a href="insight-detail.php" class="btn btn-outline">Explore Technology →</a>
            </div>
            <div class="insights-grid">
                <div class="ig-third" data-aos="fade-up"><a href="insight-detail.php" class="article-card"><div class="ac-content" style="padding: 2rem;"><span class="ac-category" style="position:static; margin-bottom:1rem; display:inline-block;">APIs</span><h3 class="ac-title" style="font-size: 1.4rem;">Understanding REST APIs</h3><p class="ac-excerpt" style="font-size:0.95rem;">How systems communicate in modern software.</p></div></a></div>
                <div class="ig-third" data-aos="fade-up" data-aos-delay="100"><a href="insight-detail.php" class="article-card"><div class="ac-content" style="padding: 2rem;"><span class="ac-category" style="position:static; margin-bottom:1rem; display:inline-block;">DATABASES</span><h3 class="ac-title" style="font-size: 1.4rem;">Database Architecture Basics</h3><p class="ac-excerpt" style="font-size:0.95rem;">Structuring data for performance and scale.</p></div></a></div>
                <div class="ig-third" data-aos="fade-up" data-aos-delay="200"><a href="insight-detail.php" class="article-card"><div class="ac-content" style="padding: 2rem;"><span class="ac-category" style="position:static; margin-bottom:1rem; display:inline-block;">SECURITY</span><h3 class="ac-title" style="font-size: 1.4rem;">Web Security Essentials</h3><p class="ac-excerpt" style="font-size:0.95rem;">Protecting applications from modern vulnerabilities.</p></div></a></div>
            </div>
        </div>
    </section>

    <!-- DEVELOPMENT -->
    <section class="section" style="padding: 6rem 0; background: var(--gt-surface); border-bottom: 1px solid var(--gt-border);">
        <div class="container">
            <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 4rem; flex-wrap: wrap; gap: 2rem;">
                <div>
                    <span class="section-label">09 / DEVELOPMENT</span>
                    <h2 style="font-size: clamp(1.8rem, 6vw, 3.5rem); line-height: 1.1; margin-top: 1rem;">Build Better<br>Software.</h2>
                </div>
            </div>
            <div class="insights-grid">
                <div class="ig-half" data-aos="fade-right"><a href="insight-detail.php" class="article-card" style="flex-direction: row; align-items: center; padding: 1.5rem;"><div style="width: 80px; height: 80px; border-radius: 12px; background: var(--gt-card-hover); display: flex; align-items: center; justify-content: center; font-size: 2rem;"><i class="devicon-php-plain colored"></i></div><div style="padding-left: 1.5rem;"><h3 style="color: var(--gt-text); font-size: 1.3rem; margin-bottom:0.5rem;">Clean Code in PHP</h3><p style="color:var(--gt-muted); font-size: 0.9rem;">Best practices for readable backend logic.</p></div></a></div>
                <div class="ig-half" data-aos="fade-left"><a href="insight-detail.php" class="article-card" style="flex-direction: row; align-items: center; padding: 1.5rem;"><div style="width: 80px; height: 80px; border-radius: 12px; background: var(--gt-card-hover); display: flex; align-items: center; justify-content: center; font-size: 2rem;"><i class="devicon-javascript-plain colored"></i></div><div style="padding-left: 1.5rem;"><h3 style="color: var(--gt-text); font-size: 1.3rem; margin-bottom:0.5rem;">JavaScript Debugging</h3><p style="color:var(--gt-muted); font-size: 0.9rem;">Strategies for isolating complex frontend issues.</p></div></a></div>
            </div>
        </div>
    </section>

    <!-- E-COMMERCE -->
    <section class="section" style="padding: 6rem 0; background: var(--gt-bg);">
        <div class="container">
            <div style="text-align: center; margin-bottom: 4rem;" data-aos="fade-up">
                <span class="section-label">10 / E-COMMERCE</span>
                <h2 style="font-size: clamp(1.8rem, 6vw, 3.5rem); line-height: 1.1; margin: 1rem 0;">Building Better<br>Digital Commerce.</h2>
            </div>
            
            <div class="insights-grid" style="align-items: center;">
                <div class="ig-half" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1556742031-c6961e8560b0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="E-Commerce" style="width: 100%; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.4);">
                </div>
                <div class="ig-half" data-aos="fade-left" style="padding: 2rem;">
                    <div style="margin-bottom: 2rem;">
                        <span class="section-label">PROJECT INSIGHT</span>
                        <h3 style="color: var(--gt-text); font-size: 2.2rem; margin: 1rem 0;">How We Built SKD Prime</h3>
                        <p style="color: var(--gt-muted); line-height: 1.6; font-size: 1.1rem;">A deep architectural review of building a secure, scalable e-commerce catalog and checkout workflow from scratch.</p>
                    </div>
                    <a href="projects.php" class="btn btn-primary">View Project →</a>
                    <a href="insight-detail.php" class="btn btn-outline" style="margin-left: 10px;">Read Technical Insight</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 07 TUTORIALS -->
    <section class="section" style="padding: 8rem 0; background: var(--gt-surface); border-top: 1px solid var(--gt-border);">
        <div class="container">
            <div style="text-align: center; margin-bottom: 5rem;" data-aos="fade-up">
                <span class="section-label">16 / TUTORIALS</span>
                <h2 style="font-size: clamp(2.5rem, 7vw, 4rem); line-height: 1; margin: 1rem 0;">Learn.<br>Build.<br>Repeat.</h2>
            </div>
            
            <div style="max-width: 900px; margin: 0 auto;">
                <div class="tutorial-row" data-aos="fade-up">
                    <span class="tut-diff beginner">BEGINNER</span>
                    <h4 style="color: var(--gt-text); font-size: 1.2rem; font-weight: 500;">HTML & CSS: Structuring Your First Webpage</h4>
                    <span style="color: var(--gt-muted); font-size: 0.9rem;">15 MIN READ</span>
                    <a href="insight-detail.php" style="color: var(--gt-accent); font-weight: 600; text-decoration: none;">START →</a>
                </div>
                <div class="tutorial-row" data-aos="fade-up" data-aos-delay="100">
                    <span class="tut-diff intermediate">INTERMEDIATE</span>
                    <h4 style="color: var(--gt-text); font-size: 1.2rem; font-weight: 500;">MySQL: Relational Database Design</h4>
                    <span style="color: var(--gt-muted); font-size: 0.9rem;">20 MIN READ</span>
                    <a href="insight-detail.php" style="color: var(--gt-accent); font-weight: 600; text-decoration: none;">START →</a>
                </div>
                <div class="tutorial-row" data-aos="fade-up" data-aos-delay="200">
                    <span class="tut-diff advanced">ADVANCED</span>
                    <h4 style="color: var(--gt-text); font-size: 1.2rem; font-weight: 500;">PHP: Building a Custom MVC Framework</h4>
                    <span style="color: var(--gt-muted); font-size: 0.9rem;">45 MIN READ</span>
                    <a href="insight-detail.php" style="color: var(--gt-accent); font-weight: 600; text-decoration: none;">START →</a>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 4rem;" data-aos="fade-up">
                <p style="color: var(--gt-muted); margin-bottom: 1.5rem;">Want structured, expert-led training?</p>
                <a href="courses.php" class="btn btn-primary">Explore Our Courses →</a>
            </div>
        </div>
    </section>

    <!-- 08 POPULAR & TRENDING -->
    <section class="section" style="padding: 6rem 0; background: var(--gt-bg);">
        <div class="container">
            <div class="insights-grid">
                <!-- POPULAR -->
                <div class="ig-half" data-aos="fade-right">
                    <span class="section-label">17 / POPULAR</span>
                    <h2 style="font-size: clamp(2rem, 5vw, 3rem); margin: 1rem 0 3rem;">Most Read.</h2>
                    
                                        <div style="display: flex; flex-direction: column;">
                        <a href="insight-detail.php" class="popular-item">
                            <span class="popular-number">01</span>
                            <div class="popular-content">
                                <h4 class="popular-title">The Developer's Guide to Freelancing</h4>
                                <span class="popular-meta">CAREER · 8 MIN READ</span>
                            </div>
                        </a>
                        <a href="insight-detail.php" class="popular-item">
                            <span class="popular-number">02</span>
                            <div class="popular-content">
                                <h4 class="popular-title">Is AI Replacing Web Developers?</h4>
                                <span class="popular-meta">DIGITAL TRENDS · 12 MIN READ</span>
                            </div>
                        </a>
                        <a href="insight-detail.php" class="popular-item">
                            <span class="popular-number">03</span>
                            <div class="popular-content">
                                <h4 class="popular-title">Mastering CSS Grid in 2026</h4>
                                <span class="popular-meta">WEB DEVELOPMENT · 6 MIN READ</span>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- TRENDING -->
                <div class="ig-half" data-aos="fade-left">
                    <span class="section-label">TRENDING TOPICS</span>
                    <h2 style="font-size: clamp(2rem, 5vw, 3rem); margin: 1rem 0 3rem; color: transparent; user-select: none;">Explore.</h2>
                    
                    <div class="trending-tags">
                        <span class="trending-tag">#PHP</span>
                        <span class="trending-tag">#JavaScript</span>
                        <span class="trending-tag">#WebDevelopment</span>
                        <span class="trending-tag">#MySQL</span>
                        <span class="trending-tag">#ECommerce</span>
                        <span class="trending-tag">#UIUX</span>
                        <span class="trending-tag">#Career</span>
                        <span class="trending-tag">#Technology</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 09 NEWSLETTER -->
    <section class="section" style="padding: 10rem 0; background: var(--gt-surface); border-top: 1px solid var(--gt-border); text-align: center; position: relative; overflow: hidden;">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); max-width: 100vw; max-height: 100vh; width: 800px; height: 800px; background: var(--gt-accent); filter: blur(300px); opacity: 0.1; z-index: 1; pointer-events: none;"></div>
        
        <div class="container" style="position: relative; z-index: 2;" data-aos="zoom-in">
            <h2 style="font-size: clamp(2.5rem, 7vw, 4rem); line-height: 1.1; margin-bottom: 1.5rem;">Stay Ahead<br>of What's Next.</h2>
            <p style="color: var(--gt-muted); font-size: 1.2rem; max-width: 600px; margin: 0 auto 4rem; line-height: 1.6;">Get useful technology, software and career insights delivered to your inbox.</p>
            
            <form id="newsletter-form" class="premium-input-group">
                <input type="email" id="newsletter-input" placeholder="Your email address" required>
                <button type="submit" id="newsletter-submit">Subscribe →</button>
            </form>
        </div>
    </section>

    <!-- 10 FINAL CTA -->
    <section class="section" style="padding: 8rem 0; background: var(--gt-bg); border-top: 1px solid var(--gt-border);">
        <div class="container" style="text-align: center;" data-aos="fade-up">
            <span class="section-label">READY TO BUILD?</span>
            <h2 style="font-size: clamp(3rem, 6vw, 4.5rem); margin: 1.5rem 0 2rem; line-height: 1.1;">Turn Knowledge<br>Into Action.</h2>
            <p style="color: var(--gt-muted); font-size: 1.25rem; max-width: 700px; margin: 0 auto 4rem; line-height: 1.6;">Whether you want to learn a new skill or build a digital product, Global Tech & Institute can help you take the next step.</p>
            
            <div style="display: flex; gap: 3rem; justify-content: center; flex-wrap: wrap;">
                <div style="padding: 2rem; background: var(--gt-card-bg); border: 1px solid var(--gt-border); border-radius: 20px; min-width: 300px;">
                    <div style="color: var(--gt-muted); font-size: 0.9rem; font-weight: 700; letter-spacing: 2px; margin-bottom: 1.5rem;">FOR STUDENTS</div>
                    <a href="courses.php" class="btn btn-primary" style="width: 100%;">Explore Courses →</a>
                </div>
                <div style="padding: 2rem; background: var(--gt-card-bg); border: 1px solid var(--gt-border); border-radius: 20px; min-width: 300px;">
                    <div style="color: var(--gt-muted); font-size: 0.9rem; font-weight: 700; letter-spacing: 2px; margin-bottom: 1.5rem;">FOR BUSINESSES</div>
                    <a href="services.php" class="btn btn-outline" style="width: 100%; border-color: var(--gt-border-hover);">Start a Project →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Template -->
    <?php include "includes/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/insights.js"></script>
    <script src="assets/js/animations.js"></script>
    <script src="assets/js/navigation.js"></script>
    <script src="assets/js/main.js?v=<?= filemtime('assets/js/main.js') ?>"></script>
</body>
</html>

















