<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Construtora extends Model
{
    protected $table = 'construtora';
    protected $fillable = [
		'nome_construtora'
	];
}
