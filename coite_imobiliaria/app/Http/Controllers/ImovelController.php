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


class ImovelController extends Controller
{
   
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
			//adicionar o tipo de imovel na tabela imovel_tipo aqui
		}else{
			$imovel->id_tipo_imovel = $imovel_tipo->id;
		}

		
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
		$imovel->push();
		//$radialista = $radialista -> create($request->all());		
		\Session::flash('mensagem_sucesso', 'Imovel cadastrado com sucesso!');		
		return Redirect::to('home');
	}
	
	
	
	public function missingMethod($params = array()){
		return view('erro404');
	}
	
}
