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
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('name');
            $table->string('hotel_id')->unique();
            $table->string('phone');
            $table->string('email');
            $table->string('website');
            $table->integer('star_rating');
            $table->string('location');
            $table->string('street_address');
            $table->string('country');
            $table->string('city');
            $table->string('zip_code');
            $table->string('district');
            $table->string('thana');
            $table->enum('payment_method', ['cash', 'gateway'])->default('gateway');
            $table->string('remark');
            $table->text('description');
            $table->enum('status', ['pending', 'approved'])->default('pending');
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
