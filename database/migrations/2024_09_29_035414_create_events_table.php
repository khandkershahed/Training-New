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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->text('event_name')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('max_attendees')->nullable();
            $table->integer('current_attendees')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('banner_badge')->nullable();
            $table->string('banner_sub_title')->nullable();
            $table->string('banner_title')->nullable();
            $table->string('organizer_text')->nullable();
            $table->text('map_link')->nullable();
            $table->text('website_link')->nullable();
            $table->text('whatsapp_link')->nullable();
            $table->text('facebook_link')->nullable();
            $table->text('other_link')->nullable();
            $table->string('row_one_title')->nullable();
            $table->string('row_one_image')->nullable();
            $table->longText('row_one_description')->nullable()->comment('text-editor');
            $table->string('row_two_title')->nullable();
            $table->longText('row_two_description')->nullable()->comment('text-editor');
            $table->string('row_three_badge')->nullable();
            $table->string('row_three_title')->nullable();
            $table->text('row_three_description')->nullable()->comment('normal-textarea');
            $table->string('status')->nullable()->comment('canceled','ongoing','upcoming','completed','registration_open','registration_close');
            $table->string('event_type')->nullable()->comment(['workshop', 'seminar', 'concert', 'conference', 'webinar']);
            $table->foreignId('added_by')->nullable()->constrained('admins')->onDelete('set null');
            $table->foreignId('updated_by')->nullable()->constrained('admins')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
