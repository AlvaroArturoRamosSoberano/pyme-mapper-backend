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
        Schema::create('fire_extinguisher_details', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->date('last_inspection_date');
            $table->date('expiration_date');
            $table->double('capacity');
            $table->string('notes');
            $table->foreignId('fire_extinguisher_type_id')->constrained();
            $table->foreignId('regulatory_aspect_id')->constrained();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fire_extinguisher_details');
    }
};
