<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('geographic_details', function (Blueprint $table) {
            $table->foreignId('city_id')->constrained();
            $table->foreignId('colony_id')->constrained();
            $table->foreignId('municipality_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('geographic_details');
    }
};
