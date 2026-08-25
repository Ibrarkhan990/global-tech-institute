// navigation.js
document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Mobile menu toggle (if added to HTML)
    const mobileBtn = document.querySelector('.mobile-menu-btn');
    const navLinks = document.querySelector('.nav-links');
    
    if(mobileBtn && navLinks) {
        mobileBtn.addEventListener('click', () => {
            if(navLinks.style.display === 'flex') {
                navLinks.style.display = 'none';
            } else {
                navLinks.style.display = 'flex';
                navLinks.style.flexDirection = 'column';
                navLinks.style.position = 'absolute';
                navLinks.style.top = '100%';
                navLinks.style.left = '0';
                navLinks.style.width = '100%';
                navLinks.style.background = 'var(--gt-surface)';
                navLinks.style.padding = 'var(--space-md)';
                navLinks.style.borderBottom = '1px solid var(--gt-border)';
            }
        });
    }
});
