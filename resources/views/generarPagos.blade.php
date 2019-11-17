@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Oferta {{$ofertas['productos']['nombre']}} - {{$ofertas['cantidad']}}</h1>
        <p><strong>Cantidad: </strong>{{$ofertas['cantidad']}}</p>
        <p><strong>Estado: </strong>{{$ofertas['estado']}}</p>
        <p><strong>Valor: </strong>${{number_format($ofertas['valor'])}}</p>
        <p><strong>Oferta creada el: </strong>{{$ofertas['created_at']}}</p>
        <p><strong>Producto: </strong>{{$ofertas['productos']['nombre']}}</p>
        <p><strong>Descripción: </strong>{{$ofertas['productos']['descripcion']}}</p>
        <p><strong>Cantidad: </strong>{{$ofertas['cantidad']}}</p>
        <a href="{{route('')}}" class="btn btn-primary btn-block">Pagar</a>
    </div>
@endsection
