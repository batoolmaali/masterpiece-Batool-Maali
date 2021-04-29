<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hall_name');
            $table->string('hall_address');
            $table->string('hall_type');
            $table->string('hall_price');
            $table->string('special_price');
            $table->string('persons_number');
            $table->string('is_available');
            $table->text('hall_image')->nullable();
            $table->text('hall_desc');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
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
        Schema::dropIfExists('halls');
    }
}
