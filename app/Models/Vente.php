<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'created_at',
        'vente_id',
        'date_enregistrement',
        'montant_total',
        'etat',
    ];
}
