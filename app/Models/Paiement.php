<?php

namespace App\Models;

use App\Models\Vente;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paiement extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'numero',
        'moyen_de_paiement',
        'vente_id',
        'date_enregistrement',
        'etat',
    ];
    

    public function vente()
    {
        return $this->belongsTo(Vente::class);
    }

    public function ticket()
    {
        return $this->hasOne(Ticket::class);
    }
}
