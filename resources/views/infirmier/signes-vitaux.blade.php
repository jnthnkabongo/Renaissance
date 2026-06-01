@extends('infirmier.entete')
@section('content')
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
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Patient noms</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">ID Patient</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Date naissance</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Sexe</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Téléphone</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Statut</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Date admission</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <!-- Patient 1 -->
                    @forelse ($liste_patients as $patients)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-blue-900 rounded-full flex items-center justify-center text-white font-semibold">
                                        {{ substr($patients->nom, 0, 1) . substr($patients->prenom, 0, 1) }}
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-800">{{ $patients->nom }}</p>
                                        <p class="text-sm text-gray-500">{{ $patients->prenom }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-600">{{ $patients->code_patient }}</td>
                            <td class="px-6 py-4 text-gray-600">{{ $patients->date_naissance->format('d/m/Y') }}</td>
                            <td class="px-6 py-4 text-gray-600">{{ $patients->sexe }}</td>
                            <td class="px-6 py-4 text-gray-600">{{ $patients->telephone }}</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">{{ $patients->adresse }}</span>
                            </td>
                            <td class="px-6 py-4 text-gray-600">{{ $patients->created_at->format('d/m/Y')}}</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button onclick="openAddModal('{{ $patients->id }}', '{{ $patients->nom }}', '{{ $patients->prenom }}', '{{ $patients->code_patient }}', '{{ $patients->date_naissance->format('d/m/Y') }}', '{{ $patients->sexe }}', '{{ $patients->telephone }}', '{{ $patients->adresse }}', '{{ $patients->groupe_sanguin }}', '{{ $patients->created_at->format('d/m/Y') }}')" class="p-2 hover:bg-blue-100 rounded-lg transition text-blue-600">
                                        <i class="fas fa-heartbeat"></i>
                                    </button>
                                   
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-6 py-4 text-center text-gray-500">
                                Aucun patient enregistré
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="px-6 py-4 bg-gray-50 justify-end ">
                @if ($liste_patients->hasPages())
                    <div class="bg-primary">
                        {{ $liste_patients->links() }}
                    </div>
                @endif
            </div>
        </div>
    </main>

     <!-- Add Patient Modal -->
        <div id="addModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            <div class="bg-white rounded-xl shadow-2xl w-full max-w-2xl mx-4 max-h-[90vh] overflow-y-auto">
                <div class="p-6 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <h2 class="text-xl font-bold text-gray-800">Ajouter les signes vitaux du patient</h2>
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
                            <input type="text" name="code_patient" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"  readonly>
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
        </script>
@endsection