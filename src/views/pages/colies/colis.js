/* let currentStep = 1;
let formData = {};
let pricingRules = {
    maritime: 500,   // FCFA per kg
    aerienne: 1200,  // FCFA per kg
    routiere: 800    // FCFA per kg
};
let colisData = [];
let trackingCode = '';

document.addEventListener('DOMContentLoaded', function() {
    updateTime();
    setInterval(updateTime, 1000);
    generateColisInputs();
    updateButtonsVisibility();
    setTimeout(() => {
        const step1 = document.getElementById('step1');
        if (step1) step1.classList.add('fade-in');
    }, 100);

    // Sélection des boutons
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');
    const printBtn = document.getElementById('printBtn');
    const newColisBtn = document.getElementById('newColisBtn');
    const nombreColisInput = document.querySelector('input[name="nombre_colis"]');

    // Application des fonctions aux boutons
    if (nextBtn) nextBtn.addEventListener('click', nextStep);
    if (prevBtn) prevBtn.addEventListener('click', previousStep);
    if (printBtn) printBtn.addEventListener('click', printReceipt);
    if (newColisBtn) newColisBtn.addEventListener('click', newColis);
    if (nombreColisInput) nombreColisInput.addEventListener('input', generateColisInputs);
});

// Sélection des éléments
const nextBtn = document.getElementById('nextBtn');
const prevBtn = document.getElementById('prevBtn');
const printBtn = document.getElementById('printBtn');
const newColisBtn = document.getElementById('newColisBtn');

// Ajout des événements
if (nextBtn) nextBtn.addEventListener('click', nextStep);
if (prevBtn) prevBtn.addEventListener('click', previousStep);
if (printBtn) printBtn.addEventListener('click', printReceipt);
if (newColisBtn) newColisBtn.addEventListener('click', newColis);

// Pour les champs dynamiques, pareil :
const nombreColisInput = document.querySelector('input[name="nombre_colis"]');
if (nombreColisInput) nombreColisInput.addEventListener('input', generateColisInputs);

function updateTime() {
    const now = new Date();
    const timeString = now.toLocaleTimeString('fr-FR');
    const timeEl = document.getElementById('current-time');
    if (timeEl) timeEl.textContent = timeString;
}

function showNotification(message, type = 'success') {
    const notificationArea = document.getElementById('notification-area');
    if (!notificationArea) return;
    const notification = document.createElement('div');
    const bgColor = type === 'success' ? 'bg-green-100 border-green-400 text-green-700' : 
                   type === 'error' ? 'bg-red-100 border-red-400 text-red-700' :
                   'bg-blue-100 border-blue-400 text-blue-700';
    const icon = type === 'success' ? 'fa-check-circle' : 
                type === 'error' ? 'fa-exclamation-triangle' : 
                'fa-info-circle';
    notification.className = `${bgColor} border rounded-lg p-4 mb-4 flex items-center gap-3 fade-in`;
    notification.innerHTML = `
        <i class="fas ${icon} text-lg"></i>
        <span>${message}</span>
        <button onclick="this.parentElement.remove()" class="ml-auto">
            <i class="fas fa-times"></i>
        </button>
    `;
    notificationArea.appendChild(notification);
    setTimeout(() => {
        if (notification.parentNode) notification.remove();
    }, 5000);
}

function generateColisInputs() {
    const nombreColis = parseInt(document.querySelector('input[name="nombre_colis"]').value) || 1;
    const container = document.getElementById('colis-details-container');
    if (!container) return;
    container.innerHTML = '';
    colisData = [];
    for (let i = 1; i <= nombreColis; i++) {
        const colisDiv = document.createElement('div');
        colisDiv.className = 'bg-gradient-to-br from-gray-50 to-gray-100 border-2 border-gray-200 rounded-xl p-6 mb-6 fade-in hover:shadow-lg transition-all';
        colisDiv.innerHTML = `
            <div class="flex items-center gap-3 mb-6"></div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6"></div>
        `;
        container.appendChild(colisDiv);
    }
    calculateTotals();
}

function calculateTotals() {
    const nombreColis = parseInt(document.querySelector('input[name="nombre_colis"]').value) || 1;
    const typeCargaison = document.querySelector('select[name="type_cargaison"]').value;
    let totalWeight = 0;
    let isComplete = true;
    for (let i = 1; i <= nombreColis; i++) {
        const poidsInput = document.querySelector(`input[name="colis_${i}_poids"]`);
        const typeInput = document.querySelector(`select[name="colis_${i}_type"]`);
        if (poidsInput && poidsInput.value) {
            totalWeight += parseFloat(poidsInput.value);
        } else {
            isComplete = false;
        }
        if (typeInput && !typeInput.value) {
            isComplete = false;
        }
    }
    const tw = document.getElementById('total-weight');
    if (tw) tw.textContent = totalWeight.toFixed(1) + ' kg';
    if (typeCargaison && totalWeight > 0) {
        const pricePerKg = pricingRules[typeCargaison];
        const subtotal = totalWeight * pricePerKg;
        const total = Math.max(10000, subtotal);
        document.getElementById('price-per-kg').textContent = pricePerKg.toLocaleString() + ' FCFA';
        document.getElementById('subtotal').textContent = subtotal.toLocaleString() + ' FCFA';
        document.getElementById('total-price').textContent = total.toLocaleString() + ' FCFA';
        document.getElementById('pricing-summary').style.display = 'block';
        document.getElementById('pricing-summary').classList.add('fade-in');
    } else {
        document.getElementById('pricing-summary').style.display = 'none';
    }
}

function updatePricing() {
    calculateTotals();
    const typeCargaison = document.querySelector('select[name="type_cargaison"]').value;
    if (typeCargaison) {
        showNotification(`Type de cargaison sélectionné: ${typeCargaison.charAt(0).toUpperCase() + typeCargaison.slice(1)}`, 'info');
    }
}

function nextStep() {
    if (validateStep(currentStep)) {
        if (currentStep < 4) {
            document.getElementById(`step${currentStep}`).style.opacity = '0';
            document.getElementById(`step${currentStep}`).style.transform = 'translateX(-20px)';
            setTimeout(() => {
                document.getElementById(`step${currentStep}`).style.display = 'none';
                currentStep++;
                document.getElementById(`step${currentStep}`).style.display = 'block';
                document.getElementById(`step${currentStep}`).style.opacity = '0';
                document.getElementById(`step${currentStep}`).style.transform = 'translateX(20px)';
                setTimeout(() => {
                    document.getElementById(`step${currentStep}`).style.transform = 'translateX(0)';
                }, 50);
                updateStepIndicators();
                updateButtonsVisibility();
                if (currentStep === 4) {
                    generateReceipt();
                }
            }, 200);
        }
    }
}

function previousStep() {
    if (currentStep > 1) {
        document.getElementById(`step${currentStep}`).style.opacity = '0';
        document.getElementById(`step${currentStep}`).style.transform = 'translateX(20px)';
        setTimeout(() => {
            document.getElementById(`step${currentStep}`).style.display = 'none';
            currentStep--;
            document.getElementById(`step${currentStep}`).style.display = 'block';
            document.getElementById(`step${currentStep}`).style.opacity = '0';
            document.getElementById(`step${currentStep}`).style.transform = 'translateX(-20px)';
            setTimeout(() => {
                document.getElementById(`step${currentStep}`).style.opacity = '1';
                document.getElementById(`step${currentStep}`).style.transform = 'translateX(0)';
            }, 50);
            updateStepIndicators();
            updateButtonsVisibility();
        }, 200);
    }
}

function updateStepIndicators() {
    for (let i = 1; i <= 4; i++) {
        const indicator = document.querySelector(`#step-indicator-${i} .w-10`);
        const label = document.querySelector(`#step-indicator-${i} .font-medium`);
        const progress = document.getElementById(`progress-${i}-${i+1}`);
        if (i < currentStep) {
            indicator.className = 'w-10 h-10 rounded-full flex items-center justify-center font-semibold text-sm bg-green-500 text-white shadow-lg';
            indicator.innerHTML = '<i class="fas fa-check"></i>';
            label.className = 'font-medium text-sm text-green-600';
            if (progress) progress.className = 'w-16 h-0.5 bg-green-400 mx-4';
        } else if (i === currentStep) {
            indicator.className = 'w-10 h-10 rounded-full flex items-center justify-center font-semibold text-sm bg-blue-700 text-white shadow-lg pulse';
            indicator.innerHTML = i;
            label.className = 'font-medium text-sm text-blue-700';
            if (progress) progress.className = 'w-16 h-0.5 bg-gray-200 mx-4';
        } else {
            indicator.className = 'w-10 h-10 rounded-full flex items-center justify-center font-semibold text-sm bg-gray-200 text-gray-400';
            indicator.innerHTML = i;
            label.className = 'font-medium text-sm text-gray-400';
            if (progress) progress.className = 'w-16 h-0.5 bg-gray-200 mx-4';
        }
    }
}

function updateButtonsVisibility() {
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const printBtn = document.getElementById('printBtn');
    const newColisBtn = document.getElementById('newColisBtn');
    prevBtn.style.display = currentStep > 1 ? 'flex' : 'none';
    if (currentStep === 4) {
        nextBtn.style.display = 'none';
        printBtn.style.display = 'flex';
        newColisBtn.style.display = 'flex';
    } else {
        nextBtn.style.display = 'flex';
        printBtn.style.display = 'none';
        newColisBtn.style.display = 'none';
        nextBtn.innerHTML = currentStep === 3 ? '<i class="fas fa-check mr-2"></i>Finaliser' : 'Suivant <i class="fas fa-arrow-right ml-2"></i>';
    }
}

function validateStep(step) {
    let isValid = true;
    const stepElement = document.getElementById(`step${step}`);
    stepElement.querySelectorAll('.form-error').forEach(error => {
        error.classList.add('hidden');
    });
    stepElement.querySelectorAll('input, select, textarea').forEach(input => {
        input.classList.remove('border-red-500', 'ring-red-200');
    });
    const Inputs = stepElement.querySelectorAll('[]');
    Inputs.forEach(input => {
        if (!input.value.trim()) {
            isValid = false;
            input.classList.add('border-red-500', 'ring-red-200', 'ring-2');
            const error = input.parentNode.querySelector('.form-error');
            if (error) error.classList.remove('hidden');
        }
    });
    if (step === 2) {
        const nombreColis = parseInt(document.querySelector('input[name="nombre_colis"]').value) || 1;
        for (let i = 1; i <= nombreColis; i++) {
            const poidsInput = document.querySelector(`input[name="colis_${i}_poids"]`);
            const typeInput = document.querySelector(`select[name="colis_${i}_type"]`);
            if (!poidsInput.value || parseFloat(poidsInput.value) < 0.1) {
                isValid = false;
                poidsInput.classList.add('border-red-500', 'ring-red-200', 'ring-2');
                const error = poidsInput.parentNode.parentNode.querySelector('.form-error');
                if (error) error.classList.remove('hidden');
            }
            if (!typeInput.value) {
                isValid = false;
                typeInput.classList.add('border-red-500', 'ring-red-200', 'ring-2');
                const error = typeInput.parentNode.querySelector('.form-error');
                if (error) error.classList.remove('hidden');
            }
        }
    }
    const phoneInputs = stepElement.querySelectorAll('input[type="tel"]');
    phoneInputs.forEach(input => {
        if (input.value && !validatePhone(input.value)) {
            isValid = false;
            input.classList.add('border-red-500', 'ring-red-200', 'ring-2');
            const error = input.parentNode.querySelector('.form-error');
            if (error) error.classList.remove('hidden');
        }
    });
    if (!isValid) {
        showNotification('Veuillez corriger les erreurs avant de continuer.', 'error');
    }
    return isValid;
}

function validatePhone(phone) {
    const phoneRegex = /^\+?221\s?[0-9\s-]{8,}$/;
    return phoneRegex.test(phone);
}

function generateReceipt() {
    // ... (reprends ici ta logique de génération du reçu)
}

function generateTrackingCode() {
    const now = new Date();
    const year = now.getFullYear();
    const month = String(now.getMonth() + 1).padStart(2, '0');
    const day = String(now.getDate()).padStart(2, '0');
    const hour = String(now.getHours()).padStart(2, '0');
    const minute = String(now.getMinutes()).padStart(2, '0');
    const random = Math.floor(Math.random() * 1000).toString().padStart(3, '0');
    return `CG${year}${month}${day}${hour}${minute}${random}`;
}

window.nextBtn = nextStep;
window.previousStep = previousStep;
window.resetForm = resetForm;
window.printReceipt = printReceipt;
window.newColis = newColis;
window.generateColisInputs = generateColisInputs;
window.updatePricing = updatePricing;
window.calculateTotals = calculateTotals; */