<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovisionnementDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'approvisionnement_id',
        'medicament_id',
        'quantite',
        'prix_achat',
    ];

    protected $casts = [
        'prix_achat' => 'decimal:2',
    ];

    public function approvisionnement()
    {
        return $this->belongsTo(Approvisionnement::class);
    }

    public function medicament()
    {
        return $this->belongsTo(Medicament::class);
    }
}
