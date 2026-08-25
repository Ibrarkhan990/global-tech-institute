document.addEventListener('DOMContentLoaded', () => {

    // 1. Initialize AOS
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50
        });
    }

    // 2. Initialize Insights Slider
    if (typeof Swiper !== 'undefined') {
        const insightsSwiper = new Swiper('.insights-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            effect: 'fade',
            fadeEffect: { crossFade: true },
            autoplay: {
                delay: 5000,
                disableOnInteraction: true,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '">0' + (index + 1) + '</span>';
                },
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            keyboard: {
                enabled: true,
            }
        });
    }

    // 3. Category Filtering System
    const filterBtns = document.querySelectorAll('.cat-btn');
    const filterableItems = document.querySelectorAll('.filterable');
    
    if (filterBtns.length > 0 && filterableItems.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                // Remove active from all
                filterBtns.forEach(b => b.classList.remove('active'));
                // Add active to clicked
                e.target.classList.add('active');
                
                const filterValue = e.target.getAttribute('data-filter');
                
                filterableItems.forEach(item => {
                    const itemCat = item.getAttribute('data-category');
                    
                    if (filterValue === 'all' || itemCat === filterValue) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'translateY(0)';
                        }, 50);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300); // match css transition
                    }
                });
            });
        });
    }

    // 4. Search System (Frontend Mockup)
    const searchInput = document.getElementById('insights-search');
    const searchEmpty = document.getElementById('search-empty-state');
    
    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            const query = e.target.value.toLowerCase();
            let visibleCount = 0;
            
            filterableItems.forEach(item => {
                const title = item.querySelector('.ac-title').innerText.toLowerCase();
                const excerpt = item.querySelector('.ac-excerpt').innerText.toLowerCase();
                
                if (title.includes(query) || excerpt.includes(query)) {
                    item.style.display = 'block';
                    item.style.opacity = '1';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                    item.style.opacity = '0';
                }
            });
            
            // Show empty state if no matches
            if (searchEmpty) {
                if (visibleCount === 0 && query.length > 0) {
                    searchEmpty.style.display = 'block';
                } else {
                    searchEmpty.style.display = 'none';
                }
            }
        });
    }

    // 5. Newsletter Subscription Mockup
    const newsletterBtn = document.getElementById('newsletter-submit');
    const newsletterInput = document.getElementById('newsletter-input');
    
    if (newsletterBtn && newsletterInput) {
        newsletterBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const val = newsletterInput.value.trim();
            if (val && val.includes('@')) {
                const originalText = newsletterBtn.innerHTML;
                newsletterBtn.innerHTML = 'SUBSCRIBING...';
                
                setTimeout(() => {
                    newsletterBtn.innerHTML = 'SUBSCRIBED! ✓';
                    newsletterBtn.style.background = '#00C851';
                    newsletterBtn.style.color = '#fff';
                    newsletterInput.value = '';
                    
                    setTimeout(() => {
                        newsletterBtn.innerHTML = originalText;
                        newsletterBtn.style.background = '';
                        newsletterBtn.style.color = '';
                    }, 3000);
                }, 1500);
            } else {
                alert('Please enter a valid email address.');
            }
        });
    }
});
