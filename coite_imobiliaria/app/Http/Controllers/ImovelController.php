<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Imovel;
use App\Imovel_tipo;

class ImovelController extends Controller
{
   /* public function getIndex(){
		$radialistas = Radialista::get();			
		return view('indexRadialistas', compact('radialistas'));
	}
	*/	
	public function getCreate(){		
		$imovel_tipos = Imovel_tipo::lists('tipo_imovel', 'id');
		//$imovel_tipos = array('' => 'Selecione o tipo do imóvel') + Imovel_tipo::lists('tipo_imovel', 'id');
		return view('create-imovel', [
        	'imovel_tipos' => $imovel_tipos,
                      
            
        ]);

        //return view('create-imovel');
	}
	
	public function postStore(Request $request){
		$imovel = new Imovel();
			
		$nome_tipo_imovel = $request->get('imovel_tipo');	
		$imovel_tipo = Imovel_tipo::find($nome_tipo_imovel);
		if(empty($imovel_tipo)){
			$imovel->id_tipo_imovel = 9;
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
	}/*
	
	//carregar um radialista especifico pra edição
	public function getEdit($id){
		$radialista = Radialista::findOrFail($id);		
		return view('create-editRadialista', ['radialista' => $radialista]);
	}
	//alterar um radialista especifico 
	public function patchUpdate($id, Request $request){
		$radialista = Radialista::findOrFail($id);
		$radialista->update($request->all());
		\Session::flash('mensagem_sucesso', 'Radialista atualizado com sucesso!');
		return Redirect::to('radialistas/edit/'.$radialista->id);
	}
	//deletar um programa especifico 
	public function deleteDestroy($id){
		$radialista = Radialista::findOrFail($id);
		$radialista->delete();
		\Session::flash('mensagem_sucesso', 'Radialista deletado com sucesso!');
		return Redirect::to('radialistas');
	}	*/
	
	public function missingMethod($params = array()){
		return view('erro404');
	}
	
}
