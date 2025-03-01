<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Favoris | ImmoConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="flex-shrink-0 flex items-center">
                        <i class="fas fa-building text-blue-600 text-2xl mr-2"></i>
                        <span class="text-blue-600 font-bold text-xl">ImmoConnect</span>
                    </a>
                    <div class="hidden md:ml-6 md:flex md:space-x-6">
                        <a href="/" class="text-gray-500 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition">Accueil</a>
                        <a href="/annonces" class="text-gray-500 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition">Annonces</a>
                        <a href="/favoris" class="text-blue-600 border-b-2 border-blue-600 px-3 py-2 rounded-md text-sm font-medium transition">Mes Favoris</a>
                        <a href="/messages" class="text-gray-500 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition">Messages</a>
                    </div>
                </div>
                <div class="hidden md:flex items-center">
                    <div class="flex-shrink-0 relative">
                        <button type="button" class="bg-white p-1 rounded-full text-gray-500 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <i class="fas fa-bell text-xl"></i>
                        </button>
                        <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-400 ring-2 ring-white"></span>
                    </div>
                    <div class="ml-4 relative flex items-center space-x-3">
                        <div class="text-sm text-gray-700">Bonjour, Thomas</div>
                        <img class="h-8 w-8 rounded-full" src="/api/placeholder/150/150" alt="Photo de profil">
                        <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <button type="button" class="bg-white inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-blue-600 hover:bg-gray-100 focus:outline-none">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <div class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900 flex items-center">
                        <i class="fas fa-heart text-red-500 mr-3"></i>
                        Mes Favoris
                    </h1>
                    <p class="mt-1 text-sm text-gray-600">Retrouvez toutes vos annonces enregistrées</p>
                </div>
                <div class="mt-4 md:mt-0">
                    <div class="relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input type="text" class="pl-10 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md py-2" placeholder="Rechercher dans vos favoris...">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <main class="flex-grow max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <!-- Favorites Filter -->
        <div class="mb-6 flex flex-wrap items-center justify-between gap-4">
           
        </div>

        <!-- Favorites List -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Favorite Item 1 -->
             @foreach($favoris as $favori)
             @csrf
               <a href="{{ route('detaille', ['id' => $favori->annance->id]) }}" class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="relative h-48">
                    <img src="{{$favori->annance->image1}}" alt="Appartement à Paris" class="w-full h-full object-cover">
                    <div class="absolute top-2 right-2 bg-blue-600 text-white px-2 py-1 rounded-md text-sm font-semibold">
                    {{$favori->annance->prix}}MAD/mois
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-semibold text-gray-800">{{$favori->annance->titre}}</h3>
                        <button class="text-gray-400 hover:text-red-500">
                        <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm mb-3">
                        <i class="fas fa-map-marker-alt mr-1"></i>
                        <span>{{$favori->annance->adresse}}</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                    {{$favori->annance->description}}
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">{{$favori->annance->equipement}}</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <div class="text-gray-600">
                            <i class="far fa-calendar mr-1"></i>
                            Disponible dès le {{$favori->annance->debut}}
                        </div>
                       
                    </div>
                </div>
                </a>
                @endforeach
        </div>

        <!-- Empty state (hidden by default) -->
        <div class="hidden bg-white rounded-xl shadow-sm p-8 text-center mt-6">
            <div class="mx-auto h-20 w-20 text-gray-300 mb-4">
                <i class="fas fa-heart text-6xl"></i>
            </div>
            <h3 class="text-lg font-medium text-gray-900">Aucun favori pour le moment</h3>
            <p class="mt-2 text-sm text-gray-500">
                Vous n'avez pas encore ajouté d'annonces à vos favoris.
                Explorez les annonces et cliquez sur l'icône cœur pour les retrouver ici.
            </p>
            <div class="mt-6">
                <a href="/annonces" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700">
                    <i class="fas fa-search mr-2"></i>
                    Découvrir les annonces
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-auto">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1">
                    <div class="flex items-center">
                        <i class="fas fa-building text-blue-600 text-2xl mr-2"></i>
                        <span class="text-blue-600 font-bold text-xl">ImmoConnect</span>
                    </div>
                    <p class="mt-4 text-sm text-gray-600">
                        ImmoConnect simplifie la recherche de votre prochain logement avec des annonces vérifiées et un processus de location sécurisé.
                    </p>
                    <div class="mt-6 flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <div class="col-span-1">
                    <h3 class="text-sm font-semibold text-gray-500 tracking-wider uppercase">Liens rapides</h3>
                    <ul class="mt-4 space-y-3">
                        <li><a href="#" class="text-gray-600 hover:text-blue-600 text-sm">Accueil</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-600 text-sm">Dernières annonces</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-600 text-sm">Recherche avancée</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-600 text-sm">Guide du locataire</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-600 text-sm">Blog immobilier</a></li>
                    </ul>
                </div>
                <div class="col-span-1">
                    <h3 class="text-sm font-semibold text-gray-500 tracking-wider uppercase">Informations</h3>
                    <ul class="mt-4 space-y-3">
                        <li><a href="#" class="text-gray-600 hover:text-blue-600 text-sm">À propos de nous</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-600 text-sm">Conditions d'utilisation</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-600 text-sm">Politique de confidentialité</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-600 text-sm">FAQ</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-600 text-sm">Nous contacter</a></li>
                    </ul>
                </div>
                <div class="col-span-1">
                    <h3 class="text-sm font-semibold text-gray-500 tracking-wider uppercase">Newsletter</h3>
                    <p class="mt-4 text-sm text-gray-600">Recevez nos dernières annonces et conseils immobiliers</p>
                    <form class="mt-4">
                        <div class="flex">
                            <input type="email" class="min-w-0 flex-1 border border-gray-300 rounded-l-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Votre email">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white rounded-r-md px-4 py-2 text-sm">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mt-8 pt-6 border-t border-gray-200 flex flex-col md:flex-row justify-between items-center">
                <p class="text-sm text-gray-500">© 2025 ImmoConnect. Tous droits réservés.</p>
                <div class="mt-4 md:mt-0">
                    <img src="/api/placeholder/250/40" alt="Moyens de paiement" class="h-8">
                </div>
            </div>
        </div>
    </footer>
</body>
</html>