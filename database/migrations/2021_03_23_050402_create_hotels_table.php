<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
           /* $table->id();//old schema
            $table->string('hotel_name');
            $table->integer('star_rating');
            $table->string('hotel_phone');
            $table->string('user_phone');
            $table->string('location');
            $table->string('street_address');
            $table->string('country');
            $table->string('city');
            $table->string('zip_code');
            $table->string('district');
            $table->string('thana');
            $table->string('payment_method');
            $table->string('user_id');
            $table->string('room_id');
            $table->string('facility_id');
            $table->string('image_id');
            $table->string('description');
            $table->string('hotel_type');
            $table->enum('status', ['pending','approved'])->default('pending');
            $table->string('remark');
            $table->timestamps();*/
            $table->id();
            $table->string('hotel_name');
            $table->string('hotel_phone');
            $table->string('user_phone');
            $table->string('hotel_email');
            $table->string('user_email');
            $table->string('web_url');
            $table->integer('star_rating');
            $table->string('location');
            $table->string('street_address');
            $table->string('country');
            $table->string('city');
            $table->string('zip_code');
            $table->string('district');
            $table->string('thana');
            $table->enum('payment_method', ['cash','gateway'])->default('gateway');
            $table->enum('hotel_type', ['high_level','mid_level','low_level'])->default('high_level');
            $table->string('description');
            $table->enum('status', ['pending','approved'])->default('pending');
            $table->string('hotel_id');
            $table->string('remark');
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
        Schema::dropIfExists('hotels');
    }
}
