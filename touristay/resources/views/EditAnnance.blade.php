<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Propriétaire | ImmoConnect</title>
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
                            Tableau de bord
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Ajouter une annonce
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Demandes reçues
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
                            <img src="{{Auth()->user()->image}}" alt="User" class="h-full w-full object-cover">
                        </a>
                            <span class="ml-2 text-gray-700 text-sm font-medium"> {{ Auth()->user()->nom}}</span>
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
    
    <!-- Hero section avec ajout d'annonce -->
    <div class="bg-blue-600 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"> 
            <!-- Formulaire d'ajout d'annonce -->
            <div class="mt-8 sm:mx-auto sm:max-w-3xl">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Ajouter une nouvelle annonce</h2>
                    <form method="POST" action="">                
                          
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Titre de l'annonce*</label>
                                <input type="text" id="title" name="titre" value="{{$annance->titre}}" 
                                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Adresse*</label>
                                <input type="text" id="address" name="adresse" placeholder="Ex: 123 rue de Paris, 75001 Paris" 
                                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                            <div>
                                <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Prix (MAD/mois)*</label>
                                <input type="number" id="price" name="prix" placeholder="Ex: 5000" 
                                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label for="start_date" class="block text-sm font-medium text-gray-700 mb-1">Date de disponibilité*</label>
                                <input type="date" id="start_date" name="debut" 
                                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label for="start_date" class="block text-sm font-medium text-gray-700 mb-1">Date de fin de location</label>
                                <input type="date" id="start_date" name="fin" 
                                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description*</label>
                            <textarea id="description" name="description" rows="4" placeholder="Décrivez votre bien en détail..." 
                                class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                        </div>
                        
                        <div class="mb-4">
                            <label for="equipment" class="block text-sm font-medium text-gray-700 mb-1">Équipements (séparés par des virgules)</label>
                            <input type="text" id="equipment" name="equipement" placeholder="Ex: Climatisation, Balcon, Parking, Meublé" 
                                class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                            <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Image principale*</label>
                                    <div class="border border-dashed border-gray-300 rounded-lg p-4 text-center">
                                        <input type="text" id="image1" name="image1" class="w-full text-sm p-2 border border-gray-300 rounded" placeholder="Entrez le lien de l'image" />
                                    </div>
                                </div>
                                <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Image secondaire*</label>
                                    <div class="border border-dashed border-gray-300 rounded-lg p-4 text-center">
                                        <input type="text" id="image2" name="image2" class="w-full text-sm p-2 border border-gray-300 rounded" placeholder="Entrez le lien de l'image" />
                                    </div>
                                </div>
                                <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Image secondaire*</label>
                                    <div class="border border-dashed border-gray-300 rounded-lg p-4 text-center">
                                        <input type="text" id="image3" name="image3" class="w-full text-sm p-2 border border-gray-300 rounded" placeholder="Entrez le lien de l'image" />
                                    </div>
                                </div>
                        </div>
                        
                        <div class="flex justify-end">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition flex items-center justify-center">
                                <i class="fas fa-plus-circle mr-2"></i>
                                Sauvegarder les modifications
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
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Conseils pour propriétaires</a></li>
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
</body>
</html>