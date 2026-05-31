<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('approvisionnements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fournisseur_id')->constrained()->onDelete('cascade');
            $table->dateTime('date_approvisionnement')->nullable();
            $table->decimal('montant_total', 12, 2)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('approvisionnements');
    }
};
