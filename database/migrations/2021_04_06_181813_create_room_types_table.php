<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('costs_per_day');
            $table->float('size', 3, 1);
            $table->integer('capacity');
            $table->integer('max_adult');
            $table->integer('max_child');
            $table->string('description');
            $table->string('bed_type');
            $table->boolean('room_service')->default(false);
            $table->enum('status', ['available', 'not_available'])->default('available');
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
        Schema::dropIfExists('room_types');
    }
}
