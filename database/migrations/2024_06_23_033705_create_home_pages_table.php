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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('banner_one_image')->nullable();
            $table->text('banner_one_url')->nullable();
            $table->string('banner_two_image')->nullable();
            $table->text('banner_two_url')->nullable();
            $table->string('banner_three_image')->nullable();
            $table->text('banner_three_url')->nullable();
            $table->string('row_two_badge')->nullable();
            $table->string('row_two_title')->nullable();
            $table->longText('row_two_description')->nullable();
            $table->string('row_two_image')->nullable();
            $table->string('row_two_button_name')->nullable();
            $table->text('row_two_button_url')->nullable();
            $table->string('row_three_background_image')->nullable();
            $table->string('row_three_title')->nullable();
            $table->string('row_three_description')->nullable();
            $table->string('row_three_column_one_title')->nullable();
            $table->text('row_three_column_one_description')->nullable();
            $table->string('row_three_column_one_url')->nullable();
            $table->string('row_three_column_one_button_name')->nullable();
            $table->string('row_three_column_one_button_url')->nullable();
            $table->string('row_three_column_two_title')->nullable();
            $table->text('row_three_column_two_description')->nullable();
            $table->string('row_three_column_two_url')->nullable();
            $table->string('row_three_column_two_button_name')->nullable();
            $table->string('row_three_column_two_button_url')->nullable();
            $table->string('row_three_column_three_title')->nullable();
            $table->text('row_three_column_three_description')->nullable();
            $table->string('row_three_column_three_url')->nullable();
            $table->string('row_three_column_three_button_name')->nullable();
            $table->string('row_three_column_three_button_url')->nullable();
            $table->string('row_three_column_four_title')->nullable();
            $table->text('row_three_column_four_description')->nullable();
            $table->string('row_three_column_four_url')->nullable();
            $table->string('row_three_column_four_button_name')->nullable();
            $table->string('row_three_column_four_button_url')->nullable();
            $table->string('row_four_title')->nullable();
            $table->text('row_four_header')->nullable();
            $table->string('row_four_column_one_image')->nullable();
            $table->text('row_four_column_one_description')->nullable();
            $table->text('row_four_column_one_url')->nullable();
            $table->string('row_four_column_two_image')->nullable();
            $table->text('row_four_column_two_description')->nullable();
            $table->text('row_four_column_two_url')->nullable();
            $table->string('row_four_column_three_image')->nullable();
            $table->text('row_four_column_three_description')->nullable();
            $table->text('row_four_column_three_url')->nullable();
            $table->string('row_four_column_four_image')->nullable();
            $table->text('row_four_column_four_description')->nullable();
            $table->text('row_four_column_four_url')->nullable();
            $table->string('row_four_column_five_image')->nullable();
            $table->text('row_four_column_five_description')->nullable();
            $table->text('row_four_column_five_url')->nullable();
            $table->string('row_four_column_six_image')->nullable();
            $table->text('row_four_column_six_description')->nullable();
            $table->text('row_four_column_six_url')->nullable();
            $table->string('row_four_button_name')->nullable();
            $table->text('row_four_button_url')->nullable();
            $table->string('row_five_title')->nullable();
            $table->text('row_five_header')->nullable();
            $table->foreignId('row_five_course_one')->nullable()->constrained('courses')->onDelete('cascade');
            $table->foreignId('row_five_course_two')->nullable()->constrained('courses')->onDelete('cascade');
            $table->foreignId('row_five_course_three')->nullable()->constrained('courses')->onDelete('cascade');
            $table->string('row_six_title')->nullable();
            $table->text('row_six_header')->nullable();
            $table->string('row_six_background_image')->nullable();
            $table->string('row_six_section_one_title')->nullable();
            $table->text('row_six_section_one_url')->nullable();
            $table->string('row_six_section_two_title')->nullable();
            $table->text('row_six_section_two_url')->nullable();
            $table->string('row_six_section_three_title')->nullable();
            $table->text('row_six_section_three_url')->nullable();
            $table->string('row_six_section_four_title')->nullable();
            $table->text('row_six_section_four_url')->nullable();
            $table->string('row_six_section_five_title')->nullable();
            $table->text('row_six_section_five_url')->nullable();
            $table->string('row_six_section_six_title')->nullable();
            $table->text('row_six_section_six_url')->nullable();
            $table->string('row_six_button_name')->nullable();
            $table->text('row_six_button_url')->nullable();
            $table->string('row_seven_badge')->nullable();
            $table->string('row_seven_title')->nullable();
            $table->string('row_seven_section_one_icon')->nullable();
            $table->string('row_seven_section_one_title')->nullable();
            $table->text('row_seven_section_one_description')->nullable();
            $table->text('row_seven_section_one_url')->nullable();
            $table->string('row_seven_section_two_icon')->nullable();
            $table->string('row_seven_section_two_title')->nullable();
            $table->text('row_seven_section_two_description')->nullable();
            $table->text('row_seven_section_two_url')->nullable();
            $table->string('row_seven_section_three_icon')->nullable();
            $table->string('row_seven_section_three_title')->nullable();
            $table->text('row_seven_section_three_description')->nullable();
            $table->text('row_seven_section_three_url')->nullable();
            $table->string('row_eight_title')->nullable();
            $table->text('row_eight_header')->nullable();
            $table->string('row_nine_title')->nullable();
            $table->string('row_nine_button_name')->nullable();
            $table->text('row_nine_button_url')->nullable();
            $table->string('row_ten_title')->nullable();
            $table->text('row_ten_header')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
