@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Encontre seu imóvel
                    <!--<a href="imovel/busca/1">Tipo</a> -->
                    {{ Form::open(['url' => 'imovel/busca']) }}
                        {{ Form::select('imovel_tipo', $imovel_tipos,null, ['placeholder' => 'Tipo']) }}
                        {{Form::submit('buscar', ['class' => 'btn btn-primary'] )}}                            
                    {{ Form::close() }}
                </div>

                <div class="panel-body">
                    @foreach($imoveis as $imovel) 
                        <a href="imovel/show/{{ $imovel-> id }}">{{$imovel -> titulo }}</a> </br>             
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
