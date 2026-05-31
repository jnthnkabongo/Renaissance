<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('medicaments', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->unique()->nullable();
            $table->string('nom', 255);
            $table->string('dosage', 100)->nullable();
            $table->string('forme', 100)->nullable();
            $table->decimal('prix_unitaire', 12, 2)->nullable();
            $table->integer('stock')->default(0);
            $table->integer('seuil_alerte')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('medicaments');
    }
};
