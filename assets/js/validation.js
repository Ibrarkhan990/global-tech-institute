// validation.js
function validateStep(stepIndex) {
    let isValid = true;
    const currentStepDiv = document.getElementById(`step-${stepIndex}`);
    
    if(!currentStepDiv) return true;

    const requiredInputs = currentStepDiv.querySelectorAll('input[required], select[required]');
    
    requiredInputs.forEach(input => {
        // Reset styles
        input.style.borderColor = 'var(--gt-border)';
        
        if (!input.value.trim()) {
            input.style.borderColor = 'red'; // Simple error indication
            isValid = false;
        }
    });

    return isValid;
}
