<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SubCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategoria', function (Blueprint $table){
           $table->bigIncrements('id');
           $table->string('nome');
           $table->bigInteger('categoria_id');
           $table->foreign('categoria_id')->references('id')->on('categoria');
           $table->enum('tipo',['rec','desp']);// receita e despesa


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subcategoria');
    }
}
