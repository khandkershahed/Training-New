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

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('call_me')->nullable();
            $table->string('course_type')->nullable();
            $table->string('course_amount')->nullable();

            $table->unsignedBigInteger('course_section_id')->nullable(); 
            $table->foreign('course_section_id')->references('id')->on('course_sections')->onDelete('cascade');

            $table->unsignedBigInteger('course_category_id')->nullable();
            $table->foreign('course_category_id')->references('id')->on('course_categories')->onDelete('cascade');

            $table->unsignedBigInteger('course_id')->nullable();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            
            $table->string('location')->nullable();
            $table->date('course_register_date')->nullable();

            $table->string('payment_type')->default('unpaid');
            $table->string('payment_method')->nullable();
            $table->string('transcation_id')->nullable();
            $table->string('amount')->nullable();
            $table->string('note')->nullable();

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
