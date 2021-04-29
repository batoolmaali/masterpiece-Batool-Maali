<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dress_name');
            $table->string('dress_size');
            $table->string('dress_color');
            $table->string('dress_price');
            $table->string('special_price');
            $table->string('is_available');
            $table->text('dress_desc');
            $table->text('dress_image')->nullable();
            $table->unsignedBigInteger('dresses_shop_id');
            $table->foreign('dresses_shop_id')->references('id')->on('dresses_shops')->onDelete('cascade');
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
        Schema::dropIfExists('dresses');
    }
}
