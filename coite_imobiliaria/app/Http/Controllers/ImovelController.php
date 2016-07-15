<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Imovel;
use App\Imovel_tipo;
use App\Bairro;
use App\Cidade;
use App\Construtora;
use App\Negociacao;
use DB;


class ImovelController extends Controller
{
  	public function getIndex(){

  		$imoveis = Imovel::get();

        $imovel_tipos = Imovel_tipo::lists('tipo_imovel', 'id');
        $bairros = Bairro::lists('nome_bairro', 'id');
		$cidades = Cidade::lists('nome_cidade', 'id');
		$negociacoes = Negociacao::lists('tipo_negociacao', 'id');

        return view('welcome', [        	
            'imoveis' => $imoveis,
            'imovel_tipos' => $imovel_tipos,          
            'bairros' => $bairros,
        	'cidades' => $cidades,        	
        	'negociacoes' => $negociacoes
        ]);
  	} 

	public function getCreate(){		
		$imovel_tipos = Imovel_tipo::lists('tipo_imovel', 'id');
		$bairros = Bairro::lists('nome_bairro', 'id');
		$cidades = Cidade::lists('nome_cidade', 'id');
		$construtoras = Construtora::lists('nome_construtora', 'id');
		$negociacoes = Negociacao::lists('tipo_negociacao', 'id');		
		return view('create-imovel', [
        	'imovel_tipos' => $imovel_tipos,
        	'bairros' => $bairros,
        	'cidades' => $cidades,
        	'construtoras' => $construtoras,
        	'negociacoes' => $negociacoes
        ]);
        
	}
	
	public function postStore(Request $request){
		$imovel = new Imovel();
			
		$nome_tipo_imovel = $request->get('imovel_tipo');	
		$imovel_tipo = Imovel_tipo::find($nome_tipo_imovel);
		if(empty($imovel_tipo)){
			$imovel_tipo = new Imovel_tipo();
			$imovel_tipo->tipo_imovel = $request->get('imovel_tipo');
			$imovel_tipo->save();			
		}

		$nome_tipo_negociacao = $request->get('negociacao');	
		$negociacao = Negociacao::find($nome_tipo_negociacao);
		if(empty($negociacao)){
			$negociacao = new Negociacao();
			$negociacao->tipo_negociacao = $request->get('negociacao');
			$negociacao->save();			
		}

		$nome_construtora = $request->get('construtora');	
		$construtora = Construtora::find($nome_construtora);
		if(empty($construtora)){
			$construtora = new Construtora();
			$construtora->nome_construtora = $request->get('construtora');
			$construtora->save();			
		}

		$nome_cidade = $request->get('cidade');	
		$cidade = Cidade::find($nome_cidade);
		if(empty($cidade)){
			$cidade = new Cidade();
			$cidade->nome_cidade = $request->get('cidade');
			$cidade->save();			
		}

		$nome_bairro = $request->get('bairro');	
		$bairro = Cidade::find($nome_bairro);
		if(empty($bairro)){
			$bairro = new Bairro();
			$bairro->nome_bairro = $request->get('bairro');
			$bairro->id_cidade = $cidade->id;
			$bairro->save();			
		}

		$imovel->id_tipo_imovel = $imovel_tipo->id;
		$imovel->id_negociacao = $negociacao->id;
		$imovel->id_construtora = $construtora->id;
		$imovel->id_bairro = $bairro->id;

		$imovel->area = $request->get('area');
		$imovel->banheiros = $request->get('banheiros');
		$imovel->cozinhas = $request->get('cozinhas');
		$imovel->descricao = $request->get('descricao');
		$imovel->garagem = $request->get('garagem');
		$imovel->mezanino = $request->get('mezanino');
		$imovel->quartos = $request->get('quartos');
		$imovel->recepcao = $request->get('recepcao');
		$imovel->salas = $request->get('salas');
		$imovel->titulo = $request->get('titulo');
		$imovel->save();		
			
		return Redirect::to('home');
	}	

	public function getShow($id){
		$imovel = Imovel::findOrFail($id);		
		return view('show-imovel', ['imovel' => $imovel]);
	}
	
	public function postBusca(Request $request){
		$id_tipo_imovel = $request->get('imovel_tipo');
		$imoveis_filtro_tipo_imovel = DB::table('imovel')->where('id_tipo_imovel', $id_tipo_imovel)->get();

		$imovel_tipos = Imovel_tipo::lists('tipo_imovel', 'id');
		$bairros = Bairro::lists('nome_bairro', 'id');
		$cidades = Cidade::lists('nome_cidade', 'id');
		$negociacoes = Negociacao::lists('tipo_negociacao', 'id');

		return view('welcome', [        	
            'imoveis' => $imoveis_filtro_tipo_imovel,
            'imovel_tipos' => $imovel_tipos,          
            'bairros' => $bairros,
        	'cidades' => $cidades,        	
        	'negociacoes' => $negociacoes
        ]);
	}
	
	public function missingMethod($params = array()){
		return view('erro404');
	}
	
}
