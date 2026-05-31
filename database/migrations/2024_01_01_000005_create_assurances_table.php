<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assurances', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 255);
            $table->string('telephone', 50)->nullable();
            $table->text('adresse')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assurances');
    }
};
