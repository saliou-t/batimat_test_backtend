<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference',
        'code_barre',
        'designation',
        'image',
        'quantite_disponible',
        'prix_unitaire',
        'etat'
    ];
}
