<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemsDescription', function (Blueprint $table) {
            $table->increments('itemDescriptionId');
            $table->unsignedInteger('itemsGroupId');
            $table->foreign('itemsGroupId')
                  ->references('itemsGroupId')
                  ->on('itemsGroupFileTitle');
            $table->string('specTitle')
                  ->comment('文件標題');
            $table->string('specDescription')
                  ->comment('文件描述');
            $table->string('specPdfUrl')
                  ->nullable()
                  ->comment('文件所在位置');
            $table->string('specPdfName')
                  ->nullable()
                  ->comment('文件名稱');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itemsDescription');
    }
}
