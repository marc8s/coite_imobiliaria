<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerTipoTabela extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_tipo', function (Blueprint $table) {
            
            $table->boolean('atualizado');
            $table->string('bto_nome');
            $table->boolean('cadastrado');
            $table->boolean('excluido');
            $table->increments('id');   
            
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
        Schema::dropIfExists('banner_tipo');
    }
}
