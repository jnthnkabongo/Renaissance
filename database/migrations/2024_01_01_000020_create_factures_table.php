<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->foreignId('consultation_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('numero_facture', 100)->unique()->nullable();
            $table->decimal('montant_total', 12, 2)->nullable();
            $table->decimal('montant_paye', 12, 2)->nullable();
            $table->decimal('reste', 12, 2)->nullable();
            $table->string('statut', 50)->nullable();
            $table->dateTime('date_facture')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
