<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class fornecedores extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'endereco',
        'cnpj',
        'cidade',
        'estado',
        'cep',
    ];
}
