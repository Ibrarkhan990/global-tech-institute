<?php
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="assets/js/theme.js?v=<?= filemtime('assets/js/theme.js') ?>"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Now | Global Tech & Institute</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    
    <link rel="stylesheet" href="assets/css/variables.css?v=<?= filemtime('assets/css/variables.css') ?>">
    <link rel="stylesheet" href="assets/css/base.css?v=<?= filemtime('assets/css/base.css') ?>">
    <link rel="stylesheet" href="assets/css/components.css?v=<?= filemtime('assets/css/components.css') ?>">
    <link rel="stylesheet" href="assets/css/sections.css?v=<?= filemtime('assets/css/sections.css') ?>">
    <link rel="stylesheet" href="assets/css/responsive.css?v=<?= filemtime('assets/css/responsive.css') ?>">
    <link rel="stylesheet" href="assets/css/apply.css?v=<?= filemtime('assets/css/apply.css') ?>">
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
<body >

    <?php include "includes/navbar.php"; ?>

    <!-- 01 HERO -->
    <header class="hero force-dark-mode" style="position: relative; overflow: hidden; min-height: 80vh; padding-bottom: clamp(3rem, 6vw, 5rem); background: #0a0c0f;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
            <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Student coding" style="width: 100%; height: 100%; object-fit: cover; filter: brightness(0.35);">
        </div>
        
        <div class="hero-tech-grid" style="z-index: 2; opacity: 0.1;"></div>
        <div style="position: absolute; top: -100px; right: -100px; width: clamp(300px, 50vw, 600px); height: clamp(300px, 50vw, 600px); background: var(--gt-accent); filter: blur(250px); opacity: 0.15; z-index: 2;"></div>

        <div class="container" style="position: relative; z-index: 3; height: 100%; display: flex; flex-direction: column; justify-content: flex-start; padding-top: clamp(6rem, 15vh, 120px); padding-bottom: 0;">
            <div class="hero-content" data-aos="fade-up" data-aos-duration="1000" style="max-width: 900px;">
                <div id="breadcrumb-container" style="margin-bottom: var(--space-md);"></div>
                <span class="section-label" style="text-shadow: 2px 2px 10px rgba(0,0,0,0.8);">07 / ADMISSIONS</span>
                <h1 style="color: var(--gt-text); font-size: clamp(3.5rem, 8vw, 6.5rem); line-height: 1.05; margin-bottom: var(--space-md); letter-spacing: -2px; text-shadow: 2px 2px 10px rgba(0,0,0,0.8);">Start Your<br><span class="text-accent" style="color: transparent; -webkit-text-stroke: 1.5px var(--gt-accent);">Future.</span></h1>
                <p style="color: var(--gt-muted); font-size: clamp(1rem, 3vw, 1.35rem); margin-bottom: var(--space-lg); line-height: 1.6; max-width: 700px; text-shadow: 1px 1px 5px rgba(0,0,0,0.8);">Join the next generation of tech professionals. Apply for our upcoming batches and master practical software engineering.</p>
                <a href="#application-portal" class="btn btn-primary" onclick="event.preventDefault(); document.querySelector('#application-portal').scrollIntoView({behavior: 'smooth'})">START APPLICATION →</a>
            </div>
        </div>
    </header>

    <!-- 02 APPLICATION PORTAL -->
    <section id="application-portal" class="section" style="padding: 8rem 0; background: var(--gt-bg); position: relative; overflow: hidden;">
        
        <!-- Ambient Background Glows -->
        <div style="position: absolute; top: 20%; left: -20%; width: 60%; height: 80%; background: radial-gradient(circle, var(--gt-accent) 0%, transparent 50%); opacity: 0.05; filter: blur(100px); pointer-events: none;"></div>

        <div class="container" style="max-width: 900px; position: relative; z-index: 2;">
            
            <div data-aos="fade-up" class="apply-container">
                
                <div class="apply-header">
                    <h2>Application Portal</h2>
                    <p>Please complete all steps to submit your application.</p>
                </div>

                <!-- Progress Steps -->
                <div class="apply-progress">
                    <div class="step active" data-step="1">
                        <div class="step-num">01</div>
                        <span>Personal</span>
                    </div>
                    <div class="step-line"></div>
                    <div class="step" data-step="2">
                        <div class="step-num">02</div>
                        <span>Course</span>
                    </div>
                    <div class="step-line"></div>
                    <div class="step" data-step="3">
                        <div class="step-num">03</div>
                        <span>Education</span>
                    </div>
                    <div class="step-line"></div>
                    <div class="step" data-step="4">
                        <div class="step-num">04</div>
                        <span>Review</span>
                    </div>
                </div>

                <form id="main-apply-form" class="gt-form" onsubmit="submitApplication(event)">
<?php echo csrf_field(); ?>
                    
                    <!-- STEP 1: PERSONAL -->
                    <div class="form-step active" id="step-1">
                        <h3 class="step-title">Personal Details</h3>
                        <div class="form-row">
                            <div class="input-group">
                                <input type="text" id="a_fname" name="full_name" required placeholder=" ">
                                <label for="a_fname">Full Name *</label>
                            </div>
                            <div class="input-group">
                                <input type="email" id="a_email" name="email" required placeholder=" ">
                                <label for="a_email">Email Address *</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="input-group">
                                <input type="tel" id="a_phone" name="phone" required placeholder=" ">
                                <label for="a_phone">Phone Number *</label>
                            </div>
                            <div class="input-group">
                                <input type="text" id="a_city" name="city" required placeholder=" ">
                                <label for="a_city">City / Location *</label>
                            </div>
                        </div>
                        <div class="form-actions right">
                            <button type="button" class="btn btn-primary" onclick="nextStep(1)">NEXT STEP →</button>
                        </div>
                    </div>

                    <!-- STEP 2: COURSE -->
                    <div class="form-step" id="step-2">
                        <h3 class="step-title">Course Selection</h3>
                        <div class="input-group">
                                                                                    <select id="a_course" name="course_id" required>
                                <option value="" disabled selected></option>
                                <?php
                                  try {
                                      $pdo = db();
                                      $stmt = $pdo->query("SELECT id, title FROM courses WHERE status = 'active' ORDER BY sort_order ASC");
                                      while ($course = $stmt->fetch()) {
                                          echo '<option value="' . e($course['id']) . '">' . e($course['title']) . '</option>';
                                      }
                                  } catch (Exception $e) {
                                      echo '<option value="1">Full Stack Web Development</option>';
                                      echo '<option value="2">E-Commerce Mastery</option>';
                                      echo '<option value="3">UI/UX Design</option>';
                                  }
                                  ?>
                            </select>
                            <label for="a_course">Select Course *</label>
                        </div>
                        <div class="form-row">
                            <div class="input-group">
                                <select id="a_batch" name="batch" required>
                                    <option value="" disabled selected></option>
                                    <option value="Monday to Friday">Monday to Friday</option>
                                </select>
                                <label for="a_batch">Preferred Batch *</label>
                            </div>
                            <div class="input-group">
                                <select id="a_timing" name="timing" required>
                                    <option value="" disabled selected></option>
                                    <option value="Morning">Morning (9AM - 12PM)</option>
                                    <option value="Evening">Evening (1PM - 5PM)</option>
                                </select>
                                <label for="a_timing">Timing Preference *</label>
                            </div>
                        </div>
                        <div class="form-actions space-between">
                            <button type="button" class="btn btn-outline" onclick="prevStep(2)">← BACK</button>
                            <button type="button" class="btn btn-primary" onclick="nextStep(2)">NEXT STEP →</button>
                        </div>
                    </div>

                    <!-- STEP 3: EDUCATION -->
                    <div class="form-step" id="step-3">
                        <h3 class="step-title">Educational Background</h3>
                        <div class="form-row">
                            <div class="input-group">
                                <select id="a_edu" name="education" required>
                                    <option value="" disabled selected></option>
                                    <option value="Matric">Matric / O-Levels</option>
                                    <option value="Intermediate">Intermediate / A-Levels</option>
                                    <option value="Bachelors">Bachelors Degree</option>
                                    <option value="Masters">Masters Degree</option>
                                    <option value="Other">Other</option>
                                </select>
                                <label for="a_edu">Highest Qualification *</label>
                            </div>
                            <div class="input-group">
                                <input type="text" id="a_inst" name="institution" placeholder=" ">
                                <label for="a_inst">Institution Name</label>
                            </div>
                        </div>
                        <div class="input-group">
                            <textarea id="a_motivation" name="message" rows="3" placeholder=" "></textarea>
                            <label for="a_motivation">Why do you want to join this course? (Optional)</label>
                        </div>
                        <div class="form-actions space-between">
                            <button type="button" class="btn btn-outline" onclick="prevStep(3)">← BACK</button>
                            <button type="button" class="btn btn-primary" onclick="nextStep(3)">REVIEW APPLICATION →</button>
                        </div>
                    </div>

                    <!-- STEP 4: REVIEW -->
                    <div class="form-step" id="step-4">
                        <h3 class="step-title">Review & Submit</h3>
                                                <div class="review-box">
                            <div class="r-row">
                                <span class="r-label">Name</span>
                                <span class="r-value" id="r_name">-</span>
                            </div>
                            <div class="r-row">
                                <span class="r-label">Email</span>
                                <span class="r-value" id="r_email">-</span>
                            </div>
                            <div class="r-row">
                                <span class="r-label">Phone</span>
                                <span class="r-value" id="r_phone">-</span>
                            </div>
                            <div class="r-row">
                                <span class="r-label">City</span>
                                <span class="r-value" id="r_city">-</span>
                            </div>
                            <div class="r-row">
                                <span class="r-label">Course</span>
                                <span class="r-value" id="r_course">-</span>
                            </div>
                            <div class="r-row">
                                <span class="r-label">Batch</span>
                                <span class="r-value" id="r_batch">-</span>
                            </div>
                            <div class="r-row">
                                <span class="r-label">Timing</span>
                                <span class="r-value" id="r_timing">-</span>
                            </div>
                            <div class="r-row">
                                <span class="r-label">Education</span>
                                <span class="r-value" id="r_edu">-</span>
                            </div>
                            <div class="r-row">
                                <span class="r-label">Institution</span>
                                <span class="r-value" id="r_inst">-</span>
                            </div>
                        </div>
                        <div class="form-actions space-between" style="margin-top: 2rem;">
                            <button type="button" class="btn btn-outline" onclick="prevStep(4)">← BACK</button>
                            <button type="submit" class="btn btn-primary submit-btn">
                                <span class="btn-text">SUBMIT APPLICATION</span>
                                <span class="spinner"></span>
                            </button>
                        </div>
                    </div>

                </form>

                <!-- SUCCESS STATE -->
                <div id="apply-success" class="apply-success-box" style="display: none;">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="var(--gt-accent)" stroke-width="2" style="margin-bottom: 2rem;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    <h2 style="font-size: 2.5rem; color: var(--gt-text); margin-bottom: 1rem;">Application Received</h2>
                    <p style="color: var(--gt-muted); font-size: 1.1rem; margin-bottom: 2rem;">Thank you for applying. Our admissions team will contact you shortly.</p>
                    <div style="display: inline-block; padding: 15px 30px; border: 1px solid var(--gt-focus-ring); background: var(--gt-accent-soft); font-family: var(--font-display); font-weight: 700; border-radius: 8px; letter-spacing: 2px; color: var(--gt-accent); margin-bottom: 3rem;">
                        APP-<span id="success-id"></span>
                    </div>
                    <br>
                    <a href="index.php" class="btn btn-outline">RETURN TO HOME</a>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include "includes/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/apply.js"></script>
    <script src="assets/js/animations.js"></script>
    <script src="assets/js/navigation.js"></script>
    <script src="assets/js/main.js?v=<?= filemtime('assets/js/main.js') ?>"></script>
</body>
</html>











