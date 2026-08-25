// application.js
document.addEventListener('DOMContentLoaded', () => {
    let currentStep = 1;
    const totalSteps = 5;
    
    const nextBtns = document.querySelectorAll('.btn-next');
    const prevBtns = document.querySelectorAll('.btn-prev');
    const steps = document.querySelectorAll('.form-step-content');
    const stepIndicators = document.querySelectorAll('.step');
    
    function updateSteps() {
        steps.forEach((step, index) => {
            if (index + 1 === currentStep) {
                step.style.display = 'block';
                setTimeout(() => step.style.opacity = '1', 50);
            } else {
                step.style.opacity = '0';
                setTimeout(() => step.style.display = 'none', 300);
            }
        });

        stepIndicators.forEach((indicator, index) => {
            indicator.classList.remove('active', 'completed');
            if (index + 1 < currentStep) {
                indicator.classList.add('completed');
            } else if (index + 1 === currentStep) {
                indicator.classList.add('active');
            }
        });
    }
    
    if (steps.length > 0) {
        // Initialize
        steps.forEach(s => { s.style.display = 'none'; s.style.opacity = '0'; });
        updateSteps();

        nextBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                if (validateStep(currentStep)) {
                    if (currentStep < totalSteps) {
                        currentStep++;
                        updateSteps();
                        
                        // Populate Review Step
                        if(currentStep === totalSteps) {
                            populateSummary();
                        }
                    }
                }
            });
        });

        prevBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                if (currentStep > 1) {
                    currentStep--;
                    updateSteps();
                }
            });
        });
    }

    const applyForm = document.getElementById('application-form');
    if(applyForm) {
        applyForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = document.getElementById('submit-app-btn');
            const spinner = submitBtn.querySelector('.spinner');
            
            submitBtn.disabled = true;
            spinner.style.display = 'inline-block';
            submitBtn.querySelector('.btn-text').innerText = 'SUBMITTING...';

            setTimeout(() => {
                // Show Success Screen
                document.getElementById('form-container').style.display = 'none';
                document.getElementById('success-container').style.display = 'block';
                
                // Demo ID
                document.getElementById('app-id').innerText = 'GTI-' + Math.floor(100000 + Math.random() * 900000);
            }, 2000);
        });
    }

    function populateSummary() {
        const summaryDiv = document.getElementById('app-summary');
        if(!summaryDiv) return;
        
        const name = document.getElementById('fname').value;
        const course = document.getElementById('course').value;
        const phone = document.getElementById('phone').value;
        
        summaryDiv.innerHTML = `
            <div style="color: var(--gt-muted); margin-bottom: 10px;">Name: <span style="color: var(--gt-text)">${name}</span></div>
            <div style="color: var(--gt-muted); margin-bottom: 10px;">Course: <span style="color: var(--gt-text)">${course}</span></div>
            <div style="color: var(--gt-muted); margin-bottom: 10px;">Phone: <span style="color: var(--gt-text)">${phone}</span></div>
        `;
    }
});
