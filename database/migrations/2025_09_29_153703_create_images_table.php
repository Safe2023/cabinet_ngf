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
    Schema::create('images', function (Blueprint $table) {
        $table->id();

        $table->string('image');

        $table->foreignId('realisation_id')
            ->constrained()
            ->onDelete('cascade');

        $table->timestamps();
    });
}
=======
    public function up(): void
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->json('image');
            $table->unsignedBigInteger('realisation_id');
            $table->foreign('realisation_id')
                ->references('id')
                ->on('realisations')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }
>>>>>>> d75851da67972809a7dfdb66abdaee1966f90223

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
