<?php 
require_once 'includes/functions.php';
$pdo = db();
$stmt = $pdo->query("SELECT * FROM contact_settings LIMIT 1");
$contact_settings = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="assets/js/theme.js?v=<?= filemtime('assets/js/theme.js') ?>"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Global Tech & Institute</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    
    <link rel="stylesheet" href="assets/css/variables.css?v=<?= filemtime('assets/css/variables.css') ?>">
    <link rel="stylesheet" href="assets/css/base.css?v=<?= filemtime('assets/css/base.css') ?>">
    <link rel="stylesheet" href="assets/css/components.css?v=<?= filemtime('assets/css/components.css') ?>">
    <link rel="stylesheet" href="assets/css/sections.css?v=<?= filemtime('assets/css/sections.css') ?>">
    <link rel="stylesheet" href="assets/css/responsive.css?v=<?= filemtime('assets/css/responsive.css') ?>">
    <link rel="stylesheet" href="assets/css/contact.css?v=<?= filemtime('assets/css/contact.css') ?>">
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

    <!-- 01 CONTACT HERO -->
    <header class="hero" style="position: relative; overflow: hidden; min-height: 100vh; padding-bottom: 80px; background: var(--gt-surface);">
        <div class="swiper heroSwiper" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Tech Collaboration" style="width: 100%; height: 100%; object-fit: cover; filter: brightness(0.35);">
                </div>
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Team Discussion" style="width: 100%; height: 100%; object-fit: cover; filter: brightness(0.35);">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        
        <div class="hero-tech-grid" style="z-index: 2; opacity: 0.1;"></div>
        <div style="position: absolute; bottom: -200px; left: -200px; max-width: 100vw; max-height: 100vh; width: 600px; height: 600px; background: var(--gt-accent); filter: blur(250px); opacity: 0.15; z-index: 2;"></div>

        <div class="container" style="position: relative; z-index: 3; height: 100%; display: flex; flex-direction: column; justify-content: flex-start; padding-top: 100px;">
            <div class="hero-content" data-aos="fade-up" data-aos-duration="1000" style="max-width: 900px;">
                <div id="breadcrumb-container" style="margin-bottom: 2rem;"></div>
                <span class="section-label" style="">06 / CONTACT</span>
                <h1 style="color: var(--gt-text); font-size: clamp(3.5rem, 8vw, 6.5rem); line-height: 1.05; margin-bottom: 2rem; letter-spacing: -2px; ">Let's Build<br><span class="text-accent" style="color: transparent; -webkit-text-stroke: 1.5px var(--gt-accent);">What's Next.</span></h1>
                <p style="color: var(--gt-muted); font-size: 1.35rem; margin-bottom: 3rem; line-height: 1.6; max-width: 700px; ">Whether you are looking to build a digital product, grow your technology skills or simply have a question, we'd love to hear from you.</p>
                <div style="display: flex; gap: 1.5rem; flex-wrap: wrap;">
                    <a href="#business-inquiry" class="btn btn-primary" onclick="event.preventDefault(); document.querySelector('#business-inquiry').scrollIntoView({behavior: 'smooth'})">Start a Project →</a>
                    <a href="apply.php" class="btn" style="background: var(--gt-card-hover); color: var(--gt-text); border: 1px solid var(--gt-border-hover);">Apply Now →</a>
                </div>
            </div>
        </div>
        
        <div class="hero-metadata">
            <div style="margin-bottom: 2rem;">
                SOFTWARE<br>EDUCATION<br>SUPPORT<br>COLLABORATION
            </div>
        </div>
    </header>

    <!-- 01 BUSINESS & STUDENT INQUIRIES -->
    <section class="section" style="padding: 8rem 0; background: var(--gt-bg); position: relative; overflow: hidden;">
        <!-- Background Decorative Orbs -->
        <div style="position: absolute; top: 10%; left: -10%; max-width: 100vw; max-height: 100vh; width: 500px; height: 500px; background: var(--gt-accent); filter: blur(300px); opacity: 0.05; pointer-events: none;"></div>
        <div style="position: absolute; bottom: 10%; right: -10%; max-width: 100vw; max-height: 100vh; width: 500px; height: 500px; background: #ffffff; filter: blur(300px); opacity: 0.03; pointer-events: none;"></div>

        <div class="container" style="position: relative; z-index: 2;">
            <div class="grid" style="grid-template-columns: 1fr 1fr; gap: 6rem; align-items: start;">
                
                <!-- Business -->
                <div id="business-inquiry" data-aos="fade-right">
                    <span class="section-label">01 / FOR BUSINESSES</span>
                    <h2 class="section-title" style="font-size: 3rem; margin-bottom: 1.5rem;">Let's Build<br>Something Useful.</h2>
                    <p class="section-desc" style="margin-bottom: 3rem;">Tell us about your business, project or digital challenge. Our team can help you turn an idea into a practical technology solution.</p>
                    
                    <div style="padding: 3.5rem; background: var(--gt-card-inner-bg); border-radius: 24px; border: 1px solid var(--gt-border); border-top: 1px solid var(--gt-focus-ring); backdrop-filter: blur(20px); box-shadow: 0 30px 60px rgba(0,0,0,0.5); position: relative; overflow: hidden;">
                        
                        <!-- Internal glow -->
                        <div style="position: absolute; top: 0; left: 50%; transform: translateX(-50%); width: 100%; height: 1px; background: linear-gradient(90deg, transparent, var(--gt-accent), transparent); opacity: 0.5;"></div>
                        <div style="position: absolute; top: -50px; left: 50%; transform: translateX(-50%); max-width: 100vw; max-height: 100vh; width: 150px; height: 150px; background: var(--gt-accent); filter: blur(80px); opacity: 0.15; pointer-events: none;"></div>

                        <form class="gt-form" id="business-form" onsubmit="handleFormSubmit(event, 'business-form')" style="position: relative; z-index: 2;">
                            <?php echo csrf_field(); ?>
                            <div class="form-row">
                                <div class="input-group">
                                    <input type="text" id="b_name" required placeholder=" ">
                                    <label for="b_name">FULL NAME *</label>
                                </div>
                                <div class="input-group">
                                    <input type="email" id="b_email" required placeholder=" ">
                                    <label for="b_email">EMAIL ADDRESS *</label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="input-group">
                                    <input type="tel" id="b_phone" placeholder=" ">
                                    <label for="b_phone">PHONE / WHATSAPP</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="b_company" placeholder=" ">
                                    <label for="b_company">COMPANY / ORGANIZATION</label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="input-group">
                                    <select id="b_type" required>
                                        <option value="" disabled selected></option>
                                        <option value="website">Website</option>
                                        <option value="ecommerce">E-Commerce</option>
                                        <option value="software">Custom Software</option>
                                        <option value="system">Business Management System</option>
                                        <option value="dashboard">Admin Dashboard</option>
                                        <option value="api">API / Integration</option>
                                        <option value="uiux">UI / UX Design</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <label for="b_type">PROJECT TYPE *</label>
                                </div>
                                <div class="input-group">
                                    <select id="b_budget">
                                        <option value="" disabled selected></option>
                                        <option value="unsure">Not sure yet</option>
                                        <option value="under50">Under Rs. 50,000</option>
                                        <option value="50-100">Rs. 50,000 – 100,000</option>
                                        <option value="100-250">Rs. 100,000 – 250,000</option>
                                        <option value="250plus">Rs. 250,000+</option>
                                        <option value="custom">Custom</option>
                                    </select>
                                    <label for="b_budget">BUDGET RANGE</label>
                                </div>
                            </div>
                            <div class="input-group">
                                <textarea id="b_message" rows="4" required placeholder=" "></textarea>
                                <label for="b_message">MESSAGE *</label>
                            </div>
                            
                            <div class="form-status"></div>
                            <button type="submit" class="btn btn-primary submit-btn" style="width: 100%; margin-top: 1rem;">
                                <span class="btn-text">SEND PROJECT INQUIRY →</span>
                                <span class="spinner"></span>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Student -->
                <div data-aos="fade-left">
                    <span class="section-label">02 / FOR STUDENTS</span>
                    <h2 class="section-title" style="font-size: 3rem; margin-bottom: 1.5rem;">Ready to Start<br>Learning?</h2>
                    <p class="section-desc" style="margin-bottom: 3rem;">Have questions about courses, admissions, fees, schedules or the application process? Our team is here to help.</p>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                        
                        <!-- Topic Card 1 -->
                        <div class="student-topic-card" style="background: var(--gt-card-inner-bg); border: 1px solid var(--gt-border); border-radius: 20px; padding: 2rem; transition: all 0.3s ease; position: relative; overflow: hidden; cursor: default;" onmouseover="this.style.transform='translateY(-5px)'; this.style.borderColor='var(--gt-focus-ring)'; this.style.background='rgba(255,255,255,0.03)';" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='var(--gt-border)'; this.style.background='rgba(255,255,255,0.015)';">
                            <div style="width: 45px; height: 45px; background: var(--gt-focus-ring); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                            </div>
                            <h4 style="color: var(--gt-text); font-family: var(--font-display); letter-spacing: 1px; margin-bottom: 0.8rem; font-size: 1.1rem;">COURSES</h4>
                            <p style="color: var(--gt-muted); font-size: 0.9rem; margin: 0; line-height: 1.5;">Ask about available courses and curriculum details.</p>
                        </div>

                        <!-- Topic Card 2 -->
                        <div class="student-topic-card" style="background: var(--gt-card-inner-bg); border: 1px solid var(--gt-border); border-radius: 20px; padding: 2rem; transition: all 0.3s ease; position: relative; overflow: hidden; cursor: default;" onmouseover="this.style.transform='translateY(-5px)'; this.style.borderColor='var(--gt-focus-ring)'; this.style.background='rgba(255,255,255,0.03)';" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='var(--gt-border)'; this.style.background='rgba(255,255,255,0.015)';">
                            <div style="width: 45px; height: 45px; background: var(--gt-focus-ring); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                            </div>
                            <h4 style="color: var(--gt-text); font-family: var(--font-display); letter-spacing: 1px; margin-bottom: 0.8rem; font-size: 1.1rem;">ADMISSIONS</h4>
                            <p style="color: var(--gt-muted); font-size: 0.9rem; margin: 0; line-height: 1.5;">Get clear information about the admission process.</p>
                        </div>

                        <!-- Topic Card 3 -->
                        <div class="student-topic-card" style="background: var(--gt-card-inner-bg); border: 1px solid var(--gt-border); border-radius: 20px; padding: 2rem; transition: all 0.3s ease; position: relative; overflow: hidden; cursor: default;" onmouseover="this.style.transform='translateY(-5px)'; this.style.borderColor='var(--gt-focus-ring)'; this.style.background='rgba(255,255,255,0.03)';" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='var(--gt-border)'; this.style.background='rgba(255,255,255,0.015)';">
                            <div style="width: 45px; height: 45px; background: var(--gt-focus-ring); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            </div>
                            <h4 style="color: var(--gt-text); font-family: var(--font-display); letter-spacing: 1px; margin-bottom: 0.8rem; font-size: 1.1rem;">SCHEDULE</h4>
                            <p style="color: var(--gt-muted); font-size: 0.9rem; margin: 0; line-height: 1.5;">Ask about class timings, batches, and availability.</p>
                        </div>

                        <!-- Topic Card 4 -->
                        <div class="student-topic-card" style="background: var(--gt-card-inner-bg); border: 1px solid var(--gt-border); border-radius: 20px; padding: 2rem; transition: all 0.3s ease; position: relative; overflow: hidden; cursor: default;" onmouseover="this.style.transform='translateY(-5px)'; this.style.borderColor='var(--gt-focus-ring)'; this.style.background='rgba(255,255,255,0.03)';" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='var(--gt-border)'; this.style.background='rgba(255,255,255,0.015)';">
                            <div style="width: 45px; height: 45px; background: var(--gt-focus-ring); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                            </div>
                            <h4 style="color: var(--gt-text); font-family: var(--font-display); letter-spacing: 1px; margin-bottom: 0.8rem; font-size: 1.1rem;">FEES</h4>
                            <p style="color: var(--gt-muted); font-size: 0.9rem; margin: 0; line-height: 1.5;">Request current fee structure and payment info.</p>
                        </div>

                    </div>
                    
                    <div style="margin-top: 3.5rem; display: flex; gap: 1.5rem; padding-top: 2rem; border-top: 1px solid var(--gt-border);">
                        <a href="apply.php" class="btn btn-primary">APPLY NOW →</a>
                        <a href="courses.php" class="btn" style="background: var(--gt-card-hover); color: var(--gt-text); border: 1px solid var(--gt-border-hover);">VIEW COURSES →</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 02 UNIVERSAL FORM -->
    <section class="section" style="padding: 8rem 0; background: var(--gt-bg); border-top: 1px solid var(--gt-border); position: relative; overflow: hidden;">
        <!-- Abstract Tech Background Grid -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: radial-gradient(rgba(255,255,255,0.03) 2px, transparent 2px); background-size: 40px 40px; opacity: 0.5;"></div>
        
        <div class="container" style="max-width: 800px; position: relative; z-index: 2;">
            <div style="text-align: center; margin-bottom: 4rem;" data-aos="fade-up">
                <span class="section-label">03 / SEND A MESSAGE</span>
                <h2 class="section-title" style="font-size: 3.5rem;">Tell Us What's<br>on Your Mind.</h2>
            </div>
            
            <div data-aos="fade-up" data-aos-delay="100" style="background: var(--gt-surface); border: 1px solid var(--gt-border); padding: 4rem; border-radius: 30px; box-shadow: var(--gt-shadow); position: relative; overflow: hidden;">
                <!-- Glowing corner accents -->
                <div style="position: absolute; top: 0; left: 0; max-width: 100vw; max-height: 100vh; width: 100px; height: 100px; background: var(--gt-accent); filter: blur(70px); opacity: 0.1;"></div>
                <div style="position: absolute; bottom: 0; right: 0; max-width: 100vw; max-height: 100vh; width: 100px; height: 100px; background: #ffffff; filter: blur(70px); opacity: 0.05;"></div>
                
                <form class="gt-form universal-form" id="general-form" onsubmit="handleFormSubmit(event, 'general-form')" style="position: relative; z-index: 2;">
                    <?php echo csrf_field(); ?>
                    <div class="form-row">
                        <div class="input-group">
                            <input type="text" id="g_name" name="name" required placeholder=" ">
                            <label for="g_name">Name *</label>
                        </div>
                        <div class="input-group">
                            <input type="email" id="g_email" name="email" required placeholder=" ">
                            <label for="g_email">Email *</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-group">
                            <input type="tel" id="g_phone" name="phone" placeholder=" ">
                            <label for="g_phone">Phone</label>
                        </div>
                        <div class="input-group">
                            <select id="g_purpose">
                                <option value="" disabled selected></option>
                                <option value="business">Business Project</option>
                                <option value="course">Course / Training</option>
                                <option value="partnership">Partnership</option>
                                <option value="career">Career</option>
                                <option value="general">General Inquiry</option>
                                <option value="other">Other</option>
                            </select>
                            <label for="g_purpose">I am contacting you about:</label>
                        </div>
                    </div>
                    <div class="input-group">
                        <input type="text" id="g_subject" name="subject" required placeholder=" ">
                        <label for="g_subject">Subject *</label>
                    </div>
                    <div class="input-group">
                        <textarea id="g_message" name="message" rows="5" required minlength="10" placeholder=" "></textarea>
                        <label for="g_message">Message *</label>
                    </div>
                    
                    <div class="form-status"></div>
                    <button type="submit" class="btn btn-primary submit-btn" style="width: 100%;">
                        <span class="btn-text">SEND MESSAGE →</span>
                        <span class="spinner"></span>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- 03 LOCATION / MAP & WORKING HOURS -->
    <section class="section" style="padding: 8rem 0; background: var(--gt-bg); position: relative; overflow: hidden;">
        <!-- Subtle background glow -->
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); max-width: 100vw; max-height: 100vh; width: 800px; height: 800px; background: var(--gt-accent); filter: blur(400px); opacity: 0.05; pointer-events: none;"></div>
        
        <div class="container" style="position: relative; z-index: 2;">
            <div class="grid" style="grid-template-columns: 1fr 1.2fr; gap: 5rem; align-items: center;">
                
                <div data-aos="fade-right">
                    <span class="section-label">04 / FIND US</span>
                    <h2 class="section-title" style="margin-bottom: 1.5rem; font-size: 3.5rem;">Come Visit<br>Global Tech.</h2>
                    <p class="section-desc" style="margin-bottom: 3rem;">We are located in the heart of the city, easily accessible for students and clients alike. Drop by for a conversation.</p>
                    
                    <div class="hours-block" style="background: var(--gt-card-bg); padding: 2.5rem; border-radius: 16px; border: 1px solid var(--gt-border); position: relative; overflow: hidden; backdrop-filter: blur(10px); box-shadow: 0 20px 40px rgba(0,0,0,0.4);">
                        <!-- Accent line -->
                        <div style="position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: var(--gt-accent);"></div>
                        
                        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 2rem;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            <h4 style="color: var(--gt-text); font-family: var(--font-display); font-size: 1.2rem; margin: 0; letter-spacing: 1px;">WORKING HOURS</h4>
                        </div>
                        
                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid var(--gt-border); padding-bottom: 1.2rem; margin-bottom: 1.2rem; align-items: center;">
                            <span style="color: var(--gt-muted); font-weight: 500;">MONDAY — FRIDAY</span>
                            <span style="color: var(--gt-text); font-family: var(--font-display); font-size: 1.1rem; letter-spacing: 1px;">09:00 AM — 05:00 PM</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid var(--gt-border); padding-bottom: 1.2rem; margin-bottom: 1.2rem; align-items: center;">
                            <span style="color: var(--gt-muted); font-weight: 500;">SATURDAY</span>
                            <span style="color: var(--gt-text); font-family: var(--font-display); font-size: 1.1rem; letter-spacing: 1px;">09:00 AM — 05:00 PM</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="color: var(--gt-muted); font-weight: 500;">SUNDAY</span>
                            <span style="color: #ff4a4a; font-family: var(--font-display); font-size: 1.1rem; letter-spacing: 1px; font-weight: 600;">CLOSED</span>
                        </div>
                    </div>
                    
                    <a href="#" class="btn btn-primary" style="margin-top: 3rem;">GET DIRECTIONS →</a>
                </div>

                <div data-aos="fade-left" style="height: 100%; min-height: 500px; border-radius: 24px; position: relative; overflow: hidden; box-shadow: 0 30px 60px rgba(0,0,0,0.6); background: var(--gt-surface);">
                    <!-- Abstract Map Background -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.4; background-image: url('https://images.unsplash.com/photo-1524661135-423995f22d0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80'); background-size: cover; background-position: center; mix-blend-mode: luminosity;"></div>
                    
                    <!-- Overlay gradient -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(10,12,15,0.9) 0%, rgba(10,12,15,0.4) 100%);"></div>

                    <!-- Location Marker Container -->
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); display: flex; flex-direction: column; align-items: center;">
                        <!-- Pulsing Marker -->
                        <div style="position: relative; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                            <!-- Pulse Rings -->
                            <div style="position: absolute; width: 100%; height: 100%; border-radius: 50%; border: 2px solid var(--gt-accent); animation: pulseMap 2s infinite ease-out;"></div>
                            <div style="position: absolute; width: 100%; height: 100%; border-radius: 50%; border: 2px solid var(--gt-accent); animation: pulseMap 2s infinite ease-out; animation-delay: 1s;"></div>
                            
                            <!-- Solid Marker -->
                            <div style="width: 20px; height: 20px; background: var(--gt-accent); border-radius: 50%; box-shadow: 0 0 20px var(--gt-accent); z-index: 2;"></div>
                        </div>
                        
                        <!-- Premium Info Card -->
                        <div style="background: var(--gt-card-bg); backdrop-filter: blur(15px); padding: 1.5rem 2rem; border-radius: 12px; border: 1px solid var(--gt-focus-ring); text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.5);">
                            <h4 style="color: var(--gt-text); font-family: var(--font-display); letter-spacing: 2px; margin-bottom: 0.5rem; font-size: 1.2rem;">GLOBAL TECH HQ</h4>
                            <p style="color: var(--gt-muted); font-size: 0.9rem; margin: 0;">Main Campus & Office</p>
                        </div>
                    </div>
                    
                    <!-- decorative grid overlay -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px); background-size: 30px 30px; pointer-events: none;"></div>
                </div>

            </div>
        </div>
    </section>

    <!-- 04 TRUST STATEMENT -->
    <section class="section" style="padding: 10rem 0; background: var(--gt-bg); position: relative; overflow: hidden; border-top: 1px solid var(--gt-border); border-bottom: 1px solid var(--gt-border);">
        <!-- Large background typography -->
        <h2 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 22vw; white-space: nowrap; font-family: var(--font-display); color: transparent; -webkit-text-stroke: 1px var(--gt-border); z-index: 1; pointer-events: none; margin: 0;">TRUST</h2>
        
        <div class="container" style="position: relative; z-index: 2; text-align: center;" data-aos="zoom-in">
            <span class="section-label" style="opacity: 0.7;">05 / WHY CONTACT US</span>
            <h2 style="color: var(--gt-text); font-size: clamp(2.2rem, 8vw, 4.5rem); letter-spacing: -2px; margin-bottom: 4rem; line-height: 1.1; text-shadow: 0 10px 30px rgba(0,0,0,0.5);">
                A Conversation Can<br>
                <span style="color: var(--gt-accent);">Start Something Bigger.</span>
            </h2>
            
            <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 1rem;">
                <span style="padding: 0.8rem 2rem; background: var(--gt-card-bg); border: 1px solid var(--gt-border); border-radius: 50px; color: var(--gt-muted); font-family: var(--font-display); font-size: 0.9rem; letter-spacing: 2px;">PRACTICAL TECHNOLOGY</span>
                <span style="padding: 0.8rem 2rem; background: var(--gt-card-bg); border: 1px solid var(--gt-border); border-radius: 50px; color: var(--gt-muted); font-family: var(--font-display); font-size: 0.9rem; letter-spacing: 2px;">REAL PROJECT THINKING</span>
                <span style="padding: 0.8rem 2rem; background: var(--gt-accent-soft); border: 1px solid var(--gt-focus-ring); border-radius: 50px; color: var(--gt-accent); font-family: var(--font-display); font-size: 0.9rem; letter-spacing: 2px;">MODERN DEVELOPMENT</span>
                <span style="padding: 0.8rem 2rem; background: var(--gt-card-bg); border: 1px solid var(--gt-border); border-radius: 50px; color: var(--gt-muted); font-family: var(--font-display); font-size: 0.9rem; letter-spacing: 2px;">PRACTICAL LEARNING</span>
            </div>
        </div>
    </section>

    <!-- 05 FINAL CTA -->
    <section class="section" style="padding: 6rem 0 10rem 0; background: var(--gt-bg);">
        <div class="container">
            <div data-aos="fade-up" style="position: relative; border-radius: 40px; padding: 8rem 2rem; text-align: center; overflow: hidden; background: var(--gt-surface); border: 1px solid var(--gt-border); box-shadow: var(--gt-shadow);">
                
                <!-- Animated Background Elements -->
                <div style="position: absolute; top: -50%; left: -20%; width: 70%; height: 200%; background: radial-gradient(circle, var(--gt-accent) 0%, transparent 60%); opacity: 0.05; transform: rotate(30deg); pointer-events: none;"></div>
                <div style="position: absolute; bottom: -50%; right: -20%; width: 70%; height: 200%; background: radial-gradient(circle, #ffffff 0%, transparent 60%); opacity: 0.03; transform: rotate(-30deg); pointer-events: none;"></div>
                
                <!-- Abstract lines overlay -->
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: repeating-linear-gradient(45deg, rgba(255,255,255,0.01) 0px, rgba(255,255,255,0.01) 1px, transparent 1px, transparent 10px); pointer-events: none;"></div>

                <div style="position: relative; z-index: 2; max-width: 800px; margin: 0 auto;">
                    <span class="section-label" style="background: var(--gt-focus-ring); color: var(--gt-accent); padding: 8px 16px; border-radius: 50px; display: inline-block; margin-bottom: 2rem;">06 / NEXT STEP</span>
                    <h2 class="section-title" style="font-size: clamp(3.5rem, 7vw, 5.5rem); line-height: 1.1; margin-bottom: 2rem;">
                        Let's Start <br>
                        <span style="color: transparent; -webkit-text-stroke: 1.5px var(--gt-text-strong); font-style: italic;">the Conversation.</span>
                    </h2>
                    <p class="section-desc" style="margin: 0 auto 4rem; font-size: 1.3rem; max-width: 600px;">Tell us what you need. We'll help you figure out exactly what comes next.</p>
                    
                    <div style="display: flex; justify-content: center; gap: 2rem; flex-wrap: wrap;">
                        <a href="#business-inquiry" class="btn btn-primary" style="padding: 1.2rem 3rem; font-size: 1.1rem; box-shadow: 0 10px 30px var(--gt-focus-ring);" onclick="event.preventDefault(); document.querySelector('#business-inquiry').scrollIntoView({behavior: 'smooth'})">START A PROJECT →</a>
                        <a href="apply.php" class="btn" style="padding: 1.2rem 3rem; font-size: 1.1rem; background: transparent; color: var(--gt-text); border: 1px solid var(--gt-border); transition: all 0.3s;" onmouseover="this.style.background='var(--gt-border)'" onmouseout="this.style.background='transparent'">APPLY NOW →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include "includes/footer.php"; ?>

    <!-- Floating Mobile Action Bar (Hidden on Desktop) -->
    <div class="mobile-action-bar d-none-desktop">
        <a href="tel:000000000" class="mab-btn"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> Call</a>
        <a href="#" class="mab-btn"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg> WhatsApp</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/animations.js"></script>
    <script src="assets/js/navigation.js"></script>
    <script src="assets/js/main.js?v=<?= filemtime('assets/js/main.js') ?>"></script>
</body>
</html>























