<?php

use Illuminate\Database\Seeder;

class ImovelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imoveis = [
			0 => [
				'area' => '500',
				'banheiros'=> '2',
				'cozinhas' => '2',				
				'descricao' => 'CASA EM CONDOMINIO 2/4 SENDO 02 SUÍTES. QUARTO PRINCIPAL COM CLOSET. POSSUI ARMÁRIOS NA SALA, COZINHA, CORTINAS, LUMINARIAS, ÁREA DE SERVIÇO TERRENO PARA AMPLIAÇÃO',				
				'garagem' => '2',
				'id_bairro' => '2',
				'id_cidade' => '2',
				'id_construtora' => '2',
				'id_negociacao' => '2',
				'id_tipo_imovel' => '1',
				'id_views' => '2',				
				'mezanino' => '0',
				'quartos' => '2',
				'recepcao' => '0',
				'salas' => '2',
				'titulo' => 'Casa em condominio',
				'vagas_de_estacionamento' => '2',
				'valor_aluguel' => '100.00',
				'valor_venda' => '100000.00'
			],
			1 => [
				
				'area' => '500',
				'banheiros'=> '2',
				'cozinhas' => '2',				
				'descricao' => 'ÓTIMO APARTAMENTO; 2 QUARTOS; SALA; COZINHA; BANHEIRO SOCIAL; ÁREA DE SERVIÇO; PORTARIA 24 HORAS; ÁREA DE LAZER; ÓTIMA LOCALIZAÇÃO; RUA MUITO TRANQUILA; LOCAL DE FÁCIL ACESSO',				
				'garagem' => '0',
				'id_bairro' => '2',
				'id_cidade' => '2',
				'id_construtora' => '2',
				'id_negociacao' => '2',
				'id_tipo_imovel' => '2',
				'id_views' => '2',				
				'mezanino' => '0',
				'quartos' => '2',
				'recepcao' => '1',
				'salas' => '2',
				'titulo' => 'Apartamento',
				'vagas_de_estacionamento' => '2',
				'valor_aluguel' => '200.00',
				'valor_venda' => '200000.00'
			],
			
						
		];
        DB::table('imovel')->insert($imoveis);	
    }
}
