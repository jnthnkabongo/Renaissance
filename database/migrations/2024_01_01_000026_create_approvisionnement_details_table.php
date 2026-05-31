<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('approvisionnement_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('approvisionnement_id')->constrained()->onDelete('cascade');
            $table->foreignId('medicament_id')->constrained()->onDelete('cascade');
            $table->integer('quantite')->nullable();
            $table->decimal('prix_achat', 12, 2)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('approvisionnement_details');
    }
};
