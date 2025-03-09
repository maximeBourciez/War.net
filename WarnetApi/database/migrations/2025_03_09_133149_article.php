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
        // Ajout de la table article
        Schema::create('article', function (Blueprint $table) {
            // Attributs
            $table->id();
            $table->string('titre', 100);
            $table->text('description');
            $table->string('descriptionLongue');
            $table->integer('prix');
            $table->integer('quantiteDispo');

            // Clés étrangères
            $table->foreignId('categorie_id')->constrained('categorie');
            $table->foreignId('image_id')->constrained('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
