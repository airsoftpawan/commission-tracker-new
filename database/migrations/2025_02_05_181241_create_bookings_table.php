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
            $table->bigIncrements('id');
            $table->string('vehicle_number')->nullable();
            $table->foreignId('salesman_id');
            $table->decimal(10, 2)('sale_amount')->nullable();
            $table->decimal(10, 2)('gst')->nullable();
            $table->enum('Cash', 'Card', 'UPI', 'Advance')('payment_mode');
            $table->string('company_name')->nullable();
            $table->string('driver_name')->nullable();
            $table->string('convincer_name')->nullable();
            $table->string('guide_name')->nullable();
            $table->decimal(10, 2)('commission_amount')->nullable();
            $table->enum('Paid', 'Partial', 'Pending')('payment_status')->nullable();
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
