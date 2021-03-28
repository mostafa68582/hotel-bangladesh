<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialDayPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_day_prices', function (Blueprint $table) {
            $table->id();
            $table->integer('hotel_id');
            $table->integer('room_id');
            $table->string('day_name');
            $table->float('room_price');
            $table->string('discount');
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
        Schema::dropIfExists('special_day_prices');
    }
}
