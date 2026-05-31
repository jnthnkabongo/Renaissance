<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'code_patient',
        'nom',
        'postnom',
        'prenom',
        'sexe',
        'date_naissance',
        'telephone',
        'adresse',
        'groupe_sanguin',
        'etat_civil',
        'personne_contact',
        'telephone_urgence',
    ];

    protected $casts = [
        'date_naissance' => 'date',
    ];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($patient) {
            do {
                $code = strtoupper(Str::random(10));
            } while (self::where('code_patient', '=', $code, 'and')->exists());

            $patient->code_patient = $code;
        });
    }

    public function assurances()
    {
        return $this->belongsToMany(Assurance::class, 'patient_assurances')
            ->withPivot('numero_police', 'date_expiration');
    }

    public function rendezvous()
    {
        return $this->hasMany(Rendezvous::class);
    }

    public function dossierMedical()
    {
        return $this->hasOne(DossierMedical::class);
    }

    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }

    public function examens()
    {
        return $this->hasMany(Examen::class);
    }

    public function hospitalisations()
    {
        return $this->hasMany(Hospitalisation::class);
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
