<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GP_MONDE - Informations Client</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-50 text-gray-900">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <nav class="w-[280px] bg-white border-r border-gray-200 flex flex-col fixed h-screen z-50">
            <div class="p-6 border-b border-gray-100">
                <div class="flex items-center gap-3 text-2xl font-bold text-blue-800">
                    <i class="fas fa-shipping-fast text-3xl text-blue-800"></i>
                    <span>GP_MONDE</span>
                </div>
            </div>
            <div class="flex-1 py-4">
                <div class="mb-1">
                    <a href="/dashboard" class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-700 border-r-4 border-transparent transition-all">
                        <i class="fas fa-home w-5 text-center"></i>
                        <span>Dashboard</span>
                    </a>
                </div>
                <div class="mb-1">
                    <a href="/cargaisons" class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-700 border-r-4 border-transparent transition-all">
                        <i class="fas fa-ship w-5 text-center"></i>
                        <span>Cargaisons</span>
                    </a>
                </div>
                <div class="mb-1">
                    <a href="/colis" class="flex items-center gap-3 px-6 py-3 text-blue-700 bg-blue-50 border-r-4 border-blue-700 font-semibold">
                        <i class="fas fa-box w-5 text-center"></i>
                        <span>Colis</span>
                    </a>
                </div>
                <div class="mb-1">
                    <a href="/clients" class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-700 border-r-4 border-transparent transition-all">
                        <i class="fas fa-users w-5 text-center"></i>
                        <span>Clients</span>
                    </a>
                </div>
                <div class="mb-1">
                    <a href="/suivi" class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-700 border-r-4 border-transparent transition-all">
                        <i class="fas fa-search w-5 text-center"></i>
                        <span>Suivi Colis</span>
                    </a>
                </div>
                <div class="mb-1">
                    <a href="/rapports" class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-700 border-r-4 border-transparent transition-all">
                        <i class="fas fa-chart-bar w-5 text-center"></i>
                        <span>Rapports</span>
                    </a>
                </div>
                <div class="mb-1">
                    <a href="/parametres" class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-700 border-r-4 border-transparent transition-all">
                        <i class="fas fa-cog w-5 text-center"></i>
                        <span>Paramètres</span>
                    </a>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-1 ml-[280px] flex flex-col">
            <!-- Header -->
            <header class="bg-white border-b border-gray-200 px-6 py-4 flex justify-between items-center shadow-sm">
                <div>
                    <h1 class="text-xl font-semibold text-gray-800">Enregistrement de Colis </h1>
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <a href="/dashboard" class="text-blue-700 hover:underline">Dashboard</a>
                        <i class="fas fa-chevron-right"></i>
                        <a href="/colis" class="text-blue-700 hover:underline">Colis</a>
                        <i class="fas fa-chevron-right"></i>
                        <span>Nouveau - Étape 1</span>
                    </div>
                </div>
            </header>

            <!-- Content Area -->
            <div class="flex-1 p-6 overflow-y-auto bg-gray-50">
                <div class="max-w-[1200px] mx-auto">
                    <!-- Form Steps -->
                    <div class="flex justify-center mb-8">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center font-semibold text-sm bg-blue-700 text-white">1</div>
                            <div class="font-medium text-sm text-blue-700">Informations Client</div>
                        </div>
                        <div class="w-16 h-0.5 bg-gray-200 mx-4"></div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center font-semibold text-sm bg-gray-200 text-gray-400">2</div>
                            <div class="font-medium text-sm text-gray-400">Détails Colis</div>
                        </div>
                        <div class="w-16 h-0.5 bg-gray-200 mx-4"></div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center font-semibold text-sm bg-gray-200 text-gray-400">3</div>
                            <div class="font-medium text-sm text-gray-400">Destinataire</div>
                        </div>
                        <div class="w-16 h-0.5 bg-gray-200 mx-4"></div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center font-semibold text-sm bg-gray-200 text-gray-400">4</div>
                            <div class="font-medium text-sm text-gray-400">Confirmation</div>
                        </div>
                    </div>

                    <form id="clientForm">
                        <!-- Informations Expéditeur -->
                        <div class="bg-white rounded-xl shadow-md border border-gray-100">
                            <div class="px-6 py-6 border-b border-gray-100">
                                <div class="flex items-center gap-3 text-lg font-semibold text-gray-800">
                                    <i class="fas fa-user"></i>
                                    Informations de l'Expéditeur
                                </div>
                                <div class="text-sm text-gray-500 mt-2">
                                    Saisissez les informations complètes de la personne qui envoie le colis
                                </div>
                            </div>
                            <div class="px-6 py-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="flex flex-col">
                                        <label class="font-medium text-gray-700 mb-2">Nom <span class="text-red-500">*</span></label>
                                        <input type="text" class="border-2 border-gray-200 rounded-lg px-3 py-2 focus:outline-none focus:border-blue-700 transition-colors" name="expediteur_nom" required>
                                        <div class="text-xs text-red-500 mt-1 hidden" id="nom-error">Ce champ est obligatoire</div>
                                    </div>
                                    
                                    <div class="flex flex-col">
                                        <label class="font-medium text-gray-700 mb-2">Prénom <span class="text-red-500">*</span></label>
                                        <input type="text" class="border-2 border-gray-200 rounded-lg px-3 py-2 focus:outline-none focus:border-blue-700 transition-colors" name="expediteur_prenom" required>
                                        <div class="text-xs text-red-500 mt-1 hidden" id="prenom-error">Ce champ est obligatoire</div>
                                    </div>
                                    
                                    <div class="flex flex-col">
                                        <label class="font-medium text-gray-700 mb-2">Téléphone <span class="text-red-500">*</span></label>
                                        <input type="tel" class="border-2 border-gray-200 rounded-lg px-3 py-2 focus:outline-none focus:border-blue-700 transition-colors" name="expediteur_telephone" required>
                                        <div class="text-xs text-gray-500 mt-1">Format: +221 XX XXX XX XX</div>
                                        <div class="text-xs text-red-500 mt-1 hidden" id="telephone-error">Numéro de téléphone invalide</div>
                                    </div>
                                    
                                    <div class="flex flex-col">
                                        <label class="font-medium text-gray-700 mb-2">Email</label>
                                        <input type="email" class="border-2 border-gray-200 rounded-lg px-3 py-2 focus:outline-none focus:border-blue-700 transition-colors" name="expediteur_email">
                                        <div class="text-xs text-gray-500 mt-1">Optionnel - pour les notifications</div>
                                        <div class="text-xs text-red-500 mt-1 hidden" id="email-error">Adresse email invalide</div>
                                    </div>
                                    
                                    <div class="flex flex-col col-span-1 md:col-span-2">
                                        <label class="font-medium text-gray-700 mb-2">Adresse Complète <span class="text-red-500">*</span></label>
                                        <textarea class="border-2 border-gray-200 rounded-lg px-3 py-2 focus:outline-none focus:border-blue-700 min-h-[100px] transition-colors" name="expediteur_adresse" required></textarea>
                                        <div class="text-xs text-gray-500 mt-1">Adresse complète avec quartier, ville, pays</div>
                                        <div class="text-xs text-red-500 mt-1 hidden" id="adresse-error">Ce champ est obligatoire</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="flex justify-between items-center px-6 py-6 bg-white border-t border-gray-100 rounded-b-xl mt-6 shadow-md">
                            <button type="button" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-gray-50 text-gray-800 border-2 border-gray-200 hover:bg-white hover:border-blue-700 transition-colors" onclick="window.history.back()">
                                <i class="fas fa-arrow-left"></i>
                                Retour
                            </button>
                            <div class="flex gap-2">
                                <button type="button" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-transparent text-blue-700 border-2 border-blue-700 hover:bg-blue-700 hover:text-white transition-colors" onclick="resetForm()">
                                    <i class="fas fa-times"></i>
                                    Annuler
                                </button>
                                <button type="submit" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-blue-700 text-white hover:bg-blue-800 transition-colors">
                                    Suivant
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <script>
        function validateForm() {
            let isValid = true;
            const form = document.getElementById('clientForm');
            const formData = new FormData(form);
            
            // Validation nom
            const nom = formData.get('expediteur_nom');
            if (!nom || nom.trim() === '') {
                showError('nom-error', 'Ce champ est obligatoire');
                isValid = false;
            } else {
                hideError('nom-error');
            }
            
            // Validation prénom
            const prenom = formData.get('expediteur_prenom');
            if (!prenom || prenom.trim() === '') {
                showError('prenom-error', 'Ce champ est obligatoire');
                isValid = false;
            } else {
                hideError('prenom-error');
            }
            
            // Validation téléphone
            const telephone = formData.get('expediteur_telephone');
            const phoneRegex = /^(\+221|221)?[0-9]{9}$/;
            if (!telephone || !phoneRegex.test(telephone.replace(/\s/g, ''))) {
                showError('telephone-error', 'Format de téléphone invalide');
                isValid = false;
            } else {
                hideError('telephone-error');
            }
            
            // Validation email (optionnel)
            const email = formData.get('expediteur_email');
            if (email && email.trim() !== '') {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email)) {
                    showError('email-error', 'Adresse email invalide');
                    isValid = false;
                } else {
                    hideError('email-error');
                }
            }
            
            // Validation adresse
            const adresse = formData.get('expediteur_adresse');
            if (!adresse || adresse.trim() === '') {
                showError('adresse-error', 'Ce champ est obligatoire');
                isValid = false;
            } else {
                hideError('adresse-error');
            }
            
            return isValid;
        }
        
        function showError(errorId, message) {
            const errorElement = document.getElementById(errorId);
            errorElement.textContent = message;
            errorElement.classList.remove('hidden');
            
            // Mettre en rouge le champ correspondant
            const input = errorElement.previousElementSibling;
            if (input && input.tagName === 'TEXTAREA') {
                input.classList.add('border-red-500');
            } else if (input && input.previousElementSibling && input.previousElementSibling.tagName !== 'LABEL') {
                input.previousElementSibling.classList.add('border-red-500');
            } else {
                input.classList.add('border-red-500');
            }
        }
        
        function hideError(errorId) {
            const errorElement = document.getElementById(errorId);
            errorElement.classList.add('hidden');
            
            // Retirer la couleur rouge du champ
            const input = errorElement.previousElementSibling;
            if (input && input.tagName === 'TEXTAREA') {
                input.classList.remove('border-red-500');
            } else if (input && input.previousElementSibling && input.previousElementSibling.tagName !== 'LABEL') {
                input.previousElementSibling.classList.remove('border-red-500');
            } else {
                input.classList.remove('border-red-500');
            }
        }
        
        function resetForm() {
            document.getElementById('clientForm').reset();
            // Masquer toutes les erreurs
            const errors = document.querySelectorAll('[id$="-error"]');
            errors.forEach(error => error.classList.add('hidden'));
            
            // Retirer les couleurs rouges
            const inputs = document.querySelectorAll('.border-red-500');
            inputs.forEach(input => input.classList.remove('border-red-500'));
        }
        
        function saveToSessionStorage() {
            const form = document.getElementById('clientForm');
            const formData = new FormData(form);
            const data = {};
            
            formData.forEach((value, key) => {
                data[key] = value;
            });
            
            // Sauvegarder en tant qu'objet au lieu d'utiliser sessionStorage
            window.expediteurData = data;
        }
        
        document.getElementById('clientForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (validateForm()) {
                saveToSessionStorage();
                // Rediriger vers l'étape 2
                window.location.href = 'details';
            }
        });
        
        // Charger les données sauvegardées si elles existent
        window.addEventListener('load', function() {
            if (window.expediteurData) {
                const form = document.getElementById('clientForm');
                Object.keys(window.expediteurData).forEach(key => {
                    const input = form.querySelector(`[name="${key}"]`);
                    if (input) {
                        input.value = window.expediteurData[key];
                    }
                });
            }
        });
    </script>
</body>
</html>