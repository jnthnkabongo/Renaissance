@extends('administrateur.entete')
@section('content')
        <!-- Content Area -->
        <main class="flex-1 p-8">
                <!-- Welcome Banner -->
                <div class="bg-gradient-to-r from-blue-900 to-blue-700 rounded-xl p-6 mb-8 text-white">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-2xl font-bold mb-2">Bienvenue, Admin Principal!</h2>
                            <p class="text-blue-200">Vue d'ensemble du système hospitalier. 45 utilisateurs actifs aujourd'hui.</p>
                        </div>
                        <div class="text-right">
                            <p class="text-4xl font-bold">98%</p>
                            <p class="text-blue-200 text-sm">Système opérationnel</p>
                        </div>
                    </div>
                </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-xl shadow card-hover transition duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Total utilisateurs</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">156</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-users text-blue-600 text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow card-hover transition duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Patients actifs</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">342</p>
                        </div>
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-user-injured text-green-600 text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow card-hover transition duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Médecins</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">24</p>
                        </div>
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-user-md text-purple-600 text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow card-hover transition duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Alertes système</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">2</p>
                        </div>
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-exclamation-triangle text-red-600 text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Users List -->
                <div class="lg:col-span-2 bg-white rounded-xl shadow p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold text-gray-800">Utilisateurs récents</h2>
                        <button class="text-blue-600 hover:text-blue-800 text-sm font-semibold">
                            Voir tout <i class="fas fa-arrow-right ml-1"></i>
                        </button>
                    </div>

                    <div class="space-y-4">
                        <!-- User 1 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-blue-900 rounded-full flex items-center justify-center text-white font-semibold">
                                    JP
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">Jean Pierre</p>
                                    <p class="text-sm text-gray-500">Médecin • Cardiologie</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Actif</span>
                                <button class="p-2 hover:bg-gray-200 rounded-lg transition">
                                    <i class="fas fa-chevron-right text-gray-400"></i>
                                </button>
                            </div>
                        </div>

                        <!-- User 2 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-purple-900 rounded-full flex items-center justify-center text-white font-semibold">
                                    ML
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">Marie Lambert</p>
                                    <p class="text-sm text-gray-500">Infirmier • Urgences</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Actif</span>
                                <button class="p-2 hover:bg-gray-200 rounded-lg transition">
                                    <i class="fas fa-chevron-right text-gray-400"></i>
                                </button>
                            </div>
                        </div>

                        <!-- User 3 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-green-900 rounded-full flex items-center justify-center text-white font-semibold">
                                    PM
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">Pierre Martin</p>
                                    <p class="text-sm text-gray-500">Laborantin • Laboratoire</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-semibold">Hors ligne</span>
                                <button class="p-2 hover:bg-gray-200 rounded-lg transition">
                                    <i class="fas fa-chevron-right text-gray-400"></i>
                                </button>
                            </div>
                        </div>

                        <!-- User 4 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-red-900 rounded-full flex items-center justify-center text-white font-semibold">
                                    SD
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">Sophie Durand</p>
                                    <p class="text-sm text-gray-500">Financier • Comptabilité</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Actif</span>
                                <button class="p-2 hover:bg-gray-200 rounded-lg transition">
                                    <i class="fas fa-chevron-right text-gray-400"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-6">
                    <!-- System Status -->
                    <div class="bg-white rounded-xl shadow p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">État du système</h2>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Serveur</span>
                                <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-semibold">OK</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Base de données</span>
                                <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-semibold">OK</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Sauvegardes</span>
                                <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-semibold">OK</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Sécurité</span>
                                <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-xs font-semibold">Attention</span>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="bg-white rounded-xl shadow p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Actions rapides</h2>
                        <div class="grid grid-cols-2 gap-3">
                            <button class="flex flex-col items-center justify-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition">
                                <i class="fas fa-user-plus text-blue-600 text-2xl mb-2"></i>
                                <span class="text-sm font-semibold text-gray-700">Nouvel utilisateur</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-4 bg-green-50 rounded-lg hover:bg-green-100 transition">
                                <i class="fas fa-shield-alt text-green-600 text-2xl mb-2"></i>
                                <span class="text-sm font-semibold text-gray-700">Gérer rôles</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-4 bg-orange-50 rounded-lg hover:bg-orange-100 transition">
                                <i class="fas fa-database text-orange-600 text-2xl mb-2"></i>
                                <span class="text-sm font-semibold text-gray-700">Sauvegardes</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition">
                                <i class="fas fa-chart-line text-purple-600 text-2xl mb-2"></i>
                                <span class="text-sm font-semibold text-gray-700">Rapports</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection
