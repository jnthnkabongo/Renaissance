@extends('infirmier.entete')
@section('content')
        <!-- Content Area -->
        <main class="flex-1 p-8">
            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Liste des patients</h1>
                    <p class="text-gray-500 text-sm mt-1">Gestion des patients assignés</p>
                </div>
                <button onclick="openAddModal()" class="flex items-center space-x-2 bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition">
                    <i class="fas fa-plus"></i>
                    <span>Nouveau patient</span>
                </button>
            </div>

            <!-- Search and Filter -->
            <div class="bg-white rounded-xl shadow p-6 mb-6">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 relative">
                        <input type="text" placeholder="Rechercher un patient..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    </div>
                    <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Tous les statuts</option>
                        <option value="actif">Actif</option>
                        <option value="hospitalise">Hospitalisé</option>
                        <option value="sortie">Sorti</option>
                    </select>
                    <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Tous les services</option>
                        <option value="urgence">Urgences</option>
                        <option value="cardiologie">Cardiologie</option>
                        <option value="pediatrie">Pédiatrie</option>
                    </select>
                </div>
            </div>

            <!-- Patients Table -->
            <div class="bg-white rounded-xl shadow overflow-hidden">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Patient</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">ID Patient</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Âge</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Service</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Statut</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Date admission</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <!-- Patient 1 -->
                        @forelse ( as )
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-blue-900 rounded-full flex items-center justify-center text-white font-semibold">
                                            JP
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-800">Jean Pierre</p>
                                            <p class="text-sm text-gray-500">jean.pierre@email.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-gray-600">PAT-001</td>
                                <td class="px-6 py-4 text-gray-600">45 ans</td>
                                <td class="px-6 py-4 text-gray-600">Cardiologie</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Actif</span>
                                </td>
                                <td class="px-6 py-4 text-gray-600">15/05/2024</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center space-x-2">
                                        <button onclick="openViewModal('PAT-001')" class="p-2 hover:bg-blue-100 rounded-lg transition text-blue-600">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button onclick="openEditModal('PAT-001', 'Jean Pierre', 'jean.pierre@email.com', '45', 'Cardiologie', 'actif')" class="p-2 hover:bg-green-100 rounded-lg transition text-green-600">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button onclick="openDeleteModal('PAT-001', 'Jean Pierre')" class="p-2 hover:bg-red-100 rounded-lg transition text-red-600">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                
                            </tr>
                        @endforelse
                            

                        {{-- <!-- Patient 2 -->
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-purple-900 rounded-full flex items-center justify-center text-white font-semibold">
                                        ML
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-800">Marie Lambert</p>
                                        <p class="text-sm text-gray-500">marie.lambert@email.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-600">PAT-002</td>
                            <td class="px-6 py-4 text-gray-600">62 ans</td>
                            <td class="px-6 py-4 text-gray-600">Urgences</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-semibold">Hospitalisé</span>
                            </td>
                            <td class="px-6 py-4 text-gray-600">18/05/2024</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button onclick="openViewModal('PAT-002')" class="p-2 hover:bg-blue-100 rounded-lg transition text-blue-600">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button onclick="openEditModal('PAT-002', 'Marie Lambert', 'marie.lambert@email.com', '62', 'Urgences', 'hospitalise')" class="p-2 hover:bg-green-100 rounded-lg transition text-green-600">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button onclick="openDeleteModal('PAT-002', 'Marie Lambert')" class="p-2 hover:bg-red-100 rounded-lg transition text-red-600">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Patient 3 -->
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-green-900 rounded-full flex items-center justify-center text-white font-semibold">
                                        PM
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-800">Pierre Martin</p>
                                        <p class="text-sm text-gray-500">pierre.martin@email.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-600">PAT-003</td>
                            <td class="px-6 py-4 text-gray-600">38 ans</td>
                            <td class="px-6 py-4 text-gray-600">Pédiatrie</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Actif</span>
                            </td>
                            <td class="px-6 py-4 text-gray-600">20/05/2024</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button onclick="openViewModal('PAT-003')" class="p-2 hover:bg-blue-100 rounded-lg transition text-blue-600">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button onclick="openEditModal('PAT-003', 'Pierre Martin', 'pierre.martin@email.com', '38', 'Pédiatrie', 'actif')" class="p-2 hover:bg-green-100 rounded-lg transition text-green-600">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button onclick="openDeleteModal('PAT-003', 'Pierre Martin')" class="p-2 hover:bg-red-100 rounded-lg transition text-red-600">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Patient 4 -->
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-red-900 rounded-full flex items-center justify-center text-white font-semibold">
                                        SD
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-800">Sophie Durand</p>
                                        <p class="text-sm text-gray-500">sophie.durand@email.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-600">PAT-004</td>
                            <td class="px-6 py-4 text-gray-600">55 ans</td>
                            <td class="px-6 py-4 text-gray-600">Cardiologie</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-semibold">Sorti</span>
                            </td>
                            <td class="px-6 py-4 text-gray-600">10/05/2024</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button onclick="openViewModal('PAT-004')" class="p-2 hover:bg-blue-100 rounded-lg transition text-blue-600">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button onclick="openEditModal('PAT-004', 'Sophie Durand', 'sophie.durand@email.com', '55', 'Cardiologie', 'sortie')" class="p-2 hover:bg-green-100 rounded-lg transition text-green-600">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button onclick="openDeleteModal('PAT-004', 'Sophie Durand')" class="p-2 hover:bg-red-100 rounded-lg transition text-red-600">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Patient 5 -->
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-yellow-900 rounded-full flex items-center justify-center text-white font-semibold">
                                        AB
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-800">Antoine Bernard</p>
                                        <p class="text-sm text-gray-500">antoine.bernard@email.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-600">PAT-005</td>
                            <td class="px-6 py-4 text-gray-600">28 ans</td>
                            <td class="px-6 py-4 text-gray-600">Urgences</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-semibold">Hospitalisé</span>
                            </td>
                            <td class="px-6 py-4 text-gray-600">22/05/2024</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button onclick="openViewModal('PAT-005')" class="p-2 hover:bg-blue-100 rounded-lg transition text-blue-600">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button onclick="openEditModal('PAT-005', 'Antoine Bernard', 'antoine.bernard@email.com', '28', 'Urgences', 'hospitalise')" class="p-2 hover:bg-green-100 rounded-lg transition text-green-600">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button onclick="openDeleteModal('PAT-005', 'Antoine Bernard')" class="p-2 hover:bg-red-100 rounded-lg transition text-red-600">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="px-6 py-4 bg-gray-50 flex items-center justify-between">
                    <p class="text-sm text-gray-600">Affichage de 1 à 5 sur 156 patients</p>
                    <div class="flex items-center space-x-2">
                        <button class="px-3 py-1 border border-gray-300 rounded-lg hover:bg-gray-100 transition text-gray-600">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="px-3 py-1 bg-blue-900 text-white rounded-lg">1</button>
                        <button class="px-3 py-1 border border-gray-300 rounded-lg hover:bg-gray-100 transition text-gray-600">2</button>
                        <button class="px-3 py-1 border border-gray-300 rounded-lg hover:bg-gray-100 transition text-gray-600">3</button>
                        <span class="text-gray-400">...</span>
                        <button class="px-3 py-1 border border-gray-300 rounded-lg hover:bg-gray-100 transition text-gray-600">32</button>
                        <button class="px-3 py-1 border border-gray-300 rounded-lg hover:bg-gray-100 transition text-gray-600">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </main>

        <!-- Add Patient Modal -->
        <div id="addModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            <div class="bg-white rounded-xl shadow-2xl w-full max-w-2xl mx-4 max-h-[90vh] overflow-y-auto">
                <div class="p-6 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <h2 class="text-xl font-bold text-gray-800">Ajouter un nouveau patient</h2>
                        <button onclick="closeAddModal()" class="text-gray-400 hover:text-gray-600 transition">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>
                </div>
                <form class="p-6 space-y-4" method="POST" action="{{ route('infirmier.patients.create') }}" id="addPatientForm">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Nom</label>
                            <input type="text" name="nom" id="nom" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Nom du patient">
                        </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Postnom</label>
                                <input type="text" name="postnom" id="postnom" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Postnom du patient">
                            </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Prénoms</label>
                            <input type="text" name="prenom" id="prenom" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Prénoms du patient">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Sexe</label>
                            <select name="sexe" id="sexe" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Sélectionner le sexe</option>
                                <option value="M">Masculin</option>
                                <option value="F">Féminin</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="">Date de naissance</label>
                            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" type="date" name="date_naissance" id="date_naissance">
                        </div>
                        <div>
                            <label for="">Téléphone</label>
                            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="0974133780" type="tel" name="telephone" id="telephone">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="">Adresse</label>
                            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Addresse du patient" type="text" name="adresse" id="adresse">
                        </div>
                        <div>
                            <label for="">Groupe sanguin</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" name="groupe_sanguin" id="groupe_sanguin">
                                <option value="">Sélectionner</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>    
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Etat civile</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" name="etat_civil" id="etat_civil">
                                <option value="">Sélectionner</option>
                                <option value="celibataire">Célibataire</option>
                                <option value="marie">Marié(e)</option>
                                <option value="divorce">Divorcé(e)</option>
                                <option value="veuf">Veuf(ve)</option>
                            </select>
                        </div>
                        <div>
                            <label for="">Code patient</label>
                            <input type="text" name="code_patient" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ $code_patient }}" readonly>
                        </div>
                    </div>
                    <div class="flex justify-end space-x-3 pt-4">
                        <button type="button" onclick="closeAddModal()" class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition text-gray-700">
                            Annuler
                        </button>
                        <button type="submit" id="addSubmitBtn" class="px-4 py-2 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition opacity-50 cursor-not-allowed" disabled>
                            Ajouter
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Edit Patient Modal -->
        <div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            <div class="bg-white rounded-xl shadow-2xl w-full max-w-2xl mx-4 max-h-[90vh] overflow-y-auto">
                <div class="p-6 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <h2 class="text-xl font-bold text-gray-800">Modifier le patient</h2>
                        <button onclick="closeEditModal()" class="text-gray-400 hover:text-gray-600 transition">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>
                </div>
                <form class="p-6 space-y-4" id="editPatientForm">
                    <input type="hidden" id="editPatientId">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Nom complet</label>
                            <input type="text" id="editPatientName" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Nom du patient">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                            <input type="email" id="editPatientEmail" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="email@exemple.com">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Âge</label>
                            <input type="number" id="editPatientAge" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Âge">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Service</label>
                            <select id="editPatientService" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Sélectionner un service</option>
                                <option value="cardiologie">Cardiologie</option>
                                <option value="urgence">Urgences</option>
                                <option value="pediatrie">Pédiatrie</option>
                                <option value="chirurgie">Chirurgie</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Statut</label>
                        <select id="editPatientStatus" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="actif">Actif</option>
                            <option value="hospitalise">Hospitalisé</option>
                            <option value="sortie">Sorti</option>
                        </select>
                    </div>
                    <div class="flex justify-end space-x-3 pt-4">
                        <button type="button" onclick="closeEditModal()" class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition text-gray-700">
                            Annuler
                        </button>
                        <button type="submit" id="editSubmitBtn" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition opacity-50 cursor-not-allowed" disabled>
                            Modifier
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- View Patient Modal -->
        <div id="viewModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            <div class="bg-white rounded-xl shadow-2xl w-full max-w-2xl mx-4 max-h-[90vh] overflow-y-auto">
                <div class="p-6 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <h2 class="text-xl font-bold text-gray-800">Détails du patient</h2>
                        <button onclick="closeViewModal()" class="text-gray-400 hover:text-gray-600 transition">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="w-20 h-20 bg-blue-900 rounded-full flex items-center justify-center text-white text-2xl font-bold">
                            JP
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800">Jean Pierre</h3>
                            <p class="text-gray-500">PAT-001</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-sm text-gray-500">Email</p>
                            <p class="font-semibold text-gray-800">jean.pierre@email.com</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-sm text-gray-500">Âge</p>
                            <p class="font-semibold text-gray-800">45 ans</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-sm text-gray-500">Service</p>
                            <p class="font-semibold text-gray-800">Cardiologie</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-sm text-gray-500">Statut</p>
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Actif</span>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg col-span-2">
                            <p class="text-sm text-gray-500">Date d'admission</p>
                            <p class="font-semibold text-gray-800">15/05/2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            <div class="bg-white rounded-xl shadow-2xl w-full max-w-md mx-4">
                <div class="p-6">
                    <div class="flex items-center justify-center w-16 h-16 bg-red-100 rounded-full mx-auto mb-4">
                        <i class="fas fa-exclamation-triangle text-red-600 text-3xl"></i>
                    </div>
                    <h2 class="text-xl font-bold text-gray-800 text-center mb-2">Confirmer la suppression</h2>
                    <p class="text-gray-600 text-center mb-6">
                        Êtes-vous sûr de vouloir supprimer le patient <span id="deletePatientName" class="font-semibold"></span> ? Cette action est irréversible.
                    </p>
                    <input type="hidden" id="deletePatientId">
                    <div class="flex justify-center space-x-3">
                        <button onclick="closeDeleteModal()" class="px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition text-gray-700">
                            Annuler
                        </button>
                        <button onclick="confirmDelete()" class="px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                            Supprimer
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Add Modal
            function openAddModal() {
                document.getElementById('addModal').classList.remove('hidden');
                document.getElementById('addModal').classList.add('flex');
            }

            function closeAddModal() {
                document.getElementById('addModal').classList.add('hidden');
                document.getElementById('addModal').classList.remove('flex');
            }

            // Edit Modal
            function openEditModal(id, name, email, age, service, status) {
                document.getElementById('editPatientId').value = id;
                document.getElementById('editPatientName').value = name;
                document.getElementById('editPatientEmail').value = email;
                document.getElementById('editPatientAge').value = age;
                document.getElementById('editPatientService').value = service.toLowerCase();
                document.getElementById('editPatientStatus').value = status;
                document.getElementById('editModal').classList.remove('hidden');
                document.getElementById('editModal').classList.add('flex');
            }

            function closeEditModal() {
                document.getElementById('editModal').classList.add('hidden');
                document.getElementById('editModal').classList.remove('flex');
            }

            // View Modal
            function openViewModal(id) {
                document.getElementById('viewModal').classList.remove('hidden');
                document.getElementById('viewModal').classList.add('flex');
            }

            function closeViewModal() {
                document.getElementById('viewModal').classList.add('hidden');
                document.getElementById('viewModal').classList.remove('flex');
            }

            // Delete Modal
            function openDeleteModal(id, name) {
                document.getElementById('deletePatientId').value = id;
                document.getElementById('deletePatientName').textContent = name;
                document.getElementById('deleteModal').classList.remove('hidden');
                document.getElementById('deleteModal').classList.add('flex');
            }

            function closeDeleteModal() {
                document.getElementById('deleteModal').classList.add('hidden');
                document.getElementById('deleteModal').classList.remove('flex');
            }

            function confirmDelete() {
                const id = document.getElementById('deletePatientId').value;
                // Add your delete logic here
                console.log('Deleting patient:', id);
                closeDeleteModal();
            }

            // Form validation for Add Patient Modal
            const addFormFields = ['nom', 'postnom', 'prenom', 'sexe', 'date_naissance', 'telephone', 'adresse', 'groupe_sanguin', 'etat_civil'];
            
            function checkAddForm() {
                let allFilled = true;
                addFormFields.forEach(fieldId => {
                    const field = document.getElementById(fieldId);
                    if (!field || !field.value.trim()) {
                        allFilled = false;
                    }
                });
                const submitBtn = document.getElementById('addSubmitBtn');
                if (allFilled) {
                    submitBtn.disabled = false;
                    submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                } else {
                    submitBtn.disabled = true;
                    submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
                }
            }

            addFormFields.forEach(fieldId => {
                const field = document.getElementById(fieldId);
                if (field) {
                    field.addEventListener('input', checkAddForm);
                    field.addEventListener('change', checkAddForm);
                }
            });

            // Form validation for Edit Patient Modal
            const editFormFields = ['editPatientName', 'editPatientEmail', 'editPatientAge', 'editPatientService', 'editPatientStatus'];
            
            function checkEditForm() {
                let allFilled = true;
                editFormFields.forEach(fieldId => {
                    const field = document.getElementById(fieldId);
                    if (!field || !field.value.trim()) {
                        allFilled = false;
                    }
                });
                const submitBtn = document.getElementById('editSubmitBtn');
                if (allFilled) {
                    submitBtn.disabled = false;
                    submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                } else {
                    submitBtn.disabled = true;
                    submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
                }
            }

            editFormFields.forEach(fieldId => {
                const field = document.getElementById(fieldId);
                if (field) {
                    field.addEventListener('input', checkEditForm);
                    field.addEventListener('change', checkEditForm);
                }
            });

            // Reset add form when opening modal
            const originalOpenAddModal = openAddModal;
            openAddModal = function() {
                originalOpenAddModal();
                document.getElementById('addPatientForm').reset();
                checkAddForm();
            };

            // Check edit form when opening modal
            const originalOpenEditModal = openEditModal;
            openEditModal = function(id, name, email, age, service, status) {
                originalOpenEditModal(id, name, email, age, service, status);
                setTimeout(checkEditForm, 0);
            };

            // Close modals when clicking outside
            document.addEventListener('click', function(event) {
                const modals = ['addModal', 'editModal', 'viewModal', 'deleteModal'];
                modals.forEach(modalId => {
                    const modal = document.getElementById(modalId);
                    if (modal && !modal.classList.contains('hidden')) {
                        if (event.target === modal) {
                            modal.classList.add('hidden');
                            modal.classList.remove('flex');
                        }
                    }
                });
            });
        </script>
@endsection