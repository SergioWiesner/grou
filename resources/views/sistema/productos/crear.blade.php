@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Crear productos</h1>
        <form action="{{route('productos.store')}}" method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="inputCity">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlTextarea1">Descripcion</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion"
                              rows="3"></textarea>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Crear producto">
        </form>
    </div>
@endsection
