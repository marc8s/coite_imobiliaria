<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel_fotos extends Model
{
     protected $table = 'imovel_fotos';
     protected $fillable = [		
		'foto_arquivo'
		
	];
}
