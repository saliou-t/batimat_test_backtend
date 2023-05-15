<?php

namespace App\Models;

use App\Models\Vente;
use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LigneVente extends Model
{
    use HasFactory;

    protected $fillable = [
        'produit_id',
        'quantite',
        'vente_id',
        'prix_unitaire',
    ];

    public function vente()
    {
        return $this->belongsTo(Vente::class);
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}
