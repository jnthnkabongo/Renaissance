<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospitalisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'lit_id',
        'medecin_id',
        'date_entree',
        'date_sortie',
        'motif',
        'statut',
    ];

    protected $casts = [
        'date_entree' => 'datetime',
        'date_sortie' => 'datetime',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function lit()
    {
        return $this->belongsTo(Lit::class);
    }

    public function medecin()
    {
        return $this->belongsTo(Medecin::class);
    }
}
