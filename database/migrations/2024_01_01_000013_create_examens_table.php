<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('examens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('consultation_id')->constrained()->onDelete('cascade');
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->foreignId('medecin_id')->constrained()->onDelete('cascade');
            $table->string('type_examen', 255)->nullable();
            $table->text('resultat')->nullable();
            $table->text('observation')->nullable();
            $table->dateTime('date_examen')->nullable();
            $table->string('statut', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('examens');
    }
};
