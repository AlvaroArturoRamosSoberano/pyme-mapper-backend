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
        Schema::create('incident_records', function (Blueprint $table) {
            $table->id();
            $table->date('incident_date');
            $table->string('incident_type');
            $table->string('incident_title');
            $table->string('description');
            $table->string('resolution');
            $table->string('notes');
            $table->string('image_path');
            $table->foreignId('company_id')->constrained();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incident_records');
    }
};
