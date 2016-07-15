<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Imovel;
use App\Imovel_tipo;

class WelcomeController extends Controller
{
    public function getIndex()
    {
        $imoveis = Imovel::get();
        $imovel_tipos = Imovel_tipo::lists('tipo_imovel', 'id');
        return view('welcome', [        	
            'imoveis' => $imoveis,
            'imovel_tipos' => $imovel_tipos          
            
        ]);
    }
    public function missingMethod($params = array()){
		return view('erro404');
	}
}
