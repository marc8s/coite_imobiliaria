@extends('layouts.app')

@section('content')

<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.1.min.js"></script>  
<script type="text/javascript">  
$(document).ready(function(){  
 
    var input = '<label style="display: block">Tipo do Imóvel: <input type="text" name="imovel_tipo" /> <a href="#" class="remove">X</a></label>';  
    $("input[name='novo_tipo']").click(function( e ){  
        $('#inputs_adicionais_tipo_imovel').append( input );  
    });  
 
    $('#inputs_adicionais_tipo_imovel').delegate('a','click',function( e ){  
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
					Adição de Imóvel 					
				</div>				
                <div class="panel-body">
					@if(Session::has('mensagem_sucesso'))
						<div class="alert alert-sucess">{{Session::get('mensagem_sucesso')}}</div>
					@endif
										
					{{ Form::open(['url' => 'imovel/store']) }}
					
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

						{{Form::label('imovel_tipo', 'Tipo do Imóvel')}}
						{{ Form::select('imovel_tipo', $imovel_tipos,null, ['placeholder' => 'Selecione o tipo...']) }}

						{{Form::input('button', 'novo_tipo', 'Adicionar Tipo', ['class' => 'btn'])}}										
			              
			        	<fieldset id="inputs_adicionais_tipo_imovel" style="border: none">  
			        	</fieldset>				
						
																
						{{Form::submit('salvar', ['class' => 'btn btn-primary'] )}}
							
					{{ Form::close() }}
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection