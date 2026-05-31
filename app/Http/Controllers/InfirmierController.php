<?php

namespace App\Http\Controllers;

use App\Http\Requests\Patients;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class InfirmierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('infirmier.dashboard');
    }

    public function patients(){
        $code_patient = 'REN-PAT-'. strtoupper(Str::random(10));
        $liste_patients = Patient::with('assurances','ordonnance',
        'rendezvous','dossierMedical','consultations','examens',
        'hospitalisations','factures')->paginate(10);
        return view('infirmier.patients', compact('code_patient', 'liste_patients'));
    }

    public function patientCreate(Patients $request){
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('Erreur', 'Vous devez être connecté pour acceder au dashboard');
        }
        //dd($request->all());
        $validated = $request->validated();
        $patient = new Patient();
        $patient->code_patient = $validated['code_patient'];
        $patient->nom = $validated['nom'];
        $patient->postnom = $validated['postnom'];
        $patient->prenom = $validated['prenom'];
        $patient->sexe = $validated['sexe'];
        $patient->date_naissance = $validated['date_naissance'];
        $patient->telephone = $validated['telephone'];
        $patient->adresse = $validated['adresse'];
        $patient->groupe_sanguin = $validated['groupe_sanguin'];
        $patient->etat_civil = $validated['etat_civil'];
        $patient->save();

        return redirect()->route('infirmier.patients')->with('success', 'Patient créé avec succès');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
