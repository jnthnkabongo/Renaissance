<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DossierMedical extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'numero_dossier',
        'date_ouverture',
    ];

    protected $casts = [
        'date_ouverture' => 'date',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
