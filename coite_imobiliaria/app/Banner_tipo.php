<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner_tipo extends Model
{
    protected $table = 'banner_tipo';
    protected $fillable = [		
		'atualizado',
		'bto_nome',
		'cadastrado',
		'excluido'
		
		
	];
}
