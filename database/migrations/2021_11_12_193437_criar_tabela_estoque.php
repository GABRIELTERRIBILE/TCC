<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaEstoque extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoque', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('quantidade');
            $table->string('preco');
            $table->string('endereco_estoque');
            $table->string('data_entrada');
            $table->string('obs');

        });
    }
    public function down()
    {
        Schema::drop('estoque');

    }
}
