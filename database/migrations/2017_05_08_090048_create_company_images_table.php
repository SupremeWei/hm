<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyImages', function (Blueprint $table) {
            $table->increments('companyImageId');
            $table->string('usePage');
            $table->string('useLocation');
            $table->string('fileName');
            $table->string('fileUrl');
            $table->string('status');
            $table->dateTime('updateDateTime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companyImageId');
    }
}
