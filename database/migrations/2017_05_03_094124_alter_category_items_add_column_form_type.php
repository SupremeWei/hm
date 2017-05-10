<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCategoryItemsAddColumnFormType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categoryItems', function (Blueprint $table) {
            $table->string('formType', '2')
                  ->nullable()
                  ->after('title')
                  ->comment('A：發光二極體、High Power LED，B：DC-Use Film Capacitors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categoryItems', function (Blueprint $table) {
            $table->dropColumn('formType');
        });
    }
}
