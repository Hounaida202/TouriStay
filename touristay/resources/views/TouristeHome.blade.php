<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil | ImmoConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <div class="flex items-center">
                            <i class="fas fa-building text-blue-600 text-2xl mr-2"></i>
                            <span class="text-xl font-bold text-blue-600">ImmoConnect</span>
                        </div>
                    </div>
                    <!-- Navigation Links -->
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="#" class="border-b-2 border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 text-sm font-medium">
                            Accueil
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Recherche avancée
                        </a>
                        <a href="{{ route('favoris')}}" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Mes favoris
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Messages
                        </a>
                    </div>
                </div>
                <!-- Dropdown menu et profil -->
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <button class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <i class="fas fa-bell text-lg"></i>
                    </button>
                    
                    <!-- Profile dropdown -->
                    <div class="ml-3 relative">
                        <div class="flex items-center">

                        <a href="{{ route('profile', ['id' => Auth::user()->id]) }}"  class="h-8 w-8 rounded-full bg-blue-200 flex items-center justify-center overflow-hidden">
                            <img src="URL_DE_L_IMAGE" alt="User" class="h-full w-full object-cover">
                        </a>

                            <span class="ml-2 text-gray-700 text-sm font-medium">{{ Auth()->user()->nom}}</span>
                            <i class="fas fa-chevron-down ml-1 text-gray-400 text-xs"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Mobile menu button -->
                <div class="flex items-center sm:hidden">
                    <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Hero section avec recherche -->
    <div class="bg-blue-600 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-3xl font-extrabold text-white sm:text-4xl">
                    Trouvez votre prochain appartement
                </h1>
                <p class="mt-3 max-w-md mx-auto text-blue-100 sm:text-lg">
                    Découvrez des milliers d'annonces de location correspondant à vos critères
                </p>
            </div>
            
     <!-- Barre de recherche simplifiée -->
    <div class="mt-8 sm:mx-auto sm:max-w-3xl">
    <div class="bg-white p-4 rounded-lg shadow-lg">
    <form action="{{route('tourist')}}" method="POST" class="grid grid-cols-1 gap-4">
    @csrf
    <div>
        <label for="search" class="block text-sm font-medium text-gray-700 mb-1">Rechercher</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-search text-gray-400"></i>
            </div>
            <input type="text" id="search" name="search" placeholder="Recherche..." 
                class="pl-10 w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>
    </div>

    <div class="flex items-end">
        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition flex items-center justify-center">
            <i class="fas fa-search mr-2"></i>
            Rechercher
        </button>
    </div>
    </form>
    
    </div>
</div>

        </div>
    </div>
    
    <!-- Contenu principal: Liste des annonces -->
    <main class="flex-grow py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Annonces récentes</h2>
                <div class="flex items-center space-x-2">
                    <span class="text-gray-600 text-sm">Trier par:</span>
                    <select class="text-sm border border-gray-300 rounded-md p-1 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option>Les plus récentes</option>
                        <option>Prix croissant</option>
                        <option>Prix décroissant</option>
                    </select>
                </div>
            </div>
            
            <!-- Grille d'annonces -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">



            @if($annances->isEmpty())
    <div class="col-span-3 text-center py-8">
        <p class="text-gray-600 text-lg">Aucune annonce trouvée pour "{{ request('search') }}"</p>
    </div>
    @else
            @foreach($annances as $annance)
              @csrf
                <!-- Annonce 1 -->
                <a href="{{ route('detaille', ['id' => $annance->id]) }}" class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                    <div class="relative h-48">
                        <img src="{{$annance->image1}}" alt="Appartement à Paris" class="w-full h-full object-cover">
                        <div class="absolute top-2 right-2 bg-blue-600 text-white px-2 py-1 rounded-md text-sm font-semibold">
                        {{$annance->prix}}MAD/mois
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-semibold text-gray-800">{{$annance->titre}}</h3>
                            <button class="text-gray-400 hover:text-red-500">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <div class="flex items-center text-gray-600 text-sm mb-3">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            <span>{{$annance->adresse}}</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                        {{$annance->description}}
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">{{$annance->equipement}}</span>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <div class="text-gray-600">
                                <i class="far fa-calendar mr-1"></i>
                                Disponible dès le {{$annance->debut}}
                            </div>
                           
                        </div>
                    </div>
                    </a>
                

                @endforeach

                @endif






            
            <!-- Pagination -->
            <div class="mt-10 flex justify-center">
                <nav class="flex items-center">
                    <a href="#" class="px-3 py-1 rounded-lg mr-1 text-gray-500 hover:bg-gray-200">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#" class="px-3 py-1 rounded-lg mx-1 bg-blue-600 text-white">1</a>
                    <a href="#" class="px-3 py-1 rounded-lg mx-1 text-gray-700 hover:bg-gray-200">2</a>
                    <a href="#" class="px-3 py-1 rounded-lg mx-1 text-gray-700 hover:bg-gray-200">3</a>
                    <span class="px-3 py-1 mx-1">...</span>
                    <a href="#" class="px-3 py-1 rounded-lg mx-1 text-gray-700 hover:bg-gray-200">12</a>
                    <a href="#" class="px-3 py-1 rounded-lg ml-1 text-gray-500 hover:bg-gray-200">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </nav>
            </div>
        </div>
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo et description -->
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-building text-blue-400 text-2xl mr-2"></i>
                        <span class="text-xl font-bold text-white">ImmoConnect</span>
                    </div>
                    <p class="text-gray-400 text-sm">
                        La plateforme de location qui simplifie la recherche d'appartements et met en relation propriétaires et locataires.
                    </p>
                    <div class="mt-4 flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Liens utiles -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Liens utiles</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Comment ça marche</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Publier une annonce</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Conseils pour locataires</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Aide et support</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Blog immobilier</a></li>
                    </ul>
                </div>
                
                <!-- Informations légales -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Informations légales</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Conditions générales</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Politique de confidentialité</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Mentions légales</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Gestion des cookies</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-400 text-sm">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            123 rue de l'Immobilier, 75001 Paris
                        </li>
                        <li class="flex items-center text-gray-400 text-sm">
                            <i class="fas fa-phone mr-2"></i>
                            01 23 45 67 89
                        </li>
                        <li class="flex items-center text-gray-400 text-sm">
                            <i class="fas fa-envelope mr-2"></i>
                            contact@immoconnect.fr
                        </li>
                    </ul>
                    </div>       
                </div>
                </div>
</footer>