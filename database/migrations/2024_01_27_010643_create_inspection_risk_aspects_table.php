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
        Schema::create('inspection_risk_aspects', function (Blueprint $table) {
            $table->id();
            $table->boolean('gas_production');
            $table->integer('explosiveness');
            $table->boolean('gas_tank');
            $table->foreignId('inspection_id')->constrained();
            $table->foreignId('risk_aspect_id')->constrained();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspection_risk_aspects');
    }
};
