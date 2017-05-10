<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsGroupFileTitleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemsGroupFileTitle', function (Blueprint $table) {
            $table->increments('itemsGroupId');
            $table->unsignedInteger('categoryItemId');
            $table->foreign('categoryItemId')
                  ->references('categoryItemId')
                  ->on('categoryItems');
            $table->string('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itemsGroupFileTitle');
    }
}
