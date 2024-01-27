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
        Schema::create('technical_sheets', function (Blueprint $table) {
            $table->id();
            $table->string('contact_person');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->date('founding_date');
            $table->string('legal_status');
            $table->string('fiscal_code');
            $table->string('bussiness_description');
            $table->string('other_details');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technical_sheets');
    }
};
