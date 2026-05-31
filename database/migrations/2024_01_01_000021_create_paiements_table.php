<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('facture_id')->constrained()->onDelete('cascade');
            $table->decimal('montant', 12, 2)->nullable();
            $table->string('devise', 10)->nullable();
            $table->string('mode_paiement', 50)->nullable();
            $table->string('reference', 255)->nullable();
            $table->dateTime('date_paiement')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
