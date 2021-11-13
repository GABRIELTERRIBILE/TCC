<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $table = 'estoque';
    public $timestamps = false;
    protected $fillable = [
        'nome',
        'quantidade',
        'preco',
        'endereco_estoque',
        'data_entrada',
        'obs',
    ];
}
