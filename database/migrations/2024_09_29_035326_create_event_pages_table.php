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
        Schema::create('event_pages', function (Blueprint $table) {
            $table->id();

            $table->string('banner_image')->nullable();
            $table->string('banner_badge')->nullable();
            $table->string('banner_sub_title')->nullable();
            $table->string('banner_title')->nullable();
            $table->string('organizer_text')->nullable();
            $table->text('map_link')->nullable();
            $table->text('website_link')->nullable();
            $table->text('whatsapp_link')->nullable();
            $table->text('other_link')->nullable();
            $table->string('row_one_title')->nullable();
            $table->string('row_one_image')->nullable();
            $table->longText('row_one_description')->nullable()->comment('text-editor');
            
            $table->foreign('added_by')->references('id')->on('admins')->onDelete('set null');
            $table->foreign('updated_by')->references('id')->on('admins')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_pages');
    }
};
