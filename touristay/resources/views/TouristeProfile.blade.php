<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil | ImmoConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-blue-600 font-bold text-2xl">ImmoConnect</span>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="#" class="border-transparent text-gray-500 hover:border-blue-500 hover:text-blue-600 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Accueil
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-blue-500 hover:text-blue-600 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Annonces
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-blue-500 hover:text-blue-600 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Favoris
                        </a>
                        <a href="#" class="border-blue-500 text-blue-600 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Mon Profil
                        </a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <div class="ml-3 relative">
                        <button type="button" class="bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center space-x-2 hover:bg-blue-700 transition">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Déconnexion</span>
                        </button>
                    </div>
                </div>
                <div class="flex items-center sm:hidden">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu, show/hide based on menu state -->
        <div class="sm:hidden hidden">
            <div class="pt-2 pb-3 space-y-1">
                <a href="#" class="bg-white text-gray-500 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium">Accueil</a>
                <a href="#" class="bg-white text-gray-500 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium">Annonces</a>
                <a href="#" class="bg-white text-gray-500 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium">Favoris</a>
                <a href="#" class="bg-blue-50 text-blue-600 block pl-3 pr-4 py-2 border-l-4 border-blue-500 text-base font-medium">Mon Profil</a>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <main class="flex-grow container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Mon Profil</h1>
            
            <!-- Onglets -->
            <div class="border-b border-gray-200 mb-6">
                <nav class="-mb-px flex space-x-8">
                    <a href="#" class="border-blue-500 text-blue-600 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                        Information du profil
                    </a>
                    <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                        Historique des locations
                    </a>
                    <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                        Préférences
                    </a>
                </nav>
            </div>
            
            <!-- Card principale du profil -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="md:flex">
                    <!-- Section image de profil -->
                    <div class="md:w-1/3 bg-blue-50 p-6 flex flex-col items-center justify-center">
                    <div class="relative mb-4">
                    <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-md">
                        <img src="{{ $user->image}}" alt="Photo de profil" class="w-full h-full object-cover">
                    </div>
                </div>
                        <h2 class="text-xl font-semibold text-center">{{ Auth()->user()->nom}}</h2>
                        <p class="text-gray-500 mb-4 text-center">{{ $user->role}}</p>
                    </div>
                    
                    <!-- Section formulaire -->
                    <div class="md:w-2/3 p-6">
                        <h3 class="text-lg font-semibold mb-4 text-gray-800">Les information personnelles {{ $errors->first() }}</h3>
                        <form method="POST" action="{{ route('profile.update') }}" class="space-y-4">
                        @csrf
                        @method("PATCH")
                            <!-- Nom complet -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nom complet</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                    <input type="text" id="name" name="name" value="{{ $user->nom }}" 
                                        class="pl-10 w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Adresse email</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-envelope text-gray-400"></i>
                                    </div>
                                    <input type="email" id="email" name="email" value="{{ $user->email }}" 
                                        class="pl-10 w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                                </div>
                            </div>
                            <!-- -------picture---------- -->
                            <div>
                                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Ajouter une photo de profile ?</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-image text-gray-400"></i>

                                    </div>
                                    <input type="text" id="image" name="image" placeholder="Ajouter le URL" value="{{ $user->image }} " 
                                        class="pl-10 w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                                </div>
                            </div>
                            
                            <!-- Téléphone (optionnel) -->
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">
                                    Téléphone <span class="text-gray-400">(optionnel)</span>
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-phone text-gray-400"></i>
                                    </div>
                                    <input type="tel" id="phone" name="phone" value="06 12 34 56 78" 
                                        class="pl-10 w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                                </div>
                            </div>
                            
                            <!-- Boutons d'action -->
                            <div class="flex justify-end space-x-4 pt-4">
                                <button type="button" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Annuler
                                </button>
                                <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Enregistrer les modifications
                                </button>
                            </div>
                        </form>
                        
                        <!-- Section mot de passe -->
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <h3 class="text-lg font-semibold mb-4 text-gray-800">Changer de mot de passe</h3>
                            <form class="space-y-4">
                                <!-- Mot de passe actuel -->
                                <div>
                                    <label for="current_password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe actuel</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-lock text-gray-400"></i>
                                        </div>
                                        <input type="password" id="current_password" name="current_password" 
                                            class="pl-10 w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                                    </div>
                                </div>
                                
                                <!-- Nouveau mot de passe -->
                                <div>
                                    <label for="new_password" class="block text-sm font-medium text-gray-700 mb-1">Nouveau mot de passe</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-lock text-gray-400"></i>
                                        </div>
                                        <input type="password" id="new_password" name="new_password" 
                                            class="pl-10 w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                                    </div>
                                </div>
                                
                                <!-- Confirmation nouveau mot de passe -->
                                <div>
                                    <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirmer le nouveau mot de passe</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-lock text-gray-400"></i>
                                        </div>
                                        <input type="password" id="new_password_confirmation" name="new_password_confirmation" 
                                            class="pl-10 w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                                    </div>
                                </div>
                                
                                <!-- Bouton de mise à jour du mot de passe -->
                                <div class="flex justify-end">
                                    <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        Mettre à jour le mot de passe
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">ImmoConnect</h3>
                    <p class="text-gray-300 text-sm">
                        La plateforme qui simplifie la location d'appartements pour les propriétaires et les locataires.
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Liens rapides</h3>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li><a href="#" class="hover:text-blue-300 transition">Accueil</a></li>
                        <li><a href="#" class="hover:text-blue-300 transition">Annonces</a></li>
                        <li><a href="#" class="hover:text-blue-300 transition">Comment ça marche</a></li>
                        <li><a href="#" class="hover:text-blue-300 transition">À propos</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Légal</h3>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li><a href="#" class="hover:text-blue-300 transition">Conditions d'utilisation</a></li>
                        <li><a href="#" class="hover:text-blue-300 transition">Politique de confidentialité</a></li>
                        <li><a href="#" class="hover:text-blue-300 transition">Cookies</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2 text-blue-400"></i>
                            contact@immoconnect.fr
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-2 text-blue-400"></i>
                            01 23 45 67 89
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-2 text-blue-400"></i>
                            123 rue de Paris, 75000 Paris
                        </li>
                    </ul>
                    <div class="mt-4 flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-blue-400 transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-blue-400 transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-blue-400 transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-blue-400 transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700 text-center text-sm text-gray-400">
                <p>&copy; 2025 ImmoConnect. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>