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
        Schema::create('produits', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('reference')->unique();
            $table->string('code_barre')->unique()->nullable();
            $table->string('designation');
            $table->string('image')->nullable();
            $table->unsignedInteger('quantite_disponible');
            $table->unsignedInteger('quantite_initiale')->default(0);
            $table->unsignedInteger('prix_unitaire');
            $table->enum('etat', ['Stock', 'Rupture']);
            
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
        Schema::dropIfExists('produits');
    }
};
