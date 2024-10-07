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
        Schema::create('usereventregistrations', function (Blueprint $table) {
            $table->id();

            $table->integer('event_id')->nullable();
            $table->integer('user_id')->nullable();

            $table->string('event_name')->nullable();

            $table->integer('team_member')->nullable();
            $table->string('team_member_one_name')->nullable();
            $table->string('team_member_two_name')->nullable();

            $table->string('attachment')->nullable();

            


            
            $table->string('team_member_one_name')->nullable();
            $table->string('team_member_two_name')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usereventregistrations');
    }
};
