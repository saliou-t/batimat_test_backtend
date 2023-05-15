<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numero')->unique();
            $table->enum('moyen_de_paiment', ['CHEQUE', 'ESPECE','CARTE_BANCAIRE']);
            $table->foreignId('vente_id')->constrained();
            $table->date('date_enregistrement')->nullable();
            $table->enum('etat', ['Termine', 'Annule','En_cours','Enregistre'])->default('Enregistre');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paiements');
    }
};
