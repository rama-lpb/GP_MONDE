<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GP_MONDE - Enregistrement Colis</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .fade-in { animation: fadeIn 0.3s ease-in-out; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
        .slide-in { animation: slideIn 0.4s ease-out; }
        @keyframes slideIn { from { opacity: 0; transform: translateX(20px); } to { opacity: 1; transform: translateX(0); } }
        .pulse { animation: pulse 2s infinite; }
        @keyframes pulse { 0%, 100% { opacity: 1; } 50% { opacity: 0.5; } }
        @media print {
            body * { visibility: hidden; }
            .print-area, .print-area * { visibility: visible; }
            .print-area { position: absolute; left: 0; top: 0; width: 100%; }
        }
        .notification {
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
        }
        .notification.show {
            transform: translateX(0);
        }
    </style>
</head>
<body class="font-sans bg-gray-50 text-gray-900">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <nav class="w-[280px] bg-white border-r border-gray-200 flex flex-col fixed h-screen z-50 shadow-lg">
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
                 <div class="mt-auto mb-6 px-6">
                    <form method="post" action="/login">
                    <button type="submit" class="w-full mt-[100px] flex items-center gap-3 px-4 py-3 bg-blue-50 hover:bg-blue-100 text-blue-700 font-semibold rounded-lg       transition">
                    <i class="fas fa-sign-out-alt w-5 text-center"></i>
                    <span>Déconnexion</span>
                    </button>
                </form>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-1 ml-[280px] flex flex-col">
            <!-- Header -->
            <header class="bg-white border-b border-gray-200 px-6 py-4 flex justify-between items-center shadow-sm">
                <div>
                    <h1 class="text-xl font-semibold text-gray-800">Enregistrement de Colis</h1>
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <a href="/dashboard" class="text-blue-700 hover:underline">Dashboard</a>
                        <i class="fas fa-chevron-right"></i>
                        <a href="/colis" class="text-blue-700 hover:underline">Colis</a>
                        <i class="fas fa-chevron-right"></i>
                        <span>Nouveau</span>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <div class="text-sm text-gray-600">
                        <i class="fas fa-clock"></i>
                        <span id="current-time"></span>
                    </div>
                </div>
            </header>

            <!-- Content Area -->
            <div class="flex-1 p-6 overflow-y-auto bg-gray-50">
                <div class="max-w-[1200px] mx-auto">
                    <!-- Form Steps -->
                    <div class="flex justify-center mb-8">
                        <div class="flex items-center gap-3" id="step-indicator-1">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center font-semibold text-sm bg-blue-700 text-white">1</div>
                            <div class="font-medium text-sm text-blue-700">Informations Client</div>
                        </div>
                        <div class="w-16 h-0.5 bg-gray-200 mx-4" id="progress-1-2"></div>
                        <div class="flex items-center gap-3" id="step-indicator-2">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center font-semibold text-sm bg-gray-200 text-gray-400">2</div>
                            <div class="font-medium text-sm text-gray-400">Détails Colis</div>
                        </div>
                        <div class="w-16 h-0.5 bg-gray-200 mx-4" id="progress-2-3"></div>
                        <div class="flex items-center gap-3" id="step-indicator-3">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center font-semibold text-sm bg-gray-200 text-gray-400">3</div>
                            <div class="font-medium text-sm text-gray-400">Destinataire</div>
                        </div>
                        <div class="w-16 h-0.5 bg-gray-200 mx-4" id="progress-3-4"></div>
                        <div class="flex items-center gap-3" id="step-indicator-4">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center font-semibold text-sm bg-gray-200 text-gray-400">4</div>
                            <div class="font-medium text-sm text-gray-400">Confirmation</div>
                        </div>
                    </div>

                    <!-- Notification Area -->
                    <div id="notification-area" class="fixed top-4 right-4 z-50"></div>

                    <form id="colisForm">
                        <!-- Étape 1: Informations Expéditeur -->
                        <div class="bg-white rounded-xl shadow-md border border-gray-100 mb-6 slide-in" id="step1" >
                            <div class="px-6 py-6 border-b border-gray-100 bg-gradient-to-r from-blue-50 to-blue-100">
                                <div class="flex items-center gap-3 text-lg font-semibold text-gray-800">
                                    <i class="fas fa-user text-blue-600"></i>
                                    Informations de l'Expéditeur
                                </div>
                                <div class="text-sm text-gray-600 mt-2">
                                    Saisissez les informations complètes de la personne qui envoie le colis
                                </div>
                            </div>
                            <div class="px-6 py-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="flex flex-col mb-4">
                                        <label class="font-medium text-gray-700 mb-2">Nom <span class="text-red-500">*</span></label>
                                        <input type="text" class="border-2 border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-700 focus:ring-2 focus:ring-blue-100 transition-all" name="expediteur_nom" >
                                        <div class="text-xs text-red-500 mt-1 hidden form-error">Ce champ est obligatoire</div>
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <label class="font-medium text-gray-700 mb-2">Prénom <span class="text-red-500">*</span></label>
                                        <input type="text" class="border-2 border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-700 focus:ring-2 focus:ring-blue-100 transition-all" name="expediteur_prenom" >
                                        <div class="text-xs text-red-500 mt-1 hidden form-error">Ce champ est obligatoire</div>
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <label class="font-medium text-gray-700 mb-2">Téléphone <span class="text-red-500">*</span></label>
                                        <input type="tel" class="border-2 border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-700 focus:ring-2 focus:ring-blue-100 transition-all" name="expediteur_telephone"  placeholder="+221 XX XXX XX XX">
                                        <div class="text-xs text-gray-500 mt-1">Format: +221 XX XXX XX XX</div>
                                        <div class="text-xs text-red-500 mt-1 hidden form-error">Numéro de téléphone invalide</div>
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <label class="font-medium text-gray-700 mb-2">Email</label>
                                        <input type="email" class="border-2 border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-700 focus:ring-2 focus:ring-blue-100 transition-all" name="expediteur_email" placeholder="exemple@email.com">
                                        <div class="text-xs text-gray-500 mt-1">Optionnel - pour les notifications</div>
                                    </div>
                                    <div class="flex flex-col mb-4 col-span-full">
                                        <label class="font-medium text-gray-700 mb-2">Adresse Complète <span class="text-red-500">*</span></label>
                                        <textarea class="border-2 border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-700 focus:ring-2 focus:ring-blue-100 transition-all min-h-[100px]" name="expediteur_adresse"  placeholder="Adresse complète avec quartier, ville, pays..."></textarea>
                                        <div class="text-xs text-gray-500 mt-1">Adresse complète avec quartier, ville, pays</div>
                                        <div class="text-xs text-red-500 mt-1 hidden form-error">Ce champ est obligatoire</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Étape 2: Détails Colis -->
                        <div class="bg-white rounded-xl shadow-md border border-gray-100 mb-6 slide-in" id="step2" >
                            <div class="px-6 py-6 border-b border-gray-100 bg-gradient-to-r from-green-50 to-green-100">
                                <div class="flex items-center gap-3 text-lg font-semibold text-gray-800">
                                    <i class="fas fa-box text-green-600"></i>
                                    Détails du Colis
                                </div>
                                <div class="text-sm text-gray-600 mt-2">
                                    Spécifiez les caractéristiques et le contenu du colis
                                </div>
                            </div>
                            <div class="px-6 py-6">
                                <!-- Nombre de colis et type de cargaison -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                    <div class="flex flex-col">
                                        <label class="font-medium text-gray-700 mb-2">Nombre de Colis <span class="text-red-500">*</span></label>
                                        <input type="number" class="border-2 border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-700 focus:ring-2 focus:ring-blue-100 transition-all" 
                                               name="nombre_colis" min="1" max="10" value="1"  onchange="generateColisInputs()">
                                        <div class="text-xs text-gray-500 mt-1">Maximum 10 colis par envoi</div>
                                        <div class="text-xs text-red-500 mt-1 hidden form-error">Minimum 1 colis, maximum 10</div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="font-medium text-gray-700 mb-2">Type de Cargaison <span class="text-red-500">*</span></label>
                                        <select class="border-2 border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-700 focus:ring-2 focus:ring-blue-100 transition-all" 
                                                name="type_cargaison"  onchange="updatePricing()">
                                            <option value="">Sélectionnez...</option>
                                            <option value="maritime">🚢 Maritime (500 FCFA/kg - 7-10 jours)</option>
                                            <option value="aerienne">✈️ Aérienne (1200 FCFA/kg - 2-3 jours)</option>
                                            <option value="routiere">🚛 Routière (800 FCFA/kg - 4-5 jours)</option>
                                        </select>
                                        <div class="text-xs text-red-500 mt-1 hidden form-error">Sélectionnez un type de cargaison</div>
                                    </div>
                                </div>

                                <!-- Détails pour chaque colis -->
                                <div id="colis-details-container">
                                    <!-- Les inputs pour chaque colis seront générés ici -->
                                </div>

                                <!-- Résumé des calculs -->
                                <div class="bg-gradient-to-r from-blue-50 to-blue-100 border border-blue-200 rounded-xl p-6 mt-6" id="pricing-summary" style="display: none;">
                                    <div class="flex items-center gap-2 text-lg font-semibold text-blue-800 mb-4">
                                        <i class="fas fa-calculator"></i>
                                        Résumé et Calcul du Prix
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                        <div class="bg-white rounded-lg p-4 border border-blue-200 shadow-sm">
                                            <div class="text-sm text-gray-600 mb-1">Poids Total</div>
                                            <div class="text-xl font-bold text-blue-700" id="total-weight">0 kg</div>
                                        </div>
                                        <div class="bg-white rounded-lg p-4 border border-blue-200 shadow-sm">
                                            <div class="text-sm text-gray-600 mb-1">Prix par kg</div>
                                            <div class="text-xl font-bold text-blue-700" id="price-per-kg">- FCFA</div>
                                        </div>
                                        <div class="bg-white rounded-lg p-4 border border-blue-200 shadow-sm">
                                            <div class="text-sm text-gray-600 mb-1">Sous-total</div>
                                            <div class="text-xl font-bold text-blue-700" id="subtotal">0 FCFA</div>
                                        </div>
                                    </div>
                                    <div class="bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-lg p-4 text-center shadow-lg">
                                        <div class="text-sm opacity-90 mb-1">Total à Payer</div>
                                        <div class="text-2xl font-bold" id="total-price">0 FCFA</div>
                                        <div class="text-xs opacity-90 mt-2">(Minimum: 10 000 FCFA)</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Étape 3: Informations Destinataire -->
                        <div class="bg-white rounded-xl shadow-md border border-gray-100 mb-6 slide-in" id="step3" >
                            <div class="px-6 py-6 border-b border-gray-100 bg-gradient-to-r from-purple-50 to-purple-100">
                                <div class="flex items-center gap-3 text-lg font-semibold text-gray-800">
                                    <i class="fas fa-user-tag text-purple-600"></i>
                                    Informations du Destinataire
                                </div>
                                <div class="text-sm text-gray-600 mt-2">
                                    Saisissez les informations de la personne qui recevra le colis
                                </div>
                            </div>
                            <div class="px-6 py-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="flex flex-col mb-4">
                                        <label class="font-medium text-gray-700 mb-2">Nom <span class="text-red-500">*</span></label>
                                        <input type="text" class="border-2 border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-700 focus:ring-2 focus:ring-blue-100 transition-all" name="destinataire_nom" >
                                        <div class="text-xs text-red-500 mt-1 hidden form-error">Ce champ est obligatoire</div>
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <label class="font-medium text-gray-700 mb-2">Prénom <span class="text-red-500">*</span></label>
                                        <input type="text" class="border-2 border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-700 focus:ring-2 focus:ring-blue-100 transition-all" name="destinataire_prenom" >
                                        <div class="text-xs text-red-500 mt-1 hidden form-error">Ce champ est obligatoire</div>
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <label class="font-medium text-gray-700 mb-2">Téléphone <span class="text-red-500">*</span></label>
                                        <input type="tel" class="border-2 border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-700 focus:ring-2 focus:ring-blue-100 transition-all" name="destinataire_telephone"  placeholder="+221 XX XXX XX XX">
                                        <div class="text-xs text-gray-500 mt-1">Le destinataire recevra le code de suivi par SMS</div>
                                        <div class="text-xs text-red-500 mt-1 hidden form-error">Numéro de téléphone invalide</div>
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <label class="font-medium text-gray-700 mb-2">Email</label>
                                        <input type="email" class="border-2 border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-700 focus:ring-2 focus:ring-blue-100 transition-all" name="destinataire_email" placeholder="exemple@email.com">
                                        <div class="text-xs text-gray-500 mt-1">Optionnel - pour les notifications par email</div>
                                    </div>
                                    <div class="flex flex-col mb-4 col-span-full">
                                        <label class="font-medium text-gray-700 mb-2">Adresse de Livraison <span class="text-red-500">*</span></label>
                                        <textarea class="border-2 border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-700 focus:ring-2 focus:ring-blue-100 transition-all min-h-[100px]" name="destinataire_adresse"  placeholder="Adresse complète où le destinataire récupérera le colis..."></textarea>
                                        <div class="text-xs text-gray-500 mt-1">Adresse complète où le destinataire récupérera le colis</div>
                                        <div class="text-xs text-red-500 mt-1 hidden form-error">Ce champ est obligatoire</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Étape 4: Confirmation et Reçu -->
                        <div class="bg-white rounded-xl shadow-md border border-gray-100 mb-6 slide-in" id="step4" >
                            <div class="px-6 py-6 border-b border-gray-100 bg-gradient-to-r from-green-50 to-green-100">
                                <div class="flex items-center gap-3 text-lg font-semibold text-gray-800">
                                    <i class="fas fa-check-circle text-green-600"></i>
                                    Confirmation et Reçu
                                </div>
                                <div class="text-sm text-gray-600 mt-2">
                                    Vérifiez les informations et générez le reçu pour le client
                                </div>
                            </div>
                            <div class="px-6 py-6">
                                <div class="flex items-center gap-3 bg-green-100 border border-green-300 text-green-700 rounded-lg p-4 mb-6 animate-pulse">
                                    <i class="fas fa-check-circle text-2xl"></i>
                                    <div>
                                        <strong>Colis enregistré avec succès!</strong><br>
                                        Le code de suivi a été généré et sera envoyé au destinataire.
                                    </div>
                                </div>

                                <!-- Receipt Preview -->
                                <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 my-6 bg-white shadow-lg print-area" id="receiptPreview">
                                    <div class="text-center mb-6 pb-4 border-b-2 border-gray-200">
                                        <div class="text-3xl text-blue-700 mb-3">
                                            <i class="fas fa-shipping-fast"></i>
                                        </div>
                                        <div class="text-2xl font-bold text-gray-800 mb-2">GP_MONDE</div>
                                        <div class="text-base text-gray-600 mb-1">Reçu d'Enregistrement de Colis</div>
                                        <div class="text-sm text-gray-500 mt-2" id="receipt-date"></div>
                                    </div>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-6">
                                        <div class="flex flex-col gap-3">
                                            <div class="font-semibold text-blue-700 uppercase text-sm mb-3 border-b border-blue-200 pb-2">📤 Expéditeur</div>
                                            <div class="space-y-2">
                                                <div class="flex justify-between py-2 border-b border-gray-100">
                                                    <span class="text-gray-600 text-sm">Nom:</span>
                                                    <span class="font-medium text-gray-800" id="receipt-exp-nom">-</span>
                                                </div>
                                                <div class="flex justify-between py-2 border-b border-gray-100">
                                                    <span class="text-gray-600 text-sm">Téléphone:</span>
                                                    <span class="font-medium text-gray-800" id="receipt-exp-tel">-</span>
                                                </div>
                                                <div class="flex justify-between py-2">
                                                    <span class="text-gray-600 text-sm">Email:</span>
                                                    <span class="font-medium text-gray-800" id="receipt-exp-email">-</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex flex-col gap-3">
                                            <div class="font-semibold text-blue-700 uppercase text-sm mb-3 border-b border-blue-200 pb-2">📥 Destinataire</div>
                                            <div class="space-y-2">
                                                <div class="flex justify-between py-2 border-b border-gray-100">
                                                    <span class="text-gray-600 text-sm">Nom:</span>
                                                    <span class="font-medium text-gray-800" id="receipt-dest-nom">-</span>
                                                </div>
                                                <div class="flex justify-between py-2 border-b border-gray-100">
                                                    <span class="text-gray-600 text-sm">Téléphone:</span>
                                                    <span class="font-medium text-gray-800" id="receipt-dest-tel">-</span>
                                                </div>
                                                <div class="flex justify-between py-2">
                                                    <span class="text-gray-600 text-sm">Email:</span>
                                                    <span class="font-medium text-gray-800" id="receipt-dest-email">-</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-6">
                                        <div class="font-semibold text-blue-700 uppercase text-sm mb-3 border-b border-blue-200 pb-2">📦 Détails des Colis</div>
                                        <div id="receipt-colis-details"></div>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                                        <div class="bg-gray-50 rounded-lg p-4 text-center border border-gray-200">
                                            <div class="text-sm text-gray-600 mb-1">Poids Total</div>
                                            <div class="text-lg font-bold text-blue-700" id="receipt-poids-total">-</div>
                                        </div>
                                        <div class="bg-gray-50 rounded-lg p-4 text-center border border-gray-200">
                                            <div class="text-sm text-gray-600 mb-1">Type de Cargaison</div>
                                            <div class="text-lg font-bold text-blue-700" id="receipt-type-cargaison">-</div>
                                        </div>
                                        <div class="bg-gray-50 rounded-lg p-4 text-center border border-gray-200">
                                            <div class="text-sm text-gray-600 mb-1">Délai Livraison</div>
                                            <div class="text-lg font-bold text-blue-700" id="receipt-delai">-</div>
                                        </div>
                                    </div>

                                    <div class="bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-lg p-6 text-center mb-6 shadow-lg">
                                        <div class="text-sm opacity-90 mb-1">Total Payé</div>
                                        <div class="text-3xl font-bold" id="receipt-total">-</div>
                                        <div class="text-xs opacity-90 mt-2">Montant encaissé</div>
                                    </div>

                                    <div class="text-center p-6 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-lg shadow-xl">
                                        <div class="text-sm opacity-90 mb-3">🔍 Code de Suivi</div>
                                        <div class="text-2xl font-bold tracking-widest font-mono bg-white bg-opacity-20 rounded-lg py-3 px-4" id="receipt-tracking">CG-2024-001234</div>
                                        <div class="text-xs opacity-90 mt-3">Gardez ce code pour suivre votre colis</div>
                                    </div>

                                    <div class="mt-6 pt-4 border-t-2 border-dashed border-gray-300 text-center text-xs text-gray-500">
                                        <p>📞 Service Client: +221 33 XXX XX XX | 📧 contact@GP_MONDE.sn</p>
                                        <p class="mt-1">Merci de votre confiance - GP_MONDE, votre partenaire logistique</p>
                                    </div>
                                </div>

                                <!-- Actions après confirmation -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
                                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                        <h4 class="font-semibold text-blue-800 mb-2">
                                            <i class="fas fa-sms mr-2"></i>Notification SMS
                                        </h4>
                                        <p class="text-sm text-blue-700">Le code de suivi sera automatiquement envoyé au destinataire par SMS.</p>
                                    </div>
                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                        <h4 class="font-semibold text-green-800 mb-2">
                                            <i class="fas fa-envelope mr-2"></i>Notification Email
                                        </h4>
                                        <p class="text-sm text-green-700">Un email de confirmation sera envoyé si une adresse email est fournie.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="flex justify-between items-center px-6 py-6 bg-white border border-gray-100 rounded-xl shadow-sm">
                            <button type="button" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-gray-100 text-gray-700 border-2 border-gray-200 hover:bg-gray-200 transition-colors" id="prevBtn" onclick="previousStep()" style="display: none;">
                                <i class="fas fa-arrow-left"></i>
                                Précédent
                            </button>
                            <div class="flex gap-3">
                                <button type="button" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-gray-100 text-gray-700 border-2 border-gray-200 hover:bg-gray-200 transition-colors" onclick="resetForm()">
                                    <i class="fas fa-times"></i>
                                    Annuler
                                </button>
                                <button type="button" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-blue-700 text-white hover:bg-blue-800 transition-colors shadow-lg" id="nextBtn" onclick="nextStep()">
                                    Suivant
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                                <button type="button" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-green-600 text-white hover:bg-green-700 transition-colors shadow-lg" id="printBtn" onclick="printReceipt()" style="display: none;">
                                    <i class="fas fa-print"></i>
                                    Imprimer Reçu
                                </button>
                                <button type="button" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-purple-600 text-white hover:bg-purple-700 transition-colors shadow-lg" id="newColisBtn" onclick="newColis()" style="display: none;">
                                    <i class="fas fa-plus"></i>
                                    Nouveau Colis
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <!-- <script>
        // Variables globales
        let currentStep = 1;
        let maxSteps = 4;
        let colisData = {
            expediteur: {},
            colis: [],
            destinataire: {},
            pricing: {},
            tracking: ''
        };

        // Configuration des prix
        const pricingConfig = {
            maritime: { price: 500, days: '7-10', icon: '🚢' },
            aerienne: { price: 1200, days: '2-3', icon: '✈️' },
            routiere: { price: 800, days: '4-5', icon: '🚛' }
        };

        // Initialisation
        document.addEventListener('DOMContentLoaded', function() {
            updateCurrentTime();
            setInterval(updateCurrentTime, 1000);
            generateColisInputs();
            
            // Event listeners pour la validation en temps réel
            setupValidation();
        });

        // Mise à jour de l'heure
        function updateCurrentTime() {
            const now = new Date();
            const timeString = now.toLocaleString('fr-FR', {
                year: 'numeric',
                month: '2-digit',
                day: '2-digit',
                hour: '2-digit',
                minute: '2-digit'
            });
            document.getElementById('current-time').textContent = timeString;
        }

        // Configuration de la validation
        function setupValidation() {
            const inputs = document.querySelectorAll('input[], textarea[], select[]');
            inputs.forEach(input => {
                input.addEventListener('blur', validateField);
                input.addEventListener('input', clearFieldError);
            });

            // Validation spéciale pour les téléphones
            const phoneInputs = document.querySelectorAll('input[type="tel"]');
            phoneInputs.forEach(input => {
                input.addEventListener('input', formatPhoneNumber);
            });
        }

        // Validation d'un champ
        function validateField(e) {
            const field = e.target;
            const value = field.value.trim();
            const errorElement = field.parentNode.querySelector('.form-error');
            
            let isValid = true;
            let errorMessage = '';

            if (field.hasAttribute('') && !value) {
                isValid = false;
                errorMessage = 'Ce champ est obligatoire';
            } else if (field.type === 'email' && value && !isValidEmail(value)) {
                isValid = false;
                errorMessage = 'Format d\'email invalide';
            } else if (field.type === 'tel' && value && !isValidPhoneNumber(value)) {
                isValid = false;
                errorMessage = 'Numéro de téléphone invalide';
            }

            if (errorElement) {
                if (isValid) {
                    errorElement.classList.add('hidden');
                    field.classList.remove('border-red-500');
                    field.classList.add('border-green-500');
                } else {
                    errorElement.textContent = errorMessage;
                    errorElement.classList.remove('hidden');
                    field.classList.add('border-red-500');
                    field.classList.remove('border-green-500');
                }
            }

            return isValid;
        }

        // Effacer l'erreur d'un champ
        function clearFieldError(e) {
            const field = e.target;
            const errorElement = field.parentNode.querySelector('.form-error');
            if (errorElement && !errorElement.classList.contains('hidden')) {
                field.classList.remove('border-red-500');
            }
        }

        // Validation email
        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        // Validation téléphone
        function isValidPhoneNumber(phone) {
            const phoneRegex = /^\+221\s?\d{2}\s?\d{3}\s?\d{2}\s?\d{2}$/;
            return phoneRegex.test(phone);
        }

        // Formatage du numéro de téléphone
        function formatPhoneNumber(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (!value.startsWith('221')) {
                value = '221' + value;
            }
            value = '+' + value.substring(0, 3) + ' ' + value.substring(3, 5) + ' ' + 
                    value.substring(5, 8) + ' ' + value.substring(8, 10) + ' ' + value.substring(10, 12);
            e.target.value = value.trim();
        }

        // Génération des inputs pour chaque colis
        function generateColisInputs() {
            const nombreColis = parseInt(document.querySelector('[name="nombre_colis"]').value) || 1;
            const container = document.getElementById('colis-details-container');
            
            container.innerHTML = '';
            
            for (let i = 1; i <= nombreColis; i++) {
                const colisDiv = document.createElement('div');
                colisDiv.className = 'bg-gray-50 border border-gray-200 rounded-lg p-6 mb-4';
                colisDiv.innerHTML = `
                    <div class="flex items-center gap-2 text-lg font-semibold text-gray-700 mb-4">
                        <i class="fas fa-box text-blue-600"></i>
                        Colis ${i}
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="flex flex-col">
                            <label class="font-medium text-gray-700 mb-2">Poids (kg) <span class="text-red-500">*</span></label>
                            <input type="number" step="0.1" min="0.1" max="1000" 
                                   class="border-2 border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-700 focus:ring-2 focus:ring-blue-100 transition-all" 
                                   name="colis_${i}_poids"  onchange="updatePricing()">
                            <div class="text-xs text-gray-500 mt-1">Maximum 1000 kg</div>
                        </div>
                        <div class="flex flex-col">
                            <label class="font-medium text-gray-700 mb-2">Longueur (cm)</label>
                            <input type="number" min="1" max="300" 
                                   class="border-2 border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-700 focus:ring-2 focus:ring-blue-100 transition-all" 
                                   name="colis_${i}_longueur">
                        </div>
                        <div class="flex flex-col">
                            <label class="font-medium text-gray-700 mb-2">Largeur (cm)</label>
                            <input type="number" min="1" max="300" 
                                   class="border-2 border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-700 focus:ring-2 focus:ring-blue-100 transition-all" 
                                   name="colis_${i}_largeur">
                        </div>
                        <div class="flex flex-col">
                            <label class="font-medium text-gray-700 mb-2">Hauteur (cm)</label>
                            <input type="number" min="1" max="300" 
                                   class="border-2 border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-700 focus:ring-2 focus:ring-blue-100 transition-all" 
                                   name="colis_${i}_hauteur">
                        </div>
                        <div class="flex flex-col col-span-2">
                            <label class="font-medium text-gray-700 mb-2">Description du contenu <span class="text-red-500">*</span></label>
                            <input type="text" 
                                   class="border-2 border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-700 focus:ring-2 focus:ring-blue-100 transition-all" 
                                   name="colis_${i}_description"  placeholder="Ex: Vêtements, Électronique, Documents...">
                        </div>
                    </div>
                `;
                container.appendChild(colisDiv);
            }
            
            updatePricing();
        }

        // Mise à jour du pricing
        function updatePricing() {
            const typeCargaison = document.querySelector('[name="type_cargaison"]').value;
            const nombreColis = parseInt(document.querySelector('[name="nombre_colis"]').value) || 1;
            
            if (!typeCargaison) {
                document.getElementById('pricing-summary').style.display = 'none';
                return;
            }
            
            const config = pricingConfig[typeCargaison];
            let totalWeight = 0;
            
            // Calcul du poids total
            for (let i = 1; i <= nombreColis; i++) {
                const poidsInput = document.querySelector(`[name="colis_${i}_poids"]`);
                if (poidsInput && poidsInput.value) {
                    totalWeight += parseFloat(poidsInput.value);
                }
            }
            
            const subtotal = totalWeight * config.price;
            const total = Math.max(subtotal, 10000); // Minimum 10,000 FCFA
            
            // Mise à jour de l'affichage
            document.getElementById('total-weight').textContent = totalWeight.toFixed(1) + ' kg';
            document.getElementById('price-per-kg').textContent = config.price.toLocaleString('fr-FR') + ' FCFA';
            document.getElementById('subtotal').textContent = subtotal.toLocaleString('fr-FR') + ' FCFA';
            document.getElementById('total-price').textContent = total.toLocaleString('fr-FR') + ' FCFA';
            
            document.getElementById('pricing-summary').style.display = 'block';
            
            // Sauvegarde des données de pricing
            colisData.pricing = {
                type: typeCargaison,
                totalWeight: totalWeight,
                pricePerKg: config.price,
                subtotal: subtotal,
                total: total,
                deliveryDays: config.days,
                icon: config.icon
            };
        }

        // Navigation entre les étapes
        function nextStep() {
            if (validateCurrentStep()) {
                saveCurrentStepData();
                
                if (currentStep < maxSteps) {
                    currentStep++;
                    showStep(currentStep);
                    
                    if (currentStep === 4) {
                        generateReceipt();
                    }
                }
            }
        }

        function previousStep() {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        }

        // Affichage d'une étape
        function showStep(step) {
            // Masquer toutes les étapes
            for (let i = 1; i <= maxSteps; i++) {
                document.getElementById(`step${i}`).style.display = 'none';
            }
            
            // Afficher l'étape courante
            document.getElementById(`step${step}`).style.display = 'block';
            
            // Mise à jour des indicateurs
            updateStepIndicators(step);
            
            // Mise à jour des boutons
            updateButtons(step);
        }

        // Mise à jour des indicateurs d'étape
        function updateStepIndicators(step) {
            for (let i = 1; i <= maxSteps; i++) {
                const indicator = document.getElementById(`step-indicator-${i}`);
                const circle = indicator.querySelector('div');
                const text = indicator.querySelector('div:last-child');
                const progress = document.getElementById(`progress-${i}-${i + 1}`);
                
                if (i < step) {
                    // Étape terminée
                    circle.className = 'w-10 h-10 rounded-full flex items-center justify-center font-semibold text-sm bg-green-600 text-white';
                    circle.innerHTML = '<i class="fas fa-check"></i>';
                    text.className = 'font-medium text-sm text-green-600';
                    if (progress) progress.className = 'w-16 h-0.5 bg-green-600 mx-4';
                } else if (i === step) {
                    // Étape courante
                    circle.className = 'w-10 h-10 rounded-full flex items-center justify-center font-semibold text-sm bg-blue-700 text-white';
                    circle.textContent = i;
                    text.className = 'font-medium text-sm text-blue-700';
                } else {
                    // Étape future
                    circle.className = 'w-10 h-10 rounded-full flex items-center justify-center font-semibold text-sm bg-gray-200 text-gray-400';
                    circle.textContent = i;
                    text.className = 'font-medium text-sm text-gray-400';
                    if (progress) progress.className = 'w-16 h-0.5 bg-gray-200 mx-4';
                }
            }
        }

        // Mise à jour des boutons
        function updateButtons(step) {
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const printBtn = document.getElementById('printBtn');
            const newColisBtn = document.getElementById('newColisBtn');
            
            if (step === 1) {
                prevBtn.style.display = 'none';
                nextBtn.style.display = 'inline-flex';
                printBtn.style.display = 'none';
                newColisBtn.style.display = 'none';
            } else if (step === maxSteps) {
                prevBtn.style.display = 'inline-flex';
                nextBtn.style.display = 'none';
                printBtn.style.display = 'inline-flex';
                newColisBtn.style.display = 'inline-flex';
            } else {
                prevBtn.style.display = 'inline-flex';
                nextBtn.style.display = 'inline-flex';
                printBtn.style.display = 'none';
                newColisBtn.style.display = 'none';
            }
        }

        // Validation de l'étape courante
        function validateCurrentStep() {
            const currentStepElement = document.getElementById(`step${currentStep}`);
            const Fields = currentStepElement.querySelectorAll('[]');
            let isValid = true;
            
            Fields.forEach(field => {
                if (!validateField({ target: field })) {
                    isValid = false;
                }
            });
            
            // Validation spéciale pour l'étape 2
            if (currentStep === 2) {
                const typeCargaison = document.querySelector('[name="type_cargaison"]').value;
                if (!typeCargaison) {
                    showNotification('Veuillez sélectionner un type de cargaison', 'error');
                    isValid = false;
                }
                
                const nombreColis = parseInt(document.querySelector('[name="nombre_colis"]').value);
                let hasValidWeight = false;
                
                for (let i = 1; i <= nombreColis; i++) {
                    const poidsInput = document.querySelector(`[name="colis_${i}_poids"]`);
                    if (poidsInput && poidsInput.value && parseFloat(poidsInput.value) > 0) {
                        hasValidWeight = true;
                    }
                }
                
                if (!hasValidWeight) {
                    showNotification('Veuillez saisir au moins un poids valide', 'error');
                    isValid = false;
                }
            }
            
            if (!isValid) {
                showNotification('Veuillez corriger les erreurs avant de continuer', 'error');
            }
            
            return isValid;
        }

        // Sauvegarde des données de l'étape courante
        function saveCurrentStepData() {
            const currentStepElement = document.getElementById(`step${currentStep}`);
            const inputs = currentStepElement.querySelectorAll('input, textarea, select');
            
            inputs.forEach(input => {
                const name = input.name;
                const value = input.value;
                
                if (name.startsWith('expediteur_')) {
                    colisData.expediteur[name.replace('expediteur_', '')] = value;
                } else if (name.startsWith('destinataire_')) {
                    colisData.destinataire[name.replace('destinataire_', '')] = value;
                } else if (name.startsWith('colis_')) {
                    const matches = name.match(/colis_(\d+)_(.+)/);
                    if (matches) {
                        const colisIndex = parseInt(matches[1]) - 1;
                        const field = matches[2];
                        
                        if (!colisData.colis[colisIndex]) {
                            colisData.colis[colisIndex] = {};
                        }
                        colisData.colis[colisIndex][field] = value;
                    }
                } else {
                    colisData[name] = value;
                }
            });
        }

        // Génération du reçu
        function generateReceipt() {
            // Génération du code de suivi
            const now = new Date();
            const year = now.getFullYear();
            const trackingNumber = `CG-${year}-${String(Math.floor(Math.random() * 999999) + 100000)}`;
            colisData.tracking = trackingNumber;
            
            // Mise à jour de la date
            document.getElementById('receipt-date').textContent = now.toLocaleDateString('fr-FR', {
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            });
            
            // Informations expéditeur
            document.getElementById('receipt-exp-nom').textContent = 
                `${colisData.expediteur.prenom} ${colisData.expediteur.nom}`;
            document.getElementById('receipt-exp-tel').textContent = colisData.expediteur.telephone || '-';
            document.getElementById('receipt-exp-email').textContent = colisData.expediteur.email || '-';
            
            // Informations destinataire
            document.getElementById('receipt-dest-nom').textContent = 
                `${colisData.destinataire.prenom} ${colisData.destinataire.nom}`;
            document.getElementById('receipt-dest-tel').textContent = colisData.destinataire.telephone || '-';
            document.getElementById('receipt-dest-email').textContent = colisData.destinataire.email || '-';
            
            // Détails des colis
            const colisDetailsContainer = document.getElementById('receipt-colis-details');
            colisDetailsContainer.innerHTML = '';
            
            colisData.colis.forEach((colis, index) => {
                if (colis.poids) {
                    const colisDiv = document.createElement('div');
                    colisDiv.className = 'bg-gray-50 rounded-lg p-3 mb-2 border border-gray-200';
                    colisDiv.innerHTML = `
                        <div class="flex justify-between items-center">
                            <span class="font-medium text-gray-700">Colis ${index + 1}</span>
                            <span class="text-sm text-gray-600">${colis.poids} kg</span>
                        </div>
                        <div class="text-xs text-gray-600 mt-1">${colis.description || 'Description non fournie'}</div>
                        ${colis.longueur || colis.largeur || colis.hauteur ? 
                            `<div class="text-xs text-gray-500 mt-1">
                                Dimensions: ${colis.longueur || '-'} × ${colis.largeur || '-'} × ${colis.hauteur || '-'} cm
                            </div>` : ''}
                    `;
                    colisDetailsContainer.appendChild(colisDiv);
                }
            });
            
            // Informations de pricing
            document.getElementById('receipt-poids-total').textContent = 
                colisData.pricing.totalWeight.toFixed(1) + ' kg';
            document.getElementById('receipt-type-cargaison').textContent = 
                `${colisData.pricing.icon} ${colisData.pricing.type.charAt(0).toUpperCase() + colisData.pricing.type.slice(1)}`;
            document.getElementById('receipt-delai').textContent = 
                colisData.pricing.deliveryDays + ' jours';
            document.getElementById('receipt-total').textContent = 
                colisData.pricing.total.toLocaleString('fr-FR') + ' FCFA';
            
            // Code de suivi
            document.getElementById('receipt-tracking').textContent = trackingNumber;
            
            showNotification('Reçu généré avec succès!', 'success');
        }

        // Impression du reçu
        function printReceipt() {
            window.print();
        }

        // Nouveau colis
        function newColis() {
            if (confirm('Êtes-vous sûr de vouloir créer un nouveau colis ? Toutes les données actuelles seront perdues.')) {
                resetForm();
                showNotification('Prêt pour un nouveau colis', 'info');
            }
        }

        // Remise à zéro du formulaire
        function resetForm() {
            document.getElementById('colisForm').reset();
            colisData = {
                expediteur: {},
                colis: [],
                destinataire: {},
                pricing: {},
                tracking: ''
            };
            currentStep = 1;
            showStep(1);
            generateColisInputs();
            document.getElementById('pricing-summary').style.display = 'none';
        }

        // Affichage des notifications
        function showNotification(message, type = 'info') {
            const notificationArea = document.getElementById('notification-area');
            
            const colors = {
                success: 'bg-green-100 border-green-300 text-green-800',
                error: 'bg-red-100 border-red-300 text-red-800',
                warning: 'bg-yellow-100 border-yellow-300 text-yellow-800',
                info: 'bg-blue-100 border-blue-300 text-blue-800'
            };
            
            const icons = {
                success: 'fas fa-check-circle',
                error: 'fas fa-exclamation-triangle',
                warning: 'fas fa-exclamation-circle',
                info: 'fas fa-info-circle'
            };
            
            const notification = document.createElement('div');
            notification.className = `notification ${colors[type]} border rounded-lg p-4 mb-3 shadow-lg max-w-sm`;
            notification.innerHTML = `
                <div class="flex items-center gap-3">
                    <i class="${icons[type]} text-lg"></i>
                    <span class="font-medium">${message}</span>
                    <button onclick="this.parentElement.parentElement.remove()" class="ml-auto">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            `;
            
            notificationArea.appendChild(notification);
            
            // Animation d'entrée
            setTimeout(() => {
                notification.classList.add('show');
            }, 10);
            
            // Suppression automatique après 5 secondes
            setTimeout(() => {
                if (notification.parentElement) {
                    notification.remove();
                }
            }, 5000);
        } -->