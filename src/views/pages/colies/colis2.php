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

<div class="p-4 sm:ml-64">
    <div class="p-4 rounded-lg mt-14">
        <h2 class="text-2xl font-bold mb-4">Création d’un colis</h2>

        <form method="POST" action="traitement_colis.php" id="colisForm">
            <!-- Étape 1 -->
            <div class="etape" id="etape-1">
                <h3 class="text-xl font-semibold mb-2">Informations générales</h3>

                <label class="block mb-2">Numéro de suivi :</label>
                <input type="text" name="numero_suivi" class="border rounded w-full p-2 mb-4">

                <label class="block mb-2">Nom du destinataire :</label>
                <input type="text" name="nom_destinataire" class="border rounded w-full p-2 mb-4">

                <label class="block mb-2">Adresse :</label>
                <input type="text" name="adresse" class="border rounded w-full p-2 mb-4">

                <button type="button" onclick="suivant()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Suivant
                </button>
            </div>

            <!-- Étape 2 -->
            <div class="etape hidden" id="etape-2">
                <h3 class="text-xl font-semibold mb-2">Informations sur le contenu</h3>

                <label class="block mb-2">Type de produit :</label>
                <input type="text" name="type_produit" class="border rounded w-full p-2 mb-4">

                <label class="block mb-2">Poids :</label>
                <input type="number" name="poids" class="border rounded w-full p-2 mb-4">

                <button type="button" onclick="precedent()" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded mr-2">
                    Précédent
                </button>
                <button type="button" onclick="suivant()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Suivant
                </button>
            </div>

            <!-- Étape 3 -->
            <div class="etape hidden" id="etape-3">
                <h3 class="text-xl font-semibold mb-2">Confirmation</h3>
                <p>Vérifiez les informations et soumettez le formulaire.</p>

                <button type="button" onclick="precedent()" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded mr-2">
                    Précédent
                </button>
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Valider
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    let etapeActuelle = 1;
    const totalEtapes = 3;

    function afficherEtape(numero) {
        for (let i = 1; i <= totalEtapes; i++) {
            const div = document.getElementById(`etape-${i}`);
            if (i === numero) {
                div.classList.remove('hidden');
            } else {
                div.classList.add('hidden');
            }
        }
    }

    function suivant() {
        if (etapeActuelle < totalEtapes) {
            etapeActuelle++;
            afficherEtape(etapeActuelle);
        }
    }

    function precedent() {
        if (etapeActuelle > 1) {
            etapeActuelle--;
            afficherEtape(etapeActuelle);
        }
    }

    window.onload = () => {
        afficherEtape(etapeActuelle);
    };
</script>
