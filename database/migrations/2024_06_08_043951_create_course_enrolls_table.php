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
        Schema::create('course_enrolls', function (Blueprint $table) {
            
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->double('amount')->nullable();
            $table->string('status')->default('unpaid');
            $table->string('payment_method')->nullable();
            $table->string('transcation_id')->nullable();
            $table->timestamp('payment_date')->nullable();
            $table->date('enrollment_date')->nullable();
            $table->string('discount')->nullable();
            $table->float('progress')->nullable();
            $table->string('certificate')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_enrolls');
    }
};
