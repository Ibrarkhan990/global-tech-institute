document.addEventListener('DOMContentLoaded', () => {
    // 1. Data for Interactive Services & Deep Dive Details
    const serviceData = [
        {
            id: 'web', title: 'Web Development', 
            shortDesc: 'Modern responsive websites and web applications built for speed, usability and scalability.',
            longDesc: 'Fast, responsive and scalable websites and web applications built around your business requirements.',
            provides: ['Corporate Websites', 'Business Websites', 'Dynamic Web Applications', 'Customer Portals', 'Admin Dashboards', 'Custom Web Platforms'],
            tech: ['HTML', 'CSS', 'JavaScript', 'Bootstrap', 'PHP', 'MySQL'],
            cta: 'Build My Website &rarr;'
        },
        {
            id: 'ecommerce', title: 'E-Commerce Development', 
            shortDesc: 'Build secure, scalable and user-friendly online stores designed to convert visitors into customers.',
            longDesc: 'Build secure, scalable and user-friendly online stores designed to convert visitors into customers.',
            provides: ['Product Management', 'Shopping Cart', 'Secure Checkout', 'Order Management', 'Customer Accounts', 'Payment Integration', 'Shipping Management', 'Inventory Management'],
            tech: ['Shopify', 'WooCommerce', 'PHP', 'MySQL', 'Stripe API'],
            cta: 'Build My Store &rarr;'
        },
        {
            id: 'custom', title: 'Custom Software', 
            shortDesc: 'Purpose-built software designed around the unique workflows of your organization.',
            longDesc: 'Purpose-built software designed around the unique workflows of your organization.',
            provides: ['Business Management Software', 'School Management Systems', 'Institute Management Systems', 'Inventory Systems', 'CRM Systems', 'HR Systems', 'Billing Systems', 'Reporting Systems'],
            tech: ['Python', 'Django', 'React', 'PostgreSQL', 'AWS'],
            cta: 'Discuss Your System &rarr;'
        },
        {
            id: 'business', title: 'Business Management Systems', 
            shortDesc: 'Centralize operations, customers, sales, inventory and reporting in one powerful platform.',
            longDesc: 'Centralize operations, customers, sales, inventory and reporting in one powerful platform.',
            provides: ['Dashboard', 'Customer Management', 'Product Management', 'Orders', 'Inventory', 'Sales', 'Reports', 'User Roles', 'Activity Logs'],
            tech: ['PHP', 'Laravel', 'Vue.js', 'MySQL'],
            cta: 'Build a Business System &rarr;'
        },
        {
            id: 'api', title: 'API & System Integration', 
            shortDesc: 'Connect your digital products, databases and external services through reliable APIs.',
            longDesc: 'Connect your digital products, databases and external services through reliable APIs and integrations.',
            provides: ['REST APIs', 'Third-party APIs', 'Payment APIs', 'Authentication', 'Data synchronization', 'Webhooks', 'System integration'],
            tech: ['Node.js', 'Express', 'JSON', 'GraphQL', 'OAuth'],
            cta: 'Connect Your Systems &rarr;'
        },
        {
            id: 'uiux', title: 'UI / UX Design', 
            shortDesc: 'User interfaces designed to be intuitive, modern and aligned with your brand.',
            longDesc: 'User interfaces designed to be intuitive, modern and aligned with your brand.',
            provides: ['UX Research', 'User Flows', 'Wireframes', 'UI Design', 'Responsive Design', 'Design Systems', 'Prototypes'],
            tech: ['Figma', 'Adobe XD', 'Sketch', 'InVision'],
            cta: 'Design My Product &rarr;'
        },
        {
            id: 'database', title: 'Database Solutions', 
            shortDesc: 'Reliable database architecture designed for performance, security and scalability.',
            longDesc: 'Reliable database architecture designed for performance, security and scalability.',
            provides: ['MySQL', 'Database Design', 'Data Modeling', 'Query Optimization', 'Backup Strategy', 'Data Relationships', 'Security'],
            tech: ['MySQL', 'PostgreSQL', 'MongoDB', 'Redis'],
            cta: 'Optimize My Database &rarr;'
        },
        {
            id: 'mobile', title: 'Mobile Applications', 
            shortDesc: 'Mobile experiences designed to extend your digital products to smartphones and tablets.',
            longDesc: 'Mobile experiences designed to extend your digital products to smartphones and tablets.',
            provides: ['Business Applications', 'Customer Applications', 'Service Applications', 'API-connected Applications'],
            tech: ['React Native', 'Flutter', 'Swift', 'Kotlin'],
            cta: 'Build a Mobile App &rarr;'
        },
        {
            id: 'maintenance', title: 'Website Maintenance', 
            shortDesc: 'Keep your website secure, updated, optimized and reliable after launch.',
            longDesc: 'Keep your website secure, updated, optimized and reliable after launch.',
            provides: ['Bug Fixes', 'Performance Optimization', 'Security Updates', 'Content Updates', 'Database Maintenance', 'Backup', 'Monitoring'],
            tech: ['Git', 'AWS', 'Docker', 'CI/CD'],
            cta: 'Get Technical Support &rarr;'
        },
        {
            id: 'consulting', title: 'Technical Consulting', 
            shortDesc: 'Make better technology decisions with practical technical guidance.',
            longDesc: 'Make better technology decisions with practical technical guidance.',
            provides: ['Technology Selection', 'Architecture Planning', 'Project Planning', 'Database Planning', 'Performance Review', 'Security Review', 'Digital Transformation'],
            tech: ['System Architecture', 'Agile', 'Scrum'],
            cta: 'Talk to an Expert &rarr;'
        }
    ];

    // Populate Detailed Services
    const detailsContainer = document.getElementById('detailed-services');
    if(detailsContainer) {
        let detailsHTML = '';
        serviceData.forEach((d, index) => {
            const num = (index + 1).toString().padStart(2, '0');
            detailsHTML += `
                <div style="background: linear-gradient(145deg, var(--gt-surface), var(--gt-bg)); border: 1px solid var(--gt-border); border-radius: 16px; padding: 2rem; position: relative; overflow: hidden; display: flex; flex-direction: column; transition: transform 0.4s ease, box-shadow 0.4s ease;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.6)'; this.style.borderColor='var(--gt-accent)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.style.borderColor='var(--gt-border)';" data-aos="fade-up" data-aos-delay="${(index % 2) * 100}">
                    <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: var(--gt-accent); opacity: 0.03; border-radius: 50%;"></div>
                    
                    <span style="display: inline-block; padding: 8px 16px; background: rgba(199, 240, 0, 0.1); color: var(--gt-accent); font-family: var(--font-display); font-weight: 700; font-size: 0.85rem; border-radius: 30px; margin-bottom: 1rem; letter-spacing: 1px; align-self: flex-start;">${num} &mdash; SERVICE</span>
                    
                    <h3 style="font-size: 2.5rem; color: var(--gt-text-strong); margin-bottom: 1.5rem; line-height: 1.1;">${d.title}</h3>
                    
                    <p style="color: var(--gt-muted); line-height: 1.8; margin-bottom: 1.5rem; font-size: 1.15rem;">${d.longDesc}</p>
                    
                    <div style="margin-bottom: 1.5rem; flex: 1;">
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 16px;">
                            ${d.provides.map(p => `
                                <li style="display: flex; align-items: center; font-size: 1.1rem; color: var(--gt-text-strong);">
                                    <span style="color: var(--gt-bg); background: var(--gt-accent); border-radius: 8px; width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    </span> 
                                    ${p}
                                </li>
                            `).join('')}
                        </ul>
                    </div>
                    
                    <div style="margin-bottom: 1.5rem;">
                        <div style="font-size: 0.8rem; letter-spacing: 2px; color: var(--gt-muted); margin-bottom: 1rem; font-weight: 600;">TECHNOLOGIES</div>
                        <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                            ${d.tech.map(t => `<span style="padding: 6px 12px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; color: var(--gt-muted); font-size: 0.85rem;">${t}</span>`).join('')}
                        </div>
                    </div>

                    <a href="#project-inquiry" class="btn btn-primary" style="width: 100%; padding: 16px; font-size: 1rem; text-align: center;">${d.cta}</a>
                </div>
            `;
        });
        detailsContainer.innerHTML = detailsHTML;
    }

    // Solution Finder
    const solutionBtns = document.querySelectorAll('.solution-btn');
    const solutionResult = document.getElementById('solution-result');
    if(solutionBtns.length > 0) {
        solutionBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                solutionBtns.forEach(b => b.classList.remove('active-sol'));
                btn.classList.add('active-sol');
                const rec = btn.getAttribute('data-rec');
                solutionResult.innerHTML = `
                    <div style="margin-top: 2rem; padding: 2rem; background: rgba(199,240,0,0.05); border: 1px solid var(--gt-accent); border-radius: 16px; animation: fadeIn 0.4s ease;">
                        <div style="color: var(--gt-accent); font-size: 0.8rem; letter-spacing: 2px; font-weight: 700; margin-bottom: 0.5rem;">RECOMMENDED SERVICE</div>
                        <h4 style="color: var(--gt-text-strong); font-size: 1.8rem; margin-bottom: 1.5rem;">${rec}</h4>
                        <a href="#project-inquiry" class="btn btn-primary" onclick="const sel = document.querySelector('#service-select'); if(sel){sel.value='${rec}';}">Discuss Your Project &rarr;</a>
                    </div>
                `;
            });
        });
    }

    // FAQs
    const faqs = [
        { q: 'How do I start a project?', a: 'You can start a project by filling out the project inquiry form below. Tell us about your requirements, and our team will get back to you to schedule an initial consultation.' },
        { q: 'How long does development take?', a: 'The timeline entirely depends on the scope of the project. A standard corporate website may take 2-4 weeks, while a complex custom ERP system may take 3-6 months. We provide detailed timelines during the planning phase.' },
        { q: 'Can you build custom software?', a: 'Yes. We specialize in purpose-built software designed specifically around the unique workflows of your organization, including CRMs, HR systems, and inventory management.' },
        { q: 'Do you provide e-commerce development?', a: 'Yes. We build secure, scalable online stores with product management, secure checkout, and payment gateway integrations.' },
        { q: 'Can you integrate APIs?', a: 'Yes. We integrate third-party APIs (payments, shipping, social media) and build custom REST APIs to connect your digital systems.' },
        { q: 'Do you provide maintenance after launch?', a: 'Absolutely. We offer long-term maintenance contracts to ensure your product remains secure, fast, and up-to-date as technologies evolve.' },
        { q: 'Can you work with an existing website?', a: 'Yes, we can take over, upgrade, or maintain existing web applications depending on the technology stack used.' },
        { q: 'How can I request a quotation?', a: 'Simply use the Project Inquiry form to submit your requirements. We will review them and provide a detailed technical proposal and quotation.' }
    ];
    
    const faqContainer = document.getElementById('faq-container');
    if(faqContainer) {
        let faqHTML = '';
        faqs.forEach((faq, index) => {
            faqHTML += `
                <div class="faq-item ${index === 0 ? 'active' : ''}" style="background: var(--gt-surface); border: 1px solid var(--gt-border); border-radius: 12px; margin-bottom: 1rem; overflow: hidden; padding: 0 1.5rem;">
                    <div class="faq-question" style="padding: 1.5rem 0; font-size: 1.15rem; font-weight: 600; color: ${index === 0 ? 'var(--gt-accent)' : 'var(--gt-text)'}; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                        ${faq.q}
                        <span style="font-size: 1.5rem; transition: transform 0.3s; transform: ${index === 0 ? 'rotate(45deg)' : 'rotate(0)'}">+</span>
                    </div>
                    <div class="faq-answer" style="padding-bottom: 1.5rem; color: var(--gt-muted); display: ${index === 0 ? 'block' : 'none'}; line-height: 1.6;">
                        ${faq.a}
                    </div>
                </div>
            `;
        });
        faqContainer.innerHTML = faqHTML;
        
        // Add Accordion Logic
        document.querySelectorAll('.faq-item').forEach(item => {
            item.querySelector('.faq-question').addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                document.querySelectorAll('.faq-item').forEach(i => {
                    i.classList.remove('active');
                    i.querySelector('.faq-answer').style.display = 'none';
                    i.querySelector('.faq-question').style.color = 'var(--gt-text)';
                    i.querySelector('span').style.transform = 'rotate(0)';
                });
                if(!isActive) {
                    item.classList.add('active');
                    item.querySelector('.faq-answer').style.display = 'block';
                    item.querySelector('.faq-question').style.color = 'var(--gt-accent)';
                    item.querySelector('span').style.transform = 'rotate(45deg)';
                }
            });
        });
    }
});


