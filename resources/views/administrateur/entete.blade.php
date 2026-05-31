<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrateur - Centre Hospitalier</title>
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
        .sidebar-gradient {
            background: linear-gradient(180deg, #1e3a8a 0%, #1e40af 100%);
        }
        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="gradient-bg min-h-screen">
    <!-- Top Header -->
    <header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-30">
        <div class="px-8 py-4">
            <div class="flex justify-between items-center">
                <!-- Left Section -->
                <div class="flex items-center space-x-6">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Tableau de bord</h1>
                        <p class="text-gray-500 text-sm mt-1" id="currentDate"></p>
                    </div>
                </div>

                <!-- Right Section -->
                <div class="flex items-center space-x-4">

                    <!-- User Profile Dropdown -->
                    <div class="relative">
                        <button onclick="toggleDropdown()" class="flex items-center space-x-3 bg-gradient-to-r from-blue-900 to-blue-700 px-4 py-2 rounded-lg shadow cursor-pointer hover:shadow-md transition">
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-blue-900 font-semibold">
                                AD
                            </div>
                            <div class="text-white">
                                <p class="font-semibold text-sm">Admin Principal</p>
                                <p class="text-xs text-blue-200">Administrateur</p>
                            </div>
                            <i class="fas fa-chevron-down text-white text-sm ml-2"></i>
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="userDropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 hidden z-50">
                            <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 transition">
                                <i class="fas fa-cog mr-3 text-gray-500"></i>
                                <span>Paramètres</span>
                            </a>
                            <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 transition">
                                <i class="fas fa-envelope mr-3 text-gray-500"></i>
                                <span>Messages</span>
                                <span class="ml-auto bg-blue-500 text-white text-xs px-2 py-1 rounded-full">5</span>
                            </a>
                            <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 transition">
                                <i class="fas fa-bell mr-3 text-gray-500"></i>
                                <span>Notifications</span>
                                <span class="ml-auto bg-red-500 text-white text-xs px-2 py-1 rounded-full">3</span>
                            </a>
                            <div class="border-t border-gray-200 my-2"></div>
                            <a href="#" class="flex items-center px-4 py-2 text-red-600 hover:bg-red-50 transition">
                                <i class="fas fa-sign-out-alt mr-3"></i>
                                <span>Se déconnecter</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content Wrapper -->
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 sidebar-gradient text-white min-h-screen">
            <div class="p-6">
                {{-- <div class="flex items-center space-x-3 mb-8">
                    <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center">
                        <i class="fas fa-hospital text-xl"></i>
                    </div>
                    <span class="font-bold text-lg">Administrateur</span>
                </div> --}}

                <nav class="space-y-2">
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 bg-white/20 rounded-lg">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 hover:bg-white/10 rounded-lg transition">
                        <i class="fas fa-user-shield"></i>
                        <span>Rôles</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 hover:bg-white/10 rounded-lg transition">
                        <i class="fas fa-users"></i>
                        <span>Utilisateurs</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 hover:bg-white/10 rounded-lg transition">
                        <i class="fas fa-hospital"></i>
                        <span>Services</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 hover:bg-white/10 rounded-lg transition">
                        <i class="fas fa-chart-bar"></i>
                        <span>Statistiques</span>
                    </a>
                    <a href="" class="flex items-center space-x-3 px-4 py-3 hover:bg-white/10 rounded-lg transition">
                        <i class="fas fa-person"></i>
                        <span>Patients</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 hover:bg-white/10 rounded-lg transition">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Rendez-vous</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 hover:bg-white/10 rounded-lg transition">
                        <i class="fas fa-stethoscope"></i>
                        <span>Consultations</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 hover:bg-white/10 rounded-lg transition">
                        <i class="fas fa-flask"></i>
                        <span>Examens</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 hover:bg-white/10 rounded-lg transition">
                        <i class="fas fa-vials"></i>
                        <span>Analyses</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 hover:bg-white/10 rounded-lg transition">
                        <i class="fas fa-file-medical"></i>
                        <span>Résultats</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 hover:bg-white/10 rounded-lg transition">
                        <i class="fas fa-cash-register"></i>
                        <span>Caisses</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 hover:bg-white/10 rounded-lg transition">
                        <i class="fas fa-file-invoice-dollar"></i>
                        <span>Factures</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 hover:bg-white/10 rounded-lg transition">
                        <i class="fas fa-cog"></i>
                        <span>Configuration</span>
                    </a>
                </nav>
            </div>
        </aside>

        @yield('content')
    </div>

    <script>
        // Display current date
        function updateDate() {
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const today = new Date();
            const dateString = today.toLocaleDateString('fr-FR', options);
            document.getElementById('currentDate').textContent = dateString.charAt(0).toUpperCase() + dateString.slice(1);
        }

        // Toggle dropdown menu
        function toggleDropdown() {
            const dropdown = document.getElementById('userDropdown');
            dropdown.classList.toggle('hidden');
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('userDropdown');
            const button = event.target.closest('button');
            
            if (!button || !button.onclick) {
                if (!dropdown.contains(event.target)) {
                    dropdown.classList.add('hidden');
                }
            }
        });

        updateDate();
    </script>
</body>
</html>
