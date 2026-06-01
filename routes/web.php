<?php

use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FinancierController;
use App\Http\Controllers\InfirmierController;
use App\Http\Controllers\LaborantinController;
use App\Http\Controllers\MedecinController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index'])->name('connexion');
Route::post('soumission', [AuthController::class, 'soumission'])->name('login');

Route::middleware(['web'])->group(function () {
    Route::get('infirmier', [InfirmierController::class, 'index'])->name('infirmier');
    Route::get('infirmier/patients', [InfirmierController::class, 'patients'])->name('infirmier.patients');
    Route::post('infirmier/patients/create', [InfirmierController::class, 'patientCreate'])->name('infirmier.patients.create');
    Route::put('infirmier/patients/update', [InfirmierController::class, 'patientUpdate'])->name('infirmier.patients.update');
    Route::put('infirmier/patients/update/{id}', [InfirmierController::class, 'patientUpdate'])->name('infirmier.patients.update');
    Route::delete('infirmier/patients/delete/{id}', [InfirmierController::class, 'patientDelete'])->name('infirmier.patients.delete');

    Route::get('infirmier/signes-vitaux', [InfirmierController::class, 'signesVitaux'])->name('infirmier.signes-vitaux');
    
    Route::get('infirmier/planinig', [InfirmierController::class, 'planinig'])->name('infirmier.planinig');
    
    Route::get('infirmier/medicaments', [InfirmierController::class, 'medicaments'])->name('infirmier.medicaments');
    
    Route::get('infirmier/dossiers-medical', [InfirmierController::class, 'dossiersMedical'])->name('infirmier.dossiers-medical');

    Route::get('medecin', [MedecinController::class, 'index'])->name('medecin');

    Route::get('administrateur', [AdministrateurController::class, 'index'])->name('administrateur');

    Route::get('financier', [FinancierController::class, 'index'])->name('financier');

    Route::get('laborantin', [LaborantinController::class, 'index'])->name('laborantin');

    Route::get('logout', [AuthController::class, 'destroy'])->name('logout');
});
