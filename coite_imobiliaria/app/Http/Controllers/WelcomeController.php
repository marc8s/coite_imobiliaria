<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Imovel;

class WelcomeController extends Controller
{
    public function getIndex()
    {
        $imoveis = Imovel::get();
        return view('welcome', [        	
            'imoveis' => $imoveis          
            
        ]);
    }
    public function missingMethod($params = array()){
		return view('erro404');
	}
}
