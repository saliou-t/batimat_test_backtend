<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'numero',
        'moyen_de_paiement',
        'vente_id',
        'date_enregistrement',
        'etat',
        'montant'
    ];
}
