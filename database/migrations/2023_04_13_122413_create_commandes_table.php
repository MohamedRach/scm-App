<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id("id_commande");
            $table->timestamps();
            $table->string("adresse_livraison");
            $table->float("poids");
            $table->float("prix");
            $table->unsignedBigInteger("id_client");
            $table->unsignedBigInteger("id_tournée")->unsigned()->nullable();
            $table->foreign("id_client")->references("id")->on("users");
            $table->foreign("id_tournée")->references("id_tournée")->on("tournees");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
