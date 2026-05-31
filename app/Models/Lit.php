<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lit extends Model
{
    use HasFactory;

    protected $fillable = [
        'chambre_id',
        'numero_lit',
        'statut',
    ];

    public function chambre()
    {
        return $this->belongsTo(Chambre::class);
    }

    public function hospitalisations()
    {
        return $this->hasMany(Hospitalisation::class);
    }
}
