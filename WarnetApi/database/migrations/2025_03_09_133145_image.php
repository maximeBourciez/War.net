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
        // Ajout de la table image
        Schema::create('image', function (Blueprint $table) {
            $table->id();
            $table->string('chemin', 100);
            $table->string('alt', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Suppression de la table image
        Schema::dropIfExists('image');
    }
};
