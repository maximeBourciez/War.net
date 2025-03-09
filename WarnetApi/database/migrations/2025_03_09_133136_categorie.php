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
        // Ajout de la table categorie
        Schema::create('categorie', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Suppression de la table categorie
        Schema::dropIfExists('categorie');
    }
};
