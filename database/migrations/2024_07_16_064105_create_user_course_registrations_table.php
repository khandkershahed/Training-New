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
        Schema::create('user_course_registrations', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('call_me')->nullable();
            $table->string('course_type')->nullable();
            $table->unsignedBigInteger('course_section_id')->nullable(); 
            $table->unsignedBigInteger('course_category_id')->nullable();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->string('location')->nullable();
            $table->date('course_register_date')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_course_registrations');
    }
};
