<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('user_name');
            $table->string('phone');
            $table->string('email');
            $table->string('address')->nullable();
            $table->string('child_number');
            $table->string('child_age')->nullable();
            $table->string('adult_number');
            $table->string('guest_number');
            $table->string('room_name');
            $table->string('hotel_name');
            $table->unsignedBigInteger('hotel_id');
            $table->unsignedBigInteger('room_id');
            $table->datetime('check_in');
            $table->datetime('check_out');
            $table->enum('payment_mode', ['cash','gateway'])->default('gateway');
            $table->enum('payment_status',['paid','unpaid'])->default('unpaid');
            $table->string('review')->nullable();
            $table->string('comments')->nullable();
            $table->enum('status', ['pending','approved'])->default('pending');
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
        Schema::dropIfExists('customers');
    }
}
