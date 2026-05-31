<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class Patients extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "nom" => "required|string|max:255",
            "postnom" => "required|string|max:255",
            "prenom" => "required|string|max:255",
            "sexe" => "required|in:male,female",
            "date_naissance" => "required|date",
            "telephone" => "required|string|max:255",
            "adresse" => "required|string|max:255",
            "groupe_sanguin" => "required|in:A+,A-,B+,B-,AB+,AB-,O+,O-",
            "etat_civil" => "required|in:celibataire,marie,divorce",
        ];
    }

    public function messages(): array
    {
        return [
            "nom.required" => "Le nom est requis",
            "nom.string" => "Le nom doit être une chaîne de caractères",
            "nom.max" => "Le nom ne doit pas dépasser 255 caractères",
            "prenom.required" => "Le prénom est requis",
            "prenom.string" => "Le prénom doit être une chaîne de caractères",
            "prenom.max" => "Le prénom ne doit pas dépasser 255 caractères",
            "telephone.required" => "Le téléphone est requis",
            "telephone.string" => "Le téléphone doit être une chaîne de caractères",
            "telephone.max" => "Le téléphone ne doit pas dépasser 255 caractères",
            "adresse.required" => "L'adresse est requise",
            "adresse.string" => "L'adresse doit être une chaîne de caractères",
            "adresse.max" => "L'adresse ne doit pas dépasser 255 caractères",
            "date_naissance.required" => "La date de naissance est requise",
            "date_naissance.date" => "La date de naissance doit être une date valide",
            "sexe.required" => "Le sexe est requis",
            "sexe.in" => "Le sexe doit être masculin ou féminin",
            "groupe_sanguin.required" => "Le groupe sanguin est requis",
            "groupe_sanguin.in" => "Le groupe sanguin doit être A+, A-, B+, B-, AB+, AB-, O+, O-",
            "etat_civil.required" => "L'état civil est requis",
            "etat_civil.in" => "L'état civil doit être célibataire, marié ou divorcé",
        ];
    }
}
