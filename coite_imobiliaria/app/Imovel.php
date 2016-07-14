<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = [
		'titulo',
		'valor',
		'area',
		'descricao',
		'codigo',
		'quartos',
		'garagem',
		'banheiros',
		'cozinhas',
		'recepcao',
		'mezanino',
		'salas',
		'vagas_de_estacionamento',
		'id_bairro',
		'id_construtora',
		'id_negociacao',
		'id_tipo_imovel'
	];
}
