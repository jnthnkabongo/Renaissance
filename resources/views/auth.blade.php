<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Centre Hospitalier</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #EEEFF1 0%, #F1EFF3 100%);
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        .input-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            font-size: 15px;
            line-height: 1;
        }
        .input-with-icon {
            /* padding-left: 58px; */
            margin-right: 40px;
            padding-right: 10px;
        }
    </style>
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center p-4">
    <div class="glass-effect p-8 md:p-10 rounded-2xl shadow-2xl w-full max-w-md animate-fade-in">
        <!-- Logo and Header -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-900 to-blue-600 rounded-full mb-4 shadow-lg">
                <i class="fas fa-hospital text-white text-3xl"></i>
            </div>
            <h1 class="text-3xl font-bold bg-gradient-to-r from-blue-900 to-blue-600 bg-clip-text text-transparent">
                Centre Hospitalier
            </h1>
            <p class="text-gray-600 mt-2 text-sm">Bienvenue! Connectez-vous à votre espace</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            @if ($errors->any())
                <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 rounded-lg mb-6 animate-pulse">
                    <div class="flex items-center">
                        <i class="fas fa-exclamation-circle mr-2"></i>
                        <div>
                            @foreach ($errors->all() as $error)
                                <p class="text-sm">{{ $error }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            <!-- Email Field -->
            <div class="relative">
                <label for="email" class="block text-gray-700 font-semibold mb-2 text-sm">
                    <i class="fas fa-envelope mr-1 text-blue-600"></i> Email
                </label>
                <div class="relative">
                    <i class="fas fa-envelope input-icon" id="emailIcon"></i>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="input-with-icon w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300"
                        required
                        value="{{ old('email') }}"
                        placeholder="&nbsp;&nbsp;&nbsp;&nbsp;votre@email.com"
                        oninput="toggleInputIcon('email', 'emailIcon')"
                    >
                </div>
            </div>

            <!-- Password Field -->
            <div class="relative">
                <label for="password" class="block text-gray-700 font-semibold mb-2 text-sm">
                    <i class="fas fa-lock mr-1 text-blue-600"></i> Mot de passe
                </label>
                <div class="relative">
                    <i class="fas fa-lock input-icon" id="passwordFieldIcon"></i>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="input-with-icon w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300"
                        required
                        placeholder="&nbsp;&nbsp;&nbsp;&nbsp;••••••••"
                        oninput="toggleInputIcon('password', 'passwordFieldIcon')"
                    >
                    <button type="button" onclick="togglePassword()" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600 transition">
                        <i class="fas fa-eye" id="eyeIcon"></i>
                    </button>
                </div>
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="flex items-center justify-between">
                <label class="flex items-center cursor-pointer">
                    <input type="checkbox" name="remember" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <span class="ml-2 text-sm text-gray-600">Se souvenir de moi</span>
                </label>
                <a href="#" class="text-sm text-blue-600 hover:text-blue-800 transition">
                    Mot de passe oublié?
                </a>
            </div>

            <!-- Submit Button -->
            <button 
                type="submit" 
                class="w-full bg-gradient-to-r from-blue-900 to-blue-600 text-white py-3 rounded-lg hover:from-blue-700 hover:to-blue-700 transition duration-300 font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-0.5"
            >
                <i class="fas fa-sign-in-alt mr-2"></i> Se connecter
            </button>
        </form>

        <!-- Divider -->
        <div class="my-6 flex items-center">
            <div class="flex-1 border-t border-gray-300"></div>
            <span class="px-4 text-sm text-gray-500">ou</span>
            <div class="flex-1 border-t border-gray-300"></div>
        </div>

        <!-- Social Login -->
        <div class="grid grid-cols-2 gap-4">
            <button class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-300">
                <i class="fab fa-google text-red-600 mr-2"></i>
                <span class="text-sm text-gray-700">Google</span>
            </button>
            <button class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-300">
                <i class="fab fa-microsoft text-blue-600 mr-2"></i>
                <span class="text-sm text-gray-700">Microsoft</span>
            </button>
        </div>

        <!-- Footer -->
        <div class="mt-8 text-center">
            <p class="text-gray-600 text-sm">
                © 2024 Centre Hospitalier. Tous droits réservés.
            </p>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }

        function toggleInputIcon(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            
            if (input.value.length > 0) {
                icon.style.opacity = '0';
                icon.style.transition = 'opacity 0.2s ease';
            } else {
                icon.style.opacity = '1';
                icon.style.transition = 'opacity 0.2s ease';
            }
        }

        // Initialize icons visibility on page load
        document.addEventListener('DOMContentLoaded', function() {
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            
            if (emailInput.value.length > 0) {
                document.getElementById('emailIcon').style.opacity = '0';
            }
            if (passwordInput.value.length > 0) {
                document.getElementById('passwordFieldIcon').style.opacity = '0';
            }
        });
    </script>
</body>
</html>
