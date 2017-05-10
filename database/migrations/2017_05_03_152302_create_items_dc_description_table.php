<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsDcDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemsDCDescription', function (Blueprint $table) {
            $table->increments('itemDCDescriptionId');
            $table->unsignedInteger('itemDescriptionId');
            $table->foreign('itemDescriptionId')
                  ->references('itemDescriptionId')
                  ->on('itemsDescription');
            $table->string('dielectric');
            $table->string('description')
                  ->nullable();
            $table->string('capacitanceRange')
                  ->nullable();
            $table->string('ratedVoltageRange')
                  ->nullable();
            $table->string('imageUrl');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itemsDCDescription');
    }
}
