@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                @if(Session::has('mensagem_sucesso'))
                    <div class="alert alert-sucess">{{Session::get('mensagem_sucesso')}}</div>
                @endif
                <div class="panel-heading">
                    Área Administrativa
                </div>
                <div class="panel-body">
                    <a href="imovel/create">Adicionar Imóvel</a></br>
                    <a href="#">Adicionar Corretor</a></br>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
