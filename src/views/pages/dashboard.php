<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GP_MONDE - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            500: '#3b82f6',
                            600: '#1e40af',
                            700: '#1e3a8a'
                        },
                        secondary: {
                            500: '#059669',
                            600: '#047857'
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans bg-slate-50 text-slate-900 leading-relaxed">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <nav id="sidebar" class="w-[280px] bg-white border-r border-gray-200 flex flex-col fixed h-screen z-50">
            <!-- Logo Section -->
            <div class="p-6 border-b border-slate-100">
                <div class="flex items-center gap-3 text-2xl font-bold text-primary-600">
                    <i class="fas fa-shipping-fast text-3xl"></i>
                    <span>GP_MONDE</span>
                </div>
            </div>
            <!-- Navigation Menu -->
            <div class="flex-1 py-4">
                <div class="mb-1">
                    <a href="/dashboard" class="flex items-center gap-3 px-6 py-3 text-primary-700 bg-primary-50 border-r-4 border-primary-700 font-semibold">
                        <i class="fas fa-home w-5 text-center"></i>
                        <span>Dashboard</span>
                    </a>
                </div>
                <div class="mb-1">
                    <a href="/cargaisons" class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-primary-50 hover:text-primary-700 border-r-4 border-transparent transition-all">
                        <i class="fas fa-ship w-5 text-center"></i>
                        <span>Cargaisons</span>
                    </a>
                </div>
                <div class="mb-1">
                    <a href="/colis" class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-primary-50 hover:text-primary-700 border-r-4 border-transparent transition-all">
                        <i class="fas fa-box w-5 text-center"></i>
                        <span>Colis</span>
                    </a>
                </div>
                <div class="mb-1">
                    <a href="/clients" class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-primary-50 hover:text-primary-700 border-r-4 border-transparent transition-all">
                        <i class="fas fa-users w-5 text-center"></i>
                        <span>Clients</span>
                    </a>
                </div>
                <div class="mb-1">
                    <a href="/suivi" class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-primary-50 hover:text-primary-700 border-r-4 border-transparent transition-all">
                        <i class="fas fa-search w-5 text-center"></i>
                        <span>Suivi Colis</span>
                    </a>
                </div>
                <div class="mb-1">
                    <a href="/rapports" class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-primary-50 hover:text-primary-700 border-r-4 border-transparent transition-all">
                        <i class="fas fa-chart-bar w-5 text-center"></i>
                        <span>Rapports</span>
                    </a>
                </div>
                <div class="mb-1">
                    <a href="/parametres" class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-primary-50 hover:text-primary-700 border-r-4 border-transparent transition-all">
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
        <div class="flex-1 flex flex-col lg:ml-[280px] ml-[280px]">
            <!-- Header -->
            <header class="bg-white border-b border-slate-200 px-4 py-4 lg:px-6 flex items-center shadow-sm">
                <button onclick="toggleSidebar()" class="lg:hidden mr-4 p-2 text-slate-500 hover:text-primary-600">
                    <i class="fas fa-bars"></i>
                </button>
                <h1 class="text-2xl font-semibold text-slate-900">Dashboard</h1>
                <div class="flex items-center gap-4 ml-auto">
                    <!-- Search Box -->
                    <div class="relative hidden sm:block">
                        <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
                        <input type="text" class="w-75 pl-10 pr-4 py-2 text-sm border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent" placeholder="Rechercher un colis..." id="searchInput">
                    </div>
                    <!-- User Menu -->
                    <div class="flex items-center gap-2 px-3 py-2 bg-slate-50 rounded-lg cursor-pointer hover:bg-slate-100 transition-colors">
                        <div class="w-8 h-8 bg-primary-600 rounded-full flex items-center justify-center text-white font-semibold text-sm">
                            JD
                        </div>
                        <span class="hidden sm:inline text-slate-700">John Doe</span>
                        <i class="fas fa-chevron-down text-slate-400 text-sm"></i>
                    </div>
                </div>
            </header>

            <!-- Content Area -->
            <div class="flex-1 p-4 lg:p-6 overflow-y-auto">
                <!-- Quick Actions -->
                <div class="flex flex-col sm:flex-row gap-3 mb-6">
                    <a href="/cargaisons/new" class="inline-flex items-center gap-2 px-4 py-2 bg-primary-600 hover:bg-primary-700 text-white text-sm font-medium rounded-lg transition-colors no-underline">
                        <i class="fas fa-plus"></i>
                        Nouvelle Cargaison
                    </a>
                    <a href="/colis" class="inline-flex items-center gap-2 px-4 py-2 bg-slate-50 hover:bg-white text-slate-900 text-sm font-medium rounded-lg border border-slate-200 transition-colors no-underline">
                        <i class="fas fa-box"></i>
                        Enregistrer Colis
                    </a>
                    <a href="/recherche" class="inline-flex items-center gap-2 px-4 py-2 bg-slate-50 hover:bg-white text-slate-900 text-sm font-medium rounded-lg border border-slate-200 transition-colors no-underline">
                        <i class="fas fa-search"></i>
                        Recherche Avancée
                    </a>
                </div>

                <!-- Statistics Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
                    <!-- Card 1 -->
                    <div class="bg-white p-6 rounded-xl shadow-md border border-slate-100 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <div class="text-sm font-medium text-primary-700 uppercase tracking-wide mb-1">Cargaisons Actives</div>
                                <div class="text-4xl font-bold text-primary-900">24</div>
                            </div>
                            <div class="w-12 h-12 bg-primary-50 rounded-xl flex items-center justify-center text-primary-600 text-xl">
                                <i class="fas fa-ship"></i>
                            </div>
                        </div>
                        <div class="flex items-center gap-1 text-sm text-primary-600">
                            <i class="fas fa-arrow-up"></i>
                            <span>+12% ce mois</span>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white p-6 rounded-xl shadow-md border border-slate-100 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <div class="text-sm font-medium text-primary-700 uppercase tracking-wide mb-1">Colis en Transit</div>
                                <div class="text-4xl font-bold text-primary-900">1,247</div>
                            </div>
                            <div class="w-12 h-12 bg-primary-50 rounded-xl flex items-center justify-center text-primary-600 text-xl">
                                <i class="fas fa-box"></i>
                            </div>
                        </div>
                        <div class="flex items-center gap-1 text-sm text-primary-600">
                            <i class="fas fa-arrow-up"></i>
                            <span>+8% cette semaine</span>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white p-6 rounded-xl shadow-md border border-slate-100 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <div class="text-sm font-medium text-primary-700 uppercase tracking-wide mb-1">Colis Livrés</div>
                                <div class="text-4xl font-bold text-primary-900">3,891</div>
                            </div>
                            <div class="w-12 h-12 bg-primary-50 rounded-xl flex items-center justify-center text-primary-600 text-xl">
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        <div class="flex items-center gap-1 text-sm text-primary-600">
                            <i class="fas fa-arrow-up"></i>
                            <span>+15% ce mois</span>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-white p-6 rounded-xl shadow-md border border-slate-100 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <div class="text-sm font-medium text-primary-700 uppercase tracking-wide mb-1">Chiffre d'Affaires</div>
                                <div class="text-4xl font-bold text-primary-900">2.4M</div>
                            </div>
                            <div class="w-12 h-12 bg-primary-50 rounded-xl flex items-center justify-center text-primary-600 text-xl">
                                <i class="fas fa-money-bill-wave"></i>
                            </div>
                        </div>
                        <div class="flex items-center gap-1 text-sm text-primary-600">
                            <i class="fas fa-arrow-up"></i>
                            <span>+22% ce mois</span>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity Section -->
                <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 mt-8">
                    <!-- Activity List -->
                    <div class="xl:col-span-2 bg-white rounded-xl shadow-md border border-slate-100">
                        <div class="p-6 border-b border-blue-100 flex justify-between items-center">
                            <h2 class="text-lg font-semibold text-slate-900">Activité Récente</h2>
                            <a href="#" class="text-primary-600 hover:underline text-sm font-medium">Voir tout</a>
                        </div>
                        <div class="max-h-96 overflow-y-auto">
                            <div class="p-4 border-b border-slate-100 flex gap-4 items-start">
                                <div class="w-8 h-8 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center flex-shrink-0 text-sm">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="text-sm font-medium text-slate-900">Colis CG001234 livré</div>
                                    <div class="text-xs text-slate-500 mt-1">Le colis a été récupéré par le destinataire à Dakar</div>
                                    <div class="text-xs text-slate-400 mt-1">Il y a 5 minutes</div>
                                </div>
                            </div>
                            <div class="p-4 border-b border-slate-100 flex gap-4 items-start">
                                <div class="w-8 h-8 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center flex-shrink-0 text-sm">
                                    <i class="fas fa-ship"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="text-sm font-medium text-slate-900">Cargaison MAR-2024-001 fermée</div>
                                    <div class="text-xs text-slate-500 mt-1">Cargaison maritime avec 45 colis prête au départ</div>
                                    <div class="text-xs text-slate-400 mt-1">Il y a 1 heure</div>
                                </div>
                            </div>
                            <div class="p-4 border-b border-slate-100 flex gap-4 items-start">
                                <div class="w-8 h-8 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center flex-shrink-0 text-sm">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="text-sm font-medium text-slate-900">Retard signalé</div>
                                    <div class="text-xs text-slate-500 mt-1">Cargaison AER-2024-015 en retard de 2 jours</div>
                                    <div class="text-xs text-slate-400 mt-1">Il y a 3 heures</div>
                                </div>
                            </div>
                            <div class="p-4 border-b border-slate-100 flex gap-4 items-start">
                                <div class="w-8 h-8 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center flex-shrink-0 text-sm">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="text-sm font-medium text-slate-900">Nouveau colis enregistré</div>
                                    <div class="text-xs text-slate-500 mt-1">Colis CG001238 ajouté à la cargaison ROT-2024-008</div>
                                    <div class="text-xs text-slate-400 mt-1">Il y a 4 heures</div>
                                </div>
                            </div>
                            <div class="p-4 flex gap-4 items-start">
                                <div class="w-8 h-8 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center flex-shrink-0 text-sm">
                                    <i class="fas fa-plane"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="text-sm font-medium text-slate-900">Cargaison arrivée</div>
                                    <div class="text-xs text-slate-500 mt-1">Cargaison AER-2024-012 arrivée à destination</div>
                                    <div class="text-xs text-slate-400 mt-1">Il y a 6 heures</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Alerts & Notifications -->
                    <div class="bg-white rounded-xl shadow-md border border-slate-100">
                        <div class="p-6 border-b border-slate-100">
                            <h2 class="text-lg font-semibold text-slate-900">Alertes & Notifications</h2>
                        </div>
                        <div>
                            <div class="p-4 border-b border-slate-100 flex gap-4 items-start">
                                <div class="w-8 h-8 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center flex-shrink-0 text-sm">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="text-sm font-medium text-slate-900">3 cargaisons en retard</div>
                                    <div class="text-xs text-slate-500 mt-1">Nécessitent une attention immédiate</div>
                                </div>
                            </div>
                            <div class="p-4 border-b border-slate-100 flex gap-4 items-start">
                                <div class="w-8 h-8 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center flex-shrink-0 text-sm">
                                    <i class="fas fa-bell"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="text-sm font-medium text-slate-900">15 colis à récupérer</div>
                                    <div class="text-xs text-slate-500 mt-1">Arrivés depuis plus de 48h</div>
                                </div>
                            </div>
                            <div class="p-4 flex gap-4 items-start">
                                <div class="w-8 h-8 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center flex-shrink-0 text-sm">
                                    <i class="fas fa-archive"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="text-sm font-medium text-slate-900">Auto-archivage</div>
                                    <div class="text-xs text-slate-500 mt-1">25 colis archivés automatiquement</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script>
        // Mobile sidebar toggle
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        }

        // Search functionality
        document.getElementById('searchInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                const searchTerm = this.value.trim();
                if (searchTerm) {
                    window.location.href = `/suivi?code=${encodeURIComponent(searchTerm)}`;
                }
            }
        });

        // Auto-refresh stats every 30 seconds
        setInterval(() => {
            console.log('Refreshing dashboard stats...');
        }, 30000);

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(e) {
            const sidebar = document.getElementById('sidebar');
            const toggleButton = e.target.closest('button');
            
            if (window.innerWidth < 1024 && !sidebar.contains(e.target) && !toggleButton) {
                sidebar.classList.add('-translate-x-full');
            }
        });
    </script> -->
</body>
</html>