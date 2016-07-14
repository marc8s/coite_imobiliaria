<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negociacao extends Model
{
    protected $table = 'negociacao';
    protected $fillable = [
		'tipo_negociacao'
	];
}
