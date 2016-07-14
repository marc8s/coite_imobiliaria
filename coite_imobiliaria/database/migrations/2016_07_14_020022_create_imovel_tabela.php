<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelTabela extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovel', function (Blueprint $table) {
            $table->float('area');
            $table->integer('banheiros');
            $table->integer('cozinhas');
            $table->longText('descricao');
            $table->integer('garagem');
            $table->increments('id');
            $table->integer('id_bairro');
            $table->integer('id_construtora');
            $table->integer('id_negociacao');
            $table->integer('id_tipo_imovel');
            $table->integer('mezanino');
            $table->integer('quartos');     
            $table->integer('recepcao'); 
            $table->integer('salas');      
            $table->string('titulo');
            $table->float('valor'); 
            $table->integer('vagas_de_estacionamento');           
            
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imovel');
    }
}
