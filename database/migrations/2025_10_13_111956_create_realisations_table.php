<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
<<<<<<< HEAD
    
public function up(): void
{
    Schema::create('realisations', function (Blueprint $table) {
        $table->id();
        $table->string('titre');
        $table->longText('description');
        $table->longText('contexte')->nullable();
        $table->longText('intervention')->nullable();
        $table->longText('resultat')->nullable();
        $table->longText('message')->nullable();
        $table->timestamps();
    });
}
=======
    public function up(): void
    {
        Schema::create('realisations', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->longText('description');
            $table->longText('contexte')->nullable();
            $table->longText('intervention')->nullable();
            $table->longText('resultat')->nullable();
            $table->longText('message')->nullable();
            $table->json('images')->nullable(); // 👈 colonne JSON pour stocker les chemins d’images


            $table->timestamps();
        });
    }

>>>>>>> d75851da67972809a7dfdb66abdaee1966f90223
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realisations');
    }
};
