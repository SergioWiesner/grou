@extends('layouts.app')
@section('content')
    <div class="container">
        @if(count($ofertas) > 0)
            <h1>Historial de ofertas</h1>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Valor</th>
                            <th scope="col">fecha de creación</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @for($a = 0; $a < count($ofertas); $a++)
                            <tr>
                                <th scope="row">{{$a}}</th>
                                <td>@if($ofertas[$a]['estado']== 1)
                                        activo
                                    @else
                                        desactivado
                                    @endif
                                </td>
                                <td>{{$ofertas[$a]['productos']['nombre']}}</td>
                                <td>{{$ofertas[$a]['cantidad']}}</td>
                                <td>{{number_format($ofertas[$a]['valor'])}}</td>
                                <td>{{$ofertas[$a]['created_at']}}</td>
                                <td><a href="{{route('ofertas.show', $ofertas[$a]['productos']['id'])}}">Ver</a></td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <h1>No tiene ofertas activas</h1>
            <a href="{{route('ofertas.create')}}">Crear una oferta</a>
        @endif
    </div>
@endsection
