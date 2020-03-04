<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('data'); // doubt: string, date, dateTime or timestamps
            $table->bigInteger('valor');
            $table->bigInteger('subcategoria_id');
            $table->foreign('subcategoria_id')
                ->references('id')
                ->on('subcategoria');
            $table->string('tipo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transacoes');
    }
}
