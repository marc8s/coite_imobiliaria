@extends('layouts.app')

@section('content')
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
						{{ Form::select('imovel_tipo', $imovel_tipos) }}
																
						{{Form::submit('salvar', ['class' => 'btn btn-primary'] )}}
							
					{{ Form::close() }}
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection