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
        Schema::create('tank_details', function (Blueprint $table) {
            $table->id();
            $table->string('station_location');
            $table->float('capacity');
            $table->string('material');
            $table->date('year_of_manufacture');
            $table->boolean('restored');
            $table->foreignId('position_id')->constrained();
            $table->foreignId('fuel_type_id')->constrained();
            $table->foreignId('inspection_risk_aspect_id')->constrained();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tank_details');
    }
};
