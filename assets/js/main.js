// main.js
document.addEventListener('DOMContentLoaded', () => {
    // Scroll reveal initialization is in animations.js
    
    // Number Counter Animation
    const counters = document.querySelectorAll('.data-value');
    const speed = 200;

    const animateCounters = () => {
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const inc = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = target;
                }
            };
            
            // Only animate if in view
            const windowHeight = window.innerHeight;
            const elementTop = counter.getBoundingClientRect().top;
            if (elementTop < windowHeight - 50 && counter.innerText === '0') {
                updateCount();
            }
        });
    }
    
    window.addEventListener('scroll', animateCounters);
    animateCounters(); // Trigger on load
});

    // Initialize AOS
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            once: true,
            offset: 50
        });
    }

    // Initialize Hero Swiper
    if (typeof Swiper !== 'undefined' && document.querySelector('.heroSwiper')) {
        new Swiper('.heroSwiper', {
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            effect: 'fade'
        });
    }

    // Dynamic Navigation Active Link
    let urlString = window.location.href;
    let page = urlString.split("/").pop().split("\\").pop().split("?")[0].split("#")[0];
    if (page === '' || page.endsWith('/')) page = 'index.html';
    
    const navLinksList = document.querySelectorAll('.nav-links .nav-link');
    navLinksList.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === page) {
            link.classList.add('active');
        }
    });

    // Initialize Page Swiper
    if (typeof Swiper !== 'undefined' && document.querySelector('.pageSwiper')) {
        new Swiper('.pageSwiper', {
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            effect: 'fade'
        });
    }

    // Dynamic Title and Breadcrumb
    const breadcrumbContainer = document.getElementById('breadcrumb-container');
    const dynamicPageTitle = document.getElementById('dynamic-page-title');
    
    if (page && (page !== 'index.html' && page !== 'index.php' && page !== '')) {
        let rawName = page.split('.')[0].replace(/-/g, ' ');
        if (rawName === 'about') rawName = 'about us'; // specifically match example
        
        // Capitalize words
        const pageName = rawName.split(' ').map(word => word.charAt(0).toUpperCase() + word.slice(1)).join(' ');
        
        if (dynamicPageTitle) {
            dynamicPageTitle.innerText = pageName.toUpperCase();
        }
        
        if (breadcrumbContainer) {
            breadcrumbContainer.innerHTML = `
                <div style="display: inline-flex; align-items: center; background: #222529; box-shadow: 0 15px 35px rgba(0,0,0,0.4); padding: 10px 24px; border-radius: 50px; font-size: 1.05rem; font-family: var(--font-primary); font-weight: 500;">
                    <a href="index.html" style="color: #ffffff; text-decoration: none; display: flex; align-items: center; gap: 8px; transition: color 0.3s;" onmouseover="this.style.color='var(--gt-accent)'" onmouseout="this.style.color='#ffffff'">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                        Home
                    </a>
                    <span style="display: inline-block; margin: 0 12px; color: #DBA84E; font-style: italic; font-weight: 800; transform: skewX(-10deg);">/</span> 
                    <span style="color: #F6CE6A; font-weight: 700;">${pageName}</span>
                </div>
            `;
        }
    }



