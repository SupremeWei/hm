<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyDescription', function (Blueprint $table) {
            $table->increments('companyDescriptionId');
            $table->string('usePage');
            $table->string('descriptionType');
            $table->string('choiceFontawesome')
                  ->nullable();
            $table->text('content');
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
        Schema::dropIfExists('companyDescription');
    }
}
