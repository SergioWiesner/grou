@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Historial de compras</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Vendedor</th>
                <th scope="col">Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Valor</th>
            </tr>
            </thead>
            <tbody>
            @for($a = 0; $a < count($dato); $a++)
                <tr>
                    <th scope="row">{{$a}}</th>
                    <td>{{$dato[$a]['usuarios']['name']}}</td>
                    <td>{{$dato[$a]['ofertas']['productos']['nombre']}}</td>
                    <td>{{$dato[$a]['ofertas']['cantidad']}}</td>
                    <td>${{number_format($dato[$a]['ofertas']['valor'])}}</td>
                </tr>
            @endfor
            </tbody>
        </table>
    </div>
@endsection
