@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"> {{ $imovel->titulo}}</div>

                <div class="panel-body">
                    {{ $imovel->descricao}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
