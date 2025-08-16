<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GP_MONDE - Informations Destinataire</title>
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
                    <h1 class="text-xl font-semibold text-gray-800">Enregistrement de Colis - Étape 3/4</h1>
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <a href="/dashboard" class="text-blue-700 hover:underline">Dashboard</a>
                        <i class="fas fa-chevron-right"></i>
                        <a href="/colis" class="text-blue-700 hover:underline">Colis</a>
                        <i class="fas fa-chevron-right"></i>
                        <span>Nouveau - Étape 3</span>
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
                            <div class="w-10 h-10 rounded-full flex items-center justify-center font-semibold text-sm bg-green-600 text-white">✓</div>
                            <div class="font-medium text-sm text-green-600">Détails Colis</div>
                        </div>
                        <div class="w-16 h-0.5 bg-green-600 mx-4"></div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center font-semibold text-sm bg-blue-700 text-white">3</div>
                            <div class="font-medium text-sm text-blue-700">Destinataire</div>
                        </div>
                        <div class="w-16 h-0.5 bg-gray-200 mx-4"></div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center font-semibold text-sm bg-gray-200 text-gray-400">4</div>
                            <div class="font-medium text-sm text-gray-400">Confirmation</div>
                        </div>
                    </div>

                    <!-- Informations Destinataire -->
                    <form id="destinataireForm">
                        <div class="bg-white rounded-xl shadow-md border border-gray-100 mb-6">
                            <div class="px-6 py-6 border-b border-gray-100">
                                <div class="flex items-center gap-3 text-lg font-semibold text-gray-800">
                                    <i class="fas fa-user-tag"></i>
                                    Informations du Destinataire
                                </div>
                                <div class="text-sm text-gray-500 mt-2">
                                    Saisissez les informations de la personne qui recevra le colis
                                </div>
                            </div>
                            <div class="px-6 py-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="flex flex-col">
                                        <label class="font-medium text-gray-700 mb-2">Nom <span class="text-red-500">*</span></label>
                                        <input type="text" class="border-2 border-gray-200 rounded-lg px-3 py-2 focus:outline-none focus:border-blue-700 transition-colors" name="destinataire_nom" >
                                        <div class="text-xs text-red-500 mt-1 hidden" id="nom-error">Ce champ est obligatoire</div>
                                    </div>
                                    
                                    <div class="flex flex-col">
                                        <label class="font-medium text-gray-700 mb-2">Prénom <span class="text-red-500">*</span></label>
                                        <input type="text" class="border-2 border-gray-200 rounded-lg px-3 py-2 focus:outline-none focus:border-blue-700 transition-colors" name="destinataire_prenom" >
                                        <div class="text-xs text-red-500 mt-1 hidden" id="prenom-error">Ce champ est obligatoire</div>
                                    </div>
                                    
                                    <div class="flex flex-col">
                                        <label class="font-medium text-gray-700 mb-2">Téléphone <span class="text-red-500">*</span></label>
                                        <input type="tel" class="border-2 border-gray-200 rounded-lg px-3 py-2 focus:outline-none focus:border-blue-700 transition-colors" name="destinataire_telephone" >
                                        <div class="text-xs text-gray-500 mt-1">Le destinataire recevra le code de suivi par SMS</div>
                                        <div class="text-xs text-red-500 mt-1 hidden" id="telephone-error">Numéro de téléphone invalide</div>
                                    </div>
                                    
                                    <div class="flex flex-col">
                                        <label class="font-medium text-gray-700 mb-2">Email</label>
                                        <input type="email" class="border-2 border-gray-200 rounded-lg px-3 py-2 focus:outline-none focus:border-blue-700 transition-colors" name="destinataire_email">
                                        <div class="text-xs text-gray-500 mt-1">Optionnel - pour les notifications par email</div>
                                        <div class="text-xs text-red-500 mt-1 hidden" id="email-error">Adresse email invalide</div>
                                    </div>
                                    
                                    <div class="flex flex-col col-span-1 md:col-span-2">
                                        <label class="font-medium text-gray-700 mb-2">Adresse de Livraison <span class="text-red-500">*</span></label>
                                        <textarea class="border-2 border-gray-200 rounded-lg px-3 py-2 focus:outline-none focus:border-blue-700 min-h-[100px] transition-colors" name="destinataire_adresse" ></textarea>
                                        <div class="text-xs text-gray-500 mt-1">Adresse complète où le destinataire récupérera le colis</div>
                                        <div class="text-xs text-red-500 mt-1 hidden" id="adresse-error">Ce champ est obligatoire</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sélection de Cargaison -->
                        <div class="bg-white rounded-xl shadow-md border border-gray-100 mb-6">
                            <div class="px-6 py-6 border-b border-gray-100">
                                <div class="flex items-center gap-3 text-lg font-semibold text-gray-800">
                                    <i class="fas fa-ship"></i>
                                    Cargaisons Disponibles
                                </div>
                                <div class="text-sm text-gray-500 mt-2">
                                    Sélectionnez la cargaison qui transportera le colis
                                </div>
                            </div>
                            <div class="px-6 py-6">
                                <div class="grid gap-4" id="cargaisonList">
                                    <!-- Loading state -->
                                    <div class="text-center py-8" id="loadingCargaisons">
                                        <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-blue-700"></div>
                                        <div class="mt-2 text-gray-500">Chargement des cargaisons...</div>
                                    </div>
                                </div>
                                <div class="text-xs text-red-500 mt-1 hidden" id="cargaison-error">Veuillez sélectionner une cargaison</div>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="flex justify-between items-center px-6 py-6 bg-white border-t border-gray-100 rounded-b-xl shadow-md">
                            <button type="button" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-gray-50 text-gray-800 border-2 border-gray-200 hover:bg-white hover:border-blue-700 transition-colors" onclick="window.location.href='details'">
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
        /*  let selectedCargaison = null;

        function loadAvailableCargaisons() {
            const typeCargaison = window.colisData ? window.colisData.type_cargaison : null;
            const cargaisonList = document.getElementById('cargaisonList');
            
            if (!typeCargaison) {
                cargaisonList.innerHTML = '<div class="text-center py-8 text-gray-500">Aucune information de cargaison disponible</div>';
                return;
            }

            // Simuler un chargement dynamique
           setTimeout(() => {
                // Données simulées basées sur le type de cargaison
                let cargaisons = [];
                
                if (typeCargaison === 'maritime') {
                    cargaisons = [
                        { 
                            id: 'MAR001', 
                            nom: 'Dakar Express', 
                            type: 'Maritime', 
                            trajet: 'Dakar → Paris',
                            depart: '15 Déc 2024',
                            arrivee: '20 Déc 2024',
                            duree: '5 jours',
                            statut: 'Ouvert',
                            capacite: '85%'
                        },
                        { 
                            id: 'MAR002', 
                            nom: 'Atlantic Cargo', 
                            type: 'Maritime', 
                            trajet: 'Dakar → Marseille',
                            depart: '18 Déc 2024',
                            arrivee: '24 Déc 2024',
                            duree: '6 jours',
                            statut: 'Ouvert',
                            capacite: '62%'
                        }
                    ];
                } else if (typeCargaison === 'aerienne') {
                    cargaisons = [
                        { 
                            id: 'AER001', 
                            nom: 'Air Senegal Cargo', 
                            type: 'Aérienne', 
                            trajet: 'Dakar → Paris CDG',
                            depart: '12 Déc 2024',
                            arrivee: '12 Déc 2024',
                            duree: '6h',
                            statut: 'Ouvert',
                            capacite: '45%'
                        },
                        { 
                            id: 'AER002', 
                            nom: 'Express Airways', 
                            type: 'Aérienne', 
                            trajet: 'Dakar → Lyon',
                            depart: '13 Déc 2024',
                            arrivee: '13 Déc 2024',
                            duree: '7h',
                            statut: 'Ouvert',
                            capacite: '38%'
                        }
                    ];
                } else if (typeCargaison === 'routiere') {
                    cargaisons = [
                        { 
                            id: 'ROU001', 
                            nom: 'Trans-Sah */