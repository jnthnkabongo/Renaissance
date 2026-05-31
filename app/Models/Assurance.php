<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assurance extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'telephone',
        'adresse',
    ];

    public function patients()
    {
        return $this->belongsToMany(Patient::class, 'patient_assurances')
            ->withPivot('numero_police', 'date_expiration');
    }
}
