<?php

use Illuminate\Database\Seeder;

class Imovel_tipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imovel_tipo = [
        	0 => [
        		'tipo_imovel' => 'Casa',        		
        	],
        	1 => [
        		'tipo_imovel' => 'Apartamento',        		
        	],
        	2 => [
        		'tipo_imovel' => 'Ponto Comercial',        		
        	]
        ];
        DB::table('imovel_tipo')->insert($imovel_tipo);	
    }

}
