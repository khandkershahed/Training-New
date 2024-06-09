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
        Schema::create('course_queries', function (Blueprint $table) {
            $table->id();

            $table->foreignId('course_id')->nullable()->constrained('courses')->onDelete('cascade');
            $table->string('name', 200)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('phone',20)->nullable();
            $table->text('address')->nullable();
            $table->text('message')->nullable();
            $table->string('ip_address', 150)->nullable();
            $table->double('offer_price')->nullable();
            $table->enum('call', ['0', '1'])->default('0')->nullable();

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_queries');
    }
};
