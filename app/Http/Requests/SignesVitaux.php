<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class SignesVitaux extends FormRequest
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
            "consultation_id" => "required|integer",
            "temperature" => "required|integer",
            "poids" => "required|integer",
            "taille" => "required|integer",
            "tension_arterielle" => "required|integer",
            "frequence_cardiaque" => "required|integer",
            "saturation" => "required|integer",
        ];
    }
}
