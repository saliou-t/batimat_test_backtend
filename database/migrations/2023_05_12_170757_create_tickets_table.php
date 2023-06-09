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
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('paiement_id')->constrained()->onDelete('cascade');
            $table->string('nom_complet_beneficiaire');
            $table->string('telephone_beneficiaire')->unique()->nullable();
            $table->string('email_beneficiaire')->unique()->nullable();
            $table->string('adresse_beneficiaire')->nullable();

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
        Schema::dropIfExists('tickets');
    }
};
