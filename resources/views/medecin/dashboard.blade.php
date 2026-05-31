@extends('medecin.entete')
@section('content')
        <!-- Content Area -->
        <main class="flex-1 p-8">
                <!-- Welcome Banner -->
                <div class="bg-gradient-to-r from-blue-900 to-blue-700 rounded-xl p-6 mb-8 text-white">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-2xl font-bold mb-2">Bienvenue, Dr. Jean Pierre!</h2>
                            <p class="text-blue-200">Vue d'overview médicale. 12 patients à voir aujourd'hui, 5 consultations complétées.</p>
                        </div>
                        <div class="text-right">
                            <p class="text-4xl font-bold">42%</p>
                            <p class="text-blue-200 text-sm">Progression</p>
                        </div>
                    </div>
                </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-xl shadow card-hover transition duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Patients aujourd'hui</p>
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
                            <p class="text-gray-500 text-sm">Consultations</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">5</p>
                        </div>
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-check-circle text-green-600 text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow card-hover transition duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Rendez-vous</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">7</p>
                        </div>
                        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-calendar-alt text-orange-600 text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow card-hover transition duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Ordonnances</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">8</p>
                        </div>
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-prescription text-purple-600 text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Today's Appointments -->
                <div class="lg:col-span-2 bg-white rounded-xl shadow p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold text-gray-800">Rendez-vous du jour</h2>
                        <button class="text-blue-600 hover:text-blue-800 text-sm font-semibold">
                            Voir tout <i class="fas fa-arrow-right ml-1"></i>
                        </button>
                    </div>

                    <div class="space-y-4">
                        <!-- Appointment 1 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-blue-900 rounded-full flex items-center justify-center text-white font-semibold">
                                    JP
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">Jean Pierre</p>
                                    <p class="text-sm text-gray-500">09:00 • Consultation générale</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Terminé</span>
                                <button class="p-2 hover:bg-gray-200 rounded-lg transition">
                                    <i class="fas fa-chevron-right text-gray-400"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Appointment 2 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-purple-900 rounded-full flex items-center justify-center text-white font-semibold">
                                    ML
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">Marie Lambert</p>
                                    <p class="text-sm text-gray-500">10:30 • Suivi cardiaque</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold">En cours</span>
                                <button class="p-2 hover:bg-gray-200 rounded-lg transition">
                                    <i class="fas fa-chevron-right text-gray-400"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Appointment 3 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-green-900 rounded-full flex items-center justify-center text-white font-semibold">
                                    PM
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">Pierre Martin</p>
                                    <p class="text-sm text-gray-500">14:00 • Examens</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-semibold">À venir</span>
                                <button class="p-2 hover:bg-gray-200 rounded-lg transition">
                                    <i class="fas fa-chevron-right text-gray-400"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Appointment 4 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-red-900 rounded-full flex items-center justify-center text-white font-semibold">
                                    SD
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">Sophie Durand</p>
                                    <p class="text-sm text-gray-500">16:00 • Urgence</p>
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
                                    <p class="font-semibold text-gray-800 text-sm">Consultations</p>
                                    <p class="text-xs text-gray-500">09:00 - 12:00</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3 p-3 bg-green-50 rounded-lg">
                                <div class="w-2 h-2 bg-green-600 rounded-full"></div>
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-800 text-sm">Visite hospitalisation</p>
                                    <p class="text-xs text-gray-500">12:00 - 14:00</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3 p-3 bg-orange-50 rounded-lg">
                                <div class="w-2 h-2 bg-orange-600 rounded-full"></div>
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-800 text-sm">Examens</p>
                                    <p class="text-xs text-gray-500">14:00 - 16:00</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3 p-3 bg-purple-50 rounded-lg">
                                <div class="w-2 h-2 bg-purple-600 rounded-full"></div>
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-800 text-sm">Rédaction ordonnances</p>
                                    <p class="text-xs text-gray-500">16:00 - 18:00</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="bg-white rounded-xl shadow p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Actions rapides</h2>
                        <div class="grid grid-cols-2 gap-3">
                            <button class="flex flex-col items-center justify-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition">
                                <i class="fas fa-user-plus text-blue-600 text-2xl mb-2"></i>
                                <span class="text-sm font-semibold text-gray-700">Nouveau patient</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-4 bg-green-50 rounded-lg hover:bg-green-100 transition">
                                <i class="fas fa-calendar-plus text-green-600 text-2xl mb-2"></i>
                                <span class="text-sm font-semibold text-gray-700">Rendez-vous</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-4 bg-orange-50 rounded-lg hover:bg-orange-100 transition">
                                <i class="fas fa-prescription text-orange-600 text-2xl mb-2"></i>
                                <span class="text-sm font-semibold text-gray-700">Ordonnance</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition">
                                <i class="fas fa-file-medical text-purple-600 text-2xl mb-2"></i>
                                <span class="text-sm font-semibold text-gray-700">Dossier</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection
