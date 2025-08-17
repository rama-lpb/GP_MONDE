<?php
$code = $_GET['code'] ?? '';
$jsonFile = __DIR__ . '/../../../public/data/cargaison.json';
$cargaisons = [];
$cargaison = null;
if (file_exists($jsonFile)) {
    $cargaisons = json_decode(file_get_contents($jsonFile), true) ?: [];
    foreach ($cargaisons as $c) {
        if ($c['codeCargaison'] === $code) {
            $cargaison = $c;
            break;
        }
    }
}
if (!$cargaison) {
    echo "<div class='p-8 text-center text-red-600 font-bold'>Cargaison introuvable</div>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la Cargaison</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-50 text-gray-900">
<div class="flex min-h-screen">
    <!-- Sidebar (identique à tes autres pages) -->
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
            <h1 class="text-xl font-semibold text-gray-800">Détails de la Cargaison</h1>
            <div class="flex gap-2">
                <a href="/cargaisons" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-gray-50 text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white">
                    <i class="fas fa-arrow-left"></i>
                    Retour à la liste
                </a>
                <a href="/cargaisons/edit?code=<?= urlencode($cargaison['codeCargaison']) ?>"
                   class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-yellow-50 text-yellow-700 border border-yellow-700 hover:bg-yellow-700 hover:text-white">
                    <i class="fas fa-edit"></i>
                    Modifier
                </a>
            </div>
        </header>
        <div class="flex-1 p-8 bg-gray-50">
            <div class="max-w-2xl mx-auto bg-white rounded-xl shadow p-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-8"><?= htmlspecialchars($cargaison['codeCargaison']) ?></h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <div>
                        <div class="font-medium text-gray-700 mb-1">Type</div>
                        <div class="text-blue-700 font-semibold mb-4"><?= ucfirst($cargaison['typeCargaison']) ?></div>
                        <div class="font-medium text-gray-700 mb-1">Trajet</div>
                        <div class="mb-4"><?= htmlspecialchars($cargaison['lieuDepart']) ?> → <?= htmlspecialchars($cargaison['lieuArrive']) ?></div>
                        <div class="font-medium text-gray-700 mb-1">Distance</div>
                        <div class="mb-4"><?= htmlspecialchars($cargaison['distance']) ?> km</div>
                        <div class="font-medium text-gray-700 mb-1">Poids max</div>
                        <div class="mb-4"><?= htmlspecialchars($cargaison['poidsMax']) ?> kg</div>
                    </div>
                    <div>
                        <div class="font-medium text-gray-700 mb-1">Date de départ</div>
                        <div class="mb-4"><?= htmlspecialchars($cargaison['dateDepart']) ?></div>
                        <div class="font-medium text-gray-700 mb-1">Date d'arrivée</div>
                        <div class="mb-4"><?= htmlspecialchars($cargaison['dateArrive']) ?></div>
                        <div class="font-medium text-gray-700 mb-1">État global</div>
                        <div class="mb-4"><?= ucfirst($cargaison['etatGlobal']) ?></div>
                        <div class="font-medium text-gray-700 mb-1">Avancement</div>
                        <div class="mb-4"><?= ucfirst($cargaison['etatAvancement']) ?></div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="font-medium text-gray-700 mb-1">Nombre de colis</div>
                    <div><?= count($cargaison['colis']) ?> colis</div>
                </div>
                <div class="mb-6">
                    <div class="font-medium text-gray-700 mb-1">Montant total</div>
                    <div><?= number_format($cargaison['montantTotal'], 0, ',', ' ') ?> FCFA</div>
                </div>
                <!-- Tu peux ajouter ici la liste des colis si besoin -->
            </div>
        </div>
    </main>
</div>
</body>
</html>