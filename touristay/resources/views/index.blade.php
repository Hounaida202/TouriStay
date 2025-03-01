<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | ImmoConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-blue-50 to-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-xl w-full max-w-md overflow-hidden">
        <!-- En-tête avec image décorative -->
        <div class="bg-blue-600 h-32 flex items-center justify-center relative">
            <div class="absolute inset-0 opacity-20 bg-[url('https://api.placeholder.com/1200/800')] bg-cover bg-center"></div>
            <h1 class="text-white text-3xl font-bold relative z-10">ImmoConnect</h1>
        </div>
        
        <div class="p-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-sign-in-alt mr-3 text-blue-500"></i>
                Connexion
            </h2>
            
            <!-- Formulaire de connexion -->
            <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf
                
                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Adresse email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400"></i>
                        </div>
                        <input type="email" id="email" name="email" placeholder="Votre email" required 
                            class="pl-10 w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                    </div>
                </div>
                
                <!-- Mot de passe -->
                <div>
                    
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input type="password" id="password" name="password" placeholder="Votre mot de passe" required 
                            class="pl-10 w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                    </div>
                </div>
                
                <!-- Option Se souvenir de moi -->
                <div class="flex items-center">
                    <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                        Se souvenir de moi
                    </label>
                </div>
                
                <!-- Bouton de connexion -->
                <button type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition flex items-center justify-center">
                    <i class="fas fa-sign-in-alt mr-2"></i>
                    Se connecter
                </button>
                
                <!-- Affichage des erreurs -->
                @if ($errors->any())
                    <div class="bg-red-50 border-l-4 border-red-500 p-4 mt-4 rounded">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <i class="fas fa-exclamation-circle text-red-500"></i>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-red-800">Erreurs de connexion:</h3>
                                <ul class="mt-1 text-sm text-red-700 list-disc list-inside">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
                
                <!-- Lien pour créer un compte -->
                <div class="text-center text-sm text-gray-600 mt-4">
                    Vous n'avez pas de compte? 
                    <a href="{{ route('register') }}" class="text-blue-600 hover:underline font-medium">Inscrivez-vous</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>