<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('suit_name');
            $table->string('suit_size');
            $table->string('suit_color');
            $table->string('suit_price');
            $table->string('special_price');
            $table->string('is_available');
            $table->text('suit_desc');
            $table->text('suit_image')->nullable();
            $table->unsignedBigInteger('suit_shop_id');
            $table->foreign('suit_shop_id')->references('id')->on('suit_shops')->onDelete('cascade');
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
        Schema::dropIfExists('suits');
    }
}
