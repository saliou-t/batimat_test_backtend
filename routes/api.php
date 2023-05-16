<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\LigneVenteController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
    
});

//route pour récupéerer les vente faites par un utilisateur en fonction de user_id
Route::get('/user-vente-non-payer/{user_id}', [VenteController::class, 'getUserVentesNotPayed']);
Route::get('/user-vente-payer/{user_id}', [VenteController::class, 'getUserVentesPayed']);
Route::get('/user-all-ventes/{user_id}', [VenteController::class, 'getAllUserVentes']);
Route::get('/user-paiements/{user_id}', [PaiementController::class, 'getUserPaiementByUser']);


Route::apiResources([
    'produit' => ProduitController::class,
    'vente' => VenteController::class,
    'ligneVente' => LigneVenteController::class,
    'paiement' => PaiementController::class,
    'ticket' => TicketController::class,
]);

