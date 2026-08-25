// projects.js

// Project Data - Prepared for future DB integration
const projectData = [
    {
        id: "01",
        title: "Road Construction",
        category: "websites",
        categoryLabel: "Construction Website",
        description: "A professional road construction project website designed to present construction services, projects, capabilities and company information through a modern digital experience.",
        technologies: ["HTML", "CSS", "JavaScript", "Responsive UI"],
        image: "https://images.unsplash.com/photo-1541888081622-15cb6bc78be4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80",
        url: "https://mik-road-constraction.netlify.app",
        status: "live",
        featured: true
    },
    {
        id: "02",
        title: "SKD Prime",
        category: "ecommerce",
        categoryLabel: "E-Commerce",
        description: "A modern e-commerce platform focused on product discovery, shopping, customer accounts, checkout, orders and business management.",
        technologies: ["PHP", "MySQL", "JavaScript", "HTML", "CSS", "Bootstrap"],
        image: "https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80",
        url: "#",
        status: "in_progress",
        featured: true
    },
    {
        id: "03",
        title: "Cognito Soft",
        category: "websites",
        categoryLabel: "Software House & Institute",
        description: "A professional software house and technology institute website designed to present digital services, technology education, courses and business solutions.",
        technologies: ["HTML", "CSS", "JavaScript"],
        image: "https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80",
        url: "https://www.cognito-soft.com",
        status: "live",
        featured: true
    },
    {
        id: "04",
        title: "Billing System",
        category: "software",
        categoryLabel: "Python Software",
        description: "A Python-based billing and business management system designed to simplify billing operations, records and business workflows.",
        technologies: ["Python"],
        image: "https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80",
        url: "#",
        status: "in_progress",
        featured: false
    },
    {
        id: "05",
        title: "Academy Management System",
        category: "business",
        categoryLabel: "Management Software",
        description: "A management system designed to organize academy operations, students, courses, records and administrative workflows.",
        technologies: ["PHP", "MySQL", "JavaScript", "HTML", "CSS"],
        image: "https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80",
        url: "#",
        status: "in_progress",
        featured: false
    },
    {
        id: "06",
        title: "Free BMI Calculator Pro",
        category: "calculators",
        categoryLabel: "Web Application",
        description: "A responsive BMI calculator designed to provide quick body-mass calculations through a clean and accessible user interface.",
        technologies: ["HTML", "CSS", "JavaScript"],
        image: "https://images.unsplash.com/photo-1611077543886-53818e69da59?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80",
        url: "https://free-bmi-calculator-pro.netlify.app",
        status: "live",
        featured: false
    },
    {
        id: "07",
        title: "Hassan Age Calculator",
        category: "calculators",
        categoryLabel: "Web Application",
        description: "A lightweight web-based age calculator that provides users with a simple and intuitive way to calculate age.",
        technologies: ["HTML", "CSS", "JavaScript"],
        image: "https://images.unsplash.com/photo-1501139083538-0139583c060f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80",
        url: "https://hassan-age-calc.netlify.app/",
        status: "live",
        featured: false
    }
];

document.addEventListener('DOMContentLoaded', () => {

    // Initialize Project Grid & Filtering
    const gridContainer = document.getElementById('projects-grid');
    const filterBtns = document.querySelectorAll('.filter-btn');

    function renderProjects(filterValue) {
        if (!gridContainer) return;
        
        gridContainer.innerHTML = '';
        
        // Filter logic
        let filteredData = projectData;
        if (filterValue !== 'all') {
            filteredData = projectData.filter(p => {
                if (filterValue === 'webapps') return p.category === 'calculators' || p.category === 'websites';
                if (filterValue === 'software') return p.category === 'software' || p.category === 'business' || p.category === 'ecommerce';
                return p.category === filterValue;
            });
        }

        const getTechIcon = (tech) => {
            const t = tech.toLowerCase();
            if (t.includes('html')) return '<i class="devicon-html5-plain colored" style="font-size: 14px;"></i>';
            if (t.includes('css')) return '<i class="devicon-css3-plain colored" style="font-size: 14px;"></i>';
            if (t.includes('javascript')) return '<i class="devicon-javascript-plain colored" style="font-size: 14px;"></i>';
            if (t.includes('php')) return '<i class="devicon-php-plain colored" style="font-size: 14px;"></i>';
            if (t.includes('mysql')) return '<i class="devicon-mysql-plain colored" style="font-size: 14px;"></i>';
            if (t.includes('python')) return '<i class="devicon-python-plain colored" style="font-size: 14px;"></i>';
            if (t.includes('bootstrap')) return '<i class="devicon-bootstrap-plain colored" style="font-size: 14px;"></i>';
            if (t.includes('responsive')) return '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>';
            return '';
        };

        filteredData.forEach((proj, idx) => {
            const badgeHtml = proj.status === 'live'
                ? `<div class="status-badge live">● LIVE</div>`
                : `<div class="status-badge progress-badge">● IN PROGRESS</div>`;
                
            const btnHtml = proj.status === 'live'
                ? `<a href="${proj.url}" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="width: 100%; text-align: center;">View Project &rarr;</a>`
                : `<button class="btn btn-outline" style="width: 100%; text-align: center; border-color: rgba(255,255,255,0.1); color: #fff; cursor: default;">IN PROGRESS</button>`;

            const card = document.createElement('div');
            card.className = `project-card`;
            card.setAttribute('data-aos', 'fade-up');
            
            card.innerHTML = `
                <div class="pc-image">
                    <img src="${proj.image}" alt="${proj.title}" loading="lazy">
                    ${badgeHtml}
                </div>
                <div class="pc-content">
                    <span class="pc-meta">${proj.id} / ${proj.categoryLabel.toUpperCase()}</span>
                    <h3 class="pc-title">${proj.title}</h3>
                    <p class="pc-desc">${proj.description}</p>
                    <div class="pc-tech">
                        ${proj.technologies.map(t => `<span style="display:inline-flex; align-items:center; gap:6px;">${getTechIcon(t)} ${t.toUpperCase()}</span>`).join('')}
                    </div>
                    ${btnHtml}
                </div>
            `;
            gridContainer.appendChild(card);
        });
        
        // Re-init AOS if needed for newly added elements
        if (typeof AOS !== 'undefined') {
            setTimeout(() => AOS.refreshHard(), 100);
        }
    }

    // Initial render
    renderProjects('all');

    // Filter Listeners
    filterBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            filterBtns.forEach(b => b.classList.remove('active'));
            e.target.classList.add('active');
            
            const filterValue = e.target.getAttribute('data-filter');
            
            gridContainer.style.opacity = '0';
            setTimeout(() => {
                renderProjects(filterValue);
                gridContainer.style.opacity = '1';
            }, 300);
        });
    });
    
    if (gridContainer) {
        gridContainer.style.transition = 'opacity 0.3s ease';
    }
});
