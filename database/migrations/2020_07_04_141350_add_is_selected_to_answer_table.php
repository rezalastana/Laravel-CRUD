<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsSelectedToAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('answer', function (Blueprint $table) {
            $table->bigInteger('is_selected')->unsigned()->nullable();
            $table->foreign('is_selected')->references('id_pertanyaan')->on('question')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('answer', function (Blueprint $table) {
            $table->dropForeign(['is_selected']);
            $table->dropColumn('is_selected');
        });
    }
}
