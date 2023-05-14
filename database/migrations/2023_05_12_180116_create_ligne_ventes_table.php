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
        Schema::create('ligne_ventes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('produit_id')->constrained();
            $table->unsignedInteger('quantite')->nullable();
            $table->foreignId('vente_id')->constrained();
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
        Schema::dropIfExists('ligne_ventes');
    }
};
