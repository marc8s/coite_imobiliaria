<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ImovelController extends Controller
{
   /* public function getIndex(){
		$radialistas = Radialista::get();			
		return view('indexRadialistas', compact('radialistas'));
	}
	*/	
	public function getCreate(){
		return view('create-imovel');
	}
	//armazena o radialista
	/*public function postStore(Request $request){
		$radialista = new Radialista();
		$radialista = $radialista -> create($request->all());		
		\Session::flash('mensagem_sucesso', 'Radialista cadastrado com sucesso!');		
		return Redirect::to('radialistas/create');
	}
	
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
