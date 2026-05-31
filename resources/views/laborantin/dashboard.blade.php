@extends('laborantin.entete')
@section('content')
        <!-- Content Area -->
        <main class="flex-1 p-8">
                <!-- Welcome Banner -->
                <div class="bg-gradient-to-r from-blue-900 to-blue-700 rounded-xl p-6 mb-8 text-white">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-2xl font-bold mb-2">Bienvenue, Pierre Martin!</h2>
                            <p class="text-blue-200">Vue d'ensemble du laboratoire. 8 analyses en attente de résultats.</p>
                        </div>
                        <div class="text-right">
                            <p class="text-4xl font-bold">156</p>
                            <p class="text-blue-200 text-sm">Analyses ce mois</p>
                        </div>
                    </div>
                </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-xl shadow card-hover transition duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Analyses en cours</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">24</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-flask text-blue-600 text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow card-hover transition duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Résultats prêts</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">132</p>
                        </div>
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-check-circle text-green-600 text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow card-hover transition duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">En attente</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">8</p>
                        </div>
                        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-clock text-orange-600 text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow card-hover transition duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Stock faible</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">3</p>
                        </div>
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-exclamation-triangle text-red-600 text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Recent Analyses -->
                <div class="lg:col-span-2 bg-white rounded-xl shadow p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold text-gray-800">Analyses récentes</h2>
                        <button class="text-blue-600 hover:text-blue-800 text-sm font-semibold">
                            Voir tout <i class="fas fa-arrow-right ml-1"></i>
                        </button>
                    </div>

                    <div class="space-y-4">
                        <!-- Analysis 1 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-blue-900 rounded-lg flex items-center justify-center text-white">
                                    <i class="fas fa-vial"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">ANA-2024-00156</p>
                                    <p class="text-sm text-gray-500">Jean Pierre • Sang complet</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Terminé</span>
                                <button class="p-2 hover:bg-gray-200 rounded-lg transition">
                                    <i class="fas fa-chevron-right text-gray-400"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Analysis 2 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-purple-900 rounded-lg flex items-center justify-center text-white">
                                    <i class="fas fa-vial"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">ANA-2024-00155</p>
                                    <p class="text-sm text-gray-500">Marie Lambert • Urine</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold">En cours</span>
                                <button class="p-2 hover:bg-gray-200 rounded-lg transition">
                                    <i class="fas fa-chevron-right text-gray-400"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Analysis 3 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-green-900 rounded-lg flex items-center justify-center text-white">
                                    <i class="fas fa-vial"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">ANA-2024-00154</p>
                                    <p class="text-sm text-gray-500">Pierre Martin • Biochimie</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Terminé</span>
                                <button class="p-2 hover:bg-gray-200 rounded-lg transition">
                                    <i class="fas fa-chevron-right text-gray-400"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Analysis 4 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-red-900 rounded-lg flex items-center justify-center text-white">
                                    <i class="fas fa-vial"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">ANA-2024-00153</p>
                                    <p class="text-sm text-gray-500">Sophie Durand • Hématologie</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-semibold">En attente</span>
                                <button class="p-2 hover:bg-gray-200 rounded-lg transition">
                                    <i class="fas fa-chevron-right text-gray-400"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-6">
                    <!-- Stock Status -->
                    <div class="bg-white rounded-xl shadow p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">État du stock</h2>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Réactifs sanguins</span>
                                <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-semibold">OK</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Tubes à essai</span>
                                <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-semibold">OK</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Gants</span>
                                <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-xs font-semibold">Faible</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Lamelles</span>
                                <span class="px-2 py-1 bg-red-100 text-red-700 rounded text-xs font-semibold">Critique</span>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="bg-white rounded-xl shadow p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Actions rapides</h2>
                        <div class="grid grid-cols-2 gap-3">
                            <button class="flex flex-col items-center justify-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition">
                                <i class="fas fa-plus text-blue-600 text-2xl mb-2"></i>
                                <span class="text-sm font-semibold text-gray-700">Nouvelle analyse</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-4 bg-green-50 rounded-lg hover:bg-green-100 transition">
                                <i class="fas fa-file-medical text-green-600 text-2xl mb-2"></i>
                                <span class="text-sm font-semibold text-gray-700">Saisir résultats</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-4 bg-orange-50 rounded-lg hover:bg-orange-100 transition">
                                <i class="fas fa-boxes text-orange-600 text-2xl mb-2"></i>
                                <span class="text-sm font-semibold text-gray-700">Gérer stock</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition">
                                <i class="fas fa-print text-purple-600 text-2xl mb-2"></i>
                                <span class="text-sm font-semibold text-gray-700">Imprimer</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection
