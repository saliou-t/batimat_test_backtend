<?php

namespace App\Http\Controllers;

use App\Models\Vente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VenteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource by user_id where paiement.etat == 'Enregistre' => c'est-à-dire lorsque le paiement n'est pas encore effectué.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUserVentesNotPayed($user_id)
    {
        $ventes = Vente::with(['lignes','lignes.produit','paiement'])
                        ->where('user_id', $user_id)
                        ->whereHas('paiement', function($query) {
                            $query->where('etat', '=', 'Enregistre');
                        })
                        ->get();
        return response()->json(['ventes' => $ventes], 200);
    }


    /**
     * Display a listing of the resource by user_id where paiement.etat == 'Enregistre' => c'est-à-dire lorsque le paiement n'est pas encore effectué.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllUserVentes($user_id)
    {
        $ventes = Vente::with(['lignes','lignes.produit','paiement'])
                        ->where('user_id', $user_id)
                        ->get();
        return response()->json(['ventes' => $ventes], 200);
    }

       /**
     * Display a listing of the resource by user_id where paiement.etat == 'Termine' => c'est-à-dire lorsque le paiement effectué.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUserVentesPayed($user_id)
    {
        $ventes = Vente::with(['lignes','lignes.produit','paiement'])
                        ->where('user_id', $user_id)
                        ->whereHas('paiement', function($query) {
                            $query->where('etat', '=', 'Termine');
                        })
                        ->get();
        return response()->json(['ventes' => $ventes], 200);
    }
    
    /**
     * Display a listing of the resource(All).
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vente = Vente::OrderBy('id')->get();
        return $vente->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'numero' => 'required|string',
            'montant_total' => 'required|integer',
        ]);

        $vente = Vente::create($validated);
        
        $lastVente = DB::table('ventes')->latest()->first();

        return response()->json(['message' => 'Vente enregistrée avec succès', 'vente' => $vente]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vente  $vente
     * @return \Illuminate\Http\Response
     */
    public function show(Vente $vente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vente  $vente
     * @return \Illuminate\Http\Response
     */
    public function edit(Vente $vente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vente  $vente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vente $vente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vente  $vente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vente $vente)
    {
        //
    }
}
