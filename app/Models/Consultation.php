<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'medecin_id',
        'date_consultation',
        'motif',
        'histoire_maladie',
        'antecedents',
        'diagnostic',
        'traitement',
        'observation',
    ];

    protected $casts = [
        'date_consultation' => 'datetime',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function medecin()
    {
        return $this->belongsTo(Medecin::class);
    }

    public function signesVitaux()
    {
        return $this->hasOne(SignesVitaux::class);
    }

    public function examens()
    {
        return $this->hasMany(Examen::class);
    }

    public function ordonnances()
    {
        return $this->hasMany(Ordonnance::class);
    }

    public function factures()
    {
        return $this->hasMany(Facture::class);
    }
}
