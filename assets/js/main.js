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

    // Breadcrumbs removed by user request





