<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryItemsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoryItemImages', function (Blueprint $table) {
            $table->increments('categoryItemImageId');
            $table->unsignedInteger('categoryItemId');
            $table->foreign('categoryItemId')
                  ->references('categoryItemId')
                  ->on('categoryItems');
            $table->unsignedSmallInteger('imageOrder');
            $table->string('imageName');
            $table->string('status', 1)
                  ->comment('A：正常，D：停用');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoryItemImages');
    }
}
