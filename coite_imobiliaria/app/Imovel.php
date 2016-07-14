<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
	protected $table = 'imovel';
    protected $fillable = [		
		'area',		
		'banheiros',
		'cozinhas',
		'descricao',
		'garagem',
		'id_bairro',
		'id_construtora',
		'id_negociacao',
		'id_tipo_imovel',
		'id_views',
		'mezanino',
		'quartos',		
		'recepcao',		
		'salas',
		'titulo',
		'valor_aluguel',
		'valor_venda',
		'vagas_de_estacionamento'
		
	];

	 
}
