<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTouristDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourist_destinations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('city_name');
            $table->string('price');
            $table->string('special_price');
            $table->string('is_available');
            $table->string('number_of_days');
            $table->string('max_pacenger_count');
            $table->string('current_pacenger_count');
            $table->text('city_desc');
            $table->text('city_image');
            $table->unsignedBigInteger('tourism_office_id');
            $table->foreign('tourism_office_id')->references('id')->on('tourism_offices')->onDelete('cascade');
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
        Schema::dropIfExists('tourist_destinations');
    }
}
