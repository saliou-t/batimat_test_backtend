<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneVente extends Model
{
    use HasFactory;

    protected $fillable = [
        'produit_id',
        'quantite',
        'vente_id',
        'prix_unitaire',
    ];
}
