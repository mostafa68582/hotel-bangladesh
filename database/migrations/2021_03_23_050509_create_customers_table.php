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
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('user_name');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('children_number');
            $table->string('children_age');
            $table->string('adult_number');
            $table->string('guest_number');
            $table->string('room_name');
            $table->string('hotel_name');
            $table->integer('hotel_id');
            $table->integer('hotel_number');
            $table->integer('room_id');
            $table->string('check_in');
            $table->string('check_out');
            $table->string('payment_mode');
            $table->string('payment_system');
            $table->string('review');
            $table->string('comments');
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
