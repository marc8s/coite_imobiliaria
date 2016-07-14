<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel_tipo extends Model
{
    protected $table = 'imovel_tipo';
    protected $fillable = [
		'tipo_imovel'
	];
}
