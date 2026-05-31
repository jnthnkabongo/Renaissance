<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approvisionnement extends Model
{
    use HasFactory;

    protected $fillable = [
        'fournisseur_id',
        'date_approvisionnement',
        'montant_total',
    ];

    protected $casts = [
        'montant_total' => 'decimal:2',
        'date_approvisionnement' => 'datetime',
    ];

    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class);
    }

    public function details()
    {
        return $this->hasMany(ApprovisionnementDetail::class);
    }
}
