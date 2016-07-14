<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corretor_contato extends Model
{
    protected $table = 'corretor_contato';
    protected $fillable = [
		'id_corretor',
		'telefone'
	];
}
