<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GP_MONDE - Gestion de Colis Simplifiée</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
   <!--  <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b'
                        }
                    }
                }
            }
        }
    </script> -->
</head>
<body class="font-sans bg-blue-50 ">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b border-blue-100 p-[15px]">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-5">
                    <div class="bg-blue-900 p-2 rounded">
                        <i class="fas fa-shipping-fast text-white text-lg"></i>
                    </div>
                    <span class="text-xl font-semibold text-blue-800">GP_MONDE</span>
                </div>
                
                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-20">
                    <a href="#services" class="text-gray-500 hover:text-blue-800 font-medium">Services</a>
                    <a href="#about" class="text-gray-500 hover:text-blue-800 font-medium">À propos</a>
                    <a href="#contact" class="text-gray-500 hover:text-blue-800 font-medium">Contact</a>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex items-center space-x-20">
                    <button onclick="openTrackingModal()" class="hidden sm:inline-flex items-center px-10 py-2 text-blue-900 border border-blue-900 rounded hover:bg-blue-50 font-medium">
                        <i class="fas fa-search mr-2 text-sm"></i>
                        Suivi Colis
                    </button>
                    <button onclick="goToLogin()" class="inline-flex items-center px-5 py-2 bg-blue-900 hover:bg-blue-900 text-white rounded font-medium">
                        <i class="fas fa-sign-in-alt mr-2 text-sm"></i>
                        Se Connecter
                    </button>
                    
                    <!-- Mobile Menu Button -->
                    <button onclick="toggleMobileMenu()" class="md:hidden p-2 text-blue-600">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-blue-100">
                <div class="px-4 py-4 space-y-3">
                    <a href="#services" class="block text-blue-600 font-medium">Services</a>
                    <a href="#about" class="block text-blue-600 font-medium">À propos</a>
                    <a href="#contact" class="block text-blue-600 font-medium">Contact</a>
                    <button onclick="openTrackingModal()" class="block text-blue-600 font-medium">
                        <i class="fas fa-search mr-2"></i>Suivi Colis
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-16 lg:py-24 relative bg-no-repeat bg-cover bg-center" style="background-image: url('/images/home_back.gif');">
        <div class="absolute inset-0 bg-gray-600 bg-opacity-50"></div>
        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Hero Content -->
                <div class="space-y-8">
                    <div class="space-y-6">
                        <h1 class="text-4xl lg:text-5xl font-bold text-white leading-tight  w-[1000px] drop-shadow-lg">
                            Gestion professionnelle de vos expéditions
                        </h1>
                        <p class="text-lg text-blue-100 leading-relaxed drop-shadow">
                            GP_MONDE vous offre une solution complète pour gérer vos envois de colis vers l'Afrique avec transparence et efficacité.
                        </p>
                    </div>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button onclick="goToLogin()" class="inline-flex items-center justify-center px-6 py-3 bg-blue-900 hover:bg-blue-800 text-white rounded font-medium shadow">
                            Commencer
                        </button>
                        <button onclick="openTrackingModal()" class="inline-flex items-center justify-center px-6 py-3 bg-white text-blue-800 border border-blue-300 rounded font-medium hover:bg-blue-50">
                            <i class="fas fa-search mr-2"></i>
                            Suivre un Colis
                        </button>
                    </div>
                </div>
                <!-- Hero Visual (optionnel, tu peux le laisser vide ou ajouter un visuel) -->
            </div>
        </div>
    </section>

    <!-- Stats Section -->
   

    <!-- Services Section -->
    <section id="services" class="py-16 bg-gray-50">
        <div class="">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-900 mb-4">Nos Services</h2>
                <p class="text-lg text-gray-500">Solutions d'expédition adaptées à vos besoins</p>
            </div>
            <div class="grid md:grid-cols-4 ">
                <!-- Service 1 -->
                <div class="bg-white p-12 rounded-2xl border border-gray-200 shadow-lg hover:shadow-2xl transition group hover:-translate-y-2 duration-200 w-full max-w-[400px] mx-auto flex flex-col items-center">
                    <div class="w-20 h-20 bg-gray-100 rounded-xl flex items-center justify-center mb-6 shadow group-hover:scale-110 transition">
                        <i class="fas fa-ship text-blue-800 text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-3 text-center">Transport Maritime</h3>
                    <p class="text-blue-900 mb-5 text-center">Solution économique pour vos envois volumineux vers l'Afrique de l'Ouest.</p>
                    <ul class="space-y-2 text-base text-gray-500">
                        <li class="flex items-center justify-center"><i class="fas fa-check text-blue-700 mr-2"></i> Tarifs compétitifs</li>
                        <li class="flex items-center justify-center"><i class="fas fa-check text-blue-700 mr-2"></i> Suivi complet</li>
                        <li class="flex items-center justify-center"><i class="fas fa-check text-blue-700 mr-2"></i> Gros volumes</li>
                    </ul>
                </div>
                <!-- Service 2 -->
                <div class="bg-white p-12 rounded-2xl border border-gray-200 shadow-lg hover:shadow-2xl transition group hover:-translate-y-2 duration-200 w-full max-w-[400px] mx-auto flex flex-col items-center">
                    <div class="w-20 h-20 bg-gray-100 rounded-xl flex items-center justify-center mb-6 shadow group-hover:scale-110 transition">
                        <i class="fas fa-plane text-blue-800 text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-3 text-center">Transport Aérien</h3>
                    <p class="text-blue-900 mb-5 text-center">Livraison rapide pour vos envois urgents et prioritaires.</p>
                    <ul class="space-y-2 text-base text-gray-500">
                        <li class="flex items-center justify-center"><i class="fas fa-check text-blue-700 mr-2"></i> Livraison express</li>
                        <li class="flex items-center justify-center"><i class="fas fa-check text-blue-700 mr-2"></i> Suivi temps réel</li>
                        <li class="flex items-center justify-center"><i class="fas fa-check text-blue-700 mr-2"></i> Sécurité maximale</li>
                    </ul>
                </div>
                <!-- Service 3 -->
                <div class="bg-white p-12 rounded-2xl border border-gray-200 shadow-lg hover:shadow-2xl transition group hover:-translate-y-2 duration-200 w-full max-w-[400px] mx-auto flex flex-col items-center">
                    <div class="w-20 h-20 bg-gray-100 rounded-xl flex items-center justify-center mb-6 shadow group-hover:scale-110 transition">
                        <i class="fas fa-truck text-blue-800 text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-3 text-center">Transport Routier</h3>
                    <p class="text-blue-900 mb-5 text-center">Livraison fiable et flexible pour vos colis à l'intérieur du pays et en Afrique de l'Ouest.</p>
                    <ul class="space-y-2 text-base text-gray-500">
                        <li class="flex items-center justify-center"><i class="fas fa-check text-blue-700 mr-2"></i> Livraison porte à porte</li>
                        <li class="flex items-center justify-center"><i class="fas fa-check text-blue-700 mr-2"></i> Délais maîtrisés</li>
                        <li class="flex items-center justify-center"><i class="fas fa-check text-blue-700 mr-2"></i> Suivi géolocalisé</li>
                    </ul>
                </div>
                <!-- Service 4 -->
                <div class="bg-white p-12 rounded-2xl border border-gray-200 shadow-lg hover:shadow-2xl transition group hover:-translate-y-2 duration-200 w-full max-w-[400px] mx-auto flex flex-col items-center">
                    <div class="w-20 h-20 bg-gray-100 rounded-xl flex items-center justify-center mb-6 shadow group-hover:scale-110 transition">
                        <i class="fas fa-warehouse text-blue-800 text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-3 text-center">Entreposage</h3>
                    <p class="text-blue-900 mb-5 text-center">Stockage sécurisé de vos marchandises dans nos entrepôts.</p>
                    <ul class="space-y-2 text-base text-gray-500">
                        <li class="flex items-center justify-center"><i class="fas fa-check text-blue-700 mr-2"></i> Surveillance 24/7</li>
                        <li class="flex items-center justify-center"><i class="fas fa-check text-blue-700 mr-2"></i> Assurance incluse</li>
                        <li class="flex items-center justify-center"><i class="fas fa-check text-blue-700 mr-2"></i> Accès flexible</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
     <section class="py-16 bg-white  mt-[20px]">
        <div class="max-w-6xl mx-auto p-10">
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div class="space-y-2">
                    <div class="text-3xl font-bold text-blue-900">15,000+</div>
                    <div class="text-blue-900">Colis expédiés</div>
                </div>
                <div class="space-y-2">
                    <div class="text-3xl font-bold text-blue-900">98%</div>
                    <div class="text-blue-900">Taux de livraison</div>
                </div>
                <div class="space-y-2">
                    <div class="text-3xl font-bold text-blue-900">15</div>
                    <div class="text-blue-900">Destinations</div>
                </div>
                <div class="space-y-2">
                    <div class="text-3xl font-bold text-blue-900">5 ans</div>
                    <div class="text-blue-900">D'expérience</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <!-- Logo & Description -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="bg-white p-2 rounded">
                            <i class="fas fa-shipping-fast text-blue-800"></i>
                        </div>
                        <span class="text-lg font-semibold">GP_MONDE</span>
                    </div>
                    <p class="text-blue-300 text-sm">
                        Solution professionnelle de gestion d'expéditions vers l'Afrique.
                    </p>
                </div>
                
                <!-- Services -->
                <div class="space-y-3">
                    <h4 class="font-semibold">Services</h4>
                    <div class="space-y-2 text-sm text-blue-300">
                        <div>Transport maritime</div>
                        <div>Transport aérien</div>
                        <div>Entreposage</div>
                        <div>Suivi colis</div>
                    </div>
                </div>
                
                <!-- Support -->
                <div class="space-y-3">
                    <h4 class="font-semibold">Support</h4>
                    <div class="space-y-2 text-sm text-blue-300">
                        <div>Centre d'aide</div>
                        <div>Contact</div>
                        <div>FAQ</div>
                        <div>Conditions</div>
                    </div>
                </div>
                
                <!-- Contact -->
                <div class="space-y-3">
                    <h4 class="font-semibold">Contact</h4>
                    <div class="space-y-2 text-sm text-blue-300">
                        <div>+33 1 23 45 67 89</div>
                        <div>contact@GP_MONDE.sn</div>
                        <div>Dakar , Senegal</div>
                    </div>
                </div>
            </div>
            
           
        </div>
    </footer>

    <!-- Tracking Modal -->
    <div id="trackingModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-md w-full p-6 relative">
            <button onclick="closeTrackingModal()" class="absolute top-4 right-4 text-blue-400 hover:text-blue-600">
                <i class="fas fa-times"></i>
            </button>
            
            <div class="text-center mb-6">
                <h3 class="text-xl font-semibold text-blue-900 mb-2">Suivi de Colis</h3>
                <p class="text-blue-600">Entrez votre numéro de suivi</p>
            </div>
            
            <form onsubmit="trackPackage(event)" class="space-y-4">
                <input type="text" id="trackingCode" placeholder="Ex: CG001234" 
                       class="w-full px-4 py-3 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <button type="submit" class="w-full bg-blue-800 hover:bg-blue-900 text-white py-3 rounded font-medium">
                    Rechercher
                </button>
            </form>
        </div>
    </div>

    <script>
        function toggleMobileMenu() {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        }

        function openTrackingModal() {
            document.getElementById('trackingModal').classList.remove('hidden');
        }

        function closeTrackingModal() {
            document.getElementById('trackingModal').classList.add('hidden');
        }

        function trackPackage(event) {
            event.preventDefault();
            const trackingCode = document.getElementById('trackingCode').value.trim();
            if (trackingCode) {
                window.location.href = `/suivi?code=${encodeURIComponent(trackingCode)}`;
            }
        }

        function goToLogin() {
            window.location.href = '/login';
        }

        document.getElementById('trackingModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeTrackingModal();
            }
        });
    </script>
</body>
</html>