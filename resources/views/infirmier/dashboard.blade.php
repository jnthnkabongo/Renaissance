@extends('infirmier.entete')
@section('content')
        <!-- Content Area -->
        <main class="flex-1 p-8">
                <!-- Welcome Banner -->
                <div class="bg-gradient-to-r from-blue-900 to-blue-700 rounded-xl p-6 mb-8 text-white">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-2xl font-bold mb-2">Bienvenue, Marie Dupont!</h2>
                            <p class="text-blue-200">Vous avez 12 patients assignés aujourd'hui. 5 visites complétées sur 8.</p>
                        </div>
                        <div class="text-right">
                            <p class="text-4xl font-bold">85%</p>
                            <p class="text-blue-200 text-sm">Progression</p>
                        </div>
                    </div>
                </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-xl shadow card-hover transition duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Patients assignés</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">12</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-users text-blue-600 text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow card-hover transition duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Visites aujourd'hui</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">8</p>
                        </div>
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-check-circle text-green-600 text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow card-hover transition duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Médicaments à donner</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">5</p>
                        </div>
                        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-pills text-orange-600 text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow card-hover transition duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Alertes</p>
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
                <!-- Patients List -->
                <div class="lg:col-span-2 bg-white rounded-xl shadow p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold text-gray-800">Patients assignés</h2>
                        <button class="text-blue-600 hover:text-blue-800 text-sm font-semibold">
                            Voir tout <i class="fas fa-arrow-right ml-1"></i>
                        </button>
                    </div>

                    <div class="space-y-4">
                        <!-- Patient 1 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-blue-900 rounded-full flex items-center justify-center text-white font-semibold">
                                    JP
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">Jean Pierre</p>
                                    <p class="text-sm text-gray-500">Chambre 201 • Lit 3</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Stable</span>
                                <button class="p-2 hover:bg-gray-200 rounded-lg transition">
                                    <i class="fas fa-chevron-right text-gray-400"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Patient 2 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-purple-900 rounded-full flex items-center justify-center text-white font-semibold">
                                    ML
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">Marie Lambert</p>
                                    <p class="text-sm text-gray-500">Chambre 205 • Lit 1</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-semibold">Surveillance</span>
                                <button class="p-2 hover:bg-gray-200 rounded-lg transition">
                                    <i class="fas fa-chevron-right text-gray-400"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Patient 3 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-green-900 rounded-full flex items-center justify-center text-white font-semibold">
                                    PM
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">Pierre Martin</p>
                                    <p class="text-sm text-gray-500">Chambre 203 • Lit 2</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Stable</span>
                                <button class="p-2 hover:bg-gray-200 rounded-lg transition">
                                    <i class="fas fa-chevron-right text-gray-400"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Patient 4 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-red-900 rounded-full flex items-center justify-center text-white font-semibold">
                                    SD
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">Sophie Durand</p>
                                    <p class="text-sm text-gray-500">Chambre 210 • Lit 4</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-semibold">Urgent</span>
                                <button class="p-2 hover:bg-gray-200 rounded-lg transition">
                                    <i class="fas fa-chevron-right text-gray-400"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-6">
                    <!-- Today's Schedule -->
                    <div class="bg-white rounded-xl shadow p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Planning du jour</h2>
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3 p-3 bg-blue-50 rounded-lg">
                                <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-800 text-sm">Visite matinale</p>
                                    <p class="text-xs text-gray-500">08:00 - 10:00</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3 p-3 bg-green-50 rounded-lg">
                                <div class="w-2 h-2 bg-green-600 rounded-full"></div>
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-800 text-sm">Administration médicaments</p>
                                    <p class="text-xs text-gray-500">10:00 - 12:00</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3 p-3 bg-orange-50 rounded-lg">
                                <div class="w-2 h-2 bg-orange-600 rounded-full"></div>
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-800 text-sm">Signes vitaux</p>
                                    <p class="text-xs text-gray-500">14:00 - 16:00</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3 p-3 bg-purple-50 rounded-lg">
                                <div class="w-2 h-2 bg-purple-600 rounded-full"></div>
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-800 text-sm">Visite soir</p>
                                    <p class="text-xs text-gray-500">18:00 - 20:00</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="bg-white rounded-xl shadow p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Actions rapides</h2>
                        <div class="grid grid-cols-2 gap-3">
                            <button class="flex flex-col items-center justify-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition">
                                <i class="fas fa-plus-circle text-blue-600 text-2xl mb-2"></i>
                                <span class="text-sm font-semibold text-gray-700">Nouveau patient</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-4 bg-green-50 rounded-lg hover:bg-green-100 transition">
                                <i class="fas fa-heartbeat text-green-600 text-2xl mb-2"></i>
                                <span class="text-sm font-semibold text-gray-700">Signes vitaux</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-4 bg-orange-50 rounded-lg hover:bg-orange-100 transition">
                                <i class="fas fa-pills text-orange-600 text-2xl mb-2"></i>
                                <span class="text-sm font-semibold text-gray-700">Médicaments</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition">
                                <i class="fas fa-file-medical text-purple-600 text-2xl mb-2"></i>
                                <span class="text-sm font-semibold text-gray-700">Rapport</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection