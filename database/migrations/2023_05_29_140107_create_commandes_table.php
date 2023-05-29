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
            $table->string('nom_destinataire');
            $table->string('prenom_destinataire');
            $table->integer('telephone');
            $table->smallInteger("N°_immeuble");
            $table->string('quartier');
            $table->string('ville');
            $table->mediumInteger('code_postal');
            $table->string('contenue');
            $table->float("poid");
            $table->float("prix");
            $table->string('type');
            $table->string('paiment');
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
