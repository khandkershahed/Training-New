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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            $table->string('instructor_id')->nullable(); //Multiple
            $table->string('course_category_id')->nullable(); //Multiple

            $table->string('service_id')->nullable(); //Multiple
            $table->string('industry_id')->nullable(); //Multiple

            $table->string('name', 255);
            $table->string('slug', 255)->unique();
            $table->string('course_code', 50)->unique()->nullable();

            $table->string('course_type',)->nullable();
            $table->string('course_section_id',)->nullable();
            
            $table->string('tags')->nullable();
            $table->string('thumbnail_image', 255)->nullable();
            $table->string('lecture', 250)->nullable();
            $table->string('project', 250)->nullable();
            $table->string('course_duration', 150)->nullable();
            $table->string('course_time', 192)->nullable();
            $table->integer('available_seats')->default(1);
            $table->double('price')->nullable();
            $table->double('discount_price')->nullable();
            $table->double('online_price')->nullable();
            $table->date('discount_start_date')->nullable();
            $table->date('discount_end_date')->nullable();
            $table->date('class_start_date')->nullable();
            $table->date('class_end_date')->nullable();
            $table->date('registration_start_date')->nullable();
            $table->date('registration_end_date')->nullable();

            $table->string('status')->default('active');

            $table->string('short_descp')->nullable();
            $table->string('overview')->nullable();
            $table->string('currency')->nullable();
            $table->string('total_student')->nullable();
            $table->string('description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
