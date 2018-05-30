<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amigo extends Model
{
    protected $table = 'amigos';

    protected $fillable = ['nome', 'apelido','avatar', 'telefone', 'rua', 'bairro', 'cidade', 'estado', 'foto', 'id_user'];
}
