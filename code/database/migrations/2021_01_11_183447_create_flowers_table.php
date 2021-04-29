<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flowers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('flower_name');
            $table->string('flower_color');
            $table->string('flower_type');
            $table->string('flower_price');
            $table->string('special_price');
            $table->string('is_available');
            $table->text('flower_desc');
            $table->text('flower_image')->nullable();
            $table->unsignedBigInteger('flower_shop_id');
            $table->foreign('flower_shop_id')->references('id')->on('flower_shops')->onDelete('cascade');
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
        Schema::dropIfExists('flowers');
    }
}
