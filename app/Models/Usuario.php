<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 27 May 2019 23:46:44 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Usuario
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property int $ativo
 *
 * @property \Illuminate\Database\Eloquent\Collection $contas
 *
 * @package App\Models
 */
class Usuario extends Model
{
    public $timestamps = false;

    protected $casts = [
        'ativo' => 'int'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    protected $fillable = [
        'email',
        'password',
        'remember_token',
        'ativo'
    ];

    public function contas()
    {
        return $this->belongsToMany(\App\Models\Conta::class, 'usuarios_contas', 'usuario_pfk', 'conta_pfk');
    }
}
