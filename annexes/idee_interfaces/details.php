<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GP_MONDE - Détails Colis</title>
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
                        <span>Nouveau - Étape 2</span>
                    </div>
                </div>
            </header>

            <!-- Content Area -->
            <div class="flex-1 p-6 overflow-y-auto bg-gray-50">
                <div class="max-w-[1200px] mx-auto">
                    <!-- Form Steps -->
                    <div class="flex justify-center mb-8">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center font-semibold text-sm bg-green-600 text-white">✓</div>
                            <div class="font-medium text-sm text-green-600">Informations Client</div>
                        </div>
                        <div class="w-16 h-0.5 bg-green-600 mx-4"></div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center font-semibold text-sm bg-blue-700 text-white">2</div>
                            <div class="font-medium text-sm text-blue-700">Détails Colis</div>
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

                    <form id="colisForm">
                        <!-- Détails Colis -->
                        <div class="bg-white rounded-xl shadow-md border border-gray-100 mb-6">
                            <div class="px-6 py-6 border-b border-gray-100">
                                <div class="flex items-center gap-3 text-lg font-semibold text-gray-800">
                                    <i class="fas fa-box"></i>
                                    Détails du Colis
                                </div>
                                <div class="text-sm text-gray-500 mt-2">
                                    Spécifiez les caractéristiques et le contenu du colis
                                </div>
                            </div>
                            <div class="px-6 py-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="flex flex-col">
                                        <label class="font-medium text-gray-700 mb-2">Nombre de Colis <span class="text-red-500">*</span></label>
                                        <input type="number" class="border-2 border-gray-200 rounded-lg px-3 py-2 focus:outline-none focus:border-blue-700 transition-colors" name="nombre_colis" min="1" value="1" required>
                                        <div class="text-xs text-red-500 mt-1 hidden" id="nombre-error">Minimum 1 colis</div>
                                    </div>
                                    
                                    <div class="flex flex-col">
                                        <label class="font-medium text-gray-700 mb-2">Poids Total (kg) <span class="text-red-500">*</span></label>
                                        <input type="number" class="border-2 border-gray-200 rounded-lg px-3 py-2 focus:outline-none focus:border-blue-700 transition-colors" name="poids" min="0.1" step="0.1" required>
                                        <div class="text-xs text-gray-500 mt-1">Poids en kilogrammes</div>
                                        <div class="text-xs text-red-500 mt-1 hidden" id="poids-error">Le poids doit être supérieur à 0</div>
                                    </div>
                                    
                                    <div class="flex flex-col">
                                        <label class="font-medium text-gray-700 mb-2">Type de Produit <span class="text-red-500">*</span></label>
                                        <select class="border-2 border-gray-200 rounded-lg px-3 py-2 focus:outline-none focus:border-blue-700 transition-colors" name="type_produit" required>
                                            <option value="">Sélectionnez...</option>
                                            <option value="documents">Documents</option>
                                            <option value="vetements">Vêtements</option>
                                            <option value="electronique">Électronique</option>
                                            <option value="alimentaire">Alimentaire</option>
                                            <option value="medicaments">Médicaments</option>
                                            <option value="cosmetiques">Cosmétiques</option>
                                            <option value="autre">Autre</option>
                                        </select>
                                        <div class="text-xs text-red-500 mt-1 hidden" id="type-error">Sélectionnez un type de produit</div>
                                    </div>
                                    
                                    <div class="flex flex-col">
                                        <label class="font-medium text-gray-700 mb-2">Type de Cargaison <span class="text-red-500">*</span></label>
                                        <select class="border-2 border-gray-200 rounded-lg px-3 py-2 focus:outline-none focus:border-blue-700 transition-colors" name="type_cargaison" required>
                                            <option value="">Sélectionnez...</option>
                                            <option value="maritime">Maritime (Moins cher)</option>
                                            <option value="aerienne">Aérienne (Plus rapide)</option>
                                            <option value="routiere">Routière (Régional)</option>
                                        </select>
                                        <div class="text-xs text-red-500 mt-1 hidden" id="cargaison-error">Sélectionnez un type de cargaison</div>
                                    </div>
                                    
                                    <div class="flex flex-col col-span-1 md:col-span-2">
                                        <label class="font-medium text-gray-700 mb-2">Description du Contenu</label>
                                        <textarea class="border-2 border-gray-200 rounded-lg px-3 py-2 focus:outline-none focus:border-blue-700 min-h-[80px] transition-colors" name="description" placeholder="Décrivez brièvement le contenu du colis..."></textarea>
                                        <div class="text-xs text-gray-500 mt-1">Description optionnelle pour faciliter l'identification</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Calcul du Prix -->
                        <div class="bg-gradient-to-r from-blue-400 to-blue-700 text-white rounded-xl p-6 shadow-md" id="pricingCard" style="display: none;">
                            <div class="flex items-center gap-2 text-xl font-semibold mb-4">
                                <i class="fas fa-calculator"></i>
                                Calcul du Prix
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                                <div class="bg-white bg-opacity-20 rounded-lg p-4">
                                    <div class="text-sm opacity-90 mb-1">Poids</div>
                                    <div class="text-lg font-semibold" id="calcPoids">-</div>
                                </div>
                                <div class="bg-white bg-opacity-20 rounded-lg p-4">
                                    <div class="text-sm opacity-90 mb-1">Type</div>
                                    <div class="text-lg font-semibold" id="calcType">-</div>
                                </div>
                                <div class="bg-white bg-opacity-20 rounded-lg p-4">
                                    <div class="text-sm opacity-90 mb-1">Prix au kg</div>
                                    <div class="text-lg font-semibold" id="calcPrixKg">-</div>
                                </div>
                                <div class="bg-white bg-opacity-20 rounded-lg p-4">
                                    <div class="text-sm opacity-90 mb-1">Sous-total</div>
                                    <div class="text-lg font-semibold" id="calcSousTotal">-</div>
                                </div>
                                <div class="col-span-1 md:col-span-2 lg:col-span-4 bg-white bg-opacity-30 rounded-lg p-4 text-center mt-4">
                                    <div class="text-sm opacity-90 mb-1">Total à Payer</div>
                                    <div class="text-2xl font-bold" id="calcTotal">-</div>
                                    <div class="text-xs opacity-90 mt-2">
                                        (Minimum: 10 000 FCFA)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="flex justify-between items-center px-6 py-6 bg-white border-t border-gray-100 rounded-b-xl mt-6 shadow-md">
                            <button type="button" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-gray-50 text-gray-800 border-2 border-gray-200 hover:bg-white hover:border-blue-700 transition-colors" onclick="window.location.href='colis'">
                                <i class="fas fa-arrow-left"></i>
                                Précédent
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
        // Règles de tarification (FCFA par kg)
        const pricingRules = {
            maritime: 500,
            aerienne: 1200,
            routiere: 800
        };

        function calculatePrice() {
            const poids = parseFloat(document.querySelector('input[name="poids"]').value) || 0;
            const typeCargaison = document.querySelector('select[name="type_cargaison"]').value;
            
            if (poids > 0 && typeCargaison) {
                const prixParKg = pricingRules[typeCargaison];
                const sousTotal = poids * prixParKg;
                const total = Math.max(10000, sousTotal);
                
                document.getElementById('calcPoids').textContent = poids + ' kg';
                document.getElementById('calcType').textContent = 
                    typeCargaison === 'maritime' ? 'Maritime' :
                    typeCargaison === 'aerienne' ? 'Aérienne' : 'Routière';
                document.getElementById('calcPrixKg').textContent = prixParKg.toLocaleString() + ' FCFA';
                document.getElementById('calcSousTotal').textContent = sousTotal.toLocaleString() + ' FCFA';
                document.getElementById('calcTotal').textContent = total.toLocaleString() + ' FCFA';
                
                document.getElementById('pricingCard').style.display = 'block';
            } else {
                document.getElementById('pricingCard').style.display = 'none';
            }
        }

        function validateForm() {
            let isValid = true;
            const form = document.getElementById('colisForm');
            const formData = new FormData(form);
            
            // Validation nombre de colis
            const nombre = parseInt(formData.get('nombre_colis'));
            if (!nombre || nombre < 1) {
                showError('nombre-error', 'Minimum 1 colis');
                isValid = false;
            } else {
                hideError('nombre-error');
            }
            
            // Validation poids
            const poids = parseFloat(formData.get('poids'));
            if (!poids || poids <= 0) {
                showError('poids-error', 'Le poids doit être supérieur à 0');
                isValid = false;
            } else {
                hideError('poids-error');
            }
            
            // Validation type produit
            const typeProduit = formData.get('type_produit');
            if (!typeProduit) {
                showError('type-error', 'Sélectionnez un type de produit');
                isValid = false;
            } else {
                hideError('type-error');
            }
            
            // Validation type cargaison
            const typeCargaison = formData.get('type_cargaison');
            if (!typeCargaison) {
                showError('cargaison-error', 'Sélectionnez un type de cargaison');
                isValid = false;
            } else {
                hideError('cargaison-error');
            }
            
            return isValid;
        }
        
        function showError(errorId, message) {
            const errorElement = document.getElementById(errorId);
            errorElement.textContent = message;
            errorElement.classList.remove('hidden');
            
            const input = errorElement.previousElementSibling;
            if (input.tagName === 'DIV') {
                const actualInput = input.previousElementSibling;
                actualInput.classList.add('border-red-500');
            } else {
                input.classList.add('border-red-500');
            }
        }
        
        function hideError(errorId) {
            const errorElement = document.getElementById(errorId);
            errorElement.classList.add('hidden');
            
            const input = errorElement.previousElementSibling;
            if (input.tagName === 'DIV') {
                const actualInput = input.previousElementSibling;
                actualInput.classList.remove('border-red-500');
            } else {
                input.classList.remove('border-red-500');
            }
        }
        
        function resetForm() {
            document.getElementById('colisForm').reset();
            document.getElementById('pricingCard').style.display = 'none';
            
            // Masquer toutes les erreurs
            const errors = document.querySelectorAll('[id$="-error"]');
            errors.forEach(error => error.classList.add('hidden'));
            
            // Retirer les couleurs rouges
            const inputs = document.querySelectorAll('.border-red-500');
            inputs.forEach(input => input.classList.remove('border-red-500'));
        }
        
        function saveToMemory() {
            const form = document.getElementById('colisForm');
            const formData = new FormData(form);
            const data = {};
            
            formData.forEach((value, key) => {
                data[key] = value;
            });
            
            // Ajouter le calcul du prix
            const poids = parseFloat(data.poids);
            const typeCargaison = data.type_cargaison;
            const prixParKg = pricingRules[typeCargaison];
            const sousTotal = poids * prixParKg;
            const total = Math.max(10000, sousTotal);
            
            data.prix_par_kg = prixParKg;
            data.sous_total = sousTotal;
            data.total = total;
            
            window.colisData = data;
        }
        
        document.querySelector('input[name="poids"]').addEventListener('input', calculatePrice);
        document.querySelector('select[name="type_cargaison"]').addEventListener('change', calculatePrice);
        
        document.getElementById('colisForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (validateForm()) {
                saveToMemory();
                window.location.href ='destinataire';
            }
        });
        
        window.addEventListener('load', function() {
            if (window.colisData) {
                const form = document.getElementById('colisForm');
                Object.keys(window.colisData).forEach(key => {
                    const input = form.querySelector(`[name="${key}"]`);
                    if (input) {
                        input.value = window.colisData[key];
                    }
                });
                calculatePrice();
            }
        });
    </script>
</body>
</html>