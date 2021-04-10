<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('room_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('guest_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('guest_name');
            $table->string('guest_email');
            $table->string('guest_phone_number');
            $table->timestamp('arrival_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('departure_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
