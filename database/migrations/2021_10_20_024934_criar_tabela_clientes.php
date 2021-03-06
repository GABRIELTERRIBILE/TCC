<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('cnpj');
            $table->string('cpf');
            $table->string('cidades');
            $table->string('estados');
            $table->string('cep');
            $table->string('obs');
        });
    }
    public function down()
    {
        Schema::drop('clientes');

    }
}
