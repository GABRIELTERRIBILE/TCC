<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'endereco',
        'cnpj',
        'cpf',
        'cidades',
        'estados',
        'cep',
        'obs',
    ];
}
