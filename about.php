<?php
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="assets/js/theme.js?v=<?= filemtime('assets/js/theme.js') ?>"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Global Tech & Institute</title>
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
    <link rel="stylesheet" href="assets/css/about.css?v=<?= filemtime('assets/css/about.css') ?>">
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

    <!-- 02 ABOUT HERO -->
    <header class="hero" style="position: relative; overflow: hidden; min-height: 100vh; padding-bottom: 80px; background: #0a0c0f;">
        <!-- Swiper Container -->
        <div class="swiper heroSwiper" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Team Collaboration" class="hero-img">
                </div>
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Learning" class="hero-img">
                </div>
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Building Technology" class="hero-img">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        
        <div class="hero-tech-grid" style="z-index: 2; opacity: 0.1;"></div>
        <div style="position: absolute; bottom: -200px; left: -200px; max-width: 100vw; max-height: 100vh; width: 600px; height: 600px; background: var(--gt-accent); filter: blur(250px); opacity: 0.15; z-index: 2;"></div>

        <div class="container" style="position: relative; z-index: 3; height: 100%; display: flex; flex-direction: column; justify-content: flex-start; padding-top: 100px;">
            <div class="hero-content" data-aos="fade-up" data-aos-duration="1000" style="max-width: 800px;">
                <div id="breadcrumb-container" style="margin-bottom: 2rem;"></div>
                <span class="section-label" style="">02 / ABOUT</span>
                <h1 style="color: var(--gt-text); font-size: clamp(3.5rem, 8vw, 6rem); line-height: 1.05; margin-bottom: 2rem; letter-spacing: -2px; ">We Build Technology.<br><span class="text-outline">We Build People.</span></h1>
                <p style="color: var(--gt-muted); font-size: 1.35rem; margin-bottom: 3rem; line-height: 1.6; ">Global Tech & Institute brings together software development and practical technology education to create digital solutions and develop the people who will build tomorrow's technology.</p>
                <div style="display: flex; gap: 1.5rem; flex-wrap: wrap;">
                    <a href="#our-story" class="btn btn-primary" onclick="event.preventDefault(); document.querySelector('#our-story').scrollIntoView({behavior: 'smooth'})">Explore Our Story →</a>
                    <a href="#vision" class="btn" style="background: var(--gt-card-hover); color: var(--gt-text); border: 1px solid var(--gt-border-hover);" onclick="event.preventDefault(); document.querySelector('#vision').scrollIntoView({behavior: 'smooth'})">Meet Our Vision</a>
                </div>
            </div>
        </div>
        
        <div class="hero-metadata">
            <div style="margin-bottom: 2rem;">
                SOFTWARE<br>EDUCATION<br>INNOVATION
            </div>
            <div>
                PEOPLE<br>PRODUCTS<br>FUTURE
            </div>
        </div>
    </header>

    <!-- 01 WHO WE ARE -->
    <section class="section" style="padding: 8rem 0; background: var(--gt-surface);">
        <div class="container">
            <div class="grid grid-2" style="gap: 5rem; align-items: center;">
                <div data-aos="fade-right">
                    <span class="section-label">01 / WHO WE ARE</span>
                    <h2 style="font-size: clamp(3rem, 5vw, 4rem); line-height: 1.1; margin-top: 1.5rem;">More Than a<br><span class="text-accent">Technology Company.</span></h2>
                </div>
                <div data-aos="fade-left" class="editorial-text">
                    <p style="margin-bottom: 2rem;">Global Tech & Institute is a technology-focused organization combining <strong>Software Development</strong> and <strong>Technology Education</strong>.</p>
                    <p>We build digital products and business systems while helping students develop practical skills for the modern digital economy.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 02 OUR STORY -->
    <section id="our-story" class="section" style="padding: 8rem 0;">
        <div class="container">
            <div style="margin-bottom: 5rem;" data-aos="fade-up">
                <span class="section-label">02 / OUR STORY</span>
                <h2 style="font-size: clamp(1.8rem, 6vw, 3.5rem); margin-top: 1rem;">From Ideas<br>To Impact.</h2>
                <p class="editorial-text" style="max-width: 800px; margin-top: 2rem;">We recognized that technology education often lacked real-world practical application, and software development needed better talent. Our organization was founded to bridge this gap—connecting learning directly to building.</p>
            </div>
            
            <div class="timeline-grid" data-aos="fade-up" data-aos-delay="200">
                <div class="timeline-item">
                    <span class="timeline-num">01</span>
                    <h4 class="timeline-title">THE IDEA</h4>
                    <p class="timeline-desc">A vision to combine technology with practical learning.</p>
                </div>
                <div class="timeline-item">
                    <span class="timeline-num">02</span>
                    <h4 class="timeline-title">THE FOUNDATION</h4>
                    <p class="timeline-desc">Building a technology-focused organization.</p>
                </div>
                <div class="timeline-item">
                    <span class="timeline-num">03</span>
                    <h4 class="timeline-title">THE GROWTH</h4>
                    <p class="timeline-desc">Expanding software and education capabilities.</p>
                </div>
                <div class="timeline-item">
                    <span class="timeline-num">04</span>
                    <h4 class="timeline-title">THE FUTURE</h4>
                    <p class="timeline-desc">Building a stronger digital ecosystem.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 03 OUR PURPOSE -->
    <section class="section" style="padding: 8rem 0; background: linear-gradient(180deg, var(--gt-surface) 0%, var(--gt-bg) 100%); text-align: center;">
        <div class="container">
            <div data-aos="fade-up" style="max-width: 900px; margin: 0 auto;">
                <span class="section-label">03 / OUR PURPOSE</span>
                <h2 style="font-size: clamp(3rem, 6vw, 4.5rem); line-height: 1.1; margin: 2rem 0; color: var(--gt-text);">Technology Should<br><span style="color: transparent; -webkit-text-stroke: 1.5px var(--gt-accent);">Create Opportunity.</span></h2>
                <p class="editorial-text">Our core philosophy is centered around practical technology, real-world software, skill development, career growth, and digital transformation.</p>
            </div>
        </div>
    </section>

    <!-- 04 MISSION & 05 VISION -->
    <section class="section" style="padding: 8rem 0;">
        <div class="container">
            <div class="grid grid-2" style="gap: 4rem;">
                <!-- Mission -->
                <div style="background: var(--gt-card-bg); border: 1px solid var(--gt-border); padding: var(--space-lg); border-radius: 24px;" data-aos="fade-right">
                    <span class="section-label">04 / OUR MISSION</span>
                    <h3 style="font-size: clamp(1.5rem, 5vw, 2.5rem); margin: 1.5rem 0 2rem;">Build Technology.<br>Build Capability.</h3>
                    <p class="editorial-text" style="margin-bottom: 2rem;">Our mission is to create useful digital solutions and provide practical technology education that helps businesses, students and professionals move forward.</p>
                    <ul style="list-style: none; padding: 0; display: flex; flex-direction: column; gap: 12px; color: var(--gt-muted);">
                        <li style="display: flex; align-items: center; gap: 10px;"><span style="color: var(--gt-accent);">+</span> Practical learning</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><span style="color: var(--gt-accent);">+</span> Modern technology</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><span style="color: var(--gt-accent);">+</span> Real projects</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><span style="color: var(--gt-accent);">+</span> Professional development</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><span style="color: var(--gt-accent);">+</span> Business-focused solutions</li>
                    </ul>
                </div>
                
                <!-- Vision -->
                <div id="vision" style="display: flex; flex-direction: column; justify-content: center; padding: 2rem;" data-aos="fade-left">
                    <span class="section-label">05 / OUR VISION</span>
                    <h3 style="font-size: clamp(1.8rem, 6vw, 3.5rem); line-height: 1.1; margin: 1.5rem 0 2rem;">A Future Built<br><span class="text-accent">With Technology.</span></h3>
                    <p class="editorial-text" style="font-size: 1.8rem; line-height: 1.5;">To become a trusted technology ecosystem where businesses find reliable digital solutions and people gain the skills to participate in the digital future.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 06 OUR VALUES -->
    <section class="section" style="padding: 6rem 0;">
        <div class="container">
            <div style="margin-bottom: 4rem;" data-aos="fade-up">
                <span class="section-label">06 / OUR VALUES</span>
                <h2 style="font-size: clamp(1.8rem, 6vw, 3.5rem); margin-top: 1rem;">What We<br>Stand For.</h2>
            </div>
            
            <div class="values-grid" data-aos="fade-up" data-aos-delay="200">
                <div class="value-item"><span class="value-num">01</span><h4 class="value-title">INTEGRITY</h4><p class="value-desc">Doing the right thing, always.</p></div>
                <div class="value-item"><span class="value-num">02</span><h4 class="value-title">INNOVATION</h4><p class="value-desc">Embracing modern solutions.</p></div>
                <div class="value-item"><span class="value-num">03</span><h4 class="value-title">PRACTICALITY</h4><p class="value-desc">Focusing on what actually works.</p></div>
                <div class="value-item"><span class="value-num">04</span><h4 class="value-title">QUALITY</h4><p class="value-desc">Delivering excellence consistently.</p></div>
                <div class="value-item"><span class="value-num">05</span><h4 class="value-title">CONTINUOUS LEARNING</h4><p class="value-desc">Always improving our craft.</p></div>
                <div class="value-item"><span class="value-num">06</span><h4 class="value-title">CUSTOMER FOCUS</h4><p class="value-desc">Solving real client problems.</p></div>
                <div class="value-item"><span class="value-num">07</span><h4 class="value-title">COLLABORATION</h4><p class="value-desc">Building together as a team.</p></div>
                <div class="value-item"><span class="value-num">08</span><h4 class="value-title">ACCOUNTABILITY</h4><p class="value-desc">Taking ownership of outcomes.</p></div>
            </div>
        </div>
    </section>

    <!-- 07 OUR ECOSYSTEM -->
    <section class="section" style="padding: 8rem 0; background: var(--gt-surface);">
        <div class="container">
            <div style="text-align: center; margin-bottom: 5rem;" data-aos="fade-up">
                <span class="section-label">07 / OUR ECOSYSTEM</span>
                <h2 style="font-size: clamp(3rem, 5vw, 4rem); margin-top: 1rem;">Two Paths.<br>One Vision.</h2>
            </div>
            
            <div class="grid grid-2" style="gap: 3rem;">
                <div class="ecosystem-panel" data-aos="fade-right">
                    <span style="display: inline-block; padding: 6px 12px; background: var(--gt-focus-ring); color: var(--gt-accent); font-weight: 700; font-size: 0.8rem; border-radius: 20px; align-self: flex-start; margin-bottom: 2rem;">01 — SOFTWARE HOUSE</span>
                    <h3 style="font-size: clamp(1.5rem, 5vw, 2.5rem); margin-bottom: 1.5rem;">Technology for Businesses</h3>
                    <p class="editorial-text" style="margin-bottom: 3rem;">Global Tech provides modern digital solutions for businesses and organizations.</p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 4rem; display: flex; flex-direction: column; gap: 12px; color: var(--gt-text);">
                        <li>&rarr; Web Development</li>
                        <li>&rarr; E-Commerce</li>
                        <li>&rarr; Custom Software</li>
                        <li>&rarr; Business Systems</li>
                        <li>&rarr; API Integration</li>
                        <li>&rarr; UI/UX</li>
                        <li>&rarr; Database Solutions</li>
                        <li>&rarr; Maintenance</li>
                    </ul>
                    <a href="services.php" class="btn btn-outline" style="margin-top: auto; border-color: var(--gt-border-hover); text-align: center;">Explore Services &rarr;</a>
                </div>
                
                <div class="ecosystem-panel" data-aos="fade-left">
                    <span style="display: inline-block; padding: 6px 12px; background: var(--gt-focus-ring); color: var(--gt-accent); font-weight: 700; font-size: 0.8rem; border-radius: 20px; align-self: flex-start; margin-bottom: 2rem;">02 — TECHNOLOGY INSTITUTE</span>
                    <h3 style="font-size: clamp(1.5rem, 5vw, 2.5rem); margin-bottom: 1.5rem;">Skills for the Future</h3>
                    <p class="editorial-text" style="margin-bottom: 3rem;">Global Tech Institute provides practical technology education focused on real skills and real projects.</p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 4rem; display: flex; flex-direction: column; gap: 12px; color: var(--gt-text);">
                        <li>&rarr; Web Development</li>
                        <li>&rarr; Programming</li>
                        <li>&rarr; PHP & MySQL</li>
                        <li>&rarr; JavaScript</li>
                        <li>&rarr; Python</li>
                        <li>&rarr; UI/UX</li>
                        <li>&rarr; Digital Marketing</li>
                        <li>&rarr; Professional Courses</li>
                    </ul>
                    <a href="courses.php" class="btn btn-outline" style="margin-top: auto; border-color: var(--gt-border-hover); text-align: center;">Explore Courses &rarr;</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- 08 WHAT MAKES US DIFFERENT -->
    <section class="section" style="padding: 8rem 0;">
        <div class="container">
            <div style="margin-bottom: 5rem;" data-aos="fade-up">
                <span class="section-label">08 / OUR DIFFERENCE</span>
                <h2 style="font-size: clamp(1.8rem, 6vw, 3.5rem); margin-top: 1rem;">Built Different.<br>Built With Purpose.</h2>
            </div>
            
            <div class="grid grid-3" style="gap: 4rem;">
                <div data-aos="fade-up" data-aos-delay="0">
                    <span style="font-family: var(--font-display); font-size: clamp(2rem, 5vw, 3rem); color: var(--gt-accent); opacity: 0.3; font-weight: 700; margin-bottom: 1rem; display: block;">01</span>
                    <h4 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--gt-text);">PRACTICAL FIRST</h4>
                    <p class="editorial-text" style="font-size: 1.15rem;">We focus on practical skills and real-world application.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="100">
                    <span style="font-family: var(--font-display); font-size: clamp(2rem, 5vw, 3rem); color: var(--gt-accent); opacity: 0.3; font-weight: 700; margin-bottom: 1rem; display: block;">02</span>
                    <h4 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--gt-text);">TECHNOLOGY + EDUCATION</h4>
                    <p class="editorial-text" style="font-size: 1.15rem;">Our software and education ecosystems strengthen each other.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <span style="font-family: var(--font-display); font-size: clamp(2rem, 5vw, 3rem); color: var(--gt-accent); opacity: 0.3; font-weight: 700; margin-bottom: 1rem; display: block;">03</span>
                    <h4 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--gt-text);">REAL PROJECT EXPERIENCE</h4>
                    <p class="editorial-text" style="font-size: 1.15rem;">Learning should lead to building.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <span style="font-family: var(--font-display); font-size: clamp(2rem, 5vw, 3rem); color: var(--gt-accent); opacity: 0.3; font-weight: 700; margin-bottom: 1rem; display: block;">04</span>
                    <h4 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--gt-text);">MODERN TECHNOLOGY</h4>
                    <p class="editorial-text" style="font-size: 1.15rem;">We continuously work with relevant technologies.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="400">
                    <span style="font-family: var(--font-display); font-size: clamp(2rem, 5vw, 3rem); color: var(--gt-accent); opacity: 0.3; font-weight: 700; margin-bottom: 1rem; display: block;">05</span>
                    <h4 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--gt-text);">BUSINESS UNDERSTANDING</h4>
                    <p class="editorial-text" style="font-size: 1.15rem;">Technology should solve actual problems.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="500">
                    <span style="font-family: var(--font-display); font-size: clamp(2rem, 5vw, 3rem); color: var(--gt-accent); opacity: 0.3; font-weight: 700; margin-bottom: 1rem; display: block;">06</span>
                    <h4 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--gt-text);">LONG-TERM THINKING</h4>
                    <p class="editorial-text" style="font-size: 1.15rem;">We build for sustainable growth, not short-term results.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 09 OUR APPROACH -->
    <section class="section" style="padding: 8rem 0; background: var(--gt-surface);">
        <div class="container">
            <div class="grid grid-2" style="gap: 5rem; align-items: center; margin-bottom: 4rem;">
                <div data-aos="fade-right">
                    <span class="section-label">09 / OUR APPROACH</span>
                    <h2 style="font-size: clamp(1.8rem, 6vw, 3.5rem); margin-top: 1rem;">How We<br>Think.</h2>
                </div>
                <div data-aos="fade-left">
                    <p class="editorial-text">The same practical approach applies to everything we do: Software projects, student learning, training, and product development.</p>
                </div>
            </div>
            
            <div class="process-flow" data-aos="fade-up">
                <div class="process-node">
                    <h4 style="color: var(--gt-accent); font-weight: 600; letter-spacing: 2px;">UNDERSTAND</h4>
                </div>
                <div class="process-node">
                    <h4 style="color: var(--gt-text); font-weight: 600; letter-spacing: 2px;">PLAN</h4>
                </div>
                <div class="process-node">
                    <h4 style="color: var(--gt-text); font-weight: 600; letter-spacing: 2px;">DESIGN</h4>
                </div>
                <div class="process-node">
                    <h4 style="color: var(--gt-text); font-weight: 600; letter-spacing: 2px;">BUILD</h4>
                </div>
                <div class="process-node">
                    <h4 style="color: var(--gt-text); font-weight: 600; letter-spacing: 2px;">TEST</h4>
                </div>
                <div class="process-node">
                    <h4 style="color: var(--gt-accent); font-weight: 600; letter-spacing: 2px;">IMPROVE</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- 10 OUR PEOPLE -->
    <section class="section" style="padding: 8rem 0;">
        <div class="container">
            <div style="margin-bottom: 5rem;" data-aos="fade-up">
                <span class="section-label">10 / OUR PEOPLE</span>
                <h2 style="font-size: clamp(1.8rem, 6vw, 3.5rem); margin-top: 1rem;">People Build<br>Technology.</h2>
            </div>
            
            <div class="team-grid">
                <!-- Placeholder Team Members -->
                <div class="team-card" data-aos="fade-up" data-aos-delay="0">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Founder" class="team-photo">
                    <h4 style="font-size: 1.5rem; color: var(--gt-text); margin-bottom: 0.5rem;">[Name Placeholder]</h4>
                    <p style="color: var(--gt-accent); font-weight: 600; margin-bottom: 1rem; font-size: 0.9rem; letter-spacing: 1px;">FOUNDER / DIRECTOR</p>
                    <p class="text-muted" style="font-size: 0.95rem; margin-bottom: 1rem;">Strategic vision and leadership for both software and education divisions.</p>
                    <a href="#" style="color: var(--gt-muted); text-decoration: none;">LinkedIn &rarr;</a>
                </div>
                <div class="team-card" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tech Lead" class="team-photo">
                    <h4 style="font-size: 1.5rem; color: var(--gt-text); margin-bottom: 0.5rem;">[Name Placeholder]</h4>
                    <p style="color: var(--gt-accent); font-weight: 600; margin-bottom: 1rem; font-size: 0.9rem; letter-spacing: 1px;">TECHNICAL LEAD</p>
                    <p class="text-muted" style="font-size: 0.95rem; margin-bottom: 1rem;">Overseeing software architecture and maintaining code quality.</p>
                    <a href="#" style="color: var(--gt-muted); text-decoration: none;">LinkedIn &rarr;</a>
                </div>
                <div class="team-card" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Instructor" class="team-photo">
                    <h4 style="font-size: 1.5rem; color: var(--gt-text); margin-bottom: 0.5rem;">[Name Placeholder]</h4>
                    <p style="color: var(--gt-accent); font-weight: 600; margin-bottom: 1rem; font-size: 0.9rem; letter-spacing: 1px;">SENIOR INSTRUCTOR</p>
                    <p class="text-muted" style="font-size: 0.95rem; margin-bottom: 1rem;">Guiding students through practical, modern development frameworks.</p>
                    <a href="#" style="color: var(--gt-muted); text-decoration: none;">LinkedIn &rarr;</a>
                </div>
                <div class="team-card" data-aos="fade-up" data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="UI/UX Designer" class="team-photo">
                    <h4 style="font-size: 1.5rem; color: var(--gt-text); margin-bottom: 0.5rem;">[Name Placeholder]</h4>
                    <p style="color: var(--gt-accent); font-weight: 600; margin-bottom: 1rem; font-size: 0.9rem; letter-spacing: 1px;">UI/UX DESIGNER</p>
                    <p class="text-muted" style="font-size: 0.95rem; margin-bottom: 1rem;">Crafting intuitive user interfaces and premium digital experiences.</p>
                    <a href="#" style="color: var(--gt-muted); text-decoration: none;">LinkedIn &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 11 LEADERSHIP -->
    <section class="section" style="padding: 8rem 0; background: var(--gt-card-bg); border-top: 1px solid var(--gt-border); border-bottom: 1px solid var(--gt-border);">
        <div class="container">
            <div class="grid grid-2" style="gap: 5rem; align-items: center;">
                <div data-aos="fade-right">
                    <span class="section-label">11 / LEADERSHIP</span>
                    <h2 style="font-size: clamp(1.8rem, 6vw, 3.5rem); margin-top: 1rem; margin-bottom: 2rem;">Guided By<br>Experience.</h2>
                    <p class="editorial-text" style="margin-bottom: 2rem;">[Leadership Profile Placeholder]<br>Professional background and vision statement explaining the direction of Global Tech & Institute.</p>
                    <p class="editorial-text" style="font-style: italic; color: var(--gt-text);">"Our commitment is to build a sustainable digital ecosystem where education meets real-world application."</p>
                </div>
                <div data-aos="fade-left" style="position: relative;">
                    <div style="aspect-ratio: 4/3; background: var(--gt-surface); border-radius: 16px; border: 1px dashed var(--gt-border); display: flex; align-items: center; justify-content: center; color: var(--gt-muted);">
                        [Leadership Image Placeholder]
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 12 AT A GLANCE & 13 OUR IMPACT -->
    <section class="section" style="padding: 8rem 0;">
        <div class="container">
            <!-- At a Glance -->
            <div style="margin-bottom: 8rem;">
                <div style="text-align: center; margin-bottom: 4rem;" data-aos="fade-up">
                    <span class="section-label">12 / AT A GLANCE</span>
                </div>
                <div class="grid grid-4 text-center">
                    <!-- Numbers will be loaded from DB, using placeholders -->
                    <div class="data-item reveal" data-aos="fade-up" data-aos-delay="0">
                        <div class="data-value" data-target="100">0</div><span style="font-size:2rem; font-weight:700; color:var(--gt-accent);">+</span>
                        <div class="data-label" style="margin-top: 1rem;">STUDENTS TRAINED</div>
                    </div>
                    <div class="data-item reveal" data-aos="fade-up" data-aos-delay="100">
                        <div class="data-value" data-target="50">0</div><span style="font-size:2rem; font-weight:700; color:var(--gt-accent);">+</span>
                        <div class="data-label" style="margin-top: 1rem;">PROJECTS COMPLETED</div>
                    </div>
                    <div class="data-item reveal" data-aos="fade-up" data-aos-delay="200">
                        <div class="data-value" data-target="20">0</div><span style="font-size:2rem; font-weight:700; color:var(--gt-accent);">+</span>
                        <div class="data-label" style="margin-top: 1rem;">COURSES</div>
                    </div>
                    <div class="data-item reveal" data-aos="fade-up" data-aos-delay="300">
                        <div class="data-value" data-target="95">0</div><span style="font-size:2rem; font-weight:700; color:var(--gt-accent);">%</span>
                        <div class="data-label" style="margin-top: 1rem;">SATISFACTION</div>
                    </div>
                </div>
            </div>

            <!-- Impact -->
            <div class="grid grid-2" style="gap: 6rem; align-items: start;">
                <div data-aos="fade-right">
                    <span class="section-label">13 / OUR IMPACT</span>
                    <h2 style="font-size: clamp(1.8rem, 6vw, 3.5rem); margin-top: 1rem; margin-bottom: 2rem;">Measuring What<br>Matters.</h2>
                    <p class="editorial-text">We measure our success not just by the software we deploy, but by the capability we build in the people and businesses we work with.</p>
                </div>
                <div data-aos="fade-left">
                    <div style="border-bottom: 1px solid var(--gt-border); padding-bottom: 2rem; margin-bottom: 2rem;">
                        <h4 style="color: var(--gt-text); font-size: 1.5rem; margin-bottom: 1rem;">BUSINESS IMPACT</h4>
                        <p class="editorial-text" style="font-size: 1.15rem;">Helping organizations use technology to streamline operations and grow.</p>
                    </div>
                    <div style="border-bottom: 1px solid var(--gt-border); padding-bottom: 2rem; margin-bottom: 2rem;">
                        <h4 style="color: var(--gt-text); font-size: 1.5rem; margin-bottom: 1rem;">EDUCATION IMPACT</h4>
                        <p class="editorial-text" style="font-size: 1.15rem;">Helping students develop practical, industry-ready skills for real careers.</p>
                    </div>
                    <div>
                        <h4 style="color: var(--gt-text); font-size: 1.5rem; margin-bottom: 1rem;">DIGITAL IMPACT</h4>
                        <p class="editorial-text" style="font-size: 1.15rem;">Building useful, reliable, and scalable digital products that last.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 14 STUDENT SUCCESS & 15 SOFTWARE CAPABILITIES -->
    <section class="section" style="padding: 8rem 0; background: var(--gt-surface);">
        <div class="container">
            <div class="grid grid-2" style="gap: 4rem;">
                <div style="background: var(--gt-bg); border: 1px solid var(--gt-border); padding: var(--space-lg); border-radius: 24px;" data-aos="fade-up" data-aos-delay="0">
                    <span class="section-label">14 / STUDENT SUCCESS</span>
                    <h3 style="font-size: clamp(1.5rem, 5vw, 2.5rem); margin-bottom: 2rem; line-height: 1.1;">Learning Should<br>Lead Somewhere.</h3>
                    <ul style="list-style: none; padding: 0; margin-bottom: 3rem; display: flex; flex-direction: column; gap: 12px; color: var(--gt-muted);">
                        <li>&rarr; Practical projects</li>
                        <li>&rarr; Skill development</li>
                        <li>&rarr; Portfolio building</li>
                        <li>&rarr; Career preparation</li>
                        <li>&rarr; Technology exposure</li>
                        <li>&rarr; Professional mindset</li>
                    </ul>
                    <a href="courses.php" class="btn btn-outline" style="width: 100%; text-align: center;">Explore Courses &rarr;</a>
                </div>
                
                <div style="background: var(--gt-bg); border: 1px solid var(--gt-border); padding: var(--space-lg); border-radius: 24px;" data-aos="fade-up" data-aos-delay="100">
                    <span class="section-label">15 / SOFTWARE CAPABILITIES</span>
                    <h3 style="font-size: clamp(1.5rem, 5vw, 2.5rem); margin-bottom: 2rem; line-height: 1.1;">We Don't Just Teach<br>Technology. We Build It.</h3>
                    <ul style="list-style: none; padding: 0; margin-bottom: 3rem; display: flex; flex-direction: column; gap: 12px; color: var(--gt-muted);">
                        <li>&rarr; Web Applications</li>
                        <li>&rarr; E-Commerce</li>
                        <li>&rarr; Business Systems</li>
                        <li>&rarr; Custom Software</li>
                        <li>&rarr; APIs</li>
                        <li>&rarr; Dashboards</li>
                        <li>&rarr; Databases</li>
                        <li>&rarr; Digital Products</li>
                    </ul>
                    <a href="services.php" class="btn btn-outline" style="width: 100%; text-align: center;">Explore Services &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 16 TECHNOLOGY STACK -->
    <section class="section" style="padding: 8rem 0; position: relative; background: var(--gt-surface);">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 1px; background: linear-gradient(90deg, transparent, var(--gt-focus-ring), transparent);"></div>
        <div class="container">
            <div style="text-align: center; margin-bottom: 5rem;" data-aos="fade-up">
                <span class="section-label">16 / TECHNOLOGY</span>
                <h2 style="font-size: clamp(1.8rem, 6vw, 3.5rem); margin-top: 1rem;">Our Core Stacks.</h2>
                <p class="editorial-text" style="max-width: 600px; margin: 1.5rem auto 0;">We specialize in two primary technology ecosystems, ensuring robust, scalable, and modern digital solutions.</p>
            </div>
            
            <div class="grid grid-2" style="gap: 4rem;">
                <!-- PHP/Laravel Stack -->
                <div style="background: var(--gt-card-bg); border: 1px solid var(--gt-border); border-radius: 24px; padding: var(--space-lg); position: relative; overflow: hidden;" data-aos="fade-right">
                    <div style="position: absolute; top: -50px; right: -50px; max-width: 100vw; max-height: 100vh; width: 200px; height: 200px; background: var(--gt-accent); filter: blur(100px); opacity: 0.1;"></div>
                    <span style="font-family: var(--font-display); font-size: 0.8rem; font-weight: 700; color: var(--gt-accent); letter-spacing: 2px;">ECOSYSTEM 01</span>
                    <h3 style="font-size: clamp(1.5rem, 5vw, 2.5rem); margin: 1rem 0 2rem; color: var(--gt-text);">Full-Stack<br>PHP / Laravel</h3>
                    <p style="color: var(--gt-muted); margin-bottom: 2.5rem; line-height: 1.6;">Our robust backend ecosystem powering scalable business applications, complex APIs, and enterprise systems.</p>
                    <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                        <span style="padding: 10px 20px; background: var(--gt-card-hover); border-radius: 8px; color: var(--gt-text); font-size: 0.9rem; border: 1px solid var(--gt-border);">PHP 8+</span>
                        <span style="padding: 10px 20px; background: var(--gt-card-hover); border-radius: 8px; color: var(--gt-text); font-size: 0.9rem; border: 1px solid var(--gt-border);">Laravel</span>
                        <span style="padding: 10px 20px; background: var(--gt-card-hover); border-radius: 8px; color: var(--gt-text); font-size: 0.9rem; border: 1px solid var(--gt-border);">MySQL</span>
                        <span style="padding: 10px 20px; background: var(--gt-card-hover); border-radius: 8px; color: var(--gt-text); font-size: 0.9rem; border: 1px solid var(--gt-border);">Livewire / Alpine.js</span>
                    </div>
                </div>

                <!-- MERN Stack -->
                <div style="background: var(--gt-card-bg); border: 1px solid var(--gt-border); border-radius: 24px; padding: var(--space-lg); position: relative; overflow: hidden;" data-aos="fade-left">
                    <div style="position: absolute; top: -50px; right: -50px; max-width: 100vw; max-height: 100vh; width: 200px; height: 200px; background: #61DAFB; filter: blur(100px); opacity: 0.05;"></div>
                    <span style="font-family: var(--font-display); font-size: 0.8rem; font-weight: 700; color: var(--gt-accent); letter-spacing: 2px;">ECOSYSTEM 02</span>
                    <h3 style="font-size: clamp(1.5rem, 5vw, 2.5rem); margin: 1rem 0 2rem; color: var(--gt-text);">Modern<br>MERN Stack</h3>
                    <p style="color: var(--gt-muted); margin-bottom: 2.5rem; line-height: 1.6;">Our high-performance javascript ecosystem for dynamic single-page applications and real-time interfaces.</p>
                    <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                        <span style="padding: 10px 20px; background: var(--gt-card-hover); border-radius: 8px; color: var(--gt-text); font-size: 0.9rem; border: 1px solid var(--gt-border);">MongoDB</span>
                        <span style="padding: 10px 20px; background: var(--gt-card-hover); border-radius: 8px; color: var(--gt-text); font-size: 0.9rem; border: 1px solid var(--gt-border);">Express.js</span>
                        <span style="padding: 10px 20px; background: var(--gt-card-hover); border-radius: 8px; color: var(--gt-text); font-size: 0.9rem; border: 1px solid var(--gt-border);">React.js</span>
                        <span style="padding: 10px 20px; background: var(--gt-card-hover); border-radius: 8px; color: var(--gt-text); font-size: 0.9rem; border: 1px solid var(--gt-border);">Node.js</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 17 OUR CULTURE & 18 WORK ENVIRONMENT -->
    <section class="section" style="padding: 8rem 0; background: var(--gt-surface);">
        <div class="container">
            <div class="grid grid-2" style="gap: 5rem; align-items: center; margin-bottom: 6rem;">
                <div data-aos="fade-right">
                    <span class="section-label">17 / CULTURE</span>
                    <h2 style="font-size: clamp(1.8rem, 6vw, 3.5rem); margin-top: 1rem; margin-bottom: 2rem;">Curious Minds.<br>Practical Builders.</h2>
                    <p class="editorial-text">Our culture revolves around continuous improvement, solving problems, and taking pride in what we create.</p>
                </div>
                <div data-aos="fade-left">
                    <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                        <span style="padding: 10px 20px; border: 1px solid var(--gt-border); border-radius: 30px; color: var(--gt-text);">Learning</span>
                        <span style="padding: 10px 20px; border: 1px solid var(--gt-border); border-radius: 30px; color: var(--gt-text);">Experimentation</span>
                        <span style="padding: 10px 20px; border: 1px solid var(--gt-border); border-radius: 30px; color: var(--gt-text);">Collaboration</span>
                        <span style="padding: 10px 20px; border: 1px solid var(--gt-border); border-radius: 30px; color: var(--gt-text);">Problem solving</span>
                        <span style="padding: 10px 20px; border: 1px solid var(--gt-border); border-radius: 30px; color: var(--gt-text);">Building</span>
                        <span style="padding: 10px 20px; border: 1px solid var(--gt-border); border-radius: 30px; color: var(--gt-text);">Teaching</span>
                    </div>
                </div>
            </div>
            
            <div data-aos="fade-up">
                <span class="section-label">18 / WORK ENVIRONMENT</span>
                <div class="grid grid-3" style="gap: 2rem; margin-top: 2rem;">
                    <!-- Placeholders for environment photography -->
                    <div style="aspect-ratio: 16/9; background: var(--gt-bg); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--gt-muted); border: 1px dashed var(--gt-border);">[Classroom Image Placeholder]</div>
                    <div style="aspect-ratio: 16/9; background: var(--gt-bg); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--gt-muted); border: 1px dashed var(--gt-border);">[Team Image Placeholder]</div>
                    <div style="aspect-ratio: 16/9; background: var(--gt-bg); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--gt-muted); border: 1px dashed var(--gt-border);">[Dev Environment Placeholder]</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 19 CAREERS -->
    <section class="section" style="padding: 8rem 0;">
        <div class="container text-center">
            <div data-aos="fade-up" style="max-width: 700px; margin: 0 auto;">
                <span class="section-label">19 / CAREERS</span>
                <h2 style="font-size: clamp(1.8rem, 6vw, 3.5rem); margin-top: 1rem; margin-bottom: 2rem;">Build Your Career<br>With Technology.</h2>
                <p class="editorial-text" style="margin-bottom: 3rem;">We're building an environment for people who want to learn, create and grow.</p>
                <a href="contact.php" class="btn btn-outline" style="border-color: var(--gt-border-hover);">Explore Opportunities &rarr;</a>
            </div>
        </div>
    </section>

    <!-- CTAS -->
    <section class="section" style="padding: clamp(3rem, 5vw, 6rem) 0;">
        <div class="container">
            <div class="grid grid-2" style="gap: 3rem;">
                <!-- Student CTA -->
                <div style="background: linear-gradient(145deg, var(--gt-focus-ring), transparent); border: 1px solid var(--gt-focus-ring); padding: var(--space-lg); border-radius: 24px; display: flex; flex-direction: column; justify-content: center;" data-aos="fade-right">
                    <h3 style="font-size: clamp(1.5rem, 5vw, 2.5rem); margin-bottom: 1.5rem; color: var(--gt-text);">Ready to Start Learning?</h3>
                    <p class="editorial-text" style="margin-bottom: 3rem;">Choose a skill. Build real projects. Take the next step.</p>
                    <a href="apply.php" class="btn btn-primary" style="align-self: flex-start;">Apply Now &rarr;</a>
                </div>
                <!-- Business CTA -->
                <div style="background: var(--gt-card-bg); border: 1px solid var(--gt-border); padding: var(--space-lg); border-radius: 24px; display: flex; flex-direction: column; justify-content: center;" data-aos="fade-left">
                    <h3 style="font-size: clamp(1.5rem, 5vw, 2.5rem); margin-bottom: 1.5rem; color: var(--gt-text);">Have a Digital<br>Project in Mind?</h3>
                    <p class="editorial-text" style="margin-bottom: 3rem;">Let's build a practical technology solution for your business.</p>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="services.html#project-inquiry" class="btn btn-primary">Start a Project &rarr;</a>
                        <a href="contact.php" class="btn btn-outline" style="border-color: var(--gt-border-hover);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="section" style="padding: clamp(3rem, 5vw, 6rem) 0; background: var(--gt-bg);">
        <div class="container">
            <div style="text-align: center; margin-bottom: 4rem;" data-aos="fade-up">
                <span class="section-label">FAQ</span>
                <h2 style="font-size: clamp(1.8rem, 6vw, 3.5rem); margin-top: 1rem;">Frequently Asked Questions</h2>
            </div>
            
            <div style="max-width: 800px; margin: 0 auto;" data-aos="fade-up">
                <div class="faq-item active">
                    <div class="faq-question">What is Global Tech & Institute?<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="transform: rotate(180deg); transition: transform 0.3s;"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                    <div class="faq-answer" style="display: block;">We are a dual-purpose organization operating both as a professional software house building digital products for businesses, and as a technology institute providing practical, project-based education.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">What does Global Tech provide?<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="transition: transform 0.3s;"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                    <div class="faq-answer">For businesses, we provide software development, web applications, and digital solutions. For students, we provide practical courses in programming, UI/UX, and digital marketing.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Do you offer software development services?<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="transition: transform 0.3s;"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                    <div class="faq-answer">Yes. Our software house division builds web applications, e-commerce platforms, custom business software, and API integrations for clients globally.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">What courses do you offer?<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="transition: transform 0.3s;"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                    <div class="faq-answer">We offer hands-on courses in Web Development, Python, PHP & MySQL, UI/UX Design, Digital Marketing, and foundational IT skills.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Is your education practical?<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="transition: transform 0.3s;"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                    <div class="faq-answer">Absolutely. Because we run a working software house, our education curriculum is designed around real-world requirements, modern frameworks, and actual project workflows.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Do students work on real projects?<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="transition: transform 0.3s;"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                    <div class="faq-answer">Yes, our training heavily emphasizes portfolio building. Students apply their learning to build actual working digital products.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">How can I apply for a course?<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="transition: transform 0.3s;"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                    <div class="faq-answer">You can view our available programs on the Courses page and submit an application directly through our Apply Now form.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL STATEMENT & CTA -->
    <section class="section" style="padding: 10rem 0; text-align: center; position: relative; overflow: hidden;">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); max-width: 100vw; max-height: 100vh; width: 800px; height: 800px; background: var(--gt-accent); filter: blur(300px); opacity: 0.1; z-index: 0;"></div>
        <div class="container" style="position: relative; z-index: 1;">
            <div data-aos="fade-up" style="margin-bottom: 8rem;">
                <h2 style="font-size: clamp(3.5rem, 6vw, 5rem); line-height: 1.1; margin-bottom: 2rem; color: var(--gt-text);">Technology Changes<br>When People Know<br><span class="text-outline">How To Build It.</span></h2>
                <p class="editorial-text" style="max-width: 700px; margin: 0 auto;">Global Tech & Institute exists to connect technology, practical learning and meaningful digital solutions.</p>
            </div>
            
            <div data-aos="fade-up" style="max-width: 800px; margin: 0 auto; background: var(--gt-card-bg); border: 1px solid var(--gt-border); padding: var(--space-lg); border-radius: 24px;">
                <span class="section-label">20 / NEXT STEP</span>
                <h3 style="font-size: clamp(2rem, 5vw, 3rem); margin-top: 1rem; margin-bottom: 3rem; color: var(--gt-text);">Let's Build<br>What's Next.</h3>
                
                <div style="display: flex; gap: 2rem; justify-content: center; flex-wrap: wrap; margin-bottom: 3rem;">
                    <div style="text-align: left;">
                        <div style="font-size: 0.8rem; letter-spacing: 2px; color: var(--gt-muted); margin-bottom: 1rem;">FOR STUDENTS</div>
                        <a href="courses.php" style="color: var(--gt-text); text-decoration: none; font-size: 1.25rem; font-weight: 500; border-bottom: 1px solid var(--gt-border-hover); padding-bottom: 5px;">Explore Courses &rarr;</a>
                    </div>
                    <div style="width: 1px; background: var(--gt-control-bg);"></div>
                    <div style="text-align: left;">
                        <div style="font-size: 0.8rem; letter-spacing: 2px; color: var(--gt-muted); margin-bottom: 1rem;">FOR BUSINESSES</div>
                        <a href="services.html#project-inquiry" style="color: var(--gt-text); text-decoration: none; font-size: 1.25rem; font-weight: 500; border-bottom: 1px solid var(--gt-border-hover); padding-bottom: 5px;">Start a Project &rarr;</a>
                    </div>
                </div>
                
                <a href="apply.php" class="btn btn-primary" style="padding: 20px 60px; font-size: 1.25rem;">Apply Now &rarr;</a>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <?php include "includes/footer.php"; ?>

    <!-- Scripts -->
    <script src="assets/js/navigation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/animations.js"></script>
    <script src="assets/js/main.js?v=<?= filemtime('assets/js/main.js') ?>"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // FAQ Accordion
            const faqItems = document.querySelectorAll('.faq-item');
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                question.addEventListener('click', () => {
                    const isActive = item.classList.contains('active');
                    faqItems.forEach(i => {
                        i.classList.remove('active');
                        i.querySelector('.faq-answer').style.display = 'none';
                        i.querySelector('.faq-question svg').style.transform = 'rotate(0deg)';
                    });
                    if(!isActive) {
                        item.classList.add('active');
                        item.querySelector('.faq-answer').style.display = 'block';
                        item.querySelector('.faq-question svg').style.transform = 'rotate(180deg)';
                    }
                });
            });
        });
    </script>
</body>
</html>


















