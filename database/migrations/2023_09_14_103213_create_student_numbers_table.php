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
        Schema::create('student_numbers', function (Blueprint $table) {
            $table->id();
            $table->string('class')->nullable();
            $table->string('shift')->nullable();
            $table->string('section')->nullable();
            $table->integer('boys')->nullable();
            $table->integer('girls')->nullable();
            $table->integer('children');
            $table->integer('children_of_children')->nullable();
            $table->integer('otistik')->nullable();
            $table->integer('physically_unfit')->nullable();
            $table->integer('science')->nullable();
            $table->integer('commerce')->nullable();
            $table->integer('arts')->nullable();
            $table->integer('muslim')->nullable();
            $table->integer('hindu')->nullable();
            $table->integer('christian')->nullable();
            $table->integer('buddhism')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_numbers');
    }
};
