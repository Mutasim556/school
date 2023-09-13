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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id('address_id');
            $table->text('school_address');
            $table->string('school_phone');
            $table->string('school_email');
            $table->string('school_location_link')->nullable();
            $table->string('school_facebook_link')->nullable();
            $table->string('school_linkedin_link')->nullable();
            $table->string('school_youtube_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
