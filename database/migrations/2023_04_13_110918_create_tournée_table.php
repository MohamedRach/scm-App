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
        Schema::create('tournees', function (Blueprint $table) {
            $table->id("id_tournée");
            $table->date("date_départ");
            $table->date("date_retour");
            $table->unsignedBigInteger("id_chauffeur");
            $table->timestamps();
            $table->foreign("id_chauffeur")->references("id_chauffeur")->on("chauffeurs");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournees');
    }
};
