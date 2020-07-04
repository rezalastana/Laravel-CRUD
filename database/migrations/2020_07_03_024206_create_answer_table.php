<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer', function (Blueprint $table) {
            $table->bigIncrements('id_jawaban');
            $table->string('isi_jawaban');
            $table->timestamp('tanggal_dibuat_jawaban')->nullable();
            $table->timestamp('tanggal_diperbaharui_jawaban')->nullable();
            $table->tinyInteger('is_selected');
            $table->integer('id_penjawab');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer');
    }
}
