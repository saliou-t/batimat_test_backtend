<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\LigneVenteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResources([
    'produit' => ProduitController::class,
    'vente' => VenteController::class,
    'ligneVente' => LigneVenteController::class,
    'paiement' => PaiementController::class,
    'ticket' => TicketController::class,
]);

