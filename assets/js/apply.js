/* =====================================
   APPLY PAGE LOGIC
   ===================================== */

document.addEventListener('DOMContentLoaded', () => {
    // Basic init if needed
});

let currentStep = 1;
const totalSteps = 4;

function updateProgressUI() {
    // Update steps
    document.querySelectorAll('.apply-progress .step').forEach(step => {
        const stepNum = parseInt(step.getAttribute('data-step'));
        
        step.classList.remove('active', 'completed');
        
        if (stepNum === currentStep) {
            step.classList.add('active');
        } else if (stepNum < currentStep) {
            step.classList.add('completed');
        }
    });

    // Update lines
    document.querySelectorAll('.apply-progress .step-line').forEach((line, index) => {
        // line 0 is between step 1 and 2
        if (index < currentStep - 1) {
            line.classList.add('active');
        } else {
            line.classList.remove('active');
        }
    });
}

function nextStep(step) {
    // Basic validation before moving next
    const currentStepEl = document.getElementById('step-' + step);
    const inputs = currentStepEl.querySelectorAll('input[required], select[required], textarea[required]');
    
    let isValid = true;
    inputs.forEach(input => {
        if (!input.value.trim()) {
            input.style.borderColor = '#ff4a4a';
            isValid = false;
        } else {
            input.style.borderColor = '';
        }
    });

    if (!isValid) {
        alert('Please fill all required fields before proceeding to the next step.');
        return;
    }

    // Hide current, show next
    document.getElementById('step-' + step).classList.remove('active');
    currentStep = step + 1;
    document.getElementById('step-' + currentStep).classList.add('active');
    
    // If we moved to step 4, populate review data
    if (currentStep === 4) {
        populateReview();
    }
    
    updateProgressUI();
}

function prevStep(step) {
    document.getElementById('step-' + step).classList.remove('active');
    currentStep = step - 1;
    document.getElementById('step-' + currentStep).classList.add('active');
    
    updateProgressUI();
}

function populateReview() {
    document.getElementById('r_name').textContent = document.getElementById('a_fname').value || '-';
    document.getElementById('r_email').textContent = document.getElementById('a_email').value || '-';
    document.getElementById('r_phone').textContent = document.getElementById('a_phone').value || '-';
    document.getElementById('r_city').textContent = document.getElementById('a_city').value || '-';
    
    const courseEl = document.getElementById('a_course');
    document.getElementById('r_course').textContent = courseEl.options[courseEl.selectedIndex]?.text || '-';
    
    const batchEl = document.getElementById('a_batch');
    document.getElementById('r_batch').textContent = batchEl.options[batchEl.selectedIndex]?.text || '-';

    const timingEl = document.getElementById('a_timing');
    document.getElementById('r_timing').textContent = timingEl.options[timingEl.selectedIndex]?.text || '-';
    
    const eduEl = document.getElementById('a_edu');
    document.getElementById('r_edu').textContent = eduEl.options[eduEl.selectedIndex]?.text || '-';
    
    document.getElementById('r_inst').textContent = document.getElementById('a_inst').value || '-';
}

function submitApplication(e) {
    e.preventDefault();
    
    const btn = document.querySelector('#step-4 .submit-btn');
    btn.classList.add('loading');
    
    const form = document.getElementById('main-apply-form');
    const formData = new FormData(form);
    
    fetch('ajax/submit_application.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        btn.classList.remove('loading');
        if (data.success) {
            // Hide form and progress
            document.getElementById('main-apply-form').style.display = 'none';
            document.querySelector('.apply-progress').style.display = 'none';
            document.querySelector('.apply-header').style.display = 'none';
            
            // Show success
            const successBox = document.getElementById('apply-success');
            successBox.style.display = 'block';
            
            document.getElementById('success-id').textContent = data.application_no;
        } else {
            alert(data.message || 'Something went wrong. Please try again.');
        }
    })
    .catch(error => {
        btn.classList.remove('loading');
        alert('Something went wrong. Please try again.');
    });
}
