<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hospitalisations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->foreignId('lit_id')->constrained()->onDelete('cascade');
            $table->foreignId('medecin_id')->constrained()->onDelete('cascade');
            $table->dateTime('date_entree')->nullable();
            $table->dateTime('date_sortie')->nullable();
            $table->text('motif')->nullable();
            $table->string('statut', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hospitalisations');
    }
};
