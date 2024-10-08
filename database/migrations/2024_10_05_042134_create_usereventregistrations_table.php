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
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('event_id')->nullable()->constrained('events')->onDelete('cascade');
            $table->text('project_name')->nullable();
            $table->string('team_id')->unique()->comment('auto-generate')->nullable();
            $table->integer('team_member')->nullable();
            $table->string('team_member_one_name')->nullable();
            $table->string('team_member_two_name')->nullable();
            $table->string('attachment')->nullable();
            $table->date('slot')->nullable()->comment('showing only from admin panel, not from frontend.');
            $table->string('status')->nullable()->comment('showing only from admin panel, not from frontend.');
            $table->decimal('amount_paid', 8, 2)->nullable();
            $table->enum('payment_status', ['pending', 'completed', 'failed'])->default('pending');
            $table->string('transaction_id')->nullable();
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
