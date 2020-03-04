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
        Schema::table('transacoes', function (Blueprint $table){
           $table->bigIncrements('id');
           $table->string('data'); // doubt: string, date, dateTime or timestamps
           $table->bigInteger('valor');
           $table->bigInteger('id_subcategoria');
           $table->foreign('id_subcategoria')
               ->on('subcategoria')
               ->references('id');
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
