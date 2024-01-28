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
        Schema::create('regulatory_aspects', function (Blueprint $table) {
            $table->id();
            $table->date('date_assessed');
            $table->string('responsible_department');
            $table->boolean('conservation_program');
            $table->boolean('emergency_plan');
            $table->boolean('fire_extinguisher');
            $table->foreignId('inspection_id')->constrained();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regulatory_aspects');
    }
};
