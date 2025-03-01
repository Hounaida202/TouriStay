<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'appartement | ImmoConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    <!-- Navigation -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-blue-600 text-xl font-bold">ImmoConnect</span>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="#" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Accueil
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Recherche
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Favoris
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Messages
                        </a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <button class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <span class="sr-only">Notifications</span>
                        <i class="fas fa-bell"></i>
                    </button>

                    <!-- Profile dropdown -->
                    <div class="ml-3 relative">
                        <div>
                            <button class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                <span class="sr-only">Mon profil</span>
                                <img class="h-8 w-8 rounded-full" src="/api/placeholder/32/32" alt="Photo de profil">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <!-- Mobile menu button -->
                    <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <main class="flex-grow container mx-auto px-4 py-8">
        <!-- Fil d'Ariane -->
        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        <i class="fas fa-home mr-2"></i>
                        Accueil
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2 text-sm"></i>
                        <a href="#" class="text-sm font-medium text-gray-700 hover:text-blue-600">Appartements à Paris</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2 text-sm"></i>
                        <span class="text-sm font-medium text-gray-500">Appartement cosy au cœur de Paris</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Titre de l'annonce -->
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-900">{{ $annance->titre }}</h1>
            <p class="text-lg text-gray-600 mt-1">
                <i class="fas fa-map-marker-alt text-blue-500 mr-2"></i>
                {{ $annance->adresse }}
            </p>
        </div>

        <!-- Galerie d'images -->
        <div class="grid grid-cols-12 gap-4 mb-6">
            <div class="col-span-12 md:col-span-8">
                <img src="{{ $annance->image1 }}" alt="Photo principale" class="w-full h-96 object-cover rounded-lg shadow-md">
            </div>
            <div class="col-span-12 md:col-span-4 grid grid-rows-2 gap-4">
                <img src="{{ $annance->image2 }}" alt="Photo secondaire 1" class="w-full h-full object-cover rounded-lg shadow-md">
                <img src="{{ $annance->image3 }}" alt="Photo secondaire 2" class="w-full h-full object-cover rounded-lg shadow-md">
            </div>
        </div>

        <!-- Informations principales -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <!-- Détails de l'annonce -->
            <div class="md:col-span-2">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <!-- Informations clés -->
                    <div class="grid grid-cols-3 divide-x divide-gray-200 text-center p-4 border-b">
                        <div class="flex flex-col p-3">
                            <span class="text-gray-500 text-sm">Prix</span>
                            <span class="text-xl font-bold text-blue-600">{{ $annance->prix }} MAD/mois</span>
                        </div>
                        <!-- <div class="flex flex-col p-3">
                            <span class="text-gray-500 text-sm">Superficie</span>
                            <span class="text-xl font-bold text-gray-800">45 m²</span>
                        </div>
                        <div class="flex flex-col p-3">
                            <span class="text-gray-500 text-sm">Pièces</span>
                            <span class="text-xl font-bold text-gray-800">2</span>
                        </div> -->
                    </div>

                    <!-- Caractéristiques -->
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Caractéristiques</h2>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex items-center">
                                <i class="fas fa-calendar-alt text-blue-500 mr-3"></i>
                                <div>
                                    <p class="text-sm text-gray-500">Date de disponibilité</p>
                                    <p class="font-medium">{{ $annance->debut }}</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-clock text-blue-500 mr-3"></i>
                                <div>
                                    <p class="text-sm text-gray-500">Date de fin de location</p>
                                    <p class="font-medium">{{ $annance->fin }}</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-building text-blue-500 mr-3"></i>
                                <div>
                                    <p class="text-sm text-gray-500">Étage</p>
                                    <p class="font-medium">3ème étage</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-couch text-blue-500 mr-3"></i>
                                <div>
                                    <p class="text-sm text-gray-500">Meublé</p>
                                    <p class="font-medium">{{ $annance->eqipement }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="p-6 border-t border-gray-200">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Description</h2>
                        <p class="text-gray-600 leading-relaxed">
                        {{ $annance->description }}
                        </p>
                        <!-- <p class="text-gray-600 leading-relaxed mt-4">
                            L'appartement est idéalement situé à proximité des commerces, restaurants et transports
                            (métro ligne 10 à 2 min à pied). Parfait pour un étudiant ou un jeune actif.
                        </p>
                        <p class="text-gray-600 leading-relaxed mt-4">
                            Charges incluses : eau froide, chauffage collectif. Électricité à la charge du locataire.
                            Caution : 2 mois de loyer. Garant demandé.
                        </p> -->
                    </div>

                    <!-- Équipements -->
                    <div class="p-6 border-t border-gray-200">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Équipements</h2>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                            <div class="flex items-center">
                                <i class="fas fa-wifi text-blue-500 mr-2"></i>
                                <span class="text-gray-700">Internet fibre</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-temperature-low text-blue-500 mr-2"></i>
                                <span class="text-gray-700">Climatisation</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-tv text-blue-500 mr-2"></i>
                                <span class="text-gray-700">Télévision</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-utensils text-blue-500 mr-2"></i>
                                <span class="text-gray-700">Cuisine équipée</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-washer text-blue-500 mr-2"></i>
                                <span class="text-gray-700">Lave-linge</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-snowflake text-blue-500 mr-2"></i>
                                <span class="text-gray-700">Réfrigérateur</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact et actions -->
            <div class="md:col-span-1">
                <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Contacter le propriétaire</h2>
                        <div class="flex items-center mb-4">
                            <img src="/api/placeholder/48/48" alt="Photo du propriétaire" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h3 class="font-medium text-gray-800">Pierre Dupont</h3>
                                <p class="text-gray-500 text-sm">Membre depuis 2023</p>
                            </div>
                        </div>
                        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 mb-3 flex items-center justify-center">
                            <i class="fas fa-comment-alt mr-2"></i>
                            Envoyer un message
                        </button>
                        <button class="w-full bg-white hover:bg-gray-50 text-gray-700 font-medium py-2 px-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 flex items-center justify-center">
                            <i class="fas fa-phone-alt mr-2 text-blue-500"></i>
                            Afficher le numéro
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Actions</h2>
                         <form action="{{ route('favoris.store', $annance->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full bg-white hover:bg-gray-50 text-gray-700 font-medium py-2 px-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 mb-3 flex items-center justify-center">
                                <i class="far fa-heart mr-2 text-red-500"></i>
                                Sauvegarder
                            </button>
                        </form>
                        <!-- <form action="{{ route('annance.destroy', $annance->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cette annonce ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form> -->
                        <button class="w-full bg-white hover:bg-gray-50 text-gray-700 font-medium py-2 px-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 mb-3 flex items-center justify-center">
                            <i class="fas fa-share-alt mr-2 text-blue-500"></i>
                            Partager
                        </button>
                        <button class="w-full bg-white hover:bg-gray-50 text-gray-700 font-medium py-2 px-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 flex items-center justify-center">
                            <i class="fas fa-flag mr-2 text-orange-500"></i>
                            Signaler
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte de localisation -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Localisation</h2>
                <div class="h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                    <p class="text-gray-500">Carte de localisation</p>
                </div>
                <div class="mt-4">
                    <h3 class="font-medium text-gray-800 mb-2">À proximité</h3>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="flex items-center">
                            <i class="fas fa-subway text-blue-500 mr-2"></i>
                            <span class="text-gray-700">Métro à 2 min</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-store text-blue-500 mr-2"></i>
                            <span class="text-gray-700">Commerces à 5 min</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-utensils text-blue-500 mr-2"></i>
                            <span class="text-gray-700">Restaurants à 2 min</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-university text-blue-500 mr-2"></i>
                            <span class="text-gray-700">Université à 10 min</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Annonces similaires -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Annonces similaires</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Annonce similaire 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Appartement" class="w-full h-48 object-cover">
                        <span class="absolute top-3 right-3 bg-blue-600 text-white text-sm px-2 py-1 rounded-full">950 €/mois</span>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800 mb-1">Studio moderne à Saint-Michel</h3>
                        <p class="text-gray-600 text-sm mb-3"><i class="fas fa-map-marker-alt text-blue-500 mr-1"></i> Paris 6ème</p>
                        <div class="flex justify-between text-sm text-gray-500">
                            <span><i class="fas fa-expand mr-1"></i> 30m²</span>
                            <span><i class="fas fa-bed mr-1"></i> 1 pièce</span>
                            <span><i class="fas fa-calendar-alt mr-1"></i> Disponible</span>
                        </div>
                    </div>
                </div>
                
                <!-- Annonce similaire 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Appartement" class="w-full h-48 object-cover">
                        <span class="absolute top-3 right-3 bg-blue-600 text-white text-sm px-2 py-1 rounded-full">1300 €/mois</span>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800 mb-1">Appartement de charme au Marais</h3>
                        <p class="text-gray-600 text-sm mb-3"><i class="fas fa-map-marker-alt text-blue-500 mr-1"></i> Paris 4ème</p>
                        <div class="flex justify-between text-sm text-gray-500">
                            <span><i class="fas fa-expand mr-1"></i> 48m²</span>
                            <span><i class="fas fa-bed mr-1"></i> 2 pièces</span>
                            <span><i class="fas fa-calendar-alt mr-1"></i> 01/04/2025</span>
                        </div>
                    </div>
                </div>
                
                <!-- Annonce similaire 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Appartement" class="w-full h-48 object-cover">
                        <span class="absolute top-3 right-3 bg-blue-600 text-white text-sm px-2 py-1 rounded-full">1150 €/mois</span>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800 mb-1">T2 lumineux à Montparnasse</h3>
                        <p class="text-gray-600 text-sm mb-3"><i class="fas fa-map-marker-alt text-blue-500 mr-1"></i> Paris 14ème</p>
                        <div class="flex justify-between text-sm text-gray-500">
                            <span><i class="fas fa-expand mr-1"></i> 42m²</span>
                            <span><i class="fas fa-bed mr-1"></i> 2 pièces</span>
                            <span><i class="fas fa-calendar-alt mr-1"></i> Disponible</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo et description -->
                <div class="md:col-span-1">
                    <h2 class="text-blue-600 text-2xl font-bold">ImmoConnect</h2>
                    <p class="mt-2 text-sm text-gray-500">
                        Votre plateforme de confiance pour trouver votre prochain logement en toute simplicité.
                    </p>
                    <div class="flex space-x-4 mt-4">
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
                
                <!-- Navigation rapide -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Navigation</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">Accueil</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">Recherche</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">Annonces récentes</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">Comment ça marche</a></li>
                    </ul>
                </div>
                
                <!-- Liens utiles -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Informations</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">À propos</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">Conditions d'utilisation</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">Politique de confidentialité</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">Contactez-nous</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Contact</h3>
                    <ul class="mt-4 space-y-2">
                        <li class="flex">
                            <i class="fas fa-map-marker-alt text-blue-500 mt-1 mr-2"></i>
                            <span class="text-base text-gray-600">123 Rue de Paris, 75001 Paris</span>
                        </li>
                        <li class="flex">
                            <i class="fas fa-phone-alt text-blue-500 mt-1 mr-2"></i>
                            <span class="text-base text-gray-600">+33 1 23 45 67 89</span>
                        </li>
                        <li class="flex">
                            <i class="fas fa-envelope text-blue-500 mt-1 mr-2"></i>
                            <span class="text-base text-gray-600">contact@immoconnect.fr</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="mt-8 pt-8 border-t border-gray-200 flex flex-col md:flex-row justify-between">
                <p class="text-base text-gray-400">&copy; 2025 ImmoConnect. Tous droits réservés.</p>
                <p class="text-base text-gray-400 mt-2 md:mt-0">Conçu avec <i class="fas fa-heart text-red-500"></i> pour les locataires</p>
            </div>
        </div>
    </footer>
</body>
</html>