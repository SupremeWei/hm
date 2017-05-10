<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoryItems', function (Blueprint $table) {
            $table->increments('categoryItemId');
            $table->unsignedInteger('categoryId');
            $table->foreign('categoryId')
                  ->references('categoryId')
                  ->on('category');
            $table->string('title');
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
        Schema::dropIfExists('categoryItems');
    }
}
