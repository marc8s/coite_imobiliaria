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

						{{Form::label('titulo', 'Titulo')}}
						{{Form::input('text', 'titulo', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Titulo do Imóvel'])}}
																
						{{Form::submit('salvar', ['class' => 'btn btn-primary'] )}}
							
						{{ Form::close() }}
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection