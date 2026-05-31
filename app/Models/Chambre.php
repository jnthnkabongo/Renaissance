<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'capacite',
        'type_chambre',
        'statut',
    ];

    public function lits()
    {
        return $this->hasMany(Lit::class);
    }
}
