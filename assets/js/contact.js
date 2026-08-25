document.addEventListener('DOMContentLoaded', () => {
    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            faqItems.forEach(faq => {
                faq.classList.remove('active');
                faq.querySelector('.faq-answer').style.maxHeight = null;
            });
            if (!isActive) {
                item.classList.add('active');
                const answer = item.querySelector('.faq-answer');
                answer.style.maxHeight = answer.scrollHeight + "px";
            }
        });
    });
});

async function handleFormSubmit(e, formId) {
    e.preventDefault();
    
    const form = document.getElementById(formId);
    const btn = form.querySelector('.submit-btn');
    const status = form.querySelector('.form-status');
    
    status.style.display = 'none';
    status.className = 'form-status';
    
    btn.classList.add('loading');
    btn.disabled = true;

    try {
        const formData = new FormData(form);
        
        // Manual mapping for Business Form which lacks name attributes in original HTML
        if (formId === 'business-form') {
            formData.set('name', document.getElementById('b_name').value);
            formData.set('email', document.getElementById('b_email').value);
            formData.set('phone', document.getElementById('b_phone').value);
            
            const bType = document.getElementById('b_type');
            const typeText = bType.options[bType.selectedIndex]?.text || '';
            formData.set('inquiry_type', 'Business: ' + typeText);
            formData.set('subject', 'Business Inquiry: ' + typeText);
            
            const bCompany = document.getElementById('b_company').value;
            const bBudget = document.getElementById('b_budget');
            const budgetText = bBudget.options[bBudget.selectedIndex]?.text || '';
            const rawMessage = document.getElementById('b_message').value;
            
            const fullMessage = `Company: ${bCompany}\nBudget: ${budgetText}\n\nMessage:\n${rawMessage}`;
            formData.set('message', fullMessage);
        }
        
        // Manual mapping for General Form Select
        if (formId === 'general-form') {
            const gPurpose = document.getElementById('g_purpose');
            if (gPurpose && gPurpose.selectedIndex > 0) {
                formData.set('inquiry_type', gPurpose.options[gPurpose.selectedIndex].text);
            } else {
                formData.set('inquiry_type', 'General Inquiry');
            }
        }

        const response = await fetch('ajax/submit_message.php', {
            method: 'POST',
            body: formData
        });
        
        const result = await response.json();
        
        if (result.success) {
            status.innerHTML = `
                <div style="margin-bottom: 5px;"><strong>MESSAGE RECEIVED</strong></div>
                <div>${result.message}</div>
            `;
            status.classList.add('success');
            form.reset();
        } else {
            status.innerHTML = `
                <div style="margin-bottom: 5px;"><strong>ERROR</strong></div>
                <div>${result.message}</div>
            `;
            status.classList.add('error');
        }
    } catch (error) {
        status.innerHTML = `
            <div style="margin-bottom: 5px;"><strong>ERROR</strong></div>
            <div>A network error occurred. Please try again.</div>
        `;
        status.classList.add('error');
    } finally {
        status.style.display = 'block';
        btn.classList.remove('loading');
        btn.disabled = false;
        
        setTimeout(() => {
            status.style.display = 'none';
        }, 8000);
    }
}
