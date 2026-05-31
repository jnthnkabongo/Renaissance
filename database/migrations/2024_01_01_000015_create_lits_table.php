<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chambre_id')->constrained()->onDelete('cascade');
            $table->string('numero_lit', 50)->nullable();
            $table->string('statut', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lits');
    }
};
