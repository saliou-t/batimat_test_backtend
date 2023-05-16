<?php

namespace App\Http\Controllers;

use App\Models\LigneVente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LigneVenteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'produit_id' => 'required|integer',
            'vente_id' => 'required|integer',
            'quantite' => 'required|integer'
        ]);

        $vente = LigneVente::create($validated);
        
        $lastLigne = DB::table('ligne_ventes')->latest()->first();

        return response()->json(['message' => 'Ligne enregistrée avec succès', 'ligne' => $lastLigne]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LigneVente  $ligneVente
     * @return \Illuminate\Http\Response
     */
    public function show(LigneVente $ligneVente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LigneVente  $ligneVente
     * @return \Illuminate\Http\Response
     */
    public function edit(LigneVente $ligneVente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LigneVente  $ligneVente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LigneVente $ligneVente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LigneVente  $ligneVente
     * @return \Illuminate\Http\Response
     */
    public function destroy(LigneVente $ligneVente)
    {
        //
    }
}
