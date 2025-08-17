<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GP_MONDE - Gestion des Cargaisons</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Tailwind CSS -->
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
                    <a href="/cargaisons" class="flex items-center gap-3 px-6 py-3 text-blue-700 bg-blue-50 border-r-4 border-blue-700 font-semibold">
                        <i class="fas fa-ship w-5 text-center"></i>
                        <span>Cargaisons</span>
                    </a>
                </div>
                <div class="mb-1">
                    <a href="/colis" class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-700 border-r-4 border-transparent transition-all">
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
                <h1 class="text-xl font-semibold text-gray-800">Gestion des Cargaisons</h1>
                <div>
                    <a href="/cargaisons/new" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-blue-700 text-white hover:bg-blue-800">
                        <i class="fas fa-plus"></i>
                        Nouvelle Cargaison
                    </a>
                </div>
            </header>

            <!-- Content Area -->
            <div class="flex-1 p-6 overflow-y-auto bg-gray-50">
                <!-- Filters Section -->
                <div class="bg-white rounded-xl shadow-md border border-gray-100 mb-6 p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Filtres de Recherche</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-4 mb-4">
                        <div class="flex flex-col">
                            <label class="text-sm font-medium text-gray-500 mb-2">Numéro de Cargaison</label>
                            <input type="text" class="filter-numero border border-gray-300 rounded-lg px-3 py-2" placeholder="Ex: MAR-2024-001">
                        </div>
                        <div class="flex flex-col">
                            <label class="text-sm font-medium text-gray-500 mb-2">Type de Cargaison</label>
                            <select class="filter-type border border-gray-300 rounded-lg px-3 py-2">
                                <option value="">Tous les types</option>
                                <option value="maritime">Maritime</option>
                                <option value="aerienne">Aérienne</option>
                                <option value="routiere">Routière</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label class="text-sm font-medium text-gray-500 mb-2">État Global</label>
                            <select class="filter-etat-global border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-blue-700">
                                <option value="">Tous les états</option>
                                <option value="ouvert">Ouvert</option>
                                <option value="ferme">Fermé</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label class="text-sm font-medium text-gray-500 mb-2">État d'Avancement</label>
                            <select class="filter-etat-avancement border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-blue-700">
                                <option value="">Tous</option>
                                <option value="en-attente">En Attente</option>
                                <option value="en-cours">En Cours</option>
                                <option value="arrive">Arrivé</option>
                                <option value="termine">Terminé</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label class="text-sm font-medium text-gray-500 mb-2">Lieu de Départ</label>
                            <input type="text" class="filter-lieu-depart border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-blue-700" placeholder="Ex: Dakar">
                        </div>
                        <div class="flex flex-col">
                            <label class="text-sm font-medium text-gray-500 mb-2">Lieu d'Arrivée</label>
                            <input type="text" class="filter-lieu-arrive border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-blue-700" placeholder="Ex: Paris">
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <button class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-blue-700 text-white hover:bg-blue-800" onclick="applyFilters()">
                            <i class="fas fa-search"></i>
                            Rechercher
                        </button>
                        <button class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-gray-50 text-gray-800 border border-gray-300 hover:bg-white hover:border-blue-700" onclick="resetFilters()">
                            <i class="fas fa-times"></i>
                            Réinitialiser
                        </button>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden">
                    <div class="px-6 py-6 border-b border-gray-100 flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-gray-800">Liste des Cargaisons</h3>
                        <div>
                            <button class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-transparent text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white">
                                <i class="fas fa-download"></i>
                                Exporter
                            </button>
                        </div>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full border-collapse data-table">
                            <thead>
                                <tr>
                                    <th class="bg-gray-50 font-semibold text-xs text-gray-500 uppercase px-6 py-4 border-b border-gray-100">Numéro</th>
                                    <th class="bg-gray-50 font-semibold text-xs text-gray-500 uppercase px-6 py-4 border-b border-gray-100">Type</th>
                                    <th class="bg-gray-50 font-semibold text-xs text-gray-500 uppercase px-6 py-4 border-b border-gray-100">Trajet</th>
                                    <th class="bg-gray-50 font-semibold text-xs text-gray-500 uppercase px-6 py-4 border-b border-gray-100">Poids</th>
                                    <th class="bg-gray-50 font-semibold text-xs text-gray-500 uppercase px-6 py-4 border-b border-gray-100">Colis</th>
                                    <th class="bg-gray-50 font-semibold text-xs text-gray-500 uppercase px-6 py-4 border-b border-gray-100">Prix Total</th>
                                    <th class="bg-gray-50 font-semibold text-xs text-gray-500 uppercase px-6 py-4 border-b border-gray-100">État Global</th>
                                    <th class="bg-gray-50 font-semibold text-xs text-gray-500 uppercase px-6 py-4 border-b border-gray-100">Avancement</th>
                                    <th class="bg-gray-50 font-semibold text-xs text-gray-500 uppercase px-6 py-4 border-b border-gray-100">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
$jsonFile = __DIR__ . '/../../../public/data/cargaison.json';
$cargaisons = [];
if (file_exists($jsonFile)) {
    $cargaisons = json_decode(file_get_contents($jsonFile), true) ?: [];
}
?>
<?php foreach ($cargaisons as $cargaison): ?>
    <tr class="hover:bg-gray-50"
        data-numero="<?= htmlspecialchars($cargaison['codeCargaison']) ?>"
        data-type="<?= htmlspecialchars($cargaison['typeCargaison']) ?>"
        data-etat-global="<?= htmlspecialchars($cargaison['etatGlobal']) ?>"
        data-etat-avancement="<?= htmlspecialchars($cargaison['etatAvancement']) ?>"
        data-lieu-depart="<?= htmlspecialchars($cargaison['lieuDepart']) ?>"
        data-lieu-arrive="<?= htmlspecialchars($cargaison['lieuArrive']) ?>"
    >
        <td class="px-6 py-4 border-b border-gray-100"><?= htmlspecialchars($cargaison['codeCargaison']) ?></td>
        <td class="px-6 py-4 border-b border-gray-100">
            <span class="inline-flex items-center gap-1 px-2 py-1 rounded bg-blue-100 text-blue-600 text-xs font-semibold">
                <?php if ($cargaison['typeCargaison'] === 'maritime'): ?>
                    <i class="fas fa-ship"></i> Maritime
                <?php elseif ($cargaison['typeCargaison'] === 'aerienne'): ?>
                    <i class="fas fa-plane"></i> Aérienne
                <?php else: ?>
                    <i class="fas fa-truck"></i> Routière
                <?php endif; ?>
            </span>
        </td>
        <td class="px-6 py-4 border-b border-gray-100">
            <div>
                <?= htmlspecialchars($cargaison['lieuDepart']) ?> → <?= htmlspecialchars($cargaison['lieuArrive']) ?><br>
                <small class="text-gray-500"><?= htmlspecialchars($cargaison['distance']) ?> km</small>
            </div>
        </td>
        <td class="px-6 py-4 border-b border-gray-100">
            <div>
                0 kg<br>
                <small class="text-gray-500">/ <?= htmlspecialchars($cargaison['poidsMax']) ?> kg</small>
            </div>
        </td>
        <td class="px-6 py-4 border-b border-gray-100">
            <?= count($cargaison['colis']) ?> colis
        </td>
        <td class="px-6 py-4 border-b border-gray-100">
            <?= number_format($cargaison['montantTotal'], 0, ',', ' ') ?> FCFA
        </td>
        <td class="px-6 py-4 border-b border-gray-100">
            <span class="inline-flex items-center gap-1 px-2 py-1 rounded bg-<?= $cargaison['etatGlobal'] === 'ouvert' ? 'green-100 text-green-600' : 'red-100 text-red-400' ?> text-xs font-semibold">
                <i class="fas fa-<?= $cargaison['etatGlobal'] === 'ouvert' ? 'unlock' : 'lock' ?>"></i>
                <?= ucfirst($cargaison['etatGlobal']) ?>
            </span>
        </td>
        <td class="px-6 py-4 border-b border-gray-100">
            <span class="inline-flex items-center gap-1 px-2 py-1 rounded bg-gray-100 text-blue-700 text-xs font-semibold">
                <i class="fas fa-clock"></i>
                <?= ucfirst($cargaison['etatAvancement']) ?>
            </span>
        </td>
        <td class="px-6 py-4 border-b border-gray-100">
            <div class="relative">
        <button class="flex items-center justify-center w-6 h-6" aria-label="Actions"
            onclick="toggleActionsMenu('actions-<?= htmlspecialchars($cargaison['codeCargaison']) ?>')">
            <i class="fas fa-ellipsis-v text-gray-400"></i>
        </button>
        <div id="actions-<?= htmlspecialchars($cargaison['codeCargaison']) ?>"
            class="absolute right-0 top-7 z-10 hidden flex-col min-w-[120px] bg-white border border-gray-200 rounded shadow-lg">
            <button class="flex items-center gap-2 px-4 py-2 text-xs text-gray-700 hover:bg-gray-50 w-full text-left" onclick="window.location.href='/cargaisons/details?code=<?= htmlspecialchars($cargaison['codeCargaison']) ?>'">
                <i class="fas fa-eye text-gray-500"></i>
                Détails
            </button>
            <button class="flex items-center gap-2 px-4 py-2 text-xs text-gray-700 hover:bg-gray-50 w-full text-left" onclick="editCargaison('<?= htmlspecialchars($cargaison['codeCargaison']) ?>')">
                <i class="fas fa-edit text-gray-500"></i>
                Modifier
            </button>
            <button class="flex items-center gap-2 px-4 py-2 text-xs text-red-500 hover:bg-red-50 w-full text-left" onclick="confirmDelete('<?= htmlspecialchars($cargaison['codeCargaison']) ?>')">
                <i class="fas fa-trash text-red-400"></i>
                Supprimer
            </button>
        </div>
    </div>
        </td>
    </tr>
<?php endforeach; ?>
</tbody>
                        </table>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="flex justify-between items-center px-6 py-4 border-t border-gray-100">
                        <div class="text-sm text-gray-500">
                            Affichage de 1 à 5 sur 24 cargaisons
                        </div>
                        <div class="flex gap-2">
                            <button class="flex items-center justify-center w-6 h-6 rounded border border-gray-300 bg-white text-gray-700 hover:bg-blue-700 hover:text-white" disabled>
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="flex items-center justify-center w-6 h-6 rounded border border-blue-700 bg-blue-700 text-white">1</button>
                            <button class="flex items-center justify-center w-6 h-6 rounded border border-gray-300 bg-white text-gray-700 hover:bg-blue-700 hover:text-white">2</button>
                            <button class="flex items-center justify-center w-6 h-6 rounded border border-gray-300 bg-white text-gray-700 hover:bg-blue-700 hover:text-white">3</button>
                            <button class="flex items-center justify-center w-6 h-6 rounded border border-gray-300 bg-white text-gray-700 hover:bg-blue-700 hover:text-white">4</button>
                            <button class="flex items-center justify-center w-6 h-6 rounded border border-gray-300 bg-white text-gray-700 hover:bg-blue-700 hover:text-white">5</button>
                            <button class="flex items-center justify-center w-6 h-6 rounded border border-gray-300 bg-white text-gray-700 hover:bg-blue-700 hover:text-white">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Modal de Confirmation -->
    <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden" id="deleteModal">
        <div class="bg-white rounded-xl p-6 w-full max-w-md shadow-lg">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-800">Confirmer la Suppression</h3>
                <button class="text-gray-500 text-xl hover:text-gray-700" onclick="closeModal('deleteModal')">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="mb-6">
                <p>Êtes-vous sûr de vouloir supprimer cette cargaison ? Cette action est irréversible.</p>
                <p>Cargaison : </><span id="cargaisonToDelete"></span></p>
            </div>
            <div class="flex justify-end gap-3">
                <button class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-gray-50 text-gray-800 border border-gray-300 hover:bg-white hover:border-blue-700" onclick="closeModal('deleteModal')">
                    Annuler
                </button>
                <button class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-blue-700 text-white hover:bg-blue-800" onclick="deleteCargaison()">
                    <i class="fas fa-trash"></i>
                    Supprimer
                </button>
            </div>
        </div>
    </div>

    <!-- Modal d'Actions Rapides -->
    <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden" id="actionsModal">
        <div class="bg-white rounded-xl p-6 w-full max-w-md shadow-lg">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-800">Actions Rapides</h3>
                <button class="text-gray-500 text-xl hover:text-gray-700" onclick="closeModal('actionsModal')">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="mb-6 flex flex-col gap-4">
                <button class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-transparent text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white" onclick="toggleCargaisonState()">
                    <i class="fas fa-lock"></i>
                    Fermer/Ouvrir Cargaison
                </button>
                <button class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-transparent text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white" onclick="changeAdvancementState()">
                    <i class="fas fa-forward"></i>
                    Changer État d'Avancement
                </button>
                <button class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-transparent text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white" onclick="generateReport()">
                    <i class="fas fa-file-pdf"></i>
                    Générer Rapport
                </button>
                <button class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium bg-transparent text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white" onclick="exportColis()">
                    <i class="fas fa-download"></i>
                    Exporter Liste Colis
                </button>
            </div>
        </div>
    </div>

    <script>
        let currentCargaison = null;

        // Fonctions de filtrage
        function applyFilters() {
            const numero = document.querySelector('.filter-numero').value.trim().toLowerCase();
            const type = document.querySelector('.filter-type').value;
            const etatGlobal = document.querySelector('.filter-etat-global').value;
            const etatAvancement = document.querySelector('.filter-etat-avancement').value;
            const lieuDepart = document.querySelector('.filter-lieu-depart').value.trim().toLowerCase();
            const lieuArrive = document.querySelector('.filter-lieu-arrive').value.trim().toLowerCase();

            document.querySelectorAll('.data-table tbody tr').forEach(row => {
                let show = true;
                if (numero && !row.dataset.numero.toLowerCase().includes(numero)) show = false;
                if (type && row.dataset.type !== type) show = false;
                if (etatGlobal && row.dataset.etatGlobal !== etatGlobal) show = false;
                if (etatAvancement && row.dataset.etatAvancement !== etatAvancement) show = false;
                if (lieuDepart && !row.dataset.lieuDepart.toLowerCase().includes(lieuDepart)) show = false;
                if (lieuArrive && !row.dataset.lieuArrive.toLowerCase().includes(lieuArrive)) show = false;
                row.style.display = show ? '' : 'none';
            });
        }

        function resetFilters() {
            document.querySelector('.filter-numero').value = '';
            document.querySelector('.filter-type').value = '';
            document.querySelector('.filter-etat-global').value = '';
            document.querySelector('.filter-etat-avancement').value = '';
            document.querySelector('.filter-lieu-depart').value = '';
            document.querySelector('.filter-lieu-arrive').value = '';
            document.querySelectorAll('.data-table tbody tr').forEach(row => {
                row.style.display = '';
            });
        }

        function filterTable(filters) {
            const rows = document.querySelectorAll('.data-table tbody tr');
            
            rows.forEach(row => {
                let shouldShow = true;
                
                // Filtrer par numéro
                if (filters.numero) {
                    const numero = row.querySelector('td:first-child ').textContent;
                    if (!numero.toLowerCase().includes(filters.numero.toLowerCase())) {
                        shouldShow = false;
                    }
                }
                
                // Filtrer par type
                if (filters.type) {
                    const typeElement = row.querySelector('.type-badge');
                    if (!typeElement.classList.contains(filters.type)) {
                        shouldShow = false;
                    }
                }
                
                row.style.display = shouldShow ? '' : 'none';
            });
        }

        // Actions sur les cargaisons
        function viewCargaison(numero) {
            window.location.href = `/cargaisons/${numero}`;
        }

        function editCargaison(numero) {
            window.location.href = `/cargaisons/${numero}/edit`;
        }

        function confirmDelete(numero) {
            currentCargaison = numero;
            document.getElementById('cargaisonToDelete').textContent = numero;
            showModal('deleteModal');
        }

        function deleteCargaison() {
            if (currentCargaison) {
                // Ici vous implémenteriez la suppression via API
                console.log('Deleting cargaison:', currentCargaison);
                
                // Simulation de suppression réussie
                alert(`Cargaison ${currentCargaison} supprimée avec succès`);
                
                // Supprimer la ligne du tableau
                const row = Array.from(document.querySelectorAll('.data-table tbody tr'))
                    .find(row => row.querySelector('td:first-child ').textContent === currentCargaison);
                if (row) {
                    row.remove();
                }
                
                closeModal('deleteModal');
                currentCargaison = null;
            }
        }

        // Fonctions modales
        function showModal(modalId) {
            document.getElementById(modalId).style.display = 'flex';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        // Actions rapides
        function toggleCargaisonState() {
            alert('Fonction de fermeture/ouverture à implémenter');
            closeModal('actionsModal');
        }

        function changeAdvancementState() {
            alert('Fonction de changement d\'état à implémenter');
            closeModal('actionsModal');
        }

        function generateReport() {
            alert('Génération de rapport à implémenter');
            closeModal('actionsModal');
        }

        function exportColis() {
            alert('Export des colis à implémenter');
            closeModal('actionsModal');
        }

        // Fermer les modales en cliquant à l'extérieur
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('modal-overlay')) {
                e.target.style.display = 'none';
            }
        });

        // Navigation clavier pour les modales
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                document.querySelectorAll('.modal-overlay').forEach(modal => {
                    modal.style.display = 'none';
                });
            }
        });

        // Fonction de tri des colonnes
        document.querySelectorAll('.data-table th').forEach(header => {
            header.style.cursor = 'pointer';
            header.addEventListener('click', function() {
                const column = Array.from(header.parentElement.children).indexOf(header);
                sortTable(column);
            });
        });

        function sortTable(column) {
            const table = document.querySelector('.data-table tbody');
            const rows = Array.from(table.rows);
            
            rows.sort((a, b) => {
                const aValue = a.cells[column].textContent.trim();
                const bValue = b.cells[column].textContent.trim();
                
                return aValue.localeCompare(bValue, undefined, {numeric: true});
            });
            
            rows.forEach(row => table.appendChild(row));
        }

        setInterval(() => {
            console.log('Auto-refreshing cargaisons data...');
        }, 60000);

        function toggleActionsMenu(menuId) {
    // Ferme tous les autres menus
    document.querySelectorAll('[id^="actions-"]').forEach(menu => {
        if (menu.id !== menuId) menu.classList.add('hidden');
    });
    // Ouvre ou ferme le menu ciblé
    const menu = document.getElementById(menuId);
    if (menu) menu.classList.toggle('hidden');
}

// Ferme le menu si on clique ailleurs
document.addEventListener('click', function(e) {
    if (!e.target.closest('.relative')) {
        document.querySelectorAll('[id^="actions-"]').forEach(menu => {
            menu.classList.add('hidden');
        });
    }
});
    </script>
</body>
</html>