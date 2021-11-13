<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaFornecedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('cnpj');
            $table->string('cidade');
            $table->string('estado');
            $table->string('cep');
        });
    }
    public function down()
    {
        Schema::drop('fornecedores');

    }
}
