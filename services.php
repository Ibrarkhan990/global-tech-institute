<?php
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="assets/js/theme.js?v=<?= filemtime('assets/js/theme.js') ?>"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | Global Tech & Institute</title>
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
    <link rel="stylesheet" href="assets/css/services.css?v=<?= filemtime('assets/css/services.css') ?>">
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

    <!-- Hero Section -->
    <header class="hero" style="position: relative; overflow: hidden; min-height: 100vh; padding-bottom: 80px; background: #0a0c0f;">
        <!-- Swiper Container -->
        <div class="swiper heroSwiper" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Technology" class="hero-img">
                </div>
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Code" class="hero-img">
                </div>
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Team" class="hero-img">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="hero-tech-grid" style="z-index: 2;"></div>
        <div style="position: absolute; top: -200px; right: -200px; max-width: 100vw; max-height: 100vh; width: 600px; height: 600px; background: var(--gt-accent); filter: blur(200px); opacity: 0.1; z-index: 2;"></div>
        
        <div class="container" style="position: relative; z-index: 3; height: 100%; display: flex; flex-direction: column; justify-content: flex-start; padding-top: 100px;">
            <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
                <span class="section-label" style="">03 / SERVICES</span>
                <h1 style="color: var(--gt-text); font-size: clamp(3.5rem, 8vw, 5.5rem); line-height: 1.1; margin-bottom: 1.5rem; letter-spacing: -2px; ">Digital Products.<br><span class="text-accent" style="color: transparent; -webkit-text-stroke: 1.5px var(--gt-accent);">Built With Purpose.</span></h1>
                <p style="color: var(--gt-muted); font-size: 1.25rem; max-width: 600px; margin-bottom: 2.5rem; line-height: 1.6; ">We design and develop modern digital products, software systems and technology solutions that solve real business problems.</p>
                <div style="display: flex; gap: 1.5rem; flex-wrap: wrap;">
                    <a href="#project-inquiry" class="btn btn-primary" onclick="event.preventDefault(); document.querySelector('#project-inquiry').scrollIntoView({behavior: 'smooth'})">Start a Project →</a>
                    <a href="#selected-work" class="btn" style="background: var(--gt-card-hover); color: var(--gt-text); border: 1px solid var(--gt-border-hover);" onclick="event.preventDefault(); document.querySelector('#selected-work').scrollIntoView({behavior: 'smooth'})">View Our Work</a>
                </div>
            </div>
        </div>
        
        <div class="hero-metadata">
            SOFTWARE<br>
            DESIGN<br>
            DEVELOPMENT
        </div>
    </header>

    <!-- 06 Services Intro -->
    <section class="section" style="padding: 6rem 0; background: var(--gt-surface);">
        <div class="container">
            <div class="grid grid-2 align-items-center" style="gap: 4rem;">
                <div data-aos="fade-right">
                    <span class="section-label">WHAT WE DO</span>
                    <h2 style="font-size: 3.5rem; line-height: 1.1; margin-top: 1rem;">Technology That<br>Moves Business Forward.</h2>
                </div>
                <div data-aos="fade-left">
                    <p style="color: var(--gt-muted); font-size: 1.25rem; line-height: 1.8; margin-bottom: 2rem;">From websites and e-commerce platforms to custom business software and APIs, we build reliable digital experiences designed around real business needs.</p>
                    <div style="font-size: 0.85rem; letter-spacing: 2px; color: var(--gt-accent); font-weight: 700;">
                        DESIGN &rarr; DEVELOP &rarr; DEPLOY &rarr; SUPPORT
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- 10-20 Service Details -->
    <section class="section" style="padding: 8rem 0;">
        <div class="container">
            <div style="margin-bottom: 4rem;" data-aos="fade-up">
                <span class="section-label">WHAT WE BUILD</span>
                <h2 style="font-size: 3.5rem; margin-top: 1rem;">Service Capabilities</h2>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 3rem;" id="detailed-services">
                <!-- Populated via JS for compactness in file -->
            </div>
        </div>
    </section>

    <!-- 21 Technology Stack -->
    <section class="section" style="padding: 8rem 0;">
        <div class="container">
            <div style="text-align: center; margin-bottom: 4rem;" data-aos="fade-up">
                <span class="section-label">ECOSYSTEM</span>
                <h2 style="font-size: 3.5rem; margin-top: 1rem;">Technologies Behind Our Work</h2>
            </div>
            
            <div class="grid grid-4" data-aos="fade-up" data-aos-delay="200">
                <div class="tech-icon-box">
                    <div style="font-size: 2rem; margin-bottom: 1rem;">&lt;/&gt;</div>
                    <h4 style="color: var(--gt-text); margin-bottom: 0.5rem;">FRONTEND</h4>
                    <p style="font-size: 0.9rem; line-height: 1.6;">HTML, CSS, JavaScript, Bootstrap, React, Vue</p>
                </div>
                <div class="tech-icon-box">
                    <div style="font-size: 2rem; margin-bottom: 1rem;">⚙️</div>
                    <h4 style="color: var(--gt-text); margin-bottom: 0.5rem;">BACKEND</h4>
                    <p style="font-size: 0.9rem; line-height: 1.6;">PHP, Python, Node.js, Laravel, Django</p>
                </div>
                <div class="tech-icon-box">
                    <div style="font-size: 2rem; margin-bottom: 1rem;">🗄️</div>
                    <h4 style="color: var(--gt-text); margin-bottom: 0.5rem;">DATABASE</h4>
                    <p style="font-size: 0.9rem; line-height: 1.6;">MySQL, PostgreSQL, MongoDB, Redis</p>
                </div>
                <div class="tech-icon-box">
                    <div style="font-size: 2rem; margin-bottom: 1rem;">🛠️</div>
                    <h4 style="color: var(--gt-text); margin-bottom: 0.5rem;">TOOLS</h4>
                    <p style="font-size: 0.9rem; line-height: 1.6;">Git, REST API, Docker, AWS, Figma</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 22 Our Development Process -->
    <section class="section" style="background: var(--gt-surface); padding: 8rem 0;">
        <div class="container">
            <div data-aos="fade-up">
                <span class="section-label">HOW WE WORK</span>
                <h2 style="font-size: 3.5rem; margin-top: 1rem;">From Idea<br>To Digital Product.</h2>
            </div>
            
            <div class="process-timeline" data-aos="fade-left" data-aos-delay="200">
                <div class="process-step">
                    <div style="color: var(--gt-accent); font-family: var(--font-display); font-size: 2.5rem; font-weight: 700; line-height: 1; margin-bottom: 1rem;">01</div>
                    <h4 style="color: var(--gt-text); font-size: 1.5rem; margin-bottom: 1rem;">DISCOVER</h4>
                    <p style="color: var(--gt-muted); line-height: 1.6;">Understand the problem, business and users.</p>
                </div>
                <div class="process-step">
                    <div style="color: var(--gt-accent); font-family: var(--font-display); font-size: 2.5rem; font-weight: 700; line-height: 1; margin-bottom: 1rem;">02</div>
                    <h4 style="color: var(--gt-text); font-size: 1.5rem; margin-bottom: 1rem;">PLAN</h4>
                    <p style="color: var(--gt-muted); line-height: 1.6;">Define requirements, architecture and roadmap.</p>
                </div>
                <div class="process-step">
                    <div style="color: var(--gt-accent); font-family: var(--font-display); font-size: 2.5rem; font-weight: 700; line-height: 1; margin-bottom: 1rem;">03</div>
                    <h4 style="color: var(--gt-text); font-size: 1.5rem; margin-bottom: 1rem;">DESIGN</h4>
                    <p style="color: var(--gt-muted); line-height: 1.6;">Create the interface, experience and system.</p>
                </div>
                <div class="process-step">
                    <div style="color: var(--gt-accent); font-family: var(--font-display); font-size: 2.5rem; font-weight: 700; line-height: 1; margin-bottom: 1rem;">04</div>
                    <h4 style="color: var(--gt-text); font-size: 1.5rem; margin-bottom: 1rem;">DEVELOP</h4>
                    <p style="color: var(--gt-muted); line-height: 1.6;">Build the product using modern technologies.</p>
                </div>
                <div class="process-step">
                    <div style="color: var(--gt-accent); font-family: var(--font-display); font-size: 2.5rem; font-weight: 700; line-height: 1; margin-bottom: 1rem;">05</div>
                    <h4 style="color: var(--gt-text); font-size: 1.5rem; margin-bottom: 1rem;">TEST</h4>
                    <p style="color: var(--gt-muted); line-height: 1.6;">Validate performance, security and usability.</p>
                </div>
                <div class="process-step">
                    <div style="color: var(--gt-accent); font-family: var(--font-display); font-size: 2.5rem; font-weight: 700; line-height: 1; margin-bottom: 1rem;">06</div>
                    <h4 style="color: var(--gt-text); font-size: 1.5rem; margin-bottom: 1rem;">LAUNCH</h4>
                    <p style="color: var(--gt-muted); line-height: 1.6;">Deploy, monitor and support the product.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 23 Industries -->
    <section class="section" style="padding: 8rem 0;">
        <div class="container">
            <div class="grid grid-2" style="gap: 4rem;">
                <div data-aos="fade-right">
                    <h2 style="font-size: 3.5rem; margin-bottom: 2rem;">Technology For<br>Different Industries.</h2>
                    <p style="color: var(--gt-muted); font-size: 1.15rem; line-height: 1.8; max-width: 400px;">We build tailored digital solutions that meet the specific requirements and compliance standards of various sectors.</p>
                </div>
                <div data-aos="fade-left">
                    <div class="industry-row"><span>E-Commerce</span> <span>&rarr;</span></div>
                    <div class="industry-row"><span>Education</span> <span>&rarr;</span></div>
                    <div class="industry-row"><span>Healthcare</span> <span>&rarr;</span></div>
                    <div class="industry-row"><span>Retail</span> <span>&rarr;</span></div>
                    <div class="industry-row"><span>Startups</span> <span>&rarr;</span></div>
                    <div class="industry-row"><span>Professional Services</span> <span>&rarr;</span></div>
                    <div class="industry-row"><span>Corporate Organizations</span> <span>&rarr;</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- 24 Featured Projects -->
    <section class="section" id="selected-work" style="background: var(--gt-surface); padding: 8rem 0;">
        <div class="container">
            <div style="margin-bottom: 4rem;" data-aos="fade-up">
                <span class="section-label">SELECTED WORK</span>
                <h2 style="font-size: 3.5rem; margin-top: 1rem;">Featured Projects</h2>
            </div>
            
            <div class="grid grid-2" style="gap: 4rem;">
                <!-- Project 1 -->
                <div data-aos="fade-up" data-aos-delay="100" style="cursor: pointer;">
                    <div style="border-radius: 16px; overflow: hidden; margin-bottom: 1.5rem; aspect-ratio: 4/3; background: #000;">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Project" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8; transition: transform 0.5s;" onmouseover="this.style.transform='scale(1.05)'; this.style.opacity='1'" onmouseout="this.style.transform='scale(1)'; this.style.opacity='0.8'">
                    </div>
                    <div style="color: var(--gt-accent); font-size: 0.8rem; letter-spacing: 2px; margin-bottom: 0.5rem; font-weight: 700;">BUSINESS SYSTEM</div>
                    <h3 style="color: var(--gt-text); font-size: 1.8rem; margin-bottom: 1rem;">Enterprise ERP Dashboard</h3>
                    <p style="color: var(--gt-muted); line-height: 1.6; margin-bottom: 1rem;">A complete custom ERP solution for a manufacturing company, handling inventory, CRM, and billing.</p>
                    <div style="display: flex; gap: 10px; margin-bottom: 1.5rem;">
                        <span style="font-size: 0.8rem; color: var(--gt-text); background: var(--gt-control-bg); padding: 4px 10px; border-radius: 4px;">PHP</span>
                        <span style="font-size: 0.8rem; color: var(--gt-text); background: var(--gt-control-bg); padding: 4px 10px; border-radius: 4px;">MySQL</span>
                        <span style="font-size: 0.8rem; color: var(--gt-text); background: var(--gt-control-bg); padding: 4px 10px; border-radius: 4px;">Bootstrap</span>
                    </div>
                    <a href="projects.php" style="color: var(--gt-accent); text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 5px;">View Project &rarr;</a>
                </div>
                
                <!-- Project 2 -->
                <div data-aos="fade-up" data-aos-delay="200" style="cursor: pointer; margin-top: 4rem;">
                    <div style="border-radius: 16px; overflow: hidden; margin-bottom: 1.5rem; aspect-ratio: 4/3; background: #000;">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Project" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8; transition: transform 0.5s;" onmouseover="this.style.transform='scale(1.05)'; this.style.opacity='1'" onmouseout="this.style.transform='scale(1)'; this.style.opacity='0.8'">
                    </div>
                    <div style="color: var(--gt-accent); font-size: 0.8rem; letter-spacing: 2px; margin-bottom: 0.5rem; font-weight: 700;">E-COMMERCE</div>
                    <h3 style="color: var(--gt-text); font-size: 1.8rem; margin-bottom: 1rem;">Global Retail Platform</h3>
                    <p style="color: var(--gt-muted); line-height: 1.6; margin-bottom: 1rem;">High-performance e-commerce platform with custom checkout and API integration for logistics.</p>
                    <div style="display: flex; gap: 10px; margin-bottom: 1.5rem;">
                        <span style="font-size: 0.8rem; color: var(--gt-text); background: var(--gt-control-bg); padding: 4px 10px; border-radius: 4px;">HTML/CSS</span>
                        <span style="font-size: 0.8rem; color: var(--gt-text); background: var(--gt-control-bg); padding: 4px 10px; border-radius: 4px;">JS</span>
                        <span style="font-size: 0.8rem; color: var(--gt-text); background: var(--gt-control-bg); padding: 4px 10px; border-radius: 4px;">Payment APIs</span>
                    </div>
                    <a href="projects.php" style="color: var(--gt-accent); text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 5px;">View Project &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 25 Why Choose Us -->
    <section class="section" style="padding: 8rem 0;">
        <div class="container">
            <h2 style="font-size: 3.5rem; margin-bottom: 4rem; text-align: center;" data-aos="fade-up">Why Build With Us?</h2>
            <div class="grid grid-3" style="gap: 3rem;">
                <div data-aos="fade-up" data-aos-delay="100">
                    <div style="color: var(--gt-border); font-size: 4rem; font-family: var(--font-display); font-weight: 800; line-height: 1; margin-bottom: 1rem;">01</div>
                    <h3 style="color: var(--gt-text); font-size: 1.5rem; margin-bottom: 1rem;">BUSINESS-FIRST THINKING</h3>
                    <p style="color: var(--gt-muted); line-height: 1.6;">We build solutions that solve actual business problems, not just write code.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <div style="color: var(--gt-border); font-size: 4rem; font-family: var(--font-display); font-weight: 800; line-height: 1; margin-bottom: 1rem;">02</div>
                    <h3 style="color: var(--gt-text); font-size: 1.5rem; margin-bottom: 1rem;">MODERN TECHNOLOGY</h3>
                    <p style="color: var(--gt-muted); line-height: 1.6;">Utilizing the latest proven tech stacks for speed, security, and scalability.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <div style="color: var(--gt-border); font-size: 4rem; font-family: var(--font-display); font-weight: 800; line-height: 1; margin-bottom: 1rem;">03</div>
                    <h3 style="color: var(--gt-text); font-size: 1.5rem; margin-bottom: 1rem;">PRACTICAL DEVELOPMENT</h3>
                    <p style="color: var(--gt-muted); line-height: 1.6;">Efficient agile development ensuring timely delivery without compromising quality.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="400">
                    <div style="color: var(--gt-border); font-size: 4rem; font-family: var(--font-display); font-weight: 800; line-height: 1; margin-bottom: 1rem;">04</div>
                    <h3 style="color: var(--gt-text); font-size: 1.5rem; margin-bottom: 1rem;">RESPONSIVE DESIGN</h3>
                    <p style="color: var(--gt-muted); line-height: 1.6;">Flawless experiences across mobile, tablet, and desktop interfaces.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="500">
                    <div style="color: var(--gt-border); font-size: 4rem; font-family: var(--font-display); font-weight: 800; line-height: 1; margin-bottom: 1rem;">05</div>
                    <h3 style="color: var(--gt-text); font-size: 1.5rem; margin-bottom: 1rem;">SCALABLE ARCHITECTURE</h3>
                    <p style="color: var(--gt-muted); line-height: 1.6;">Systems designed to grow seamlessly alongside your business operations.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div style="color: var(--gt-border); font-size: 4rem; font-family: var(--font-display); font-weight: 800; line-height: 1; margin-bottom: 1rem;">06</div>
                    <h3 style="color: var(--gt-text); font-size: 1.5rem; margin-bottom: 1rem;">LONG-TERM SUPPORT</h3>
                    <p style="color: var(--gt-muted); line-height: 1.6;">Dedicated maintenance and updates after the product launch.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 26 Solution Finder -->
    <section class="section" style="background: var(--gt-surface); padding: 8rem 0;">
        <div class="container">
            <div class="grid grid-2" style="gap: 4rem;">
                <div data-aos="fade-right">
                    <h2 style="font-size: 3rem; margin-bottom: 1rem;">What Do You Need?</h2>
                    <p style="color: var(--gt-muted); margin-bottom: 2rem;">Select your requirement to find the perfect technical solution for your business.</p>
                    <div id="solution-result"></div>
                </div>
                <div style="display: flex; flex-direction: column; gap: 1rem;" data-aos="fade-left">
                    <button class="solution-btn" data-rec="Web Development">I NEED A WEBSITE <span>&rarr;</span></button>
                    <button class="solution-btn" data-rec="E-Commerce Development">I NEED AN ONLINE STORE <span>&rarr;</span></button>
                    <button class="solution-btn" data-rec="Custom Software">I NEED CUSTOM SOFTWARE <span>&rarr;</span></button>
                    <button class="solution-btn" data-rec="Business Management Systems">I NEED A BUSINESS SYSTEM <span>&rarr;</span></button>
                    <button class="solution-btn" data-rec="Mobile Applications">I NEED A MOBILE APP <span>&rarr;</span></button>
                    <button class="solution-btn" data-rec="Technical Consulting">I NEED TECHNICAL SUPPORT <span>&rarr;</span></button>
                </div>
            </div>
        </div>
    </section>

    <!-- 27/28 Project Inquiry -->
    <section class="section" id="project-inquiry" style="padding: 8rem 0;">
        <div class="container">
            <div class="grid grid-2" style="gap: 4rem;">
                <div data-aos="fade-right">
                    <h2 style="font-size: 3.5rem; margin-bottom: 1.5rem;">Have a Project<br>in Mind?</h2>
                    <p style="color: var(--gt-muted); font-size: 1.15rem; line-height: 1.6; margin-bottom: 3rem;">Tell us what you're building. We'll help turn the idea into a practical digital solution.</p>
                </div>
                <div data-aos="fade-left" style="background: var(--gt-card-bg); border: 1px solid var(--gt-border); padding: 3rem; border-radius: 24px;">
                    <form id="inquiryForm" onsubmit="event.preventDefault(); alert('Form submitted! (Frontend only demo)');">
                        <div class="grid grid-2" style="gap: 1.5rem; margin-bottom: 1.5rem;">
                            <input type="text" placeholder="Full Name" required style="width: 100%; background: var(--gt-input-bg); border: 1px solid var(--gt-border); padding: 1rem; color: var(--gt-text); border-radius: 8px;">
                            <input type="email" placeholder="Email Address" required style="width: 100%; background: var(--gt-input-bg); border: 1px solid var(--gt-border); padding: 1rem; color: var(--gt-text); border-radius: 8px;">
                        </div>
                        <div class="grid grid-2" style="gap: 1.5rem; margin-bottom: 1.5rem;">
                            <input type="text" placeholder="Company (Optional)" style="width: 100%; background: var(--gt-input-bg); border: 1px solid var(--gt-border); padding: 1rem; color: var(--gt-text); border-radius: 8px;">
                            <input type="tel" placeholder="Phone Number" style="width: 100%; background: var(--gt-input-bg); border: 1px solid var(--gt-border); padding: 1rem; color: var(--gt-text); border-radius: 8px;">
                        </div>
                        <div style="margin-bottom: 1.5rem;">
                            <select id="service-select" required style="width: 100%; background: var(--gt-input-bg); border: 1px solid var(--gt-border); padding: 1rem; color: var(--gt-text); border-radius: 8px; appearance: none;">
                                <option value="" disabled selected>Select a Service</option>
                                <option value="Web Development">Web Development</option>
                                <option value="E-Commerce Development">E-Commerce</option>
                                <option value="Custom Software">Custom Software</option>
                                <option value="Business Management Systems">Business System</option>
                                <option value="API & System Integration">API Integration</option>
                                <option value="UI / UX Design">UI/UX Design</option>
                                <option value="Mobile Applications">Mobile Application</option>
                                <option value="Website Maintenance">Maintenance</option>
                                <option value="Technical Consulting">Consulting</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div style="margin-bottom: 1.5rem;">
                            <textarea placeholder="Project Description..." rows="4" required style="width: 100%; background: var(--gt-input-bg); border: 1px solid var(--gt-border); padding: 1rem; color: var(--gt-text); border-radius: 8px; font-family: inherit; resize: vertical;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%; padding: 1rem; border-radius: 8px;">Send Project Inquiry &rarr;</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- 29 FAQ -->
    <section class="section" style="background: var(--gt-surface); padding: 8rem 0;">
        <div class="container">
            <h2 style="font-size: 3rem; text-align: center; margin-bottom: 4rem;" data-aos="fade-up">Frequently Asked Questions</h2>
            <div style="max-width: 800px; margin: 0 auto;" data-aos="fade-up" id="faq-container">
                <!-- Injected via JS -->
            </div>
        </div>
    </section>

    <!-- 30 Final CTA -->
    <section class="section" style="padding: 8rem 0; text-align: center;">
        <div class="container" data-aos="zoom-in">
            <span class="section-label">READY WHEN YOU ARE</span>
            <h2 style="font-size: clamp(3rem, 6vw, 4.5rem); margin-top: 1rem; margin-bottom: 1.5rem;">Let's Build<br>Something Useful.</h2>
            <p style="color: var(--gt-muted); font-size: 1.25rem; max-width: 600px; margin: 0 auto 3rem; line-height: 1.6;">Whether you're starting a new idea or improving an existing system, let's create a digital solution that works.</p>
            <div style="display: flex; justify-content: center; gap: 1.5rem; flex-wrap: wrap;">
                <a href="#project-inquiry" class="btn btn-primary">Start a Project &rarr;</a>
                <a href="contact.php" class="btn" style="background: var(--gt-card-hover); color: var(--gt-text);">Contact Us</a>
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
    <script src="assets/js/services.js"></script>
</body>
</html>















