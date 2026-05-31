<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('patient_assurances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->foreignId('assurance_id')->constrained()->onDelete('cascade');
            $table->string('numero_police', 100)->nullable();
            $table->date('date_expiration')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('patient_assurances');
    }
};
