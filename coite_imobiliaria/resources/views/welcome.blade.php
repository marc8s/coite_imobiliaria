@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Encontre seu imóvel</div>

                <div class="panel-body">
                    @foreach($imoveis as $imovel) 
                        {{$imovel -> titulo }} </br>             
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
