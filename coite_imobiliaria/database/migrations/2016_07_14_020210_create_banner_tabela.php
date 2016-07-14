<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerTabela extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            
            $table->boolean('atualizado');
            $table->string('ban_nome');
            $table->string('ban_arquivo');
            $table->string('ban_link');
            $table->integer('banner_tipo_id');
            $table->boolean('ban_ativo');
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
        Schema::dropIfExists('banner');
    }
}
