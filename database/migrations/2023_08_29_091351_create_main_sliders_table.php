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
        Schema::create('main_sliders', function (Blueprint $table) {
            $table->id('main_slider_id');
            $table->string('main_slider_title');
            $table->string('main_slider_image');
            $table->text('main_slider_status')->default('Active');
            $table->integer('main_slider_delete')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_sliders');
    }
};
