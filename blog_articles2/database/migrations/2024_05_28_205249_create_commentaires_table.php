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
    Schema::create('commentaires', function (Blueprint $table) {
        $table->id();
        $table->text('contenu');
        $table->string('nom_complet_auteur');
        $table->dateTime('date_heure_creation');
        $table->foreignId('id_article')->constrained('articles')->onDelete('cascade'); // Ajoute une colonne 'id_article' de type bigint, définie comme clé étrangère référant à 'id' de la table 'articles', avec suppression en cascade
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaires');
    }
};
