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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('vehicle_id')->constrained()->onDelete('cascade');
            $table->foreignId('driver_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('approver1_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('approver2_id')->constrained('users')->onDelete('cascade');
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->enum('status', ['created', 'pending', 'approved_1', 'approved_2', 'rejected','done', 'cancelled']);
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
