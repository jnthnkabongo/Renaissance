<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignesVitaux extends Model
{
    use HasFactory;

    protected $fillable = [
        'consultation_id',
        'temperature',
        'poids',
        'taille',
        'tension_arterielle',
        'frequence_cardiaque',
        'saturation',
    ];

    protected $casts = [
        'temperature' => 'decimal:1',
        'poids' => 'decimal:2',
        'taille' => 'decimal:2',
    ];

    public function consultation()
    {
        return $this->belongsTo(Consultation::class);
    }
}
