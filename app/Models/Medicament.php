<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'nom',
        'dosage',
        'forme',
        'prix_unitaire',
        'stock',
        'seuil_alerte',
    ];

    protected $casts = [
        'prix_unitaire' => 'decimal:2',
    ];

    public function ordonnanceDetails()
    {
        return $this->hasMany(OrdonnanceDetail::class);
    }

    public function approvisionnementDetails()
    {
        return $this->hasMany(ApprovisionnementDetail::class);
    }
}
