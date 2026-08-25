// Theme system with zero Flash of Wrong Theme (FOWT)
(function() {
    // 1. Detect and apply theme immediately
    const getSavedTheme = () => localStorage.getItem('gt-theme');
    const getSystemTheme = () => window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark';
    
    const applyTheme = (theme) => {
        if (theme === 'light') {
            document.documentElement.setAttribute('data-theme', 'light');
        } else {
            document.documentElement.removeAttribute('data-theme');
        }
        
        // Ensure UI stays in sync if loaded
        updateToggleButton(theme);
    };

    const updateToggleButton = (theme) => {
        const toggleBtn = document.getElementById('themeToggle');
        const iconSun = document.getElementById('themeIconSun');
        const iconMoon = document.getElementById('themeIconMoon');
        
        if (toggleBtn && iconSun && iconMoon) {
            if (theme === 'light') {
                // In Light Mode, we show the Moon (to switch to Dark)
                toggleBtn.setAttribute('aria-label', 'Switch to dark mode');
                iconSun.style.display = 'none';
                iconMoon.style.display = 'block';
            } else {
                // In Dark Mode, we show the Sun (to switch to Light)
                toggleBtn.setAttribute('aria-label', 'Switch to light mode');
                iconSun.style.display = 'block';
                iconMoon.style.display = 'none';
            }
        }
    };

    // Initialize instantly
    const initialTheme = getSavedTheme() || getSystemTheme();
    applyTheme(initialTheme);

    // 2. Setup event listeners when DOM is ready
    document.addEventListener('DOMContentLoaded', () => {
        const currentTheme = getSavedTheme() || getSystemTheme();
        updateToggleButton(currentTheme);

        const toggleBtn = document.getElementById('themeToggle');
        if (toggleBtn) {
            toggleBtn.addEventListener('click', () => {
                // Determine next theme
                const isLight = document.documentElement.getAttribute('data-theme') === 'light';
                const nextTheme = isLight ? 'dark' : 'light';
                
                // Animation logic on the SVG
                const svgToAnimate = isLight ? document.getElementById('themeIconMoon') : document.getElementById('themeIconSun');
                if (svgToAnimate) {
                    svgToAnimate.style.transform = 'rotate(180deg) scale(0.8)';
                    svgToAnimate.style.opacity = '0';
                }

                setTimeout(() => {
                    // Apply
                    applyTheme(nextTheme);
                    localStorage.setItem('gt-theme', nextTheme);
                    
                    // Reset animation on new SVG
                    const newSvg = nextTheme === 'light' ? document.getElementById('themeIconMoon') : document.getElementById('themeIconSun');
                    if (newSvg) {
                        newSvg.style.transform = 'rotate(0deg) scale(1)';
                        newSvg.style.opacity = '1';
                    }
                }, 150); // slight delay for smooth transition
            });
        }
    });
})();
