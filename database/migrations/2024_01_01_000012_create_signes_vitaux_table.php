<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('signes_vitaux', function (Blueprint $table) {
            $table->id();
            $table->foreignId('consultation_id')->constrained()->onDelete('cascade');
            $table->decimal('temperature', 4, 1)->nullable();
            $table->decimal('poids', 5, 2)->nullable();
            $table->decimal('taille', 5, 2)->nullable();
            $table->string('tension_arterielle', 20)->nullable();
            $table->integer('frequence_cardiaque')->nullable();
            $table->integer('saturation')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('signes_vitaux');
    }
};
