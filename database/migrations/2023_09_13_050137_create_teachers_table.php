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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id('teacher_id');
            $table->string('teacher_name');
            $table->string('teacher_pdsid')->unique();
            $table->string('teacher_gender');
            $table->string('teacher_designation');
            $table->string('teacher_email')->unique()->nullable();
            $table->string('teacher_phone')->unique();
            $table->string('teacher_subject');
            $table->string('teacher_joining_date');
            $table->string('teacher_division');
            $table->string('teacher_district');
            $table->string('teacher_upazila');
            $table->text('teacher_address')->nullable();
            $table->text('teacher_degree')->nullable();
            $table->string('teache_image');
            $table->text('teacher_status')->default('Active');
            $table->integer('teacher_delete')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
