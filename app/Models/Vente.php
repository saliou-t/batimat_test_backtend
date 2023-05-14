<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
