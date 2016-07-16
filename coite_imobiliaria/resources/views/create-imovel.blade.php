@extends('layouts.app')

@section('content')

<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.1.min.js"></script>  
<script type="text/javascript">  
$(document).ready(function(){  
 
    var novo_imovel_tipo = '<label style="display: block">Tipo do Imóvel: <input type="text" id="imovel_tipo" name="imovel_tipo"/> <a href="#" class="remove">X</a></label>'; 
    var novo_negociacao = '<label style="display: block">Tipo do Negócio: <input type="text" id="negociacao" name="negociacao"/> <a href="#" class="remove">X</a></label>';  
    var novo_construtora = '<label style="display: block">Construtora: <input type="text" id="construtora" name="construtora"/> <a href="#" class="remove">X</a></label>';  
    var novo_cidade = '<label style="display: block">Cidade: <input type="text" id="cidade" name="cidade"/> <a href="#" class="remove">X</a></label>'; 
    var novo_bairro = '<label style="display: block">Bairro: <input type="text" id="bairro" name="bairro"/> <a href="#" class="remove">X</a></label>'; 
     
    $("input[name='novo_tipo_imovel']").click(function( e ){  
        $('#inputs_adicionais_tipo_imovel').append( novo_imovel_tipo );  
    });  
    $("input[name='novo_tipo_negociacao']").click(function( e ){  
        $('#inputs_adicionais_negociacoes').append( novo_negociacao );  
    }); 
    $("input[name='novo_construtora']").click(function( e ){  
        $('#inputs_adicionais_construtora').append( novo_construtora );  
    }); 
    $("input[name='novo_cidade']").click(function( e ){  
        $('#inputs_adicionais_cidade').append( novo_cidade );  
    }); 
    $("input[name='novo_bairro']").click(function( e ){  
        $('#inputs_adicionais_bairro').append( novo_bairro );  
    });  
 
    $('#inputs_adicionais_tipo_imovel').delegate('a','click',function( e ){  
        e.preventDefault();  
        $( this ).parent('label').remove();  
    }); 
    $('#inputs_adicionais_negociacoes').delegate('a','click',function( e ){  
        e.preventDefault();  
        $( this ).parent('label').remove();  
    });  
    $('#inputs_adicionais_construtora').delegate('a','click',function( e ){  
        e.preventDefault();  
        $( this ).parent('label').remove();  
    }); 
    $('#inputs_adicionais_cidade').delegate('a','click',function( e ){  
        e.preventDefault();  
        $( this ).parent('label').remove();  
    });  
    $('#inputs_adicionais_bairro').delegate('a','click',function( e ){  
        e.preventDefault();  
        $( this ).parent('label').remove();  
    });  
 
});  
</script>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
					Imóvel 					
				</div>				
                <div class="panel-body">
					@if(Session::has('mensagem_sucesso'))
						<div class="alert alert-sucess">{{Session::get('mensagem_sucesso')}}</div>
					@endif
					
					@if(Request::is("imovel/edit/*"))
						{{Form::model($imovel, [ 'method' => 'PATCH', 'url' => 'imovel/update/'.$imovel->id])}}
					@else
						{{ Form::open(['url' => 'imovel/store']) }}
					@endif						
					<!--{{ Form::open(['url' => 'imovel/store']) }}-->
					
						{{Form::label('titulo', 'Titulo')}}
						{{Form::input('text', 'titulo', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Titulo do Imóvel'])}}

						{{Form::label('area', 'Área')}}
						{{Form::input('float', 'area', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Área do Imóvel'])}}

						{{Form::label('quartos', 'Quartos')}}
						{{Form::input('integer', 'quartos', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Número de quartos'])}}

						{{Form::label('salas', 'Salas')}}
						{{Form::input('integer', 'salas', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Número de salas'])}}

						{{Form::label('banheiros', 'Banheiros')}}
						{{Form::input('integer', 'banheiros', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Número de banheiros'])}}

						{{Form::label('cozinhas', 'Cozinhas')}}
						{{Form::input('integer', 'cozinhas', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Número de cozinhas'])}}

						{{Form::label('garagem', 'Garagem')}}
						{{Form::input('integer', 'garagem', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Número de garagens'])}}

						{{Form::label('vagas_de_estacionamento', 'Vagas de estacionamento')}}
						{{Form::input('integer', 'vagas_de_estacionamento', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Número de vagas de estacionamento'])}}

						{{Form::label('mezanino', 'Mezanino')}}						
						{{Form::select('mezanino', ['0' => 'Não', '1' => 'Sim'], '0')}}

						{{Form::label('recepcao', 'Recepção')}}
						{{Form::select('recepcao', ['0' => 'Não', '1' => 'Sim'], '0')}}


						{{Form::label('descricao', 'Descrição')}}
						{{Form::input('longtext', 'descricao', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Descricao do Imóvel'])}}

						<!-- CAMPO TIPO IMOVEL -->
						{{Form::label('imovel_tipo', 'Tipo do Imóvel')}}
						{{ Form::select('imovel_tipo', $imovel_tipos,null, ['placeholder' => 'Selecione o tipo...']) }}
						{{Form::input('button', 'novo_tipo_imovel', 'Adicionar Tipo', ['class' => 'btn'])}}	
			        	<fieldset id="inputs_adicionais_tipo_imovel" style="border: none">  
			        	</fieldset>	
			        	
			        	<!-- CAMPO TIPO NEGOCIACAO -->
						{{Form::label('negociacao', 'Tipo do Negócio')}}
						{{ Form::select('negociacao', $negociacoes,null, ['placeholder' => 'Selecione o tipo...']) }}
						{{Form::input('button', 'novo_tipo_negociacao', 'Adicionar Tipo', ['class' => 'btn'])}}	
			        	<fieldset id="inputs_adicionais_negociacoes" style="border: none">  
			        	</fieldset>					
						
						<!-- CAMPO CONSTRUTORA -->
						{{Form::label('construtora', 'Construtora')}}
						{{ Form::select('construtora', $construtoras,null, ['placeholder' => 'Selecione a construtora...']) }}
						{{Form::input('button', 'novo_construtora', 'Adicionar Construtora', ['class' => 'btn'])}}	
			        	<fieldset id="inputs_adicionais_construtora" style="border: none">  
			        	</fieldset>	

			        	<!-- CAMPO CIDADE -->
						{{Form::label('cidade', 'Cidade')}}
						{{ Form::select('cidade', $cidades,null, ['placeholder' => 'Selecione a cidade...']) }}
						{{Form::input('button', 'novo_cidade', 'Adicionar Cidade', ['class' => 'btn'])}}	
			        	<fieldset id="inputs_adicionais_cidade" style="border: none">  
			        	</fieldset>	

			        	<!-- CAMPO BAIRRO -->
						{{Form::label('bairro', 'Bairro')}}
						{{ Form::select('bairro', $bairros,null, ['placeholder' => 'Selecione o bairro...']) }}
						{{Form::input('button', 'novo_bairro', 'Adicionar Bairro', ['class' => 'btn'])}}	
			        	<fieldset id="inputs_adicionais_bairro" style="border: none">  
			        	</fieldset>	
																
						{{Form::submit('salvar', ['class' => 'btn btn-primary'] )}}
							
					{{ Form::close() }}
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection