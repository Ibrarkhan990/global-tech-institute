<!-- Announcement Bar -->
    <div id="announcement-bar" onclick="window.location.href='apply.php'">
        <span class="pulse-dot"></span>
        ADMISSIONS OPEN: Join the upcoming batch of tech professionals.
        <span class="action-text">Apply Now →</span>
    </div>

    <style>
        body {  }
        #announcement-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--gt-accent);
            color: var(--gt-inverted-text);
            font-family: var(--font-display);
            font-weight: 700;
            font-size: 0.85rem;
            letter-spacing: 1px;
            z-index: 1002;
            cursor: pointer;
            transition: all 0.3s ease;
            gap: 12px;
        }
        #announcement-bar:hover {
            background: #d4f000;
        }
        .action-text {
            text-decoration: underline;
            margin-left: 10px;
            font-weight: 800;
        }
        .pulse-dot {
            width: 8px;
            height: 8px;
            background: #ff4a4a;
            border-radius: 50%;
            box-shadow: 0 0 10px #ff4a4a;
            animation: pulse 1.5s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.5); opacity: 0.5; }
            100% { transform: scale(1); opacity: 1; }
        }
        /* Override navbar top positioning only on index.html */
        .navbar {
            top: 40px !important;
            transition: top 0.3s ease, background-color 0.3s ease !important;
        }
        .navbar.scrolled {
            top: 0 !important;
        }
        
        @media (max-width: 768px) {
            #announcement-bar {
                font-size: 0.75rem;
                padding: 8px 10px;
                height: auto;
                min-height: 40px;
                flex-wrap: wrap;
                line-height: 1.4;
            }
        }
    </style>
    
    <script>
        // Adjust navbar top dynamically based on announcement bar height
        function adjustNavbarTop() {
            const annBar = document.getElementById('announcement-bar');
            const navbar = document.querySelector('.navbar');
            if (annBar && navbar) {
                if (!navbar.classList.contains('scrolled')) {
                    navbar.style.setProperty('top', annBar.offsetHeight + 'px', 'important');
                } else {
                    navbar.style.setProperty('top', '0', 'important');
                }
            }
        }
        window.addEventListener('load', adjustNavbarTop);
        window.addEventListener('resize', adjustNavbarTop);
        window.addEventListener('scroll', adjustNavbarTop);
    </script>

        <!-- Navbar -->
    <nav class="navbar">
        <a href="index.php" class="nav-brand" style="display: flex; align-items: center;"><img src="assets/logo/logo_accent.png" alt="Global Tech &amp; Institute" class="logo-dark" style="max-height: 55px; width: auto; border-radius: 6px;"><img src="assets/logo/logo.png" alt="Global Tech &amp; Institute" class="logo-light" style="max-height: 55px; width: auto; border-radius: 6px; display: none;"></a>
        
        <div class="nav-links">
            <a href="index.php" class="nav-link">Home</a>
            <a href="about.php" class="nav-link">About</a>
            <a href="courses.php" class="nav-link">Courses</a>
            <a href="services.php" class="nav-link">Services</a>
            <a href="projects.php" class="nav-link">Projects</a>
            <a href="insights.php" class="nav-link">Insights</a>
            <a href="contact.php" class="nav-link">Contact</a>
        </div>
        
        <div class="nav-controls" style="display: flex; align-items: center; gap: 0.5rem;">
            <button type="button" id="themeToggle" aria-label="Switch to light mode" style="width: 44px; height: 44px; border-radius: 50%; border: 1px solid var(--gt-border); background: var(--gt-surface); display: flex; align-items: center; justify-content: center; cursor: pointer; color: var(--gt-text); transition: var(--transition-theme), transform 0.3s ease;">
                <svg id="themeIconSun" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display: block; transition: all 0.3s ease;">
                    <circle cx="12" cy="12" r="5"></circle>
                    <line x1="12" y1="1" x2="12" y2="3"></line>
                    <line x1="12" y1="21" x2="12" y2="23"></line>
                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                    <line x1="1" y1="12" x2="3" y2="12"></line>
                    <line x1="21" y1="12" x2="23" y2="12"></line>
                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                </svg>
                <svg id="themeIconMoon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display: none; transition: all 0.3s ease;">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                </svg>
            </button>
            <button class="mobile-menu-btn">☰</button>
            <a href="apply.php" class="btn btn-primary d-none-mobile" style="margin-left: 0.5rem;">Apply Now →</a>
        </div>
<style>
    #themeToggle:hover { transform: scale(1.05); border-color: var(--gt-accent); color: var(--gt-accent); }
    #themeToggle:focus-visible { outline: 2px solid var(--gt-focus-ring); outline-offset: 2px; }
</style>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navLinks = document.querySelector('.nav-links');
        
        if (mobileMenuBtn && navLinks) {
            mobileMenuBtn.addEventListener('click', () => {
                navLinks.classList.toggle('active'); document.querySelector('.navbar').classList.toggle('menu-open');
                if (navLinks.classList.contains('active')) {
                    mobileMenuBtn.innerHTML = '✕';
                } else {
                    mobileMenuBtn.innerHTML = '☰';
                }
            });
        }
    });
</script>
    </nav>


