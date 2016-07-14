<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    
    protected $table = 'banner';
    protected $fillable = [		
		'atualizado',
		'ban_nome',
		'ban_arquivo',
		'ban_link',
		'banner_tipo_id',
		'ban_ativo',
		'cadastrado',
		'excluido'		
		
	];
}
