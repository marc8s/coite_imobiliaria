<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bairro extends Model
{
	protected $table = 'bairro';
    protected $fillable = [		
		'id_cidade',
		'nome_bairro'
	];
}
