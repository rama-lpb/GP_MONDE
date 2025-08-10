<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GP_MONDE - Connexion</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans  min-h-screen flex flex-col">
    <!-- Header -->
    <nav class="w-full bg-white border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3 text-2xl font-bold text-blue-900">
                <i class="fas fa-shipping-fast text-3xl text-blue-900"></i>
                <span>GP_MONDE</span>
            </div>
            <div class="hidden md:flex items-center gap-8 text-lg">
                <a href="/" class="text-blue-800 hover:text-blue-900 font-semibold transition">
                    <<  Retour à l'accueil</a>
          
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 flex items-center justify-center py-16 px-4">
        <div class="w-full max-w-xl bg-white rounded-2xl border border-gray-200 shadow-lg p-[60px]">
            <div class="flex flex-col items-center mb-8">
                <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center mb-4 shadow">
                    <i class="fas fa-user-lock text-blue-900 text-3xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-blue-900 mb-2">Connexion Vous</h2>
                <p class="text-gray-500 text-center">Accédez à votre espace de gestion</p>
            </div>
            <form method="post" action="/login" class="space-y-6">
                <div>
                    <label for="login" class="block text-sm font-medium text-gray-700 mb-2">Nom d'utilisateur</label>
                    <input type="text" id="login" name="login"  autocomplete="username"
                        class="w-full px-4 py-3 border border-gray-200 rounded-lg bg-blue-50 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" placeholder="Votre identifiant">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Mot de passe</label>
                    <input type="password" id="password" name="password"  autocomplete="current-password"
                        class="w-full px-4 py-3 border border-gray-200 rounded-lg bg-blue-50 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" placeholder="Votre mot de passe">
                </div>
                <div class="flex items-center justify-between ">
                    <label class="flex items-center text-sm text-gray-600">
                        <input type="checkbox" name="remember" class="mr-2 accent-blue-900">
                        Se souvenir de moi
                    </label>
                    <a href="#" class="text-blue-900 hover:underline text-sm font-medium">Mot de passe oublié ?</a>
                </div>
                <button type="submit" id="connect" class="w-[250px] py-3 rounded-lg bg-blue-900 ml-[100px] hover:bg-blue-900 text-white font-semibold text-lg shadow flex items-center justify-center gap-2 transition">
                    <i class="fas fa-sign-in-alt"></i> <a href="/dashboard">Se connecter</a>
                </button>
            </form>
            <!-- <div class="mt-8 text-center text-sm text-gray-500">
                Pas encore de compte ?
                <a href="/register" class="text-blue-900 hover:underline font-medium">Créer un compte</a>
            </div> -->
            <div class="mt-8 flex items-center justify-center space-x-6 text-xs text-gray-400">
                <div class="flex items-center">
                    <div class="w-2 h-2 bg-green-400 rounded-full mr-2"></div>
                    Sécurisé SSL
                </div>
                <span>|</span>
                <div class="flex items-center">
                    <span>Support 24/7</span>
                </div>
                <span>|</span>
                <div class="flex items-center">
                    <span>+10k entreprises</span>
                    <div class="w-2 h-2 bg-blue-400 rounded-full ml-2"></div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
   <!--  <footer class="bg-gray-800 text-white py-8 mt-auto">
        <div class="max-w-7xl mx-auto px-4 text-center text-sm text-blue-200">
            © 2024 GP_MONDE. Tous droits réservés.
        </div>
    </footer> -->
</body>

</html>
<script src="../../../data/dist/login.js"> </script>