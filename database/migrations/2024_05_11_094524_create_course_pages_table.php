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
        Schema::create('course_pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->nullable()->constrained('courses')->cascadeOnUpdate();
            $table->string('banner_image');
            $table->string('row_one_title')->nullable();
            $table->text('row_one_header')->nullable();
            $table->text('header');
            $table->string('course_logo')->nullable();
            $table->string('row_six_title')->nullable();
            $table->text('row_six_header')->nullable();
            $table->foreignId('row_four_id')->nullable()->constrained('rows')->cascadeOnUpdate();
            $table->foreignId('row_five_id')->nullable()->constrained('rows')->cascadeOnUpdate();
            $table->string('row_six_image');
            $table->foreignId('row_seven_id')->nullable()->constrained('rows')->cascadeOnUpdate();
            $table->foreignId('row_eight_id')->nullable()->constrained('rows')->cascadeOnUpdate();
            
            $table->string('row_nine_title')->nullable();
            $table->text('row_nine_header')->nullable();
            $table->string('added_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_pages');
    }
};
