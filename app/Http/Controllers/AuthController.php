<?php

namespace App\Http\Controllers;

use App\Http\Requests\Credentials;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // User::create([
        //     'nom' => 'kabongo',
        //     'prenom' => 'jonathan',
        //     'email' => 'jonathan@gmail.com',
        //     'telephone' => '0974133780',
        //     'adresse' => 'limete',
        //     'password' => Hash::make('12345678'),
        //     'role_id' => '1'
        // ]);
        return view('auth');
    }

    public function soumission(Credentials $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = auth::user();

            switch ($user->role->nom) {
                case 'administrateur':
                    return redirect()->route('administrateur');
                
                case 'financier':
                    return redirect()->route('financier');

                case 'infirmier':
                    return redirect()->route('infirmier');

                case 'laborantin':
                    return redirect()->route('laborantin');

                case 'medecin':
                    return redirect()->route('medecin');
                
                default:
                    Auth::logout();
                    return redirect()->route('connexion');
                    break;
            }
        }
        return back()->withErrors([
            'email' => 'Identifiants incorrects'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
    public function destroy()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('connexion');
    }
}
