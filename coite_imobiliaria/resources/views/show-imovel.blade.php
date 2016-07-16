@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"> 
                    {{ $imovel->titulo}}                    
                    
                    {{ Form::open(['method'=>'GET', 'url' => 'imovel/edit/'.$imovel-> id, 'style' => 'display: inline;']) }}
                        <button type="submit" class="btn btn-sm">Editar</button>       
                    {{ Form::close() }} 
 
                    {{ Form::open(['method'=>'DELETE', 'url' => 'imovel/destroy/'.$imovel-> id, 'style' => 'display: inline;']) }}
                        <button type="submit" class="btn btn-sm">Excluir</button>       
                    {{ Form::close() }}
                </div>

                <div class="panel-body">
                    {{ $imovel->descricao}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
