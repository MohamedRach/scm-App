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
        Schema::create('retours', function (Blueprint $table) {
            $table->id("id_retour");
            $table->timestamps();
            $table->string("etat");
            $table->string("motif");
            $table->unsignedBigInteger("id_client");
            $table->unsignedBigInteger("id_commande")->unsigned()->nullable();
            $table->foreign("id_client")->references("id")->on("users");
            $table->foreign("id_commande")->references("id_commande")->on("commandes");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retours');
    }
};
