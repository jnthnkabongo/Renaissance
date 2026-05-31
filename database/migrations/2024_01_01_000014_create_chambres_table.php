<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('chambres', function (Blueprint $table) {
            $table->id();
            $table->string('numero', 50)->nullable();
            $table->integer('capacite')->nullable();
            $table->string('type_chambre', 100)->nullable();
            $table->string('statut', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chambres');
    }
};
