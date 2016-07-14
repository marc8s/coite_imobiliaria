<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner_tipo extends Model
{
    protected $fillable = [		
		'bto_nome',
		'excluido',
		'cadastrado',
		'atualizado'
	];
}
