<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLanguageIdToBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')->references('id')->on('languages')->nullable();
            $table->unsignedBigInteger('original_language_id');
            $table->foreign('original_language_id')->references('id')->on('languages')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign(['language_id']);
            $table->dropColumn('language_id');

            $table->dropForeign(['original_language_id']);
            $table->dropColumn('original_language_id');
        });
    }
}
