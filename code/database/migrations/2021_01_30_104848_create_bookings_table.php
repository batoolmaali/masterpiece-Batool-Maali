<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('flower_id')->nullable();
            $table->foreign('flower_id')->references('id')->on('flowers')->onDelete('cascade');
            $table->unsignedBigInteger('dress_id')->nullable();
            $table->foreign('dress_id')->references('id')->on('dresses')->onDelete('cascade');
            $table->unsignedBigInteger('hall_id')->nullable();
            $table->foreign('hall_id')->references('id')->on('halls')->onDelete('cascade');
            $table->unsignedBigInteger('tourist_destination_id')->nullable();
            $table->foreign('tourist_destination_id')->references('id')->on('tourist_destinations')->onDelete('cascade');
            $table->unsignedBigInteger('photographer_id')->nullable();
            $table->foreign('photographer_id')->references('id')->on('photographers')->onDelete('cascade');
            $table->unsignedBigInteger('suit_id')->nullable();
            $table->foreign('suit_id')->references('id')->on('suits')->onDelete('cascade');
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
