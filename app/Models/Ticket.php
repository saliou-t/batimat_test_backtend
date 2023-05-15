<?php

namespace App\Models;

use App\Models\Paiement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_complet_beneficiaire',
        'paiement_id',
        'numero_beneficiaire',
        'total',
    ];

    public function paiement()
    {
        return $this->belongsTo(Paiement::class);
    }

    
}
