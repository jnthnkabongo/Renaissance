@extends('financier.entete')
@section('content')
        <!-- Content Area -->
        <main class="flex-1 p-8">
                <!-- Welcome Banner -->
                <div class="bg-gradient-to-r from-blue-900 to-blue-700 rounded-xl p-6 mb-8 text-white">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-2xl font-bold mb-2">Bienvenue, Sophie Durand!</h2>
                            <p class="text-blue-200">Vue d'ensemble financière. 15 factures en attente de paiement.</p>
                        </div>
                        <div class="text-right">
                            <p class="text-4xl font-bold">€125,430</p>
                            <p class="text-blue-200 text-sm">Revenus ce mois</p>
                        </div>
                    </div>
                </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-xl shadow card-hover transition duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Factures ce mois</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">156</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-file-invoice-dollar text-blue-600 text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow card-hover transition duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Paiements reçus</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">€98,500</p>
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
                            <p class="text-3xl font-bold text-gray-800 mt-2">€26,930</p>
                        </div>
                        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-clock text-orange-600 text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow card-hover transition duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Dépenses</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">€45,200</p>
                        </div>
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-arrow-down text-red-600 text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Recent Invoices -->
                <div class="lg:col-span-2 bg-white rounded-xl shadow p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold text-gray-800">Factures récentes</h2>
                        <button class="text-blue-600 hover:text-blue-800 text-sm font-semibold">
                            Voir tout <i class="fas fa-arrow-right ml-1"></i>
                        </button>
                    </div>

                    <div class="space-y-4">
                        <!-- Invoice 1 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-blue-900 rounded-lg flex items-center justify-center text-white">
                                    <i class="fas fa-file-invoice"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">FAC-2024-00156</p>
                                    <p class="text-sm text-gray-500">Jean Pierre • Consultation</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-lg font-bold text-gray-800">€250</span>
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Payée</span>
                            </div>
                        </div>

                        <!-- Invoice 2 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-purple-900 rounded-lg flex items-center justify-center text-white">
                                    <i class="fas fa-file-invoice"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">FAC-2024-00155</p>
                                    <p class="text-sm text-gray-500">Marie Lambert • Hospitalisation</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-lg font-bold text-gray-800">€1,200</span>
                                <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-semibold">En attente</span>
                            </div>
                        </div>

                        <!-- Invoice 3 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-green-900 rounded-lg flex items-center justify-center text-white">
                                    <i class="fas fa-file-invoice"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">FAC-2024-00154</p>
                                    <p class="text-sm text-gray-500">Pierre Martin • Examens</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-lg font-bold text-gray-800">€450</span>
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Payée</span>
                            </div>
                        </div>

                        <!-- Invoice 4 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-red-900 rounded-lg flex items-center justify-center text-white">
                                    <i class="fas fa-file-invoice"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">FAC-2024-00153</p>
                                    <p class="text-sm text-gray-500">Sophie Durand • Médicaments</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-lg font-bold text-gray-800">€180</span>
                                <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-semibold">En retard</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-6">
                    <!-- Payment Methods -->
                    <div class="bg-white rounded-xl shadow p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Modes de paiement</h2>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Espèces</span>
                                <span class="font-semibold text-gray-800">35%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 35%"></div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Carte bancaire</span>
                                <span class="font-semibold text-gray-800">45%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 45%"></div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Assurance</span>
                                <span class="font-semibold text-gray-800">20%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-purple-600 h-2 rounded-full" style="width: 20%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="bg-white rounded-xl shadow p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Actions rapides</h2>
                        <div class="grid grid-cols-2 gap-3">
                            <button class="flex flex-col items-center justify-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition">
                                <i class="fas fa-plus text-blue-600 text-2xl mb-2"></i>
                                <span class="text-sm font-semibold text-gray-700">Nouvelle facture</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-4 bg-green-50 rounded-lg hover:bg-green-100 transition">
                                <i class="fas fa-money-bill text-green-600 text-2xl mb-2"></i>
                                <span class="text-sm font-semibold text-gray-700">Enregistrer paiement</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-4 bg-orange-50 rounded-lg hover:bg-orange-100 transition">
                                <i class="fas fa-file-export text-orange-600 text-2xl mb-2"></i>
                                <span class="text-sm font-semibold text-gray-700">Exporter</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition">
                                <i class="fas fa-chart-bar text-purple-600 text-2xl mb-2"></i>
                                <span class="text-sm font-semibold text-gray-700">Rapports</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection
