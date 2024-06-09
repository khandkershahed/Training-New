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
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->string('branner1')->nullable();
            $table->string('banner1_title')->nullable();
            $table->text('banner1_short_description')->nullable();
            $table->string('banner1_button_name')->nullable();
            $table->string('banner1_button_link')->nullable();
            $table->string('branner2')->nullable();
            $table->string('banner2_title')->nullable();
            $table->text('banner2_short_description')->nullable();
            $table->string('banner2_button_name')->nullable();
            $table->string('banner2_button_link')->nullable();
            $table->string('branner3')->nullable();
            $table->string('banner3_title')->nullable();
            $table->text('banner3_short_description')->nullable();
            $table->string('banner3_button_name')->nullable();
            $table->string('banner3_button_link')->nullable();
            $table->text('header1')->nullable();
            $table->text('header2')->nullable();
            $table->string('btn1_title')->nullable();
            $table->string('btn1_name')->nullable();
            $table->string('btn1_link')->nullable();
            $table->string('btn2_title')->nullable();
            $table->string('btn2_name')->nullable();
            $table->string('btn2_link')->nullable();


            $table->unsignedBigInteger('story1_id')->nullable();
            $table->foreign('story1_id')->references('id')->on('features')->onUpdate('cascade');

            $table->unsignedBigInteger('story2_id')->nullable();
            $table->foreign('story2_id')->references('id')->on('features')->onUpdate('cascade');

            $table->unsignedBigInteger('story3_id')->nullable();
            $table->foreign('story3_id')->references('id')->on('features')->onUpdate('cascade');

            $table->unsignedBigInteger('story4_id')->nullable();
            $table->foreign('story4_id')->references('id')->on('features')->onUpdate('cascade');

            $table->unsignedBigInteger('story5_id')->nullable();
            $table->foreign('story5_id')->references('id')->on('features')->onUpdate('cascade');

            $table->unsignedBigInteger('solution1_id')->nullable();
            $table->foreign('solution1_id')->references('id')->on('news_trends')->onUpdate('cascade');

            $table->unsignedBigInteger('solution2_id')->nullable();
            $table->foreign('solution2_id')->references('id')->on('news_trends')->onUpdate('cascade');

            $table->unsignedBigInteger('solution3_id')->nullable();
            $table->foreign('solution3_id')->references('id')->on('news_trends')->onUpdate('cascade');

            $table->unsignedBigInteger('solution4_id')->nullable();
            $table->foreign('solution4_id')->references('id')->on('news_trends')->onUpdate('cascade');

            $table->unsignedBigInteger('techglossy_id')->nullable();
            $table->foreign('techglossy_id')->references('id')->on('news_trends')->onUpdate('cascade');

            $table->unsignedBigInteger('success1_id')->nullable();
            $table->foreign('success1_id')->references('id')->on('successes')->onUpdate('cascade');

            $table->unsignedBigInteger('success2_id')->nullable();
            $table->foreign('success2_id')->references('id')->on('successes')->onUpdate('cascade');

            $table->unsignedBigInteger('success3_id')->nullable();
            $table->foreign('success3_id')->references('id')->on('successes')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepages');
    }
};
