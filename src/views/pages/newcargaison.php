<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouvelle Cargaison</title>
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
                <a href="/dashboard" class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-700 border-r-4 border-transparent transition-all">
                    <i class="fas fa-home w-5 text-center"></i>
                    <span>Dashboard</span>
                </a>
                <a href="/cargaisons" class="flex items-center gap-3 px-6 py-3 text-blue-700 bg-blue-50 border-r-4 border-blue-700 font-semibold">
                    <i class="fas fa-ship w-5 text-center"></i>
                    <span>Cargaisons</span>
                </a>
                <a href="/colis" class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-700 border-r-4 border-transparent transition-all">
                    <i class="fas fa-box w-5 text-center"></i>
                    <span>Colis</span>
                </a>
                <a href="/clients" class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-700 border-r-4 border-transparent transition-all">
                    <i class="fas fa-users w-5 text-center"></i>
                    <span>Clients</span>
                </a>
                <a href="/suivi" class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-700 border-r-4 border-transparent transition-all">
                    <i class="fas fa-search w-5 text-center"></i>
                    <span>Suivi Colis</span>
                </a>
                <a href="/rapports" class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-700 border-r-4 border-transparent transition-all">
                    <i class="fas fa-chart-bar w-5 text-center"></i>
                    <span>Rapports</span>
                </a>
                <a href="/parametres" class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-700 border-r-4 border-transparent transition-all">
                    <i class="fas fa-cog w-5 text-center"></i>
                    <span>Paramètres</span>
                </a>
                <div class="mt-auto mb-6 px-6">
                    <form method="post" action="/login">
                        <button type="submit" class="w-full mt-[100px] flex items-center gap-3 px-4 py-3 bg-blue-50 hover:bg-blue-100 text-blue-700 font-semibold rounded-lg transition">
                            <i class="fas fa-sign-out-alt w-5 text-center"></i>
                            <span>Déconnexion</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-1 ml-[280px] flex flex-col">
            <header class="bg-white border-b border-gray-200 px-6 py-4 flex justify-between items-center shadow-sm">
                <h1 class="text-xl font-semibold text-gray-800">Nouvelle Cargaison</h1>
                <div>
                    <a href="/cargaisons" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-gray-50 text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white">
                        <i class="fas fa-arrow-left"></i>
                        Retour à la liste
                    </a>
                </div>
            </header>
            <div class="flex-1 p-6 overflow-y-auto bg-gray-50">
                <form id="cargaisonForm" method="post" action="" class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow space-y-6">
                    <div>
                        <label for="type" class="block mb-2 font-medium">Type de cargaison</label>
                        <select id="type" name="type"  class="w-full border rounded px-4 py-2">
                            <option value="">Sélectionnez...</option>
                            <option value="maritime">Maritime</option>
                            <option value="aerienne">Aérienne</option>
                            <option value="routiere">Routière</option>
                        </select>
                    </div>
                    <div>
                        <label for="lieuDepart" class="block mb-2 font-medium">Lieu de départ</label>
                        <input type="text" id="lieuDepart" name="lieuDepart"  class="w-full border rounded px-4 py-2">
                    </div>
                    <div>
                        <label for="lieuArrive" class="block mb-2 font-medium">Lieu d'arrivée</label>
                        <input type="text" id="lieuArrive" name="lieuArrive"  class="w-full border rounded px-4 py-2">
                    </div>
                    <div>
                        <label for="dateDepart" class="block mb-2 font-medium">Date de départ</label>
                        <input type="date" id="dateDepart" name="dateDepart"  class="w-full border rounded px-4 py-2">
                    </div>
                    <div>
                        <label for="dateArrive" class="block mb-2 font-medium">Date d'arrivée</label>
                        <input type="date" id="dateArrive" name="dateArrive"  class="w-full border rounded px-4 py-2">
                    </div>
                    <div>
                        <label for="poidsMax" class="block mb-2 font-medium">Poids max (kg)</label>
                        <input type="number" id="poidsMax" name="poidsMax"  min="1" class="w-full border rounded px-4 py-2">
                    </div>
                    <div>
                        <label for="distance" class="block mb-2 font-medium">Distance (km)</label>
                        <input type="number" id="distance" name="distance"  min="1" class="w-full border rounded px-4 py-2">
                    </div>
                    <button type="submit" class="w-full bg-blue-900 text-white py-3 rounded font-semibold">Créer</button>
                    <div id="cargaisonMessage" class="mt-4 text-center text-red-600 font-semibold"></div>
                </form>
            </div>
        </main>
    </div>
    <script>
    /* document.getElementById('cargaisonForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const data = {
            type: document.getElementById('type').value,
            lieuDepart: document.getElementById('lieuDepart').value,
            lieuArrive: document.getElementById('lieuArrive').value,
            dateDepart: document.getElementById('dateDepart').value,
            dateArrive: document.getElementById('dateArrive').value,
            poidsMax: document.getElementById('poidsMax').value,
            distance: document.getElementById('distance').value
        };
        // À adapter selon ton backend
        fetch('/api/cargaisons', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(data)
        })
        .then(res => res.json())
        .then(result => {
            const msg = document.getElementById('cargaisonMessage');
            if(result.success) {
                msg.textContent = "Cargaison créée avec succès !";
                msg.style.color = "green";
                document.getElementById('cargaisonForm').reset();
            } else {
                msg.textContent = result.message || "Erreur lors de la création.";
                msg.style.color = "red";
            }
        });
    }); */
    </script>
</body>
<script src="/dist/controllers/CargaisonController.js"></script>

</html>