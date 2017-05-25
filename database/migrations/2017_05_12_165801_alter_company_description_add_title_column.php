<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCompanyDescriptionAddTitleColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companyDescription', function (Blueprint $table) {
            $table->string('contentTitle')
                ->nullable()
                ->after('choiceFontawesome')
                ->comment('描述區塊標題');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companyDescription', function (Blueprint $table) {
            $table->dropColumn('contentTitle');
        });
    }
}
