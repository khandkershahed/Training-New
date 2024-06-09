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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();

            $table->string('coupon_name')->nullable();
            $table->string('coupon_discount')->nullable();
            $table->date('coupon_start_date')->nullable();
            $table->date('coupon_end_date')->nullable();
            $table->string('coupon_validity')->nullable();
            $table->string('is_expired')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
