<?php

namespace App\Models;

use App\Models\User;
use App\Models\Paiement;
use App\Models\LigneVente;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vente extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'numero',
        'vente_id',
        'montant_total',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lignes()
    {
        return $this->hasMany(LigneVente::class);
    }

    public function paiement()
    {
        return $this->hasOne(Paiement::class);
    }
}
