<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Détails de l'appartement | ImmoConnect</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
       
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
    <!-- ... (le contenu principal reste inchangé jusqu'au modal) ... -->
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
                        <button id="reservation-button" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 mb-3 flex items-center justify-center">
        Faire une réservation                
    </button>

                        <button id="continue-to-payment" class="w-full bg-white hover:bg-gray-50 text-gray-700 font-medium py-2 px-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 flex items-center justify-center">
                           Faire un payment
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

    <!-- Modal de sélection des dates -->
    <div id="reservation-modal" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg p-6 max-w-md w-full">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold">Choisir les dates</h3>
                <button id="close-reservation-modal" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <form action="{{ route('reservations.store', ['annance_id' => $annance->id]) }}" method="POST" id="date-selection-form">
                @csrf
                <div class="mb-4">
                    <label for="date_debut" class="block mb-2 font-medium text-gray-700">Date de début</label>
                    <input type="text" 
                           id="date_debut" 
                           name="debut" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md"
                           placeholder="Sélectionnez la date de début">
                </div>

                <div class="mb-4">
                    <label for="date_fin" class="block mb-2 font-medium text-gray-700">Date de fin</label>
                    <input type="text" 
                           id="date_fin" 
                           name="fin" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md"
                           placeholder="Sélectionnez la date de fin">
                </div>

                <button type="submit"   class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg">
                    Continuer vers le paiement
                </button>
            </form>
        </div>
    </div>


    
    
   
<script src="https://js.stripe.com/v3"></script>
           <script type="text/javascript">

var stripe = Stripe('{{env("STRIPE_KEY)}}');
var element=stripe.element();
           </script>   
    <script>

// document.addEventListener('DOMContentLoaded', function() {
//     // Récupère les dates du backend
    
    document.addEventListener('DOMContentLoaded', function() {
      

            // Initialisation des calendriers
            const dateDebut = flatpickr("#date_debut", {
                dateFormat: "Y-m-d",
                minDate: "today",
                locale: "fr",
               
        
        
         });
            });

            const dateFin = flatpickr("#date_fin", {
                dateFormat: "Y-m-d",
                minDate: "today",
                locale: "fr"
            });

            // Gestion des modals
            const reservationModal = document.getElementById('reservation-modal');
            const paymentModal = document.getElementById('payment-modal');
            const openReservationButton = document.getElementById('reservation-button');
            const continueToPaymentButton = document.getElementById('continue-to-payment');

            // Ouvrir le modal de réservation
            openReservationButton.addEventListener('click', () => {
                reservationModal.classList.remove('hidden');
            });

      
        
        </script>



<!-- //    ----------------------------------------------------------- -->

    <!-- Modal de paiement -->
    <!-- <div id="payment-modal" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-lg p-6 max-w-md w-full">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-semibold text-gray-800">Paiement</h3>
            <button id="close-payment-modal" class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <form role="form" 
              action="{{ route('stripe.post') }}" 
              method="post" 
              class="require-validation space-y-4" 
              data-cc-on-file="false" 
              data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" 
              id="payment-form">
            @csrf
            <input type="hidden" name="debut" id="hidden_debut">
            <input type="hidden" name="fin" id="hidden_fin">
            
            <div class="mb-4">
                <label class="block mb-2 font-medium text-gray-700">Nom sur la carte</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" type="text">
            </div>
            
            <div class="mb-4">
                <label class="block mb-2 font-medium text-gray-700">Numéro de carte</label>
                <input autocomplete="off" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 card-number" 
                       type="text">
            </div>
            
            <div class="grid grid-cols-3 gap-4 mb-4">
                <div>
                    <label class="block mb-2 font-medium text-gray-700">CVC</label>
                    <input autocomplete="off" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 card-cvc" 
                           placeholder="ex. 311" 
                           type="text">
                </div>
                <div>
                    <label class="block mb-2 font-medium text-gray-700">Mois exp.</label>
                    <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 card-expiry-month" 
                           placeholder="MM" 
                           type="text">
                </div>
                <div>
                    <label class="block mb-2 font-medium text-gray-700">Année exp.</label>
                    <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 card-expiry-year" 
                           placeholder="AAAA" 
                           type="text">
                </div>
            </div>
            
            <div class="bg-gray-100 p-4 rounded-lg mb-6">
                <div class="flex justify-between items-center text-lg font-medium">
                    <span>Montant total:</span>
                    <span id="payment-amount">100 €</span>
                </div>
            </div>
            
            <button type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150">
                Payer et réserver
            </button>
        </form>
    </div>
</div> -->

    <script>
document.addEventListener('DOMContentLoaded', function() {
    // Récupérer l'ID de l'annonce depuis l'URL
    const urlParams = new URLSearchParams(window.location.search);
    const annanceId = urlParams.get('annance_id');

    // Récupérer les dates réservées depuis Laravel
    fetch(`/dates/reserved/${annanceId}`)
        .then(response => response.json())
        .then(dates => {
            let disabledDates = [];

            // Convertir chaque plage de dates en une liste de jours à désactiver
            dates.forEach(date => {
                let start = new Date(date.date_debut);
                let end = new Date(date.date_fin);

                while (start <= end) {
                    disabledDates.push(start.toISOString().split('T')[0]); 
                    start.setDate(start.getDate() + 1);
                }
            });

            // Initialisation du calendrier avec les dates désactivées en rouge
            flatpickr("#date_debut", {
                dateFormat: "Y-m-d",
                minDate: "today",
                locale: "fr",
                disable: disabledDates // Désactiver les dates réservées
            });

            flatpickr("#date_fin", {
                dateFormat: "Y-m-d",
                minDate: "today",
                locale: "fr",
                disable: disabledDates // Désactiver les dates réservées
            });
        })
        .catch(error => console.error('Erreur lors du chargement des dates:', error));
});
</script>

</body>
</html>